<?php
/* $Id$ */

/**
 * For suggestions concerning this file please contact
 *     Alexander M. Turek <rabus at users.sourceforge.net>.
 *
 * Bei Verbesserungsvorschlägen diese Datei betreffend wenden Sie sich bitte an
 *     Alexander M. Turek <rabus at users.sourceforge.net>.
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa');
$month = array('Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y um %H:%M';
$timespanfmt = '%s Tage, %s Stunden, %s Minuten und %s Sekunden';

$strAPrimaryKey = 'Ein Primärschlüssel wurde in %s erzeugt';
$strAbortedClients = 'Abgebrochen';
$strAbsolutePathToDocSqlDir = 'Bitte geben Sie den vollständigen Pfad auf dem Webserver zum docSQL-Verzeichnis ein.';
$strAccessDenied = 'Zugriff verweigert.';
$strAction = 'Aktion';
$strAddDeleteColumn = 'Spalten hinzufügen/entfernen';
$strAddDeleteRow = 'Zeilen hinzufügen/entfernen';
$strAddNewField = 'Neue Felder hinzufügen';
$strAddPriv = 'Rechte hinzufügen';
$strAddPrivMessage = 'Rechte wurden hinzugefügt';
$strAddPrivilegesOnDb = 'Rechte zu folgender Datenbank hinzufügen';
$strAddPrivilegesOnTbl = 'Rechte zu folgender Tabelle hinzufügen';
$strAddSearchConditions = 'Suchkondition (Argumente für den WHERE-Ausdruck):';
$strAddToIndex = '%s&nbsp;Spalten zum Index hinzufügen';
$strAddUser = 'Neuen Benutzer hinzufügen';
$strAddUserMessage = 'Der Benutzer wurde hinzugefügt.';
$strAddedColumnComment = 'Spaltenkommentar wurde hinzugefügt';
$strAddedColumnRelation = 'Spaltenbeziehung wurde hinzugefügt';
$strAdministration = 'Administration';
$strAffectedRows = ' Betroffene Datensätze: ';
$strAfter = 'Nach %s';
$strAfterInsertBack = 'zurück';
$strAfterInsertNewInsert = 'anschließend einen weiteren Datensatz einfügen';
$strAll = 'Alle';
$strAllTableSameWidth = 'Sollen alle Tabellen mit der gleichen Breite angezeigt werden?';
$strAlterOrderBy = 'Tabelle sortieren nach';
$strAnIndex = 'Ein Index wurde in %s erzeugt';
$strAnalyzeTable = 'Analysiere Tabelle';
$strAnd = 'und';
$strAny = 'Jeder';
$strAnyColumn = 'Jede Spalte';
$strAnyDatabase = 'Jede Datenbank';
$strAnyHost = 'Jeder Host';
$strAnyTable = 'Jede Tabelle';
$strAnyUser = 'Jeder Benutzer';
$strAscending = 'aufsteigend';
$strAtBeginningOfTable = 'An den Anfang der Tabelle';
$strAtEndOfTable = 'An das Ende der Tabelle';
$strAttr = 'Attribute';
$strAutodetect = 'Autom. Erkennung';
$strAutomaticLayout = 'Automatische Anordnung';

$strBack = 'Zurück';
$strBeginCut = 'AUSSCHNITTSANFANG';
$strBeginRaw = 'BEGINN DER AUSGABE';
$strBinary = ' Binär ';
$strBinaryDoNotEdit = ' Binär - nicht editierbar !';
$strBookmarkDeleted = 'SQL-Abfrage wurde gelöscht.';
$strBookmarkLabel = 'Titel';
$strBookmarkQuery = 'Gespeicherte SQL-Abfrage';
$strBookmarkThis = 'SQL-Abfrage speichern';
$strBookmarkView = 'Nur zeigen';
$strBrowse = 'Anzeigen';
$strBzError = 'phpMyAdmin konnte die Datei wegen eines Fehler in der Bz2-Erweiterung in dieser php-Version nicht komprimieren. Es wird deshalb empfohlen die Einstellung <code>$cfg[\'BZipDump\']</code> in Ihrer phpMyAdmin-Konfiguration auf <code>FALSE</code> zu setzen. Falls Sie die Bz2-Kompressionsfunktionen dennoch nutzen wollen, so sollten Sie eine neuere php-Version installieren. Bitte lesen Sie auch den php-Bugreport %s für weitere Informationen.';
$strBzip = 'BZip-komprimiert';

$strCSVOptions = 'CSV-Optionen';
$strCannotLogin = 'Die Anmeldung am MySQL-Server ist fehlgeschlagen.';
$strCantLoad = 'Die Erweiterung &quot;%s&quot; kann nicht geladen werden.<br />Bitte überprüfen Sie Ihre PHP-Konfiguration.';
$strCantLoadMySQL = 'Die MySQL-Erweiterung konnte nicht geladen werden.<br />Bitte überprüfen Sie Ihre PHP-Konfiguration!';
$strCantLoadRecodeIconv = 'Die PHP-Erweiterungen iconv und recode, welche für die Zeichensatzkonvertierung benötigt werden, konnten nicht geladen werden. Bitte ändern Sie Ihre PHP-Konfiguration und aktivieren Sie diese Erweiterungen oder deaktivieren Sie die Zeichensatzkonvertierung in phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kann Index nicht in PRIMARY umbenennen!';
$strCantUseRecodeIconv = 'Weder die iconv- noch libiconv- oder recode_string-Funktion konnte verwandt werden, obwohl die benötigten php-Erweiterungen angeblich geladen wurden. Bitte überprüfen Sie Ihre PHP-Konfiguration.';
$strCardinality = 'Kardinalität';
$strCarriage = 'Wagenrücklauf \\r';
$strChange = 'Ändern';
$strChangeCopyMode = 'Erstelle einen neuen Benutzer mit identischen Rechten und ...';
$strChangeCopyModeCopy = ' ... behalte den alten bei.';
$strChangeCopyModeDeleteAndReload = ' ... lösche den alten und lade anschließend die Benutzertabellen neu.';
$strChangeCopyModeJustDelete = ' ... lösche den alten von den Benutzertabellen.';
$strChangeCopyModeRevoke = ' ... entziehe dem alten alle Rechte und lösche ihn anschließend.';
$strChangeCopyUser = 'Logininformation ändern / Benutzer kopieren';
$strChangeDisplay = 'Anzuzeigende Spalte bestimmen';
$strChangePassword = 'Kennwort ändern';
$strCharset = 'Zeichensatz';
$strCharsetOfFile = 'Zeichencodierung der Datei:';
$strCheckAll = 'Alle auswählen';
$strCheckDbPriv = 'Rechte einer Datenbank prüfen';
$strCheckPrivs = 'Rechte überprüfen';
$strCheckPrivsLong = 'Überprüft die Rechte für die Datenbank &quot;%s&quot;.';
$strCheckTable = 'Überprüfe Tabelle';
$strChoosePage = 'Bitte wählen Sie die zu bearbeitende Seite.';
$strColComFeat = 'Darstellung von Spaltenkommentaren';
$strColumn = 'Spalte';
$strColumnNames = 'Spaltennamen';
$strColumnPrivileges = 'Spaltenspezifische Rechte';
$strCommand = 'Befehl';
$strComments = 'Kommentare';
$strCompleteInserts = 'Vollständige \'INSERT\'s';
$strCompression = 'Kompression';
$strConfigFileError = 'phpMyAdmin konnte Ihre Konfigurationsdatei nicht verarbeiten!<br />Dies kann passieren, wenn der PHP-Parser Syntaxfehler in ihr findet oder sie nicht existiert.<br />Bitte rufen Sie die Konfigurationsdatei üben den unteren Link direkt auf und lesen Sie die PHP-Fehlermeldungen, die Sie erhalten. Meistens fehlt bloß irgendwo ein Anführungszeichen oder Semikolon.<br />Wenn Sie eine leere Seite erhalten, ist Ihre Konfigurationsdatei in Ordnung.';
$strConfigureTableCoord = 'Bitte konfigurieren Sie die Koordinaten für die Tabelle %s';
$strConfirm = 'Sind Sie wirklich sicher?';
$strConnections = 'Verbindungen';
$strCookiesRequired = 'Ab diesem Punkt müssen Cookies aktiviert sein.';
$strCopyTable = 'Kopiere Tabelle nach (Datenbank<b>.</b>Tabellenname):';
$strCopyTableOK = 'Tabelle %s wurde nach %s kopiert.';
$strCouldNotKill = 'phpMyAdmin konnte den Prozess %s nicht abbrechen. Er wurde wahrscheinlich bereits geschlossen.';
$strCreate = 'Anlegen';
$strCreateIndex = 'Index über&nbsp;%s&nbsp;Spalten anlegen';
$strCreateIndexTopic = 'Neuen Index anlegen';
$strCreateNewDatabase = 'Neue Datenbank anlegen';
$strCreateNewTable = 'Neue Tabelle in Datenbank %s erstellen';
$strCreatePage = 'Neue Seite erstellen';
$strCreatePdfFeat = 'Erzeugen von PDFs';
$strCriteria = 'Kriterium';

$strDBComment = 'Datenbankkommentar: ';
$strDBGContext = 'Kontext';
$strDBGContextID = 'Kontext-ID';
$strDBGHits = 'Treffer';
$strDBGLine = 'Zeile';
$strDBGMaxTimeMs = 'Max. Zeit in ms';
$strDBGMinTimeMs = 'Min. Zeit in ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = 'Zeit/Treffer in ms';
$strDBGTotalTimeMs = 'Gesamtzeit in ms';
$strData = 'Daten';
$strDataDict = 'Strukturverzeichnis';
$strDataOnly = 'Nur Daten';
$strDatabase = 'Datenbank';
$strDatabaseHasBeenDropped = 'Datenbank %s wurde gelöscht.';
$strDatabaseWildcard = 'Datenbank (Platzhalter sind erlaubt):';
$strDatabases = 'Datenbanken';
$strDatabasesDropped = 'Es wurden %s Datenbanken gelöscht.';
$strDatabasesStats = 'Statistiken über alle Datenbanken';
$strDatabasesStatsDisable = 'Datenbankstatistiken deaktivieren';
$strDatabasesStatsEnable = 'Datenbankstatistiken aktivieren';
$strDatabasesStatsHeavyTraffic = 'Bitte beachten Sie: Das Aktivieren der Datenbankstatistiken kann starken Traffic zwischen dem Web- und dem MySQL-Server zur Folge haben.';
$strDbPrivileges = 'Datenbankspezifische Rechte';
$strDbSpecific = 'datenbankspezifisch';
$strDefault = 'Standard';
$strDefaultValueHelp = 'Bitte geben Sie jeweils nur einen Standardwert ohne Escape- oder Anführungszeichen an.';
$strDelOld = 'Auf der aktuellen Seite bestehen Referenzen zu Tabellen, die nicht mehr existieren. Sollen diese Referenzen gelöscht werden?';
$strDelete = 'Löschen';
$strDeleteAndFlush = 'Die Benutzer löschen und die Benutzertabellen anschließend neu laden.';
$strDeleteAndFlushDescr = 'Dies ist zwar der sauberste Weg, jedoch kann es einige Zeit in Anspruch nehmen, die Benutzertabellen neu zu laden.';
$strDeleteFailed = 'Löschen fehlgeschlagen!';
$strDeleteUserMessage = 'Der Benutzer %s wurde gelöscht.';
$strDeleted = 'Die Zeile wurde gelöscht.';
$strDeletedRows = 'Gelöschte Zeilen:';
$strDeleting = 'Lösche %s';
$strDescending = 'absteigend';
$strDisabled = 'Deaktiviert';
$strDisplay = 'Zeige';
$strDisplayFeat = 'Anzeige verknüpfter Daten';
$strDisplayOrder = 'Sortierung nach:';
$strDisplayPDF = 'PDF-Schema anzeigen';
$strDoAQuery = 'Suche über Beispielwerte ("query by example") (Platzhalter: "%")';
$strDoYouReally = 'Möchten Sie wirklich diese Abfrage ausführen: ';
$strDocu = 'Dokumentation';
$strDrop = 'Löschen';
$strDropDB = 'Datenbank %s löschen';
$strDropSelectedDatabases = 'Ausgewählte Datenbanken löschen';
$strDropTable = 'Tabelle löschen:';
$strDropUsersDb = 'Die gleichnamigen Datenbanken löschen.';
$strDumpComments = 'Spaltenkommentare als SQL-Kommentare einbetten';
$strDumpXRows = 'Exportiere %s Datensätze ab Zeile %s.';
$strDumpingData = 'Daten für Tabelle';
$strDynamic = 'dynamisch';

$strEdit = 'Bearbeiten';
$strEditPDFPages = 'PDF-Seiten bearbeiten';
$strEditPrivileges = 'Rechte ändern';
$strEffective = 'Effektiv';
$strEmpty = 'Leeren';
$strEmptyResultSet = 'MySQL lieferte ein leeres Resultat zurück (d.h. null Zeilen).';
$strEnabled = 'Aktiviert';
$strEnd = 'Ende';
$strEndCut = 'AUSSCHNITTSENDE';
$strEndRaw = 'ENDE DER AUSGABE';
$strEnglishPrivileges = ' Anmerkung: MySQL-Rechte werden auf Englisch angegeben. ';
$strError = 'Fehler';
$strExplain = 'SQL erklären';
$strExport = 'Exportieren';
$strExportToXML = 'Ins XML-Format exportieren';
$strExtendedInserts = 'Erweiterte \'INSERT\'s';
$strExtra = 'Extra';

$strFailedAttempts = 'Fehlgeschlagen';
$strField = 'Feld';
$strFieldHasBeenDropped = 'Spalte %s wurde entfernt.';
$strFields = 'Felder';
$strFieldsEmpty = ' Sie müssen angeben wie viele Felder die Tabelle haben soll! ';
$strFieldsEnclosedBy = 'Felder eingeschlossen von';
$strFieldsEscapedBy = 'Felder escaped von';
$strFieldsTerminatedBy = 'Felder getrennt mit';
$strFileCouldNotBeRead = 'Die Datei konnte nicht gelesen werden';
$strFileNameTemplate = 'Dateinamenskonvention';
$strFileNameTemplateHelp = 'Benutzen Sie __DB__ für den Datenbanknamen, __TABLE__ für den Tabellennamen und %sbeliebige strftime-Optionen%s zur Angabe von Datumsvariablen. Die Erweiterung wird automagisch hinzugefügt. Jeglicher anderer Text wird beibehalten.';
$strFileNameTemplateRemember = 'Konvention merken';
$strFixed = 'starr';
$strFlushPrivilegesNote = 'Anmerkung: phpMyAdmin liest die Benutzerprofile direkt aus den entsprechenden MySQL-Tabellen aus. Der Inhalt dieser Tabellen kann sich von den Benutzprofilen, die MySQL z.Zt. verwendet, unterscheiden, wenn manuelle Änderungen vorgenommen wurden. In diesem Fall sollten Sie  %sdie Benutzerprofile neu laden%s bevor Sie fortfahren.';
$strFlushTable = 'Leeren des Tabellenchaches ("FLUSH")';
$strFormEmpty = 'Das Formular ist leer !';
$strFormat = 'Format';
$strFullText = 'vollständige Textfelder';
$strFunction = 'Funktion';

$strGenBy = 'Erstellt von';
$strGenTime = 'Erstellungszeit';
$strGeneralRelationFeat = 'Allgemeine Verknüpfungsfunktionen';
$strGlobal = 'global';
$strGlobalPrivileges = 'Globale Rechte';
$strGlobalValue = 'Globaler Wert';
$strGo = 'OK';
$strGrantOption = 'Grant';
$strGrants = 'Rechte';
$strGzip = 'GZip-komprimiert';

$strHasBeenAltered = 'wurde geändert.';
$strHasBeenCreated = 'wurde erzeugt.';
$strHaveToShow = 'Bitte wählen Sie mindestens eine anzuzeigende Spalte';
$strHome = 'Home';
$strHomepageOfficial = ' Offizielle phpMyAdmin-Homepage ';
$strHomepageSourceforge = ' phpMyAdmin-Downloadseite bei Sourceforge ';
$strHost = 'Host';
$strHostEmpty = 'Es wurde kein Host angegeben!';

$strId = 'ID';
$strIdxFulltext = 'Volltext';
$strIfYouWish = 'Wenn Sie nur bestimmte Spalten importieren möchten, geben Sie diese bitte hier an.';
$strIgnore = 'Ignorieren';
$strIgnoringFile = 'Die Datei %s wird ignoriert';
$strImportDocSQL = 'docSQL-Dateien importieren';
$strImportFiles = 'Dateiimport';
$strImportFinished = 'Import beendet';
$strInUse = 'in Benutzung';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index %s wurde entfernt.';
$strIndexName = 'Index Name&nbsp;:';
$strIndexType = 'Index Typ&nbsp;:';
$strIndexes = 'Indizes';
$strInnodbStat = 'InnoDB-Status';
$strInsecureMySQL = 'Ihre Konfigurationsdatei enthält Einstellungen (Benutzer &quot;root&quot; ohne Passwort), welche denen des MySQL-Stardardbenutzers entsprechen. Wird Ihr MySQL-Server mit diesen Einstellungen betrieben, so können Unbefugte leicht von außen auf ihn zugreifen. Sie sollten diese Sicherheitslücke unbedingt schließen!';
$strInsert = 'Einfügen';
$strInsertAsNewRow = ' Als neuen Datensatz speichern ';
$strInsertNewRow = 'Neue Zeile einfügen';
$strInsertTextfiles = 'Textdatei in Tabelle einfügen';
$strInsertedRows = 'Eingefügte Zeilen:';
$strInstructions = 'Befehle';
$strInvalidName = '"%s" ist ein reserviertes Wort, welches nicht als Datenbank-, Feld- oder Tabellenname verwendet werden darf.';

$strJumpToDB = 'Zur Datenbank &quot;%s&quot; springen.';
$strJustDelete = 'Die Benutzer aus den Benutzertabellen löschen.';
$strJustDeleteDescr = 'Die &quot;gelöschten&quot; Benutzer könnten weiterhin wie gewohnt auf den Server zugreifen, bis die Benutzertabellen neu geladen werden.';

$strKeepPass = 'Kennwort nicht verändert';
$strKeyname = 'Name';
$strKill = 'Beenden';

$strLaTeX = 'LaTeX';
$strLandscape = 'Querformat';
$strLength = ' Länge ';
$strLengthSet = 'Länge/Set*';
$strLimitNumRows = 'Einträge pro Seite';
$strLineFeed = 'Zeilenvorschub: \\n';
$strLines = 'Zeilen';
$strLinesTerminatedBy = 'Zeilen getrennt mit';
$strLinkNotFound = 'Der Verweis wurde nicht gefunden.';
$strLinksTo = 'Verweise';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Datei';
$strLogPassword = 'Kennwort:';
$strLogUsername = 'Benutzername:';
$strLogin = 'Login';
$strLoginInformation = 'Logininformationen';
$strLogout = 'Neu einloggen';

$strMIME_MIMEtype = 'MIME-Typ';
$strMIME_available_mime = 'Verfügbare MIME-Typen';
$strMIME_available_transform = 'Verfügbare Umwandlungen';
$strMIME_description = 'Beschreibung';
$strMIME_file = 'Dateiname';
$strMIME_nodescription = 'Für diese Umwandlung ist keine Beschreibung verfügar.<br />Für weitere Informationen wenden Sie sich bitte an den Autoren der Funktion &quot;%s&quot;.';
$strMIME_transformation = 'Darstellungsumwandlung';
$strMIME_transformation_note = 'Um eine Liste aller verfügbaren MIME-Typen-Umwandlungen und deren Optionen zu sehen, klicken Sie bitte auf %sUmwandlungen%s';
$strMIME_transformation_options = 'Umwandlungsoptionen';
$strMIME_transformation_options_note = 'Bitte die Werte für die Umwandlungsoptionen in folgendem Format angeben:: \'a\',\'b\',\'c\'...<br />Wann immer Sie ein Backslash ("\") oder ein einfaches Anführungszeichen ("\'") verwenden,<br \>setzen Sie bitte ein Backslash vor das Zeichen.  (z.B.: \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_without = 'Kursiv dargestellte MIME-Typen besitzen keine untergliederten Umwandlungen.';
$strMissingBracket = 'Fehlende Klammer';
$strModifications = 'Änderungen gespeichert.';
$strModify = 'Verändern';
$strModifyIndexTopic = 'Index modifizieren';
$strMoreStatusVars = 'Weitere Statusvariablen';
$strMoveTable = 'Verschiebe Tabelle nach (Datenbank<b>.</b>Tabellenname):';
$strMoveTableOK = 'Tabelle %s wurde nach %s verschoben.';
$strMySQLCharset = 'MySQL-Zeichensatz';
$strMySQLReloaded = 'MySQL wurde neu gestartet.';
$strMySQLSaid = 'MySQL meldet: ';
$strMySQLServerProcess = 'Verbunden mit MySQL %pma_s1% auf %pma_s2% als %pma_s3%';
$strMySQLShowProcess = 'Prozesse anzeigen';
$strMySQLShowStatus = 'MySQL-Laufzeit-Informationen anzeigen';
$strMySQLShowVars = 'MySQL-System-Variablen anzeigen';

$strName = 'Name';
$strNext = 'Nächste';
$strNo = 'Nein';
$strNoDatabases = 'Keine Datenbanken';
$strNoDatabasesSelected = 'Es wurden keine Datenbanken ausgewählt.';
$strNoDescription = 'keine Beschreibung';
$strNoDropDatabases = 'Die Anweisung "DROP DATABASE" wurde deaktiviert.';
$strNoExplain = 'SQL-Erklärung umgehen';
$strNoFrames = 'phpMyAdmin arbeitet besser mit einem <b>Frame</b>-fähigen Browser.';
$strNoIndex = 'Kein Index definiert!';
$strNoIndexPartsDefined = 'Keine Indizies definiert.';
$strNoModification = 'Keine Änderung';
$strNoOptions = 'Für dieses Format sind keine Optionen vorhanden';
$strNoPassword = 'Kein Kennwort';
$strNoPhp = 'ohne PHP-Code';
$strNoPrivileges = 'Keine Rechte';
$strNoQuery = 'Kein SQL-Befehl!';
$strNoRights = 'Sie haben nicht genug Rechte um fortzufahren!';
$strNoTablesFound = 'Es wurden keine Tabellen in der Datenbank gefunden.';
$strNoUsersFound = 'Es wurden keine Benutzer gefunden.';
$strNoUsersSelected = 'Es wurden keine Benutzer ausgewählt.';
$strNoValidateSQL = 'SQL-Validierung umgehen';
$strNone = 'keine';
$strNotNumber = 'Das ist keine Zahl!';
$strNotOK = 'fehlerhaft';
$strNotSet = 'Die Tabelle <b>%s</b> wurde entweder nicht gefunden oder in der Kofigurationsdatei %s nicht gesetzt.';
$strNotValidNumber = ' ist keine gültige Zeilennummer!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s Treffer in der Tabelle <i>%s</i>';
$strNumSearchResultsTotal = '<b>Insgesamt</b> <i>%s</i> Treffer';
$strNumTables = 'Tabellen';

$strOK = 'OK';
$strOftenQuotation = 'Häufig Anführungszeichen. Optional bedeutet, dass nur Textfelder von den angegeben Zeichen eingeschlossen sind.';
$strOperations = 'Operationen';
$strOptimizeTable = 'Optimiere Tabelle';
$strOptionalControls = 'Optional. Bestimmt, wie Sonderzeichen kenntlich gemacht werden.';
$strOptionally = 'optional';
$strOptions = 'Optionen';
$strOr = 'oder';
$strOverhead = 'Überhang';

$strPHP40203 = 'Sie verwenden die PHP-Version 4.2.3, welche leider fehlerhaft im Umgang mit Multibyte-Zeichenketten (mbstring) ist. Dieser Fehler ist in der PHP-Datenbank als Bug-Report #19404 dokumentiert. Aus diesem Grund wird diese PHP-Version nicht für den Betrieb von phpMyAdmin empfohlen.';
$strPHPVersion = 'PHP-Version';
$strPageNumber = 'Seite:';
$strPartialText = 'gekürzte Textfelder';
$strPassword = 'Kennwort';
$strPasswordChanged = 'Das Kennwort für %s wurde geändert.';
$strPasswordEmpty = 'Es wurde kein Kennwort angegeben!';
$strPasswordNotSame = 'Die eingegebenen Kennwörter sind nicht identisch!';
$strPdfDbSchema = 'Schema der Datenbank "%s" - Seite %s';
$strPdfInvalidPageNum = 'Undefinierte PDF-Seitennummer!';
$strPdfInvalidTblName = 'Die Tabelle "%s" existiert nicht!';
$strPdfNoTables = 'keine Tabellen';
$strPerHour = 'pro Stunde';
$strPerMinute = 'pro Minute';
$strPerSecond = 'pro Sekunde';
$strPhp = 'PHP-Code erzeugen';
$strPmaDocumentation = 'phpMyAdmin-Dokumentation';
$strPmaUriError = 'Das <tt>$cfg[\'PmaAbsoluteUri\']</tt>-Verzeichnis MUSS in Ihrer Konfigurationsdatei angegeben werden!';
$strPortrait = 'Hochformat';
$strPos1 = 'Anfang';
$strPrevious = 'Vorherige';
$strPrimary = 'Primärschlüssel';
$strPrimaryKey = 'Primärschlüssel';
$strPrimaryKeyHasBeenDropped = 'Der Primärschlüssel wurde gelöscht.';
$strPrimaryKeyName = 'Der Name des Primärschlüssels muss PRIMARY lauten!';
$strPrimaryKeyWarning = 'Der Name des Primärschlüssels darf <b>nur</b> "PRIMARY" lauten.';
$strPrint = 'Drucken';
$strPrintView = 'Druckansicht';
$strPrivDescAllPrivileges = 'Enthält alle Rechte bis auf GRANT.';
$strPrivDescAlter = 'Erlaubt das Verändern der Struktur betehender Tabellen.';
$strPrivDescCreateDb = 'Erlaubt das Erstellen neuer Datenbanken und Tabellen.';
$strPrivDescCreateTbl = 'Erlaubt das Erstellen neuer Tabellen.';
$strPrivDescCreateTmpTable = 'Erlaubt das Erstellen temporärer Tabellen.';
$strPrivDescDelete = 'Erlaubt das Löschen von Daten.';
$strPrivDescDropDb = 'Erlaubt das Löschen ganzer Datenbanken und Tabellen.';
$strPrivDescDropTbl = 'Erlaubt das Löschen ganzer Tabellen.';
$strPrivDescExecute = 'Erlaubt das Ausführen gespeicherter Prozeduren; Hat keinen Effekt in dieser MySQL-Version.';
$strPrivDescFile = 'Erlaubt das Importieren von Daten aus und das Exportieren in externe Dateien.';
$strPrivDescGrant = 'Erlaubt das Hinzufügen von Benutzern und Rechten ohne den die Benutzerprofile neu laden zu müssen.';
$strPrivDescIndex = 'Erlaubt das Erstellen und Löschen von Indizes.';
$strPrivDescInsert = 'Erlaubt das Hinzufügen und Ersetzen von Daten.';
$strPrivDescLockTables = 'Erlaubt die Sperrung bestimmter Tabellen.';
$strPrivDescMaxConnections = 'Begrenzt die Anzahl neuer Verbindungen, welche ein Benutzer pro Stunde aufbauen darf.';
$strPrivDescMaxQuestions = 'Begrent die Anzahl der Abfragen, welche ein Benutzer pro Stunde senden darf.';
$strPrivDescMaxUpdates = 'Begrenzt die Anzahl der Veränderungen, welche ein Benutzer pro Stunde an allen Datenbanken und Tabellen vornehmen darf.';
$strPrivDescProcess3 = 'Erlaubt das Beenden fremder Prozesse.';
$strPrivDescProcess4 = 'Erlaubt das Anzeigen der vollen Abfragen in der Prozessliste.';
$strPrivDescReferences = 'Hat keinen Effekt in dieser MySQL-Version.';
$strPrivDescReload = 'Erlaubt das erneute Laden von Servereinstellungen und das Leeren der Zwischenspeicher zur Laufzeit.';
$strPrivDescReplClient = 'Erlaubt dem Benutzer zu fragen, wo sich die Master- bzw. Slave-Systeme befinden';
$strPrivDescReplSlave = 'Wird für die Replication-Slave-Systeme benötigt.';
$strPrivDescSelect = 'Erlaubt das Auslesen von Daten.';
$strPrivDescShowDb = 'Gewährt Zugang zur vollständigen Datenbankliste.';
$strPrivDescShutdown = 'Erlaubt das Beenden des Servers.';
$strPrivDescSuper = 'Erlaubt eine Verbindung, selbst wenn die maximale Anzahl an Verbindungen bereits erreicht ist; Wird für viele administrative Operationen, wie das Setzen globaler Variables oder das Beenden fremder Prozesse, vorausgesetzt.';
$strPrivDescUpdate = 'Elaubt das Verändern von gespeicherten Daten.';
$strPrivDescUsage = 'Keine Rechte.';
$strPrivileges = 'Rechte';
$strPrivilegesReloaded = 'Die Benutzerprofile wurden neu geladen.';
$strProcesslist = 'Prozesse';
$strProperties = 'Eigenschaften';
$strPutColNames = 'Feldnamen in die erste Zeile setzen';

$strQBE = 'Abfrageeditor';
$strQBEDel = 'Entf.';
$strQBEIns = 'Einf.';
$strQueryFrame = 'Abfragefenster';
$strQueryFrameDebug = 'Debugging Information';
$strQueryFrameDebugBox = 'Aktive Variablen des Abfrageformulars:\nDB: %s\nTabellle: %s\nServer: %s\n\nMomentate Variablen des Abfrageofrmulars:\nDB: %s\nTabelle: %s\nServer: %s\n\nQuelle des öffnenden Fensters: %s\nQuelle des Framesets: %s.';
$strQueryOnDb = ' SQL-Befehl in der Datenbank <b>%s</b>:';
$strQuerySQLHistory = 'SQL-Verlaufsprotokoll';
$strQueryStatistics = '<b>Abfragestatisktik</b>: Seit seinem Start wurden %s Abfragen an diesen MySQL-Server gesandt.';
$strQueryTime = 'die Abfrage dauerte %01.4f sek';
$strQueryType = 'Abfrageart';

$strReType = 'Wiederholen';
$strReceived = 'Empfangen';
$strRecords = 'Einträge';
$strReferentialIntegrity = 'Prüfe referentielle Integrität:';
$strRelationNotWorking = 'Die zusätzlichen Funktionen für verknüpfte Tabellen wurden automatisch deaktiviert. Klicken Sie %shier%s um herauszufinden warum.';
$strRelationView = 'Beziehungsübersicht';
$strRelationalSchema = 'Beziehungsschema';
$strReloadFailed = 'MySQL Neuladen fehlgeschlagen.';
$strReloadMySQL = 'MySQL neu starten';
$strReloadingThePrivileges = 'Lade die Benutzertabellen neu';
$strRememberReload = 'Der Server muss neu gestartet werden.';
$strRemoveSelectedUsers = 'Die ausgewählten Benutzer löschen';
$strRenameTable = 'Tabelle umbenennen in';
$strRenameTableOK = 'Tabelle %s wurde umbenannt in %s.';
$strRepairTable = 'Repariere Tabelle';
$strReplace = 'Ersetzen';
$strReplaceTable = 'Tabelleninhalt ersetzen';
$strReset = 'Zurücksetzen';
$strResourceLimits = 'Ressourcenbeschränkungen';
$strRevoke = 'Entfernen';
$strRevokeAndDelete = 'Den Benutzern alle Rechte entziehen und sie anschließend aus den Benutzertabellen löschen.';
$strRevokeAndDeleteDescr = 'Die Benutzer würden weiterhin das USAGE-Recht behalten, bis die Benutzertabellen neu geladen werden.';
$strRevokeGrant = '\'Grant\' entfernen';
$strRevokeGrantMessage = 'Sie haben das Recht \'Grant\' für %s entfernt.';
$strRevokeMessage = 'Sie haben die Rechte für %s entfernt.';
$strRevokePriv = 'Rechte entfernen';
$strRowLength = 'Zeilenlänge';
$strRowSize = 'Zeilengröße';
$strRows = 'Zeilen';
$strRowsFrom = 'Datensätze, beginnend ab';
$strRowsModeFlippedHorizontal = 'horizontal (gedrehte Bezeichner)';
$strRowsModeHorizontal = 'untereinander';
$strRowsModeOptions = '%s angeordnet und wiederhole die Kopfzeilen nach %s Datensätzen.';
$strRowsModeVertical = 'nebeneinander';
$strRowsStatistic = 'Zeilenstatistik';
$strRunQuery = 'SQL-Befehl ausführen';
$strRunSQLQuery = 'SQL-Befehl(e) in Datenbank %s ausführen';
$strRunning = 'auf %s';

$strSQL = 'SQL';
$strSQLOptions = 'SQL-Optionen';
$strSQLParserBugMessage = 'Möglicherweise haben Sie einen Bug im SQL-Parser entdeckt. Bitte überprüfen Sie Ihre Abfrage genaustens, insbesondere auf falsch gesetzte oder nicht geschlossene Anführungszeichen. Eine weitere Ursache könnte darin liegen, dass Sie versuchen eine Datei mit binären Daten, welche nicht von Anführungszeichen eingeschlossen sind, hochzuladen. Sie können alternativ versuchen Ihre Abfrage über das MySQL-Kommandozeileninterface zu senden. Die MySQL-Fehlerausgabe, falls vorhanden, kann Ihnen auch bei der Fehleranalyse helfen. Falls Sie weiterhin Probleme haben sollten oder der Parser dort versagt, wo die Kommandozeile erfolgreich ist, so reduzieren Sie bitte Ihre Abfrage auf den Befehl, welcher die Probleme verursacht, und senden Sie uns einen Bugreport mit den Datenausschnitt, den Sie weiter unten auf dieser Seite finden.:';
$strSQLParserUserError = 'Es scheint einen Fehler in Ihrer MySQL-Abfrage zu geben. Die MySQL-Fehlerausgabe, falls vorhanden, kann Ihnen auch bei der Fehleranalyse helfen.';
$strSQLQuery = 'SQL-Befehl';
$strSQLResult = 'SQL-Abfrageergebnis';
$strSQPBugInvalidIdentifer = 'Ungültiger Bezeichner';
$strSQPBugUnclosedQuote = 'Nicht geschlossene Anführungszeichen';
$strSQPBugUnknownPunctuation = 'Unbekannte Interpunktion';
$strSave = 'Speichern';
$strScaleFactorSmall = 'Der Skalierungsfaktor ist zu klein, sodass das Schma nicht auf eine Seite passt!';
$strSearch = 'Suche';
$strSearchFormTitle = 'Durchsuche die Datenbank';
$strSearchInTables = 'In der / den Tabelle(n):';
$strSearchNeedle = 'Zu suchende Wörter oder Werte (Platzhalter: "%"):';
$strSearchOption1 = 'mindestens eines der Wörter';
$strSearchOption2 = 'alle Wörter';
$strSearchOption3 = 'genau diese Zeichenkette';
$strSearchOption4 = 'als regulären Ausdruck';
$strSearchResultsFor = 'Suchergebnisse für "<i>%s</i>" %s:';
$strSearchType = 'Finde:';
$strSelect = 'Teilw. anzeigen';
$strSelectADb = 'Bitte Datenbank auswählen';
$strSelectAll = 'Alle auswählen';
$strSelectFields = 'Felder auswählen (mind. eines):';
$strSelectNumRows = 'in der Abfrage';
$strSelectTables = 'Tabellenauswahl';
$strSend = 'Senden';
$strSent = 'Gesendet';
$strServer = 'Server %s';
$strServerChoice = 'Server Auswählen';
$strServerStatus = 'Laufzeit-Informationen';
$strServerStatusUptime = 'Dieser MySQL-Server läuft bereits %s. Er wurde am %s gestartet.';
$strServerTabProcesslist = 'Prozesse';
$strServerTabVariables = 'Variablen';
$strServerTrafficNotes = '<b>Servertraffic</b>: In diesen Tabellen wird der Netzwerktraffic dieses MySQL-Servers seit dessen Start aufgeführt.';
$strServerVars = 'Servervariablen und -einstellungen';
$strServerVersion = 'Server Version';
$strSessionValue = 'Wert für diese Sitzung';
$strSetEnumVal = 'Wenn das Feld vom Typ \'ENUM\' oder \'SET\' ist, benutzen Sie bitte das Format: \'a\',\'b\',\'c\',....<br />Wann immer Sie ein Backslash ("\") oder ein einfaches Anführungszeichen ("\'") verwenden,<br \>setzen Sie bitte ein Backslash vor das Zeichen.  (z.B.: \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Zeige';
$strShowAll = 'Alles anzeigen';
$strShowColor = 'mehrfarbig';
$strShowCols = 'Reihen anzeigen';
$strShowDatadictAs = 'Format des Strukturverzeichnisses';
$strShowFullQueries = 'Zeige die SQL-Abfragen vollständig an';
$strShowGrid = 'Gitterlinien anzeigen';
$strShowPHPInfo = 'PHP-Informationen anzeigen';
$strShowTableDimension = 'Tabellendimensionen anzeigen.';
$strShowTables = 'Tabellen anzeigen';
$strShowThisQuery = 'SQL-Befehl hier wieder anzeigen';
$strShowingRecords = 'Zeige Datensätze ';
$strSingly = '(einmalig)';
$strSize = 'Größe';
$strSort = 'Sortierung';
$strSpaceUsage = 'Speicherplatzverbrauch';
$strSplitWordsWithSpace = 'Die Wörter werden durch Leerzeichen (" ") getrennt.';
$strStatCheckTime = 'Letzter Check am';
$strStatCreateTime = 'Erzeugt am';
$strStatUpdateTime = 'Aktualisiert am';
$strStatement = 'Angaben';
$strStatus = 'Status';
$strStrucCSV = 'CSV-Daten';
$strStrucData = 'Struktur und Daten';
$strStrucDrop = 'Mit \'DROP TABLE\'';
$strStrucExcelCSV = 'CSV-Daten für MS Excel';
$strStrucOnly = 'Nur Struktur';
$strStructPropose = 'Tabellenstruktur analysieren';
$strStructure = 'Struktur';
$strSubmit = 'Abschicken';
$strSuccess = 'Ihr SQL-Befehl wurde erfolgreich ausgeführt.';
$strSum = 'Gesamt';
$strSwitchToTable = 'Zur kopierten Tabelle wechseln';

$strTable = 'Tabelle';
$strTableComments = 'Tabellen-Kommentar';
$strTableEmpty = 'Der Tabellenname ist leer!';
$strTableHasBeenDropped = 'Die Tabelle %s wurde gelöscht.';
$strTableHasBeenEmptied = 'Die Tabelle %s wurde geleert.';
$strTableHasBeenFlushed = 'Die Tabelle %s wurde geschlossen und zwischengespeicherte Daten gespeichert.';
$strTableMaintenance = 'Hilfsmittel';
$strTableOfContents = 'Inhalt';
$strTableStructure = 'Tabellenstruktur für Tabelle';
$strTableType = 'Tabellentyp';
$strTables = '%s Tabellen';
$strTblPrivileges = 'Tabellenspezifische Rechte';
$strTextAreaLength = 'Wegen seiner Länge ist dieses<br />Feld vielleicht nicht editierbar.';
$strTheContent = 'Der Inhalt Ihrer Datei wurde eingefügt.';
$strTheContents = 'Der Inhalt der CSV-Datei ersetzt die Einträge mit den gleichen Primär- oder Unique-Schlüsseln.';
$strTheTerminator = 'Der Trenner zwischen den Feldern.';
$strThisHost = 'Dieser Host';
$strThisNotDirectory = 'Dies ist kein Verzeichnis';
$strThreadSuccessfullyKilled = 'Der Prozess %s wurde erfolgreich abgebrochen.';
$strTime = 'Dauer';
$strTotal = 'insgesamt';
$strTotalUC = 'Insgesamt';
$strTraffic = 'Traffic';
$strTransformation_image_jpeg__inline = 'Ein klickbares Vorschaubild anzeigen. Optionen: Breite, Höhe in Pixeln (berücksichtigt Seitenverhältnis)';
$strTransformation_image_jpeg__link = 'Einen Link zum Bild anzeigen, z.B. zum Download von BLOB-Daten.';
$strTransformation_image_png__inline = 'Siehe image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Wandelt ein TIME, TIMESTAMP oder DATETIME-Feld und formatiert es unter Berücksichtigung des lokalen Zeitformats. Erste Option: Differenz (in Stunden) zur Addition/Subtraktion der aktuellen Zeit (Standard: 0). Zweite Option: Zeitformat anstelle des lokalen, Variablen siehe PHPs strftime().';
$strTransformation_text_plain__external = 'Nur für LINUX: Startet ein externes Programm und verwendet die Daten des Feldes für die Standardeingabe. Stellt innerhalb von PHPMyAdmin die Standardausgabe des externen Programmes dar. Die Voreinstellung wurde für Tidy optimiert, um HTML code optisch zu formatieren. Aus Sicherheitsgründen müssen Sie die Datei libraries/transformations/text_plain__external.inc.php von Hand bearbeiten um weitere Programme hinzuzufügen. Die erste Option ist die Nummer des dort hinterlegten Programmes und die zweite Option legt die Parameter für das externe Programm fest. Die dritte Option bestimmt, falls auf 1 gesetzt, dass die Ausgabe mit htmlspecialchars() formatiert wird (Standard: 1). Die vierte Option bestimmt, falls auf 1 gesetzt, ob ein NOWRAP-Parameter der Tabellenzelle hinzugefügt wird um einen automatischen Umbruch der Standardausgabe zu verhindern (Standard: 1)';
$strTransformation_text_plain__formatted = 'Behält Ursprungsformatierung des Feldes bei. Kein Escaping oder Umlautwandlung wird durchgeführt.';
$strTransformation_text_plain__imagelink = 'Benutzt den Inhalt eines Feldes um ein Bild und einen Link dazu darzustellen. Die erste Option ist ein Präfix vor dem eigentlichen Feldinhalt wie "http://www.domain.com". Zweite Option ist die Breite des Bildes, die dritte Option die Höhe des Bildes in Pixeln.';
$strTransformation_text_plain__link = 'Benutzt den Inhalt eines Feldes um einen Link darzustellen. Die erste Option ist ein Präfix vor dem eigentlichen Feldinhalt wie "http://www.domain.com". Zweite Option ist der darzustellende Titel des Links';
$strTransformation_text_plain__substr = 'Stellt nur einen Teil des Feldinhaltes dar. Die erste Option definiert die Position des Textes ab dem die Ausgabe startet (Standard: 0), die zweite Option gibt an wieviel Zeichen ab dort dargestellt werden sollen. Falls diese Option leer ist, wird der gesamte verbleibende Text dargestellt. Die dritte Option kann einen Text enthalten, der bei partieller Ausgabe des Textes angehängt wird, um eine Abschneidung kenntlich zu machen (Standard: ...).';
$strTransformation_text_plain__unformatted = 'Wandelt Sonderzeichen nach HTML-Regeln um, um HTML-formatierungen innerhalb des Feldinhaltes unwirksam zu machen.';
$strTruncateQueries = 'Zeige die SQL-Abfragen verkürzt an';
$strType = 'Typ';

$strUncheckAll = 'Auswahl entfernen';
$strUnique = 'Unique';
$strUnselectAll = 'Auswahl entfernen';
$strUpdComTab = 'Bitte lesen Sie in der Dokumentation nach, wie Sie die Struktur Ihrer Spaltenkommentartabelle aktualisieren können';
$strUpdatePrivMessage = 'Die Rechte für %s wurden geändert.';
$strUpdateProfile = 'Benutzer ändern:';
$strUpdateProfileMessage = 'Benutzer wurde geändert.';
$strUpdateQuery = 'Aktualisieren';
$strUsage = 'Verbrauch';
$strUseBackquotes = ' Tabellen- und Feldnamen in einfachen Anführungszeichen ';
$strUseHostTable = 'Verwende Hosttabelle';
$strUseTables = 'Verwendete Tabellen';
$strUseTextField = 'Textfeld verwenden';
$strUser = 'Benutzer';
$strUserAlreadyExists = 'Der Benutzer %s existiert bereits!';
$strUserEmpty = 'Kein Benutzername eingegeben!';
$strUserName = 'Benutzername';
$strUserNotFound = 'Der gewählte Benutzer wurde in der Benutzertabelle nicht gefunden.';
$strUserOverview = 'Benutzerübersicht';
$strUsers = 'Benutzer';
$strUsersDeleted = 'Die gewählten Benutzer wurden gelöscht.';
$strUsersHavingAccessToDb = 'Benutzer mit Zugriff auf &quot;%s&quot;';

$strValidateSQL = 'SQL validieren';
$strValidatorError = 'Bei der Initialisierung des SQL-Validators ist ein Fehler aufgetreten. Bitte überprüfen Sie, ob Sie die in der %sDokumentation%s beschriebenen php-Erweiterungen installiert haben.';
$strValue = 'Wert';
$strVar = 'Variable';
$strViewDump = 'Dump (Schema) der Tabelle anzeigen';
$strViewDumpDB = 'Dump (Schema) der Datenbank anzeigen';

$strWebServerUploadDirectory = 'Upload-Verzeichnis auf dem Webserver';
$strWebServerUploadDirectoryError = 'Auf das festgelegte Upload-Verzeichnis kann nicht zugegriffen werden.';
$strWelcome = 'Willkommen bei %s';
$strWildcard = 'wildcard';
$strWithChecked = 'markierte:';
$strWritingCommentNotPossible = 'Es können keine Kommentare geschrieben werden';
$strWritingRelationNotPossible = 'Es können keine Spaltenbeziehungen gespeichert werden.';
$strWrongUser = 'Falscher Benutzername/Kennwort. Zugriff verweigert.';

$strXML = 'XML';

$strYes = 'Ja';

$strZeroRemovesTheLimit = 'Anmerkung: Der Wert 0 (null) entfernt die Beschränkung.';
$strZip = 'Zip-komprimiert';

$strLaTeXOptions = 'LaTeX-Optionen';
$strRelations = 'Tabellenverknüpfungen';
$strMoveTableSameNames = 'Tabelle kann nicht mit gleichem Namen verschoben werden!';
$strCopyTableSameNames = 'Tabelle kann nicht mit gleichem Namen kopiert werden!';
$strMustSelectFile = 'Bitte geben Sie eine Datei an, die eingefügt werden soll.';
$strSaveOnServer = 'Datei auf dem Server in Verzeichnis %s speichern';
$strOverwriteExisting = 'Bestehende Datei(en) überschreiben';
$strFileAlreadyExists = 'Die Datei %s besteht bereits auf dem Server. Bitte ändern Sie den Dateinamen oder wählen Sie die Überschreibungs-Option.';
$strDumpSaved = 'Dump (Schema) wurde in Datei %s gespeichert.';
$strNoPermission = 'Der Webserver hat keine Schreibrechte um die Datei %s zu speichern.';
$strNoSpace = 'Zu wenig Speicherplatz um die Datei %s zu speichern.';
$strInsertedRowId = 'Letzte automatisch eingefügte ID:';
$strLoadMethod = 'LOAD-Methode';
$strLoadExplanation = 'Die beste Methode zur Verarbeitung der hochgeladenen Datei durch MySQL ist standardmäßig aktiviert.  Wählen Sie bei Problemen bitte die andere Methode.';
$strExecuteBookmarked = 'Gespeicherte SQL-Anfrage ausführen';
$strExcelOptions = 'Excel-Optionen';
$strReplaceNULLBy = 'Ersetze NULL mit';
$strQueryWindowLock = 'Abfrage vor Änderungen ausserhalb des Fensters schützen';
$strPaperSize = 'Papiergröße';
$strDatabaseNoTable = 'Diese Datenbank enthält keine Tabelle!';
$strViewDumpDatabases = 'Dump (Schema) der Datenbanken anzeigen';
$strAddIntoComments = 'In Kommentarbereich einbeziehen';
$strDatabaseExportOptions = 'Export-Optionen der Datenbank';
$strAddDropDatabase = 'DROP DATABASE hinzufügen';
$strToggleScratchboard = 'Klemmbrett anzeigen';
$strTableOptions = 'Tabellenoptionen';
$strSecretRequired = 'Ab sofort muss ein geheimes Passwort zur Verschlüsselung in der Konfigurationsdatei gesetzt werden (blowfish_secret).';
$strAccessDeniedExplanation = 'phpMyAdmin hat versucht eine Verbindung zum MySQL-Server aufzubauen, jedoch hat dieser die Verbindung zurückgewiesen. Sie sollten Ihre Einstellungen für Host, Benutzername und Kennwort in Ihrer config.inc.php überprüfen und sich vergewissern, dass diese den Informationen, welche sie vom Administrator erhalten haben, entsprechen.';
?>
