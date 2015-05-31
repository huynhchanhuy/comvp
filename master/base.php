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
    public $mPageTitle;
    public $values;
    public $main_modules;
    // Have all pages and being treated as an ancestor
    const ANCESTOR=1;
    // Only have pages within descendant section
    const DESCENDANT=0;
    const NOPLUGIN = false;

    public function __construct($filename, $family, $permission = 0,$plugin = true) {
        $this->filename = $filename;
        // Check if ancestor is this current page
        if ($permission === self::ANCESTOR) {
            // Get this ancestor module
            // Get page title
            $this->mPageTitle = Root::getConfig()->{$filename}['captions'];
            $this->main_modules = Root::getConfig()->{$filename}['modules'];
            $this->values = Root::getConfig()->{$filename}['values'];
            foreach ($this->main_modules as $mod_item) {
                $this->mIncludedTemplate[$mod_item] = Root::getConfig()->$mod_item;
            }
            $this->mIncludedTemplate['layouts'] = Root::getConfig()->{$filename}['layouts'];
        }
        else if (sizeof($family) > 0) {
            // Get all child page of family
            $this->mIncludedTemplate = Root::getConfig()->$family[0];
            foreach ($this->mIncludedTemplate as $module) {
                if (!isset($module['layouts']) || sizeof($module['layouts']) === 0)
                    break;
                // Get the smallest child in $family
                $this->mIncludedTemplate = $module;
                if(isset($module['captions']))
                    $this->mPageTitle = $module['captions'];
                if(isset($module['values']))
                    $this->values = $module['values'];
            }
        }
        if($plugin !== self::NOPLUGIN)
            $this->mIncludedTemplate[PLUGIN] = Root::getConfig()->{PLUGIN};
    }
    
    public function getAncestor($familyrecord)
    {
        return $familyrecord[0];
    }

}
