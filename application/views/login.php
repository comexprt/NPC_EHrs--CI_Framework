<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>EHRs</title>
	<link rel="icon" href="<?php echo base_url();?>/img/icon.ico" type="image/x-icon">
    
    
    
        <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">

    
    
    
  </head>

  <body>
  
		<div style="width:100%;height:100%;overflow: hidden;">
			<div  class="img">
				<img  src="<?php echo base_url();?>img/NPC.png">
			</div>
			
			<div class="wrapper">
				
				<div class="container">
					<h1 style="font-weight:bold;">PERSONNEL HEALTH RECORD</h1>
					<h3 style="font-weight:bold;"><?php echo $message;?></h3>
					<?php 	
						echo form_open("EHRs/verifyadmin"); ?>
					<h3 style="font-size:12px;">
						<?php 
						
							if (validation_errors()==false)
							{echo "Enter Username & Password";
							}else {
							echo validation_errors();
							} ?>
					</h3>
					
						<input  style="margin-top:10px;" type="text" placeholder="DCE No. XX - XXXXX -X" name="username" required/>
						<input type="password" placeholder="Password" name="password" required/>
						
					
					<?php
						echo"<p>";
						echo form_submit("loginSubmit","Login","class='login-button'");
						echo"</p>"	;
						echo form_close();
					?>
					
				</div>
				
				<ul class="bg-bubbles">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
				
			</div>
		
		</div>
   
		
		<script src="<?php echo base_url();?>js/index.js"></script>

    
    
    
	</body>
	
</html>
