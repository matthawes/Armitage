<?php include "navigation.html"; ?>
<?php session_start(); ?>
<?php
if(!isset($_SESSION['user_id'])){ 
    header("Location: ../index.php");
}
?>
// A click on a week number cell in the weeks column of the start datepicker
$("td.ui-datepicker-week-col").live("click", function()
{
    // Simulate a click on the first day of the week
    $(this).next().click();

    // Grab the date, and set the end of the week in the end datepicker
    var fromDate = $("#inputStartDate").datepicker("getDate");    
    var toDate = fromDate;
    toDate.setDate(fromDate.getDate() + 6);
    $("#inputEndDate").datepicker("setDate", toDate);
});
<div class="input-container">			

			<form id="dateForm">

				  <label>

				  Select desired date:

				  <input type="date" name="Date"">

				  </label>

				  <input class="btn btn-warning btn-md" type="submit" name="submit">

			</form>

		</div>
