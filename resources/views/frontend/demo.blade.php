<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Text Animation</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #222;
            color: #fff;
            overflow: hidden;
        }

        .animation-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .text-item {
            font-size: 24px;
            opacity: 0;
            transform: translateY(-100%);
        }
    </style>
</head>

<body>
    <div class="animation-container">
        <div class="text-item">Text 1</div>
        <div class="text-item">Text 2</div>
        <div class="text-item">Text 3</div>
        <!-- Add more text items as needed -->
    </div>
    <script>
        function animateTextItems(index) {
            if (index < textItems.length) {
                setTimeout(() => {
                    textItems[index].style.transform = 'translateY(0)';
                    textItems[index].style.opacity = 1;
                    animateTextItems(index + 1);
                }, 500); // Adjust the delay (in milliseconds) as needed
            }
        }

        animateTextItems(0);
    </script>
</body>

</html>