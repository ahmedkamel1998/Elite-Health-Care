@extends('layouts.admin')
@section('content')

<section class="content" style="padding: 100px">

    <a href="{{ route('pharmacy.create') }}" class="btn btn-dark" role="button" data-bs-toggle="button">اضافه صيدليه</a>
<table class="table" style="margin:20px">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">الاسم</th>
        <th scope="col">المحافظه</th>
        <th scope="col">العنوان</th>
        <th scope="col">الموبايل</th>
        <th scope="col">تعديل</th>
        <th scope="col">حذف</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      @foreach ($pharmacies as $pharmacy)
      <tr>
        <td>{{ $pharmacy->id }}</td>
        <td>{{ $pharmacy->name }}</td>
        <td>{{ $pharmacy->governorate }}</td>
        <td>{{ $pharmacy->address }}</td>
        <td>{{ $pharmacy->phone }}</td>

        <td> <a class="btn btn-primary" href="{{ route('pharmacy.edit',['id'=>$pharmacy->id]) }}">تعديل</a>
        <td>
            <form id="logout-form" action="{{ route('pharmacy.delete', ['id'=>$pharmacy->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">حذف</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</section>
@endsection
