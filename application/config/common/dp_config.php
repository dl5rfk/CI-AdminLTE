<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
*/

// Possible hosts locally. You can add some if needed.
$config['host_dev'] = array('localhost:8080');
$host_port = (in_array($_SERVER['SERVER_PORT'], array('8080'), TRUE)) ? '8080' : '';

// Fill in the file of your project here when you develop locally.
$subdirectory = 'shoping';

// Fill in the domain name here when your project is online.
// Example : www.johndoe.com
//           johndoe.com
$host_prod = 'your_domain.tld';

// WARNING: Do not modify the lines below
$domain = (in_array($_SERVER['HTTP_HOST'], $config['host_dev'], TRUE)) ? $_SERVER['HTTP_HOST'] . '/' . $subdirectory : $host_prod . '/' . $subdirectory;
$config['base_url'] = ( ! empty($_SERVER['HTTPS'])) ? 'https://' . $domain : 'http://' . $domain;

log_message('info','DP_CONFIG: Setting DOMAIN to: '.$domain);
log_message('info','DP_CONFIG: Setting PORT to: '.$host_port);

/*
|--------------------------------------------------------------------------
| Index File
|--------------------------------------------------------------------------
|
*/
$config['index_page'] = '';

/*
|--------------------------------------------------------------------------
| Assets
|--------------------------------------------------------------------------
|
*/
$config['assets_dir']     = 'assets';
$config['frameworks_dir'] = $config['assets_dir'] . '/frameworks';
$config['plugins_dir']    = $config['assets_dir'] . '/plugins';

/*
|--------------------------------------------------------------------------
| Upload
|--------------------------------------------------------------------------
|
*/
$config['upload_dir']     = 'upload';
$config['avatar_dir']     = $config['upload_dir'] . '/avatar';


/*
|--------------------------------------------------------------------------
| YOUR OWN SETTINGS
|--------------------------------------------------------------------------
|
*/
$config['john']     = 'doe';
$config['foo']     = 'bar';
