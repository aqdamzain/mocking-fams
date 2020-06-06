<section id="sectioncarousel">
            <div id="carouselExampleIndicators" class="carousel carousel-home2  slide" data-ride="carousel" >                
                <div class="carousel-inner " role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="<?php echo base_url() ?>assets/images/<?php echo $sliders[3]->gambar_slider?>" alt="First slide">
                        <div class="carousel-caption justify-content-center  mb-lg-4 mb-0 align-items-center text-center">
                            <div >
                                <h2 class="white shadow-text align-middle"><?php echo $sliders[3]->kutipan_slider?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>              
</section>

<div class="container mt-1 pt-5 formhome2">
            <div class="row">
                <form class="col-8"  method="post" action="<?php echo base_url().'admin/edit_fixSlider'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Gambar Background</label>
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="hidden" name="id_slider" value="4" class="form-control">
                    <input type="file" name="picture" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Judul</label>
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="text" name="kutipan" class="form-control" placeholder="Masukkan Judul Disini..">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
    </div>
</div>