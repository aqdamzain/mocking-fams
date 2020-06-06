<div class="tour-title not-fixed center-image">
            
    <img class="w-100 h-100" src="<?php echo base_url() ?>assets/images/search.jpg" alt="">
    <h1 class="white text-center front shadow-text center-text">Find your Tour</h1>  
    <img class="curve2 front" src="<?php echo base_url() ?>assets/svgs/curve.svg" alt="">
    
</div>

<section>
    <div class="container mt-3">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">ID Booking</th>
        <th scope="col">Nama</th>
        <th scope="col">Nomor HP</th>
        <th scope="col">Tujuan Trip</th>
        <th scope="col">Tanggal Berangkat</th>
        <th scope="col">Jumlah Orang</th>
        <th scope="col">Waktu Booking</th>
        <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($books as $book) : ?>
        <tr>
            <th scope="row"><?php echo $book->id_pemesan ?></th>
            <td><?php echo $book->nama_pemesan ?></td>
            <td><?php echo $book->no_hp ?></td>
            <td><?php echo $book->nama_trip ?></td>
            <td><?php echo $book->tanggal_trip ?></td>
            <td><?php echo $book->jumlah_peserta ?></td>
            <td><?php echo $book->waktu_pemesanan ?></td>
            <td><?php echo $book->status_pemesanan ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    </div>
</section>