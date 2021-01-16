<?php
// Load config
require_once 'config/config.php';

//load helper 

require_once 'helpers/url_helper.php';
require_once 'helpers/session.php';


//Load libraries
// require_once 'libraries/core.php';
// require_once 'libraries/controller.php';
// require_once 'libraries/database.php';

//autoload core libraries
spl_autoload_register(function($className)
{
  require_once 'libraries/' . $className . '.php';
});