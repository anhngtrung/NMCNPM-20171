  <!-- video -->
<script type='text/javascript' src='<?php echo public_url()?>js/tivi/jwplayer.js'></script>
<script type='text/javascript'>
jQuery('document').ready(function(){
   jwplayer('mediaspace').setup({
    'flashplayer': '<?php echo public_url()?>js/tivi/player.swf',
    'file': 'https://www.youtube.com/watch?v=zAEYQ6FDO5U',
    'controlbar': 'bottom',
    'width': '560',
    'height': '315',
    'autoplay' : true
  });
})
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('a.tab').click(function(){
    var an_di=$('a.selected').attr('rel');//lấy title của thẻ <a class='active'>
    $('div#'+an_di).hide();//ẩn thẻ <div id='an_di'>
    $('a.selected').removeClass('selected');
    $(this).addClass('selected');
    var hien_thi=$(this).attr('rel');//lấy title của thẻ <a> khi ta kick vào nó
    $('div#'+hien_thi).show();//hiện lên thẻ <div id='hien_thi'>
    });
  });
</script> 

<!-- zoom image -->
<script src="<?php echo public_url()?>/js/jqzoom_ev/js/jquery.jqzoom-core.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo public_url()?>/js/jqzoom_ev/css/jquery.jqzoom.css" type="text/css">
<script type="text/javascript">
  $(document).ready(function() {
    $('.jqzoom').jqzoom({
              zoomType: 'standard',
      });
  });
</script>
<!-- end zoom image -->

 

<div class="box-center" style="margin: 50px"><!-- The box-center equipment-->
  <div class="tittle-box-center" style="margin-bottom: 50px">
    <h2>Chi tiết thiết bị</h2>
  </div>
  <div class="box-content-center equipment"><!-- The box-content-center -->
    <div class='equipment_view_img col-md-6 col-xs-12'>
      <div>
        <a href="<?php echo base_url('upload/equipment/'.$equipment->image_link)?>" class="jqzoom" rel='gal1'  title="triumph" >
          <img  src="<?php echo base_url('upload/equipment/'.$equipment->image_link)?>" alt='Tivi LG 520' style="width:280px !important">
        </a>
      </div>
      
      <!-- <div class='clear' style='height:10px'></div> -->
      <div class="clearfix" >
      <ul id="thumblist" >
        <li>
          <a class="zoomThumbActive" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?php echo base_url('upload/equipment/'.$equipment->image_link)?>',largeimage: '<?php echo base_url('upload/equipment/'.$equipment->image_link)?>'}">
          <img src='<?php echo base_url('upload/equipment/'.$equipment->image_link)?>'>
          </a>
        </li>
        <?php if(is_array($image_list)):?>
          <?php foreach ($image_list as $img):?>
            <li>
              <a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?php echo base_url('upload/equipment/'.$img)?>',largeimage: '<?php echo base_url('upload/equipment/'.$img)?>'}">
                <img src='<?php echo base_url('upload/equipment/'.$img)?>'>
              </a>
            </li>
          <?php endforeach;?>
        <?php endif;?>
      </ul>
      </div>
    </div>
   
    <div class='equipment_view_content col-md-6 col-xs-12'>
      <h2><?php echo $equipment->name?></h2>
      <p class='option'>
        Viện/ Khoa: 
        <a href="<?php echo base_url('equipment/'.$equipment->id)?>" title="<?php echo $equipment->school?>">
           <b><?php echo $equipment->school?></b>    
        </a>
      </p>
      <p class="option">
        Số lượng: <?php echo $equipment->count ?>
      </p>
      <p class="option">
        Đơn vị: <?php echo $equipment->unit ?>
      </p>
      <p class="option">
        Tình trạng: <?php echo $equipment->status ?>
      </p>
      <p class='option'>
        Lượt xem: <b><?php echo $equipment->view?></b> 
      </p>
      <br/>
       
      <a class='button borrow' style='float:left;padding:8px 15px;font-size:16px; text-align: center;' href="<?php echo base_url('cart/add/'.$equipment->id) ?>" title='Mượn'>Thêm vào giỏ</a>
    
    </div>
    <div class='clear' style='height:15px'></div>
  </div>
</div>
<div class="clearfix">
  
</div>
<div style="height: 50px;">
  
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
    width: 30%;
    text-transform: uppercase;
    padding: 0 .5em;
    outline: none;
  }
</style>