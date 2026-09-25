<!DOCTYPE html>
<html>
<head>
    <title>Personal Task Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #ffe4ec;
        }
        h1 {
            color: #d6336c;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(214, 51, 108, 0.15);
        }
        th, td {
            border: 1px solid #ffc2d6;
            padding: 10px;
            text-align: left;
        }
        th {
            background: #d6336c;
            color: #fff;
        }
        tr:hover {
            background: #fff0f5;
        }
        .btn {
            padding: 6px 10px;
            text-decoration: none;
            border-radius: 4px;
            color: #fff;
            font-size: 13px;
        }
        .btn-edit {
            background: #ff6f91;
        }
        .btn-delete {
            background: #c9184a;
            border: none;
            cursor: pointer;
        }
        .btn-add {
            background: #d6336c;
            display: inline-block;
            margin-bottom: 15px;
        }
        .status-Pending {
            color: #ff6f91;
            font-weight: bold;
        }
        .status-Completed {
            color: #ad1457;
            font-weight: bold;
        }
        .success {
            color: #d6336c;
            margin-bottom: 10px;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ffc2d6;
            border-radius: 4px;
        }
        label {
            font-weight: bold;
            color: #d6336c;
        }
    </style>
</head>
<body>
    <h1>Personal Task Manager</h1>
    @yield('content')
</body>
</html>