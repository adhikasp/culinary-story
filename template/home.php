<?php $title = 'Read other\'s story' ?>

<?php ob_start() ?>
    <div class="container">
        <div class="row">
            <img src="/img/judul.png" alt="judul" id="judul">
        </div>
        <div class="keterangan">
            <p>
                Bagikan ceritamu untuk referensi rumah makan teman-teman kalian :D <br>
                Bagi kalian yang suka kulineran tapi gak tahu harus kemana, bisa cari referensi rumah makan disini.<br>
            </p>
        </div>
        <div class="row">
            <form id="form-depan" method="POST" action="/index.php/cerita">
                <div class="form-group">
                    <label class="control-label" for="nama_rm">Nama Rumah Makan</label>
                    <div class="">
                      <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="text" class="form-control" name="nama_rm">
                      </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label" for="review">Ceritamu</label>
                    <textarea class="form-control" rows="4" cols="50" name="review"></textarea><br>
                </div>
                <input class="btn buatanku" type="submit" value="Bagikan" id="tombol">
                <a href="/index.php/cerita" class="button kanan"> Lihat Cerita Kami</a>
            </form>
        </div>
    </div>

<?php $body = ob_get_clean() ?>

<?php include 'layout.php' ?>