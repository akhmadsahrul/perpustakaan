<?php

    @$controller = $_GET['controllerName'];
    @$id         = $_GET['id'];

    @include "database.php";
    @include "helper.php";
    @include "../controller/$controller";


    //Auto Redirect Controller & Function With Params
    if (!function_exists(@$_GET['function'])) {

      
        $file     = @$_GET['controllerName'];
        $function = @$_GET['function'];
  
        @include "../resource/views/errors/error-controller.php";

      }else{

        @$_GET['function']($object = json_decode(json_encode($_REQUEST)), $id);

      }