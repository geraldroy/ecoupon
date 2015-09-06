<html>
<head>
  <meta charset="UTF-8">
  <title>ECoupon</title>
  <script src="/js/jquery.js"></script>
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/semantic.min.css">
  <link rel="stylesheet" href="/fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic,300" rel="stylesheet" type="text/css">
</head>
<body>

<?php $this->load->view('layouts/_nav'); ?>
<script src="<?php echo base_url(); ?>/js/app.js"></script>
<script src="<?php echo base_url(); ?>/js/fullpage.js"></script>

<div id="fullpage">
  <div class="desc column" id="section">
    <h1>How it Works</h1>
  </div>
  <div class="cont" id="section">
    <h3>
      Look for our stickers on eco-friendly and local products.
    </h3>
    <img src="<?php echo base_url(); ?>/img/step1.png" alt="">
  </div>

  <div class="cont" id="section">
    <h3>
      Great! With your help, NGOs will get funded for their cause.
    </h3>
  </div>


  <div class="cont" id="section">
    <h3>
      See that code on the sticker?
    </h3>
    <img src="<?php echo base_url(); ?>/img/logocode.png" alt="" class="resize">
  </div>

  <div class="cont" id="section">
    <h3>
      Enter the code on our site.
    </h3>
    <img src="<?php echo base_url(); ?>/img/demo1.png" alt="" class="resize-big">
  </div>

  <div class="cont" id="section">
    <h3>
      Pick a tree you want to sponsor.
    </h3>
    <img src="<?php echo base_url(); ?>/img/demo2.png" alt="" class="resize-big">
  </div>


  <div class="cont" id="section">
    <h3>
      Congrats! An NGO will plant your tree on your behalf! :)
    </h3>
  </div>

  
</div>
  

<?php $this->load->view('layouts/_footer'); ?>
