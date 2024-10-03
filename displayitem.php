<?php
include("menu.php");
$q = "SELECT * FROM item";
include "dbconnect.php";
$result = mysqli_query($con, $q);
$table = "<div class='main-content'><div class='title'>Item Details</div><div class='content'>";
$table .= "<table border=1 class='display_table'>";
$table .= "<tr><th>ID</th><th>Item Name</th><th>Price</th><th>Stock</th><th>Photo</th><th>Remarks</th><th>Option</th></tr>";
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) { 
    $id = $row[0];
    $table .= "<tr>";
    foreach ($row as $value) { 
        $table .= "<td>$value</td>";
    }
    $table .= "<td><a class='btn delete' href='deleteitem.php?id=$id' onclick='return deleteitem($id)'>delete</a></td>";
    $table .= "<td><a class='btn success' href='viewitem.php?id=$id'>View</a></td>";
    $table .= "</tr>";
}
$table .= "</table></div>";
echo $table;
?>
