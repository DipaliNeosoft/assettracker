@extends('admin.master')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  text-center">Edit Asset Type</div>

                <div class="card-body">
                    @if(Session::has('error'))
                    <div class="alert alert-danger">{{Session::get('error')}}</div>
                    @endif
                    <form method="POST" action="{{route('postedittype',['id'=>$edittype->id])}}">
                        @csrf

                        <div class="row mb-3">
                            <label for="type" class="col-md-4 col-form-label text-md-right">Asset Type</label>

                            <div class="col-md-6">
                                <input id="type" type="text" class="form-control" name="type" value="{{old('type', $edittype->type)}}" >
                                @if($errors->has('type'))
                            <div class="alert alert-danger">{{$errors->first('type')}}</div>
                            @endif
                            </div>
                           
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Asset Description</label>

                            <div class="col-md-6">
                                <textarea id="description"  class="form-control" name="description">
                                    {{$edittype->description}}
                                </textarea>  
                                @if($errors->has('description'))
                            <div class="alert alert-danger">{{$errors->first('description')}}</div>
                            @endif
                            </div>
                        </div>
                        <input  type="hidden" class="form-control" name="id" value="{{old('id', $edittype->id)}}" >
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
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
