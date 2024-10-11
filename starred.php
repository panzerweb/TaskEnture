<?php include("./templates/header.php") ?>

<!-- Main Content With the Tables -->
<div class="col main-content">
    <div class="row py-2 title-header">
        <h1 class="align-self-start">Starred List</h1>
    </div>
    <!-- Form for Searching Task -->
    <form action="search_task.php" method="post">
        <div class="input-group flex-nowrap mt-4 mb-3">
            <input type="text" class="form-control task-search" placeholder="Search" aria-label="taskadd" aria-describedby="addon-wrapping">
            <!-- Add Task Button -->
            <button type="submit" class="btn btn-warning search-btn" name="search-task">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
            </button>
        </div>
    </form>

    <div class="table-responsive small w-100 mx-auto">
        <table class="table table-sm text-center align-middle w-100 table-bordered border-dark" id="myTable">
            <thead class="table-dark">
                <tr>
                    <td>Mark</td>
                    <td>Task</td>
                    <td>Due Date</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <tr class="custom-row">
                    <td class="markdone">
                        <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                        <label class="btn btn-outline-success" for="btncheck1">
                        <i class="bi bi-check-circle"></i>
                        </label>
                    </td>
                    <td class="fs-6 fw-bold" id="task-name">Lorem ipsum dolor sit amet.</td>
                    <td>14/10/2024</td>
                    <td class="btn-behavior">
                        <!-- Access the updating modal -->
                        <?php include("./templates/function_buttons.php") ?>
                    </td>
                </tr>
                <tr class="custom-row">
                    <td class="markdone">
                        <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                        <label class="btn btn-outline-success" for="btncheck1">
                        <i class="bi bi-check-circle"></i>
                        </label>
                    </td>
                    <td class="fs-6 fw-bold" id="task-name">Lorem ipsum dolor sit amet.</td>
                    <td>14/10/2024</td>
                    <td class="btn-behavior">
                        <!-- Access the updating modal -->
                        <?php include("./templates/function_buttons.php") ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<?php include("./templates/footer.php") ?>