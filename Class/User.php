<?php
session_start();
include 'Config.php';
class User {
    public function __construct() {
        $obj = new Config();
        $this->data = $obj->Connect();
    }
    //methode for insert the data 
    public function insert($query) {
        if ($this->data->query($query) === true) {
            $output =  "New record created successfully";
          } else {
            // $output =  "Error: " . $query . "<br>" . $this->data->error;
            $output = "User with this E-mail/Contact_No is Already Exists";
          }
          return $output;
    }
    // closing of methode for insert the data 




     //methode for select the data 
     public function login($query) {
        $result = $this->data->query($query);
        if ($result->num_rows == 1) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $isadmin = $row['is_admin'];
            if($isadmin == 0) {
              $output = 1;
              $_SESSION['user'] = array('name' => $row['name'] ,'email'=>$row['email']);
            } else if($isadmin == 1) {
              $output = 2;
              $_SESSION['admin'] = array('name' => $row['name'] ,'email'=>$row['email']);
            }
          }        
        } else {
          $output =  "Password or Username does't matched";
        }
        return $output;
        
    }
    public function select($query) {
      $result = $this->data->query($query);
      if ($result->num_rows == 1) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $output = 1;
          $_SESSION['user'] = array('name' => $row['name'] ,'email'=>$row['email']);
        }        
      } else {
        $output =  "Error: " . $query . "<br>" . $this->data->error;
      }
      return $output;
      
  }
    // closing of methode for select the data 


    

     //methode for updte the data 
     public function update($query) {
        
    }
    // closing of methode for update the data 
}
?>