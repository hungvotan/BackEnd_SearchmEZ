
@extends('layouts/contentLayoutMaster')

@section('title', 'General listing | Listing')

@section('vendor-style')
    {{-- vendor css files --}}
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap4.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap4.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('content')
    <!-- listing General listing  -->
    <section id="listing-Generallisting">
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
                        <h4 class="card-title">General listing | Listing</h4>
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
                                                        <input class="form-check-input" type="radio" name="type" id="type1" value="Post" checked=""> Post
                                                    </label>
                                                    <label class="btn btn-outline-primary waves-effect">
                                                        <input class="form-check-input" type="radio" name="type" id="type2" value="Donate"> Donate
                                                    </label>
                                                    <label class="btn btn-outline-primary waves-effect">
                                                        <input class="form-check-input" type="radio" name="type" id="type3" value="Put for Adoption"> Put for Adoption
                                                    </label>
                                                    <label class="btn btn-outline-primary waves-effect">
                                                        <input class="form-check-input" type="radio" name="type" id="type4" value="Publicize"> Publicize
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

                                        <div class="row mt-2">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="category" >Category <span class="text-red">(*)</span></label>
                                                    <select class="form-control" id="category" name="category" required>
                                                        <option value="">Please choose ...</option>
                                                        <?php $category = Helper::get_listing_category();
                                                        foreach ($category AS $value) {
                                                            echo '<option value="'.$value.'">'.$value.'</option>';
                                                        }?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="googlemap">Googlemap Location <span class="text-red">(*)</span> </label>
                                                    <input type="text" name="googlemap" id="googlemap" class="form-control" placeholder="Googlemap Location" required />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="location">Location <span class="text-red">(*)</span> </label>
                                                    <input type="text" name="location" id="location" class="form-control" placeholder="Location" required />
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
                                                    <label class="form-label" for="keywords">Keywords <span class="text-red">(*)</span> </label>
                                                    <input type="text" name="keywords" id="keywords" class="form-control" placeholder="Keywords" required />
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
                                            <div class="col-md-3">
                                                <div class="custom-control custom-control-warning custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="Enable_Question" name="checkbox[]" value="Enable_Discussion">
                                                    <label class="custom-control-label" for="Enable_Question">Enable Discussion</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-control custom-control-warning custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="Show_Location" name="checkbox[]" value="Show_Location">
                                                    <label class="custom-control-label" for="Show_Location">Show Location</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-control custom-control-warning custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="Redirect" name="checkbox[]" value="Redirect">
                                                    <label class="custom-control-label" for="Redirect">Redirect</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-control custom-control-warning custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="feature" name="checkbox[]" value="feature">
                                                    <label class="custom-control-label" for="feature">Feature</label>
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

