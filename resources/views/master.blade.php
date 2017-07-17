<!DOCTYPE html>
<html ng-app="myApp">
<head>
    <title>Gallery application in Angular JS</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <script> var baseUrl = "{{url('/')}}/";</script>
</head>
<body>
    <div class="container"  >
        <div ng-view></div>
    </div>
    <script type="text/javascript" src="{{asset('node_modules/angular/angular.js')}}"></script>
    <script type="text/javascript" src="{{asset('node_modules/angular-route/angular-route.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('node_modules/angular-cookies/angular-cookies.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/controllers.js')}}"></script>
</body>
</html>