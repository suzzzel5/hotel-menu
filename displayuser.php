<?php
include("menu.php");

include "dbconnect.php";

$q = "SELECT id, username, status FROM user";


$result = mysqli_query($con, $q);
if (!$result) {
    die("Query failed: " . mysqli_error($con));
}

$table = "<div class='main-content'><div class='title'>Item details</div><div class='content'>";
$table .= "<table border=1 class='display_table'>";
$table .= "<tr><th>ID</th><th>Username</th><th>Status</th><th colspan=2>Action</th></tr>";


while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    $id = $row[0];
    $table .= "<tr>";
    foreach ($row as $value) {
        $table .= "<td>$value</td>";
    }
    $table .= "<td><a class='btn delete' href='suspendUser.php?id=$id'>Suspend</a></td>";
    $table .= "<td><a class='btn success' href='ActiveUser.php?id=$id'>Activate</a></td>";
    $table .= "</tr>";
}

$table .= "</table></div></div>";
echo $table;

mysqli_close($con);
?>
