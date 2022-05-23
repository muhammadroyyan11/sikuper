	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?= base_url() ?>assets/img/uploads/koopen.jpg );">
	    <h2 class="l-text2 t-center">
	        Outlet
	    </h2>
	</section>

	<!-- Banner2 -->
	<section class="banner2 bg5 p-t-55 p-b-55">
	    <div class="container">
	        <div class="row">
	            <!-- Outlet Card -->
	            <?php foreach ($outlet as $key => $data) : ?>
	                <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
	                    <div class="hov-img-zoom pos-relative">
	                        <img src="<?= base_url() ?>assets/img/uploads/koopen.jpg" alt="IMG-BANNER" style="width:100%; height:400px;">

	                        <div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
	                            <span class="m-text9 p-t-45 fs-20-sm">
	                                <?= $data->nama?>
	                            </span>

	                            <a href="<?= site_url('outlet/detail/' . $data->id_outlet) ?>" class="s-text4 hov2 p-t-20 ">
	                                View Outlet
	                            </a>
	                        </div>
	                    </div>
	                </div>
	            <?php endforeach; ?>
	        </div>
	    </div>
	</section>