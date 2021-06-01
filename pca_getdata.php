<!--This file is for pca .. data will come from pca_one file. this file will insert data in database-->
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

$hour_worked=$_POST['span'];


$inn_hour=$_POST['startk'];
$inn_min=$_POST['startm'];
$inn_start=$_POST['starta'];

$out_hour=$_POST['endh'];
$out_min=$_POST['endm'];
$out_start=$_POST['enda'];
$date1=$_POST['date1']; 



$tub=$_POST['tub'];
$shower=$_POST['shower'];
$bed=$_POST['bed'];
$total_care=$_POST['total_care'];
$mouth_care=$_POST['mouth_care'];
$comb=$_POST['comb'];
$shampoo=$_POST['shampoo'];
$shave=$_POST['shave'];
$nail=$_POST['nail'];
$dressing=$_POST['dressing'];
$skin_care=$_POST['skin_care'];
$foot_care=$_POST['foot_care'];
$diaper=$_POST['diaper'];
$commode=$_POST['commode'];
$bedpan=$_POST['bedpan'];
$toilet=$_POST['toilet'];
$nutrition=$_POST['nutrition'];
$breakfast=$_POST['breakfast'];
$lunch=$_POST['lunch'];
$dinner=$_POST['dinner'];
$snack=$_POST['snack'];
$feeding=$_POST['feeding'];
$transferring=$_POST['transferring'];
$walking=$_POST['walking'];
$device=$_POST['device'];
$exercise=$_POST['exercise'];
$motion=$_POST['motion'];
$q2=$_POST['q2'];
$q2hours=$_POST['hours'];
$foley=$_POST['foley'];
$ostomy=$_POST['ostomy'];
$medication=$_POST['medication'];
$linen=$_POST['linen'];
$laundry=$_POST['laundry'];
$light=$_POST['light'];
$shopping=$_POST['shopping'];
$appointment=$_POST['appointment'];
$safety=$_POST['safety'];
$pa_sign=$_POST['data_mon_1'];
$pt_sign=$_POST['data_mon_2'];
$rand1=rand();
$rand1_str1=(string)$rand1;
$rand2=rand(10000,1000001);
$rand2_str2=(string)$rand2;
$rand_result=$rand1_str1.$rand2_str2;


if(!empty($tub)){
    $tub= "&check;";
}
if(!empty($shower)){
    $shower="&check;";
}

if(!empty($bed)){
    $bed="&check;";
}

if(!empty($total_care)){
    $total_care="&check;";
}
if(!empty($mouth_care)){
    $mouth_care="&check;";
}
if(!empty($comb)){
    $comb="&check;";
}
if(!empty($shampoo)){
    $shampoo="&check;";
}
if(!empty($shave)){
    $shave="&check;";
}
if(!empty($nail)){
    $nail="&check;";
}
if(!empty($dressing)){
    $dressing="&check;";
}
if(!empty($skin_care)){
    $skin_care="&check;";
}
if(!empty($foot_care)){
    $foot_care="&check;";
}

if(!empty($diaper)){
    $diaper="&check;";
}
if(!empty($commode)){
    $commode="&check;";
}
if(!empty($bedpan)){
    $bedpan="&check;";
    
}
if(!empty($toilet)){
    $toilet="&check;";
}


if(!empty($nutrition)){
    $nutrition="&check;";
}
if(!empty($breakfast)){
    $breakfast="&check;";
}
if(!empty($lunch)){
    $lunch="&check;";
}
if(!empty($dinner)){
    $dinner="&check;";
}
if(!empty($snack)){
    $snack="&check;";
}
if(!empty($feeding)){
    $feeding="&check;";
}
if(!empty($transferring)){
    $transferring="&check;";
}

if(!empty($walking)){
    $walking="&check;";
}
if(!empty($device)){
    $device="&check;";
}
if(!empty($exercise)){
    $exercise="&check;";
}
if(!empty($motion)){
    $motion="&check;";
}
if(!empty($q2)){
    $q2="&check;";
}


if(!empty($foley)){
    $foley="&check;";
}
if(!empty($ostomy)){
    $ostomy="&check;";
}
if(!empty($medication)){
    $medication="&check;";
}
if(!empty($linen)){
    $linen="&check;";
}
if(!empty($laundry)){
    $laundry="&check;";
}
if(!empty($light)){
    $light="&check;";
}


if(!empty($shopping)){
    $shopping="&check;";
}
if(!empty($appointment)){
    $appointment="&check;";
}

if(!empty($safety)){
    $safety="&check;";
}
if(empty($inn_am)){
    $inn_am='';
}
if(empty($out_am)){
    $out_am='';
}
if(empty($inn_pm)){
    $inn_pm='';
}
if(empty($out_pm)){
    $out_pm='';
}









if(empty($tub)){
    $tub= " ";
}
if(empty($shower)){
    $shower="";
}

if(empty($bed)){
    $bed="";
}

if(empty($total_care)){
    $total_care=" ";
}
if(empty($mouth_care)){
    $mouth_care=" ";
}
if(empty($comb)){
    $comb=" ";
}
if(empty($shampoo)){
    $shampoo=" ";
}
if(empty($shave)){
    $shave=" ";
}
if(empty($nail)){
    $nail=" ";
}
if(empty($dressing)){
    $dressing=" ";
}
if(empty($skin_care)){
    $skin_care=" ";
}
if(empty($foot_care)){
    $foot_care=" ";
}

if(empty($diaper)){
    $diaper=" ";
}
if(empty($commode)){
    $commode=" ";
}
if(empty($bedpan)){
    $bedpan=" ";
    
}
if(empty($toilet)){
    $toilet=" ";
}


if(empty($nutrition)){
    $nutrition=" ";
}
if(empty($breakfast)){
    $breakfast=" ";
}
if(empty($lunch)){
    $lunch=" ";
}
if(empty($dinner)){
    $dinner=" ";
}
if(empty($snack)){
    $snack=" ";
}
if(empty($feeding)){
    $feeding=" ";
}
if(empty($transferring)){
    $transferring=" ";
}

if(empty($walking)){
    $walking=" ";
}
if(empty($device)){
    $device=" ";
}
if(empty($exercise)){
    $exercise=" ";
}
if(empty($motion)){
    $motion=" ";
}
if(empty($q2)){
    $q2="  ";
}
if(empty($q2hours)){
    $q2="  ";
}
if(empty($foley)){
    $foley=" ";
}
if(empty($ostomy)){
    $ostomy=" ";
}
if(empty($medication)){
    $medication=" ";
}
if(empty($linen)){
    $linen=" ";
}
if(empty($laundry)){
    $laundry=" ";
}
if(empty($light)){
    $light=" ";
}


if(empty($shopping)){
    $shopping=" ";
}
if(empty($appointment)){
    $appointment=" ";
}

if(empty($safety)){
    $safety=" ";
}



// echo("1 ".$inn_hour);
// echo("<br>");
// echo("2 ".$inn_min);
// echo("<br>");
// echo("3 ".$inn_start);
// echo("<br>");
// echo("4 ".$out_hour);
// echo("<br>");
// echo("5 ".$out_min);
// echo("<br>");
// echo("6 ".$out_start);
// echo("<br>");
// echo("7 ".$date1);
// echo("<br>");
// echo("8 ".$hour_worked);
// echo("<br>");
// echo("1 ".$inn_hour);





$result=mysqli_query($conn,"INSERT into pca(lastname_pt,firstname_pt,address_pt,birthday,lastname_pa,firstname_pa,address_pa,assignment,ssn,reason,date,hour_worked,tub,shower,bed,total_care,mouth_care,comb,shampoo,shave,nail,dressing,skin_care,foot_care,diaper,commode,bedpan,toilet,nutrition,breakfast,lunch,dinner,snack,feeding,transferring,walking,device,exercise,motion,q2,hours,foley,ostomy,medication,linen,laundry,light,shopping,appointment,safety,pa_sign,pt_sign,inn_hour,inn_min,inn_start,out_hour,out_min,out_start,date1,random) VALUES ('$lastname_pt','$firstname_pt','$Address_pt','$birthday','$lastname_pa','$firstname_pa','$Address_pa','$assignment','$ssn','$reason','$date','$hour_worked','$tub','$shower','$bed','$total_care','$mouth_care','$comb','$shampoo','$shave','$nail','$dressing','$skin_care','$foot_care','$diaper','$commode','$bedpan','$toilet','$nutrition','$breakfast','$lunch','$dinner','$snack','$feeding','$transferring','$walking','$device','$exercise','$motion','$q2','$q2hours','$foley','$ostomy','$medication','$linen','$laundry','$light','$shopping','$appointment','$safety','$pa_sign','$pt_sign','$inn_hour','$inn_min','$inn_start','$out_hour','$out_min','$out_start','$date1','$rand_result')");











