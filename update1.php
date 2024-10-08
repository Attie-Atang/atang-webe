<?php
    include("connection.php");
    if(isset($_POST["submit_button"])){
         $id=$_GET['id'];
          $name = mysqli_real_escape_string($conn, $_POST['username']);
          $surname = mysqli_real_escape_string($conn, $_POST['surname']);
          $DOB = mysqli_real_escape_string($conn, $_POST['birth_date']);
          $Gender = mysqli_real_escape_string($conn, $_POST['gender']);
          $IdN = mysqli_real_escape_string($conn, $_POST['Identity_No']); // Assuming this is identity number
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
          
          
          $id=  mysqli_real_escape_string($conn, $_POST['id']);
          // SQL Insert Query
          $sql = "UPDATE cvtable SET 
                  userName = '$name', 
                  surname = '$surname',
                  birth_date = '$DOB', 
                  Gender = '$Gender', 
                  Identity_No = '$IdN', 
                  Nationality = '$Nationality', 
                  Maritals = '$Maritals', 
                  Religion = '$Religion', 
                  Home_Lang = '$Home_Lang', 
                  Other_Lang = '$Other_Lang', 
                  Phone_numbers = '$Phone_no', 
                  Email = '$Email', 
                  Institution = '$Institution', 
                  Higher_G = '$Highest_G', 
                  Tertiary = '$Tertiary', 
                  Feild_of_study = '$Feild_of_Study', 
                  Degree = '$Degree', 
                  Job_title = '$Job_title', 
                  Company_name = '$Company_Name', 
                  Job_description = '$Discription', 
                  Skills = '$Skill', 
                  Projects = '$Project'
                  WHERE id = $id";
                $results = mysqli_query($conn, $sql);
        
                if ($results) {
                    // Redirect to success page
                    session_start();
                    $_SESSION["Update1"] = "CV updated";
    
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="WriteCV.css">
    <title>Update information</title>
</head>
<body>
    <header class="head">
        <h1>Write Your Carriculam Vitae Here</h1>
        <h1>Click Update button after changing any Information</h1>
    </header>
    <?php
    if(isset($_GET["id"])){
        $id =$_GET["id"];
        include("connection.php");
        $sql = "SELECT * FROM cvtable WHERE id = $id";
        $result= mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);

        ?>
        <form class="form-dev"  action=""  method="post" id="person">
        <div class="Personal">
             <h1>Personal Information</h1>
             <label for="Name">Name:</label>
             <input type="text" for="Name" name="username" value="<?php echo $row["userName"]; ?>"><br> <!--==Characters or strings==-->
             <label for="Surname">Surname:</label>
             <input for="Surname" type="text" name="surname" value="<?php echo $row["surname"]; ?>"><br><!--Characters or strings-->
             <label for="Date-of-birth">Date of Birth:</label>
             <input type="text" for="Date-of-birth" name="birth_date" value="<?php echo $row["birth_date"]; ?>"><br><!--int-->
             <label for="Gender">Gender:</label>
             <input type="text" for="Gender" name="gender" value="<?php echo $row["Gender"]; ?>"><br><!--strings-->
             <label for="ID">Identity Number:</label>
             <input type="text" for="ID" name="Identity_No" placeholder="Enter your id" value="<?php echo $row["Identity_No"]; ?>"><br><!--int-->
             <label for="Nationality">Nationality:</label>
             <input type="text" for="Nationality" name="nationality" value="<?php echo $row["Nationality"]; ?>"><br><!--strings-->
             <label for="Status">Marital Status:</label>
             <input type="text" for="Status" name="lstatus" value="<?php echo $row["Maritals"]; ?> "><br><!--strings-->
             <label for="Religion">Religion:</label>
             <input type="text" name="religion" for="Religion" value="<?php echo $row["Religion"]; ?>" ><br><!--String-->
             <label for="Home-lang">Home Language:</label>
             <input type="text" name="home_lang" value="<?php echo $row["Home_Lang"]; ?>" ><br>
             <label for="Other-lang">Other Language:</label>
             <input type="text" name="other_lang" value="<?php echo $row["Other_Lang"]; ?>" ><br>
         </div> 
         <!-- contact section -->
         <div class="contacts">
            <h1>Contact Information</h1>
            <label for="numbers">Phone Numbers:</label>
            <input type="text" for="numbers" name="numbers" value="<?php echo $row["Phone_numbers"]; ?>"><br><!--Int-->
            <label for="email">Email:</label>
            <input type="email" for="email" name="email" value="<?php echo $row["Email"]; ?>"><br><!--string-->
        </div>
        <!-- Education section -->
        <div class="education">
            <h1>Education</h1>
            <label for="institusion">Name of Institusion:</label>
            <input for="institusion" name="institusion" type="text" value="<?php echo $row["Institution"]; ?>"><br>
            <label for="education-level">Highest grade:</label>
            <input type="text" for="education-level" name="highest" value="<?php echo $row["Higher_G"]; ?>"><br>
            <label for="tertiary-level">Tertiary education:</label>
            <input type="text" for="tertiary-level" name="tertiary" value="<?php echo $row["Tertiary"]; ?>"><br>
            <label for="course">Feild of Study:</label>
            <input type="text" name="course" for="course" value="<?php echo $row["Feild_of_study"]; ?>"><br>
            <label for="degree">Degree obtained:</label>
            <input for="degree" name="degree" type="text" value="<?php echo $row["Degree"]; ?>"><br>
        </div>
        <!-- Work Experience section -->
        <div class="Experience">
            <h1>Work Experience</h1>
            <label for="jobt" >Job title:</label>
            <input type="text" name="job" for="jobt" value="<?php echo $row["Job_title"]; ?>"><br>
            <label for="Company">Company Name:</label>
            <input type="text" for="Company" name="company" value="<?php echo $row["Company_name"]; ?>"><br>
            <label for="description">Job description</label>
            <input for="description" name="descripe" type="text" value="<?php echo $row["Job_description"]; ?>"><br>
        </div>
        <!-- Skills -->
        <div class="Skills">
            <h1>Skills</h1>
            <label for="skill">Descripe your Sills:</label><br>
           <input type="text" for="skill" name="skill" value="<?php echo $row["Skills"]; ?>">

        </div>
        <!-- Projects -->
        <div class="Project">
            <h1>Projects</h1>
            <label for="project">Mention your completed projects</label><br>
            <!-- Remove incorrect use of `for` in input -->
            <input id="project" name="project" type="text" value="<?php echo $row["Projects"]; ?>"><br><br>
            <!-- Optional: Use textarea for detailed project descriptions -->
            <!-- <textarea id="project" name="project"></textarea> -->
        </div>

        
         <input type="hidden" name="id" value="<?php echo $row['id'];?>">
         <div class="button">
                <!-- Use a proper submit button without an anchor -->
                <button type="submit" name="submit_button" value="save_btn">Update</button>
            </div>
        
    </form>

        <?php
       
    }
    ?>

    
    
    <br><br>

</body>
</html>

