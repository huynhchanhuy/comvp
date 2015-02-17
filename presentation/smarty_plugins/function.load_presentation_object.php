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
function smarty_function_load_presentation_object($params, $smarty)
{
//    echo '<pre>';
//    var_dump(Root::getConfig());
//    echo '</pre>';
   
    // filename of template *.tpl --> current page
    $filename = basename($params['filename'],".tpl");
    $path = $filename . '.php';
    
    // Assign the filename (current page) of current page to the child node
    $childNode['filename'] = $filename;
    // get layout folder of page if so and check the parrentpage that passing to the current page is assigned or not.
    if(isset($params['parentpage'])){
        // Assign parent node for the child node from current page's parent
        $childNode['parentpage'] = $params['parentpage'];
        // Load all parent page of current page recursively and generate the path
        $result = explodePathFromNodes($childNode['parentpage']); 
        $path = $result['dir'].$path;
    } else {
        $childNode['parentpage'] = NULL;
    }
    
    // If the result (module inside) could not be set, so current page is the module, an first page.
    if(!isset($result['module']))
        $result['module'] = $filename;
    
    // include php class
    require_once PHP_CLASS_DIR.'/'.$path;   
    
    // Looking for the class in *.php file
    $className = str_replace(' ', '', 
            ucfirst(str_replace('_', ' ', 
                    $filename)));
    
    // Create presentation object
    // module element is the neareast father of current page
    $obj = new $className($result['module'],$filename);
    
    // Looking for the function init
    if(method_exists($obj, 'init'))
    {
        $obj->init();
    }
    
    // Assign template variable
    $smarty->assign($params['assign'], $obj); // --> assign $obj to the assign variable in {assign="obj"} in tpl in order to pass the value to "obj"
    $smarty->assign('this', $childNode); //--> $this can be invoked in tpl using this class
}

function explodePathFromNodes($parentNode)
{
        $dir = '';
        $module = NULL;
        // if parent node is the plugins folder. Plugin have only one directory that contains plugins
        if($parentNode === PLUGIN)
        {
            $dir .= PLUGIN.'/';
        }
        else {
            // Concat the filename of the first parentNode to dirs.
            $dir .= $parentNode['filename'].'/';
            // Get parent of this page
            $module = $parentNode['filename'];
            if(isset($parentNode['parentpage']))
            {
                // Traverse all parent nodes from root to brances node.
                foreach ($parentNode['parentpage'] as $node) {
                    $dir .= $node['filename'].'/';
                    // Check the next node is empty or not
                    if (isset($node['parentpage'])) {
                        //assign childNode to fatherNode (similar to n = n - 1)
                        $parentNode = $node;
                    } else {
                        $module = $node['filename']; //neareast father of current page
                        break;
                    }
                }
            }
        }
        
        return array('dir' => $dir, 'module' => $module);
}