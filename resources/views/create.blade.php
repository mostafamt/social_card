@extends('master')
@section('title', 'Social Card | Add Card')

@section('content')
<div class="container">
  <form method="POST" action="/create" class="p-4" style="direction: rtl;" enctype="multipart/form-data">

    @foreach ($errors->all() as $error)
    <p class="alert alert-danger">{{ $error }}</p>
    @endforeach
    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif
    {!! csrf_field() !!}

    <legend class="mb-4">اضافة كارت جديد</legend>
    {{-- DEGREE --}}
    <div class="form-group row mb-2">
      <label for="degree" class="col-2 col-form-label">الدرجة</label>
      <div class="col-10">
        <select class="form-select form-select-md mb-3" id="degree" name="degree">
          {{-- <option selected>اختار الدرجة</option> --}}
          <option value="1">جندي</option>
          <option value="2">ضابط صف</option>
          <option value="3">ضابط</option>
        </select>
      </div>
    </div>
    {{-- NAME --}}
    <div class="form-group row mb-4">
      <label for="name" class="col-2 col-form-label">الاسم الرباعي</label>
      <div class="col-10">
        <input class="form-control" type="text" value="" id="name" name="name">
      </div>
    </div>

    <div class="form-group row mb-4">
      <label for="date_of_birth" class="col-2 col-form-label">تاريخ الميلاد</label>
      <div class="col-10">
        <input class="form-control" type="date" value="" id="date_of_birth" name="date_of_birth">
      </div>
    </div>
    <div class="form-group row mb-4">
      <label for="place_of_birth" class="col-2 col-form-label">محل الميلاد</label>
      <div class="col-10">
        <input class="form-control" type="text" value="" id="example-date-input" name="place_of_birth">
      </div>
    </div>
    <div class="form-group row mb-4">
      <label for="image" class="col-2 col-form-label">الصورة</label>
      <div class="col-10">
        <input class="form-control" type="file" value="" id="image" name="image">
      </div>
    </div>
    <button type="submit" class="btn btn-primary mx-auto my-5 py-2 px-5" style="display: block;">تسجيل</button>
  </form>
</div>

@endsection