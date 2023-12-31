<div class="right-part container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">

                    <li class="nav-item">
                        <a class="nav-link <?php if($cur_page == 'index.php') {echo "active";}?>" aria-current="page" href="<?php echo ADMIN_URL; ?>index.php">
                            <span data-feather="home" class="align-text-bottom"></span>
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item dd-item active">
                        <a class="nav-link dd-link active collapsed" data-bs-toggle="collapse" data-delay="0" href="#collapseSetting" role="button" aria-expanded="false" aria-controls="collapseSetting">
                            <span data-feather="folder" class="align-text-bottom"></span>
                            Settings
                        </a>
                        <div class="collapse" id="collapseSetting">
                            <a class="nav-link inner-item" href="#">
                                General Settings
                            </a>
                            <a class="nav-link inner-item" href="#">
                                Payment Settings
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($cur_page == 'form.php') {echo "active";}?>" href="<?php echo ADMIN_URL; ?>form.php">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Form
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($cur_page == 'form-tab.php') {echo "active";}?>" href="<?php echo ADMIN_URL; ?>form-tab.php">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Form Tab
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($cur_page == 'table.php') {echo "active";}?>" href="<?php echo ADMIN_URL; ?>table.php">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Table
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($cur_page == 'datatable.php') {echo "active";}?>" href="<?php echo ADMIN_URL; ?>datatable.php">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Data Table
                        </a>
                    </li>
                </ul>
            </div>
        </nav>


        <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4 pb-3">