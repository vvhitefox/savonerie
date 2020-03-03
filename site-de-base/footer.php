		
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
		

	<footer class="bg-dark d-flex align-items-center">
		
	</footer>

</body>
</html>	