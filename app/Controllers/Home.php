<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CarouselModel;
use App\Models\PagesModel;
use App\Models\TransactionsModel;
use App\Models\UserModel;
use App\Models\DeliveryModel;

class Home extends BaseController
{
	public function __construct()
	{
		helper('form');
		// Mendeklarasikan class ProductModel menggunakan $this->product
		$this->carousel = new CarouselModel();
		$this->pages = new PagesModel();
		$this->transactions = new TransactionsModel();
		$this->user = new UserModel();
		$this->delivery = new DeliveryModel();
		/* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
	}

	public function index()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'Home';
		echo view('layout/header', $data);
		echo view('home', $data);
		echo view('layout/footer', $data);
	}

	public function aboutus()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'About Us';
		$data['content'] = $this->pages->getPages("aboutus")['content'];
		echo view('layout/header', $data);
		echo view('aboutus', $data);
		echo view('layout/footer', $data);
	}

	public function business()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'Bisnis';
		$data['content'] = $this->pages->getPages("business")['content'];
		echo view('layout/header', $data);
		echo view('business', $data);
		echo view('layout/footer', $data);
	}

	public function contactus()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'Hubungi Kami';
		$data['content'] = $this->pages->getPages("contactus")['content'];
		echo view('layout/header', $data);
		echo view('contactus', $data);
		echo view('layout/footer', $data);
	}

	public function history()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'Sejarah Kami';
		$data['content'] = $this->pages->getPages("history")['content'];
		echo view('layout/header', $data);
		echo view('history', $data);
		echo view('layout/footer', $data);
	}

	public function philosophy()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'Filosofi';
		$data['content'] = $this->pages->getPages("philosophy")['content'];
		echo view('layout/header', $data);
		echo view('philosophy', $data);
		echo view('layout/footer', $data);
	}

	public function commitment()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'Komitmen & Nilai Utama Kami';
		$data['content'] = $this->pages->getPages("commitment")['content'];
		echo view('layout/header', $data);
		echo view('commitment', $data);
		echo view('layout/footer', $data);
	}

	public function ourfarm()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'Peternakan Sapi Kami';
		$data['content'] = $this->pages->getPages("ourfarm")['content'];
		echo view('layout/header', $data);
		echo view('ourfarm', $data);
		echo view('layout/footer', $data);
	}

	public function cows()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'Sapi-Sapi Kami';
		$data['content'] = $this->pages->getPages("cows")['content'];
		echo view('layout/header', $data);
		echo view('cows', $data);
		echo view('layout/footer', $data);
	}

	public function subscribe()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'Berlangganan';
		$data['content'] = $this->pages->getPages("subscribe")['content'];
		echo view('layout/header', $data);
		echo view('subscribe', $data);
		echo view('layout/footer', $data);
	}

	public function zipcheck()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'Cek Ketersediaan Lokasi Anda';
		$data['additional_script'] = <<<EOF
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" charset="utf-8"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#zipsubmit").click(function() {
					$.ajax({
						type: 'POST',
						url: 'action/cek_zip',
						data: {
							zip: $("#zip").val()
						},
						cache: false,
						success: function(data) {
							$('#tampil').html(data);
						}
					});
				});
			});
		</script>
		EOF;
		echo view('layout/header', $data);
		echo view('zipcheck', $data);
		echo view('layout/footer', $data);
	}

	public function info()
	{
		$input = $this->request->getVar();
		switch ($input['id']) {
			case "1":
				$judul = "Terima Kasih";
				$pesan = "Terima kasih telah percaya dengan kami dan berlangganan di Pianeta Milk, produk yang kamu inginkan akan kami kirim ke alamat kamu berdasarkan jadwal yang kamu pilih, jangan segan segan untuk menghubungi kamu jika ada sesuatu yang ingin kamu tanyakan";
				break;
			case "2":
				$judul = "Terima Kasih";
				$pesan = "Mungkin lain kali ya ^_^, kami tunggu kabar baik dari kamu";
				break;
			case "3":
				$judul = "Gagal";
				$pesan = "Kamu memiliki langganan aktif sebelumnya, jika kamu ingin berubah produk atau berhanti berlangganan, silahkan menguhubungi admin untuk informasi lebih lanjut";
				break;
			case "4":
				$judul = "Gagal";
				$pesan = "Kamu tidak memiliki akses ke halaman ini";
				break;
		}
		$data['pesan'] = $pesan;
		$data['title'] = $judul;
		echo view('layout/header', $data);
		echo view('info', $data);
		echo view('layout/footer', $data);
	}

	public function account_update()
	{
		$data['title'] = "Ubah Data Akun";
		echo view('layout/header', $data);
		echo view('account_update', $data);
		echo view('layout/footer', $data);
	}

	public function account_updates()
	{
		$input = $this->request->getVar();

		if ($this->request->getMethod() !== 'post') {
			return redirect()->to(base_url('account_update?status=danger&message=Akun+Gagal+Diperbaharui'));
		}

		$validated = $this->validate([
			'profile' => 'uploaded[profile]|mime_in[profile,image/jpg,image/jpeg,image/gif,image/png]|max_size[profile,4096]'
		]);

		if ($validated == FALSE) {
			$data = [
				'email' => $input['email'],
				'full_name' => $input['fullname'],
				'address' => $input['alamat']
			];
		} else {

			$avatar = $this->request->getFile('profile');
			$avatar->move(ROOTPATH . 'public/assets/img/profile/upload/' . user()->id . '/');

			$data = [
				'email' => $input['email'],
				'full_name' => $input['fullname'],
				'address' => $input['alamat'],
				'profile_pict' => '/assets/img/profile/upload/' . user()->id . '/' . $avatar->getName()
			];
		}

		if ($this->user->update_user($data, user()->id)) {
			return redirect()->to(base_url('account_update?status=success&message=Akun+Berhasil+Diperbaharui'));
		} else {
			return redirect()->to(base_url('account_update?status=danger&message=Akun+Gagal+Diperbaharui'));
		}
	}

	public function history_trx()
	{
		$data['title'] = "Sejarah Transaksi";
		$data['transactions'] = $this->transactions->getTransactions(user()->id, "buyer");
		$data['delivery'] = $this->delivery->getMyDelivery();
		echo view('layout/header', $data);
		echo view('history_trx', $data);
		echo view('layout/footer', $data);
	}

	//--------------------------------------------------------------------

}
