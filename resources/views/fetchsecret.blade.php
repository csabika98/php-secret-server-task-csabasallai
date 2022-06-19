@extends('layout')
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Your secret</h4>
    <p>Your secret:<b>{{ $secretDb }}</b></p>
    <p>Json response: {{$selectedsecret}} </p>
</div>
