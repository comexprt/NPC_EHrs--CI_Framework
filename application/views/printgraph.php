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
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/responsive.css">

	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/print.css">
	<style type="text/css">
		

		@media print
		{
		.noprint {display:none;}
		.close {display:none;}
		.hiddentable {display:none;}

		
	</style>
	<!-- amCharts javascript sources -->
		<script type="text/javascript" src="<?php echo base_url();?>js/amcharts.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/serial.js"></script>

		<!-- amCharts javascript code -->
		
		<script type="text/javascript">
		if ('matchMedia' in window) {
			// Chrome, Firefox, and IE 10 support mediaMatch listeners
			window.matchMedia('print').addListener(function(media) {
				chart.validateNow();
				chart1.validateNow();
				chart2.validateNow();
				chart3.validateNow();
				chart4.validateNow();
				chart5.validateNow();
				chart6.validateNow();
				chart7.validateNow();
				chart8.validateNow();
			});
		} else {
			// IE and Firefox fire before/after events
			window.onbeforeprint = function () {
				chart.validateNow();
				chart1.validateNow();
				chart2.validateNow();
				chart3.validateNow();
				chart4.validateNow();
				chart5.validateNow();
				chart6.validateNow();
				chart7.validateNow();
				chart8.validateNow();
			}
		}
		</script>
		
		
		<script type="text/javascript">
			var chart = AmCharts.makeChart("glucose",
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
						"minVerticalGap": 2,
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
							"fontSize": 10,
							"labelOffset": 2,
							"labelRotation": -3.6,
							"minHorizontalGap": 73,
							"minVerticalGap": 33,
							"tickLength": 7,
							"title": "mg/dl",
							"titleFontSize": 11
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
						"fontSize": 11,
						"offsetX": 0,
						"verticalPadding": 6
					},
					"titles": [
						{
							"alpha": 0.89,
							"color": "#000000",
							"id": "Title-1",
							"size": 12,
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
							"labelText" : '[[value]] mg/dl',
							"color" : "#000000",
							"fontSize" : "13px"
							
						
						}
					]
				}
			);
		</script>
		
		<script type="text/javascript">
			var chart1 = AmCharts.makeChart("uricacid",
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
							"labelText" : '[[value]] mg/dl',
							"color" : "#000000",
							"fontSize" : "13px"
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
							"fontSize": 10,
							"labelOffset": 2,
							"labelRotation": -3.6,
							"minHorizontalGap": 73,
							"minVerticalGap": 33,
							"tickLength": 7,
							"title": "mg/dl",
							"titleFontSize": 11
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
						"fontSize": 11,
						"offsetX": 0,
						"verticalPadding": 6
					},
					"titles": [
						{
							"alpha": 0.89,
							"color": "#000000",
							"id": "Title-1",
							"size": 12,
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
			var chart2 = AmCharts.makeChart("cholesterol",
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
							"labelText" : '[[value]] mg/dl',
							"color" : "#000000",
							"fontSize" : "13px"
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
							"fontSize": 10,
							"labelOffset": 2,
							"labelRotation": -3.6,
							"minHorizontalGap": 73,
							"minVerticalGap": 33,
							"tickLength": 7,
							"title": "mg/dl",
							"titleFontSize": 11
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
						"fontSize": 11,
						"offsetX": 0,
						"verticalPadding": 6
					},
					"titles": [
						{
							"alpha": 0.89,
							"color": "#000000",
							"id": "Title-1",
							"size": 12,
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
			var chart3 = AmCharts.makeChart("triglyceride",
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
							"labelText" : '[[value]] mg/dl',
							"color" : "#000000",
							"fontSize" : "13px"
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
							"fontSize": 10,
							"labelOffset": 2,
							"labelRotation": -3.6,
							"minHorizontalGap": 73,
							"minVerticalGap": 33,
							"tickLength": 7,
							"title": "mg/dl",
							"titleFontSize": 11
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
						"fontSize": 11,
						"offsetX": 0,
						"verticalPadding": 6
					},
					"titles": [
						{
							"alpha": 0.89,
							"color": "#000000",
							"id": "Title-1",
							"size": 12,
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
			var chart4 = AmCharts.makeChart("ldl",
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
							"labelText" : '[[value]] mg/dl',
							"color" : "#000000",
							"fontSize" : "13px"
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
							"fontSize": 10,
							"labelOffset": 2,
							"labelRotation": -3.6,
							"minHorizontalGap": 73,
							"minVerticalGap": 33,
							"tickLength": 7,
							"title": "mg/dl",
							"titleFontSize": 11
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
						"fontSize": 11,
						"offsetX": 0,
						"verticalPadding": 6
					},
					"titles": [
						{
							"alpha": 0.89,
							"color": "#000000",
							"id": "Title-1",
							"size": 12,
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
			var chart5 = AmCharts.makeChart("hdl",
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
							"labelText" : '[[value]] mg/dl',
							"color" : "#000000",
							"fontSize" : "13px"
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
							"fontSize": 10,
							"labelOffset": 2,
							"labelRotation": -3.6,
							"minHorizontalGap": 73,
							"minVerticalGap": 33,
							"tickLength": 7,
							"title": "mg/dl",
							"titleFontSize": 11
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
						"fontSize": 11,
						"offsetX": 0,
						"verticalPadding": 6
					},
					"titles": [
						{
							"alpha": 0.89,
							"color": "#000000",
							"id": "Title-1",
							"size": 12,
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
			var chart6 = AmCharts.makeChart("creatinine",
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
							"labelText" : '[[value]] mg/dl',
							"color" : "#000000",
							"fontSize" : "13px"
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
							"fontSize": 10,
							"labelOffset": 2,
							"labelRotation": -3.6,
							"minHorizontalGap": 73,
							"minVerticalGap": 33,
							"tickLength": 7,
							"title": "mg/dl",
							"titleFontSize": 11
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
						"fontSize": 11,
						"offsetX": 0,
						"verticalPadding": 6
					},
					"titles": [
						{
							"alpha": 0.89,
							"color": "#000000",
							"id": "Title-1",
							"size": 12,
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
			var chart7 = AmCharts.makeChart("ast",
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
							"labelText" : '[[value]] u/L',
							"color" : "#000000",
							"fontSize" : "13px"
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
							"fontSize": 10,
							"labelOffset": 2,
							"labelRotation": -3.6,
							"minHorizontalGap": 73,
							"minVerticalGap": 33,
							"tickLength": 7,
							"title": "mg/dl",
							"titleFontSize": 11
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
						"fontSize": 11,
						"offsetX": 0,
						"verticalPadding": 6
					},
					"titles": [
						{
							"alpha": 0.89,
							"color": "#000000",
							"id": "Title-1",
							"size": 12,
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
			var chart8 = AmCharts.makeChart("alt",
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
							"labelText" : '[[value]] u/L',
							"color" : "#000000",
							"fontSize" : "13px"
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
							"fontSize": 10,
							"labelOffset": 2,
							"labelRotation": -3.6,
							"minHorizontalGap": 73,
							"minVerticalGap": 33,
							"tickLength": 7,
							"title": "mg/dl",
							"titleFontSize": 11
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
						"fontSize": 11,
						"offsetX": 0,
						"verticalPadding": 6
					},
					"titles": [
						{
							"alpha": 0.89,
							"color": "#000000",
							"id": "Title-1",
							"size": 12,
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

	<div class="noprint" style="padding-top:10px;padding-left:100px;">
			<form><input type=button name=print value="Print" onClick="window.print()"></form>
	</div>
	
	<?php foreach ($viewemployee as $row){ ?>
		<div id="footer">		    
			
					<div class="close">
					
						<form method="post" action="<?php echo base_url()."EHRs/Graphs"?>">
						<input type='hidden'  name='EmId' id='EmId' value='<?php echo $row->EmId; ?>' >
						<input style="position: absolute;margin-left:95%;margin-top:-20px;	" 
						type="image" alt="submit" title="close"
						src="<?php echo base_url();?>img/close.png"  
						height="35px" width="35px">
						</form>
					</div>

		
		</div><!--wrapper2-->
		<div style="margin:0px auto;width:1100px;height:260px;margin-top:-20px;">
		
			<section class="recordform3" style="margin-left:3%;">
				<img src="<?php echo base_url();?>img/NPC.png" width="350px" height="150px"alt="NPC LOGO" title="NPC LOGO"/>
			</section>
		
			
				
					<p style="padding-left:36%;font-size:16px;font-weight:bold;">ANNUAL GRAPHICAL PRESENTATION<p>
				<div style="margin-left:5%;float:left;width:50%;padding-top:10px;">
					<p style="padding-top:6px;">DCE NO. <code style="padding-left:6%;">: <?php echo $row->EmId;?></code>
					<p style="padding-top:6px;">NAME <code style="padding-left:9.5%;">: <?php echo $row->Lname.', '.$row->Fname.' '.$row->Mname;?></code><p>
					<p style="padding-top:6px;">POSITION <code style="padding-left:4.5%;">: <?php echo $row->position;?></code><p>
				</div>
			
				<div style="padding-left:5%;float:left;width:40%;padding-top:10px;">
					<p style="padding-top:6px;">STATUS<code style="padding-left:6%;">: <?php echo $row->status;?></code>
					<p style="padding-top:6px;">SEX <code style="padding-left:9.3%;">: <?php echo $row->gender;?></code><p>
				</div>
		</div>
	<?php } ?>



		<div id="glucose" style="float:left;width:50%;height:300px; background-color: #FFFFFF;" ></div>
		<div id="uricacid" style="float:right;width:50%;height:300px; background-color: #FFFFFF;" ></div>
	
		<div id="cholesterol" style="padding-top:20px;float:left;width:50%;height:300px; background-color: #FFFFFF;" ></div>
		<div id="triglyceride" style="padding-top:20px;float:right;width:50%;height:300px; background-color: #FFFFFF;" ></div>
		
		<div id="ldl" style="padding-top:20px;float:left;width:50%;height:300px; background-color: #FFFFFF;" ></div>
		<div id="hdl" style="padding-top:20px;float:right;width:50%;height:300px; background-color: #FFFFFF;" ></div>

		<div id="creatinine" style="padding-top:20px;float:left;width:50%;height:300px; background-color: #FFFFFF;" ></div>
		<div id="ast" style="padding-top:20px;float:right;width:50%;height:300px; background-color: #FFFFFF;" ></div>

		<div id="alt" style="padding-top:20px;padding-left:25%;width:50%;height:300px; background-color: #FFFFFF;" ></div>
		<br>
		<br>
		<br>
		<br>
		
</body>

</html>