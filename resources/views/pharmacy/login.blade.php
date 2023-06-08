@extends('layouts.main')
@section('content')
<div class="container" style="padding: 150px; background-color: #3fbbc0;">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">تسجيل الدخول</h5>
            <form action="{{ route('pharmacy_signin') }}" method="POST">
                @csrf
              <div class="mb-3">
                <label for="phone" class="form-label">الموبايل</label>
                <input type="phone" name="phone" class="form-control" id="phone">
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">الرقم السري</label>
                <input type="password" name="password" class="form-control" id="text" aria-describedby="text">
              </div>

              <button type="submit" class="btn btn-primary">تسجيل</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
