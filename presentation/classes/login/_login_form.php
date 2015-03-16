<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class LoginForm {
    private $mUserName;
    private $mPassword;
    private $mRememberMe='off';
    public $mErrMsg='';
    public $mLinkToLogin;
    public $mLoginClass='';
    
    public function __construct() {
        $this->mLinkToLogin = Link::ToLogin();
        if(isset($_GET['nav']) && $_GET['nav']==='login')
        {
            // Login fail - Return error code
            if(isset($_GET['result']))
            {
                $this->mErrMsg=constant('LOGIN'.$_GET['result']);
                $this->mLoginClass='has-error';
                if($_GET['result'] == US_BLANK)
                {
                }
                else if($_GET['result'] == US_INVALID)
                {
                }
            }
            
            // Submit login
            if(isset($_GET['type']) && $_GET['type']==='login')
            {
                if(isset($_POST['us']) && trim($_POST['us']) != '')
                {
                    header('HTTP/1.1 302 Login');
                    header('Location: '.htmlspecialchars_decode(Link::ToLoginResult(LOGIN_SUCCESS)));
                }
                else{
                    header('HTTP/1.1 104 Invalid');
                    echo Link::ToLoginResult(US_INVALID);
                    header('Location: '.htmlspecialchars_decode(Link::ToLoginResult(US_INVALID)));
                }
            }
        }
    }
}