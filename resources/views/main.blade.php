@extends('welcome')
@section('content')
    <router-view articles="{{$articles}}" categories="{{$categories}}" :key="$route.fullPath"></router-view>
@endsection