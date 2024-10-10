<?php include("./templates/header.php") ?>

<!-- Main Content With the Tables -->
<div class="col main-content">
            <div class="row py-3 title-header">
                <h1 class="align-self-start" style="font-size: 45px;" >Starred List</h1>
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

        </div>


<?php include("./templates/footer.php") ?>