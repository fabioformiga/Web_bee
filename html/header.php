<!-- header.php -->
<html lang="pt">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="refresh" content="60" > 
            <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script> -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <script language = "javascript" src ="script.js"></script>
      <!-- titulo da janela -->
     <title> Dashboard</title> 
  </head>
<!-- linha de cima com botões sair e titulo -->
<body>
    <nav class="navbar navbar-dark static-top bg-dark flex-md-nowrap p-0 shadow">
          <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"> Dashboard Plataforma de Monitorização</a>
      <ul class="navbar-nav px-3 ">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="./thanks.php">Sair</a>
        </li>
      </ul>
    </nav>

    <!-- barra lateral -->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
          <div class="sidebar-sticky">
            <h2 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
              <span>Gráficos</span>
              <!-- <a class="d-flex align-items-center text-warning" href=""aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
              </a> -->
            </h2>

            <ul class="nav flex-column mb-1">
            <div class="btn-group mt-2 mx-auto  w-100">
                <li class="nav-item">
                  <a class="collapsed card-link" data-toggle="collapse" href="#peso">
                    <button type="button" class="btn btn-outline-secondary">Peso</button>
                  </a>
                </li>
              </div> 
              <div class="btn-group mt-2 mx-auto  w-100">
                <li class="nav-item">
                <a class="collapsed card-link" data-toggle="collapse" href="#hum">
                  <button type="button" class="btn btn-outline-secondary">Humidade</button>
                  </a>

                </li>
              </div> 
              <div class="btn-group mt-2 mx-auto w-100 ">
                <li class="nav-item">
                <a class="collapsed card-link" data-toggle="collapse" href="#temp">
                  <button type="button" class="btn btn-outline-secondary">Temperatura</button>
                  </a>
                </li>
              </div> 
            </ul>
          </div>
        </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h2> Valores obtidos nas ultimas 48 horas</h2>
          <div class="btn-group">		
            <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Seleção de colmeias
                  </button>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <?php
                    /* Database connection settings */
                    $host = 'localhost';
                    $user = 'admin';
                    $pass = '123qweasd';
                    $db = 'test'; //database
                    $id_colmeia = '';

                    $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
                    $sql = "SELECT DISTINCT id_colmeia FROM medida ";
                    $result = mysqli_query($mysqli, $sql);

                    while ($row = mysqli_fetch_array($result)) {

                      $id_colmeia = $row['id_colmeia'];  
                      echo '<a class="dropdown-item" href="#">Colmeia '.$id_colmeia.'</a>';
              
                    }

                ?>
              </div>
            </div>
              
      </div>
    </div>
  
    
