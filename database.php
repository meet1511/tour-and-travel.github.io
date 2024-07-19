<?php

class db
{
    var $con;
    function __construct()
    {
        try{
            $this->con = new PDO("mysql:host=localhost;dbname=login","root","");
            $this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    function sign_up($userid,$email,$pwd)
    {
        $qry = "insert into login_details(User_name,Email,Password) values(:a,:b,:c)";

        $stmt = $this->con->prepare($qry);

        $stmt->bindparam(":a",$userid);
        $stmt->bindparam(":b",$email);
        $stmt->bindparam(":c",$pwd);
        $stmt->execute();
    }
    
    function sign_in($User_name,$Password)
    {
        $qry = "select * FROM login_details WHERE User_name='$User_name' AND Password='$Password'";
        
        $stmt = $this->con->prepare($qry);

        $stmt->execute();

        $r = $stmt;
    
        foreach($r as $s)
        {
            // echo $s['User_name'];
            // echo $s['Password'];
            
            
        if($User_name == $s['User_name'] && $Password == $s['Password'])
        {
            
            $_SESSION['id'] = $s['id'];
            $_SESSION['User_ID'] = $s['User_ID'];
            echo "Login Successful";
            header("location:index1.php");
        }
        elseif($User_name != $s["User_name"] && $Password != $s['Password'])
        {
            header("location:login.php");
            echo "Login Not Successful";
        }
        else
        {
            echo "non";
        }
        }
        // $pass = $r['Password'];

        // $uname = $r['User_name'];


        

    

        

       // $results = mysqliquery($db, $qry);
        //if (mysqli_num_rows($results) == 1) {
          //  $_SESSION['username'] = $username;
            //$_SESSION['success'] = "you are now logged in"; 
            //header('location: web.html');
       // }else{
         //   array_push($errors, "Wrong username/password combination");
        //}
    }

    function inquiry($name,$number,$email,$from,$destination,$days)
    {
        $qry = "insert into inquiry(email,How_many,Destination,days,name,phone) values(:a,:b,:c,:d,:e,:f)";

        $stmt = $this->con->prepare($qry);

        $stmt->bindparam(":a",$name);
        $stmt->bindparam(":b",$number);
        $stmt->bindparam(":c",$email);
        $stmt->bindparam(":d",$from);
        $stmt->bindparam(":e",$destination);
        $stmt->bindparam(":f",$days);
        

        $stmt->execute();
    }
}
?>