            <div class="content tours-homepage" id="destinasiPopuler">
                <div class="container">
                    <div class="text-center"><h3 class="black front bold text-center">Perjalanan Wisata Populer</h3>
                    </div>
                    <div class="text-center"><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal"
                    id="buttonTambah">Tambah Destinasi<i class="fas fa-plus ml-3"></i></button>
                        <div class="separator text-center svgcenter"></div>     
                    </div>
                    <div class="row">

                    <?php foreach ($destinations as $destination) : ?>
                        <div class="col-xs-12 col-md-6 col-lg-4 mb-4"> 
                            <div class="card ">
                                <small class="white front"><span class="far fa-clock mr-2 white"></span><strong><?php echo $destination->durasi_siang ?></strong><br>days</small>
                                <a class="img-card" href="<?php echo base_url() ?>admin/detail/<?php echo $destination->id_destinasi ?>">
                                <img src="<?php echo base_url() ?>assets/images/<?php echo $destination->preview_destinasi ?>" alt=""/>
                                </a>
                                <div class="card-content">
                                    <div>
                                        <a class="btn btn-danger px-3 btn-sm float-left" href="<?php echo base_url() ?>admin\delete\<?php echo $destination->id_destinasi.'-'.$page ?>" 
                                        role="button">hapus<i class="fas fa-times ml-1"></i></a>
                                        <a class="btn btn-warning px-3 btn-sm float-left ml-1" href="#" role="button"
                                        data-toggle="modal" data-id="<?php echo $destination->id_destinasi.'-'.$page ?>" data-checked="<?php echo $destination->favorite ?>"
                                        data-target="#editDestinasi">ubah<i class="far fa-edit ml-1"></i></a> 
                                    </div>
                                    <h6 class="primary-color text-right">Rp. <?php echo number_format($destination->harga,0,",","."); ?></h6>
                                    <h6 class="black"><a href="<?php echo base_url() ?>admin/detail/<?php echo $destination->id_destinasi ?>" target="_blank"><?php echo $destination->nama_destinasi ?></a></h6>
                                    <p class="" style="min-height: 7rem; max-height: 7rem; overflow: hidden;">
                                    <?php echo character_limiter($destination->deskripsi_destinasi, 130) ?><a href="<?php echo base_url() ?>admin/detail/<?php echo $destination->id_destinasi ?>" target="_blank"><span>... See more</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    </div>
                    <?= $this->pagination->create_links(); ?>
                    <div class="text-center mt-3"><div class="separator text-center svgcenter"></div> 
                    <a class="btn btn-info" id="buttonDestinasiLengkap" href="<?php echo base_url() ?>admin/list_destinasi"><span class="white">Ke List Semua Destinasi<i class="fas fa-arrow-circle-right ml-3"></i></span></a>    
                    </div>
                </div>
            </div>

        <script>
        $(document).on("click", "#destinasiPopuler .card-content .btn-warning", function () {
            var destinationId = $(this).data('id');
            $("#editDestinasi #editId_destinasi").val(destinationId);
        });
        </script>