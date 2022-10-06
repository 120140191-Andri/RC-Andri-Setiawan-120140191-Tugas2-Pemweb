<?php
    
    $produk = array(
        array(
            'id' => '1',
            'nama' => 'Inova Reborn',
            'gambar' => 'inova.png',
            'deskripsi' => 'ini inova, Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque nulla quia accusantium aspernatur perferendis dolorem consequatur aliquid fugit, quo, temporibus at magni libero eaque delectus est dolores placeat expedita. Dolore ipsam atque quod laboriosam provident eaque ipsum suscipit sint, quas blanditiis saepe minus beatae voluptates ex cum iure illum ab! Similique dolorem accusantium modi cum amet reprehenderit iusto. Nam inventore perspiciatis magnam adipisci ratione, sed saepe rerum vitae cupiditate molestias id explicabo assumenda molestiae necessitatibus quod porro? Perspiciatis earum ex sunt exercitationem dolores reiciendis quo impedit mollitia id dolorum doloremque neque qui obcaecati ullam ab cupiditate iste, ea perferendis molestias.',
        ),
        array(
            'id' => '2',
            'nama' => 'Terios 2018',
            'gambar' => 'terios.png',
            'deskripsi' => 'ini terios, Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque nulla quia accusantium aspernatur perferendis dolorem consequatur aliquid fugit, quo, temporibus at magni libero eaque delectus est dolores placeat expedita. Dolore ipsam atque quod laboriosam provident eaque ipsum suscipit sint, quas blanditiis saepe minus beatae voluptates ex cum iure illum ab! Similique dolorem accusantium modi cum amet reprehenderit iusto. Nam inventore perspiciatis magnam adipisci ratione, sed saepe rerum vitae cupiditate molestias id explicabo assumenda molestiae necessitatibus quod porro? Perspiciatis earum ex sunt exercitationem dolores reiciendis quo impedit mollitia id dolorum doloremque neque qui obcaecati ullam ab cupiditate iste, ea perferendis molestias.',
        ),
        array(
            'id' => '3',
            'nama' => 'Pajero Dakar',
            'gambar' => 'pajero.png',
            'deskripsi' => 'ini pajero, Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque nulla quia accusantium aspernatur perferendis dolorem consequatur aliquid fugit, quo, temporibus at magni libero eaque delectus est dolores placeat expedita. Dolore ipsam atque quod laboriosam provident eaque ipsum suscipit sint, quas blanditiis saepe minus beatae voluptates ex cum iure illum ab! Similique dolorem accusantium modi cum amet reprehenderit iusto. Nam inventore perspiciatis magnam adipisci ratione, sed saepe rerum vitae cupiditate molestias id explicabo assumenda molestiae necessitatibus quod porro? Perspiciatis earum ex sunt exercitationem dolores reiciendis quo impedit mollitia id dolorum doloremque neque qui obcaecati ullam ab cupiditate iste, ea perferendis molestias.',
        ),
        array(
            'id' => '4',
            'nama' => 'Land Cruiser',
            'gambar' => 'lc.png',
            'deskripsi' => 'ini Land Cruiser, Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque nulla quia accusantium aspernatur perferendis dolorem consequatur aliquid fugit, quo, temporibus at magni libero eaque delectus est dolores placeat expedita. Dolore ipsam atque quod laboriosam provident eaque ipsum suscipit sint, quas blanditiis saepe minus beatae voluptates ex cum iure illum ab! Similique dolorem accusantium modi cum amet reprehenderit iusto. Nam inventore perspiciatis magnam adipisci ratione, sed saepe rerum vitae cupiditate molestias id explicabo assumenda molestiae necessitatibus quod porro? Perspiciatis earum ex sunt exercitationem dolores reiciendis quo impedit mollitia id dolorum doloremque neque qui obcaecati ullam ab cupiditate iste, ea perferendis molestias.',
        ),
        array(
            'id' => '5',
            'nama' => 'Range Rover',
            'gambar' => 'rrv.png',
            'deskripsi' => 'ini Range Rover, Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque nulla quia accusantium aspernatur perferendis dolorem consequatur aliquid fugit, quo, temporibus at magni libero eaque delectus est dolores placeat expedita. Dolore ipsam atque quod laboriosam provident eaque ipsum suscipit sint, quas blanditiis saepe minus beatae voluptates ex cum iure illum ab! Similique dolorem accusantium modi cum amet reprehenderit iusto. Nam inventore perspiciatis magnam adipisci ratione, sed saepe rerum vitae cupiditate molestias id explicabo assumenda molestiae necessitatibus quod porro? Perspiciatis earum ex sunt exercitationem dolores reiciendis quo impedit mollitia id dolorum doloremque neque qui obcaecati ullam ab cupiditate iste, ea perferendis molestias.',
        ),
        array(
            'id' => '6',
            'nama' => 'BMW X4',
            'gambar' => 'x4.png',
            'deskripsi' => 'ini x4, Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque nulla quia accusantium aspernatur perferendis dolorem consequatur aliquid fugit, quo, temporibus at magni libero eaque delectus est dolores placeat expedita. Dolore ipsam atque quod laboriosam provident eaque ipsum suscipit sint, quas blanditiis saepe minus beatae voluptates ex cum iure illum ab! Similique dolorem accusantium modi cum amet reprehenderit iusto. Nam inventore perspiciatis magnam adipisci ratione, sed saepe rerum vitae cupiditate molestias id explicabo assumenda molestiae necessitatibus quod porro? Perspiciatis earum ex sunt exercitationem dolores reiciendis quo impedit mollitia id dolorum doloremque neque qui obcaecati ullam ab cupiditate iste, ea perferendis molestias.',
        ),
    );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gaya.css">
    <title>Tampil Daftar Produk</title>
</head>
<body>
    <h3>Daftar produk</h3>

    <div id="bungkus-produk">

        <?php for($i = 0; $i < count($produk); $i++){ ?>

        <form action="detail-produk.php" method="get">
            <div class="produk baris">
                <div class="foto baris">
                    <img src="<?= $produk[$i]['gambar'] ?>">
                </div>
                <div class="kolom">
                    <p class='nama'><?= $produk[$i]['nama'] ?></p>
                    <input type="hidden" name="id_produk" value="<?= $produk[$i]['id'] ?>">
                    <input type="hidden" name="nama" value="<?= $produk[$i]['nama'] ?>">
                    <input type="hidden" name="deskripsi" value="<?= $produk[$i]['deskripsi'] ?>">
                </div>
                <div class="detail-btn kolom">
                    <input type="submit" value="detail">
                </div>
            </div>
        </form>

        <?php } ?>

    </div>
</body>
</html>