<?php
 include'conn.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $tname=$_POST['tname'];
    $tdescript=$_POST['tdescript'];
    $tstart=$_POST['tstart'];
    $tsubmit=$_POST['tsubmit'];
    $tend =$_POST['tend'];

    $sql= "INSERT INTO `task`(`name`,`tname`,`tdescript`,`tstart`,`tsubmit`,`tend`) VALUES ('$name','$tname','$tdescript','$tstart','$tsubmit','$tend')";
    $result = mysqli_query($con,$sql);
    if($result){
        //echo "data inserted";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Celaeno Technology Task Report</img></title>
    <style>
        body{
            font-family: 'Times New Roman', Times, serif;
            background-color: rgba(227, 245, 239, 0.952);
        }
        .container{
            width:42%;
            margin: auto;
            background-color: rgb(154, 241, 241);
            padding: 15px;
            border-radius: 12px;
            box-shadow: rgb(121, 223, 200);
        }
        input {
                 padding: 10px;
                 border-radius: 5px;
                 border: none;
                 margin-bottom: 20px;
        }

        button {
          background-color: #13bdd3; /* Set background color */
          border: none; /* Remove border */
          color: rgb(15, 14, 14); /* Set text color */
          padding: 12px 24px; /* Set padding */
          text-align: center; /* Center text */
          margin: 10px; /* Add margin */
          cursor: pointer; /* Add cursor */
        }
        
        button:hover {
          background-color: #cbd3e7; /* Change background color on hover */
        }
        </style>
        
</head>
<body>
    <img src="home.png" height="20%" width="20%">
    <div class="container">
        <center><h1>Task Report</h1></center>

        <form  action="#" method="post">

            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required placeholder="Enter Your Name"><br>
         
            <label for="tname">Task name:</label><br>
            <input type="text" id="tname" name="tname" placeholder="Enter Task name" required><br>

            <label for="tdescript">Description:</label><br>
            <input type="text" id="tdescript" name="tdescript" placeholder="Enter Task Description" required><br>

            <label for="tstart">Start Date:</label><br>
            <input type="date" id="tstart" name="tstart" required><br>

            <label for="tsubmit">Submit Date:</label><br>
            <input type="datetime-local" id="tsubmit" name="tsubmit" required><br>

            <label for="tend">End Date:</label><br>
            <input type="date" id="tend" name="tend" required><br>

            <center> 
                <button class="submit" name="submit">Submit</button>
                <button class="reset" type="reset">Reset</button>
            </center> 
        </form>
    </div>
 
</body>
</html>
