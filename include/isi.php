<?php 


		$page = $_GET['page'];
		$aksi = $_GET['aksi'];

		//Aksi pada pelanggan
		if ($page == "pelanggan") {
			if ($aksi == "") {
				include "page/pelanggan/pelanggan.php";
			}

			if ($aksi == "tambah") {
				include "page/pelanggan/tambah.php";
			}

			if ($aksi == "ubah") {
				include "page/pelanggan/ubah.php";
			}

			if ($aksi == "hapus") {
				include "page/pelanggan/hapus.php";
			}
		}

		//Aksi pada Pengguna
		if ($page == "pengguna") {
			if ($aksi == "") {
				include "page/pengguna/pengguna.php";
			}

			if ($aksi == "tambah") {
				include "page/pengguna/tambah.php";
			}

			if ($aksi == "ubah") {
				include "page/pengguna/ubah.php";
			}

			if ($aksi == "hapus") {
				include "page/pengguna/hapus.php";
			}
		}

		//Aksi pada Laundry
		if ($page == "laundry") {
			if ($aksi == "") {
				include "page/laundry/laundry.php";
			}

			if ($aksi == "tambah") {
				include "page/laundry/tambah.php";
			}

			if ($aksi == "hapus") {
				include "page/laundry/hapus.php";
			}

			if ($aksi == "lunas") {
				include "page/laundry/lunas.php";
			}
		}

		//paket laundry
		if ($page == "paket") {
			if ($aksi == "") {
				include "page/paket/paket.php";
			}

			if ($aksi == "tambah") {
				include "page/paket/tambah.php";
			}

			if ($aksi == "ubah") {
				include "page/paket/ubah.php";
			}

			if ($aksi == "hapus") {
				include "page/paket/hapus.php";
			}

			if ($aksi == "lunas") {
				include "page/paket/lunas.php";
			}
		}


		// Aksi pada Transaksi
		if ($page == "transaksi") {
			if ($aksi == "") {
				include "page/transaksi/transaksi.php";
			}

			if ($aksi == "tambah") {
				include "page/transaksi/tambah.php";
			}

			if ($aksi == "ubah") {
				include "page/transaksi/ubah.php";
			}

			if ($aksi == "hapus") {
				include "page/transaksi/hapus.php";
			}

			if ($aksi == "lunas") {
				include "page/transaksi/lunas.php";
			}
		}

		if ($page == "") {
			include "home.php";
		}

 ?>