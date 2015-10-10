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
			  var regex = /[0-9||.]/;
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

    <?php foreach ($viewemployee as $row){ 
		
		$imgProfile=$row->gender;
		if ($imgProfile=="M"){
			$img="Male_profile.png";
		}else{
			$img="Female_profile.png";
		}
		
		?>
	<section class="search2">

		<div class="container" >
			
			<div style="color:#00661A;" >
			
			
			   <div class="img1">
			   
				<a href="<?php echo base_url();?>EHRs/Home_page">
					<img src="<?php echo base_url();?>img/icons/backbutton.png"
						alt="Home Page" 
						title="Home Page"/>
					
						
				</a> 
				
				
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
			
		</div>
	</section>
	
	<section class="profilebar">

		<div class="left">
			
			<img src="<?php echo base_url();?>img/<?php echo $img; ?>"
							alt="<?php echo $row->Lname.', '. $row->Fname.' '. $row->Mname; ?> Profile" 
							title="<?php echo $row->Lname.', '. $row->Fname.' '. $row->Mname; ?> Profile" class="property_img"
						/>
						
			<section class="alignleft">
						<p style="padding-top:25px;">DCE No. <code style="padding-left:5%;">: <?php echo $row->EmId;?></code>
						<p style="padding-top:8px;">Name <code style="padding-left:10%;">: <?php echo $row->Lname.', '.$row->Fname.' '.$row->Mname;?></code><p>
						<p style="padding-top:8px;">Position <code style="padding-left:2%;">: <?php echo $row->position;?></code><p>
						<p style="padding-top:8px;">Status <code style="padding-left:5%;" >: <?php echo $row->status;?></code><p>
						<p style="padding-top:8px;padding-bottom:20px;">Sex <code style="padding-left:14%;" >: <?php echo $row->gender;?></code><p>
			</section>
			
			<section>
					<div class="">
		
					<?php echo form_open("EHRs/viewemployee");
						//echo $row->EmId;
						//echo '->'.$row->Lname;
						
					?>	
					<input type='hidden'  name='EmId' id='EmId' value='<?php echo $row->EmId; ?>' >
					
					
				
						<div class="navigation-column">
							<div class="buttonactive">
								<?php //registration button
									
									echo form_submit("loginSubmit","REPORTS");
									echo form_close();
								?>
						
					
							</div>
						</div>
						
					<?php echo form_open("EHRs/Graphs");
						//echo $row->EmId;
						//echo '->'.$row->Lname;
					
						?>	
					<input type='hidden'  name='EmId' id='EmId' value='<?php echo $row->EmId; ?>' >
				
						<div class="navigation-column " style="margin-top:-12px;">
							
							<?php //registration button
						
								echo form_submit("loginSubmit","GRAPHS");
								echo form_close();
							?>
				
						</div>
					</div>
			</section>
		</div>
		<?php } ?>
		<div class="right"> <!--  RIGHT SIDE  CONTENT -->
			
			<section class="listings">
				<div class="wrapper">
					<section>
					   <?php if ($message=="Error : \" $annual\" ALREADY EXIST"||$message=="$annual RECORD HAS BEEN DELETED"){
							$color="#D90000";
						}else
							$color="#00600F";
						
						?>
						<div class="message" style="margin-top:10px;margin-bottom:10px;">
								<p style="color:<?php echo $color;?>" ><?php echo $message; ?>
								
									<a class="fancybox" href="#addnewrecord">
										<img src="<?php echo base_url();?>img/icons/addnewrecord.png" width="110px" height="30px"
										alt="Add Record" 
										title="Add Record"/>
								
									</a>
								</p>
						</div>
					</section>
					
					
					<ul class="properties_list2">
					  
					   <?php 
						
						foreach ($countrecords as $row){
							$det=$row->countrecords;
					   } 
						
						if($det=="0")
						{
							echo "<p style='margin-top:60px;padding-left:32%;color:red;'> -- NO RECORDS FOUND -- </p>";
						}else{
					   
					   foreach ($btr as $row){ 
							?>
							
							<li >
								<a class="fancybox" href="#<?php echo $row->annual;?>viewrecord" >
									<img src="<?php echo base_url();?>img/icons/resultsicon.png" style="margin-left:17%;"
									alt="Profile" title="Profile" class="property_img"/>
								
									<div class="property_details2">
										 
										<h1  style="font-size:11px;text-align:center;"><span class="property_size"><code><?php echo $row->annual; ?></code></span></h1>
									</div>
								</a>
							</li>
							
							
					  <?php } 
					  } ?>
					  
					</ul>
				
				</div>
			</section>	<!--end listing section  -->
			
			
		</div>  <!--End Right side contend-->
		
		
	</section>
	

	
