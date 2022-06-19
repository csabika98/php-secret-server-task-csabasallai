@extends('layout')
<form action="/savedb" method="POST">
    @csrf
    <label for="SecretText">Secret</label>
    <input type="text" name="SecretText" id="SecretText"></br>
    <button>Send</button>
</form>
