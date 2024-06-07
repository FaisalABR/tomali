<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  @include('admin.css')
</head>

<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with
                this template!</p>
              <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      @include('admin.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <div class="container" style="padding-top: 80px;">
          @if(session()->has('message'))
          <div class="alert alert-success">{{session()->get("message")}}
            <button type="button" class="close" data-dismiss="alert">X</button>
          </div>
          @endif
          <form action="{{url("upload_menu")}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex flex-col mb-4">
              <label>Nama Menu</label>
              <input type="text" name="name" placeholder="Tulis nama menu..." class="rounded-md text-black" />
            </div>
            <div class="d-flex flex-col mb-4">
              <label>Deskripsi Menu</label>
              <input type="text" name="deskripsi" placeholder="Tulis nama menu..." class="rounded-md text-black" />
            </div>

            <div class="d-flex flex-col mb-4">
              <label>Harga Menu</label>
              <input type="number" name="harga" placeholder="Tulis harga menu..." class="rounded-md text-black" />
            </div>

            <div class="d-flex flex-col mb-4">
              <label>Jenis</label>
              <select name="jenis" class="text-black rounded-md">
                <option>--Pilih jenis--</option>
                <option value="makanan">Makanan</option>
                <option value="minuman">Minuman</option>
              </select>
            </div>

            <div class="d-flex flex-col mb-4">
              <label>Kuantitas</label>
              <input type="number" name="quantity" placeholder="Tulis kuantitasnya..." class="rounded-md text-black" />
            </div>

            <div class="d-flex flex-col mb-4">
              <label>Foto Menu</label>
              <input type="file" name="file" />
            </div>

            <div class="d-flex flex-col mb-4">
              <input type="submit" name="file" class="btn btn-success" />
            </div>
          </form>


        </div>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  @include('admin.scripts')
  <!-- End custom js for this page -->
</body>

</html>