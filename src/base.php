<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Test</title>
</head>

<body>
    <h1>
        <?= slot('title') ?>
    </h1>
    <main>
        <?= slot('content') ?>
    </main>
</body>

</html>
