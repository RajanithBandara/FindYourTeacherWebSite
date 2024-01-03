<?php
    include 'db.php';
    $sqlcmd = 'SELECT InstDetails FROM InstData WHERE ID=1003';
    $sqlcmd1 = 'SELECT InstName FROM InstData WHERE ID=1003';
    $result = $conn->query($sqlcmd);
    $teachername = $conn->query($sqlcmd1);
    if ($result === false or $teachername === false) {
        die("Error in SQL query: " . $conn->error);
    }

    if ($result->num_rows > 0 and $teachername->num_rows > 0) {
        $row = $result->fetch_assoc();
        $row1 = $teachername->fetch_assoc();
        $teacherDetails = $row['InstDetails'];
        $teacherName = $row1['InstName'];
        echo "<h1>$teacherName</h1><br><span>$teacherDetails</span>";
    } else {
        echo "No records found for ID 1003";
    }

    $conn->close();
?>
