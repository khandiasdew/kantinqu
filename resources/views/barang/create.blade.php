@extends('layouts.master')

@section('title') @lang('translation.Form_Layouts') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Jajan @endslot
@slot('title') Form Jajan @endslot
@endcomponent

<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Horizontal Form Layout</h4>

            <form action="{{ route('barang.store') }}" method="POST">
                @csrf
                <div class="row mb-4">
                    <label for="id_supplier" class="col-sm-2 col-form-label">Supplier</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="id_supplier" id="id_supplier" required>
                            <option selected>Choose...</option>
                            @foreach ( $supplier as $item )
                            <option value='{{ $item->id_supplier }}'>{{ $item->nama_supplier }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="nama_barang" class="col-sm-2 col-form-label">Nama Jajan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_barang" id="nama_barang">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="jumlah_barang" class="col-sm-2 col-form-label">Jumlah Jajan</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="jumlah_barang" id="jumlah_barang">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="harga_barang" class="col-sm-2 col-form-label">harga Jajan</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="harga_barang" id="harga_barang">
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <div>
                            <a href="{{ route('barang.index') }}" class="btn w-sm btn-danger">Batal <i class="bx bx-x"></i></a>
                            <button type="submit" class="btn w-sm btn-primary">Submit <i class="bx bx-check"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- end card body -->
    </div>
    <!-- end card -->
</div>

@endsection
