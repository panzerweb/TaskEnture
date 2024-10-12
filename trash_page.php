<?php include("./templates/header.php") ?>

<div class="col main-content">
    <div class="row py-2 title-header">
        <h1 class="align-self-start">Your Trash</h1>
    </div>

    <div class="table-responsive small w-100 mx-auto mt-5">
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
                    <td colspan="4">
                        <img src="./assets/img/norecord.svg" alt="" style="max-width: 600px;width: 100%;">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include("./templates/footer.php") ?>