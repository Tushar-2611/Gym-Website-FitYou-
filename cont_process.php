<?php 

$hostname= "localhost";
$username= "root";
$password= "";
$database= "login";


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
                        
    return $data;
}              


            if(empty($_POST['fname']) || empty($_POST['mail']) || empty($_POST['subject']))
            {
              header("location:contact.php?error");
            }

            else{
            
              $fname= test_input($_POST['fname']);
              $mail= test_input($_POST['mail']);
              $sub= test_input($_POST['subject']);


              


              $conn= mysqli_connect($hostname, $username, $password, $database);

              if(!$conn)
              {
                die("Couldn't enter data : ".mysqli_connect_error());
              }
              else {
              $ins = "INSERT INTO
               Login.contact VALUES ('".$fname."','".$mail."','".$sub."');";
              
          
              if(mysqli_query($conn, $ins))
              {
                header("location:contact.php?success");
  
              }
              echo "Thank You For Contacting Us ";
              mysqli_close($conn);

            }
          }
              
                    
          ?>
    		