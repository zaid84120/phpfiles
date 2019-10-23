
<?php
error_reporting(0);
$name=$_POST['name'];
$date=$_POST['date'];
$amount=$_POST['amount'];
include 'db.php';
$res=array();

$sql="insert into customer_expense (expense_date,expense_name,expense_amount) values ('$date','$name',$amount)";
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
echo json_encode($res);
?>


