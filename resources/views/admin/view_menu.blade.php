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

                <div class="container" style="padding-top: 80px;">
                    @if(session()->has('message'))
                    <div class="alert alert-success absolute top-20">{{session()->get("message")}}
                        <button type="button" class="close" data-dismiss="alert">X</button>
                    </div>
                    @endif
                    See All Menu
                    <div class="grid grid-cols-4 gap-2">
                        @foreach($menu as $item)
                        <div class="p-2 rounded-lg shadow-md bg-gray-600">
                            <img src="foodimage/{{$item->image}}"
                                class="w-[150px] h-[150px] rounded-sm object-cover object-center" />
                            <p>{{$item->name}}</p>
                            <p>{{$item->quantity}} Stocks</p>
                            <p>Rp{{$item->harga}}</p>
                            <form action="{{route('delete.menu')}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" value="{{$item->id}}" name="menuId" />
                                <button type="submit"
                                    class="text-xs mt-2 w-full text-red-600 bg-red-300 border-[1px] border-red-600 px-2 py-1 rounded-3xl">Delete</button>
                            </form>
                        </div>
                        @endforeach
                    </div>

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