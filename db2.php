<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "candidate");  
 $data = json_decode(file_get_contents("php://input"));  
 
 if(count($data) > 0)  
 {  
   
    
      $query = "DELETE from candidate_info where id = '$data->id'";
      

    if(mysqli_query($connect, $query))  
      {  
                   echo "Data deleted successfully...";  
      }  
      else  
      {  
           echo 'Error';  
      }  
 } 
 ?>  