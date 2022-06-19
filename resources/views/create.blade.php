@extends('layout')
<body>
<div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>Secret Server Task</h1>
    <p></p>
</div>
<form action="/savedb" method="POST">
    @csrf
    <label for="SecretText">Secret</label>
    <input type="text" name="SecretText" id="SecretText"></br>
    <button>Send</button>
</form>
