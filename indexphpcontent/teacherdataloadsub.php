<?php
include 'db.php';

$sql = "SELECT Qualification FROM TeacherProfile where Email='hello@englishteacher.com'";

$sqlcmd = mysqli_query($conn, $sql);

if (mysqli_num_rows($sqlcmd) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($sqlcmd)) {
        echo "" . $row["Qualification"]. "<br>";
    }
} else {
    echo "0 results";
}
?>