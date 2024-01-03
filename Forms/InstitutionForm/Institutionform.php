<html>
    <head>
        <title>Institute Registration Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../style.css" id="page-light">
        <link rel="stylesheet" href="../../style-dark.css" id="page-dark">
        <script src='../../themeswitch.js'></script>
        <script src='../../hover.js'></script>
        <link rel="stylesheet" href="InstitutionForm.css">
    </head>
    <body>
        <?php include '../../header.php';?>
        <center>
            <div class="table-class">
                <div class="mainpart">
                <form action="Instform.php" name="institutionform" class="institutionform" method="post">
                <div class="main">
                    <h1>Institute Registration Form</h1>

                    <div class="part1">
                        <div class="part1-1">Name with initials:</div>
                        <div class="part1-1" id="part1-1"><input type="text" name="name"></div>
                    </div>
                    
                    <div class="part1">
                        <div class="part1-1">E-mail:</div>
                        <div class="part1-1" id="part1-1"><input type="email" name="email"></div>
                    </div>

                    <div class="part1">
                        <div class="part1-1">Contact No.:</div>
                        <div class="part1-1" id="part1-1"><input type="number" name="contnumber"></div>
                    </div>

                    <div class="part1">
                        <div class="part1-1">Password:</div>
                        <div class="part1-1" id="part1-1"><input type="password" name="passwo"></div>
                    </div>

                    <div class="part1">
                        <div class="part1-1">Password Retype:</div>
                        <div class="part1-1" id="part1-1"><input type="password" name="pass"></div>
                    </div>

                    <div class="part1">
                        <div class="part1-1">Institute website:</div>
                        <div class="part1-1" id="part1-1"><input type="url" name="inswebsite"></div>
                    </div>

                    <div class="part1">
                        <div class="part1-1">District:</div>
                        <div class="part1-1" id="part1-1">
                            <select name="District">
                                <option value=0>Select your District</option>
                                <option value="Colombo">Colombo</option>
                                <option value="Gampaha">Gampaha</option>
                                <option value="Kalutara">Kalutara</option>
                                <option value="Kandy">Kandy</option>
                                <option value="Matale">Matale</option>
                                <option value="Nuwara Eliya">Nuwara Eliya</option>
                                <option value="Galle">Galle</option>
                                <option value="Matara">Matara</option>
                                <option value="Hambantota">Hambantota</option>
                                <option value="Jaffna">Jaffna</option>
                                <option value="Kilinochchi">Kilinochchi</option>
                                <option value="Mannar">Mannar</option>
                                <option value="Vavuniya">Vavuniya</option>
                                <option value="Mullaitivu">Mullaitivu</option>
                                <option value="Batticaloa">Batticaloa</option>
                                <option value="Ampara">Ampara</option>
                                <option value="Trincomalee">Trincomalee</option>
                                <option value="Kurunegala">Kurunegala</option>
                                <option value="Puttalam">Puttalam</option>
                                <option value="Anuradhapura">Anuradhapura</option>
                                <option value="Polonnaruwa">Polonnaruwa</option>
                                <option value="Badulla">Badulla</option>
                                <option value="Moneragala">Moneragala</option>
                                <option value="Ratnapura">Ratnapura</option>
                                <option value="Kegalle">Kegalle</option>

                            </select>
                        </div>
                    </div>

                    <div class="part1">
                        <div class="part1-1">Subjects:</div>
                        <div class="part1-1" id="part1-1">
                            <dl>
                                <dt><input type="checkbox" name="Grades" value="Primary-Grades" id="pgrade"><b>Primary Grades</b></dt>
                                <div class="PrimaryGrades" id="primarygrades">
                                <dd><input type="checkbox" value="Sinhala Language" name="subprimary">Sinhala Language</dd>
                                <dd><input type="checkbox" value="English Language" name="subprimary">English</dd>
                                <dd><input type="checkbox" value="Tamil Language" name="subprimary">Tamil Language</dd>
                                <dd><input type="checkbox" value="Tamil Secondary" name="subprimary">Tamil Secondary</dd>
                                <dd><input type="checkbox" value="Sinhala Secondary" name="subprimary">Sinhala Secondary</dd>
                                <dd><input type="checkbox" value="Mathematics" name="subprimary">Mathematics</dd>
                                <dd><input type="checkbox" value="Environment" name="subprimary">Environment</dd>
                                <dd><input type="checkbox" value="Catholicism" name="subprimary">Catholicism</dd>
                                <dd><input type="checkbox" value="Christianity" name="subprimary">Christianity</dd>
                                <dd><input type="checkbox" value="Buddhism" name="subprimary">Buddhism</dd>
                                <dd><input type="checkbox" value="Saivanvri" name="subprimary">Saivanvri</dd>
                                <dd><input type="checkbox" value="Islam" name="subprimary">Islam</dd><br>
                                </div>

                                <script>
                                    var checkboxelem = document.getElementById('pgrade');
                                    function displaysect()
                                    {
                                        if(checkboxelem.checked)
                                        {
                                            document.getElementById('primarygrades').style.display = 'block';
                                        }
                                        else
                                        {
                                            document.getElementById('primarygrades').style.display = 'none'; 
                                        }
                                    }
                                    displaysect();

                                    checkboxelem.addEventListener('change',displaysect);
                                </script>
                                
                                <dt><input type="checkbox" name="Grades" value="Grade-6-9" id="sixtonine"><b>Grade 6-9</b></dt>
                                <div class="Grade6-9" id="gradesixtonine">
                                <dd><input type="checkbox" value="Sinhala Language" name="subsixtonine">Sinhala Language</dd>
                                <dd><input type="checkbox" value="Tamil Language" name="subsixtonine">Tamil Language</dd>
                                <dd><input type="checkbox" value="Catholicism" name="subsixtonine">Catholicism</dd>
                                <dd><input type="checkbox" value="Christianity" name="subsixtonine">Christianity</dd>
                                <dd><input type="checkbox" value="Buddhism" name="subsixtonine">Buddhism</dd>
                                <dd><input type="checkbox" value="Islam" name="subsixtonine">Islam</dd>
                                <dd><input type="checkbox" value="Saivaneri" name="subsixtonine">Saivaneri</dd>
                                <dd><input type="checkbox" value="English Language" name="subsixtonine">English Language</dd>
                                <dd><input type="checkbox" value="Mathematics" name="subsixtonine">Mathematics</dd>
                                <dd><input type="checkbox" value="History" name="subsixtonine">History</dd>
                                <dd><input type="checkbox" value="Science" name="subsixtonine">Science</dd>
                                <dd><input type="checkbox" value="Health Science" name="subsixtonine">Health Science</dd>
                                <dd><input type="checkbox" value="Tamil Secondary" name="subsixtonine">Tamil Secondary</dd>
                                <dd><input type="checkbox" value="Sinhala Secondary" name="subsixtonine">Sinhala Secondary</dd>
                                <dd><input type="checkbox" value="Geography" name="subsixtonine">Geography</dd>
                                <dd><input type="checkbox" value="Civic Education" name="subsixtonine">Civic Education</dd>
                                <dd><input type="checkbox" value="Dancing" name="subsixtonine">Dancing</dd>
                                <dd><input type="checkbox" value="Western Music" name="subsixtonine">Western Music</dd>
                                <dd><input type="checkbox" value="Eastern Music" name="subsixtonine">Eastern Music</dd>
                                <dd><input type="checkbox" value="Art" name="subsixtonine">Art</dd>
                                <dd><input type="checkbox" value="Drama and Theatre" name="subsixtonine">Drama and Theatre</dd><br>
                                </div>

                                <script>
                                    var checkboxelem_two = document.getElementById('sixtonine');
                                    function displaysect()
                                    {
                                        if(checkboxelem_two.checked)
                                        {
                                            document.getElementById('gradesixtonine').style.display = 'block';
                                        }
                                        else
                                        {
                                            document.getElementById('gradesixtonine').style.display = 'none'; 
                                        }
                                    }
                                    displaysect();

                                    checkboxelem_two.addEventListener('change',displaysect);
                                </script>
                            
                                <dt><input type="checkbox" name="Grades" value="Ordinary-Level" id="ord-level"><b>Ordinary Level</b></dt>
                                <div class="ordinarylevel" id="ordilevel">
                                    <dd><input type="checkbox" value="Catholicism" name="subolevel">Catholicism</dd>
                                    <dd><input type="checkbox" value="Christianity" name="subolevel">Christianity</dd>
                                    <dd><input type="checkbox" value="Buddhism" name="subolevel">Buddhism</dd>
                                    <dd><input type="checkbox" value="Saivanvri" name="subolevel">Saivanvri</dd>
                                    <dd><input type="checkbox" value="Islam" name="subolevel">Islam</dd>
                                    <dd><input type="checkbox" value="Sinhala Language" name="subolevel">Sinhala Language</dd>
                                    <dd><input type="checkbox" value="English Language" name="subolevel">English Language</dd>
                                    <dd><input type="checkbox" value="Tamil Language" name="subolevel">Tamil Language</dd>
                                    <dd><input type="checkbox" value="Mathematics" name="subolevel">Mathematics</dd>
                                    <dd><input type="checkbox" value="History" name="subolevel">History</dd>
                                    <dd><input type="checkbox" value="Science" name="subolevel">Science</dd>
                                    <dd><input type="checkbox" value="Commerce" name="subolevel">Commerce</dd>
                                    <dd><input type="checkbox" value="Geography" name="subolevel">Geography</dd>
                                    <dd><input type="checkbox" value="Civic Education" name="subolevel">Civic Education</dd>
                                    <dd><input type="checkbox" value="Sinhala Secondary" name="subolevel">Sinhala Secondary</dd>
                                    <dd><input type="checkbox" value="Tamil Secondary" name="subolevel">Tamil Secondary</dd>
                                    <dd><input type="checkbox" value="French" name="subolevel">French</dd>
                                    <dd><input type="checkbox" value="German" name="subolevel">German</dd>
                                    <dd><input type="checkbox" value="Dancing" name="subolevel">Dancing</dd>
                                    <dd><input type="checkbox" value="Western Music" name="subolevel">Western Music</dd>
                                    <dd><input type="checkbox" value="Eastern Music" name="subolevel">Eastern Music</dd>
                                    <dd><input type="checkbox" value="Art" name="subolevel">Art</dd>
                                    <dd><input type="checkbox" value="Drama and Theatre" name="subolevel">Drama and Theatre</dd>
                                    <dd><input type="checkbox" value="Sinhala Literary" name="subolevel">Sinhala Literary</dd>
                                    <dd><input type="checkbox" value="English Literary" name="subolevel">English Literary</dd>
                                    <dd><input type="checkbox" value="ICT" name="subolevel">ICT</dd>
                                    <dd><input type="checkbox" value="Home Economics" name="subolevel">Home Economics</dd>
                                    <dd><input type="checkbox" value="Health Science" name="subolevel">Health Science</dd>
                                    <dd><input type="checkbox" value="Media Studies" name="subolevel">Media Studies</dd><br>
                                </div>

                                <script>
                                    var checkboxelem_three = document.getElementById('ord-level');
                                    function displaysect()
                                    {
                                        if(checkboxelem_three.checked)
                                        {
                                            document.getElementById('ordilevel').style.display = 'block';
                                        }
                                        else
                                        {
                                            document.getElementById('ordilevel').style.display = 'none'; 
                                        }
                                    }
                                    displaysect();

                                    checkboxelem_three.addEventListener('change',displaysect);
                                </script>
        
        
                                <dt><input type="checkbox" name="Grades" value="Advanced-Level" id="ad-level"><b>Advanced Level</b></dt><br>
                                <div class="advancedlevel" id="alevel">

                                    <script>
                                        var checkboxelem_four = document.getElementById('ad-level');
                                        function displaysect()
                                        {
                                            if(checkboxelem_four.checked)
                                            {
                                                document.getElementById('alevel').style.display = 'block';
                                            }
                                            else
                                            {
                                                document.getElementById('alevel').style.display = 'none'; 
                                            }
                                        }
                                        displaysect();
    
                                        checkboxelem_four.addEventListener('change',displaysect);
                                    </script>   
        
                                <dd><input type="checkbox" name="Streams" value="Science" id="science"><b>Biology and Mathematics Stream</b></dd><br>
                                <div class="bioscience" id="sciencesub">
                                    <dd><input type="checkbox" value="Biology" name="subsciencestream">Biology</dd>
                                    <dd><input type="checkbox" value="Combined Mathematics" name="subsciencestream">Combined Mathematics</dd>
                                    <dd><input type="checkbox" value="Chemistry" name="subsciencestream">Chemistry</dd>
                                    <dd><input type="checkbox" value="Physics" name="subsciencestream">Physics</dd>
                                    <dd><input type="checkbox" value="ICT" name="subsciencestream">ICT</dd><br>

                                    <script>
                                        var checkboxelem_five = document.getElementById('science');
                                        function displaysect()
                                        {
                                            if(checkboxelem_five.checked)
                                            {
                                                document.getElementById('sciencesub').style.display = 'block';
                                            }
                                            else
                                            {
                                                document.getElementById('sciencesub').style.display = 'none'; 
                                            }
                                        }
                                        displaysect();
    
                                        checkboxelem_five.addEventListener('change',displaysect);
                                    </script>  
                                </div>
                                
        
                                <dd><input type="checkbox" name="Stream" value="Commerce" id="commerce"><b>Commerce Stream</b></dd><br>
                                <div class="Commercestream" id="commercesub">
                                <dd><input type="checkbox" value="Statistics" name="subcommercestream">Statistics</dd>
                                <dd><input type="checkbox" value="Business Studies" name="subcommercestream">Business Studies</dd>
                                <dd><input type="checkbox" value="Accounting" name="subcommercestream">Accounting</dd>
                                <dd><input type="checkbox" value="Economics" name="subcommercestream">Economics</dd><br>
                                </div>

                                <script>
                                    var checkboxelem_six = document.getElementById('commerce');
                                    function displaysect()
                                    {
                                        if(checkboxelem_six.checked)
                                        {
                                            document.getElementById('commercesub').style.display = 'block';
                                        }
                                        else
                                        {
                                            document.getElementById('commercesub').style.display = 'none'; 
                                        }
                                    }
                                    displaysect();

                                    checkboxelem_six.addEventListener('change',displaysect);
                                </script>

        
                                <dd><input type="checkbox" name="Stream" value="Arts" id="art" ><b>Art Stream</b></dd><br>
                                <div class="artsstream" id="arts">
                                <dd><input type="checkbox" value="Geography" name="subartstream">Geography</dd>
                                <dd><input type="checkbox" value="Political Science" name="subartstream">Political Science</dd>
                                <dd><input type="checkbox" value="History" name="subartstream">History</dd>
                                <dd><input type="checkbox" value="Media and Studies" name="subartstream">Media and Studies</dd>
                                <dd><input type="checkbox" value="Buddhism" name="subartstream">Buddhism</dd>
                                <dd><input type="checkbox" value="Saivanvri" name="subartstream">Saivanvri</dd>
                                <dd><input type="checkbox" value="Islam" name="subartstream">Islam</dd>
                                <dd><input type="checkbox" value="Catholicism" name="subartstream">Catholicism</dd>
                                <dd><input type="checkbox" value="Christianity" name="subartstream">Christianity</dd>
                                <dd><input type="checkbox" value="Dancing" name="subartstream">Dancing</dd>
                                <dd><input type="checkbox" value="Western Music" name="subartstream">Western Music</dd>
                                <dd><input type="checkbox" value="Eastern Music" name="subartstream">Eastern Music</dd>
                                <dd><input type="checkbox" value="Art" name="subartstream">Art</dd>
                                <dd><input type="checkbox" value="Drama and Theatre" name="subartstream">Drama and Theatre</dd>
                                <dd><input type="checkbox" value="Sinhala Language" name="subartstream">Sinhala Language</dd>
                                <dd><input type="checkbox" value="English Language" name="subartstream">English Language</dd>
                                <dd><input type="checkbox" value="French" name="subartstream">French</dd>
                                <dd><input type="checkbox" value="German" name="subartstream">German</dd>
                                <dd><input type="checkbox" value="Japanese" name="subartstream">Japanese</dd>
                                </div>

                                <script>
                                    var checkboxelem_seven = document.getElementById('art');
                                    function displaysect()
                                    {
                                        if(checkboxelem_seven.checked)
                                        {
                                            document.getElementById('arts').style.display = 'block';
                                        }
                                        else
                                        {
                                            document.getElementById('arts').style.display = 'none'; 
                                        }
                                    }
                                    displaysect();

                                    checkboxelem_seven.addEventListener('change',displaysect);
                                </script>
                                
                            </div>
                            </dl>
                            </div>
                            </div>
                                
                                <div class="part1">
                                    <div class="part1-1">Medium:</div>
                                    <div class="part1-1" id="part1-1">
                                        <dl>
                                            <dt><input type="checkbox" name="medium" value="Sin">Sinhala</dt>
                                            <dt><input type="checkbox" name="medium" value="Eng">English</dt>
                                            <dt><input type="checkbox" name="medium" value="Tam">Tamil</dt>
                                        </dl>
                                    </div>
                                </div>
   


                            <div class="buttonclass">
                    <div class="submitbuttonclass"><input type="submit" name="sub" value="submit" class="submitbtn"></div><br>
                    <div class="resetbuttonclass"><input type="reset" name="res" value="reset" class="resbtn"></div>
                    <br>
                    </div>
                    </div>

            </div>
                    

                </form>
        </center>
    
        <?php include '../../footer.php';?> 
    </body>
</html>