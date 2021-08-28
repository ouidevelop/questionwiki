<?php
# This file was automatically generated by the MediaWiki 1.35.1
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = getenv( 'WG_SITE_NAME' );
if ( empty( $wgSitename ) ) {
    throw new RuntimeException( 'WG_SITE_NAME env variable not set.' );
}

$wgMetaNamespace = getenv( 'WG_META_NAMESPACE' );
if ( empty( $wgMetaNamespace ) ) {
    throw new RuntimeException( 'WG_META_NAMESPACE env variable not set.' );
}

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";

## The protocol and server name to use in fully-qualified URLs
$wgServer = getenv( 'WG_SERVER' );

if ( empty( $wgServer ) ) {
    throw new RuntimeException( 'WG_SERVER env variable not set.' );
}

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
// $wgLogos = [ '1x' => "$wgResourceBasePath/resources/assets/wiki.png" ];

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "mike@openquestions.wiki";
$wgPasswordSender = "mike@openquestions.wiki";
$emailPassword = getenv( 'EMAIL_PASSWORD' );
if ( empty( $emailPassword ) ) {
    throw new RuntimeException( 'EMAIL_PASSWORD env variable not set.' );
}
$wgSMTP = [
    'host' => 'ssl://smtp.gmail.com', // hostname of the email server
    'IDHost' => 'gmail.com',
    'port' => 465,
    'username' => 'mike@openquestions.wiki', // user of the email account
    'password' => $emailPassword, // app password of the email account
    'auth' => true
];

$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = getenv( 'WG_DB_SERVER' );
if ( empty( $wgDBserver ) ) {
    throw new RuntimeException( 'WG_DB_SERVER env variable not set.' );
}

$wgDBname = getenv( 'WG_DB_NAME' );
if ( empty( $wgDBname ) ) {
    throw new RuntimeException( 'WG_DB_NAME env variable not set.' );
}

$wgDBuser = getenv( 'WG_DB_USER' );
if ( empty( $wgDBuser ) ) {
    throw new RuntimeException( 'WG_DB_USER env variable not set.' );
}

$wgDBpassword = getenv( 'WG_DB_PASSWORD' );
if ( empty( $wgDBpassword ) ) {
    throw new RuntimeException( 'WG_DB_PASSWORD env variable not set.' );
}

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Shared database table
# This has no effect unless $wgSharedDB is also set.
$wgSharedTables[] = "actor";

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = false;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale. This should ideally be set to an English
## language locale so that the behaviour of C library functions will
## be consistent with typical installations. Use $wgLanguageCode to
## localise the wiki.
$wgShellLocale = "C.UTF-8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "en";

$wgSecretKey = getenv( 'WG_SECRET_KEY' );

if ( empty( $wgSecretKey ) ) {
    throw new RuntimeException( 'WG_SECRET_KEY env variable not set.' );
}
# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = getenv( 'UPGRADE_KEY' );

if ( empty( $wgUpgradeKey ) ) {
    throw new RuntimeException( 'UPGRADE_KEY env variable not set.' );
}

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector";
$wgVectorResponsive = true;
$wgVectorDefaultSkinVersion = '2';

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );


# Enabled extensions. Most of the extensions are enabled by adding
# wfLoadExtension( 'ExtensionName' );
# to LocalSettings.php. Check specific extension documentation for more details.
# The following extensions were automatically enabled:
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'Cite' );
wfLoadExtension( 'CiteThisPage' );
wfLoadExtension( 'CodeEditor' );
wfLoadExtension( 'ConfirmEdit' );
wfLoadExtension( 'Echo' );
wfLoadExtension( 'Flow' );
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'ImageMap' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'LocalisationUpdate' );
wfLoadExtension( 'MultimediaViewer' );
wfLoadExtension( 'Nuke' );
wfLoadExtension( 'OATHAuth' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'Poem' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'ReplaceText' );
wfLoadExtension( 'Scribunto' );
wfLoadExtension( 'SecureLinkFixer' );
wfLoadExtension( 'SpamBlacklist' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'TemplateData' );
wfLoadExtension( 'TextExtracts' );
wfLoadExtension( 'TitleBlacklist' );
wfLoadExtension( 'UserMerge' );
wfLoadExtension( 'VisualEditor' );
wfLoadExtension( 'WikiEditor' );



# End of automatically generated settings.
# Add more configuration options below.

# todo: why do we have these settings for flow? what do they do?
$wgNamespaceContentModels[NS_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_USER_TALK] = 'flow-board';

$wgShowExceptionDetails = true;

// restrict editing
$wgGroupPermissions['user']['edit'] = false;
$wgGroupPermissions['*']['createpage'] = false;

// By default nobody can use this function, enable for bureaucrat?
$wgGroupPermissions['bureaucrat']['usermerge'] = true;

// for debugging:
// if ($wgSitename == 'qw-staging') {
error_reporting( -1 );
ini_set( 'display_errors', 1 );
$wgShowSQLErrors = true;
$wgShowDBErrorBacktrace = true;
$wgDebugLogFile = '/app/debug.log';
$wgDebugDumpSql = true;
// }

$wgDebugToolbar = true;

$wgCacheDirectory = "/tmp";
$wgGroupPermissions['trustworthy'] = $wgGroupPermissions['autoconfirmed'];
$wgEmailConfirmToEdit = true;
$wgMainCacheType = CACHE_ACCEL;
wfLoadExtension( 'StopForumSpam' );
$wgSFSIPListLocation = 'listed_ip_30.txt';


wfLoadExtensions([ 'ConfirmEdit', 'ConfirmEdit/hCaptcha' ]);
$wgHCaptchaSiteKey = getenv( 'WG_HCAPTCHA_SITE_KEY' );
if ( empty( $wgHCaptchaSiteKey ) ) {
    throw new RuntimeException( 'WG_HCAPTCHA_SITE_KEY env variable not set.' );
}
$wgHCaptchaSecretKey = getenv( 'WG_HCAPTCHA_SECRET_KEY' );
if ( empty( $wgHCaptchaSecretKey ) ) {
    throw new RuntimeException( 'WG_HCAPTCHA_SECRET_KEY env variable not set.' );
}