<?php
  $koneksi = mysqli_connect("localhost","root","root","HMJ_TI_Bebdahara");
  if (!$koneksi) {
    echo "string";
  }

  //show saldo
  $qsaldo=mysqli_query($koneksi,"SELECT * FROM tabungan");
  $saldo=mysqli_fetch_array($qsaldo);

  $qsaldopakai=mysqli_query($koneksi,"SELECT * FROM uang_ph_dipakai");
  $saldopakai=mysqli_fetch_array($qsaldopakai);

  //show saldo ph
  $qsaldoph=mysqli_query($koneksi,"SELECT * FROM tabungan_PH");
  if ($qsaldoph) {
    $totSaldoPh=0;
    while ($saldoph=mysqli_fetch_array($qsaldoph)) {
      $totSaldoPh=$totSaldoPh+$saldoph[1];
    }
  }else {
    echo "string";
  }
 ?>
