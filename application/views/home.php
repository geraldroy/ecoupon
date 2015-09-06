<?php $this->load->view('layouts/_head'); ?>
<?php $this->load->view('layouts/_nav'); ?>
  <script src="<?php echo base_url(); ?>/js/jquery.js"></script>
  <script src="<?php echo base_url(); ?>/js/semantic.min.js"></script>
  <script src="<?php echo base_url(); ?>/js/app.js"></script>
  <script src="<?php echo base_url(); ?>/js/fullpage.js"></script>

<div class="sixteen wide column">
  <div class="absolute">
   <h1>ECoupon</h1>
    <p>Get a sticker. Plant a tree.</p>
    <div class="ui input">
      <input type="text" placeholder="Enter code..." id="code">
      <button class="ui primary button" id="submit-code">Go</div>
    </div>
  </div>
</div>

<div class="column">
  <img src="<?php echo base_url(); ?>/img/seeds.jpeg" alt="" class="home-img">
</div>
</div>

<div class="cont">
  <div class="ui stackable grid">
    <div class="three column row">
      <div class="column">
        <h1>2000+ Trees</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, ipsam ad molestias autem iure rem nulla sequi fugiat ea architecto ipsum. Necessitatibus, deleniti. Provident dolor odit iusto, ullam laboriosam. Laudantium!</p>
      </div>
      <div class="column">
        <h1>20+ NGOs</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, ipsam ad molestias autem iure rem nulla sequi fugiat ea architecto ipsum. Necessitatibus, deleniti. Provident dolor odit iusto, ullam laboriosam. Laudantium!</p>
      </div>
      <div class="column">
        <h1>... more causes!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, ipsam ad molestias autem iure rem nulla sequi fugiat ea architecto ipsum. Necessitatibus, deleniti. Provident dolor odit iusto, ullam laboriosam. Laudantium!</p>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('layouts/_footer'); ?>
