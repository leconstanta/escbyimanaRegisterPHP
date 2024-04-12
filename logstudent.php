<?php 
    include("connection.php");

    if(isset($_POST['submit'])){
        $username = $_POST['studentname'];
        $password = $_POST['nationalexamid'];  
        
        
        $sql = "select * from studentlogin where Studentname = '$username'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql = "select * from studentlogin where StudentNationalid= '$password'";
        $result = mysqli_query($conn, $sql);
        $count_password = mysqli_num_rows($result);


        if($count_user==1 && $count_password==1){
            header("Location:student.php");
        }
        else{
            echo '
            <script>
                window.location.href = "check.php";
                alert("Your name or national id usedin exam is incorrect or contact the school for help.")
            </script>';
        }
    }


?>