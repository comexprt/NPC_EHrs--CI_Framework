<!--
	Copyright 2015
	Author:John Noah G. Ompad
	Date Modified : June 29, 2015
	-- PERSONNEL HEALTH RECORD --
	
	NPC - AGUS 6/7 HEPC // PTDS


-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>NPC-AGUS6/7 HEPC-PERSONNEL HEALTH RECORD</title>
	<link rel="icon" href="<?php echo base_url();?>/img/icon.ico" type="image/x-icon">
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/responsive.css">

	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/main.js"></script>
	
	<!-- Fancybox-->
	<!-- Add jQuery library -->
	<script type="text/javascript" src="<?php echo base_url();?>css/fancybox/lib/jquery-1.10.1.min.js"></script>
	

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url();?>css/fancybox/source/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/fancybox/source/jquery.fancybox.css" media="screen" />
 
	<script type="text/javascript">
	
		
			$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */
			 });
			 
			 
			 
			 function validate(evt) {
			  var theEvent = evt || window.event;
			  var key = theEvent.keyCode || theEvent.which;
			  key = String.fromCharCode( key );
			  var regex = /[0-9||-]/;
			  if( !regex.test(key) ) {
				theEvent.returnValue = false;
				if(theEvent.preventDefault) theEvent.preventDefault();
			  }
			}
			
			function validatealpha(evt) {
			  var theEvent = evt || window.event;
			  var key = theEvent.keyCode || theEvent.which;
			  key = String.fromCharCode( key );
			  var regex = /[a-z || A-Z]|\Ñ|\-|\ñ|\,|\./;
			  if( !regex.test(key) ) {
				theEvent.returnValue = false;
				if(theEvent.preventDefault) theEvent.preventDefault();
			  }
			}
	</script>	
	<!-- end Fancybox-->
		
	
