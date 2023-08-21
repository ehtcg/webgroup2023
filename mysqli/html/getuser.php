<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show user</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    td,
    th {
        border: 1px solid black;
        padding: 5px;
    }

    th {
        text-align: left;
    }
    </style>
</head>

<body>

    <?php
$q = intval($_GET['q']);
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "demo" ;

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}


// $con = mysqli_connect('localhost','peter','abc123');
// if (!$con) {
//   die('Could not connect: ' . mysqli_error($con));
// }

mysqli_select_db($con,"demo");
$sql="SELECT * FROM user WHERE USER_ID = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>FUll Name</th>
<th>Email</th>
<th>Age</th>
<th>Salary</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['fullname'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['salary'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>

</html>