<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>DATA SHOP</title>

</head>
<body>
<center><h1>DATA SHOP</h1></center>
    <table stytle="margin:20px auto;" border="1">
        <tr>
            <td>Kode</td>
            <td>Kode_Toko</td>
            <td>Link</td>
            <td>Link2</td>
            <td>Link3</td>
            <td>Judul</td>
            <td>Judul_Toko</td>
            <td>Status_br</td>
            <td>Harga</td>
            <td>Harga_Promo</td>
            <td>Harga_Normal</td>
            <td>Mark_Up</td>
            <td>Suplier</td>
            <td>Suplier2</td>
            <td>Suplier3</td>
            <td>Images</td>
            <td>Deskripsi</td>
            <td>Gambar1</td>
            <td>Gambar2</td>
            <td>Posted</td>
            <td>MediaId</td>

        </tr>
        <?php
        $no = 1;
        foreach($datashop as $u){
            ?>
            <tr>
            <td><?php echo $u->kode;?></td>
            <td><?php echo $u->kode_toko;?></td>
            <td><?php echo $u->link;?></td>
            <td><?php echo $u->link2;?></td>
            <td><?php echo $u->link3;?></td>
            <td><?php echo $u->judul;?></td>
            <td><?php echo $u->judul_toko;?></td>
            <td><?php echo $u->status_br;?></td>
            <td><?php echo $u->harga;?></td>
            <td><?php echo $u->harga_promo;?></td>
            <td><?php echo $u->harga_normal;?></td>
            <td><?php echo $u->mark_up;?></td>
            <td><?php echo $u->suplier;?></td>
            <td><?php echo $u->suplier2;?></td>
            <td><?php echo $u->suplier3;?></td>
            <td><?php echo $u->images;?></td>
            <td><?php echo $u->deskripsi;?></td>
            <td><?php echo $u->gambar1;?></td>
            <td><?php echo $u->gambar2;?></td>
            <td><?php echo $u->posted;?></td>
            <td><?php echo $u->mediaId;?></td>
            <!-- <td>
                <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                    <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
</td> -->
        </tr>
        <?php } ?>

</table>
</body>
<html>            