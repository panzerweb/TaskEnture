<?php include("./templates/header.php") ?>

<div class="col main-content">
    <div class="row py-2 title-header">
        <h1 class="align-self-start">Category</h1>
    </div>

<!-- I STOP HERE! 11/10/2024 -->
 
    <button type="button" class="btn btn-outline-dark my-3 active filter-button" id="all-btn" data-category="all">All</button>
    <button type="button" class="btn btn-outline-dark my-3 filter-button" id="personal-btn" data-category="personal">Personal</button>
    <button type="button" class="btn btn-outline-dark my-3 filter-button" id="professional-btn" data-category="professional">Professional</button>


    <div class="table-responsive small w-100 mx-auto">
        <table class="table table-sm text-center align-middle w-100 table-bordered border-dark" id="myTable">
            <thead class="table-dark">
                <tr>
                    <td>Mark</td>
                    <td>Task</td>
                    <td>Due Date</td>
                    <td>Category</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <!-- First Row -->
                <tr class="custom-row" data-category="personal">
                    <td class="markdone">
                        <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                        <label class="btn btn-outline-success" for="btncheck1">
                            <i class="bi bi-check-circle"></i>
                        </label>
                    </td>
                    <td class="fs-6 fw-bold" id="task-name">Personal Task 1</td>
                    <td>14/10/2024</td>
                    <td><span class="badge rounded-pill text-bg-warning">Personal</span></td>
                    <td class="btn-behavior">
                        <?php include("./templates/function_buttons.php") ?>
                    </td>
                </tr>
                <!-- Second Row -->
                <tr class="custom-row" data-category="professional">
                    <td class="markdone">
                        <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                        <label class="btn btn-outline-success" for="btncheck2">
                            <i class="bi bi-check-circle"></i>
                        </label>
                    </td>
                    <td class="fs-6 fw-bold" id="task-name">Professional Task 1</td>
                    <td>15/10/2024</td>
                    <td><span class="badge rounded-pill text-bg-danger">Professional</span></td>
                    <td class="btn-behavior">
                        <?php include("./templates/function_buttons.php") ?>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>

</div>

<?php include("./templates/footer.php") ?>