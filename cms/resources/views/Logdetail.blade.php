@extends('layouts.app')
@section('content')
    <!-- Book: 既に登録されてる本のリスト -->
        <div class="card-body my-4">
            <table class="table table-striped task-table">
                <!-- テーブルヘッダ -->
                <div>
                    <h1>詳細</h1>
                    <div>&nbsp;</div>
                </div>
                <!-- テーブル本体 -->
                <div>
                    <div class ='row mb-3 my-4'>
                        <div>
                            <!-- 画像 -->
                            <div class="table-text">
                                <div> <img src="upload/{{$Log->image}}" width="200"></div>
                                
                            </div>
                            <!-- タイトル -->
                            <h2 class="table-text fs-1">
                                <div class=''>{{ $Log->pet_title }}</div>
                            </h2>
                            <!-- 餌内容物 -->
                            <div class="table-text pb-3">
                                <div class="fs-4" style="text-decoration:underline;">何食べてる？</div>
                                <div>{{ $Log->pet_foodname }}</div>
                            </div>
                            <!-- 活動量 -->
                            <div class="table-text pb-3">
                                <div class="fs-4" style="text-decoration:underline;">どれくらい元気？</div>
                                <div>{{ $Log->pet_activity }}</div>
                            </div>
                            <!-- 食欲 -->
                            <div class="table-text pb-3">
                                <div class="fs-4" style="text-decoration:underline;"><u)>食欲はある？</u></div>
                                <div>{{ $Log->pet_hungry }}</div>
                            </div>
                            <!-- コメント -->
                            <div class="table-text pb-3">
                                <div class="fs-4" style="text-decoration:underline;">コメント</div>
                                <div>{{ $Log->pet_comment }}</div>
                            </div>
                            
                            <!-- 本: 削除ボタン -->
                            <div class='row'>
                                <div class='col-6 px-md-4'>
                                     @if($Log->user_id === Auth::id())
                                        <form action="{{ url('Log/'.$Log->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">
                                                削除
                                            </button>
                                        </form>
                                    @endif
                                </div>
                               <!-- 本: 更新ボタン -->
                                <div class='col-6'>
                                     @if($Log->user_id === Auth::id())
                                        <a href="{{ url('Logsedit/'.$Log->id) }}">
                                            <button type="submit" class="btn btn-primary">更新</button>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </table>
        </div>
@endsection