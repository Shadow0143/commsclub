<!DOCTYPE html>
<html lang="en">

<head>
    @yield('title')
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">


    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap-grid.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">




</head>

<body>

    @yield('content')



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="{{asset('assetsjs/bootstrap.js')}}"></script>
    <script src="{{asset('assetsjs/slick.js')}}"></script>
    <script src="{{asset('assetsjs/custom.js')}}"></script>

    <script>
        const inputs = document.querySelectorAll('.form-control input');
        const labels = document.querySelectorAll('.form-control label');

        labels.forEach(label => {
            label.innerHTML = label.innerText
                .split('')
                .map((letter, idx) => `<span style="
				transition-delay: ${idx * 50}ms
			">${letter}</span>`)
                .join('');
        });
    </script>


</body>

</html>