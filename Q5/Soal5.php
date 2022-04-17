<?php

error_reporting(0);

include "./SpreadsheetReader.php";

$reader = new SpreadsheetReader('datamahasiswa.xlsx');
$sheets = $reader->Sheets();

$ambil_sheet = 0;
$reader->ChangeSheet($ambil_sheet); ?>

<style>
    	th {
	  background-color: palevioletred;
	  color: white;
        }

    table, th, td {border:1px solid white}
    th, td {
        padding:5px
	  border-bottom: 1px solid #ddd;
      border: 1px solid palevioletred;}
</style>

<center>
    <h1> Data Mahasiswa by Serly Ardila
    </h1>
    </center>
	<table align= "center">
    <tr>
        <th width="60">
            <b>No.</b>
        </th>
        <th width="100">
            <b>Nim</b>
        </th>
        <th width="200">
            <b>Nama</b>
        </th>
        <th width="90">
            <b>Jenis Kelamin</b>
        </th>
        <th width="200">
            <b>Program studi</b>
        </th>
        <th width="130">
            <b>Alamat</b>
        </th>
        <th width="75">
            <b>Kota</b>
        </th>
        <th width="65">
            <b>Email</b>
        </th>
    </tr>
    <?php foreach($reader as $i => $kolom):
        if ($i == 0 || (empty($kolom[0]) && empty($kolom[1]) && empty($kolom[2])))
            continue ?>
            <tr>
                <th><?=$kolom[0]?></th>
                <td><?=$kolom[1]?></td>
                <td><?=$kolom[2]?></td>
                <td><?=$kolom[3]?></td>
                <td><?=$kolom[4]?></td>
                <td><?=$kolom[5]?></td>
                <td><?=$kolom[6]?></td>
                <td><?=$kolom[7]?></td></tr>
    <?php endforeach ?>
</table>