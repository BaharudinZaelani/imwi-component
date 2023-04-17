<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('content') ?>


    <div class="page">

        <?= $this->include('components/header') ?>

        <!-- Main Content-->
        <div class="main-content pt-0">

            <div class="container">
                <div class="inner-body">

                    <?= $this->include('components/pengumuman') ?>


                    <!-- Page Header -->
                    <div class="page-header">
                        <div>
                            <h2 class="main-content-title tx-24 mg-b-5">Empty Page</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Empty Page</li>
                            </ol>
                        </div>
                        <div class="d-flex">
                            <div class="justify-content-center">
                                <button type="button" class="btn btn-white btn-icon-text my-2 me-2">
                                <i class="fe fe-download me-2"></i> Import
                                </button>
                                <button type="button" class="btn btn-white btn-icon-text my-2 me-2">
                                <i class="fe fe-filter me-2"></i> Filter
                                </button>
                                <button type="button" class="btn btn-primary my-2 btn-icon-text">
                                <i class="fe fe-download-cloud me-2"></i> Download Report
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Page Header -->

                    <!-- Row -->
                    <div class="row sidemenu-height">
                        <div class="col-lg-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    Typing Some text here....
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->

                </div>
            </div>
        </div>
        <!-- End Main Content-->

        <!-- Main Footer-->
        <div class="main-footer text-center">
            <div class="container">
                <div class="row row-sm">
                    <div class="col-md-12">
                        <span>Copyright © 2021 <a href="#">Spruha</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
                    </div>
                </div>
            </div>
        </div>
        <!--End Footer-->

    </div>

<?= $this->endSection() ?>