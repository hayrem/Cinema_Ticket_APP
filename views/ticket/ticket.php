<h1 class="text-white " style="margin:40px; border-radius:10px 10px 10px 10px ; background:#DC2026;; width:18%; text-align: center;" >View ticket</h1>
<div id="print-area-3" class="print-area">
	
	<div class="container bg-danger p-4">
		
		<div class="ticket">
			<div class="left">
				<div class="image card-ticket ">
					<img src="https://www.businessdestinations.com/wp-content/uploads/2017/08/D031_rt.jpg " alt="" srcset="">
				</div>
			<div class="ticket-info">
				<p class="date">
					<span> </span>
				</p>
				<div class="show-name">
					<h1> </h1>
					<h2>  </h2>
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
		
		
		
		<div class="print d-flex justify-content-between">
			<div style="text-align:right;"><a class="no-print" id="printing-css"  href="javascript:printDiv('print-area-3');">Print</a></div>
		</div>
		<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
		<script>
	function printDiv(elementId) {
    var a = document.getElementById('printing-css').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}</script>
	</div>
</div>
<?php
require "views/partials/footer.php";

?>
