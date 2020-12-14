<?php

/**
 * Short description for code
 * php version 7.2.10
 *
 * @category Category_Name
 * @package  PackageName
 * @author   Abhishek Pandey <author@example.com>
 * @license  http://www.php.net/license/3_01.txt 
 * @link     http://pear.php.net/package/PackageName
 *
 * This is a "Docblock Comment"
 */
class Product
{
     /**
      * Display the cart
      *
      * @return String
      *
      * @since 1.0.1
      */
    public function __construct() 
    {
        $obj = new Config();
        $this->data = $obj->Connect();
    }
    /**
     * Display the cart
     * 
     * @param query $query comment
     *
     * @return String
     *
     * @since 1.0.1
     */
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
    /**
     * Display the cart
     * 
     * @param query $query comment
     *
     * @return String
     *
     * @since 1.0.1
     */
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
    /**
     * Display the cart
     * 
     * @param query $query comment
     *
     * @return String
     *
     * @since 1.0.1
     */
    public function select($query) 
    {
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
    /**
     * Display the cart
     * 
     * @param query $query comment
     *
     * @return String
     *
     * @since 1.0.1
     */
    public function delete($query) 
    {
        if ($this->data->query($query) == true) {
            $output =  1;
        } else {
            $output =  "Error: " . $query . "<br>" . $this->data->error;
            // $output = 0;
        }
        return $output;
    }
    /**
     * Display the cart
     * 
     * @param id        $id        comment
     * @param name      $name      comment
     * @param url       $url       comment
     * @param mprice    $mprice    comment
     * @param yprice    $yprice    comment
     * @param sku       $sku       comment
     * @param data_json $data_json comment
     *
     * @return $output
     *
     * @since 1.0.1
     */
    public function InsertMultiData_product($id, $name, $url, $mprice, $yprice, $sku, $data_json)
    {
        $sql = "INSERT into tbl_product(`prod_parent_id`, `prod_name`,`html`, `prod_available`) VALUES ('$id','$name', '$url', 0)";
        if ($this->data->query($sql) == true) {
            $last_id = $this->data->insert_id;
            $sql2 = "INSERT into tbl_product_description(`prod_id`,`description`, `mon_price`, `annual_price`, `sku`) VALUES ('$last_id','$data_json','$mprice', '$yprice', '$sku') ";
            if ($this->data->query($sql2) == true) {
              
            } else {
                $output =  "Error: " . $sql2 . "<br>" . $this->data->error;
            }
            $output =  0;
        } else {
            $output =  "Error: " . $sql . "<br>" . $this->data->error;
        }
        return $output;

    }
    /**
     * Display the cart
     * 
     * @param id        $id        comment
     * @param name      $name      comment
     * @param url       $url       comment
     * @param mprice    $mprice    comment
     * @param yprice    $yprice    comment
     * @param sku       $sku       comment
     * @param data_json $data_json comment
     * @param prod_id   $prod_id   comment
     *
     * @return $output
     *
     * @since 1.0.1
     */
    public function Update_Data_product($id, $name, $url, $mprice, $yprice, $sku, $data_json, $prod_id)
    {
        $sql= "UPDATE `tbl_product` SET `prod_name`='$name',`html`='$url' WHERE `id` ='$prod_id'";
        if ($this->data->query($sql) === true) {
            $sql2="UPDATE `tbl_product_description` SET `description`='$data_json',`mon_price`='$mprice',`annual_price`='$yprice',`sku`='$sku' WHERE `prod_id` ='$prod_id'";
            if ($this->data->query($sql2) === true) {
                $output =  0;
            } else {
                $output =  "Error updating record: " . $this->data->error;
            }
        } else {
            $output =  "Error updating record: " . $this->data->error;
        }
        return ($output);
    } 
}
    

?>