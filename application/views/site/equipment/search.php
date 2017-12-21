
<div class="box-center" style="margin: 50px"><!-- The box-center equipment-->
  <div class="tittle-box-center" style="margin-bottom: 30px;">
    <h2>Kết quả tìm kiếm với từ khóa "<?php echo $key?>"</h2>
  </div>
  <div class="box-content-center equipment"><!-- The box-content-center -->
    <?php foreach ($list as $row):?>
    <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd" style="margin-bottom: 50px ">
        <div class="hover14 column">
        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
          
          <div class="agile_top_brand_left_grid1">
            <figure>
              <div class="snipcart-item block">
                <div class="snipcart-thumb">
                  <a href="<?php echo base_url('equipment/view/'.$row->id) ?>"><img src="<?php echo base_url('upload/equipment/'.$row->image_link) ?>" style="max-height: 150px" alt=" " class="img-responsive"></a>
                  <p><?php echo $row->name ?></p>
                  <h4><?php echo $row->id ?></h4>
                </div>
                <br/>
                <a class='button borrow' style='float:left;padding:8px 15px;font-size:16px; text-align: center;' href="<?php echo base_url('cart/add/'.$row->id) ?>" title='Mượn'>Mượn</a>
                    <div class='clear'></div>
              </div>
            </figure>
          </div>
        </div>
        </div>
      </div>
    <?php endforeach;?>
    <div class="clear"></div>
  </div><!-- End box-content-center -->		    
</div>
