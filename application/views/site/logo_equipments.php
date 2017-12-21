<!-- Đăng nhập thành công thì hiển thị tên -->
		<?php if(isset($user_info)): ?>
			<div style="float: right; padding-right: 20px; color: white; background-color: black; margin: 0px 0px 20px 0px" class="col-md-4 col-xs-10">
				<p>Xin chào: <?php echo $user_info->name ?>!</p>
			</div>
		<?php endif; ?>
		<div class="clearfix">
			
		</div>
<div class="container">
	<div class="w3ls_logo_equipments_left">
		<h1><a href="<?php echo base_url() ?>"><span>tu_dang</span> EMSystem</a></h1>
	</div>
	<div class="w3ls_logo_equipments_left1">
		<ul class="special_items">
			<li><a href="events.html">News</a><i>/</i></li>
			<li><a href="<?php echo base_url('site/about/index') ?>">About Us</a><i>/</i></li>
			<li><a href="equipments.html">Best Equipment</a><i>/</i></li>
			<li><a href="services.html">Services</a></li>
		</ul>
	</div>
	<div class="w3ls_logo_equipments_left1">
		<ul class="phone_email">
			<li><i class="fa fa-phone" aria-hidden="true"></i>(+84) 86.860.3396</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:anhngtrung@gmail.com">anhngtrung@gmail.com</a></li>
		</ul>
	</div>
	<div class="clearfix"> </div>
</div>