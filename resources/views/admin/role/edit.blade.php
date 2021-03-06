@extends('layouts.admin')
@section('pagetitle')
<h3 class="m-0 text-dark">{{ __('messages.role.edit') }}</h3>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card ">
            <div class="card-body">
                <form method="POST" action="{{ route('admin.role.update',$roledata->id) }}"  enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">{{ __('messages.role.title') }}<span class='required'>*</span></label>
                                    <input type="text" value="{{ $roledata->name }}" name="title" class="form-control" maxlength="100" placeholder="Enter Title" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">{{ __('messages.role.permission') }}</label>
                                </div>
                            </div>
                            @foreach($permission as $value)
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label ><input type="checkbox" value="{{ $value->id }}" name="permission[]" maxlength="100" {{ in_array($value->id,$rolePermissions) ? "checked" : '' }} placeholder="Enter permission">&nbsp;&nbsp; {{ strtoupper($value->name) }}</label>
                                    
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="submit" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.box -->
@endsection

