<?php
	$seiten = array(
	"Abbuchung"=>"abrechnung.shtml",
	"Abrechnung"=>"abrechnung.shtml",
	"Administration"=>"administration.shtml",
	"AdministrationStammdaten"=>"administration_stammdaten.shtml",
	"Adressbuchexport"=>"dokumentationauswertungadressbuchexport.shtml",
	"Anfangsbest%C3%A4nde"=>"dokumentationbuchfuehrunganfangsbestaende.shtml",
	"Auswertung"=>"dokumentationauswertung.shtml",
	"Beitragsgruppen"=>"administrationbeitragsgruppen.shtml",
	"Beitragsmodelle"=>"dokumentationbeitragsmodelle.sthml",
	"Buchf%C3%BChrung"=>"dokumentationbuchfuehrung.shtml",
	"Buchungen"=>"dokumentationbuchfuehrungbuchungen.shtml",
	"Buchungen_aus_Hibiscus_%C3%BCbernehmen"=>"dokumentationbuchfuehrungbuchungenaushibiscusuebernehmen.shtml",
	"CVS"=>"cvs.shtml",
	"Changelog"=>"changelog.shtml",
	"Danksagung"=>"danksagung.shtml",
	"Dokumentation"=>"dokumentation.shtml",
	"Download"=>"download.shtml",
	"Einstellungen"=>"administration_einstellungen.shtml",
	"Erweitert"=>"administration_erweitert.shtml",
	"Felddefinitionen"=>"administration_felddefinitionen.shtml",
	"Formulare"=>"administration_felddefinitionen.shtml",
	"H2-Migration"=>"dokumentationmigrationinsh2format.shtml",
	"Hauptseite"=>"index.shtml",
	"Import"=>"administration_import.shtml",
	"Installation"=>"installation.shtml",
	"Jahresabschluss"=>"dokumentationbuchfuehrungjahresabschluss.shtml",
	"Jahressaldo"=>"dokumentationbuchfuehrungjahressaldo.shtml",
	"Jameica-Startseite"=>"jameica_startseite.shtml",
	"JameicaPortable"=>"jameica_portable.shtml",
	"Kontakt"=>"kontakt.shtml",
	"Konten"=>"dokumentationbuchfuehrungkonten.shtml",
	"Kursteilnehmer"=>"kursteilnehmer.shtml",
	"Lehrg%C3%A4nge"=>"lehrgaenge.shtml",
	"Mailliste"=>"mailliste.shtml",
	"Manuelle_Zahlungseing%C3%A4nge"=>"manuelle_zahlungseingaenge.shtml",
	"Migration_der_Datenbank_ins_H2-Format"=>"dokumentationmigrationinsh2format.shtml",
	"Mitglieder"=>"mitglieder.shtml",
	"MySQL-Support"=>"dokumentationmysql.shtml",
	"Rechnung"=>"rechnungen.shtml",
	"Spendenbescheinigung"=>"spendenbescheinigung.shtml",
	"Stammdaten_des_Vereins"=>"administration_stammdaten.shtml",
	"Wiedervorlage"=>"wiedervorlage.shtml",
	"Zusatzabbuchungen"=>"zusatzbetraege.shtml",
	"Zusatzbetr%C3%A4ge"=>"zusatzbetraege.shtml");

	header( 'Location: ./' .  $seiten[$_GET['title']]  ) ;
?>