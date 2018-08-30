<?php
    include "include/db.inc.php";
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $con_no = $_POST['contact'];
    $email = $_POST['email'];
    $college = $_POST['col_name'];
    $gender = $_POST['gender'];
    if (empty($name)||empty($email)||empty($con_no)||empty($gender)||empty($college)){
        $empty = "";
        if(empty($name)){
            $empty .= " Name";
        }
        if(empty($con_no)){
            $empty .= " Contact Number";
        }
        if(empty($college)){
            $empty .= " College Name";
        }
        if(empty($gender)){
            $empty .= " Gender";
        }
        if(empty($email)){
            $empty .= " Email";
        }
        mysqli_close($conn);
          echo' <script> alert("Fill out all the fields");</script>' ;
    }
    else{
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                mysqli_close($conn);
                    echo' <script> alert("Invalid Email") ;</script>';
                      header("Location: index.php?invalid+email");
            }
            else{
                if (!preg_match('/^[0-9]*$/',$con_no) || strlen($con_no) != 10){
                    mysqli_close($conn);
                      echo' <script> alert("Invalid+Number");</script>' ;
                }
                else{
                    $sql = "SELECT * FROM kranti.participants_ WHERE email = \"$email\"";
                    $result = mysqli_query($conn,$sql);
                    $resultCheck = mysqli_num_rows($result);
                    if ($resultCheck > 0){
                        mysqli_close($conn);
                        echo' <script> alert("Already registered");</script>' ;
                        header("Location: index.php?already+registered");

                    }
                    else{
                        $sql = "INSERT INTO kranti.participants_ (name, contact_no, email, college_name, gender) VALUES('$name','$con_no','$email','$college','$gender')";
                        if(mysqli_query($conn,$sql))
                        {
                            mysqli_close($conn);
                            echo' <script> alert("Thanks for registering");</script>' ;
                            header("Location: index.php?registration+successful");
                        }
                        else{
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    }
                }
            }
        }

    }

else{
    mysqli_close($conn);
    echo' <script> alert("Please enter values in the fields");</script>' ;
    header("Location: index.php?unset+values");
}
?>
