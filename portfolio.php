<?php include 'header.php'; ?>



<section id="section_landing">

	<div id="intro_container">
		<p id="intro_name">Martin Pusar</p>
		<p id="intro_subscript">Izdelava spletnih strani | <i>spletna stran je še v izdelavi</i></p>
	</div>

	<img src="media/vector1.svg" alt="Vector" id="landing_vector">
</section>


<section id="services_section">
	<h1>Kaj delam</h1>
	<div class="services-container">
		<div id="left_service" class="not-active">
			<h2>WordPress</h2>
			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam debitis sapiente omnis delectus nesciunt ex veritatis assumenda. Cum, quisquam enim.</p>
		</div>

		<div id="right_service" class="not-active">
			<h2>HTML - CSS - JavaScript</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio ducimus hic magni minus praesentium, ipsum veniam ipsa similique cum inventore!</p>
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