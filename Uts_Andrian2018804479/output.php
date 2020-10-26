<?php

 

$nama   = $_POST['nama'];

$nim    = $_POST['nim'];

$matkul  = $_POST['matkul'];

$absen  = $_POST['absen'];

$tugas  = $_POST['tugas'];

$uts    = $_POST['uts'];

$uas    = $_POST['uas'];

 

 

//menghitung nilai dari yang tadi kita input

$nilai_absen = $absen * 0.15;

$nilai_tugas = $tugas * 0.2;

$nilai_uts   = $uts * 0.25;

$nilai_uas   = $uas * 0.3;

 

//penjumlahan dari nilai-nilai yang sudah diinput

$nilai_akhir = $nilai_absen + $nilai_tugas + $nilai_uts + $nilai_uas;

 

//menampilkan grade berdasarkan hasil nilai akhir

if ($nilai_akhir>=80)

{

$grade = ("A") and $i = ("LULUS");

}

elseif ($nilai_akhir>=70)

{

$grade = ("B") and $i = ("LULUS");

}

elseif ($nilai_akhir>=50)

{

$grade = ("C") and $i = ("LULUS");

}

elseif ($nilai_akhir>=40)

{

$grade = ("D") and $i = ("TIDAK LULUS");

}

else

{

$grade = ("E") and $i = (" TIDAK LULUS");

}

 

echo

"

<h1>Hitung Nilai Akhir Mahasiswa</h1>

 

Nama Mahasiswa : $nama <br>

NIM : $nim <br>

Mata Kuliah : $matkul <br>

Nilai Absen : <b>$nilai_absen</b><br>

Nilai Tugas : <b>$nilai_tugas</b><br>

Nilai UTS   : <b>$nilai_uts</b><br>

Nilai UAS   : <b>$nilai_uas</b><br>

 

<h4>Nilai Akhir : $nilai_akhir</h4>

<h4>Grade : $grade</h4>

<h4>Keterangan : $i</h4>

";

 

?>