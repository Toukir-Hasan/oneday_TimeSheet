<?php
$filepath = realpath(dirname(__FILE__));
require_once($filepath . "/db.php");
$service=$_POST['service'];
$assignment=$_POST['assignment'];
$ssn=$_POST['ssn'];

// echo($service);
// echo("<br>");
// echo($assignment);
// echo("<br>");
// echo($ssn);


if($service=='cdpap'){
        // echo("hi");
    
		$result = mysqli_query($conn, "select * from payroll where ssn like '$ssn' and assignment like '$assignment'order by id DESC LIMIT 20");
        $cdpap= mysqli_fetch_assoc($result);

		if ($result && $cdpap>=1) {
		    
			
		echo("hello");
// 		else{
// 		    	echo ("Not Done");
// 		}

		while ($row = mysqli_fetch_assoc($result)) {
	?>	    
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
           <h1 align="center">Date:<?php echo($row['date'])?></h1>
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
  else {
   ?><script>
  alert("Wrong Information given")
  </script>  
<?php 
  }
}
else if($service=='pca'){
    
		$result = mysqli_query($conn, "select * from pca where ssn like '$ssn' and assignment like '$assignment'order by id DESC LIMIT 20");
         $pca= mysqli_fetch_assoc($result);

		if ($result && $pca>=1) {
			
		
// 		else{
// 		    	echo ("Not Done");
// 		}

		while ($row = mysqli_fetch_assoc($result)) {
	?>	    
		    

                     <html lang="en">
                        
                        <head>
                          <!-- Required meta tags -->
                          <meta charset="utf-8">
                          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                          
                          
                          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/themes/base/jquery-ui.min.css" integrity="sha512-YqF4f2cbm2jH7sEEu/iDJFjSQ/qUSzoiQIK2OQ3OFTsQQE5dxoCTYz1wZrTMv8ES8NYqOB5ChZU8jQdMaEv/yg==" crossorigin="anonymous" />
                          <!-- Bootstrap CSS -->
                          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
                            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
                          <link rel="stylesheet" href="css/pca_one.css">
                          <title>PCA</title>
                          <style type="text/css">
                            
                            
                          </style>
                        </head>
                        
                        <body>
                        
                        <div class="container">
                          
                             <div class="row">
                               <div class="col-xs-12">
                                      <h1 align="center">Date:<?php echo($row['date'])?></h1>
                                 <table class="table table-bordered .tablemobile">
                                   <tbody>
                                       <tr>
              <th scope="row" class="border-dark text-center" colspan='4'>AginCare Home Care Services, Inc. <br> TEL:718-424-4200</th>
            </tr>
                                    <tr>
                                      <th scope="row" class="border-dark text-center" colspan='4'><h3><b>Patient Information</b></h3></th>
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
                                      <td class="border-right border-dark" colspan="4"><?php echo($row['birthday'])?></td>
                                    
                                    </tr>
                                    <tr>
                                      <th scope="row" class="border-dark text-center" colspan='4'><h3><b>Aide Information</b></h3></th>
                                    </tr>
                        
                                    <tr class="bg-warning">
                                      
                                      <th scope="row" class="border-dark">Aide Last Name</th>
                                      <td class="border-right border-dark"><?php echo($row['lastname_pa'])?></td>
                                      
                                    </tr>
                                    
                                      <tr class="bg-warning">
                                      
                                      <th scope="row" class="border-dark">Aide First Name</th>
                                      <td class="border-right border-dark"><?php echo($row['firstname_pa'])?></td>
                                    </tr>
                                  
                        
                                    
                                    <tr class="bg-warning">
                                      
                                      <th scope="row" class="border-dark">Aide Address</th>
                                      <td class="border-right border-dark" colspan="4"><?php echo($row['address_pa'])?></td>
                                    </tr>
                                    
                                    
                                    
                                    
                                      <tr class="bg-warning">
                                      
                                        <th scope="row" class="border-dark">Aide Assignment ID</th>
                                      <td class="border-right border-dark"><?php echo($row['assignment'])?></td>
                       
                                    </tr>
                                    
                                    
                                      <tr class="bg-warning">
                                      
                                      <th scope="row" class="border-dark">Aide Last 4 SSN Number</th>
                                      <td class="border-right border-dark"><?php echo($row['ssn'])?></td>
                                    </tr>
                                    
                                       <tr>
                                      <th scope="row" class="border-dark text-center" colspan='4'><h3><b>Please Fill Out the Information Below</b></h3></th>
                                    </tr>
                                  
                              
                                    <tr class="bg">
                                      
                                  <th scope="row" class="border-dark">Reason for failure to complete EVV submission</th>
                                  <td class="border-right border-dark"colspan="4"><?php echo($row['reason'])?></td>
                                      
                                     
                                    </tr>
                                    <tr class="bg-">
                                      
                                      <th scope="row" class="border-dark">Date of Visit (IN)</th>
                                      <td class="border-right border-dark"colspan="4"><?php echo($row['date'])?></td>
                                      
                                     
                                    </tr>
                                     </tr>
                                    
                                    
                                    
                                    
                                    <tr class="bg">
                                      
                                      <th scope="row" class="border-dark">Time IN</th>
                                      <td class="border-right border-dark"colspan="4"><?php echo($row['inn_hour'])?> <?php echo(": ".$row['inn_min'])?> <?php echo($row['inn_start'])?></td>
                                      
                                     
                                       <tr class="bg-">
                                      
                                      <th scope="row" class="border-dark">Date of Visit (OUT)</th>
                                      <td class="border-right border-dark"colspan="4"><?php echo($row['date1'])?></td>
                                      
                                     
                                    </tr>
                                   
                                    <tr class="bg">
                                      
                                      <th scope="row" class="border-dark">Time OUT</th>
                                      <td class="border-right border-dark"colspan="4"><?php echo($row['out_hour'])?> <?php echo(": ".$row['out_min'])?> <?php echo($row['out_start'])?></td>
                                      
                                     
                                    </tr>
                        
                                    <tr class="bg">
                                      
                                      <th scope="row" class="border-dark">Hours Worked</th>
                                      <td class="border-right border-dark"colspan="4"><?php echo($row['hour_worked'])?>  HH:MM</td>
                                      
                                     
                                    </tr>
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-center" colspan='4'><h3><b>Tasks</b></h3></th>
                                    </tr>
                                    <tr class="bg-warning">
                                      <th scope="row" class="border-dark text-left" colspan='4'><b>PERSONAL CARE</b></th>
                                    </tr>
                        
                                    <tr class="bg">
                                      
                                      <th scope="row" class="border-dark">Bath</th>
                                      <td class="border-right border-dark"colspan="4"><div class="form-check form-check-inline">
                                        <label class="form-check-label" for="tub"><b>[<?php echo($row['tub'])?>]Tub(100)</b></label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                     
                                        <label class="form-check-label" for="shower"><b>[<?php echo($row['shower'])?>]Shower(101)</b></label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                   
                                        <label class="form-check-label" for="bed"><b>[<?php echo($row['bed'])?>]Bed(102)</b></label>
                                        
                                      </div>
                                    </td>
                                    </tr>
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                             
                                          <label class="form-check-label" for="total_care">[<?php echo($row['total_care'])?>]Patient requires total care(103)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                                       
                                          <label class="form-check-label" for="mouth_care">[<?php echo($row['mouth_care'])?>]Mouth Care/Denture Care(106)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                        
                        
                        
                        
                        
                        
                                    <tr class="bg">
                                      
                                      <th scope="row" class="border-dark">Hair Care</th>
                                      <td class="border-right border-dark"colspan="4"><div class="form-check form-check-inline">
                                    
                                        <label class="form-check-label" for="comb"><b>[<?php echo($row['comb'])?>]Comb(107)</b></label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                      
                                        <label class="form-check-label" for="shampoo"><b>[<?php echo($row['shampoo'])?>]Shampoo(108)</b></label>
                                      </div>
                                    </td>
                                    </tr>
                        
                                    <tr class="bg">
                                      
                                      <th scope="row" class="border-dark">Grooming</th>
                                      <td class="border-right border-dark"colspan="4"><div class="form-check form-check-inline">
                                      
                                        <label class="form-check-label" for="shave"><b>[<?php echo($row['shave'])?>]Shave(109)</b></label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                      
                                        <label class="form-check-label" for="nail"><b>[<?php echo($row['nail'])?>]Nails(110)</b></label>
                                      </div>
                                    </td>
                                    </tr>
                        
                        
                        
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                                          
                                          <label class="form-check-label" for="dressing">[<?php echo($row['dressing'])?>]Dressing(111)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                                          
                                          <label class="form-check-label" for="skin_care">[<?php echo($row['skin_care'])?>]Skin Care(112)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                                    
                                          <label class="form-check-label" for="foot_care">[<?php echo($row['foot_care'])?>]Foot Care(106)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                                    <tr class="bg">
                                      
                                      <th scope="row" class="border-dark">Toileting</th>
                                      <td class="border-right border-dark"colspan="4"><div class="form-check form-check-inline">
                                
                                        <label class="form-check-label" for="diaper"><b>[<?php echo($row['diaper'])?>]Diaper(114)</b></label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                    
                                        <label class="form-check-label" for="commode"><b>[<?php echo($row['commode'])?>]Commode(115)</b></label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                       
                                        <label class="form-check-label" for="bedpan"><b>[<?php echo($row['bedpan'])?>]Bedpan/Urinal(116)</b></label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        
                                        <label class="form-check-label" for="toilet"><b>[<?php echo($row['toilet'])?>]Toilet(117)</b></label>
                                      </div>
                                    </td>
                                    </tr>
                        
                        
                        
                                    <tr class="bg-warning">
                                      <th scope="row" class="border-dark text-left" colspan='4'><b>NUTRITION</b></th>
                                    </tr>
                        
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                        
                                          <label class="form-check-label" for="nutrition">[<?php echo($row['nutrition'])?>]Patient is on a prescribed nutrition(201)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                        
                                    
                                    <tr class="bg">
                                      
                                      <th scope="row" class="border-dark">Prepare</th>
                                      <td class="border-right border-dark"colspan="4"><div class="form-check form-check-inline">
                                  
                                        <label class="form-check-label" for="breakfast"><b>[<?php echo($row['breakfast'])?>]Breakfast(202)</b></label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                     
                                        <label class="form-check-label" for="lunch"><b>[<?php echo($row['lunch'])?>]Lunch(203)</b></label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                      
                                        <label class="form-check-label" for="dinner"><b>[<?php echo($row['dinner'])?>]Dinner(204)</b></label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                  
                                        <label class="form-check-label" for="snack"><b>[<?php echo($row['snack'])?>]Snack(205)</b></label>
                                      </div>
                                    </td>
                                    </tr>
                        
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                                    
                                          <label class="form-check-label" for="feeding">[<?php echo($row['feeding'])?>]Assist with feeding(206)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                                    
                                    <tr class="bg-warning">
                                      <th scope="row" class="border-dark text-left" colspan='4'><b>ACTIVITIES</b></th>
                                    </tr>
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                      
                                          <label class="form-check-label" for="transferring">[<?php echo($row['transferring'])?>]Transferring(300)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                        
                                        
                                    <tr class="bg">
                                      
                                      <th scope="row" class="border-dark">Ambulation</th>
                                      <td class="border-right border-dark"colspan="4"><div class="form-check form-check-inline">
                                   
                                        <label class="form-check-label" for="walking"><b>[<?php echo($row['walking'])?>]Assist with walking(301)</b></label>
                                      </div>
                                      <div class="form-check form-check-inline">
                   
                                        <label class="form-check-label" for="device"><b>[<?php echo($row['device'])?>]Assist patient to walk with assistive device(302)</b></label>
                                      </div>
                                    </td>
                                    </tr>
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                      
                                          <label class="form-check-label" for="exercise">[<?php echo($row['exercise'])?>]Assist with home exercise program(305)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                           
                                          <label class="form-check-label" for="motion">[<?php echo($row['motion'])?>]Range of Motion Exercise(306)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                     
                                          <label class="form-check-label" for="q2">[<?php echo($row['q2'])?>]Turning and positioning (<?php echo($row['hours'])?>) hours(311)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                        
                                       
                                    <tr class="bg-warning">
                                      <th scope="row" class="border-dark text-left" colspan='4'><b>HOUSEKEEPING</b></th>
                                    </tr>
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                             
                                          <label class="form-check-label" for="foley">[<?php echo($row['foley'])?>]Empty foley bag(409)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                                    
                                  
                                    
                                   
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                                         
                                          <label class="form-check-label" for="ostomy">[<?php echo($row['ostomy'])?>]Assist with ostomy care(410)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                        
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                                  
                                          <label class="form-check-label" for="medication">[<?php echo($row['medication'])?>]Remind to take medication(411)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                        
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                      
                                          <label class="form-check-label" for="linen">[<?php echo($row['linen'])?>]Change bed linen(500)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                        
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                                   
                                          <label class="form-check-label" for="laundry">[<?php echo($row['laundry'])?>]Patient Laundry(501)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                        
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                        
                                          <label class="form-check-label" for="light">[<?php echo($row['light'])?>]Light Housekeeping(502)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                   
                                          <label class="form-check-label" for="shopping">[<?php echo($row['shopping'])?>]Do patient shopping and errands(506)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                                          
                                    <tr class="bg-warning">
                                      <th scope="row" class="border-dark text-left" colspan='4'><b>SPECIAL NEEDS</b></th>
                                    </tr>
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                           
                                          <label class="form-check-label" for="appointment">[<?php echo($row['appointment'])?>]Accompany patient to medical appointment(508)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                        
                                    <tr>
                                      <th scope="row" class="border-dark text-left" colspan='4'>
                                        <div class="form-check form-check-inline">
                            
                                          <label class="form-check-label" for="safety">[<?php echo($row['safety'])?>]Monitor patient safety(511)</label>
                                        </div>
                                      </th>
                                    </tr>
                        
                        
                        
               <tr class="bg">
              
              <th scope="row" class="border-dark">Signature of Aide</th>
              <td class="border-right border-dark"colspan="4"><img src="data:<?php echo $row["pa_sign"] ?>"style="width: 400px"></td>
              
             
            </tr>
            <tr class="bg">
              
              <th scope="row" class="border-dark">Signature of Patient</th>
              <td class="border-right border-dark"colspan="4"><img src="data:<?php echo $row["pt_sign"] ?>"style="width: 400px"></td>
              
             
            </tr>
                              
                                    
                                    
                        
                        
                        
                        
                        
                                   </tbody>
                        
                        
                        
                        
                                 </table>
                                 
                                 </div>
                              
                            
                </div>
     
                          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
                          <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js"></script> -->
                          <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" integrity="sha512-cViKBZswH231Ui53apFnPzem4pvG8mlCDrSyZskDE9OK2gyUd/L08e1AC0wjJodXYZ1wmXEuNimN1d3MWG7jaQ==" crossorigin="anonymous"></script>
                    
                   
                        
                        
                        
                        
                          <!-- Optional JavaScript; choose one of the two! -->
                        
                          <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
                        
                          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
                            crossorigin="anonymous"></script>
                        
                          
                        </body>
                        
                        </html>
    
    

<?php
}}
else {
   ?><script>
  alert("Wrong Information given")
  </script>  
<?php 
  }

}


?>