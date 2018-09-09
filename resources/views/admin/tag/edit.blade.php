@extends('layouts.backend.app')

@section('title', 'Create Tag')

@push('css')

@endpush

@section('content')

    <div class="container-fluid">
        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EDIT BLOG
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin.tag.update', $tag->id) }}" method="POST" >
                            @csrf
                            @method('PUT')
                            <label for="name">Tag Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input value="{{ $tag->name }}" type="text" id="name" name="name" class="form-control" placeholder="Enter Tag Name">
                                </div>
                            </div>
                            <a href="{{ route('admin.tag.index') }}" type="button" class="btn btn-primary m-t-15 waves-effect">Back</a>
                            <button type="submit" class="btn btn-success m-t-15 waves-effect">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')

@endpush


