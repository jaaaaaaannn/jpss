<?php include('header.php'); ?>

<div class="container-fluid dashboard_wrapper">
    <div class="container">
        <div class="school_heading">
            <h3> schools </h3>
            <a href="addSchool.php">
                <i class="fa fa-plus"></i> add school
            </a>
        </div>

        <div class="school_list">
            <div class="col-md-4">
                <a href="individualSchool.php">
                    <div class="school_img">
                        <img src="img/DepEd.png">
                    </div> 
                    <label>school 1</label>
                </a>
            </div>
            <div class="col-md-4">
                <a href="individualSchool.php">
                    <div class="school_img">
                        <img src="img/Division_of_SF.png">
                    </div>
                    <label>school 2</label>
                </a>
            </div>
            <div class="col-md-4">
                <a href="individualSchool.php">
                    <div class="school_img">
                        <img src="img/SanFernando.png">
                    </div>
                    <label>school 3</label>
                </a>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>