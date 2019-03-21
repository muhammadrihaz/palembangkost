<div class="login-container">
    <div class="loginform-container">
        <div class="loginform-head">
            <h2>User Login</h2>
        </div>
        <div class="loginform-body">
            <form class="loginform" action="<?=base_url('login/aksilogin');?>" method="post">
                <input type="text" name="username" class="form-control" placeholder="Username">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <button type="submit" class="btn btn-success btn-lg form-control">Login</button>
                <div class="loginform-register">
                Belum mempunyai akun? <a href="">Daftar</a>
                </div>
            </form>
        </div>
    </div>
</div>
