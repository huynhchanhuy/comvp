{* login_form *}
{load_presentation_object filename=$smarty.template family=$family assign="obj"}

<div class="login-form"><!--login form-->
    <h2>Đăng Nhập</h2>
    <form action="{$obj->mLinkToLogin}" method="POST">
        <div class="{$obj->mLoginClass}">
            <input class="form-control" autofocus="true" name="us" type="text" placeholder="Tên đăng nhập" />
            <input class="form-control" name="pw" type="password" placeholder="Mật khẩu" />
            <span>
                <input type="checkbox" name="rmbme" value="rmbme" class="checkbox"> 
                Nhớ trạng thái đăng nhập
            </span>
            <button type="submit" name="btnlogin" class="btn btn-default">Đăng nhập</button>

            <span class="help-block">{$obj->mErrMsg}</span>
        </div>
    </form>
</div><!--/login form-->