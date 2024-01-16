@extends('layout')

@section('content')


<div class="container mt-5">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Thêm mới sách</h3>
    </div>
    <div class="card-body">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form method="post" action="{{ route('books.store') }}">
        @csrf

        <div class="form-group">
          <label for="book_name">Tên sách:</label>
          <input type="text" class="form-control" id="book_name" name="book_name" placeholder="Nhập tên sách">
        </div>

        <div class="form-group">
          <label for="isbn_no">Số ISBN:</label>
          <input type="text" class="form-control" id="isbn_no" name="isbn_no" placeholder="Nhập số ISBN">
        </div>

        <div class="form-group">
          <label for="book_price">Giá:</label>
          <input type="number" class="form-control" id="book_price" name="book_price" placeholder="Nhập giá">
        </div>

        <button type="submit" class="btn btn-primary">Thêm mới</button>
      </form>
    </div>
  </div>
</div>

@endsection
