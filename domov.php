<?php include 'header.php'; ?>



<section id="section_landing">
	<p id="faded_text">Martin Pusar</p>

	<div id="intro_text_wrapper">
		<p id="intro_text1">Martin Pusar &nbsp; | &nbsp; <i style="font-size: 70%">spletna stran je še v izdelavi</i></p>
		<p id="intro_text2">Izdelava spletnih strani</p>
		<p id="intro_text3">Vsaka spletna stran mora biti prilagojena podjetju ki ga predstavlja, da doseže njen glavni cilj in sicer da pretvori obiskovalca v stranko.
			<!-- To zahteva raziskovanje ciljnih skupin in namena, da se temu lahko prilagodi tudi dizajn in seveda vsebina. -->
		</p>
		<p><a href="#storitve" class="action-btn">Ogled storitev</a>
		<a href="#contact_section" class="action-btn">Kontaktiraj me</a></p>
	</div>

	<img src="media/portret.png" alt="Portret" id="portret">
</section>


<section id="services_section">
	<h1 id="storitve">Kaj potrebujete?</h1>
	<hr class="under-title-hr">
	<div class="services-container">
		<div class="service-outer not-active">
			<div class="service-inner" id="service_inner_left">
				<div class="service-description">
					<h2>WordPress</h2>
					<div class="service-grid">
						<span class="plus-symbol">&#43;</span>
						<p>Polno-funkcionalne, vsebinsko-osredotočene spletne strani
							<!-- , ki odražajo podjetje v profesionalni luči -->
						</p>
						<span class="plus-symbol">&#43;</span>
						<p>Kot lastnik slpetne strani imate nadzor nad vso vsebino, ki jo lahko kadarkoli dodajate/spreminjate
							<!-- Pred izdelavo se naredi raziskava o cilju in ciljni skupini podjetja -->
							<!-- , da se lahko obiskovalcu čim bolj približamo. -->
						</p>
						<span class="plus-symbol">&#43;</span>
						<p>Ključna je enostavnost uporabe, najsodobnejša funkcionalnost ter upoštevanje najboljih in najsodobnejših praks</p>
					</div>

				</div>
			</div>
		</div>

		<div class="service-outer not-active">
			<div class="service-inner" id="service_inner_right">
				<div class="service-description">
					<h2>HTML & CSS</h2>
					<div class="service-grid">
						<span class="plus-symbol">&#43;</span>
						<p>Z dizajnom kot prioriteto, imamo z ročnim kodiranjem nadzor nad prav vsem</p>
						<span class="plus-symbol">&#43;</span>
						<p>Primernejše za spletne strani ki zahtevajo točno določen dizajn oz. efekte</p>
						<span class="plus-symbol">&#43;</span>
						<p>Medtem ko je vnašanje velike količine vsebine težje, je zato poudarek na predstavitvi le-te na najboljši možen način
						</p>
					</div>

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
		$('#domov').addClass('current-menu-item');
	});
</script>

<?php include 'footer.php'; ?>