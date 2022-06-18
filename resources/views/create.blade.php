@extends('layouts.master')

@section('title')
    Create Blog
@endsection

@section('content')

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">

                    <div class="card-header p-4">
                        <div class="d-flex justify-content-between">
                            <h2>Create you post</h2>
                            <a href="{{route('home')}}" class="btn btn-lg btn-outline-primary">Home</a>
                        </div>
                    </div>


                    <div class="card-body p-4">
                        <form action="{{route('blog.store')}}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="" class="form-label">title</label>

                                <input type="text" value="{{old('title')}}" class="form-control form-control-lg @error('title') is-invalid @enderror "   name="title" >

                                @error('title')
                                <span class=" invalid-feedback">
                                  {{$message}}
                                </span>
                               @enderror
                            </div>


                            <div class="mb-4">
                                <label for="" class="form-label">description</label>
                                <textarea name="description" class="form-control form-control-lg @error('description') is-invalid @enderror" id="" cols="30" rows="10" >
                                    {{old('description')}}
                                </textarea>
                                @error('description')
                                <span class=" invalid-feedback">
                                  {{$message}}
                                </span>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button class="btn btn-lg btn-primary px-5">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
