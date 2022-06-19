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
                            <h2>Home</h2>

                            <div class="">
                                
                            <a href="{{route('blog.index')}}" class="btn btn-lg btn-outline-primary">Home</a>
                            <a href="{{route('blog.create')}}" class="btn btn-lg btn-outline-primary">Create</a>


                            </div>
                      </div>
                    </div>


                    <div class="card-body p-4">
                        <form action="{{route('blog.update',$blog->id)}}" method="post">
                            @csrf

                           @method('put')
                            <div class="mb-4">
                                <label for="" class="form-label">title</label>

                                <input type="text" value="{{old('title',$blog->title)}}" class="form-control form-control-lg @error('title') is-invalid @enderror "   name="title" >

                                @error('title')
                                <span class=" invalid-feedback">
                                  {{$message}}
                                </span>
                                @enderror
                            </div>


                            <div class="mb-4">
                                <label for="" class="form-label">description</label>
                                <textarea name="description" class="form-control form-control-lg @error('description') is-invalid @enderror" id="" cols="30" rows="10" >
                                    {{old('description',$blog->description)}}
                                </textarea>
                                @error('description')
                                <span class=" invalid-feedback">
                                  {{$message}}
                                </span>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button class="btn btn-lg btn-primary px-5">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
