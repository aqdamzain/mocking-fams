<!-- section 1 Title-->
<div class="tour-title not-fixed shortcodes">

<img class="w-100 h-100" src="<?php echo base_url() ?>assets/images/<?php echo $galleries[16]->gambar?>" alt="image">

<div class="center-text">
    <h1 class="white text-center front shadow-text"><?php echo $galleries[16]->teks?></h1>   
    <!-- <h3 class="white shadow-text text-center ">Images Slider and Pop-ups</h3> -->
</div>
</div>

<div class="container mt-1 pt-5 formhome2">
            <div class="row">
                <form class="col-4"  method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Gambar Background</label>
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="hidden" name="id_gallery" value="17" class="form-control">
                    <input type="file" name="picture" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Judul</label>
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="text" name="teks" class="form-control" placeholder="Masukkan Judul Disini..">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
    </div>
</div>
<!-- End section 1-->


<!-- Section 2 about us-->

<section id="section3">
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12 ">
            <h4 class="text-center mb-5"><?php echo $galleries[1]->teks?></h4>
            <div class="container mt-1 mb-5 pt-5 formhome2">
            <div class="row">
                <form class="col-10"  method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                <input type="hidden" name="id_gallery" value="2" class="form-control">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Ubah Judul</label>
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="text" name="teks" class="form-control" placeholder="Masukkan Judul Disini..">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
    </div>
</div>
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="<?php echo base_url() ?>assets/images/<?php echo $galleries[1]->gambar?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="<?php echo base_url() ?>assets/images/<?php echo $galleries[2]->gambar?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="<?php echo base_url() ?>assets/images/<?php echo $galleries[3]->gambar?>" alt="Third slide">
                    </div>
                </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>                  
    </div>
    <div class="container mt-3 pt-5 formhome2">
            <div class="row">
                <form class="col-4"  method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Gallery 1</label>
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="hidden" name="id_gallery" value="2" class="form-control">
                    <input type="file" name="picture" class="form-control">
                    </div>
                </div>
                <div class="mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
                <form class="col-4" method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Gallery 2</label>
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="hidden" name="id_gallery" value="3" class="form-control">
                    <input type="file" name="picture" class="form-control">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
                <form class="col-4" method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-31 mb-md-0">Gallery 3</label>
                    <input type="hidden" name="id_gallery" value="4" class="form-control">
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="file" name="picture" class="form-control">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
            </div>
        </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12"><h4 class="text-center mb-5 mt-5"><?php echo $galleries[4]->teks?></h4>  
        <div class="container mt-1 mb-5 pt-5 formhome2">
            <div class="row">
                <form class="col-10"  method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                <input type="hidden" name="id_gallery" value="5" class="form-control">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Ubah Judul</label>
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="text" name="teks" class="form-control" placeholder="Masukkan Judul Disini..">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
    </div>
