
<?php
include 'db.php';
error_reporting(0);
$username=$_POST['mobile'];
$password=$_POST['password'];

$sql="select customer_mobile,customer_password from customer_signup where customer_mobile='".$username."' AND  customer_password='".$password."'";
$result=mysqli_query($con,$sql);
$res=array();
$num_rows = mysqli_fetch_assoc($result);
if($num_rows)
{
$res['success']="1";
$res['msg']="login success";
}
else
{
$res['success']="0";
$res['msg']="login failed";
}
echo json_encode($res);
?>


