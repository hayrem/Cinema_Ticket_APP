<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <div class="container">
    <div class="btn">
      <h1>Sorry page not found </h1>
      <button>
        <a href="/"><label>Go to Home page</label></a>
      </button>
    </div>
    <div class="img">
      <img src="../../assets/notfound.jpg"  alt="">
    </div>
  </div>

</body>

</html>

<style>
  body{
    font-family: sans-serif;
    display: flex;
    flex-direction: column;
    height: 90vh;
  }
  .container{
    display: flex;
    flex: 1;
    justify-content: center;
    align-items: center ;
    /* background: #000; */
  }
  .img{
    flex: 1;
  }

  .btn{
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
  button{
    padding: 10px;
    background: blue;
    border-radius: 10px;
    border: none;
    color: white;
  }
  label{
    color: white;
  }
  a{
    text-decoration: none;
  }
</style>