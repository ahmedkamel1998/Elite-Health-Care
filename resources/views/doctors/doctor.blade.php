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
    <h1 class="text-center mt-4">قائمة الأطباء</h1>
    <div class="row mt-4">

        <div class="col-md-6 offset-md-3">

    <form action="{{ route('search') }}" method="GET">
        <div class="input-group mb-3" style="margin-right: 50px">
            <input type="text" name="name" class="form-control" placeholder="اسم الطبيب">
            <input type="text" name="specialty" class="form-control" placeholder="تخصص الطبيب">
            <button class="btn btn" type="submit" style="background-color: #3fbbc0; color: white" type="button">بحث</button>
        </div>
    </form>



        </div>
      </div>


      <div class="container" style="color: #000">

        <div class="doctor-card" style="background-color: #3fbbc0;">
            <div class="row">
              <div class="col-md-4">
                <h1 class="doctor-name">الاسم</h1>
              </div>
              <div class="col-md-4">
                  <h1 class="doctor-specialization" style="color: #000">التخصص</h1>
              </div>
              <div class="col-md-4">
                  <h1 class="doctor-specialization" style="color: #000">رقم الهاتف</h1>
              </div>
            </div>
          </div>
          @foreach ($doctors as $doctor)


        <div class="doctor-card" style="background-color: #3fbbc0;">
          <div class="row">
            <div class="col-md-4">
              <h5 class="doctor-name">{{ $doctor->name }}</h5>
            </div>
            <div class="col-md-4">
                <h2 class="doctor-specialization" style="color: #000">{{ $doctor->specialty }}</h2>
            </div>
            <div class="col-md-4">
                <h2 class="doctor-specialization" style="color: #000">{{ $doctor->phone }}</h2>
            </div>
          </div>
        </div>

        @endforeach
</section>
@endsection
