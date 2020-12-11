<?php
include 'Class/User.php';
include 'Class/Product.php';
$objUser = new User(); 
$action = $_POST['action'];
$objProduct = new Product();
switch($action) {
case 'register_user' :
    $username = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = md5($_POST['password']);
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $query = "INSERT into tbl_user(`email`,`name`,`mobile`,`password`,`security_question`,`security_answer`)
    VALUES ('$email','$username','$contact', '$password', '$question', '$answer')";
    $data =  $objUser->insert($query);
    echo $data;
    break;
case 'login':
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $query = "SELECT * from tbl_user WHERE (`email`='$email' AND`password`='$password') AND (`email_approved`= 1 OR `phone_approved` = 1)";
    $data = $objUser->login($query);
    echo $data;
    break;
case 'insert_product(hosting)':
    $name = $_POST['name'];
    $url = $_POST['url'];
    $avail = $_POST['avail'];
    $query = "INSERT into tbl_product(`prod_name`, `link`, `prod_available`) VALUES ('$name', '$url', '$avail') ";
    $data = $objProduct->insert($query);
    if ($data == 1) {
         echo "Product data Inserted Successfully!!";
    } else {
         echo $data;
    }
    break;
case 'Retrive_data_from_tbl_product' :
    $query = "SELECT * FROM tbl_product WHERE `id`<>1";
    $data = $objProduct->select($query);
    print_r($data);
    break;
case 'edit_cat_product':
    $id = $_POST['id'];
    $query = "SELECT * FROM tbl_product WHERE `id`='$id'";
    $data = $objProduct->select($query);
    print_r($data);
    break;
case 'update_cat_product':
    $id = $_POST['id'];
    $name = $_POST['name'];
    $url = $_POST['url'];
    $avail = $_POST['avail'];
    $query = "UPDATE tbl_product SET `prod_name`='$name', `link` = '$url', `prod_available`= '$avail' WHERE `id`='$id'" ;
    $data = $objProduct->update($query);
    echo $data;
    break;
case 'delete_cat_product' :
    $id = $_POST['id'];
    $query = "DELETE FROM tbl_product WHERE `id`='$id'";
    $data = $objProduct->delete($query);
    echo $data;
    break;
case 'menus_dayanamic':
    $query = "SELECT * FROM tbl_product WHERE `id`<>1 AND `prod_available`=1";
    $data = $objProduct->select($query);
    print_r($data);
    break;
case "fatched_hosting_category" : 
    $query = "SELECT * FROM tbl_product WHERE `id`<>1 AND `prod_available` = 1";
    $data = $objProduct->select($query);
    print_r($data);
    break;
case "verified_gmail" :
    $email = $_POST['email']; 
    $query =  "UPDATE tbl_user SET `email_approved` = 1  WHERE `email` = '$email'";
    $data = $objUser->update($query);
    echo $data;
    break;
case 'Insert_multiple' :
    $id = $_POST['id'];
    $name = $_POST['name'];
    $url = $_POST['url'];
    $mprice = $_POST['mprice'];
    $yprice = $_POST['yprice'];
    $sku = $_POST['sku'];
    $data = $_POST['data'];
    $data_json = json_encode($data);
    $data = $objProduct->InsertMultiData_product($id, $name, $url, $mprice, $yprice, $sku, $data_json);
    echo $data;
    // print_r($data_json);
    // $query = "INSERT into tbl_product(`prod_parent_id`, `prod_name`,`link`, `prod_available`) VALUES ('$id','$name', '$url', 0) ";
    // $data = $objProduct->insert($query);
    // if ($data == 1) {
    //     $query = "INSERT into tbl_product_description(`prod_id`, `prod_name`,`description`, `mon_price`, `annual_price`, `sku`) VALUES ('$id','$name', '$url', 0) ";
    //     $data = $objProduct->insert($query);
    // } else {
    //      echo $data;
    // }
}
?> 
