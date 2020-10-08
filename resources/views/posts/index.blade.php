@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mt-2 mb-3 text-center">
                <label for="top-ten">Top 10</label>
                <input type="checkbox" id="top-checkbox">
            </div>
            <div id="post-container" class="card mt-2 mb-3">
            </div>           
        </div>
    </div>
</div>
@endsection