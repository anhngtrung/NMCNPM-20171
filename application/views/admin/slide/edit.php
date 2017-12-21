<!-- head -->
<?php $this->load->view('admin/slide/head', $this->data)?>

<div class="line"></div>

<div class="wrapper">
    
   	<!-- Form -->
	<form enctype="multipart/form-data" method="post" action="" id="form" class="form">
		<fieldset>
			<div class="widget">
			    <div class="title">
					<img class="titleIcon" src="<?php echo public_url('admin')?>/images/icons/dark/add.png">
					<h6>Sửa slide</h6>
				</div>
				
			    <div class="tab_container">
				    <div class="tab_content pd0" id="tab1" style="display: block;">

				    	<!-- <div class="formRow">
							<label for="param_id" class="formLeft">Mã số<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo"><input type="text" _autocheck="true" id="param_id" name="id"></span>
								<span class="autocheck" name="name_autocheck"></span>
								<div class="clear error" name="id_error"></div>
							</div>
							<div class="clear"></div>
						</div> -->

				        <div class="formRow">
							<label for="param_name" class="formLeft">Tên slide<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="name" value="<?php echo $slide->name ?>"></span>
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
						    		<img src="<?php echo base_url('upload/slide/'.$slide->image_link) ?>" alt="" style="height: 50px; margin: 5px">
								</div>
								<div class="clear error" name="image_error"></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formRow">
							<label for="param_info" class="formLeft">Mô tả</label>
							<div class="formRight">
								<span class="oneTwo"><textarea cols="" rows="4" _autocheck="true" id="param_info" name="info" ><?php echo $slide->info ?></textarea></span>
								<span class="autocheck" name="info_autocheck"></span>
								<div class="clear error" name="info_error"></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formRow">
							<label for="param_subtitle_1" class="formLeft">Subtitle_1<span class="req"></span></label>
							<div class="formRight">
								<span class="oneTwo"><input type="text" _autocheck="true" id="param_subtitle_1" name="subtitle_1" value="<?php echo $slide->subtitle_1 ?>"></span>
								<span class="autocheck" name="subtitle_1_autocheck"></span>
								<div class="clear error" name="subtitle_1_error"></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formRow">
							<label for="param_subtitle_2" class="formLeft">Subtitle_2<span class="req"></span></label>
							<div class="formRight">
								<span class="oneTwo"><input type="text" _autocheck="true" id="param_subtitle_2" name="subtitle_2" value="<?php echo $slide->subtitle_2 ?>"></span>
								<span class="autocheck" name="subtitle_2_autocheck"></span>
								<div class="clear error" name="subtitle_2_error"></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formRow">
							<label for="param_subtitle_3" class="formLeft">Subtitle_3<span class="req"></span></label>
							<div class="formRight">
								<span class="oneTwo"><input type="text" _autocheck="true" id="param_subtitle_3" name="subtitle_3" value="<?php echo $slide->subtitle_3 ?>"></span>
								<span class="autocheck" name="subtitle_3_autocheck"></span>
								<div class="clear error" name="subtitle_3_error"></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formRow">
							<label for="param_sort_order" class="formLeft">Thứ tự hiển thị<span class="req"></span></label>
							<div class="formRight">
								<span class="oneTwo"><input type="text" _autocheck="true" id="param_sort_order" name="sort_order" value="<?php echo $slide->sort_order ?>"></span>
								<span class="autocheck" name="sort_order_autocheck"></span>
								<div class="clear error" name="sort_order_error"></div>
							</div>
							<div class="clear"></div>
						</div>				    
						
					    <div class="formRow">
							<label for="param_link" class="formLeft">Link<span class="req"></span></label>
							<div class="formRight">
								<span class="oneTwo"><input type="text" _autocheck="true" id="param_link" name="link" value="<?php echo $slide->link ?>"></span>
								<span class="autocheck" name="link_autocheck"></span>
								<div class="clear error" name="link_error"></div>
							</div>
							<div class="clear"></div>
						</div>						 
					</div>      		
		    		<div class="formSubmit">
		       			<input type="submit" class="redB" value="Cập nhật">
		       			<input type="reset" class="basic" value="Hủy bỏ">
		       		</div>
		    		<div class="clear"></div>
				</div>
			</div>
		</fieldset>
	</form>
</div>
<div class="clear mt30"></div>
