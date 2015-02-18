When you create a new module for a feature, make sure that you have to create both tpl file and php file in 
 /rootsite/presentation/classes and /rootsite/presentation/templates respectively, and put all child tpl layouts and php files of
the module to folders have the same name in two places.

When you want to put minor class or function to test, put it into utils and declare in registry.php

plugins modules is the default modules. So if you have snippet html or smarty codes, and it can be used anywhere in your site, do not
depend on any page, so you might put it into plugins folder.

For every module you created, you must extend from base class.

when you have new page, so you can declare it in /include/configs/registry.

in smarty: array[a][b][c] --> array.a.b.c

------------ file and folder explaination -----------------
include: contain config file
    include > config
        registry: as the same as its name, 