</body>

  
    <?php foreach ($btr as $row){ ?>
		<!-- /********  view record  **********/ -->
		<div id="<?php echo $row->annual;?>viewrecord" style="width:800px;height:570px;display: none;">
			<div class="options" style="margin-left:30px;margin-top:0px;width:150px;height:35px;">
				
				<div class="action1" style="float:left;">
			
					 <a class="fancybox" href="#<?echo $row->BId;?>editrecord">
										<img src="<?php echo base_url();?>img/editimage1.png" width="30px" height="30px"
										alt="Edit <?php echo $row->annual;?> Record" 
										title="Edit <?php echo $row->annual;?> Record"/>
								
					</a>
				</div>
				<div class="action2"  style="padding-left:25px;width:30px;float:left;">
					<form method="post" action="<?php echo base_url()."EHRs/makeacopy"?>">
					<input type="hidden" name='bId' value="<?php echo $row->BId;?>">
					<input type="hidden" name='EmId' value="<?php echo $row->EmId;?>">
					<input type="hidden" name='annual' value="<?php echo $row->annual;?>">
					<input type="image" alt="submit" title="Make a Copy"src="<?php echo base_url();?>img/export.png"  height="30px" width="30px">
					</form>
				</div>
				<div class="action2"  style="width:35px;float:right;">
				    <a class="fancybox" href="#<?echo $row->BId;?>deleterecord">
										<img src="<?php echo base_url();?>img/icons/delete2.png" width="40px" height="30px"
										alt="Add Record" 
										title="Add Record"/>
								
					</a>
					
				</div>
				<!--a href="<?php //echo base_url();?>AGUS_site/admin" title="Edit Project Accomplishment">
				<img src="<?php //echo base_url();?>images/editimage1.png" height="30px" width="30px" ></a-->
			</div>
			
			<section class="recordform3">
		         <img src="<?php echo base_url();?>img/btrl.png" width="300px" height="90px"
										alt="NPC Record" 
										title="NPC Record"/>
	        </section>
			<section>
				<p style="font-weight:bold;padding-left:48%;color:#000000;">CY <?php echo $row->annual;?></p>
            </section>
			<section class="recordform2">
				
				<div style="float:left;width:50%;">
					<p style="padding-top:6px;">DCE NO. <code style="padding-left:6%;">: <?php echo $row->EmId;?></code>
					<p style="padding-top:6px;">NAME <code style="padding-left:9.6%;">: <?php echo $row->Lname.', '.$row->Fname.' '.$row->Mname;?></code><p>
					<p style="padding-top:6px;">POSITION <code style="padding-left:3.9%;">: <?php echo $row->position;?></code><p>
				</div>
				
				<div style="float:left;width:40%;">
				     <?php
						$date=strtotime($row->dateConducted);
						$dc=date('F d ,Y', $date);
					 ?>
					<p style="padding-top:6px;">DATE CONDUCTED<code style="padding-left:6%;">: <?php echo $dc;?></code>
					<p style="padding-top:6px;">STATUS<code style="padding-left:6%;">: <?php echo $row->status;?></code>
					<p style="padding-top:6px;">SEX <code style="padding-left:9.3%;">: <?php echo $row->gender;?></code><p>
				</div>
			</section>
			
			<!--   TABLE    -->
			<?php 
			$colorelementsred="#FF0000";
			$colorelementsblack="#000000";
			$genderchoice=$row->gender;
			$GLU=$row->T1;
			if($GLU <= 100 && $GLU >=60 ){
				$colorglu=$colorelementsblack;
			}else{ $colorglu=$colorelementsred; }
			
			$UA=$row->T2;
			if($genderchoice=="M"){
				if($UA > 7.0){
					$colorua=$colorelementsred;
				}else{ $colorua=$colorelementsblack; }
			}else{
				if($UA > 5.7){
					$colorua=$colorelementsred;
				}else{ $colorua=$colorelementsblack; }
			}
			
			$CHOL=$row->T3;
			if($CHOL > 200){
				$colorchol=$colorelementsred;
			}else{ $colorchol=$colorelementsblack; }
			
			$TRI=$row->T4;
			if($TRI > 200){
				$colortri=$colorelementsred;
			}else{ $colortri=$colorelementsblack; }
			
			$LDL=$row->T5;
			if($LDL > 150){
				$colorldl=$colorelementsred;
			}else{ $colorldl=$colorelementsblack; }
			
			$HDL=$row->T6;
			if($HDL < 35){
				$colorhdl=$colorelementsred;
			}else{ $colorhdl=$colorelementsblack; }
			
			$CREA=$row->T7;
			if($genderchoice=="M"){
				if($CREA >= 0.6 && $CREA <= 1.1){
					$colorcrea=$colorelementsblack;
				}else{ $colorcrea=$colorelementsred; }
			}else{
				if($CREA >= 0.5 && $CREA <= 0.9){
					$colorcrea=$colorelementsblack;
				}else{ $colorcrea=$colorelementsred; }
			}
			$AST=$row->T8;
			if($genderchoice=="M"){
				if($AST > 40){
					$colorast=$colorelementsred;
				}else{ $colorast=$colorelementsblack; }
			}else{
				if($AST > 33){
					$colorast=$colorelementsred;
				}else{ $colorast=$colorelementsblack; }
			}
			$ALT=$row->T9;
			if($genderchoice=="M"){
				if($ALT > 41){
					$coloralt=$colorelementsred;
				}else{ $coloralt=$colorelementsblack; }
			}else{
				if($ALT > 32){
					$coloralt=$colorelementsred;
				}else{ $coloralt=$colorelementsblack; }
			}
			
		
			
			?>
			<section class="recordform">
				<table class="tg">
					<tr>
						<td rowspan="2" class="header" style="width:150px;"><br>test</td>
						<td colspan="2" class="header" style="font-size:12px;font-weight:bold">normal values</td>
						<td rowspan="2" class="header"><br>units</td>
						<td colspan="2" rowspan="2" class="header" style="width:220px;"><br>results</td>
					</tr>
					<tr>
						<td class="subheader">men</td>
						<td class="subheader">women</td>
					</tr>
					<tr>
						<td class="bd">glucose (glu)</td>
						<td colspan="2"  class="elements" >60-100</td>
						<td class="elements" >mg/dl</td>
						<?php
							if ($GLU==0){ ?>
							
						<td class="data" >-</td>
						<?php
							}else{ ?>
							
						<td class="data" style="color:<?php echo $colorglu;?>" ><?php echo $row->T1;?></td>
						<?php	} ?>
						

						<td  class="elements"  >mg/dl</td>
					</tr>
					<tr>
						<td class="bd">uric acid (ua)</td>
						<td  class="elements" >&lt; 7.0</td>
						<td  class="elements" >&lt; 5.7</td>
						<td  class="elements" >mg/dl</td>
						<?php
							if ($UA==0){ ?>
							
						<td class="data" >-</td>
						<?php
							}else{ ?>
							
						<td class="data" style="color:<?php echo $colorua;?>" ><?php echo $row->T2;?></td>
						
						<?php	} ?>
						<td  class="elements" >mg/dl</td>
					</tr>
					<tr>
						<td class="bd">cholesterol (chol)</td>
						<td colspan="2"  class="elements" >&lt; 200</td>
						<td  class="elements" >mg/dl</td>
						<?php
							if ($CHOL==0){ ?>
							
						<td class="data" >-</td>
						<?php
							}else{ ?>
							
						<td class="data" style="color:<?php echo $colorchol;?>" ><?php echo $row->T3;?></td>
						<?php	} ?>
						<td  class="elements" >mg/dl</td>
					</tr>
					<tr>
						<td class="bd">triglyceride</td>
						<td colspan="2"  class="elements" >&lt; 200</td>
						<td  class="elements" >mg/dl</td>
						<?php
							if ($TRI==0){ ?>
							
						<td class="data" >-</td>
						<?php
							}else{ ?>
							
						<td class="data" style="color:<?php echo $colortri;?>" ><?php echo $row->T4;?></td>
						<?php	} ?>
						<td  class="elements" >mg/dl</td>
					</tr>
					<tr>
						<td class="bd">ldl</td>
						<td colspan="2"  class="elements" >&lt; 150</td>
						<td  class="elements" >mg/dl</td>
						<?php
							if ($LDL==0){ ?>
							
						<td class="data" >-</td>
						<?php
							}else{ ?>
						<td class="data" style="color:<?php echo $colorldl;?>" ><?php echo $row->T5;?></td>
						<?php	} ?>
						<td  class="elements" >mg/dl</td>
					</tr>
					<tr >
						<td class="bd">hdl</td>
						<td colspan="2"  class="elements" >&gt; 35</td>
						<td  class="elements" >mg/100ml</td>
						<?php
							if ($HDL==0){ ?>
							
						<td class="data" >-</td>
						<?php
							}else{ ?>
						<td class="data" style="color:<?php echo $colorhdl;?>" ><?php echo $row->T6;?></td>
						<?php	} ?>
						<td  class="elements" >mg/dl</td>
					</tr>
					<tr>
						<td class="bd" >creatinine (crea)</td>
						<td  class="elements" >0.6 - 1.1</td>
						<td  class="elements" >0.5-0.9</td>
						<td  class="elements" >mg/dl</td>
						<?php
							if ($CREA==0){ ?>
							
						<td class="data" >-</td>
						<?php
							}else{ ?>
						<td class="data" style="color:<?php echo $colorcrea;?>"><?php echo $row->T7;?></td>
						<?php	} ?>
						<td  class="elements" >mg/dl</td>
					</tr>
					<tr>
						<td class="bd">got (ast)</td>
						<td  class="elements" >&lt; 40</td>
						<td  class="elements" >&lt; 33</td>
						<td  class="elements" >u/L</td>
						<?php
							if ($AST==0){ ?>
							
						<td class="data" >-</td>
						<?php
							}else{ ?>
						<td class="data" style="color:<?php echo $colorast;?>"><?php echo $row->T8;?></td>
						<?php	} ?>
						<td  class="elements" >u/L</td>
					</tr>
					<tr>
						<td class="bd">gpt (alt)</td>
						<td  class="elements" >&lt; 41</td>
						<td  class="elements" >&lt; 32</td>
						<td  class="elements" >u/L</td>
						<?php
							if ($ALT==0){ ?>
							
						<td class="data" >-</td>
						<?php
							}else{ ?>
						<td class="data" style="color:<?php echo $coloralt;?>" ><?php echo $row->T9;?></td>
						<?php	} ?>
						<td  class="elements" >u/L</td>
					</tr>
				</table>
			</section>
			
			
		</div>		
	<?php }?>
	
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
	
	<?php foreach ($btr as $row){ ?>
	<div id="<?echo $row->BId;?>deleterecord" style="width:300px;display: none;">
		<section class="search">

			<div class="container">
				<p style="font-size:15px;padding-top:15px;" >DELETE <?php echo $row->annual;?> RECORD</p>
			</div>
		</section>
		
		<?php echo form_open("EHRs/DeleteRecord");?>	
		<div class="forminput">
		    <label name="email" >Are you sure you want to proceed ?</label>
			
		
		
				<div class="clearfix"></div>
			
					<input type="hidden" name='BId' value="<?php echo $row->BId;?>">
					<input type="hidden" name='EmId' value="<?php echo $row->EmId;?>">
					<input type="hidden" name='annual' value="<?php echo $row->annual;?>">
				
			
		<br>
	    </br>
		
			
		<?php 
			
			echo form_submit("loginSubmit","OK");
			echo form_close();
		?>
		<br>
        </div> 
		
	</div>	
	
	<?php }?>
	
	<?php foreach ($btr as $row){ ?>
	<div id="<?echo $row->BId;?>editrecord" style="width:300px;display: none;">
		<section class="search">

			<div class="container">
				<p style="font-size:15px;padding-top:15px;" >UPDATE <?php echo $row->annual;?> RECORD</p>
			</div>
		</section>
		
			
			
		
		<div class="forminput">
								
		    <label name="email" >Are you sure you want to proceed ?</label>
		<br>
	    </br>
		<a class="fancybox alpha" href="#<?echo $row->BId;?>filleditrecord">OK
		</a>
        </div> 
		
		
	</div>	
	
	<?php }?>
	
	<?php foreach ($btr as $row){ 
	$date=strtotime($row->dateConducted);
						$dc=date('F d ,Y', $date);
	?>
	<div id="<?echo $row->BId;?>filleditrecord" style="width:400px;display: none;">
		<section class="search">

				<div class="container">
					<p style="font-size:15px;padding-top:15px;" >UPDATE <?php echo $row->annual;?> RECORD</p>
				</div>
			</section>
			
			<?php echo form_open("EHRs/EditRecord");?>	
			<div class="forminputrecord">
						<input  type="hidden" value="<?php echo $row->EmId; ?>" name="EmId" id="EmId">
						<input  type="hidden" value="<?php echo $row->BId; ?>" name="BId" id="BId">
						<input  type="hidden" value="<?php echo $row->annual;?>" name="annual" id="annual">
						<input  type="hidden" value="<?php echo $row->dateConducted;?>" name="dateConducted" id="dateConducted">
				<label name="email" >Date Conducted:</label>
				<div>
				
				
						<input  type="text" style="text-transform:capitalized;margin-top:2px;margin-left:8%;" value="<?php echo $dc;?>" 
						class="zocial-dribbble" readonly/>
					
				</div>
				
				<section>
					
						<p style="font-weight:bold;text-indent:40%;margin-top:35px;font-size:16px;" >RESULTS</p>
				<section class="search" style="margin-top:5px;height:3px;">
					<div class="container">
					</div>
				</section>
			
				<div class="clearfix"></div>
				<br>
				<label name="email" style="padding-left:15%;">Glucose (GLU)</label>
				
				<label style="padding-left:25%;">Uric Acid (UA)</label>
				
				<div class="clearfix"></div>
				<input type="text" style="width:40%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" value="<?php echo $row->T1;?>" placeholder="mg/dl" name="T1" id="T1" onkeypress='validate(event)' required/>
		
				<input type="text" style="width:40%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" value="<?php echo $row->T2;?>" placeholder="mg/dl" name="T2" id="T2" onkeypress='validate(event)' required/>
		
			
		
				<label name="email" style="padding-left:11%;" >Cholesterol (CHOL)</label>
				
				<label style="padding-left:20%;">Triglyceride</label>
				
				<div class="clearfix"></div>
				<input type="text" style="width:40%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" value="<?php echo $row->T3;?>" placeholder="mg/dl " name="T3" id="T3" onkeypress='validate(event)' required/>
		
				<input type="text" style="width:40%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" value="<?php echo $row->T4;?>" placeholder="mg/dl " name="T4" id="T4" onkeypress='validate(event)' required/>
				<div class="clearfix"></div>
				
				<label name="email" style="padding-left:22%;">LDL</label>
				
				<label style="padding-left:40%;">HDL</label>
				
				<div class="clearfix"></div>
				<input type="text" style="width:40%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" placeholder="mg/dl " value="<?php echo $row->T5;?>" name="T5" id="T5" onkeypress='validate(event)' required/>
		
				<input type="text" style="width:40%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" placeholder="mg/dl " value="<?php echo $row->T6;?>" name="T6" id="T6" onkeypress='validate(event)' required/>
		
				<div class="clearfix"></div>
				
				<label name="email" style="padding-left:12%;">Creatinine (CREA)</label>
				<label style="padding-left:20%;">GOT (AST)</label>
				
				<div class="clearfix"></div>
				<input type="text" style="width:40%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" placeholder="mg/dl " value="<?php echo $row->T7;?>" name="T7" id="T7" onkeypress='validate(event)' required/>
		
				<input type="text" style="width:40%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" placeholder="u/L " value="<?php echo $row->T8;?>" name="T8" id="T8" onkeypress='validate(event)' required/>
		
				<div class="clearfix"></div>
				<label name="email" style="padding-left:18%;">GPT (ALT)</label>	

				<div class="clearfix"></div>
				<input type="text" style="width:40%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" placeholder="u/L " value="<?php echo $row->T9;?>" name="T9" id="T9" onkeypress='validate(event)' required/>
		
					
			<br>
			</br>
			<div class="clearfix"></div>
				
			<?php //registration button
				
				echo form_submit("loginSubmit","UPDATE RECORD");
				echo form_close();
			?>
			<br>
			</div> 
		
	</div>	
	
	<?php }?>
	
	<?php foreach ($viewemployee as $row){ ?>
	<!-- /********    Add new Record **********/ -->
		<div id="addnewrecord" style="width:400px;display: none;">
			<section class="search">

				<div class="container">
					<p style="font-size:15px;padding-top:15px;" >BLOOD CHEMISTRY EXAMINATION</p>
				</div>
			</section>
			
			<?php echo form_open("EHRs/addBtr");?>	
			<div class="forminputrecord">
						<input  type="hidden" value="<?php echo $row->EmId; ?>" name="EmId" id="EmId">
				<label name="email" >Date Conducted:</label>
				<div>
				
				
						<input  type="date" style="text-transform:capitalized;margin-top:2px;margin-left:8%;" name="dateConducted" id="dateConducted"
						class="zocial-dribbble">
					
				</div>
				
				<section>
					
						<p style="font-weight:bold;text-indent:40%;margin-top:35px;font-size:16px;" >RESULTS</p>
				<section class="search" style="margin-top:5px;height:3px;">
					<div class="container">
					</div>
				</section>
			
				<div class="clearfix"></div>
				<br>
				<label name="email" style="padding-left:15%;">Glucose (GLU)</label>
				
				<label style="padding-left:25%;">Uric Acid (UA)</label>
				
				<div class="clearfix"></div>
				<input type="text" style="width:40%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" placeholder="mg/dl" name="T1" id="T1" onkeypress='validate(event)' required/>
		
				<input type="text" style="width:40%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" placeholder="mg/dl" name="T2" id="T2" onkeypress='validate(event)' required/>
		
			
		
				<label name="email" style="padding-left:11%;" >Cholesterol (CHOL)</label>
				
				<label style="padding-left:20%;">Triglyceride</label>
				
				<div class="clearfix"></div>
				<input type="text" style="width:40%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" placeholder="mg/dl " name="T3" id="T3" onkeypress='validate(event)' required/>
		
				<input type="text" style="width:40%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" placeholder="mg/dl " name="T4" id="T4" onkeypress='validate(event)' required/>
				<div class="clearfix"></div>
				
				<label name="email" style="padding-left:22%;">LDL</label>
				
				<label style="padding-left:40%;">HDL</label>
				
				<div class="clearfix"></div>
				<input type="text" style="width:40%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" placeholder="mg/dl " name="T5" id="T5" onkeypress='validate(event)' required/>
		
				<input type="text" style="width:40%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" placeholder="mg/dl " name="T6" id="T6" onkeypress='validate(event)' required/>
		
				<div class="clearfix"></div>
				
				<label name="email" style="padding-left:12%;">Creatinine (CREA)</label>
				<label style="padding-left:20%;">GOT (AST)</label>
				
				<div class="clearfix"></div>
				<input type="text" style="width:40%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" placeholder="mg/dl " name="T7" id="T7" onkeypress='validate(event)' required/>
		
				<input type="text" style="width:40%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" placeholder="u/L " name="T8" id="T8" onkeypress='validate(event)' required/>
		
				<div class="clearfix"></div>
				<label name="email" style="padding-left:18%;">GPT (ALT)</label>	

				<div class="clearfix"></div>
				<input type="text" style="width:40%; text-transform:capitalized;margin-top:1px;margin-left:5%;"
						class="zocial-dribbble" placeholder="u/L " name="T9" id="T9" onkeypress='validate(event)' required/>
		
					
			<br>
			</br>
			<div class="clearfix"></div>
				
			<?php //registration button
				
				echo form_submit("loginSubmit","ADD RECORD");
				echo form_close();
			?>
			<br>
			</div> 
			
		</div>	
	<?php } ?>
	
	
</html>