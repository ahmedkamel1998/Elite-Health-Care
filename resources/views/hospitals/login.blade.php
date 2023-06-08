@extends('layouts.main')
@section('content')
<div class="container" style="padding: 150px; background-color: #3fbbc0;">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">تسجيل الدخول</h5>
            <form action="{{ route('hospital_signin') }}" method="POST">
                @csrf
              <div class="mb-3">
                <label for="email" class="form-label">البريد الالكتروني</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">الرقم السري</label>
                <input type="password" name="password" class="form-control" id="phone">
              </div>
              <button type="submit" class="btn btn-primary">تسجيل</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
