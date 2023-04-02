@extends('layouts.master')

@section('title') @lang('translation.Data_Tables') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Tables @endslot
        @slot('title') Data Tables @endslot
    @endcomponent


    {{-- <h2>{{ $seller->nama_seller }}</h2> --}}
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"
                    >Data Barang <span><a href="{{ route('barang.create') }}" class="btn btn-primary btn-sm"><i class="bx bx-plus"></i></a></span>
                </h4>
                    <p class="card-title-desc">semua data barang/makanan dan minuman terinci di tabel ini
                    </p>

                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Nama Supllier</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Harga Barang</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $item)
                            <tr>
                                <td>{{ $item->supplier->nama_supplier }}    
                                    {{-- <a href="" class="fas fa-plus-circle"></a></td> --}}
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->jumlah_barang }}</td>
                                <td>Rp.{{ $item->harga_barang }}/pcs</td>
                                <td style="width:15%">
                                    <button class="btn btn-warning btn-sm"><i class="bx bxs-edit"></i>Edit</button>
                                    <button class="btn btn-danger btn-sm"><i class="bx bxs-trash"></i>Hapus</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection


