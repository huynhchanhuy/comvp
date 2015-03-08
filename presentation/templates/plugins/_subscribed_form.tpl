{* footer *}
{load_presentation_object filename=$smarty.template parentpage=$parent assign="obj"}

<div id="subscribed" class="contact-form">
        <h2 class="title text-center">Nhận thực đơn qua Email</h2>
        <div class="status alert alert-success" style="display: none"></div>
        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
            <div class="form-group col-md-12">
                <input type="text" name="name" class="form-control" required="required" placeholder="Địa chỉ Email">
            </div>                     
            <div class="form-group col-md-12">
                <input type="submit" name="submit" class="btn btn-primary pull-left btn-full" value="Submit">
            </div>
        </form>
</div>