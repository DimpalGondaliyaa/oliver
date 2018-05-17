<div class="max-width">
    <div class="order-container">
        <div class="orders-box">
            <div class="order-details">
                <div class="order_row">
                    <div class="thanku-container">
                    <div class="thanku-box">
                        <h1 class="purple-text">Thank You</h1>
                        <h5>Product(s) You have Purchased.</h5>
                    </div>
                    <div class="Order-Detials">
                      <div class="row">
                      <?php
                      foreach ($mp as $key => $v) 
                      {
                      $c=$this->db->query("SELECT * FROM user_cart WHERE cart_id='".$v."' AND status='confirmed'");
                      $value=$c->row_array();
                                      
                      $product_id=$value['product_id'];
                      $typ=$value['type'];
                      if($typ=='products'){
                      $product_data=$this->db->query("SELECT * FROM products WHERE id='".$product_id."'");
                      $product=$product_data->result_array();
                      }else {
                      $s=$this->db->query("SELECT * FROM shop_products WHERE id='".$product_id."'");
                      $product=$s->result_array();
                      }
                      foreach ($product as $key => $productData) {
                      ?>
                      <div class="cart-row">
                        <div class="row">
                          <div class="product-details">
                              <div class="col s2 m1">
                              <?php  if($productData['product_image']!=''){?>

                              <?php if($typ=='products') {?>
                              <img src="<?php echo base_url(); ?>html/images/products/<?php echo $productData['product_image']; ?>" class="responsive-img">
                              <?php } else {
                              ?>
                              <img src="<?php echo base_url(); ?>html/images/Shop-products/<?php echo $productData['product_image']; ?>" class="responsive-img">
                              <?php } } else { ?>
                              <img src="<?php echo base_url(); ?>html/images/placeholder.png" class="responsive-img">
                              <?php } ?>
                              </div>
                              
                              <div class="product-description">
                                  <div class="col s8 m8">
                                  <h6><?php echo $productData['product_name'];?></h6>
                                  <h6>Price : <?php echo $productData['price'];?> $</h6>
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                      <?php } } ?> 
                      </div>
                    </div>
                          <div class="fixed-box">
                              <p>You can download your Chakra Clearing Meditation MP3 audio recording from the link below.</p><p>Simply right click on the link and select “Save Target As” or “Save Link As” and you can save it to your computer.</p><p>A nice, fast and highly effective meditation for you to enjoy and be able to do quickly in this fast paced world we live</p>
                          </div>
                          <div>
                               <i class="fas fa-quote-left"></i> &nbsp; 
                                <p>Enjoy the App for daily clearing of your issues & blockages out of your body, to avoid sickness & upset.</p>
                                <p>For your bigger health issues give me a call and I can work alot deeper and stronger on you with a Body Attunement session or Remote.</p>
                          </div>

                          <div class="notes-box">
                              <h6>The Latest Cutting Edge Information</h6>
                              With the same clearing repetitive moves of Chakra Clearing, pls also clear the area,
                              <ul>
                                <li> from your Crown Chakra right up to God/Source, high up above, colour Gold,</li>
                                <li> your thymus gland, between Throat & Heart, colour Turquoise,</li>
                                <li> around both knees, colour White</li>
                                <li> around both ankles, colour White</li>
                                <li>(if you already have an injury pls do each knee, ankle separately)</li>
                                <li>– and each hand, colour White</li>
                            </ul>    
                                <p>The Body Attunement Centre is a Healing Centre specialising in attaining Great Health, Happiness & Wellbeing for all its clients. </p>

                                <p>It works on clients physical, emotional, mental and spiritual bodies.  By working on the whole body the Centre obtains great successes and results in all areas of illness or disease. </p>
                          </div>

                          <div class="contactBox">
                             <h6> Debra can be contacted via phone or email at:</h6>

                                <h6>Phone : 0423 191 084</h6>

                                <h6>Email: debrabright88@icloud.com</h6>

                                <h6>www.debrabright.com</h6>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>