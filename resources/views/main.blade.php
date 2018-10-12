@extends('welcome')
@section('content')
    <router-view articles="{{$articles}}" categories="{{$categories}}" ></router-view>
@endsection