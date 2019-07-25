<?php
if (isset($_FILES['ui']['name'])) {
    if (0 < $_FILES['ui']['error']) {
        echo 'Error during file upload' . $_FILES['ui']['error'];
    } 
    else {
        if (file_exists('profile_pics/' . $_FILES['ui']['name'])) {
            echo 'profile_pics/' . $_FILES['ui']['name'];
        } else {
            move_uploaded_file($_FILES['ui']['tmp_name'], 'profile_pics/' . $_FILES['ui']['name']);
            echo 'profile_pics/' . $_FILES['ui']['name'];
        }
    }
} else {
    echo 'Please choose a file';
}
    
?>