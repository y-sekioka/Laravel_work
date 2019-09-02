@extends('layouts.front')
@section('title', 'my profile')
@section('content')
        <div class="container">
        <div class="row">
            <h2>Myプロフィール</h2>
        </div>
        <div class="row">
            <div class="col-md-2">
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="検索">
            </div>    
        </div>
        
        <hr color="#c0c0c0">
        <div class="row">
                <div class="posts col-md-8 mx-auto mt-3">
                    <table class="tabel table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">名前</th>
                                <th width="20%">性別</th>
                                <th width="20%">趣味</th>
                                <th width="50%">自己紹介欄</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profile as $pro)
                                <tr>
                                    <th>{{ $pro->id }}</th>
                                    <td>{{ str_limit($pro->name, 100) }}</td>
                                    <td>{{ str_limit($pro->gender, 250) }}</td>
                                    <td>{{ str_limit($pro->hobby, 250) }}</td>
                                    <td>{{ str_limit($pro->introduction,1000) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
        <hr color="#c0c0c0">
        </div>
    </div>   

@endsection