<form id="formDelNotInclude" method="post" action="<?php echo base_url().'admin/delete_notinclude/' ?>">
            <div class="row form-group formhome2 justify-content-center">
                <div class="col-md-8 mb-md-0">
                    <input type="hidden" name="id_destinasi" value="<?php echo $id_destinasi ?>">
                        <select class="form-control" name="id_notinclude">
                        <?php foreach ($tour_notinclude as $notinclude) : ?>
                            <option value="<?php echo $notinclude->id_notinclude ?>">
                            <?php echo $notinclude->keterangan ?></option>
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
        $("#formDelNotInclude").submit(function(event){
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