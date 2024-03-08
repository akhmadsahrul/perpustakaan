<?php

/*
|--------------------------------------------------------------------------
| Routes WEB
|--------------------------------------------------------------------------
|
| Di sini anda bisa membangun url / rute anda sendiri
| untuk parameter gunakkan $, misal : 
| 
| Web::url('edit/users/$id','ControllerName@function');
| 
*/

Web::url('data-profil','UsersController@profil_users');