@extends('layouts.main')
@section('content')
<div class="container" style="padding: 150px; background-color: #3fbbc0;">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title" >تسجيل الدخول</h4>
            <form action="{{ route('patient_signin') }}" method="POST">
                @csrf

                {{-- <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">رقم الموبايل</label>
                    <input type="phone" id="form3Example1cg" class="form-control form-control-lg" />
                  </div> --}}

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">البريد الالكتروني</label>
                    <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">الرقم السري</label>
                    <input type="password" name="password" id="form3Example3cg" class="form-control form-control-lg" />
                  </div>

              <button type="submit" class="btn btn-primary">تسجيل</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
