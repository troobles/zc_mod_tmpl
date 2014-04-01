zotcore-module-template
==============================

Basic Framework Module Template guides

Purpose is to maintain consistent coding, directory structures and implementations.
Contains Standardised "Starters" for Module Development.

CODE:

* Use WP coding standards where possible
* Use PHP documentation standards

KEY GOALS:

* Consistent Directory Structures
* Consistent registration and loading of scripts and assets
* Optimal use of built in wordpress core actions, filters and hooks
* Where possible maintain consistent html and css for all "VIEWS"
* Make sure each Module properly cleans up after itself!!
* If it can be written as a CLASS do so.  Functions should only exist for "VIEWS" or when a CLASS is overkill


PLUGIN: 

* Standardised Plugin Directory Structure
* Standardised readme.txt
* Standardised Plugin Header
* Standardised CONSTANTS "Path" and "URI" definitions
* Directories: Settings | Implementation of the Settings API ZCAPI_SETTINGS for the Plugin
* Directories: Views | Template Tags, Template Files and implementation of ZCAPI_TEMPLATE_LOADER
* Directories: Lib | 
* Directories: Assets | 
* Directories: Vendors |
* Files: plugin.php | loader.php | uninstall.php | index.php


