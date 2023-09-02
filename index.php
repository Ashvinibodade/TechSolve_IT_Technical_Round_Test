<?php
    if(isset($_POST['submit']))
    {
        $fname=$_POST['fullname'];
        $pnumber=$_POST['phonenumber'];
        $email=$_POST['email'];
        $sub=$_POST['subject'];
        $mess=$_POST['message'];
   

        $host="localhost";
        $username="root";
        $password="1234";
        $dbname="contact_form";

        $con=mysqli_connect($host,$username,$password,$dbname);

        if (!$con)
        {
            die("Connection failed".mysqli_connect_error());
        }
        else
        {
            echo " Connection was successfull";
        }

        $sql="INSERT INTO `contact_form` (`fullname`, `phonenumber`, `Email`, `Subject`, `Message`) VALUES ('$fname', '$pnumber', '$email', '$sub', '$mess')";
        ";

        $res=mysqli_query($con,$sql);

        if ($res)
        {
            echo "Inserted successfully";
        }
        else
        {
            echo "Record has not been inserted succesfully".mysqli_error($con);
        
        }

        mysqli_close($con);
    }
?>
