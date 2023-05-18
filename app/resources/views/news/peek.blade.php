<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Content</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        body {
            overflow: hidden;
            margin: 0 !important;
            background: var(--header-background-color) !important;
        }
        body * {
            color: #fff;
        }
        .ellipsis {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body>
    <div style="height: 20vh" >
        <div class="{{ $short ? 'ellipsis' : '' }}">
            {!! $content !!}
        </div>
    </div>
</body>
</html>