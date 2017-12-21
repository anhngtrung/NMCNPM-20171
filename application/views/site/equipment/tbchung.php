<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_veg" >
	<h3 class="w3l_fruit" style="background-color: lightblue"><br>Thiết bị chung</h3>
	<div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
		<?php foreach ($list as $row):?>
			<div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd" style="margin-bottom: 50px ">
				<div class="hover14 column">
				<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
					
					<div class="agile_top_brand_left_grid1">
						<figure>
							<div class="snipcart-item block">
								<div class="snipcart-thumb">
									<a href="<?php echo base_url('equipment/view/'.$row->id) ?>"><img src="<?php echo base_url('upload/equipment/'.$row->image_link) ?>" style="max-height: 150px" alt=" " class="img-responsive"></a>
									<p><?php echo $row->name ?></p>
									<h4><?php echo $row->id ?></h4>
								</div>
								<br/>
								<a class='button borrow' style='float:left;padding:8px 15px;font-size:16px; text-align: center;' href="<?php echo base_url('cart/add/'.$row->id) ?>" title='Mượn'>Mượn</a>
				            <div class='clear'></div>
							</div>
						</figure>
					</div>
				</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<style type="text/css" media="screen">
	.borrow{
		font-size: 14px;
		color: blue;
		font-weight: bold;
		background: lightskyblue;
		text-decoration: none;
		position: relative;
		border: none;
		border-radius: 10px;
		width: 50%;
		margin-left: 25%;
		text-transform: uppercase;
		padding: 0 .5em;
		outline: none;
	}
</style>