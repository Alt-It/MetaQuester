@extends('layouts.subPages')

@section('title', $title )

@section('content')
<h1>MetaGer - Hilfe
</h1>
<p>Die MetaGer-Hilfe versucht, für möglichst jeden Einstiegs-Level die passende Hilfe anzubieten: Der Profi soll nicht erst langatmige Erklärungen lesen müssen, der Anfänger soll verstehen lernen können, was hier passiert, und wie ES geht.
</p>
<h2>Hilfe zur Benutzung von MetaGer
</h2>
<h3>Allgemeine Einstellungen
</h3>
<ul>
  <li>Alle Einstellungen finden Sie unter dem Suchfokus "anpassen":
  </li>
  <li>Links neben dem Eingabefeld finden Sie den Farbtropfen, der Ihnen eine Anpassung der Farben gestattet.
  </li>
  <li>Ein Plugin für die allermeisten Browser finden Sie leicht über den Link gleich unter dem Suchfeld, wo Ihr Browser bereits voreingestellt sein sollte.
  </li>
</ul>
<h2>Persönliche Einstellungen
</h2>
<h3>Auswahl des Suchfokus
</h3>
<ul>
  <li>Die Voreinstellungen von MetaGer sind so, dass sie für möglichst viele Nutzer die möglichst besten Ergebnisse liefern (sollen). Nun ist es eine menschliche Eigenschaft, unterschiedliches zu wollen: die Eine sucht eher wissenschaftliche Ergebnisse, der Andere möchte eher im Internet einkaufen gehen, und die Dritte will ganz was Anderes. Sie können aus MetaGer wesentlich mehr und treffendere Ergebnisse herausholen, wenn Sie vor Ihrer Suche einen Augenblick überlegen, aus welchem Bereich die von IHNEN gesuchten Ergebnisse kommen sollen.
  </li>
</ul>
<h4>Zum Beispiel eine Suche mit Fokus auf Nachrichten:
</h4>
<ul>
  <li>Klicken Sie auf der Startseite auf “Nachrichten“.
  </li>
  <li>Führen Sie Ihre Suche normal über das Suchfeld durch.
  </li>
  <li>Sie sehen je nach ausgewähltem Fokus angepasste Ergebnisse.
  </li>
  <li>Falls Ihnen die angebotenen Einstellungen nicht zusagen, können Sie sich unter “anpassen“ einen eigenen Fokus zusammenstellen.
  </li>
</ul>
<h3>Die angepassten Einstellungen als Standard setzen
</h3>
<p>Falls Sie keinen unserer angebotenen Foki benutzen, sodern einen selbst zusammengestellten, müssen Sie, um diesen dauerhaft verwenden zu können, Ihre Einstellungen bei Ihnen im Browser speichern. Ansonsten gehen die Einstellungen verloren, da MetaGer nichts speichert. Dafür haben Sie unten auf der Seite zwei Knöpfe zur Verfügung: Der eine generiert eine Variante unser Startseite in der Ihre Einstellungen hinterlegt sind. Sie können diese Startseite als Lezeseichen speichern. Der andere Knopf speichert die Einstllungen in Ihrem Browser im so gennanten “Local Storage“. Dafür wird übrigens Javscript benötigt.
</p>
<h2>Eingaberichtlinien und Hilfen
</h2>
<h3>Stoppworte
</h3>
<ul>
  <li>Wenn Sie unter den MetaGer-Suchergebnissen solche ausschließen wollen, in denen bestimmte Worte (Ausschlussworte / Stopworte) vorkommen, dann erreichen Sie das, indem Sie Ihr Suchwort in das Suchfeld schreiben, dann ein Leerzeichen, dann ein Minus-Zeichen, dann ein Ausschlusswort. 
  </li>
  <li>Ein Beispiel: Sie suchen ein neues Auto, aber auf keinen Fall einen BMW.... Ihre Eingabe lautet also: auto neu -BMW
  </li>
