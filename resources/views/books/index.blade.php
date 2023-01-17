@extends('layouts.dashboard')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
@endsection

@section('content')
<section>
    <button
      aria-controls="sidebar"
      data-bs-toggle="offcanvas"
      data-bs-target=".sidebar"
      aria-label="Button Hamburger"
      class="sidebarOffcanvas mb-5 btn p-0 border-0 d-flex d-lg-none"
    >
      <i class="fa-solid fa-bars"></i>
    </button>
    <nav class="nav-content gap-5">
      <div class="d-flex gap-3 align-items-center">
        <div>
          <p class="title-content mb-2">Good Morning, {{ Auth::user()->name }}</p>
        </div>
      </div>
    </nav>
  </section>
    <section class="d-flex flex-column gap-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">List Books
                        <a class="btn btn-primary" href="{{ route('books.create') }}">Add Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-bordered" id="tableBook">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Title</th>
                                    <th>Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $item)
                                    <tr>
                                        <td><img src="{{ url($item->photo) }}" width="100px"></td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->stock }}</td>
                                        <td>
                                            <a class="btn btn-sm" href="{{ route('books.edit', $item->id) }}"><i class="fa fa-pencil"></i></a>
                                            <form action="{{ route('books.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No Data Available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>  
    

@endsection
@section('script')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#tableBook').DataTable();
    });
</script>
@endsection
