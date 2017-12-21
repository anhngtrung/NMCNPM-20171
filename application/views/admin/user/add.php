<!-- head -->
<?php $this->load->view('admin/user/head', $this->data) ?>

<div class="line"></div>

<div class="wrapper">
	<div class="widget">
		<div class="title">
			<h6>Thêm mới thành viên</h6>
		</div>

		<form class="form" id="form" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<fieldset>
				<div class="formRow">
					<label class="formLeft" for="param_name">Mã thành viên<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="id" id="param_id" _autocheck="true" type="text" value="<?php echo set_value('id') ?>"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('id') ?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_name">Họ và tên<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="name" id="param_name" _autocheck="true" type="text" value="<?php echo set_value('name') ?>"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('name') ?></div>
					</div>
					<div class="clear"></div>
				</div>	
				<div class="formRow">
					<label class="formLeft" for="param_birthday">Ngày sinh<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="birthday" id="param_birthday" _autocheck="true" type="text" value="<?php echo set_value('birthday') ?>"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('birthday') ?></div>
					</div>
					<div class="clear"></div>
				</div>	

				<div class="formRow">
					<label for="param_school" class="formLeft">Viện quản lý:<span class="req">*</span></label>
					<div class="formRight">
					    <select name="school"  class="left" >
							<!-- kiem tra danh muc co danh muc con hay khong -->
							<option value="Viện CNTT & TT">Viện CNTT & TT</option>
							<option value="Viện Vật lý kỹ thuật">Viện Vật lý kỹ thuật</option>
							<option value="Viện Cơ khí">Viện Cơ khí</option>
							<option value="Khoa GDTC & GDQP">Khoa GDTC & GDQP</option>
							<option value="Viện Toán ứng dụng và Tin học">Viện Toán ứng dụng và Tin học</option>
							
						</select>
						<span class="autocheck" name="school_autocheck"></span>
						<div class="clear error" name="school_error"></div>
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="formRow">
					<label class="formLeft" for="param_email">Email<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="email" id="param_email" _autocheck="true" type="text" value="<?php echo set_value('email') ?>"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('email') ?></div>
					</div>
					<div class="clear"></div>
				</div>	
				<div class="formRow">
					<label class="formLeft" for="param_phone">Số điện thoại<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="phone" id="param_phone" _autocheck="true" type="text" value="<?php echo set_value('phone') ?>"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('phone') ?></div>
					</div>
					<div class="clear"></div>
				</div>	
				<div class="formRow">
					<label class="formLeft" for="param_country">Quê quán<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="country" id="param_country" _autocheck="true" type="text" value="<?php echo set_value('country') ?>"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('country') ?></div>
					</div>
					<div class="clear"></div>
				</div>	
				<div class="formRow">
					<label class="formLeft" for="param_password">Mật khẩu<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="password" id="param_password" _autocheck="true" type="password"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('password') ?></div>
					</div>
					<div class="clear"></div>
				</div>	
				<div class="formRow">
					<label class="formLeft" for="param_re_password">Nhập lại mật khẩu<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="re_password" id="param_re_password" _autocheck="true" type="password"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('re_password') ?></div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formSubmit">
	       			<input value="Thêm mới" class="redB" type="submit">
	       		</div>			
			</fieldset>						
		</form>
	</div>
</div>