<?php $this->tpl('header');?>
    <link rel="stylesheet" href="/public/css/visa-home.css">
    <?php foreach ($oceanList as $k => $item):?>
    <div class="container-fluid mod-wrap" id="ocean_country_list_<?php echo $k;?>">
      <div class="row">
        <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
          <div class="mod-title">
            <?php echo $item['name'];?><small>已支持 15 个国家和地区</small>
            <a href="" class="mod-more valign-middle"><i class="iconfont icon-more"></i><span>全部国家</span></a>
          </div>
          <div class="card-slider-box">
            <div class="row card-slider mod-item">
              <?php foreach ($item['countries'] as $val):?>
              <div class="col-sm-12 col-md-4">
                <a href="/?mod=visa&act=country&supplierId=<?php echo $supplierId;?>&countryId=<?php echo $val['id'];?>">
                  <span class="thumb thumb-219">
                    <span class="thumb-img" style="background-image: url(img/thumb/japan.jpg)">
                      <p class="country valign-middle"><?php echo $val['name'];?><small><?php echo $val['en_name'];?></small></p>
                      <p class="price valign-middle"><sup>￥</sup>399<sub>起</sub></p>
                      <span class="mask-bg light"></span>
                    </span>
                  </span>
                </a>
              </div>
              <?php endforeach;?>
            </div><!-- /.row -->
          </div>
        </div>
      </div>
    </div>
    <?php endforeach;?>

    <div class="container-fluid tabbar">
      <div class="tabbar-mod">
        <div class="row">
          <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <div class="tabbar-item">
              <ul class="list-unstyle list-inline">
                <li><a href=""><i class="iconfont icon-visa"></i>首页</a></li>
                <li><a href=""><i class="iconfont icon-order"></i>订单</a></li>
                <li><a href=""><i class="iconfont icon-wode"></i>我的</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $this->tpl('footer');?>
    
    <script type="text/javascript">
      $(function(){
        var countryList = JSON.parse('<?php echo json_encode($countryList)?>');
        $("#search_country").keyup(function(e){
          var matchObj = $("#match_result");
          var noMatchObj = $("#no_match_result");
          var inputText = $(this).val().trim();
          if (!inputText) {
            !matchObj.hasClass('hidden') && matchObj.addClass('hidden');
            !noMatchObj.hasClass('hidden') && noMatchObj.addClass('hidden');
            return false;
          }

          inputText = inputText.toLowerCase();
          var matches = '';

          if (inputText) {
            $.each(countryList, function(idx, val){
              if (val.name.indexOf(inputText) != -1 || val.en_name.toLowerCase().indexOf(inputText) != -1 || val.pinyin.indexOf(inputText) != -1) {
                matches += '<a href="/?mod=visa&act=country&supplierId=<?php echo $supplierId;?>&countryId='+val.id+'" class="list-group-item"><span class="badge">'+val.number+'</span>'+val.name+' <small>'+val.en_name+'</small></a>';
              }
            });
          }
          if (matches != '') {
            !noMatchObj.hasClass('hidden') && noMatchObj.addClass('hidden');
            matchObj.html(matches).removeClass('hidden');
          } else {
            !matchObj.hasClass('hidden') && matchObj.addClass('hidden');
            noMatchObj.removeClass('hidden');
          }
        });
      });
    </script>