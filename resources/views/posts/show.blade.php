@extends('master')

@section('title', $post->name)

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <h3 class="text-center">{{ $post->name }}</h3>
                    <h6 class="text-center">
                        Category: {{ $post->category }} - Created at: {{ date('F j, Y, g:i A', strtotime($post->created_at)) }}
                    </h6>

                    <p class="text-justify bg-light">
                        {{ $post->description }}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
