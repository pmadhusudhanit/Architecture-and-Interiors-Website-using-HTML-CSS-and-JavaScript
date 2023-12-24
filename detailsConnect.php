<?php

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','project') or die("Connection Failed");

        if(isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['msg']))
        {
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $msg = $_POST['msg'];
           
            $sql = "INSERT INTO `details` (`name`, `mail`, `msg`)  VALUES ('$name','$mail','$msg')";

            if(mysqli_query($conn,$sql))
            {
                echo "Entry Successful";
            }
            else
            {
                echo "Error Occured";
            }

        }
    }



?>