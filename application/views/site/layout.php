<html>
	<head>
		<?php $this->load->view('site/head') ?>
	</head>
	<body>
		<!-- search.... -->
		<div class="agileits_header">
			<?php $this->load->view('site/agileits_header') ?>
		</div>
		
		

		<!-- logo -->
		<div class="logo_equipments">
			<?php $this->load->view('site/logo_equipments') ?>
		</div>

		
		<div class="equipments-breadcrumb">	</div>
		
		<!-- content -->
		<div class="banner">
			<!-- left -->
			<div class="w3l_banner_nav_left">
				<?php $this->load->view('site/navbar-collapse') ?>
			</div>

			<!-- right -->
			<div class="w3l_banner_nav_right">
				<?php if(isset($message)): ?>
					<p style="color:red"><?php echo $message ?></p>
				<?php endif; ?>
				<?php $this->load->view($temp) ?>
			</div> 
			<div class="clearfix"></div>
		</div>
		
		<!-- content bottom -->
		<div class="top-brands">
			<?php $this->load->view('site/tin-tuc',$this->data) ?>
		</div>
		
		<!-- footer -->
		<div class="footer">
			<?php $this->load->view('site/footer') ?>
		</div>
	</body>
</html>