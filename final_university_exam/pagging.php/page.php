
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pagging";

$conn = mysqli_connect($servername, $username, $password, $database);

$num_per_page = 2;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$start_from = ($page - 1) * $num_per_page;

$query = "SELECT * FROM `student` LIMIT $start_from, $num_per_page";
$pass = mysqli_query($conn, $query);

echo "<table border='2px;'>";
while ($sh = mysqli_fetch_array($pass)) {
    echo "<tr>";
    echo "<td>";
    echo $sh['rn'];
    echo "</td>";

    echo "<td>";
    echo $sh['email'];
    echo "</td>";

    echo "<td>";
    echo $sh['name'];
    echo "</td>";

    echo "<td>";
    echo $sh['stay'];
    echo "</td>";

    echo "</tr>";
}
echo "</table>";

$sql = "SELECT COUNT(*) AS total FROM `student`";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_num_row = $row['total'];

$total_pages = ceil($total_num_row / $num_per_page);

echo "total number of rows: " . $total_num_row;
echo "<br>total number of pages created: " . $total_pages;

for ($i = 1; $i <= $total_pages; $i++) {
    echo "<br><a href='paging.php?page=" . $i . "'>" . $i . "</a>";
}
?> 
s