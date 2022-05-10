	<!-- START MARKET NEWS SECTION -->
	<section id="mnews" class="section-padding bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<div class="section-title">
						<h5>daily data</h5>
						<h3>Market <span>News</span></h3>
					</div>
				</div>
			</div>
			<!-- end section title -->
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-5">
					<div class="cal-convertor">
						<script>
							baseUrl = "https://widgets.cryptocompare.com/";
							var scripts = document.getElementsByTagName("script");
							var embedder = scripts[ scripts.length - 1 ];
							var cccTheme = {"General":{"borderColor":"#f7921a"}};
							(function (){
							var appName = encodeURIComponent(window.location.hostname);
							if(appName==""){appName="local";}
							var s = document.createElement("script");
							s.type = "text/javascript";
							s.async = true;
							var theUrl = baseUrl+'serve/v1/coin/histo_week?fsym=BTC&tsym=USD';
							s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
							embedder.parentNode.appendChild(s);
							})();
						</script>
					</div>
				</div>
				<!-- end col -->
				<div class="col-lg-6 col-md-6 col-12 pl-lg-5 pl-md-5 pl-sm-2 pl-2">
					<div class="ser-page-into">
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illodrut inventore veritatis et quasi architecto beatae vitae dicta sunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illodrut inventore veritatis et quasi architecto beatae vitae dicta sunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="ser-page-into">
						<ul>
							<li><i class="icofont icofont-ui-press"></i> <strong>Consectetur -</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</li>
							<li><i class="icofont icofont-ui-press"></i> <strong>Eiusmod -</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</li>
							<li><i class="icofont icofont-ui-press"></i> <strong>Perspiciatis -</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</li>
							<li><i class="icofont icofont-ui-press"></i> <strong>Voluptatem -</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</li>
						</ul>
					</div>
				</div>
				<!-- end col -->
			</div>
			<!-- end row-->
		</div>
	</section>
    <!-- END MARKET NEWS SECTION -->