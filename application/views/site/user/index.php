<!-- head -->

<div class="line"></div>

<div class="wrapper">
	<div class="widget">
		<br/>
		<div class="title" style="text-align: center;">
			<h2>Thông tin thành viên</h2>
		</div>
		<br/>
		<form class="form" id="form" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data" >
			<fieldset>
				<div class="formRow">
					<label class="formLeft" for="param_name">Mã thành viên<span class="req"></span></label>
					<div class="formRight">
						<span class="oneTwo"><?php echo $user->id ?></span>
						
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_name">Họ và tên<span class="req"></span></label>
					<div class="formRight">
						<span class="oneTwo"><?php echo $user->name ?></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>	
				
				<div class="formRow">
					<label for="param_school" class="formLeft">Khoa/ Viện:<span class="req"></span></label>
					<div class="formRight">
					    <span class="oneTwo"><?php echo $user->school ?></span>
						
						<span class="autocheck" name="school_autocheck"></span>
						<div class="clear error" name="school_error"></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label for="param_birthday" class="formLeft">Ngày sinh:<span class="req"></span></label>
					<div class="formRight">
					    <span class="oneTwo"><?php echo $user->birthday ?></span>
						
						<span class="autocheck" name="birthday_autocheck"></span>
						<div class="clear error" name="birthday_error"></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label for="param_phone" class="formLeft">Số điện thoại:<span class="req"></span></label>
					<div class="formRight">
					    <span class="oneTwo"><?php echo $user->phone ?></span>
						
						<span class="autocheck" name="phone_autocheck"></span>
						<div class="clear error" name="phone_error"></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label for="param_email" class="formLeft">Email:<span class="req"></span></label>
					<div class="formRight">
					    <span class="oneTwo"><?php echo $user->email ?></span>
						
						<span class="autocheck" name="email_autocheck"></span>
						<div class="clear error" name="email_error"></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label for="param_country" class="formLeft">Nơi ở hiện nay:<span class="req"></span></label>
					<div class="formRight">
					    <span class="oneTwo"><?php echo $user->country ?></span>
						
						<span class="autocheck" name="country_autocheck"></span>
						<div class="clear error" name="country_error"></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formSubmit">
	       			<a style="font-size: 14pt; text-decoration: underline; font-weight: bold; font-style: italic;" href="<?php echo base_url('user/edit') ?>" title="Chỉnh sửa thông tin">Cập nhật</a>
	       		</div>			
			</fieldset>						
		</form>
	</div>
</div>
<style type="text/css" media="screen">
	.widget {
		background: #f9f9f9;
		/*border: 1px solid #cdcdcd;
		margin-top: 10px;*/
		clear: both;
	}
	.formRow {
		padding: 15px 14px;
		clear: both;
		border-bottom: 1px solid #E2E2E2;
		border-top: 1px solid white;
		position: relative;
	}
	.formRow label.formLeft {
		display: inline;
		width: 23%;
		float: left;
	}
	.formRow > label {
		padding: 4px 0;
		display: block;
		float: left;
	}
	.formSubmit {
		display: block;
		float: left;
		margin: 14px 18px;
	}

	
</style>