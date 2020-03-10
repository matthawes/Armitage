<?php include "navigation.html"; ?>
<?php session_start(); ?>
<?php include "../config.php"; ?>
<?php

if(!isset($_SESSION['user_id'])){
    header("Location: ../index.php");
}
?>
<?php
	    (int)$currentpage = (!empty($_GET["currentpage"]))?$_GET["currentpage"]:0;
	    (int)$nextpage = $currentpage + 1;
	    (int)$prevpage = $currentpage - 1;
?>
<?php
$ts = date(strtotime('last sunday'));
	            $ts += $currentpage * 86400 * 7;
	            $dow = date('w' , $ts);
	            $offset = $dow;
	            $ts = $ts - $offset * 86400;
 $dashboard_query = "SELECT projected_food FROM dashboard_data WHERE dashboard_date = CONVERT($ts)";
 $dashboard_result = mysqli_query($connect, $dashboard_query);
 $selecteddashboard = mysqli_fetch_array($dashboard_result);
?>	
<script type="text/javascript">
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Food"
	},
	axisY: {
		title: "Dollars"
	},
	legend: {
		cursor:"pointer",
		itemclick : toggleDataSeries
	},
	toolTip: {
		shared: true,
		content: toolTipFormatter
	},
	data: [{
		type: "column",
		showInLegend: true,
		name: "Projected",
		color: "#ff9c00",
		dataPoints: [
			{ y: 2500, label: "Monday" },
			{ y: 3000, label: "Tuesday" },
			{ y: 3200, label: "Wednesday" },
			{ y: 3500, label: "Thursday" },
			{ y: 5500, label: "Friday" },
			{ y: 5000, label: "Saturday" },
			{ y: 2800, label: "Sunday" }
		]
	},
	{
		type: "column",
		showInLegend: true,
		name: "Actual",
		color: "#C77900",
		dataPoints: [
			{ y: 2200, label: "Monday" },
			{ y: 3400, label: "Tuesday" },
			{ y: 4400, label: "Wednesday" },
			{ y: 3600, label: "Thursday" },
			{ y: 5900, label: "Friday" },
			{ y: 4400, label: "Saturday" },
			{ y: 2700, label: "Sunday" }
		]
	}]
});
chart.render();

var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title:{
		text: "Alcohol"
	},
	axisY: {
		title: "Dollars"
	},
	legend: {
		cursor:"pointer",
		itemclick : toggleDataSeries
	},
	toolTip: {
		shared: true,
		content: toolTipFormatter
	},
	data: [{
		type: "column",
		showInLegend: true,
		name: "Projected",
		color: "#ff9c00",
		dataPoints: [
			{ y: 2500, label: "Monday" },
			{ y: 3000, label: "Tuesday" },
			{ y: 3200, label: "Wednesday" },
			{ y: 3500, label: "Thursday" },
			{ y: 5500, label: "Friday" },
			{ y: 5000, label: "Saturday" },
			{ y: 2800, label: "Sunday" }
		]
	},
	{
		type: "column",
		showInLegend: true,
		name: "Actual",
		color: "#C77900",
		dataPoints: [
			{ y: 2500, label: "Monday" },
			{ y: 3000, label: "Tuesday" },
			{ y: 3200, label: "Wednesday" },
			{ y: 3500, label: "Thursday" },
			{ y: 5500, label: "Friday" },
			{ y: 5000, label: "Saturday" },
			{ y: 2800, label: "Sunday" }
		]
	}]
});
chart2.render();

function toolTipFormatter(e) {
	var str = "";
	var total = 0 ;
	var str2 ;
	for (var i = 0; i < e.entries.length; i++){
		var str1 = "<span style= \"color:"+e.entries[i].dataSeries.color + "\">" + e.entries[i].dataSeries.name + "</span>: <strong>"+  e.entries[i].dataPoint.y + "</strong> <br/>" ;
		str = str.concat(str1);
	}
	str2 = "<strong>" + e.entries[0].dataPoint.label + "</strong> <br/>";
	
	return (str2.concat(str));
}

