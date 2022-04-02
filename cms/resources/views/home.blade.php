@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <!--↓ここから追加↓-->
                    <div class="alert alert-primary">
                        <div>Profile</div>
                    </div>
                    <table class="table table-striped task-table">
                        <!-- テーブルヘッダ -->
                        <thead>
                            <th>自分の投稿一覧</th>
                            <th>&nbsp;</th>
                        </thead>
                        <!-- テーブル本体 -->
                        <tbody>
                            @if(isset($Logs))
                                @foreach ($Logs as $Log)
                                    <tr>
                                       
                                        <!-- 画像 -->
                                        <td class="table-text">
                                             <a href="{{ url('Logdetail/'.$Log->id) }}">
                                                <div> <img src="upload/{{$Log->image}}" width="200"></div>
                                            </a>
                                        </td>
                                        
                                        
                                        <!-- タイトル -->
                                        <td class="table-text ">
                                            <div class="pb-4">{{ $Log->pet_title}}</div>
                                            
                                            <div class='row'>
                                                <div class="pb-3">
                                                     <form action="{{ url('Log/'.$Log->id) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">
                                                            削除
                                                        </button>
                                                    </form>
                                                </div>
                                                <!-- 本: 更新ボタン -->
                                                <div>
                                                     <a href="{{ url('Logsedit/'.$Log->id) }}">
                                                        <button type="submit" class="btn btn-primary">更新</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    <!--↑ここまで↑-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
