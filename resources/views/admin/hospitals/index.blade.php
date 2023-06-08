@extends('layouts.admin')
@section('content')

<section class="content" style="padding: 100px">

    <a href="{{route ('hospital.create') }}" class="btn btn-dark" role="button" data-bs-toggle="button">اضافه مستشفي</a>
<table class="table" style="margin:20px">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">اسم المستشفي</th>
        <th scope="col">المحافظه</th>
        <th scope="col">العنوان</th>
        <th scope="col">التخصصات</th>
        <th scope="col">الموبايل</th>
        <th scope="col">تعديل</th>
        <th scope="col">حذف</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      @foreach ($hospitals as $hospital)
      <tr>
        <td>{{ $hospital->id }}</td>
        <td>{{ $hospital->name }}</td>
        <td>{{ $hospital->governorate }}</td>
        <td>{{ $hospital->address }}</td>
        <td>{{ $hospital->specialties }}</td>
        <td>{{ $hospital->phone }}</td>


        <td> <a class="btn btn-primary" href="{{ route('hospital.edit',['id'=>$hospital->id]) }}">تعديل</a>
            <td>
                <form id="logout-form" action="{{ route('hospital.delete', $hospital->id) }}" method="POST">
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
