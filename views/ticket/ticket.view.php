<div class="ticket mb-4" id="imgItem">
	<div class="left">
		<div class="image card-ticket ">
			<img src="../../assets/PNC cinema.png" alt="" srcset="">
		</div>
		<div class="ticket-info">
			<p class="title">
				<span>Harry Potter</span>
			</p>
			<div class="show-name">
				<h2> Rem Hay</h2>
			</div>
			<div class="date-time">
				<p> Thursday 16 Feb 2023 / 6:00 PM</p>
			</div>
			<p class="location">
				<span>Street 371, Sangkat Obek Kaorm, Khan Sen Sok Phnom Penh</span>
			</p>
		</div>
	</div>
	<div class="right">
		<div class="right-info-container">
			<div class="show-name">
				<h1>Harry Potter</h1>
				<h2>Rem Hay</h2>
			</div>
			<div class="date-time">
				<p>16 Feb 2023 / 6:00 PM</p>
			</div>
			
			<p class="seat-number">SEAT: A1</p>
		</div>
	</div>
</div>
<div class="container" style="margin-left:9.9rem;">
	<div class="print" >
		<span class="mb-4">
			<button onclick="changeToImg()" class="btn btn-primary text-white" >Print Ticket <i class="fas fa-print"></i></button>
			<a id="download" class="font-lg download mr-3 text-white ms-3">
          		<i class="fas fa-download"></i>
        	</a>
		</span>
		<div id="sreenshot" class="card-body sreenshot mt-4" style="width:90%;">
			<!-- !--  --> 
		</div>
	</div>
</div>
<?php
require "views/partials/footer.php";
?>