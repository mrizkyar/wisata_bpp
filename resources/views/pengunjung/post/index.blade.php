@extends('layouts.appuser')

 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Data Wisata</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ url('/') }}"> Back</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-hover">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama Wisata</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $post->nama }}</td>
            <td class="text-center">
 
                    <a class="btn btn-info btn-sm" href="{{ route('post.show',$post->id) }}">Show</a>
 
            </td>
        </tr>
        @endforeach
    </table>
 
    {!! $posts->links() !!}
 
@endsection