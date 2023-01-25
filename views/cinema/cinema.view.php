<?php
    require "../partials/head.php";
    require "../partials/nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cinema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="body bg-dark d-flex flex-column container">
    <div class="card m-3 d-flex flex-lg-row" >
        <img src="../images/cinema.png" class="card-img-top" style="width: 12rem;">
        <div class="card-body">
          <h4 class="card-title fw-bold">Cinema Ticket PNC</h4>
          <p class="card-text">Street 371, Sangkat Obek Kaorm, Khan Sen Sok Phnom Penh</p>
          <p>096 847 8385</p>
          <a href="#" class="btn btn-danger">Show Items</a>
        </div>
    </div>
    <div class="card m-3 d-flex flex-lg-row">
        <img src="../images/cinema.png" class="card-img-top" style="width: 12rem;">
        <div class="card-body">
          <h4 class="card-title fw-bold">Cinema Ticket AEON Sen Sok</h4>
          <p class="card-text">Street 1003, Phnom Penh (Aeon Mall Sen Sok) Aeon Sen Sok</p>
          <p>087 901 000</p>
          <a href="#" class="btn btn-danger">Show Items</a>
        </div>
    </div>
    <div class="card m-3 d-flex flex-lg-row" >
        <img src="../images/cinema.png" class="card-img-top" style="width: 12rem;">
        <div class="card-body">
          <h4 class="card-title fw-bold">Cinema Ticket SORYA</h4>
          <p class="card-text">#13-61, Street 63, Sangkat Phsar Thmei 1,Khan Daun Penh Phnom Penh (Sorya Center Point)</p>
          <p>087 666 210</p>
          <a href="#" class="btn btn-danger">Show Items</a>
        </div>
    </div>
</body>
</html>
<?php require "../partials/footer.php"; ?>
