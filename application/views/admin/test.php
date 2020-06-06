<form id="formEditDestinasi" method="post" action="<?php echo base_url().'test/uplod_test'; ?>" enctype="multipart/form-data">
        <div class="row form-group">
            <label class="text-black col-sm-2 mb-3 mb-md-0" for="picture">Gambar Preview</label>
            <div class="col-sm-10 mb-3 mb-md-0"> 
            <input type="file" name="picture" id="picture" class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <label class="text-black col-sm-2 mb-3 mb-md-0" for="picture2">Gambar Preview2</label>
            <div class="col-sm-10 mb-3 mb-md-0"> 
            <input type="file" name="picture2" id="picture2" class="form-control">
            </div>
        </div>
          <div class="row justify-content-center mb-3 mt-3">
          <button type="submit" class="btn btn-success">Edit</button>
          </div>
        </form>