@extends('layouts.master')

@section('title') @lang('translation.Form_Layouts') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Supplier @endslot
        @slot('title') Form Supplier @endslot
    @endcomponent



    <!-- end row -->


    <!-- end row -->


    <form action="{{ route('supplier.store') }}" method="POST">
                        @csrf
                        <div class="row mb-4">
                            <label for="nama_supplier" class="col-sm-3 col-form-label">Nama Supplier</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="nama_supplier" id="nama_supplier">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="nama_warung" class="col-sm-3 col-form-label">Nama Watung</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="nama_warung" id="nama_warung">
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
