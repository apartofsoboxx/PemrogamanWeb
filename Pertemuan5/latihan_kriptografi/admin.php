<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="style/style.css">

    <title>ecommerce</title>
  </head>
  <body>

    
   
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/1649853749takapedia.png" class="img-fluid">

          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">TAKAPEDIA</a>
              </li>
            </ul>
            <form class="container-fluid">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Produk" aria-label="Username" aria-describedby="basic-addon1">
                <span class="input-group-text" id="basic-addon1">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </span>
               
              </div>
            </form>
            <ul className="navbar-nav ml-auto">
              <div class="navbar-nav">
                <li class="nav-item ">
                  <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
                </li>

                  <li class="nav-item ">
                    <a class="nav-link" href="#"><i class="fas fa-envelope"></i></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </a>
                    </ul>
                  </li>
              </div>

            </ul>
          </div>
         
        </div>
      </nav>



      <!-- slider -->
      <div class="container slide">
        <div class="row">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/1659782468WEBSITE-BANNER-TAKAPEDIA.png" class="d-block w-100 img-fluid imageslider" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    
      <!-- end slider -->

      <!-- produk -->
    <div class="container produk">
      <div class="row">
        <h4>TAKAPEDIA melayani
        </h4>
          <div class="col-md-2">
            <div class="card">
              <img src="img/1662550229str dan twl-01.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Pre Order Starlight Murah</h5>
                <h4></h4>
               
                <a href="#" class="btn btn-primary">Order</a>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="img/1659718639diamond fast-01.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Diamond FAST</h5>
                <h4></h4>
                
                <a href="#" class="btn btn-primary">Order</a>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="img/1659718618jasa sewa room tournament-01.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Jasa Sewa Room Tournament</h5>
                <h4></h4>
               
                <a href="#" class="btn btn-primary">Order</a>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="img/1659720027jasa joki video montage-01.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Joki Video Montage</h5>
                <h4></h4>
                
                <a href="#" class="btn btn-primary">Order</a>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="img/1659720013jasa joki classic-01.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Joki Classic</h5>
                <h4></h4>
               
                <a href="#" class="btn btn-primary">Order</a>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="img/1659719842jasa joki rank-01.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Joki Rank</h5>
                <h4></h4>
               
                <a href="#" class="btn btn-primary">Order</a>
              </div>
            </div>
          </div>
          
      </div>
    </div>




      <!-- end Produk -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
