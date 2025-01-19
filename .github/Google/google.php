<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Front </title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        header {
            position: absolute;
            top: 10px;
            right: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        header a {
            text-decoration: none;
            color: #3c4043;
            font-size: 14px;
        }

        header .signin-button {
            background-color: #1a73e8;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 8px 16px;
            font-size: 14px;
            cursor: pointer;
        }

        .logo {
            margin-bottom: 20px;
        }

        .search-box {
            width: 90%;
            max-width: 600px;
            display: flex;
            align-items: center;
            border: 1px solid #dfe1e5;
            border-radius: 24px;
            padding: 10px 15px;
            background-color: white;
            box-shadow: 0 1px 6px rgba(32, 33, 36, 0.28);
        }

        .search-box input {
            flex: 1;
            border: none;
            outline: none;
            font-size: 16px;
        }

        .search-box button {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin-left: 10px;
            color: #5f6368;
        }

        .buttons {
            margin-top: 20px;
        }

        .buttons button {
            background-color: #f8f9fa;
            border: 1px solid #f8f9fa;
            border-radius: 4px;
            color: #3c4043;
            font-size: 14px;
            margin: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .buttons button:hover {
            background-color: #f1f3f4;
            border: 1px solid #dfe1e5;
        }

        .language-options {
            margin-top: 15px;
            font-size: 14px;
            color: #5f6368;
        }

        .language-options a {
            color: #1a73e8;
            text-decoration: none;
            margin: 0 5px;
        }

        .footer {
            position: absolute;
            bottom: 10px;
            width: 100%;
            text-align: center;
            font-size: 14px;
            color: #5f6368;
        }
    </style>
</head>
<body>
    <header>
        <a href="#">Gmail</a>
        <a href="#">Images</a>
        <button class="signin-button">Sign in</button>
    </header>

    <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png" alt="Google Logo" class="logo">

    <div class="search-box">
        <input type="text" placeholder="Search Google or type a URL">
        <button>🔍</button>
    </div>

    <div class="buttons">
        <button>Google Search</button>
        <button>I'm Feeling Lucky</button>
    </div>

    <div class="language-options">
        Google offered in: 
        <a href="#">Español</a>
        <a href="#">Français</a>
        <a href="#">Deutsch</a>
        <a href="#">नेपाली</a>
        
    </div>

    
</body>
</html>
