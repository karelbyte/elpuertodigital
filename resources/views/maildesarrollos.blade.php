<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>elpuertodigital</title>
    <style>
        div {
            display: block;
            float: left;
            width: 100%;
            font-size: 12px;
        }
    </style>
</head>
<body>
<div>
    <div style="margin-bottom: 15px">
        <img src="{{$message->embed(public_path() . '/images/PD.png')}}" alt="">
    </div>

    <p>Cliente: <b>{{$data['names']}}</b></p>

    <p>Correo: <b>{{$data['email']}}</b></p>

    <p>Cuestion: <b>{{$data['question']}}</b></p>

</div>


</body>
</html>
