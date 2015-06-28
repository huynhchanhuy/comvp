<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of article
 *
 * @author Huy
 */
class Article extends Base {

    // Initialize presentation object
    public $mUploadImgLink;
    public $mMsgUploadStatus = '';

    public function init() {
        $this->mUploadImgLink = Link::UploadImg();
        if (isset($_SESSION['msg_upload'])) {
            $this->mMsgUploadStatus = $_SESSION['msg_upload'];
            unset($_SESSION['msg_upload']);
        }
    }

}
