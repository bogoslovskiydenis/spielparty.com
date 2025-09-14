<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Startseite - Spielparty</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com?v=3.0.0"></script>
</head>
<body class="font-sans text-[#1f2937] bg-[#fffaf4]">
  <header class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
      <a href="/" class="flex items-center space-x-2">
        <span class="text-2xl font-bold text-[#ff7e00]" style="font-family: 'Poppins', sans-serif">Spielparty</span>
        <span class="hidden sm:inline-block text-sm text-gray-500" style="font-family: 'Open Sans', sans-serif">Wir feiern unvergessliche Momente</span>
      </a>
      <nav class="hidden md:flex space-x-6">
        <a href="/" class="text-gray-700 hover:text-[#ff7e00]">Startseite</a>
        <a href="uber-uns.html" class="text-gray-700 hover:text-[#ff7e00]">Über&nbsp;uns</a>
        <a href="leistungen.html" class="text-gray-700 hover:text-[#ff7e00]">Leistungen</a>
        <a href="galerie.html" class="text-gray-700 hover:text-[#ff7e00]">Galerie</a>
        <a href="kontakt.html" class="text-gray-700 hover:text-[#ff7e00]">Kontakt</a>
      </nav>
      <a href="kontakt.html" class="hidden md:inline-flex items-center px-4 py-2 bg-[#ff7e00] text-white rounded hover:bg-[#e56f00] transition">Jetzt Anfrage</a>
      <button id="nav-toggle" class="md:hidden text-gray-700 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
      </button>
    </div>
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 space-y-2">
      <a href="/" class="block text-gray-700 hover:text-[#ff7e00]">Startseite</a>
      <a href="uber-uns.html" class="block text-gray-700 hover:text-[#ff7e00]">Über&nbsp;uns</a>
      <a href="leistungen.html" class="block text-gray-700 hover:text-[#ff7e00]">Leistungen</a>
      <a href="galerie.html" class="block text-gray-700 hover:text-[#ff7e00]">Galerie</a>
      <a href="kontakt.html" class="block text-gray-700 hover:text-[#ff7e00]">Kontakt</a>
      <a href="kontakt.html" class="inline-flex items-center px-4 py-2 bg-[#ff7e00] text-white rounded w-full justify-center hover:bg-[#e56f00] transition">Jetzt Anfrage</a>
    </div>
  </header>
  <script>
    document.getElementById('nav-toggle').addEventListener('click', function () {
      const menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
    });
  </script>

  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    
    <section aria-label="Hero Banner" class="relative bg-[#ff7e00] rounded-lg overflow-hidden shadow-lg flex flex-col justify-center items-center text-center text-white px-6 py-16 md:py-24">
      <img src="images/startseite-hero-fröhliche-kinder-konfetti-luftballons.jpeg" alt="Fröhliche Kinder feiern mit Konfetti und bunten Luftballons beim Spielparty Event" class="absolute inset-0 w-full h-full object-cover opacity-30 -z-10" width="1280" height="768">
      <h1 class="text-4xl sm:text-5xl font-extrabold mb-4 font-[Poppins]">Unvergessliche Events für kleine & große Gäste</h1>
      <p class="text-lg sm:text-xl mb-8 font-[Open Sans] max-w-3xl mx-auto">Von Kindergeburtstagen bis Firmenfeiern – wir machen jede Party einzigartig</p>
      <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-6 justify-center">
        <a href="kontakt.html" class="px-6 py-3 bg-[#ffd400] text-[#1f2937] font-semibold rounded shadow-lg hover:bg-[#e6c800] transition">Jetzt Anfrage stellen</a>
        <a href="leistungen.html" class="px-6 py-3 border border-white text-white rounded hover:bg-white hover:text-[#ff7e00] transition font-semibold">Unsere Leistungen</a>
      </div>
    </section>

    
    <section aria-label="Unsere Highlights" class="mt-16">
      <h2 class="text-3xl font-bold text-[#ff7e00] mb-10 text-center font-[Poppins]">Unsere Highlights</h2>
      <div class="grid gap-8 md:grid-cols-3">
        
        <a href="leistungen.html" class="flex items-center bg-white rounded-lg shadow p-6 hover:shadow-xl transition">
          <img src="images/startseite-services-kindergeburtstage-icon.jpeg" alt="Icon für Kindergeburtstage mit Luftballons und Geschenken" class="w-20 h-20 flex-shrink-0 mr-6" width="160" height="160">
          <div class="">
            <h3 class="text-xl font-semibold mb-2 font-[Poppins]">Kindergeburtstage</h3>
            <p class="text-gray-700 font-[Open Sans]">Themenpartys, Fruit Party, Animation, Dekoration für strahlende Kinderaugen</p>
          </div>
        </a>
        
        <a href="leistungen.html" class="flex items-center bg-white rounded-lg shadow p-6 hover:shadow-xl transition">
          <img src="images/startseite-services-feiertage-icon.jpeg" alt="Icon mit saisonalen Motiven für Feiertags-Events" class="w-20 h-20 flex-shrink-0 mr-6" width="160" height="160">
          <div>
            <h3 class="text-xl font-semibold mb-2 font-[Poppins]">Feiertage & Feste</h3>
            <p class="text-gray-700 font-[Open Sans]">Oster-, Halloween- und Weihnachts-Events voller Spaß und Magie</p>
          </div>
        </a>
        
        <a href="leistungen.html" class="flex items-center bg-white rounded-lg shadow p-6 hover:shadow-xl transition">
          <img src="images/startseite-services-firmenevents-icon.jpeg" alt="Icon für Firmenevents mit Gruppen und Teamarbeit" class="w-20 h-20 flex-shrink-0 mr-6" width="160" height="160">
          <div>
            <h3 class="text-xl font-semibold mb-2 font-[Poppins]">Firmenevents</h3>
            <p class="text-gray-700 font-[Open Sans]">Teambuilding, Family Days und Sommerfeste individuell gestaltet</p>
          </div>
        </a>
      </div>
    </section>

    
    <section aria-label="Das sagen unsere Kunden" class="mt-20">
      <h2 class="text-3xl font-bold text-[#ff7e00] mb-8 text-center font-[Poppins]">Das sagen unsere Kunden</h2>
      <div class="relative overflow-x-auto snap-x snap-mandatory flex space-x-8 px-4 pb-4">
        <blockquote class="snap-center flex-shrink-0 bg-white rounded-lg shadow p-6 w-80 font-[Open Sans] text-gray-800">
          <p class="mb-4 italic">„Der beste Geburtstag, den unser Sohn je hatte! Die Spiele und Dekoration waren einfach perfekt.“</p>
          <footer class="text-right font-semibold text-[#ff7e00]">Mia K.</footer>
        </blockquote>
        <blockquote class="snap-center flex-shrink-0 bg-white rounded-lg shadow p-6 w-80 font-[Open Sans] text-gray-800">
          <p class="mb-4 italic">„Professionell und kreativ – unsere Firmenfeier mit Spielparty war ein voller Erfolg. Vielen Dank!“</p>
          <footer class="text-right font-semibold text-[#ff7e00]">HR-Leitung, HanseTech</footer>
        </blockquote>
        <blockquote class="snap-center flex-shrink-0 bg-white rounded-lg shadow p-6 w-80 font-[Open Sans] text-gray-800">
          <p class="mb-4 italic">„Tolle Betreuung, stressfreie Organisation – dank Spielparty wurde unsere Familienfeier unvergesslich.“</p>
          <footer class="text-right font-semibold text-[#ff7e00]">Familie Schulz</footer>
        </blockquote>
      </div>
    </section>

    
    <section aria-label="So einfach geht's" class="mt-20">
      <h2 class="text-3xl font-bold text-[#ff7e00] mb-10 text-center font-[Poppins]">So einfach geht's</h2>
      <div class="flex flex-col space-y-10 md:flex-row md:space-y-0 md:space-x-12 justify-center">
        
        <div class="flex items-start space-x-4 max-w-xs mx-auto">
          <img src="images/startseite-process-step1-icon.jpeg" alt="Icon Telefonhörer - Schritt 1 Kontakt aufnehmen" class="w-16 h-16 flex-shrink-0" width="128" height="128">
          <div>
            <h3 class="text-xl font-semibold mb-1 font-[Poppins]">Schritt 1</h3>
            <p class="text-gray-700 font-[Open Sans]">Kontakt aufnehmen &amp; Wünsche mitteilen</p>
          </div>
        </div>
        
        <div class="flex items-start space-x-4 max-w-xs mx-auto">
          <img src="images/startseite-process-step2-icon.jpeg" alt="Icon Konzeptpapier - Schritt 2 individuelles Konzept" class="w-16 h-16 flex-shrink-0" width="128" height="128">
          <div>
            <h3 class="text-xl font-semibold mb-1 font-[Poppins]">Schritt 2</h3>
            <p class="text-gray-700 font-[Open Sans]">Individuelles Konzept erhalten</p>
          </div>
        </div>
        
        <div class="flex items-start space-x-4 max-w-xs mx-auto">
          <img src="images/startseite-process-step3-icon.jpeg" alt="Icon Planungswerkzeuge - Schritt 3 Planung & Durchführung" class="w-16 h-16 flex-shrink-0" width="128" height="128">
          <div>
            <h3 class="text-xl font-semibold mb-1 font-[Poppins]">Schritt 3</h3>
            <p class="text-gray-700 font-[Open Sans]">Wir kümmern uns um Planung &amp; Durchführung</p>
          </div>
        </div>
        
        <div class="flex items-start space-x-4 max-w-xs mx-auto">
          <img src="images/startseite-process-step4-icon.jpeg" alt="Icon Partyhut & Feier - Schritt 4 Entspannt feiern" class="w-16 h-16 flex-shrink-0" width="128" height="128">
          <div>
            <h3 class="text-xl font-semibold mb-1 font-[Poppins]">Schritt 4</h3>
            <p class="text-gray-700 font-[Open Sans]">Zurücklehnen und feiern!</p>
          </div>
        </div>
      </div>
    </section>

    
    <section aria-label="Bereit für deine Traum-Party?" class="mt-20 bg-[#ff7e00] rounded-lg py-12 px-6 text-center text-white font-[Poppins] shadow-lg">
      <h2 class="text-3xl font-semibold mb-4 max-w-xl mx-auto">Bereit für deine Traum-Party?</h2>
      <a href="kontakt.html" class="inline-block mt-4 px-8 py-3 bg-[#ffd400] text-[#1f2937] font-semibold rounded shadow hover:bg-[#e6c800] transition">Unverbindliche Anfrage</a>
    </section>
  </main><footer class="bg-[#1f2937] text-white py-10 mt-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
    <div>
      <h3 class="text-xl font-semibold mb-4">Spielparty</h3>
      <p class="text-sm leading-relaxed">Hinterm Stern 14<br>22041 Hamburg<br>Deutschland</p>
      <p class="mt-2 text-sm">Tel: <a href="tel:+49406525052" class="hover:underline">+49 40 6525052</a><br>E-Mail: <a href="mailto:contact@spielparty.com" class="hover:underline">contact@spielparty.com</a></p>
    </div>
    <div>
      <h3 class="text-xl font-semibold mb-4">Schnellzugriff</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="/" class="hover:underline">Startseite</a></li>
        <li><a href="uber-uns.html" class="hover:underline">Über uns</a></li>
        <li><a href="leistungen.html" class="hover:underline">Leistungen</a></li>
        <li><a href="galerie.html" class="hover:underline">Galerie</a></li>
        <li><a href="kontakt.html" class="hover:underline">Kontakt</a></li>
      </ul>
    </div>
    <div>
      <h3 class="text-xl font-semibold mb-4">Rechtliches</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="terms-and-conditions.html" class="hover:underline">AGB</a></li>
        <li><a href="privacy-policy.html" class="hover:underline">Datenschutzerklärung</a></li>
      </ul>
      <div class="mt-4 flex space-x-4">
        <a href="https://www.facebook.com/" aria-label="Facebook" class="hover:text-[#ff7e00]"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 0H2C.9 0 0 .9 0 2v20c0 1.1.9 2 2 2h10V14h-3v-3h3V8c0-3.1 1.9-4.8 4.7-4.8 1.3 0 2.6.1 3 .2v3.4h-2c-1.6 0-2 .8-2 2v2.6h4l-.5 3H17V24h5c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2z"/></svg></a>
        <a href="https://www.instagram.com/" aria-label="Instagram" class="hover:text-[#ff7e00]"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.9.1 1.2.1 2 .3 2.5.5.6.2 1 .5 1.5 1 .5.5.8.8 1 1.5.2.5.4 1.3.5 2.5.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.2-.3 2-.5 2.5-.2.6-.5 1-1 1.5-.5.5-.8.8-1.5 1-.5.2-1.3.4-2.5.5-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.2-.1-2-.3-2.5-.5-.6-.2-1-.5-1.5-1-.5-.5-.8-.8-1-1.5-.2-.5-.4-1.3-.5-2.5C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.9c.1-1.2.3-2 .5-2.5.2-.6.5-1 1-1.5.5-.5.8-.8 1.5-1 .5-.2 1.3-.4 2.5-.5C8.4 2.2 8.8 2.2 12 2.2m0-2.2C8.7 0 8.3 0 7 .1 5.7.2 4.5.4 3.7.7 2.9 1 2.2 1.5 1.5 2.2.8 2.9.3 3.6 0 4.3-.3 5.1-.5 6.3-.6 7.6-.7 8.9-.7 9.3-.7 12s0 3.1.1 4.4c.1 1.3.3 2.5.6 3.3.3.8.8 1.5 1.5 2.2.7.7 1.4 1.2 2.2 1.5.8.3 2 .5 3.3.6C8.9 23.8 9.3 24 12 24s3.1 0 4.4-.1c1.3-.1 2.5-.3 3.3-.6.8-.3 1.5-.8 2.2-1.5.7-.7 1.2-1.4 1.5-2.2.3-.8.5-2 .6-3.3.1-1.3.1-1.7.1-4.4s0-3.1-.1-4.4c-.1-1.3-.3-2.5-.6-3.3-.3-.8-.8-1.5-1.5-2.2C20.5.3 19.8-.2 19-.5c-.8-.3-2-.5-3.3-.6C15.1 0 14.7 0 12 0L12 0z"/></svg></a>
      </div>
    </div>
  </div>
  <div class="mt-8 text-center text-xs text-gray-400">© 2024 Spielparty. Alle Rechte vorbehalten.</div>
</footer>
<div id="cookie-banner" class="fixed bottom-0 inset-x-0 bg-[#1f2937] text-white p-4 flex flex-col md:flex-row items-center justify-between space-y-2 md:space-y-0 md:space-x-4 shadow-lg hidden">
  <span>Diese Website verwendet Cookies, um Ihr Erlebnis zu verbessern.</span>
  <button id="cookie-accept" class="px-4 py-2 bg-[#ff7e00] rounded hover:bg-[#e56f00] transition">Cookies akzeptieren</button>
</div>
<script>
  (function(){
    const cookieName = 'cookieConsent_' + Math.random().toString(36).substring(2,11);
    if(!localStorage.getItem(cookieName)){
      const banner = document.getElementById('cookie-banner');
      banner.classList.remove('hidden');
      document.getElementById('cookie-accept').addEventListener('click', () => {
        localStorage.setItem(cookieName, 'accepted');
        banner.classList.add('hidden');
      });
    }
  })();
</script>
</body>
</html>