
var SYSTEM = require("modules/system"),
    FILE = require("modules/file"),
    UTIL = require("modules/util"),
    Q = require("modules/q");

var tasks = [],
    basePath = FILE.dirname(FILE.dirname(FILE.dirname(module.id)));

exports.main = function(env)
{
    var handleError = function(err)
    {
        console.error("Error calling task", err);
        throw new Error("Error calling task: " + err);
    };
    function traverseTasks()
    {
        var done,
            ourTasks = [].concat(tasks);
        tasks = [];
        UTIL.forEach(ourTasks, function(task)
        {
            done = Q.when(done, function()
            {
                return task();
            }, handleError);
        });
        Q.when(done, function()
        {
            if (tasks.length > 0) {
                traverseTasks();
            } else {
                module.print("\0green(" + "Done" + "\0)\n");
            }
        }, handleError);
    }
    traverseTasks();
}

// Import files for each package

UTIL.forEach([
    {
        alias: "zf-1",
        mode: "replace",
        exclude: [
            "/ZendFramework-1.11.7-minimal"
        ]
    },
    {
        alias: "zf-1-quickstart",
        mode: "merge",
        targetPath: basePath + "/examples/ZendFramework-1",
        exclude: [
            "/ZendFrameworkQuickstart-*"
        ]
    }
], function(pkg)
{
    tasks.push(function()
    {
        var result = Q.defer();

        var sourcePath = require.pkg(module.mappings[pkg.alias]).id(null, true),
            targetPath = pkg.targetPath || basePath + "/vendor/" + pkg.alias;

        if (pkg.mode === "merge") {
            if (!FILE.exists(targetPath)) {
                pkg.mode = "replace";
            } else {
                // TODO: Implement merging
                module.print("Skipping merge task for '" + targetPath + "'\n");
                result.resolve();
            }
        }

        if (pkg.mode === "replace") {

            module.print("Replacing '" + targetPath + "' with '" + sourcePath + "'\n");

            SYSTEM.exec("rm -Rf " + targetPath, function(stdout, stderr)
            {
                FILE.mkdirs(targetPath, 0775);
    
                SYSTEM.exec("cp -Rf " + sourcePath + "/* " + targetPath + "/", function(stdout, stderr)
                {
                    if (stderr) {
                        result.reject(stderr);
                    } else {
                        if (pkg.exclude && pkg.exclude.length > 0) {
                            UTIL.forEach(pkg.exclude, function(path)
                            {
                                tasks.push(function()
                                {
                                    module.print("Removing: " + targetPath + path + "\n");
                                    var result = Q.defer();
                                    SYSTEM.exec("rm -Rf " + targetPath + path, function(stdout, stderr)
                                    {
                                        if (stderr) {
                                            result.reject(stderr);
                                        } else {
                                            result.resolve();
                                        }
                                    });
                                    return result.promise;
                                });                            
                            });
                        }
                        result.resolve();
                    }
                });
            });
        }

        return result.promise;
    });
});
