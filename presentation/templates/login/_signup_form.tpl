{* signup_form *}
{load_presentation_object filename=$smarty.template family=$family assign="obj"}

<div class="signup-form"><!--sign up form-->
        <h2>Đăng ký thành viên!</h2>
        <form action="#">
                <input type="text" placeholder="Name"/>
                <input type="email" placeholder="Email Address"/>
                <input type="password" placeholder="Password"/>
                <button type="submit" name="btnreg" class="btn btn-default">Đăng ký</button>
        </form>
</div><!--/sign up form-->