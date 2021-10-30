@extends('layouts.app')

@section('images')
<div class="container">
    <div class="row justify-content-center">
            <div class="card">
                <div class="card-header d-flex justify-content-between">画像一覧</div>
                <div class="card-body  my-card-body">
                    @foreach($memos as $memo)
                    <a href="/edit/{{$memo['id']}}" class="card-text d-block elipsis mb-3"> <img src="{{ Storage::url($memo->image) }}" style="width:100%;" />
                        <p>{{ $memo->content }}</p>
                    </a>
                    @endforeach
                </div>
            </div>
    </div>
</div>
@endsection