// echo("2 ".$firstname_pt);
// echo("<br>");
// echo("3 ".$Address_pt);
// echo("<br>");
// echo("3 ".$birthday);
// echo("<br>");
// echo("4 ".$lastname_pa);
// echo("<br>");
// echo("# ".$firstname_pa);
// echo("<br>");
// echo("5 ".$Address_pa);
// echo("<br>");
// echo("6 ".$assignment);
// echo("<br>");
// echo("7 ".$ssn);
// echo("<br>");
// echo("# ".$reason);
// echo("<br>");
// echo("8 ".$inn);
// echo("<br>");
// echo("9 ".$out);
// echo("<br>");
// echo("10 ".$date);
// echo("<br>");
// echo("11 ".$hour_worked);
// echo("<br>");
// echo("12 ".$tub);
// echo("<br>");
// echo("13 ".$shower);
// echo("<br>");
// echo("14 ".$bed);
// echo("<br>");
// echo("15 ".$total_care);
// echo("<br>");
// echo("16 ".$mouth_care);
// echo("<br>");
// echo("17 ".$comb);
// echo("<br>");
// echo("18 ".$shampoo);
// echo("<br>");
// echo("19 ".$shave);
// echo("<br>");
// echo("20 ".$nail);
// echo("<br>");
// echo("21 ".$dressing);
// echo("<br>");
// echo("22 ".$skin_care);
// echo("<br>");
// echo("23 ".$foot_care);
// echo("<br>");
// echo("24 ".$diaper);
// echo("<br>");
// echo("25 ".$commode);
// echo("<br>");
// echo("26 ".$bedpan);
// echo("<br>");
// echo("27 ".$toilet);
// echo("<br>");
// echo("28 ".$nutrition);
// echo("<br>");
// echo("29 ".$breakfast);
// echo("<br>");
// echo("30 ".$lunch);
// echo("<br>");
// echo("31 ".$dinner);
// echo("<br>");
// echo("32 ".$snack);
// echo("<br>");
// echo("33 ".$feeding);
// echo("<br>");
// echo("34 ".$transferring);
// echo("<br>");
// echo("34 ".$walking);
// echo("<br>");
// echo("35 ".$device);
// echo("<br>");
// echo("36 ".$exercise);
// echo("<br>");
// echo("37 ".$motion);
// echo("<br>");
// echo("38 ".$q2);
// echo("<br>");
// echo("39 ".$foley);
// echo("<br>");
// echo("40 ".$ostomy);
// echo("<br>");
// echo("41 ".$medication);
// echo("<br>");
// echo("42 ".$linen);
// echo("<br>");
// echo("43 ".$laundry);
// echo("<br>");
// echo("44 ".$light);
// echo("<br>");
// echo("45 ".$shopping);
// echo("<br>");
// echo("46 ".$appointment);
// echo("<br>");
// echo("47 ".$safety);
// echo("<br>");
// echo("48 ".$pa_sign);
// echo("<br>");
// echo("49 ".$pt_sign);
// echo("<br>");

if($result){
    
  $to='payroll@candthomecare.com';
$subject="PCA Timesheet of ".$lastname_pa.", ".$firstname_pa." for ".$lastname_pt.", ".$firstname_pt." DOB: ".$birthday;
$message="Click the link below to view timesheet 
https://candthomecare.us/oneday_timesheet/pca_view.php?ssn=$ssn&&rand=$rand_result";
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


}



?>



























































