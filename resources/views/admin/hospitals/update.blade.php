@extends('layouts.admin')

@section('content')

<section class="content" style="padding: 100px;">

    <form action="{{ route('hospital.update', $hospital->id) }}" method="POST" style="width: 50%">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="name" class="form-label">الاسم</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $hospital->name }}">
        </div>

          <div class="mb-3">
            <label for="name" class="form-label">المحافظه</label>
            <input type="text" class="form-control" id="governorate" name="governorate" value="{{ $hospital->governorate }}">
          </div>

          <div class="mb-3">
            <label for="address" class="form-label">العنوان</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $hospital->address }}">
          </div>

        <div class="mb-3">
          <label for="specialties" class="form-label">التخصص</label>
          <input type="text" class="form-control" id="specialties" name="specialties" value="{{ $hospital->specialties }}">
        </div>

        <div class="mb-3">
            <label for="phone">الموبايل</label> <br>
            <input type="text" class="form-control" name="phone" value="{{ $hospital->phone }}" required>
        </div>

        <button type="submit" class="btn btn-primary">تعديل</button>
      </form>

</section>

@endsection
