@extends('welcome')
@section('content')
    <router-view v-bind:articles="articles" :key="$route.fullPath"></router-view>
@endsection