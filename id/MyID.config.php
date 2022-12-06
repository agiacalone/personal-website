<?php
// IF YOU HAVE NOT DONE SO, PLEASE READ THE README FILE FOR DIRECTIONS!!!

/**
 * phpMyID - A standalone, single user, OpenID Identity Provider
 *
 * @package phpMyID
 * @author CJ Niemira <siege (at) siege (dot) org>
 * @copyright 2006-2008
 * @license http://www.gnu.org/licenses/gpl.html GNU Public License
 * @url http://siege.org/projects/phpMyID
 * @version 2
 */


/**
 * User profile
 * @name $profile
 * @global array $GLOBALS['profile']
 */
$GLOBALS['profile'] = array(
	# Basic Config - Required
	'auth_username'	=> 	'anthonyg',
	'auth_password' =>	'eee0d1d8e04d1c20289512fe2b6486a3',

	# Optional Config - Please see README before setting these
#	'microid'	=>	array('mailto:user@site', 'http://delegator'),
#	'pavatar'	=>	'http://your.site.com/path/pavatar.img',

	# Advanced Config - Please see README before setting these
#	'allow_gmp'	=>	false,
#	'allow_test'	=> 	false,
#	'allow_suhosin'	=>	false,
	'auth_realm'	=>	'sdf.org',
#	'force_bigmath'	=>	false,
#	'idp_url'	=>	'http://your.site.com/path/MyID.config.php',
#	'lifetime'	=>	1440,
#	'paranoid'	=>	false, # EXPERIMENTAL

	# Debug Config - Please see README before setting these
#	'debug'		=>	false,
#	'logfile'	=>	'/tmp/phpMyID.debug.log',
);

/**
 * Simple Registration Extension
 * @name $sreg
 * @global array $GLOBALS['sreg']
 */
$GLOBALS['sreg'] = array (
	'nickname'		=> 'anthonyg',
	'email'			=> 'anthonyg@sdf.org',
	'fullname'		=> 'Anthony Giacalone',
	'dob'			=> '1979-08-07',
	'gender'		=> 'M',
	'postcode'		=> '92867',
	'country'		=> 'US',
	'language'		=> 'en',
	'timezone'		=> 'America/Los_Angeles'
);

require('MyID.php');
