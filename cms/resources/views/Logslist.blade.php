@extends('layouts.app')
@section('content')
    <!-- Book: 既に登録されてる本のリスト -->
    @if (count($Logs) > 0)
        <div class="card-body my-4">
            <table class="table table-striped task-table">
                <!-- テーブルヘッダ -->
                <div>
                    <h1>投稿一覧</h1>
                    <div>&nbsp;</div>
                </div>
                <!-- テーブル本体 -->
                <div>
                    @foreach ($Logs as $Log)
                        <div class ='row mb-3'>
                            <div>
                                <a href="{{ url('Logdetail/'.$Log->id) }}">
                                    <!-- 画像 -->
                                    <div class="table-text">
                                        <div> <img src="upload/{{$Log->image}}" width="343"></div>
                                    </div>
                                    <!-- タイトル -->
                                    <h2 class="table-text">
                                        <div class=''>{{ $Log->pet_title }}</div>
                                    </h2>
                                </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </table>
        </div>
    @endif
@endsection