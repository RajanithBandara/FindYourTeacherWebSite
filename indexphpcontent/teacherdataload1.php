<?php
include 'db.php';

$sql = "SELECT TeacherName FROM TeacherProfile where Email='hello@historyteacher.com'";

$sqlcmd = mysqli_query($conn, $sql);

if (mysqli_num_rows($sqlcmd) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($sqlcmd)) {
        echo "" . $row["TeacherName"]. "<br>";
    }
} else {
    echo "0 results";
}
?>