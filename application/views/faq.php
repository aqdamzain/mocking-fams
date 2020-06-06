
<section id="section3">
            <div class="container">
                <div class="row">
                    <?php foreach ($faqs as $faq) : ?>
                        <div class="col-md-8 offset-md-2  col-12 text-left">
                            <h6 class="mb-1"><?php echo $faq->pertanyaan ?></h6>    
                            <p class="pt-1 wall-text pb-4">
                            <?php echo $faq->jawaban ?>
                            </p>                              
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
</section>
