@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 offset-2 bg-white">
                <form id="submit_category" @submit.prevent="submitArticle()" style="padding: 30px">
                    <h4 class="form-heading">Create Article</h4>
                    <input type="text" class="form-control mb-3" placeholder="Title" v-model="articleTitle">
                    <select class="form-control mb-4" v-model="articleCategory">
                        <option disabled value="null" selected>Please select category of article</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">
                                {{$category->category}}
                            </option>
                        @endforeach
                    </select>
                    <input type="file" id="image_article" class="form-control mb-3" @change="uploadFile">
                    <froala :tag="'textarea'" v-model="articleText"></froala>
                    <input type="submit" class="btn btn-success" value="Submit" style="margin-top: 3%">
                </form>
                <message created="Article" :success="successPosting" :failed="failed"></message>
            </div>
        </div>
    </div>
@endsection
