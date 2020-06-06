            <!-- Modal tambah galeri-->
            <div class="modal fade" id="galeriFotoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content container formhome2">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Gambar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form method="post" action="<?php echo base_url().'admin/add_destinationGaleri'; ?>"  enctype="multipart/form-data">
                        <div class="row form-group">
                            <label class="text-black col-sm-2 mb-3 mb-md-0" for="picture2">Gambar Galeri</label>
                            <div class="col-sm-10 mb-3 mb-md-0">
                            <input type="hidden" name="id_destinasi" value="<?php echo $detail_destination->id_destinasi ?>">
                            <input type="file" name="picture" id="picture" class="form-control">
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
            
  <!-- Modal tambah Tanggal-->
  <div class="modal fade" id="tanggalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content container formhome2">
        <div class="modal-header">
          <h5 class="modal-title">Tambah tanggal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form id="formTambahTanggal" method="post" action="<?php echo base_url().'admin/tambah_tanggal'; ?>" enctype="multipart/form-data">
        <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
                <label class="text-black col-form-label">Jadwal Keberangkatan</label>
                <input type="hidden" name="id_destinasi" value="<?php echo $detail_destination->id_destinasi ?>">
                <input type="date" id="datepicker" min="2000-02-22" name="berangkat" class="form-control px-2" placeholder="Departure">
                </div>
            </div>
            <div class="col-md-12 mb-3 mb-md-0">
                <label class="text-black col-form-label">Harga</label>
                <input type="number"name="harga" class="form-control px-2">
                </div>
            </div>
          <div class="row justify-content-center mb-3 mt-3">
          <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>



        <!-- Title section 1 -->
        <div class="tour-title">         
            <img  class="w-100 h-100" src="<?php echo base_url() ?>assets/images/<?php echo $detail_destination->preview_destinasi ?>" alt="">
            <h1 class="white text-center shadow-text center-text"><?php echo $detail_destination->nama_destinasi ?></h1>    

            <div >
                <a class="smooth-scroll" href="#read-tour">
                    <img class="curvechevron" src="<?php echo base_url() ?>assets/svgs/curvesingle.svg" alt="">
                    <div class="chevroncurve">
                        <i class="fas  hoverchevron white fa-chevron-down"></i>
                    </div>
                </a>
            </div>
        </div>
         <!-- End section 1-->

         <section id="section3" class="tour-list-sidebar tour-list-sidebar-2-col">
      
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-3 ml-lg-5 ml-sm-3 order-lg-first order-last mt-3 mt-lg-0">
                            
                            <div class="mb-lg-3 mb-4 mt-lg-0 mt-4 text-center">
                                <a href="#gallery-1" role="button" class="btn-gallery mb-2 d-lg-inline-block d-block">
                                    <span id="btnFA" class="btn btn-outline-danger pt-2 mr-1  px-3">
                                            View Gallery
                                        <i class="ml-2 fas fa-images"></i>
                                    </span>
                                </a>
                                <div id="gallery-1" class="hidden">
                                <?php foreach ($galeri as $gal) : ?>     
                                    <a href="<?php echo base_url() ?>assets/images/<?php echo $gal->img_galeri_destinasi ?>"></a>
                                <?php endforeach; ?>
                                </div>
                                    
                                <a href="#test-popup" role="button" class="open-popup-link d-lg-inline-block d-block">
                                    <span id="btnFA2" class="btn btn-outline-danger pt-2 px-3 ">
                                            Share Tour
                                        <i class="ml-2 fas fa-share-alt"></i>
                                    </span>
                                </a>

                                <div id="test-popup" class="white-popup mfp-hide text-center">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=http://uxithemes.com/Turbino"  target="_blank">
                                        <i class="fab fa-facebook-f"></i></a> &nbsp;

                                    <a href="https://twitter.com/intent/tweet?text=Uxithemes&url=http%3A%2F%2Fwww.uxithemes.com/Turbino" target="_blank">
                                        <i class="fab fa-twitter"></i></a>&nbsp;
                                    
                                    <a href="https://plus.google.com/share?url=http%3A%2F%2Fwww.uxithemes.com%2FTurbino">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>

                                    <a  href="mailto:support@uxithemes.com">
                                    <i class="fas fa-envelope"></i></a>
                                </div>                                                         
                            </div>


                            <div class="form-container px-3 py-3">

                                <h4 class="black bold mt-3 px-4 pb-2 text-center">Book trip</h4>

                                <form id="sidebar-form" class="px-xl-3 px-lg-3 px-3"> 

                                    <div class="form-group text-center">
                                        <label class="" for="inputname">Nama Pemesan</label>
                                        <input type="text" class="form-control" id="inputname" placeholder="Your name">
                                    </div>

                                    <div class="form-group text-center">
                                        <label class="" for="inputmail">Nomor HP</label>
                                        <input type="text" class="form-control" id="inputphone" placeholder="0888xxxxxxx">
                                    </div>
                           
                                    <div class="form-group text-center">
                                        <label class="text-center" for="inputtours">Tertarik pada trip..</label>
                                        <input type="text" class="form-control" id="inputtours" placeholder="Mystical Machu Picchu">
                                    </div>

                                    <div class="form-group text-center departure">
                                        <label class="" for="datepicker">Tanggal berangkat</label>
                                        <div class="input-group">
                                            <input type="date" id="datepicker" placeholder="Choose your Date" class="form-control">
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-calendar"></i> </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group text-center">
                                        <label class="" for="inputmail">Jumlah Orang</label>
                                        <input type="number" class="form-control" id="inputnumber" placeholder="0">
                                    </div>  
                                
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn col-sm-12 my-2 btn-primary">Book Now</button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>

                        <div class="col-xs-12 col-md-12 col-lg-8   single-tour">
                            <h4 id="read-tour" class="black text-left mb-3  bold"><?php echo $detail_destination->nama_destinasi ?></h4>
                            <div class="row">  
                                <div class="col-lg-12 col-sm-4 col-12 text-left">
                                    <p class="primary-color semibold price-big">Rp. <?php echo number_format($detail_destination->harga,0,",","."); ?><span class="semibold subtitle">&nbsp;/ Per Orang</span> </p>
                                </div>
                            </div>
                            <p><?php echo $detail_destination->deskripsi_destinasi ?></p>
                            
                            <div class="separator-tour"></div>

                            <div class="row">
                                <div class="col-lg-6 col-6 order-2 order-lg-2">
                                    <img class="svgcenter mt-2 mb-2 duration-icon" src="<?php echo base_url() ?>assets/svgs/duration.svg" alt="">
                                </div>
                                <div class="col-lg-6 col-6 order-5 order-lg-3">
                                    <img class="svgcenter mb-2 location-icon" src="<?php echo base_url() ?>assets/svgs/location.svg" alt="">
                                </div>
                                <div class="col-lg-6 col-6 order-4 order-lg-6">
                                    <p class="grey text-center">Durasi<br><br><span class="black bold"><?php echo $detail_destination->durasi_siang ?> Hari, <?php echo $detail_destination->durasi_malam ?> Malam</span></p>
                                </div>
                                <div class="col-lg-6 col-6 order-7 order-lg-7">
                                    <p class="grey text-center">Lokasi<br><br><span class="black bold"><?php echo $detail_destination->negara ?>, <?php echo $detail_destination->benua ?></span></p>
                                </div>
                            </div>

                            <div class="separator-tour"></div>
                            <div class="text-center"><button class="btn btn-info" data-toggle="modal" data-target="#galeriFotoModal"
                            id="buttonTambah">Tambah Galeri Foto<i class="fas fa-plus ml-3"></i></button>
                                <div class="separator text-center svgcenter"></div>     
                            </div>
                            <div class="cardHolder album">
                            <?php foreach ($galeri as $gal) : ?>     
                                <a href="<?php echo base_url() ?>assets/images/<?php echo $gal->img_galeri_destinasi ?>" class="image-link card-grid-popup">
                                    <img class="card-grid-popup2" src="<?php echo base_url() ?>assets/images/<?php echo $gal->img_galeri_destinasi ?>" alt="image"/>
                                </a>
                                <button class="btn btn-danger mx-1 px-3 mx-2 my-1 btn-sm float-left" onclick="window.location.href='<?php echo base_url() ?>admin/delGambarGaleri/<?php echo $gal->id_galeri_destinasi.'-'.$detail_destination->id_destinasi ?>'" 
                                    role="button">hapus<i class="fas fa-times ml-1"></i></button>
                            <?php endforeach; ?>    
                            </div>
                            <div class="separator-tour"></div>

                            <ul class="single-tour-container">
                                
                                <li>
                                    <div class="tour-item-title list-font">Tanggal Berangkat</div>
                                    <div class="tour-item-description list-font">
                                    <form method="post" action="<?php echo base_url().'admin/delete_tanggal/' ?>">
                                        <div class="row form-group formhome2 justify-content-center">
                                        <div class="col-md-8 mb-md-0">
                                        <input type="hidden" name="id_destinasi" value="<?php echo $detail_destination->id_destinasi ?>">
                                        <select class="form-control" name="id_berangkat">
                                                <?php foreach ($dates as $date) : ?>
                                                    <option value="<?php echo $date->id_berangkat ?>">
                                                    <?php echo $date->tanggal_berangkat ?>, harga = <?php echo $date->harga ?></option>
                                                <?php endforeach; ?>
                                        </select>
                                        </div>
                                        <div class="col-md-4 mb-md-0">
                                        <i class="fas fa-sort-down"></i>
                                        </div>
                                        </div>
                                        <div class="row form-group justify-content-start">
                                        <div class="col-md-6 mb-md-0">
                                            <button type="button" class="btn btn-outline-success btn-sm ml-3" data-toggle="modal" data-target="#tanggalModal"
                                            ><i class="fas fa-plus-circle"></i></button>
                                            <button type="submit" class="btn btn-outline-danger btn-sm ml-1" onclick="javascript: return confirm('Anda yakin hapus?')"
                                            ><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                        </div>
                                    <form>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="tour-item-title list-font">Sudah Termasuk </div>
                                    <div id="include" class="tour-item-description list-font">

                                    </div>
                                </li>
                                
                                <li>
                                    <div class="tour-item-title list-font">Belum Termasuk</div>
                                    <div id="notinclude" class="tour-item-description list-font">

                                    </div>
                                </li> 
                         
                            </ul>
                            <div class="">
                            <div class="text-center"><a type="button" class="btn btn-success" href="<?php echo base_url() ?>admin/editor/<?php echo $detail_destination->id_destinasi ?>" style="width:13rem;">
                            <span class="white">Buat Detail Perjalanan<i class="fas fa-align-left ml-3"></i></span></a>
                            <div class="separator text-center svgcenter"></div>     
                            </div>    
                                <div class="tour-schedule">
                                <?php echo $detail_destination->detail_perjalanan ?>
                                </div>    
                            </div>    
                        </div>
                    </div>

                </div>
                
            </section>

    <script>
        ajaxInclude(theUrl=false);
        $(document).on("click", "#tambahInclude", function(){
            var theUrl = $(this).attr('href');
            ajaxInclude(theUrl);
            return false;
        });
        $(document).on("click", "#closeTambahInclude", function(){
            var theUrl = $(this).attr('href');
            ajaxInclude(theUrl);
            return false;
        });
        $(document).on("click", "#delInclude", function(){
            var theUrl = $(this).attr('href');
            ajaxInclude(theUrl);
            return false;
        });
        $(document).on("click", "#closeDelInclude", function(){
            var theUrl = $(this).attr('href');
            ajaxInclude(theUrl);
            return false;
        });
        
        function ajaxInclude(theUrl){
            var base_url = "<?php echo site_url('admin/index_include/').$detail_destination->id_destinasi ?>";
            if(theUrl){
                base_url = theUrl;
            }
            $.ajax({
                type:"POST",
                url: base_url,
                data:"",
                success: function(response){
                    $("#include").html(response);
                }
            });
        }
    </script>

    <script>
        ajaxNotInclude(theUrl=false);
        $(document).on("click", "#tambahNotInclude", function(){
            var theUrl = $(this).attr('href');
            ajaxNotInclude(theUrl);
            return false;
        });
        $(document).on("click", "#closeTambahNotInclude", function(){
            var theUrl = $(this).attr('href');
            ajaxNotInclude(theUrl);
            return false;
        });
        $(document).on("click", "#delNotInclude", function(){
            var theUrl = $(this).attr('href');
            ajaxNotInclude(theUrl);
            return false;
        });
        $(document).on("click", "#closeDelNotInclude", function(){
            var theUrl = $(this).attr('href');
            ajaxNotInclude(theUrl);
            return false;
        });
        
        function ajaxNotInclude(theUrl){
            var base_url = "<?php echo site_url('admin/index_notinclude/').$detail_destination->id_destinasi ?>";
            if(theUrl){
                base_url = theUrl;
            }
            $.ajax({
                type:"POST",
                url: base_url,
                data:"",
                success: function(response){
                    $("#notinclude").html(response);
                }
            });
        }
    </script>