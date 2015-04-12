<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of base
 *
 * @author Huy
 */
class Base {

    public $filename;
    public $mIncludedTemplate;

    public function __construct($filename, $family, $ancestor = 0) {
        $this->filename = $filename;
        // Check if ancestor is this current page
        if ($ancestor === 1) {
            // Get this ancestor module
            $main_modules = Root::getConfig()->{$filename}['modules'];
            foreach ($main_modules as $mod_item) {
                $this->mIncludedTemplate[$mod_item] = Root::getConfig()->$mod_item;
            }
            $this->mIncludedTemplate['layouts'] = Root::getConfig()->{$filename}['layouts'];
        } else if (sizeof($family) > 0) {
            // Get all child page of family
            $this->mIncludedTemplate = Root::getConfig()->$family[0];
            foreach ($this->mIncludedTemplate as $module) {
                if (!isset($module['layouts']) || sizeof($module['layouts']) === 0)
                    break;
                // Get the smallest child in $family
                $this->mIncludedTemplate = $module;
            }
        }
        $this->mIncludedTemplate[PLUGIN] = Root::getConfig()->{PLUGIN};
    }

}
