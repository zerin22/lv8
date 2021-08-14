@extends('master')

@section('title', 'All Post')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-10 offset-2">
                @if(session('successMessage'))
                    <div class="alert alert-success text-center">
                        {{ session('successMessage') }}
                    </div>
                @endif
                <a href="{{ route('post.create') }}" class="d-inline-block mt-5 btn btn-success mb-2">New Post</a>
                <table id="PostData" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Post Name</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->name }}</td>
                                <td>{{ $post->category }}</td>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->status }}</td>
                                <td>
                                    <a href="{{ route('post.show', $post->id) }}">Show</a> /
                                    <a href="{{ route('post.edit', $post->id) }}">Edit</a> /
                                    <a href="" onclick="event.preventDefault(); document.getElementById('delete-form{{ $post->id }}').submit()">Delete</a>
                                    <form action="{{ route('post.destroy', $post->id) }}" id="delete-form{{ $post->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- {{ $posts->links() }} --}}

                {{-- {{ $posts->onEachSide(2)->links() }} --}}

            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#PostData').DataTable();
        } );
    </script>
@endpush
