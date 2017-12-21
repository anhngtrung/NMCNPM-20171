<!-- head -->
<?php $this->load->view('admin/equipment/head', $this->data)?>

<div class="line"></div>

<div class="wrapper">
    
   	<!-- Form -->
	<form enctype="multipart/form-data" method="post" action="<?php echo admin_url('equipment/add')?>" id="form" class="form">
		<fieldset>
			<div class="widget">
			    <div class="title">
					<img class="titleIcon" src="<?php echo public_url('admin')?>/images/icons/dark/add.png">
					<h6>Thêm mới Thiết bị</h6>
				</div>
				
			    <div class="tab_container">
				    <div class="tab_content pd0" id="tab1" style="display: block;">

				    	<div class="formRow">
							<label for="param_id" class="formLeft">Mã thiết bị:<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo"><input type="text" _autocheck="true" id="param_id" name="id"></span>
								<span class="autocheck" name="name_autocheck"></span>
								<div class="clear error" name="id_error"></div>
							</div>
							<div class="clear"></div>
						</div>

				        <div class="formRow">
							<label for="param_name" class="formLeft">Tên thiết bị:<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="name"></span>
								<span class="autocheck" name="name_autocheck"></span>
								<div class="clear error" name="name_error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow">
							<label class="formLeft">Hình ảnh:<span class="req"></span></label>
							<div class="formRight">
								<div class="left">
						    		<input type="file" name="image" id="image" size="25">
								</div>
								<div class="clear error" name="image_error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow">
							<label class="formLeft">Ảnh kèm theo:</label>
							<div class="formRight">
								<div class="left">
						    		<input type="file" multiple="" name="image_list[]" id="image_list" size="25" >
								</div>
								<div class="clear error" name="image_list_error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<!-- count -->
						<div class="formRow">
							<label for="param_count" class="formLeft">
								Số lượng :
								<span class="req"></span>
							</label>
							<div class="formRight">
								<span class="oneTwo">
									<input type="text" _autocheck="true" class="format_number" id="param_count" style="width:100px" name="count">
									
								</span>
								<span class="autocheck" name="count_autocheck"></span>
								<div class="clear error" name="count_error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<!-- count -->
						

						<div class="formRow">
							<label for="param_school" class="formLeft">Viện quản lý:<span class="req">*</span></label>
							<div class="formRight">
							    <select name="school"  class="left" >
									<option value="Thiết bị chung">Thiết bị chung</option>
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
							<label for="param_date_of_manufacture" class="formLeft">
								Ngày sản xuất
								<span></span>:
							</label>
							<div class="formRight">
								<span>
									<input type="text" class="format_number" id="param_date_of_manufacture" style="width:100px" name="date_of_manufacture">
									
								</span>
								<span class="autocheck" name="date_of_manufacture_autocheck"></span>
								<div class="clear error" name="date_of_manufacture_error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow">
							<label for="param_guarantee" class="formLeft">Thời gian bảo hành<span class="req"></span></label>
							<div class="formRight">
								<span class="oneTwo"><input type="text" _autocheck="true" id="param_guarantee" name="guarantee"></span>
								<span class="autocheck" name="guarantee_autocheck"></span>
								<div class="clear error" name="guarantee_error"></div>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="formRow">
							<label for="param_unit " class="formLeft">
								Đơn vị tính
							</label>
							<div class="formRight">
								<span class="oneFour"><input type="text" id="param_unit " name="unit"></span>
								<span class="autocheck" name="unit _autocheck"></span>
								<div class="clear error" name="unit_error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow">
							<label for="param_status" class="formLeft">Tình trạng</label>
							<div class="formRight">
								<span class="oneTwo"><textarea cols="" rows="4" id="param_status" name="status"></textarea></span>
								<span class="autocheck" name="status_autocheck"></span>
								<div class="clear error" name="status_error"></div>
							</div>
							<div class="clear"></div>
						</div>	
						<div class="formRow hide"></div>
					</div>
												 
				</div>      		
	    		<div class="formSubmit">
	       			<input type="submit" class="redB" value="Thêm mới">
	       			<input type="reset" class="basic" value="Hủy bỏ">
	       		</div>
	    		<div class="clear"></div>
			</div>
		</fieldset>
	</form>
</div>
<div class="clear mt30"></div>
