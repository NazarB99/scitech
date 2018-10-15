@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 offset-2 bg-white">
                <form id="submit_category" @submit.prevent="submitCategory()" style="padding: 30px">
                    <h4 class="form-heading">Create Category</h4>
                    <input type="text" class="form-control" placeholder="Category Name" v-model="category">
                    <input type="submit" class="btn btn-success" value="Submit" style="margin-top: 3%">
                </form>
                <message created="Category" :success="successPosting" :failed="failed"></message>
            </div>
        </div>
    </div>
@endsection