@extends('layouts.app')

@section('title')
    Sample Blog
@endsection


@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-8">


                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h2>Home</h2>
                            <a href="{{route('blog.create')}}" class="btn btn-outline-primary">Create</a>
                        </div>
                    </div>


                </div>

                @if(session('status'))

                    <div class="alert alert-success mt-3">{{session('status')}}</div>

                @endif
                @foreach($blogs as $blog)

                    <div class="card my-3">
                        <div class="card-body border border-primary">
                            <h6 class="mb-3 text-primary fw-bold">{{$blog->title}}</h6>
                            <p class="mb-0">{{Str::words($blog->description,50)}}</p>

                            <div class="d-flex justify-content-between mt-3">
                            
                            <a href="{{route('blog.show',$blog->id)}}" class=" btn btn-primary">See More</a>

                            <div class="">
                            <a href="{{route('blog.edit',$blog->id)}}" class="btn btn-outline-warning">Edit</a>
                                
                                <form class="d-inline-block" action="{{route('blog.destroy',$blog->id)}}" method="post">
            

                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-danger">Del</button>

                                </form>
                            </div>                       
                                
                            </div>
                        </div>
                    </div>

                @endforeach


                <div class="">
                    {{$blogs->links()}}
                </div>


            </div>


        </div>
    </div>
@endsection

