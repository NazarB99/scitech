@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-4">
                <div class="card bg-primary text-white" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title text-center">Категорий: </h3>
                        <h3 class="card-title text-center">5</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-5" style="margin-left: -3%">
                <div class="col-md-6 offset-4">
                    <admin-category :categories="{{$categories}}"></admin-category>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-6 mt-3 offset-4">
                    <a href="/" class="btn btn-secondary btn-lg">Main Page</a>
                    <a href="/create/category" class="btn btn-primary btn-lg">Create category</a>
                    <a href="/create/article" class="btn btn-secondary btn-lg">Create article</a>
                </div>
            </div>
        </div>
    </div>
@endsection