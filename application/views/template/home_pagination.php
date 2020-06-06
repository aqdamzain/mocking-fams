                    <div class="row" id="paginationWelcome">
                    <?php foreach ($destinations as $destination) : ?>
                        <div class="col-xs-12 col-md-6 col-lg-4 mb-4">
                            <div class="card ">
                                <small class="white front"><span class="far fa-clock mr-2 white"></span><strong><?php echo $destination->durasi_siang ?></strong><br>days</small>
                                <a class="img-card" href="<?php echo base_url() ?>welcome/detail/<?php echo $destination->id_destinasi ?>">
                                <img src="<?php echo base_url() ?>assets/images/<?php echo $destination->preview_destinasi ?>" alt=""/>
                                </a>
                                <div class="card-content">
                                    <h6 class="primary-color text-right">Rp. <?php echo number_format($destination->harga,0,",","."); ?></h6>
                                    <h6 class="black"><a href="<?php echo base_url() ?>welcome/detail/<?php echo $destination->id_destinasi ?>" target="_blank"><?php echo $destination->nama_destinasi ?></a></h6>
                                    <p class="" style="min-height: 7rem; max-height: 7rem; overflow: hidden;">
                                       <?php echo character_limiter($destination->deskripsi_destinasi, 130) ?><a href="<?php echo base_url() ?>welcome/detail/<?php echo $destination->id_destinasi ?>" target="_blank"><span>... See more</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <?= $this->pagination->create_links(); ?>
