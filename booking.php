<html>
<head>
</head>
<body>
<?php
if(isset($_POST['nm']))$name=$_POST['nm'];

if(isset($_POST['db']))$db=$_POST['db'];

if(isset($_POST['gd']))$gd=$_POST['gd'];

if(isset($_POST['pn']))$pn=$_POST['pn'];

if(isset($_POST['an']))$an=$_POST['an'];

if(isset($_POST['gn']))$gn=$_POST['gn'];

if(isset($_POST['gp']))$gp=$_POST['gp'];

if(isset($_POST['fp']))$fp=$_POST['fp'];

if(isset($_POST['tp']))$tp=$_POST['tp'];
if(isset($_POST['dd']))$dd=$_POST['dd'];
if(isset($_POST['rd']))$rd=$_POST['rd'];
if(isset($_POST['adt']))$adt=$_POST['adt'];
if(isset($_POST['ch']))$ch=$_POST['ch'];
if(isset($_POST['cls']))$tcl=$_POST['cls'];

$con = mysqli_connect("localhost","root","","travels1");
$sql = "INSERT into booking1 ( name, dob, gd, phone_no, ad_no, g_name, gp, from_place, to_place, d_date, ret_date, adults, chd, tcl ) VALUES ( '$name' , '$db' , '$gd' , '$pn' , '$an', '$gn', '$gp', '$fp', '$tp', '$dd', '$rd', '$adt', '$ch', '$tcl' )";
$rs = mysqli_query($con,$sql);
if($rs){
echo '<script>alert("Your Journey is Booked")</script>';
} else {
echo '<script>alert("Booking is Canceld")</script>';
}

?>
</body>
</html>