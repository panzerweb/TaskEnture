<?php include("./templates/header.php") ?>
<?php 
    //==Code for retrieving added task==

    //Retrieve user_id by performing query to select user_id from users_table
    //Retrieve task where user_id is matched
    //Fetch task if the rows of the query is greater than zero
?>
        <!-- Main Content With the Tables -->
        <div class="col main-content">
            <div class="row py-2 title-header">
                <h1 class="align-self-start">My List</h1>
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
                        
                    </tbody>
                </table>
            </div>

            <!-- Add Task for Modal Pop Up -->
            <button class="btn btn-warning rounded-pill p-3 position-fixed bottom-0 end-0 m-4 border border-black" data-bs-toggle="modal" data-bs-target="#addingModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                </svg>           
            </button>

            <!-- Modal For Adding Task-->
             <form action="./add_task.php" method="post">
                <!-- Modal -->
                <div class="modal fade" id="addingModal" tabindex="-1" aria-labelledby="addingModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content text-light">
                        <div class="modal-header text-warning">
                            <h1 class="modal-title fs-3" id="addingModal">Add Your Task</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <label for="taskname" class="col-sm-2 col-form-label">Task</label>
                                <div class="col-sm-12">
                                <input type="text" class="form-control" id="taskname" name="taskname" placeholder="Add your Task">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="task_description" class="form-label">Description</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control w-100" id="task_description" name="task_description" rows="3" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="labels" class="form-label">Category</label>
                                <div class="col-sm-12">
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" checked>
                                    <label class="btn btn-outline-warning" for="btnradio3">Personal</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                                    <label class="btn btn-outline-warning" for="btnradio4">Professional</label>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Add Task</button>
                        </div>
                    </div>
                </div>
                </div>
             </form>
        </div>
        
    </div>
</div>

<?php include("./templates/footer.php") ?>
