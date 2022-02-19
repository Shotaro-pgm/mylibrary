@extends('layouts.admin')
@section('title', 'プロフィール')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h2>プロフィール作成画面</h2>
          <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

            @if (count($errors) > 0)
              <ul>
                @foreach($errors->all() as $e)
                  <Li>{{ $e }}</li>
                @endforeach
              </ul>
            @endif
            <div class="form-group row">
              <label class="col-md-10" for="name">氏名</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
            <div class="form-group row">
              <label class="col-md-10" for="gender">性別</label>
                <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
            </div>
            <div class="form-group row">
              <label class="col-md-10" for="hobby">趣味</label>
                <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
            </div>
            <div class="form-group row">
              <label class="col-md-2" for="introduction">自己紹介</label>
                <textarea class="form-control" name="introduction" rows="20">{{ old('introduction') }}</textarea>
            </div>
            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary" value="更新">
          </form>
        </div>
      </div>
    </div>
@endsection
