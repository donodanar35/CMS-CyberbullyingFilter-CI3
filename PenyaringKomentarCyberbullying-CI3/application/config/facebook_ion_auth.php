<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Settings.
| -------------------------------------------------------------------------
*/
$config['app_id']       = '428404181510096';       // Your app id
$config['app_secret']   = 'c484994ae46d25ba4b6ff05bb1ea7dd1';       // Your app secret key
$config['scope']        = 'email';  // custom permissions check - http://developers.facebook.com/docs/reference/login/#permissions
$config['fields']       = 'id, first_name, last_name, email'; // fields to retrieve; if set to '', default is "id,first_name,last_name"
$config['redirect_uri'] = '';       // url to redirect back from facebook. If set to '', site_url('') will be used
