<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Text Animation</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #222;
            color: #fff;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        .animation-container {
            position: absolute;
            top: -100px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            animation: slide-down 2s ease-in-out forwards, slide-up 2s ease-in-out 3s forwards;
        }

        @keyframes slide-down {
            0% {
                top: -100px;
                opacity: 0;
            }
            100% {
                top: 200px;
                opacity: 1;
            }
        }

        @keyframes slide-up {
            0% {
                top: 200px;
                opacity: 1;
            }
            100% {
                top: -100px;
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div class="animation-container">
        <h1 style="font-size: 80px;">Text Animation</h1>
        
    </div>
</body>
</html>