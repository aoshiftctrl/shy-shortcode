=== [shy] Shortcode ===
Contributors: aoshiftctrl
Tags: shortcode, typografie, silbentrennung, shy
Requires at least: 5.2
Tested up to: 7.1
Stable tag: 1.1.1
Requires PHP: 8.0
License: CC BY-ND 4.0
License URI: https://creativecommons.org/licenses/by-nd/4.0/

Fügt mit dem Shortcode [shy] weiche Trennstriche in Beitragsinhalte ein, damit lange Wörter sauber umbrechen.

== Description ==

Lange Komposita wie „Donaudampfschifffahrtsgesellschaft“ sprengen schmale Spalten. An jeder Stelle, an der `[shy]` steht, darf der Browser das Wort trennen. Passt das Wort in die Zeile, bleibt der Trennstrich unsichtbar.

Beispiel:

`Donau[shy]dampf[shy]schiff[shy]fahrts[shy]gesellschaft`

Der Shortcode wirkt nur dort, wo WordPress Shortcodes ausführt: im Beitrags- und Seiteninhalt, in Text- und Block-Widgets und im Navigation-Block. Siehe FAQ.

= Technik =

* Shortcode `[shy]` ohne Attribute, Ausgabe ist die HTML-Entity `&shy;` (U+00AD).
* Ist der Shortcode `shy` beim Laden des Plugins schon von einem anderen Plugin registriert, wird er nicht überschrieben.
* In der Datenbank bleibt `[shy]` als Text gespeichert, ersetzt wird erst bei der Ausgabe.

== Installation ==

1. Den Plugin-Ordner nach `wp-content/plugins/` kopieren.
2. Das Plugin unter „Plugins“ aktivieren.
3. `[shy]` im Inhalt eines Beitrags oder einer Seite an den gewünschten Trennstellen einfügen.

== Frequently Asked Questions ==

= Funktioniert das im Block-Editor? =

Ja, `[shy]` kann in jeden Textblock geschrieben werden. Im Editor steht es als normaler Text da, die Trennstriche wirken erst im Frontend.

= Warum erscheint [shy] im Titel als Text? =

WordPress führt Shortcodes nicht in Titeln aus. In Beitragstiteln, Archivlisten, dem Browser-Tab, RSS-Feeds, Kategorie- und Schlagwortnamen, dem Seitentitel und Bildunterschriften außerhalb des Inhalts erscheint `[shy]` daher wörtlich. Dort stattdessen das Zeichen U+00AD direkt eingeben (macOS: Zeichenübersicht, „weicher Trennstrich“).

= Hat das Auswirkungen auf Suche und SEO? =

Im ausgegebenen HTML ist der weiche Trennstrich für Suchmaschinen und Screenreader unsichtbar. In der Datenbank steht aber `Donau[shy]dampf…`. Die WordPress-Suche findet den Beitrag deshalb nicht über das ganze Wort, und SEO-Plugins, die den Rohinhalt auswerten, sehen die Wortteile einzeln.

== Changelog ==

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

= 1.1.1 =
Kleine Korrektur, Update unbedenklich.
