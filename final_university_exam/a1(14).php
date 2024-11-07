<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST['username'];
    echo "<table border='1px solid black'>";
    echo "<th>username</th>";
    echo "<tr>";
    echo "<td>";
    echo $username;
    echo "</td>";
    echo "</tr>";
    echo "</table>";
}
?>