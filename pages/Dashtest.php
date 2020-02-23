<?php include "navigation.html"; ?>

<?php session_start(); ?>



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

           <td scope="col" class="noborder"><a href="<?php echo "{$_SERVER['PHP_SELF']}?currentpage=$prevpage"; ?>"><i class="fa fa-2x fa-arrow-circle-left"></i></a> </td> 

           <td scope="col" class="noborder"><a href="<?php echo "{$_SERVER['PHP_SELF']}?currentpage=$nextpage"; ?>"><i class="fa fa-2x fa-arrow-circle-right"></i></a></td>

        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="text-center table table-bordered table-sm table-hover table-responsive-lg wow fadeInUpBig">

	  

	   <tr>

		   <td></td>

		    <th></th>

           

	   

	        <?php

	            $ts = date(strtotime('last sunday'));

	            $ts += $currentpage * 86400 * 7;

	            $dow = date('w' , $ts);

	            $offset = $dow;

	            $ts = $ts - $offset * 86400;

	            for ($x=0 ; $x<7 ; $x++,$ts += 86400) {

	                echo '<th>' . date("m-d-Y", $ts) . '</th>' ;

		       }

	        ?>

	    </tr>
 	<thead class="thead-warning"> 
	  <tr>
		  <td></td> 
		  <th></th>
              <?php

	            $ts = date(strtotime('last sunday'));

	            $ts += $currentpage * 86400 * 7;

	            $dow = date('w' , $ts);

	            $offset = $dow;

	            $ts = $ts - $offset * 86400;

	            for ($x=0 ; $x<7 ; $x++,$ts += 86400) {

	                echo '<th>' . date("l", $ts) . '</th>' ;

		       }

	        ?>


	        

	    </tr>

	</thead>
   </table>         
  </main>

</body>

  




