<html>
//doc + Tab 快捷鍵
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="body center">>
    <form id="form_1" action="{{url('/search')}}" method="GET" style="width:80%">
        <div class="input-group">
            <input type="text" class="form-control input-lg" id="ff1" name="q" placeholder="#輸入中英文藥名, 或健保碼">
            <span class="input-group-btn">
                    <button class="btn btn-info btn-lg" type="submit">查詢</button>
                </span>
        </div>
        <div class="center">
            <img src="{{$pic_url}}" id="content" class="center" alt="Girl in a jacket" width="500" height="600" text="{{$drug_name}}">

        </div>
    </form>

</body>
    <style>
        #content {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</html>
