<!DOCTYPE html>
<html>
    <head>
        <title>Student Form</title>
        <link rel="stylesheet" href="../../style.css" id="page-light">
        <link rel="stylesheet" href="../../style-dark.css" id="page-dark">
        <script src='../../themeswitch.js'></script>
        <script src='../../hover.js'></script>
        <link rel="stylesheet" href="Studentform.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            setTimeout(function(){
                document.body.style.opacity = 1;
            },400)
        </script>
    </head>
<body>
    <?php include '../../header.php';?>
<div class="table-class">
    
    <div class="mainclass">
<form action="stdform.php" name="form" class="form" method="post" enctype="multipart/form-data">
        <h1><u><b>Student Registration Form</b></u></h1>
        <div class="class1">
        <div class="class1-1">Name with Initials:</div>
        <div class="class1-1" id="class1-1"><input type="text" name="name"></div>
        </div>
        <div class="class1">
            <div class="class1-1">E-mail:</div>
            <div class="class1-1" id="class1-1"><input type="email" name="email"></div>
        </div>
        <div class="class1">
            <div class="class1-1">Profile photo:</div>
            <div class="class1-1" id="class1-1"><input type="file" name="photo"></div>
            </div>
            <div class="class1">
                <div class="class1-1">Age:</div>
                <div class="class1-1" id="class1-1"><input type="text" name="age"></div>
                </div>
                <div class="class1">
                    <div class="class1-1">District:</div>
                    <div class="class1-1" id="class1-1">
                        <select name="district">
                            <option value="puttalam">Puttalam</option>
                            <option value="Ampara">Ampara</option>
                            <option value="Anuradhapura">Anuradhapura</option>
                            <option value="Badulla">Badulla</option>
                            <option value="Batticaloa">Batticaloa</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Galle">Galle</option>
                            <option value="Galle">Gampaha</option>
                            <option value="Hambantota">Hambantota</option>
                            <option value="Jaffna">Jaffna</option>
                            <option value="Kalutara">Kalutara</option>
                            <option value="Kandy">Kandy</option>
                            <option value="Kegalle">Kegalle</option>
                            <option value="Kilinochchi">Kilinochchi</option>
                            <option value="Kurunegala">Kurunegala</option>
                            <option value="Mannar">Mannar</option>
                            <option value="Matale">Matale</option>
                            <option value="Vavuniya">Vavuniya</option>
                            <option value="Trincomalee">Trincomalee</option>
                            <option value="Ratnapura">Ratnapura</option>
                            <option value="Polonnaruwa">Polonnaruwa</option>
                            <option value="Nuwara-Eliya">Nuwara-Eliya</option>
                            <option value="Monaragala">Monaragala</option>
                            <option value="Mullativu">Mullativu</option>
                            <option value="Matara">Matara</option>
                        </select>
                    </div>
                </div>
                <div class="class1">
                    <div class="class1-1">Contact Number:</div>
                    <div class="class1-1" id="class1-1"><input type="tel" name="number"></div>
            </div>
            <div class="class1">
                <div class="class1-1">Grade:</div>
                <div class="class1-1" id="class1-1">
                                        <input type="radio" name="grade" value="Grade-1-5">Grade 1-5 <br>
                                        <input type="radio" name="grade" value="Grade-6-9">Grade 6-9 <br>
                                        <input type="radio" name="grade" value="O/L">O/L <br>
                                        <input type="radio" name="grade" value="A/L">A/L <br>
                </div>
            </div>
                                <div class="class1">
                                    <div class="class1-1">Medium:</div>
                                    <div class="class1-1" id="class1-1">
                                        <input type="radio" name="medium" value="Sinhala ">Sinhala <br>
                                        <input type="radio" name="medium" value="English">English <br>
                                        <input type="radio" name="medium" value="Tamil">Tamil <br>
                                    </div>
                                </div>
                                <div class="class1">
                                <div class="class1-1">Password:</div>
                                <div class="class1-1" id="class1-1"><input type="password" name="pwd1" size=7 placeholder="password"><br></div></div>
                                <div class="class1">
                                <div class="class1-1">Password Retype:</div>
                                <div class="class1-1" id="class1-1"><input type="password" name="pwd2" size=7 placeholder="password"><br></div></div>
                                            <h2>Guardian Details:</h2>
                                            <div class="class1">
                                                <div class="class1-1">Name:</div>
                                                <div class="class1-1" id="class1-1"><input type="text" name="gname"></div>
                                                </div>
                                                <div class="class1">
                                                    <div class="class1-1">Contact Number:</div>
                                                    <div class="class1-1" id="class1-1"><input type="tel" name="cnumber"></div>
                                                </div>
                                <div class="buttonclass">
                                <div class="submitbuttonclass"><input type="submit" name="sub" value="Submit" class="submitbtn"></div><br>
                                <div class="resetbuttonclass"><input type="reset" name="res" value="Reset" class="resbtn"></div>
                                <br>
</div>
</form>
</div>
</div>
<?php include '../../footer.php';?>
</body>
</html>