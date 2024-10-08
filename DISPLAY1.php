<?php
// Include the connection file

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Display.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Display</title>
</head>
<?php
    session_start();
    if(isset($_SESSION["DISPLAY1"])){
        ?>
            <div class="alert alert-danger" style="text-align:center ;" role="alert">
                <?php
                    echo $_SESSION["DISPLAY1"];
                    unset($_SESSION["DISPLAY1"]);
                ?>

            </div>

        <?php
    }
?>

<body>
<div>
<table class="table caption-top table-hover table-bordered">
  <caption class="users">List of users</caption>
  <thead>
    <tr><th scope="col">#</th>
        <th scope="col">Username</th>
        <th scope="col">Surname</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">Gender</th>
        <th scope="col">Identity No.</th>
        <th scope="col">Nationality</th>
        <th scope="col">Marital Status</th>
        <th scope="col">Religion</th>
        <th scope="col">Home Language</th>
        <th scope="col">Other Language</th>
        <th scope="col">Phone Numbers</th>
        <th scope="col">Email</th>
        <th scope="col">Institution</th>
        <th scope="col">Highest Grade</th>
        <th scope="col">Tertiary Education</th>
        <th scope="col">Course</th>
        <th scope="col">Degree</th>
        <th scope="col">Job Title</th>
        <th scope="col">Company</th>
        <th scope="col">Description</th>
        <th scope="col">Skills</th>
        <th scope="col">Projects</th>
        <th scope="col">Operate</th>
    </tr>
  </thead>
  <tbody>
      <?php
          include("connection.php");
          // Fetch all data from cvtable
          $sql = "SELECT * FROM cvtable";
          $result=mysqli_query($conn,$sql);
            while ($row=mysqli_fetch_assoc($result)){
              ?>
              <tr>
                  <td><?php echo $row["id"];?></td>
                  <td><?php echo $row["userName"];?></td>
                  <td><?php echo $row["surname"];?></td>
                  <td><?php echo $row["birth_date"];?></td>
                  <td><?php echo $row["Gender"];?></td>
                  <td><?php echo $row["Identity_No"];?></td>
                  <td><?php echo $row["Nationality"];?></td>
                  <td><?php echo $row["Maritals"];?></td>
                  <td><?php echo $row["Religion"];?></td>
                  <td><?php echo $row["Home_Lang"];?></td>
                  <td><?php echo $row["Other_Lang"];?></td>
                  <td><?php echo $row["Phone_numbers"];?></td>
                  <td><?php echo $row["Email"];?></td>               
                  <td><?php echo $row["Institution"];?></td>
                  <td><?php echo $row["Higher_G"];?></td>
                  <td><?php echo $row["Tertiary"];?></td>
                  <td><?php echo $row["Feild_of_study"];?></td>
                  <td><?php echo $row["Degree"];?></td>
                  <td><?php echo $row["Job_title"];?></td>
                  <td><?php echo $row["Company_name"];?></td>
                  <td><?php echo $row["Job_description"];?></td>
                  <td><?php echo $row["Skills"];?></td>
                  <td><?php echo $row["Projects"];?></td>
                  <td>
                      <button class="btn"><a href="update1.php?id=<?php echo $row["id"];?>">Update</a></button>
                      <button class="btn"><a href="delete.php?id=<?php echo $row["id"];?>">Delete</a></button>
                  </td>
            </tr>
              <?php
              
            }
      ?>
  </tbody>
</table>
</div>
</body>
</html>
