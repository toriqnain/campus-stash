<footer id="footer" style="background-color:#00ccff">
	<div class="container">
		<div class="row">

			<div class="col-md-3">
				<div class="footer-widget">
					<h3 class="footer-title" style="color:black">Menu :</h3>
					<div class="widget">
						<h5 style="color:#134281">
							<ul class="contact-social">
								<li><a href="{{ url('') }}" style="background-color:#134281">
										<i class="fa fa-home"></i></a></li> Beranda
							</ul>
							<ul class="contact-social">
								<li><a href="{{ route('profilblog.list') }}" style="background-color:#134281">
										<i class="fa fa-user-circle"></i></a></li> Profil
							</ul>
							<ul class="contact-social">
								<li><a href="{{ route('blog.list') }} " style="background-color:#134281">
										<i class="fa fa-paste"></i></a></li> Berita
							</ul>

							<ul class="contact-social">
								<li><a href="{{ route('galeriblog.list') }}" style="background-color:#134281">
										<i class="fa fa-image"></i></a></li> Galeri
							</ul>

							<ul class="contact-social">
								<li><a href="{{ route('dokumen.tampil_dokumen') }}" style="background-color:#134281">
										<i class="fa fa-file"></i></a></li> Dokumen
							</ul>

							<ul class="contact-social">
								<li><a href="{{ route('pengaduanblog.isi') }}" style="background-color:#134281">
										<i class="fa fa-exclamation-circle"></i></a></li> Pengaduan
							</ul>
						</h5>


					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="footer-widget">
					<div class="title">
						<h3 class="footer-title" style="color:black">Kategori Berita :</h3>
					</div>
					<div class="category-widget">

						@foreach($category_widget as $result2)
						<li style="color:#134281">
							<a href="{{ route('blog.category', $result2->slug)}}" style="color:#134281">{{ $result2 -> namec}}
								<span style="color:black"></span>
							</a>
						</li>
						@endforeach

					</div>
				</div>

			</div>

			<div class="col-md-3">
				<div class="footer-widget">
					<h3 class="footer-title" style="color:black">Hubungi :</h3>
					<div class="footer-widget">

						<ul>
							<li><i class="fa fa-phone" style="color:#134281"></a></i><a style="color:#134281"><b>&nbsp;Telepon :</b></a></li>
							<li><a href="#" style="color:#134281">123-456-789</a></li>
							<br>
							<li><i class="fa fa-envelope" style="color:#134281"></i><a style="color:#134281"><b>&nbsp;Email :</b></li>
							<li><a href="https://mail.google.com/mail/u/0/#inbox?compose=new" style="color:#134281">adminbojonegara@serangkab.com</a></li>
							<br>
							<li><i class="fa fa-map-marker" style="color:#134281"></i><a style="color:#134281"><b>&ensp;Alamat :</b></li>
							<li><a href="https://goo.gl/maps/FKs6R5rboTjMy9Ze8" style="color:#134281">Jl. Raya Bojonegara No.Desa, Bojonegara, Cilegon, Kabupaten Serang, Banten 42455 </a></li>
						</ul>

					</div>
				</div>
			</div>


			<div class="col-md-3">
				<div class="footer-widget">
					<h3 class="footer-title" style="color:black">Ikuti :</h3>
					<ul class="contact-social">
						<li><a href="https://web.facebook.com/" style="background-color:#134281"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/" style="background-color:#134281"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://youtube.com" style="background-color:#134281"><i class="fa fa-youtube"></i></a></li>
						<li><a href="https://instagram.com" style="background-color:#134281"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
		<div class="footer-bottom row">
			<div class="footer-copyright">
				<a href="" style="color:black">Copyright &copy;
					<script>
						document.write(new Date().getFullYear());
					</script>
					<a href="" style="color:black"> Dinas Komunikasi, Informatika, Persandian dan Statistik - Kecamatan Bojonegara Kabupaten Serang</a>
				</a>
			</div>
		</div>

	</div>
	</body>

</footer>

<script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/main.js') }}"></script>

</html>