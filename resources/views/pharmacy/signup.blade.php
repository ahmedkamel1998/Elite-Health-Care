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
    <form action="{{ route('pharmacy_signup') }}" method="POST">
        @csrf
  <div class="container py-5 h-100" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col" >
        <div class="card card-registration my-4" style="background-color: #3fbbc0">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="assets/img/pharmacy.png"
                alt="Sample photo" class="img-fluid"
                style="height: 1rm; width: 2rm;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h2 class="mb-5 text-uppercase">تسجيل دخول صيدليه</h2>


                  <div class="form-outline mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example1m">الاسم</label>
                      <input type="text" name="name" id="form3Example1m" class="form-control form-control-lg" />
                    </div>
                  </div>

                  <div cclass="form-outline">
                    <label class="form-label" for="form3Example1m">الرقم السري</label>
                    <input type="password" name="password" id="form3Example1m" class="form-control form-control-lg" />
                  </div>

                    <div class="form-outline">
                        <label class="form-label" for="form3Example1m">المحافظه</label>
                      <input type="text" name="governorate" id="form3Example1m" class="form-control form-control-lg" />
                    </div>


                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example8">العنوان</label>
                  <input type="text" name="address" id="form3Example8" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example8">الموبايل</label>
                  <input type="phone" name="phone" id="form3Example8" class="form-control form-control-lg" />
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
