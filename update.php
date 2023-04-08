<?php
include 'conn.php';
$id = $_GET['update'];
$sql = "SELECT * FROM task where id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$tname = $row['tname'];
$tdescript = $row['tdescript'];
$tstart = $row['tstart'];
$tsubmit = $row['tsubmit'];
$tend = $row['tend'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $tname = $_POST['tname'];
    $tdescript = $_POST['tdescript'];
    $tstart = $_POST['tstart'];
    $tsubmit = $_POST['tsubmit'];
    $tend = $_POST['tend'];

    $sql = "UPDATE task set id=$id,name='$name',tname='$tname',tdescript='$tdescript',tstart='$tstart',tsubmit='$tsubmit',tend='$tend' where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Celaeno Technology Task Report</img></title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: rgba(227, 245, 239, 0.952);
        }

        .container {
            width: 42%;
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
            background-color: #13bdd3;
       
            border: none;
            color: rgb(15, 14, 14);
            padding: 12px 24px;
            text-align: center;
            margin: 10px;
            cursor: pointer;
            
        }

        button:hover {
            background-color: #cbd3e7;
            /* Change background color on hover */
        }
    </style>

</head>

<body>
    <img src="home.png" height="20%" width="20%">
    <div class="container">
        <center>
            <h1>Task Report</h1>
        </center>

        <form action="#" method="post">

            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required placeholder="Enter Your Name" value="<?php echo $name;?>"><br>

            <label for="tname">Task name:</label><br>
            <input type="text" id="tname" name="tname" placeholder="Enter Task name" required value="<?php echo $tname;?>"><br>

            <label for="tdescript">Description:</label><br>
            <input type="text" id="tdescript" name="tdescript" placeholder="Enter Task Description" required value="<?php echo $tdescript;?>"><br>

            <label for="tstart">Start Date:</label><br>
            <input type="date" id="tstart" name="tstart" required value="<?php echo $tstart; ?>"><br>

            <label for="tsubmit">Submit Date:</label><br>
            <input type="datetime-local" id="tsubmit" name="tsubmit" required value="<?php echo $tsubmit; ?>"><br>

            <label for="tend">End Date:</label><br>
            <input type="date" id="tend" name="tend" required value="<?php echo $tend; ?>"><br>

            <center>
                <button class="submit" name="submit">Update</button>
                <button class="reset" type="reset">Reset</button>
            </center>
        </form>
    </div>

</body>

</html>