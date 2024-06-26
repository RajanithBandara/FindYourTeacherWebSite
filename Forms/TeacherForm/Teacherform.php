<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Teacherform.css">
    <link rel="stylesheet" href="../../style.css" id="page-light">
    <script src='../../hover.js'></script>
    <title>Teacher Form</title>
</head>
<body>
    <?php include '../../header.php';?>
      <center>
    <div class="table-class">
      <div class="mainpart">
      <form action="tchrform.php" name="tacherform" class="teacherform" method="post" enctype="multipart/form-data">
          <div class="main">
              <h1>Teacher Registration Form</h1>
              <div class="section1">
                  <div class="section1-1">Name with initials</div>
                  <div class="section1-1"><input type="text" name="namewithinitials"></div>
          </div>
              <div class="section1">
                  <div class="section1-1">Email</div>
                  <div class="section1-1"><input type="email" name="emailaddress"></div>
              </div>
              <div class="section1">
                  <div class="section1-1" >Profile Photo</div>
                  <div class="section1-1" id="propic"><input style="text-align: left;" type="file" id="picupload"  name="profilephoto"></div>
              </div>
              <div class="section1">
                  <div class="section1-1">NIC</div>
                  <div class="section1-1"><input type="text" name="nicnumber"></div>
              </div>
              <div class="section1">
                  <div class="section1-1">Contact No:</div>
                  <div class="section1-1"><input type="number" name="contactnumber"></div>
              </div>
              <div class="section1">
                  <div class="section1-1">District</div>
                  <div class="section1-1" >
                      <select name="district">
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
                          <option value="Mullativu">Mullativu</option>
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
              <div class="section1">
                  <div class="section1-1">Age</div>
                  <div class="section1-1"><input type="number" name="age"></div>
              </div>
              <div class="section1">
                  <div class="section1-1">Gender</div>
                  <div class="section1-1">
                      <input type="radio" name="Gender" value="male">Male<br>
                      <input type="radio" name="Gender" value="female">Female<br>
                  </div>
              </div>
              <div class="section1">
                  <div class="section1-1">Qualifications</div>
                  <div class="section1-1"><input type="text" name="qualifications"></div>
              </div>
              <div class="section1">
                  <div class="section1-1">Subjects</div>
                  <div class="section1-1">
                      <dl>
                          <dt><input type="checkbox" id="Primary-Grades" name="Primary-Grades" value="Primary-Grades" >Primary Grades</dt>
                          <div class="primarygrades" id="primarygrades">
                              <dd><input type="checkbox" value="Sinhala-language" name="subjects">Sinhala language</dd>
                              <dd><input type="checkbox" value="English-language" name="subjects">English language</dd>
                              <dd><input type="checkbox" value="Tamil-language" name="subjects">Tamil language</dd>
                              <dd><input type="checkbox" value="Mathematics "name="subjects">Mathematics</dd>
                              <dd><input type="checkbox" value="Environment" name="subjects">Environment</dd>
                              <dd><input type="checkbox" value="Catholicism" name="subjects">Catholicism</dd>
                              <dd><input type="checkbox" value="Christianity" name="subjects">Christianity</dd>
                              <dd><input type="checkbox" value="Buddhism" name="subjects">Buddhism</dd>
                              <dd><input type="checkbox" value="Saivaneri" name="subjects">Saivaneri</dd>
                              <dd><input type="checkbox" value="Islam" name="subjects">Islam</dd>
                              <dd><input type="checkbox" value="Tamil-secondary" name="subjects">Tamil Secondary</dd>
                              <dd><input type="checkbox" value="Sinhala-secondary" name="subjects">Sinhala Secondary</dd>
                          </div>
                          <script>
                              var checkboxelem = document.getElementById('Primary-Grades');
                              function displaysect(){
                                 if (checkboxelem.checked){
                                  document.getElementById('primarygrades').style.display = 'block';
                                 } else{
                                  document.getElementById('primarygrades').style.display = 'none';
                                 }
                              }
                              displaysect();
  
                              checkboxelem.addEventListener('change',displaysect);
                          </script>
                          <dt><input type="checkbox" name="Grade-6-9" id="Six-to-nine" value="Grade-6-9">Grade 6-9</dt>
                          <div class="gradesixtonine" id="Six-to-nine-section">
                              <dd><input type="checkbox" value="Sinhala-language" name="subjects">Sinhala language</dd>
                              <dd><input type="checkbox" value="Tamil-language" name="subjects">Tamil language</dd>
                              <dd><input type="checkbox" value="Catholicism" name="subjects">Catholicism</dd>
                              <dd><input type="checkbox" value="Christianity" name="subjects">Christianity</dd>
                              <dd><input type="checkbox" value="Buddhism" name="subjects">Buddhism</dd>
                              <dd><input type="checkbox" value="Islam" name="subjects">Islam</dd>
                              <dd><input type="checkbox" value="Saivaneri" name="subjects">Saivaneri</dd>
                              <dd><input type="checkbox" value="English-language" name="subjects">English language</dd>
                              <dd><input type="checkbox" value="Mathematics" name="subjects">Mathematics</dd>
                              <dd><input type="checkbox" value="History" name="subjects">History</dd>
                              <dd><input type="checkbox" value="Science" name="subjects">Science</dd>
                              <dd><input type="checkbox" value="Health-Science" name="subjects">Health Science</dd>
                              <dd><input type="checkbox" value="Tamil-secondary" name="subjects">Tamil Secondary</dd>
                              <dd><input type="checkbox" value="Sinhala-secondary" name="subjects">Sinhala Secondary</dd>
                              <dd><input type="checkbox" value="Geography" name="subjects">Geography</dd>
                              <dd><input type="checkbox" value="Civic-Education" name="subjects">Civic Education</dd>
                              <dd><input type="checkbox" value="Dancing" name="subjects">Dancing</dd>
                              <dd><input type="checkbox" value="Western-Music" name="subjects">Western Music</dd>
                              <dd><input type="checkbox" value="Eastern-Music" name="subjects">Eastern Music</dd>
                              <dd><input type="checkbox" value="Art" name="subjects">Art</dd>
                              <dd><input type="checkbox" value="Drama-and-Theatre" name="subjects">Drama and Theatre</dd>
                          </div>
                          <script>
                              var checkboxelem_two = document.getElementById('Six-to-nine');
                              function displaysect(){
                                 if (checkboxelem_two.checked){
                                  document.getElementById('Six-to-nine-section').style.display = 'block';
                                 } else{
                                  document.getElementById('Six-to-nine-section').style.display = 'none';
                                 }
                              }
                              displaysect();
  
                              checkboxelem_two.addEventListener('change',displaysect);
                          </script>
                          <dt><input type="checkbox" id="Ord-level" name="Ordinary-level" value="ordinary-level">Ordinary Level</dt>
                          <div class="ordinarylevel" id="ordinarylevel">
                              <dd><input type="checkbox" value="Buddhism" name="subjects">Buddhism</dd>
                              <dd><input type="checkbox" value="Saivaneri" name="subjects">Saivaneri</dd>
                              <dd><input type="checkbox" value="Catholicism" name="subjects">Catholicism</dd>
                              <dd><input type="checkbox" value="Christianity" name="subjects">Christianity</dd>
                              <dd><input type="checkbox" value="Islam" name="subjects">Islam</dd>
                              <dd><input type="checkbox" value="Sinhala-language" name="subjects">Sinhala language</dd>
                              <dd><input type="checkbox" value="English-language" name="subjects">English language</dd>
                              <dd><input type="checkbox" value="Tamil-language" name="subjects">Tamil language</dd>
                              <dd><input type="checkbox" value="Mathematics" name="subjects">Mathematics</dd>
                              <dd><input type="checkbox" value="History" name="subjects">History</dd>
                              <dd><input type="checkbox" value="Science" name="subjects">Science</dd>
                              <dd><input type="checkbox" value="Commerce" name="subjects">Commerce</dd>
                              <dd><input type="checkbox" value="Geography" name="subjects">Geography</dd>
                              <dd><input type="checkbox" value="Civic-Education" name="subjects">Civic Education</dd>
                              <dd><input type="checkbox" value="Sinhala-secondary" name="subjects">Sinhala Secondary</dd>
                              <dd><input type="checkbox" value="Tamil-secondary" name="subjects">Tamil Secondary</dd>
                              <dd><input type="checkbox" value="French" name="subjects">French</dd>
                              <dd><input type="checkbox" value="German" name="subjects">German</dd>
                              <dd><input type="checkbox" value="Eastern-Music" name="subjects">Eastern Music</dd>
                              <dd><input type="checkbox" value="Western-Music" name="subjects">Western Music</dd>
                              <dd><input type="checkbox" value="Art" name="subjects">Art</dd>
                              <dd><input type="checkbox" value="Dancing" name="subjects">Dancing</dd>
                              <dd><input type="checkbox" value="Drama-and-Theatre" name="subjects">Drama and Theatre</dd>
                              <dd><input type="checkbox" value="Sinhala-lit" name="subjects">Sinhala lit</dd>
                              <dd><input type="checkbox" value="English-lit" name="subjects">English lit</dd>
                              <dd><input type="checkbox" value="ICT" name="subjects">ICT</dd>
                              <dd><input type="checkbox" value="Home-economics" name="subjects">Home Economics</dd>
                              <dd><input type="checkbox" value="Health-Science" name="subjects">Health Science</dd>
                              <dd><input type="checkbox" value="Media-studies" name="subjects">Media Studies</dd>
                          </div>
                          <script>
                              var checkboxelem_three = document.getElementById('Ord-level');
                              function displaysect(){
                                 if (checkboxelem_three.checked){
                                  document.getElementById('ordinarylevel').style.display = 'block';
                                 } else{
                                  document.getElementById('ordinarylevel').style.display = 'none';
                                 }
                              }
                              displaysect();
  
                              checkboxelem_three.addEventListener('change',displaysect);
                          </script>
                          <dt><input type="checkbox" name="Advanced-level" id="Advanced-level" value="Advanced-level">Advanced level</dt>
                          <div class="advancedlevel" id="A-level">
                              <script>
                                  var checkboxelem_four = document.getElementById('Advanced-level');
                              function displaysect(){
                                 if (checkboxelem_four.checked){
                                  document.getElementById('A-level').style.display = 'block';
                                 } else{
                                  document.getElementById('A-level').style.display = 'none';
                                 }
                              }
                              displaysect();
  
                              checkboxelem_four.addEventListener('change',displaysect);
                              </script>
                              <dd><input type="checkbox" name="science" id="science"  value="science"><b>Biology and Mathematics Stream</b></dd>
                              <div class="biomathsstream" id="science-sub">
                                  <dd><input type="checkbox" value="Biology" name="subjects">Biology</dd>
                                  <dd><input type="checkbox" value="Combined-Mathematics" name="subjects">Combined Mathematics</dd>
                                  <dd><input type="checkbox" value="Chemistry" name="subjects">Chemistry</dd>
                                  <dd><input type="checkbox" value="Physics" name="subjects">Physics</dd>
                                  <dd><input type="checkbox" value="ICT" name="subjects">ICT</dd>
                                  <script>
                                      var checkboxelem_five = document.getElementById('science');
                                      function displaysect(){
                                          if (checkboxelem_five.checked){
                                              document.getElementById('science-sub').style.display = 'block';
                                          } else{
                                              document.getElementById('science-sub').style.display = 'none';
                                          }
                                      }
                                      displaysect();
  
                              checkboxelem_five.addEventListener('change',displaysect);
                                  </script>
                              </div>
                              <dd><input type="checkbox" name="Commerce" id="commerce" value="Commerce"><b>Commerce Stream</b></dd>
                              <div class="commercestream" id="commerce-sub">
                                  <dd><input type="checkbox" value="Statistics" name="subjects">Statistics</dd>
                                  <dd><input type="checkbox" value="Business-studies" name="subjects">Business Studies</dd>
                                  <dd><input type="checkbox" value="Accounting" name="subjects">Accounting</dd>
                                  <dd><input type="checkbox" value="Economics" name="subjects">Economics</dd>
                              </div>
                              <script>
                                  var checkboxelem_six = document.getElementById('commerce');
                                      function displaysect(){
                                          if (checkboxelem_six.checked){
                                              document.getElementById('commerce-sub').style.display = 'block';
                                          } else{
                                              document.getElementById('commerce-sub').style.display = 'none';
                                          }
                                      }
                              displaysect();
  
                              checkboxelem_six.addEventListener('change',displaysect);
                              </script>
                              <dd><input type="checkbox" name="art" id="Art" value="art"><b>Art Stream</b></dd>
                              <div class="artstream" id="Artstream">
                                  <dd><input type="checkbox" value="Geography" name="subjects">Geography</dd>
                                  <dd><input type="checkbox" value="Political-science" name="subjects">Political Science</dd>
                                  <dd><input type="checkbox" value="History" name="subjects">History</dd>
                                  <dd><input type="checkbox" value="Media-studies" name="subjects">Media Studies</dd>
                                  <dd><input type="checkbox" value="Buddhism" name="subjects">Buddhism</dd>
                                  <dd><input type="checkbox" value="Saivaneri" name="subjects">Saivaneri</dd>
                                  <dd><input type="checkbox" value="Catholicism" name="subjects">Catholicism</dd>
                                  <dd><input type="checkbox" value="Christianity" name="subjects">Christianity</dd>
                                  <dd><input type="checkbox" value="Islam" name="subjects">Islam</dd>
                                  <dd><input type="checkbox" value="Western-Music" name="subjects">Western Music</dd>
                                  <dd><input type="checkbox" value="Eastern-Music" name="subjects">Eastern Music</dd>
                                  <dd><input type="checkbox" value="Dancing" name="subjects">Dancing</dd>
                                  <dd><input type="checkbox" value="Art" name="subjects">Art</dd>
                                  <dd><input type="checkbox" value="Drama-and-Theatre" name="subjects">Drama and Theatre</dd>
                                  <dd><input type="checkbox" value="Sinhala-language" name="subjects">Sinhala language</dd>
                                  <dd><input type="checkbox" value="English-language" name="subjects">English language</dd>
                                  <dd><input type="checkbox" value="Tamil-language" name="subjects">Tamil language</dd>
                                  <dd><input type="checkbox" value="French" name="subjects">French</dd>
                                  <dd><input type="checkbox" value="German" name="subjects">German</dd>
                                  <dd><input type="checkbox" value="japanese" name="subjects">Japanese</dd>
                              </div>
                              <script>
                                  var checkboxelem_seven = document.getElementById('Art');
                              function displaysect(){
                                 if (checkboxelem_seven.checked){
                                  document.getElementById('Artstream').style.display = 'block';
                                 } else{
                                  document.getElementById('Artstream').style.display = 'none';
                                 }
                              }
                              displaysect();
  
                              checkboxelem_seven.addEventListener('change',displaysect);
                              </script>
                          </div>  
                      </dl>
                  </div>
              </div>
              <div class="section1">
                  <div class="section1-1">Medium</div>
                  <div class="section1-1">
                      <dl>
                      <dt><input type="checkbox" value="eng" name="medium">English</dt> 
                      <dt><input type="checkbox" value="sin" name="medium">Sinhala</dt>
                      <dt><input type="checkbox" value="tam" name="medium">Tamil</dt>
                  </dl>
                  </div>
              </div>
              <div class="section1">
                  <div class="section1-1">Institutions</div>
                  <div class="section1-1"><input type="text" name="institute"></div>
              </div>
              <div class="section1">
                  <div class="section1-1"> Other Details</div>
                  <div class="section1-1"><input type="text" name="otherdetails"></div>
              </div>
              <div class="section1">
                  <div class="section1-1">Password</div>
                  <div class="section1-1"><input type="password" name="teacherpassword1"></div>
              </div>
              <div class="section1">
                  <div class="section1-1">Rewrite the Password</div>
                  <div class="section1-1"><input type="password" name="teacherpassword2"></div>
              </div>
              <div class="buttonsection">
                  <div class="submitbuttonsection">
                      <input type="submit" value="Submit" class="submitbutton">
                  </div>
                  <div class="resetbuttonsection">
                      <input type="reset" value="Reset" class="resetbutton">
                  </div>
              </div>
          </div>
          </form>
          </div>
          </div>
      </center>

    <?php include '../../footer.php';?>
  </body>
</html>