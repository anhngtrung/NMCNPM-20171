
<?php $this->load->view('admin/equipment/head', $this->data) ?>

<div class="line"></div>

<div class="wrapper" id="main_product">
	<div class="widget">
		<?php $this->load->view('admin/message',$this->data); ?>
		<div class="title">
			<span class="titleIcon"><input id="titleCheck" name="titleCheck" type="checkbox"></span>
			<h6>
				Danh sách thiết bị			</h6>
		 	<div class="num f12">Số lượng: <b><?php echo $total_rows ?></b></div>
		</div>
		
		<table class="sTable mTable myTable" id="checkAll" width="100%" cellspacing="0" cellpadding="0">
			
			<thead class="filter">
				<tr><td colspan="10">
					<form class="list_filter form" action="<?php echo admin_url('equipment') ?>" method="get">
						<table width="80%" cellspacing="0" cellpadding="0">
							<tbody>
						
								<tr>
									<td class="label" style="width:50px;"><label for="filter_id">Mã thiết bị</label></td>
									<td class="item"><input name="id" value="<?php echo $this->input->get('id') ?>" id="filter_id" style="width:55px;" type="text"></td>
									
									<td class="label" style="width:60px;"><label for="filter_id">Tên thiết bị</label></td>
									<td class="item" style="width:155px;"><input name="name" value="<?php echo $this->input->get('name') ?>" id="filter_iname" style="width:155px;" type="text"></td>
									
									<td class="label" style="width:80px;"><label for="filter_status">Viện quản lý</label></td>
									<td class="item">
										<select name="school">
											<option value=""></option>
											<option value="Thiết bị chung">Thiết bị chung</option>										
											<option value="Viện CNTT & TT">Viện CNTT & TT</option>       
											<option value="Viện Cơ khí">Viện Cơ khí</option>       
											<option value="Viện Toán ứng dụng và Tin học">Viện Toán ứng dụng và Tin học</option>       
											<option value="Viện Vật lý kỹ thuật">Viện Vật lý kỹ thuật</option>       
											<option value="Khoa GDTC & GDQP">Khoa GDTC & GDQP</option> 								 
										</select>
									</td>
									
									<td style="width:150px">
									<input class="button blueB" value="Lọc" type="submit">
									<input class="basic" value="Reset" onclick="window.location.href = '<?php echo admin_url('equipment') ?>'; " type="reset">
									</td>							
								</tr>
							</tbody>
						</table>
					</form>
				</td></tr>
			</thead>
			
			<thead>
				<tr>
					<td style="width:21px;"><img src="<?php echo public_url('admin/') ?>images/icons/tableArrows.png"></td>
					<td style="width:60px;">Mã thiết bị</td>
					<td>Tên thiết bị</td>
					<td>Số lượng</td>
					<td>Ngày sản xuất</td>
					<td>Thời gian bảo hành</td>
					<td>Viện quản lý</td>
					<td >Tình trạng</td>
					<td >Đơn vị tính</td>
					<td>Thao tác</td>
				</tr>
			</thead>
			
 			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="10">
						 <div class="list_action itemActions">
								<a url="<?php echo admin_url('product/delete_all')?>" class="button blueB" id="submit" href="#submit">
									<span style="color:white;">Xóa hết</span>
								</a>
						 </div>
							
					     <div class="pagination">
					          <?php echo $this->pagination->create_links()?>
			             </div>
					</td>
				</tr>
			</tfoot>
			
			<tbody class="list_item">
				<?php foreach ($list as $row): ?>
			    <tr class="row_9">
					<td><input name="id[]" value="<?php echo $row->id ?>" type="checkbox"></td>
					
					<td class="textC"><?php echo $row->id ?></td>
					
					<td>
						<div class="image_thumb">
							<img src="<?php echo base_url('upload/equipment/'.$row->image_link) ?>" height="50">
							<div class="clear"></div>
						</div>
						
						<a href="product/view/9.html" class="tipS" title="" target="_blank">
							<b><?php echo $row->name ?></b>
						</a>
						<div class="f11">
							Lượt mượn: <?php echo $row->borrow ?> | Xem: <?php echo $row->view ?>
						</div>
					</td>
					
					<td class="textR">
					   <?php echo $row->count ?>                           				
					</td>
					<td class="">
						<?php echo $row->date_of_manufacture ?>
					</td>
					<td>
						<?php echo $row->guarantee ?>
					</td>
					<td class="textC"><?php echo $row->school ?></td>
					<td>
						<?php echo $row->status ?>
					</td>
					<td>
						<?php echo $row->unit ?>
					</td>
					<td class="option textC">
						
						<a href="<?php echo admin_url('equipment/edit/'.$row->id) ?>" title="Chỉnh sửa" class="tipS">
							<img src="<?php echo public_url('admin/') ?>images/icons/color/edit.png">
						</a>						
						<a href="<?php echo admin_url('equipment/delete/'.$row->id) ?>" title="Xóa" class="tipS verify_action">
						    <img src="<?php echo public_url('admin/') ?>images/icons/color/delete.png">
						</a>
					</td>
				</tr>
				<?php endforeach ?>
		    </tbody>			
		</table>
	</div>
	
</div>