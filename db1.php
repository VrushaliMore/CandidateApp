 <?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "candidate");  
 $data = json_decode(file_get_contents("php://input"));  
 
 if(count($data) > 0)  
 {  
   
    
      $query = "SELECT * from candidate_info where id = '$data->id'";
      

    $result = mysqli_query($connect, $query);
    $array = array();
     while($row = mysqli_fetch_assoc($result))
    {
        $array = $row;
    } 
    echo json_encode($array);
   
 } 
 ?>  
