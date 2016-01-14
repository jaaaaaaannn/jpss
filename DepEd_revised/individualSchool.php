<?php include('header.php'); ?>

<div class="container-fluid individual_school_wrapper">
    <div class="container">
        <div class="actions">
            <div class="dashboard_btn">
                <a href="dashboard.php">
                    <i class="fa fa-arrow-left"></i> go back to dashboard
                </a>
            </div>  
            <div class="add_teacher_btn">
                <a href="addTeacher.php"> 
                    <i class="fa fa-plus"></i> add teacher
                </a>  
            </div>
        </div>
        <div class="ind_school_name">
            <h3>SCHOOL NAME HERE</h3>
        </div>
        <div class="ind_school_admin_name">
           <h4>ADMIN NAME or TEACHER NAME (depends on account privilege)</h4>
        </div>
        <div class="teacher_list">
            <h5>Teachers:</h5>
            <ul>
                <li>
                    <div class="col-md-6">Teacher name 1</div>
                    <div class="col-md-6">
                        <ul class="actions_list">
                            <li><a href="#">edit</a></li>
                            <li><a href="#">delete</a></li>
                            <li><a href="#">view profile</a></li>
                        </ul>
                    </div> 
                </li>
                <li>
                    <div class="col-md-6">Teacher name 2</div>
                    <div class="col-md-6">
                        <ul class="actions_list">
                            <li><a href="#">edit</a></li>
                            <li><a href="#">delete</a></li>
                            <li><a href="#">view profile</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="col-md-6">Teacher name 3</div>
                    <div class="col-md-6">
                        <ul class="actions_list">
                            <li><a href="#">edit</a></li>
                            <li><a href="#">delete</a></li>
                            <li><a href="#">view profile</a></li>
                        </ul>
                    </div> 
                </li>
            </ul>
        </div>

        <div class="file_upload_area">
            <h4>Upload files</h4>
            <div class="dnd_upload">
                <p>
                    Drop files here to upload
                </p>
            </div>
            <p>
                Please specify a file:<br>
                <input type="file" name="datafile" size="40">
            </p>
            <div class="files_list">
                <h5>Files uploaded:</h5>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>