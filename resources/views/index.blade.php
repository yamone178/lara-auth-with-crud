@extends('layouts.app')

@section('title')
    Sample Blog
@endsection


@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h2>Create you post</h2>
                            <a href="{{route('blog.create')}}" class="btn btn-outline-primary">Create</a>
                        </div>
                    </div>


                </div>

                @foreach($blogs as $blog)

                    <div class="card my-3">
                        <div class="card-body border border-primary">
                            <h4 class="mb-3 text-primary fw-bold">{{$blog->title}}</h4>
                            <p class="mb-0">{{$blog->description}}</p>
                        </div>
                    </div>

                @endforeach


            </div>
        </div>
    </div>
@endsection

