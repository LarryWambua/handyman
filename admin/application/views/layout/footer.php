    <div id="myModal" class="reveal-modal" data-reveal> 
        
        <div class="callout panel">
        <div class="row ">
        
          <div class="large-6 columns">
            <p class="lead">Use this form to talk to us.</p> 
                <form data-abide>
                    <label>Name: </label>
                    <input type="text" name="name" placeholder="Your full name" required=""/>
                    
                    <label>Email: </label>
                    <input type="email" name="email" placeholder="e.g. someone@domain.com" required=""/>
                    
                    <label>Phone: </label>
                    <input type="number" name="phone" placeholder="e.g. +254722222222" required=""/>
                    
                    <label>Message</label>
                    <textarea name="message" required=""></textarea>
                    
                    <input type="submit" value="Send" class="alert button"/>
                </form>
          </div>
          <div class="large-6 columns" align="center"">
                <p class="lead">Our Contacts.</p>
                <p>P.O. Box 368362 Nairobi</p>
                <p>Tel: +254 72232 2123</p>
                <p>Tel: +254 72232 2123</p>
                <p>Tel: +254 72232 2123</p>
                <p>View Park Towers</p>
                <p>Nairobi Kenya</p>
          </div>
        </div>
        </div>
        <a class="close-reveal-modal">&#215;</a> 
    </div>
    
    <div id="lModal" class="reveal-modal tiny" data-reveal> 
        <h3>Login</h3>
        <form method="post" action="<?php echo site_url()?>/users/login" data-abide>
            <label>Username / Email</label>
            <input type="text" name="uname" placeholder="Username / Email" required=""/>
            
            <label>Password</label>
            <input type="password" name="passwd" placeholder="Password" required="" />
            
            <input type="submit" value="Login" class="alert button"/>
        </form>
        <a class="close-reveal-modal">&#215;</a> 
    </div>
    
    <script src="<?php echo base_url()?>res/js/vendor/jquery.js"></script>
    <script src="<?php echo base_url()?>res/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

</body>
</html>