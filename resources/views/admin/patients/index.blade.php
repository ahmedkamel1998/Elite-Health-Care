@extends('layouts.admin')
@section('content')

<section class="content" style="padding: 100px">

    {{-- <a href="{{ route('patient.create') }}" class="btn btn-dark" role="button" data-bs-toggle="button">اضافه صيدليه</a> --}}
<table class="table" style="margin:20px">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">الاسم</th>
        <th scope="col">الموبايل</th>
        <th scope="col">العمر</th>
        <th scope="col">المحافظه</th>

        <th scope="col">تعديل</th>
        <th scope="col">حذف</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      @foreach ($patients as $patient)
      <tr>
        <td>{{ $patient->id }}</td>
        <td>{{ $patient->name }}</td>
        <td>{{ $patient->phone }}</td>
        <td>{{ $patient->age }}</td>
        <td>{{ $patient->governorate }}</td>



        <td> <a class="btn btn-primary" href="{{ route('patient.edit',['id'=>$patient->id]) }}">تعديل</a>
        <td>
            <form id="logout-form" action="{{ route('patient.delete', ['id'=>$patient->id]) }}" method="POST">
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
