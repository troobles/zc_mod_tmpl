zotcore-module-template
==============================

Basic Framework Module Template guides

Purpose is to maintain consistent coding, directory structures and implementations.
Contains Standardised "Starters" for Module Development.

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
* Directories: Settings | Views | Lib | Utilities | Assets | Vendors
* Files: plugin.php | loader.php | uninstall.php | index.php


UTILITIES:

Note: Version Control on the Utility Classes is Critical.


      
* Widgets - API
* Shortcodes - API 
* Dashboard - API 
* Settings - API 
* Meta Data - API
* Taxonomy - API
* Custom Object Types - API
* Roles & Capabilities - API
* Editor - API
* Admin Views - API
* Template Loader -  API

TODO: 

* Need a way to ensure that the Utility Classes in all Modules are easily updated from a central place.
* Need to address Form Builder Class - Front End: Access | Post | User | Comments | Email

