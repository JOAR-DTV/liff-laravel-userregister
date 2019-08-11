@extends('layouts.app')
@section('content')

<h1>ご登録ありがとうございました！</h1>
<button type="button" class="btn btn-success" id="close">登録を終了する</button>
<script src="https://d.line-scdn.net/liff/1.0/sdk.js"></script>
<script>
    document.getElementById('close').addEventListener('click', function(){
        liff.closeWindow();
    });
</script>



@endsection