
<?php foreach ($tour_include as $include) : ?>                                        
    <div><i class="fas fa-check-circle"></i><?php echo $include->keterangan ?></div>
<?php endforeach; ?>
<a type="button" id="tambahInclude" class="btn btn-outline-success btn-sm mt-3 ml-3"
href="<?php echo base_url() ?>admin/forminclude/<?php echo $id_destinasi ?>">
<i class="fas fa-plus-circle"></i></a>
<a type="button" id="delInclude" class="btn btn-outline-danger btn-sm mt-3 ml-1"
href="<?php echo base_url() ?>admin/delinclude/<?php echo $id_destinasi ?>">
<i class="fas fa-trash-alt"></i></a>