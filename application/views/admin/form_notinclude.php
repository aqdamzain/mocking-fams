<form id="formTambahNotInclude" method="post" action="<?php echo base_url().'admin/tambah_notinclude'; ?>" enctype="multipart/form-data">
        <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0 formhome2">
                <label class="text-black col-form-label">Keterangan</label>
                <input type="hidden" name="id_destinasi" value="<?php echo $id_destinasi ?>">
                <input type="text" id="belum_termasuk" name="belum_termasuk" class="form-control px-2">
                </div>
            </div>
          <div class="row justify-content-center mb-3 mt-3">
          <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>

        <script>
        $("#formTambahNotInclude").submit(function(event){
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
                $("#notinclude").html(response);
            });
        });
    </script>