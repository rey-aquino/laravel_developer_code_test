@extends('users.dashboard.dashboard')

@section('dashboard-content')
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="m-b-0 m-t-0">Add Suppliers</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="" href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active">Add Suppliers</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Supplier Form</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('add-suppliers.store') }}" class="form-horizontal">
                        @csrf
                        <div class="form-body">
                            <h4 class="box-title">Customer Info</h4>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">{{ __('Name') }}</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="name" placeholder="Customer Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">{{ __('Email') }}</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="email" placeholder="Customer Email" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">{{ __('Address') }}</label>
                                        <div class="col-md-9">
                                        <textarea class="form-control" name="address" rows="5" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">{{ __('Phone number') }}</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="phone_number" placeholder="Customer Phone Number" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">{{ __('Country') }}</label>
                                        <div class="col-md-9">
                                            <select class="form-control custom-select" name="country" data-placeholder="Choose a Category" tabindex="1" id="country_id" required>
                                                <option value="">Select Country</option>
                                                @foreach($countries as $country)
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">{{ __('State') }}</label>
                                        <div class="col-md-9">
                                            <select class="form-control custom-select" name="state" data-placeholder="Choose a Category" tabindex="1" id="state_id" required>
                                                <option value="">Select State</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">{{ __('City') }}</label>
                                        <div class="col-md-9">
                                            <select class="form-control custom-select" name="city" data-placeholder="Choose a Category" tabindex="1" id="city_id" required>
                                                <option value="">Select City</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn btn-success">Save</button>
                                            <button type="button" class="btn btn-inverse">Clear</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection