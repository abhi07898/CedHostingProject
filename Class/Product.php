<?php
class Product {
    public function __construct() 
    {
        $obj = new Config();
        $this->data = $obj->Connect();
    }
    public function insert($query) 
    {
        if ($this->data->query($query) === true) {
            $output =  1;
        } else {
            // $output =  "Error: " . $query . "<br>" . $this->data->error;
            $output = "Error: " . $query . "<br>" . $this->data->error;
        }
        return $output;
    }
    public function update($query) 
    {
        if ($this->data->query($query) === true) {
            $output =  1;
        } else {
            // $output =  "Error: " . $query . "<br>" . $this->data->error;
            $output = 0;
        }
        return $output;
    }
// function for select data or retrive the data from tbl_products
    public function select($query) {
        $result = $this->data->query($query);
        if ($result->num_rows>0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $select_data[] = $row;
                $output = json_encode($select_data);
            }        
        } else {
            $output =  "Error: " . $query . "<br>" . $this->data->error;
        }
        return $output;        
    }
// fucntion for delete the data
    public function delete($query) {
        if ($this->data->query($query) === true) {
            $output =  1;
        } else {
            // $output =  "Error: " . $query . "<br>" . $this->data->error;
            $output = 0;
        }
        return $output;
    }
}
?>