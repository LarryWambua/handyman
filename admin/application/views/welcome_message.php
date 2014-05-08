<?php $this->load->view('layout/header'); ?>
<div style="width: 100%;">
    <div style="width: 20%; float: left; background-color: #990033; height: 800px; padding: 10px;">
        <h1 style="color: white;">Menu</h1> <hr />
        
        <a href="#" class="[secondary alert success] [radius round] button split" style="width: 100%; background-color: #D78B7D;" onclick="go_to(escape('plots'))">Plots <span data-dropdown="drop"></span></a><br>
        <ul id="drop" class="f-dropdown" data-dropdown-content>
          <li><a href="#">This is a link</a></li>
          <li><a href="#">This is another</a></li>
          <li><a href="#">Yet another</a></li>
        </ul>
        
        <a href="#" class="[secondary alert success] [radius round] button split" style="width: 100%; background-color: #D78B7D;" onclick="go_to(escape('houses'))">Houses <span data-dropdown="drop"></span></a><br>
        <ul id="drop" class="f-dropdown" data-dropdown-content>
          <li><a href="#">This is a link</a></li>
          <li><a href="#">This is another</a></li>
          <li><a href="#">Yet another</a></li>
        </ul>
        
        <a href="#" class="[secondary alert success] [radius round] button split" style="width: 100%; background-color: #D78B7D;" onclick="go_to(escape('clients'))">Clients <span data-dropdown="drop"></span></a><br>
        <ul id="drop" class="f-dropdown" data-dropdown-content>
          <li><a href="#">This is a link</a></li>
          <li><a href="#">This is another</a></li>
          <li><a href="#">Yet another</a></li>
        </ul>
        
        <a href="#" class="[secondary alert success] [radius round] button split" style="width: 100%; background-color: #D78B7D;">Accounts <span data-dropdown="drop"></span></a><br>
        <ul id="drop" class="f-dropdown" data-dropdown-content>
          <li><a href="#">This is a link</a></li>
          <li><a href="#">This is another</a></li>
          <li><a href="#">Yet another</a></li>
        </ul>
        
        <a href="#" class="[secondary alert success] [radius round] button split" style="width: 100%; background-color: #D78B7D;">Settings <span data-dropdown="drop"></span></a><br>
        <ul id="drop" class="f-dropdown" data-dropdown-content>
          <li><a href="#">This is a link</a></li>
          <li><a href="#">This is another</a></li>
          <li><a href="#">Yet another</a></li>
        </ul>
        
    </div>
    <div style="width: 78%; float: left;" id="cont">
        <div class="row panel">
        <div class="row">
            <div class="large-12 columns" style="background: none;">
               <img src="<?php echo base_url()?>res/img/houses.png"/>    
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
    </div>
</div>

<script>
    function go_to(str)
    {
        $('#cont').html("");
        $('#cont').load('<?php echo site_url()?>/admin/load_page/'+str);
      //alert(str); 
    }
</script>
<?php $this->load->view('layout/footer'); ?>
