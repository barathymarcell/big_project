<?php

include('session.php');
//Include database connection details
require("opener_db.php");
$conn= $connector->DbConnector();
$errmsg_arr = array();
//Validation error flag
$errflag = false;


$assignment_id  = $_POST['id'];
$name  = $_POST['name'];
$get_id = $_POST['get_id'];
//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
  global $conn;
    $str = @trim($str);
        $str = stripslashes($str);
    return mysqli_real_escape_string($conn,$str);
}

//Sanitize the POST values
$filedesc = clean($_POST['desc']);
//$subject= clean($_POST['upname']);

if ($filedesc == '') {
    $errmsg_arr[] = ' hiányzik az állomány leírása!';
    $errflag = true;
}

if ($_FILES['uploaded_file']['size'] >= 1048576 * 5) {
    $errmsg_arr[] = 'a kiválasztott állomány meghaldja az 5 MB méretet!';
    $errflag = true;
}


//If there are input validations, redirect back to the registration form
if ($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
	?>

   <script>
   window.location = 'downloadable.php<?php echo '?id='.$get_id;  ?>';
   </script>
   <?php exit();
}
//upload random name/number
$rd2 = mt_rand(1000, 9999) . "_File";

//Check that we have a file
if ((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
    //Check if the file is JPEG image and it's size is less than 350Kb
    $filename = basename($_FILES['uploaded_file']['name']);

    $ext = substr($filename, strrpos($filename, '.') + 1);

    if (($ext != "exe") && ($_FILES["uploaded_file"]["type"] != "application/x-msdownload")) {
        //Determine the path to which we want to save this file      
        //$newname = dirname(__FILE__).'/upload/'.$filename;
        $newname = "admin/uploads/" . $rd2 . "_" . $filename;
	$name_notification  = 'Feladat elküldése az alábbi néven '." ".'<b>'.$name.'</b>'; 
        //Check if the file with the same name is already exists on the server
        if (!file_exists($newname)) {
            //Attempt to move the uploaded file to it's new place
            if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $newname))) {
                //successful upload
                // echo "It's done! The file has been saved as: ".$newname;		   
                $qry2 = ("INSERT INTO student_assignment (fdesc,floc,assignment_fdatein,fname,assignment_id,student_id) VALUES ('$filedesc','$newname',NOW(),'$name','$assignment_id','$session_id')")or die(mysqli_error());
				mysqli_query($conn,"insert into teacher_notification (teacher_class_id,notification,date_of_notification,link,student_id,assignment_id) value('$get_id','$name_notification',NOW(),'view_submit_assignment.php','$session_id','$assignment_id')")or die(mysqli_error());
			   //$result = @mysqli_query($conn,$qry);
                $result2 = $connector->query($qry2);
                if ($result2) {
                    $errmsg_arr[] = 'a rekordot elmentették az adatbázisba, és a fájlt feltöltötték.';
                    $errflag = true;
                    if ($errflag) {
                        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                        session_write_close();
                        exit();
                    }
                } else {
                    $errmsg_arr[] = 'a rekordot nem mentették el az adatbázisba, de a fájl feltöltésre került.';
                    $errflag = true;
                    if ($errflag) {
                        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                        session_write_close(); ?>
                           <script>
   window.location = 'downloadable.php<?php echo '?id='.$get_id;  ?>';
   </script>
   <?php
                        exit();
                    }
                }
            } else {
                //unsuccessful upload
                //echo "Error: A problem occurred during file upload!";
                $errmsg_arr[] = 'upload of file ' . $filename . ' was unsuccessful';
                $errflag = true;
                if ($errflag) {
                    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                    session_write_close(); ?>
       <script>
   window.location = 'downloadable.php<?php echo '?id='.$get_id;  ?>';
   </script>
   
   
   <?php
                    exit();
                }
            }
        } else {
            //existing upload
            // echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";
            $errmsg_arr[] = 'Hiba: A(z) >>' . $_FILES["uploaded_file"]["name"] . '<< nevű állomány már létezik!';
            $errflag = true;
            if ($errflag) {
                $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                session_write_close(); ?>
       <script>
   window.location = 'downloadable.php<?php echo '?id='.$get_id;  ?>';
   </script>
   <?php
   
                exit();
            }
        }
    } else {
        //wrong file upload
        //echo "Error: Only .jpg images under 350Kb are accepted for upload";
        $errmsg_arr[] = 'Hiba: Az 5 Mb alatti .exe fájl kivételével semmilyen fájltípus nem fogadható el a feltöltéshez.';
        $errflag = true;
        if ($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close(); ?>
            <script>
   window.location = 'downloadable.php<?php echo '?id='.$get_id;  ?>';
   </script>
   <?php
            exit();
        }
    }
} else {
    //no file to upload
    //echo "Error: No file uploaded";

    $errmsg_arr[] = 'Hiba: Nincs feltöltött fájl!';
    $errflag = true;
    if ($errflag) {
        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        session_write_close(); ?>
       <script>
   window.location = 'downloadable.php<?php echo '?id='.$get_id;  ?>';
   </script>
   <?php
        exit();
    }
}

mysqli_close();
?>


