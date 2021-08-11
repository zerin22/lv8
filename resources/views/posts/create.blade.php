@extends('master')

@section('title', 'New Post')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <a href="{{ route('post.index') }}" class="d-inline-block mt-5 btn btn-success mb-2">Back</a>
                <form action="{{ route('post.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="name" class="form-control" placeholder="Post Title" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Category</label>
                        <input type="text" name="category" class="form-control" placeholder="Post Category" value="{{ old('category') }}">
                        @error('category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Post Description">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success float-right">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