</ul>
<h3>Mehrwortsuche
</h3>
<p>Bei einer Mehrwortsuche werden als Voreinstellung diejenigen Dokumente gesucht, in denen alle Worte vorkommen. Die Suche nach mehreren Begriffen zeigt annähernd gleiche Ergebnisse mit oder ohne Verwendung von Anführungszeichen. Wenn Sie jedoch zum Beispiel ein längeres Zitat oder so etwas suchen, sollten Sie Anführungszeichen verwenden.
</p>
<ul>
  <li>Beispiel: die Suche nach "in den öden Fensterhöhlen" liefert viele Ergebnisse, aber spannend (und genauer) wird es bei der Suche: Schiller "in den öden Fensterhöhlen"
  </li>
</ul>
<h3>Groß-/ Kleinschreibung
</h3>
<p>wird bei der Suche nicht unterschieden, es handelt sich um eine rein inhaltliche Suche.
</p>
<h3>Suchwortassoziator
</h3>
<p>Ein großes Problem der Informationsbeschaffung aus dem Internet wird durch die obige Überschrift deutlich: Bei einer Suche in einem bestimmten Fachgebiet sind oftmals die richtigen Suchwörter, die Fachbegriffe und das Begriffsumfeld noch gar nicht bekannt. Um dieses Begriffsumfeld mit einem Mausklick erschließen zu können, haben wir den 
  <a href="https://metager.de/klassik/asso/" target="_blank">MetaGer-Web-Assoziator
  </a> entwickelt; Sie finden das Tool unter dem Reiter "Dienste". Gibt man in diesen ein Suchwort ein, welches dem zu untersuchenden Fachgebiet "irgendwie" nahe kommt, dann wird versucht, typische Fachbegriffe dieses Gebietes aus dem WWW zu extrahieren.
</p>
<p>Beispiel: Sie möchten mehr über Zeckenbisse und deren Gefahren wissen, aber ihnen fallen die medizinischen Fachbegriffe für Erkrankungen aus diesem Bereich nicht mehr ein. Die Eingabe des Wortes "Zeckenbisse" in den Web-Assoziator liefert dann u.a. die Begriffe "Borreliose" und "fsme".
</p>
<p>Da diese Assoziationsanalyse u.a. aus Web-Dokumenten selber gewonnen wird, ist sie sprachunabhängig; d.h. Sie können bei Eingabe deutscher Wörter Fachbegriffe aus beliebigen Sprachen gewinnen (und umgekehrt). Wenn Ihnen andererseits Assoziationsanalysen auffallen, die mit Hilfe Ihrer Fachkenntnisse besser sein könnten, dann zögern Sie bitte nicht, uns dieses samt Ihrem Verbesserungsvorschlag 
  <a href="https://metager.de/kontakt/" target="_blank">über unser Kontaktformular 
  </a>mitzuteilen.
</p>
<h2>Anonymität und Datensicherheit
</h2>
<h3>Cookies, Session-IDs und IP-Adressen
</h3>
<p>Nichts von alldem wird hier bei MetaGer gespeichert, aufgehoben oder sonst irgendwie verarbeitet. Weil wir diese Thematik für extrem wichtig halten, haben wir auch Möglichkeiten geschaffen, die Ihnen helfen können, hier ein Höchstmaß an Sicherheit zu erreichen: den MetaGer-TOR-Hidden-Service und unseren Proxyserver.
</p>
<p>Genauere Informationen dazu, zu anderen Themen und auch allgemein zu unserem Umgang mit Daten finden Sie in unseren 
  <a class="collapsed" href="#faq">MetaGer FAQ
  </a> der Liste der häufig gefragten Fragen und Antworten. Wenn Ihnen weiteres auf- oder einfällt, was man ein- oder ausstellen können sollte, oder wenn Sie dazu Fragen haben: Schreiben Sie uns eine 
  <a href="https://metager.de/kontakt/" target="_blank">Mail.
  </a>
