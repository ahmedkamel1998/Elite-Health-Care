@extends('layouts.admin')

@section('content')


<section class="content" style="padding: 100px;">

    <form action="{{ route('pharmacy.store') }}" method="POST" style="width: 50%">
        @csrf
        @method('post')
        <div class="mb-3">
          <label for="name" class="form-label">الاسم</label>
          <input type="text" class="form-control"  name="name">
        </div>

        <div class="mb-3">
            <label for="password">الرقم السري</label> <br>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="mb-3">
            <label for="governorate"  cclass="form-label">المحافظه</label>
            <select id="governorate" name="governorate" class="form-control">
              <option value=""></option>
              <option value="المنصوره">المنصوره</option>
              <option value="القاهره">الغربيه</option>
              <option value="القاهره">القاهره</option>
              <option value="الاسكندريه">الاسكندريه</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="address">العنوان</label> <br>
            <input type="address" class="form-control" name="address">
        </div>

        <div class="mb-3">
            <label for="specialty">الموبايل</label> <br>
            <input type="phone" class="form-control" name="phone">
        </div>
        <button type="submit" class="btn btn-primary">اضافه</button>
      </form>

</section>

@endsection

