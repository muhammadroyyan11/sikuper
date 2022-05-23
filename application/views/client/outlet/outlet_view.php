<!-- content page -->
<section class="bgwhite p-t-66 p-b-38">
    <div class="container">
        <div class="row">
            <div class="col-md-4 p-b-30">
                <div class="hov-img-zoom">
                    <img src="<?= base_url() ?>assets/img/uploads/koopen.jpg" alt="IMG-ABOUT">
                </div>
            </div>

            <div class="col-md-8 p-b-30">
                <h3 class="m-text26 p-t-15 p-b-16">
                    <?= $row->nama ?>
                    <hr>
                </h3>

                <p class="p-b-28">
                    <?= $row->alamat ?>
                </p>



                <div class="w-size2 p-t-20">
                    <!-- Button Get Direction-->
                    <a href="<?= $row->maps ?>" target="_blank">
                        <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                            Get Direction
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Modal: Name-->
<div class="modal fade" id="modalRegular" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

            <!--Body-->
            <div class="modal-body mb-0 p-0">

                <!--Google map link-->
                <div id="map-container-google-16" class="z-depth-1-half map-container-9" style="height: 400px">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.413396548244!2d112.62956451415629!3d-7.956159981479854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629b7da3ba6bb%3A0xb0837464f66cc0bc!2sKofluck%20Malang!5e0!3m2!1sid!2sid!4v1594036948591!5m2!1sid!2sid" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-outline-info btn-md" data-dismiss="modal">Close</button>
            </div>

        </div>
        <!--/.Content-->

    </div>
</div>
<!--Modal: Name-->

<hr>

