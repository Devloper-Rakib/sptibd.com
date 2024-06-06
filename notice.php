<title>SPTI || Notice</title>

<?php
    include("header.php");
    ?>
    <!-- end: header -->


    <!-- BING: admission marquee -->
    <?php
    include("admissionmarquee.php");
    ?>
    <!-- END: admission marquee -->

      <div class="container">
         <div class="row">

            <!----Start College Staffs---->
            <div class="col-md-12">
               <h4 class="title-bar">Notice Board</h4>
               <div class="row">
                  <div class="col-md-12">
                     <div class="card" style="padding: 15px; ">
                        <table id="example" class="table table-striped table-bordered table-sm" style="width:100%">
                          <thead>
                              <tr>
                                  <th class="text-center" width="15%">Date</th>
                                  <th>Title</th>
                                  <th width="5%">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                           <tr><th colspan="3" class="text-center">No Data Found</th></tr>                          </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <!----Start Campus Facilites---->
            <div class="col-md-12">
               <h4 class="title-bar">Campus Facilites</h4>
               <div class="row">
                  <div class="col-md-4">
                     <div class="card" style="text-align: center;">
                        <img style="margin: 0px auto;width:30%;" src="image/wifi.png" alt="">
                        <strong>Wifi</strong>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="card" style="text-align: center;">
                        <img style="margin: 0px auto;width:30%;" src="image/lab.png" alt="">
                        <strong>Well Lab</strong>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="card" style="text-align: center;">
                        <img style="margin: 0px auto;width:30%;" src="image/cost.png" alt="">
                        <strong>Low Cost</strong>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="card" style="text-align: center;">
                        <img style="margin: 0px auto;width:30%;" src="image/hotel.png" alt="">
                        <strong>Hostel</strong>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="card" style="text-align: center;">
                        <img style="margin: 0px auto;width:30%;" src="image/Waiver.png" alt="">
                        <strong>Up to 50% Waiver</strong>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="card" style="text-align: center;">
                        <img style="margin: 0px auto;width:30%;" src="image/bookshelf.png" alt="">
                        <strong>Rich Library</strong>
                     </div>
                  </div>
               </div>
            </div>
 <!---Start footer Area--->
            <div class="col-md-12">
               <div style="padding: 10px 0px; " class="content">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="card">
                           <div class="card-header">
                              <h5>Useful Link</h5>
                           </div>
                           <ul class="mylink list-group">
                              <li class="list-group-item"><i class="fas fa-angle-double-right"></i> <a href="http://www.bteb.gov.bd/ " target="_blank">Bangladesh Technical Education Board</a></li>
                              <li class="list-group-item"><i class="fas fa-angle-double-right"></i><a href="http://www.techedu.gov.bd/" target="_blank"> Directorate of Technical Education</a></li>
                              <li class="list-group-item"><i class="fas fa-angle-double-right"></i> <a href="http://www.tmed.gov.bd/" target="_blank">Technical and Madrasah Education Division</a></li>
                              <li class="list-group-item"><i class="fas fa-angle-double-right"></i> <a href="http://www.banbeis.gov.bd/" target="_blank">BANBEIS</a></li>
                              <li class="list-group-item"><i class="fas fa-angle-double-right"></i> <a href="http://btebadmission.gov.bd/" target="_blank">Diploma Admission</a></li>
                              
                            </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="address card">
                           <div class="card-header">
                              <h5>Contact us</h5>
                           </div>
                           <div class="card-body">
                              <h6><strong>Sylhet Professional Technical Institute</strong></h6>
                              Address: <strong>KMSS Bhaban, Dargah Gate, Sylhet-3100</strong><br><br>
                              Email: <strong>spti.spci@gmail.com</strong><br><br>
                              Phone: <strong>+8801734033583, +8801309136028</strong><br><br>
                              Web: <strong><a href="http://sptibd.com" target="_blank">www.sptibd.com</a></strong><br>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer class="footer">
         <div class="container">
            <div class="row">
               <div class="col-6">
                  <div class="copyright">
                     &copy 2024 <a href="">Sylhet Professional Technical Institute</a>, All rights reserved.
                  </div>
               </div>
               <div class="col-6 text-right">
                  Powered By : <a href="https://www.facebook.com/" target="_blank">SPTI</a>
               </div>
            </div>
         </div>
      </footer>
      <button onclick="CodeCanalTopFun()" id="CCBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

      <script src="js/jquery-3.3.1.slim.min.js" ></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script>
         $('.owl-carousel').owlCarousel({
             loop:true,
             margin:15,
             nav:false,
             dots:false,
             autoplay:true,
             autoplayTimeout:1000,
             autoplayHoverPause:true,
             responsive:{
                 0:{
                     items:1
                 },
                 600:{
                     items:3
                 },
                 1000:{
                     items:5
                 }
             }
         });
         var owl = $('.owl-carousel');
            owl.owlCarousel();
            // Go to the next item
            $('.customNextBtn').click(function() {
                owl.trigger('next.owl.carousel');
            })
            // Go to the previous item
            $('.customPrevBtn').click(function() {
                // With optional speed parameter
                // Parameters has to be in square bracket '[]'
                owl.trigger('prev.owl.carousel', [300]);
            });
         
         
            // When the user scrolls down 20px from the top of the document,we will show the button
            window.onscroll = function() {CodeCanalScrollFun()};
         
            function CodeCanalScrollFun() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("CCBtn").style.display = "block";
                } else {
                    document.getElementById("CCBtn").style.display = "none";
                }
            }
         
            // When the user clicks on the back to top button,it'll scroll to the top of the document smoothly
            function CodeCanalTopFun() {
                $('html, body').animate({scrollTop: 0}, 1000);
                return false;
            } 
      </script>
      <script src="js/jquery.dataTables.min.js"></script>
      <script src="js/dataTables.bootstrap4.min.js"></script>
      <script>
         baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
      </script>
      <script src="animate-scroll.js"></script>
      <script>
            $(document).foundation();  
            $(document).animateScroll();
          

            var doc = document.documentElement;
            doc.setAttribute('data-useragent', navigator.userAgent);
          </script>
          <script>
       //Script for Fixed Menu
          window.onscroll = function() {myFunction()};

             var header = document.getElementById("myfixed");
             var sticky = header.offsetTop;

             function myFunction() {
               if (window.pageYOffset >= sticky) {
                 header.classList.add("sticky");
               } else {
                 header.classList.remove("sticky");
               }
             };
             

             $(document).ready(function() {
            $('#example').DataTable();
        } );
   </script>
   </body>
</html>