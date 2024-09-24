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


