<?php session_start(); ?>

<?php

if(!isset($_SESSION['user_id'])){
    header("Location: ../index.php");
}
?><?php include "navigation.html"; ?>

<body>



  <main id="main">

    <!--==========================
      Frequently Asked Questions Section
    ============================-->
	
    <section id="faq">
      <div class="container">
	  

        <div class="section-header wow fadeInUp">
          <h3 class="section-title">DAILY CASH</h3>
          <span class="section-divider"></span>
			<div class="input-container">
			<div id="dateDownOne" onClick="decreaseDateByOne()">
			<b>Previous</b>
			</div>			
			<form id="dateForm">
				<input type="date" class="tallInput" id="date" onblur="clearPage()">
			</form>
			<div id="dateUpOne" onClick="increaseDateByOne()">
			<b>Next</b>
			</div>
			</div>
        </div>
		
		<style>
			.rollInput {width:50%;}
			#dateForm {text-align:center; display:table;}
			#dateUpOne {display:table;}
			#dateDownOne {display:table;}
			.input-container {padding:5px; align: center; width: 25%; margin:auto; display:grid; grid-template-columns: 1fr 1fr 1fr;}
			.container {overflow:hidden;}
			#startingCash {border:2px solid #000; margin:0px 0px 5px 5px; background-color:#ffe8b8;}
			input {width:80%; height:20px;}
			.finalDiv {height:25px;}
			.tallInput {height:30px;}
			.cashHeader {margin:5px 5px -2px 5px;}
			.cashFooter {margin:-2px 5px 5px 5px;}
			.cashLabeltd {border:2px solid #000;}
			.oddRow {background-color:#ffe8b8;}
			.evenRow {background-color:#e8e8e8;}
			.filler {background-color:#ff9c00; border:0;}
			.headerFiller {background-color:#fff; border:0;}
			#cashFlow {table-layout: fixed;}
			#cashContainer {padding:5px; background-color:#ff9c00; width:63%; border: 2px solid #000;}
			#countContainer {padding:5px; background-color:#ff9c00; width:35%; border: 2px solid #000; float:right;}
			#overShortContainer {margin:0 auto; width:25%; background-color:#ff9c00;}
			input[type="date"] {
				position: relative;}

			/* create a new arrow, because we are going to mess up the native one*/
			input[type="date"]:after {
			padding: 0 5px;
			display:none;}


			/* make the native arrow invisible and stretch it over the whole field so you can click anywhere 
				in the input field to trigger the native datepicker*/
			input[type="date"]::-webkit-calendar-picker-indicator {
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				bottom: 0;
				width: auto;
				height: auto;
				color: transparent;
				background: transparent;}

			/* adjust increase/decrease button */
			input[type="date"]::-webkit-inner-spin-button {display: none;}

			/* adjust clear button */
			input[type="date"]::-webkit-clear-button {display:none;}
		</style>
		

		
		<table id="startingCash" width="30%">
			<tr>
				<td width="50%" align="center"><span style="font-weight:bold">Starting Cash</span></td>
				<td id="startingCash" align="center"><input onblur="finalizeOverShort()" id="startCashAmount" type="text"></td>
			</tr>
		</table>
		<table class="cashHeader" width="62%">
		<tr class="oddRow">
			<th width="18%" class="cashLabeltd">Cash In</th>
			<th width="17%" class="cashLabeltd headerFiller"></th>
			<th width="2%" class="cashLabeltd headerFiller"></th>
			<th width="18%" class="cashLabeltd">Cash Out</th>
			<th width="17%" class="cashLabeltd headerFiller"></th>
		</tr>
		</table>
		
		<div id="countContainer">
		<table width="100%" id="billCount">
		<tr class="oddRow">
			<th width="15%" class="cashLabeltd">Denom</th>
			<th width="15%" class="cashLabeltd">Qty</th>
			<th width="45%" class="cashLabeltd">Rolls</th>
			<th width="25%" class="cashLabeltd">Total</th>
		</tr>
		<tr class="evenRow">
			<td class="cashLabeltd">100s</td>
			<td class="cashLabeltd"><input onblur="sum100s()" type="text" name="bills" id="bills100" tabindex="25"></td>
			<td class="cashLabeltd"><input class="rollInput" onblur="sum100s()" type="text" name="bills" id="rolls100" tabindex="26"> ($10,000) </td>
			<td class="cashLabeltd" type="text"><div id="sum100" name="sum">0.00</div></td>
		</tr>
		<tr class="oddRow">
			<td class="cashLabeltd">50s</td>
			<td class="cashLabeltd"><input onblur="sum50s()" type="text" name="bills" id="bills50" tabindex="27"></td>
			<td class="cashLabeltd"><input class="rollInput" onblur="sum50s()" type="text" name="bills" id="rolls50" tabindex="28"> ($5,000) </td>
			<td class="cashLabeltd" type="text"><div id="sum50" name="sum">0.00</div></td>
		</tr>
		<tr class="evenRow">
			<td class="cashLabeltd">20s</td>
			<td class="cashLabeltd"><input onblur="sum20s()" type="text" name="bills" id="bills20" tabindex="29"></td>
			<td class="cashLabeltd"><input class="rollInput" onblur="sum20s()" type="text" name="bills" id="rolls20" tabindex="30"> ($2,000) </td>
			<td class="cashLabeltd" type="text"><div id="sum20" name="sum">0.00</div></td>
		</tr>
		<tr class="oddRow">
			<td class="cashLabeltd">10s</td>
			<td class="cashLabeltd"><input onblur="sum10s()" type="text" name="bills" id="bills10" tabindex="31"></td>
			<td class="cashLabeltd"><input class="rollInput" onblur="sum10s()" type="text" name="bills" id="rolls10" tabindex="32"> ($1,000) </td>
			<td class="cashLabeltd" type="text"><div id="sum10" name="sum">0.00</div></td>
		</tr>
		<tr class="evenRow">
			<td class="cashLabeltd">5s</td>
			<td class="cashLabeltd"><input onblur="sum5s()" type="text" name="bills" id="bills5" tabindex="33"></td>
			<td class="cashLabeltd"><input class="rollInput" onblur="sum5s()" type="text" name="bills" id="rolls5" tabindex="34"> ($500) </td>
			<td class="cashLabeltd" type="text"><div id="sum5" name="sum">0.00</div></td>
		</tr>
		<tr class="oddRow">
			<td class="cashLabeltd">1s</td>
			<td class="cashLabeltd"><input onblur="sum1s()" type="text" name="bills" id="bills1" tabindex="35"></td>
			<td class="cashLabeltd"><input class="rollInput" onblur="sum1s()" type="text" name="bills" id="rolls1" tabindex="36"> ($100) </td>
			<td class="cashLabeltd" type="text"><div id="sum1" name="sum">0.00</div></td>
		</tr>
		<tr class="evenRow">
			<td class="cashLabeltd">Quarters</td>
			<td class="cashLabeltd"><input onblur="sumQuarters()" type="text" name="bills" id="billsQuarters" tabindex="37"></td>
			<td class="cashLabeltd"><input class="rollInput" onblur="sumQuarters()" type="text" name="bills" id="rollsQuarters" tabindex="38"> ($10) </td>
			<td class="cashLabeltd" type="text"><div id="sumQuarters" name="sum">0.00</div></td>
		</tr>
		<tr class="oddRow">
			<td class="cashLabeltd">Dimes</td>
			<td class="cashLabeltd"><input onblur="sumDimes()" type="text" name="bills" id="billsDimes" tabindex="39"></td>
			<td class="cashLabeltd"><input class="rollInput" onblur="sumDimes()" type="text" name="bills" id="rollsDimes" tabindex="40"> ($5) </td>
			<td class="cashLabeltd" type="text"><div id="sumDimes" name="sum">0.00</div></td>
		</tr>
		<tr class="evenRow">
			<td class="cashLabeltd">Nickels</td>
			<td class="cashLabeltd"><input onblur="sumNickels()" type="text" name="bills" id="billsNickels" tabindex="41"></td>
			<td class="cashLabeltd"><input class="rollInput" onblur="sumNickels()" type="text" name="bills" id="rollsNickels" tabindex="42"> ($2) </td>
			<td class="cashLabeltd" type="text"><div id="sumNickels" name="sum">0.00</div></td>
		</tr>
		<tr class="oddRow">
			<td class="cashLabeltd">Pennies</td>
			<td class="cashLabeltd"><input onblur="sumPennies()" type="text" name="bills" id="billsPennies" tabindex="43"></td>
			<td class="cashLabeltd"><input class="rollInput" onblur="sumPennies()" type="text" name="bills" id="rollsPennies" tabindex="44"> ($0.50) </td>
			<td class="cashLabeltd" type="text"><div id="sumPennies" name="sum">0.00</div></td>
		</tr>
		<tr class="evenRow">
			<td class="cashLabeltd">Total</td>
			<td class="cashLabeltd"></td>
			<td class="cashLabeltd"></td>
			<td class="cashLabeltd" name="sumCash" id="sumCash"><div id="sumCash">0.00</div></td>
		</table>
		</div>
		<div id="cashContainer">
			<table id="cashFlow" width="100%">
			<tr class="oddRow">
				<th width="18%" class="cashLabeltd">Description</th>
				<th width="17%" class="cashLabeltd">Amount</th>
				<th width="2%" class="cashLabeltd filler"></th>
				<th width="18%" class="cashLabeltd">Description</th>
				<th width="17%" class="cashLabeltd">Amount</th>
			</tr>
			<tr class="evenRow">
				<td width="18%" class="cashLabeltd"><input id="inLabel1" type="text" tabindex="1"></td>
				<td width="17%" class="cashLabeltd"><input onblur="findTotalIn()" type="text" name="in" id="in1" tabindex="2"/></td>
				<td width="2%" class="cashLabeltd filler"></td>
				<td width="18%" class="cashLabeltd"><input id="outLabel1" type="text" tabindex="13"></td>
				<td width="17%" class="cashLabeltd"><input onblur="findTotalOut()" type="text" name="out" id="out1" tabindex="14"/></td>
			</tr>
			<tr class="oddRow">
				<td width="18%" class="cashLabeltd"><input id="inLabel2" type="text" tabindex="3"></td>
				<td width="17%" class="cashLabeltd"><input onblur="findTotalIn()" type="text" name="in" id="in2" tabindex="4"/></td>
				<td width="2%" class="cashLabeltd filler"></td>
				<td width="18%" class="cashLabeltd"><input id="outLabel2"type="text" tabindex="15"></td>
				<td width="17%" class="cashLabeltd"><input onblur="findTotalOut()" type="text" name="out" id="out2" tabindex="16"/></td>
			</tr>	
			<tr class="evenRow">
				<td width="18%" class="cashLabeltd"><input id="inLabel3" type="text" tabindex="5"></td>
				<td width="17%" class="cashLabeltd"><input onblur="findTotalIn()" type="text" name="in" id="in3" tabindex="6"/></td>
				<td width="2%" class="cashLabeltd filler"></td>
				<td width="18%" class="cashLabeltd"><input id="outLabel3" type="text" tabindex="17"></td>
				<td width="17%" class="cashLabeltd"><input onblur="findTotalOut()" type="text" name="out" id="out3" tabindex="18"/></td>
			</tr>
			<tr class="oddRow">
				<td width="18%" class="cashLabeltd"><input id="inLabel4" type="text" tabindex="7"></td>
				<td width="17%" class="cashLabeltd"><input onblur="findTotalIn()" type="text" name="in" id="in4" tabindex="8"/></td>
				<td width="2%" class="cashLabeltd filler"></td>
				<td width="18%" class="cashLabeltd"><input id="outLabel4" type="text" tabindex="19"></td>
				<td width="17%" class="cashLabeltd"><input onblur="findTotalOut()" type="text" name="out" id="out4" tabindex="20"/></td>
			</tr>
			<tr class="evenRow">
				<td width="18%" class="cashLabeltd"><input id="inLabel5" type="text" tabindex="9"></td>
				<td width="17%" class="cashLabeltd"><input onblur="findTotalIn()" type="text" name="in" id="in5" tabindex="10"/></td>
				<td width="2%" class="cashLabeltd filler"></td>
				<td width="18%" class="cashLabeltd"><input id="outLabel5" type="text" tabindex="21"></td>
				<td width="17%" class="cashLabeltd"><input onblur="findTotalOut()" type="text" name="out" id="out5" tabindex="22"/></td>
			</tr>
			<tr class="oddRow">
				<td width="18%" class="cashLabeltd"><input id="inLabel6" type="text" tabindex="11"></td>
				<td width="17%" class="cashLabeltd"><input onblur="findTotalIn()" type="text" name="in" id="in6" tabindex="12"/></td>
				<td width="2%" class="cashLabeltd filler"></td>
				<td width="18%" class="cashLabeltd"><input id="outLabel6" type="text" tabindex="23"></td>
				<td width="17%" class="cashLabeltd"><input onblur="findTotalOut()" type="text" name="out" id="out6" tabindex="24"/></td>
			</tr>			
			</table>
		</div>
		
		<div id="cashFoot">
		<table class="cashFooter" width="62%">
		<tr class="oddRow">
			<td width="18%" class="cashLabeltd headerFiller"></td>
			<td width="17%" class="cashLabeltd"><div name="totalIn" id="totalIn" class="finalDiv"/>0.00</div></td>
			<td width="2%" class="cashLabeltd headerFiller"></td>
			<td width="18%" class="cashLabeltd headerFiller"></td>
			<td width="17%" class="cashLabeltd"><div name="totalOut" id="totalOut" class="finalDiv"/>0.00</div></td>
		</tr>
		</table>
		</div>
		
		<div id="overShortContainer">
		<table id="overShortTable" width="100%">
		<tr class="oddRow">
			<td width="50%" class="cashLabeltd">Cash Should Be</td>
			<td width="50%" class="cashLabeltd" type="text"><div id="shouldBe">0.00</div></td>
		</tr>
		<tr class="evenRow">
			<td class="cashLabeltd">Actual Count</td>
			<td class="cashLabeltd"><div id="actualCount">0.00</div></td>
		</tr>
		<tr class="oddRow">
			<td class="cashLabeltd">Over/Short</td>
			<td class="cashLabeltd"><div id="overShort">0.00</div></td>
		</tr>
		</table>
		</div>
		
		
		</div>	
	<script type="text/javascript">
		function findTotalIn(){
			var arr = document.getElementsByName('in');
			var tot=0;
			for(var i=0;i<arr.length;i++){
				if(parseFloat(arr[i].value))
				tot += parseFloat(arr[i].value);
			}
		document.getElementById('totalIn').innerHTML = tot.toFixed(2);
		sumAllCash();
		
		}	

		function findTotalOut(){
			var arr = document.getElementsByName('out');
			var tot=0;
			for(var i=0;i<arr.length;i++){
				if(parseFloat(arr[i].value))
				tot += parseFloat(arr[i].value);
			}
		document.getElementById('totalOut').innerHTML = tot.toFixed(2);
		sumAllCash();
		}	

		function sumAllCash(){
			finalizeOverShort();
			var arr = document.getElementsByName('sum');
			var shouldBe = 0;
			shouldBe = parseFloat(document.getElementById('shouldBe').innerHTML);
			var sum = 0;
			for(var i=0;i<arr.length;i++){
				if(parseFloat(arr[i].innerHTML))
				sum += parseFloat(arr[i].innerHTML);
			}
			document.getElementById('sumCash').innerHTML = sum.toFixed(2);
			document.getElementById('actualCount').innerHTML = sum.toFixed(2)
			var overShortFixed = sum - shouldBe;
			document.getElementById('overShort').innerHTML = overShortFixed.toFixed(2);
		}
		
		function sum100s(){
			var numBills = 0, numRolls = 0, sumBills = 0, sumRolls = 0, total = 0;
			var denomBills = 100;
			var denomRolls = 10000;
			if(document.getElementById('bills100').value == "")
				numBills = 0;
				else
				numBills = parseInt(document.getElementById('bills100').value);
			if(document.getElementById('rolls100').value == "")
				numRolls = 0;
				else
				numRolls = parseInt(document.getElementById('rolls100').value);	
				
			sumBills = numBills * denomBills;
			sumRolls = numRolls * denomRolls;
			total = sumBills + sumRolls;
			document.getElementById('sum100').innerHTML = total.toFixed(2);
			sumAllCash();
		}
		function sum50s(){
			var numBills = 0, numRolls = 0, sumBills = 0, sumRolls = 0, total = 0;
			var denomBills = 50;
			var denomRolls = 5000;
			if(document.getElementById('bills50').value == "")
				numBills = 0;
				else
				numBills = parseInt(document.getElementById('bills50').value);
			if(document.getElementById('rolls50').value == "")
				numRolls = 0;
				else
				numRolls = parseInt(document.getElementById('rolls50').value);	
				
			sumBills = numBills * denomBills;
			sumRolls = numRolls * denomRolls;
			total = sumBills + sumRolls;
			document.getElementById('sum50').innerHTML = total.toFixed(2);
			sumAllCash();
		}
		function sum20s(){
			var numBills = 0, numRolls = 0, sumBills = 0, sumRolls = 0, total = 0;
			var denomBills = 20;
			var denomRolls = 2000;
			if(document.getElementById('bills20').value == "")
				numBills = 0;
				else
				numBills = parseInt(document.getElementById('bills20').value);
			if(document.getElementById('rolls20').value == "")
				numRolls = 0;
				else
				numRolls = parseInt(document.getElementById('rolls20').value);	
				
			sumBills = numBills * denomBills;
			sumRolls = numRolls * denomRolls;
			total = sumBills + sumRolls;
			document.getElementById('sum20').innerHTML = total.toFixed(2);
			sumAllCash();
		}
		function sum10s(){
			var numBills = 0, numRolls = 0, sumBills = 0, sumRolls = 0, total = 0;
			var denomBills = 10;
			var denomRolls = 1000;
			if(document.getElementById('bills10').value == "")
				numBills = 0;
				else
				numBills = parseInt(document.getElementById('bills10').value);
			if(document.getElementById('rolls10').value == "")
				numRolls = 0;
				else
				numRolls = parseInt(document.getElementById('rolls10').value);	
				
			sumBills = numBills * denomBills;
			sumRolls = numRolls * denomRolls;
			total = sumBills + sumRolls;
			document.getElementById('sum10').innerHTML = total.toFixed(2);
			sumAllCash();
		}
		function sum5s(){
			var numBills = 0, numRolls = 0, sumBills = 0, sumRolls = 0, total = 0;
			var denomBills = 5;
			var denomRolls = 500;
			if(document.getElementById('bills5').value == "")
				numBills = 0;
				else
				numBills = parseInt(document.getElementById('bills5').value);
			if(document.getElementById('rolls5').value == "")
				numRolls = 0;
				else
				numRolls = parseInt(document.getElementById('rolls5').value);	
				
			sumBills = numBills * denomBills;
			sumRolls = numRolls * denomRolls;
			total = sumBills + sumRolls;
			document.getElementById('sum5').innerHTML = total.toFixed(2);
			sumAllCash();
		}
		function sum1s(){
			var numBills = 0, numRolls = 0, sumBills = 0, sumRolls = 0, total = 0;
			var denomBills = 1;
			var denomRolls = 100;
			if(document.getElementById('bills50').value == "")
				numBills = 0;
				else
				numBills = parseInt(document.getElementById('bills1').value);
			if(document.getElementById('rolls1').value == "")
				numRolls = 0;
				else
				numRolls = parseInt(document.getElementById('rolls1').value);	
				
			sumBills = numBills * denomBills;
			sumRolls = numRolls * denomRolls;
			total = sumBills + sumRolls;
			document.getElementById('sum1').innerHTML = total.toFixed(2);
			sumAllCash();
		}
		function sumQuarters(){
			var numBills = 0, numRolls = 0, sumBills = 0, sumRolls = 0, total = 0;
			var denomBills = .25;
			var denomRolls = 10;
			if(document.getElementById('billsQuarters').value == "")
				numBills = 0;
				else
				numBills = parseInt(document.getElementById('billsQuarters').value);
			if(document.getElementById('rollsQuarters').value == "")
				numRolls = 0;
				else
				numRolls = parseInt(document.getElementById('rollsQuarters').value);	
				
			sumBills = numBills * denomBills;
			sumRolls = numRolls * denomRolls;
			total = sumBills + sumRolls;
			document.getElementById('sumQuarters').innerHTML = total.toFixed(2);
			sumAllCash();
		}
		function sumDimes(){
			var numBills = 0, numRolls = 0, sumBills = 0, sumRolls = 0, total = 0;
			var denomBills = .1;
			var denomRolls = 5;
			if(document.getElementById('billsDimes').value == "")
				numBills = 0;
				else
				numBills = parseInt(document.getElementById('billsDimes').value);
			if(document.getElementById('rollsDimes').value == "")
				numRolls = 0;
				else
				numRolls = parseInt(document.getElementById('rollsDimes').value);	
				
			sumBills = numBills * denomBills;
			sumRolls = numRolls * denomRolls;
			total = sumBills + sumRolls;
			document.getElementById('sumDimes').innerHTML = total.toFixed(2);
			sumAllCash();
		}
		function sumNickels(){
			var numBills = 0, numRolls = 0, sumBills = 0, sumRolls = 0, total = 0;
			var denomBills = .05;
			var denomRolls = 2;
			if(document.getElementById('billsNickels').value == "")
				numBills = 0;
				else
				numBills = parseInt(document.getElementById('billsNickels').value);
			if(document.getElementById('rollsNickels').value == "")
				numRolls = 0;
				else
				numRolls = parseInt(document.getElementById('rollsNickels').value);	
				
			sumBills = numBills * denomBills;
			sumRolls = numRolls * denomRolls;
			total = sumBills + sumRolls;
			document.getElementById('sumNickels').innerHTML = total.toFixed(2);
			sumAllCash();
		}
		function sumPennies(){
			var numBills = 0, numRolls = 0, sumBills = 0, sumRolls = 0, total = 0;
			var denomBills = .01;
			var denomRolls = .50;
			if(document.getElementById('billsPennies').value == "")
				numBills = 0;
				else
				numBills = parseInt(document.getElementById('billsPennies').value);
			if(document.getElementById('rollsPennies').value == "")
				numRolls = 0;
				else
				numRolls = parseInt(document.getElementById('rollsPennies').value);	
				
			sumBills = numBills * denomBills;
			sumRolls = numRolls * denomRolls;
			total = sumBills + sumRolls;
			document.getElementById('sumPennies').innerHTML = total.toFixed(2);
			sumAllCash();
		}
		function finalizeOverShort(){
			var startAmount = 0, income = 0, outGo = 0;
			startAmount = parseFloat(document.getElementById('startCashAmount').value);
			income = parseFloat(document.getElementById('totalIn').innerHTML);
			outGo = parseFloat(document.getElementById('totalOut').innerHTML);
			var shouldBeFixed = startAmount + income - outGo; 
			document.getElementById('shouldBe').innerHTML = shouldBeFixed.toFixed(2);
		}
		function increaseDateByOne(){
			document.getElementById("date").stepUp(1);
			clearPage();
		}
		function decreaseDateByOne(){
			document.getElementById("date").stepDown(1);
			clearPage();
		}
		function loadCurDate(){
			document.getElementById("date").valueAsDate = new Date();
		}
		window.onload = function() {
			loadCurDate();
		};
		function clearPage(){
		document.getElementById('startCashAmount').value = "";
		document.getElementById('inLabel1').value = "";
		document.getElementById('in1').value = "";
		document.getElementById('inLabel2').value = "";
		document.getElementById('in2').value = "";
		document.getElementById('inLabel3').value = "";
		document.getElementById('in3').value = "";
		document.getElementById('inLabel4').value = "";
		document.getElementById('in4').value = "";
		document.getElementById('inLabel5').value = "";
		document.getElementById('in5').value = "";
		document.getElementById('inLabel6').value = "";
		document.getElementById('in6').value = "";
		document.getElementById('outLabel1').value = "";
		document.getElementById('out1').value = "";
		document.getElementById('outLabel2').value = "";
		document.getElementById('out2').value = "";
		document.getElementById('outLabel3').value = "";
		document.getElementById('out3').value = "";
		document.getElementById('outLabel4').value = "";
		document.getElementById('out4').value = "";
		document.getElementById('outLabel5').value = "";
		document.getElementById('out5').value = "";
		document.getElementById('outLabel6').value = "";
		document.getElementById('out6').value = "";
		document.getElementById('bills100').value = "";
		document.getElementById('rolls100').value = "";
		document.getElementById('bills50').value = "";
		document.getElementById('rolls50').value = "";
		document.getElementById('bills20').value = "";
		document.getElementById('rolls20').value = "";
		document.getElementById('bills10').value = "";
		document.getElementById('rolls10').value = "";
		document.getElementById('bills5').value = "";
		document.getElementById('rolls5').value = "";
		document.getElementById('bills1').value = "";
		document.getElementById('rolls1').value = "";
		document.getElementById('billsQuarters').value = "";
		document.getElementById('rollsQuarters').value = "";
		document.getElementById('billsDimes').value = "";
		document.getElementById('rollsDimes').value = "";
		document.getElementById('billsNickels').value = "";
		document.getElementById('rollsNickels').value = "";
		document.getElementById('billsPennies').value = "";
		document.getElementById('rollsPennies').value = "";
		document.getElementById('totalIn').innerHTML = "0.00";
		document.getElementById('totalOut').innerHTML = "0.00";
		document.getElementById('shouldBe').innerHTML = "0.00";
		document.getElementById('actualCount').innerHTML = "0.00";
		document.getElementById('overShort').innerHTML = "0.00";
		document.getElementById('sum100').innerHTML = "0.00";
		document.getElementById('sum50').innerHTML = "0.00";
		document.getElementById('sum20').innerHTML = "0.00";
		document.getElementById('sum10').innerHTML = "0.00";
		document.getElementById('sum5').innerHTML = "0.00";
		document.getElementById('sum1').innerHTML = "0.00";
		document.getElementById('sumQuarters').innerHTML = "0.00";
		document.getElementById('sumDimes').innerHTML = "0.00";
		document.getElementById('sumNickels').innerHTML = "0.00";
		document.getElementById('sumPennies').innerHTML = "0.00";
		document.getElementById('sumCash').innerHTML = "0.00";
		}
		</script>
		
		
    </section><!-- #faq -->

  </main>

  

<!-- InstanceEndEditable --><!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-lg-2 col-md-6 footer-info">
          <img src="../img/Armitage_logo.jpg" class="img-fluid" alt="Armitage Accounting" style="max-width: 150px;"/> </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://www.armitageaccounting.com/">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Location</h4>
            <p>
              4125 Bridgewater Circle<br>
				Vadnais Heights, MN 55127<br>
            </p>
          </div>

        <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>736.229.3201<br>
                <span class="text-white"><script type="text/javascript" language="javascript">
                <!-- // Generated by http://rumkin.com/tools/mailto_encoder
                ML="</unt\".@=ih a:geco>flrm";
                MI="0<;:E?C85F<9D4A=93CA7<EF94<>?<@@A23493>6@AF5B93CA7<EF94<>?<@@A23493>6@AF01<B";
                OT="";
                for(j=0;j<MI.length;j++){
                OT+=ML.charAt(MI.charCodeAt(j)-48);
                }document.write(OT);
                // --></script>

                </span>
				<br>
            </p>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright Armitage Accounting. All Rights Reserved
      </div>
   
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib/isotope/isotope.pkgd.min.js"></script>
  <script src="../lib/lightbox/js/lightbox.min.js"></script>
  <script src="../lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

</body>
<!-- InstanceEnd --></html>
