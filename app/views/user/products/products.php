<div class="getting_started">
	<?php include "views/accounts/sidebar.php"; ?>
	<div class="elements">
	<h4 class="alert_title  df jcsb">
	<span class="df aic gap10"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000e4f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0"/></svg>  <?=count($products)?>   Products </span>
		<a class="btn btn-success gap10" href="<?=root?>account/product-add">
		Add Product
		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
		</a>
	</h4>

<table>
	<thead>
		<tr>
			<th>
			<label class="checkbox">
			<input type="checkbox" onclick="checkbox(this);">
			<span></span>
			</label>
			</th>
			<th>Thumb</th>
			<th>Product Name</th>
			<th>Created at</th>
			<th>Status</th>
			<th>Price</th>
			<th class="tc" style="max-width: 200px !important;">Action</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($products as $product) { ?>
		<tr>
			<td>
			<label class="checkbox">
			<input type="checkbox" name="checkbox">
			<span></span>
			</label>
			</td>
			<td class="zoom"><img src="<?=root?>assets/img/verification/docs.png <?=$product->product_img?>"></td>
			<td><strong><?=$product->product_name?></strong></td>
			<td><?=$product->product_created_at?></td>
			<td><?=$product->product_status?></td>
			<td class=""><strong>Rs. 2500</strong></td>
			<td class="df gap8">
				<a class="btn gap6">
				Preview
				<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
				</a>
				<a class="btn btn-success gap4">
				Edit
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>
				</a>
				<a class="btn btn-danger gap2">
				Delete
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
				</a>
			</td>
		</tr>
		<?php } ?>
		
		
	</tbody>
</table>

</div>
</div>
</div>