</div>
            <div class="cardHolder album">                                    
                <a href="<?php echo base_url() ?>assets/images/<?php echo $galleries[4]->gambar?>" class="image-link card-grid-popup">
                    <img class="card-grid-popup2" src="<?php echo base_url() ?>assets/images/<?php echo $galleries[4]->gambar?>" alt=""/>
                </a>
                <a href="<?php echo base_url() ?>assets/images/<?php echo $galleries[5]->gambar?>" class="image-link card-grid-popup">
                    <img class="card-grid-popup2" src="<?php echo base_url() ?>assets/images/<?php echo $galleries[5]->gambar?>" alt=""/>
                </a>
                <a href="<?php echo base_url() ?>assets/images/<?php echo $galleries[6]->gambar?>" class="image-link card-grid-popup">
                    <img class="card-grid-popup2" src="<?php echo base_url() ?>assets/images/<?php echo $galleries[6]->gambar?>" alt=""/>
                </a>                                   
                <a href="<?php echo base_url() ?>assets/images/<?php echo $galleries[7]->gambar?>" class="image-link card-grid-popup">
                    <img class="card-grid-popup2" src="<?php echo base_url() ?>assets/images/<?php echo $galleries[7]->gambar?>" alt=""/>
                </a>    
                <a href="<?php echo base_url() ?>assets/images/<?php echo $galleries[8]->gambar?>" class="image-link card-grid-popup">
                    <img class="card-grid-popup2" src="<?php echo base_url() ?>assets/images/<?php echo $galleries[8]->gambar?>" alt="">
                </a>   
                <a href="<?php echo base_url() ?>assets/images/<?php echo $galleries[9]->gambar?>" class="image-link card-grid-popup">
                    <img class="card-grid-popup2" src="<?php echo base_url() ?>assets/images/<?php echo $galleries[9]->gambar?>" alt=""/>
                </a>                  
            </div>
        </div>
    </div>
    <div class="container mt-3 pt-5 formhome2">
            <div class="row">
                <form class="col-4"  method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Gallery 1</label>
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="hidden" name="id_gallery" value="5" class="form-control">
                    <input type="file" name="picture" class="form-control">
                    </div>
                </div>
                <div class="mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
                <form class="col-4" method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Gallery 2</label>
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="hidden" name="id_gallery" value="6" class="form-control">
                    <input type="file" name="picture" class="form-control">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
                <form class="col-4" method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-31 mb-md-0">Gallery 3</label>
                    <input type="hidden" name="id_gallery" value="7" class="form-control">
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="file" name="picture" class="form-control">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
                <form class="col-4" method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-31 mb-md-0">Gallery 4</label>
                    <input type="hidden" name="id_gallery" value="8" class="form-control">
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="file" name="picture" class="form-control">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
                <form class="col-4" method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Gallery 5</label>
                    <div class="col-sm-10 mb-1 mb-md-0">
                    <input type="hidden" name="id_gallery" value="9" class="form-control"> 
                    <input type="file" name="picture" class="form-control">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
                <form class="col-4" method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Gallery 6</label>
                    <div class="col-sm-10 mb-1 mb-md-0">
                    <input type="hidden" name="id_gallery" value="10" class="form-control"> 
                    <input type="file" name="picture" class="form-control">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
            </div>
        </div>
    <div class="row">
    <div class="col-lg-8 offset-lg-2 col-12"><h4 class="text-center mb-5 mt-5"><?php echo $galleries[10]->teks?></h4>  
        <div class="container mt-1 mb-5 pt-5 formhome2">
            <div class="row">
                <form class="col-10"  method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                <input type="hidden" name="id_gallery" value="11" class="form-control">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Ubah Judul</label>
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="text" name="teks" class="form-control" placeholder="Masukkan Judul Disini..">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
    </div>
