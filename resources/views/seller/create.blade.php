@extends('layouts.master')

@section('title') @lang('translation.Form_Layouts') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Supplier @endslot
        @slot('title') Form Supplier @endslot
    @endcomponent



    <!-- end row -->


    <!-- end row -->


    <form action="{{ route('seller.store') }}" method="POST">
                        @csrf
                        <div class="row mb-4">
                            <label for="nama_seller" class="col-sm-3 col-form-label">Nama </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="nama_seller" id="nama_seller">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="kelas" class="col-sm-3 col-form-label">Kelas</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="kelas" id="kelas">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="no_absen" class="col-sm-3 col-form-label">No Absen</label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" name="no_absen" id="no_absen">
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
