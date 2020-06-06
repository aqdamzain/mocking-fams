<div class="tour-title not-fixed center-image">
            
            <img class="w-100 h-100" src="<?php echo base_url() ?>assets/images/search.jpg" alt="">
            <h1 class="white text-center front shadow-text center-text">Find your Tour</h1>  
            <img class="curve2 front" src="<?php echo base_url() ?>assets/svgs/curve.svg" alt="">
    
</div>
         <!-- End section 1-->
 
          <!-- Section 3 Tours-->
        <section id="section3" class="tour-list-sidebar tour-search-3-cols-card">
            <div class="container-fluid">
            <?php echo $this->pagination->create_links(); ?>
                <div class="row" id="listDestinasi">
                    <div class="col-md-12 col-lg-3 order-lg-first order-last mt-4 mt-lg-0">
                        <div class="form-container py-3">
                            <h4 class="black bold mt-3 px-4 pb-2 text-center">Search your Destination</h4>
                            <form id="sidebar-form" class="px-xl-5 px-lg-3 px-4"> 
                                <div class="form-group row">
                                <div class="col-sm-12">
                                        <div class="input-group">
                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Search Tours">
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-search"></i>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-12">
                                        <div class="input-group">
                                                <select class="form-control" id="inlineFormInputName1">
                                                        <option selected>Any month</option>
                                                        <option value="1">January</option>
                                                        <option value="2">February</option>
                                                        <option value="3">March</option>
                                                        <option value="1">April</option>
                                                        <option value="2">May</option>
                                                        <option value="3">June</option>
                                                        <option value="1">July</option>
                                                        <option value="2">August</option>
                                                        <option value="3">September</option>
                                                        <option value="3">Octuber</option>
                                                        <option value="3">November</option>
                                                        <option value="3">December</option>
                                                    </select>                                                    
                                                <div class="input-group-append">
                                                    <div class="input-group-text">  <i class="fas fa-calendar"></i>

                                                    </div>
                                                </div>
                                            </div>
                                    
                                        </div>
                                    
                                </div>  
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <select class="form-control" id="inlineFormInputName2">
                                                <option selected>Tour Type</option>
                                                <option value="1">Adventure</option>
                                                <option value="2">Romantic</option>
                                                <option value="3">Vacation</option>
                                                <option value="3">Explore</option>
                                            </select>
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-chevron-down"></i></div>
                                            </div>
                                        </div>                                         
                                    </div>
                                </div>   
                                <div class="form-group row">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <select class="form-control" id="inlineFormInputName3">
                                                    <option selected>Sort by Name</option>
                                                    <option value="1">Price low to high</option>
                                                    <option value="2">Price high to low</option>
                                                    <option value="3">Sort by Date</option>
                                                </select>
                                                    <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-sort-amount-up"></i>

                                                    </div>
                                                </div>
                                            </div>                                         
                                        </div>
                                    </div>   
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                            <div class="input-group">
                                                <input class="form-control py-2 border-right-0 border" type="search" placeholder="Destination" id="example-search-input">
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="far fa-compass"></i>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>  
                                
                                <div class="form-group row">
                                    <div class="col-sm-12">       
                                         <div class="d-block">
                                         <p class=" text-center" >
                                         <label  class="text-center" for="amount">Price range:</label>                                 
                                        <input  class="text-center" type="text" id="amount" readonly >
                                        </p>
                                        </div>
                                    <div id="slider-range"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                <div class="col-sm-12">
                                        <button type="submit" class="btn col-sm-12 my-2 btn-primary">Search</button>

                                    </div>
                                </div>
                            </form>
                            </div>

                            <div class="more-info mx-auto my-4">
                                <h6 class="black semibold text-center mx-4 mt-3 mb-3 info-title">Quick Contact</h6>
                                <div class="pb-2">                      
                            
                                    <a href="tel:+133331111"><h5 class="grey text-center tel-info"><i class="fas primary-color fa-phone faa-tada animated mr-2 grey my-lg-0 mb-1"></i>(+1) 3333.1111</h5></a>  
                                    <a href="mailto:hello@ourcompany.com"><h5 class="grey text-center mail-info"><i class="fas fa-envelope faa-horizontal animated primary-color mr-2"></i>hello@ourcompany.com</h5></a>                        
                                </div>
                            </div>

                      </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                    <?php foreach ($destinations1 as $destination1) : ?>
                        <div class="card mb-4" style="min-height: 21rem; max-height: 21rem; overflow: hidden;">
                                <a class="img-card" href="<?php echo base_url() ?>welcome/detail/<?php echo $destination1->id_destinasi ?>">
                                <small class="white front tiny"><span class="far fa-clock mr-2 white"></span><?php echo $destination1->durasi_siang ?><br>days</small>
                                <div class="bottom-tour-background"></div>                         
                                <img src="<?php echo base_url() ?>assets/images/<?php echo $destination1->preview_destinasi ?>" alt=""/>
                                </a>
                                <div class="card-content">
                                    <div class="row align-items-end">  
                                        <div class="col-7">                         
                                            <h6 class="black mb-2"><a href="<?php echo base_url() ?>welcome/detail/<?php echo $destination1->id_destinasi ?>" target="_blank"><?php echo $destination1->nama_destinasi ?></a></h6>
                                        </div>  
                                        <div class="col-5 align-self-start">                         
                                            <p class="primary-color text-right font-weight-bold">Rp. <?php echo number_format($destination1->harga,0,",","."); ?></p>
                                        </div>
                                    </div>                                                                                               
                                </div>
                        </div>
                    <?php endforeach;?>    
                    </div>
                      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <?php foreach ($destinations2 as $destination2) : ?>
                                    <div class="card mb-4" style="min-height: 21rem; max-height: 21rem; overflow: hidden;">
                                            <a class="img-card" href="<?php echo base_url() ?>welcome/detail/<?php echo $destination2->id_destinasi ?>">
                                            <small class="white front tiny"><span class="far fa-clock mr-2 white"></span><?php echo $destination2->durasi_siang ?><br>day</small>
                                            <div class="bottom-tour-background"></div>                         
                                            <img src="<?php echo base_url() ?>assets/images/<?php echo $destination2->preview_destinasi ?>" alt="" />
                                            </a>
                                            <div class="card-content">
                                                <div class="row align-items-center mb-1">
                                                </div>  
                                                <div class="row align-items-end">  
                                                    <div class="col-7">                         
                                                        <h6 class="black mb-2"><a href="<?php echo base_url() ?>welcome/detail/<?php echo $destination2->id_destinasi ?>" target="_blank"><?php echo $destination2->nama_destinasi ?></a></h6>
                                                    </div>  
                                                    <div class="col-5 align-middle">
                                                        <p class="primary-color text-right font-weight-bold">Rp. <?php echo number_format($destination2->harga,0,",","."); ?></p>
                                                    </div>
                                                </div>                                                                                               
                                            </div>
                                        </div>
                            <?php endforeach; ?>
                        </div>
                      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <?php foreach ($destinations3 as $destination3) : ?>
                                <div class="card mb-4" style="min-height: 21rem; max-height: 21rem; overflow: hidden;">
                                        <a class="img-card" href="<?php echo base_url() ?>welcome/detail/<?php echo $destination3->id_destinasi ?>">
                                        <small class="white front tiny"><span class="far fa-clock mr-2 white"></span><?php echo $destination3->durasi_siang ?><br>days</small>
                                        <div class="bottom-tour-background"></div>                         
                                        <img src="<?php echo base_url() ?>assets/images/<?php echo $destination3->preview_destinasi ?>" alt="" />
                                        </a>
                                        <div class="card-content">
                                            <div class="row align-items-center">  
                                                <div class="col-7">                         
                                                    <h6 class="black mb-2"><a href="<?php echo base_url() ?>welcome/detail/<?php echo $destination3->id_destinasi ?>" target="_blank"><?php echo $destination3->nama_destinasi ?></a></h6>
                                                </div>  
                                                <div class="col-5 align-middle">                         
                                                    <p class="primary-color text-right font-weight-bold">Rp. <?php echo number_format($destination3->harga,0,",","."); ?></p>
                                                </div>
                                            </div>                                                                                               
                                        </div>
                                    </div>
                        <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

            
        </section><!-- End section 3 tours-->