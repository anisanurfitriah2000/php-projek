<style>
.badge:after{
content:attr(value);
font-size:22px;
background: red;
border-radius:50%;
padding:3px;
position:relative;
left:-8px;
top:-10px;
opacity:0.9;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">   
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Home') ?>">Homee</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="<?= base_url('about')?>">About</a>
              </li>
              
              <?php

              $this->session = \Config\Services::session();
        if( $this->session->get('tipeuser')=='admin')
        { 

          ?>

            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('freshfish')?>">fresh fish</a>
              </li>  


              <!--
              <li class="nav-item">
              <a class="nav-link" href="<?= base_url('Fishfood')?>">Fish food</a>
              </li>  
			  -->


          <?php
                
        } 
        ?>

                     
              <li class="nav-item">
              <a class="nav-link" href="<?= base_url('history')?>">History</a>
              </li>  
              <?php if(! session() ->get('logged_in')) :?>
              <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Login') ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('register') ?>">Register</a>
                </li> 
                <?php else:?>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('logout') ?>">logout</a>
                </li> 
                <?php endif;?>
            </ul>
        </div>
      </ul>

      
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      
  

  <a href='shop/keranjang'><i class="fa badge" style="font-size:24px; color:black" value=<?php echo $carttotal;?>>    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</i></a>

  
</svg>
               


    </div>
  </div>
</nav>