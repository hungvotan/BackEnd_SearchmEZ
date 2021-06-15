
@extends('layouts/contentLayoutMaster')

@section('title', 'Places | Listing')

@section('vendor-style')
    {{-- vendor css files --}}
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap4.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap4.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('content')
    <!-- listing Places  -->
    <section id="listing-Places">
        @if (session('status'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-primary">
                        <div class="alert-heading">
                            {{ session('status') }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if (session('error'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger">
                        <div class="alert-heading">
                            {{ session('error') }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Places | Listing</h4>
                        <button class="dt-button btn btn-primary btn-add-record ml-2" data-toggle="modal" data-target="#addnew" type="button"><span>Add New</span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="card-images">
        <div class="row">
            <?php
            if(isset($get_listing) && count($get_listing) == 0) { ?>
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <div class="alert-heading">
                        Data not found!
                    </div>
                </div>
            </div>
            <?php } else { ?>
            <?php foreach ($get_listing AS $value) { ?>
            @include('listing.template_product');
            <?php } ?>
            <?php } ?>
        </div>
    </section>
    @include('listing.template_addnew',['listing' => $listing]);
@endsection

@section('vendor-script')
    {{-- vendor files --}}
    <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap4.js')) }}"></script>
@endsection

