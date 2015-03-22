<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of function
 *
 * @author Huy
 */
function smarty_function_page404($params, $smarty) {
    $url = Link::Build('');
    $smarty->assign($params['siteurl'], $url);
}
