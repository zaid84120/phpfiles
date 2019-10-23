
<?php
include 'db.php';
error_reporting(0);
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$res=array();
$query1= mysqli_query($con,"select customer_mobile from customer_signup where customer_mobile='$mobile'");
if(mysqli_num_rows($query1) != 0){
$res['success']="2";
$res['msg']="email exsist";
}
else{
$sql="insert into customer_signup (customer_name,customer_mobile,customer_email,customer_password) values ('$name','$mobile','$email','$password')";
$result=mysqli_query($con,$sql);
if($result>0)
{
$res['success']="1";
$res['msg']="inserted  successesfully";
}
else
{
$res['success']="0";
$res['msg']="not inserted";
}
}
echo json_encode($res);
?>


