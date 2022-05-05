<?php 
$insert = false;

    $con = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
    $db = mysql_select_db("company", $con); // Selecting Database

    //MySQL Query to read data

    

    if(!$con){
        die("Connection to this database failed due to".mysqli_connect_error());
    }


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phoneNo = $_POST['phoneNo'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $suggestions = $_POST['suggestions'];
    $sql = "INSERT INTO `Complaint_Form`.`Data` ( `First Name`, `Last Name`, `Phone Number`, `Email ID`, `Complaint`, `Date of Inconvinince`, `Suggestions`, `Time`) VALUES ('$fname', '$lname', '$phoneNo', '$email', '$subject', '$date', '$suggestions', current_timestamp());"
    
    $query = mysql_query("select * from data", $con);
      while ($row = mysql_fetch_array($query)) {
      echo "<b><a href="welcome.php?id={$row['Sr.No']}">{$row['fname']}</a></b>";
    echo "<br />";
    }   

    if($con->query($sql) == true){
       
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

   
    $con->close();


}


    ?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Portal</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>


<body style="background:  linear-gradient(to top left, #ffffff 0%, #1bcce3 100%);">
    <div class= "mainform">
    <form>


    <!--Header-->

    <div class = "header">
    <h1 style="text-align: center;"><b>Complaint Form</b></h1>
        <p>Please send us details about the incident you would like to report. Our Complaint Center will analyze your complaint and take the appropriate measures 
          in order that the reported situation will not occur at any other time in the future.</p>
          <hr/>
    </div>
    

    <br><br>
    <!-- Name-->


    <div class="form-group">
        <label for="fname" ><b>First Name:</b></label><?php echo $fname?>
      </div>

     <br>

      <div class="form-group">
        <label for="lname"><b>Last Name:</b></label> <?php echo $lname?>
      </div>
   
      <br>

    <!-- Phone number-->
    
    <div class="form-group">
        <label for="phoneNo"> <b>Phone Number: </b> </label><?php echo $phoneNo?>
      </div>
    
      <br>
      <!-- Enter your email address -->

      <div class="form-group">
          <label for="email"><b>Email ID:</b></label><?php echo $email?>
      </div>
      <br>
    
    <!-- Complaint Details-->

    <label for="subject"><b>Complaint Details:</b></label><?php echo $subject?>
    <br>

    <!-- Date of inconinience -->
    <label for="date"><b>Date of Inconvinince</b></label><?php echo $date?>
    <br>


    <!-- Suggestion Box -->

    <label for="suggestions"><b>Suggestions:</b></label> <?php echo $suggestions?>
    <br>

    <!--Submit Button-->
    <!-- <center> -->
        <button type="button" class="btn btn-outline-primary" >Submit</button>
         <button type="reset" class="btn btn-outline-primary" >Reset</button>
    <!-- </center> -->
    
</div>

</body>

</html>

