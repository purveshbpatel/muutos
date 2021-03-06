@extends('layouts.admin')
@section('pagetitle')
<h3 class="m-0 text-dark">{{ __('messages.product.add') }}</h3>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card ">
            <div class="card-body">
                <form method="POST" action="{{ route('admin.product.store') }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">{{ __('messages.product.name') }}<span class='required'>*</span></label>
                                    <input type="text" value="{{ old('name') }}" name="name" class="form-control" maxlength="100" placeholder="Enter Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">{{ __('messages.product.detail') }}<span class='required'>*</span></label>
                                    <input type="text" value="{{ old('details') }}" name="details" class="form-control" maxlength="100" placeholder="Enter Detail" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">{{ __('messages.product.price') }}<span class='required'>*</span></label>
                                    <input type="text" value="{{ old('price') }}" name="price" class="form-control" maxlength="100" placeholder="Enter Price" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">{{ __('messages.product.description') }}<span class='required'>*</span></label>
                                    <textarea name="description" class="form-control" placeholder="Enter Description" required>{{ old('description') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">{{ __('messages.product.brand') }}<span class='required'>*</span></label>
                                    <select class="form-control" name="brand">
                                        @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">{{ __('messages.product.image') }}</label>
                                    <input type="file" value="{{ old('productimage') }}" name="productimage" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection