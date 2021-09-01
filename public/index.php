<pre>
<?php
include ('../helpers/router.php');

$router = new Router ();
$controller = $router->getController();
$exists=file_exists("../controller/".$controller.".php"); //built in php function, tells if there is a file or no. ..-string concatenation.

var_dump
($exists, $controller, $_POST, $_GET, $_SERVER);
?>
</pre>

