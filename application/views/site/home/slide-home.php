<!-- flexSlider -->
<link rel="stylesheet" href="<? php echo public_url() ?>css/flexslider.css" type="text/css" media="screen" property="" />
<script defer src="<? php echo public_url() ?>js/jquery.flexslider.js"></script>
<script type="text/javascript">
$(window).load(function(){
	 $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
</script>
<!-- //flexSlider -->

<section class="slider">
	<div class="flexslider">
		
		<ul class="slides">
			<?php foreach ($slide_list as $row): ?>
			<li >	

				<div class="w3l_banner_nav_right_banner" style="background: url(<?php echo base_url('upload/slide/'.$row->image_link) ?>) no-repeat ; width: 100%;" >

					<h3 ><?php echo $row->subtitle_1 ?><span><?php echo $row->subtitle_2 ?></span><?php echo $row->subtitle_3 ?></h3>
					<div class="more" style="margin-right: 50px">
						<a href="equipments.html" class="button--saqui button--round-l button--text-thick" data-text="" style="max-width: 150px">See more</a>
					</div>
				</div>

			</li>
			<?php endforeach; ?>
		</ul>

	</div>
</section>