function toggleDataSeries(e) {
	if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>
<body>


  <main id="main">

    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="faq">
	    <div class="container">

        <div class="section-header wow fadeInUp">
          <h3 class="section-title">Dashboard</h3>
          <span class="section-divider"></span>
        </div>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="text-center table table-bordered table-sm table-hover table-responsive-lg wow fadeInUpBig">
	   <thead class="thead-warning">
	  	<td><a href="<?php echo "{$_SERVER['PHP_SELF']}?currentpage=$prevpage"; ?>"><i class="fa fa-2x fa-arrow-circle-left"></i></a> </td> 
             	<td><a href="<?php echo "{$_SERVER['PHP_SELF']}?currentpage=$nextpage"; ?>"><i class="fa fa-2x fa-arrow-circle-right"></i></a></td>
	    
		   <tr>
			
			   <th align="left"></th>
      	        <?php
	            $ts = date(strtotime('last sunday'));
	            $ts += $currentpage * 86400 * 7;
	            $dow = date('w' , $ts);
	            $offset = $dow;
	            $ts = $ts - $offset * 86400;
	            for ($x=0 ; $x<7 ; $x++, $ts += 86400) {
	                echo '<th>' . date("m-d-Y", $ts) . '</th>' ;
		       }
	        ?>
			   
	    </tr>
	 <tr>
		<th width="14%"></th>
              <th width="10%" class="dashDate">Sunday</th>
              <th width="10%" class="dashDate">Monday</th>
              <th width="10%" class="dashDate">Tuesday</th>
              <th width="10%" class="dashDate">Wednesday</th>
              <th width="10%" class="dashDate">Thursday</th>
              <th width="10%" class="dashDate">Friday</th>
              <th width="10%" class="dashDate">Saturday</th>
              <th width="10%" class="dashDate">Total</th>
              <td width="6%" class="noborder"></td>
            
	        
	    </tr>
	</thead>
	<tbody>   
            <tr>
		<th class="text-left bg-warning2">Proj. Food</th>
              	<td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" placeholder="<? .$selecteddashboard['project_foods']."></td>
		<td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="3,000" id="pf2"></td>
             	<td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="3,200" id="pf3"></td>
              	<td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="3,500" id="pf4"></td>
              	<td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="5,500" id="pf5"></td>
              	<td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="5,000" id="pf6"></td>
              	<td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="2,800" id="pf7"></td>
			    
			
			  
			  
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="25,500.00" id="pft"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="76.8%" id="pfp"></td>
              </tr>
            <tr>
              <th class="text-left bg-warning2">Proj. Alcohol</th>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="500" id="pa1"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="600" id="pa2"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="800" id="pa3"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="1,000" id="pa4"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="2,000" id="pa5"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="1,800" id="pa6"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="1,000" id="pa7"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="7,700.00" id="pat"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="23.2%" id="pap"></td>
              </tr>
            <tr>
              <th class="text-left bg-warning2">Proj. Total</th>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="3,000" id="pt1"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="3000" id="pt2"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="4,000" id="pt3"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="4,500" id="pt4"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="7,500" id="pt5"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="6,800" id="pt6"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="3,800" id="pt7"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="33,200.00" id="ptt"></td>
              <td class="noborder"></td>
              </tr>
             <tr>
              <th class="text-left bg-warning2">Actual Food</th>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="2,200" id="af1"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="3,400" id="af2"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="4,400" id="af3"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="3,600" id="af4"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="5,900" id="af5"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="4,400" id="af6"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="2,700" id="af7"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="26,600.00" id="aft"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="78.5%" id="afp"></td>
              </tr>
            <tr>
              <th class="text-left bg-warning2">Actual Alcohol</th>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="600" id="aa1"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="900" id="aa2"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="1,200" id="aa3"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="900" id="aa4"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="2,100" id="aa5"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="1,200" id="aa6"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="400" id="aa7"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="7,300.00" id="aat"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="21.5%" id="aap"></td>
              </tr>
            <tr>
              <th class="text-left bg-warning2">Total Alcohol</th>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="2,800" id="ta1"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="4,300" id="ta2"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="5,600" id="ta3"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="4,500" id="ta4"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="8,000" id="ta5"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="5,600" id="ta6"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="3,100" id="ta7"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="33,900.00" id="tat"></td>
              <td class="noborder"></td>
              </tr>
            <tr>
              <th class="text-left bg-warning2">Variance</th>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-danger text-right" type="text" value="(200)" id="v1"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="700" id="v2"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="1,600" id="v3"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0" id="v4"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="500" id="v5"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-danger text-right" type="text" value="(1,200)" id="v6"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-danger text-right" type="text" value="(700)" id="v7"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-danger text-right" type="text" value="700.00" id="vt1"></td>
              <td class="noborder"></td>
              </tr>
				<thead class="thead-light"><tr><th colspan="9">LABOR</th></tr></thead>
			  <tr>
              <th class="text-left bg-warning2">Proj. BOH $</th>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="168" id="pboh1"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="198" id="pboh2"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="191" id="pboh3"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="202" id="pboh4"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="306" id="pboh5"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="230" id="pboh6"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="139" id="pboh7"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="1432.50" id="pboht"></td>
              </tr>
              <tr>
              <th class="text-left bg-warning2">Proj. FOH $</th>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="119" id="pfoh1"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="105" id="pfoh2"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="95" id="pfoh3"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="95" id="pfoh4"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="124" id="pfoh5"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="181" id="pfoh6"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="171" id="pfoh7"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="888.25" id="pfoht"></td>
              </tr>
              <tr>
              <th class="text-left bg-warning2">Proj. BOH %</th>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="5.6%" id="pbohp1"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="5.5%" id="pbohp2"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="4.8%" id="pbohp3"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="4.5%" id="pbohp4"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="4.1%" id="pbohp5"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="3.4%" id="pbohp6"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="3.7%" id="pbohp7"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="4.3%" id="pbohpt"></td>
              </tr>
              <tr>
              <th class="text-left bg-warning2">Proj. FOH %</th>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="4.0%" id="pfohp1"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="2.9%" id="pfohp2"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="2.4%" id="pfohp3"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="2.1%" id="pfohp4"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="1.6%" id="pfohp5"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="2.7%" id="pfohp6"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="4.5%" id="pfohp7"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="2.7%" id="pfohpt"></td>
              </tr>
			  <tr>
              <th class="text-left bg-warning2">Actual BOH $</th>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="&nbsp;" id="aboh1"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="&nbsp;" id="aboh2"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="&nbsp;" id="aboh3"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="&nbsp;" id="aboh4"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="&nbsp;" id="aboh5"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="&nbsp;" id="aboh6"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="&nbsp;" id="aboh7"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0" id="aboht"></td>
              </tr>
              <tr>
              <th class="text-left bg-warning2">Actual FOH $</th>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="&nbsp;" id="afoh1"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="&nbsp;" id="afoh2"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="&nbsp;" id="afoh3"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="&nbsp;" id="afoh4"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="&nbsp;" id="afoh5"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="&nbsp;" id="afoh6"></td>
              <td class="bg-yellow"><input class="form-control1 bg-yellow2 text-right" type="text" value="&nbsp;" id="afoh7"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0" id="afoht"></td>
              </tr>
              <tr>
              <th class="text-left bg-warning2">Actual BOH %</th>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0%" id="abohp1"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0%" id="abohp2"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0%" id="abohp3"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0%" id="abohp4"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0%" id="abohp5"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0%" id="abohp6"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0%" id="abohp7"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0%" id="abohpt"></td>
              </tr>
              <tr>
              <th class="text-left bg-warning2">Actual FOH %</th>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0%" id="afohp1"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0%" id="afohp2"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0%" id="afohp3"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0%" id="afohp4"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0%" id="afohp5"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0%" id="afohp6"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0%" id="afohp7"></td>
              <td class="bg-white2"><input class="form-control1 bg-white2 text-right" type="text" value="0%" id="afohpt"></td>
              </tr>
          </tbody>
	</table>
      </div>
	    <div class="container" style="padding-top:5%">
	  	   <div class="row">
          		<div style="float:left; padding-top: 1%;  padding-left: 5%; padding-right: 5%; padding-bottom: 2%" class="col-6 text-center">	
             	 	 <table border="1" cellspacing="0" cellpadding="0" class="table">	
					 		<tbody>	
									<tr>
                            			<th width="80%" class="border-all text-center">Target Food Costs %</th>
                           				<td width="20%" placeholder= "<?= $selectedCOG['target_food_cost_percentage'] ?>" class="bg-yellow border-all"></td>
									</tr>
									<tr>
										<th width="80%" float="left" class="border-all text-center">Projected Food Costs %</th>
                            			<td width="20%" class="border-all">&nbsp;</td>
									</tr>
							</tbody>
					</table>
				</div>
				<div style="float: right; padding-top: 1%; padding-left: 5%; padding-right: 5%; padding-bottom: 2%" class="col-6 text-center">
					<table border="1" cellspacing="0" cellpadding="0" class="table">	
				 		   <tbody>
						   		  <tr>	
                            	  	  <th width="80%" class="border-all text-center">Target Alcohol Costs %</th>
                           			  <td width="20%" class="bg-yellow border-all">&nbsp;</td>
								  </tr>
								  <tr>
                            	  	  <th width="80%" class="border-all text-center">Projected Alcohol Costs %</th>
                            		  <td width="20%" class="border-all">&nbsp;</td>
								  </tr>
                   			</tbody>
					</table>
				</div>		
			</div>
		</div>	
		
	    <div class="container">
			<div class="row">
		 		 <div style="float: left; padding-left: 5%; padding-right: 5%; padding-bottom: 2%" class="col-6 text-center">
		 	  	 	<table border="1" cellspacing="0" cellpadding="0" class="table">
			  			   <tbody>
						   		  <tr>
					 	 		  	  <th colspan="2" class="border-all bg-yellow text-center">Food</th>
								  </tr>
								  <tr>
						 		  	  <th width="80%" class="border-all text-center">Current Food Cost %</th>
						 			  <td width="20%" class="border-all">&nbsp;</td>
								  </tr>
					 			  <tr>
  					 	 		  	  <th width="80%" class="border-all text-left">Adjusted Budget</th>
						 			  <td width="20%" class="border-all">&nbsp;</td>
								  </tr>
					 			  <tr>
					 	 		  	  <th width="80%" class="border-all text-left">Remaining Budget</th>
						 			  <td width="20" class="border-all"></td>
								  </tr>
					 			  <tr>
					 			  	  <th width="80%" class="border-all text-left">Purchases</th>
						 			  <td width="20%" class="border-all"></td>
								  </tr>
					 		</tbody>
					</table>
		 	    </div>
		 	   	<div style="float: right; padding-left: 5%; padding-right: 5%; padding-bottom: 2%" class="col-6 text-center">
		 	   		<table border="1" cellspacing="0" cellpadding="0" class="table">
			  		 	   <tbody>
					 	   		  <tr>
					 	 		  	  <th colspan="2" class="border-all bg-yellow text-center">Alcohol</th>
					 			  </tr>
					 			  <tr>
						 		  	  <th width="80%" class="border-all text-center">Current Alcohol Cost %</th>
						 			  <td width="20%" class="border-all">&nbsp;</td>
					 			  </tr>
					 			  <tr>
					 	 		  	  <th width="80%" class="border-all text-left">Adjusted Budget</th>
									  <td width="20%" class="border-all">&nbsp;</td>
					 			  </tr>
					 			  <tr>
					 	 		  	  <th width="80%" class="border-all text-left">Remaining Budget</th>
						 			  <td width="20" class="border-all"></td>
					 			  </tr>
					 			  <tr>
					 	 		  	  <th width="80%" class="border-all text-left">Purchases</th>
						 			  <td width="20%" class="border-all"></td>
					 			  </tr>	
					 		</tbody> 			 
					 </table>
		 		 </div>
			 </div>
		</div>
                <div class="row">
                    <div id="chartContainer" class="col-lg-6 col-md-12 wow fadeInLeft" style="height:300px"></div>
                    <div id="chartContainer2" class="col-lg-6 col-md-12 wow fadeInRight" style="height:300px"></div>
	</div>	

    </section><!-- #faq -->

  </main>
</body>
  

<?php include "../pages/footer.php"?>
