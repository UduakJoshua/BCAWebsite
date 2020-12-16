    <!--controller-->
    <?php
        include_once 'model/control/controller.php';
        
        
        
        ?>
        
        
        
        
        
        <!--header begins-->

        <?php
        include_once 'model/inc/header.php';
        
        
        
        ?>



        <!--End Header-->

        <!--Google map begins here-->
        <div class="google--map my-0 py-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.474149505512!2d7.01644781374763!3d4.859918596471121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069d2088be5635b%3A0x537deef3d17c0503!2sBCA!5e0!3m2!1sen!2sng!4v1604919002096!5m2!1sen!2sng" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

        <!--Google map ends here-->

        <div class="container">
        <div class="row my-4">
        <div class="col-md-6">
        
        <?php if ($msg!=''):?>
        <div class = "alert <?php echo $msgClass;?>"><?php echo $msg?></div>

        <?php endif; ?> 

        <?php if ($msgFill!=''):?>
        <div class = "alert <?php echo $msgClass;?>"><?php echo $msgFill?></div>

        <?php endif; ?>
            
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="contact--form" method="POST">
            <h4 class="h4-border ">We Love to Hear From You</h4>
               
                <div class="mb-3"><input  class = " form-control" type="text" name="name" placeholder="name" ></div>

               
                <div class="mb-3"><input class = "form-control" type="text" name="mail" placeholder="email" ></div>

              
                <div class="mb-3"><input  class="form-control" type="text" name="subject" placeholder="subject" ></div>

                <div class="mb-3"><textarea  class=" form-control" name="message" id="contact-message" rows=4 placeholder="Message"></textarea></div>
                <button class="btn btn-danger mb-4  form-control" type="submit" name="submit" >Submit</button>


            </form>
            </div>

            <div class="col-md-6 contact__right">
              <h4 class="h4-border ">Contact Us</h4>
             
              <div>
                <p>Need more information? Feel free to contact us with the details below. </p>
                <p><i class="fa fa-phone "></i> 08037808626 | 0810810162 </p>
                <p><i class="fa fa-envelope "></i> adminbca@blessedchildrenacademy.com</p>
                <p><i class="fa fa-map-marker"></i> 18 Amaehule Street, Eliogbolo, Port Harcourt, 
                Rivers State |
                    1 Kono Close Rumuodomaya, Port Harcourt, Rivers State  </p>
              </div>
              
              <h4 class="h4-border ">Working Hours</h4>
              <p>Monday - Friday | 7.30 a.m - 5 p.m</p>
              

            </div>
            </div>
        </div>

       
       <!--footer-->
        <?php
            include_once 'model/inc/footer.php';
        ?>


     