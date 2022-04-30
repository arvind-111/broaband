

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./br.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 

</head>
<body>
    <div cladd="justify-content-center " >
<ul class="nav justify-content-center br-line">
  <li class="nav-item" id="brname">
    <a class="nav-link active" aria-current="page" href="#">FIBER NET </a>
  </li>
  <li class="nav-item" id="dist">
    <a class="nav-link" href="#">INTERNET PLANS </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#cont">CONTACT US</a>
  </li>
  <form method="get" action="./front.php">
    <button type="submit" class="btn btn-primary">LOGIN</button>
</form>
  
</ul>
</div>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="images/broadband.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item" >
      <img src="./images/broadband.webp" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="./images/br.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<div class="w-50 m-auto">
  <h1 class="hding" id="cont">CONTACT US </h1>
  <form action="form.php" method="post" autocomplete="off">
  <div class="form-group">
    <label >NAME</label>
    <input type="text" name="name" autocomplete="off" class="form-control">
  </div>
  <div class="form-group">
    <label >EMAIL</label>
    <input type="text" name="email" autocomplete="off" class="form-control">
  </div>
  <div class="form-group">
    <label >MOBILE</label>
    <input type="text" name="mobile" autocomplete="off" class="form-control">
  </div>
  <div class="form-group">
    <label >ADDRESS</label>
    <input type="text" name="address" autocomplete="off" class="form-control">
  </div>
<button type="submit" class="btn btn-primary">SUBMIT</button>
</form></div>
<footer   >
  
  <pre class="p-3 bg-dark text-white text-center" id="foot">Author: ARVIND       Copyright &copy; 2022 The BROADBAND WEB APP.<br>
  <a href="mailto:arvindyadavjun1@gmail.com">arvindyadvjun1@gmail.com</a>
 
</pre>

</footer>
</body>
</html>