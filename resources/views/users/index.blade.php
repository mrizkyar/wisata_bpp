@extends('layouts.app')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Data user</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('home') }}"> Back</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama user</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td class="text-center">
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
 
                    <a class="btn btn-info btn-sm" href="{{ route('users.show',$user->id) }}">Show</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
    {!! $users->links() !!}
 
@endsection