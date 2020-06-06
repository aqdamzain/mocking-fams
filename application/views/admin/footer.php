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
        $(document).on("click", "#destinasiPopuler .pagination a", function(){
            var theUrl = $(this).attr('href');
            ajaxpagination(theUrl);
            return false;
        });
        $(document).on("click", "#destinasiPopuler .card-content .btn-danger", function(){
            if(confirm('Anda yakin hapus?')){
                theUrl = $(this).attr('href');
                ajaxpagination(theUrl);
            }
            return false;
        });
        $("#tambahDestinasi").submit(function(event){
            event.preventDefault(); //prevent default action
            $('#exampleModal').modal('hide');
            var post_url = $(this).attr("action"); //get form action url
            var request_method = $(this).attr("method"); //get form GET/POST method
            var form_data = new FormData(this); //Creates new FormData object
            $.ajax({
                url : post_url,
                type: request_method,
                data : form_data,
                contentType: false,
                cache: false,
                processData:false
            }).done(function(response){ //
                $("#section4").html(response);
            });
        });

        $("#formEditDestinasi").submit(function(event){
            event.preventDefault(); //prevent default action
            $('#editDestinasi').modal('hide');
            var post_url = $(this).attr("action"); //get form action url
            var request_method = $(this).attr("method"); //get form GET/POST method
            var form_data = new FormData(this); //Creates new FormData object
            $.ajax({
                url : post_url,
                type: request_method,
                data : form_data,
                contentType: false,
                cache: false,
                processData:false
            }).done(function(response){ //
                $("#section4").html(response);
            });
        });

        $('#editDestinasi').on('hidden.bs.modal', function (e) {
            $(this)
                .find("input,textarea,select")
                .val('')
                .end()
                .find("input[type=checkbox], input[type=radio]")
                .prop("checked", "")
                .end();
        });

        function ajaxpagination(theUrl){
            var base_url = "<?php echo site_url('admin/index_pagination') ?>";
            if(theUrl){
                base_url = theUrl;
            }
            $.ajax({
                type:"POST",
                url: base_url,
                data:"",
                success: function(response){
                    $("#section4").html(response);
                }
            });
        }    
    </script>

    <script>
        ajaxNewsletter(theUrl=false);
        $(document).on("click", "#editNewsletter", function(){
            var theUrl = $(this).attr('href');
            ajaxNewsletter(theUrl);
            return false;
        });
        $(document).on("click", "#CloseEditNewsletter", function(){
            var theUrl = $(this).attr('href');
            ajaxNewsletter(theUrl);
            return false;
        });
        function ajaxNewsletter(theUrl){
            var base_url = "<?php echo site_url('admin/index_newsletter') ?>";
            if(theUrl){
                base_url = theUrl;
            }
            $.ajax({
                type:"POST",
                url: base_url,
                data:"",
                success: function(response){
                    $("#section-newsletter").html(response);
                }
            });
        }
    </script>

    <script>
        $(document).on("click", "#listDestinasi .card-content .btn-warning", function () {
            var destinationId = $(this).data('id');
            $("#editDestinasi2 #editId_destinasi").val(destinationId);
        });
    </script>
    <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();
        if(dd<10){
                dd='0'+dd
            } 
            if(mm<10){
                mm='0'+mm
            } 

        today = yyyy+'-'+mm+'-'+dd;
        document.getElementById("berangkat").setAttribute("min", today);
    </script>
</body>
</html> 