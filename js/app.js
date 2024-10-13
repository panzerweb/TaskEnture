//JavaScript HTML Dialog Box
document.addEventListener('DOMContentLoaded', function() {
    // Error Dialog Box
    const errorDialog = document.getElementById('errorDialog');
    if (errorDialog) {
        errorDialog.showModal();

        // Add event listener to close the error dialog
        const closeErrorBtn = document.getElementById('closeErrorDialog');
        if (closeErrorBtn) {
            closeErrorBtn.addEventListener('click', function() {
                errorDialog.close();
            });
        }
    }

    // Upload Dialog Box
    const uploadDialog = document.getElementById('uploadDialog');
    if (uploadDialog) {
        uploadDialog.showModal();

        // Add event listener to close the upload dialog
        const closeUploadBtn = document.getElementById('closeUploadDialog');
        if (closeUploadBtn) {
            closeUploadBtn.addEventListener('click', function() {
                uploadDialog.close();
            });
        }
    }
});
//Truncate Text
document.addEventListener("DOMContentLoaded", function(){
    let myTable = document.getElementById("myTable").rows[0].cells.namedItem("task-name").innerHTML;
    let lengthOfTask = myTable.length;
    if (lengthOfTask > 15) {
       let truncateText = myTable.substring(0, 15) + "...";
       document.getElementById("task-name").textContent = truncateText;
    }
})


//Show Password
function showPassword(){
    let passwordField = document.getElementById("password");
    let confirmPassword = document.getElementById("passwordConfirm");

    if (passwordField.type === "password" || confirmPassword.type === "password") {
        passwordField.type = "text";
        confirmPassword.type = "text";
    } else {
        passwordField.type = "password";
        confirmPassword.type = "password";
    }
}

//Filterable Buttons for labeling

const filterButtons = document.querySelectorAll('.filter-button');
const taskRows = document.querySelectorAll('tr.custom-row');

filterButtons.forEach(function(button){
    button.addEventListener('click', function(){
        const btnCategory = button.dataset.category;

        taskRows.forEach(function(row){
            const rowCategory = row.dataset.category;

            if (btnCategory === 'all' || rowCategory === btnCategory) {
                row.style.display = '';
            } else {
                row.style.display = 'none';

            }
        })
    })
})


// //Active Filterable buttons
// document.addEventListener('DOMContentLoaded', function () {
//     // Get the filter buttons
//     const allBtn = document.getElementById('all-btn');
//     const personalBtn = document.getElementById('personal-btn');
//     const professionalBtn = document.getElementById('professional-btn');
    
//     // Get all task containers
//     const taskContainers = document.querySelectorAll('.task-container');

//     // Function to remove active class from buttons except the All button
//     function resetButtonStates() {
//         personalBtn.classList.remove('active');
//         professionalBtn.classList.remove('active');
//     }

//     // All button: Always active and shows all tasks
//     allBtn.addEventListener('click', function () {
//         resetButtonStates(); // Remove active class from personal and professional
//         taskContainers.forEach(container => container.style.display = 'block'); // Show all tasks
//     });

//     // Personal button: Toggles active state and shows only personal tasks
//     personalBtn.addEventListener('click', function () {
//         resetButtonStates();
//         personalBtn.classList.add('active');
//         taskContainers.forEach(container => {
//             if (container.dataset.category === 'personal') {
//                 container.style.display = 'block'; // Show personal tasks
//             } else {
//                 container.style.display = 'none'; // Hide others
//             }
//         });
//     });

//     // Professional button: Toggles active state and shows only professional tasks
//     professionalBtn.addEventListener('click', function () {
//         resetButtonStates();
//         professionalBtn.classList.add('active');
//         taskContainers.forEach(container => {
//             if (container.dataset.category === 'professional') {
//                 container.style.display = 'block'; // Show professional tasks
//             } else {
//                 container.style.display = 'none'; // Hide others
//             }
//         });
//     });

//     // Initially set all tasks to be visible
//     allBtn.click();
// });

