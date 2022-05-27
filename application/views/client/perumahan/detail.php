<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>assets/uploads/perumahan/<?= $row->foto_perumahan ?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row slider-text align-items-center col-sm">
            <div class="col-sm-7 ftco-animate pb-0">
                <h1 class=""><?= $row->nama_perumahan ?></h1>
            </div>
            <div class="col-sm-5 ftco-animate pb-0">
                <h2>Info Perumahan</h2>
                <!-- <p>Nama Pengembang :</p>
                <p>Tes</p>
                <p>Tes</p>
                <p>Tes</p>
                <p>Tes</p>
                <p>Tes</p>
                <p>Tes</p>
                <p>Tes</p> -->
                <table cellpadding="5">
                    <tr>
                        <th>
                            <p>Nama Pengembang</p>
                        </th>
                        <th>
                            <p> : </p>
                        </th>
                        <th><p><?= $row->nama_pengembang?></p></th>
                    </tr>
                    <tr>
                        <th>
                            <p>Jenis Perumahan</p>
                        </th>
                        <th>
                            <p> : </p>
                        </th>
                        <th><p><?= $row->nama_jenis?></p></th>
                    </tr>
                    <tr>
                        <th>
                            <p>Lokasi</p>
                        </th>
                        <th>
                            <p> : </p>
                        </th>
                        <th><p><?= $row->lokasi?></p></th>
                    </tr>
                    <tr>
                        <th>
                            <p>Luas Tanah</p>
                        </th>
                        <th>
                            <p> : </p>
                        </th>
                        <th><p><?= $row->luas_tanah?> m<sup>2</sup></p></th>
                    </tr>
                    <tr>
                        <th>
                            <p>Alamat</p>
                        </th>
                        <th>
                            <p> : </p>
                        </th>
                        <th><p><?= $row->alamat?></p></th>
                    </tr>
                    <tr>
                        <th>
                            <p>Fasilitas</p>
                        </th>
                        <th>
                            <p> : </p>
                        </th>
                        <th><p><?= $row->fasilitas?></p></th>
                    </tr>
                    <tr>
                        <th>
                            <p>Total Unit</p>
                        </th>
                        <th>
                            <p> : </p>
                        </th>
                        <th><p><?= $row->total_unit_perumahan?></p></th>
                    </tr>
                    <tr>
                        <th>
                            <p>Ketersediaan</p>
                        </th>
                        <th>
                            <p> : </p>
                        </th>
                        <th><p><?= $row->ketersediaan?></p></th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- <section>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                One of three columns
            </div>
            <div class="col-sm">
                One of three columns
            </div>
            <div class="col-sm">
                One of three columns
            </div>
        </div>
    </div>
</section> -->

<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-7 order-md-last d-flex align-items-stretch">
                <!-- <div class="img w-100 img-2 mr-md-2" style="background-image: url(<?= base_url() ?>assets/client/images/about.jpg);"></div> -->
                <div class="img w-100 img-2 ml-md-2" style="background-image: url(<?= base_url() ?>assets/uploads/perumahan/<?= $row->foto_perumahan ?>);"></div>
            </div>
            <div class="col-md-5 wrap-about py-md-5 ftco-animate">
                <div class="heading-section pr-md-5">
                    <h1 class="mb-4"><b>Keterangan Perumahan</b></h1>
                    <h3><?= $row->nama_perumahan ?></h3>
                    <?= $row->ket_perumahan ?>
                </div>
            </div>
        </div>
    </div>
</section><br>