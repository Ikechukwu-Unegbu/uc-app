<section id="pricetable" class="section-padding">
        <div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<div class="section-title">
						<h5>Bitfonix conversation</h5>
						<h3>Trade Bitcoin <span>With Us</span></h3>
					</div>
				</div>
			</div>
			<!-- end section title -->
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
					<div class="table-responsive">
						<table class="bitland-table bitland-table-2 table">
							<thead>
								<tr>
									<th scope="col">Cryptocurrency</th>
									<th scope="col">Price</th>
									<th scope="col">Supppy</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row"><i class="icofont icofont-cur-baht"></i> Bitcoin</th>
									<td>85.78$</td>
									<td>427BTC</td>
								</tr>
								<tr>
									<th scope="row"><i class="icofont icofont-cur-dollar"></i> Bitfonix</th>
									<td>97.45$</td>
									<td>492BTC</td>
								</tr>
								<tr>
									<th scope="row"><i class="fas fa-shekel-sign"></i> Degitalcash</th>
									<td>45.89$</td>
									<td>635BTC</td>
								</tr>
								<tr>
									<th scope="row"><i class="icofont icofont-cur-euro-true"></i> Ethereum</th>
									<td>78.35$</td>
									<td>395BTC</td>
								</tr>
								<tr>
									<th scope="row"><i class="icofont icofont-cur-dollar-plus"></i> Stellar</th>
									<td>45.89$</td>
									<td>829BTC</td>
								</tr>
								<tr>
									<th scope="row"><i class="icofont icofont-cur-renminbi-true"></i> Ripple</th>
									<td>76.28$</td>
									<td>623BTC</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- end col -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="cal-convertor">
							<script>
								baseUrl = "https://widgets.cryptocompare.com/";
								var scripts = document.getElementsByTagName("script");
								var embedder = scripts[ scripts.length - 1 ];
								(function (){
								var appName = encodeURIComponent(window.location.hostname);
								if(appName==""){appName="local";}
								var s = document.createElement("script");
								s.type = "text/javascript";
								s.async = true;
								var theUrl = baseUrl+'serve/v1/coin/chart?fsym=BTC&tsym=USD';
								s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
								embedder.parentNode.appendChild(s);
								})();
							</script>
						</div>		
				</div>
				<!-- end col -->				
			</div>	
        </div>
        <!--- END CONTAINER -->
    </section>