</head>
<body>

	<section class="hero">
		
	</section>


	<section class="search1">

		<div class="container" >
			
			
			
			   <div class="img11" >
			   <?php echo form_open("EHRs/printsummary");?>			
			
			       <select class="" style="margin: 0;
					padding: 2px 2px;
					font-family: Arial, Helvetica, sans-serif;
					font-size:12px;
					border:1px solid #0076a3; border-right:0px;
					border-top-left-radius: 5px 5px;
					border-bottom-left-radius: 5px 5px;"name="year" id="year">
		
					     <option value="2011">2011</option>
					     <option value="2012">2012</option>
					     <option value="2013">2013</option>
					     <option value="2014">2014</option>
					     <option value="2015">2015</option>
					     <option value="2016">2016</option>
					     <option value="2016">2017</option>
					     <option value="2017">2018</option>
					     <option value="2018">2019</option>
					     <option value="2019">2020</option>
					     <option value="2020">2021</option>
					</select>
				
	
				<?php //registration button
					
					echo form_submit("loginSubmit","Print MasterList","class='tfbutton'");
					echo form_close();
				?>
				<!--a href="<?php // echo base_url();?>EHRs/Home_page">
					<img src="<?php // echo base_url();?>img/icons/backbutton.png"
						alt="Home Page" 
						title="Home Page"/>
					
						
				</a--> 
				
				
			   </div>
				<div class="text">PERSONNEL HEALTH RECORD</div>
			   <div class="img2">
					<a class="fancybox" href="#delete">
						<img src="<?php echo base_url();?>img/icons/logout.png"
							alt="LOGOUT" 
							title="LOGOUT"/>
							
					</a>
				</div>
		</div>
		
		
	</section>
	
	<section class="">

		<div id="tfheader">
			<div id="tfnewsearch2">
			<?php echo form_open("EHRs/searchemployee");?>			
			
			       <select class="tftextinput" name="EmId" id="EmId">
					     <option value="null">Search Employee</option>
					     <option value="all">Employee's List</option>
				         <?php foreach ($search as $row){ ?>
					     <option value="<?php echo $row->EmId; ?>"><?php echo $row->Lname.', '. $row->Fname.' '. $row->Mname; ?></option>
				         <?php } ?>
					</select>
				
	
			<?php //registration button
				
				echo form_submit("loginSubmit","GO","class='tfbutton'");
				echo form_close();
			?>
			</div>
			

		
			<div id="AddEmpImg">
				<a class="fancybox" href="#AddEmployee">
				  <img src="<?php echo base_url();?>img/icons/addemployee.jpg" title="Add Employee">
				</a>
			</div>
			
		<div class="tfclear"></div>
	</div>
	</section>
                 
                        <?php if ($message=="NPC-AGUS 6/7 HEPC LIST OF EMPLOYEE"){
							$color="#000000";
						}else if ($message=="Error : \" DCE No.: $EmId \" ALREADY EXIST"){
							$color="#D90000";
						}else if ($message=="Error : NO RECORDS FOUND !!!" || $message=="\" $EmId \" HAS BEEN DELETED" ){
							$color="#D90000";
						}else
							$color="#00B300";
						
						?>
	<section class="listings">
		<div class="wrapper">
			<section>
				<div class="message2">
						<p style="color:<?php echo $color;?>"><?php echo $message;?></p>
						
				</div>
			</section>
			
			
			<ul class="properties_list">
			  
			  <?php foreach ($EmpList as $row){
						$imgProfile=$row->gender;
						
						if ($imgProfile=="M"){
							$img="Male_profile.png";
						}else{
							$img="Female_profile.png";
						}
						
					?>
					
					<li >
						<a class="fancybox" href="#<?php echo $row->EmId;?>view" >
							<img src="<?php echo base_url();?>img/<?php echo $img; ?>" style="margin-left:10%;"
							alt="<?php echo $row->Lname.', '. $row->Fname.' '. $row->Mname; ?> Profile" 
							title="<?php echo $row->Lname.', '. $row->Fname.' '. $row->Mname; ?> Profile" class="property_img"/>
						
							<div class="property_details">
								<h1 style="text-decoration:none;text-transform:uppercase;"><span class="property_size">
									<?php echo $row->Lname.', '. $row->Fname.' '. $row->Mname; ?></span>
								</h1>
								<h1><span class="property_size"><code style="font-size:11px;">DCE No : <?php echo $row->EmId; ?></code></span></h1>
							</div>
						</a>
					</li>
					
			  <?php }?>
			  
			</ul>
		
		</div>
	</section>	<!--end listing section  -->


	
