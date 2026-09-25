<!DOCTYPE html>
<html>
<head>
    <title>Personal Task Manager</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f4f4f4; }
        table { width: 100%; border-collapse: collapse; background: #fff; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background: #333; color: #fff; }
        .btn { padding: 6px 10px; text-decoration: none; border-radius: 4px; color: #fff; font-size: 13px; }
        .btn-edit { background: #2196F3; }
        .btn-delete { background: #f44336; border: none; cursor: pointer; }
        .btn-add { background: #4CAF50; display: inline-block; margin-bottom: 15px; }
        .status-Pending { color: #e67e22; font-weight: bold; }
        .status-Completed { color: #27ae60; font-weight: bold; }
        .success { color: green; margin-bottom: 10px; }
        input, textarea, select { width: 100%; padding: 8px; margin-bottom: 10px; box-sizing: border-box; }
    </style>
</head>
<body>
    <h1>Personal Task Manager</h1>
    @yield('content')
</body>
</html>