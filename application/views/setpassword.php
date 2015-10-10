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
				<?php foreach ($viewemployee as $row){ ?>
				<div class="container" style="padding-top:70px;">
					<h1 style="font-weight:bold;">PERSONNEL HEALTH RECORD</h1>
					<h2>Welcome <?php echo $row->Lname;?> </h2>
					
					<?php 	
						echo form_open("EHRs/updatepassword"); ?>
					<h3>
						<?php 
						
						echo "Please Set-up your NEW-PASSWORD";
						?>
					</h3>
					
						<input type="hidden" value="<?php echo $row->EmId;?>" name="EmId" required/>
						<input type="hidden" value="<?php echo $row->Fname;?>" name="Fname" required/>
						<input type="hidden" value="<?php echo $row->Mname;?>" name="Mname" required/>
						<input type="hidden" value="<?php echo $row->Lname;?>" name="Lname" required/>
						<input type="hidden" value="<?php echo $row->position;?>" name="position" required/>
						<input type="hidden" value="<?php echo $row->gender;?>" name="gender" required/>
						<input type="hidden" value="<?php echo $row->status;?>" name="status" required/>
						<input type="password" style="margin-top:5px;" placeholder="New Password" name="password" required/>
						
					
					<?php
						echo"<p>";
						echo form_submit("loginSubmit","Save","class='login-button'");
						echo"</p>"	;
						echo form_close();
					?>
					
				</div>
				<?php } ?>
				
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
