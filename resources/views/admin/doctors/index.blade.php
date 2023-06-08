@extends('layouts.admin')
@section('content')

<section class="content" style="padding: 100px">

    <a href="{{ route('doctors.create') }}" class="btn btn-dark" role="button" data-bs-toggle="button">اضافه طبيب</a>
<table class="table" style="margin:20px">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">الاسم</th>
        <th scope="col">التخصص</th>
        <th scope="col">الموبايل</th>
        <th scope="col">تعديل</th>
        <th scope="col">حذف</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      @foreach ($doctors as $doctor)
      <tr>
        <td>{{ $doctor->id }}</td>
        <td>{{ $doctor->name }}</td>
        <td>{{ $doctor->specialty }}</td>
        <td>{{ $doctor->phone }}</td>

        <td> <a class="btn btn-primary" href="{{ route('doctor.edit',['id'=>$doctor->id]) }}">تعديل</a>
        <td>
            <form id="logout-form" action="{{ route('doctors.delete', ['id'=>$doctor->id]) }}" method="POST">
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
