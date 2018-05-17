<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/2.22.0/mediaelementplayer.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/2.22.0/mediaelement-and-player.min.js"></script>
<style type="text/css">
    @import 'https://fonts.googleapis.com/css?family=Lato';

* {
    outline: none;
}

body {
    background: ghostwhite;
    font-family: 'Lato';
}

.mainBox {
    position: relative;
    overflow: hidden;
    height: 100vh;
    padding: 25px;
    text-align: center;
    top: 100px;
}
.aBox{
        position: absolute;
    width: 50%;
    height: 300px;
    top: 40px;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    text-align: center;
    padding: 50px 5%;
    box-sizing: border-box;
    box-shadow: 0 0 21px 0px rgba(0,0,0,0.3);
    border-radius: 10px;
}

.cont{
    margin-bottom: 28px;
}

.cont h3 {
    font-family: 'Lato';
    font-size: 28px;
    margin: 0 0 10px 0;
    color: #f8f8ffb0;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-shadow: 0px 2px 2px #0000006b;
}

a.btn.btn-back {
    background: linear-gradient(0deg,#000,#000);
    padding: 10px 25px;
    display: inline-block;
    margin-bottom: 25px;
    border-radius: 50px;
    color: #c3b2ff;
    text-decoration: none;
    border: 1px solid #0000;
    box-shadow: 0px 2px 5px #00000065;
}

.aBox {
    position: relative;
    width: 50%;
    height: 300px;
    top: 40px;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    text-align: center;
    padding: 50px 5%;
    box-sizing: border-box;
    box-shadow: 0 0 21px 0px rgba(0,0,0,0.3);
    border-radius: 10px;
    background: linear-gradient(0deg,#002f84c9,#7900d494);
}












audio.audio {
    border: 1px solid #f8f8ff;
    padding: 10px 50px;
    border-radius: 50px;
    box-shadow: 0px 5px 15px #0000006b;
    width: 100%;
    margin: 0 auto;
    max-width: 300px;
    background: ghostwhite;
}
audio
{
-webkit-transition:all 0.2s linear;
-moz-transition:all 0.2s linear;
-o-transition:all 0.2s linear;
transition:all 0.2s linear;
-moz-box-shadow: 2px 2px 4px 0px #006773;
-webkit-box-shadow:  2px 2px 4px 0px #006773;
box-shadow: 2px 2px 4px 0px #006773;
-moz-border-radius:7px 7px 7px 7px ;
-webkit-border-radius:7px 7px 7px 7px ;
border-radius:7px 7px 7px 7px ;
}
audio:hover, audio:focus, audio:active
{
-webkit-box-shadow: 0px 2px 18px rgba(0,0, 0, 0.4);
-moz-box-shadow: 0px 2px 18px rgba(0,0, 0, 0.4);
box-shadow: 0px 2px 18px rgba(0,0, 0, 0.4);
-webkit-transform: scale(1);
-moz-transform: scale(1);
transform: scale(1);
}






</style>

 <?php 
    $e=$this->session->userdata('email');
    $u=$this->db->query("SELECT * FROM payments_paypal where user='".$e."' ORDER BY id DESC LIMIT 1");
    $u_row=$u->row_array();
    $a_id=$this->session->userdata('id');
    $a=$this->db->query("SELECT * FROM products WHERE id='".$a_id."'");
    $a_data=$a->row_array();
    ?>

    <input type="hidden" name="audioData" id="audioData" value="<?php echo $a_data['audio_file'];?>">
