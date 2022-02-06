<form id="pendaftaran_form" method="POST" action="<?php if ($data != null) echo base_url('main/pendaftaran_update');
                                                else echo base_url('main/pendaftaran_add'); ?>">
<div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0"><?php echo $title ?></h3>
                </div>
                <div class="col text-right">
                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    <a href=" <?php echo base_url() ?>" class="btn btn-sm btn-danger">Back</a>
                </div>
              </div>
            </div>
            <div class="card-body">
            <div class="row clearfix">
                        <input type="hidden" name="idPendaftaran" id="idPendaftaran" value="<?php if ($data != null) echo $data->idPendaftaran ?>">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>Nama Pasien</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="">
                                    <select name="idPasien" id="idPasien" class="form-control">
                                        <option value="">Pilih Pasien</option>
                                        <?php foreach($pasien as $row){
                                            if($data !=null){?>
                                            <option value="<?php echo $row->idPasien?>" <?php if($data->idPasien==$row->idPasien) echo "selected" ?>><?php echo $row->namaPasien?></option>
                                           <?php }else{?>
                                            <option value="<?php echo $row->idPasien?>"><?php echo $row->namaPasien?></option>
                                        <?php }}?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>Dokter Tujuan</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="">
                                    <select name="idDokter" id="idDokter" class="form-control">
                                        <option value="">Pilih Dokter</option>
                                        <?php foreach($dokter as $row){
                                            if($data !=null){?>
                                            <option value="<?php echo $row->idDokter?>" <?php if($data->idDokter==$row->idDokter) echo "selected" ?>><?php echo $row->namaDokter?></option>
                                           <?php }else{?>
                                            <option value="<?php echo $row->idDokter?>"><?php echo $row->namaDokter?></option>
                                        <?php }}?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>Keluhan</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="">
                                    <input type="text" class="form-control" name="keluhan" id="keluhan" value="<?php if ($data != null) echo $data->keluhan ?>">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</form>