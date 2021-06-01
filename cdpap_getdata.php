
<!--this file is for the cdpap from get data-->

<?php

if(isset($_POST['submit'])){
 $filepath = realpath(dirname(__FILE__));
  require_once($filepath . "/db.php");
    
$lastname_pt=$_POST['lastnamept'];
$firstname_pt=$_POST['firstnamept'];
$Address_pt=$_POST['Addresspt'];
$birthday=$_POST['birth'];


$lastname_pa=$_POST['lastnamepa'];
$firstname_pa=$_POST['firstnamepa'];
$Address_pa=$_POST['Addresspa'];

$assignment_input=$_POST['assignment'];
$assignment=trim($assignment_input);

$ssn_input=$_POST['ssn'];
$ssn=trim($ssn_input);
$reason=$_POST['reason'];
$date=$_POST['date'];
$date1=$_POST['date1']; 

$hour_worked=$_POST['span'];

$aide_sign=$_POST['data_mon_1'];
$customer_sign=$_POST['data_mon_2'];




$inn_hour=$_POST['starth'];
$inn_min=$_POST['startm'];
$inn_start=$_POST['starta'];

$out_hour=$_POST['endh'];
$out_min=$_POST['endm'];
$out_start=$_POST['enda'];

// echo gettype($inn_hour) . "<br>";
// echo gettype($inn_min) . "<br>";
// echo($inn_hour);    
// echo '<br>';   
// echo($inn_min);    
// echo '<br>';  
// echo($inn_start);    
// echo '<br>';


// echo($out_hour);    
// echo '<br>';   
// echo($out_min);    
// echo '<br>';  
// echo($out_start);    
// echo '<br>';
// echo($hour_worked);    
// echo '<br>';








    
// echo($lastname_pt);    
// echo '<br>';   
// echo($firstname_pt);    
// echo '<br>';  
// echo($Address_pt);    
// echo '<br>';  
// echo($lastname_pa);    
// echo '<br>';  
// echo($firstname_pa);    
// echo '<br>';  
// echo($Address_pa);    
// echo '<br>'; 
// echo($assignment);    
// echo '<br>';  
// echo($ssn);    
// echo '<br>';  
// echo($reason);    
// echo '<br>';  
// echo($date);    
// echo '<br>';  
// echo($in);    
// echo '<br>';
// echo($out);    
// echo '<br>';
// echo($hour_worked);    
// echo '<br>';
// echo($aide_sign);    
// echo '<br>';
// echo($customer_sign);    
// echo '<br>';
// echo($date1);

$rand1=rand();
$rand1_str1=(string)$rand1;
$rand2=rand(10000,1000001);
$rand2_str2=(string)$rand2;
$rand_result=$rand1_str1.$rand2_str2;


$result=mysqli_query($conn,"INSERT into payroll(lastname_pt,firstname_pt,address_pt,birthday,lastname_pa,firstname_pa,address_pa,assignment,ssn,reason,date,date1,hour_worked,aide_sign,customer_sign,inn_hour,inn_min,inn_start,out_hour,out_min,out_start,random) VALUES ('$lastname_pt','$firstname_pt','$Address_pt','$birthday','$lastname_pa','$firstname_pa','$Address_pa','$assignment','$ssn','$reason','$date','$date1','$hour_worked','$aide_sign','$customer_sign','$inn_hour','$inn_min','$inn_start','$out_hour','$out_min','$out_start','$rand_result')");

if($result){
    
  $to='payroll@candthomecare.com';
$subject="CDPAP Timesheet of ".$lastname_pa.", ".$firstname_pa." for ".$lastname_pt.", ".$firstname_pt." DOB: ".$birthday;
$message="Click the link below to view timesheet 
http://candthomecare.us/oneday_timesheet/cdpap_view.php?ssn=$ssn&&rand=$rand_result";
$headers = "From: candt@techdepartment.com" . "\r\n" .
"CC: farhan.hossain.shakal@candthomecare.com";
 if(mail($to,$subject,$message,$headers)){
     
 ?><script>
  alert("Thank you for submitting your timesheet")
  </script>  
<?php 
   
}
else{
   ?><script>
  alert("please try again")
  </script>  
<?php 
}
    
    
}
else{
    
    
    ?>
    <script>
  alert("please try again")
  </script> 
<?php    
}

}



?>