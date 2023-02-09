<h1 class="text-white " style="margin:40px; border-radius:10px 10px 10px 10px ; background:#DC2026;; width:18%; text-align: center;" >View ticket</h1>
<?php
foreach ($tickets as $ticket):
?>
<div class="ticket">
	<div class="left">
		<div class="image card-ticket ">
			<img src="<?php echo $ticket["image"]?> " alt="" srcset="">
		</div>
		<div class="ticket-info">
			<p class="date">
				<span> <?php echo $ticket["name"]." ".$ticket["date"] ?></span>
			</p>
			<div class="show-name">
				<h1> <?php echo $ticket["first_name"]." ".$ticket["last_name"] ?></h1>
				<h2> <?php echo $ticket["title"] ?> </h2>
			</div>
			<div class="time">
				<p> <?php echo $ticket["time_start"]."s"." "."PM"?> <span>TO</span> <?php echo $ticket["time_end"]."s"." "."PM"?></p>
			</div>
			<p class="location">
				<span>Street 371, Sangkat Obek Kaorm, Khan Sen Sok Phnom Penh</span>
			</p>
		</div>
	</div>
	<div class="right">
		<div class="right-info-container">
			<div class="show-name">
				<h1><?php echo $ticket["first_name"]." ".$ticket["last_name"] ?></h1>
			</div>
			<div class="time">
				<p> <?php echo $ticket["time_start"]."s"." "."PM"?> <span>TO</span><?php echo $ticket["time_end"]."s"." "."PM" ?></p>
			</div>
			
			<p class="seat-number">SEAT
				<?php echo "seat number" ?>
			</p>
		</div>
	</div>
</div>
<button type="button" class="btn btn-save text-white">Save</button>
<?php endforeach; ?>
<?php
require "views/partials/footer.php";

?>
