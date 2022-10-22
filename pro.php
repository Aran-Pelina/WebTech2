<?php 

    require_once('connection.php');

    if(isset($_POST['btn-save']))
    {
    $Firstname = mysqli_real_escape_string($con,$_POST['Firstname']);
    $Middlename = mysqli_real_escape_string($con,$_POST['Middlename']);
    $Lastname = mysqli_real_escape_string($con,$_POST['Lastname']);
    $Gender = mysqli_real_escape_string($con,$_POST['Gender']);
    $Username = mysqli_real_escape_string($con,$_POST['UserName']);
    $Password = mysqli_real_escape_string($con,$_POST['Password']);
    $Cpass = mysqli_real_escape_string($con,$_POST['Cpass']);

    if(empty($Firstname) || empty($Middlename) || empty($Lastname) || empty($Gender) || empty($Username) || empty($Password) || empty($Cpass))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            {
                $query = "insert into tableform (ID,Fname,Mname,Lname,Gender,Uname,Password) values ('$Firstname','$Middlename','$Lastname','$Gender','$Username','$Password','$Cpass')";
                $result = mysqli_query($con,$query);

                if($result)
                {
                    echo ' Your Successfully Registered! ';
                }
                else
                {
                    echo ' Please Try again. ';
                }
            }
        }
    }

?>