<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport">
    <meta name="applicable-device" content="pc,mobile">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <title><?php echo empty($this->_head['title']) ? '一点签' : $this->_head['title'];?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_oqwrjx8qwx4aq0k9.css">
    <link rel="stylesheet" href="/public/css/visa-common.css">
    <!--[if lt IE 9]>
      <script src="/public/js/html5shiv.min.js"></script>
      <script src="/public/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid container-brand">
      <div class="row">
        <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
          <div class="brand-logo">
            <a href="/?supplierId=<?php echo $this->supplierId;?>">
              <span class="thumb thumb-square">
                <span class="thumb-img" style="background-image: url(<?php echo SITE_URL.$supplierInfo['logo'];?>)"></span>
              </span>
            </a>
          </div>
          <h1 class="brand-name"><a href="/?supplierId=<?php echo $this->supplierId;?>"><?php echo $supplierInfo['name'];?></a></h1>
          <!-- banner search Start -->
          <a href="" class="banner-search hidden-md hidden-lg">
            <i class="iconfont icon-sousuo"></i> 输入国家、地区名称(如泰国/taiguo)
          </a>
          <!-- banner search End -->
          <!-- banner search for PC Start -->
          <div class="banner-search placeholder hidden-sm hidden-xs">
            <label for="search_country"><i class="iconfont icon-sousuo"></i></label>
            <input id="search_country" type="text" placeholder="输入国家、地区名称(如泰国/taiguo)">
            <div class="search-nothing hidden" id="no_match_result">
              <p><i class="iconfont icon-29wuchaxunjieguo gray"></i></p>
              <p>O__O “… 抱歉<br>暂时没有这个国家或地区的签证服务<br>您可以 <a href="">点这里</a> 查看所有国家</p>
            </div>
            <div class="list-group search-match hidden" id="match_result">
              <a href="#" class="list-group-item">
                日本 <em>Japan</em>
                <small>亚洲</small>
              </a>
              <a href="#" class="list-group-item">
                斯里兰卡 <em>Sri Lanka</em>
                <small>亚洲</small>
              </a>
              <a href="#" class="list-group-item">
                南非 <em>South Africa</em>
                <small>非洲</small>
              </a>
              <a href="#" class="list-group-item">
                日本 <em>Japan</em>
                <small>亚洲</small>
              </a>
              <a href="#" class="list-group-item">
                斯里兰卡 <em>Sri Lanka</em>
                <small>亚洲</small>
              </a>
              <a href="#" class="list-group-item">
                南非 <em>South Africa</em>
                <small>非洲</small>
              </a>
            </div>
          </div>
          <!-- banner search for PC End -->
          <div class="mod-nav">
            <ul class="list-unstyled list-inline">
              <li class="active"><a href="">亚洲</a></li>
              <li><a href="">美洲</a></li>
              <li><a href="">大洋洲</a></li>
              <li><a href="">欧洲</a></li>
              <li><a href="">非洲</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>