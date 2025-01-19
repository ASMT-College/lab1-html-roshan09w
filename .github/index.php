<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hi</h1>
    <p>HOW U DOING </p>
    <?php
        echo 'Hello from server: ', date('Y-m-d');
    ?>
    <script>
        document.write('Hello from client: ' + new Date());
        alert('Hi');
    </script>
</body>
</html>
