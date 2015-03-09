{* login_form *}
{load_presentation_object filename=$smarty.template parentpage=$parent assign="obj"}

<div class="login-form"><!--login form-->
        <h2>Đăng Nhập</h2>
        <form action="#">
                <input type="text" placeholder="Name" />
                <input type="email" placeholder="Email Address" />
                <span>
                        <input type="checkbox" class="checkbox"> 
                        Nhớ trạng thái đăng nhập
                </span>
                <button type="submit" class="btn btn-default">Đăng nhập</button>
        </form>
</div><!--/login form-->