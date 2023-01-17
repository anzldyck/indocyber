@extends('layouts.dashboard')
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
          <p class="title-content mb-2">Update Data</p>
        </div>
      </div>
    </nav>
  </section>
  <section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('books.update', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $data->title }}">
                            @error('title') <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="">Stock</label>
                            <input type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ $data->stock }}">
                            @error('stock') <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="" class="mb-3">Photo</label> <br>
                            <img src="{{ url($data->photo) }}" width="200px">
                            <input type="file" class="form-control mt-3 @error('photo') is-invalid @enderror" name="photo" accept="image/*">
                            @error('photo') <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection