@extends('master')
@section('title', 'Social Card | Add Card')

@section('content')
<div class="container">
  <form method="POST" class="p-4" style="direction: rtl;">

    @csrf

    @foreach ($errors->all() as $error)
    <p class="alert alert-danger">{{ $error }}</p>
    @endforeach

    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif

    <legend class="mb-4">اضافة كارت جديد</legend>
    <div class="mb-3">
      <label for="name" class="form-label">الاسم</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
      <label for="place_of_birth" class="form-label">محل الميلاد</label>
      <input type="text" class="form-control" id="place_of_birth" name="place_of_birth">
    </div>
    <div class="col-md-5">
      <strong>Image:</strong>
      <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">تسجيل</button>
  </form>
</div>
@endsection