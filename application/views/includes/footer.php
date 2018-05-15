
 <footer class="page-footer footerrr">
          <div class="container">
            <div class="row" style="    max-width: 1200px;
    margin: 0 auto;">
              <div class="col s12 m2">
                <div class="footerlogo">
                  <img src="<?php echo base_url(); ?>html/images/logo.png">
                </div>
              </div>

              <div class="col s12 m3">
                <div class="footertitle">
                  about us
                </div>
                <ul class="aboutlist">
                  <li><a href="#">who are we</a></li>
                  <li><a href="#">The blog (the news of frauds on the net)</a></li>
                  <li><a href="#">Information about cookies</a></li>
                </ul>
              </div>

              <div class="col s12 m3">
                <div class="footertitle">
                  Wixicode.fr
                </div>
                <ul class="aboutlist">
                  <li><a href="#">Operation</a></li>
                  <li><a href="#">Buyer</a></li>
                  <li><a href="#">Seller</a></li>
                  <li><a href="#">Prices</a></li>
                  <li><a href="#">Litigation management</a></li>

                </ul>
              </div>

              <div class="col s12 m2">
                <div class="footertitle">
                  Resources
                </div>
                <ul class="aboutlist">
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Partners</a></li>
                  <li><a href="#">Contact Us</a></li>
                  </ul>
              </div>

              <div class="col s12 m2">
                <div class="footertitle">
                  Find us on
                </div>
                <ul class="aboutlist">
                  <a class="linkaa" href="#"><i class="fab fa-twitter"></i></a>
                  <a class="linkaa" href="#"><i class="fab fa-facebook-f"></i></a>
                  
                  </ul>
              </div>
              
             
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container coypcon">
            Legal Mentions Our General Regulations © 2018 Wixicode All rights reserved
            
            </div>
          </div>
        </footer>
  	 	
  	 	<input type="hidden" id="site_url" value="<?php echo site_url(); ?>" />
	  	<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
	  	<!--  Scripts-->
	  	<?php foreach($jsFiles as $fileName){ ?>
	  	<script src="<?php echo base_url(); ?>html/js/<?php echo $fileName; ?>"></script>
	  	<?php } ?>
	</body>
</html>

<style type="text/css">
.footerrr
{

	background:  #666666;
}
.footertitle
{
	    float: left;
    width: 100%;
    font-family: Arial;
    font-size: 18px;
    font-weight: 700;
    line-height: 25px;
    color: #fff;
    text-align: left;
    margin-bottom: 17px;
    text-transform: capitalize;
}
.aboutlist li a {
    text-transform: capitalize;
    color: #fff;
    font-size: 15px;
    font-weight: 500;
}
a.linkaa {
    font-size:  28px;
    padding: 10px;
    color:  #fff;
}
.container.coypcon {
    text-align:  center;
}
</style>
