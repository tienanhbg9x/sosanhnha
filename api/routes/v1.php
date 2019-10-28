<?php
/**
 * Created by PhpStorm.
 * User: minhngoc
 * Date: 21/10/2019
 * Time: 14:19
 */

$router->get('/',function(){
    return ['version'=>'api v1'];
});

$router->get('test','TestController@index');

$router->post('login','AuthController@login');
$router->post('register','AuthController@register');