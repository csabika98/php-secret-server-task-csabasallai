@extends('layout')
<form action="/api/secret" method="POST">
    <div class="form-group">
        <label for="secretText">Secret</label>
        <textarea class="form-control" id="secretText" name="secretText" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create new secret</button>
</form>
