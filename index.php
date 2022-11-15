<?php
require_once 'head.php'
?>
<div class="" style="min-height: 30rem ;background-image: url('https://img.freepik.com/vetores-gratis/papel-amassado-amassado-em-tom-roxo_1017-30612.jpg?w=900&t=st=1666558139~exp=1666558739~hmac=23310b3c579898168eefa4ff21b2212badd4f546d300888ba2e84333b07e8d77');">
    <div class="align-middle">
        <div class="bg-light rounded mx-auto" style="max-width: 20rem;" ;>
            <form class="" action="confirmusers.php" method="POST">
                <div class=""><b>LOGIN</b></div>
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" color="yellow" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    </svg>
                    <input class="" type="text" name="username" placeholder="UserName">
                </div>
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" color="yellow" class="bi bi-lock" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                    </svg>
                    <input class="" type="password" name="password" placeholder="Password">
                </div>
                <div class="">
                    <input type="checkbox">Remember me</input>
                    <a href="procurar_dados.php">Forgot your password</a>
                </div>
                <div class="">
                    <button class="btn btn-secondary " type="submit" style="background-color: yellow; border-color: yellow;"><b>LOGIN</b></button>
                </div>
                <div class="">
                    <h6>New here?</h6><a href="new_user.php">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require_once 'foot.php'
?>