<form id="formDelInclude" method="post" action="<?php echo base_url().'admin/delete_include/' ?>">
    <div class="row justify-content-end mr-5 mb-5">
        <a type="button" id="closeDelInclude" class="close" href="<?php echo base_url() ?>/admin/index_include/<?php echo $id_destinasi ?>" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </a>
    </div>
    <div class="row form-group formhome2 justify-content-center">
        <div class="col-md-8 mb-md-0">
            <input type="hidden" name="id_destinasi" value="<?php echo $id_destinasi ?>">
            <select class="form-control" name="id_include">
                <?php foreach ($tour_include as $include) : ?>
                <option value="<?php echo $include->id_include ?>">
                <?php echo $include->keterangan ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-md-4 mb-md-0">
            <i class="fas fa-sort-down"></i>
        </div>
    </div>
    <div class="row justify-content-center mb-3 mt-3">
        <button type="submit" class="btn btn-danger">Delete</button>
    </div>
<form>

    <script>
        $("#formDelInclude").submit(function(event){
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