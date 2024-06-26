<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Page</title>
    <link rel="stylesheet" type="text/css" href="teacher.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="view.css">
    <script src="arrowkey.js"></script>
    <script src="view.js"></script>

</head>

<body>
    <?php include '../header.php';?>

    <body style="transition: all 0.5s ease-in;">
        <script>
            document.body.style.opacity = 0;
            function displaybody() {
                document.body.style.opacity = 1;
            }
            setInterval(displaybody, 300);
        </script>
    </body>
    <br>
    <div class="table-class">
        <form action="#" name=""  class="">

            <div class="slider-container">
                <div class="slides">
                    <!-- Teacher 1 -->
                    <div class="slide">
                        <div class="teacher-profile">
                            <img src="images/profile1.jpg" height="100" width="100" alt="Teacher 1">
                            <h2>Julie Watson</h2>
                            <p>Subject: Math</p>
                            <a href="TeacherProfile\teacherprofile2.html" class="view-button">View Profile</a>
                        </div>
                    </div>

                    <!-- Teacher 2 -->
                    <div class="slide">
                        <div class="teacher-profile">
                            <img src="images/profile3.jpg" height="100" width="100" alt="Teacher 2">
                            <h2>Jenny McKnew</h2>
                            <p>Subject: Science</p>
                            <a href="TeacherProfile\teacherprofile4.html" class="view-button"
                                onclick="openProfileBox()">View Profile</a>
                        </div>
                    </div>

                    <!-- Teacher 3 -->
                    <div class="slide">
                        <div class="teacher-profile">
                            <img src="images/profilemain.jpg" height="100" width="100" alt="Teacher 3">
                            <h2>James Anderson</h2>
                            <p>Subject: English</p>
                            <a href="TeacherProfile\teacherprofile1.html" class="view-button"
                                onclick="openProfileBox()">View Profile</a>
                        </div>
                    </div>

                    <!-- Teacher 4 -->
                    <div class="slide">
                        <div class="teacher-profile">
                            <img src="images/profile2.jpg" height="100" width="100" alt="Teacher 4">
                            <h2>Marc McKnew</h2>
                            <p>Subject: History</p>
                            <a href="TeacherProfile\teacherprofile3.html" class="view-button"
                                onclick="openProfileBox()">View Profile</a>
                        </div>
                    </div>
                    <!-- Teacher 5 -->
                    <div class="slide">
                        <div class="teacher-profile">
                            <img src="images/download.png" height="100" width="100" alt="Teacher 1">
                            <h2>Teacher 5</h2>
                            <p>Subject: Math</p>
                            <a href="teacherprofile\teacherprofile.html" class="view-button">View Profile</a>
                        </div>
                    </div>

                    <!-- Teacher 6 -->
                    <div class="slide">
                        <div class="teacher-profile">
                            <img src="images/download.png" height="100" width="100" alt="Teacher 2">
                            <h2>Teacher 6</h2>
                            <p>Subject: Science</p>
                            <a href="teacherprofile\teacherprofile.html" class="view-button">View Profile</a>
                        </div>
                    </div>

                    <!-- Teacher 7 -->
                    <div class="slide">
                        <div class="teacher-profile">
                            <img src="images/download.png" height="100" width="100" alt="Teacher 3">
                            <h2>Teacher 7</h2>
                            <p>Subject: English</p>
                            <a href="teacherprofile\teacherprofile.html" class="view-button">View Profile</a>
                        </div>
                    </div>

                    <!-- Teacher 8 -->
                    <div class="slide">
                        <div class="teacher-profile">
                            <img src="images/download.png" height="100" width="100" alt="Teacher 4">
                            <h2>Teacher 8</h2>
                            <p>Subject: History</p>
                            <a href="teacherprofile\teacherprofile.html" class="view-button">View Profile</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="navigation">
                <button class="prev-button" onclick="prevSlide()">Previous</button>
                <button class="next-button" onclick="nextSlide()">Next</button>
            </div>

            <script>
                const slides = document.querySelector('.slides');
                let currentIndex = 0;

                function showSlide(index) {
                    const slideWidth = document.querySelector('.slide').offsetWidth;
                    slides.style.transform = `translateX(-${index * slideWidth}px)`;
                }

                function nextSlide() {
                    currentIndex = (currentIndex + 3) % document.querySelectorAll('.slide').length;
                    showSlide(currentIndex);
                }

                function prevSlide() {
                    currentIndex = (currentIndex - 3 + document.querySelectorAll('.slide').length) % document.querySelectorAll('.slide').length;
                    showSlide(currentIndex);
                }

                setInterval(nextSlide, 5000); // Auto slide every 5 seconds
            </script>
        <?php include '../footer.php';?>
</body>

</html>