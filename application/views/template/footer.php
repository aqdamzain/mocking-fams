<!-- Footer -->
<footer>

<section id="footer">
    
    <div class="container">

        <div class="row text-center text-xs-center text-sm-left text-md-left">

            <!-- Contact Information -->
            <div class="col-xs-12 col-md-6 col-lg-4">

                <h6 class="white mt-4">About Us</h6>
                
                <ul class="list-unstyled quick-links">
                    <li><h5 class="white light">Berdiri sejak tahun 2015, Famstraveller menjadi jasa perjalanan wisata terbesar dan terpercaya di Indonesia </h5></li>						
                    <li><h5><i class="fas fa-map-marker-alt mr-2"></i>Jl. Parungseah (Belakang Secapa) Kabupaten Sukabumi, Jawa Barat 43151</h5></li>
                    <li><h5><i class="fas fa-envelope mr-2"></i>eldika@famstraveller.com</h5></li>
                </ul>
            </div>

            <!-- Social Networks -->
            <div class="col-xs-12 col-md-6 col-lg-4">

                <img class="svgcenter mt-4 logo-light" src="assets/images/logo.png" alt="" >
        
                <ul class="list-unstyled list-inline mt-3 social text-center">
                    <li class="list-inline-item"><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/famstraveller/"><i class="fab fa-instagram"></i></a></li>
                </ul>

                <ul class="list-unstyled text-center quick-links mt-3">
                    <li><a href="index.html"><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href="tour-search-2-cols-card.html"><i class="fa fa-angle-double-right"></i>See our Tours</a></li>
                    <li><a href="about.html"><i class="fa fa-angle-double-right"></i>About Us</a></li>
                    <li><a href="contact.html"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
                </ul>

            </div>


            <!-- Instagram Feed -->
            <div  id="instafeed" class="col-xs-12 col-md-6 col-lg-4 grid mx-auto">
                <h6 class="white mt-4 mb-3">Instagram Gallery</h6>
                <div class="grid-sizer"></div>
            </div>

        </div>

         <!-- GO UP rectangle -->
         <div class="scale-up">
            <a  class="smooth-scroll  rectangle-right" href="#" >
                <div class="go-up px-1">
                    <i class="fas mb-2 fa-arrow-up"></i><br>
                    <h6 class="text-center letters-up">GO<br>UP</h6> 
                </div>
            </a>  
        </div>

        <!-- Copyright Info-->
        <div class="row">
            <div class="col-12 mt-2 mt-sm-2 text-center text-white">
                <div class="separatorfullwidth"></div> 
                <p class="white footer-bottom">Copyright 2020 © Famstraveller <a class="text-green ml-2" href="http://localhost/famstraveller" target="_blank"></a></p>
            </div>
        </div>	            
    </div>

</section>

</footer>
<!-- End of Footer -->
    <script>
    //pagination page click
    ajaxpagination(theUrl=false);
    $(document).on("click", "#pagination .pagination a", function(){
        var theUrl = $(this).attr('href');
        ajaxpagination(theUrl);
        return false;
    });
    function ajaxpagination(theUrl){
        var base_url = "<?php echo site_url('Welcome/index_pagination') ?>";
        if(theUrl){
            base_url = theUrl;
        }
        $.ajax({
            type:"POST",
            url: base_url,
            data:"",
            success: function(response){
                $("#pagination").html(response);
            }
        });
    }

    $('select').change(function () {
        $data = $(this).val();
        $url_id =  $("#id_destinasi").attr('value');
        $.post( "<?php echo base_url() ?>/welcome/index_harga", { harga: $data}, function(result){
            $("#detail-harga").html(result);
        });
        $("html, body").animate({ scrollTop: $("#smooth-scroll").offset().top }, "slow");
    });

    </script>
              
</body>
</html> 