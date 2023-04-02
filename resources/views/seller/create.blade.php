@extends('layouts.master')

@section('title') @lang('translation.Form_Layouts') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Seller @endslot
@slot('title') Form Seller @endslot
@endcomponent

<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Horizontal Form Layout</h4>

            <form action="{{ route('seller.store') }}" method="POST">
                @csrf
                <div class="row mb-4">
                    <label for="nama_seller" class="col-sm-2 col-form-label">Nama </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_seller" id="nama_seller">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kelas" id="kelas">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="no_absen" class="col-sm-2 col-form-label">No Absen</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="no_absen" id="no_absen">
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-sm-10">

                        <div>
                            <a href="{{ route('seller.index') }}" class="btn w-sm btn-danger">Batal <i
                                    class="bx bx-x"></i></a>
                            <button type="submit" class="btn w-sm btn-primary">Submit <i
                                    class="bx bx-check"></i></button>
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
