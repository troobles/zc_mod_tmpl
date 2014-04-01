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
* Directories: Builders | 
* Directories: Assets | 
* Directories: Vendors |
* Files: plugin.php | loader.php | uninstall.php | index.php

BUILDERS:

BUILDERS are Parent/Factory Classes waiting to be extended.  

They can be found in their own repositories, there may be some cross-over between them in the examples.

Note: Version Control on the Builder Classes is Critical.

* Shortcodes - ZCAPI_SHORTCODES 
* Customizer - ZCAPI_SHORTCODES 
* Dashboard - ZCAPI_SHORTCODES  
* Settings - ZCAPI_SHORTCODES  
* Meta Data - ZCAPI_SHORTCODES 
* Taxonomy - ZCAPI_SHORTCODES 
* Custom Object Types - ZCAPI_SHORTCODES 
* Roles & Capabilities - ZCAPI_SHORTCODES 
* Editor - ZCAPI_SHORTCODES 
* Admin Views - ZCAPI_SHORTCODES 
* Template Loader -  ZCAPI_SHORTCODES 

BLUEPRINTS:

Blueprints are example classes to be customized as needed

* Widgets - API
* 
*
*
*


TODO: 

* Need a way to ensure that the Utility Classes in all Modules are easily updated from a central place.
* Need to address Form Builder Class - Front End: Access | Post | User | Comments | Email

