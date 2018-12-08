<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users Data</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
</head>
<body>

<div class="container">
    <h2>All Users Data</h2>
    <div class="btn-group">
        <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
            Export All Data <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="{{ route('htmltopdf', ['downloadpdf' => 'pdf']) }}">Download PDF</a></li>
            <li><a href="{{ route('htmltopdf', ['downloadexcel' => 'excel']) }}">Download Excel</a></li>
        </ul>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Create At</th>
            <th>
                <button class="btn btn-success btn-xs">Add New User</button>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->created_at }}</td>
                <td>
                    <button class="btn btn-warning btn-detail btn-xs">
                        <span class="glyphicon glyphicon-edit"></span>
                    </button>
                    <button class="btn btn-danger btn-delete btn-xs">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('css/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
</body>
</html>