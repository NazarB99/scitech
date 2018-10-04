@extends('welcome')
@section('content')
    <router-view v-bind:articles="articles"></router-view>
@endsection