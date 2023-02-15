<div class="container-movecards mt-4">
	<div class="row justify-content-center mb-3 " style="width: 100%;">
		<div class="col-md-12 col-xl-10 bg-danger">
			<div class="card rounded-3">
				<div class="card-body p-0">
					<div class="row">
						<div class="col-md-3 col-lg-3 col-xl-2 mb-4 mb-lg-0">
							<div class="bg-image hover-zoom ripple rounded ripple-surface">
								<img src="../../assets/phnom-penh-cinema-low-resolution-logo-color-on-transparent-background.png" class="w-100" />
							</div>
						</div>
						<div class="col-md-6 col-lg-6 col-xl-6 p-3" style="width:65%;">
							<div class="col mt-1 mb-0  ">
								<h5 class="row"></h5>
								<span class="row mt-2"> Country: </span>
								<span class="row mt-2">Genre: </span>
								<span class="row mt-2">Release:</span>
							</div>
						</div>
						<div class="col-md-6 col-lg-2 col-xl-0  p-3">
							<div class="d-flex flex-row align-items-center mb-1">
								<h4 class="mb-1 me-1"></h4>
							</div>
						</div>
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
