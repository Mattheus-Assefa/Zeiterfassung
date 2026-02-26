# Arbeitszeiterfassung
## 1 Grundfunktionen der Arbeitszeiterfassung
### 1.1 Kategorien von Zeiterfassungen:  
Der Benutzer soll zwischen folgenden drei Kategorien unterscheiden können:
- [x] Arbeitstag
- [x] Urlaub
- [x] Krankenstand
### 1.2 Erfassung von Arbeitstagen:  
Bei der Erfassung von Arbietstagen sind folgende Daten zu erfassen:
- [x] Datum des Arbeitstages
- [x] Arbeitsbeginn (Startzeit)
- [x] Arbeitsende (Endzeit)
- [x] Mittagspause (Dauer in Minuten)
- [x] Automatische Berechnung der Arbeitszeit
- [x] Soll-Arbeitszeit: 8 Stunden pro Tag
- [x] Automatische Berechnung von Überstunden/Minusstunden
### 1.3 Erfassung von Urlaub und Krankenstand:
- [x] Datum 
- [x] Kategorie (Urlaub oder Krankenstand)
- [x] Optional: Bemerkung/Notiz
## 2 Übersicht und Filterung
### 2.1 Übersicht aller Einträge:
- [x] Tabellarische Darstellung aller erfassten Zeiteinträge
- [x] Anzeige von Datum, Kategorie, Arbeitszeit (bei Arbeitstagen), Überstunden/Minusstunden
### 2.2 Filterfunktionen:  
Die Übersicht soll gefiltert werden können nach:
- [ ] Kategorie: Arbeitstag, Urlaub, Krankenstand
- [ ] Monat: Auswahl eines bestimmten Monats
- [ ] Kombinierte Filter: z.B. alle Krankenstände im März
## 3 Auswertungen und Statistiken
### 3.1 Saldo-Anzeige:
- [ ] Gesamtsaldo der Plus-/Minusstunden
- [ ] Klar erkennbare Darstellung, ob Überstunden oder Minusstunden vorliegen
### 3.2 Statistiken:  
Top 5 Monate mit höchsten Abwesenheiten:
- [ ] Ranking der 5 Monate mit den meisten Urlaubs- und Krankenstandtagen
- [ ] Anzeige der Anzahl der Abwesenheitstage pro Monat
### 3.3 Visualisierung:
Kreisdiagramm zur Verteilung der Arbeitstage:
- [ ] Anteil Arbeitstage/Urlaubstage/Krankenstandstage (in %)
## 6 Benutzeroberfläche
### 6.1 Navigation:  
Erstellen Sie eine übersichtliche Navigation mit folgenden Bereichen:
- [ ] Dashboard/Übersicht
- [ ] Neue Zeiterfassung
- [ ] Alle Einträge
- [ ] Statistiken
### 6.2 Formulare:  
- [ ] Eingageformular für neue Zeiterfassungen mit serverseitiger Validierung
- [ ] Suchformular für Filterung
### 6.3 Listen und Tabellen:  
- [ ] Übersichtliche Darstellung der erfassten Daten
- [ ] Sortierung nach Datum (neueste zuerst)
- [ ] Paginierung bei vielen Einträgen (optional)
### Testdaten:  
- [ ] Erstellen Sie Beispieldaten für verschiedene Monate
- [ ] Mindestens 15 Einträge mit unterschiedlichen Kategorien
- [ ] Realistische Arbeitszeiten (7-9 Stunden pro Arbeitstag)
### Validierung:  
- [ ] Serverseitge Validierung: Überprüfung aller Eingaben
- [ ] Datumsprüfungen: Zukünftige Daten sollten nicht erlaubt sein