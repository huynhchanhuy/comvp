<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PasswordHasher
{
  public static function Hash($password, $withPrefix = true)
  {
    if ($withPrefix)
      $hashed_password = sha1(HASH_PREFIX . $password);
    else
      $hashed_password = sha1($password);

    return $hashed_password;
  }
}