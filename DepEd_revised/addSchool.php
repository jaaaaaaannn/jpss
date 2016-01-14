<?php include('header.php'); ?>

<div class="container-fluid add_school_wrapper">
    <div class="container">
        <div class="dashboard_btn">
            <a href="dashboard.php">
                <i class="fa fa-arrow-left"></i> go back to dashboard
            </a>
            <h4>add school account</h4>
        </div>  

        <form id="add_school_form" action=" ">        
            <div class="input-field">
                <i class="prefix fa fa-university"></i>
                <input type="text" class="form-control" id="school_name" name="school_name" autofocus required>
                <label for="school_name">School Name</label>
            </div>
            <div class="input-field">
                <i class="prefix fa fa-user-plus"></i>
                <input type="text" class="form-control" id="admin_username" name="admin_username" required>
                <label for="admin_username">Admin Username</label>
            </div>
            <div class="input-field">
                <i class="prefix fa fa-envelope"></i>
                <input type="email" class="form-control" id="email_add" name="email_add" required>
                <label for="email_add">Email Address</label>
            </div>
            <div class="input-field">
                <i class="prefix fa fa-key"></i>
                <input type="password" class="form-control" id="password" name="password" required>
                <label for="password">Password</label>
            </div>
            <div class="input-field">
                <i class="prefix fa fa-key"></i>
                <input type="password" class="form-control" id="repeat_password" name="repeat_password" required>
                <label for="repeat_password">Repeat Password</label>
            </div>
            <button class="btn btn-primary waves-effect waves-ligh" type="submit">create school account</button>
        </form>        
    </div>
</div>

<?php include('footer.php'); ?>