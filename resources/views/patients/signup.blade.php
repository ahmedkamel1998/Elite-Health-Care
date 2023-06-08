@extends('layouts.main')
@section('content')

<section class="bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp'); padding-top: 200px; margin-top: 100px">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100" >
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">تسجيل حساب جديد</h2>
              <form action="{{ route('patient_signup') }}" method="POST">
                @csrf
                <div class="form-outline mb-2">
                    <label class="form-label" for="form3Example1cg">الاسم</label>
                  <input type="name" name="name" id="form3Example1cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-2">
                    <label class="form-label" for="form3Example1cg">رقم الموبايل</label>
                  <input type="phone" name="phone" id="form3Example1cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-2">
                    <label class="form-label" for="form3Example3cg">البريد الالكتروني</label>
                  <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-2">
                    <label class="form-label" for="form3Example3cg">الرقم السري</label>
                  <input type="password" name="password" id="form3Example3cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-2">
                    <label class="form-label" for="form3Example3cg">العمر</label>
                  <input type="number" name="age" id="form3Example3cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-2">
                    <label class="form-label" for="form3Example3cg">المحافظه</label>
                  <input type="text" name="governorate" id="form3Example3cg" class="form-control form-control-lg" />
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">تسجيل</button>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
