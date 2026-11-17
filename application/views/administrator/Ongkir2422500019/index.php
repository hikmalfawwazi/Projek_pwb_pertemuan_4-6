<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ongkir</h5>
                            <p class="card-text">
                                <a href="<?= base_url('administrator/Ongkir2422500019/tambah_ongkir') ?>" class="btn btn-labeled btn-primary">
                                    <span class="btn-label"><i class="fa fa-plus"></i></span>
                                    Ongkir
                                </a>
                            </p>
                            <div class="card-body">
                                <?php if ($this->session->flashdata('message')) : ?>
                                    <?= $this->session->flashdata('message') ?>
                                <?php endif ?>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Ekspedisi</th>
                                            <th>Jenis Layanan</th>
                                            <th>Tarif Per Kg</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($list_ongkir as $ongkir) : ?>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td><?= $no ?></td>
                                                <td><?= $ongkir['nama_ekspedisi019'] ?></td>
                                                <td><?= $ongkir['jenis_layanan019'] ?></td>
                                                <td><?= $ongkir['tarif_per_kg019'] ?></td>
                                                <td><?= $ongkir['status019'] ?></td>
                                                <td>
                                                    <a href="<?= base_url('administrator/Ongkir2422500019/ubah_ongkir/') ?><?= $ongkir['id_ongkir019'] ?>"><span class="badge bg-success">Ubah</span></a>
                                                    <a href="<?= base_url('administrator/Ongkir2422500019/hapus/') ?><?= $ongkir['id_ongkir019'] ?>"><span class="badge bg-danger">Hapus</span></a>
                                                </td>
                                            </tr>
                                        <?php $no++;
                                        endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>