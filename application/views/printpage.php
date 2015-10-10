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
	<!--Styles-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/print.css">
	<style type="text/css">
		

		@media print
		{
		.noprint {display:none;}
		.close {display:none;}
		}

		
	</style>
  </head>  
   
  <body> 
		<div class="noprint" style="padding-top:10px;padding-left:100px;">
			<form><input type=button name=print value="Print" onClick="window.print()"></form>
		</div>
		<?php foreach ($btr as $row){ ?>
			<div id="<?php echo $row->annual;?>viewrecord" style="margin:0px auto;width:800px;height:570px;border:">
				
				<section class="recordform3">
					 <img src="<?php echo base_url();?>img/btrl.png" width="320px" height="90px"
											alt="NPC LOGO" 
											title="NPC LOGO"/>
				</section>
				<section>
					<p style="font-size:12px;font-weight:bold;padding-left:49%;color:#000000;">CY <?php echo $row->annual;?></p>
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
				if($GLU <= 109 && $GLU >=60 ){
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
				<section style="width:100%height:12px;">
					<p style="padding-left:80px;font-size:12px;">Patients Copy<p>
				</section>
				
				<section style="padding-top:30px;width:100%height:12px;padding-left:170px;">
					<div style="float:left;width:220px;height:1px;background:#000000;"></div>
					<div style="margin-left:80px;float:left;width:200px;height:1px;background:#000000;"></div>
				</section>
				<section style="padding-top:5px;width:100%height:12px;padding-left:225px;font-size:12px;">
					<div style="float:left;width:220px;height:1px;">Katy C. Generalao, RN</div>
					<div style="margin-left:80px;float:left;width:200px;height:1px;">Retainer Physician</div>
				</section>
				
				<section style="padding-top:12px;width:100%height:12px;padding-left:255px;font-size:12px;">
					<div style="float:left;width:220px;height:1px;">Sr. Nurse</div>
				</section>
				
				<section style="padding-top:30px;width:100%height:12px;padding-left:80px;font-size:12px;">
					<div style="float:left">NOTE :</div>
					<div style="margin-top:10px;margin-left:1px;float:left;width:83%;height:0.5px;background:#000000;"></div>
				</section>
				
				<section style="padding-top:25px;width:100%height:12px;padding-left:80px;font-size:12px;">
					
					<div style="margin-top:10px;margin-left:40px;float:left;width:83%;height:0.5px;background:#000000;"></div>
				</section>
				<br>
				<section style="width:100%height:12px;margin-top:10px;">
					<p style="padding-left:80px;font-size:12px;">REMARKS / RECOMMENDATION<p>
				</section>
				<section style="padding-top:15px;width:100%height:12px;padding-left:80px;font-size:12px;">
					
					<div style="margin-top:10px;margin-left:40px;float:left;width:83%;height:0.5px;background:#000000;"></div>
				</section>
				<section style="padding-top:25px;width:100%height:12px;padding-left:80px;font-size:12px;">
					
					<div style="margin-top:10px;margin-left:40px;width:83%;height:0.5px;background:#000000;"></div>
				</section>
				
			</div>	
			
			<div id="<?php echo $row->annual;?>viewrecord" style="padding-top:100px;margin:0px auto;width:800px;height:570px;border:">
				
				<section class="recordform3">
					 <img src="<?php echo base_url();?>img/btrl.png" width="300px" height="85px"
											alt="NPC LOGO" 
											title="NPC LOGO"/>
				</section>
				<section>
					<p style="font-size:12px;font-weight:bold;padding-left:49%;color:#000000;">CY <?php echo $row->annual;?></p>
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
				if($GLU <= 109 && $GLU >=60 ){
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
				<section style="width:100%height:12px;">
					<p style="padding-left:80px;font-size:12px;">Clinic's copy<p>
				</section>
				
				<section style="padding-top:30px;width:100%height:12px;padding-left:170px;">
					<div style="float:left;width:220px;height:1px;background:#000000;"></div>
					<div style="margin-left:80px;float:left;width:200px;height:1px;background:#000000;"></div>
				</section>
				<section style="padding-top:5px;width:100%height:12px;padding-left:225px;font-size:12px;">
					<div style="float:left;width:220px;height:1px;">Katy C. Generalao, RN</div>
					<div style="margin-left:80px;float:left;width:200px;height:1px;">Retainer Physician</div>
				</section>
				
				<section style="padding-top:12px;width:100%height:12px;padding-left:255px;font-size:12px;">
					<div style="float:left;width:220px;height:1px;">Sr. Nurse</div>
				</section>
				
				<section style="padding-top:30px;width:100%height:12px;padding-left:80px;font-size:12px;">
					<div style="float:left">NOTE :</div>
					<div style="margin-top:10px;margin-left:1px;float:left;width:83%;height:0.5px;background:#000000;"></div>
				</section>
				
				<section style="padding-top:25px;width:100%height:12px;padding-left:80px;font-size:12px;">
					
					<div style="margin-top:10px;margin-left:40px;float:left;width:83%;height:0.5px;background:#000000;"></div>
				</section>
				<br>
				<section style="width:100%height:12px;margin-top:10px;">
					<p style="padding-left:80px;font-size:12px;">REMARKS / RECOMMENDATION<p>
				</section>
				<section style="padding-top:15px;width:100%height:12px;padding-left:80px;font-size:12px;">
					
					<div style="margin-top:10px;margin-left:40px;float:left;width:83%;height:0.5px;background:#000000;"></div>
				</section>
				<section style="padding-top:25px;width:100%height:12px;padding-left:80px;font-size:12px;">
					
					<div style="margin-top:10px;margin-left:40px;width:83%;height:0.5px;background:#000000;"></div>
				</section>
				<br>
				<br>
				<br>
				
			</div>	
			<div id="footer">		    
			
					<div class="close">
						<form method="post" action="<?php echo base_url()."EHRs/viewemployee"?>">
						<input type="hidden" name='BId' value="<?php echo $row->BId;?>">
						<input type="hidden" name='EmId' value="<?php echo $row->EmId;?>">
						
						<input style="position: absolute;margin-left:95%;margin-top:-1260px;" 
						type="image" alt="submit" title="close"
						src="<?php echo base_url();?>img/close.png"  
						height="35px" width="35px">
						</form>
					</div>

		
			</div><!--wrapper2-->
		<?php } ?>
	
  </body>  
</html>  