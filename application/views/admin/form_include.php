
<form id="formTambahInclude" method="post" action="<?php echo base_url().'admin/tambah_include'; ?>" enctype="multipart/form-data">
    <div class="row justify-content-end mr-5 mb-5">
        <a type="button" id="closeTambahInclude" class="close" href="<?php echo base_url() ?>/admin/index_include/<?php echo $id_destinasi ?>" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </a>
    </div>
    <div class="row form-group formhome2">
        <div class="col-md-12 mb-3 mb-md-0">
            <label class="text-black col-form-label">Isi Keterangan</label>
            <input type="hidden" name="id_destinasi" value="<?php echo $id_destinasi ?>">
            <input type="text" id="sudah_termasuk" name="sudah_termasuk" class="form-control px-2">
        </div>
    </div>
    <div class="row justify-content-center mb-3 mt-3">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>

    <script>
        $("#formTambahInclude").submit(function(event){
            event.preventDefault(); //prevent default action
            var post_url = $(this).attr("action"); //get form action url
            var request_method = $(this).attr("method"); //get form GET/POST method
            var form_data = new FormData(this); //Creates new FormData object
            $.ajax({
                url : post_url,
                type: request_method,
                data : form_data,
                contentType: false,
                cache: false,
                processData:false
            }).done(function(response){ //
                $("#include").html(response);
            });
        });
    </script>