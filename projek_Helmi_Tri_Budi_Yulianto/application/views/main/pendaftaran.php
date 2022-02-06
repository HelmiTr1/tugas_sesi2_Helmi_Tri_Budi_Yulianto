<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0"><?php echo $title ?></h3>
                        </div>
                        <div class="col text-right">
                            <a href=" <?php echo base_url('main/pendaftaran_form')?>" class="btn btn-sm btn-primary">
                                <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                                <span class="btn-inner--text">Add New</span></a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table  table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Pasien</th>
                                <th>Dokter</th>
                                <th>Keluhan</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $i =>$pendaftaran) { ?>
                                <tr>
                                    <td><?= $i+1 ?></td>
                                    <td><?= $pendaftaran->tanggal ?></td>
                                    <td><?= $pendaftaran->namaPasien ?></td>
                                    <td><?= $pendaftaran->namaDokter ?></td>
                                    <td><?= $pendaftaran->keluhan ?></td>
                                    <td class="">
                                        <form action="<?php echo base_url('main/pendaftaran_form') ?>" method="post">
                                            <input type="hidden" name="id" value="<?php echo $pendaftaran->id ?>">
                                            <button class="btn btn-warning btn-sm" type="submit"><span class="btn-inner--icon"  data-toggle="tooltip" data-placement="right" title="Edit"><i class="ni ni-settings-gear-65"></i></span></button>
                                        </form>
                                    </td>
                                    <td class="">
                                        <form action="<?php echo base_url('main/pendaftaran_delete') ?>" method="post">
                                            <input type="hidden" name="id" value="<?php echo $pendaftaran->id ?>">
                                            <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Apakah anda yakin hapus data?')" ><i class="ni ni-fat-remove" data-toggle="tooltip" data-placement="right" title="Delete"></i></span></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>