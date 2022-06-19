@extends('layout')
<body>
<div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>Secret Server Task</h1>
    <p></p>
</div>
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Secret successfully created!</h4>
    <p>Your secret:<b>{{ $generatedsecretText }}</b></p>
    <p>Your hash code: {{ $generatedhash}}</p>
    <p>Json response: {{ $createdsecret}}</p>
    <hr>
    <p class="mb-0"><a href="{{ $currentUrl}}/api/secret/{{$generatedhash}}">Generated URL </a></p>
</div>
