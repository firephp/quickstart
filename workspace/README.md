PINF Workspace
==============

This directory contains everything needed to maintain this project using the
[PINF toolchain system](http://www.christophdorn.com/Research/#pinf).

To use *PINF* you must have the [PINF JavaScript Loader](https://github.com/pinf/loader-js) 
[installed](https://github.com/pinf/loader-js/blob/master/docs/Setup.md).

INFO: *PINF* currently works only on *UNIX* systems or more specifically any system that supports 
[node.js](http://nodejs.org/).


Commands
========

Update vendor code
------------------

    commonjs -v --script update-vendors ./

NOTE: To update vendor download links update `./program.packages.json`. If the structure of the
download has changed also update `./scripts/update-vendors.js`.
