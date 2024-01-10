
<!DOCTYPE html>
<html>
<head>

	<title>{{config('app.name')}}</title>

	<link rel="icon" href="{{asset('assets/img/fav/favicon.png}}" rel=""icon type="image/png" sizes="16x16">

	<!-- fontawesome css1 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- bootstrap css1 js1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/jquery-ui.min.css">


    <link rel="stylesheet" href="{{asset('assets/libs/jquery-ui-1.13.2.custom/jquery-ui.min.css')}}">

	<!-- custom css1 -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/dist/css/style.css')}}">

    <!-- extra css  -->
    @yield('css')
</head>
<body>
