<?php echo view('layout/header_konsumen'); ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tabel Reservasi</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tabel Reservasi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Table head options</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Berikut adalah Reservasi Kamar Hotel yang Anda Pesan</p>
                            <button><a href="/createreservasi/">Buat Reservasi</a></button>
                        </div>
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tipe</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($customer as $k) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $k['nama'] ?></td>
                                        <td><?= $k['tipe'] ?></td>
                                        <td><?= $k['status'] ?></td>
                                        <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php echo view('layout/footer'); ?>
