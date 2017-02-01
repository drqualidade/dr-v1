<?php include 'header.php'; ?>
<!-- banner -->
	<div class="w3-banner1">
		
	</div>
<!-- //banner -->
<!-- contact -->
<div class="contact">
		<div class="container">
			<h2 class="w3l_head w3l_head1">Nos mande uma mensagem</h2>
			<div class="w3_contact_grids">
				<form action="#" method="post">
					<span class="input input--jiro">
						<input class="input__field input__field--jiro" type="text" id="input-10" name="Name" placeholder="Your Name" required="">
						<label class="input__label input__label--jiro" for="input-10">
							<span class="input__label-content input__label-content--jiro">Seu nome</span>
						</label>
					</span>
					<span class="input input--jiro">
						<input class="input__field input__field--jiro" type="email" id="input-11" name="Email" placeholder="Your Email Address" required="">
						<label class="input__label input__label--jiro" for="input-11">
							<span class="input__label-content input__label-content--jiro">Seu e-mail</span>
						</label>
					</span>
					<span class="input input--jiro">
						<input class="input__field input__field--jiro" type="text" id="input-12" name="Phone Number" placeholder="Phone Number" required="">
						<label class="input__label input__label--jiro" for="input-12">
							<span class="input__label-content input__label-content--jiro">Seu telefone</span>
						</label>
					</span>
					<textarea name="Message" placeholder="Mensagem..." required=""></textarea>
					<input type="submit" value="Enviar">
				</form>
			</div>
		</div>
	</div>
	<script src="js/classie.js"></script>
	<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>

<!-- //contact -->
	<div class="agile-map">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0884658166315!2d-60.005212685625374!3d-3.0710356410420365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x926c1aa41d8ee153%3A0xa6308fd2a04c59b9!2sMMVA+-+Minas+Marketing+Veterin%C3%A1ria+%26+Agroneg%C3%B3cios!5e0!3m2!1spt-BR!2sbr!4v1484239830947"  allowfullscreen></iframe>
	</div>

<!-- footer -->

			<div class="footer-w3layouts">
				<div class="container">
				<div class="agile-copy">
					<p>© 2017 MMVA - MINAS MARKETING VETERINÁRIA E AGRONEGÓCIOS</p>
				</div>
				<div class="agileits-social">
					<ul>
							<li><a href="https://www.facebook.com/mmvadoutorqualidade/" target="_blanck"><i class="fa fa-facebook"></i></a></li>
							
						</ul>
				</div>
					<div class="clearfix"></div>
				</div>
			</div>

<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>