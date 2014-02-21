<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @file
 *
 * Configuration for ACL permissions
 *
 */
$config['permission'] = array(
	'service' => array(
		'view'			=> array('admin', 'member'),
		'add'			=> array('admin', 'member'),
		'edit'			=> array('admin', 'member'),
		'delete'	 	=> array('admin')
	)
);

/**
 * Some default roles
 */
//$config['roles'] = array('admin', 'teacher', 'student');
/* End of applications/config/acl.php */
