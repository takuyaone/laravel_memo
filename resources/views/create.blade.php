@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">新規メモ作成</div>
    <form class="card-body my-card-body" action="{{ route('store') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group">
            <textarea class="form-control" name="content" rows="3" placeholder="ここにメモ入力"></textarea>
        </div>
        @error('content')
        <div class="alert alert-danger">メモ内容の入力がありません！</div>
        @enderror
        @foreach($tags as $t)
        <div class="form-check form-check-inline mb-3">
            <input class="form-check-input" type="checkbox" name="tags[]" value="{{$t['id']}}" id="{{$t['id']}}">
            <label class="form-check-label" for="{{$t['id']}}">
                {{$t['name']}}
            </label>
        </div>
        @endforeach
        <input type="text" class="form-control w-50 mb-3" name="new_tag" placeholder="新しいタグを入力">
        <input type="file" class="d-block mb-3" name="image">
        <button type="submit" class="btn btn-primary">保存</button>
    </form>
</div>

@endsection