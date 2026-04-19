<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 12 | @yield('title')</title>

    <!-- Import Vue.js by CDN -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <!-- Page Styles -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #f26522;
            /* Color Vue/Laravel */
        }

        .joke-list {
            list-style-type: none;
            padding: 0;
        }

        .joke-item {
            background: #eef2f5;
            margin-bottom: 15px;
            padding: 15px;
            border-left: 5px solid #f26522;
            border-radius: 4px;
            font-size: 1.1em;
        }
    </style>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>