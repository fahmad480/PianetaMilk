<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CarouselModel;

class Home extends BaseController
{
	public function __construct()
	{
		// Mendeklarasikan class ProductModel menggunakan $this->product
		$this->carousel = new CarouselModel();
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
		echo view('layout/header', $data);
		echo view('aboutus', $data);
		echo view('layout/footer', $data);
	}

	public function business()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'Bisnis';
		echo view('layout/header', $data);
		echo view('business', $data);
		echo view('layout/footer', $data);
	}

	public function contactus()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'Hubungi Kami';
		echo view('layout/header', $data);
		echo view('contactus', $data);
		echo view('layout/footer', $data);
	}

	public function history()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'Sejarah Kami';
		echo view('layout/header', $data);
		echo view('history', $data);
		echo view('layout/footer', $data);
	}

	public function philosophy()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'Filosofi';
		echo view('layout/header', $data);
		echo view('philosophy', $data);
		echo view('layout/footer', $data);
	}

	public function commitment()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'Komitmen & Nilai Utama Kami';
		echo view('layout/header', $data);
		echo view('commitment', $data);
		echo view('layout/footer', $data);
	}

	public function ourfarm()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'Peternakan Sapi Kami';
		echo view('layout/header', $data);
		echo view('ourfarm', $data);
		echo view('layout/footer', $data);
	}

	public function cows()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'Sapi-Sapi Kami';
		echo view('layout/header', $data);
		echo view('cows', $data);
		echo view('layout/footer', $data);
	}

	public function subscribe()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['title'] = 'Berlangganan';
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

	//--------------------------------------------------------------------

}
