<?php

$wgRCShowWatchingUsers = true; // shows number of watchers in recent changes
// $wgAjaxUploadDestCheck = true; // AJAX check for file overwrite pre-upload

// certain aspects of the FodWikiSettings install require title=? in query string
$wgUsePathInfo = false;

$wgEnotifUserTalk      = true; # UPO
$wgEnotifWatchlist     = true; # UPO
$wgEmailAuthentication = true;

# MySQL specific settings
$wgDBprefix         = "";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 4.1/5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType    = CACHE_NONE;
$wgMemCachedServers = array();


## Disable all forms of MediaWiki caching
// TAKEN FROM: http://thinkhole.org/wp/2006/09/13/disabling-caching-in-mediawiki/
$wgMainCacheType = CACHE_NONE;
$wgMessageCacheType = CACHE_NONE;
$wgParserCacheType = CACHE_NONE;
//$wgEnableParserCache = false;
$wgCachePages = false;



## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads  = true;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# maximum size of an image that will generate a thumbnail. Not sure if larger images will be
# prevented from being uploaded. If the images already were uploaded, then this number is reduced
# the wiki will display "error creating thumbnail" in place of the thumbnail.
$wgMaxImageArea = "100000000";

// added this... was just allowing images without it...
$wgFileExtensions = array('png','gif','jpg','jpeg','mpp','pdf','tiff','bmp','docx', 'xlsx', 'pptx','ps','odt','ods','odp','odg','zip');
$wgStrictFileExtensions = false;

// remove "this file type may contain malicious code" warning
$wgTrustedMediaFormats[] = "application/vnd.openxmlformats-officedocument.wordprocessingml.document";
$wgTrustedMediaFormats[] = "application/vnd.openxmlformats-officedocument.presentationml.presentation";
$wgTrustedMediaFormats[] = "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet";

// to support local (UNC) links
$wgUrlProtocols[] = "file://";

// James Montalvo added this line, which is not normally present in LocalSettings.php.
// Removed from this list are "application/msword", "application/vnd.ms-powerpoint", "application/vnd.msexcel"
$wgMimeTypeBlacklist = array ( "text/html", "text/javascript", "text/x-javascript", "application/x-shellscript", "application/x-php", "text/x-php",
	"text/x-python", "text/x-perl", "text/x-bash", "text/x-sh", "text/x-csh", "text/scriptlet", "application/x-msdownload", "application/x-msmetafile",
	"application/x-opc+zip");

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons  = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## If you have the appropriate support software installed
## you can enable inline LaTeX equations:
$wgUseTeX           = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of ./languages/Language(.*).php
$wgLanguageCode = "en";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
$wgDefaultSkin = "vector";


# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = 'D:/Support/diffutils-3.3/bin/diff3.exe';
// $wgDiff3 = 'D:/inetpub/wwwroot/PHP/Wiki/bin/GnuWin32/bin/diff3.exe';


# Use external mime detector
// $wgMimeDetectorCommand = "C:/Program Files (x86)/GnuWin/bin/file.exe -bi";

# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
$wgResourceLoaderMaxQueryLength = -1;

# End of automatically generated settings.
# Add more configuration options below.

// allows users to remove the page title.
$wgRestrictDisplayTitle = false;

$wgUseRCPatrol = false;
$wgUseNPPatrol = false;


#
#	AUTH SETTINGS
#
// get authentication settings
FodWikiSettings::requireAuthSettings( $egFodWikiSettings_auth_type );


if ($egFodWikiSettings_auth_type != 'local_dev') {

	# any NDC
	require_once $GLOBALS['egFodWikiSettings_install_path'] . "/Includes/Auth.php";
	$wgAuth = new Auth_remoteuser();

}

if ( file_exists( 'd:\Support\php\uploadtemp' ) ) {

	// On FOD servers can't access the desired "C:\\Windows\TEMP" directory so
	// this location was setup.
	$wgTmpDirectory = 'd:\Support\php\uploadtemp';
}


// Enable subpages on Main namespace
$wgNamespacesWithSubpages[NS_MAIN] = true;

// I think this is for web api url caching
//$edgCacheTable = 'ed_url_cache';
//$edgCacheExpireTime = 0;

// opens external links in new window
$wgExternalLinkTarget = '_blank';

// added this line to allow linking. specifically to Imagery Online.
$wgAllowExternalImages = true;
$wgAllowImageTag = true;



//$wgDefaultUserOptions['useeditwarning'] = 1;
// disable page edit warning (edit warning affect Semantic Forms)
$wgVectorFeatures['editwarning']['global'] = false;

//$wgDefaultUserOptions['vector-collapsiblenav'] = 1;
	// 'collapsiblenav' => array( 'global' => true, 'user' => true ),
	// 'collapsibletabs' => array( 'global' => true, 'user' => false ),
	// 'editwarning' => array( 'global' => false, 'user' => true ),
	// 'expandablesearch' => array( 'global' => false, 'user' => false ),
	// 'footercleanup' => array( 'global' => false, 'user' => false ),
	// 'simplesearch' => array( 'global' => false, 'user' => true ),


$wgDefaultUserOptions['rememberpassword'] = 1;

// users watch pages by default (they can override in settings)
$wgDefaultUserOptions['watchdefault'] = 1;
$wgDefaultUserOptions['watchmoves'] = 1;
$wgDefaultUserOptions['watchdeletion'] = 1;

$wgEnableMWSuggest = true;

// fixes login issue for some users (login issue fixed in MW version 1.18.1 supposedly)
$wgDisableCookieCheck = true;

#Set Default Timezone
$wgLocaltimezone = "America/Chicago";
$oldtz = getenv("TZ");
putenv("TZ=$wgLocaltimezone");

$wgMaxUploadSize = 1024*1024*40;
//$wgUploadSizeWarning = 1024*1024*100;

// disallow "+" in file names since IIS can't handle it
$wgIllegalFileChars = ":+";

$wgMaxTocLevel = 3;

// Allow setting semantic properties in Talk namespace
$smwgNamespacesWithSemanticLinks[NS_TALK] = true;


// Increase from default setting for large form
// See https://www.mediawiki.org/wiki/Extension_talk:Semantic_Forms/Archive_April_to_June_2012#Error:_Backtrace_limit_exceeded_during_parsing
// If set to 10million, errors are seen when using Edit with form on mission pages like 41S
// ini_set( 'pcre.backtrack_limit', 10000000 ); //10million
ini_set( 'pcre.backtrack_limit', 1000000000 ); //1 billion

$wgMaxImageArea = 1.25e10; // Images on [[Snorkel]] fail without this
// $wgMemoryLimit = 500000000; //Default is 50M. This is 500M.

// SMW Settings Overrides:
$smwgQMaxSize = 5000;

$wgGroupPermissions['CX3'] = $wgGroupPermissions['user'];
$wgGroupPermissions['CX3']['viewpagescore'] = true;
$wgGroupPermissions['Beta-tester'] = $wgGroupPermissions['user'];
$wgGroupPermissions['Beta-tester']['viewpagescore'] = true;
$wgGroupPermissions['sysop']['mergehistory'] = true;

