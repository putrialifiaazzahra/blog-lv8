@extends('layouts.app')

@section('content')
   
<div class="container mt-5">

    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="" class="btn btn-md btn-primary mb-3">+ Tambah User</a>
                    <table class="table table-bordered">
                        <thead  class="text-center">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                            {{-- @forelse ($blogs as $blog)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/blogs/').$blog->image }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{!! $blog->content !!}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-success">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Blog belum Tersedia.
                                  </div>
                              @endforelse --}}
                        </tbody>
                      </table>
                    {{-- {{ $blogs->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
   
@endsection
