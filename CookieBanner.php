<?php
namespace UtilityPHP;

class CookieBanner
{
    public static function generateBanner($policy_url)
    {
    ?>
        <!-- COOKIE -->
        <style>
            #cookie_banner{
                background: black;
                color:white;
                font-size: 12px;
            }

            #cookie_banner_container{
                width: 1000px;
                margin-left: auto;
                margin-right: auto;
                padding: 10px;
            }

            #cookie_banner_left{
                float: left;
            }

            #cookie_banner_right{
                float: right;
            }

            #cookie_banner_clear{
                clear: both;
            }

            #cookie_banner_right{
                cursor:pointer;
            }

            #cookie_close {
                max-width: 16px;
                max-height: 16px;
                background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAqElEQVQ4jaWTsQ3EIBAEtwAX4BI+dPhlOXDgzOV8+CEluJwPHc4HHBK2OUDySiRwO7fiQJIEDEAAZjUEzFY7pI0X8CHqANaG+We1X2CS0a66JTHzVcE7OEGaNZWCxVa1QYKsxDvo0eZdUg+kbM4gXmSApWp+DOA855L8d9Jh9iE8GWOl85Y1KE0nJgF2l95OuQuYiB/j1rkAyZME4J0ORkvS+513YJSkP8ucjQMJGnefAAAAAElFTkSuQmCC');
            }
        </style>

        <div id="cookie_banner">
            <div id="cookie_banner_container">
                <div id="cookie_banner_left">Utilizzando <?php echo $_SERVER['HTTP_HOST']; ?>, accetti l'uso dei <a href="<?php echo $policy_url; ?>">cookie</a>, per una tua migliore esperienza di navigazione.</div>
                <div id="cookie_banner_right" onclick="close_banner();"><img id="cookie_close" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAqElEQVQ4jaWTsQ3EIBAEtwAX4BI+dPhlOXDgzOV8+CEluJwPHc4HHBK2OUDySiRwO7fiQJIEDEAAZjUEzFY7pI0X8CHqANaG+We1X2CS0a66JTHzVcE7OEGaNZWCxVa1QYKsxDvo0eZdUg+kbM4gXmSApWp+DOA855L8d9Jh9iE8GWOl85Y1KE0nJgF2l95OuQuYiB/j1rkAyZME4J0ORkvS+513YJSkP8ucjQMJGnefAAAAAElFTkSuQmCC"/></div>
                <div id="cookie_banner_clear"></div>
            </div>
        </div>

        <script>
            if(!localStorage.view_policy)
            {
                localStorage.view_policy = 0;
            }
            else if(localStorage.view_policy == 1)
            {
                document.getElementById("cookie_banner").style.display="none";
            }

            function close_banner()
            {
                localStorage.view_policy = 1;
                document.getElementById("cookie_banner").style.display="none";
            }
        </script>
    <?php
    }

    public static function generatePolicy($email)
    {
    ?>
        <h2>Privacy Policy di <strong><?php echo $_SERVER['HTTP_HOST']; ?></strong></h2>

        <p>Questa Applicazione raccoglie alcuni Dati Personali dei propri Utenti.</p>

        <h2>Titolare del Trattamento dei Dati</h2>
        <p>
            <?php echo $_SERVER['HTTP_HOST']; ?>, <a href="mail:<?php echo $email; ?>"><?php echo $email; ?></a>
        </p>

        <p>Dal momento che l'installazione di Cookie e di altri sistemi di tracciamento operata da terze parti tramite i
            servizi utilizzati all'interno di questa Applicazione non può essere tecnicamente controllata dal Titolare, ogni
            riferimento specifico a Cookie e sistemi di tracciamento installati da terze parti è da considerarsi indicativo.
            Per ottenere informazioni complete, consulta la privacy policy degli eventuali servizi terzi elencati in questo
            documento.</p>
        <p>Vista l'oggettiva complessità legata all'identificazione delle tecnologie basate sui Cookie ed alla loro
            integrazione molto stretta con il funzionamento del web, l'Utente è invitato a contattare il Titolare qualora volesse ricevere qualunque approfondimento relativo all'utilizzo dei Cookie stessi e ad eventuali utilizzi degli stessi – ad esempio ad opera di terzi – effettuati tramite questo sito.</p>

        <h2>Tipologie di Dati raccolti</h2>
        <p>
            Fra i Dati Personali raccolti da questa Applicazione, in modo autonomo o tramite terze parti, ci sono:
            Cookie e Dati di utilizzo.
        </p>
        <p>Altri Dati Personali raccolti potrebbero essere indicati in altre sezioni di questa privacy policy o mediante testi informativi visualizzati contestualmente alla raccolta dei Dati stessi.<br/>I Dati Personali possono essere inseriti volontariamente dall&rsquo;Utente, oppure raccolti in modo automatico durante l'uso di questa Applicazione.<br/>L&rsquo;eventuale utilizzo di Cookie - o di altri strumenti di tracciamento - da parte di questa Applicazione o dei titolari dei servizi terzi utilizzati da questa Applicazione, ove non diversamente precisato, ha la finalit&agrave; di identificare l&rsquo;Utente e registrare le relative preferenze per finalit&agrave; strettamente legate all'erogazione del servizio richiesto dall&rsquo;Utente.<br/>Il mancato conferimento da parte dell&rsquo;Utente di alcuni Dati Personali potrebbe impedire a questa Applicazione di erogare i propri servizi.</p>
        <p>L'Utente si assume la responsabilità dei Dati Personali di terzi pubblicati o condivisi mediante questa Applicazione e garantisce di avere il diritto di comunicarli o diffonderli, liberando il Titolare da qualsiasi responsabilità verso terzi.</p>


        <h2>Modalità e luogo del trattamento dei Dati raccolti</h2>
        <h3>Modalità di trattamento</h3>
        <p>Il Titolare tratta i Dati Personali degli Utenti adottando le opportune misure di sicurezza volte ad impedire l&rsquo;accesso, la divulgazione, la modifica o la distruzione non autorizzate dei Dati Personali.<br/>Il trattamento viene effettuato mediante strumenti informatici e/o telematici, con modalità organizzative e con logiche strettamente correlate alle finalità indicate. Oltre al Titolare, in alcuni casi, potrebbero avere accesso ai Dati categorie di incaricati coinvolti nell’organizzazione del sito (personale amministrativo, commerciale, marketing, legali, amministratori di sistema) ovvero soggetti esterni (come fornitori di servizi tecnici terzi, corrieri postali, hosting provider, società informatiche, agenzie di comunicazione) nominati anche, se necessario, Responsabili del Trattamento da parte del Titolare. L’elenco aggiornato dei Responsabili potrà sempre essere richiesto al Titolare del Trattamento.</p>
        <h3>Luogo</h3>
        <p>I Dati sono trattati presso le sedi operative del Titolare ed in ogni altro luogo in cui le parti coinvolte nel trattamento siano localizzate. Per ulteriori informazioni, contatta il Titolare.</p>
        <h3>Tempi</h3>
        <p>I Dati sono trattati per il tempo necessario allo svolgimento del servizio richiesto dall&rsquo;Utente, o richiesto dalle finalit&agrave; descritte in questo documento, e l&rsquo;Utente pu&ograve; sempre chiedere l&rsquo;interruzione del Trattamento o la cancellazione dei Dati.</p>


        <h2>Finalità del Trattamento dei Dati raccolti</h2>
        <p>
            I Dati dell’Utente sono raccolti per consentire al Titolare di fornire i propri servizi, così come per le seguenti finalità:
            Statistica.
        </p>
        <p>Le tipologie di Dati Personali utilizzati per ciascuna finalit&agrave; sono indicati nelle sezioni specifiche di questo documento.</p>


        <h2>Dettagli sul trattamento dei Dati Personali</h2>
        <p>I Dati Personali sono raccolti per le seguenti finalit&agrave; ed utilizzando i seguenti servizi:</p>
        <ul>
            <li>
                <div>
                    <h3>Statistica</h3>

                    <p>I servizi contenuti nella presente sezione permettono al Titolare del Trattamento di monitorare e analizzare i dati di traffico e servono a tener traccia del comportamento dell’Utente.</p>

                    <h4>Google Analytics (Google)</h4>
                    <p>Google Analytics è un servizio di analisi web fornito da Google Inc. (“Google”). Google utilizza i Dati Personali raccolti allo scopo di tracciare ed esaminare l’utilizzo di questa Applicazione, compilare report e condividerli con gli altri servizi sviluppati da Google.<br/>
                        Google potrebbe utilizzare i Dati Personali per contestualizzare e personalizzare gli annunci del proprio network pubblicitario.</p>
                    <p>
                        Dati personali raccolti:
                        Cookie e Dati di utilizzo.
                    </p>
                    <p>
                        Luogo del trattamento: USA
                        &ndash;
                        <a href="http://www.google.com/intl/it/policies/privacy/" target="_blank">Privacy Policy</a>
                        &ndash;
                        <a href="http://tools.google.com/dlpage/gaoptout?hl=it" target="_blank">Opt Out</a>
                    </p>
                </div>
            </li>
        </ul>





        <h2>Cookie Policy</h2>
        <p>I Cookie sono costituiti da porzioni di codice installate all'interno del browser che assistono il Titolare nell’erogazione del servizio in base alle finalità descritte. Alcune delle finalità di installazione dei Cookie potrebbero, inoltre, necessitare del consenso dell'Utente.</p>

        <h3>Cookie tecnici e di statistica aggregata</h3>

        <h4>Attività strettamente necessarie al funzionamento</h4>
        <p>Questa Applicazione utilizza Cookie per salvare la sessione dell'Utente e per svolgere altre attività strettamente necessarie al funzionamento dello stesso, ad esempio in relazione alla distribuzione del traffico.</p>

        <h4>Attività di salvataggio delle preferenze, ottimizzazione e statistica.</h4>
        <p>Questa Applicazione utilizza Cookie per salvare le preferenze di navigazione ed ottimizzare l'esperienza di navigazione dell'Utente. Fra questi Cookie rientrano, ad esempio, quelli per impostare la lingua e la valuta o per la gestione di statistiche da parte del Titolare del sito. </p>

        <h3>Altre tipologie di Cookie o strumenti terzi che potrebbero farne utilizzo</h3>
        <p>
            Alcuni dei servizi elencati di seguito raccolgono statistiche in forma aggregata e potrebbero non richiedere il consenso dell'Utente o potrebbero essere gestiti direttamente dal Titolare – a seconda di quanto descritto – senza l'ausilio di terzi.
            <br><br>
            Qualora fra gli strumenti indicati in seguito fossero presenti servizi gestiti da terzi, questi potrebbero – in aggiunta a quanto specificato ed anche all’insaputa del Titolare – compiere attività di tracciamento dell’Utente. Per informazioni dettagliate in merito, si consiglia di consultare le privacy policy dei servizi elencati.
        </p>

        <h4>Statistica</h4>

        <p>I servizi contenuti nella presente sezione permettono al Titolare del Trattamento di monitorare e analizzare i dati di traffico e servono a tener traccia del comportamento dell’Utente.</p>

        <h4>Google Analytics (Google)</h4>
        <p>Google Analytics è un servizio di analisi web fornito da Google Inc. (“Google”). Google utilizza i Dati Personali raccolti allo scopo di tracciare ed esaminare l’utilizzo di questa Applicazione, compilare report e condividerli con gli altri servizi sviluppati da Google.<br/>
            Google potrebbe utilizzare i Dati Personali per contestualizzare e personalizzare gli annunci del proprio network pubblicitario.</p>
        <p>
            Dati personali raccolti:
            Cookie e Dati di utilizzo.
        </p>
        <p>
            Luogo del trattamento: USA
            &ndash;
            <a href="http://www.google.com/intl/it/policies/privacy/" target="_blank">Privacy Policy</a>
            &ndash;
            <a href="http://tools.google.com/dlpage/gaoptout?hl=it" target="_blank">Opt Out</a>
        </p>

        <h3>Come posso controllare l'installazione di Cookie?</h3>
        <p>In aggiunta a quanto indicato in questo documento, l'Utente può gestire le preferenze relative ai Cookie direttamente all'interno del proprio browser ed impedire – ad esempio – che terze parti possano installarne. Tramite le preferenze del browser è inoltre possibile eliminare i Cookie installati in passato, incluso il Cookie in cui venga eventualmente salvato il consenso all'installazione di Cookie da parte di questo sito. È importante notare che disabilitando tutti i Cookie, il funzionamento di questo sito potrebbe essere compromesso. L'Utente può trovare informazioni su come gestire i Cookie nel suo browser ai seguenti indirizzi: <a target="_blank" href="https://support.google.com/chrome/answer/95647?hl=it&amp;p=cpn_cookies">Google Chrome</a>, <a target="_blank" href="https://support.mozilla.org/it/kb/Attivare%20e%20disattivare%20i%20cookie">Mozilla Firefox</a>, <a target="_blank" href="https://support.apple.com/kb/PH19214?viewlocale=it_IT&amp;locale=en_US">Apple Safari</a> and <a target="_blank" href="http://windows.microsoft.com/it-it/windows-vista/block-or-allow-cookies">Microsoft Windows Explorer</a>.</p>
        <p>In caso di servizi erogati da terze parti, l'Utente può inoltre esercitare il proprio diritto ad opporsi al tracciamento informandosi tramite la privacy policy della terza parte, tramite il link di opt out se esplicitamente fornito o contattando direttamente la stessa.</p>
        <p>Fermo restando quanto precede, il Titolare informa che l’Utente può avvalersi di <a target="_blank" href="http://www.youronlinechoices.com/">Your Online Choices</a>. Attraverso tale servizio è possibile gestire le preferenze di tracciamento della maggior parte degli strumenti pubblicitari. Il Titolare, pertanto, consiglia agli Utenti di utilizzare tale risorsa in aggiunta alle informazioni fornite dal presente documento.</p>






        <h2>Ulteriori informazioni sul trattamento</h2>
        <h3>Difesa in giudizio</h3>
        <p>
            I Dati Personali dell’Utente possono essere utilizzati per la difesa da parte del Titolare in giudizio o nelle fasi propedeutiche alla sua eventuale instaurazione, da abusi nell'utilizzo della stessa o dei servizi connessi da parte dell’Utente.<br/>L’Utente dichiara di essere consapevole che il Titolare potrebbe essere richiesto di rivelare i Dati su richiesta delle pubbliche autorità.
        </p>
        <h3>Informative specifiche</h3>
        <p>
            Su richiesta dell’Utente, in aggiunta alle informazioni contenute in questa privacy policy, questa Applicazione potrebbe fornire all'Utente delle informative aggiuntive e contestuali riguardanti servizi specifici, o la raccolta ed il trattamento di Dati Personali.
        </p>
        <h3>Log di sistema e manutenzione</h3>
        <p>
            Per necessit&agrave; legate al funzionamento ed alla manutenzione, questa Applicazione e gli eventuali servizi terzi da essa utilizzati potrebbero raccogliere Log di sistema, ossia file che registrano le interazioni e che possono contenere anche Dati Personali, quali l&rsquo;indirizzo IP Utente.
        </p>
        <h3>Informazioni non contenute in questa policy</h3>
        <p>
            Maggiori informazioni in relazione al trattamento dei Dati Personali potranno essere richieste in qualsiasi momento al Titolare del Trattamento utilizzando le informazioni di contatto.
        </p>
        <h3>Esercizio dei diritti da parte degli Utenti</h3>
        <p>
            I soggetti cui si riferiscono i Dati Personali hanno il diritto in qualunque momento di ottenere la conferma dell'esistenza o meno degli stessi presso il Titolare del Trattamento, di conoscerne il contenuto e l'origine, di verificarne l'esattezza o chiederne l&rsquo;integrazione, la cancellazione, l'aggiornamento, la rettifica, la trasformazione in forma anonima o il blocco dei Dati Personali trattati in violazione di legge, nonch&eacute; di opporsi in ogni caso, per motivi legittimi, al loro trattamento. Le richieste vanno rivolte al Titolare del Trattamento.
        </p>
        <p>
            Questa Applicazione non supporta le richieste “Do Not Track”. Per conoscere se gli eventuali servizi di terze parti utilizzati le supportano, consulta le loro privacy policy.
        </p>
        <h3>Modifiche a questa privacy policy</h3>
        <p>
            Il Titolare del Trattamento si riserva il diritto di apportare modifiche alla presente privacy policy in qualunque momento dandone pubblicit&agrave; agli Utenti su questa pagina. Si prega dunque di consultare spesso questa pagina, prendendo come riferimento la data di ultima modifica indicata in fondo. Nel caso di mancata accettazione delle modifiche apportate alla presente privacy policy, l’Utente è tenuto a cessare l’utilizzo di questa Applicazione e può richiedere al Titolare del Trattamento di rimuovere i propri Dati Personali. Salvo quanto diversamente specificato, la precedente privacy policy continuerà ad applicarsi ai Dati Personali sino a quel momento raccolti.
        </p>
        <h3>Informazioni su questa privacy policy</h3>
        <p>
            Il Titolare del Trattamento dei Dati &egrave; responsabile per questa privacy policy, redatta partendo da moduli predisposti da Iubenda e conservati sui suoi server.
        </p>


        <h3>Definizioni e riferimenti legali</h3>
        <h4>Dati Personali (o Dati)</h4>
        <p>Costituisce dato personale qualunque informazione relativa a persona fisica, identificata o identificabile, anche indirettamente, mediante riferimento a qualsiasi altra informazione, ivi compreso un numero di identificazione personale.</p>
        <h4>Dati di Utilizzo</h4>
        <p>Sono i dati personali raccolti in maniera automatica dall&rsquo;Applicazione (o dalle applicazioni di parti terze che la stessa utilizza), tra i quali: gli indirizzi IP o i nomi a dominio dei computer utilizzati dall&rsquo;Utente che si connette all&rsquo;Applicazione, gli indirizzi in notazione URI (Uniform Resource Identifier), l&rsquo;orario della richiesta, il metodo utilizzato nel sottoporre la richiesta al server, la dimensione del file ottenuto in risposta, il codice numerico indicante lo stato della risposta dal server (buon fine, errore, ecc.) il Paese di provenienza, le caratteristiche del browser e del sistema operativo utilizzati dal visitatore, le varie connotazioni temporali della visita (ad esempio il tempo di permanenza su ciascuna pagina) e i dettagli relativi all&rsquo;itinerario seguito all&rsquo;interno dell&rsquo;Applicazione, con particolare riferimento alla sequenza delle pagine consultate, ai parametri relativi al sistema operativo e all&rsquo;ambiente informatico dell&rsquo;Utente.</p>
        <h4>Utente</h4>
        <p>L'individuo che utilizza questa Applicazione, che deve coincidere con l'Interessato o essere da questo autorizzato ed i cui Dati Personali sono oggetto del trattamento.</p>
        <h4>Interessato</h4>
        <p>La persona fisica o giuridica cui si riferiscono i Dati Personali.</p>
        <h4>Responsabile del Trattamento (o Responsabile)</h4>
        <p>La persona fisica, giuridica, la pubblica amministrazione e qualsiasi altro ente, associazione od organismo preposti dal Titolare al trattamento dei Dati Personali, secondo quanto predisposto dalla presente privacy policy.</p>
        <h4>Titolare del Trattamento (o Titolare)</h4>
        <p>La persona fisica, giuridica, la pubblica amministrazione e qualsiasi altro ente, associazione od organismo cui competono, anche unitamente ad altro titolare, le decisioni in ordine alle finalit&agrave;, alle modalit&agrave; del trattamento di dati personali ed agli strumenti utilizzati, ivi compreso il profilo della sicurezza, in relazione al funzionamento e alla fruizione di questa Applicazione. Il Titolare del Trattamento, salvo quanto diversamente specificato, &egrave; il proprietario di questa Applicazione.</p>
        <h4>Questa Applicazione</h4>
        <p>Lo strumento hardware o software mediante il quale sono raccolti i Dati Personali degli Utenti. </p>
        <h4>Cookie</h4>
        <p>Piccola porzione di dati conservata all'interno del dispositivo dell'Utente.</p>
        <hr/>
        <h4>Riferimenti legali</h4>
        <p>Avviso agli Utenti europei: la presente informativa privacy &egrave; redatta in adempimento degli obblighi previsti dall&rsquo;Art. 10 della Direttiva n. 95/46/CE, nonch&eacute; a quanto previsto dalla Direttiva 2002/58/CE, come aggiornata dalla Direttiva 2009/136/CE, in materia di Cookie.</p>
        <p>Questa informativa privacy riguarda esclusivamente questa Applicazione.</p>
    <?php
    }
}

?>