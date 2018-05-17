<div class="main-box">
<div class="sellArticle-container">
	<div class="row">
		<div class="sellArticle-box">
			<div class="sellArticleBox">
				<div class="sellArticle-formBox">
					<div class="col s12 m6 form-bx">
					<div class="title">
						<h4>Sell Article</h4>
					</div>
					
					<form method="post" class="form-horizontal" id="formListen" class="formListen" role="form" action="<?= base_url() ?>SellArticle/create_payment_with_paypal">
                    
                        <input title="item_name" name="item_name" type="hidden" value="wixicode">
                        <input title="item_number" name="item_number" type="hidden" value="1">
                        <input title="item_description" name="item_description" type="hidden" value="wixicode description">
                        <input title="item_tax" name="item_tax" type="hidden" value="1">
                        <input title="item_price" name="item_price" type="hidden" value="1">
                        <input title="details_tax" name="details_tax" type="hidden" value="0">
                        <input title="details_subtotal" name="details_subtotal" type="hidden" value="1">
                        <button id="payBtn" <?php if($this->session->userdata('email')==''){ ?> disabled <?php } ?> class="waves-effect waves-light btn btn-flat btn-listen hide" type="submit">
                        	<i class="fas fa-headphones"></i>&nbsp; Listen</button>
                        
                    </form>
                    

					<form class="form" name="sellArticleForm" id="sellArticleForm" method="POST" enctype="multipart/form-data">
						<div class="col s11 m11">
							<input type="text" name="title" id="title" placeholder="Enter Title">
						</div>
						<div class="col s11 m11">
							<input type="file" name="product" id="product">
						</div>
						<div class="col s11 m11">
							<input type="text" name="price" placeholder="Enter price">
						</div>
						<div class="col s11 m11">
							<button type="button" name="Sell" value="Sell" class="bubbly-button btn-sell">Sell Article</button>
							<!-- <button class="bubbly-button">Click me!</button> -->
						</div>
					</form>
					</div>
					<div class="col s12 m6">
						<div class="imgBox">
							<img src="<?php echo base_url();?>html/images/chart-graph-icon.png" class="responsive-img">
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>



<div class="articleList-container">
	<div class="article-box">
		<div class="row">
			<div class="articleBox">
				<div class="title">
					<h4>List Of Product</h4>
				</div>
				<table id="example" class="display responsive nowrap" style="width:100%">
		        <thead>
		            <tr>
		                <th>#</th>
		                <th>Wixicode</th>
		                <th>Sell By</th>
		                <th>Title</th>
		                <th>Product</th>
		                <th>price</th>
		                <th>status</th>
		                <th>placedOn</th>
		                <th>Action</th>
		            </tr>
		        </thead>
		        <tbody>
		        <?php $i=1; foreach ($article as $key => $value) { ?>
		        	<tr>
		        		<td><?php echo $i++;; ?></td>
		        		<td><?php echo $value['wixicode'];?></td>
		        		<td><?php echo $value['sell_by']; ?></td>
		        		<td><?php echo $value['title']; ?></td>
		        		<td><img src="<?php echo base_url();?>html/images/products/<?php echo $value['product']; ?>" class="responsive-img" height="70"></td>
		        		<td><?php echo $value['price']; ?></td>
		        		<td><?php echo $value['status']; ?></td>
		        		<td><?php echo $value['placedOn']; ?></td>
		        		<td>
		        			<a href="#!"><i class="fas fa-edit"></i></a> &nbsp; | &nbsp; <a href="#!"><i class="fas fa-trash"></i></a>
		        		</td>
		        	</tr>
		        <?php } ?>
		    	</tbody>
		    	</table>
			</div>
		</div>
	</div>
	
</div>

</div>
