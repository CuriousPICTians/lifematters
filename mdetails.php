
<?php

session_start();

?>

<form method="POST" enctype="multipart/form-data" action="">
    
    <label for="r1">Report 1:</label>
    <input type="text" name="report1" id="report1" />

    <label for="pic">Please upload Report:</label>
    <input type="file" name="pic" id="pic" />
    
    


<?php
if( $report1=$_POST['report1'])
    
        echo '<a href="d_test.php?file=picture.jpg">Download</a>';
 
?> 

</br>

    <label for="r2">Report 2:</label>
    
    <input type="text" name="report2" id="report2" />
    <label for="pic">Please upload Report:</label>
    
    <input type="file" name="pic1" id="pic1" />
    
    
<?php

 if( $report2=$_POST['report2'])
    
        echo '<a href="r2.php?file=picture.jpg">Download</a>';
    
?>

Enter Patient's priority : <br/><br/>

                <input type="radio" name="priority" value="0">Normal [Stage 1] <br/><br/>
                <input type="radio" name="priority" value="1">Not Normal [Stage 2] <br/><br/>
                <input type="radio" name="priority" value="2">Serious     [Stage 3]   <br/><br/>
                <input type="radio" name="priority" value="3">Very Serious [Stage 4] <br/><br/>
                <input type="radio" name="priority" value="4">Too Serious  [Stage 5]  <br/><br/>

                <br/><br/>

                <input type="checkbox" name="approved" value="1">Click Here To Approve  <br/><br/>
<?php

 $m = new MongoClient();



$report1=$_POST['report1'];
$_SESSION['report1']=$report1;

$report2=$_POST['report2'];
$_SESSION['report2']=$report2;

$priority=$_POST['priority'];
    
$approved=$_POST['approved'];



  $gridfs = $m->selectDB('organ')->getGridFS();



    //$m = new Mongoclient();
    $db = $m->organ; //Change to your database
   

		$collection = $db->donorinfo;

		$collectionD= $db->receiverinfo;


if(isset($_POST['submit']))
{
    if(isset($report1))
    {
        $gridfs->storeUpload('pic', array('report1' => $_POST['report1'],'email' => $_SESSION['pemail']));
    }
   //echo '<a href="d_test.php?file=picture.jpg">Download</a>';
    if(isset($report2))
    {
        $gridfs->storeUpload('pic1', array('report2' => $_POST['report2'],'email' => $_SESSION['pemail']));
   // echo '<a href="r2.php?file=picture.jpg">Download</a>';
    }
    
    else
        echo "no";

                    $patient=array("priority"=>$priority);
                   
                    $p=array("approved"=>$approved);
                   
        if($approved == 1)
        {

echo $_SESSION['pemail'];
				
            $collection->update(array("email" => $_SESSION['pemail']),array('$set' => array('priority'=>$priority,'approved' => "1")));
			$collectionD->update(array("email" => $_SESSION['pemail']),array('$set' => array('priority'=>$priority,'approved' => "1")));
}
?>

<!button type="reset" class="btn btn-large btn-success" onclick="location.href='kmeans.php'">  <!/button>
<script type="text/javascript">
window.location = "kmeans1.php";
</script>

<?php 
}
?> 
</br>
<button type="submit" name ="submit" class="btn btn-large btn-success" onclick="location.href='kmeans1.php'" >submit</button>

</form>
