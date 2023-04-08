<?php
include 'conn.php';

$sql = "SELECT * FROM `task`;";

$result = mysqli_query($con, $sql);

if ($result) {
  ?>
  <body style="background-color:rgb(154, 241, 241); ">
  <center>
    <h1>Report List</h1>
    <table border="3" cellspacing="8"  style="background-color:rgba(227, 245, 239, 0.952) ">
      <tr>

        <th>Id</th>
        <th>Name</th>
        <th>Task Name</th>
        <th>Description</th>
        <th>Start Date</th>
        <th>Submit date</th>
        <th>End Date</th>
        <th>Operations</th>
      </tr>
  </center></body>
  <?php
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $tname = $row['tname'];
    $tdescript = $row['tdescript'];
    $tstart = $row['tstart'];
    $tsubmit = $row['tsubmit'];
    $tend = $row['tend'];

    echo '<tr>
                      <td>' . $id . '</td>
                     <td>' . $name . '</td>
                     <td>' . $tname . '</td>
                     <td>' . $tdescript . '</td>
                     <td>' . $tstart . '</td>
                     <td>' . $tsubmit . '</td>
                     <td>' . $tend . '</td>
                     <td><button style="background-color:#F7DC6F;"><a href="update.php?update=' . $id . '">Edit</a></button>
                     <button style="background-color: #F1948A;"><a href="delet.php?delete=' . $id . '">Delete </a></button></td>
                </tr>';
  }
} else {
  echo "no results";
}
?>