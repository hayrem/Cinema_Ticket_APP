<h1 class="text-white " style="margin:40px; border-radius:10px 10px 10px 10px ; background:#DC2026;; width:18%; text-align: center;" >View ticket</h1>
		
<div id="imgItem" class="container">
<div class="container bg-danger p-3">
		
		<div class="ticket" id="printing-css">
			<div class="left">
				<div class="image card-ticket ">
				</div>
			<div class="ticket-info">
				<p class="date">
					<span> </span>
				</p>
				<div class="show-name">
					<h1> </h1>
					<h2></h2>
				</div>
				<div class="time">
					<p>  <span>TO</span></p>
				</div>
				<p class="location">
					<span>Street 371, Sangkat Obek Kaorm, Khan Sen Sok Phnom Penh</span>
				</p>
			</div>
		</div>
		<div class="right">
			<div class="right-info-container">
				<div class="show-name">
					<h1></h1>
				</div>
				<div class="time">
					<p> <span>TO</span></p>
				</div>
				
				<p class="seat-number">SEAT
					
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="card">
		<div class="card-header bg-success d-flex justify-content-between align-items-center">
		<h3>Ticket</h3>
		<span>
		<a id="download" class="font-lg download mr-3 text-white ">
			<button onclick="changeToImg()" class="btn btn-warning text-white me-3">Print Ticket <i class="fas fa-print"></i></button>
          	<i class="fas fa-download"></i>
        </a>
        </span>
      </span>
    </div>
    <div id="sreenshot" class="card-body sreenshot">
    </div>
  </div>
</div>
<?php
require "views/partials/footer.php";
?>
