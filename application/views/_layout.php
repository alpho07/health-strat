<?php $this->load->view('partials/header'); ?>
<div class="page home-page">
    <!-- Main Navbar-->
    <?php $this->load->view('partials/mainNav'); ?>
    <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <?php $this->load->view('partials/sideNav'); ?> 
        <div class="content-inner">
            <!-- Page Header-->
            <header class="page-header">
                <div class="container-fluid">
                    <h2 class="no-margin-bottom"><?php echo @$subtitle; ?></h2>
                </div>
            </header>
            <div class="row">
                <section class="dashboard-counts no-padding-bottom">
                    <div class="container-fluid">
                        <?php $this->load->view($page); ?>
                    </div>
            </div>
            <?php $this->load->view('partials/footer'); ?>