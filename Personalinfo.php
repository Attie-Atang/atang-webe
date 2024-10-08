<?php
include_once "connection.php";

        if(isset($_POST['submit_btn'])){
            $name = mysqli_real_escape_string($conn, $_POST['username']);
            $surname = mysqli_real_escape_string($conn, $_POST['surname']);
            $DOB = mysqli_real_escape_string($conn, $_POST['birth_date']);
            $Gender = mysqli_real_escape_string($conn, $_POST['gender']);
            $IdN = mysqli_real_escape_string($conn, $_POST['Id']); // Assuming this is identity number
            $Nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
            $Maritals = mysqli_real_escape_string($conn, $_POST['lstatus']);
            $Religion = mysqli_real_escape_string($conn, $_POST['religion']);
            $Home_Lang = mysqli_real_escape_string($conn, $_POST['home_lang']);
            $Other_Lang = mysqli_real_escape_string($conn, $_POST['other_lang']);
            $Phone_no = mysqli_real_escape_string($conn, $_POST['numbers']);
            $Email = mysqli_real_escape_string($conn, $_POST['email']);
            $Institution = mysqli_real_escape_string($conn, $_POST['institusion']);
            $Highest_G = mysqli_real_escape_string($conn, $_POST['highest']);
            $Tertiary = mysqli_real_escape_string($conn, $_POST['tertiary']);
            $Feild_of_Study = mysqli_real_escape_string($conn, $_POST['course']);
            $Degree = mysqli_real_escape_string($conn, $_POST['degree']);
            $Job_title = mysqli_real_escape_string($conn, $_POST['job']);
            $Company_Name = mysqli_real_escape_string($conn, $_POST['company']);
            $Discription = mysqli_real_escape_string($conn, $_POST['descripe']);
            $Skill = mysqli_real_escape_string($conn, $_POST['skill']);
            $Project = mysqli_real_escape_string($conn, $_POST['project']);
        
            // SQL Insert Query
            $sql = "INSERT INTO cvtable (
                        username, surname, birth_date, gender, identity_no, nationality, 
                        maritals, religion, home_lang, other_lang, phone_numbers, email, 
                        institution, higher_g, tertiary, feild_of_study, degree, 
                        job_title, company_name, job_description, skills, projects
                    ) VALUES (
                        '$name', '$surname', '$DOB', '$Gender', '$IdN', '$Nationality', 
                        '$Maritals', '$Religion', '$Home_Lang', '$Other_Lang', '$Phone_no', 
                        '$Email', '$Institution', '$Highest_G', '$Tertiary', '$Feild_of_Study', 
                        '$Degree', '$Job_title', '$Company_Name', '$Discription', '$Skill', '$Project'
                    );";
        
            // Execute the query and check if successful
            $results = mysqli_query($conn, $sql);
        
            if ($results) {
                // Redirect to success page
                session_start();
                $_SESSION["Personalinfo"] = "CV written Successfully";

                header('Location: homepage.php');
                
                
            } else {
                // Display an error message if the query failed
                echo "Error: " . mysqli_error($conn);
            }
        }

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,600;1,14..32,600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="WriteCV.css">
    <title>Personal Infomation and oters</title>
</head>
<body>
    <header class="head">
        <h1>Write Your Carriculam Vitae Here</h1>
    </header>
    <form class="form-dev"  action=""  method="post" id="person">
        <div class="Personal">
             <h1>Personal Information</h1>
             <label for="Name">Name:</label>
             <input type="text" for="Name" name="username" placeholder="Enter your name"><br> <!--==Characters or strings==-->
             <label for="Surname">Surname:</label>
             <input for="Surname" type="text" name="surname" placeholder="Enter your surname"><br><!--Characters or strings-->
             <label for="Date-of-birth">Date of Birth:</label>
             <input type="date" for="Date-of-birth" name="birth_date" placeholder="year/month/day"><br><!--int-->
             <label for="Gender">Gender:</label>
             <input type="text" for="Gender" name="gender" placeholder="Male/Female or others"><br><!--strings-->
             <label for="ID">Identity Number:</label>
             <input type="text" for="ID" name="Id" placeholder="Enter your id"><br><!--int-->
             <label for="Nationality">Nationality:</label>
             <input type="text" for="Nationality" name="nationality" placeholder="Enter your nationality"><br><!--strings-->
             <label for="Status">Marital Status:</label>
             <input type="text" for="Status" name="lstatus" placeholder="Enter your status"><br><!--strings-->
             <label for="Religion">Religion:</label>
             <input type="text" name="religion" for="Religion" placeholder="Enter your religion"><br><!--String-->
             <label for="Home-lang">Home Language:</label>
             <input type="text" name="home_lang" placeholder="First lang"><br>
             <label for="Other-lang">Other Language:</label>
             <input type="text" name="other_lang" placeholder="Second lang"><br>
         </div> 
         <!-- contact section -->
         <div class="contacts">
            <h1>Contact Information</h1>
            <label for="numbers">Phone Numbers:</label>
            <input type="text" for="numbers" name="numbers" placeholder="Enter your numbers"><br><!--Int-->
            <label for="email">Email:</label>
            <input type="email" for="email" name="email" placeholder="email@gmail.com"><br><!--string-->
        </div>
        <!-- Education section -->
        <div class="education">
            <h1>Education</h1>
            <label for="institusion">Name of Institusion:</label>
            <input for="institusion" name="institusion" type="text"><br>
            <label for="education-level">Highest grade:</label>
            <input type="text" for="education-level" name="highest" ><br>
            <label for="tertiary-level">Tertiary education:</label>
            <input type="text" for="tertiary-level" name="tertiary"><br>
            <label for="course">Feild of Study:</label>
            <input type="text" name="course" for="course"><br>
            <label for="degree">Degree obtained:</label>
            <input for="degree" name="degree" type="text"><br>
        </div>
        <!-- Work Experience section -->
        <div class="Experience">
            <h1>Work Experience</h1>
            <label for="jobt" >Job title:</label>
            <input type="text" name="job" for="jobt" ><br>
            <label for="Company">Company Name:</label>
            <input type="text" for="Company" name="company"><br>
            <label for="description">Job description</label>
            <input for="description" name="descripe" type="text"><br>
        </div>
        <!-- Skills -->
        <div class="Skills">
            <h1>Skills</h1>
            <label for="skill">Descripe your Sills:</label><br>
           <input type="text" for="skill" name="skill" placeholder="Skills">

        </div>
        <!-- Projects -->
        <div class="Project">
            <h1>Projects</h1>
            <label for="project">Mention your completed projects</label><br>
            <!-- Remove incorrect use of `for` in input -->
            <input id="project" name="project" type="text" placeholder="Projects"><br><br>
            <!-- Optional: Use textarea for detailed project descriptions -->
            <!-- <textarea id="project" name="project"></textarea> -->
        </div>

        
         
         <div class="button">
                <!-- Use a proper submit button without an anchor -->
                <button type="submit" name="submit_btn" value="Saved">Submit</button>
            </div>
        
    </form>
    
    <br><br>

</body>
</html>

