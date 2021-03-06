<?php $this->load->view('layouts/_head'); ?>
<?php $this->load->view('layouts/_nav'); ?>
<script src="<?php echo base_url(); ?>js/app.js"></script>
<div id="fullpage">
  <div class="desc column" id="section">
    <h1>How it Works</h1>
  </div>
  <div class="cont" id="section">
    <h3>
      Look for our stickers on eco-friendly and local products.
    </h3>
    <img src="<?php echo base_url(); ?>img/step1.png" alt="">
  </div>

  <div class="cont" id="section">
    <h3>
      Great! With your help, NGOs will get funded for their cause.
    </h3>
  </div>

<div class="cont">
  <h3>
    See that code on the sticker?
  </h3>
  <img src="<?php echo base_url(); ?>img/step2.png" alt="" class="resize">
</div>

<div class="cont">
  <h3>
    Enter the code on our site.
  </h3>
  <img src="<?php echo base_url(); ?>img/step3.png" alt="">
</div>

<div class="cont">
  <h3>
    Pick a tree you want to sponsor.
  </h3>
  <img src="<?php echo base_url(); ?>img/step4.png" alt="">
</div>

  <div class="cont" id="section">
    <h3>
      Congrats! An NGO will plant your tree on your behalf! :)
    </h3>
  </div>


<div class="cont">
  <h3>
    Congrats! An NGO will plant your tree on your behalf! :)
  </h3>
  <img src="<?php echo base_url(); ?>img/step5.jpg" alt="" class="resize-big">

</div>
  

<?php $this->load->view('layouts/_footer'); ?>
