@extends('layout')
<body>
<div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>Secret Server Task</h1>
    <p></p>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4">
            <h3>Task</h3>
            <p>Your task is to implement a secret server. The secret server can be used to store and share secrets using the random generated URL. But the secret can be read only a limited number of times after that it will expire and won’t be available.</p>
        </div>
        <div class="col-sm-4">
            <h3>Used technologies</h3>
            <p>Backend: PHP 8.1.6</p>
            <p>Framework: Laravel v9.10</p>
            <p>Database: MySQL</p>
            <h3>Hosting by Heroku</h3>

        </div>
        <div class="col-sm-4">
            <h3>How to use?</h3>
            <a href="/new"><p>Click to this link to begin with or type /new</p></a>
            <a href="https://github.com/csabika98/php-secret-server-task-csabasallai"><p>Documentation</p></a>
        </div>
    </div>
</div>

</body>
</html>
