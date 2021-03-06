@extends('layout')
<body>
<div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>Secret Server Task</h1>
    <p></p>
</div>
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Your secret</h4>
    <p>Your secret:<b>{{ $secretDb }}</b></p>
    <p>Json response: {{$selectedsecret}} </p>
    <p>Remaining Views: {{$remainingViews}}</p>
    <p>If your refresh the page 5 times your secret will be expired.</p>
    <p>If you edit the hash and trying to use random characters you'll get 404 error</p>
</div>
