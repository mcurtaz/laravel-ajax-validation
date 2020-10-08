@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="post-container" class="card mt-2 mb-3">
                <div class="card-header">
                        {{-- {{ $post -> title }} --}}
                </div>

                <div class="card-body">
                    {{-- {{ $post -> body }} --}}
                </div>
            </div>           
        </div>
    </div>
</div>
@endsection