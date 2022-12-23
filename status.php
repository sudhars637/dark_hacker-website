<?php 
$conn = mysqli_connect("localhost","root","","travels1");

$phno = $_POST['pn'];

$rs = mysqli_query( $conn, "SELECT id, name, dob, gd, phone_no, ad_no, g_name, gp, from_place, to_place, d_date, ret_date, adults, chd, tcl FROM booking1 ");

if ( mysqli_num_rows($rs) > 0 ) {
while ($result = mysqli_fetch_array($rs))
{ if ( $result['phone_no'] == $phno){
echo "<table border = 1> <tr><th>Booking ID</th><th>Name</th><th>DOB</th><th>Gender</th><th>Contact</th><th>Aadhar no</th><th>Gardian name</th><th>Gardian phone</th><th>From place</th><th>To place</th><th>Depaturing date</th><th>Returning Date</th><th>Adults</th><th>childern</th><th>Travel Class</th></tr> ";
echo '<tr> 
<td>' . $result['id'] . '</td>
<td>' . $result['name'] . '</td> 
<td>' . $result['dob'] . '</td>
<td>' . $result['gd'] . '</td>
<td>' . $result['phone_no'] . '</td>
<td>' . $result['ad_no'] . '</td>
<td>' . $result['g_name'] . '</td>
<td>' . $result['gp'] . '</td>
<td>' . $result['from_place'] . '</td>
<td>' . $result['to_place'] . '</td>
<td>' . $result['d_date'] . '</td>
<td>' . $result['ret_date'] . '</td>
<td>' . $result['adults'] . '</td>
<td>' . $result['chd'] . '</td>
<td>' . $result['tcl'] . '</td>
</tr>';
} 
} 
echo '</table>';
mysqli_close($conn);
}


?>
