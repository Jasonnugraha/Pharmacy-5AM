<html>

<head>
    <title>Pharmacy</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">
        

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700');
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #DCE1DE;
            color: white;
            text-align: center;
        }
        body {
            background-color:  #DCE1DE;
            font-family: 'Source Sans Pro', sans-serif;
            color: #216869;
        }
        .title {
            font-weight: bold;
            margin: 25px 0;
            font-size: 2.5em;
        }
        th {
            background-color: #1F2421;
            color: #9CC5A1;
            padding: 10px;
        }
        table tr:nth-child(odd){
            background-color: #BFD9C2;
        }
        table tr:nth-child(even){
            background-color: #D3D9D5;
        }

    </style>

    <script>
        @yield('script')
    </script>
    
</head>

<body>
    @section('sidebar')

    @show

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
