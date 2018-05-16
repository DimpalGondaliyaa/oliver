<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>CodeIgniter - <?php echo $pageTitle; ?></title>
    <!-- CSS-->
    <link href="<?php echo base_url(); ?>html/css/style.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

           
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">

  

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

       <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Data Table Resposnive Css -->

    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.foundation.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.foundation.min.css">



    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

     <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>


    <script src="<?php echo base_url(); ?>html/js/script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- Data Table Responsive JS -->

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.foundation.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.foundation.min.js"></script>


    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>" rel="stylesheet">
    <?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <header>
      <div class="main-header navbar-fixed">
         <ul id="slide-out" class="sidenav">
          <li><a href="#!">First Sidebar Link</a></li>
          <li><a href="#!">Second Sidebar Link</a></li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header">Dropdown<i class="material-icons">arrow_drop_down</i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="#!">First</a></li>
                    <li><a href="#!">Second</a></li>
                    <li><a href="#!">Third</a></li>
                    <li><a href="#!">Fourth</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
        </ul>
        <nav>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <div class="nav-wrapper">
            <a href="<?php echo base_url(); ?>Home" class="brand-logo"><img src="<?php echo base_url(); ?>html/images/logo.png" class="responsive-img"></a>
              <ul class="right hide-on-med-and-down">
                  <li><a href="sass.html">J'achète</a></li>
                  <li><a href="badges.html">je Vends</a></li>
                  <li><a href="<?php echo base_url(); ?>Operation">fonctionnement </a></li>
                  <li><a href="collapsible.html">blog </a></li>
                  <li><a href="<?php echo base_url(); ?>Contact">Contact</a></li>
                  <li><button class="none-btn"> | </button></li>
                  <li><a class="waves-effect waves-light btn userreegbtn">S'inscrire</a></li>
                  <li><a class="waves-effect waves-light btn userlogbtn">se connecter</a></li>
              </ul>
            </div>
        </nav>
      </div>
    </header>
<body>


<!--=========================register model=========================-->
<!-- Modal Structure -->
  <div id="user_register" class="modal modal-fixed-footer">
    <div class="modal-content ">
      <?php $this->load->view("user_register");  ?>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat userregg">done</a>
    </div>
  </div>

  <!--=========================user_login model=========================-->
<!-- Modal Structure -->
  <div id="user_login" class="modal modal-fixed-footer">
    <div class="modal-content ">
      <?php $this->load->view("user_login");  ?>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat userlogg">done</a>
    </div>
  </div>
