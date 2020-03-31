<?php
function __autoload($class)
{
if (file_exists(DIRECTOR_SITE . SLASH . 'util' . SLASH . strtolower($class) . '.php'))
{
require_once DIRECTOR_SITE . SLASH . 'util' . SLASH . strtolower($class) . '.php';
}
else if (file_exists(DIRECTOR_SITE . SLASH . 'model' . SLASH . strtolower($class) . '.php'))
{
require_once DIRECTOR_SITE . SLASH . 'model' . SLASH . strtolower($class) . '.php';
}
else if (file_exists(DIRECTOR_SITE . SLASH . 'controller' . SLASH . strtolower($class) . '.php'))
{
require_once DIRECTOR_SITE . SLASH . 'controller'  . SLASH . strtolower($class) . '.php';
}
else if (file_exists(DIRECTOR_SITE . SLASH . 'view' . SLASH . strtolower($class) . '.php'))
{
require_once DIRECTOR_SITE . SLASH . 'view'  . SLASH . strtolower($class) . '.php';
}
}
?>