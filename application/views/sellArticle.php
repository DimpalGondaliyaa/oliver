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
