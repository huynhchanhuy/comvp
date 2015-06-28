<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Admin extends Base {

    public $mSiteUrl;
    public $mContentsCell;
    public $mAdminUrl;
    public $mValue;

    public function __construct($filename, $family) {
        if (Authentication::AutoLogin() === false) {
            header('HTTP/1.1 301 Redirect to Login');
            header('Location: ' . htmlspecialchars_decode(Link::ToLogin()));
        }

        if (isset($_GET['uploadimg'])) {
            $this->UploadImage();
        }

        parent::__construct($filename, $family, self::ANCESTOR, self::NOPLUGIN);
    }

    public function init() {
        $this->mSiteUrl = Link::Build('');
        $this->mAdminUrl = Link::ToAdmin();

        $this->mContentsCell = $this->main_modules[0] . TPL;
        if (isset($_GET['nav']) && in_array($_GET['nav'], $this->main_modules)) {
            $this->mContentsCell = $_GET['nav'] . TPL;
        }

        foreach ($this->main_modules as $module) {
            if (isset($this->mIncludedTemplate[$module]['values'])) {
                $this->mIncludedTemplate[$module]['cssmnlv'] = constant(MENU_CSS . "0");
                $this->RecursivelyAddUrl($this->mIncludedTemplate[$module]['values'], $module);
            } else {
                $this->mIncludedTemplate[$module]['url'] = Link::ToAdmin($module);
            }
        }
    }

    // Traverse an array, if find value in array's element --> add url to this element
    // &$array --> get pointer of $this->mIncludedTemplate[$module]['values']
    private function RecursivelyAddUrl(&$array, $nav, $arrKey = array()) {
        // &$value --> get pointer of an object of $this->mIncludedTemplate[$module]['values']
        foreach ($array as $key => &$value) {
            // Add key to last element of arrKey
            array_push($arrKey, $key);
            if (isset($value['values'])) {
                $array[$key]['cssmnlv'] = constant(MENU_CSS . count($arrKey));
                $this->RecursivelyAddUrl($value['values'], $nav, $arrKey);
            } else {
                $array[$key]['url'] = Link::ToAdmin($nav, $arrKey);
            }
            // After making link for val0 --> valn, delete it (LIFO). Display as recursive
            //add a
            //  add a1
            //      add a11
            //      del a11
            //  del a1
            //del a
            array_pop($arrKey);
        }
    }

    // Move to \Eshopper\styles\admin\kcfinder\upload\images
    private function UploadImage() {
        $redirect_url = $_SESSION['current_url'];
        if (isset($_POST['upload'])) {
            $j = 0;     // Variable for indexing uploaded image.
            for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
                // Loop to get individual element from the array
                $validextensions = explode(" ", UPLOAD_FILE_TYPE);      // Extensions which are allowed.
                $ext = explode('.', basename($_FILES['file']['name'][$i]));   // Explode file name from dot(.)
                $file_extension = end($ext); // Store extensions in the variable.
                $target_path = UPLOAD_DIR . md5(uniqid()) . "." . $ext[count($ext) - 1];     // Set the target path with a new name of image.
                $j = $j + 1;      // Increment the number of uploaded images according to the files in array.
                if (($_FILES["file"]["size"][$i] < UPLOAD_SIZE)     // Approx. 5Mb files can be uploaded.
                        && in_array($file_extension, $validextensions)) {
                    if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {
                        // If file moved to uploads folder.
                        $_SESSION['msg_upload'] = '<div class="'.MSG_CSS_SUCCESS.'"><b>'.UPLOAD_SUCCESSFUL_INFO.'</b></div>';
                    } else {     //  If File Was Not Moved.
                        $_SESSION['msg_upload'] = '<div class="'.MSG_CSS_FAILED.'"><b>'.UPLOAD_FAILED_INFO.'</b></div>';
                    }
                } else {     //   If File Size And File Type Was Incorrect.
                    $_SESSION['msg_upload'] = '<div class="'.MSG_CSS_FAILED.'"><b>'.UPLOAD_SUCCESSFUL_INFO.'</b></div>';
                }
            }
        }
        header('HTTP/1.1 301 Redirect to Admin Page');
        header('Location: ' . $redirect_url);
    }

}
