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
		.hiddentable {display:none;}

		
	</style>
  </head>  
   
  <body> 
		<div class="noprint" style="padding-top:10px;padding-left:100px;">
			<form><input type=button name=print value="Print" onClick="window.print()"></form>
		</div>
		<div id="footer">		    
			
					<div class="close">
						<form method="post" action="<?php echo base_url()."EHRs/Home_page"?>">
						<input style="position: absolute;margin-left:95%;margin-top:-25px;" 
						type="image" alt="submit" title="close"
						src="<?php echo base_url();?>img/close.png"  
						height="35px" width="35px">
						</form>
					</div>

		
			</div><!--wrapper2-->
			<div class="table1" style="margin:0px auto;width:1150px;height:570px;">
				
				<section class="recordform4" style="">
					 <img src="<?php echo base_url();?>img/printsummary.png" width="320px" height="100px;" 
											alt="NPC LOGO" 
											title="NPC LOGO"/>
				</section>
				

				<section>
					<p style="padding-top:5px;font-size:13px;padding-left:48.6%;color:#000000;">CY <?php echo $year;?></p>
				</section>
				<section class="recordform" style="margin-top:10px;">
					<table class="tb">
						<tr class="header" style="border-top:2px solid #000000;">
							
							<td style="width:225px;" class="header2"><br>name of employee</td>
							<td><span class="header2">fbs</span><div>60 - 100<div>mg/dl</td>
							<td><div><span class="header2">uric acid</span><div>m - &lt;7 mg/dl<div>f- &lt;5.7 mg/dl</td>
							<td><span class="header2">chol</span><div>&lt;200 mg/dl</td>
							<td><span class="header2">tg</span><br><div>&lt;200 mg/dl</td>
							<td><span class="header2">ldl</span><br><div>&lt;150 mg/dl</td>
							<td><span class="header2">hdl</span><br><div>&gt;35mg/dl</td>
							<td><span class="header2">crea</span><div>m - &lt;7 mg/dl<div>f- &lt;5.7 mg/dl</td>
							<td><span class="header2">sgot</span><div>m - &lt;7 mg/dl<div>f- &lt;5.7 mg/dl</td>
							<td><span class="header2">sgpt</span><div>m - &lt;7 mg/dl<div>f- &lt;5.7 mg/dl</td>
							<td style="width:250px;font-weight:bold;font-size:10px;"><br>REMARKS</td>
						</tr>
		<?php
		foreach ($CountRegular as $row) {
					$CountRegular=$row->CountRegular;
				}
		$i=1;
		$ii=0;
		$yy=-1;
		foreach ($btr as $row){
				$ii++;
				$yy++;
				
				
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
				
				
				$iii=$yy;
				if($CountRegular==$iii){
				$i=1;
				?>
					<tr style="border:2px solid #111111;">
						<td style="border-right:1px solid #ffffff;font-size:11px;font-weight:bold;text-indent:3%;color:#100040;">CASUAL / CONTRACTUAL</td><td style="border-right:1px solid #ffffff;"></td><td style="border-right:1px solid #ffffff;"></td><td style="border-right:1px solid #ffffff;"></td><td style="border-right:1px solid #ffffff;"></td><td style="border-right:1px solid #ffffff;"></td><td style="border-right:1px solid #ffffff;"></td>
						<td style="border-right:1px solid #ffffff;"></td><td style="border-right:1px solid #ffffff;"></td><td style="border-right:1px solid #ffffff;"></td><td></td>
					</tr>
					
					<?php }else{}
					
				if($ii==22){
				$ii=0;
				?>

						<tr  class="hiddentable">
							<td></td><td></td><td></td><td></td><td></td><td></td><td></td>
							<td></td><td></td><td></td><td></td>
						</tr>
						
						<tr class="header" style="border-top:2px solid #000000;">
							
							<td style="width:225px;" class="header2"><br>name of employee</td>
							<td><span class="header2">fbs</span><div>60 - 100<div>mg/dl</td>
							<td><div><span class="header2">uric acid</span><div>m - &lt;7 mg/dl<div>f- &lt;5.7 mg/dl</td>
							<td><span class="header2">chol</span><div>&lt;200 mg/dl</td>
							<td><span class="header2">tg</span><br><div>&lt;200 mg/dl</td>
							<td><span class="header2">ldl</span><br><div>&lt;150 mg/dl</td>
							<td><span class="header2">hdl</span><br><div>&gt;35mg/dl</td>
							<td><span class="header2">crea</span><div>m - &lt;7 mg/dl<div>f- &lt;5.7 mg/dl</td>
							<td><span class="header2">sgot</span><div>m - &lt;7 mg/dl<div>f- &lt;5.7 mg/dl</td>
							<td><span class="header2">sgpt</span><div>m - &lt;7 mg/dl<div>f- &lt;5.7 mg/dl</td>
							<td style="width:250px;font-weight:bold;font-size:10px;"><br>REMARKS</td>
						</tr>
				
				<!--   TABLE    -->
			
					<?php }else{} ?>
					<tr>
							<td style="font-size:9.5px;font-weight:bold;text-transform:uppercase;" >
								<div style="float:left;width:15px;padding-left:5px;"><?php echo $i++.'. ';?></div>
								<div style="float:left;width:80px;"><?php echo $row->Lname;?></div>
								<div style="float:left;width:10px;">,</div>
								<div style="float:left;width:100px;"><?php echo $row->Fname;?></div>
								<div><?php echo $row->Mname;?></div>
							</td>
							
							<?php // fbs
							if ($GLU==0){ ?>
							
							<td class="data" >-</td>
							<?php
								}else{ ?>
								
							<td class="data" style="color:<?php echo $colorglu;?>" ><?php echo $row->T1;?></td>
							<?php	} ?>
							
							
							<?php //uric acid
							if ($UA==0){ ?>
							
							<td class="data" >-</td>
							<?php
								}else{ ?>
								
							<td class="data" style="color:<?php echo $colorua;?>" ><?php echo $row->T2;?></td>
							
							<?php	} ?>
							
							
							<?php //cholesterol
							if ($CHOL==0){ ?>
							
							<td class="data" >-</td>
							<?php
								}else{ ?>
								
							<td class="data" style="color:<?php echo $colorchol;?>" ><?php echo $row->T3;?></td>
							<?php	} ?>
							
							
							<?php // tg
							if ($TRI==0){ ?>
							
							<td class="data" >-</td>
							<?php
								}else{ ?>
								
							<td class="data" style="color:<?php echo $colortri;?>" ><?php echo $row->T4;?></td>
							<?php	} ?>
							
							<?php //ldl
							if ($LDL==0){ ?>
							
							<td class="data" >-</td>
							<?php
								}else{ ?>
							<td class="data" style="color:<?php echo $colorldl;?>" ><?php echo $row->T5;?></td>
							<?php	} ?>
							
							
							<?php //hdl
							if ($HDL==0){ ?>
							
							<td class="data" >-</td>
							<?php
								}else{ ?>
							<td class="data" style="color:<?php echo $colorhdl;?>" ><?php echo $row->T6;?></td>
							<?php	} ?>
						
							<?php
							//crea
							
							if ($CREA==0){ ?>
							
							<td class="data" >-</td>
							<?php
								}else{ ?>
							<td class="data" style="color:<?php echo $colorcrea;?>"><?php echo $row->T7;?></td>
							<?php	} ?>
							
							
							<?php //ast
							if ($AST==0){ ?>
							
							<td class="data" >-</td>
							<?php
								}else{ ?>
							<td class="data" style="color:<?php echo $colorast;?>"><?php echo $row->T8;?></td>
							<?php	} ?>
							
							
							<?php //GOT
							if ($ALT==0){ ?>
							
							<td class="data" >-</td>
							<?php
								}else{ ?>
							<td class="data" style="color:<?php echo $coloralt;?>" ><?php echo $row->T9;?></td>
							<?php	} ?>
							<td></td>
						</tr>
			
			
		<?php } ?>
					</table>
					<br>
					<br>
				</section>
				
				
				
				
			</div>	
	
  </body>  
</html>  