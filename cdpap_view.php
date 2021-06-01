<!-- This file is for Payroll Views -->

<?php
	$filepath = realpath(dirname(__FILE__));
		
require_once($filepath . "/db.php");
$ssn_input=$_GET['ssn'];
$rand=$_GET['rand'];
$ssn=trim($ssn_input);
$result=mysqli_query($conn,"SELECT * from payroll where ssn like '$ssn' AND random like '$rand'");
$rowcount=mysqli_num_rows($result);

if ($result && $rowcount==1){
	while ($row = mysqli_fetch_assoc($result)) {

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>CDPAP</title>
  </head>
  <body>
   <div class="container">
     <!--<h1 class="text-center my-4">C&T Home Care</h1>-->
     <div class="row">
       <div class="col-12">
         <table class="table table-bordered">
           <tbody>
               <tr>
              <th scope="row" class="border-dark text-center" colspan='4'>C and T Home Care Services, LLC <br> TEL:718-424-4200 </th>
            </tr>
            <tr>
              <th scope="row" class="border-dark text-center" colspan='4'>Patient Information</th>
            </tr>
            <tr class="bg-warning">
              <th scope="row" class="border-dark">Patient Last Name</th>
              <td class="border-right border-dark" colspan='4'><?php echo($row['lastname_pt'])?></td>
         
            </tr>
            
            
             <tr class="bg-warning">
              
                   <th scope="row" class="border-dark">Patient First Name</th>
              <td class="border-right border-dark" colspan='4'><?php echo($row['firstname_pt'])?></td>
              
             
            </tr>
            
           
            <tr class="bg-warning">
              
              <th scope="row" class="border-dark">Patient Address</th>
              <td class="border-right border-dark" colspan="4"><?php echo($row['address_pt'])?></td>
             
            </tr>
            
               <tr class="bg-warning">
              
            <th scope="row" class="border-dark">Patient Date of Birth</th>
              <td class="border-right border-dark" colspan='4'><?php echo($row['birthday'])?></td>
              
             
            </tr>
            

            
            
            <tr>
              <th scope="row" class="border-dark text-center" colspan='4'>Aide Information</th>
            </tr>

            <tr class="bg-warning">
              
              <th scope="row" class="border-dark">Aide Last Name</th>
              <td class="border-right border-dark" colspan='4'><?php echo($row['lastname_pa'])?></td>
          
            </tr>
            
            <tr class="bg-warning">
              
            <th scope="row" class="border-dark">Aide First Name</th>
              <td class="border-right border-dark" colspan='4'><?php echo($row['firstname_pa'])?></td>
              
            </tr>

            
            <tr class="bg-warning">
              
              <th scope="row" class="border-dark">Aide Address</th>
              <td class="border-right border-dark" colspan="4"><?php echo($row['address_pa'])?></td>
              
            </tr>
            
            
            
            <tr>
              <th scope="row" class="border-dark text-center" colspan='4'></th>
            </tr>
            <tr class="bg">
              
              <th scope="row" class="border-dark">Aide Assignment ID</th>
              <td class="border-right border-dark"colspan="4"><?php echo($row['assignment'])?></td>
              
              
            </tr>
            <tr class="">
              
              <th scope="row" class="border-dark">Aide Last 4 SSN Number</th>
              <td class="border-right border-dark"colspan="4"><?php echo($row['ssn'])?></td>
              
              
            </tr>
            <tr class="bg">
              
              <th scope="row" class="border-dark">Reason for failure to complete EVV submission</th>
              <td class="border-right border-dark"colspan="4"><?php echo($row['reason'])?></td>
              
             
            </tr>
            <tr class="bg">
              
              <th scope="row" class="border-dark">Date of Visit (IN)</th>
              <td class="border-right border-dark"colspan="4"><?php echo($row['date'])?></td>
              
             
            </tr>
            <tr class="bg">
              
              <th scope="row" class="border-dark">Time IN</th>
              <td class="border-right border-dark"colspan="4"><?php echo($row['inn_hour'])?> <?php echo(": ".$row['inn_min'])?> <?php echo($row['inn_start'])?></td>
              
             
            </tr>
               
            </tr>
               <tr class="bg">
              
              <th scope="row" class="border-dark">Date of Visit (OUT)</th>
              <td class="border-right border-dark"colspan="4"><?php echo($row['date1'])?> <?php echo($row['out_am'])?> <?php echo($row['out_pm'])?></td>
              
             
            </tr>
            <tr class="bg">
              
              <th scope="row" class="border-dark">Time OUT</th>
              <td class="border-right border-dark"colspan="4"><?php echo($row['out_hour'])?> <?php echo(": ".$row['out_min'])?> <?php echo($row['out_start'])?></td>
              
        

            <tr class="bg">
              
              <th scope="row" class="border-dark">Hours Worked</th>
              <td class="border-right border-dark"colspan="4"><?php echo($row['hour_worked'])?> HH:MM</td>
              
             
            </tr>

            <tr class="bg">
              
              <th scope="row" class="border-dark">Signature of Aide</th>
              <td class="border-right border-dark"colspan="4"><img src="data:<?php echo $row["aide_sign"] ?>"style="width: 300px"></td>
              
             
            </tr>
            <tr class="bg">
              
              <th scope="row" class="border-dark">Signature of Patient</th>
              <td class="border-right border-dark"colspan="4"><img src="data:<?php echo $row["customer_sign"] ?>"style="width: 300px"></td>
              
             
            </tr>
            
            
            





           </tbody>




         </table>

       </div>

     </div>
   </div>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php

}
	}
?>
