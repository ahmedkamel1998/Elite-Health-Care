@extends('layouts.admin')

@section('content')

<section class="content" style="padding: 100px;">

    <form action="{{ route('doctors.store') }}" method="POST" style="width: 50%">
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
            <label for="address">العنوان</label> <br>
            <input type="address" class="form-control" name="address">
        </div>

        <div class="mb-3">
            <h5 class="mb-0 me-4">النوع: </h5>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <label class="form-check-label" for="maleGender">ذكر</label>
                    <input class="form-check-input" name="gender" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="ذكر" />

                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <label class="form-check-label" for="femaleGender">انثي</label>
                    <input class="form-check-input" name="gender" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="انثي" />

                  </div>
        </div>

        <div class="mb-3">

                <label for="specialty"  cclass="form-label">التخصص:</label>
                <select id="specialty" name="specialty" class="form-control">
                    <option value="">اختار التخصص</option>
                    <option value="التخصص">التخصص</option>
                    <option value="الباطنه">الباطنه</option>
                    <option value="الاطفال">الاطفال</option>
                    <option value="الجراحه العامه">الجراحه العامه</option>
                    <option value="النسا والتوليد">النسا والتوليد</option>
                    <option value="الاورام">الاورام</option>
                    <option value="الكلي">الكلي</option>
                </select>


        </div>

        <div class="mb-3">
            <label for="specialty">الموبايل</label> <br>
            <input type="text" class="form-control" name="phone">
        </div>

        <button type="submit" class="btn btn-primary">اضافه</button>
      </form>

</section>

@endsection
