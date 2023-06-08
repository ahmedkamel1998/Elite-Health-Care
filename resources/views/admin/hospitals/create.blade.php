@extends('layouts.admin')

@section('content')


<section class="content" style="padding: 100px;">

    <form action="{{ route('hospital.store') }}" method="POST" style="width: 50%">
        @csrf
        @method('post')
        <div class="mb-3">
          <label for="name" class="form-label">الاسم</label>
          <input type="text" class="form-control"  name="name">
        </div>

        <div class="mb-3">
            <label for="email">البريد الالكتروني</label> <br>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="mb-3">
            <label for="password">الرقم السري</label> <br>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="mb-3">
            <label for="governorate"  cclass="form-label">المحافظه</label>
            <select id="governorate" name="governorate" class="form-control">
              <option value=""></option>
              <option value="المنصوره">المنصوره</option>
              <option value="القاهره">الغربيه</option>
              <option value="القاهره">القاهره</option>
              <option value="الاسكندريه">الاسكندريه</option>
              <!-- Add more options as needed -->
            </select>
        </div>

        <div class="mb-3">
            <label for="address">العنوان</label> <br>
            <input type="address" class="form-control" name="address">
        </div>

        <div class="mb-3">
            <label for="specialty">الموبايل</label> <br>
            <input type="phone" class="form-control" name="phone">
        </div>

        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

            <h5 class="mb-0 me-4">التخصصات </h5>

            <div class="form-check form-check-inline mb-0 me-4">
              <label class="form-check-label" for="maleGender">الباطنه</label>
              <input class="form-check-input" type="checkbox" name="specialties[]" id="femaleGender"
                value="الباطنه" />
            </div>

            <div class="form-check form-check-inline mb-0 me-4">
              <label class="form-check-label" for="femaleGender">الاطفال</label>
              <input class="form-check-input" type="checkbox" name="specialties[]" id="maleGender"
                value="الاطفال" />
            </div>

            <div class="form-check form-check-inline mb-0 me-4">
              <label class="form-check-label" for="femaleGender">الجراحه </label>
              <input class="form-check-input" type="checkbox" name="specialties[]" id="maleGender"
                value="الجراحه" />
            </div>

            <div class="form-check form-check-inline mb-0 me-4">
              <label class="form-check-label" for="femaleGender"> الكلي</label>
              <input class="form-check-input" type="checkbox" name="specialties[]" id="maleGender"
                value="الكلي" />
            </div>

            <div class="form-check form-check-inline mb-0 me-4">
              <label class="form-check-label" for="femaleGender">الاورام</label>
              <input class="form-check-input" type="checkbox" name="specialties[]" id="maleGender"
                value="الاورام" />
            </div>

          </div>



        <button type="submit" class="btn btn-primary">اضافه</button>
      </form>

</section>

@endsection

