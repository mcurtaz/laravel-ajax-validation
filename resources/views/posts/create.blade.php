@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Post</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('post-store') }}">
                        @csrf
                        @method('POST')
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Title:</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="body" class="col-md-4 col-form-label text-md-right">Body:</label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="body" rows="8" >
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="like" class="col-md-4 col-form-label text-md-right">Likes:</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="like">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tag" class="col-md-4 col-form-label text-md-right">Tags:</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tag">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    CREATE
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection