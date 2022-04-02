@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body my-4">
        <h1 class="card-title">
            投稿フォーム
        </h1>
        
        <!-- ↓バリデーションエラーの表示に使用-->
        <!-- ↑バリデーションエラーの表示に使用-->

        <!-- 本登録フォーム -->
        <form action="{{ url('Logs') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <!-- 画像 -->
             <div class="form-group col-md-6 p-2">
                <label for="pet_title" class="col-sm-3 control-label">投稿画像</label>
                <input type="file" name="image" class="form-control" id="image" >
            </div>
            <!-- タイトル -->
            <div class="form-group col-md-6 p-2">
                <label for="pet_title" class="col-sm-3 control-label">タイトル</label>
                <input type="text" name="pet_title" class="form-control" id="pet_title" value="{{ old('pet_title') }}">
            </div>
            <!-- 餌の内容物 -->
            <div class="form-group col-md-6 p-2">
                <label for="pet_foodname" class="col-sm-3 control-label">食べ物は？</label>
                <input type="text" name="pet_foodname" class="form-control" id="pet_foodname" value="{{ old('pet_foodname') }}">
            </div>
            <!-- 活動量 -->
            <div class="form-group col-md-6 p-2">
                <label for="pet_activity" class="col-sm-3 control-label">どれくらい活発？</label>
                <input type="text" name="pet_activity" class="form-control" id="pet_activity" value="{{ old('pet_activity') }}">
            </div>
            <!-- 食欲 -->
            <div class="form-group col-md-6 p-2">
                <label for="pet_hungry" class="col-sm-3 control-label">食欲はある？</label>
                <input type="text" name="pet_hungry" class="form-control" id="pet_hungry" value="{{ old('pet_hungry') }}">
            </div>
            <!-- コメント -->
            <div class="form-group col-md-6 p-2">
                <label for="pet_comment" class="col-sm-3 control-label">コメント</label>
                <input type="textarea" name="pet_comment" class="form-control" id="pet_comment" value="{{ old('pet_comment') }}">
            </div>
            
            
            <!-- 本 登録ボタン -->
            <div class="form-group p-2">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
    

@endsection