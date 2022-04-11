<html>
<head>
    <title>Spark Foundation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link href = "https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body background="img/img6.jpg"> 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a href="home.php" class="navbar-brand">
                <img src="img/logo.jfif" height="60" alt="CoolBrand">
            </a>
    <a class="navbar-brand" href="#">SPARK FUNDS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class = "w-50 m-auto" >
    <div class = "py-5" >
    <h2 class ="text-center">Login Here</h2>
    </div>
    <div>
       <form action="UserInfo.php" method="post">
           <div class="form-group">
               <label>Enter UserName</label>
               <input type="text" name="user" autocomplete ="off" class="form-control">
           </div>
           <div class="form-group">
               <label>Enter Email</label>
               <input type="Email" name="email" autocomplete ="off" class="form-control">
           </div>
           <div class="form-group">
               <label>Enter Mobile Number</label>
               <input type="number" name="mobile" autocomplete ="off" class="form-control">
           </div>
           <button type="submit" class ="btn btn-success">Login</button>
       </form> 
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</htm>
