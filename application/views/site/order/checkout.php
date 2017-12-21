<!-- head -->

<div class="line"></div>

<div class="wrapper">
	<div class="widget">
		
		<div class="title"  style="background-color: lightblue; text-align: center; padding:20px 0px;">
			<h2>Chi tiết mượn trả thiết bị</h2>
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
					<label for="param_ngay_muon" class="formLeft">Ngày mượn: (2017/12/30)<span class="req"></span></label>
					<div class="formRight">
					    <span class="oneTwo">
					    	<input name="ngay_muon" id="param_ngay_muon" _autocheck="true" type="text" value="">
					    </span>
						
						<span class="autocheck" name="ngay_muon_autocheck"></span>
						<div class="clear error" name="ngay_muon_error"><?php echo form_error('ngay_muon') ?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label for="param_ngay_tra" class="formLeft">Ngày trả:<span class="req"></span></label>
					<div class="formRight">
					    <span class="oneTwo">
					    	<input name="ngay_tra" id="param_ngay_tra" _autocheck="true" type="text" value="">
					    </span>
						
						<span class="autocheck" name="ngay_tra_autocheck"></span>
						<div class="clear error" name="ngay_tra_error"><?php echo form_error('ngay_tra') ?></div>
					</div>
					<div class="clear"></div>
				</div>

				<br/>
				<h3 class="w3l_fruit" style="background-color: lightblue; text-align: center; padding:0px 0px 20px 0px;"><br>
					Danh sách thiết bị mượn <br/>
				</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg" style="margin-bottom: 100px;">
					<div class="col-md-10 col-md-push-1" >
						
						<?php if($total_items > 0): ?>
								Tổng số thiết bị: <span style="font-weight: bold; color: red"><?php echo $total_items ?></span>
							<br/>
							<br/>
						
							<table id="cart_content">
								<thead>
									<tr>
										<th>Mã thiết bị</th>
										<th colspan="" rowspan="" headers="" scope="">Tên thiết bị</th>
										<th colspan="" rowspan="" headers="" scope="">Viện/ Khoa</th>
										<th colspan="" rowspan="" headers="" scope="">Số lượng</th>
										
									</tr>
								</thead>
								<tbody>
								<?php foreach ($carts as $row): ?>
									<tr>
										<td><?php echo $row['id'] ?></td>
										<td><?php echo $row['name'] ?></td>
										<td><?php echo $row['school'] ?></td>
										<td><?php echo $row['qty'] ?></td>
										
									</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
							<br/>
							
							
						<?php else: ?>
							<h4 style="font-weight: bold">
								* Không có thiết bị nào trong danh sách đăng ký mượn
							</h4>
						<?php endif; ?>
					</div>		
				</div>
				<div class="" style="margin-bottom: 50; height: 50px">
					
				</div>
				<div class="clearfix">
					
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
	.borrow{
		font-size: 14px;
		color: blue;
		font-weight: bold;
		background: lightskyblue;
		text-decoration: none;
		position: relative;
		border: none;
		border-radius: 10px;
		width: 100%;
		text-transform: uppercase;
		padding: 0 .5em;
		outline: none;
	}

	table{
	    width:100%;
	}
	table,th,td{
	    border:1px solid gray;
	    border-collapse: collapse;
	}
	th,td{
	    padding:7px 15px;
	}
	th{
	    background-color: #008040;
	    color: white;
	}
	tr:nth-child(even){
	    background-color: #F0F0F0;
	}
	tr:hover{
	    background-color: #ddd;
	}
	#button {
		border-radius: 10px;
		padding:  5px 10px;
		background-color: lightskyblue; 
	}
</style>