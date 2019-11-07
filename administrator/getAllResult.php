<?php
require('../include/topnav.php');
include('../include/sidebar.php');

$sql = "SELECT * FROM results";
$stmt = $pdo->prepare($sql);

if ($stmt->execute()) {
    if ($stmt->rowCount() > 0) {
        echo "<div class='text-center offset-1 mt-5 border'>";
        echo "<h3>Captain Elechi Amadi Polytechnic</h3>";
        echo "<table class='table table-bordered bg-white'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col' colspan='2'>Matric Number</th>";
        echo "<th scope='col' colspan='2'>com201</th>";
        echo "<th scope='col' colspan='2'>com214</th>";
        echo "<th scope='col' colspan='2'>com216</th>";
        echo "<th scope='col' colspan='2'>com224</th>";
        echo "<th scope='col' colspan='2'>com206</th>";
        echo "<th scope='col' colspan='2'>semester</th>";
        echo "<th scope='col' colspan='2'>session</th>";
        echo "<th scope='col' colspan='2'>Department</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = $stmt->fetch()) {
            echo "<tr>";
            echo "<td colspan='2'>" . $row['matricNo'] . "</td>";
            echo "<td colspan='2'>" . $row['com201'] . "</td>";
            echo "<td colspan='2'>" . $row['com214'] . "</td>";
            echo "<td colspan='2'>" . $row['com216'] . "</td>";
            echo "<td colspan='2'>" . $row['com224'] . "</td>";
            echo "<td colspan='2'>" . $row['com206'] . "</td>";
            echo "<td colspan='2'>" . $row['session'] . "</td>";
            echo "<td colspan='2'>" . $row['semester'] . "</td>";
            echo "<td colspan='2'>" . $row['department'] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    } else {
        echo "<div class='text-center text-danger>Row doesn't exist</div>";
    }
} else {
    echo "<div class='text-center text-danger>Problem executing query</div>";
}

include('../include/footer2.php');