{* signup_form *}
{load_presentation_object filename=$smarty.template parentpage=$parent assign="obj"}

<div class="signup-form"><!--sign up form-->
        <h2>New User Signup!</h2>
        <form action="#">
                <input type="text" placeholder="Name"/>
                <input type="email" placeholder="Email Address"/>
                <input type="password" placeholder="Password"/>
                <button type="submit" class="btn btn-default">Signup</button>
        </form>
</div><!--/sign up form-->