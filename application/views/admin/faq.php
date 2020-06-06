<section id="section3">
  <div >
            <div class="container">
                <div class="text-center"><button class="btn btn-info" data-toggle="modal" data-target="#modalTambahQuestion" id="buttonTambah">Tambah FAQs<i class="fas fa-plus ml-3"></i></button>
                    <div class="separator text-center svgcenter"></div>     
                </div>
                <div class="row">
                    <?php foreach ($faqs as $faq) : ?>
                        <div class="col-md-8 offset-md-2  col-12 text-left">
                            <div>
                                <a class="btn btn-danger px-3 btn-sm float-left" href="<?php echo base_url() ?>admin\deleteQuestions\<?php echo $faq->id_faq?>" 
                                    role="button">Hapus<i class="fas fa-times ml-1"></i></a>
                                <a class="btn btn-warning px-3 btn-sm float-left ml-1" href="#" role="button" data-toggle="modal" id="ubahQuestion" data-id="<?php echo $faq->id_faq?>"
                                    data-target="#editQuestions">Ubah<i class="far fa-edit ml-1"></i></a> 
                            </div>
                            <br></br>
                            <h6 class="mb-1"><?php echo $faq->pertanyaan ?></h6>    
                            <p class="pt-1 wall-text pb-4">
                            <?php echo $faq->jawaban ?>
                            </p>                              
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
</div>
<script>
        $(document).on("click", "#ubahQuestion ", function () {
            var questionId = $(this).data('id');
            $("#editId_faq").val(questionId);
        });
</script>
<!-- <script>
        $(document).on("click", "#destinasiPopuler .card-content .btn-warning", function () {
            var destinationId = $(this).data('id');
            $("#editDestinasi #editId_destinasi").val(destinationId);
        });
        </script> -->
</section>

<!-- Modal edit destinasi-->
<div class="modal fade" id="editQuestions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content container formhome2">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit FAQ</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        <form id="formeditQuestions" method="post" action="<?php echo base_url('admin/editQuestions') ?>" enctype="multipart/form-data">
        <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="text-black col-form-label" for="pertanyaan2">Pertanyaan</label>
            <input type="hidden" id="editId_faq" name="editId_faq" class="form-control" value=""> 
            <textarea name="pertanyaan2" id="pertanyaan2" class="form-control" rows="5" 
                placeholder="Tuliskan pertanyaan disini.."></textarea> 
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="text-black col-form-label" for="jawaban2">Jawaban</label> 
            <textarea name="jawaban2" id="jawaban2" class="form-control" rows="7" 
            placeholder="Tuliskan jawaban disini.."></textarea> 
          </div>
        </div>
          <div class="row justify-content-center mb-3 mt-3">
          <button type="submit" class="btn btn-success">Ubah</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
<!-- Modal tambah destinasi-->
<div class="modal fade" id="modalTambahQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content container formhome2">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah FAQs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="tambahQuestions" method="post" action="<?php echo base_url().'admin/addQuestions'; ?>"  enctype="multipart/form-data">
        <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="text-black col-form-label" for="pertanyaan">Pertanyaan</label> 
            <input type="text" id="pertanyaan" name="pertanyaan" class="form-control px-2" placeholder="Tuliskan pertanyaan disini..">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="text-black col-form-label" for="jawaban">Jawaban</label> 
            <textarea name="jawaban" id="jawaban" class="form-control" rows="3" 
              placeholder="Tuliskan jawaban disini.."></textarea> 
          </div>
        </div>
        <div class="row justify-content-center mb-3 mt-3">
          <button type="submit" class="btn btn-success">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>

  