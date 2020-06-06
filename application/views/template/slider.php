<section id="sectioncarousel">
            <div id="carouselExampleIndicators" class="carousel carousel-home2  slide" data-ride="carousel" >
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner " role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="<?php echo base_url() ?>assets/images/<?php echo $sliders[0]->gambar_slider ?>" alt="First slide">
                        <div class="carousel-caption justify-content-center  mb-lg-4 mb-0 align-items-center text-center">
                            <div class="toggleCaption">
                                <h2 class="white shadow-text  align-middle"><?php echo $sliders[0]->kutipan_slider ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="<?php echo base_url() ?>assets/images/<?php echo $sliders[1]->gambar_slider ?>" alt="Second slide">
                        <div class="carousel-caption justify-content-center  mb-lg-4 mb-0 align-items-center text-center">
                            <div class="toggleCaption">
                                <h2 class="white shadow-text  align-middle" ><?php echo $sliders[1]->kutipan_slider ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="<?php echo base_url() ?>assets/images/<?php echo $sliders[2]->gambar_slider ?>" alt="Third slide">
                        <div class="carousel-caption justify-content-center  mb-lg-4 mb-0 align-items-center text-center">
                            <div class="toggleCaption">
                                <h2 class="white shadow-text align-middle"  ><?php echo $sliders[2]->kutipan_slider ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
              
            </div>              
</section><!-- End section Slider -->