@extends('welcome')
@section('content')
    <router-view v-bind:articles="articles" v-bind:categories="categories" :key="$route.fullPath"></router-view>
@endsection