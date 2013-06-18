<div class="one_full">
	<section class="title">
		<h4>Products</h4>
	</section>
	
	<?php if(!empty($data)){ ?>	
		<section class="item">
			<div class="content">
				<div id="product-list">
					<table>
						<thead>
							<th with="30" class="align-center"><?php echo form_checkbox(array('name' => 'action_to_all', 'class' => 'check-all'));?></th>
							<th>Name</th>
							<th>Slug</th>
							<th>Section</th>
							<th>Description</th>
							<th>Features</th>
							<th>Tags</th>
							<th>Action</th>
						</thead>
						
						<tfoot>
							<tr>
								<td colspan="8">
									<div class="inner"><!-- For Pagination --></div>
								</td>
							</tr>
						</tfoot>
						
						<tbody>
							<?php foreach($data->result() as $row) { ?>
								<tr>
									<?php
										echo '<td class="align-center">' . form_checkbox('action_to[]', $row->id) . '</td>';
										echo '<td>' . $row->name . '</td>';
										echo '<td>' . $row->slug . '</td>';
										echo '<td>' . $row->section . '</td>';
										echo '<td>' . $row->desc . '</td>';
										echo '<td>View Product Features</td>';
										echo '<td>' . $row->tags . '</td>';
										echo '<td>Edit &nbsp; Delete</td>';
									?>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	<?php }else{ ?>
		<section class="kitem">
			<div class="content">No Products</div>
		</section>
	<?php } ?>
</div>