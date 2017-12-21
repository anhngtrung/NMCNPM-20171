<!-- header -->
	
<div class="w3l_offers">
	<a href="<?php echo base_url() ?>">Today's special with Us!</a>
</div>
<div class="w3l_search">
	<form action="<?php echo site_url('equipment/search') ?>" method="get" style="margin: 0px">
		<input type="text" id="text-search" name="key-search" value="<?php echo isset($key) ? $key : "" ?>" placeholder="Search a equipment..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a equipment...';}" required="">
		<input type="submit" value=" ">
	</form>
</div>
<div class="equipment_list_header">  
	<form action="#" method="post" class="last" style="margin: 0px">
        <fieldset>
            <input type="hidden" name="cmd" value="_cart" />
            <input type="hidden" name="display" value="1" />
            
            <a href="<?php echo site_url('order')?>" title="Your borrow" class="button">
				<input type="submit" name="submit" value="Your borrow   " class="button" onclick="<?php echo site_url('order') ?>" />
            </a>
        </fieldset>
    </form>
</div>
<div class="w3l_header_right">
	<ul>
		<li class="dropdown profile_details_drop">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
			<div class="mega-dropdown-menu">
				<div class="w3ls_gdtc-gdqp">
					<ul class="dropdown-menu drp-mnu">
						<?php if(isset($user_info)): ?>
							<li><a href="<?php echo base_url('user/logout') ?>">Logout</a></li> 
							<li><a href="<?php echo base_url('user/index') ?>">Profile</a></li>
						<?php else: ?>
							<li><a href="<?php echo base_url('user/login') ?>">Login</a></li> 
							<li><a href="#">Sign Up</a></li>
						<?php endif; ?>
					</ul>
				</div>                  
			</div>	
		</li>
	</ul>
</div>
<!-- <div class="w3l_header_right1 col-sm-0">
	<h2><a href="mail.html">Contact Us</a></h2>
</div> -->
<div class="clearfix">
	
</div>

<!-- AUTOCOMPLETE - UNIT20 -->