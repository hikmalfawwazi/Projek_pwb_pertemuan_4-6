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
              <h5 class="card-title">Tambah Ongkir</h5>
              <p class="card-text">
              <form method="post">
                <div class="mb-3">
                  <label for="nama_ekspedisi019" class="form-label">Nama Ekspedisi</label>
                  <select name="nama_ekspedisi019" id="nama_ekspedisi019" class="form-control">
                    <option value="">-- Pilih Ekspedisi --</option>
                    <option value="JNE">JNE</option>
                    <option value="JNT">JNT</option>
                    <option value="TIKI">TIKI</option>
                    <option value="POS">POS Indonesia</option>
                    <option value="SiCepat">SiCepat</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="jenis_layanan019" class="form-label">Jenis Layanan</label>
                  <select name="jenis_layanan019" id="jenis_layanan019" class="form-control">
                    <option value="">-- Pilih Layanan --</option>
                    <option value="Reguler">Reguler</option>
                    <option value="Express">Express</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="tarif_per_kg019" class="form-label">Tarif Per Kg</label>
                  <input type="text" class="form-control" name="tarif_per_kg019" id="tarif_per_kg019">
                </div>
                <div class="mb-3">
                  <label for="status019" class="form-label">Status</label>
                  <select name="status019" id="status019" class="form-control">
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="<?= base_url('administrator/Ongkir2422500019') ?>" class="btn btn-danger">Kembali</a>
              </form>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>