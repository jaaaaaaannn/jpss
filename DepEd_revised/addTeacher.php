<?php include('header.php'); ?>

<div class="container-fluid addTeacher_wrapper">
    <div class="container">
        <div class="dashboard_btn">
            <a href="individualSchool.php">
                <i class="fa fa-arrow-left"></i> go back
            </a>
            <h4>add teacher account</h4>                
        </div>  

        <form id="add_teacher_form" action=" ">
            <div class="input-field">
                <i class="prefix fa fa-user"></i>
                <input type="text" class="form-control" id="teacher_name" name="teacher_name" required>
                <label for="teacher_name">Name</label>
            </div>
            <div class="input-field">
                <i class="prefix fa fa-venus-mars"></i>
                <input type="text" class="form-control" id="teacher_gender" name="teacher_gender" required>
                <label for="teacher_gender">Gender</label>
            </div>
            <div class="input-field">
                <i class="prefix fa fa-user-plus"></i>
                <input type="text" class="form-control" id="teacher_username" name="teacher_username" required>
                <label for="teacher_username">Username</label>
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
            <button class="btn btn-primary waves-effect waves-ligh" type="submit">Create account</button>
        </form>        
    </div>
</div>

<?php include('footer.php'); ?>