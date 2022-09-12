Aleksandar Risteski
###################wbsprojekt_risteski###################################
Datenbank name: wbsprojekt_risteski
  -1-tabelle users
  -2-tabelle produkts (user_id kommt von tabelle users (id) nur wenn jemand create neue Produkt)
##############CSS########################################
-->style.css für alle users<--
  ---Breackpoints---
    1-(max-width: 600px)
    2-(max-width: 876px)
    3-(max-width: 1219px)
    4-(min-width: 1220px) --- kann bleib ohne @media only screen and (min-width: 1220px)
-->edit.css extra nur für angemeldete User<--
######################################################
-->Login Daten<--
user: bashir@home.de
pass: 1234
---oder neue registrieren
######################################################
-->Menü Links mit Aufgaben<--
  HEAD Menü ---Home----Registrieren/Anmelden---
  in FOOTER ---Impressum---Datenschutz---
---------------------------------------
    -->Registrieren/Anmelden<--
      -Anmeldeformular
        -here kann Mann Anmelden
         die Form macht valilierung mit standard JS code
      -Registrierungsformular
        -here kann Mann Registrieren
         die Form macht valilierung mit jQuery validate() funktion
    -->Home<--
        -Produkte kommen from Datenbank (link ANGEBOT)
##################################################################################################################################
-->Backendbereich<--nur für angemeldete User
-link -->Registrieren/Anmelden<-- ist versteckt
  ---fur Backendbereich kommt ein Menü
    ----->>>Wilcomen!!!(User Name und Vorname)---Edit Produkten---Profil einzeigen---Logout<<<---
----------------------------------------------------------------------------------------------------------------------------------
        -->Wilcomen!!!(User Name und Vorname kommen from Datenbank)<--
----------------------------------------------------------------------------------------------------------------------------------
        -->Edit Produkten<--
          -für editieren ich habe JS benutz + PHP
          kann Mann alle inhalte von Produkt editieren.
          gibt es auch checkbox(enable,disable) - funktioniert OK in Chrome aber nicht in Firefox 78.8.0esr (WBS Rechner). 
          Ich habe getestet auf Firefox version 101.0(Private Rechner) und die checkbox funktioniert einfach.
----------------------------------------------------------------------------------------------------------------------------------
        -->zwei buttons(Produkt löschen---Neue erstellen)<--
          -Produkt löschen - für löschen ich habe PHP benutz
          -Neue erstellen - für insert ich habe PHP benutz
----------------------------------------------------------------------------------------------------------------------------------
        -->Profil einzeigen<--
          -Paar Daten für User kommen from Datenbank
----------------------------------------------------------------------------------------------------------------------------------
        -->Logout<--
          -END Session :)
----------------------------------------------------------------------------------------------------------------------------------