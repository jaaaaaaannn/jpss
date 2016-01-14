<?php include('header.php'); ?>

<div class="container-fluid teacher_login_wrapper">
    <form id="" class="login-form" action="index.php">        
        <div class="login-wrap">
            <div class="input-field">
                <i class="prefix fa fa-user-plus"></i>
                <input type="text" class="form-control" id="username" name="username" required>
                <label for="username">Username</label>
            </div>
            <div class="input-field">
                <i class="prefix fa fa-key"></i>
                <input type="password" class="form-control" id="password" name="password" required>
                <label for="password">Password</label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me">Remember Me
                </label>
                <span class="pull-right">
                    <a href="#"> Forgot Password?</a>
                </span>
            </div>
            <button class="btn btn-primary waves-effect waves-ligh" type="submit">login</button>
        </div>
    </form>
</div>
            
<?php include('footer.php'); ?>