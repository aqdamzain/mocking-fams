        <section id="section-newsletter">

        </section>

        <section id="section4">

        </section>

              
        

        

        <section>

            <div id="sectionvideo" class="videohome2 container img-fluid w-100 text-center justify-content-center align-items-center">
            
                <div class="row videooverlay">

                    <div class="col-xl-7 col-12  white">
                        <a class="popup-vimeo" href="https://www.youtube.com/watch?v=jir5p85wsMU"> 
                            <img src="<?php echo base_url() ?>assets/images/video-thumbnail.jpg" class="img-fluid video-call" alt="" >
                            <div class="play-center">
                                <i class="far fa-7x fa-play-circle front"></i>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-5 col-12  mx-auto row align-items-center mt-xl-0 mt-5">
                        <div class="block-transform  py-5 px-4">
                            <h4 class="black mx-2  text-center d-block">Jelajahi Dunia Bersama</h4>  
                            <p class="black text-block px-sm-5 text-justify px-3">Wujudkan impianmu menjelajahi berbagai wisata di dunia dengan menyenangkan
                                 bersama Famstraveller.</p>
                            
                        </div>
                    </div>

                </div>

            </div>
            <div class="site-section block-13 bg-light">
        </section>

            <!-- Modal tambah destinasi-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content container formhome2">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Destinasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form id="tambahDestinasi" method="post" action="<?php echo base_url().'admin/add_destination'; ?>"  enctype="multipart/form-data">
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
                            <label class="text-black">Lokasi - Negara</label>
                            <input type="text" name="negara" class="form-control" placeholder="ex: Indonesia">
                        </div>
                        <div class="col-md-6">
                            <label class="text-black">Benua</label>
                            <input type="text" name="benua" class="form-control" placeholder="ex: Asia">
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
  <div class="modal fade" id="editDestinasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content container formhome2">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Destinasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form id="formEditDestinasi" method="post" action="<?php echo base_url().'admin/edit_destination'; ?>" enctype="multipart/form-data">
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
              <label class="text-black">Benua</label>
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