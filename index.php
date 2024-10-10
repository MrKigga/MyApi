<?php
require_once('vendor/autoload.php');

use Hajiphp\Myapi\Api;

$class = new Api();

$class->index(array('hi' => 78));
