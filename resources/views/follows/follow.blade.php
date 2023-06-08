@extends('layouts.main')

@section('content')

<div class="container" style="padding: 150px;">
    <h1 class="text-center mt-4"> متابعه المريض</h1>

    <div class="card mt-4" style="background-color: #3fbbc0">
      <div class="card-header">
       <h4>من فضلك ادخل مشكلتك :</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('send_follow') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="mb-3">
            <label for="symptoms" class="form-label">الرساله</label>
            <textarea class="form-control" name="message" id="symptoms" rows="3"></textarea>
          </div>
          {{-- <div class="mb-3">
            <label for="medications" class="form-label">الرد</label>
            <textarea class="form-control" name="answer" id="medications" rows="3"></textarea>
          </div> --}}
          <div class="mb-3">
            <label for="notes" class="form-label">الملف</label>
            <input class="form-control" type="file" name="file" id="notes" />
          </div>
          <button type="submit" class="btn btn-primary" >إرسال</button>
        </form>
      </div>
    </div>
</div>


<div class="container" style="padding: 150px;">
    <h1 class="text-center mt-4">جدول المتابعات</h1>

    <div class="card mt-4" style="background-color: #3fbbc0">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">رقم المتابعه</th>
                <th scope="col">الرد</th>

              </tr>
            </thead>
            <tbody class="table-group-divider">
                @empty(!$follows)
                @foreach ($follows as $follow)
                <tr>
                   <td>{{ $follow->id }}</td>
                   <td>{{ $follow->answer }}</td>
                </tr>
                @endforeach
                @endempty



            </tbody>
     </table>
    </div>
</div>


@endsection
