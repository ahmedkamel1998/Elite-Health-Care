@extends('layouts.admin')
@section('content')

<section class="content" style="padding: 100px;">

    <form action="{{ route('follow.update', $follow->id) }}" method="POST" style="width: 50%">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="answer" class="form-label">الرد</label>
          <input type="text" class="form-control" id="answer" name="answer" value="{{ $follow->answer }}">
        </div>

        <button type="submit" class="btn btn-primary">ارسال</button>
      </form>

</section>
@endsection
