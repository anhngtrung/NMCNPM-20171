<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_veg" style="margin-bottom: 50px">
	<h3 class="w3l_fruit" style="background-color: lightblue"><br>
		Danh sách thiết bị mượn 
	</h3>
	<div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg" style="margin-bottom: 100px;">
		<div class="col-md-10 col-md-push-1" >
			
			<?php if($total_items > 0): ?>
					Tổng số thiết bị: <span style="font-weight: bold; color: red"><?php echo $total_items ?></span>
				<br/>
				<br/>
				<form action="<?php echo base_url('cart/update') ?>" method="post" accept-charset="utf-8">
					<table id="cart_content">
						<thead>
							<tr>
								<th>Mã thiết bị</th>
								<th colspan="" rowspan="" headers="" scope="">Tên thiết bị</th>
								<th colspan="" rowspan="" headers="" scope="">Viện/ Khoa</th>
								<th colspan="" rowspan="" headers="" scope="">Số lượng</th>
								<th colspan="" rowspan="" headers="" scope="">Xóa</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($carts as $row): ?>
							<tr>
								<td><?php echo $row['id'] ?></td>
								<td><?php echo $row['name'] ?></td>
								<td><?php echo $row['school'] ?></td>
								<td><input type="text" name="qty_<?php echo $row['id'] ?>" value="<?php echo $row['qty'] ?>" placeholder=""></td>
								<td><a href="<?php echo base_url('cart/delete/'.$row['id']) ?>" title="Xóa">Xóa</a></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
					<br/>
					<div class="col-md-push-8">
						<button type="submit" value="Cập nhật">Cập nhật</button>
						<a href="<?php echo site_url('order/checkout') ?>" title="" class="button" style="color: black; padding: 7px 10px">Đăng ký mượn</a>
						
					</div>
				</form>
			<?php else: ?>
				<h4 style="font-weight: bold">
					* Không có thiết bị nào trong danh sách đăng ký mượn
				</h4>
			<?php endif; ?>
		</div>		
	</div>
	<div class="" style="margin-bottom: 50; height: 50px">
		
	</div>
</div>
<style type="text/css" media="screen">
	.borrow{
		font-size: 14px;
		color: blue;
		font-weight: bold;
		background: lightskyblue;
		text-decoration: none;
		position: relative;
		border: none;
		border-radius: 10px;
		width: 50%;
		margin-left: 25%;
		text-transform: uppercase;
		padding: 0 .5em;
		outline: none;
	}
</style>
<style type="text/css">
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
.button, button{
	border-radius: 10px;
	padding:  5px 10px;
	border: 1px;
	background-color: lightskyblue; 
}
</style>