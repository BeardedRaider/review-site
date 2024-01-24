<?php

// Check if the success message variable is set
if(isset($success_msg)){
   // Loop through each success message
   foreach($success_msg as $success_msg){
      // Display the success message using SweetAlert
      echo '<script>swal("'.$success_msg.'", "", "success");</script>';
   }
}

// Check if the warning message variable is set
if(isset($warning_msg)){
   // Loop through each warning message
   foreach($warning_msg as $warning_msg){
      // Display the warning message using SweetAlert
      echo '<script>swal("'.$warning_msg.'", "", "warning");</script>';
   }
}

// Check if the error message variable is set
if(isset($error_msg)){
   // Loop through each error message
   foreach($error_msg as $error_msg){
      // Display the error message using SweetAlert
      echo '<script>swal("'.$error_msg.'", "", "error");</script>';
   }
}

// Check if the info message variable is set
if(isset($info_msg)){
   // Loop through each info message
   foreach($info_msg as $info_msg){
      // Display the info message using SweetAlert
      echo '<script>swal("'.$info_msg.'", "", "info");</script>';
   }
}

?>