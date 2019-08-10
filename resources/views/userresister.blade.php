<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    
<form class="form-horizontal" action="/hoge/foo" method="post">
    <div class="form-group">
        <label for="name" class="control-label col-xs-2">お名前 Name</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" id="name" name="name" placeholder="東京 ナナナ">
        </div>
    </div>

    <div class="form-group">
        <label for="store_name" class="control-label col-xs-2">店舗名 Store</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" id="store_name" name="store_name" placeholder="ファミリーマート歌舞伎町さくら通り店">
        </div>
    </div>
    
    <label for="sex" class="control-label col-xs-2">性別</label>
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-info active">
    <input type="radio" name="options id="option1" autocomplete="off"" checked>男性 / Male
    </label>
    <label class="btn btn-info">
    <input type="radio" name="options" id="option2" autocomplete="off">女性 / Female
    </label>
    <label class="btn btn-info">
    <input type="radio" name="options" id="option3" autocomplete="off">その他 / Others
    </label>
    </div>
    
 
    <div class="form-group">
        <label for="country" class="control-label col-xs-2">国籍</label>
        <div class="col-xs-3">
            <select class="form-control" id="country" name="country">
                <option value="JAPAN">日本</option>
                <option value="Foreigner">日本以外</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <button type="submit" class="btn btn-primary">送信</button>
        </div>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>