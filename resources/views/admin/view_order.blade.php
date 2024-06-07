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
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                and more with
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
                @if(session()->has('message'))
                <div class="alert alert-success absolute top-20">{{session()->get("message")}}
                    <button type="button" class="close" data-dismiss="alert">X</button>
                </div>
                @endif
                <div class="container" style="padding-top: 80px;">
                    <table class="border-[1px] border-white rounded-xl">
                        <tr class="border-[1px] border-white">
                            <th class="border-[1px] border-white px-2 py-1">Nomor Pesanan</th>
                            <th class="border-[1px] border-white px-2 py-1">Nama Pemesan</th>
                            <th class="border-[1px] border-white px-2 py-1">Nama Makanan</th>
                            <th class="border-[1px] border-white px-2 py-1">Total Pesanan</th>
                            <th class="border-[1px] border-white px-2 py-1">Total Harga</th>
                            <th class="border-[1px] border-white px-2 py-1">Status</th>
                            <th class="border-[1px] border-white px-2 py-1">Action</th>
                        </tr>
                        @if(count($order) > 0)
                        @foreach($order as $item)
                        <tr class="border-[1px] border-white">
                            <td class="border-[1px] border-white px-2 py-1">{{$item->id}}</td>
                            <td class="border-[1px] border-white px-2 py-1">{{$item->user_name}}</td>
                            <td class="border-[1px] border-white px-2 py-1">{{$item->menu_name}}</td>
                            <td class="border-[1px] border-white px-2 py-1">{{$item->total_pesanan}}</td>
                            <td class="border-[1px] border-white px-2 py-1">{{$item->total_harga}}</td>
                            <td class="border-[1px] border-white px-2 py-1 capitalize">{{$item->status_pemesanan}}</td>
                            <td class="border-[1px] border-white px-2 py-1 ">
                                @if($item->status_pemesanan == "menunggu konfirmasi")
                                <form action="{{route('accept.order')}}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{$item->id}}" name="orderId" />
                                    <button type="submit"
                                        class="text-xs text-yellow-600 bg-yellow-300 border-[1px] border-yellow-600 px-2 py-1 rounded-3xl">Confirm</button>
                                </form>
                                @elseif($item->status_pemesanan =="sedang dimasak")
                                <form action="{{route('end.order')}}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{$item->id}}" name="orderId" />
                                    <button type="submit"
                                        class="text-xs text-green-600 bg-green-300 border-[1px] border-green-600 px-2 py-1 rounded-3xl">Done</button>
                                </form>
                                @elseif($item->status_pemesanan == "sudah siap")
                                <form action="{{route('delete.order')}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" value="{{$item->id}}" name="orderId" />
                                    <button type="submit"
                                        class="text-xs text-red-600 bg-red-300 border-[1px] border-red-600 px-2 py-1 rounded-3xl">Delete</button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <p class="text-xl text-center">Belum ada orderan yang masuk</p>
                        @endif
                    </table>

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