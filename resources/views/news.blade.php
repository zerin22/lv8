@extends('master')
@push('css')
    <style>
        body{
            background-color:#F5F5F5;
        }
    </style>
@endpush
@section('title', $title)

@section('seo_description', $description)
@section('content')
<div class="con">
    <div class="row">
        <div class="col-6 offset-3">
            <h2 class="text-center">{{ $title }}</h2>
            <h4 class="text-center">
                <span>Category:</span> {{ $category }} -
                <span>ID:</span> {{ $id }}
            </h4>

            <p class="text-justify">
                {{ $description }}
            </p>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush
