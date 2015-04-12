<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of _contact_form
 *
 * @author Huy
 */
class ContactForm {

    public $mMsg = '';
    public $mLinkSendMail;
    public $mContactClass = '';

    public function __construct() {
        $this->mLinkSendMail = Link::ToContactForm();
        if (isset($_SESSION['ContactUsMsg']) && $_SESSION['ContactUsMsg'] === 200) {
            unset($_SESSION['ContactUsMsg']);
            $this->mMsg = "<script type='text/javascript'>
                                //<![CDATA[
                                    alert('Phản hồi của bạn đã được gửi đi. Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất.');
                                //]]>
                            </script>";
        }
    }

    public function init() {
        if (isset($_POST['submit'])) {
            ContactUs::insert($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['subject'], $_POST['message']);
            $_SESSION['ContactUsMsg'] = 200;
            header('HTTP/1.1 200 Contact Us Success');
            header('Location: ' . Link::ToContactForm(true));
        }
    }

}
