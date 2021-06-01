
                        
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/themes/base/jquery-ui.min.css" integrity="sha512-YqF4f2cbm2jH7sEEu/iDJFjSQ/qUSzoiQIK2OQ3OFTsQQE5dxoCTYz1wZrTMv8ES8NYqOB5ChZU8jQdMaEv/yg==" crossorigin="anonymous" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  
  
  <title>CDPAP</title>
  <style type="text/css">
    body {
      font: normal 100.01%/135.5% "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    #signature {
      width: 50%;
      height: 100%;
      border: 1px solid black;
    }
 
    
  </style>
</head>

<body>

<div class="container">
    <div class="col-md-12 text-center navbar">
      <img src="img/Main Logo.png" alt="" class="img-fluid">
      </div>
      <form action="cdpap_getdata.php" method="POST" enctype="multipart/form-data">
     <div class="row">
       <div class="col-sm-12">
         <table class="table table-bordered .tablemobile">
           <tbody>
            <tr>
              <th scope="row" class="border-dark text-center" colspan='4'><h3><b>Patient Information</b></h3></th>
            </tr>
            <tr class="bg-warning">
              <th scope="row" class="border-dark">Patient Last Name</th>
              <td class="border-right border-dark" colspan="4"><input type="text" class="form-control" id="lastnamept" name="lastnamept" placeholder="Patient Last Name" size="60" required></td>
             
            </tr>
            
            
            <tr class="bg-warning">
              
               <th scope="row" class="border-dark">Patient First Name</th>
              <td class="border-right border-dark" colspan="4"><input type="text" class="form-control" id="firstnamept" name="firstnamept" placeholder="Patient First Name" size="60" required></td>
              
            </tr>
            

            <tr class="bg-warning">
              
              <th scope="row" class="border-dark">Patient Address</th>
              <td class="border-right border-dark" colspan="4"> <input type="text" class="form-control" id="Addresspt" name="Addresspt" placeholder="Enter Patient Full Address with Zip Code" size="60" required></td>
              
            
 
            </tr>
            
              <tr class="bg-warning">
              
              <th scope="row" class="border-dark">Patient Date of Birth</th>
              <td class="border-right border-dark" colspan="4"> <input type="text" class="form-control" id="birth" name="birth" placeholder="mm/dd/yyyy" size="60" required></td>
              
            
 
            </tr>
            
            
            
            
            <tr>
              <th scope="row" class="border-dark text-center" colspan='4'><h3><b>Aide Information</b></h3></th>
            </tr>

            <tr class="bg-warning">
              
              <th scope="row" class="border-dark">Aide Last Name</th>
              <td class="border-right border-dark" colspan="4"><input type="text" class="form-control" id="lastnamepa" name="lastnamepa" placeholder="Aide Last Name" size="60" required></td>
         
            </tr>
            
            
                 
            <tr class="bg-warning">
              
                  <th scope="row" class="border-dark">Aide First Name</th>
              <td class="border-right border-dark" colspan="4"><input type="text" class="form-control" id="firstnamepa" name="firstnamepa" placeholder="Aide First Name" size="60" required></td>
            
            
            </tr>
            
          

            
            <tr class="bg-warning">
              
              <th scope="row" class="border-dark">Aide Address</th>
              <td class="border-right border-dark" colspan="4"><input type="text" class="form-control" id="Addresspa" name="Addresspa" placeholder="Enter Aide Full Address with Zip Code" size="60" required></td>
            </tr>
            
            
            
              <tr class="bg-warning">
              
                <th scope="row" class="border-dark">Aide Assignment ID</th>
              <td class="border-right border-dark" colspan="4"><input type="text" class="form-control" id="assignment" name="assignment" placeholder="Enter Aide Assignment ID" size="60" required></td>
             
            </tr>
            
            
            
            <tr class="bg-warning">
               <th scope="row" class="border-dark">Aide Last 4 SSN Number</th>
              <td class="border-right border-dark" colspan="4"><input type="text" class="form-control" id="ssn" name="ssn" placeholder="Enter Aide Last 4 SSN Number" size="60" required></td>
         
            </tr>
            
            
          
            
            
            
            
            
            
               <tr>
              <th scope="row" class="border-dark text-center" colspan='4'><h3><b>Please Fill Out The Information Below</b></h3></th>
            </tr>
          
      
            <tr class="bg">
              
          <th scope="row" class="border-dark">Reason for failure to complete EVV submission</th>
          <td class="border-right border-dark"colspan="4"><select class="custom-select custom-select-sm-0 mb-0" name="reason" required>
          <option value=""></option>
          <option value="Caregiver Arrived Late">Caregiver Arrived Late</option>
          <option value="Caregiver forgot to call in/out">Caregiver forgot to call in/out</option>
          <option value="Caregiver used wrong Assignment ID">Caregiver used wrong Assignment ID</option>
          <option value="Patient had medical appointment">Patient had medical appointment</option>
          <option value="No duty code(s)(POC) entered">No duty code(s)(POC) entered</option>
          <option value="Overlapping Shifts">Overlapping Shifts</option>
          <option value="Address did not link to the patient (GPS)">Address did not link to the patient (GPS)</option>
          <option value="Caregiver called in or out of the EVV system early or late">Caregiver called in or out of the EVV system early or late</option> 
          <option value="Caregiver failed to clock in">Caregiver failed to clock in</option>
          <option value="Caregiver failed to clock out">Caregiver failed to clock out</option>
          <option value="Caregiver unable to connect to internet or EVV system down">Caregiver unable to connect to internet or EVV system down</option>
          <option value="Caregiver unable to use mobile device">Caregiver unable to use mobile device</option>
          <option value="Patient did not allow Caregiver to use his/her phone">Patient did not allow Caregiver to use his/her phone</option>
          <option value="Technical issue (phone not working)">Technical issue (phone not working)</option>
          <option value="Phone number did not link to the patient">Phone number did not link to the patient</option>
          <option value="Caregiver was not prepared for EVV">Caregiver was not prepared for EVV</option>
        
        </select></td>
              
             
            </tr>
            <tr class="bg-">
              
              <th scope="row" class="border-dark">Date of Visit (IN)</th>
              <td class="border-right border-dark"colspan="4"><input type="text" onchange="sunday_check()"  name="date" id="sunday" autocomplete="off" required></td>
              
             
            </tr>
            <tr class="bg">
              <th scope="row" class="border-dark">Time IN</th>
              <td class="border-right border-dark"colspan="4">
				  HH:<select name="starth" id="starth" onchange="RecalculateElapsedTime ()" required>
					<option value=""></option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>	
					<option value="04">04</option>	
					<option value="05">05</option>	
					<option value="06">06</option>	
					<option value="07">07</option>	
					<option value="08">08</option>	
					<option value="09">09</option>	
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				  </select>
				 MM: <select name="startm" id="startm" onchange="RecalculateElapsedTime ()" required>
					<option value=""></option>
					<option value="00">00</option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>	
					<option value="04">04</option>
					<option value="05">05</option>	
					<option value="06">06</option>	
					<option value="07">07</option>	
					<option value="08">08</option>	
					<option value="09">09</option>	
					<option value="10">10</option>	
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>	
					<option value="17">17</option>	
					<option value="18">18</option>	
					<option value="19">19</option>	
					<option value="20">20</option>	
					<option value="21">21</option>	
					<option value="22">22</option>	
					<option value="23">23</option>
					<option value="24">24</option>	
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>	
					<option value="29">29</option>	
					<option value="30">30</option>	
					<option value="31">31</option>	
					<option value="32">32</option>	
					<option value="33">33</option>	
					<option value="34">34</option>	
					<option value="35">35</option>
					<option value="36">36</option>	
					<option value="37">37</option>
					<option value="38">38</option>
					<option value="39">39</option>
					<option value="40">40</option>	
					<option value="41">41</option>	
					<option value="42">42</option>	
					<option value="43">43</option>	
					<option value="44">44</option>	
					<option value="45">45</option>	
					<option value="46">46</option>	
					<option value="47">47</option>
					<option value="48">48</option>	
					<option value="49">49</option>
					<option value="50">50</option>
					<option value="51">51</option>
					<option value="52">52</option>	
					<option value="53">53</option>	
					<option value="54">54</option>	
					<option value="55">55</option>	
					<option value="56">56</option>	
					<option value="57">57</option>	
					<option value="58">58</option>	
					<option value="59">59</option>
				  </select>
				  AM/PM: <select name="starta" id="starta" onchange="RecalculateElapsedTime ()" required>
					<option value=""></option>
					<option value="am">AM</option>
					<option value="pm">PM</option>
				  </select>
			  </td>
              
             
              
            </tr>
             <tr class="bg-">
              
              <th scope="row" class="border-dark">Date of Visit (OUT)</th>
              <td class="border-right border-dark"colspan="4"><input type="text" name="date1" id="monday"  onchange="RecalculateElapsedTime ()" autocomplete="off"  required></td>
              
             
            </tr>
            <tr class="bg">
              
              <th scope="row" class="border-dark">Time OUT</th>
              <td class="border-right border-dark"colspan="4">
				  HH: <select name="endh" id="endh" onchange="RecalculateElapsedTime ()" required>
					<option value="00"></option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>	
					<option value="04">04</option>	
					<option value="05">05</option>	
					<option value="06">06</option>	
					<option value="07">07</option>	
					<option value="08">08</option>	
					<option value="09">09</option>	
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				  </select>
				  MM: <select name="endm" id="endm" onchange="RecalculateElapsedTime ()" required>
					<option value="00"></option>
					<option value="00">00</option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>	
					<option value="04">04</option>
					<option value="05">05</option>	
					<option value="06">06</option>	
					<option value="07">07</option>	
					<option value="08">08</option>	
					<option value="09">09</option>	
					<option value="10">10</option>	
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>	
					<option value="17">17</option>	
					<option value="18">18</option>	
					<option value="19">19</option>	
					<option value="20">20</option>	
					<option value="21">21</option>	
					<option value="22">22</option>	
					<option value="23">23</option>
					<option value="24">24</option>	
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>	
					<option value="29">29</option>	
					<option value="30">30</option>	
					<option value="31">31</option>	
					<option value="32">32</option>	
					<option value="33">33</option>	
					<option value="34">34</option>	
					<option value="35">35</option>
					<option value="36">36</option>	
					<option value="37">37</option>
					<option value="38">38</option>
					<option value="39">39</option>
					<option value="40">40</option>	
					<option value="41">41</option>	
					<option value="42">42</option>	
					<option value="43">43</option>	
					<option value="44">44</option>	
					<option value="45">45</option>	
					<option value="46">46</option>	
					<option value="47">47</option>
					<option value="48">48</option>	
					<option value="49">49</option>
					<option value="50">50</option>
					<option value="51">51</option>
					<option value="52">52</option>	
					<option value="53">53</option>	
					<option value="54">54</option>	
					<option value="55">55</option>	
					<option value="56">56</option>	
					<option value="57">57</option>	
					<option value="58">58</option>	
					<option value="59">59</option>	
				  </select>
				  AM/PM: <select name="enda" id="enda" onchange="RecalculateElapsedTime ()" required>
					<option value=""></option>
					<option value="am">AM</option>
					<option value="pm">PM</option>

				  </select>
			  </td>
              
             
            </tr>

            <tr class="bg">
              
              <th scope="row" class="border-dark">Hours Worked</th>
              <td class="border-right border-dark"colspan="4"><h4  id="span1"></h4><input type="text" name="span" id="span" hidden></td>
              
             
            </tr>

            <tr class="bg">
              
              <th scope="row" class="border-dark">Signature of Aide (use Finger or Mouse)</th>
              <td class="border-right border-dark"colspan="4">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                  Click To Sign
                </button>
                 <label class="form-check-label" for="safety"><b>Signature will only be visible when the button is clicked</b></label>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog pr">
                    <div class="modal-content">
                      <div class="modal-header">
                          
                        <h5 class="modal-title" id="exampleModalLabel1">Aide Signature</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                        
                      <div class="modal-body pr">
                        <div id="signature_mon_1" class="border border-dark"></div>
                        <br>
                        <button type="button" class="btn btn-primary" id="undo">Clear</button>
                        <label class="form-check-label" for="safety"><b>Click Clear Button
                                                            to Undo Signature</b></label>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              
             
            </tr>
            <tr class="bg">
              
              <th scope="row" class="border-dark">Signature of Patient (use Finger or Mouse)</th>
              <td class="border-right border-dark"colspan="4"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                  Click To Sign
                </button>
                 <label class="form-check-label" for="safety"><b>Signature will only be visible when the button is clicked</b></label>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog pr">
                    <div class="modal-content">
                      <div class="modal-header">
                          
                        <h5 class="modal-title" id="exampleModalLabel2">Patient Signature</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                        
                      <div class="modal-body pr">
                        <div id="signature_mon_2" class="border border-dark" ></div>
                        <br>
                        <button type="button" class="btn btn-primary" id="undo1">Clear</button>
                        <label class="form-check-label" for="safety"><b>Click Clear Button
                                                            to Undo Signature</b></label>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
              
              
              </td>
              
             
            </tr>
            
            
            





           </tbody>




         </table>
        
        <input type="hidden" name="data_mon_1" id="data_mon_1">
		<input type="hidden" name="data_mon_2" id="data_mon_2">

       </div>
      
           
       
       
        
     </div>
     <div class="row">
         <div class="col-12 ">
         <button type="submit" id='submit' name='submit'class="btn btn-success btn-lg" style="margin-left: auto;" onclick="myFunction()"> SUBMIT </button>
              
             
         </div>
     </div>
    </form>
   </div>


            
            
            
            





  

  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" integrity="sha512-cViKBZswH231Ui53apFnPzem4pvG8mlCDrSyZskDE9OK2gyUd/L08e1AC0wjJodXYZ1wmXEuNimN1d3MWG7jaQ==" crossorigin="anonymous"></script>
	<script src="libs/jSignature.min.js"></script>
	<script src="libs/modernizr.js"></script>

<script>
function RecalculateElapsedTime () {
			
			var startHSelect = document.getElementById("starth");
			var startMSelect = document.getElementById("startm");
			var startASelect = document.getElementById("starta").value;
	
			var endHSelect   = document.getElementById("endh");
		
		
			var endMSelect   = document.getElementById("endm");
		
			var endASelect   = document.getElementById("enda").value;
			var elapsedSpan = document.getElementById ("span1");
			var elapsed2  = document.getElementById("span");
	        var inn_am_pm=document.getElementById("starta").value;
	        var out_am_pm=document.getElementById("enda").value;
			
			var varin = document.getElementById("sunday").value;
			var varout = document.getElementById("monday").value;
			var varindate=new Date(varin);
			var varoutdate=new Date(varout); 
			var varinday=varindate.getDate(); 
			var varoutday=varoutdate.getDate(); 
			var result = Math.abs(varoutday-varinday); 
// 			alert(result); 

	
			var startH = parseInt (startHSelect.value);
		
			var startM = parseInt (startMSelect.value); 
			
			var startA = startASelect.toString();
	
			
			let time = startH +':'+startM +' '+startA;
		
		
			
			var hours = Number(time.match(/^(\d+)/)[1]);
			
			
			// window.alert(hours)
			var minutes = Number(time.match(/:(\d+)/)[1]);
			
			// window.alert(minutes)
			var AMPM = time.match(/\s(.*)$/)[1].toLowerCase();
	
			if (AMPM == "pm" && hours < 12) hours = hours + 12;
			if (AMPM == "am" && hours == 12) hours = hours - 12;
	
			
			var sHours = hours.toString();
			
			var sMinutes = minutes.toString();
	
			if (hours < 10) sHours = "0" + sHours;
			if (minutes < 10) sMinutes = "0" + sMinutes;
		
			
	
			var date1 = new Date();
			date1.setHours(sHours );
			date1.setMinutes(sMinutes);
			//alert(date1);
	
			var endH = parseInt (endHSelect.value);
		    
			var endM = parseInt (endMSelect.value); 
			// alert(startM);
			var endA = endASelect.toString();
		
	
			let time1 = endH +':'+endM +' '+endA;
	
			var hours1 = Number(time1.match(/^(\d+)/)[1]);
			var minutes1 = Number(time1.match(/:(\d+)/)[1]);
			var AMPM1 = time1.match(/\s(.*)$/)[1].toLowerCase();
	
			if (AMPM1 == "pm" && hours1 < 12) hours1 = hours1 + 12;
			if (AMPM1 == "am" && hours1 == 12) hours1 = hours1 - 12;
	
			var sHours1 = hours1.toString();
			var sMinutes1 = minutes1.toString();
	
			if (hours1 < 10) sHours1 = "0" + sHours1;
			if (minutes1 < 10) sMinutes1 = "0" + sMinutes1;
		   var date2 = new Date();
	
		   date2.setHours(sHours1 );
		   date2.setMinutes(sMinutes1);
	
		   var diff = date2.getTime() - date1.getTime();

	
		   var hours = Math.floor(diff / (1000 * 60 * 60));
		   diff -= hours * (1000 * 60 * 60);
		   if (hours < 0) {hours +=12*2}
		 
	
		   var mins = Math.floor(diff / (1000 * 60));
		   diff -= mins * (1000 * 60);
		   if(mins < 0 ) { mins += 24 * 60 }
		   
		  // if(hours==0 && mins==0){hours=24}
		   
		   if(result==1 || result==29 || result==30 || result==27 || result==28) 
		   
		   { 
		       if((startH==endH)&& (mins==0) && (AMPM1=='am' && AMPM=='am')){
		            var second1=hours+24
		            elapsed2.value = second1 + ':' + ((mins<=9) ? ('0'+mins) : mins);
			        elapsedSpan.innerHTML = ( second1 + " hours : " + mins + " minutes " );
			        var button=document.getElementById('submit');
		            button.disabled=false;
		           
		       }
		          
		        else if((startH<=11 && (endH<startH)) && ((AMPM1=='am' && AMPM=='am')||(AMPM1=='pm' && AMPM=='pm'))){
		            
		        elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
			    elapsedSpan.innerHTML = ( hours + " hours : " + mins + " minutes " );
			    var button=document.getElementById('submit');
		                  button.disabled=false;
		        }
		        else if((endM==00 && endH==00) && ((out_am_pm=="pm")||(out_am_pm=="am"))){
		            
		             elapsed2.value = "Please Enter END TIME";
		             elapsedSpan.innerHTML = "<span style='color: red;'>Please Enter END TIME</span>";
		             var button=document.getElementById('submit');
		              button.disabled=true;
		            
		        }
		         else if((endM==00 && endH==00)){
		            
		             elapsed2.value = "Please Enter END TIME";
		             elapsedSpan.innerHTML = "<span style='color: red;'>Please Enter END TIME</span>";
		             var button=document.getElementById('submit');
		              button.disabled=true;
		            
		        }
		        
		          else if((startH<=11 && endH==12) && (AMPM1=='am' && AMPM=='am')){
		            
		            elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
			        elapsedSpan.innerHTML = ( hours + " hours : " + mins + " minutes " );
			        var button=document.getElementById('submit');
		                  button.disabled=false;
		        }
		         else if((startH<=11 && endH==12) && (AMPM1=='pm' && AMPM=='pm')){
		            
		            elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
			        elapsedSpan.innerHTML = ( hours + " hours : " + mins + " minutes " );
			        var button=document.getElementById('submit');
		                  button.disabled=false;
		        }
		       else if((startH==endH)&& (startM>endM) && (AMPM1=='am' && AMPM=='am')){
		            var second1=hours
		            elapsed2.value = second1 + ':' + ((mins<=9) ? ('0'+mins) : mins);
			        elapsedSpan.innerHTML = ( second1 + " hours : " + mins + " minutes " );
			        var button=document.getElementById('submit');
		            button.disabled=false;
		           
		       }
		       
		       else if((startH==endH) && (mins==0)&& (AMPM1=='pm' && AMPM=='pm')){
		            var second1=hours+24
		            elapsed2.value = second1 + ':' + ((mins<=9) ? ('0'+mins) : mins);
			        elapsedSpan.innerHTML = ( second1 + " hours : " + mins + " minutes " );
			        var button=document.getElementById('submit');
		            button.disabled=false;
		           
		       }
		         else if((startH==endH)&& (startM>endM) && (AMPM1=='pm' && AMPM=='pm')){
		            var second1=hours
		            elapsed2.value = second1 + ':' + ((mins<=9) ? ('0'+mins) : mins);
			        elapsedSpan.innerHTML = ( second1 + " hours : " + mins + " minutes " );
			        var button=document.getElementById('submit');
		            button.disabled=false;
		           
		       }
		        
		        
		        
		       
		        else if(AMPM1=='pm' && AMPM=='am'){
		            var second="<span style='color: red;'>Invalid Date or Time</span>";
		          elapsed2.value = second;
			        elapsedSpan.innerHTML = (second );
			        var button=document.getElementById('submit');
		           button.disabled=true;
		        }
		       
		         else if(AMPM1=='am' && AMPM=='pm'){
		           var second1=hours
		          elapsed2.value = second1 + ':' + ((mins<=9) ? ('0'+mins) : mins);
			       elapsedSpan.innerHTML = ( second1 + " hours : " + mins + " minutes " );
			        var button=document.getElementById('submit');
		            button.disabled=false;
		        }
		        
		       
		          
		        
		        else
		        
		        {
		        var one = "<span style='color: red;'>Invalid Date or Time</span>";
		        elapsed2.value = one ;
			    elapsedSpan.innerHTML = (one);
			    var button=document.getElementById('submit');
		        button.disabled=true;
		            
		        }

		        }
		   if(result==0){
		            
		            
		                if(inn_am_pm=="pm" && out_am_pm=="am"){
		                   
		                    
		                    elapsed2.value = "Invalid Time OR Date";
   
		                  elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>"; 
		                  var button=document.getElementById('submit');
		                  button.disabled=true;
		                   return (elapsedSpan.innerHTML) 
		                }
		                
		                    else if((endM==00 && endH==00) && ((out_am_pm=="pm")||(out_am_pm=="am"))){
		            
		             elapsed2.value = "Please Enter END TIME";
		             elapsedSpan.innerHTML = "<span style='color: red;'>Please Enter END TIME</span>";
		             var button=document.getElementById('submit');
		              button.disabled=true;
		            
		        }
		         else if((endM==00 && endH==00)){
		            
		             elapsed2.value = "Please Enter END TIME";
		             elapsedSpan.innerHTML = "<span style='color: red;'>Please Enter END TIME</span>";
		             var button=document.getElementById('submit');
		              button.disabled=true;
		            
		        }
		                
		          else if((inn_am_pm=="pm" && out_am_pm=="pm") ||((inn_am_pm=="am" && out_am_pm=="am")) ){
		              if((startH==endH) && (startM>0 ||endM>0) &&(endM>startM)){
		                  elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
			             elapsedSpan.innerHTML = ( hours + " hours : " + mins + " minutes " );
			             var button=document.getElementById('submit');
		                  button.disabled=false;
		              }
		            
		              
		              
		              else if((startH==11 && endH==12)&&((startM>0 &&startM<=59)||(endM>0 &&endM<=59)) ){
		              
		                  elapsed2.value = "Invalid Time OR Date";
		                  elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>";
		                  
		                  var button=document.getElementById('submit');
		                  button.disabled=true;
		              }
		              else if((startH==12 && endH==12)||(endH==12)||(startH<=11&&(endH<startH))||(startH==endH)){
		                  
		                  elapsed2.value = "Invalid Time OR Date";
   
		                  //elapsedSpan.innerHTML = elapsed2.value;
		                   elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>";
		                  var button=document.getElementById('submit');
		                  button.disabled=true;
		                  
		              }
		          else
		        {
		        elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
			    elapsedSpan.innerHTML = ( hours + " hours : " + mins + " minutes " );
		            var button=document.getElementById('submit');
		                  button.disabled=false;
		        }
		              
		          }
		          
		          
		        
		          
		                
		                
		        else
		        {
		            
		        elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
			    elapsedSpan.innerHTML = ( hours + " hours : " + mins + " minutes " );
		             var button=document.getElementById('submit');
		                  button.disabled=false;
		        }
		   
	    
	    
	     
	
		
	
			
			}

}
   



function sunday_check(){
    document.getElementById('monday').value='';
}








$(document).ready(function() {


  var sigdiv_mon_1 = $("#signature_mon_1").jSignature();
  var sigdiv_mon_2 = $("#signature_mon_2").jSignature();
  
     
 
    $('#undo').on('click',function(){
                             
    $('#signature_mon_1').jSignature("reset");
                           
                           
    });
                            
    $('#undo1').on('click',function(){
                             
    $('#signature_mon_2').jSignature("reset");
                           
                           
    });


  $('#submit').on('click',function(evt) {
				// Get response of type image
				var data_mon_1 = sigdiv_mon_1.jSignature('getData', 'image');
				var data_mon_2 = sigdiv_mon_2.jSignature('getData', 'image');
				
				if( $('#signature_mon_1').jSignature('getData', 'native').length == 0) {
				        // $('#submit').attr('disabled',true);
                        alert('Please Enter Aide Signature');
                        evt.preventDefault();
                        } 
                if( $('#signature_mon_2').jSignature('getData', 'native').length == 0) {
                    
                        alert('Please Enter Patient Signature');
                        evt.preventDefault();
                        } 
				
			
			
				$('#data_mon_1').val(data_mon_1);
				$('#data_mon_2').val(data_mon_2);
		
				$("#target").submit();
			}); 
			
			
$("#sunday").datepicker({
    beforeShowDay: function(date) {
    var day_pick =new Date(date)
    var day_pick_year = day_pick.getFullYear();
    var date_prs= new Date()
    var date_year=date_prs.getFullYear()
 
    
    
    
    
    return [(day_pick<=date_prs)];
  }
 
});

$("#monday").datepicker({
    beforeShowDay: function(date) {

    var day = date.getDate();
    var day1 = date.getMonth();
    var day2 = date.getFullYear();

     var y=document.getElementById("sunday").value;
     var z= new Date(y)
     var nextdate= new Date(y)
     nextdate.setDate(nextdate.getDate() + 1);
     
    var date=z.getDate();
    var month=z.getMonth();
    var year=z.getFullYear();
    var nextdate_date=nextdate.getDate()
    var nextdate_Month=nextdate.getMonth()
    
    
    if(month!=nextdate_Month){
        
        return[(( day1==nextdate_Month || day==date)  && (day==nextdate_date ||day1==month ) && day2==year )]
    }
    else{
    return[((day>=date && day<=nextdate_date) && (day1<=month && day1>=nextdate_Month ) && day2==year )]
    }
    
   
  }
 
});

$('#sunday').keydown(function(e) {
   e.preventDefault();
   return false;
});
	
$('#monday').keydown(function(e) {
   e.preventDefault();
   return false;
});						


    
			
			




});


</script>




  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  
</body>

</html>