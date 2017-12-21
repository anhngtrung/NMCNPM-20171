<style type="text/css" media="screen">
	.banner_bottom,.top-brands,.fresh-gdtc-gdqp,.w3l_banner_nav_right_banner3_btm,.testimonials,.team,.newsletter-top-serv-btm,.w3ls_w3l_banner_nav_right_grid_sub{
		padding:5em 0 !important;
	}
	.tag {
	    position: absolute;
	    top: -1%;
	    right: 10%;
	}
	.top-brands h3,.fresh-gdtc-gdqp h3,.mail h3,.testimonials h3,.w3_login h3,.w3ls_w3l_banner_nav_right_grid h3,h3.title,.faq h3,.services h3,.about h3,.team h3,.events h3{
		text-align:center;
		color:#212121;
		padding-bottom:.5em;
		position:relative;
		font-size: 2.5em;
	}
	.top-brands h3:after,.fresh-gdtc-gdqp h3:after,.mail h3:after,.w3_login h3:after,.testimonials h3:after,.w3ls_w3l_banner_nav_right_grid h3:after,h3.title:after,.faq h3:after,.services h3:after,.about h3:after,.team h3:after,.events h3:after{
		content: '';
	    background: #FA1818;
	    height: 2px;
	    width: 8%;
	    position: absolute;
	    bottom: 0%;
	    left: 46%;
	}
	.agile_top_brand_left_grid{
		background: #FFFFFF;
	    padding: .5em;
	    border: 1px solid #BEBEBE;
		position:relative;
	}
	.agile_top_brand_left_grid_pos{
		position:absolute;
		top:0%;
		left:0%;
	}
	.agile_top_brand_left_grid1{
		padding:1em;
		border:1px solid #D7D7D7;
	}
	.agile_top_brand_left_grid1 img{
		margin:0 auto;
	}
	.agile_top_brands_grids{
		margin:3em 0 0;
	}
	.top-brands{
	    background: #f5f5f5;
	}
	.agile_top_brand_left_grid1 p{
		color:#212121;
		margin:1.5em 0 1em;
		line-height:1.5em;
		text-transform:capitalize;
		font-size:14px;
	}
	.agile_top_brand_left_grid1 h4,.agileinfo_single_right_snipcart h4{
		font-weight:600;
		font-size:1em;
		color:#212121;
	}
	.agile_top_brand_left_grid1 h4 span,.agileinfo_single_right_snipcart h4 span{
		font-weight:300;
		text-decoration:line-through;
		padding-left:1em;
	}
</style>





<!-- <div class="container"> -->
<div class="container">

	<h3>Tin tức</h3>
	<div class="agile_top_brands_grids">
		<?php foreach ($news_list as $row):?>
		<div class="col-md-3 top_brand_left">
			<div class="hover14 column" >
				<div class="agile_top_brand_left_grid" >
					
					<div class="agile_top_brand_left_grid1">
						<figure>
							<div class="snipcart-item block" >
								<div class="snipcart-thumb">
									<a href="<?php echo $row->meta_desc ?>"><img title=" " alt=" " src =" <?php echo base_url('upload/news/'.$row->image_link) ?>" style="height: 150px;"/></a>		
									<p><?php echo $row->intro ?></p>
									<h4><?php echo get_date($row->created) ?> <span></span></h4>
									<br/>
									<a class='button read-more' style='float:left;padding:8px 15px;font-size:16px; text-align: center;' href="" title='Mượn'>ĐỌC TIN</a>
								</div>
							</div>
						</figure>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>	
		
	</div>
</div>

<!-- //top-brands -->
<style type="text/css" media="screen">
	.read-more{

		font-size: 14px;
		color: #fff;
		background: #FA1818;
		text-decoration: none;
		position: relative;
		border: none;
		border-radius: 0;
		width: 60%;
		margin-left: 20%;
		text-transform: uppercase;
		padding: .5em 0;
		outline: none;
	}
</style>