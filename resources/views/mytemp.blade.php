<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Student-CRUD App- @yield('title') </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
      <div class="row">
      <div class="col-12">
        
    <header class="jumbotron" style="background-color:pink; color:white; ">
        <h1>Bir Shrestho Noor Mohammod Public Collage</h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
     
      <li class="nav-item">
        <a class="nav-link" href="/students/add">Add Student</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/students">View</a>
      </li>
    </ul>
  </div>
</nav>
    </header>
       </div>
     </div>
</div>
<div class="container-fluid">
      <div class="row">
      <div class="col-12">
    <section>
        @yield('mainarea')
    </section>
    </div>
     </div>
</div>
<div class="container-fluid">
      <div class="row">
      <div class="col-12">
    <footer class="" style="background-color:pink; color:white; padding:20px 5px;" >
        Copyright&copy.Masrukul@2022
    </footer>
    </div>
     </div>
</div>
</body>
</html>