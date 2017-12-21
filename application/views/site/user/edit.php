<!-- head -->

<div class="line"></div>

<div class="wrapper">
	<div class="widget">
		<br/>
		<div class="title" style="text-align: center;">
			<h2>Cập nhật thông tin cá nhân</h2>
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
						<span class="oneTwo">
							<input name="name" id="param_name" _autocheck="true" type="text" value="<?php echo $user->name ?>"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('name') ?></div>
					</div>
					<div class="clear"></div>
				</div>	
				<div class="formRow">
					<label class="formLeft" for="param_birthday">Ngày sinh<span class="req"></span></label>
					<div class="formRight">
						<span class="oneTwo">
							<input name="birthday" id="param_birthday" _autocheck="true" type="text" value="<?php echo $user->birthday ?>"></span>
						<span name="birthday_autocheck" class="autocheck"></span>
						<div name="birthday_error" class="clear error"><?php echo form_error('birthday') ?></div>
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
					<label class="formLeft" for="param_email">Email<span class="req"></span></label>
					<div class="formRight">
						<span class="oneTwo">
							<input name="email" id="param_email" _autocheck="true" type="text" value="<?php echo $user->email ?>"></span>
						<span name="email_autocheck" class="autocheck"></span>
						<div name="email_error" class="clear error"><?php echo form_error('email') ?></div>
					</div>
					<div class="clear"></div>
				</div>	
				<div class="formRow">
					<label class="formLeft" for="param_phone">Số điện thoại<span class="req"></span></label>
					<div class="formRight">
						<span class="oneTwo">
							<input name="phone" id="param_phone" _autocheck="true" type="text" value="<?php echo $user->phone ?>"></span>
						<span name="phone_autocheck" class="autocheck"></span>
						<div name="phone_error" class="clear error"><?php echo form_error('phone') ?></div>
					</div>
					<div class="clear"></div>
				</div>	
				<div class="formRow">
					<label class="formLeft" for="param_country">Quê quán<span class="req"></span></label>
					<div class="formRight">
						<span class="oneTwo">
							<input name="country" id="param_country" _autocheck="true" type="text" value="<?php echo $user->country ?>"></span>
						<span name="country_autocheck" class="autocheck"></span>
						<div name="country_error" class="clear error"><?php echo form_error('country') ?></div>
					</div>
					<div class="clear"></div>
				</div>	
				<div class="formRow">
					<label class="formLeft" for="param_password">Mật khẩu<span class="req"></span></label>
					<div class="formRight">
						<span class="oneTwo">
							<input name="password" id="param_password" _autocheck="true" type="password" value=''>

							<p>Nếu cập nhật mật khẩu mới nhập giá trị</p></span>
						<span name="password_autocheck" class="autocheck"></span>
						<div name="password_error" class="clear error"><?php echo form_error('password') ?></div>
					</div>
					<div class="clear"></div>
				</div>	
				<div class="formRow">
					<label class="formLeft" for="param_re_password">Nhập lại mật khẩu<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="re_password" id="param_re_password" _autocheck="true" type="password"></span>
						<span name="re_password_autocheck" class="autocheck"></span>
						<div name="re_password_error" class="clear error"><?php echo form_error('re_password') ?></div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formSubmit">
	       			<input value="Cập nhật" class="redB" type="submit">
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
	#button{

		border-radius: 10px;
		padding:  5px 10px;
		background-color: lightskyblue; 

	}
</style>	