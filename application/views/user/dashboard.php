<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Profile</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Minible</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <img class="rounded-circle header-profile-user" src="<?= base_url('assets/upload/profile/'). $user['profile']?>" alt="Header Avatar">
                    <span><?=$user['name']?></span>
                    <span><?=$user['email']?></span><br>
                    <span><?=$user['gender']?></span><br>
                    <span><?=$user['phone']?></span><br>
                    <span><?=$user['password']?></span><br>
                </div>
                <!-- end col-->
            </div>
        </div>
    </div>