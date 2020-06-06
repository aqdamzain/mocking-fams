<div class="tour-title not-fixed center-image">
            
            <img class="w-100 h-100" src="<?php echo base_url() ?>assets/images/search.jpg" alt="">
            <h1 class="white text-center front shadow-text center-text">Find your Tour</h1>  
    
        </div>
         <!-- End section 1-->
 
          <!-- Section 3 Tours-->
        <section id="section3" class="tour-list-sidebar tour-search-3-cols-card">
            <div class="container-fluid">
            <?php echo $this->pagination->create_links(); ?>
                <div class="row" id="listDestinasi">
                    <div class="col-md-12 col-lg-3 order-lg-first order-last mt-4 mt-lg-0">
                        <div class="text-center mb-3"><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal2"
                            id="buttonTambah">Tambah Destinasi<i class="fas fa-plus ml-3"></i></button> 
                        </div>
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
                                <a class="img-card" href="<?php echo base_url() ?>admin/detail/<?php echo $destination1->id_destinasi ?>">
                                <small class="white front tiny"><span class="far fa-clock mr-2 white"></span><?php echo $destination1->durasi_siang ?><br>days</small>
                                <div class="bottom-tour-background"></div>                         
                                <img src="<?php echo base_url() ?>assets/images/<?php echo $destination1->preview_destinasi ?>" alt=""/>
                                </a>
                                <div class="card-content">
                                    <div class="row align-items-center mb-1">
                                        <a class="btn btn-danger mx-1 px-3 mx-2 my-1 btn-sm float-left" href="<?php echo base_url() ?>admin\delete2\<?php echo $destination1->id_destinasi.'-'.$page ?>" 
                                        role="button">hapus<i class="fas fa-times ml-1"></i></a>
                                        <a class="btn btn-warning mx-1 px-3 mx-2 my-1 btn-sm float-left" href="#" role="button"
                                        data-toggle="modal" data-id="<?php echo $destination1->id_destinasi.'-'.$page ?>"
                                        data-target="#editDestinasi2">ubah<i class="far fa-edit ml-1"></i></a> 
                                    </div> 
                                    <div class="row align-items-end">  
                                        <div class="col-7">                         
                                            <h6 class="black mb-2"><a href="<?php echo base_url() ?>admin/detail/<?php echo $destination1->id_destinasi ?>" target="_blank"><?php echo $destination1->nama_destinasi ?></a></h6>
                                        </div>  
                                        <div class="col-5 align-middle">                         
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
                                            <a class="img-card" href="<?php echo base_url() ?>admin/detail/<?php echo $destination2->id_destinasi ?>">
                                            <small class="white front tiny"><span class="far fa-clock mr-2 white"></span><?php echo $destination2->durasi_siang ?><br>day</small>
                                            <div class="bottom-tour-background"></div>                         
                                            <img src="<?php echo base_url() ?>assets/images/<?php echo $destination2->preview_destinasi ?>" alt="" />
                                            </a>
                                            <div class="card-content">
                                                <div class="row align-items-center mb-1">
                                                    <a class="btn btn-danger mx-1 px-3 mx-2 my-1 btn-sm float-left" href="<?php echo base_url() ?>admin\delete2\<?php echo $destination2->id_destinasi.'-'.$page ?>" 
                                                    role="button">hapus<i class="fas fa-times ml-1"></i></a>
                                                    <a class="btn btn-warning mx-1 px-3 mx-2 my-1 btn-sm float-left" href="#" role="button"
                                                    data-toggle="modal" data-id="<?php echo $destination2->id_destinasi.'-'.$page ?>"
                                                    data-target="#editDestinasi2">ubah<i class="far fa-edit ml-1"></i></a> 
                                                </div>  
                                                <div class="row align-items-end">  
                                                    <div class="col-7">                         
                                                        <h6 class="black mb-2"><a href="<?php echo base_url() ?>admin/detail/<?php echo $destination2->id_destinasi ?>" target="_blank"><?php echo $destination2->nama_destinasi ?></a></h6>
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
                                        <a class="img-card" href="<?php echo base_url() ?>admin/detail/<?php echo $destination3->id_destinasi ?>">
                                        <small class="white front tiny"><span class="far fa-clock mr-2 white"></span><?php echo $destination3->durasi_siang ?><br>days</small>
                                        <div class="bottom-tour-background"></div>                         
                                        <img src="<?php echo base_url() ?>assets/images/<?php echo $destination3->preview_destinasi ?>" alt="" />
                                        </a>
                                        <div class="card-content">
                                            <div class="row align-items-center mb-1">
                                                <a class="btn btn-danger mx-1 px-3 mx-2 my-1 btn-sm float-left" href="<?php echo base_url() ?>admin\delete2\<?php echo $destination3->id_destinasi.'-'.$page ?>" 
                                                role="button">hapus<i class="fas fa-times ml-1"></i></a>
                                                <a class="btn btn-warning mx-1 px-3 mx-2 my-1 btn-sm float-left" href="#" role="button"
                                                data-toggle="modal" data-id="<?php echo $destination3->id_destinasi.'-'.$page ?>" data-checked="<?php echo $destination3->favorite ?>"
                                                data-target="#editDestinasi2">ubah<i class="far fa-edit ml-1"></i></a> 
                                            </div>   
                                            <div class="row align-items-center">  
                                                <div class="col-7">                         
                                                    <h6 class="black mb-2"><a href="<?php echo base_url() ?>admin/detail/<?php echo $destination3->id_destinasi ?>" target="_blank"><?php echo $destination3->nama_destinasi ?></a></h6>
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


            <!-- Modal tambah destinasi-->
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content container formhome2">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Destinasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form id="tambahDestinasi2" method="post" action="<?php echo base_url().'admin/add_destination2'; ?>"  enctype="multipart/form-data">
                        <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="text-black col-form-label" for="nama">Nama Destinasi</label> 
                            <input type="text" id="nama" name="nama" class="form-control px-2" placeholder="Tuliskan nama destinasi">
                        </div>
                        </div>
                        <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="text-black col-form-label" for="deskripsi">Deskripsi Destinasi</label> 
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" 
                            placeholder="Tuliskan deskripsi disini"></textarea> 
                        </div>
                        </div>
                        <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-black">Durasi - Siang</label>
                            <input type="number" name="day" class="form-control" placeholder="Day">
                        </div>
                        <div class="col-md-6">
                            <label class="text-black">Malam</label>
                            <input type="number" name="night" class="form-control" placeholder="Night">
                        </div>
                        </div>
                        <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-black col-form-label" for="price">Harga</label> 
                            <input type="number" id="price" name="price" class="form-control px-2" placeholder="Price">
                        </div>
                        </div>
                        <div class="row form-group">
                            <label class="text-black col-sm-2 mb-3 mb-md-0" for="picture2">Gambar Preview</label>
                            <div class="col-sm-10 mb-3 mb-md-0"> 
                            <input type="file" name="picture" id="picture" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-2 form-check-label" for="defaultCheck1">Wisata Favorite?</label> 
                            <div class="col-10 mb-3 mb-md-0"> 
                                <input type="text" class="form-control" name="favorite" placeholder="(ya/tidak) note:ditulis dengan kecil!">
                            </div>
                        </div>
                        <div class="row justify-content-center mb-3 mt-3">
                        <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>

  <!-- Modal edit destinasi-->
  <div class="modal fade" id="editDestinasi2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content container formhome2">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Destinasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form id="formEditDestinasi2" method="post" action="<?php echo base_url().'admin/edit_destination2'; ?>" enctype="multipart/form-data">
        <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="text-black col-form-label" for="nama2">Nama Destinasi</label>
            <input type="hidden" id="editId_destinasi" name="editId_destinasi" class="form-control" value=""> 
            <input type="text" id="nama2" name="nama" class="form-control px-2" placeholder="Tuliskan nama destinasi">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="text-black col-form-label" for="deskripsi2">Deskripsi Destinasi</label> 
            <textarea name="deskripsi" id="deskripsi2" class="form-control" rows="3" 
            placeholder="Tuliskan deskripsi disini"></textarea> 
          </div>
        </div>
        <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black">Durasi - Siang</label>
                  <input type="number" name="day" class="form-control" placeholder="Day">
                </div>
                <div class="col-md-6">
                <label class="text-black">Malam</label>
                  <input type="number" name="night" class="form-control" placeholder="Night">
                </div>
              </div>
        <div class="row form-group">
          <div class="col-md-6 mb-3 mb-md-0">
            <label class="text-black">Lokasi - Negara</label>
            <input type="text" name="negara" class="form-control" placeholder="ex: Indonesia">
          </div>
          <div class="col-md-6">
            <label class="text-black">Malam</label>
            <input type="text" name="benua" class="form-control" placeholder="ex: Asia">
          </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black col-form-label" for="price2">Harga</label> 
                <input type="number" id="price2" name="price" class="form-control px-2" placeholder="Price">
            </div>
        </div>
        <div class="row form-group">
            <label class="text-black col-sm-2 mb-3 mb-md-0" for="picture2">Gambar Preview</label>
            <div class="col-sm-10 mb-3 mb-md-0"> 
            <input type="file" name="picture" id="picture2" class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <label class="col-2 form-check-label" for="defaultCheck1">Wisata Favorite?</label> 
            <div class="col-10 mb-3 mb-md-0"> 
                <input type="text" class="form-control" name="favorite" placeholder="(ya/tidak) note:ditulis dengan kecil!">
            </div>
        </div>
          <div class="row justify-content-center mb-3 mt-3">
          <button type="submit" class="btn btn-success">Edit</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>