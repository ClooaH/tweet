<?php include 'head.php' ?>
<?php include 'navbar.php' ?>
    <div class="container px-5">
        <div class="container">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="https://robohash.org/<?= $result ['name'] ?>" class="card-img" alt="Unlucky. Rikti bild pöjk.">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">
                        <?= $result ['name'] ?>
                        <small class="pl-4">
                        <?= $result ['created_at'] ?>
                        </small>
                    </h5>
                    <p class="card-text"> <?= $result ['body'] ?> </p>
                    <p class="card-text">
                        <small class="text-muted">
                            <?= $result ['updated_at'] ?>
                        </small>
                    </p>
                    <button class="button button1">Like</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>