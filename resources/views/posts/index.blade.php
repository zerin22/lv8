@extends('master')

@section('title', 'All Post')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <table class="table table-bordered mt-5">
                    <tr>
                        <th>Post Name</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Status</th>
                    </tr>

                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->category }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->status }}</td>
                        </tr>
                    @endforeach
                </table>

                {{ $posts->links() }}

                {{-- {{ $posts->onEachSide(2)->links() }} --}}

            </div>
        </div>
    </div>
</section>
@endsection
