<pre>
<?php
include ('../helpers/router.php');

$router = new Router ();
$controller = $router->getController();

var_dump
($controller, $_POST, $_GET, $_SERVER);
?>
</pre>

