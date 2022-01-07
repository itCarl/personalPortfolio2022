@extends('layouts/default')

@section('title', 'Privacy')

@section('content')
    <div class="wrapper">
        <a href="{{url('/')}} {{-- url()->previous() --}}" class="link-home">
            <i class="fas fa-lg fa-arrow-left"></i>
            Home
        </a>

        <h3 style="display:flex; width:100%; justify-content: center;"> Datenschutz </h3>

        <div class="privacy">
            <h5> Nutzung von Google Analytics </h5>
            <p> 
                Wir verwenden Google Analytics, um die Website-Nutzung zu analysieren. Die daraus gewonnenen Daten werden genutzt, um unsere Website sowie Werbemaßnahmen zu optimieren.
            </p>
            <p>
                Google Analytics ist ein Webanalysedienst, der von Google Inc. (1600 Amphitheatre Parkway, Mountain View, CA 94043, United States) betrieben und bereitgestellt wird. Google verarbeitet die Daten zur Website-Nutzung in unserem Auftrag und verpflichtet sich vertraglich zu Maßnahmen, um die Vertraulichkeit der verarbeiteten Daten zu gewährleisten.
            </p>
            <p>
                Während Ihres Website-Besuchs werden u.a. folgende Daten aufgezeichnet:
            </p>
            <ul> 
                <li> Aufgerufene Seiten </li>
                <li> Die Erreichung von "Website-Zielen" (z.B. Kontaktanfragen und Newsletter-Anmeldungen) </li>
                <li> Ihr Verhalten auf den Seiten (beispielsweise Klicks, Scroll-Verhalten und Verweildauer) </li>
                <li> Ihr ungefährer Standort (Land und Stadt) </li>
                <li> Ihre IP-Adresse (in gekürzter Form, sodass keine eindeutige Zuordnung möglich ist) </li>
                <li> Technische Informationen wie Browser, Internetanbieter, Endgerät und Bildschirmauflösung </li>
                <li> Herkunftsquelle Ihres Besuchs (d.h. über welche Website bzw. über welches Werbemittel Sie zu uns gekommen sind) </li>
            </ul>
            <p>
                Diese Daten werden an einen Server von Google in den USA übertragen.
            </p>
            <p>
                Google Analytics speichert Cookies in Ihrem Webbrowser für die Dauer von zwei Jahren seit Ihrem letzten Besuch. Diese Cookies enthaltene eine zufallsgenerierte User-ID, mit der Sie bei zukünftigen Website-Besuchen wiedererkannt werden können.
            </p>
            <p>
                Die aufgezeichneten Daten werden zusammen mit der zufallsgenerierten User-ID gespeichert, was die Auswertung pseudonymer Nutzerprofile ermöglicht. Diese nutzerbezogenen Daten werden automatisch nach 14 Monaten gelöscht. Sonstige Daten bleiben in aggregierter Form unbefristet gespeichert.
            </p>
            <p>    
                Sollten Sie mit der Erfassung nicht einverstanden sein, können Sie diese mit der einmaligen Installation des 
                <a href="https://tools.google.com/dlpage/gaoptout?hl=de" target="_blank" rel="noopener noreferrer"> Browser-Add-ons zur Deaktivierung von Google Analytics </a> 
                unterbinden oder durch das Ablehnen der Cookies über unseren Cookie Einstellungs Dialog.
            </p>

            <p>
                <em> Quelle: <a href="https://traffic3.net/" target="_blank" rel="noopener noreferrer">traffic3.net</a> </em>
            </p>
        </div>
    </div>

@endsection