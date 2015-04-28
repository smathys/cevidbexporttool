'use strict';

/**
 * @ngdoc service
 * @name ceviDbExportToolApp.backgroundDataService
 * @description
 * # backgroundDataService
 * Service in the ceviDbExportToolApp.
 */
angular.module('ceviDbExportToolApp')
  .factory('BackgroundDataService', function () {

    var _ceviWords = [
      "1.Hilf",
      "Ääääänguetemitenand",
      "Abchoche",
      "Abzeiche",
      "Action",
      "Akzeptanz",
      "Arbetsplan",
      "Bastle",
      "Bieli",
      "Blachebund",
      "Blachechnopf",
      "Blacheschluch",
      "Blinzle",
      "Brötlistecke",
      "Camping",
      "Cevianer",
      "Cevianerin",
      "Cevi-Hemd",
      "Cevi-Name",
      "Cevi-Zeiche",
      "Chartekund",
      "Chnebleschiissi",
      "Chochtopf",
      "Diskutiere",
      "Fackle",
      "Fröschli",
      "Fründschafte",
      "Füür",
      "Füürhärdöpfel",
      "Gitarresaite",
      "Gländspiel",
      "Glaube",
      "Gruppeprogramm",
      "Gruppeschluss",
      "Gruppetrank",
      "Hängematte",
      "Hauptrolle",
      "Hike",
      "Höck",
      "Improvisation",
      "Insider",
      "J+S-Material",
      "Kreisbund",
      "Lagerchuchi",
      "Lagerfoti",
      "Lagerleiter",
      "Lagerplatz",
      "Leiterstilli",
      "Leiterteam",
      "Marschtabelle",
      "Marshallows",
      "Materialschlacht",
      "Mitenand",
      "Morsezeiche",
      "Muggestich",
      "Nachtaction",
      "Notpäckli",
      "Pfi-La",
      "Pflocksack",
      "Pissbaum",
      "Popcorn",
      "Postelauf",
      "Rägeschutz",
      "Rahmscheisse",
      "Rauch",
      "Rollespiel",
      "Sackmesser",
      "Samstig-Namittag",
      "Sauhuufe",
      "Schlafsack",
      "Schlangebrot",
      "Schmuggelspiel",
      "Schnitzeljagd",
      "Schnitze",
      "Schoggibanane",
      "Seilbrugg",
      "Signature",
      "Singbüechli",
      "Singe",
      "Spass",
      "Spate",
      "Spiele",
      "Spielleitig",
      "Spielregle",
      "Sportblock",
      "Sumpf",
      "Thermos-Chrueg",
      "Velo",
      "Verchleidig",
      "Vertraue",
      "Verzelle",
      "Vielsitigkeit",
      "Wald",
      "Waldläuferzeiche",
      "Waldwiehnacht",
      "Wanderschueh",
      "Wasserschlacht",
      "Workshops",
      "Zämesii",
      "Zuelose",
      "Cevi",
      "Export",
      "Tool",
      "DB"
    ];

    /* randomize array element order in-place.
     using Fisher-Yates shuffle algoithm
     */
    function shuffle() {
      for (var i = _ceviWords.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = _ceviWords[i];
        _ceviWords[i] = _ceviWords[j];
        _ceviWords[j] = temp;
      }
      return _ceviWords;
    }

    return {
      getCeviWords: shuffle
    };
  });

