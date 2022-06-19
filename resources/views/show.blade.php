@extends('layout')
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Secret successfully created!</h4>
    <p>Your secret:<b>{{ $generatedsecretText }}</b></p>
    <p>Your hash code: {{ $generatedhash}}</p>
    <p>Json response: {{ $createdsecret}}</p>
    <hr>
    <p class="mb-0"><a href="{{ $currentUrl}}/api/secret/{{$generatedhash}}">Generated URL </a></p>
</div>
