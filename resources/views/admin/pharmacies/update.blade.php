@extends('layouts.admin')
@section('content')

<section class="content" style="padding: 100px;">

    <form action="{{ route('pharmacy.update', $pharmacy->id) }}" method="POST" style="width: 50%">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="name" class="form-label">الاسم</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $pharmacy->name }}" >
        </div>

        <div class="mb-3">
          <label for="governorate" class="form-label">المحافظه</label>
          <input type="text" class="form-control" id="governorate" name="governorate" value="{{ $pharmacy->governorate }}">
        </div>

        <div class="mb-3">
            <label for="address">العنوان</label> <br>
            <input type="text" class="form-control" name="address" value="{{ $pharmacy->address }}" >
        </div>

        <div class="mb-3">
            <label for="specialty">الموبايل</label> <br>
            <input type="phone" class="form-control" name="phone" value="{{ $pharmacy->phone }}" >
        </div>

        <button type="submit" class="btn btn-primary">تعديل</button>
      </form>

</section>
@endsection
