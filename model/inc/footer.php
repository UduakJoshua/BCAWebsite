<?php
        include_once 'model/control/controller.php';
        
        
        
        ?>

<!--Footer begins here-->
<footer class="mt-0">
    <!--footer top-->
    <div class="row text-white ml-0 mr-0">
        <div class="col-md-4 footer-top">
            <h4>About Us</h4>
            <p>
            Blessed Children Academy was established out of the necessity 
            to equip the young ones educationally, morally, spiritually and otherwise,
            hence, raising leaders that will transform the society.
            </p>
            <p><i class="fa fa-map-marker fa-3"> Primary:</i> 18 Amaehule Street, Eliogbolo, Port Harcourt, Rivers State </p>
            <p><i class="fa fa-map-marker fa-3"> Secondary:</i>  1 Kono Close Rumuodomaya, Port Harcourt, Rivers State  </p>

            <p><i class="fa fa-envelope-o"></i> adminbca@blessedchildrenacademy.com </p>
            <p><i class="fa fa-phone"></i> +234 8037 808 626 | +234 8180 810 162</p>
        </div>

        <div class="col-md-4 footer-top ">
            <h4>Gallery</h4>
            <div class="image-gallery">
                <a href="#"><img src="assets/img/pryassembly.jpg" alt="pupils"></a>
                <a href="#"><img src="assets/img/career.jpg" alt="career day"></a>
                <a href="#"><img src="assets/img/sports.jpg" alt="inter-house sports"></a>
            </div>
            <div class="image-gallery">
                <a href="#"><img src="assets/img/practical.jpg" alt="baking"></a>
                <a href="#"><img src="assets/img/outing.jpg" alt="excursion"></a>
                <a href="#"><img src="assets/img/MusicStudio.jpg" alt=""></a>
            </div>
            <div class="image-gallery">
                <a href="#"><img src="assets/img/high-building.jpg" alt="secondary building"></a>
                <a href="#"><img src="assets/img/MusicStudio.jpg" alt="school party"></a>
                <a href="#"><img src="assets/img/MusicStudio.jpg" alt=""></a>
            </div>


            
        </div>

        <div class="col-md-4 footer-top">
            <h4>Get in Touch</h4>
            <p>Need more information, you can reach us through the following:</p>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="contact--form" method="POST">
                <input type="text" placeholder="name" class="mb-2">
                <input type="email" placeholder="email" class="mb-2">
                <textarea name="message" id="" cols="30" rows="10" class="mb-2" placeholder="Message"></textarea><br>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>

            
        </div>
    </div>

    <!--end footer top-->

    <!--footer base-->
    
    <div class="footer-base">
        <p>This is a product of Blessed Children Academy. All right reserved &copy;2020 | Designed by KodeNet Solutions</p>
    </div>  
    <!--end footer base-->
</footer>
<!--Footer ends here-->

<!--end of the main container div-->
  </div>

      <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="assets/js/counters.js"></script>
    <script src="assets/js/lightbox-plus-jquery.js"></script>
  </body>
</html>