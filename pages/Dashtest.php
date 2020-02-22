<?php include "navigation.html"; ?>
<?php include "../config.php"; ?>
<?php session_start(); ?>



<?php
if(!isset($_SESSION['user_id'])){

    header("Location: ../index.php");
}
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

			{ y: 500, label: "Monday" },

			{ y: 600, label: "Tuesday" },

			{ y: 800, label: "Wednesday" },

			{ y: 1000, label: "Thursday" },

			{ y: 2000, label: "Friday" },

			{ y: 1800, label: "Saturday" },

			{ y: 1000, label: "Sunday" }

		]

	},

	{

		type: "column",

		showInLegend: true,

		name: "Actual",

		color: "#C77900",

		dataPoints: [

			{ y: 600, label: "Monday" },

			{ y: 900, label: "Tuesday" },

			{ y: 1200, label: "Wednesday" },

			{ y: 900, label: "Thursday" },

			{ y: 2100, label: "Friday" },

			{ y: 1200, label: "Saturday" },

			{ y: 400, label: "Sunday" }

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

<select>
<?php
for ($i = 0; $i < 4; $i++) {
    echo '<option value="' . date("Y-m-d", strtotime("this sunday - $i week")) . '">' . date("M j", strtotime("this sunday - $i week")) . " - " . date("M j", strtotime("this saturday - $i week")) .'</option>';
}
?>
</select>

   



  </main>

</body>

  



<?php include "../pages/footer.php"?>
