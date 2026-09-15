<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandbox</title>
</head>
<body>
    
<a style="text-decoration: none;" href="../">Dashboard</a>
<br>

<p id="greetingText">Say Word!</p>
<button id="toggleBtn">Toggle</button>

<script>
    let toggle = 1;
    document.getElementById('toggleBtn').addEventListener('click', () => {
        toggle = toggle ? 0 : 1;
        document.getElementById('greetingText').textContent = toggle ? "Say Word!" : "Say Hello!";
    });
</script>

</body>
</html>