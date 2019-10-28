<?php
/**
 * Created by PhpStorm.
 * User: minhngoc
 * Date: 21/10/2019
 * Time: 16:50
 */

function createPassword($password){
    return password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
}

function createJwt($data,$key,$exp=3600){
    $time_now = time();
    $exp = $time_now + $exp;
    $data = [
        "data" => $data,
        "iat" => $time_now,
        "exp" => $exp
    ];
    $token = Firebase\JWT\JWT::encode($data, $key);
    return $token;
}