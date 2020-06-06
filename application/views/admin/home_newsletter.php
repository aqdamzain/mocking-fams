        <div id="ajax-newsletter">
            <div class="container pt-2 pb-2 mt-2 mb-2">
                <div class="row">
                    <div class="col-12"><h4 class="text-center bold mb-5"><?php echo $newsletter->textheader ?></h4></div>
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
                        <h6 class="mt-3 text-center"><?php echo $newsletter->header1 ?></h6>    
                        <p class="pt-1 px-4 mb-0  black text-justify">
                        <?php echo $newsletter->kutipan1 ?>
                        </p>                        
                    </div>
                    <div class="col-lg-4 col-12 order-4 order-lg-5">
                        <h6 class="mt-3 text-center"><?php echo $newsletter->header2 ?></h6>    
                        <p class="pt-1 px-4 mb-0 black text-justify">
                        <?php echo $newsletter->kutipan2 ?>
                        </p>                        
                    </div>
                    <div class="col-lg-4 col-12 order-6 order-lg-6">
                        <h6 class="mt-3 text-center"><?php echo $newsletter->header3 ?></h6>    
                        <p class="pt-1 px-4 mb-0 black text-justify">
                        <?php echo $newsletter->kutipan3 ?> 
                        </p>            
                    </div>
                </div>
                <div class="row justify-content-end mt-5 mr-5">
                  <a type="button" id="editNewsletter" class="btn btn-success" href="<?php echo base_url() ?>admin/formNewsletter" style="width:13rem;"><span class="white">Edit</span></a>
                </div>
            </div>
        </div>