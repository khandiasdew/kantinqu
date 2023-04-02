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


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">
                        Data seller <span><a href="{{ route('seller.create') }}" class="btn btn-primary btn-sm"><i class="bx bx-plus"></i></a></span>
                    </h4>
                    <p class="card-title-desc">semua data seller terinci di tabel ini
                    </p>

                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nama </th>
                                <th>Kelas </th>
                                <th>No.Absen</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($seller as $item)
                            <tr>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->nama_seller }}</td>
                                <td>{{ $item->kelas }}</td>
                                <td>{{ $item->no_absen }}</td>
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


