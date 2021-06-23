
@extends('layouts/contentLayoutMaster')

@section('title', 'Animals | Listing')

@section('vendor-style')
    {{-- vendor css files --}}
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap4.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap4.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('content')
    <!-- listing animals  -->
    <section id="listing-animals">
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
                        <h4 class="card-title">Animals | Listing</h4>
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
                    @include('listing.template_product')
                <?php } ?>
            <?php } ?>
        </div>
    </section>
    <div class="modal fade text-left" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h4 class="modal-title" id="myModalLabel17">Add New</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="needs-validation" method="POST" action="{{ route('listing-addnew') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2 class="text-warning">List</h2>
                                <p>Sell, Rent Out, Hire out or List a listing</p>
                            </div>

                        </div>
                        <div class="divider">
                            <div class="divider-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                What do you want to do?
                                            </div>
                                            <div class="col-md-8">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-outline-primary waves-effect active">
                                                        <input class="form-check-input" type="radio" name="list" id="list1" value="Sell" checked=""> Sell
                                                    </label>
                                                    <label class="btn btn-outline-primary waves-effect">
                                                        <input class="form-check-input" type="radio" name="list" id="list2" value="Rent Out"> Rent Out
                                                    </label>
                                                    <label class="btn btn-outline-primary waves-effect">
                                                        <input class="form-check-input" type="radio" name="list" id="list3" value="List"> List
                                                    </label>
                                                    <label class="btn btn-outline-primary waves-effect">
                                                        <input class="form-check-input" type="radio" name="list" id="list4" value="Hire or Book Out"> Hire or Book Out
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-4">
                                                Type?
                                            </div>
                                            <div class="col-md-8">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-outline-primary waves-effect active">
                                                        <input class="form-check-input" type="radio" name="type" id="type1" value="Fixed Price" checked=""> Fixed Price
                                                    </label>
                                                    <label class="btn btn-outline-primary waves-effect">
                                                        <input class="form-check-input" type="radio" name="type" id="type2" value="Auction"> Auction
                                                    </label>
                                                    <label class="btn btn-outline-primary waves-effect">
                                                        <input class="form-check-input" type="radio" name="type" id="type3" value="Asking Price"> Asking Price
                                                    </label>
                                                    <label class="btn btn-outline-primary waves-effect">
                                                        <input class="form-check-input" type="radio" name="type" id="type4" value="Tender"> Tender
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-4">
                                                Template?
                                            </div>
                                            <div class="col-md-8">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-outline-primary waves-effect active">
                                                        <input class="form-check-input" type="radio" name="template" id="template1" value="template1" checked=""> <img src="{{asset('images/searchmez/template1.png')}}" class="template_width"/>
                                                    </label>
                                                    <label class="btn btn-outline-primary waves-effect active">
                                                        <input class="form-check-input" type="radio" name="template" id="template2" value="template2"> <img src="{{asset('images/searchmez/template2.png')}}" class="template_width"/>
                                                    </label>
                                                    <label class="btn btn-outline-primary waves-effect active">
                                                        <input class="form-check-input" type="radio" name="template" id="template3" value="template3"> <img src="{{asset('images/searchmez/template3.png')}}" class="template_width"/>
                                                    </label>
                                                    <label class="btn btn-outline-primary waves-effect active">
                                                        <input class="form-check-input" type="radio" name="template" id="template4" value="template4"> <img src="{{asset('images/searchmez/template4.png')}}" class="template_width"/>
                                                    </label>
                                                    <label class="btn btn-outline-primary waves-effect active">
                                                        <input class="form-check-input" type="radio" name="template" id="template5" value="template5"> <img src="{{asset('images/searchmez/template5.png')}}" class="template_width"/>
                                                    </label>
                                                    <label class="btn btn-outline-primary waves-effect active">
                                                        <input class="form-check-input" type="radio" name="template" id="template6" value="template6"> <img src="{{asset('images/searchmez/template6.png')}}" class="template_width"/>
                                                    </label>
                                                    <label class="btn btn-outline-primary waves-effect active">
                                                        <input class="form-check-input" type="radio" name="template" id="template7" value="template7"> <img src="{{asset('images/searchmez/template7.png')}}" class="template_width"/>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mt-2">
                                                <div class="form-group">
                                                    <label class="form-label" for="asking_price">Asking Price (P) <span class="text-red">(*)</span> </label>
                                                    <input type="text" name="asking_price" id="asking_price" class="form-control" placeholder="Asking Price (P)" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="googlemap">Googlemap Location <span class="text-red">(*)</span> </label>
                                                    <input type="text" name="googlemap" id="googlemap" class="form-control" placeholder="Googlemap Location" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="location">Location <span class="text-red">(*)</span> </label>
                                                    <input type="text" name="location" id="location" class="form-control" placeholder="Location" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="category" >Category <span class="text-red">(*)</span></label>
                                                    <select class="form-control" id="category" name="category" required>
                                                        <option value="">Please choose ...</option>
                                                        <option value="1">Amphibians</option>
                                                        <option value="2">Birds</option>
                                                        <option value="7">Fish</option>
                                                        <option value="1257">Invertebrates</option>
                                                        <option value="1258">Others</option>
                                                        <option value="1256">Reptiles</option>
                                                        <option value="1266">Tiger</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="age">Age <span class="text-red">(*)</span> </label>
                                                    <input type="number" name="age" id="age" class="form-control" placeholder="Age" required />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="age">Color <span class="text-red">(*)</span> </label>
                                                    <select class="form-control" id="color" name="color" required>
                                                        <option value="">Please choose ...</option>
                                                        <option value="Yellow">Yellow</option>
                                                        <option value="White">White</option>
                                                        <option value="Transparent">Transparent</option>
                                                        <option value="Slate">Slate</option>
                                                        <option value="Red">Red</option>
                                                        <option value="Rainbow">Rainbow</option>
                                                        <option value="Purple">Purple</option>
                                                        <option value="Pink">Pink</option>
                                                        <option value="Others">Others</option>
                                                        <option value="Orange">Orange</option>
                                                        <option value="Maroon">Maroon</option>
                                                        <option value="Khaki">Khaki</option>
                                                        <option value="Grey">Grey</option>
                                                        <option value="Green">Green</option>
                                                        <option value="Gold">Gold</option>
                                                        <option value="Cyan">Cyan</option>
                                                        <option value="Cream">Cream</option>
                                                        <option value="Brown">Brown</option>
                                                        <option value="Blue">Blue</option>
                                                        <option value="Black">Black</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="weight">Weight <span class="text-red">(*)</span> </label>
                                                    <input type="number" name="weight" id="weight" class="form-control" placeholder="Weight" required />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <h4>Dimensions</h4>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="length">Length (cm) <span class="text-red">(*)</span> </label>
                                                    <input type="number" name="length" id="length" class="form-control" placeholder="Length (cm)" required />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="width">Width (cm) <span class="text-red">(*)</span> </label>
                                                    <input type="number" name="width" id="width" class="form-control" placeholder="Width (cm)" required />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="height">Height (cm) <span class="text-red">(*)</span> </label>
                                                    <input type="number" name="height" id="height" class="form-control" placeholder="Height (cm)" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="title">Title <span class="text-red">(*)</span> </label>
                                                    <input type="text" name="title" id="title" class="form-control" placeholder="Title" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="special_traits">Special traits <span class="text-red">(*)</span> </label>
                                                    <input type="text" name="special_traits" id="special_traits" class="form-control" placeholder="Special traits" required />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="Description">Description <span class="text-red">(*)</span> </label>
                                                    <textarea class="form-control" id="description" name="description" placeholder="Input here..." rows="3" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="custom-control custom-control-warning custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="question" name="checkbox[]" value="question">
                                                    <label class="custom-control-label" for="question">Enable Ask a Question</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="custom-control custom-control-warning custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="shiping" name="checkbox[]" value="shiping">
                                                    <label class="custom-control-label" for="shiping">Free shiping?</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="custom-control custom-control-warning custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="feature" name="checkbox[]" value="feature">
                                                    <label class="custom-control-label" for="feature">Feature</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="shipping_method">Shiping Method / Pickup Only? <span class="text-red">(*)</span> </label>
                                                    <input type="text" name="shipping_method" id="shipping_method" class="form-control" placeholder="Shiping Method / Pickup Only?" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="shipping_fee">Shiping Fee <span class="text-red">(*)</span> </label>
                                                    <input type="text" name="shipping_fee" id="shipping_fee" class="form-control" placeholder="Shiping Fee" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="include_question">Include Question <span class="text-red">(*)</span> </label>
                                                    <input type="text" name="include_question" id="include_question" class="form-control" placeholder="Include Question" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="feature_image">Upload Thumnail <span class="text-red">(*)</span></label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="feature_image" id="feature_image" required />
                                                        <label class="custom-file-label" for="feature_image">Choose profile pic</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="feature_image">Upload File or Video</label>
                                                    <div class="custom-file file_video">
                                                        <input type="file" class="custom-file-input" id="file_video" name="file_video[]" multiple />
                                                        <label class="custom-file-label" for="file_video">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="feature_image">Upload more reference</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="image" name="image[]" multiple />
                                                        <label class="custom-file-label" for="image">Choose profile pic</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="validationCheckBootstrap" />
                                                        <label class="custom-control-label" for="validationCheckBootstrap"
                                                        >Agree to our terms and conditions</label
                                                        >
                                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="listing" value="<?php echo $listing; ?>">
                        <input type="submit" class="btn btn-primary" value="Post">
                        {{--                    <button type="submit" class="btn btn-primary" data-dismiss="modal">Post</button>--}}
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('vendor-script')
    {{-- vendor files --}}
    <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap4.js')) }}"></script>
@endsection

