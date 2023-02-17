<?php foreach($tickets as $ticket): ?>
<div style="width: 60%;" class="ticket mb-4 " id="imgItem">
	<div class="ticket-left">
		<div class="image-tikcet p-0 w-50">
			<img style="width: 90%;" src="../../assets/phnom-penh-cinema-low-resolution-logo-color-on-transparent-background.png" alt="" srcset="">
		</div>
		<div class="ticket-info w-100 p-3">
			<p class="title-ticket">
				<span>Harry Potter</span>
			</p>
			<div class="show-name">
				<h3><?=$ticket['first_name'] ?> <span class="ms-2"><?=$ticket['last_name'] ?></span> </h3>
			</div>
			<div class="date-time">
				<p><?=$ticket['date_show'] ," / ".$ticket['time_start'] ?> PM</p>
			</div>
			<p class="location">
				<span>Street 371, Sangkat Obek Kaorm, Khan Sen Sok Phnom Penh</span>
			</p>
		</div>
	</div>
	<div class="right">
		<div class="right-info-container">
			<div class="show-name">
				<h1 class="fs-4">Harry Potter</h1>
				<h3><?=$ticket['first_name'] ?> <span class="ms-2"><?=$ticket['last_name'] ?></span> </h3>
			</div>
			<div class="date-time">
			<p><?=$ticket['date_show'] ," / ".$ticket['time_start'] ?> PM</p>
			</div>
			<p class="seat-number">SEAT: A1</p>
		</div>
	</div>
</div>
<?php endforeach; ?>
<div class="container" style="margin-left:9.9rem;">
	<div class="print" >
		<span class="mb-4">
			<button onclick="changeToImg()" class="btn btn-primary text-white" >Print Ticket <i class="fas fa-print"></i></button>
			<a id="download" class="font-lg download mr-3 text-white ms-3">
          		<i class="fas fa-download" onclick="resetTheImageArea()"></i>
        	</a>
		</span>
	</div>
</div>
<div class="container d-flex justify-content-center;align-items-center;" style="width:62%">
	<div id="sreenshot" class="card-body sreenshot mt-4" style="width:40%;">
</div>
	<!-- !--  --> 
</div>
<?php
require "views/partials/footer.php";
?>