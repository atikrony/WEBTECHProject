 <?php
include("../Model/database.php");

$mydb = new myDb();
$validatename = $validateemail = $validatecheckbox = $validateradio= $dob = ""; 
$password = $username = $file = "";
$currentDate=date("Y-m-d");
$name = $email = $gender = $id= $number = "" ;
$is_validate = true;


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_REQUEST["fname"];
    $email = $_REQUEST["email"];
    //name validation
    if(empty($_REQUEST["fname"]) ||  !preg_match("/^[A-Za-z]+$/",$name))
    {
        $validatename= "you must enter name"; 
        $is_validate = false;

    }
    else
    {
        $name=$_REQUEST["fname"];
        $is_validate = true;
    }
    //email validation
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $validateemail= "you must enter email";
        $is_validate = false;
    }
    else
    {
        $email=$_REQUEST["email"];
        $is_validate = true;
    }  
    //gender validation
    if(isset($_REQUEST["gender"]))
    {
        $validateradio= $_REQUEST["gender"];
        $is_validate = true;
    }
    else{
        $validateradio= "please select at least one radio";
        $is_validate = false;
    }

    //date of birth validation
    $dob = $_REQUEST["birthday"];
    if ($dob>$currentDate) {
        $dob = " dob is not valid"; 
        $is_validate = false;
    } else {
        $dob= date_create($dob);
        $currentDate=date_create($currentDate);
        $dateDiff=date_diff($dob,$currentDate);
        $age = $dateDiff->format("%y");
        if ($age<18) {
            $dob = "you are not eligible";
            $is_validate = false;
        } else {
            $dob = "your age is ".$age;
        }
    }

    //ID validation
   
    if(empty($_REQUEST["id"]) || !preg_match("/^[0-9]{2}-[0-9]{5}-[0-9]{1}$/",$_REQUEST["id"]))
    {
        $id= "you must enter ID";
        $is_validate = false;
    }
    else
    {
        $id=$_REQUEST["id"];
    }

    //number validation
    
    if(empty($_REQUEST["number"]) || !preg_match("/^01[0-9]{9}$/",$_REQUEST["number"]))
    {
        $number= "you must enter number";
        $is_validate = false;
    }
    else
    {
        $number=$_REQUEST["number"];
    }

    //password validation
    if(empty($_REQUEST["password"]) || strlen($_REQUEST["password"])<8)
    {
        $password= "you must enter password";
        $is_validate = false;
    }
    else
    {
        $password= "password saved";
    }

    //username validation
    if(empty($_REQUEST["username"]) || strlen($_REQUEST["username"])<8)
    {
        $username= "you must enter username";
        $is_validate = false;
    }
    else
    {
        $username=$_REQUEST["username"];
    }
    
    //file validation
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png', 'pdf');
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $file = "File uploaded successfully";
                } else {
                    $file = "Your file is too big!";
                }
            } else {
                $file = "There was an error uploading your file!";
            }
        } else {
            $file = "You cannot upload files of this type!";
        }
    } else {
        $file = "You have not selected any file!";
    }


 if ($is_validate) 
        {
           header("Location:../Reletedview/login.php");
        }

        else
        {
            echo "Please fill the form again";
        }


$result=$mydb->insertUser( $_REQUEST["fname"], $_REQUEST["birthday"], $_REQUEST["email"], $_REQUEST["number"], $_REQUEST["id"], $_REQUEST["gender"], $_REQUEST["username"], $_REQUEST["password"],$_REQUEST["file"]);
if($result==true)
{
    echo "data inserted";
}
else
{
    echo "error".$conobj->error;
}


}
    