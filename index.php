<?php

$m1 = ['NIM' => '0110120204', 'nama' => 'Andre', 'nilai' => 90];
$m2 = ['NIM' => '0110120205', 'nama' => 'Bagus', 'nilai' => 49];
$m3 = ['NIM' => '0110120206', 'nama' => 'Putra', 'nilai' => 55];
$m4 = ['NIM' => '0110120207', 'nama' => 'Budi', 'nilai' => 68];
$m5 = ['NIM' => '0110120208', 'nama' => 'Ani', 'nilai' => 76];
$m6 = ['NIM' => '0110120209', 'nama' => 'Iman', 'nilai' => 91];
$m7 = ['NIM' => '0110120200', 'nama' => 'Ruslan', 'nilai' => 94];
$m8 = ['NIM' => '0110120201', 'nama' => 'Mali', 'nilai' => 43];

$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8];

$ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

$jml_mahasiswa - count($mahasiswa);
$jml_nilai = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($mahasiswa, 'nilai' );
$nilai_tertinggi = max($jml_nilai);
$nilai_terendah = min($jml_nilai);
$rata_nilai =  $jml_nilai / $total_nilai;

$keterangan = [
    'Jumlah Mahasiswav ' => $jml_mahasiswa,
    'Nilai Tertinggi ' => $nilai_tertinggi,
    'Nilai Terendah ' => $nilai_terendah,
    'Rata-rata Nilai ' => $rata_nilai
]

?>

<table border = "1px" width="100%">
    <thead>
        <?php
            foreach($ar_judul as $judul){
        ?>
            <th><?= $judul ?></th>
        <?php } ?>
    </thead>
    <tbody>
        <?php
            $no = 1;
            foreach($mahasiswa as $mhs){
                $ket = ($mhs['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';

                // Grade
                if($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = 'A';
                else if ($mhs['nilai'] >= 75 && $mhs['nilai'] <= 84) $grade = 'B';
                else if ($mhs['nilai'] >= 60 && $mhs['nilai'] <= 74) $grade = 'C';
                else if ($mhs['nilai'] >= 30 && $mhs['nilai'] <= 59) $grade = 'D';
                else if ($mhs['nilai'] >= 0 && $mhs['nilai'] <= 20) $grade = 'E';
                else $grade = '';
        ?>
            
            <tr>
                <td><?= $no ?></td>
                <td><?= $mhs['NIM']?></td>
                <td><?= $mhs['nama']?></td>
                <td><?= $mhs['nilai']?></td>
                <td><?= $ket ?></td>
            </tr>
        <?php $no++; }?>
    </tbody>
    <tfoot>
        <?php
            foreach($keterangan as $ket => $hasil){
        ?>
        <tr>
            <th>
                <?= $ket ?>
            </th>
            <th>
                <?= $hasil ?>
            </th>
        </tr>
        <?php } ?>
    </tfoot>
</table>