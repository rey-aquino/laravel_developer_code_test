@extends('users.dashboard.dashboard')

@section('dashboard-content')
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="m-b-0 m-t-0">Manage Suppliers</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="" href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active">Manage Suppliers</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive m-t-20">
                        <table id="suppliersTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Country</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                @foreach($suppliers as $supplier)
                                <tr>
                                    <td>{{ $supplier->id }}</td>
                                    <td>{{ $supplier->name }}</td>
                                    <td>{{ $supplier->address }}</td>
                                    <td>{{ $supplier->phone_number }}</td>
                                    <td>{{ $supplier->email }}</td>
                                    <td>{{ $supplier->city }}</td>
                                    <td>{{ $supplier->state }}</td>
                                    <td>{{ $supplier->country }}</td>
                                    <td class="text-center">
                                        <form method="POST" action="{{ route('manage-suppliers.destroy', $supplier->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this data?')" class="btn btn-sm btn-default" title="Delete" data-original-title="Delete"><i class="ti-trash"></i></button>
                                        </form>
                                        <button class="btn btn-sm btn-default" title="Delete" data-toggle="modal" data-target="#supplierEdit{{$supplier->id}}" data-original-title="Delete"><i class="ti-pencil"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach($suppliers as $supplier)
    <div class="col-md-4">
        <div id="supplierEdit{{$supplier->id}}" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Edit Supplier Information</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form method="POST" action="{{ route('manage-suppliers.update', $supplier->id) }}" class="form-horizontal">
                    <div class="modal-body">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">{{ __('Name') }}</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}{{$supplier->name}}" required autocomplete="name" autofocus placeholder="Name">
                                        </div>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">{{ __('Email') }}</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}{{$supplier->email}}" required autocomplete="email" autofocus placeholder="Email">
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                         <label class="control-label text-right col-md-3">{{ __('Address') }}</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="address" autofocus placeholder="Address">{{ old('address') }}{{$supplier->address}}</textarea>
                                        </div>
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">{{ __('Phone number') }}</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}{{$supplier->phone_number}}" required autocomplete="phone_number" autofocus placeholder="Phone Number">
                                        </div>
                                        @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default waves-effect text-left" onclick="return confirm('Are you sure you want to update this data?')">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection