<?= $this->extend('layout/sidenav'); ?>
<?= $this->section('admin'); ?>   
    
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0">Reservasi Kamar</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#" style="background: rgb(34,146,43);"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">               
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Reservasi</li>
                </ol>               
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                Data Reservasi
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Tipe Kamar</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                            <th>No. Telepon</th>
                            <th>Status</th>
                            <th>Rating</th>
                            <th>Layanan</th>
                            <th>Total Tagihan</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i =1; ?>
                        <?php foreach($customer as $k) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $k['nama'] ?></td>
                            <td><?= $k['tipe'] ?></td>
                            <td><?= $k['cin'] ?></td>
                            <td><?= $k['cout'] ?></td>
                            <td><?= $k['telp'] ?></td>
                            <td><?= $k['status'] ?></td>
                            <td><?= $k['rating'] ?></td>
                            <td><?= $k['layanan'] ?></td>
                            <td><?= $k['total_tagihan'] ?></td>
                            <!-- <td>
                                <span class="badge bg-success">Active</span>
                            </td> -->
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->
</div>
<?= $this->endSection(); ?>