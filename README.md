<p align="center"><img src="https://codeberg.org/awesomeBible/assets/raw/branch/main/exports/svg/logo-awesomebible_gradient.svg" width="400"></p>

<p align="center">
<a href="https://codeberg.org/awesomeBible/my.awesomeBible/src/branch/main/LICENSE"><img src="https://img.shields.io/badge/Lizenz-AGPLv3-blueviolet" alt="Lizenz: AGPL v3"></a>
<a href="https://matrix.to/#/#my.awesomebible:matrix.org"><img src="https://img.shields.io/matrix/my.awesomebible:matrix.org?color=blueviolet&label=Chat&logo=matrix" alt="Chat"></a>
</p>

# my.awesomeBible
## Mit my.awesomeBible beginnt eine neue Generation der Bibelarbeit. *Deine* neue Generation der Bibelarbeit.
my.awesomeBible ist unser neuer Ansatz für Bibel-Apps.
Wir setzen auf Kommunikation und Bibelarbeit als Zusammenarbeit in Echtzeit.
Unser Ziel ist es, Menschen zu vernetzen und ihnen die Tools zu geben die sie brauchen, um Gottes Wort zu entdecken und zu verstehen.

## Unsere Mission ⭐
awesomeBible hat sich als Ziel gesetzt, *jedem* von Gottes genialem Plan zu erzählen.

my.awesomeBible baut darauf auf.
Mit diesem Projekt wollen wir Christen helfen, Gottes Wort dort zu hören, wo sie sind - mit ihm interagieren zu können und es teilen zu können.

Wir bauen my.awesomeBible nicht für Profit, sondern weil es etwas ist, was wir uns selbst wünschen.
Wir haben my.awesomeBible mit den Werten gebaut, die uns wichtig sind - Gemeinschaft, Freiheit und Datenschutz - und nicht um das nächste Billion-Dollar-Unicorn zu werden.

Wir werben mit *einer neuen Generation der Bibelarbeit*:

> Mit my.awesomeBible beginnt eine neue Generation der Bibelarbeit. *Deine* neue Generation der Bibelarbeit.

Was es damit auf sich hat, findest du hier: https://changelog.awesomebible.de/p/eine-neue-generation/


## Projektstruktur 🍃
### [Frontend](https://codeberg.org/awesomebible/my-frontend)
Das [my.awesomeBible](https://vuetelescope.com/explore/my-awesomebible-de) Frontend ist in [Vue](https://v3.vuejs.org) geschrieben und nutzt [TailwindCSS](https://tailwindcss.com) fürs Styling.

<video controls src="https://changelog.awesomebible.de/p/rewrite-rewrite-an-der-wand/overview.mp4" height="540px" width="960px"></video>

### [Backend](https://codeberg.org/awesomebible/my-backend)
Das Backend von my.awesomeBible - der Teil von dem alle Eingaben in der App verarbeitet und speichert.

Das Backend ist in Javascript geschrieben und nutzt MongoDB als Datenbanksystem.

### [Bibel API](https://codeberg.org/awesomebible/bible-api)
In diesem Repository befindet sich die Bibel-API die für my.awesomeBible verwendet wird.

Die Bibel-API stellt vorerst nur die [Menge-Bibel](https://de.wikipedia.org/wiki/Hermann_Menge#Die_Menge-Bibel) zur Verfügung.

Die Übersetzung selbst ist gemeinfrei, deswegen sind die Dateien die von der API ausgegeben werden (``.json``-Dateien) unter der [Public Domain Mark-Lizenz](https://creativecommons.org/publicdomain/mark/1.0/deed.de) lizensiert, damit auch sie frei von Urheberrechtsschutz sind.

## Mitmachen 🦄
### Vorschläge ✍
Wir brauchen deine Hilfe!
Für ein Projekt, dass sich auf die Fahne geschreiben hat, User-Focused zu sein, brauchen wir Feedback. Eine Menge Feedback.

Was brauchst du, um dich auf Gottes Wort zu konzentrieren?
Was ist dir besonders wichtig im Austausch mit anderen?
Was ist deine Lieblingsschriftart?

Egal was es ist: Keine Idee ist zu dumm, kein Wunsch zu wenig.

Tritt unser [Matrix-Community](https://matrix.to/#/#awesomeBible:matrix.org) bei, schreib uns [per Email](mailto:hi@awesomebible.de) oder öffne ein [Codeberg Issue](https://codeberg.org/awesomebible/my-frontend/issues/new).

### Entwicklung 🛠
#### Setup 🛠
Schritt 1 ist, das Git-Repo zu klonen:
```sh
git clone https://codeberg.org/awesomebible/my-frontend.git
```

Für die Entwicklung benutzen wir [Node.js LTS](https://nodejs.org/de/download/). 

Wenn du [npm](https://nodejs.org/de/) benutzt:
```sh
npm install # Installiert Abhängigkeiten
npm run dev # Startet den Dev-Server
npm run build # Baut einen Build
npm run serve # Startet den Build mit einem lokalen Server
```
Wenn du [yarn](https://yarnpkg.com/) benutzt:
```sh
yarn # Installiert Abhängigkeiten
yarn dev # Startet den Dev-Server
yarn build # Baut einen Build
yarn serve # Startet den Build mit einem lokalen Server
```

### Design 🍥
Programmieren ist nicht dein Ding? Du designst, zeichnest oder entwirfst lieber?
Auch dann kannst du uns helfen!
Oft wird für ein Feature ein Mockup oder ein Design benötigt, alle Issues wo ein Design benötigt wird, sind [hier](https://codeberg.org/awesomebible/my.awesomeBible/issues?q=&type=all&state=open&labels=16018&milestone=0&assignee=0) zu finden.

### Sicherheitslücken 🔓

Wenn du auf eine Sicherheitslücke gestoßen bist, melde sie bitte nicht direkt in den Issues - stattdessen schreib uns bitte eine [E-Mail](mailto:hi@awesomebible.de) an [hi@awesomebible.de](mailto:hi@awesomebible.de) oder eine Nachricht an unseren [Matrix-Account](https://matrix.to/#/@awesomebible:matrix.org).