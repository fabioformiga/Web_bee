<!DOCTYPE html>
<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
<body>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
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
 <?php echo $id_colmeia?>


    </main>

</body>
</html> 