</p>
<h1 id="faq">Die häufigsten Fragen und Antworten zu MetaGer:
</h1>
<ol>
  <li>
    <p>Was ist MetaGer? 
    </p>
    <p>MetaGer ist eine Suchmaschine, welche deutschsprachige (und bei Bedarf auch internationale) Suchdienste parallel nach den von Ihnen eingegebenen Suchworten absucht und alle Ergebnisse zusammenfasst. So etwas nennt man eine Meta-Suchmaschine. Wenn man also sinnvoll suchen will, dann muß man etliche Suchmaschinen nacheinander "von Hand" absuchen und alle Ergebnisse vergleichen und zusammenführen. Diese Arbeit kann einem ein Automat - die Metasuchmaschine - abnehmen.
    </p>
  </li>
  <li>
    <p>Wozu braucht man sowas? 
    </p>
    <p>Jede einzelne Suchmaschine kennt nur einen Bruchteil der Informationen im Internet - nach früheren Untersuchungen am NEC Lab waren es im besten Falle ca. ein Drittel. Eine Studie des NEC Lab vom Februar 1999 zeigte beispielsweise, dass der Abdeckungsgrad der Suchmaschinen nur ca. 16% des Web-Inhaltes betrug. Andere Studien gehen teilweise sogar von einem noch deutlich geringeren Abdeckungsgrad aus; auch aktuellere, vergleichende Untersuchungen der Suchmaschinen Google, Ask Jeeves, MSN search and Yahoo an der University of Pittsburgh und der Penn State University zeigen klare Vorteile der Meta-Suche: 
    </p>
  </li>
  <li>
    <p>Ich hätte gern noch etwas genauer gewusst: Was ist eine Meta-Suchmaschine? 
    </p>
    <p>Klicken Sie für eine kurze Erklärung auf 
      <a href="https://de.wikipedia.org/wiki/Metasuchmaschine" target="_blank">Wikipedia
      </a>, oder lesen Sie für eine ausführliche Beschreibung den Aufsatz "Die Internet-Suchmaschinen der Zukunft" (Zeitschrift c't 13/98, S. 178, Heise Verlag).
    </p>
  </li>
  <li>Wenn Meta-Suchmaschinen so "toll" sind, wozu braucht man denn überhaupt noch "normale" Suchmaschinen?
  </li>
  <ul>
    <li>Erstens "leben" Meta-Suchmaschinen von den "normalen" Suchmaschinen - ohne sie gäbe es keine Meta's.
    </li>
    <li>Und zweitens: so "toll" sind Meta-Suchmaschinen nun auch wieder nicht: Sie können nur so gut (oder schlecht) sein, wie der "kleinste gemeinsame Nenner" aller von der Metamaschine abgesuchten "normalen" Suchmaschinen. Letztere bieten häufig oft wesentlich detailliertere Suchmöglichkeiten; d.h. Sie können, wenn Sie die Zielrichtung Ihrer Suche erstmal kennen, dann genauer und treffsicherer dort suchen. Daher empfehlen wir ja auch für detaillierte Suchvorgänge die Suchmachinen direkt zu benutzen. Für einen ersten Einstieg und Überblick, und die Entscheidung, bei welcher Suchmaschine sucht man weiter, ist hingegen eine Metamaschine wahrscheinlich besser geeignet. Wenn Sie eine gute und ziemlich vollständige Übersicht deutscher Suchmaschinen suchen, dann gehen Sie auf 
      <a href="http://www.klug-suchen.de/" target="_blank">klug-suchen.de.
      </a>
    </li>
  </ul>
  <li>
    <p>Welche Suchdienste sucht MetaGer ab? 
    </p>
    <p>Diejenigen, welche untern anpassen mit einem * versehen sind werden in der Web-Suche benutzt.
    </p>
  </li>
  <li>Warum gibt es keinen Schalter "Suche über alle Suchdienste"?
  </li>
  <p>Dafür gibt es zwei Gründe:
  </p>
  <ul>
    <li>Weil etliche der abgesuchten Suchdienste das nicht wollen: wenn es so einen Schalter gäbe, dann würden die Suchdienste mit kleineren Hardware- Resourcen von MetaGer durch die vielen Abfragen "platt gemacht" - und das wollen wir natürlich nicht.
    </li>
    <li>Weil es nicht sinnvoll ist: Wir suchen mit MetaGer sehr viele Suchdienste der unterschiedlichsten Art ab. Dabei macht es z.B. keinen Sinn, auf der Suche nach wissenschaftlichen Ergebnissen auch die Produktsuchmaschinen einzuschalten und umgekehrt. Die Ergebnisse aus unterschiedlichsten Bereichen einer Suche eignen sich nicht zum Vermischen. 
    </li>
  </ul>
  <li>
    <p>Warum fragt Ihr den Suchdienst XY [nicht ab | nicht mehr ab | doch ab]? 
    </p>
    <p>Sie können davon ausgehen, dass wir alle Suchdienste von einigermaßen Bedeutung kennen; wenn davon einer bei uns nicht aufgenommen ist, dann hat das IMMER handfeste Gründe. Wenn wir einen Suchdienst nicht mehr abfragen, den wir früher dabei hatten, dann hat das ebensolche handfesten Gründe (über die es müßig zu diskutieren ist). Wenn Sie wissen wollen, was solche "handfeste" Gründe sein können, dann sind das beispielsweise: Technische Gründe: die Verbindung dorthin ist zu schwach, der dortige Rechner zu klein usw. Konzeptionelle Gründe: dieser Suchdienst bietet z.B. keine Option für eine deutschsprachige Suche "Politische" Gründe: dieser Suchdienstbetreiber "mag" uns nicht (was wir selbstverständlich respektieren müssen) Gründe bei uns: wir beurteilen das Angebot dieses Suchdienstbetreibers als für MetaGer nicht gut genug, u.v.a.m.
    </p>
  </li>
  <li>
    <p>Wie sucht MetaGer? 
    </p>
    <p>MetaGer gibt Ihr/e Suchwort/e an die Suchdienste weiter, und holt von dort die Ergebnisse ab. Vorher macht MetaGer allerdings noch etwas: wir suchen in einer vorwiegend lokalen Wissensbasis, das sind die QuickTips. Diese QuickTip-Suche läuft parallel zu der Meta-Suche. Sie können dort evtl. sehr schnell gefundene Ergebnisse sofort anklicken, die eigentliche Suche läuft parallel weiter.
    </p>
  </li>
  <li>
    <p>Was macht MetaGer mit den Ergebnissen der Suchdienste? 
    </p>
    <p>MetaGer versucht, die Ergebnisse möglichst sinnvoll aufzubereiten. Dabei werden (möglichst) alle doppelten Treffer (Doubletten) zu einem zusammengefasst. Eine 100%ige Erkennung von Doubletten ist allerdings unmöglich.
    </p>
  </li>
  <li>
    <p>Einer der von MetaGer abgefragten Suchdienste (der auch tatsächlich geantwortet hat), findet auf einmal nichts mehr, auch nicht Begriffe, zu denen er bisher immer etwas gefunden hat - was ist da los? 
    </p>
    <p>Dann ist dasselbe passiert, wie in dem hiervor beschriebenen Absatz: Einer der von MetaGer abgefragten Suchdienste hat sein Ausgabeformat geändert, und bringt damit unsere Programme durcheinander. In diesem Falle bitten wir Sie, uns dann sofort eine Mail zu senden, damit wir etwas dagegen tun können. 
    </p>
  </li>
  <li>
    <p>Fragwürdige Inhalte
    </p>
  </li>
  <ul>
    <li>Ich habe "Treffer" erhalten, die nichts mit meiner Frage zu tun hatten - wie ist das möglich?
    </li>
    <li>Ich habe "Treffer" erhalten, die finde ich (mehr als) ärgerlich: dort steht nichts als Unsinn geschrieben!
    </li>
    <li>Ich habe "Treffer" erhalten, die finde ich nicht nur ärgerlich, sondern die enthalten meiner Meinung nach illegale Inhalte!
    </li>
  </ul>
  <p>Wenn Sie im Internet etwas finden, das Sie für illegal oder jugendgefährdend halten, dann können Sie sich per Mail an hotline@jugendschutz.net wenden oder Sie gehen auf http://www.jugendschutz.net/ und füllen das dort zu findende Beschwerdeformular aus. Sinnvoll ist ein kurzer Hinweis, was Sie konkret für unzulässig halten und wie Sie auf dieses Angebot gestoßen sind. Direkt an uns können Sie fragwürdige Inhalte auch melden. Schreiben Sie dazu eine Mail an unseren 
    <a href="mailto:jugendschutz@metager.de" class="link">Jugendschutzbeauftragten
    </a>
  </p>
  <li>
    <p>Kann ich MetaGer in meine eigene Homepage einbauen? 
    </p>
    <p>Ja, das können Sie gern machen, und das geht auch ganz einfach: 
      Klicken Sie oben rechts im Menu auf "Dienste/Widget" und folgen Sie den Anweisungen. Das Tool generiert einen Code nach Ihren Angaben, den Sie dann so in Ihre Internetseiten einfügen können. Sie haben die Wahl zwischen einer kompletten Websuche und einer Suche, die sich nur auf Ihre eigenen Webseiten bezieht. Oder natürlich beides!
    </p>
  </li>
  <li>
    <p>Kann ich MetaGer per E-Mail benutzen, also eine Abfrage per E-Mail abschicken und die Antwort später erhalten?
    </p>
    <p>Das ging bis vor einiger Zeit in Zusammenarbeit und dank der Unterstützung des International Centre for Theoretical Physics in Triest mittels eines Mail-To-Web Gateways. Leider ist dieser Service dort offenbar eingestellt. Kurz-und-gut (nein: schlecht): derzeit geht das leider nicht.
    </p>
  </li>
  <li>
    <p>Wo kann ich bei MetaGer meine Homepage/URL/etc. anmelden ?
    </p>
    <p>Gar nicht. MetaGer ist eine MetaSuchmaschine. Sie sucht nicht selber, sondern lässt andere Suchdienste suchen. Wenn Sie Ihre eigenen WWW-Seiten den Suchmaschinen bekannt geben wollen, dann müssen Sie die Suchmaschinen einzeln aufsuchen, bei denen Sie Ihre Seiten anmelden wollen.
    </p>
  </li>
  <li>
    <p>Wie genau funktioniert das Ranking bei MetaGer? 
    </p>
    <p>Dazu machen wir aus nahe liegenden Gründen keine Angaben
    </p>
  </li>
  <li>
    <p>Mit meinem XYZ-Browser und dem XYZ-Betriebssystem kann ich MetaGer nicht abfragen. Was tun?
    </p>
    <p>Versuchen Sie unbedingt zu allererst, das aktuelle Plugin zu installieren. Zum Installieren einfach auf den Link direkt unter dem Suchfeld klicken. Dort sollte Ihr Browser schon erkannt worden sein. Wenn Sie dann noch Probleme haben sollten, wenden Sie sich bitte an uns: office@suma-ev.de
    </p>
  </li>
  <li>
    <p>Wo habt ihr eigentlich all' die klugen Sprüche eures "Sprücheklopfers" her? 
    </p>
    <p>Sie sind aus Quellen im Internet zusammengesucht. Den größten Teil hatte uns netterweise Alexander Hammer zur Verfügung gestellt. Schönen Dank!
      Nebenbei bemerkt: Wir teilen keineswegs die inhaltliche Meinung, die in jedem Spruch zum Ausdruck kommt! Sprüche sollen und müssen kontroverses darstellen. Wer keine andere Meinung als die seine akzeptieren kann, sollte den Sprücheklopfer ausschalten.(Durch unsere “anpassen“-Funktion)
    </p>
  </li>
  <li>
    <p>Wie kann ich die Anzeige meiner vorherigen Suchen löschen? 
    </p>
    <p>Folgende nette Mail ist symptomatisch für diese Art der Frage: 
    </p>
    <p>Sehr geehrte Damen und Herren, ich habe ein Problem mit den Suchfunktionen. Das Problem ist, wenn ich eine gewisse Suche z.B. Erotikseiten durchgeführt habe, wie lässt sich diese Suche wieder löschen? Wenn ich nur ein E eingebe, erscheinen darunter wieder Erotikseiten. Das möchte ich wegen meiner Kinder vermeiden.
    </p>
    <p>Die Antwort darauf: Dieses Problem hat NICHTS mit MetaGer zu tun, sondern ist eine Einstellung Ihres lokalen Systems (Browser und/oder Betriebssystem). Wie Sie das abschalten oder löschen, müssen Sie auf Ihrem System selber herausfinden. Hierbei einfach unsere Suche benutzten. 
    </p>
  </li>
  <li>
    <p>Wie haltet ihr es eigentlich mit dem Datenschutz, wie lange wird bei euch was gespeichert? 
    </p>
    <p>Der Schutz persönlicher Daten ist uns so wichtig, dass wir alles, was dem zuwiderlaufen könnte, gar nicht erst machen: es gibt bei uns keine Cookies oder Session-IDs oder irgendetwas, was so etwas ermöglichen würde.
    </p>
    <p>Was es bei jeder Suchmaschine gibt (und wogegen auch wir nichts tun können), das sind die bei den Abfragen mitgesendeten IP-Adressen. Auch dies können personenbezogene Daten sein. Darum speichern wir auch diese Adressen NICHT - und zwar überhaupt nicht, auch nicht tageweise, und schon gar nicht für Jahre. Sondern die IP-Adressen werden bereits, während Ihre Suche noch läuft, anonymisiert. Auch die anonymisierten IP-Adressen speichern wir NICHT, denn es ist sonst nicht auszuschließen, dass sie in der Zukunft mit stark verbesserten Entschlüsselungsverfahren deanonymisiert werden könnten. Und: IP-Adressen werden in keinem Falle an andere, von MetaGer abgefragte Suchdienste weitergegeben. Nach unseren Erfahrungen kommt der Betrieb von Suchmaschinen sehr gut OHNE Speicherung von IP-Adressen aus.
    </p>
    <ul>
      <li>
        <p>Wenn Sie generell (unabhängig von MetaGer) ohne Speicherung Ihrer IP-Adresse im Internet surfen wollen, dann können Sie am einfachsten einen der freien und kostenlosen Proxies benutzen; unter http://www.freeproxies.org/list.htm finden sie z.B. eine umfangreiche Liste des FreeProxies.org Netzwerkes oder bei Speedtest.at. Da sich die kostenlosen Proxies über Werbung finanzieren, müssen sie mit störenden Werbeeinblendungen rechnen. Wenn Sie das vermeiden wollen, können Sie einen der kommerziellen Proxy-Anonymisierungsdienste verwenden: wie z.B. oder www.anonymizer.com. Hier können Sie, nach Tarifen gestaffelt, auch eine höhere Leistungsfähigkeit erwarten. Bei der Anonymisierung durch Proxies sind Sie gegenüber dem Betreiber des Dienstes allerdings nicht anonym - Sie müssen dem Betreiber also vertrauen, dass er Ihre Anonymität wahrt.
        </p>
      </li>
      <li>
        <p>Wenn Sie Ihre Anonymität noch weiter absichern wollen, dann können Sie Teilnehmer am Tor Netzwerk werden. MetaGer bietet für den Zugang über das Tor-Netz einen "Tor-hidden"-Zugang an: die Einzelheiten sind 
          <a href="https://metager.de/hilfe/#TORanleitung" target="_blank">hier 
          </a>beschrieben. Da der Umgang mit dem Tor-Netz und die Installation eines Tor-Browsers für viele Nutzer doch eine erhebliche Hürde darstellen, haben wir eine weitere Möglichkeit bereit gestellt, auch die MetaGer-Ergebnisseiten anonym zu erreichen: einen Proxyserver
        </p>
      </li>
      <li>
        <p>Um ihn zu verwenden, müssen Sie auf der MetaGer-Ergebnisseite nur auf den Link "anonym öffnen" rechts neben dem eigentlichen Ergebnislink klicken. Dann wird Ihre Anfrage an die Ziel-Webseite über unseren anonymisierenden Proxy-Server geleitet, und Ihre persönlichen Daten bleiben weiterhin völlig geschützt. Wichtig: wenn Sie ab dieser Stelle den Links auf den Seiten folgen, bleiben Sie durch den Proxy geschützt. Sie können aber oben im Adressfeld keine neue Adresse ansteuern. In diesem Fall verlieren Sie den Schutz. Ob Sie noch geschützt sind, sehen Sie ebenfalls im Adressfeld. Es zeigt: https://proxy.suma-ev.de/?url=hier steht die eigentlich Adresse.
        </p>
      </li>
      <li>
        <p>Selbstverständlich erfolgt der Zugang zu MetaGer immer automatisch nur über das verschlüsselnde https-Protokoll. Damit sind Ihre Suchabfragen auch auf dem Übertragungsweg von Ihrem PC zum MetaGer-Server sicher. Vielleicht noch ein paar Worte zur Anonymität im Internet generell. Wir wollen hier nicht die Frage diskutieren, ob "Anonymität im Internet" eher ein "moralisches Grundrecht" oder eher ein "Übel" ist - für beides gibt es Argumente. Aber Sie sollten wissen, dass Anonymität im Internet kein "entweder-oder" Begriff ist. Es gibt (wie im richtigen Leben) immer nur mehr oder weniger Anonymität. Bei uns haben Sie mehr davon. Ganz genau wissen wir das natürlich auch nicht, was in anderen Suchmaschinen vor sich geht. Es ist wahrscheinlich aber so, dass die meisten Suchmaschinen IP-Adressen usw. speichern. Denn wenn sie es nicht täten, würden sie es gross und deutlich schreiben. Was andere Suchmaschinen dann mit diesen Daten machen, das ist die größte Unbekannte. Dass Google diese Daten auswertet ist am Beispiel Flu Trends (Grippewellenvorhersage) augenfällig. Und so wie "Flu Trends" kann man natürlich auch andere Trends damit vorhersagen (Kaufverhaltenswellen, politische Meinungswellen usw). 
        </p>
      </li>
    </ul>
  </li>
  <li>
    <p>Über welche Wege kann nun eine Zuordnung zu Personen hergestellt werden? 
    </p>
    <p>Die Zuordnung kann dann hergestellt werden, wenn sich ein Nutzer bei einem Dienst eines Anbieters (z.B. Google-Mail) persönlich angemeldet hat. Dann wird ein Cookie für diesen Anmelder gesetzt. Bei einer späteren Suche ist dann dieser Anmelder anhand des Cookies identifiziert. Es sein denn: der (schlaue) Anwender löscht den Cookie ;-) Aber die wenigsten tun das. Eine exakte Zuordnung über die IP-Adresse zur Person ist nur mit Hilfe des Providers möglich. Dies wird im Normalfall wahrscheinlich nicht geschehen. Aber es gibt weitere Indizien: auch anhand einer wechselnden IP ist ohne Mithilfe des Providers eine ungefähre geografische Zuordnung möglich. Darüber hinaus sendet der Browser weitere Daten, wie z.B. den User-Agent, dessen genaue Version und Arbeitsumgebung, das Betriebssystem und dessen exakte Version und ggf. Patch-Level. Auch mit diesen Daten ist eine Zuordnung zur Person des Anmelders, wenn dessen Daten durch die Anmeldung zu einem Dienst erst einmal bekannt sind, mit hoher Wahrscheinlichkeit möglich.
    </p>
  </li>
  <li>
    <p>Wie ist MetaGer eigentlich entstanden, wie ist die Geschichte von MetaGer? 
    </p>
    <p>MetaGer gibt es seit 1996 ... die Einzelheiten der Entstehungsgeschichte kann man hier in einem Interview nachlesen: http://blog.suma-ev.de/node/207.
    </p>
  </li>
  <li>
    <p>Darf ich einen Link auf euch setzen? oder Darf ich auf euch verlinken ?
    </p>
    <p>Ja! Sie dürfen 1000-sende von Links auf uns setzen!! Sie dürfen das selbst dann, wenn Sie über manche Dinge des Lebens eine andere Meinung haben als wir, selbst dann, wenn Sie nicht die gleiche Partei wählen oder eine andere Meinung über die einzig richtige Art der Rechtschreibung haben. Sie dürfen Links auf alles von uns setzen, was Sie wollen. Je mehr, je besser!
    </p>
  </li>
  <li>
    <p>MetaGer als TOR-hidden-Service 
    </p>
    <p>Bei MetaGer werden schon seit vielen Jahren die Internet-Adressen der Nutzer anonymisiert und nicht gespeichert. Nichtsdestotrotz sind diese Adressen auf dem MetaGer-Server sichtbar: wenn sich also ein Angreifer auf MetaGer eingehackt haben sollte, dann kann dieser Angreifer Ihre Adressen mitlesen und auf seinen Servern speichern. Nun befindet sich MetaGer zwar in der sicherlich am denkbar besten gegen Hacker gesicherten Umgebung, nämlich dem Rechenzentrum der Uni Hannover, aber eine 100%ige Sicherheit gegen Hacker - seien es NSA-Staats-Hacker oder andere - gibt es nirgends. Daher haben wir einen neuen Zugang zu MetaGer implementiert, der nach heutigem Stand des Wissens die höchste Sicherheitsstufe bietet, bei dem Ihre Internet-Adressen auf dem MetaGer-Server gar nicht erst sichtbar werden:
      Der MetaGer-TOR-hidden-Service - erreichbar über: 
      <a href="https://metager.de/tor/" target="_blank">https://metager.de/tor/
      </a>
    </p>
    <p>Ohne in diffizile Details zu verzweigen, hier eine kurze Anleitung, wie Sie MetaGer über diesen Service nutzen können (der Klick allein auf den o.g. Link genügt nicht!): 1) Gehen Sie auf die Webseite des TOR-Projektes: und dort klicken auf: "Download Tor". 2) Den "Tor-Browser" auf Ihrem PC installieren. Das ist wirklich einfach, es muss nichts kompiliert/konfiguriert etc. werden. Dieser Tor-Browser ist eine angepasste Instanz des Firefox. 3) In diesem Tor-Browser die Adresse http://metager.de/tor eingeben 4) Dann auf den Button klicken: "MetaGer hidden öffnen" Dann nutzen Sie MetaGer so anonym, wie es nach heutigem Stand der Internet-Technik möglich ist. Wenn Sie den "Tor Browser" installiert haben, dann können Sie den MetaGer-TOR-hidden-Service auch direkt erreichen: http://b7cxf4dkdsko6ah2.onion/tor/ Wer mehr über den TOR-hidden-Service wissen möchte: unter https://www.torproject.org/docs/hidden-services.html.en gibt es eine gute Erklärung. In diesen Zeiten der Internet-Totalüberwachung sollten wir tun, was wir können, um den Überwachern das Spionieren zu erschweren - zumindest aber "Sand ins Getriebe streuen".
    </p>
  </li>
</ol>
@endsection