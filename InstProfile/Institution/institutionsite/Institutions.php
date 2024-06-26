<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Institution site</title>
  
  <script src="https://kit.fontawesome.com/b3136b502f.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js"></script>
  <link rel="stylesheet" href="Institution.css">
  <link rel="stylesheet" href="../../../style.css"
  
  <script src="Institution.js"></script>
</head>
<body>

   <?php include '../../../header.php';?>
   <br><br>

    <section id="institution-filter">
      
      <div id="filter-container">
        <label for="Stream">Stream:</label>
        <select id="Stream" class="select2">
            <option value="all">All Stream</option>
            <option value="Stream1">Maths</option>
            <option value="Stream2">Bio</option>
            <option value="Stream3">Technology</option>
            <option value="Stream4">Commerce</option>
            <option value="Stream5">Arts</option>
        </select>

          <label for="location-filter">Location:</label>
          <select id="location-filter" class="select2">
              <option value="all">All Locations</option>
              <option value="location1">Kandy</option>
              <option value="location2">Colombo</option>
              <option value="location2">Anuradhapura</option>
              <option value="location2">Mahiyanganaya</option>
              <option value="location2">Maharagama</option>
              
          </select>

          <button id="apply-filter" onclick="applyFilter()">Apply Filter</button>
      </div>
  </section>

    <section id="Institution">
      
      <h1>Popular Institutions</h1>
      <p>Experience cutting-edge facilities, personalized learning, and a dynamic faculty dedicated to your success. Prepare for the future at <b>FindYourTeacher.lk.</b></p>
      <div class="Institution-box">

        <div class="Institutions">
          <img src="Images/zero.jpeg" alt="">
          <div class="details">
            <span>Updated 15/10/2023</span>
            <h6>No.Zero Institute</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>(325)</span>
              <p><strong>Location:</strong> Kandy| Central Province</p>
              <p><strong>Rankings:</strong> #100 in Best Institution in the Srilanka, #5000 in Best Global institution-info</p>
        
              

            </div>
            <a href="../Institution Profile New/Institution Page 1.html" class="info-link" onclick="openModal('modal2'); return false;">
              <button class="info-button">More Info</button>
            </a>
            
          </div>
          
          
        </div>
        
        <div class="Institutions">
          <img src="Images/Zeon Opera.jpg" alt="">
          <div class="details">
            <span>Updated 15/10/2023</span>
            <h6>Zeon Opera</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>(802)</span>
              <p><strong>Location:</strong> Horana | Western Province</p>
              <p><strong>Rankings:</strong> #102 in Best Institution in the Srilanka, #5855 in Best Global institution-info</p>

            </div>
            <a href="../Institution Profile New/Institution Page 2.html" class="info-link" onclick="openModal('modal2'); return false;">
              <button class="info-button">More Info</button>
            </a>
          </div>
          
        </div>

        <div class="Institutions">
          <img src="Images/Susipwan logo.jpg" alt="">
          <div class="details">
            <span>Updated 15/10/2023</span>
            <h6>Susipwan</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              
              <span>(1060)</span>
              <p><strong>Location:</strong> Gampaha | Western Province</p>
              <p><strong>Rankings:</strong> #14 in Best Institution in the Srilanka, #6922 in Best Global institution-info</p>

            </div>
            <a href="../Institution Profile New/Institution Page 3.html" class="info-link" onclick="openModal('modal2'); return false;">
              <button class="info-button">More Info</button>
            </a>
          </div>
          
        </div>

        <div class="Institutions">
          <img src="Images/vidula logo.png" alt="">
          <div class="details">
            <span>Updated 15/10/2023</span>
            <h6>Vidula</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              
              <span>(1505)</span>
              <p><strong>Location:</strong> Horana | Western Province</p>
              <p><strong>Rankings:</strong> #185 in Best Institution in the Srilanka, #51422 in Best Global institution-info</p>

            </div>
            <a href="../Institution Profile New/Institution Page 4.html" class="info-link" onclick="openModal('modal2'); return false;">
              <button class="info-button">More Info</button>
            </a>
          </div>
          
        </div>

        <div class="Institutions">
          <img src="Images/sakya1.png" alt="">
          <div class="details">
            <span>Updated 15/10/2023</span>
            <h6>Sakya Academy of Higher Education</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              
              <i class="fas fa-star"></i>
              <span>(505)</span>
              <p><strong>Location:</strong> Nugegoda | Western Province</p>
              <p><strong>Rankings:</strong> #1 in Best Institution in the Srilanka, #5479 in Best Global institution-info</p>

            </div>
            <a href="../Institution Profile New/Institution Page 5.html" class="info-link" onclick="openModal('modal2'); return false;">
              <button class="info-button">More Info</button>
            </a>
          </div>
          
        </div>

        <div class="Institutions">
          <img src="Images/The First logo.jpg" alt="">
          <div class="details">
            <span>Updated 15/10/2023</span>
            <h6>The First Kandian Internationa(PVT) Ltd</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>(1205)</span>
              <p><strong>Location:</strong>Kandy | Central Province</p>
              <p><strong>Rankings:</strong> #158 in Best Institution in the Srilanka, #582844 in Best Global institution-info</p>

            </div>
            <a href="../Institution Profile New/Institution Page 6.html" class="info-link" onclick="openModal('modal2'); return false;">
              <button class="info-button">More Info</button>
            </a>
          </div>
          
          </div>
          <!--<div class="Institutions">
            <img src="Images/sipwin.png" alt="">
            <div class="details">
              <span>Updated 15/10/2023</span>
              <h6>Sipwin</h6>
              <div class="star">
                <i class="fas fa-star"></i>
                <span>(1505)</span>
                <p><strong>Location:</strong> Kurunegala | North Western Province Province</p>
              <p><strong>Rankings:</strong> #1 in Best Institution in the Srilanka, #15245 in Best Global institution-info</p>
  
              </div>
              <a href="file:///C:/Users/DELL/OneDrive/Pictures/InstitutionProfile2.0/InstitutionProfile.html" class="info-link" onclick="openModal('modal2'); return false;">
                <button class="info-button">More Info</button>
              </a>
            </div>
            
          </div>
          <div class="Institutions">
            <img src="Images/Blank_image.jpg" alt="">
            <div class="details">
              <span>Updated 15/10/2023</span>
              <h6>Sipwin - Kurunegala</h6>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>(503)</span>
                <p><strong>Location:</strong> No.Zero, Kandy | Central Province</p>
              <p><strong>Rankings:</strong> #1 in Best Institution in the Srilanka, #5 in Best Global institution-info</p>
  
              </div>
              <a href="file:///C:/Users/DELL/OneDrive/Pictures/InstitutionProfile2.0/InstitutionProfile.html" class="info-link" onclick="openModal('modal2'); return false;">
                <button class="info-button">More Info</button>
              </a>
            </div>
            
          </div>
          <div class="Institutions">
            <img src="Images/Blank_image.jpg" alt="">
            <div class="details">
              <span>Updated 15/10/2023</span>
              <h6>Sipwin - Kurunegala</h6>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>(507)</span>
                <p><strong>Location:</strong> No.Zero, Kandy | Central Province</p>
              <p><strong>Rankings:</strong> #1 in Best Institution in the Srilanka, #5 in Best Global institution-info</p>
                
  
              </div>
              <a href="file:///C:/Users/DELL/OneDrive/Pictures/InstitutionProfile2.0/InstitutionProfile.html" class="info-link" onclick="openModal('modal2'); return false;">
                <button class="info-button">More Info</button>
              </a>
            </div>
            
          </div>-->
        </div>

        <br>
        <br>
        <br


        <div id="pagination">
          <a href="#" class="pagination-link">1</a>
          <a href="#" class="pagination-link">2</a>
          <a href="#" class="pagination-link">3</a>
          <a href="#" class="pagination-link">4</a>
          <a href="#" class="pagination-link">5</a>
          <a href="#" class="pagination-link">........</a>
          <a href="#" class="pagination-link">10</a>


          
          
      </div>
         
      </div>
    </section>







<?php include '../../../footer.php';?>
  </body>


</html>