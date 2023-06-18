@extends('layouts.main')
@section('title', 'Waroeng Dpoer Apps | Barang')
@section('content')
    <main class="py-5">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Waroeng D'poer</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                    <li class="breadcrumb-item active">Cetak</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Data Menu</h4>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="text-xl-end mt-xl-0 mt-2">
                                        <a href="{{ route('menu_tambah_page') }}" class="btn btn-danger mb-2 me-2">Tambah
                                            Data</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <div id="products-datatable_wrapper" class="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table
                                                    class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap dataTable no-footer dtr-inline collapsed"
                                                    id="datatable" role="grid"
                                                    aria-describedby="products-datatable_info" style="width: 1113px;">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Nama Menu</th>
                                                            <th>Foto</th>
                                                            <th>Harga</th>
                                                            <th>Deskripsi</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data as $key => $databarang )
                                                            <tr>
                                                                <td>
                                                                    {{ $key+1 }}
                                                                </td>
                                                                <td>
                                                                    {{ $databarang->nama_barang }}
                                                                </td>
                                                                <td><img width="100" height="100"
                                                                        src="{{ asset('storage/' . $databarang->barang) }}"
                                                                        alt="Gambar">
                                                                </td>
                                                                <td>
                                                                    {{ $databarang->harga }}
                                                                </td>
                                                                <td>
                                                                    {{ $databarang->keterangan }}
                                                                </td>
                                                                <td class="table-action">
                                                                    <a href="{{ route('tampilkandata', ['id' => $databarang->id]) }}"
                                                                        class="action-icon"> <i
                                                                            class="mdi mdi-square-edit-outline"></i></a>
                                                                    <a href="{{ route('menu_delete', ['id' => $databarang->id]) }}"
                                                                        class="action-icon"> <i
                                                                            class="mdi mdi-delete"></i></a>
                                                                </td>

                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

        </div>
    </main>
@endsection
