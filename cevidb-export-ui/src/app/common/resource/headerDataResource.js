/* global angular */
(function () {
    "use strict";

    angular
        .module('cevidb-export.common')
        .factory('HeaderDataResource', HeaderDataResource);

    // @ngInject
    function HeaderDataResource(
        _,
        $http, $log,
        PromiseService) {

        var LOG = $log.get('HeaderDataResource'),
            mock = [
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

        return {
            findAll: findAll
        };

        function findAll() {
            return mock;
        }

    }

}());
