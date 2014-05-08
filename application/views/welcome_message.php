<?php $this->load->view('layout/header'); ?>
<div class="row panel">
<div class="large-12 columns">
    <ul class="example-orbit" data-orbit data-options="animation:slide;
                  pause_on_hover:false;
                  animation_speed:300;
                  navigation_arrows:true;
                  bullets:true;">
          <li>
            <img src="<?php echo base_url()?>res/img/houses.png" alt="slide 1" />
            <div class="orbit-caption">
              <h5 style="color: #cccc99">Call us now or visits our offices on View Park Towers to find out more on the houses we have for offer.</h5>
            </div>
          </li>
          <li>
            <img src="<?php echo base_url()?>res/img/land.png" alt="slide 2" />
            <div class="orbit-caption">
              <h5 style="color: #cccc99;">We buy and sell land. If you are looking to buy land, call +2547000000. If you are selling call us still.</h5>
            </div>
          </li>
          <li>
            <img src="<?php echo base_url()?>res/img/home.png" alt="slide 3" />
            <div class="orbit-caption">
              <h3 style="color: #cccc99;">We have a wide range of homes and/or apartments ready for you.</h3>
            </div>
          </li>
        </ul>
</div>

<div class="row">
    <div class="large-12 columns" style="background: none;">
           
    <div class="row">
      <div class="large-3 columns panel">
        <a href="">
            <img src="<?php echo base_url()?>res/img/house-ico.png"/>
            <h3>Houses</h3>
            <p>View our Wide Range of houses we have for offer.</p>
        </a>
      </div>
      <div class="large-3 columns panel">
        <a href="">
            <img src="<?php echo base_url()?>res/img/homes-ico.png"/>
            <h3>Homes</h3>
            <p>We have homes for sale too. Click here to view them.</p>
        </a>
      </div>
      <div class="large-3 columns panel">
        <a href="">
            <img src="<?php echo base_url()?>res/img/apart-ico.png"/>
            <h3>Apartments</h3>
            <p>We have apartments in Kile, Kiambu etc. View here.</p>
        </a>
      </div>
      <div class="large-3 columns panel">
        <a href="">
            <img src="<?php echo base_url()?>res/img/land-ico.png"/>
            <h3>Plots / Land</h3>
            <p>We buy and sell land. Visit here for more details.</p>
        </a>
      </div>
    </div>
	</div>

    </div>
</div>
<?php $this->load->view('layout/footer'); ?>
