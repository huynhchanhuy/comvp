{* contact_form *}
{load_presentation_object filename=$smarty.template isplugin=1 assign="obj"}

{*js message*}
{$obj->mMsg}

<div id="contact-form" class="contact-form">
        <h2 class="title text-center">Gửi Phản Hồi</h2>
        <div class="status alert alert-success" style="display: none"></div>
        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" onsubmit="sendForm(this)" action="{$obj->mLinkSendMail}">
            <div class="form-group col-md-12">
                <input type="text" name="name" maxlength="70" class="form-control" required="required" placeholder="Họ Tên"
                       oninvalid="this.setCustomValidity('Họ tên không được để trống')">
            </div>
            <div class="form-group col-md-4">
                <input type="text" name="phone" maxlength="11" class="form-control" required="required" placeholder="Số Điện Thoại"
                       oninvalid="this.setCustomValidity('Số điện thoại không được để trống')">
            </div>
            <div class="form-group col-md-8">
                <input type="email" name="email" maxlength="255" class="form-control" required="required" placeholder="Email"
                       oninvalid="this.setCustomValidity('Email không được để trống hoặc không hợp lệ')">
            </div>
            <div class="form-group col-md-12">
                <input type="text" name="subject" maxlength="255" class="form-control" required="required" placeholder="Tiêu Đề"
                       oninvalid="this.setCustomValidity('Tiêu đề không được để trống')">
            </div>
            <div class="form-group col-md-12">
                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Nội Dung"
                          oninvalid="this.setCustomValidity('Nội dung không được để trống')"></textarea>
            </div>
            <div class="form-group col-md-6">
            </div>
            <div class="form-group col-md-3">
                <input type="button" name="clear" class="btn btn-primary btn-full pull-right" onclick="this.form.reset();" value="Xóa">
            </div>
            <div class="form-group col-md-3">
                <input type="submit" name="submit" class="btn btn-primary btn-full pull-right" value="Gửi">
            </div>
        </form>
</div>