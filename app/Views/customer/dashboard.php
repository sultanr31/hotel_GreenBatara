<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <title>Dashboard</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top sidenav">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >Green Batara Hotel</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Profil</a></li>
                <li><a class="dropdown-item" href="#">Setting</a></li>
                <li>
                  <a class="dropdown-item" href="#"></a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3 active mt-4">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Layanan
              </div>
            </li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Reservasi Kamar</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Addons
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Check-In</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Check-Out</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <!-- <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Dashboard</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white h-100">
              <div class="card-body py-5">Primary Card</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-warning text-dark h-100">
              <div class="card-body py-5">Warning Card</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-success text-white h-100">
              <div class="card-body py-5">Success Card</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-danger text-white h-100">
              <div class="card-body py-5">Danger Card</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
        </div> -->
        <div class="card ms-5 mt-4" style="width: 40rem;">
          <div class="card-body ms-5">
            <h5 class="card-title">Pemesanan Kamar</h5>
            <p class="card-text">
            <form action="" method="post">
                <table cellspacing="2" cellpadding="4">
                    <tbody>
                    <tr>
                    <td>Nama</td>
                    <td>: <input type="text" name="nama" id="nama" required><br></td>
                </tr>    
                <tr>
                    <td>No. Telp</td>
                    <td>: <input type="text" name="telp" id="telp" required><br></td>
                </tr>   
                <tr>
                    <td>Tipe Kamar</td>
                    <td><input type="radio" name="tipe" id="studio1" value="Studio 1" required> Studio 1 (Rp. 400K/Malam)<br></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="radio" name="tipe" id="studio2" value="Studio 2" required> Studio 2 (Rp. 525K/Malam)</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="radio" name="tipe" id="suite" value="Suite" required> Suite (Rp. 800K/Malam)</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="radio" name="tipe" id="ksuite" value="King Suite" required> King Suite (Rp. 1.1K/Malam)</td>
                </tr>
                <tr>
                    <td>Check-in</td>
                    <td>: <input type="date" name="cin" id="cin" required><br></td>
                </tr>
                <tr>
                    <td>Check-out</td>
                    <td>: <input type="date" name="cout" id="cout" required><br></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="hidden" name="status" value="-"> </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="hidden" name="rating" value="-"> </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="hidden" name="layanan" value="-"> </td>
                </tr>
                
                </tbody>
                </table>
                <br>
                <button type="submit" name="submit" class="btn btn-dark btn-lg">Pesan Kamar</button>
            </form>
            </p>
          </div>
        </div>
    </main>
    <script src="/./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="/./js/jquery-3.5.1.js"></script>
    <script src="/./js/jquery.dataTables.min.js"></script>
    <script src="/./js/dataTables.bootstrap5.min.js"></script>
    <script src="/./js/script.js"></script>
  </body>
</html>
