=== >Shy< ===
Contributors: aoshiftctrl
Tags: shortcode, typografie, silbentrennung, shy
Requires at least: 5.2
Tested up to: 7.1
Stable tag: 1.1.2
Requires PHP: 8.0
License: CC BY-ND 4.0
License URI: https://creativecommons.org/licenses/by-nd/4.0/

Fügt mit dem Shortcode [shy] weiche Trennstriche in Beitragsinhalte ein, damit lange Wörter sauber umbrechen.

== Description ==

Lange Komposita wie „Donaudampfschifffahrtsgesellschaft“ sprengen schmale Spalten. An jeder Stelle, an der `[shy]` steht, darf der Browser das Wort trennen. Passt das Wort in die Zeile, bleibt der Trennstrich unsichtbar.

Beispiel:

`Donau[shy]dampf[shy]schiff[shy]fahrts[shy]gesellschaft`

Der Shortcode wirkt nur dort, wo WordPress Shortcodes ausführt: im Beitrags- und Seiteninhalt, in Text- und Block-Widgets sowie in den Templates und Template-Parts von Block-Themes. In Menüeinträgen wirkt er nicht. Siehe FAQ.

= Technik =

* Shortcode `[shy]` ohne Attribute, Ausgabe ist die numerische Entity `&#173;` (U+00AD). Sie ist anders als `&shy;` auch in XML gültig.
* Registriert wird auf `init` mit der spätesten Priorität. Hat bis dahin ein anderes Plugin oder das Theme einen Shortcode `shy` registriert, wird er nicht überschrieben.
* In der Datenbank bleibt `[shy]` als Text gespeichert, ersetzt wird erst bei der Ausgabe.

== Installation ==

1. Den Plugin-Ordner nach `wp-content/plugins/` kopieren.
2. Das Plugin unter „Plugins“ aktivieren.
3. `[shy]` im Inhalt eines Beitrags oder einer Seite an den gewünschten Trennstellen einfügen.

== Frequently Asked Questions ==

= Funktioniert das im Block-Editor? =

Ja, `[shy]` kann in jeden Textblock geschrieben werden. Im Editor steht es als normaler Text da, die Trennstriche wirken erst im Frontend.

= Warum erscheint [shy] in Titeln, Auszügen oder Menüs als Text? =

WordPress führt Shortcodes dort nicht aus. In Beitragstiteln (auch in Archivlisten, im Browser-Tab und im Titel der Feed-Einträge), in von Hand eingetragenen Textauszügen, in Menüeinträgen, Kategorie- und Schlagwortnamen, dem Seitentitel und Bildunterschriften außerhalb des Inhalts erscheint `[shy]` daher wörtlich. Dort stattdessen das Zeichen U+00AD direkt eingeben (macOS: Zeichenübersicht, „weicher Trennstrich“).

= Was passiert in RSS-Feeds und automatischen Auszügen? =

Im Inhalt der Feed-Einträge wird der Shortcode wie im Frontend ersetzt. Aus automatisch erzeugten Auszügen entfernt WordPress alle Shortcodes, dort steht das Wort ohne Trennstellen.

= Hat das Auswirkungen auf Suche, SEO und Screenreader? =

Im ausgegebenen HTML ist der weiche Trennstrich für Suchmaschinen und Screenreader in der Regel unsichtbar. Einzelne Screenreader lesen so getrennte Wörter aber in Teilen oder falsch betont vor, und beim Kopieren aus der Seite wandert das Zeichen mit in die Zwischenablage. In der Datenbank steht aber `Donau[shy]dampf…`. Die WordPress-Suche findet den Beitrag deshalb nicht über das ganze Wort, und SEO-Plugins, die den Rohinhalt auswerten, sehen die Wortteile einzeln.

== Changelog ==

= 1.1.2 =
* Kein Fatal Error mehr neben einer Kopie der Version 1.1.0, unabhängig von der Ladereihenfolge.
* Registrierung auf `init` statt beim Laden der Datei. Die Prüfung aus 1.1.0 lief zu früh und fand später registrierte Shortcodes nicht.
* Ausgabe als `&#173;` statt `&shy;`.
* Readme korrigiert: Der Shortcode wirkt nicht in Menüeinträgen, aber im Inhalt von Feeds. Einschränkungen bei Auszügen und Screenreadern ergänzt.

= 1.1.1 =
* Kein Fatal Error mehr, wenn das Plugin doppelt installiert ist.
* Readme auf Deutsch, Einschränkungen bei Titeln und Suche dokumentiert.
* Getestet mit WordPress 7.1.

= 1.1.0 =
* ABSPATH-Prüfung ergänzt.
* Prüfung mit shortcode_exists(), damit ein bestehender Shortcode nicht überschrieben wird.

= 1.0.0 =
* Erste Version.

== Upgrade Notice ==

= 1.1.2 =
Behebt einen Fatal Error bei doppelter Installation. Die Ausgabe ändert sich von `&shy;` zu `&#173;`.

= 1.1.1 =
Kleine Korrektur, Update unbedenklich.
