@extends('layouts.main')
@section('content')
<style>
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
</style>


<section class="h-100 bg-dark">
    <form action="{{ route('sign') }}" method="POST">
        @csrf
  <div class="container py-5 h-100" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col" >
        <div class="card card-registration my-4" style="background-color: #3fbbc0">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="assets/img/doctors/doctors-2.jpg"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h2 class="mb-5 text-uppercase">تسجيل دخول طبيب</h2>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example1m">الاسم </label>
                      <input type="text" name="name" id="form3Example1m" class="form-control form-control-lg" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                  <div class="mb-3">
                    <label for="password" class="form-label">الرقم السري</label>
                    <input type="password" name="password" class="form-control form-control-lg" id="password">
                  </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="mb-3">
                        <label for="phone" class="form-label">رقم الموبايل</label>
                        <input type="phone" name="phone" class="form-control form-control-lg" id="phone">
                      </div>
                  </div>
                  <div class="col-md-6 mb-4">
                  <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example97">البريد الالكتروني</label>
                    <input type="text" name="email" id="form3Example97" class="form-control form-control-lg" />
                  </div>
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example8">العنوان</label>
                  <input type="text" name="address" id="form3Example8" class="form-control form-control-lg" />
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h5 class="mb-0 me-4">النوع: </h5>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <label class="form-check-label" for="maleGender">ذكر</label>
                    <input class="form-check-input" name="gender" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="option1" />

                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <label class="form-check-label" for="femaleGender">انثي</label>
                    <input class="form-check-input" name="gender" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="option2" />

                  </div>


                </div>



                <div class="row">
                  <div class="col-md-6 mb-4">

                    <select class="select" name="specialty">
                      <option value="التخصص">التخصص</option>
                      <option value="الباطنه">الباطنه</option>
                      <option value="الاطفال">الاطفال</option>
                      <option value="الجراحه العامه">الجراحه العامه</option>
                      <option value="النسا والتوليد">النسا والتوليد</option>
                      <option value="الاورام">الاورام</option>
                      <option value="الكلي">الكلي</option>
                    </select>

                  </div>

                </div>



                <div class="d-flex justify-content-end pt-3">
                  <button type="submit" class="btn btn-warning btn-lg ms-2">تسجيل</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</section>

@endsection


