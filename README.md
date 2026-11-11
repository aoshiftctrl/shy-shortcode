# [shy] Shortcode (`shy-shortcode`)

WordPress-Plugin, das den Shortcode `[shy]` durch einen weichen Trennstrich (U+00AD) ersetzt.

- **Version:** 1.1.2
- **Voraussetzungen:** WordPress ≥ 5.2, PHP ≥ 8.0

```
Donau[shy]dampf[shy]schiff[shy]fahrts[shy]gesellschaft
```

## Installation

1. Ordner nach `wp-content/plugins/shy-shortcode` kopieren.
2. Plugin unter „Plugins“ aktivieren.

## Aufbau

| Datei               | Inhalt                               |
| ------------------- | ------------------------------------ |
| `shy-shortcode.php` | Registrierung des Shortcodes         |
| `readme.txt`        | Readme im WordPress.org-Format, FAQ  |
| `assets/`           | Plugin-Icon                          |

### Funktionsweise

- Registriert wird in einem `init`-Callback mit Priorität `PHP_INT_MAX`. Andere Plugins und Themes registrieren ihre Shortcodes meist auf `init`. Erst danach findet `shortcode_exists()` sie, und ein bestehender Shortcode `shy` bleibt unangetastet.
- Callback und Registrierung sind Closures. Es gibt keine benannte globale Funktion, die mit einer zweiten Kopie des Plugins kollidieren kann. Version 1.1.0 deklariert `shy_shortcode_output()` ohne Prüfung.
- Ausgabe ist `&#173;` statt `&shy;`: Die numerische Entity ist auch in XML gültig.
- In der Datenbank bleibt `[shy]` als Text stehen, ersetzt wird erst bei der Ausgabe.

## Bekannte Einschränkungen

- Wirkt nur dort, wo WordPress `do_shortcode()` aufruft: Beitrags- und Seiteninhalt (auch im Feed), Text- und Block-Widgets, Templates und Template-Parts von Block-Themes.
- Wirkt nicht in Titeln, von Hand eingetragenen Auszügen, Menüeinträgen (klassisch und Navigation-Block) und Begriffsnamen. Dort steht `[shy]` wörtlich.
- Automatische Auszüge laufen durch `strip_shortcodes()`, `[shy]` verschwindet dort ersatzlos.
- Die WordPress-Suche findet das ganze Wort nicht, weil in der Datenbank `Donau[shy]dampf…` steht.

## Lizenz

CC BY-ND 4.0, siehe https://creativecommons.org/licenses/by-nd/4.0/.
