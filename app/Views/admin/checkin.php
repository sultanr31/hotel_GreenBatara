<?php echo view('layout/header'); ?>          
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Reservasi Kamar</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Reservasi</li>
                    </ol>
                </nav>
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
<?php echo view('layout/footer'); ?>