<?php include("./templates/header.php") ?>

<?php 
    //When the close button is click
    if (isset($_POST["close"])) {
        header("location: ./dashboard.php");
    }
?>

<div class="col main-content">
    <div class="row py-2 title-header">
        <h1 class="align-self-start">Edit</h1>
    </div>

    
    <p class="text-dark text-muted mt-3 mx-2">Edit Profile</p>

    <div class="container-lg p-3 editing-container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="task_name" class="form-label fs-4 fw-bold">Task</label>
                <input type="email" class="form-control edit-group" id="task_name" name="task_name" placeholder="Your Task here...">
            </div>
            <div class="mb-3">
                <label for="task_description" class="form-label fs-4 fw-bold">Description</label>
                <textarea class="form-control edit-group" id="task_description" name="task_desc" rows="3" placeholder="Description here..."></textarea>
            </div>
            <div class="row mb-3">
                <label for="labels" class="form-label fs-4 fw-bold">Category</label>
                <div class="col-sm-12">
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-dark" for="btnradio1">Personal</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-dark" for="btnradio2">Professional</label>
                    </div>     
                    <button type="submit" name="fav-btn" class="btn btn-outline-dark">
                        <i class= "bi bi-star fs-6"></i>
                    </button>                           
                </div>
                <div class="col-12 d-flex justify-content-center justify-content-sm-end mt-4 mb-2">
                    <button type="submit" name="close" class="btn btn-secondary mx-2 px-3">Close</button>
                    <button class="btn btn-danger mx-2 px-3">Delete Task</button>
                    <button class="btn btn-warning mx-2 px-3">Edit Changes</button>
                </div>
            </div>

        </form>
    </div>

</div>

<?php include("./templates/footer.php") ?>