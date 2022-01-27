@extends('admin.master')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Manage Assets</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('postasset') }}" enctype="multipart/form-data">
                    @if(Session::has('error'))
                    <div class="alert alert-danger">{{Session::get('error')}}</div>
                    @endif
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Asset Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"  >
                                @if($errors->has('name'))
                                    <div class="alert alert-danger">{{$errors->first('name')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="code" class="col-md-4 col-form-label text-md-right">Asset Code</label>

                            <div class="col-md-6">
                                @php
                                function unique_code($limit)
                                {
                                    return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
                                }
                                @endphp
                                <input id="code" type="text" class="form-control " name="code" value="@php echo unique_code(16); @endphp" readonly>  
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="type" class="col-md-4 col-form-label text-md-right">Asset Type</label>

                            <div class="col-md-6">
                                <select id="type" name="type" class="form-control">
                                     @foreach($type as $t)
                                        <option value="{{$t->id}}">{{$t->type}}</option>
                                     @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="file" class="col-md-4 col-form-label text-md-right">Asset Image</label>
                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control " name="file[]" multiple >
                                @if($errors->has('file'))
                            <div class="alert alert-danger">{{$errors->first('file')}}</div>
                            @endif
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="isactive" class="col-md-4 col-form-label text-md-right">Is Active</label>
                            <div class="col-md-6">
                                <select id="isactive" name="isactive" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">In-Active</option>
                                </select>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