</body>



	<!-- /********    Employee's Registration  **********/ -->
	<div id="AddEmployee" style="width:400px;display: none;">
		<section class="search">

			<div class="container">
				<p style="font-size:15px;padding-top:15px;" >EMPLOYEE  INFORMATION</p>
			</div>
		</section>
		
		<?php echo form_open("EHRs/addemployee");?>	
		<div class="forminput">
		    <label name="email" >DCE No. </label>
			
			<div class="clearfix"></div>
			<input type="text" style="text-transform:lowercase;margin-top:1px;margin-left:5%;"
					class="zocial-dribbble" placeholder="xx - xxxxx - xx " name="EmId" id="EmId" onkeypress='validate(event)' required/>
		<div class="clearfix"></div>
			<label name="email" >First Name</label>
			
			<label style="padding-left:58%;">M. Initial</label>
			
			<div class="clearfix"></div>
			<input type="text" style="width:65%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
					class="zocial-dribbble" placeholder="Ex. Juan Antonio, Sr. " name="Fname" id="Fname" onkeypress='validatealpha(event)' required/>
		
					
			<div class="select" >
			       <select style="text-transform:capitalized;margin-top:2px;margin-left:8%;" name="Mname" id="Mname">
					     <option value="A"></option><option value="A.">A.</option><option value="B.">B.</option>
					  <option value="C.">C.</option><option value="D.">D.</option><option value="E.">E.</option>
					  <option value="F.">F.</option><option value="G.">G.</option><option value="H.">H.</option>
					  <option value="I.">I.</option><option value="J.">J.</option><option value="K.">K.</option>
					  <option value="L.">L.</option><option value="Ll.">Ll.</option><option value="M.">M.</option>
					  <option value="N.">N.</option><option value="Ñ.">Ñ.</option><option value="O.">O.</option>
					  <option value="P.">P.</option><option value="Q.">Q.</option><option value="R.">R.</option>
					  <option value="S.">S.</option><option value="T.">T.</option><option value="U.">U.</option>
					  <option value="V.">V.</option><option value="W.">W.</option><option value="X.">X.</option>
					  <option value="Y.">Y.</option><option value="Z.">Z.</option>
					</select>
				
			</div>
			
			   <br><label name="email">Last Name</label></br>
				
				<input type="text" style="width:65%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" placeholder="Ex. Baltazar " name="Lname" id="Lname" onkeypress='validatealpha(event)' required/>
			
				<div class="clearfix" ></div>
				<label name="email">Position</label></br>
				
				<input type="text" style="width:65%; text-transform:capitalized;margin-top:0px;margin-left:5%;"
						class="zocial-dribbble" placeholder="Ex. Sr. ELECTRICIAN " name="position" id="position" required/>
						
				<div class="clearfix"></div>
			
		
			<label name="email" >Status</label>
			<div class="select" style="margin-bottom:10px;">
			       <select style="text-transform:capitalized;margin-top:1px;margin-left:5%;" name="status" id="status">
					     <option value="Regular">Regular</option>
						 <option value="Casual/JO">Casual/JO</option>
					</select>
			<div class="clearfix"></div>
			
		
			<label name="email" >Sex</label>
			<div class="select" style="margin-bottom:10px;">
			       <select style="text-transform:capitalized;margin-top:1px;margin-left:5%;" name="gender" id="gender">
					     <option value="M">Male</option>
						 <option value="F">Female</option>
					</select>
				
			</div>
		<br>
	    </br>
		
			
		<?php //registration button
			
			echo form_submit("loginSubmit","REGISTER");
			echo form_close();
		?>
		<br>
        </div> 
		
	</div>	
	
	<!-- /********     VIEW EMPLOYEE PROFILE    **********/ -->
	<?php foreach ($EmpList as $row){ 
		
		$imgProfile=$row->gender;
		if ($imgProfile=="M"){
			$img="Male_profile.png";
		}else{
			$img="Female_profile.png";
		}
		
		?>
		<div id="<?php echo $row->EmId;?>view" style="width:500px;display: none;">
			<section class="search">

				<div class="container">
					<p style="font-size:15px;padding-top:15px;" >EMPLOYEE  INFORMATION</p>
				</div>
			</section>
			
				<div style="width:100%;background:red;display:block;">
					<div style="margin:2%;float:left;width:37%;">
						
						<img src="<?php echo base_url();?>img/<?php echo $img; ?>" style="width:75%;border:4px double #BBBBBB;border-radius:2px;"
							alt="<?php echo $row->Lname.', '. $row->Fname.' '. $row->Mname; ?> Profile" 
							title="<?php echo $row->Lname.', '. $row->Fname.' '. $row->Mname; ?> Profile" class="property_img"
						/>
						
					</div>
					
					<div class="profile" style="text-transform:uppercase;float:right;width:58%;">
						<section>
							<section style="padding-top:5px;padding-bottom:5px;text-transform:uppercase;">
								<div style="float:right;margin-left:10px;">
									<a class="fancybox" href="#<?php echo $row->EmId;?>deleteemployee">
										<img src="<?php echo base_url();?>img/icons/delete.png" width="20px" height="20px"
										alt="Delete <?php echo $row->Lname;?>'s Record" 
										title="Delete <?php echo $row->Lname;?>'s Record" />
								
									</a>
								</div>
								<div style="float:right;">
									<a class="fancybox" href="#<?php echo $row->EmId;?>editprofilerecord">
										<img src="<?php echo base_url();?>img/icons/edit.png" width="20px" height="20px"
										alt="Delete <?php echo $row->Lname;?>'s Record"  
										title="Edit <?php echo $row->Lname;?>'s Record" />
								
									</a>
								</div>
							</section>
						<p style="padding-top:30px;">DCE No. <code style="padding-left:5%;">: <?php echo $row->EmId;?></code></p>
						<p style="padding-top:8px;">Name <code style="padding-left:9%;">: <?php echo $row->Lname.', '.$row->Fname.' '.$row->Mname;?></code></p>
						<p style="padding-top:8px;">Position <code style="padding-left:2%;">: <?php echo $row->position;?></code><p>
						<p style="padding-top:8px;">Status<code style="padding-left:7%;" >: <?php echo $row->status;?></code></p>
						<p style="padding-top:8px;padding-bottom:20px;">Sex <code style="padding-left:14%;" >: <?php echo $row->gender;?></code></p>
						<?php echo form_open("EHRs/viewemployee");
							//echo $row->EmId;
							//echo '->'.$row->Lname;
							
						?>	
							<input type='hidden'  name='EmId' id='EmId' value='<?php echo $row->EmId; ?>' >
						<?php //registration button
							
							echo form_submit("loginSubmit","VIEW PROFILE");
							echo form_close();
						?>
						
						
						
				
						</section>
			
					</div>	
				</div>	
			
		</div>	
	  
		<!-- /********   Edit Employee's Registration  **********/ -->
		<div id="<?php echo $row->EmId;?>editprofilerecord" style="width:400px;display: none;">
			<section class="search">

				<div class="container">
					<p style="font-size:15px;padding-top:15px;" >EDIT EMPLOYEE  INFORMATION</p>
				</div>
			</section>
			
			<?php echo form_open("EHRs/updateemployee");?>	
			<div class="forminput">
				<label name="email" >DCE No. </label>
				
				<div class="clearfix"></div>
				<input type="text" style="text-transform:lowercase;margin-top:1px;margin-left:5%;text-align:center;width:25%;"
						class="zocial-dribbble" value="<?php echo $row->EmId;?>" name="EmId" id="EmId" readonly/>
			<div class="clearfix"></div>
				<label name="email" >First Name</label>
				
				<label style="padding-left:58%;">M. Initial</label>
				
				<div class="clearfix"></div>
				<input type="text" style="width:65%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" placeholder="Ex. Juan Antonio, Sr. " value="<?php echo $row->Fname;?>" name="Fname" id="Fname" onkeypress='validatealpha(event)' required/>
			
						
				<div class="select" >
					   <select style="text-transform:capitalized;margin-top:2px;margin-left:8%;" name="Mname" id="Mname">
							 <option value="<?php echo $row->Mname;?>"><?php echo $row->Mname;?></option><option value="A.">A.</option><option value="B.">B.</option>
						  <option value="C.">C.</option><option value="D.">D.</option><option value="E.">E.</option>
						  <option value="F.">F.</option><option value="G.">G.</option><option value="H.">H.</option>
						  <option value="I.">I.</option><option value="J.">J.</option><option value="K.">K.</option>
						  <option value="L.">L.</option><option value="Ll.">Ll.</option><option value="M.">M.</option>
						  <option value="N.">N.</option><option value="Ñ.">Ñ.</option><option value="O.">O.</option>
						  <option value="P.">P.</option><option value="Q.">Q.</option><option value="R.">R.</option>
						  <option value="S.">S.</option><option value="T.">T.</option><option value="U.">U.</option>
						  <option value="V.">V.</option><option value="W.">W.</option><option value="X.">X.</option>
						  <option value="Y.">Y.</option><option value="Z.">Z.</option>
						</select>
					
				</div>
				
				   <br><label name="email">Last Name</label></br>
					
					<input type="text" style="width:65%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
							class="zocial-dribbble" placeholder="Ex. Baltazar " value="<?php echo $row->Lname;?>" name="Lname" id="Lname" onkeypress='validatealpha(event)' required/>
				
					<div class="clearfix" ></div>
					<label name="email">Position</label></br>
					
					<input type="text" style="width:65%; text-transform:capitalized;margin-top:0px;margin-left:5%;"
							class="zocial-dribbble" placeholder="Ex. Sr. ELECTRICIAN " value="<?php echo $row->position;?>" name="position" id="position" required/>
							
					<div class="clearfix"></div>
				<label name="email" >Status</label>
				<div class="select" style="margin-bottom:10px;">
					   <select style="text-transform:capitalized;margin-top:1px;margin-left:5%;" name="status" id="status">
					         <?php
								$genderchoice="$row->status" ;
								if ($genderchoice=="Regular"){
							 ?>
								
							 <option value="Regular">Regular</option>
							 <option value="Casual/JO">Casual/JO</option>
							 
							 <?php }else{ ?>
							 <option value="Casual/JO">Casual/JO</option>
							 <option value="Regular">Regular</option>
							 <?php }?>
						</select>
				<div class="clearfix"></div>
			
				<label name="email" >Sex</label>
				<div class="select" style="margin-bottom:10px;">
					   <select style="text-transform:capitalized;margin-top:1px;margin-left:5%;" name="gender" id="gender">
							 <?php
								$genderchoice="$row->gender" ;
								if ($genderchoice=="F"){
								
							 ?>
							 <option value="F">Female</option>
							 <option value="M">Male</option>
							 <?php }else{ ?>
							 <option value="M">Male</option>
							 <option value="F">Female</option>
							
							 <?php } ?>
						</select>
					
				</div>
				
			<section class="search" style="margin-top:35px;height:2px;">

				<div class="container">
					
				</div>
			</section>
			 <br><label name="email">Username</label></br>
					
					<input type="text" style="width:25%; text-transform:capitalized;margin-top:1px;margin-left:5%;text-align:center;"
							class="zocial-dribbble" placeholder="Username" value="<?php echo $row->username;?>" name="username" id="username" readonly/>
			 <div class="clearfix"></div>
			 <br><label name="email">Password</label></br>
					
					<input type="password" style="width:45%; text-transform:capitalized;margin-left:5%;"
							class="zocial-dribbble" placeholder="Password" value="<?php echo $row->password;?>" name="password" id="password"  required/>
		
			 <br>
			 </br>
			 	
			<?php //registration button
				
				echo form_submit("loginSubmit","SAVE");
				echo form_close();
			?>
			<br>
			</div> 
			
		</div>	
	
	
	<!-- /********  LOGOUT  **********/ -->
	<div id="delete" style="width:300px;display: none;">
		<section class="search">

			<div class="container">
				<p style="font-size:15px;padding-top:15px;" >LOGOUT</p>
			</div>
		</section>
		
		<?php echo form_open("EHRs/Admin_logout");?>	
		<div class="forminput">
		    <label name="email" >Are you sure you want to proceed ?</label>
			
		
		
				<div class="clearfix"></div>
			
		
			
			
		<br>
	    </br>
		
			
		<?php //logout button
			
			echo form_submit("loginSubmit","OK");
			echo form_close();
		?>
		<br>
        </div> 
		
	</div>	
	
	<!-- /********  delete employee **********/ -->
	<div id="<?php echo $row->EmId;?>deleteemployee" style="width:300px;display: none;">
		<section class="search">

			<div class="container">
				<p style="font-size:15px;padding-top:15px;" >DELETE EMPLOYEE'S PROFILE</p>
			</div>
		</section>
		
		<?php echo form_open("EHRs/DeleteEmployee");?>
		<input type="hidden" value="<?php echo $row->EmId;?>" name="EmId" id="EmId">
		<input type="hidden" value="<?php echo $row->Fname;?>" name="Fname" id="Fname">
		<input type="hidden" value="<?php echo $row->Mname;?>" name="Mname" id="Mname">
		<input type="hidden" value="<?php echo $row->Lname;?>" name="Lname" id="Lname">
		<div class="forminput">
		    <label name="email" ><span style="font-size:11px;">DELETING</span> <span style="font-size:11.5px;text-transform:uppercase;color:red;"> <?php echo $row->Lname.', '. $row->Fname.' '. $row->Mname; ?> </span></label>
		    <br><label name="email" >Are you sure you want to proceed ?</label>
			
		
		
				<div class="clearfix"></div>
			
		
			
			
		<br>
	    </br>
		
			
		<?php //logout button
			
			echo form_submit("loginSubmit","OK");
			echo form_close();
		?>
		<br>
        </div> 
		
	</div>	
    <?php } ?>
	
	
</html>