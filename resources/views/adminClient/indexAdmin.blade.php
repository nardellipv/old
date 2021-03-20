@extends('layouts.mainAdmin')

@section('content')
    @include('adminClient.parts._notification')
    @include('adminClient.parts._exchangeCurrent')
    @include('adminClient.parts._products')
@endsection