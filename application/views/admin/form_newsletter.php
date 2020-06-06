        <div id="ajax-newsletter">
            <div class="container formhome2 pt-2 pb-2 mt-2 mb-2">
            <form id="formNewsletter" method="post" action="<?php echo base_url().'/admin/update_newsletter' ?>" enctype="multipart/form-data">
                <div class="row justify-content-end mr-5 mb-5">
                  <a type="button" id="CloseEditNewsletter" class="close" href="<?php echo base_url() ?>/admin/index_newsletter" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </a>
                </div>
                <div class="row">
                    <div class="col-12"><h4 class="text-center bold mb-5"><input type="text" name="textHeader" class="form-control" value="<?php echo $newsletter->textheader ?>"></h4></div>
                    <div class="col-lg-4 col-12 order-1 order-lg-1 mx-auto">
                        <img class="svgcenter worldclass mb-2" src="<?php echo base_url() ?>assets/svgs/worldclass.svg" alt="">
                    </div>
                    <div class="col-lg-4 col-12 order-3 order-lg-2 mx-auto">
                        <img class="svgcenter lovetravel mt-5 mt-lg-0  mb-2" src="<?php echo base_url() ?>assets/svgs/lovetravel.svg" alt="">
                    </div>
                    <div class="col-lg-4 col-6 order-5 order-lg-3 mx-auto">
                        <img class="svgcenter parisicon mt-5 mt-lg-0 mb-2" src="<?php echo base_url() ?>assets/svgs/hottours.svg" alt="">
                    </div>
                    <div class="col-lg-4 col-12 order-2 order-lg-4">
                        <h6 class="mt-3 text-center"><input type="text" name="header1" class="form-control" value="<?php echo $newsletter->header1 ?>"></h6>    
                        <p class="pt-1 px-4 mb-0  black text-justify"><textarea row="2" name="kutipan1" class="form-control"><?php echo $newsletter->kutipan1 ?></textarea></p>                        
                    </div>
                    <div class="col-lg-4 col-12 order-4 order-lg-5">
                        <h6 class="mt-3 text-center"><input type="text" name="header2" class="form-control" value="<?php echo $newsletter->header2 ?>"></h6>    
                        <p class="pt-1 px-4 mb-0 black text-justify">
                        <textarea row="2" name="kutipan2" class="form-control"><?php echo $newsletter->kutipan2 ?></textarea>
                        </p>                        
                    </div>
                    <div class="col-lg-4 col-12 order-6 order-lg-6">
                        <h6 class="mt-3 text-center"><input type="text" name="header3" class="form-control" value="<?php echo $newsletter->header3 ?>"></h6>    
                        <p class="pt-1 px-4 mb-0 black text-justify">
                        <textarea row="2" name="kutipan3" class="form-control"><?php echo $newsletter->kutipan3 ?></textarea> 
                        </p>            
                    </div>
                </div>
                <div class="row justify-content-end mt-5 mr-5">
                  <button type="submit" class="btn btn-success" style="width:13rem;">Submit Edit</button>
                </div>
            </form>
            </div>
        </div>

    <script>
        $("#formNewsletter").submit(function(event){
            event.preventDefault(); //prevent default action
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
                $("#section-newsletter").html(response);
            });
        });
    </script>