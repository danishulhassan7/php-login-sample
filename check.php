<?php
    if(isset($_POST["login"]))
    {
        $username = "danishulhassan7";
        $password = "001122";

        if($username === $_POST["username"] && $password === $_POST["password"])
        {
            header("Location: index.php");
        }
        else {
            $message_incorrect = "Please enter the correct username or password";
            echo "<script type='text/javascript'>alert('$message_incorrect');</script>";
        }
    }else {
        $message_nothing = "Please enter valid username or password";
        echo "<script type='text/javascript'> alert('$message_nothing');</script>";
    }
?>