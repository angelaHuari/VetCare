<?php
// autoload.php
spl_autoload_register(function ($class_name) {
    include_once __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';
});
