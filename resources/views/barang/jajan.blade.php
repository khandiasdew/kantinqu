@extends('layouts.master')

@section('title') @lang('translation.Form_Layouts') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Jajan @endslot
        @slot('title') Form Jajan @endslot
    @endcomponent



    <!-- end row -->


    <!-- end row -->


    <form action="{{ route('barang.store') }}" method="POST">
                        @csrf
                        <div class="row mb-4">
                            <label for="nama_barang" class="col-sm-3 col-form-label">Nama Jajan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_barang" id="nama_barang">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="jumlah_barang" class="col-sm-3 col-form-label">Jumlah Jajan</label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" name="jumlah_barang" id="jumlah_barang">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="harga_barang" class="col-sm-3 col-form-label">harga Jajan</label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" name="harga_barang" id="harga_barang">
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>


    <!-- end row -->

@endsection
