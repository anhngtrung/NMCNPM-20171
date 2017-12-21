<!-- head -->
<?php $this->load->view('admin/order/head', $this->data)?>

<div class="line"></div>

<div class="wrapper">
    
   	<!-- Form -->
	<form enctype="multipart/form-data" method="post" action="" id="form" class="form">
		<fieldset>
			<div class="widget">
			    <div class="title">
					<img class="titleIcon" src="<?php echo public_url('admin')?>/images/icons/dark/add.png">
					<h6>Cập nhật thông tin Mượn - trả</h6>
				</div>
				
			    <div class="tab_container">
				    <div class="tab_content pd0" id="tab1" style="display: block;">

				    	<div class="formRow">
							<label for="param_id" class="formLeft">Mã thành viên:<span class="req"></span></label>
							<div class="formRight">
								<span class="oneTwo">
									<?php echo $order->id ?>
								</span>
								<span class="autocheck" name="name_autocheck"></span>
								<div class="clear error" name="id_error"></div>
							</div>
							<div class="clear"></div>
						</div>

				        <div class="formRow">
							<label for="param_id_equipment" class="formLeft">Mã thiết bị:<span class="req"></span></label>
							<div class="formRight">
								<span class="oneTwo">
									<?php echo $order->id_equipment ?>
								<span class="autocheck" name="id_equipment_autocheck"></span>
								<div class="clear error" name="id_equipment_error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<!-- classroom -->
						<div class="formRow">
							<label for="param_id_classroom" class="formLeft">Mã phòng học:<span class="req"></span></label>
							<div class="formRight">
								<span class="oneTwo">
									<input type="text" _autocheck="true" class="format_number" id="param_id_classroom" style="width:100px" name="id_classroom" value="<?php echo $order->id_classroom ?>">
								<span class="autocheck" name="id_classroom_autocheck"></span>
								<div class="clear error" name="id_classroom_error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<!-- ngayf ddang ky -->
						<div class="formRow">
							<label for="param_created" class="formLeft">
								Ngày đăng ký:
							</label>
							<div class="formRight">
								<span>
									<?php echo get_date($order->created, true) ?>
								</span>
								<span class="autocheck" name="created_autocheck"></span>
								<div class="clear error" name="created_error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<!-- ngay muon -->
						<div class="formRow">
							<label for="param_ngay_muon" class="formLeft">
								Ngày mượn:
							</label>
							<div class="formRight">
								<span>
									<input type="text" _autocheck="true" class="format_number" id="param_ngay_muon" style="width:100px" name="ngay_muon" value="<?php echo $order->ngay_muon ?>">
								</span>
								<span class="autocheck" name="ngay_muon_autocheck"></span>
								<div class="clear error" name="ngay_muon_error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow">
							<label for="param_ngay_tra" class="formLeft">
								Ngày trả:
							</label>
							<div class="formRight">
								<span>
									<input type="text" _autocheck="true" class="format_number" id="param_ngay_tra" style="width:100px" name="ngay_tra" value="<?php echo ($order->ngay_tra) ?>">
								</span>
								<span class="autocheck" name="ngay_tra_autocheck"></span>
								<div class="clear error" name="ngay_tra_error"></div>
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
									<input type="text" _autocheck="true" class="format_number" id="param_count" style="width:100px" name="count" value="<?php echo $order->count ?>">
									
								</span>
								<span class="autocheck" name="count_autocheck" ></span>
								<div class="clear error" name="count_error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<!-- count -->
						

						<div class="formRow">
							<label for="param_status" class="formLeft">Trạng thái</label>
							<div class="formRight">
								<span class="oneTwo">
									<textarea cols="" rows="4" id="param_status" name="status"> <?php echo $order->status ?></textarea>
								</span>
								<span class="autocheck" name="status_autocheck"></span>
								<div class="clear error" name="status_error"></div>
							</div>
							<div class="clear"></div>
						</div>	
						<div class="formRow hide"></div>
					</div>
				</div>
	    		<div class="formSubmit">
	       			<input type="submit" class="redB" value="Cập nhật">
	       			<input type="reset" class="basic" value="Hủy bỏ">
	       		</div>
	    		<div class="clear"></div>
			</div>
		</fieldset>
	</form>
</div>
<div class="clear mt30"></div>
