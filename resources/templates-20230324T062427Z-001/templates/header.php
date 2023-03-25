<?php

$url_base="http://localhost/empresa/";

    if(!isset($_SESSION['solicitante'])){
        header("Location".$url_base."login.php");
    }else{
        echo "Error";
    }
?>
<!doctype html>
<html lang="en">

<head>
  <title>Seleccion de usuarios</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- <link rel="icon" type="image/x-icon" href="../../logo_prometalicos.png"> -->
  <style>
    .container-fluid{
        padding: 0;
    }
    header{
        background-color: black;
        padding-top: 2rem;
        width:454%;
        margin:0;
        padding: 5px 12px;
    text-decoration: none;
    font-weight: bold;
    color: black;
    display: flex;
    flex-direction: column;
    text-align: center;
    padding-bottom: 25px;
        
    }
    .logoprom{
    width: 170px ;
    height:70px ;
    /* padding: 10px 10px; */
    background-color:transparent;
    color: black;
    display: grid;
    grid-auto-flow: column;
    cursor: pointer;
    border: 0px;
    }
    .navbar{
        width: 454%;
    }
   
  </style>
</head>

<body id="bdy">
    <style>
    body{
        background-color: whitesmoke;
    }
    </style>
    <header>
        <a href="https://oferta.senasofiaplus.edu.co/"><img src="../../img/logo-mii-sena_claro.png" class="img-thumbnail logoprom" alt="..."></a>
    </header>
    
    <div class="container-fluid">
  <nav class="navbar navbar-expand navbar-dark bg-dark">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <!-- <a class="nav-link" href="<?php echo $url_base; ?>"header.php>Hacer Solicitud <span class="sr-only">(actual)</span></a> -->
                <a class="btn btn-success" href="<?php echo $url_base; ?>index.php" role="button"><i class="bi bi-card-list"> Perfil </i><a>
            </li>
            <li class="nav-item">
                <!-- <a class="nav-link" href= "<?php echo $url_base;?>secciones/usuarios/">Usuarios</a> -->
                <a class="btn btn-light" href="<?php echo $url_base; ?>secciones/usuarios/" role="button"><i class="bi bi-person-lines-fill"> Aprendices </i><a>
            </li>

            <!-- <li class="nav-item">
                <a class="btn btn-success" href="<?php echo $url_base; ?>cerrar.php" role="button">Cerrar Sesion<a>
            </li> -->
        </ul>
    </nav>
</div>

                
              
    </nav>
</div>
<?php
// if(isset($_GET['mensaje'])){?>



 <script>
//     Swal.fire({icon:"success", title:"<?php echo $_GET['mensaje'];?>"});
// </script>
 <?php  ?>
  <!-- <main class="container">
    <div class="mb-3">
        <label for="" class="form-label">City</label>
        <select class="form-select form-select-lg" name="" id="">
            <option selected>Select one</option>
            <option value="">New Delhi</option>
            <option value="">Istanbul</option>
            <option value="">Jakarta</option>
        </select>
    </div> -->
    <!-- <ol>
        
    </ol> -->