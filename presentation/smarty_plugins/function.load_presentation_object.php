<?php

/*
 * When declare statements like this 
 * {load_presentation_object filename="product" assign="obj"}
 * smarty will load this file with all the tags declared in the above statements
 * as the array (name and value) of the $params variables
 */

/*
 * Name Convention
 * $params:
 *  - filename : is a name of a tpl class (associated php class) or a package (is a folder that contains tpl classes which is associated a folder of php classes)
 *  - parentpage : is a object of data structure that data of a PAGE that have THIS tpl layout inside. Parentpage is a linked list object which consists of two properties:
 *      - parrentpage : like the above definition. It's a node point another node that is a parent of current node.
 *      - filename : is a name of current page.
 *  - this : current filename will be passed to tpl file for inheritent.
 *  - assign : object variable passed to tpl for various of uses
 *  
 */

// Plug-in functions inside plug-in files must be named: smarty_type_name
function smarty_function_load_presentation_object($params, $smarty) {
    $filename = basename($params['filename'], TPL);
    $isPlugin = FALSE;
    $family = array();
    if(isset($params['isplugin']) && $params['isplugin'] === 1){
        $family[0] = PLUGIN;
        array_push($family, $filename);
        $isPlugin = TRUE;
    } else {
        
        if (!isset($params['family']) || $params['family'] === 0)
            $family[0] = $filename;
        else {
            $family = $params['family'];
            array_push($family, $filename);
        }
    }

    $path = dirname($params['filename']).'/'.$filename . PHP;
    
    // include php class
    require_once PHP_CLASS_DIR . '/' . $path;

    // Looking for the class in *.php file
    $className = str_replace(' ', '', ucfirst(str_replace('_', ' ', $filename)));
    
    if($isPlugin === FALSE)
    {
        // Create presentation object
        // module element is the neareast father of current page
        $obj = new $className($filename,$family);
    }
    else
    {
        $obj = new $className();
    }
    
    // Looking for the function init
    if (method_exists($obj, 'init')) {
        $obj->init();
    }
    // Assign template variable
    $smarty->assign($params['assign'], $obj); // --> assign $obj to the assign variable in {assign="obj"} in tpl in order to pass the value to "obj"
    #$smarty->assign('filename', $childNode['filename']); //--> $this can be invoked in tpl using this class
    $smarty->assign('family', $family);
}
