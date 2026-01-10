<?php



function registration () {
    <?php if($_SERVER['REQUEST_METHOD'] == "POST"){
          $firstName = $_POST['firstName'];
          $lastName = $_POST['lastName'];

          echo "<h1> Output </h1>";
          echo "First Name Is : $firstName";
          echo "Last Name Is : $lastName";

      } 
      ?>
}   


registration()
?>