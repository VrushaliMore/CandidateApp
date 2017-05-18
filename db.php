 <?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "candidate");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  

    $id = $data->id;
    echo $id;
    if(!empty($id)){

      $query= "UPDATE candidate_info SET first_name = '$data->first_name', middle_name = '$data->middle_name', last_name = '$data->last_name', email = '$data->email', gender = '$data->gender',contact_no = '$data->contact_no', alternate_contact_no = '$data->alternate_contact_no', stability = '$data->stability', employment_type = '$data->employment_type' WHERE id = '$data->id'";

      if(mysqli_query($connect, $query))  
      {  
                   echo "Data Updated...";  
      }  
      else  
      {  
           echo 'Error';  
      }  
    }else{
      $query = "INSERT INTO candidate_info(first_name, middle_name, last_name, email, gender,contact_no, alternate_contact_no, stability, employment_type) VALUES ('$data->first_name', '$data->middle_name', '$data->last_name', '$data->email', '$data->gender', '$data->contact_no', '$data->alternate_contact_no','$data->stability', '$data->employment_type')";  


      echo $query;
      if(mysqli_query($connect, $query))  
      {  
      	           echo "Data Inserted...";  
      }  
      else  
      {  
           echo 'Error';  
      }  
    }
 }  
 ?>  