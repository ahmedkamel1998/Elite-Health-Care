@extends('layouts.main')
@section('content')

<style>
    .doctor-card {
      border: 1px solid #dee2e6;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 15px;
    }

    .doctor-card .doctor-name {
      font-size: 20px;
      font-weight: bold;
    }

    .doctor-card .doctor-specialization {
      font-size: 16px;
      color: #6c757d;
    }

    .doctor-card .doctor-phone {
      margin-top: 10px;
      font-size: 16px;
    }

    .doctor-card .appointment-button {
      margin-top: 15px;
    }
  </style>

<section style="margin:150px;">
    <h1 class="text-center mt-4">قائمة المستشفيات</h1>
    <div class="row mt-4">

    <form action="{{ route('search2') }}" method="GET">
        <div class="input-group mb-3" style="margin-right: 50px; width: 75%;">
            <input type="text" name="name" class="form-control" placeholder="اسم المستشفي">
            <input type="text" name="specialty" class="form-control" placeholder="التخصصات">
            <input type="text" name="governorate" class="form-control" placeholder="المحافظه">
            <button class="btn btn" type="submit" style="background-color: #3fbbc0; color: white" type="button">بحث</button>
        </div>
    </form>

      </div>

      <div class="container" >

        <div class="doctor-card" style="background-color: #3fbbc0;">
            <div class="row">
              <div class="col-md-4">
                <h1 class="doctor-name"style="color: #ebc7c7">الاسم</h1>
              </div>
              <div class="col-md-4">
                  <h1 class="doctor-specialization" style="color: #ebc7c7">التخصصات</h1>
              </div>
              <div class="col-md-4">
                <h1 class="doctor-specialization" style="color: #ebc7c7">المحافظه</h1>
              </div>
            </div>
        </div>

          @foreach ($hospitals as $hospital)

          <div class="doctor-card" style="background-color: #3fbbc0;">
            <div class="row">
              <div class="col-md-4">
                <h1 class="doctor-name" style="color: #000">{{ $hospital->name }}</h1>
              </div>

              <div class="col-md-4">
                <h1 class="doctor-specialization" style="color: #000">{{ $hospital->specialties }}</h1>
            </div>

              <div class="col-md-4">
                <h1 class="doctor-specialization" style="color: #000">{{ $hospital->governorate }}</h1>
            </div>

            </div>
          </div>

          @endforeach

</section>
@endsection
