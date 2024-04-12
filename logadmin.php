<?php 
    include("connection.php");

    if(isset($_POST['submit'])){
        $username = $_POST['name'];
        $password = $_POST['Pass'];  
        
        
        $sql = "select * from adminlogin where adminname = '$username'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql = "select * from adminlogin where password= '$password'";
        $result = mysqli_query($conn, $sql);
        $count_password = mysqli_num_rows($result);


        if($count_user==1 && $count_password==1){
            header("Location:adminpanel.php");
        }
        else{
            echo '
            <script>
                window.location.href = "admin.php";
                alert("Sorry you can not login if you are not administrator or make sure you typed correct password or name")
            </script>';
        }
    }


?>