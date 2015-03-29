<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class LoginForm {

    private $mUserName;
    private $mPassword;
    private $mRememberMe = 'off';
    public $mErrMsg = '';
    public $mLinkToLogin;
    public $mLoginClass = '';

    public function __construct() {
        $this->mLinkToLogin = Link::ToLogin();
        if (isset($_GET['nav']) && $_GET['nav'] === 'login') {
            // Login fail - Return error code
            if (isset($_GET['result'])) {
                $var = 'LOGIN' . $_GET['result'];
                if(!defined($var)){
                    # Redirect to 404
                    header('HTTP/1.1 404 Page Not Found');
                    header('Location: ' . Link::To404());
                }
                $this->mErrMsg = constant($var);
                $this->mLoginClass = 'has-error';
            }

            // Submit login
            if (isset($_GET['type']) && $_GET['type'] === 'login') {
                if (isset($_POST['us']) && trim($_POST['us']) != '') {
                    if (isset($_POST['pw']) && trim($_POST['pw']) != '') { 
                        if(isset($_POST['rmbme']))
                            $check = Authentication::IsValid($_POST['us'], $_POST['pw'],true);
                        else
                            $check = Authentication::IsValid($_POST['us'], $_POST['pw'],false);
                        switch ($check) {
                            case 0:
                                header('HTTP/1.1 302 Login Successs');
                                header('Location: ' . htmlspecialchars_decode(Link::ToLoginResult(LOGIN_SUCCESS)));
                                break;
                            case 2:
                                header('HTTP/1.1 104 Invalid Username');
                                header('Location: ' . htmlspecialchars_decode(Link::ToLoginResult(US_INVALID)));
                                break;
                            case 1:
                                header('HTTP/1.1 104 Invalid Password');
                                header('Location: ' . htmlspecialchars_decode(Link::ToLoginResult(PASSWD_INVALID)));
                                break;
                        }
                    } else {
                        header('HTTP/1.1 104 Blank Password');
                        header('Location: ' . htmlspecialchars_decode(Link::ToLoginResult(PASSWD_BLANK)));
                    }
                } else {
                    header('HTTP/1.1 104 Blank Username');
                    header('Location: ' . htmlspecialchars_decode(Link::ToLoginResult(US_BLANK)));
                }
            }
        }
    }

}
