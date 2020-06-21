<?php include 'header.php'; ?>



<section id="section_landing">
	<p id="faded_text">Martin Pusar</p>

	<div id="intro_text_wrapper">
		<p id="intro_text1">Martin Pusar &nbsp; | &nbsp; <i style="font-size: 70%">spletna stran je še v izdelavi</i></p>
		<p id="intro_text2">Izdelava spletnih strani</p>
		<p id="intro_text3">WordPress strani in teme, prav tako kot HTML - CSS - JavaScript strani po meri! Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, quam.</p>
		<p><a href="mailto: martin@martinpusar.si" id="intro_text4">Kontaktiraj me</a></p>
	</div>

	<img src="media/portret.svg" alt="Portret" id="portret">
</section>


<section id="services_section">
	<h1>Kaj potrebujete?</h1>
	<div class="services-container">
		<div class="service-outer not-active">
			<div class="service-inner" id="service_inner_left">
				<div class="service-description">
					<h2>WORDPRESS</h2>
					<ol class="no-margin">
						<li><b> &nbsp; Celotne spletne strani:</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, porro.</li>
						<li><b> &nbsp; WordPress teme po meri:</b> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, rerum!</li>
					</ol>
				</div>
			</div>
		</div>

		<div class="service-outer not-active">
			<div class="service-inner" id="service_inner_right">
				<div class="service-description">
					<h2>HTML - CSS - JavaScript</h2>
					<p>Spletne strani osredotočene na dizajn, s popolnih nadzorom nad vsebino vsebino in fukncionalnostjo.</p>
				</div>
			</div>
		</div>
	</div>

</section>



<section id="contact_section">
	<div id="contact_container">
		<div id="contact_wrapper">

			<h2>Kontaktiraj me</h2>
			<form action="inc/send-email.php" method="POST">
				<label for="firstname">ime:</label><br>
				<input type="text" class="contact-input" name="firstname"><br>

				<label for="email">e-naslov*:</label><br>
				<input type="email" class="contact-input" name="email" required><br>

				<label for="subject">zadeva:</label><br>
				<input type="text" class="contact-input" name="subject"><br>

				<label for="message">sporočilo*:</label><br>
				<textarea id="contact_message" name="message" rows="6" cols="50" required></textarea>

				<button type="submit" value="submit">Pošlji</button>
			</form>

		</div>
	</div>

	<div id="contact_img_wrapper"></div>
</section>




<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.8/fullpage.min.js" integrity="sha256-caNcSA0LvOCX90PTuEbwl+V09xPMca13CJUasl+VCtk=" crossorigin="anonymous"></script>


<script>
	$(function() {
		$('#o_meni').removeClass('current-menu-item');
		$('#portfolio').addClass('current-menu-item');
	});
</script>

<?php include 'footer.php'; ?>