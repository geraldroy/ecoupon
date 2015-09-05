<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('layouts/_head'); ?>

  <div class="column centered">
    <div class="ui secondary menu">
      <a class="item">Home</a>
      <a class="item">Item</a>
      <a class="item">Item</a>
      <div class="right menu">
        <div class="item">
          <div class="input">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search...">
          </div>
        </div>
      </div>
    </div>
    <img src="/img/seeds.jpeg" alt="" class="home-img">
  </div>

  <section id="grid" class="ui segment">
    <div class="ui stackable grid">
      <div class="four wide column">
        <h1>Semantic UI</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, ipsam ad molestias autem iure rem nulla sequi fugiat ea architecto ipsum. Necessitatibus, deleniti. Provident dolor odit iusto, ullam laboriosam. Laudantium!</p>      
      </div>
      <div class="four wide column">
        <h1>Semantic UI</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, ipsam ad molestias autem iure rem nulla sequi fugiat ea architecto ipsum. Necessitatibus, deleniti. Provident dolor odit iusto, ullam laboriosam. Laudantium!</p>      
      </div>
      <div class="four wide column">
        <h1>Semantic UI</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, ipsam ad molestias autem iure rem nulla sequi fugiat ea architecto ipsum. Necessitatibus, deleniti. Provident dolor odit iusto, ullam laboriosam. Laudantium!</p>      
      </div>
      <div class="four wide column">
        <h1>Semantic UI</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, ipsam ad molestias autem iure rem nulla sequi fugiat ea architecto ipsum. Necessitatibus, deleniti. Provident dolor odit iusto, ullam laboriosam. Laudantium!</p>      
      </div>
    </div>    
  </section>

<?php $this->load->view('layouts/_footer'); ?>
