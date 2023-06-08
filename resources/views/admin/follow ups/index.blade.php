@extends('layouts.admin')
@section('content')

<section class="content" style="padding: 100px">

    {{-- <a href="{{ route('patient.create') }}" class="btn btn-dark" role="button" data-bs-toggle="button">اضافه صيدليه</a> --}}
<table class="table" style="margin:20px">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">الرساله</th>
        <th scope="col">الملف المرفوع</th>
        <th scope="col">الرد</th>

        {{-- <th scope="col">تعديل</th> --}}
        <th scope="col">حذف</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      @foreach ($follows as $follow)
      <tr>
        <td>{{ $follow->patient_id }}</td>
        <td>{{ $follow->message }}</td>
        <td>{{ $follow->file }}</td>
        {{-- <td>{{ $patient->answer }}</td> --}}


        <td> <a class="btn btn-primary" href="{{ route('follow.edit',['id'=>$follow->id]) }}">الرد</a>




        {{-- <td> <a class="btn btn-primary" href="{{ route('patient.edit',['id'=>$patient->id]) }}">تعديل</a>--}}
         <td>
            <form id="logout-form" action="{{ route('follow.delete', ['id'=>$follow->id]) }}" method="POST">
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
