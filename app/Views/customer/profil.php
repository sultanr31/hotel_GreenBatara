<?php echo view('layout/header_konsumen'); ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Profile</h3>
                <p class="text-subtitle text-muted">Your Information</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Table</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <main>
        <div class="card position-absolute top-50 start-50 translate-middle" style="max-width: 840px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/gus.png" class="img-fluid rounded-circle mx-3 my-4 " alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body ms-4">
                        <h5 class="card-title">Username</h5>
                        <h5 class="card-title"><small class="text-muted">Email</small></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="/editprofil/" type="button" class="btn btn-success">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/app.js"></script>