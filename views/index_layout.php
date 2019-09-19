<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <title>Twat</title>
</head>
<body>
    <div class="container px-5">
        <div class="container">
            <?php foreach ($result as $row): ?>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://robohash.org/ <?= $row ['name'] ?>" class="card-img" alt="Unlucky. Rikti bild pöjk.">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">
                            <?= $row ['name'] ?>
                            <small class="pl-4">
                            <?= $row ['created_at'] ?>
                            </small>
                        </h5>
                        <a href="tweet.php?id=<?= $row['id'] ?>">
                        <p class="card-text"> <?= $row ['body'] ?> </p>
                        </a>
                        <p class="card-text"><small class="text-muted"> <?= $row ['updated_at'] ?> </small></p>
                        <button class="button button1">Like</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
</body>