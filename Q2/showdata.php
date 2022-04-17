<?php
echo "<h1>Data Daerah by Serly Ardila</h1>";
 $prov = array(
    array(
      "provinsi" => "Jawa Timur",
      "kabupaten" => "Surabaya",
      "kecamatan" => "Jambangan",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Surabaya",
        "kecamatan" => "Wonokromo",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Sidoarjo",
        "kecamatan" => "Taman",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Sidoarjo",
        "kecamatan" => "Waru",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Semarang",
        "kecamatan" => "Banyumanik",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Semarang",
        "kecamatan" => "Gunungpati",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Solo",
        "kecamatan" => "Lawiyan",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Solo",
        "kecamatan" => "Pasar Kliwon",
    ),
  );
  
?>
<table border ="1" width = "900" align = "center">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama Provinsi</th>
      <th scope="col">Nama Kabupaten</th>
      <th scope="col">Kecamatan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no =1;
    foreach($prov as $b){
      echo "<tr>";
      echo "<td>".$no."</td>
      <td>".$b['provinsi']."</td>
      <td>".$b['kabupaten']."</td>
      <td>".$b['kecamatan']."</td>";
      echo "</tr>";
      $no++;
    }
    ?>
  </tbody>
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
</table>