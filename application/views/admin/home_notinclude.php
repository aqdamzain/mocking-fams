<?php foreach ($tour_notinclude as $notinclude) : ?>                                        
    <div><i class="fas fa-times-circle"></i><?php echo $notinclude->keterangan ?></div>
<?php endforeach; ?>
<a type="button" id="tambahNotInclude" class="btn btn-outline-success btn-sm mt-3 ml-3"
href="<?php echo base_url() ?>admin/formnotinclude/<?php echo $id_destinasi ?>">
<i class="fas fa-plus-circle"></i></a>
<a type="button" id="delNotInclude" class="btn btn-outline-danger btn-sm mt-3 ml-1"
href="<?php echo base_url() ?>admin/delnotinclude/<?php echo $id_destinasi ?>">
<i class="fas fa-trash-alt"></i></a>