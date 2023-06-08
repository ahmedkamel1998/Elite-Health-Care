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
    <form action="{{ route('hospital_signup') }}" method="POST">
        @csrf
  <div class="container py-5 h-100" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col" >
        <div class="card card-registration my-4" style="background-color: #3fbbc0">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="assets/img/hospital.jpg"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>

            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h2 class="mb-5 text-uppercase">تسجيل دخول مستشفي</h2>

                <div class="row">
                  <div class="form-outline mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example1m">اسم المستشفي</label>
                      <input type="text" name="name" id="form3Example1m" class="form-control form-control-lg" />
                    </div>
                  </div>

                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example97">البريد الالكتروني</label>
                    <input type="text" name="email" id="form3Example97" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline">
                    <label class="form-label" for="form3Example97">الرقم السري</label>
                    <input type="password" name="password" id="form3Example97" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline">
                    <label class="form-label" for="governorate">المحافظه</label>
                    <select class="form-select form-select-lg" name="governorate" id="governorate">
                      <option value=""></option>
                      <option value="المنصوره">المنصوره</option>
                      <option value="القاهره">الغربيه</option>
                      <option value="القاهره">القاهره</option>
                      <option value="الاسكندريه">الاسكندريه</option>
                      <!-- Add more options as needed -->
                    </select>
                  </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example8">العنوان</label>
                  <input type="addreess" name="address" id="form3Example8" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                    <label for="phone" class="form-label">الموبايل</label>
                    <input type="phone" name="phone" class="form-control form-control-lg" id="form3Example8"/>
                  </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h5 class="mb-0 me-4">التخصصات: </h5>

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
