<?php
session_start();
echo $_SESSION['email'];
?>
           
            <form name="newad" method="post" enctype="multipart/form-data"  action="">
                <br/>
                <label for="file">Enter Report Name :</label>
                <input type="text" name="report1">
                <input type="file" name="file" id="file" />
                </br>
                </br>
                <label for="file">Enter Report Name :</label>
                <input type="text" name="report2">
                <input type="file" name="file2" id="file2" />
                </br>
                </br>
                <label for="file">Enter Report Name :</label>
                <input type="text" name="report3">
                <input type="file" name="file3" id="file3" />
                </br>
                </br>
                <label for="file">Enter Report Name :</label>
                <input type="text" name="report4">
                <input type="file" name="file4" id="file4" />
                <br/><br/>
                <input type="submit" class='upload-button' name="submit" value="Upload" />  
            </form>
        <br/><br/>
        
              




<?php
     /* Demonstrates how to upload multiple images using PHP and insert the
     * image path and a unique ID into a MongoDB database
     * http://www.fusionstrike.com
     */

    $m = new Mongoclient();
    $db = $m->organ; //Change to your database
    $collection = $db->donorinfo; //Change to your collection
    
    $r1=$_POST['report1'];
    $r2=$_POST['report2'];
    $r3=$_POST['report3'];
    $r4=$_POST['report4'];

    $cursor = $collection->find();
  $upload_dir = "/var/www/html/f/uploads/"; //Specified the upload directory
        
        
        if(isset($_POST['submit'])){ //Checks if the upload form has been submitted, if so, continue
        
        $arr = array($_FILES["file"], $_FILES["file2"], $_FILES["file3"], $_FILES["file4"]); //Begins the array for the file uploads
            foreach ($arr as $value) {
                
                if ($value["error"] > 0){
                    //Error uploading the file, script stops here
                }else{
                    
                if (file_exists($upload_dir . $value["name"])){
                    //Error uploading the file, a file with the same name already exists, script stops here
                  } else {
                  move_uploaded_file($value["tmp_name"], $upload_dir. $value["name"]);
                    $successful = 1; //Sets the upload flag to 1, will display sucsess message below upload form      
              
                    
                
                    $url ="/var/www/html/f/uploads/" . $value["name"]; //Places the Upload Path into the URL varliable
                    $unique_id = "content".rand(); //Generates a random ID and stores in within the unique_id variable
                    
                    echo "$unique_id";

                    $obj = array( "report1"=>$r1,"report2"=>$r2,"report3"=>$r3,"report4"=>$r4,"file_name"=>$value["name"], "url" => $url, "unique_id" => $unique_id); //Adds the URL and Random ID to Mongo
                    
                    $collection->update(array("email" => $_SESSION['email']),array('$set' => array('medical_details' => $obj)));
 //$collection->update(array("email" => $_SESSION['email']),array('$set' => array('info' => $data)));

                    
                  }
                }

        } //Ends the array
        unset($value); //Unsets the value variable from the array

         }else{
            //If the submit form is not submitted, do nothing
            }


 ?>

 P
