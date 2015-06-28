<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of _login_form
 *
 * @author Huy
 */
class Login extends Base {

    // Initialize presentation object
    public function init() {
        if (Authentication::AutoLogin() !== false) {
            header('HTTP/1.1 301 Redirect to Main');
            header('Location: ' . htmlspecialchars_decode(Link::Build('')));
        }
    }

}
