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
	
	<link rel="stylesheet" href="<?php echo base_url();?>js/js2/jqueryui.css" type="text/css" media="all" />  
    <script src="<?php echo base_url();?>js/js2/jquery2.min.js" type="text/javascript"></script>  
    <script src="<?php echo base_url();?>js/js2/jqueryui.min.js" type="text/javascript"></script> 
	<script src="<?php echo base_url();?>js/multi_step_form.js"></script>
	
	<link href="<?php echo base_url();?>css/styleINPUT.css" rel="stylesheet" type="text/css">	
	<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>

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
	
	<!-- amCharts javascript sources -->
		<script type="text/javascript" src="<?php echo base_url();?>js/amcharts.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/serial.js"></script>

		<!-- amCharts javascript code -->
		
		<script type="text/javascript">
			AmCharts.makeChart("glucose",
				{
					"type": "serial",
					"categoryField": "category",
					"startDuration": 1,
					"theme": "default",
					"categoryAxis": {
						"autoRotateAngle": 0,
						"autoRotateCount": 0,
						"autoWrap": true,
						"gridPosition": "start",
						"tickPosition": "start",
						"axisAlpha": 0.9,
						"boldLabels": true,
						"color": "#000000",
						"fillAlpha": 0.02,
						"fillColor": "#000000",
						"fontSize": 10,
						"gridAlpha": 0.1,
						"gridCount": 1,
						"minorGridAlpha": 0,
						"minVerticalGap": 31,
						"tickLength": 6,
						"title": "Yearly",
						"titleFontSize": 12
					},
					"chartCursor": {
						"animationDuration": 0.43,
						"bulletsEnabled": true,
						"color": "#FF0000",
						"cursorColor": "#FFFFFF",
						"graphBulletSize": 1,
						"selectionAlpha": 0
					},
					"trendLines": [],
					
					"guides": [],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"stackType": "regular",
							"totalTextOffset": -2,
							"treatZeroAs": 1,
							"autoGridCount": false,
							"axisAlpha": 0.5,
							"axisThickness": 0,
							"boldLabels": true,
							"color": "#000000",
							"dashLength": 3,
							"fillColor": "#000000",
							"fontSize": 11,
							"labelOffset": 2,
							"labelRotation": -3.6,
							"minHorizontalGap": 73,
							"minVerticalGap": 33,
							"tickLength": 7,
							"title": "mg/dl",
							"titleFontSize": 13
						}
					],
					"allLabels": [],
					"balloon": {
						
						"animationDuration": 0,
						"borderAlpha":1,
						"borderColor": "#000000",
						"borderThickness": 0,
						"color": "#FF0000",
						"cornerRadius": 1,
						"fadeOutDuration": 0,
						"fillAlpha": 0.8,
						"fontSize": 12,
						"offsetX": 0,
						"verticalPadding": 6
					},
					"titles": [
						{
							"alpha": 0.89,
							"color": "#000000",
							"id": "Title-1",
							"size": 15,
							"text": "GLUCOSE (GLU)"
						}
					],
				
					"dataProvider": [
						{ 
						     "lineColor": "#FF0000",
							"category": "0",
							"column-1": 0
						},
						<?php foreach ($btr as $row){ 
							$dataglu=$row->T1;
							  $date=strtotime($row->dateConducted);
							  $month=date('F', $date);
							if($dataglu <= 100 && $dataglu >=60 ){
						
						?>
						
						{
							 "lineColor": "#000066",
							"category": "<?php echo $month.' '.$row->annual;?>",
							"column-1": <?php echo $row->T1;?>,
							
						},
						<?php }else{  ?>
						{
							 "lineColor": "#FF0000",
							"category": "<?php echo $month.' '.$row->annual;?>",
							"column-1": <?php echo $row->T1;?>,
							
						},
						
						<?php }  ?>
						
						<?php } ?>
					
					],
					"graphs": [
						{
							"balloonColor": "#FFFFFF",
							"balloonText": "<b><span style='font-size:14px;'>[[value]]</span> mg/dl</b>",
							"bullet": "round",
							"columnWidth": 0,
							"gapPeriod": 1,
							"id": "AmGraph-1",
							"legendAlpha": 0,
							"legendColor": "#E7E7E7",
							"title": "",
							"valueAxis": "Not set",
							//"negativeLineColor":"#FF0000",
							//"lineColor":"#000066",
							//"negativeBase": "60",
							"lineColorField": "lineColor",
							"valueField": "column-1",
							"xAxis": "Not set",
							"yAxis": "ValueAxis-1",
							"lineThickness":"1.5",
							
						
						}
					]
				}
			);
		</script>
		
		<script type="text/javascript">
			AmCharts.makeChart("uricacid",
				{
					"type": "serial",
					"categoryField": "category",
					"startDuration": 1,
					"theme": "default",
					"categoryAxis": {
						"autoRotateAngle": 0,
						"autoRotateCount": 0,
						"autoWrap": true,
						"gridPosition": "start",
						"tickPosition": "start",
						"axisAlpha": 0.9,
						"boldLabels": true,
						"color": "#000000",
						"fillAlpha": 0.02,
						"fillColor": "#000000",
						"fontSize": 10,
						"gridAlpha": 0.1,
						"gridCount": 1,
						"minorGridAlpha": 0,
						"minVerticalGap": 31,
						"tickLength": 6,
						"title": "Yearly",
						"titleFontSize": 12
					},
					"chartCursor": {
						"animationDuration": 0.43,
						"bulletsEnabled": true,
						"color": "#FF0000",
						"cursorColor": "#FFFFFF",
						"graphBulletSize": 1,
						"selectionAlpha": 0
					},
					"trendLines": [],
					"graphs": [
						{
							"balloonColor": "#FFFFFF",
							"balloonText": "<b><span style='font-size:14px;'>[[value]]</span> mg/dl</b>",
							"bullet": "round",
							"columnWidth": 0,
							"gapPeriod": 1,
							"id": "AmGraph-1",
							"legendAlpha": 0,
							"legendColor": "#E7E7E7",
							"title": "",
							"valueAxis": "Not set",
							"lineColor":"#FF0000",
							"negativeLineColor":"#000066",
							
							<?php foreach ($viewemployee as $row){ 
								$genderchoice=$row->gender;
								if($genderchoice=="M"){
							?>
							"negativeBase": "7.001",
							<?php }else{ ?>
							"negativeBase": "5.701",
							<?php } ?>
							<?php } ?>
							"valueField": "column-1",
							"xAxis": "Not set",
							"yAxis": "ValueAxis-1",
							"lineThickness":"1.5",
						}
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"stackType": "regular",
							"totalTextOffset": -2,
							"treatZeroAs": 1,
							"autoGridCount": false,
							"axisAlpha": 0.5,
							"axisThickness": 0,
							"boldLabels": true,
							"color": "#000000",
							"dashLength": 3,
							"fillColor": "#000000",
							"fontSize": 11,
							"labelOffset": 2,
							"labelRotation": -3.6,
							"minHorizontalGap": 73,
							"minVerticalGap": 33,
							"tickLength": 7,
							"title": "mg/dl",
							"titleFontSize": 13
						}
					],
					"allLabels": [],
					"balloon": {
						"animationDuration": 0,
						"borderAlpha":1,
						"borderColor": "#000000",
						"borderThickness": 0,
						"color": "#FF0000",
						"cornerRadius": 1,
						"fadeOutDuration": 0,
						"fillAlpha": 0.8,
						"fontSize": 12,
						"offsetX": 0,
						"verticalPadding": 6
					},
					"titles": [
						{
							"alpha": 0.89,
							"color": "#000000",
							"id": "Title-1",
							"size": 15,
							"text": "URIC ACID (UA)"
						}
					],
				
					"dataProvider": [
						{
							"category": "0",
							"column-1": 0
						},
						<?php foreach ($btr as $row){ 
								$date=strtotime($row->dateConducted);
							  $month=date('F', $date);
							
						?>
						{
							"category": "<?php echo $month.' '.$row->annual;?>",
							"column-1": <?php echo $row->T2;?>
						},
						<?php } ?>
					
					]
				}
			);
		</script>
		
		<script type="text/javascript">
			AmCharts.makeChart("cholesterol",
				{
					"type": "serial",
					"categoryField": "category",
					"startDuration": 1,
					"theme": "default",
					"categoryAxis": {
						"autoRotateAngle": 0,
						"autoRotateCount": 0,
						"autoWrap": true,
						"gridPosition": "start",
						"tickPosition": "start",
						"axisAlpha": 0.9,
						"boldLabels": true,
						"color": "#000000",
						"fillAlpha": 0.02,
						"fillColor": "#000000",
						"fontSize": 10,
						"gridAlpha": 0.1,
						"gridCount": 1,
						"minorGridAlpha": 0,
						"minVerticalGap": 31,
						"tickLength": 6,
						"title": "Yearly",
						"titleFontSize": 12
					},
					"chartCursor": {
						"animationDuration": 0.43,
						"bulletsEnabled": true,
						"color": "#FF0000",
						"cursorColor": "#FFFFFF",
						"graphBulletSize": 1,
						"selectionAlpha": 0
					},
					"trendLines": [],
					"graphs": [
						{
							"balloonColor": "#FFFFFF",
							"balloonText": "<b><span style='font-size:14px;'>[[value]]</span> mg/dl</b>",
							"bullet": "round",
							"columnWidth": 0,
							"gapPeriod": 1,
							"id": "AmGraph-1",
							"legendAlpha": 0,
							"legendColor": "#E7E7E7",
							"title": "",
							"valueAxis": "Not set",
							"lineColor":"#FF0000",
							"negativeLineColor":"#000066",
							"negativeBase": "200.001",
							"valueField": "column-1",
							"xAxis": "Not set",
							"yAxis": "ValueAxis-1",
							"lineThickness":"1.5",
						}
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"stackType": "regular",
							"totalTextOffset": -2,
							"treatZeroAs": 1,
							"autoGridCount": false,
							"axisAlpha": 0.5,
							"axisThickness": 0,
							"boldLabels": true,
							"color": "#000000",
							"dashLength": 3,
							"fillColor": "#000000",
							"fontSize": 11,
							"labelOffset": 2,
							"labelRotation": -3.6,
							"minHorizontalGap": 73,
							"minVerticalGap": 33,
							"tickLength": 7,
							"title": "mg/dl",
							"titleFontSize": 13
						}
					],
					"allLabels": [],
					"balloon": {
						"animationDuration": 0,
						"borderAlpha":1,
						"borderColor": "#000000",
						"borderThickness": 0,
						"color": "#FF0000",
						"cornerRadius": 1,
						"fadeOutDuration": 0,
						"fillAlpha": 0.8,
						"fontSize": 12,
						"offsetX": 0,
						"verticalPadding": 6
					},
					"titles": [
						{
							"alpha": 0.89,
							"color": "#000000",
							"id": "Title-1",
							"size": 15,
							"text": "CHOLESTEROL (CHOL)"
						}
					],
				
					"dataProvider": [
						{
							"category": "0",
							"column-1": 0
						},
						<?php foreach ($btr as $row){ 
						$date=strtotime($row->dateConducted);
							  $month=date('F', $date);
							  
						?>
						{
							"category": "<?php echo $month.' '.$row->annual;?>",
							"column-1": <?php echo $row->T3;?>
						},
						<?php } ?>
					
					]
				}
			);
		</script>
		
		<script type="text/javascript">
			AmCharts.makeChart("triglyceride",
				{
					"type": "serial",
					"categoryField": "category",
					"startDuration": 1,
					"theme": "default",
					"categoryAxis": {
						"autoRotateAngle": 0,
						"autoRotateCount": 0,
						"autoWrap": true,
						"gridPosition": "start",
						"tickPosition": "start",
						"axisAlpha": 0.9,
						"boldLabels": true,
						"color": "#000000",
						"fillAlpha": 0.02,
						"fillColor": "#000000",
						"fontSize": 10,
						"gridAlpha": 0.1,
						"gridCount": 1,
						"minorGridAlpha": 0,
						"minVerticalGap": 31,
						"tickLength": 6,
						"title": "Yearly",
						"titleFontSize": 12
					},
					"chartCursor": {
						"animationDuration": 0.43,
						"bulletsEnabled": true,
						"color": "#FF0000",
						"cursorColor": "#FFFFFF",
						"graphBulletSize": 1,
						"selectionAlpha": 0
					},
					"trendLines": [],
					"graphs": [
						{
							"balloonColor": "#FFFFFF",
							"balloonText":"<b><span style='font-size:14px;'>[[value]]</span> mg/dl</b>",
							"bullet": "round",
							"columnWidth": 0,
							"gapPeriod": 1,
							"id": "AmGraph-1",
							"legendAlpha": 0,
							"legendColor": "#E7E7E7",
							"title": "",
							"valueAxis": "Not set",
							"lineColor":"#FF0000",
							"negativeLineColor":"#000066",
							"negativeBase": "200.001",
							"valueField": "column-1",
							"xAxis": "Not set",
							"yAxis": "ValueAxis-1",
							"lineThickness":"1.5",
						}
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"stackType": "regular",
							"totalTextOffset": -2,
							"treatZeroAs": 1,
							"autoGridCount": false,
							"axisAlpha": 0.5,
							"axisThickness": 0,
							"boldLabels": true,
							"color": "#000000",
							"dashLength": 3,
							"fillColor": "#000000",
							"fontSize": 11,
							"labelOffset": 2,
							"labelRotation": -3.6,
							"minHorizontalGap": 73,
							"minVerticalGap": 33,
							"tickLength": 7,
							"title": "mg/dl",
							"titleFontSize": 13
						}
					],
					"allLabels": [],
					"balloon": {
						"animationDuration": 0,
						"borderAlpha":1,
						"borderColor": "#000000",
						"borderThickness": 0,
						"color": "#FF0000",
						"cornerRadius": 1,
						"fadeOutDuration": 0,
						"fillAlpha": 0.8,
						"fontSize": 12,
						"offsetX": 0,
						"verticalPadding": 6
					},
					"titles": [
						{
							"alpha": 0.89,
							"color": "#000000",
							"id": "Title-1",
							"size": 15,
							"text": "TRIGLYCERIDE"
						}
					],
				
					"dataProvider": [
						{
							"category": "0",
							"column-1": 0
						},
						<?php foreach ($btr as $row){
						$date=strtotime($row->dateConducted);
							  $month=date('F', $date);
						?>
						{
							"category": "<?php echo $month.' '.$row->annual;?>",
							"column-1": <?php echo $row->T4;?>
						},
						<?php } ?>
					
					]
				}
			);
		</script>
		
		<script type="text/javascript">
			AmCharts.makeChart("ldl",
				{
					"type": "serial",
					"categoryField": "category",
					"startDuration": 1,
					"theme": "default",
					"categoryAxis": {
						"autoRotateAngle": 0,
						"autoRotateCount": 0,
						"autoWrap": true,
						"gridPosition": "start",
						"tickPosition": "start",
						"axisAlpha": 0.9,
						"boldLabels": true,
						"color": "#000000",
						"fillAlpha": 0.02,
						"fillColor": "#000000",
						"fontSize": 10,
						"gridAlpha": 0.1,
						"gridCount": 1,
						"minorGridAlpha": 0,
						"minVerticalGap": 31,
						"tickLength": 6,
						"title": "Yearly",
						"titleFontSize": 12
					},
					"chartCursor": {
						"animationDuration": 0.43,
						"bulletsEnabled": true,
						"color": "#FF0000",
						"cursorColor": "#FFFFFF",
						"graphBulletSize": 1,
						"selectionAlpha": 0
					},
					"trendLines": [],
					"graphs": [
						{
							"balloonColor": "#FFFFFF",
							"balloonText":"<b><span style='font-size:14px;'>[[value]]</span> mg/dl</b>",
							"bullet": "round",
							"columnWidth": 0,
							"gapPeriod": 1,
							"id": "AmGraph-1",
							"legendAlpha": 0,
							"legendColor": "#E7E7E7",
							"title": "",
							"valueAxis": "Not set",
							"lineColor":"#FF0000",
							"negativeLineColor":"#000066",
							"negativeBase": "150.001",
							"valueField": "column-1",
							"xAxis": "Not set",
							"yAxis": "ValueAxis-1",
							"lineThickness":"1.5",
						}
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"stackType": "regular",
							"totalTextOffset": -2,
							"treatZeroAs": 1,
							"autoGridCount": false,
							"axisAlpha": 0.5,
							"axisThickness": 0,
							"boldLabels": true,
							"color": "#000000",
							"dashLength": 3,
							"fillColor": "#000000",
							"fontSize": 11,
							"labelOffset": 2,
							"labelRotation": -3.6,
							"minHorizontalGap": 73,
							"minVerticalGap": 33,
							"tickLength": 7,
							"title": "mg/dl",
							"titleFontSize": 13
						}
					],
					"allLabels": [],
					"balloon": {
						"animationDuration": 0,
						"borderAlpha":1,
						"borderColor": "#000000",
						"borderThickness": 0,
						"color": "#FF0000",
						"cornerRadius": 1,
						"fadeOutDuration": 0,
						"fillAlpha": 0.8,
						"fontSize": 12,
						"offsetX": 0,
						"verticalPadding": 6
					},
					"titles": [
						{
							"alpha": 0.89,
							"color": "#000000",
							"id": "Title-1",
							"size": 15,
							"text": "LOW-DENSITY LIPOPROTEIN"
						}
					],
				
					"dataProvider": [
						{
							"category": "0",
							"column-1": 0
						},
						<?php foreach ($btr as $row){ 
							$date=strtotime($row->dateConducted);
							  $month=date('F', $date);
							  
						?>
						{
							"category": "<?php echo $month.' '.$row->annual;?>",
							"column-1": <?php echo $row->T5;?>
						},
						<?php } ?>
					
					]
				}
			);
		</script>
		
		<script type="text/javascript">
			AmCharts.makeChart("hdl",
				{
					"type": "serial",
					"categoryField": "category",
					"startDuration": 1,
					"theme": "default",
					"categoryAxis": {
						"autoRotateAngle": 0,
						"autoRotateCount": 0,
						"autoWrap": true,
						"gridPosition": "start",
						"tickPosition": "start",
						"axisAlpha": 0.9,
						"boldLabels": true,
						"color": "#000000",
						"fillAlpha": 0.02,
						"fillColor": "#000000",
						"fontSize": 10,
						"gridAlpha": 0.1,
						"gridCount": 1,
						"minorGridAlpha": 0,
						"minVerticalGap": 31,
						"tickLength": 6,
						"title": "Yearly",
						"titleFontSize": 12
					},
					"chartCursor": {
						"animationDuration": 0.43,
						"bulletsEnabled": true,
						"color": "#FF0000",
						"cursorColor": "#FFFFFF",
						"graphBulletSize": 1,
						"selectionAlpha": 0
					},
					"trendLines": [],
					"graphs": [
						{
							"balloonColor": "#FFFFFF",
							"balloonText":"<b><span style='font-size:14px;'>[[value]]</span> mg/dl</b>",
							"bullet": "round",
							"columnWidth": 0,
							"gapPeriod": 1,
							"id": "AmGraph-1",
							"legendAlpha": 0,
							"legendColor": "#E7E7E7",
							"title": "",
							"valueAxis": "Not set",
							"lineColor":"#000066",
							"negativeLineColor":"#FF0000",
							"negativeBase": "35",
							"valueField": "column-1",
							"xAxis": "Not set",
							"yAxis": "ValueAxis-1",
							"lineThickness":"1.5",
						}
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"stackType": "regular",
							"totalTextOffset": -2,
							"treatZeroAs": 1,
							"autoGridCount": false,
							"axisAlpha": 0.5,
							"axisThickness": 0,
							"boldLabels": true,
							"color": "#000000",
							"dashLength": 3,
							"fillColor": "#000000",
							"fontSize": 11,
							"labelOffset": 2,
							"labelRotation": -3.6,
							"minHorizontalGap": 73,
							"minVerticalGap": 33,
							"tickLength": 7,
							"title": "mg/dl",
							"titleFontSize": 13
						}
					],
					"allLabels": [],
					"balloon": {
						"animationDuration": 0,
						"borderAlpha":1,
						"borderColor": "#000000",
						"borderThickness": 0,
						"color": "#FF0000",
						"cornerRadius": 1,
						"fadeOutDuration": 0,
						"fillAlpha": 0.8,
						"fontSize": 12,
						"offsetX": 0,
						"verticalPadding": 6
					},
					"titles": [
						{
							"alpha": 0.89,
							"color": "#000000",
							"id": "Title-1",
							"size": 15,
							"text": "HIGH-DENSITY LIPOPROTEIN"
						}
					],
				
					"dataProvider": [
						{
							"category": "0",
							"column-1": 0
						},
						<?php foreach ($btr as $row){ 
						$date=strtotime($row->dateConducted);
							  $month=date('F', $date);

						
						?>
						{
							"category": "<?php echo $month.' '.$row->annual;?>",
							"column-1": <?php echo $row->T6;?>
						},
						<?php } ?>
					
					]
				}
			);
		</script>
		
		<script type="text/javascript">
			AmCharts.makeChart("creatinine",
				{
					"type": "serial",
					"categoryField": "category",
					"startDuration": 1,
					"theme": "default",
					"categoryAxis": {
						"autoRotateAngle": 0,
						"autoRotateCount": 0,
						"autoWrap": true,
						"gridPosition": "start",
						"tickPosition": "start",
						"axisAlpha": 0.9,
						"boldLabels": true,
						"color": "#000000",
						"fillAlpha": 0.02,
						"fillColor": "#000000",
						"fontSize": 10,
						"gridAlpha": 0.1,
						"gridCount": 1,
						"minorGridAlpha": 0,
						"minVerticalGap": 31,
						"tickLength": 6,
						"title": "Yearly",
						"titleFontSize": 12
					},
					"chartCursor": {
						"animationDuration": 0.43,
						"bulletsEnabled": true,
						"color": "#FF0000",
						"cursorColor": "#FFFFFF",
						"graphBulletSize": 1,
						"selectionAlpha": 0
					},
					"trendLines": [],
					"graphs": [
						{
							"balloonColor": "#FFFFFF",
							"balloonText":"<b><span style='font-size:14px;'>[[value]]</span> mg/dl</b>",
							"bullet": "round",
							"columnWidth": 0,
							"gapPeriod": 1,
							"id": "AmGraph-1",
							"legendAlpha": 0,
							"legendColor": "#E7E7E7",
							"title": "",
							"valueAxis": "Not set",
							"lineColorField": "lineColor",
							//"lineColor":"#000066",
							//"negativeLineColor":"#FF0000",
							//"negativeBase": "60",
							"valueField": "column-1",
							"xAxis": "Not set",
							"yAxis": "ValueAxis-1",
							"lineThickness":"1.5",
						}
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"stackType": "regular",
							"totalTextOffset": -2,
							"treatZeroAs": 1,
							"autoGridCount": false,
							"axisAlpha": 0.5,
							"axisThickness": 0,
							"boldLabels": true,
							"color": "#000000",
							"dashLength": 3,
							"fillColor": "#000000",
							"fontSize": 11,
							"labelOffset": 2,
							"labelRotation": -3.6,
							"minHorizontalGap": 73,
							"minVerticalGap": 33,
							"tickLength": 7,
							"title": "mg/dl",
							"titleFontSize": 13
						}
					],
					"allLabels": [],
					"balloon": {
						"animationDuration": 0,
						"borderAlpha":1,
						"borderColor": "#000000",
						"borderThickness": 0,
						"color": "#FF0000",
						"cornerRadius": 1,
						"fadeOutDuration": 0,
						"fillAlpha": 0.8,
						"fontSize": 12,
						"offsetX": 0,
						"verticalPadding": 6
					},
					"titles": [
						{
							"alpha": 0.89,
							"color": "#000000",
							"id": "Title-1",
							"size": 15,
							"text": "CREATININE (CREA)"
						}
					],
				
					"dataProvider": [
						{   
							"lineColor": "#FF0000",
							"category": "0",
							"column-1": 0
						},
						<?php foreach ($btr as $row){

							$date=strtotime($row->dateConducted);
							  $month=date('F', $date);
							$datacrea=$row->T7;
							$genderchoice=$row->gender;
							if($genderchoice=="M"){
								if($datacrea <= 1.1 && $datacrea >= 0.6 ){ ?>
									{
									"lineColor": "#000066",
									"category": "<?php echo $month.' '.$row->annual;?>",
									"column-1": <?php echo $row->T7;?>
									},
						
						<?php	 }else {  ?>
									{	
									"lineColor": "#FF0000",
									"category": "<?php echo $month.' '.$row->annual;?>",
									"column-1": <?php echo $row->T7;?>
									},
							   <?php   }  ?>
						<?php }else{ 
						if($datacrea <= 0.9 && $datacrea >= 0.5 ){ ?>
									{
									"lineColor": "#000066",
									"category": "<?php echo $month.' '.$row->annual;?>",
									"column-1": <?php echo $row->T7;?>
									},
						
						<?php	 }else {  ?>
									{
									"lineColor": "#FF0000",
									"category": "<?php echo $month.' '.$row->annual;?>",
									"column-1": <?php echo $row->T7;?>
									},
							   <?php   }  ?>
						
						
						<?php	   }  ?>
						<?php }  ?>
						
						
					
					]
				}
			);
		</script>
		
		<script type="text/javascript">
			AmCharts.makeChart("ast",
				{
					"type": "serial",
					"categoryField": "category",
					"startDuration": 1,
					"theme": "default",
					"categoryAxis": {
						"autoRotateAngle": 0,
						"autoRotateCount": 0,
						"autoWrap": true,
						"gridPosition": "start",
						"tickPosition": "start",
						"axisAlpha": 0.9,
						"boldLabels": true,
						"color": "#000000",
						"fillAlpha": 0.02,
						"fillColor": "#000000",
						"fontSize": 10,
						"gridAlpha": 0.1,
						"gridCount": 1,
						"minorGridAlpha": 0,
						"minVerticalGap": 31,
						"tickLength": 6,
						"title": "Yearly",
						"titleFontSize": 12
					},
					"chartCursor": {
						"animationDuration": 0.43,
						"bulletsEnabled": true,
						"color": "#FF0000",
						"cursorColor": "#FFFFFF",
						"graphBulletSize": 1,
						"selectionAlpha": 0
					},
					"trendLines": [],
					"graphs": [
						{
							"balloonColor": "#FFFFFF",
							"balloonText":"<b><span style='font-size:14px;'>[[value]]</span> u/L </b>",
							"bullet": "round",
							"columnWidth": 0,
							"gapPeriod": 1,
							"id": "AmGraph-1",
							"legendAlpha": 0,
							"legendColor": "#E7E7E7",
							"title": "",
							"valueAxis": "Not set",
							"lineColor":"#FF0000",
							"negativeLineColor":"#000066",
							
							<?php foreach ($viewemployee as $row){ 
								$genderchoice=$row->gender;
								if($genderchoice=="M"){
							?>
							"negativeBase": "40.001",
							<?php }else{ ?>
							"negativeBase": "33.001",
							<?php } ?>
							<?php } ?>
							"valueField": "column-1",
							"xAxis": "Not set",
							"yAxis": "ValueAxis-1",
							"lineThickness":"1.5",
						}
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"stackType": "regular",
							"totalTextOffset": -2,
							"treatZeroAs": 1,
							"autoGridCount": false,
							"axisAlpha": 0.5,
							"axisThickness": 0,
							"boldLabels": true,
							"color": "#000000",
							"dashLength": 3,
							"fillColor": "#000000",
							"fontSize": 11,
							"labelOffset": 2,
							"labelRotation": -3.6,
							"minHorizontalGap": 73,
							"minVerticalGap": 33,
							"tickLength": 7,
							"title": "u/L",
							"titleFontSize": 13
						}
					],
					"allLabels": [],
					"balloon": {
						"animationDuration": 0,
						"borderAlpha":1,
						"borderColor": "#000000",
						"borderThickness": 0,
						"color": "#FF0000",
						"cornerRadius": 1,
						"fadeOutDuration": 0,
						"fillAlpha": 0.8,
						"fontSize": 12,
						"offsetX": 0,
						"verticalPadding": 6
					},
					"titles": [
						{
							"alpha": 0.89,
							"color": "#000000",
							"id": "Title-1",
							"size": 15,
							"text": "GOT (AST)"
						}
					],
				
					"dataProvider": [
						{
							"category": "0",
							"column-1": 0
						},
						<?php foreach ($btr as $row){ 
						$date=strtotime($row->dateConducted);
							  $month=date('F', $date);
						?>
						{
							"category": "<?php echo $month.' '.$row->annual;?>",
							"column-1": <?php echo $row->T8;?>
						},
						<?php } ?>
					
					]
				}
			);
		</script>
		
		<script type="text/javascript">
			AmCharts.makeChart("alt",
				{
					"type": "serial",
					"categoryField": "category",
					"startDuration": 1,
					"theme": "default",
					"categoryAxis": {
						"autoRotateAngle": 0,
						"autoRotateCount": 0,
						"autoWrap": true,
						"gridPosition": "start",
						"tickPosition": "start",
						"axisAlpha": 0.9,
						"boldLabels": true,
						"color": "#000000",
						"fillAlpha": 0.02,
						"fillColor": "#000000",
						"fontSize": 10,
						"gridAlpha": 0.1,
						"gridCount": 1,
						"minorGridAlpha": 0,
						"minVerticalGap": 31,
						"tickLength": 6,
						"title": "Yearly",
						"titleFontSize": 12
					},
					"chartCursor": {
						"animationDuration": 0.43,
						"bulletsEnabled": true,
						"color": "#FF0000",
						"cursorColor": "#FFFFFF",
						"graphBulletSize": 1,
						"selectionAlpha": 0
					},
					"trendLines": [],
					"graphs": [
						{
							"balloonColor": "#FFFFFF",
							"balloonText": "<b><span style='font-size:14px;'>[[value]]</span> u/L </b>",
							"bullet": "round",
							"columnWidth": 0,
							"gapPeriod": 1,
							"id": "AmGraph-1",
							"legendAlpha": 0,
							"legendColor": "#E7E7E7",
							"title": "",
							"valueAxis": "Not set",
							"lineColor":"#FF0000",
							"negativeLineColor":"#000066",
							
							<?php foreach ($viewemployee as $row){ 
								$genderchoice=$row->gender;
								if($genderchoice=="M"){
							?>
							"negativeBase": "41.001",
							<?php }else{ ?>
							"negativeBase": "32.001",
							<?php } ?>
							<?php } ?>
							"valueField": "column-1",
							"xAxis": "Not set",
							"yAxis": "ValueAxis-1",
							"lineThickness":"1.5",
						}
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"stackType": "regular",
							"totalTextOffset": -2,
							"treatZeroAs": 1,
							"autoGridCount": false,
							"axisAlpha": 0.5,
							"axisThickness": 0,
							"boldLabels": true,
							"color": "#000000",
							"dashLength": 3,
							"fillColor": "#000000",
							"fontSize": 11,
							"labelOffset": 2,
							"labelRotation": -3.6,
							"minHorizontalGap": 73,
							"minVerticalGap": 33,
							"tickLength": 7,
							"title": "u/L",
							"titleFontSize": 13
						}
					],
					"allLabels": [],
					"balloon": {
						"animationDuration": 0,
						"borderAlpha":1,
						"borderColor": "#000000",
						"borderThickness": 0,
						"color": "#FF0000",
						"cornerRadius": 1,
						"fadeOutDuration": 0,
						"fillAlpha": 0.8,
						"fontSize": 12,
						"offsetX": 0,
						"verticalPadding": 6
					},
					"titles": [
						{
							"alpha": 0.89,
							"color": "#000000",
							"id": "Title-1",
							"size": 15,
							"text": "GPT (ALT)"
						}
					],
				
					"dataProvider": [
						{
							"category": "0",
							"column-1": 0
						},
						<?php foreach ($btr as $row){ 
						$date=strtotime($row->dateConducted);
							  $month=date('F', $date);
						?>
						{
							"category": "<?php echo $month.' '.$row->annual;?>",
							"column-1": <?php echo $row->T9;?>
						},
						<?php } ?>
					
					]
				}
			);
		</script>
		
		
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
			
			
			   <div class="img10">
			   
				<a href="<?php echo base_url();?>EHRs/setpassword">
					<img src="<?php echo base_url();?>img/editimage2.png" 
						alt="edit profile" 
						title="edit profile"/>
					
						
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
		
					<?php echo form_open("EHRs/authentication");
						//echo $row->EmId;
						//echo '->'.$row->Lname;
						
					?>	
					<input type='hidden'  name='EmId' id='EmId' value='<?php echo $row->EmId; ?>' >
					
					
				
						<div class="navigation-column">
							<div >
								<?php //registration button
									
									echo form_submit("loginSubmit","REPORTS");
									echo form_close();
								?>
						
					
							</div>
						</div>
						
					<?php echo form_open("EHRs/recordgraphs");
						//echo $row->EmId;
						//echo '->'.$row->Lname;
					
						?>	
					
						<div class="navigation-column " style="margin-top:-12px;">
							<div class="buttonactive" >
								<?php //registration button
							
									echo form_submit("loginSubmit","GRAPHS");
									echo form_close();
								?>
					
							</div>
						</div>
					</div>
			</section>
		</div>
		<?php } ?>
		<div class="right" > <!--  RIGHT SIDE  CONTENT -->
			
			<section class="listings2">
				<div class="wrapper">
					<section>
					   
						<div class="message" style="margin-top:-10px;margin-bottom:5.5px;">
								<p style="color:#00600F;padding-left:40%;" ><?php echo $message; ?>
								
									<a class="fancybox" href="#printgraphs">
										<img src="<?php echo base_url();?>img/printgraphs.png" width="90px" height="22px"
										alt="Print Graph Report" 
										title="Print Graph Report"/>
								
									</a>
								</p>
						</div>
					</section>
					<div id="wrapper2" >
			
						<!-- Fieldsets -->
						
						<form method="post" action="<?php echo base_url();?>AGUS_site/EditSuccess">
							<fieldset id='first' style="" >
								
								<ul id="progressbar">
									<li class="active">Glucose</li>
									<li>Uric Acid</li>
									<li>Cholesterol</li>
									<li>Triglyceride</li>
									<li>LDL</li>
									<li>HDL</li>
									<li>Creatinine</li>
									<li>GOT (AST)</li>
									<li>GPT (ALT)</li>
									
								</ul>
								
								<div  style="margin-left:100px;">
									<div id="glucose" style="width:100%;height:385px; background-color: #FFFFFF;" ></div>
								</div>
					
								<input class="next_btn" style="margin-top:5px;" name="next" type="button" value="Next">
								
							</fieldset>
							
							
							<fieldset id='second'  >
								
								<ul id="progressbar">
									<li>Glucose</li>
									<li class="deactive">Uric Acid</li>
									<li>Cholesterol</li>
									<li>Triglyceride</li>
									<li>LDL</li>
									<li>HDL</li>
									<li>Creatinine</li>
									<li>GOT (AST)</li>
									<li>GPT (ALT)</li>
									
								</ul>
								
								<div  style="margin-left:100px;">
									<div id="uricacid" style="width:100%;height:385px; background-color: #FFFFFF;" ></div>
								</div>
								<input class="pre_btn" type="button" value="Previous" >
								<input class="next_btn" name="next" type="button" value="Next" style="margin-left:20px;">
								
							</fieldset>
							
							<fieldset id='second'  >
								
								<ul id="progressbar">
									<li>Glucose</li>
									<li >Uric Acid</li>
									<li class="deactive" >Cholesterol</li>
									<li>Triglyceride</li>
									<li>LDL</li>
									<li>HDL</li>
									<li>Creatinine</li>
									<li>GOT (AST)</li>
									<li>GPT (ALT)</li>
									
								</ul>
								
								<div  style="margin-left:100px;">
									<div id="cholesterol" style="width:100%;height:385px; background-color: #FFFFFF;" ></div>
								</div> 
								
								<input class="pre_btn" type="button" value="Previous" >
								<input class="next_btn" name="next" type="button" value="Next" style="margin-left:20px;">
								
							</fieldset>
							
							<fieldset id='second'  >
								
								<ul id="progressbar">
									<li>Glucose</li>
									<li >Uric Acid</li>
									<li >Cholesterol</li>
									<li class="deactive" >Triglyceride</li>
									<li>LDL</li>
									<li>HDL</li>
									<li>Creatinine</li>
									<li>GOT (AST)</li>
									<li>GPT (ALT)</li>
									
								</ul>
								
								<div  style="margin-left:100px;">
									<div id="triglyceride" style="width:100%;height:385px; background-color: #FFFFFF;" ></div>
								</div>
								<input class="pre_btn" type="button" value="Previous" >
								<input class="next_btn" name="next" type="button" value="Next" style="margin-left:20px;">
								
							</fieldset>
							
							<fieldset id='second'  >
								
								<ul id="progressbar">
									<li>Glucose</li>
									<li >Uric Acid</li>
									<li>Cholesterol</li>
									<li>Triglyceride</li>
									<li class="deactive" >LDL</li>
									<li>HDL</li>
									<li>Creatinine</li>
									<li>GOT (AST)</li>
									<li>GPT (ALT)</li>
									
								</ul>
								
								<div  style="margin-left:100px;">
									<div id="ldl" style="width:100%;height:385px; background-color: #FFFFFF;" ></div>
								</div>
								<input class="pre_btn" type="button" value="Previous" >
								<input class="next_btn" name="next" type="button" value="Next" style="margin-left:20px;">
								
							</fieldset>
							
							<fieldset id='second'  >
								
								<ul id="progressbar">
									<li>Glucose</li>
									<li>Uric Acid</li>
									<li>Cholesterol</li>
									<li>Triglyceride</li>
									<li>LDL</li>
									<li  class="deactive" >HDL</li>
									<li>Creatinine</li>
									<li>GOT (AST)</li>
									<li>GPT (ALT)</li>
									
								</ul>
								
								<div  style="margin-left:100px;">
									<div id="hdl" style="width:100%;height:385px; background-color: #FFFFFF;" ></div>
								</div>
								<input class="pre_btn" type="button" value="Previous" >
								<input class="next_btn" name="next" type="button" value="Next" style="margin-left:20px;">
								
							</fieldset>
							
							<fieldset id='second'  >
								
								<ul id="progressbar">
									<li>Glucose</li>
									<li>Uric Acid</li>
									<li>Cholesterol</li>
									<li>Triglyceride</li>
									<li>LDL</li>
									<li>HDL</li>
									<li  class="deactive" >Creatinine</li>
									<li>GOT (AST)</li>
									<li>GPT (ALT)</li>
									
								</ul>
								
								<div  style="margin-left:100px;">
									<div id="creatinine" style="width:100%;height:385px; background-color: #FFFFFF;" ></div>
								</div>
								<input class="pre_btn" type="button" value="Previous" >
								<input class="next_btn" name="next" type="button" value="Next" style="margin-left:20px;">
								
							</fieldset>
							
							<fieldset id='second'  >
								
								<ul id="progressbar">
									<li>Glucose</li>
									<li>Uric Acid</li>
									<li>Cholesterol</li>
									<li>Triglyceride</li>
									<li>LDL</li>
									<li>HDL</li>
									<li>Creatinine</li>
									<li class="deactive" >GOT (AST)</li>
									<li>GPT (ALT)</li>
									
								</ul>
								
								<div  style="margin-left:100px;">
									<div id="ast" style="width:100%;height:385px; background-color: #FFFFFF;" ></div>
								</div>
								<input class="pre_btn" type="button" value="Previous" >
								<input class="next_btn" name="next" type="button" value="Next" style="margin-left:20px;">
								
							</fieldset>
							
							<fieldset id='second'  >
								
								<ul id="progressbar">
									<li>Glucose</li>
									<li>Uric Acid</li>
									<li>Cholesterol</li>
									<li>Triglyceride</li>
									<li>LDL</li>
									<li>HDL</li>
									<li>Creatinine</li>
									<li>GOT (AST)</li>
									<li  class="deactive">GPT (ALT)</li>
									
								</ul>
								
								<div  style="margin-left:100px;">
									<div id="alt" style="width:100%;height:385px; background-color: #FFFFFF;" ></div>
								</div>
								<input class="pre_btn" type="button" value="Previous" >
								
							</fieldset>
							
							

						</form>		
					</div><!--wrapper2-->
					
					
				
				</div>
			</section>	<!--end listing section  -->
			
			
		</div>  <!--End Right side contend-->
		
		
	</section>
	

	
</body>


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
	<!-- /********  print summary **********/ -->
	<div id="printgraphs" style="width:300px;display: none;">
		<section class="search">

			<div class="container">
				<p style="font-size:15px;padding-top:15px;" >PRINT GRAPHS</p>
			</div>
		</section>
		
		<?php echo form_open("EHRs/printrecordgraphs");?>	
		<div class="forminput">
		    <label name="email" >Are you sure you want to proceed ?</label>
			 <input type='hidden'  name='EmId' id='EmId' value='<?php echo $row->EmId; ?>' >
		
		
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