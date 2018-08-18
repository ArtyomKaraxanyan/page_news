<?php

//print_r($_POST);
require_once "components/db_functions.php";

require_once 'valid/admin_validate.php';


$title = $_POST['title'];
$description = $_POST['description'];
$content = $_POST['article'];
$date = date('Y-m-d');
$select = $_POST['select'];
$image = $_FILES['image'];




if (isset($_POST["save"])) {
    if (!required($_POST['title']) || !required($_POST['description']) || !required($_POST['article'])  || !imageRequired($_FILES) || !isset($_POST['select'])) {
        echo "All fields are nessesary" . "<br>";
        echo "<a href='index.php'>Go Back</a>";
    } else {






        try {
            echo "Connected successfully" . "<br>";


            ///////// changing image name in database and in uploads folder

            $target_dir = "uploads/";
            //$target_file = $target_dir . basename($_FILES["image"]["name"]);
            //var_dump($target_file);
            $newname = explode(".", basename($_FILES["image"]["name"]));
            //var_dump($newname);
            $newname[0] = time();
            //var_dump($newname);
            $newname=implode(".", $newname);
            //echo($newname);
            $target_file = $target_dir . $newname;////anun poxel

            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
            if(isset($_POST["save"])) {
                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }





// Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }


// Check file size
            if ($_FILES["image"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
// Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
// Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    echo "The file ".  $newname. " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            /////////
            $sql = "Insert into  news(title, description, content, date_of_creating, image_path,category_id) values('" . $title . "' , '" . $description  . "', '" . $content  . " ', '" . $date . " ', '" . $newname . " ', '"  . $select . " ')";
            //$sql_category = "Insert into  categories(id ) value('"  . $select . " ')";
            if ($conn->exec($sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: ";
            }

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}


header("location: index.php");



//adslashes function for insert
//reprodukcia
//buger gtnel
//html speshal chars
//stripslashes()


//nkarner@ varchar



//leftjoin@ veradarcnum e null arjeqner isk joini jamanak voch
///leftjoin u join@ normal haskanal