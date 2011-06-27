PINF Workspace
==============

This directory contains everything needed to maintain this project using the
[PINF toolchain system](http://www.christophdorn.com/Research/#pinf).

To use *PINF* you must have the [PINF JavaScript Loader](https://github.com/pinf/loader-js) 
[installed](https://github.com/pinf/loader-js/blob/master/docs/Setup.md).

INFO: *PINF* currently works only on *UNIX* systems that support [node.js](http://nodejs.org/).


Commands
========

Update vendor code
------------------

    commonjs -v --script update-vendors ./

NOTE: To update vendor download links update `./program.packages.json`. If the structure of the
download has changed also update `./scripts/update-vendors.js`.


Notes
=====

Related to automatic patching:

  * http://stackoverflow.com/questions/2021405/how-do-i-count-the-number-of-git-commits-affecting-a-given-subtree
  
      // all commits affecting a certain directory after a given commit
      git log ab77713f3975c7132d3ecac54cef63540fa7dda8.. -p -- examples/

  * http://www.kernel.org/pub/software/scm/git/docs/git-log.html
