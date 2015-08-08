<?php $title = 'Write your story' ?>

<?php ob_start() ?>
    <div class="container">
        <div class="row">
            <img src="/img/judul.png" alt="judul" id="judul">
        </div>
    <a href="/index.php/home" class="btn buatanku" id="panjang">Share Ceritamu</a>
    <div class="row">
        <?php while($review = $reviews->fetch()): ?>
            <div class="col-md-12">
                <div class="post">
                    <div class="nama-rm"><p>@<?= $review['nama_rm'] ?></p></div>
                    <div class="review"><p><?= $review['review'] ?></p></div>
                    <div class="waktu"><?= $review['timestamp'] ?></div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    </div>
<?php $body = ob_get_clean() ?>

<?php include 'layout.php' ?>