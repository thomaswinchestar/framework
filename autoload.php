<?php
spl_autoload_register(function($name){
    include("components/$name.php");
});