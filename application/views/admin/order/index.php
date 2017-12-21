
<?php $this->load->view('admin/order/head', $this->data) ?>

<div class="line"></div>

<div class="wrapper" id="main_product">
	<div class="widget">
		<?php $this->load->view('admin/message',$this->data); ?>
		<div class="title">
			<span class="titleIcon"><input id="titleCheck" name="titleCheck" type="checkbox"></span>
			<h6>
				Danh sách đăng ký			</h6>
		 	<div class="num f12">Số lượng: <b><?php echo $total_rows ?></b></div>
		</div>
		
		<table class="sTable mTable myTable" id="checkAll" width="100%" cellspacing="0" cellpadding="0">
			
			<thead class="filter">
				<tr><td colspan="10">
					<form class="list_filter form" action="<?php echo admin_url('order') ?>" method="get">
						<table width="80%" cellspacing="0" cellpadding="0">
							<tbody>
						
								<tr>
									<td class="label" style="width:50px;"><label for="filter_id_user">Mã thành viên</label></td>
									<td class="item"><input name="id_user" value="<?php echo $this->input->get('id_user') ?>" id="filter_id_user" style="width:155px;" type="text"></td>
									
									<td class="label" style="width:60px;"><label for="filter_id">Mã thiết bị</label></td>
									<td class="item" style="width:155px;"><input name="name" value="<?php echo $this->input->get('name') ?>" id="filter_iname" style="width:155px;" type="text"></td>
									
									<td style="width:150px">
										<input class="button blueB" value="Lọc" type="submit">
										<input class="basic" value="Reset" onclick="window.location.href = '<?php echo admin_url('order') ?>'; " type="reset">
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
					<td style="">Mã thiết bị</td>
					<td>Mã thành viên</td>
					<td>Mã phòng học</td>
					<td>Ngày đăng ký</td>
					<td>Ngày mượn</td>
					<td>Ngày trả</td>
					<td>Số lượng</td>
					<td>Trạng thái</td>
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
					
					<td class="textC"><?php echo $row->id_equipment ?></td>
					
					<td class="textC">
						<?php echo $row->id?>
					</td>
					
					<td class="textR">
					   <?php echo $row->id_classroom ?>                           				
					</td>
					<td colspan="" rowspan="" headers="">
						<?php echo get_date($row->created, true) ?>
					</td>
					<td class="">
						<?php echo $row->ngay_muon ?>
					</td>
					<td>
						<?php echo $row->ngay_tra ?>
					</td>
					<td class="textC"><?php echo $row->count ?></td>
					<td>
						<?php echo $row->status ?>
					</td>
					
					<td class="option textC">
						
						<a href="<?php echo admin_url('order/edit/'.$row->id.'/'.$row->id_equipment.'/'.$row->created) ?>" title="Chỉnh sửa" class="tipS">
							<img src="<?php echo public_url('admin/') ?>images/icons/color/edit.png">
						</a>						
						<a href="<?php echo admin_url('order/delete/'.$row->id.'/'.$row->id_equipment.'/'.$row->created) ?>" title="Xóa" class="tipS verify_action">
						    <img src="<?php echo public_url('admin/') ?>images/icons/color/delete.png">
						</a>
					</td>
				</tr>
				<?php endforeach ?>
		    </tbody>			
		</table>
	</div>
	
</div>