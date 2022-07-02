<div class="container pt-5">
    <?php
    //print_r($data_GGBase->nama_barang); 
    ?>
    <br>
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Gudang</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('gudang'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    $attributes = array('id' => 'FrmEditProduk', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="NamaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id_produk" name="id_produk" value=" <?= $data_GGBase->id_produk; ?>">
                            <input type="text" class="form-control" id="NamaBarang" name="nama_barang" value=" <?= $data_GGBase->nama_barang; ?>">
                            <small class="text-danger">
                                <?php echo form_error('NamaBarang') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Brand" class="col-sm-2 col-form-label">Brand</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="Brand" name="brand">
                                <option value="GudangGaram" selected disabled>Pilih</option>
                                <option value="GudangGaram" <?php if ($data_GGBase->brand == "GudangGaram") : echo "selected";
                                                            endif; ?>>Gudang Garam Family</option>
                                <option value="Surya" <?php if ($data_GGBase->brand == "Surya") : echo "selected";
                                                        endif; ?>>Surya Family</option>
                                <option value="GG" <?php if ($data_GGBase->brand == "GG") : echo "selected";
                                                    endif; ?>>GG Family</option>
                                <option value="Klobot" <?php if ($data_GGBase->brand == "Klobot") : echo "selected";
                                                        endif; ?>>Klobot</option>
                                <option value="Longlat" <?php if ($data_GGBase->brand == "Longlat") : echo "selected";
                                                        endif; ?>>Longlat</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('Brand') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="Harga" name="harga_barang" value="<?= $data_GGBase->harga_barang; ?>">
                            <small class="text-danger">
                                <?php echo form_error('Harga') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Stok" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="Stok" name="stok_barang" value="<?= $data_GGBase->stok_barang; ?>">
                            <small class="text-danger">
                                <?php echo form_error('Stok') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>