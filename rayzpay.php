<!doctype html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	    <title>Payment Integration</title>
	    <style type="text/css">
	    	.amt{
	    		font-size: 3rem;
	    	}
	    </style>
  	</head>
  	<body>
  		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			  <a class="navbar-brand" href="#">Mukesh Creation</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Home</a>
			      </li>
			      
			     
			      
			    </ul>
			    
			  </div>
			</nav>
  		<div class="container-fluid">
  			
  			<div class="row">
	  			<div class="mb-3 col-sm-3 mt-5">
				  	<div class="card" style="width: 18rem;min-height: 22rem">
					  	<div class="card-body">
						    <h5 class="card-title">Black T-shirt</h5>
						    <img src="imgs/img5.png" class="card-img-top" alt="...">
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <span class="amt">$400</span>
						    
						    <a class="amt" onclick="amtfun(400)"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
							  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
							</svg></a>
					  	</div>
					</div>
				</div>
  				<div class="mb-3 col-sm-3 mt-5">
					<div class="card" style="width: 18rem;min-height: 22rem">
					  	<div class="card-body">
						    <h5 class="card-title">White T-shirt</h5>
						    <img src="imgs/img2.jpg" class="card-img-top" alt="...">
						    
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <span class="amt">$500</span>
						    
						    <a class="amt" onclick="amtfun(500)"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
							  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
							</svg></a>
						    
					  	</div>
					</div>
				</div>
  				<div class="mb-3 col-sm-3 mt-5">
					<div class="card" style="width: 18rem;min-height: 22rem">
					  	<div class="card-body">
						    <h5 class="card-title">Red T-Shirt</h5>
						    <img src="imgs/img3.jpg" class="card-img-top" alt="...">
						    
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <span class="amt">$600</span>
						    
						    <a class="amt" onclick="amtfun(600)"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
							  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
							</svg></a>
					  	</div>
					</div>
				</div>

				<div class="mb-3 col-sm-3 mt-5">
					<div class="card" style="width: 18rem;min-height: 22rem">
					  	<div class="card-body">
						    <h5 class="card-title">Brown T-Shirt</h5>
						    <img src="imgs/img7.jpg" class="card-img-top" alt="...">
						    
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <span class="amt">$700</span>
						    
						    <a class="amt" onclick="amtfun(700)"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
							  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
							</svg></a>
					  	</div>
					</div>
				</div>

				<div class="mb-3 col-sm-10 mt-5">
					<input type="hidden" name="tot_amt" value="0" id="tot_amt">
					<input type="hidden" name="tot_items" value="0" id="tot_items">

					<span id="span_tot_amt" style="font-size: 2rem;color: green;margin-right: 2rem"></span> 
					<span id="span_tot_items" style="font-size: 2rem;color: green;margin-left: 3rem;"></span>

				</div>


			</div>

			
			<div class="mb-3 offset-6 col-sm-2">
				<button type="butoon" id="paymentclick" class="btn btn-primary">Pay Amount</button>
			</div>
		</div>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			 <a class="navbar-brand" href="#">©2020-2020 Copyright MukeshCreation</a>
		</nav>

	 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
		<script type="text/javascript">
			
			document.getElementById('paymentclick').onclick = function(){
				total_val = document.getElementById('tot_amt').value;
				if(total_val > 0){
					var options = {
					    "key": "Test Api key",
					    "amount": total_val, // Example: 2000 paise = INR 20
					    "name": "Mukesh Yadav",
					    "description": "Product Amount for Rayzerpay Integration",
					    //"image": "img/logo.png",// COMPANY LOGO
					    "handler": function (response) {
					        console.log(response);
					        // AFTER TRANSACTION IS COMPLETE YOU WILL GET THE RESPONSE HERE.
					    },
					    "prefill": {
					        "name": "Pradnil", // pass customer name
					        "email": 'pradnil99@gmail.com',// customer email
					        "contact": '+918793682834' //customer phone no.
					    },
					    "notes": {
					        "address": "myadav00349@gmail.com" //customer address 
					    },
					    "theme": {
					        "color": "#15b8f3" // screen color
					    }
					};

					var propay = new Razorpay(options);
					propay.open();
				} else {
					alert("Please Add Some Items To Cart")
				}
			}

			function amtfun(amt) {
				total_val = document.getElementById('tot_amt').value;
				total_items = document.getElementById('tot_items').value;
				
				grand_tot = parseInt(amt) + parseInt(total_val);
				//alert(grand_tot)
				document.getElementById('tot_amt').value = grand_tot;
				document.getElementById('span_tot_amt').innerHTML = 'Total Amount  - $'+ grand_tot;
				
				total_items_cnt = parseInt(total_items) + parseInt(1);
				document.getElementById('tot_items').value = total_items_cnt;
				document.getElementById('span_tot_items').innerHTML = 'Total Items - '+ total_items_cnt;
			}
			
		</script>
	</body>
</html>