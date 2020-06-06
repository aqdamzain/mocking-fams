<!-- <section id="section3">
<div>
        <h2 class="black text-center shadow-text align-middle mb-5 ">Edit Akun</h2>
    </div>
    <div class="container">
        <div class="text-center mb-5"><button class="btn btn-info" data-toggle="modal" data-target="#modalTambahAkun" id="buttonTambah">Tambah Akun<i class="fas fa-plus ml-3"></i></button>
            <div class="separator text-center svgcenter"></div>     
        </div>
    </div>
    <div class="col-md-8 offset-md-2  col-12 text-left">
        <table class="table table-bordered">
		    <tr>
			    <th>No id</th>
			    <th>Email</th>
			    <th colspan="3">Aksi</th>
		    </tr>
		    <?php 
		    $no=1;
		    foreach ($accounts as $account) :  ?>
			    <tr>
				    <td><?php echo $no++?></td>
				    <td><?php echo $account->email ?></td>
				    <td><a class="btn btn-warning px-3 btn-sm float-left ml-1" href="#" role="button" data-toggle="modal" 
                        data-target="#editAkun">Ubah Password<i class="far fa-edit ml-1"></i></a> 
                    </td>
		    		<td><a class="btn btn-danger px-3 btn-sm float-left" href="#" 
                        role="button">Hapus Akun<i class="fas fa-times ml-1"></i></a>
                    </td>
			    </tr>
		    <?php endforeach; ?>
	    </table>
    </div>
</section> -->

<!-- Modal edit Akun-->
<div class="modal fade" id="editAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content container formhome2">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Akun</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        <form id="formeditQuestions" method="post" action="<?php echo base_url('admin/editQuestions') ?>" enctype="multipart/form-data">
        <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="text-black col-form-label" for="email2">Email</label>
            <input type="hidden" id="editId_Email" name="editId_Email" class="form-control" value=""> 
            <input type="email" name="email2" id="email2" class="form-control" 
                placeholder="Masukkan Kembali Email.."></input> 
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="text-black col-form-label" for="password2">Password Saat Ini</label> 
            <input type="password" name="password2" id="password2" class="form-control" 
            placeholder="Masukkan Password Saat ini.."></input> 
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="text-black col-form-label" for="passwordbaru">Password Baru</label> 
            <input type="password" name="passwordbaru" id="passwordbaru" class="form-control" 
            placeholder="Masukkan Password Baru.."></input> 
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

<!-- Modal tambah akun-->
<div class="modal fade" id="modalTambahAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content container formhome2">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="tambahQuestions" method="post" action="<?php echo base_url().'admin/addAccount'; ?>"  enctype="multipart/form-data">
        <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="text-black col-form-label" for="email">Email</label> 
            <input type="email" id="email" name="email" class="form-control px-2" placeholder="Masukkan email disini..">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="text-black col-form-label" for="password">Password</label> 
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password.."></input> 
          </div>
        </div>
        <div class="row justify-content-center mb-3 mt-3">
          <button type="submit" class="btn btn-success">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>