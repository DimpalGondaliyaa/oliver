<div class="main-box">
	<div class="contact-container">
		<div class="contact-box">
			<div class="max-width">
				
				<div class="title">
					<h5>Contact Details</h5>
				</div>
				<table id="example" class="display responsive table responsive-table" style="width:100%">
		        <thead>
		            <tr>
		                <th>First name</th>
		                <th>Last name</th>
		                <th>E-mail</th>
		                <th>Mobile</th>
		                <th>Address</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php
		        	$i=1;
		        	foreach ($contactData as $key => $value) { ?>
		        		<tr>
		        			<td><?php echo $value['first_name']; ?></td>
		        			<td><?php echo $value['last_name']; ?></td>
		        			<td><?php echo $value['email']; ?></td>
		        			<td><?php echo $value['mobile']; ?></td>
		        			<td><textarea><?php echo $value['address']; ?></textarea></td>
		        		</tr>
		        	<?php } ?>
		        </tbody>
		    	</table>
			</div>
		</div>
	</div>
</div>