<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png')}}">
  </head>

<body>

     @include('sweetalert::alert')
    

    <div class="container-scroller">
        {{-- SIDEBAR --}}
        @include('include.backend.sidebar')

        {{-- NAVBAR --}}
        <div class="container-fluid page-body-wrapper">
            @include('include.backend.navbar')

            {{-- TABEL --}}

          <div class="main-panel">
                <div class="content-wrapper">
                    {{-- FILTER --}}
                    <div class="row">
                        <div class="col-md-6 col-xl-12 grid-margin stretch-card ml-auto" style="">
                            <div class="card">
                                <div class="card-body">
                                    <p style="font-size: 30px; text-align: center; margin-top: 3%">film Data Page
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-md-6 col-xl-5 grid-margin stretch-card ml-auto" style="">
                            <div class="card">
                                <div class="card-body">
                                    <p>Filter by Kategori</p>
                                    <form method="GET" action="{{ route('film.index') }}">
                                        <select class="form-control" name="id_kategori" id="putih"
                                            id="exampleSelectGender">
                                            <option value=""
                                                {{ is_null(request()->get('id_kategori')) ? 'selected' : '' }}>
                                                Tampilkan Semua Film</option>
                                            @foreach ($kategori as $data)
                                                <option value="{{ $data->id }}"
                                                    {{ request()->get('id_kategori') == $data->id ? 'selected' : '' }}>
                                                    {{ $data->nama_kategori }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-primary mt-3">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                  
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="card-title">Film Data</h4>
                                            <a href="{{ route('film.create') }}" class="btn btn-primary">+ Add
                                                Data</a>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table" id="example">
                                                <thead>
                                                    <tr>
                                                        <th><b>
                                                                <h5>No</h5>
                                                            </b></th>
                                                        <th><b>
                                                                <h5>Judul</h5>
                                                            </b></th>
                                                        <th><b>
                                                                <h5>Kategori</h5>
                                                            </b></th>  
                                                        <th><b>
                                                                <h5>Genre</h5>
                                                            </b></th>      
                                                        <th><b>
                                                                <h5>Aktor</h5>
                                                            </b></th>
                                                        <th><b>
                                                                <h5>Sipnosis</h5>
                                                            </b></th>
                                                        <th><b>
                                                                <h5>Tahun Rilis</h5>
                                                            </b></th>
                                                        <th><b>
                                                                <h5>Waktu</h5>
                                                            </b></th>
                                                         <th><b>
                                                                <h5>Poster</h5>
                                                            </b></th>   
                                                        <th><b>
                                                                <h5>Aksi</h5>
                                                            </b></th>    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $no=1; @endphp
                                                    @foreach ($film as $data)
                                                        <tr class="odd gradeX">
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ Str::limit($data->judul, 25) }}</td>
                                                            <td>{{ $data->kategori->nama_kategori }}</td>
                                                            <td>{{ $data->genre->nama_genre }}</td>
                                                            <td>{{ $data->aktor }}</td>
                                                            <td>{{ $data->sipnosis }}</td>
                                                            <td>{{ $data->tahun_rilis }}</td>
                                                            <td>{{ $data->waktu }}</td>
                                                            
                                                            <td>
                                                                <img src="{{ asset('images/film/' . $data->poster) }}"
                                                                    width="100">
                                                            </td>

                                                            
                                                            <form action="{{ route('film.destroy', $data->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <td>
                                                                    <a href="{{ route('film.edit', $data->id) }}"
                                                                        class="btn  btn-success">Edit</a>
                                                                    <a href="{{ route('film.show', $data->id) }}"
                                                                        class="btn  btn-warning">Detail</a>
                                                                    <button class="btn  btn-danger" type="submit"
                                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                                        Delete
                                                                    </button>
                                                                </td>
                                                            </form>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                </div>
            </div>
        </div>
    </div>
    </div>


      <!-- content-wrapper ends -->
           
          <!-- footer -->
        

          <!-- partial -->

        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('backend/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('backend/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('backend/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{ asset('backend/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('backend/assets/js/off-canvas.js')}}"></script>
    <script src="{{ asset('backend/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('backend/assets/js/misc.js')}}"></script>
    <script src="{{ asset('backend/assets/js/settings.js')}}"></script>
    <script src="{{ asset('backend/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('backend/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>
