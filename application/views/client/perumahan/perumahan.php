<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>assets/uploads/bg.jpeg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate pb-0 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Properties <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Perumahan</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section goto-here">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <h2 class="mb-2">Perumahan</h2>
            </div>
        </div>

        <div class="form-inline">
            <span class="mr-md-auto"> </span>
            <div class="input-group rounded">
                <input type="search" class="form-control myInput" id="myInput" onkeyup="myFunction()" placeholder="Search Jenis Perumahan" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="bi bi-search"></i>
                </span>
            </div>
            &nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"><span class="bi bi-filter"></span> Filter</button>
        </div><br>
        <div class="container" id="card-lists">
            <div class="row filter_data">
                <?php
                foreach ($perumahan->result() as $key => $row) { ?>
                    <div class="col-md-4">
                        <div class="property-wrap ftco-animate card-body">
                            <a href="<?= site_url("perumahan/read/" . $row->id_perumahan) ?>" class="img" style="background-image: url(<?= base_url() ?>assets/uploads/perumahan/<?= $row->foto_perumahan ?>);">
                            </a>
                            <div class="text">
                                <h3><a href="#"><?= $row->nama_perumahan ?></a></h3>
                                <span class="location"><?= $row->nama_jenis ?></span>
                                <span class="location"><?= $row->fasilitas  ?></span>
                                <a href="#" class="d-flex align-items-center justify-content-center btn-custom">
                                    <span class="fa fa-link"></span>
                                </a>
                                <hr>
                                <span class="location"><?= $row->lokasi  ?></span>
                                <span class="text-right"></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center pagination_link">

            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-backdrop="true" data-keyboard="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Filter Perumahan</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('perumahan/filter') ?>" method="GET">
                <div class="modal-body">
                    <!-- <label>Jenis Perumahan :</label>
                    <?php foreach ($jenis->result_array() as $key => $data) { ?>
                        <div class="list-group-item checkbox">
                            <label><input type="checkbox" name="id_jenis_perumahan" class="common_selector lokasi" value="<?php echo $data['nama_jenis']; ?>"> <?php echo $data['nama_jenis']; ?></label>
                           
                        </div>
                    <?php } ?>
                    <hr> -->
                    <label>Lokasi :</label>
                    <?php foreach ($lokasi->result_array() as $key => $data) { ?>
                        <div class="list-group-item checkbox">
                            <label><input type="radio" name="lokasi" class="common_selector lokasi" value="<?php echo $data['lokasi']; ?>"> <?php echo $data['lokasi']; ?></label>
                            <!-- <select name="lokasi[]" form="carform">
                                <option value="<?php echo $data['lokasi']; ?>"><?php echo $data['lokasi']; ?></option>
                            </select> -->
                        </div>
                    <?php } ?>
                </div>

                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <button type="submit" class="btn btn-secondary">filter</button>
                </div>
            </form>
        </div>
    </div>
</div>
</style>