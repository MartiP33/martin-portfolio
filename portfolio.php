<?php include 'header.php'; ?>



<section id="section_landing">
	<p id="faded_text">Martin Pusar</p>

	<div id="intro_text_wrapper">
		<p id="intro_text1">Martin Pusar &nbsp; | &nbsp; <i style="font-size: 70%">spletna stran je še v izdelavi</i></p>
		<p id="intro_text2">Izdelava spletnih strani</p>
		<p id="intro_text3">Vsaka spletna stran mora biti prilagojena podjetju ki ga predstavlja, da doseže njen glavni cilj in sicer da pretvori obiskovalca v stranko.
			<!-- To zahteva raziskovanje ciljnih skupin in namena, da se temu lahko prilagodi tudi dizajn in seveda vsebina. -->
		</p>
		<p><a href="mailto: martin@martinpusar.si" id="intro_text4">Kontaktiraj me</a></p>
	</div>

	<img src="media/portret.png" alt="Portret" id="portret">
</section>


<section id="services_section">
	<h1>Kaj potrebujete?</h1>
	<hr class="under-title-hr">
	<div class="services-container">
		<div class="service-outer not-active">
			<div class="service-inner" id="service_inner_left">
				<div class="service-description">
					<h2>WordPress</h2>
					<p>Polno-funkcionalne, vsebinsko-osredotočene spletne strani, ki odražajo podjetje v profesionalni luči.</p>
					<p>Pred izdelavo se naredi raziskava o naravi podjetja in njegovi ciljni skupini, da se lahko obiskovalcu čim bolj približamo. Ključna je enostavnost uporabe, najsodobnejša funkcionalnost ter upoštevanje najboljih in najnovejših praks.</p>
				</div>
			</div>
		</div>

		<div class="service-outer not-active">
			<div class="service-inner" id="service_inner_right">
				<div class="service-description">
					<h2>HTML &	 CSS</h2>
					<p>Z dizajnom kot prioriteto, imamo z ročnim kodiranjem spletne strani nadzor nad prav vsem. Medtem ko ta način ni primeren za kompleksne funkcionalnosti, je prav najboljša izbira za portfolie ali spletne strani, ki zahtevajo točno določen dizajn in efekte.</p>
					<p>Ker ročno kodiranje vzame več časa, je ta opcija cenovno dražja.</p>
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

<!-- <section id="not_sure_section">

	<div id="not_sure_title_container">
		<div id="not_sure_title_wrapper">
			<h1>Niste prepričani, <br>
				<span id="not_sure_title_subscript">če zares potrebujete spletno stran</span></h1>
		</div>
		<span id="question_mark">?</span>
	</div>

	<p>Če vaše podjetje še nima spletne strani imate sedaj priložnost, da to napako popravite! Spletna predstava podjetja je v današnjem času pomembnejša kot še nikoli prej, saj strankam pove da je podjetje profesionalno in ugledno.</p>
</section> -->




<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.8/fullpage.min.js" integrity="sha256-caNcSA0LvOCX90PTuEbwl+V09xPMca13CJUasl+VCtk=" crossorigin="anonymous"></script>


<script>
	$(function() {
		$('#o_meni').removeClass('current-menu-item');
		$('#portfolio').addClass('current-menu-item');
	});
</script>

<?php include 'footer.php'; ?>