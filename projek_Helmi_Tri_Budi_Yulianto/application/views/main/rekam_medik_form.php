<form id="rekam_medik_form" method="POST" action="<?php if ($data != null) echo base_url('main/rekam_medik_update');
                                                else echo base_url('main/rekam_medik_add'); ?>">
<div class="container-fluid mt--6">
      <div class="row">
      <div class="col-xl-6">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Data Pasien</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
            <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>Nama Pasien</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="">
                                    <input type="text" name="namaPasien" id="namaPasien" class="form-control" readonly value=" <?php if ($data != null) echo $data->namaPasien ?>">
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
                                    <input type="text" name="keluhan" id="keluhan" class="form-control" readonly value=" <?php if ($data != null) echo $data->keluhan?>">
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
                                    <input type="text" name="namaDokter" id="namaDokter" class="form-control" readonly value=" <?php if ($data != null) echo $data->namaDokter ?>">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0"><?php echo $title ?></h3>
                </div>
                <div class="col text-right">
                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    <a href=" <?php echo base_url('main/rekam_medik') ?>" class="btn btn-sm btn-danger">Back</a>
                </div>
              </div>
            </div>
            <div class="card-body">
            <div class="row clearfix">
                        <input type="hidden" name="idRekamMedik" id="idRekamMedik" value="<?php if ($data != null) echo $data->idRekamMedik ?>">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>Nomor Pendaftaran</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="">
                                    <select name="idPendaftaran" id="idPendaftaran" class="form-control">
                                        <option value="">Pilih Nomor Pendaftaran</option>
                                        <?php var_dump($pendaftaran); foreach($pendaftaran as $row){
                                            if($data !=null){?>
                                            <option value="<?php echo $row->idPendaftaran?>" <?php if($data->idPendaftaran==$row->idPendaftaran) echo "selected" ?>><?php echo $row->idPendaftaran?> - <?php echo $row->namaPasien?> </option>
                                           <?php }else{?>
                                            <option value="<?php echo $row->idPendaftaran?>"><?php echo $row->idPendaftaran?> -  <?php echo $row->namaPasien?></option>
                                        <?php }}?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>Diagnosa</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="">
                                    <textarea class="form-control" name="diagnosa" id="diagnosa"><?php if ($data != null) echo $data->diagnosa ?>
                                </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>Tanggal Konsultasi Kembali</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="">
                                    <input type="date" name="tanggalKonsultasiKembali" id="tanggalKonsultasiKembali" class="form-control" value="<?php if ($data != null) echo $data->tanggalKonsultasiKembali ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>Ruangan</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="">
                                    <input type="text" name="ruangan" id="ruangan" class="form-control" value="<?php if ($data != null) echo $data->ruangan ?>">
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

