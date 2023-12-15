
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1920, initial-scale=1.0">
    <title><?php $titulo ?? "Default" ?></title>
	<link rel="stylesheet" href="/assets/css/styles.css">
    <script src="/assets/js/jquery-3.7.1.min.js"></script>
</head>

<body>
    <div class="messages">
        <?php
            foreach ($error_messages as $message) {
                echo "
                <div class='message error'>
                    <button class='btn danger-outline' onclick='this.parentElement.remove()'>x</button>
                    <p class='error-message'>$message</p>
                </div>";
            }
            foreach ($messages as $message) {
                echo "                    
                <div class='message success'>
                    <button class='close-btn' onclick='this.parentElement.remove()'>x</button>
                    <p>$message</p>
                </div>
                ";
            }
        ?>
    </div>
    <div class="content middle">
        <?php if (isset($layout['content'])) include $layout['content'] ?>
    </div>
</body>
