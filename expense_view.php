<?php
include 'db.php';
$res=array();
$sql="select expense_id,expense_date,expense_name,expense_amount from customer_expense;";
$result=mysqli_query($con,$sql);
$expense=array();
while($row=mysqli_fetch_assoc($result))
{
$expense[]=$row;
}
$res['success']="1";
$res['msg']="Expense list";
$res['expense']=$expense;
echo json_encode($res);
?>
