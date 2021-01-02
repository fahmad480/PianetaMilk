<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CarouselModel;
use App\Models\ProductsModel;
use App\Models\ReviewsModel;
use App\Models\TransactionsModel;

class Products extends BaseController
{
	public function __construct()
	{
		// Mendeklarasikan class ProductModel menggunakan $this->product
		$this->carousel = new CarouselModel();
		$this->products = new ProductsModel();
		$this->reviews = new ReviewsModel();
		$this->transactions = new TransactionsModel();
		/* Catatan:
		Apa yang ada di dalam function construct ini nantinya bisa digunakan
		pada function di dalam class Product 
		*/
	}

	public function index()
	{
		$data['carousel'] = $this->carousel->getCarousel();
		$data['products'] = $this->products->getProducts();
		$data['title'] = 'Produk Kami';
		echo view('layout/header', $data);
		echo view('products/index', $data);
		echo view('layout/footer', $data);
	}

	public function product($id)
	{
		$data = $this->products->getProducts($id)[0];
		$data['review_data'] = $this->products->getAllReview($id);
		$data['countStars'] = $this->products->getCountStars($id);
		if (logged_in()) {
			$data['alreadyReview'] = $this->reviews->checkMyAccount($id, user()->id);
			$data['alreadyBuyOrNot'] = $this->transactions->alreadyBuyOrNot($id);
		}
		$data['additional_css'] = <<<EOF
		<style>
		.rate {
			float: left;
		}
		.rate:not(:checked) > input {
			display:none;
		}
		.rate:not(:checked) > label {
			float:right;
			width:1em;
			overflow:hidden;
			white-space:nowrap;
			cursor:pointer;
			font-size:30px;
			color:#b5b5b5;
		}
		.rate:not(:checked) > label:before {
			content: '★ ';
		}
		.rate > input:checked ~ label {
			color: #000000;    
		}
		.rate:not(:checked) > label:hover,
		.rate:not(:checked) > label:hover ~ label {
			color: #000000;  
		}
		.rate > input:checked + label:hover,
		.rate > input:checked + label:hover ~ label,
		.rate > input:checked ~ label:hover,
		.rate > input:checked ~ label:hover ~ label,
		.rate > label:hover ~ input:checked ~ label {
			color: #000000;
		}
		</style>
EOF;
		$data['additional_script'] = <<<EOF
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" charset="utf-8"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#stars-all").click(function() {
					$.ajax({
						type: 'POST',
						url: '/action/get_review',
						data: {
							id_product: $id,
							stars: 0
						},
						cache: false,
						success: function(data) {
							$('#review_frame').html(data);
						}
					});
				});
				$("#stars-5").click(function() {
					$.ajax({
						type: 'POST',
						url: '/action/get_review',
						data: {
							id_product: $id,
							stars: 5
						},
						cache: false,
						success: function(data) {
							$('#review_frame').html(data);
						}
					});
				});
				$("#stars-4").click(function() {
					$.ajax({
						type: 'POST',
						url: '/action/get_review',
						data: {
							id_product: $id,
							stars: 4
						},
						cache: false,
						success: function(data) {
							$('#review_frame').html(data);
						}
					});
				});
				$("#stars-3").click(function() {
					$.ajax({
						type: 'POST',
						url: '/action/get_review',
						data: {
							id_product: $id,
							stars: 3
						},
						cache: false,
						success: function(data) {
							$('#review_frame').html(data);
						}
					});
				});
				$("#stars-2").click(function() {
					$.ajax({
						type: 'POST',
						url: '/action/get_review',
						data: {
							id_product: $id,
							stars: 2
						},
						cache: false,
						success: function(data) {
							$('#review_frame').html(data);
						}
					});
				});
				$("#stars-1").click(function() {
					$.ajax({
						type: 'POST',
						url: '/action/get_review',
						data: {
							id_product: $id,
							stars: 1
						},
						cache: false,
						success: function(data) {
							$('#review_frame').html(data);
						}
					});
				});
				$("#submitReview").click(function() {
					var radioValue = $("input[name='rate']:checked").val();
					var review = $('textarea#review').val();
					if(radioValue){
						$.ajax({
							type: 'POST',
							url: '/action/send_review',
							data: {
								id_product: $id,
								stars: radioValue,
								review: review
							},
							cache: false,
							success: function(data) {
								$('#pesanSendReview').html(data);
							}
						});
					} else {
						alert("Silahkan pilih nilai bintang");
					}
				});
			});
		</script>
		EOF;

		// if (empty($data['id'])) {
		// 	throw new \CodeIgniter\Exceptions\PageNotFoundException('Barang Tidak ditemukan');
		// }

		echo view('layout/header', $data);
		echo view('products/product', $data);
		echo view('layout/footer', $data);
	}

	public function subscribe($id)
	{
		$data = $this->products->getProducts($id)[0];
		$data['title'] = 'Berlangganan ' . $data['title'];
		$data['additional_css'] = <<<EOF
<style>
		.img-radiobutton {
			filter: grayscale(100%);
		}
		
		input[type=radio].radiobutton-img {
			display: none;
		}
		
		.img-radiobutton:hover {
			filter: grayscale(0%);
			cursor: pointer;
		}
		
		.img-radiobutton:active {
			opacity:0.4;
			cursor: pointer;
		}
		
		input[type=radio].radiobutton-img:checked + label > img {
			filter: grayscale(0%);
		}
	</style>
EOF;
		$data['additional_script'] = <<<EOF
<script>

	</script>
EOF;

		echo view('layout/header', $data);
		echo view('products/subscribe', $data);
		echo view('layout/footer', $data);
	}
	//--------------------------------------------------------------------

}
