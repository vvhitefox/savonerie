		
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script>
			function ValidateEmail() 
				{
				 var button = document.getElementById("boutonvalidation");
			     var champ = document.getElementById("champemail");
				 if(!champ.value){
					 champ.style.backgroundColor = "white";
					 return;
				 }
				 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(champ.value))
				  {
					button.classList.remove('disabled');
					//button.classList.submit = true;
					champ.style.backgroundColor = "lightgreen";
					return;
				  }
				    button.classList.add('disabled');
					//button.type = ""	;
					champ.style.backgroundColor = "#FF7777";
				}
				
				function sendEmail(){
					 var champ = document.getElementById("champemail");
					 if(!champ.value){
						 alert("Veuillez entrer une adresse mail");
						 return;
					 }
					 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(champ.value))
					  {
						alert("Vous allez recevoir un mail de confirmation");
						return;
					  }
						alert("Veuillez entrer une adresse mail valide !");
				}
		</script>
		

	<footer class="container-fluid">

			<div class="row">
				<div class="col-lg-8 col-8 offset-2">
					<hr class="separator">
				</div>
			</div>

			<div class="pb-5 pt-5">
				<div class="row">
					<div class="col-lg-2 col-8 offset-lg-5 offset-2 pb-2">
						<img src="img/logo_sens.png" class="img-fluid" alt="Responsive image">
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4 offset-lg-4 col-10 offset-1 pt-3 pb-3">
						<div class="card border">

						  	<div class="card-header align-center d-flex justify-content-center bg-grey text-dark">
						  	NEWSLETTER
						  	</div>

						  	<div class="card-body">

						  		<form method="post" action="modele/sendEmail.php" id="postform">
						  			<div class="row">
										 <input name = "email" class = "form-control col-lg-6 offset-lg-3 col-5 offset-2"  onkeyup="ValidateEmail()" id="champemail" placeholder="Email" />
										<input type="submit" class="btn btn-outline-success col-lg-2 col-3 offset-1 offset-lg-0 disabled" onclick="sendEmail()" id="boutonvalidation" value="valider" style="float:left">
									</div>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="row">
				<hr class="col-lg-8 col-8 separator">
			</div>

			<div class="row pt-5 pt-5">
				<div class="col-lg-6 offset-lg-3  col-8 offset-2 text-center">
					<div> MENTION LEGALES </div>
				</div>	
			</div>
		
	</footer>

</body>
</html>	