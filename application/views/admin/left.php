<div id="leftSide" style="padding-top:30px;">
<!-- Account panel -->
			
	<div class="sideProfile">
		<a href="#" title="" class="profileFace"><img src="<?php echo public_url() ?>admin/images/user.png" width="40"></a>
		<span>Xin chào: <strong>admin!</strong></span>
		
		<div class="clear"></div>
	</div>
	<div class="sidebarSep"></div>		    
	<!-- Left navigation -->
				
	<ul id="menu" class="nav">

		<li class="home">		
			<a href="<?php echo admin_url() ?>" class="active" id="current">
				<span>Bảng điều khiển</span>
				<strong></strong>
			</a>					
		</li>

		<li class="tran">
		
			<a href="<?php echo admin_url('order')?>" class="exp inactive">
				<span>Quản lý mượn trả</span>
				<strong></strong>
			</a>
			
			<!-- <ul  class="sub" style="display: none;"> -->
			<!-- <ul class="sub">
				<li>
					<a href="<?php ?>">
								Danh sách đăng ký
					</a>
				</li>
				<li>
					<a href="admin/product_order.html">
							Danh sách mượn
					</a>
				</li>
			</ul>			 -->			
		</li>
		<li class="product">
		
			<a href="<?php echo admin_url('equipment') ?>" class="exp inactive">
				<span>Quản lí Thiết bị</span>
				<strong>1</strong>
			</a>
			
			<!-- <ul style="display: none;" class="sub"> -->
			<ul class="sub">
				<li>
					<a href="<?php echo admin_url('equipment') ?>">
								Danh sách thiết bị							
					</a>
				</li>
			</ul>						
		</li>

		<li class="account">		
			<a href="<?php echo admin_url('admin') ?>" class="exp inactive">
				<span>Tài khoản</span>
				<strong>2</strong>
			</a>
			
			<!-- <ul style="display: none;" class="sub"> -->
			<ul  class="sub">
				<li>
					<a href="<?php echo admin_url('admin')?>">
					Ban quản trị							
					</a>
				</li>
				<li>
					<a href="<?php echo admin_url('user')?>">
					Thành viên							
					</a>
				</li>
			</ul>			
		</li>
			
		<li class="support">
	
			<a href="" class="exp inactive">
				<span>Hỗ trợ và liên hệ</span>
				<strong>2</strong>
			</a>
		
			<!-- <ul style="display: none;" class="sub"> -->
			<!-- <ul class="sub">
				<li>
					<a href="admin/support.html">
							Hỗ trợ							
					</a>
				</li>
				<li>
					<a href="admin/contact.html">
							Liên hệ							
					</a>
				</li>
			</ul>		 -->			
		</li>
		<li class="content">
		
			<a href="" class="exp inactive">
				<span>Nội dung</span>
				<strong>2</strong>
			</a>
			
			<!-- <ul style="display: none;" class="sub"> -->
			<ul class="sub">
				<li>
					<a href="<?php echo admin_url('slide') ?>">
					Slide							
					</a>
				</li>
				<li>
					<a href="<?php echo admin_url('news') ?>">
					Tin tức							
					</a>
				</li>
				<!-- <li>
					<a href="admin/info.html">
					Trang thông tin							
					</a>
				</li> -->
				
			</ul>		
		</li>	
	</ul>
</div>
<div class="clear"></div>
