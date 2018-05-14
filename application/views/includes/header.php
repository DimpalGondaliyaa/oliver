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


    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
            
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">

    <!-- Font-sccs --><!-- 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>html/js/script.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

       <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">



    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

     <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>


    <script src="<?php echo base_url(); ?>html/js/script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>" rel="stylesheet">
    <?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

    <header>
         <nav>
            <div class="nav-wrapper">
              <a href="#" class="brand-logo"><img src="<?php echo base_url(); ?>html/images/logo.png" class="responsive-img
                "></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">JavaScript</a></li>
              </ul>
            </div>
          </nav>
    </header>
<body>

    <div class="navdiv">
     <nav>
        <div class="nav-wrapper homenavwapp">
          <a href="#" class="brand-logo"><img src="<?php echo base_url(); ?>html/images/logo.png"></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down headul">
            <li><a href="sass.html">buy</a></li>
            <li><a href="badges.html">sell</a></li>
            <li><a href="collapsible.html">Operation </a></li>
             <li><a href="collapsible.html">blog </a></li>
              <li><a href="<?php echo base_url(); ?>Contact">Contact</a></li>
              <li><a class="waves-effect waves-light btn userreegbtn">register</a></li>
              <li><a class="waves-effect waves-light btn userlogbtn">login</a></li>
          </ul>

        </div>
     </nav>
    </div>
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