</div>
            <div class="cardHolder album">                                    
                <a href="<?php echo base_url() ?>assets/images/<?php echo $galleries[10]->gambar?>" class="image-link card-grid-popup">
                    <img class="card-grid-popup2" src="<?php echo base_url() ?>assets/images/<?php echo $galleries[10]->gambar?>" alt=""/>
                </a>
                <a href="<?php echo base_url() ?>assets/images/<?php echo $galleries[11]->gambar?>" class="image-link card-grid-popup">
                    <img class="card-grid-popup2" src="<?php echo base_url() ?>assets/images/<?php echo $galleries[11]->gambar?>" alt=""/>
                </a>
                <a href="<?php echo base_url() ?>assets/images/<?php echo $galleries[12]->gambar?>" class="image-link card-grid-popup">
                    <img class="card-grid-popup2" src="<?php echo base_url() ?>assets/images/<?php echo $galleries[12]->gambar?>" alt=""/>
                </a>                                   
                <a href="<?php echo base_url() ?>assets/images/<?php echo $galleries[13]->gambar?>" class="image-link card-grid-popup">
                    <img class="card-grid-popup2" src="<?php echo base_url() ?>assets/images/<?php echo $galleries[13]->gambar?>" alt=""/>
                </a>    
                <a href="<?php echo base_url() ?>assets/images/<?php echo $galleries[14]->gambar?>" class="image-link card-grid-popup">
                    <img class="card-grid-popup2" src="<?php echo base_url() ?>assets/images/<?php echo $galleries[14]->gambar?>" alt="">
                </a>   
                <a href="<?php echo base_url() ?>assets/images/<?php echo $galleries[15]->gambar?>" class="image-link card-grid-popup">
                    <img class="card-grid-popup2" src="<?php echo base_url() ?>assets/images/<?php echo $galleries[15]->gambar?>" alt=""/>
                </a>                  
            </div>
        </div>
    </div>
    <div class="container mt-3 pt-5 formhome2" >
            <div class="row">
                <form class="col-4"  method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Gallery 1</label>
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="hidden" name="id_gallery" value="11" class="form-control">
                    <input type="file" name="picture" class="form-control">
                    </div>
                </div>
                <div class="mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
                <form class="col-4" method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Gallery 2</label>
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="hidden" name="id_gallery" value="12" class="form-control">
                    <input type="file" name="picture" class="form-control">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
                <form class="col-4" method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-31 mb-md-0">Gallery 3</label>
                    <input type="hidden" name="id_gallery" value="13" class="form-control">
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="file" name="picture" class="form-control">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div> 
                </form>
                <form class="col-4" method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-31 mb-md-0">Gallery 4</label>
                    <input type="hidden" name="id_gallery" value="14" class="form-control">
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="file" name="picture" class="form-control">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
                <form class="col-4" method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Gallery 5</label>
                    <div class="col-sm-10 mb-1 mb-md-0">
                    <input type="hidden" name="id_gallery" value="15" class="form-control"> 
                    <input type="file" name="picture" class="form-control">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
                <form class="col-4" method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Gallery 6</label>
                    <div class="col-sm-10 mb-1 mb-md-0">
                    <input type="hidden" name="id_gallery" value="16" class="form-control"> 
                    <input type="file" name="picture" class="form-control">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
            </div>
        </div>
</div>

<div class="container-fluid ">
                    <div class="row">
                        <div class="col-12">  
                            <input type="hidden" name="id_gallery" value="18" class="form-control">                      
                            <h4 class="text-center mb-2 mt-5"><?php echo $galleries[0]->teks?></h4>
                            <div class="container mt-1 mb-5 pt-5 formhome2">
            <div class="row">
                <form class="col-10"  method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                <input type="hidden" name="id_gallery" value="1" class="form-control">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Ubah Judul</label>
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="text" name="teks" class="form-control" placeholder="Masukkan Judul Disini..">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
                </form>
    </div>
</div>
                        </div>
                        <div class="col-lg-10 col-12 mt-3 mt-lg-5 mb-5 mx-auto">                           
                            <a class="popup-youtube" href="<?php echo $galleries[17]->teks?>"> 
                                <img src="<?php echo base_url() ?>assets/images/<?php echo $galleries[17]->gambar?>" class="img-fluid w-100 video-call " alt="image">
                                <div class="play-center">
                                    <i class="far fa-7x fa-play-circle"></i>
                                </div>
                            </a>
                        </div>
                    </div><!-- End Row-->

                </div><!-- End Container fluid-->
    <div class="container col-12mt-1 pt-5 formhome1 align-center">
    <div class="row ">
    <form class="col-4" method="post" action="<?php echo base_url().'admin/edit_gallery'; ?>"  enctype="multipart/form-data">
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Gambar Thumbnail</label>
                    <div class="col-sm-10 mb-1 mb-md-0">
                    <input type="hidden" name="id_gallery" value="18" class="form-control"> 
                    <input type="file" name="picture" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="text-black col-sm-2 mb-1 mb-md-0">Link Youtube</label>
                    <div class="col-sm-10 mb-1 mb-md-0"> 
                    <input type="text" name="teks"class="form-control">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ml-3">
                    <button type="submit" class="btn btn-success btn-sm">Edit</button>
                </div>
    </form>
                
    </div>
</div>

</section>

