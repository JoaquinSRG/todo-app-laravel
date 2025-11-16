<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Todo App</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f5f5f5;
      padding: 20px;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #333;
      margin-bottom: 20px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      font-size: 14px;
    }

    .btn-primary {
      background-color: #007bff;
      color: white;
    }

    .botn-primary:hover {
      background-color: #0056b3;
    }

    .btn-success {
      background-color: #28a745;
      color: white;
    }

    .btn-danger {
      background-color: #dc3545;
      color: white;
    }

    .btn-secondary {
      background-color: #6c757d;
      color: white;
    }

    .alert {
      padding: 15px;
      margin-bottom: 20px;
      border-radius: 5px;
    }

    .alert-sucess {
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
    }

    form {
      margin-top;
      20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #333;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px soolid #ddd;
      border-radius: 5px;
      font-size: 14px;
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    input[type="checkbox"] {
      margin-right: 5px;
    }
  </style>
</head>

<body>
  <div class="container">
    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    @yield('content')
  </div>
</body>

</html>
