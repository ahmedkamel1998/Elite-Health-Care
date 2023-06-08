@extends('layouts.admin')
@section('content')

<section class="content" style="padding: 100px;">

    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST" style="width: 50%">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="name" class="form-label">الاسم</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $doctor->name }}">
        </div>

        <div class="mb-3">
          <label for="specialty" class="form-label">التخصص</label>
          <input type="text" class="form-control" id="specialty" name="specialty" value="{{ $doctor->specialty }}">
        </div>

        <div class="mb-3">
            <label for="specialty">الموبايل</label> <br>
            <input type="text" class="form-control" name="phone" value="{{ $doctor->phone }}" required>
        </div>

        <button type="submit" class="btn btn-primary">تعديل</button>
      </form>

</section>
@endsection
