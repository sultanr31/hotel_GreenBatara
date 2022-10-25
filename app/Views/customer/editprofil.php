<?php echo view('layout/header_konsumen'); ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Table</h3>
                <p class="text-subtitle text-muted">Who does not love tables</p>
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
        <div class="container-fluid divclass">
            <h2 class="my-3 text-light">Data Kamar</h2>
            <div class="card mb-4">
                <div class="card-header">
                    <h2>Edit Profile</h2>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <form action="/saveprofil/" method="POST">
                            <table cellspacing="4" cellpadding="3" width="40%">
                                <tbody>
                                    <tr>
                                        <td>Photo Profile</td>
                                        <td>:</td>
                                        <td><input type="file" class="form-control ms-2" name="nomor" id="nomor" autofocus required><br></td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td>:</td>
                                        <td><input type="text" class="form-control ms-2" name="nomor" id="nomor" autofocus required><br></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td>:</td>
                                        <td><input type="password" class="form-control ms-2" name="tipekamar" id="tipekamar" required><br></td>
                                    </tr>
                                    <tr class="my-2">
                                        <td>Gender</td>
                                        <td>:</td>
                                        <td><input type="radio" id="html" name="fav_language" value="gender">
                                            <label for="html">Laki-laki</label>
                                            <input type="radio" id="css" name="fav_language" value="gender">
                                            <label for="css">Perempuan</label><br>
                                    </tr>
                                    <tr>
                                        <td>Bio</td>
                                        <td>:</td>
                                        <td><textarea type="text" name="deskripsi" id="deskripsi" class="form-control"></textarea><br></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <button type="submit" name="submit" class="btn btn-success btn-lg button2">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/app.js"></script>