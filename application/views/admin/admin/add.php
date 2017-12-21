<!-- head -->
<?php $this->load->view('admin/admin/head', $this->data) ?>

<div class="line"></div>

<div class="wrapper">
	<div class="widget">
		<div class="title">
			<h6>Thêm mới quản trị viên</h6>
		</div>

		<form class="form" id="form" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<fieldset>
				<div class="formRow">
					<label class="formLeft" for="param_name">Mã Admin<span class="req">*</span></label>
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