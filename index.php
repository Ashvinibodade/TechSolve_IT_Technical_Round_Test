<?php
    if(isset($_POST['submit']))
    {
        $fname=$_POST['fullname'];
        $pnumber=$_POST['phonenumber'];
        $email=$_POST['email'];
        $sub=$_POST['subject'];
        $mess=$_POST['message'];
    }

    $host="localhost";
    $username="root";
    $password="1234";
    $dbname="contact_form";

    $con=mysql_connect($host,$username,$password,$dbname);

    if (!$con)
    {
        die("Connection failed".mysql_connect_error());
    }
    

    $sql="INSERT INTO contact_form (id ,fullname, phonenumber,Email,Subject,Message) VALUES('0','$fname','$pnumber','$email','$sub','$mess')";

    $res=mysql_query($con,$sql);

    if ($res)
    {
        echo "Inserted successfully";
    }

    mysql_close($con);

?>