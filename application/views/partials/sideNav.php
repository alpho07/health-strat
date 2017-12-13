<nav class="side-navbar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h4"><?php echo $this->session->userdata('username'); ?></h1>
            <p></p>
        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="active"> <a href="<?php echo base_url(); ?>"><i class="icon-home"></i>Home</a>
            <ul>
                <li class="active"> <a href="<?php echo base_url().'hskilltest/addPatient'; ?>"><i class="fa fa-user"></i>Add Client</a></li>
                <li class="active"> <a href="<?php echo base_url().'hskilltest/addPatientRecommendation'; ?>"><i class="fa fa-user"></i>Reccomendations</a></li>
            </ul>
        </li>
        <li class="active"> <a href="<?php echo base_url(); ?>"><i class="icon-home"></i>API</a></li>

</nav>