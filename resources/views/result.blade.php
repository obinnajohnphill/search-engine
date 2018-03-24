<!doctype html>
<html lang="{{ app()->getLocale() }}" xmlns:color="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('/js/sortable.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("table")
                .tablesorter({widthFixed: true, widgets: ['zebra']})
                .tablesorterPager({container: $("#pager")});
        });
    </script>

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

    <script>
        var delay = (function(){
            var timer = 0;
            return function(callback, ms){
                clearTimeout (timer);
                timer = setTimeout(callback, ms);
            };
        })();

        function submitFunction() {
            $('input').keyup(function () {
                delay(function () {
                    document.getElementById("form").submit();
                }, 50);
            });
        }
    </script>

</head>
<body>

<div class="content">
    <div class="title m-b-md">
        Search Result
    </div>

    <form id="form" onkeyup="submitFunction()" method="post" action="/members">
        <input type="text" name="searchItem" placeholder="Key in your search">
        {{ csrf_field() }}
    </form></br>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Title</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
            @foreach($name as $p)
                <tr>
                    <td>{{$p->title}}</td>
                    <td>{{$p->firstname}}</td>
                    <td>{{$p->lastname}}</td>
                    <td>{{$p->email}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if(empty($p->firstname))
        <p  class="text-danger"><strong>Sorry your search returned no data, please try again.</strong></p>
    @endif
</div>
</div>
</body>
</html>
