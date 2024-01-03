<?php

$teacheremail = "hello@englishteacher.com";
$imagedir = 'Forms/TeacherForm/RegisteredTeacherImages/';


$institution1path = $imagedir . $teacheremail . DIRECTORY_SEPARATOR . scandir($imagedir . $teacheremail)[2];

if (file_exists($institution1path)) {
    echo "<img src='$institution1path' width=150 height=150 alt='$institution1' style='border-radius:50%; box-shadow: 0px 2px 2px 2px rgba(0, 0, 0, 0.285);'>";
} else {
    echo "Image not found for $institution1";
}
?>