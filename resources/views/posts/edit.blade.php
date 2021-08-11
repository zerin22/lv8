@extends('master')

@section('title', 'Edit Post')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                @if(session('successMessage'))
                    <div class="alert alert-success text-center">
                        {{ session('successMessage') }}
                    </div>
                @endif
                <a href="{{ route('post.show', $post->id) }}" class="d-inline-block mt-5 btn btn-success mb-2">{{ $post->name }}</a>
                <form action="{{ route('post.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="name" class="form-control" placeholder="Post Title" value="{{ old('name', $post->name) }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Category</label>
                        <input type="text" name="category" class="form-control" placeholder="Post Category" value="{{ old('category', $post->category) }}">
                        @error('category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Post Description">{{ old('description', $post->description) }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" class="form-control">
                            <option value="">Select Active Status</option>
                            <option value="enable" {{ (old('status', $post->status) == 'enable') ? 'selected=selected': '' }}>Enabled</option>
                            <option value="disable" {{ (old('status', $post->status) == 'disable') ? 'selected=selected': '' }}>Disabled</option>
                        </select>
                        @error('status')
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
