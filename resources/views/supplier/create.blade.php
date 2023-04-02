@extends('layouts.master')

@section('title') @lang('translation.Form_Layouts') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Supplier @endslot
@slot('title') Form Supplier @endslot
@endcomponent

<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Horizontal Form Layout</h4>

            <form action="{{ route('supplier.store') }}" method="POST">
                @csrf
                <div class="row mb-4">
                    <label for="nama_supplier" class="col-sm-2 col-form-label">Nama Supplier</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_supplier" id="nama_supplier">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="nama_warung" class="col-sm-2 col-form-label">Nama Warung</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_warung" id="nama_warung">
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <div>
                            <a href="{{ route('supplier.index') }}" class="btn w-sm btn-danger">Batal <i class="bx bx-x"></i></a>
                            <button type="submit" class="btn w-sm btn-primary">Submit <i class="bx bx-check"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
