
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Grade Predictor</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      input[type="number"] {
         border: 2px solid black;
         margin-bottom: 30px;
         padding: 5px;
         font-size: 18px;
         width: 70px;
      }
    

      .subject-section {
         display: flex;
         flex-wrap: wrap;
         justify-content: space-between;
      }

      label{
         font-size: 15px;
      }

      h3{
         font-size: 20px;
      }

    .tono li{
      font-size:15px;

      }
   </style>
</head>
<body>

   <header class="header">
   
      <section class="flex">
         
         <a href="home.php"><img src="images/logo.png" class="ABC" alt="" style="height: 67px; width: 170px;"></a>
   
         <form action="search.html" method="post" class="search-form">
            <input type="text" name="search_box" required placeholder="Search courses..." maxlength="100">
            <button type="submit" class="fas fa-search"></button>
         </form>
   
         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
         </div>
   
         <div class="profile">
            <img src="images/Screenshot 2024-04-20 170742.png" class="image" alt="">
            <h3 class="name">Himanshu Garg</h3>
            <p class="role">Student</p>
            <a href="profile.html" class="btn">view profile</a>
            <div class="flex-btn">
               <a href="login.html" class="option-btn">login</a>
            </div>
         </div>
   
      </section>
   
   </header>   

   <section>
      <!-- Grade Predictor Form -->
      <div class="container">
         <h2 style="font-size: 25px;">Pointer Predictor</h2>
         <br>
         <br>

         
            <ul class="tono">
               <h5 style="font-size: 17px;">Please give</h5>
               <li>ISE Marks out of 30 </li>
               <li>IA Marks out OF 10</li>
               <li>ESE Marks out OF 50</li>
               <li>TW marks out of 25 Average of 10 Experiments, Tutorials</li>
               <li>Practical and oral marks out of 50 for WPL & MP</li>
               <li>Practical and oral marks out of 25 for AOA & RDBMS Lab</li>
               <li>Project marks out of 25 </li>

            </ul>


            <br>
            <br>

         
        
        
         <form id="gradeForm">
            <!-- PSOT -->
            <div class="subject">
               <h3>PSOT</h3>
               <label for="psot_ise">ISE:</label>
               <input type="number" id="psot_ise" required min="0" max="25">
               <label for="psot_ia1">IA1:</label>
               <input type="number" id="psot_ia1" required min="0" max="10" >
               <label for="psot_ia2">IA2:</label>
               <input type="number" id="psot_ia2" required min="0" max="10" >
               <label for="psot_ese">ESE:</label>
               <input type="number" id="psot_ese" required min="0" max="50">
               <div id="psot_total"></div>
            </div>
            

            <!-- RDBMS -->
            <div class="subject">
               <h3>RDBMS</h3>
               <label for="rdbms_ise">ISE:</label>
               <input type="number" id="rdbms_ise" required min="0" max="25">
               <label for="rdbms_ia1">IA1:</label>
               <input type="number" id="rdbms_ia1" required min="0" max="10">
               <label for="rdbms_ia2">IA2:</label>
               <input type="number" id="rdbms_ia2" required min="0" max="10">
               <label for="rdbms_ese">ESE:</label>
               <input type="number" id="rdbms_ese" required min="0" max="50">
            </div>

            <!-- AOA -->
            <div class="subject">
               <h3>AOA</h3>
               <label for="aoa_ise">ISE:</label>
               <input type="number" id="aoa_ise" required min="0" max="25">
               <label for="aoa_ia1">IA1:</label>
               <input type="number" id="aoa_ia1" required min="0" max="10">
               <label for="aoa_ia2">IA2:</label>
               <input type="number" id="aoa_ia2" required min="0" max="10">
               <label for="aoa_ese">ESE:</label>
               <input type="number" id="aoa_ese" required min="0" max="50">
            </div>

            <!-- TACD -->
            <div class="subject">
               <h3>TACD</h3>
               <label for="tacd_ise">ISE:</label>
               <input type="number" id="tacd_ise" required min="0" max="25">
               <label for="tacd_ia1">IA1:</label>
               <input type="number" id="tacd_ia1" required min="0" max="10">
               <label for="tacd_ia2">IA2:</label>
               <input type="number" id="tacd_ia2" required min="0" max="10">
               <label for="tacd_ese">ESE:</label>
               <input type="number" id="tacd_ese" required min="0" max="50">
            </div>

            <!-- WPL Lab -->
            <div class="subject">
               <h3>WPL Lab</h3>
               <label for="wpl_tw">Term Work (TW):</label>
               <input type="number" id="wpl_tw" required min="0" max="25">
               <label for="wpl_oral_practical">Oral and Practical:</label>
               <input type="number" id="wpl_oral_practical" required min="0" max="50">
               <label for="wpl_project">Project:</label>
               <input type="number" id="wpl_project" required min="0" max="25">
            </div>

            <!-- Mini Project -->
            <div class="subject">
               <h3>Mini Project</h3>
               <label for="mini_project_tw">Term Work (TW):</label>
               <input type="number" id="mini_project_tw" required min="0" max="25">
               <label for="mini_project_oral_practical">Oral and Practical:</label>
               <input type="number" id="mini_project_oral_practical" required min="0" max="50">
               <label for="mini_project_project">Project:</label>
               <input type="number" id="mini_project_project" required min="0" max="25">
            </div>

            <!-- AOA Lab -->
            <div class="subject">
               <h3>AOA Lab</h3>
               <label for="aoa_lab_tw">Term Work (TW):</label>
               <input type="number" id="aoa_lab_tw" required min="0" max="25">
               <label for="aoa_lab_oral_practical">Oral and Practical:</label>
               <input type="number" id="aoa_lab_oral_practical" required min="0" max="25">
            </div>

            <!-- RDBMS Lab -->
            <div class="subject">
               <h3>RDBMS Lab</h3>
               <label for="rdbms_lab_tw">Term Work (TW):</label>
               <input type="number" id="rdbms_lab_tw" required min="0" max="25">
               <label for="rdbms_lab_oral_practical">Oral and Practical:</label>
               <input type="number" id="rdbms_lab_oral_practical" required min="0" max="25">
            </div>

            <!-- PSOT Tutorial -->
            <div class="subject">
               <h3>PSOT Tutorial</h3>
               <label for="psot_tut_tw">Term Work (TW):</label>
               <input type="number" id="psot_tut_tw" required min="0" max="25">
            </div>

            <!-- TACD Tutorial -->
            <div class="subject">
               <h3>TACD Tutorial</h3>
               <label for="tacd_tut_tw">Term Work (TW):</label>
               <input type="number" id="tacd_tut_tw" required min="0" max="25">
            </div>

            <!-- Calculate button and result div -->
            <button type="button" onclick="calculatePointer()" style="border: 1px solid balck;">Calculate</button>
            <div id="result"></div>
         </form>
      </div>
   </section>

   
   <div class="side-bar">
    <div id="close-btn">
       <i class="fas fa-times"></i>
    </div>
    <div class="profile">
       <img src="images/pic-1.jpg" class="image" alt="">
       <h3 class="name">Himanshu Garg</h3>
       <p class="role">Student</p>
       <a href="profile.php" class="btn">View profile</a>
    </div>
    <nav class="navbar">
       <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
       <a href="about.php"><i class="fas fa-question"></i><span>about</span></a>
       <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
       <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
       <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
    </nav>
 </div>

   

   
   <div class="side-bar">
    <div id="close-btn">
       <i class="fas fa-times"></i>
    </div>
    <div class="profile">
       <img src="images/pic-1.jpg" class="image" alt="">
       <h3 class="name">Himanshu Garg</h3>
       <p class="role">Student</p>
       <a href="profile.php" class="btn">View Profile</a>
    </div>
    <nav class="navbar">
       <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
       <a href="about.php"><i class="fas fa-question"></i><span>About</span></a>
       <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
       <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>Teachers</span></a>
       <a href="assignment.php"><i class="fas fa-book"></i><span>Assignments</span></a>
       <a href="result.php"><i class="fas fa-percentage"></i><span>Result Analysis</span></a>

    </nav>
 </div>
 

   <script>
      function calculatePointer() {
       
       var psot_ise = parseFloat(document.getElementById("psot_ise").value);
       var psot_ia1 = parseFloat(document.getElementById("psot_ia1").value);
       var psot_ia2 = parseFloat(document.getElementById("psot_ia2").value);
       var psot_ese = parseFloat(document.getElementById("psot_ese").value);
 
       // RDBMS Marks
       var rdbms_ise = parseFloat(document.getElementById("rdbms_ise").value);
       var rdbms_ia1 = parseFloat(document.getElementById("rdbms_ia1").value);
       var rdbms_ia2 = parseFloat(document.getElementById("rdbms_ia2").value);
       var rdbms_ese = parseFloat(document.getElementById("rdbms_ese").value);
 
       // AOA Marks
       var aoa_ise = parseFloat(document.getElementById("aoa_ise").value);
       var aoa_ia1 = parseFloat(document.getElementById("aoa_ia1").value);
       var aoa_ia2 = parseFloat(document.getElementById("aoa_ia2").value);
       var aoa_ese = parseFloat(document.getElementById("aoa_ese").value);
 
       // TACD Marks
       var tacd_ise = parseFloat(document.getElementById("tacd_ise").value);
       var tacd_ia1 = parseFloat(document.getElementById("tacd_ia1").value);
       var tacd_ia2 = parseFloat(document.getElementById("tacd_ia2").value);
       var tacd_ese = parseFloat(document.getElementById("tacd_ese").value);
 
       // WPL Lab Marks
       var wpl_tw = parseFloat(document.getElementById("wpl_tw").value);
       var wpl_oral_practical = parseFloat(document.getElementById("wpl_oral_practical").value);
       var wpl_project = parseFloat(document.getElementById("wpl_project").value);
 
       // Mini Project Marks
       var mini_project_tw = parseFloat(document.getElementById("mini_project_tw").value);
       var mini_project_oral_practical = parseFloat(document.getElementById("mini_project_oral_practical").value);
       var mini_project_project = parseFloat(document.getElementById("mini_project_project").value);
 
       // AOA Lab Marks
       var aoa_lab_tw = parseFloat(document.getElementById("aoa_lab_tw").value)*2;
       var aoa_lab_oral_practical = parseFloat(document.getElementById("aoa_lab_oral_practical").value)*2;
 
       // RDBMS Lab Marks
       var rdbms_lab_tw = parseFloat(document.getElementById("rdbms_lab_tw").value)*2;
       var rdbms_lab_oral_practical = parseFloat(document.getElementById("rdbms_lab_oral_practical").value)*2;
 
       // PSOT Tutorial Marks
       var psot_tut_tw = parseFloat(document.getElementById("psot_tut_tw").value)*4;
 
       // TACD Tutorial Marks
       var tacd_tut_tw = parseFloat(document.getElementById("tacd_tut_tw").value)*4;
 
       // Calculation of P * G for each subject
       var psot_pg = calculatePG(psot_ise, psot_ia1, psot_ia2, psot_ese, 3);
       var rdbms_pg = calculatePG(rdbms_ise, rdbms_ia1, rdbms_ia2, rdbms_ese, 3);
       var aoa_pg = calculatePG(aoa_ise, aoa_ia1, aoa_ia2, aoa_ese, 3);
       var tacd_pg = calculatePG(tacd_ise, tacd_ia1, tacd_ia2, tacd_ese, 3);
       var wpl_pg = calculatePG(wpl_tw, wpl_oral_practical, wpl_project, 2);
       var mini_project_pg = calculatePG(mini_project_tw, mini_project_oral_practical, mini_project_project, 3);
       var aoa_lab_pg = calculatePG(aoa_lab_tw, aoa_lab_oral_practical, 1);
       var rdbms_lab_pg = calculatePG(rdbms_lab_tw, rdbms_lab_oral_practical, 1);
       var psot_tut_pg = calculatePG(psot_tut_tw, 1);
       var tacd_tut_pg = calculatePG(tacd_tut_tw, 1);
 
       // Total PG sum
       var total_pg = psot_pg + rdbms_pg + aoa_pg + tacd_pg + wpl_pg + mini_project_pg + aoa_lab_pg + rdbms_lab_pg + psot_tut_pg + tacd_tut_pg;
 
       // Calculating Pointer
       var pointer = total_pg / 21;
 
       // Displaying the result
       document.getElementById("result").innerHTML = `
          <h2>Pointer Calculation Result</h2>
          <p style="font-size: 20px;">Pointer: ${pointer.toFixed(2)}</p>
       `;
      }

      function calculatePG(...marks) {
         // ... (unchanged) ...
         var total = marks.reduce((acc, curr) => acc + curr, 0);
       var percentage = (total / 100) * 100;
       if (percentage >= 80) {
          return 10 * marks.pop();
       } else if (percentage >= 70) {
          return 9 * marks.pop();
       } else if (percentage >= 60) {
          return 8 * marks.pop();
       } else if (percentage >= 55) {
          return 7 * marks.pop();
       } else if (percentage >= 50) {
          return 6 * marks.pop();
       } else if (percentage >= 45) {
          return 5 * marks.pop();
       } else if (percentage >= 40) {
          return 4 * marks.pop();
       } else {
          return 0;
       }

      }

  
   </script>
   <footer class="footer">

      @ 2024  All Rights Reserved
   
   </footer>
   
   <!-- custom js file link  -->
   <script src="script.js"></script>
   
      
   </body>
   </html>
