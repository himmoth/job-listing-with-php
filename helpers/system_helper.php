<?php
// Redirect To Page 
function redirect($page= FALSE, $message = NULL, $message_type = NULL){
    if(is_string($page)){
        $location = $page;
    }else {
        $location = $_SERVER['SCRIPT_NAME'];
    }

    // CHECK FOR MESSAGE 
    if($message != NULL) {
        // Set message 
        $_SESSION['message'] = $message;
    }

    // CHECK FOR type
    if($message_type != NULL) {
        $_SESSION['message_type'] = $message_type;

    } 

    // Redirect 
    header('Location: '.$location);
    exit();

}

// Display message 
function displayMessage(){
    if(!empty($_SESSION['message'])){
        // Assign message var 
        $message = $_SESSION['message'];

        if(!empty($_SESSION['message_type'])){
            // Assign message_type var 
        $message_type = $_SESSION['message_type'];
            // create output 
            if($message_type =='error'){
                echo '<div class="container">';
                echo '<div class=" alert alert-danger">'.$message.'</div>';
                echo '</div>';
            }else{
                echo '<div class="container">';
                echo '<div class=" alert alert-success">'.$message.'</div>';
                echo '</div>';

            }
        }
        // Unset Message 
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);

    }else{
        echo '';
    }
    
}