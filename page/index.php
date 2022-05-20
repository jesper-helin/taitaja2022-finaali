<!DOCTYPE html>
<html lang="fi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
    <title>Anne Setälä</title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="logo"></div>
        <div class="hero-text">
            <h1>Liikuntamatkat</h1>
            <p>
                Hyvinvointia ja elämyksiä Euroopan kohteissa.
                Olen järjestänyt patikointi- ja hyvinvointimatkoja jo 10 vuoden ajan vuosittain eri Euroopan kohteisiin
                mm. Italiaan, Itävaltaan, Skotlantiin, Kroatiaan, Irlantiin ja Sloveniaan.
                Matkat ovat kokonaisvaltaista hyvinvointia tukevia. Upeat nähtävyydet koetaan patikoiden ja paikallinen
                gastronomia tulee myös tutuksi.
                Tutustu kohteisiin kartasta ja lue asiakkaitteni kokemuksia liikuntamatkoista!
            </p>
            <button onclick="document.getElementById('map-section').scrollIntoView()">Sijaintimme</button>
        </div>
    </header>
    <!-- Main -->
    <main>
        <section class="about">
            <h2 style="color: #dc76aa;">Palvelusta</h2>
            <div class="row">
                <div>
                    <p>
                        Anne Setälä <br />
                        Fysioterapeutin tutkinto 1986<br />
                        Yrittäjänä vuodesta 1998<br />
                        FISAF-Personal Trainer 2006<br />
                    </p>
                </div>
                <div>
                    <img src="./public/Palvelusta/PalvelustaKuvia/AnneSetala_Kuva4.JPG" alt="anne-omakuva-1" />
                </div>
            </div>
            <div class="row">
                <div>
                    <p>
                        Olen järjestänyt liikunta ja hyvinvointimatkoja jo vuodesta 2012. Pitkäaikainen kumppanini on
                        matkatoimisto Kontiki.
                        Kon-Tiki Tours tarjoaa hyvinvointimatkoja yhteistyössä alan huippuammattilaisten kanssa.
                        Hyvinvointimatkojeni ohjelma koostuu esimerkiksi vesijumpasta, joogasta, mindfulnessista,
                        retriitistä,
                        vaelluksesta ja patikoinnista hyvää ruokaa ja viihtyisää majoitusta unohtamatta.
                        Jokainen hyvinvointimatka on tarkkaan suunniteltu, sinun ei tarvitse kuin hypätä kyytiin! Lue
                        myös
                        tyytyväisten asiakkaitteni kommentit ja kokemukset matkoista referenssit - osiosta.

                        Ota hteyttä ja jutellaan lisää seuraavasta matkastamme! <br /><br />
                        <strong>Anne</strong>
                    </p>

                </div>
                <div>
                    <img src="./public/Palvelusta/PalvelustaKuvia/AnneSetala_kuva1.jpeg" alt="anne-omakuva-2" />
                </div>
            </div>
        </section>
        <!-- References -->
        <section class="references">
            <h2 style="color: #81b904;">Referenssit</h2>
            <div class="references-container">
                <!--  -->
                <div class="reference-container">
                    <h3>Taloushallinnon ammattilainen Anja Kirjuri, 45-vuotta.</h3>
                    <div>
                        <p>
                            Parasta Annen liikuntamatkoissa on ehdottomasti työhyvinvoinnin kasvu. Liikuntamatkat
                            tuovat
                            erinomaisen tasapainon toimisto ja näyttöpäätteellä tehtävään työhön.
                            Näyttöpäätetyöskentelyssä minulle tulee helposti erilaisia hartia tai niskavaivoja.
                            Annen
                            matkoihin on helppo heittäytyä mukaan ja elimistö voi hyvin liikuntamatkan jälkeen.
                            Työhön
                            tulee uutta puhtia, kun ihminen voi hyvin!
                            <br /><br />
                            Itävalta 19.–26.5.2018
                        </p>
                        <img src="./public/Referenssit/Referenssi1_AnjaKirjuri.jpg" alt="reference-1" />
                    </div>
                </div>
                <!--  -->
                <div class="reference-container">
                    <h3>Ohjelmoija Kalle Koodari, 38-vuotta.</h3>
                    <div>
                        <p>
                            Löysin Annen liikuntamatkat tyttöystäväni kanssa. Matkoissa parasta on helppous ja hyvin
                            toimiva kokonaisuus. Olemme käyttäneet Annen fysioterapiapalveluita aikaisemmin,
                            liikuntamatkoilla kaikki on järjestetty ja stressi helpottuu!
                            <br /><br />
                            Slovenia 2.–9.10.2019
                        </p>
                        <img src="./public/Referenssit/Referenssi2_KalleKoodari.jpg" alt="reference-2" />
                    </div>
                </div>
                <!--  -->
                <div class="reference-container">
                    <h3>Lääkäri Lenni Lekuri, 58-vuotta.</h3>
                    <div>
                        <p>
                            Lääkärinä tiedän, että ihmisen terveyteen tarvitaan kokonaisvaltaista hyvinvointia.
                            Suosittelen Anne Setälän liikuntamatkoja kaikille, jotka haluavat lisätä hyvinvointiaan!
                            <br /><br />
                            Itävalta 19.–26.5.2018 ja Slovenia 2.–9.10.2019
                        </p>
                        <img src="./public/Referenssit/Referenssi3_LenniLekuri.jpg" alt="reference-3" />
                    </div>
                </div>
                <!--  -->
                <div class="reference-container">
                    <h3>Puutarhuri Kalle Kukkanen, 45-vuotta.</h3>
                    <div>
                        <p>
                            Annen liikuntamatkojen kohteet ovat aina hyvin valittuja ja kohteissa saa hyviä ideoita
                            myös omaan työhön. Puutarhurina teen työtä käsilläni ja fysiikka on aina kovilla. Työni
                            ajoittuvat puutarhan aina kevät, kesä ja syystoimiin. Liikuntamatkoista onkin tullut
                            minulle jo tapa päättää kesän sesonkikausi oman hyvinvoinnin äärelle.
                            <br /><br />
                            Itävalta 19.–26.5.2018
                        </p>
                        <img src="./public/Referenssit/Refrenssi4_KalleKukkanen.jpg" alt="reference-4" />
                    </div>
                </div>
                <!--  -->
                <div class="reference-container">
                    <h3>Taksiyrittäjä Timo Taksi, 50-vuotta.</h3>
                    <div>
                        <p>
                            Ostin itselleni ensimmäisen liikuntamatkan 50vuotislahjaksi. Taksiyrittäjänä teen pitkää
                            päivää ja auton ratissa istuminen vaatii tasapainoksi liikuntaa ja hyvinvointia.
                            Hyvinvointimatkan jälkeen huomasin olevani paljon virkeämpi ja työhyvinvointi lisääntyi
                            selvästi. Lähden varmasti Annen matkaan uudestaan!
                            <br /><br />
                            Islanti 19.-25.5.202
                        </p>
                        <img src="./public/Referenssit/Referenssi5_TimoTaksi.jpg" alt="reference-5" />
                    </div>
                </div>
                <!--  -->

            </div>
        </section>
        <!-- Map -->
        <section id="map-section">
            <h2 style="color: #dc76aa;">Sijaintimme</h2>
            <div id="map"></div>
        </section>
        <!-- Contact form  -->
        <section class="contact">
            <h2 style="color: #81b904;">Ota yhteyttä</h2>
            <form>
                <div class="row name-phone-row">
                    <div>
                        <label for="name">Nimi</label>
                        <input id="name" type="text" />
                    </div>
                    <div>
                        <label for="phone">Puhelinnumero</label>
                        <input id="phone" type="text" />
                    </div>
                </div>
                <div class="row">
                    <label for="email">Sähköposti</label>
                    <input id="email" type="email" class="contact-form-email" />
                </div>
                <div class="row">
                    <label for="message">Viesti</label>
                    <textarea id="message"></textarea>
                </div>
                <div class="row">
                    <button type="submit">Lähetä</button>
                </div>
            </form>
        </section>
    </main>
    <!-- Footer -->
    <footer>
        <div class="footer-text">
            <h2>Yhteystiedot</h2>
            <p>
                FISAF Personal Trainer, <br />
                Fysioterapeutti Anne Setälä
            </p>
            <address>
                Kanahaukantie 12, <br />
                28220 Pori (Isojoenranta)
            </address>
            <p>
                Puh. 040 538 7043 <br />
                anne@annes.fi
            </p>
        </div>
    </footer>
    <script>
        // ----------------------------------
        // Map
        //
        const map = L.map('map').setView([61.49531310394278, 21.846958296346628], 13);
        const marker = L.marker([61.49531310394278, 21.846958296346628]).addTo(map)
        marker.bindPopup("<b>Kanahaukantie 12</b><br>28220 Pori.").openPopup();
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoiZXNpZXIiLCJhIjoiY2wzYTBtZG9rMDB5eTNkbnIwbWRqNTlnYyJ9.o3-fDE_9rEHxsHJE2ue28g'
        }).addTo(map);

        // ----------------------------------
        // References
        // 
        let index = 0;
        slideshow();

        function slideshow() {
            let i;
            let x = document.querySelectorAll('.reference-container');
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            index++;
            if (index > x.length) { index = 1 }
            x[index - 1].style.display = "block";
            setTimeout(slideshow, 6000)
        }
    </script>
</body>

</html>