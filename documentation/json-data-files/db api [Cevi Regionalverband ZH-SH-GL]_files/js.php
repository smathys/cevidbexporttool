var DOKU_BASE='/dokuwiki/';var DOKU_TPL='/dokuwiki/lib/tpl/dokuwiki/';var DOKU_COOKIE_PARAM={"path":"\/dokuwiki\/","secure":false};var DOKU_UHN=0;var DOKU_UHC=0;LANG={"willexpire":"Die Sperre zur Bearbeitung dieser Seite l\u00e4uft in einer Minute ab.\\nUm Bearbeitungskonflikte zu vermeiden, solltest du sie durch einen Klick auf den Vorschau-Knopf verl\u00e4ngern.","notsavedyet":"Nicht gespeicherte \u00c4nderungen gehen verloren!","searchmedia":"Suche nach Dateien","keepopen":"Fenster nach Auswahl nicht schlie\u00dfen","hidedetails":"Details ausblenden","mediatitle":"Link-Eigenschaften","mediadisplay":"Linktyp","mediaalign":"Ausrichtung","mediasize":"Bildgr\u00f6\u00dfe","mediatarget":"Linkziel","mediaclose":"Schlie\u00dfen","mediainsert":"Einf\u00fcgen","mediadisplayimg":"Bild anzeigen.","mediadisplaylnk":"Nur den Link anzeigen.","mediasmall":"Kleine Version","mediamedium":"Mittelgro\u00dfe Version","medialarge":"Gro\u00dfe Version","mediaoriginal":"Original Version","medialnk":"Link zu der Detailseite","mediadirect":"Direkter Link zum Original","medianolnk":"Kein link","medianolink":"Keine Verlinkung des Bildes","medialeft":"Bild nach links ausrichten.","mediaright":"Bild nach rechts ausrichten.","mediacenter":"Bild in der Mitte ausrichten","medianoalign":"Keine Ausrichtung des Bildes.","nosmblinks":"Das Verlinken von Windows-Freigaben funktioniert nur im Microsoft Internet-Explorer.\\nDer Link kann jedoch durch Kopieren und Einf\u00fcgen verwendet werden.","linkwiz":"Link-Assistent","linkto":"Link zu:","del_confirm":"Die ausgew\u00e4hlten Dateien wirklich l\u00f6schen?","restore_confirm":"Wirklich diese Version wiederherstellen?","media_diff":"Unterschiede anzeigen:","media_diff_both":"Seite f\u00fcr Seite","media_diff_opacity":"\u00dcberblenden","media_diff_portions":"\u00dcbergang","media_select":"Dateien ausw\u00e4hlen\u2026","media_upload_btn":"Hochladen","media_done_btn":"Fertig","media_drop":"Dateien hier hinziehen um sie hochzuladen","media_cancel":"Entfernen","media_overwrt":"Existierende Dateien \u00fcberschreiben","plugins":{"extension":{"reallydel":"Really uninstall this extension?"}}};var toolbar=[{"type":"format","title":"Fetter Text","icon":"bold.png","key":"b","open":"**","close":"**","block":false},{"type":"format","title":"Kursiver Text","icon":"italic.png","key":"i","open":"\/\/","close":"\/\/","block":false},{"type":"format","title":"Unterstrichener Text","icon":"underline.png","key":"u","open":"__","close":"__","block":false},{"type":"format","title":"Code Text","icon":"mono.png","key":"m","open":"''","close":"''","block":false},{"type":"format","title":"Durchgestrichener Text","icon":"strike.png","key":"d","open":"<del>","close":"<\/del>","block":false},{"type":"autohead","title":"\u00dcberschrift auf selber Ebene","icon":"hequal.png","key":"8","text":"\u00dcberschrift","mod":0,"block":true},{"type":"autohead","title":"\u00dcberschrift eine Ebene runter","icon":"hminus.png","key":"9","text":"\u00dcberschrift","mod":1,"block":true},{"type":"autohead","title":"\u00dcberschrift eine Ebene h\u00f6her","icon":"hplus.png","key":"0","text":"\u00dcberschrift","mod":-1,"block":true},{"type":"picker","title":"W\u00e4hle eine \u00dcberschrift","icon":"h.png","class":"pk_hl","list":[{"type":"format","title":"Level 1 \u00dcberschrift","icon":"h1.png","key":"1","open":"====== ","close":" ======\\n"},{"type":"format","title":"Level 2 \u00dcberschrift","icon":"h2.png","key":"2","open":"===== ","close":" =====\\n"},{"type":"format","title":"Level 3 \u00dcberschrift","icon":"h3.png","key":"3","open":"==== ","close":" ====\\n"},{"type":"format","title":"Level 4 \u00dcberschrift","icon":"h4.png","key":"4","open":"=== ","close":" ===\\n"},{"type":"format","title":"Level 5 \u00dcberschrift","icon":"h5.png","key":"5","open":"== ","close":" ==\\n"}],"block":true},{"type":"linkwiz","title":"Interner Link","icon":"link.png","key":"l","open":"[[","close":"]]","block":false},{"type":"format","title":"Externer Link","icon":"linkextern.png","open":"[[","close":"]]","sample":"http:\/\/example.com|Externer Link","block":false},{"type":"formatln","title":"Nummerierter Listenpunkt","icon":"ol.png","open":"  - ","close":"","key":"-","block":true},{"type":"formatln","title":"Listenpunkt","icon":"ul.png","open":"  * ","close":"","key":".","block":true},{"type":"insert","title":"Horizontale Linie","icon":"hr.png","insert":"\\n----\\n","block":true},{"type":"mediapopup","title":"Bilder und andere Dateien hinzuf\u00fcgen","icon":"image.png","url":"lib\/exe\/mediamanager.php?ns=","name":"mediaselect","options":"width=750,height=500,left=20,top=20,scrollbars=yes,resizable=yes","block":false},{"type":"picker","title":"Smileys","icon":"smiley.png","list":{"8-)":"icon_cool.gif","8-O":"icon_eek.gif","8-o":"icon_eek.gif",":-(":"icon_sad.gif",":-)":"icon_smile.gif","=)":"icon_smile2.gif",":-\/":"icon_doubt.gif",":-\\":"icon_doubt2.gif",":-?":"icon_confused.gif",":-D":"icon_biggrin.gif",":-P":"icon_razz.gif",":-o":"icon_surprised.gif",":-O":"icon_surprised.gif",":-x":"icon_silenced.gif",":-X":"icon_silenced.gif",":-|":"icon_neutral.gif",";-)":"icon_wink.gif","m(":"facepalm.gif","^_^":"icon_fun.gif",":?:":"icon_question.gif",":!:":"icon_exclaim.gif","LOL":"icon_lol.gif","FIXME":"fixme.gif","DELETEME":"delete.gif"},"icobase":"smileys","block":false},{"type":"picker","title":"Sonderzeichen","icon":"chars.png","list":["\u00c0","\u00e0","\u00c1","\u00e1","\u00c2","\u00e2","\u00c3","\u00e3","\u00c4","\u00e4","\u01cd","\u01ce","\u0102","\u0103","\u00c5","\u00e5","\u0100","\u0101","\u0104","\u0105","\u00c6","\u00e6","\u0106","\u0107","\u00c7","\u00e7","\u010c","\u010d","\u0108","\u0109","\u010a","\u010b","\u00d0","\u0111","\u00f0","\u010e","\u010f","\u00c8","\u00e8","\u00c9","\u00e9","\u00ca","\u00ea","\u00cb","\u00eb","\u011a","\u011b","\u0112","\u0113","\u0116","\u0117","\u0118","\u0119","\u0122","\u0123","\u011c","\u011d","\u011e","\u011f","\u0120","\u0121","\u0124","\u0125","\u00cc","\u00ec","\u00cd","\u00ed","\u00ce","\u00ee","\u00cf","\u00ef","\u01cf","\u01d0","\u012a","\u012b","\u0130","\u0131","\u012e","\u012f","\u0134","\u0135","\u0136","\u0137","\u0139","\u013a","\u013b","\u013c","\u013d","\u013e","\u0141","\u0142","\u013f","\u0140","\u0143","\u0144","\u00d1","\u00f1","\u0145","\u0146","\u0147","\u0148","\u00d2","\u00f2","\u00d3","\u00f3","\u00d4","\u00f4","\u00d5","\u00f5","\u00d6","\u00f6","\u01d1","\u01d2","\u014c","\u014d","\u0150","\u0151","\u0152","\u0153","\u00d8","\u00f8","\u0154","\u0155","\u0156","\u0157","\u0158","\u0159","\u015a","\u015b","\u015e","\u015f","\u0160","\u0161","\u015c","\u015d","\u0162","\u0163","\u0164","\u0165","\u00d9","\u00f9","\u00da","\u00fa","\u00db","\u00fb","\u00dc","\u00fc","\u01d3","\u01d4","\u016c","\u016d","\u016a","\u016b","\u016e","\u016f","\u01d6","\u01d8","\u01da","\u01dc","\u0172","\u0173","\u0170","\u0171","\u0174","\u0175","\u00dd","\u00fd","\u0178","\u00ff","\u0176","\u0177","\u0179","\u017a","\u017d","\u017e","\u017b","\u017c","\u00de","\u00fe","\u00df","\u0126","\u0127","\u00bf","\u00a1","\u00a2","\u00a3","\u00a4","\u00a5","\u20ac","\u00a6","\u00a7","\u00aa","\u00ac","\u00af","\u00b0","\u00b1","\u00f7","\u2030","\u00bc","\u00bd","\u00be","\u00b9","\u00b2","\u00b3","\u00b5","\u00b6","\u2020","\u2021","\u00b7","\u2022","\u00ba","\u2200","\u2202","\u2203","\u018f","\u0259","\u2205","\u2207","\u2208","\u2209","\u220b","\u220f","\u2211","\u203e","\u2212","\u2217","\u00d7","\u2044","\u221a","\u221d","\u221e","\u2220","\u2227","\u2228","\u2229","\u222a","\u222b","\u2234","\u223c","\u2245","\u2248","\u2260","\u2261","\u2264","\u2265","\u2282","\u2283","\u2284","\u2286","\u2287","\u2295","\u2297","\u22a5","\u22c5","\u25ca","\u2118","\u2111","\u211c","\u2135","\u2660","\u2663","\u2665","\u2666","\u03b1","\u03b2","\u0393","\u03b3","\u0394","\u03b4","\u03b5","\u03b6","\u03b7","\u0398","\u03b8","\u03b9","\u03ba","\u039b","\u03bb","\u03bc","\u039e","\u03be","\u03a0","\u03c0","\u03c1","\u03a3","\u03c3","\u03a4","\u03c4","\u03c5","\u03a6","\u03c6","\u03c7","\u03a8","\u03c8","\u03a9","\u03c9","\u2605","\u2606","\u260e","\u261a","\u261b","\u261c","\u261d","\u261e","\u261f","\u2639","\u263a","\u2714","\u2718","\u201e","\u201c","\u201d","\u201a","\u2018","\u2019","\u00ab","\u00bb","\u2039","\u203a","\u2014","\u2013","\u2026","\u2190","\u2191","\u2192","\u2193","\u2194","\u21d0","\u21d1","\u21d2","\u21d3","\u21d4","\u00a9","\u2122","\u00ae","\u2032","\u2033","[","]","{","}","~","(",")","%","\u00a7","$","#","|","@"],"block":false},{"type":"signature","title":"Unterschrift einf\u00fcgen","icon":"sig.png","key":"y","block":false}];
/*!
 * jQuery JavaScript Library v1.7.2
 * http://jquery.com/
 *
 * Copyright 2011, John Resig
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * Includes Sizzle.js
 * http://sizzlejs.com/
 * Copyright 2011, The Dojo Foundation
 * Released under the MIT, BSD, and GPL Licenses.
 *
 * Date: Thu Nov 15 18:28:24 BRST 2012
 */
(function( window, undefined ) {

// Use the correct document accordingly with window argument (sandbox)
var document = window.document,
	navigator = window.navigator,
	location = window.location;
var jQuery = (function() {

// Define a local copy of jQuery
var jQuery = function( selector, context ) {
		// The jQuery object is actually just the init constructor 'enhanced'
		return new jQuery.fn.init( selector, context, rootjQuery );
	},

	// Map over jQuery in case of overwrite
	_jQuery = window.jQuery,

	// Map over the $ in case of overwrite
	_$ = window.$,

	// A central reference to the root jQuery(document)
	rootjQuery,

	// A simple way to check for HTML strings or ID strings
	// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
	quickExpr = /^(?:[^#<]*(<[\w\W]+>)[^>]*$|#([\w\-]*)$)/,

	// Check if a string has a non-whitespace character in it
	rnotwhite = /\S/,

	// Used for trimming whitespace
	trimLeft = /^\s+/,
	trimRight = /\s+$/,

	// Match a standalone tag
	rsingleTag = /^<(\w+)\s*\/?>(?:<\/\1>)?$/,

	// JSON RegExp
	rvalidchars = /^[\],:{}\s]*$/,
	rvalidescape = /\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,
	rvalidtokens = /"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,
	rvalidbraces = /(?:^|:|,)(?:\s*\[)+/g,

	// Useragent RegExp
	rwebkit = /(webkit)[ \/]([\w.]+)/,
	ropera = /(opera)(?:.*version)?[ \/]([\w.]+)/,
	rmsie = /(msie) ([\w.]+)/,
	rmozilla = /(mozilla)(?:.*? rv:([\w.]+))?/,

	// Matches dashed string for camelizing
	rdashAlpha = /-([a-z]|[0-9])/ig,
	rmsPrefix = /^-ms-/,

	// Used by jQuery.camelCase as callback to replace()
	fcamelCase = function( all, letter ) {
		return ( letter + "" ).toUpperCase();
	},

	// Keep a UserAgent string for use with jQuery.browser
	userAgent = navigator.userAgent,

	// For matching the engine and version of the browser
	browserMatch,

	// The deferred used on DOM ready
	readyList,

	// The ready event handler
	DOMContentLoaded,

	// Save a reference to some core methods
	toString = Object.prototype.toString,
	hasOwn = Object.prototype.hasOwnProperty,
	push = Array.prototype.push,
	slice = Array.prototype.slice,
	trim = String.prototype.trim,
	indexOf = Array.prototype.indexOf,

	// [[Class]] -> type pairs
	class2type = {};

jQuery.fn = jQuery.prototype = {
	constructor: jQuery,
	init: function( selector, context, rootjQuery ) {
		var match, elem, ret, doc;

		// Handle $(""), $(null), or $(undefined)
		if ( !selector ) {
			return this;
		}

		// Handle $(DOMElement)
		if ( selector.nodeType ) {
			this.context = this[0] = selector;
			this.length = 1;
			return this;
		}

		// The body element only exists once, optimize finding it
		if ( selector === "body" && !context && document.body ) {
			this.context = document;
			this[0] = document.body;
			this.selector = selector;
			this.length = 1;
			return this;
		}

		// Handle HTML strings
		if ( typeof selector === "string" ) {
			// Are we dealing with HTML string or an ID?
			if ( selector.charAt(0) === "<" && selector.charAt( selector.length - 1 ) === ">" && selector.length >= 3 ) {
				// Assume that strings that start and end with <> are HTML and skip the regex check
				match = [ null, selector, null ];

			} else {
				match = quickExpr.exec( selector );
			}

			// Verify a match, and that no context was specified for #id
			if ( match && (match[1] || !context) ) {

				// HANDLE: $(html) -> $(array)
				if ( match[1] ) {
					context = context instanceof jQuery ? context[0] : context;
					doc = ( context ? context.ownerDocument || context : document );

					// If a single string is passed in and it's a single tag
					// just do a createElement and skip the rest
					ret = rsingleTag.exec( selector );

					if ( ret ) {
						if ( jQuery.isPlainObject( context ) ) {
							selector = [ document.createElement( ret[1] ) ];
							jQuery.fn.attr.call( selector, context, true );

						} else {
							selector = [ doc.createElement( ret[1] ) ];
						}

					} else {
						ret = jQuery.buildFragment( [ match[1] ], [ doc ] );
						selector = ( ret.cacheable ? jQuery.clone(ret.fragment) : ret.fragment ).childNodes;
					}

					return jQuery.merge( this, selector );

				// HANDLE: $("#id")
				} else {
					elem = document.getElementById( match[2] );

					// Check parentNode to catch when Blackberry 4.6 returns
					// nodes that are no longer in the document #6963
					if ( elem && elem.parentNode ) {
						// Handle the case where IE and Opera return items
						// by name instead of ID
						if ( elem.id !== match[2] ) {
							return rootjQuery.find( selector );
						}

						// Otherwise, we inject the element directly into the jQuery object
						this.length = 1;
						this[0] = elem;
					}

					this.context = document;
					this.selector = selector;
					return this;
				}

			// HANDLE: $(expr, $(...))
			} else if ( !context || context.jquery ) {
				return ( context || rootjQuery ).find( selector );

			// HANDLE: $(expr, context)
			// (which is just equivalent to: $(context).find(expr)
			} else {
				return this.constructor( context ).find( selector );
			}

		// HANDLE: $(function)
		// Shortcut for document ready
		} else if ( jQuery.isFunction( selector ) ) {
			return rootjQuery.ready( selector );
		}

		if ( selector.selector !== undefined ) {
			this.selector = selector.selector;
			this.context = selector.context;
		}

		return jQuery.makeArray( selector, this );
	},

	// Start with an empty selector
	selector: "",

	// The current version of jQuery being used
	jquery: "1.7.2",

	// The default length of a jQuery object is 0
	length: 0,

	// The number of elements contained in the matched element set
	size: function() {
		return this.length;
	},

	toArray: function() {
		return slice.call( this, 0 );
	},

	// Get the Nth element in the matched element set OR
	// Get the whole matched element set as a clean array
	get: function( num ) {
		return num == null ?

			// Return a 'clean' array
			this.toArray() :

			// Return just the object
			( num < 0 ? this[ this.length + num ] : this[ num ] );
	},

	// Take an array of elements and push it onto the stack
	// (returning the new matched element set)
	pushStack: function( elems, name, selector ) {
		// Build a new jQuery matched element set
		var ret = this.constructor();

		if ( jQuery.isArray( elems ) ) {
			push.apply( ret, elems );

		} else {
			jQuery.merge( ret, elems );
		}

		// Add the old object onto the stack (as a reference)
		ret.prevObject = this;

		ret.context = this.context;

		if ( name === "find" ) {
			ret.selector = this.selector + ( this.selector ? " " : "" ) + selector;
		} else if ( name ) {
			ret.selector = this.selector + "." + name + "(" + selector + ")";
		}

		// Return the newly-formed element set
		return ret;
	},

	// Execute a callback for every element in the matched set.
	// (You can seed the arguments with an array of args, but this is
	// only used internally.)
	each: function( callback, args ) {
		return jQuery.each( this, callback, args );
	},

	ready: function( fn ) {
		// Attach the listeners
		jQuery.bindReady();

		// Add the callback
		readyList.add( fn );

		return this;
	},

	eq: function( i ) {
		i = +i;
		return i === -1 ?
			this.slice( i ) :
			this.slice( i, i + 1 );
	},

	first: function() {
		return this.eq( 0 );
	},

	last: function() {
		return this.eq( -1 );
	},

	slice: function() {
		return this.pushStack( slice.apply( this, arguments ),
			"slice", slice.call(arguments).join(",") );
	},

	map: function( callback ) {
		return this.pushStack( jQuery.map(this, function( elem, i ) {
			return callback.call( elem, i, elem );
		}));
	},

	end: function() {
		return this.prevObject || this.constructor(null);
	},

	// For internal use only.
	// Behaves like an Array's method, not like a jQuery method.
	push: push,
	sort: [].sort,
	splice: [].splice
};

// Give the init function the jQuery prototype for later instantiation
jQuery.fn.init.prototype = jQuery.fn;

jQuery.extend = jQuery.fn.extend = function() {
	var options, name, src, copy, copyIsArray, clone,
		target = arguments[0] || {},
		i = 1,
		length = arguments.length,
		deep = false;

	// Handle a deep copy situation
	if ( typeof target === "boolean" ) {
		deep = target;
		target = arguments[1] || {};
		// skip the boolean and the target
		i = 2;
	}

	// Handle case when target is a string or something (possible in deep copy)
	if ( typeof target !== "object" && !jQuery.isFunction(target) ) {
		target = {};
	}

	// extend jQuery itself if only one argument is passed
	if ( length === i ) {
		target = this;
		--i;
	}

	for ( ; i < length; i++ ) {
		// Only deal with non-null/undefined values
		if ( (options = arguments[ i ]) != null ) {
			// Extend the base object
			for ( name in options ) {
				src = target[ name ];
				copy = options[ name ];

				// Prevent never-ending loop
				if ( target === copy ) {
					continue;
				}

				// Recurse if we're merging plain objects or arrays
				if ( deep && copy && ( jQuery.isPlainObject(copy) || (copyIsArray = jQuery.isArray(copy)) ) ) {
					if ( copyIsArray ) {
						copyIsArray = false;
						clone = src && jQuery.isArray(src) ? src : [];

					} else {
						clone = src && jQuery.isPlainObject(src) ? src : {};
					}

					// Never move original objects, clone them
					target[ name ] = jQuery.extend( deep, clone, copy );

				// Don't bring in undefined values
				} else if ( copy !== undefined ) {
					target[ name ] = copy;
				}
			}
		}
	}

	// Return the modified object
	return target;
};

jQuery.extend({
	noConflict: function( deep ) {
		if ( window.$ === jQuery ) {
			window.$ = _$;
		}

		if ( deep && window.jQuery === jQuery ) {
			window.jQuery = _jQuery;
		}

		return jQuery;
	},

	// Is the DOM ready to be used? Set to true once it occurs.
	isReady: false,

	// A counter to track how many items to wait for before
	// the ready event fires. See #6781
	readyWait: 1,

	// Hold (or release) the ready event
	holdReady: function( hold ) {
		if ( hold ) {
			jQuery.readyWait++;
		} else {
			jQuery.ready( true );
		}
	},

	// Handle when the DOM is ready
	ready: function( wait ) {
		// Either a released hold or an DOMready/load event and not yet ready
		if ( (wait === true && !--jQuery.readyWait) || (wait !== true && !jQuery.isReady) ) {
			// Make sure body exists, at least, in case IE gets a little overzealous (ticket #5443).
			if ( !document.body ) {
				return setTimeout( jQuery.ready, 1 );
			}

			// Remember that the DOM is ready
			jQuery.isReady = true;

			// If a normal DOM Ready event fired, decrement, and wait if need be
			if ( wait !== true && --jQuery.readyWait > 0 ) {
				return;
			}

			// If there are functions bound, to execute
			readyList.fireWith( document, [ jQuery ] );

			// Trigger any bound ready events
			if ( jQuery.fn.trigger ) {
				jQuery( document ).trigger( "ready" ).off( "ready" );
			}
		}
	},

	bindReady: function() {
		if ( readyList ) {
			return;
		}

		readyList = jQuery.Callbacks( "once memory" );

		// Catch cases where $(document).ready() is called after the
		// browser event has already occurred.
		if ( document.readyState === "complete" ) {
			// Handle it asynchronously to allow scripts the opportunity to delay ready
			return setTimeout( jQuery.ready, 1 );
		}

		// Mozilla, Opera and webkit nightlies currently support this event
		if ( document.addEventListener ) {
			// Use the handy event callback
			document.addEventListener( "DOMContentLoaded", DOMContentLoaded, false );

			// A fallback to window.onload, that will always work
			window.addEventListener( "load", jQuery.ready, false );

		// If IE event model is used
		} else if ( document.attachEvent ) {
			// ensure firing before onload,
			// maybe late but safe also for iframes
			document.attachEvent( "onreadystatechange", DOMContentLoaded );

			// A fallback to window.onload, that will always work
			window.attachEvent( "onload", jQuery.ready );

			// If IE and not a frame
			// continually check to see if the document is ready
			var toplevel = false;

			try {
				toplevel = window.frameElement == null;
			} catch(e) {}

			if ( document.documentElement.doScroll && toplevel ) {
				doScrollCheck();
			}
		}
	},

	// See test/unit/core.js for details concerning isFunction.
	// Since version 1.3, DOM methods and functions like alert
	// aren't supported. They return false on IE (#2968).
	isFunction: function( obj ) {
		return jQuery.type(obj) === "function";
	},

	isArray: Array.isArray || function( obj ) {
		return jQuery.type(obj) === "array";
	},

	isWindow: function( obj ) {
		return obj != null && obj == obj.window;
	},

	isNumeric: function( obj ) {
		return !isNaN( parseFloat(obj) ) && isFinite( obj );
	},

	type: function( obj ) {
		return obj == null ?
			String( obj ) :
			class2type[ toString.call(obj) ] || "object";
	},

	isPlainObject: function( obj ) {
		// Must be an Object.
		// Because of IE, we also have to check the presence of the constructor property.
		// Make sure that DOM nodes and window objects don't pass through, as well
		if ( !obj || jQuery.type(obj) !== "object" || obj.nodeType || jQuery.isWindow( obj ) ) {
			return false;
		}

		try {
			// Not own constructor property must be Object
			if ( obj.constructor &&
				!hasOwn.call(obj, "constructor") &&
				!hasOwn.call(obj.constructor.prototype, "isPrototypeOf") ) {
				return false;
			}
		} catch ( e ) {
			// IE8,9 Will throw exceptions on certain host objects #9897
			return false;
		}

		// Own properties are enumerated firstly, so to speed up,
		// if last one is own, then all properties are own.

		var key;
		for ( key in obj ) {}

		return key === undefined || hasOwn.call( obj, key );
	},

	isEmptyObject: function( obj ) {
		for ( var name in obj ) {
			return false;
		}
		return true;
	},

	error: function( msg ) {
		throw new Error( msg );
	},

	parseJSON: function( data ) {
		if ( typeof data !== "string" || !data ) {
			return null;
		}

		// Make sure leading/trailing whitespace is removed (IE can't handle it)
		data = jQuery.trim( data );

		// Attempt to parse using the native JSON parser first
		if ( window.JSON && window.JSON.parse ) {
			return window.JSON.parse( data );
		}

		// Make sure the incoming data is actual JSON
		// Logic borrowed from http://json.org/json2.js
		if ( rvalidchars.test( data.replace( rvalidescape, "@" )
			.replace( rvalidtokens, "]" )
			.replace( rvalidbraces, "")) ) {

			return ( new Function( "return " + data ) )();

		}
		jQuery.error( "Invalid JSON: " + data );
	},

	// Cross-browser xml parsing
	parseXML: function( data ) {
		if ( typeof data !== "string" || !data ) {
			return null;
		}
		var xml, tmp;
		try {
			if ( window.DOMParser ) { // Standard
				tmp = new DOMParser();
				xml = tmp.parseFromString( data , "text/xml" );
			} else { // IE
				xml = new ActiveXObject( "Microsoft.XMLDOM" );
				xml.async = "false";
				xml.loadXML( data );
			}
		} catch( e ) {
			xml = undefined;
		}
		if ( !xml || !xml.documentElement || xml.getElementsByTagName( "parsererror" ).length ) {
			jQuery.error( "Invalid XML: " + data );
		}
		return xml;
	},

	noop: function() {},

	// Evaluates a script in a global context
	// Workarounds based on findings by Jim Driscoll
	// http://weblogs.java.net/blog/driscoll/archive/2009/09/08/eval-javascript-global-context
	globalEval: function( data ) {
		if ( data && rnotwhite.test( data ) ) {
			// We use execScript on Internet Explorer
			// We use an anonymous function so that context is window
			// rather than jQuery in Firefox
			( window.execScript || function( data ) {
				window[ "eval" ].call( window, data );
			} )( data );
		}
	},

	// Convert dashed to camelCase; used by the css and data modules
	// Microsoft forgot to hump their vendor prefix (#9572)
	camelCase: function( string ) {
		return string.replace( rmsPrefix, "ms-" ).replace( rdashAlpha, fcamelCase );
	},

	nodeName: function( elem, name ) {
		return elem.nodeName && elem.nodeName.toUpperCase() === name.toUpperCase();
	},

	// args is for internal usage only
	each: function( object, callback, args ) {
		var name, i = 0,
			length = object.length,
			isObj = length === undefined || jQuery.isFunction( object );

		if ( args ) {
			if ( isObj ) {
				for ( name in object ) {
					if ( callback.apply( object[ name ], args ) === false ) {
						break;
					}
				}
			} else {
				for ( ; i < length; ) {
					if ( callback.apply( object[ i++ ], args ) === false ) {
						break;
					}
				}
			}

		// A special, fast, case for the most common use of each
		} else {
			if ( isObj ) {
				for ( name in object ) {
					if ( callback.call( object[ name ], name, object[ name ] ) === false ) {
						break;
					}
				}
			} else {
				for ( ; i < length; ) {
					if ( callback.call( object[ i ], i, object[ i++ ] ) === false ) {
						break;
					}
				}
			}
		}

		return object;
	},

	// Use native String.trim function wherever possible
	trim: trim ?
		function( text ) {
			return text == null ?
				"" :
				trim.call( text );
		} :

		// Otherwise use our own trimming functionality
		function( text ) {
			return text == null ?
				"" :
				text.toString().replace( trimLeft, "" ).replace( trimRight, "" );
		},

	// results is for internal usage only
	makeArray: function( array, results ) {
		var ret = results || [];

		if ( array != null ) {
			// The window, strings (and functions) also have 'length'
			// Tweaked logic slightly to handle Blackberry 4.7 RegExp issues #6930
			var type = jQuery.type( array );

			if ( array.length == null || type === "string" || type === "function" || type === "regexp" || jQuery.isWindow( array ) ) {
				push.call( ret, array );
			} else {
				jQuery.merge( ret, array );
			}
		}

		return ret;
	},

	inArray: function( elem, array, i ) {
		var len;

		if ( array ) {
			if ( indexOf ) {
				return indexOf.call( array, elem, i );
			}

			len = array.length;
			i = i ? i < 0 ? Math.max( 0, len + i ) : i : 0;

			for ( ; i < len; i++ ) {
				// Skip accessing in sparse arrays
				if ( i in array && array[ i ] === elem ) {
					return i;
				}
			}
		}

		return -1;
	},

	merge: function( first, second ) {
		var i = first.length,
			j = 0;

		if ( typeof second.length === "number" ) {
			for ( var l = second.length; j < l; j++ ) {
				first[ i++ ] = second[ j ];
			}

		} else {
			while ( second[j] !== undefined ) {
				first[ i++ ] = second[ j++ ];
			}
		}

		first.length = i;

		return first;
	},

	grep: function( elems, callback, inv ) {
		var ret = [], retVal;
		inv = !!inv;

		// Go through the array, only saving the items
		// that pass the validator function
		for ( var i = 0, length = elems.length; i < length; i++ ) {
			retVal = !!callback( elems[ i ], i );
			if ( inv !== retVal ) {
				ret.push( elems[ i ] );
			}
		}

		return ret;
	},

	// arg is for internal usage only
	map: function( elems, callback, arg ) {
		var value, key, ret = [],
			i = 0,
			length = elems.length,
			// jquery objects are treated as arrays
			isArray = elems instanceof jQuery || length !== undefined && typeof length === "number" && ( ( length > 0 && elems[ 0 ] && elems[ length -1 ] ) || length === 0 || jQuery.isArray( elems ) ) ;

		// Go through the array, translating each of the items to their
		if ( isArray ) {
			for ( ; i < length; i++ ) {
				value = callback( elems[ i ], i, arg );

				if ( value != null ) {
					ret[ ret.length ] = value;
				}
			}

		// Go through every key on the object,
		} else {
			for ( key in elems ) {
				value = callback( elems[ key ], key, arg );

				if ( value != null ) {
					ret[ ret.length ] = value;
				}
			}
		}

		// Flatten any nested arrays
		return ret.concat.apply( [], ret );
	},

	// A global GUID counter for objects
	guid: 1,

	// Bind a function to a context, optionally partially applying any
	// arguments.
	proxy: function( fn, context ) {
		if ( typeof context === "string" ) {
			var tmp = fn[ context ];
			context = fn;
			fn = tmp;
		}

		// Quick check to determine if target is callable, in the spec
		// this throws a TypeError, but we will just return undefined.
		if ( !jQuery.isFunction( fn ) ) {
			return undefined;
		}

		// Simulated bind
		var args = slice.call( arguments, 2 ),
			proxy = function() {
				return fn.apply( context, args.concat( slice.call( arguments ) ) );
			};

		// Set the guid of unique handler to the same of original handler, so it can be removed
		proxy.guid = fn.guid = fn.guid || proxy.guid || jQuery.guid++;

		return proxy;
	},

	// Mutifunctional method to get and set values to a collection
	// The value/s can optionally be executed if it's a function
	access: function( elems, fn, key, value, chainable, emptyGet, pass ) {
		var exec,
			bulk = key == null,
			i = 0,
			length = elems.length;

		// Sets many values
		if ( key && typeof key === "object" ) {
			for ( i in key ) {
				jQuery.access( elems, fn, i, key[i], 1, emptyGet, value );
			}
			chainable = 1;

		// Sets one value
		} else if ( value !== undefined ) {
			// Optionally, function values get executed if exec is true
			exec = pass === undefined && jQuery.isFunction( value );

			if ( bulk ) {
				// Bulk operations only iterate when executing function values
				if ( exec ) {
					exec = fn;
					fn = function( elem, key, value ) {
						return exec.call( jQuery( elem ), value );
					};

				// Otherwise they run against the entire set
				} else {
					fn.call( elems, value );
					fn = null;
				}
			}

			if ( fn ) {
				for (; i < length; i++ ) {
					fn( elems[i], key, exec ? value.call( elems[i], i, fn( elems[i], key ) ) : value, pass );
				}
			}

			chainable = 1;
		}

		return chainable ?
			elems :

			// Gets
			bulk ?
				fn.call( elems ) :
				length ? fn( elems[0], key ) : emptyGet;
	},

	now: function() {
		return ( new Date() ).getTime();
	},

	// Use of jQuery.browser is frowned upon.
	// More details: http://docs.jquery.com/Utilities/jQuery.browser
	uaMatch: function( ua ) {
		ua = ua.toLowerCase();

		var match = rwebkit.exec( ua ) ||
			ropera.exec( ua ) ||
			rmsie.exec( ua ) ||
			ua.indexOf("compatible") < 0 && rmozilla.exec( ua ) ||
			[];

		return { browser: match[1] || "", version: match[2] || "0" };
	},

	sub: function() {
		function jQuerySub( selector, context ) {
			return new jQuerySub.fn.init( selector, context );
		}
		jQuery.extend( true, jQuerySub, this );
		jQuerySub.superclass = this;
		jQuerySub.fn = jQuerySub.prototype = this();
		jQuerySub.fn.constructor = jQuerySub;
		jQuerySub.sub = this.sub;
		jQuerySub.fn.init = function init( selector, context ) {
			if ( context && context instanceof jQuery && !(context instanceof jQuerySub) ) {
				context = jQuerySub( context );
			}

			return jQuery.fn.init.call( this, selector, context, rootjQuerySub );
		};
		jQuerySub.fn.init.prototype = jQuerySub.fn;
		var rootjQuerySub = jQuerySub(document);
		return jQuerySub;
	},

	browser: {}
});

// Populate the class2type map
jQuery.each("Boolean Number String Function Array Date RegExp Object".split(" "), function(i, name) {
	class2type[ "[object " + name + "]" ] = name.toLowerCase();
});

browserMatch = jQuery.uaMatch( userAgent );
if ( browserMatch.browser ) {
	jQuery.browser[ browserMatch.browser ] = true;
	jQuery.browser.version = browserMatch.version;
}

// Deprecated, use jQuery.browser.webkit instead
if ( jQuery.browser.webkit ) {
	jQuery.browser.safari = true;
}

// IE doesn't match non-breaking spaces with \s
if ( rnotwhite.test( "\xA0" ) ) {
	trimLeft = /^[\s\xA0]+/;
	trimRight = /[\s\xA0]+$/;
}

// All jQuery objects should point back to these
rootjQuery = jQuery(document);

// Cleanup functions for the document ready method
if ( document.addEventListener ) {
	DOMContentLoaded = function() {
		document.removeEventListener( "DOMContentLoaded", DOMContentLoaded, false );
		jQuery.ready();
	};

} else if ( document.attachEvent ) {
	DOMContentLoaded = function() {
		// Make sure body exists, at least, in case IE gets a little overzealous (ticket #5443).
		if ( document.readyState === "complete" ) {
			document.detachEvent( "onreadystatechange", DOMContentLoaded );
			jQuery.ready();
		}
	};
}

// The DOM ready check for Internet Explorer
function doScrollCheck() {
	if ( jQuery.isReady ) {
		return;
	}

	try {
		// If IE is used, use the trick by Diego Perini
		// http://javascript.nwbox.com/IEContentLoaded/
		document.documentElement.doScroll("left");
	} catch(e) {
		setTimeout( doScrollCheck, 1 );
		return;
	}

	// and execute any waiting functions
	jQuery.ready();
}

return jQuery;

})();


// String to Object flags format cache
var flagsCache = {};

// Convert String-formatted flags into Object-formatted ones and store in cache
function createFlags( flags ) {
	var object = flagsCache[ flags ] = {},
		i, length;
	flags = flags.split( /\s+/ );
	for ( i = 0, length = flags.length; i < length; i++ ) {
		object[ flags[i] ] = true;
	}
	return object;
}

/*
 * Create a callback list using the following parameters:
 *
 *	flags:	an optional list of space-separated flags that will change how
 *			the callback list behaves
 *
 * By default a callback list will act like an event callback list and can be
 * "fired" multiple times.
 *
 * Possible flags:
 *
 *	once:			will ensure the callback list can only be fired once (like a Deferred)
 *
 *	memory:			will keep track of previous values and will call any callback added
 *					after the list has been fired right away with the latest "memorized"
 *					values (like a Deferred)
 *
 *	unique:			will ensure a callback can only be added once (no duplicate in the list)
 *
 *	stopOnFalse:	interrupt callings when a callback returns false
 *
 */
jQuery.Callbacks = function( flags ) {

	// Convert flags from String-formatted to Object-formatted
	// (we check in cache first)
	flags = flags ? ( flagsCache[ flags ] || createFlags( flags ) ) : {};

	var // Actual callback list
		list = [],
		// Stack of fire calls for repeatable lists
		stack = [],
		// Last fire value (for non-forgettable lists)
		memory,
		// Flag to know if list was already fired
		fired,
		// Flag to know if list is currently firing
		firing,
		// First callback to fire (used internally by add and fireWith)
		firingStart,
		// End of the loop when firing
		firingLength,
		// Index of currently firing callback (modified by remove if needed)
		firingIndex,
		// Add one or several callbacks to the list
		add = function( args ) {
			var i,
				length,
				elem,
				type,
				actual;
			for ( i = 0, length = args.length; i < length; i++ ) {
				elem = args[ i ];
				type = jQuery.type( elem );
				if ( type === "array" ) {
					// Inspect recursively
					add( elem );
				} else if ( type === "function" ) {
					// Add if not in unique mode and callback is not in
					if ( !flags.unique || !self.has( elem ) ) {
						list.push( elem );
					}
				}
			}
		},
		// Fire callbacks
		fire = function( context, args ) {
			args = args || [];
			memory = !flags.memory || [ context, args ];
			fired = true;
			firing = true;
			firingIndex = firingStart || 0;
			firingStart = 0;
			firingLength = list.length;
			for ( ; list && firingIndex < firingLength; firingIndex++ ) {
				if ( list[ firingIndex ].apply( context, args ) === false && flags.stopOnFalse ) {
					memory = true; // Mark as halted
					break;
				}
			}
			firing = false;
			if ( list ) {
				if ( !flags.once ) {
					if ( stack && stack.length ) {
						memory = stack.shift();
						self.fireWith( memory[ 0 ], memory[ 1 ] );
					}
				} else if ( memory === true ) {
					self.disable();
				} else {
					list = [];
				}
			}
		},
		// Actual Callbacks object
		self = {
			// Add a callback or a collection of callbacks to the list
			add: function() {
				if ( list ) {
					var length = list.length;
					add( arguments );
					// Do we need to add the callbacks to the
					// current firing batch?
					if ( firing ) {
						firingLength = list.length;
					// With memory, if we're not firing then
					// we should call right away, unless previous
					// firing was halted (stopOnFalse)
					} else if ( memory && memory !== true ) {
						firingStart = length;
						fire( memory[ 0 ], memory[ 1 ] );
					}
				}
				return this;
			},
			// Remove a callback from the list
			remove: function() {
				if ( list ) {
					var args = arguments,
						argIndex = 0,
						argLength = args.length;
					for ( ; argIndex < argLength ; argIndex++ ) {
						for ( var i = 0; i < list.length; i++ ) {
							if ( args[ argIndex ] === list[ i ] ) {
								// Handle firingIndex and firingLength
								if ( firing ) {
									if ( i <= firingLength ) {
										firingLength--;
										if ( i <= firingIndex ) {
											firingIndex--;
										}
									}
								}
								// Remove the element
								list.splice( i--, 1 );
								// If we have some unicity property then
								// we only need to do this once
								if ( flags.unique ) {
									break;
								}
							}
						}
					}
				}
				return this;
			},
			// Control if a given callback is in the list
			has: function( fn ) {
				if ( list ) {
					var i = 0,
						length = list.length;
					for ( ; i < length; i++ ) {
						if ( fn === list[ i ] ) {
							return true;
						}
					}
				}
				return false;
			},
			// Remove all callbacks from the list
			empty: function() {
				list = [];
				return this;
			},
			// Have the list do nothing anymore
			disable: function() {
				list = stack = memory = undefined;
				return this;
			},
			// Is it disabled?
			disabled: function() {
				return !list;
			},
			// Lock the list in its current state
			lock: function() {
				stack = undefined;
				if ( !memory || memory === true ) {
					self.disable();
				}
				return this;
			},
			// Is it locked?
			locked: function() {
				return !stack;
			},
			// Call all callbacks with the given context and arguments
			fireWith: function( context, args ) {
				if ( stack ) {
					if ( firing ) {
						if ( !flags.once ) {
							stack.push( [ context, args ] );
						}
					} else if ( !( flags.once && memory ) ) {
						fire( context, args );
					}
				}
				return this;
			},
			// Call all the callbacks with the given arguments
			fire: function() {
				self.fireWith( this, arguments );
				return this;
			},
			// To know if the callbacks have already been called at least once
			fired: function() {
				return !!fired;
			}
		};

	return self;
};




var // Static reference to slice
	sliceDeferred = [].slice;

jQuery.extend({

	Deferred: function( func ) {
		var doneList = jQuery.Callbacks( "once memory" ),
			failList = jQuery.Callbacks( "once memory" ),
			progressList = jQuery.Callbacks( "memory" ),
			state = "pending",
			lists = {
				resolve: doneList,
				reject: failList,
				notify: progressList
			},
			promise = {
				done: doneList.add,
				fail: failList.add,
				progress: progressList.add,

				state: function() {
					return state;
				},

				// Deprecated
				isResolved: doneList.fired,
				isRejected: failList.fired,

				then: function( doneCallbacks, failCallbacks, progressCallbacks ) {
					deferred.done( doneCallbacks ).fail( failCallbacks ).progress( progressCallbacks );
					return this;
				},
				always: function() {
					deferred.done.apply( deferred, arguments ).fail.apply( deferred, arguments );
					return this;
				},
				pipe: function( fnDone, fnFail, fnProgress ) {
					return jQuery.Deferred(function( newDefer ) {
						jQuery.each( {
							done: [ fnDone, "resolve" ],
							fail: [ fnFail, "reject" ],
							progress: [ fnProgress, "notify" ]
						}, function( handler, data ) {
							var fn = data[ 0 ],
								action = data[ 1 ],
								returned;
							if ( jQuery.isFunction( fn ) ) {
								deferred[ handler ](function() {
									returned = fn.apply( this, arguments );
									if ( returned && jQuery.isFunction( returned.promise ) ) {
										returned.promise().then( newDefer.resolve, newDefer.reject, newDefer.notify );
									} else {
										newDefer[ action + "With" ]( this === deferred ? newDefer : this, [ returned ] );
									}
								});
							} else {
								deferred[ handler ]( newDefer[ action ] );
							}
						});
					}).promise();
				},
				// Get a promise for this deferred
				// If obj is provided, the promise aspect is added to the object
				promise: function( obj ) {
					if ( obj == null ) {
						obj = promise;
					} else {
						for ( var key in promise ) {
							obj[ key ] = promise[ key ];
						}
					}
					return obj;
				}
			},
			deferred = promise.promise({}),
			key;

		for ( key in lists ) {
			deferred[ key ] = lists[ key ].fire;
			deferred[ key + "With" ] = lists[ key ].fireWith;
		}

		// Handle state
		deferred.done( function() {
			state = "resolved";
		}, failList.disable, progressList.lock ).fail( function() {
			state = "rejected";
		}, doneList.disable, progressList.lock );

		// Call given func if any
		if ( func ) {
			func.call( deferred, deferred );
		}

		// All done!
		return deferred;
	},

	// Deferred helper
	when: function( firstParam ) {
		var args = sliceDeferred.call( arguments, 0 ),
			i = 0,
			length = args.length,
			pValues = new Array( length ),
			count = length,
			pCount = length,
			deferred = length <= 1 && firstParam && jQuery.isFunction( firstParam.promise ) ?
				firstParam :
				jQuery.Deferred(),
			promise = deferred.promise();
		function resolveFunc( i ) {
			return function( value ) {
				args[ i ] = arguments.length > 1 ? sliceDeferred.call( arguments, 0 ) : value;
				if ( !( --count ) ) {
					deferred.resolveWith( deferred, args );
				}
			};
		}
		function progressFunc( i ) {
			return function( value ) {
				pValues[ i ] = arguments.length > 1 ? sliceDeferred.call( arguments, 0 ) : value;
				deferred.notifyWith( promise, pValues );
			};
		}
		if ( length > 1 ) {
			for ( ; i < length; i++ ) {
				if ( args[ i ] && args[ i ].promise && jQuery.isFunction( args[ i ].promise ) ) {
					args[ i ].promise().then( resolveFunc(i), deferred.reject, progressFunc(i) );
				} else {
					--count;
				}
			}
			if ( !count ) {
				deferred.resolveWith( deferred, args );
			}
		} else if ( deferred !== firstParam ) {
			deferred.resolveWith( deferred, length ? [ firstParam ] : [] );
		}
		return promise;
	}
});




jQuery.support = (function() {

	var support,
		all,
		a,
		select,
		opt,
		input,
		fragment,
		tds,
		events,
		eventName,
		i,
		isSupported,
		div = document.createElement( "div" ),
		documentElement = document.documentElement;

	// Preliminary tests
	div.setAttribute("className", "t");
	div.innerHTML = "   <link/><table></table><a href='/a' style='top:1px;float:left;opacity:.55;'>a</a><input type='checkbox'/>";

	all = div.getElementsByTagName( "*" );
	a = div.getElementsByTagName( "a" )[ 0 ];

	// Can't get basic test support
	if ( !all || !all.length || !a ) {
		return {};
	}

	// First batch of supports tests
	select = document.createElement( "select" );
	opt = select.appendChild( document.createElement("option") );
	input = div.getElementsByTagName( "input" )[ 0 ];

	support = {
		// IE strips leading whitespace when .innerHTML is used
		leadingWhitespace: ( div.firstChild.nodeType === 3 ),

		// Make sure that tbody elements aren't automatically inserted
		// IE will insert them into empty tables
		tbody: !div.getElementsByTagName("tbody").length,

		// Make sure that link elements get serialized correctly by innerHTML
		// This requires a wrapper element in IE
		htmlSerialize: !!div.getElementsByTagName("link").length,

		// Get the style information from getAttribute
		// (IE uses .cssText instead)
		style: /top/.test( a.getAttribute("style") ),

		// Make sure that URLs aren't manipulated
		// (IE normalizes it by default)
		hrefNormalized: ( a.getAttribute("href") === "/a" ),

		// Make sure that element opacity exists
		// (IE uses filter instead)
		// Use a regex to work around a WebKit issue. See #5145
		opacity: /^0.55/.test( a.style.opacity ),

		// Verify style float existence
		// (IE uses styleFloat instead of cssFloat)
		cssFloat: !!a.style.cssFloat,

		// Make sure that if no value is specified for a checkbox
		// that it defaults to "on".
		// (WebKit defaults to "" instead)
		checkOn: ( input.value === "on" ),

		// Make sure that a selected-by-default option has a working selected property.
		// (WebKit defaults to false instead of true, IE too, if it's in an optgroup)
		optSelected: opt.selected,

		// Test setAttribute on camelCase class. If it works, we need attrFixes when doing get/setAttribute (ie6/7)
		getSetAttribute: div.className !== "t",

		// Tests for enctype support on a form(#6743)
		enctype: !!document.createElement("form").enctype,

		// Makes sure cloning an html5 element does not cause problems
		// Where outerHTML is undefined, this still works
		html5Clone: document.createElement("nav").cloneNode( true ).outerHTML !== "<:nav></:nav>",

		// Will be defined later
		submitBubbles: true,
		changeBubbles: true,
		focusinBubbles: false,
		deleteExpando: true,
		noCloneEvent: true,
		inlineBlockNeedsLayout: false,
		shrinkWrapBlocks: false,
		reliableMarginRight: true,
		pixelMargin: true
	};

	// jQuery.boxModel DEPRECATED in 1.3, use jQuery.support.boxModel instead
	jQuery.boxModel = support.boxModel = (document.compatMode === "CSS1Compat");

	// Make sure checked status is properly cloned
	input.checked = true;
	support.noCloneChecked = input.cloneNode( true ).checked;

	// Make sure that the options inside disabled selects aren't marked as disabled
	// (WebKit marks them as disabled)
	select.disabled = true;
	support.optDisabled = !opt.disabled;

	// Test to see if it's possible to delete an expando from an element
	// Fails in Internet Explorer
	try {
		delete div.test;
	} catch( e ) {
		support.deleteExpando = false;
	}

	if ( !div.addEventListener && div.attachEvent && div.fireEvent ) {
		div.attachEvent( "onclick", function() {
			// Cloning a node shouldn't copy over any
			// bound event handlers (IE does this)
			support.noCloneEvent = false;
		});
		div.cloneNode( true ).fireEvent( "onclick" );
	}

	// Check if a radio maintains its value
	// after being appended to the DOM
	input = document.createElement("input");
	input.value = "t";
	input.setAttribute("type", "radio");
	support.radioValue = input.value === "t";

	input.setAttribute("checked", "checked");

	// #11217 - WebKit loses check when the name is after the checked attribute
	input.setAttribute( "name", "t" );

	div.appendChild( input );
	fragment = document.createDocumentFragment();
	fragment.appendChild( div.lastChild );

	// WebKit doesn't clone checked state correctly in fragments
	support.checkClone = fragment.cloneNode( true ).cloneNode( true ).lastChild.checked;

	// Check if a disconnected checkbox will retain its checked
	// value of true after appended to the DOM (IE6/7)
	support.appendChecked = input.checked;

	fragment.removeChild( input );
	fragment.appendChild( div );

	// Technique from Juriy Zaytsev
	// http://perfectionkills.com/detecting-event-support-without-browser-sniffing/
	// We only care about the case where non-standard event systems
	// are used, namely in IE. Short-circuiting here helps us to
	// avoid an eval call (in setAttribute) which can cause CSP
	// to go haywire. See: https://developer.mozilla.org/en/Security/CSP
	if ( div.attachEvent ) {
		for ( i in {
			submit: 1,
			change: 1,
			focusin: 1
		}) {
			eventName = "on" + i;
			isSupported = ( eventName in div );
			if ( !isSupported ) {
				div.setAttribute( eventName, "return;" );
				isSupported = ( typeof div[ eventName ] === "function" );
			}
			support[ i + "Bubbles" ] = isSupported;
		}
	}

	fragment.removeChild( div );

	// Null elements to avoid leaks in IE
	fragment = select = opt = div = input = null;

	// Run tests that need a body at doc ready
	jQuery(function() {
		var container, outer, inner, table, td, offsetSupport,
			marginDiv, conMarginTop, style, html, positionTopLeftWidthHeight,
			paddingMarginBorderVisibility, paddingMarginBorder,
			body = document.getElementsByTagName("body")[0];

		if ( !body ) {
			// Return for frameset docs that don't have a body
			return;
		}

		conMarginTop = 1;
		paddingMarginBorder = "padding:0;margin:0;border:";
		positionTopLeftWidthHeight = "position:absolute;top:0;left:0;width:1px;height:1px;";
		paddingMarginBorderVisibility = paddingMarginBorder + "0;visibility:hidden;";
		style = "style='" + positionTopLeftWidthHeight + paddingMarginBorder + "5px solid #000;";
		html = "<div " + style + "display:block;'><div style='" + paddingMarginBorder + "0;display:block;overflow:hidden;'></div></div>" +
			"<table " + style + "' cellpadding='0' cellspacing='0'>" +
			"<tr><td></td></tr></table>";

		container = document.createElement("div");
		container.style.cssText = paddingMarginBorderVisibility + "width:0;height:0;position:static;top:0;margin-top:" + conMarginTop + "px";
		body.insertBefore( container, body.firstChild );

		// Construct the test element
		div = document.createElement("div");
		container.appendChild( div );

		// Check if table cells still have offsetWidth/Height when they are set
		// to display:none and there are still other visible table cells in a
		// table row; if so, offsetWidth/Height are not reliable for use when
		// determining if an element has been hidden directly using
		// display:none (it is still safe to use offsets if a parent element is
		// hidden; don safety goggles and see bug #4512 for more information).
		// (only IE 8 fails this test)
		div.innerHTML = "<table><tr><td style='" + paddingMarginBorder + "0;display:none'></td><td>t</td></tr></table>";
		tds = div.getElementsByTagName( "td" );
		isSupported = ( tds[ 0 ].offsetHeight === 0 );

		tds[ 0 ].style.display = "";
		tds[ 1 ].style.display = "none";

		// Check if empty table cells still have offsetWidth/Height
		// (IE <= 8 fail this test)
		support.reliableHiddenOffsets = isSupported && ( tds[ 0 ].offsetHeight === 0 );

		// Check if div with explicit width and no margin-right incorrectly
		// gets computed margin-right based on width of container. For more
		// info see bug #3333
		// Fails in WebKit before Feb 2011 nightlies
		// WebKit Bug 13343 - getComputedStyle returns wrong value for margin-right
		if ( window.getComputedStyle ) {
			div.innerHTML = "";
			marginDiv = document.createElement( "div" );
			marginDiv.style.width = "0";
			marginDiv.style.marginRight = "0";
			div.style.width = "2px";
			div.appendChild( marginDiv );
			support.reliableMarginRight =
				( parseInt( ( window.getComputedStyle( marginDiv, null ) || { marginRight: 0 } ).marginRight, 10 ) || 0 ) === 0;
		}

		if ( typeof div.style.zoom !== "undefined" ) {
			// Check if natively block-level elements act like inline-block
			// elements when setting their display to 'inline' and giving
			// them layout
			// (IE < 8 does this)
			div.innerHTML = "";
			div.style.width = div.style.padding = "1px";
			div.style.border = 0;
			div.style.overflow = "hidden";
			div.style.display = "inline";
			div.style.zoom = 1;
			support.inlineBlockNeedsLayout = ( div.offsetWidth === 3 );

			// Check if elements with layout shrink-wrap their children
			// (IE 6 does this)
			div.style.display = "block";
			div.style.overflow = "visible";
			div.innerHTML = "<div style='width:5px;'></div>";
			support.shrinkWrapBlocks = ( div.offsetWidth !== 3 );
		}

		div.style.cssText = positionTopLeftWidthHeight + paddingMarginBorderVisibility;
		div.innerHTML = html;

		outer = div.firstChild;
		inner = outer.firstChild;
		td = outer.nextSibling.firstChild.firstChild;

		offsetSupport = {
			doesNotAddBorder: ( inner.offsetTop !== 5 ),
			doesAddBorderForTableAndCells: ( td.offsetTop === 5 )
		};

		inner.style.position = "fixed";
		inner.style.top = "20px";

		// safari subtracts parent border width here which is 5px
		offsetSupport.fixedPosition = ( inner.offsetTop === 20 || inner.offsetTop === 15 );
		inner.style.position = inner.style.top = "";

		outer.style.overflow = "hidden";
		outer.style.position = "relative";

		offsetSupport.subtractsBorderForOverflowNotVisible = ( inner.offsetTop === -5 );
		offsetSupport.doesNotIncludeMarginInBodyOffset = ( body.offsetTop !== conMarginTop );

		if ( window.getComputedStyle ) {
			div.style.marginTop = "1%";
			support.pixelMargin = ( window.getComputedStyle( div, null ) || { marginTop: 0 } ).marginTop !== "1%";
		}

		if ( typeof container.style.zoom !== "undefined" ) {
			container.style.zoom = 1;
		}

		body.removeChild( container );
		marginDiv = div = container = null;

		jQuery.extend( support, offsetSupport );
	});

	return support;
})();




var rbrace = /^(?:\{.*\}|\[.*\])$/,
	rmultiDash = /([A-Z])/g;

jQuery.extend({
	cache: {},

	// Please use with caution
	uuid: 0,

	// Unique for each copy of jQuery on the page
	// Non-digits removed to match rinlinejQuery
	expando: "jQuery" + ( jQuery.fn.jquery + Math.random() ).replace( /\D/g, "" ),

	// The following elements throw uncatchable exceptions if you
	// attempt to add expando properties to them.
	noData: {
		"embed": true,
		// Ban all objects except for Flash (which handle expandos)
		"object": "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",
		"applet": true
	},

	hasData: function( elem ) {
		elem = elem.nodeType ? jQuery.cache[ elem[jQuery.expando] ] : elem[ jQuery.expando ];
		return !!elem && !isEmptyDataObject( elem );
	},

	data: function( elem, name, data, pvt /* Internal Use Only */ ) {
		if ( !jQuery.acceptData( elem ) ) {
			return;
		}

		var privateCache, thisCache, ret,
			internalKey = jQuery.expando,
			getByName = typeof name === "string",

			// We have to handle DOM nodes and JS objects differently because IE6-7
			// can't GC object references properly across the DOM-JS boundary
			isNode = elem.nodeType,

			// Only DOM nodes need the global jQuery cache; JS object data is
			// attached directly to the object so GC can occur automatically
			cache = isNode ? jQuery.cache : elem,

			// Only defining an ID for JS objects if its cache already exists allows
			// the code to shortcut on the same path as a DOM node with no cache
			id = isNode ? elem[ internalKey ] : elem[ internalKey ] && internalKey,
			isEvents = name === "events";

		// Avoid doing any more work than we need to when trying to get data on an
		// object that has no data at all
		if ( (!id || !cache[id] || (!isEvents && !pvt && !cache[id].data)) && getByName && data === undefined ) {
			return;
		}

		if ( !id ) {
			// Only DOM nodes need a new unique ID for each element since their data
			// ends up in the global cache
			if ( isNode ) {
				elem[ internalKey ] = id = ++jQuery.uuid;
			} else {
				id = internalKey;
			}
		}

		if ( !cache[ id ] ) {
			cache[ id ] = {};

			// Avoids exposing jQuery metadata on plain JS objects when the object
			// is serialized using JSON.stringify
			if ( !isNode ) {
				cache[ id ].toJSON = jQuery.noop;
			}
		}

		// An object can be passed to jQuery.data instead of a key/value pair; this gets
		// shallow copied over onto the existing cache
		if ( typeof name === "object" || typeof name === "function" ) {
			if ( pvt ) {
				cache[ id ] = jQuery.extend( cache[ id ], name );
			} else {
				cache[ id ].data = jQuery.extend( cache[ id ].data, name );
			}
		}

		privateCache = thisCache = cache[ id ];

		// jQuery data() is stored in a separate object inside the object's internal data
		// cache in order to avoid key collisions between internal data and user-defined
		// data.
		if ( !pvt ) {
			if ( !thisCache.data ) {
				thisCache.data = {};
			}

			thisCache = thisCache.data;
		}

		if ( data !== undefined ) {
			thisCache[ jQuery.camelCase( name ) ] = data;
		}

		// Users should not attempt to inspect the internal events object using jQuery.data,
		// it is undocumented and subject to change. But does anyone listen? No.
		if ( isEvents && !thisCache[ name ] ) {
			return privateCache.events;
		}

		// Check for both converted-to-camel and non-converted data property names
		// If a data property was specified
		if ( getByName ) {

			// First Try to find as-is property data
			ret = thisCache[ name ];

			// Test for null|undefined property data
			if ( ret == null ) {

				// Try to find the camelCased property
				ret = thisCache[ jQuery.camelCase( name ) ];
			}
		} else {
			ret = thisCache;
		}

		return ret;
	},

	removeData: function( elem, name, pvt /* Internal Use Only */ ) {
		if ( !jQuery.acceptData( elem ) ) {
			return;
		}

		var thisCache, i, l,

			// Reference to internal data cache key
			internalKey = jQuery.expando,

			isNode = elem.nodeType,

			// See jQuery.data for more information
			cache = isNode ? jQuery.cache : elem,

			// See jQuery.data for more information
			id = isNode ? elem[ internalKey ] : internalKey;

		// If there is already no cache entry for this object, there is no
		// purpose in continuing
		if ( !cache[ id ] ) {
			return;
		}

		if ( name ) {

			thisCache = pvt ? cache[ id ] : cache[ id ].data;

			if ( thisCache ) {

				// Support array or space separated string names for data keys
				if ( !jQuery.isArray( name ) ) {

					// try the string as a key before any manipulation
					if ( name in thisCache ) {
						name = [ name ];
					} else {

						// split the camel cased version by spaces unless a key with the spaces exists
						name = jQuery.camelCase( name );
						if ( name in thisCache ) {
							name = [ name ];
						} else {
							name = name.split( " " );
						}
					}
				}

				for ( i = 0, l = name.length; i < l; i++ ) {
					delete thisCache[ name[i] ];
				}

				// If there is no data left in the cache, we want to continue
				// and let the cache object itself get destroyed
				if ( !( pvt ? isEmptyDataObject : jQuery.isEmptyObject )( thisCache ) ) {
					return;
				}
			}
		}

		// See jQuery.data for more information
		if ( !pvt ) {
			delete cache[ id ].data;

			// Don't destroy the parent cache unless the internal data object
			// had been the only thing left in it
			if ( !isEmptyDataObject(cache[ id ]) ) {
				return;
			}
		}

		// Browsers that fail expando deletion also refuse to delete expandos on
		// the window, but it will allow it on all other JS objects; other browsers
		// don't care
		// Ensure that `cache` is not a window object #10080
		if ( jQuery.support.deleteExpando || !cache.setInterval ) {
			delete cache[ id ];
		} else {
			cache[ id ] = null;
		}

		// We destroyed the cache and need to eliminate the expando on the node to avoid
		// false lookups in the cache for entries that no longer exist
		if ( isNode ) {
			// IE does not allow us to delete expando properties from nodes,
			// nor does it have a removeAttribute function on Document nodes;
			// we must handle all of these cases
			if ( jQuery.support.deleteExpando ) {
				delete elem[ internalKey ];
			} else if ( elem.removeAttribute ) {
				elem.removeAttribute( internalKey );
			} else {
				elem[ internalKey ] = null;
			}
		}
	},

	// For internal use only.
	_data: function( elem, name, data ) {
		return jQuery.data( elem, name, data, true );
	},

	// A method for determining if a DOM node can handle the data expando
	acceptData: function( elem ) {
		if ( elem.nodeName ) {
			var match = jQuery.noData[ elem.nodeName.toLowerCase() ];

			if ( match ) {
				return !(match === true || elem.getAttribute("classid") !== match);
			}
		}

		return true;
	}
});

jQuery.fn.extend({
	data: function( key, value ) {
		var parts, part, attr, name, l,
			elem = this[0],
			i = 0,
			data = null;

		// Gets all values
		if ( key === undefined ) {
			if ( this.length ) {
				data = jQuery.data( elem );

				if ( elem.nodeType === 1 && !jQuery._data( elem, "parsedAttrs" ) ) {
					attr = elem.attributes;
					for ( l = attr.length; i < l; i++ ) {
						name = attr[i].name;

						if ( name.indexOf( "data-" ) === 0 ) {
							name = jQuery.camelCase( name.substring(5) );

							dataAttr( elem, name, data[ name ] );
						}
					}
					jQuery._data( elem, "parsedAttrs", true );
				}
			}

			return data;
		}

		// Sets multiple values
		if ( typeof key === "object" ) {
			return this.each(function() {
				jQuery.data( this, key );
			});
		}

		parts = key.split( ".", 2 );
		parts[1] = parts[1] ? "." + parts[1] : "";
		part = parts[1] + "!";

		return jQuery.access( this, function( value ) {

			if ( value === undefined ) {
				data = this.triggerHandler( "getData" + part, [ parts[0] ] );

				// Try to fetch any internally stored data first
				if ( data === undefined && elem ) {
					data = jQuery.data( elem, key );
					data = dataAttr( elem, key, data );
				}

				return data === undefined && parts[1] ?
					this.data( parts[0] ) :
					data;
			}

			parts[1] = value;
			this.each(function() {
				var self = jQuery( this );

				self.triggerHandler( "setData" + part, parts );
				jQuery.data( this, key, value );
				self.triggerHandler( "changeData" + part, parts );
			});
		}, null, value, arguments.length > 1, null, false );
	},

	removeData: function( key ) {
		return this.each(function() {
			jQuery.removeData( this, key );
		});
	}
});

function dataAttr( elem, key, data ) {
	// If nothing was found internally, try to fetch any
	// data from the HTML5 data-* attribute
	if ( data === undefined && elem.nodeType === 1 ) {

		var name = "data-" + key.replace( rmultiDash, "-$1" ).toLowerCase();

		data = elem.getAttribute( name );

		if ( typeof data === "string" ) {
			try {
				data = data === "true" ? true :
				data === "false" ? false :
				data === "null" ? null :
				jQuery.isNumeric( data ) ? +data :
					rbrace.test( data ) ? jQuery.parseJSON( data ) :
					data;
			} catch( e ) {}

			// Make sure we set the data so it isn't changed later
			jQuery.data( elem, key, data );

		} else {
			data = undefined;
		}
	}

	return data;
}

// checks a cache object for emptiness
function isEmptyDataObject( obj ) {
	for ( var name in obj ) {

		// if the public data object is empty, the private is still empty
		if ( name === "data" && jQuery.isEmptyObject( obj[name] ) ) {
			continue;
		}
		if ( name !== "toJSON" ) {
			return false;
		}
	}

	return true;
}




function handleQueueMarkDefer( elem, type, src ) {
	var deferDataKey = type + "defer",
		queueDataKey = type + "queue",
		markDataKey = type + "mark",
		defer = jQuery._data( elem, deferDataKey );
	if ( defer &&
		( src === "queue" || !jQuery._data(elem, queueDataKey) ) &&
		( src === "mark" || !jQuery._data(elem, markDataKey) ) ) {
		// Give room for hard-coded callbacks to fire first
		// and eventually mark/queue something else on the element
		setTimeout( function() {
			if ( !jQuery._data( elem, queueDataKey ) &&
				!jQuery._data( elem, markDataKey ) ) {
				jQuery.removeData( elem, deferDataKey, true );
				defer.fire();
			}
		}, 0 );
	}
}

jQuery.extend({

	_mark: function( elem, type ) {
		if ( elem ) {
			type = ( type || "fx" ) + "mark";
			jQuery._data( elem, type, (jQuery._data( elem, type ) || 0) + 1 );
		}
	},

	_unmark: function( force, elem, type ) {
		if ( force !== true ) {
			type = elem;
			elem = force;
			force = false;
		}
		if ( elem ) {
			type = type || "fx";
			var key = type + "mark",
				count = force ? 0 : ( (jQuery._data( elem, key ) || 1) - 1 );
			if ( count ) {
				jQuery._data( elem, key, count );
			} else {
				jQuery.removeData( elem, key, true );
				handleQueueMarkDefer( elem, type, "mark" );
			}
		}
	},

	queue: function( elem, type, data ) {
		var q;
		if ( elem ) {
			type = ( type || "fx" ) + "queue";
			q = jQuery._data( elem, type );

			// Speed up dequeue by getting out quickly if this is just a lookup
			if ( data ) {
				if ( !q || jQuery.isArray(data) ) {
					q = jQuery._data( elem, type, jQuery.makeArray(data) );
				} else {
					q.push( data );
				}
			}
			return q || [];
		}
	},

	dequeue: function( elem, type ) {
		type = type || "fx";

		var queue = jQuery.queue( elem, type ),
			fn = queue.shift(),
			hooks = {};

		// If the fx queue is dequeued, always remove the progress sentinel
		if ( fn === "inprogress" ) {
			fn = queue.shift();
		}

		if ( fn ) {
			// Add a progress sentinel to prevent the fx queue from being
			// automatically dequeued
			if ( type === "fx" ) {
				queue.unshift( "inprogress" );
			}

			jQuery._data( elem, type + ".run", hooks );
			fn.call( elem, function() {
				jQuery.dequeue( elem, type );
			}, hooks );
		}

		if ( !queue.length ) {
			jQuery.removeData( elem, type + "queue " + type + ".run", true );
			handleQueueMarkDefer( elem, type, "queue" );
		}
	}
});

jQuery.fn.extend({
	queue: function( type, data ) {
		var setter = 2;

		if ( typeof type !== "string" ) {
			data = type;
			type = "fx";
			setter--;
		}

		if ( arguments.length < setter ) {
			return jQuery.queue( this[0], type );
		}

		return data === undefined ?
			this :
			this.each(function() {
				var queue = jQuery.queue( this, type, data );

				if ( type === "fx" && queue[0] !== "inprogress" ) {
					jQuery.dequeue( this, type );
				}
			});
	},
	dequeue: function( type ) {
		return this.each(function() {
			jQuery.dequeue( this, type );
		});
	},
	// Based off of the plugin by Clint Helfers, with permission.
	// http://blindsignals.com/index.php/2009/07/jquery-delay/
	delay: function( time, type ) {
		time = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
		type = type || "fx";

		return this.queue( type, function( next, hooks ) {
			var timeout = setTimeout( next, time );
			hooks.stop = function() {
				clearTimeout( timeout );
			};
		});
	},
	clearQueue: function( type ) {
		return this.queue( type || "fx", [] );
	},
	// Get a promise resolved when queues of a certain type
	// are emptied (fx is the type by default)
	promise: function( type, object ) {
		if ( typeof type !== "string" ) {
			object = type;
			type = undefined;
		}
		type = type || "fx";
		var defer = jQuery.Deferred(),
			elements = this,
			i = elements.length,
			count = 1,
			deferDataKey = type + "defer",
			queueDataKey = type + "queue",
			markDataKey = type + "mark",
			tmp;
		function resolve() {
			if ( !( --count ) ) {
				defer.resolveWith( elements, [ elements ] );
			}
		}
		while( i-- ) {
			if (( tmp = jQuery.data( elements[ i ], deferDataKey, undefined, true ) ||
					( jQuery.data( elements[ i ], queueDataKey, undefined, true ) ||
						jQuery.data( elements[ i ], markDataKey, undefined, true ) ) &&
					jQuery.data( elements[ i ], deferDataKey, jQuery.Callbacks( "once memory" ), true ) )) {
				count++;
				tmp.add( resolve );
			}
		}
		resolve();
		return defer.promise( object );
	}
});




var rclass = /[\n\t\r]/g,
	rspace = /\s+/,
	rreturn = /\r/g,
	rtype = /^(?:button|input)$/i,
	rfocusable = /^(?:button|input|object|select|textarea)$/i,
	rclickable = /^a(?:rea)?$/i,
	rboolean = /^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i,
	getSetAttribute = jQuery.support.getSetAttribute,
	nodeHook, boolHook, fixSpecified;

jQuery.fn.extend({
	attr: function( name, value ) {
		return jQuery.access( this, jQuery.attr, name, value, arguments.length > 1 );
	},

	removeAttr: function( name ) {
		return this.each(function() {
			jQuery.removeAttr( this, name );
		});
	},

	prop: function( name, value ) {
		return jQuery.access( this, jQuery.prop, name, value, arguments.length > 1 );
	},

	removeProp: function( name ) {
		name = jQuery.propFix[ name ] || name;
		return this.each(function() {
			// try/catch handles cases where IE balks (such as removing a property on window)
			try {
				this[ name ] = undefined;
				delete this[ name ];
			} catch( e ) {}
		});
	},

	addClass: function( value ) {
		var classNames, i, l, elem,
			setClass, c, cl;

		if ( jQuery.isFunction( value ) ) {
			return this.each(function( j ) {
				jQuery( this ).addClass( value.call(this, j, this.className) );
			});
		}

		if ( value && typeof value === "string" ) {
			classNames = value.split( rspace );

			for ( i = 0, l = this.length; i < l; i++ ) {
				elem = this[ i ];

				if ( elem.nodeType === 1 ) {
					if ( !elem.className && classNames.length === 1 ) {
						elem.className = value;

					} else {
						setClass = " " + elem.className + " ";

						for ( c = 0, cl = classNames.length; c < cl; c++ ) {
							if ( !~setClass.indexOf( " " + classNames[ c ] + " " ) ) {
								setClass += classNames[ c ] + " ";
							}
						}
						elem.className = jQuery.trim( setClass );
					}
				}
			}
		}

		return this;
	},

	removeClass: function( value ) {
		var classNames, i, l, elem, className, c, cl;

		if ( jQuery.isFunction( value ) ) {
			return this.each(function( j ) {
				jQuery( this ).removeClass( value.call(this, j, this.className) );
			});
		}

		if ( (value && typeof value === "string") || value === undefined ) {
			classNames = ( value || "" ).split( rspace );

			for ( i = 0, l = this.length; i < l; i++ ) {
				elem = this[ i ];

				if ( elem.nodeType === 1 && elem.className ) {
					if ( value ) {
						className = (" " + elem.className + " ").replace( rclass, " " );
						for ( c = 0, cl = classNames.length; c < cl; c++ ) {
							className = className.replace(" " + classNames[ c ] + " ", " ");
						}
						elem.className = jQuery.trim( className );

					} else {
						elem.className = "";
					}
				}
			}
		}

		return this;
	},

	toggleClass: function( value, stateVal ) {
		var type = typeof value,
			isBool = typeof stateVal === "boolean";

		if ( jQuery.isFunction( value ) ) {
			return this.each(function( i ) {
				jQuery( this ).toggleClass( value.call(this, i, this.className, stateVal), stateVal );
			});
		}

		return this.each(function() {
			if ( type === "string" ) {
				// toggle individual class names
				var className,
					i = 0,
					self = jQuery( this ),
					state = stateVal,
					classNames = value.split( rspace );

				while ( (className = classNames[ i++ ]) ) {
					// check each className given, space seperated list
					state = isBool ? state : !self.hasClass( className );
					self[ state ? "addClass" : "removeClass" ]( className );
				}

			} else if ( type === "undefined" || type === "boolean" ) {
				if ( this.className ) {
					// store className if set
					jQuery._data( this, "__className__", this.className );
				}

				// toggle whole className
				this.className = this.className || value === false ? "" : jQuery._data( this, "__className__" ) || "";
			}
		});
	},

	hasClass: function( selector ) {
		var className = " " + selector + " ",
			i = 0,
			l = this.length;
		for ( ; i < l; i++ ) {
			if ( this[i].nodeType === 1 && (" " + this[i].className + " ").replace(rclass, " ").indexOf( className ) > -1 ) {
				return true;
			}
		}

		return false;
	},

	val: function( value ) {
		var hooks, ret, isFunction,
			elem = this[0];

		if ( !arguments.length ) {
			if ( elem ) {
				hooks = jQuery.valHooks[ elem.type ] || jQuery.valHooks[ elem.nodeName.toLowerCase() ];

				if ( hooks && "get" in hooks && (ret = hooks.get( elem, "value" )) !== undefined ) {
					return ret;
				}

				ret = elem.value;

				return typeof ret === "string" ?
					// handle most common string cases
					ret.replace(rreturn, "") :
					// handle cases where value is null/undef or number
					ret == null ? "" : ret;
			}

			return;
		}

		isFunction = jQuery.isFunction( value );

		return this.each(function( i ) {
			var self = jQuery(this), val;

			if ( this.nodeType !== 1 ) {
				return;
			}

			if ( isFunction ) {
				val = value.call( this, i, self.val() );
			} else {
				val = value;
			}

			// Treat null/undefined as ""; convert numbers to string
			if ( val == null ) {
				val = "";
			} else if ( typeof val === "number" ) {
				val += "";
			} else if ( jQuery.isArray( val ) ) {
				val = jQuery.map(val, function ( value ) {
					return value == null ? "" : value + "";
				});
			}

			hooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

			// If set returns undefined, fall back to normal setting
			if ( !hooks || !("set" in hooks) || hooks.set( this, val, "value" ) === undefined ) {
				this.value = val;
			}
		});
	}
});

jQuery.extend({
	valHooks: {
		option: {
			get: function( elem ) {
				// attributes.value is undefined in Blackberry 4.7 but
				// uses .value. See #6932
				var val = elem.attributes.value;
				return !val || val.specified ? elem.value : elem.text;
			}
		},
		select: {
			get: function( elem ) {
				var value, i, max, option,
					index = elem.selectedIndex,
					values = [],
					options = elem.options,
					one = elem.type === "select-one";

				// Nothing was selected
				if ( index < 0 ) {
					return null;
				}

				// Loop through all the selected options
				i = one ? index : 0;
				max = one ? index + 1 : options.length;
				for ( ; i < max; i++ ) {
					option = options[ i ];

					// Don't return options that are disabled or in a disabled optgroup
					if ( option.selected && (jQuery.support.optDisabled ? !option.disabled : option.getAttribute("disabled") === null) &&
							(!option.parentNode.disabled || !jQuery.nodeName( option.parentNode, "optgroup" )) ) {

						// Get the specific value for the option
						value = jQuery( option ).val();

						// We don't need an array for one selects
						if ( one ) {
							return value;
						}

						// Multi-Selects return an array
						values.push( value );
					}
				}

				// Fixes Bug #2551 -- select.val() broken in IE after form.reset()
				if ( one && !values.length && options.length ) {
					return jQuery( options[ index ] ).val();
				}

				return values;
			},

			set: function( elem, value ) {
				var values = jQuery.makeArray( value );

				jQuery(elem).find("option").each(function() {
					this.selected = jQuery.inArray( jQuery(this).val(), values ) >= 0;
				});

				if ( !values.length ) {
					elem.selectedIndex = -1;
				}
				return values;
			}
		}
	},

	attrFn: {
		val: true,
		css: true,
		html: true,
		text: true,
		data: true,
		width: true,
		height: true,
		offset: true
	},

	attr: function( elem, name, value, pass ) {
		var ret, hooks, notxml,
			nType = elem.nodeType;

		// don't get/set attributes on text, comment and attribute nodes
		if ( !elem || nType === 3 || nType === 8 || nType === 2 ) {
			return;
		}

		if ( pass && name in jQuery.attrFn ) {
			return jQuery( elem )[ name ]( value );
		}

		// Fallback to prop when attributes are not supported
		if ( typeof elem.getAttribute === "undefined" ) {
			return jQuery.prop( elem, name, value );
		}

		notxml = nType !== 1 || !jQuery.isXMLDoc( elem );

		// All attributes are lowercase
		// Grab necessary hook if one is defined
		if ( notxml ) {
			name = name.toLowerCase();
			hooks = jQuery.attrHooks[ name ] || ( rboolean.test( name ) ? boolHook : nodeHook );
		}

		if ( value !== undefined ) {

			if ( value === null ) {
				jQuery.removeAttr( elem, name );
				return;

			} else if ( hooks && "set" in hooks && notxml && (ret = hooks.set( elem, value, name )) !== undefined ) {
				return ret;

			} else {
				elem.setAttribute( name, "" + value );
				return value;
			}

		} else if ( hooks && "get" in hooks && notxml && (ret = hooks.get( elem, name )) !== null ) {
			return ret;

		} else {

			ret = elem.getAttribute( name );

			// Non-existent attributes return null, we normalize to undefined
			return ret === null ?
				undefined :
				ret;
		}
	},

	removeAttr: function( elem, value ) {
		var propName, attrNames, name, l, isBool,
			i = 0;

		if ( value && elem.nodeType === 1 ) {
			attrNames = value.toLowerCase().split( rspace );
			l = attrNames.length;

			for ( ; i < l; i++ ) {
				name = attrNames[ i ];

				if ( name ) {
					propName = jQuery.propFix[ name ] || name;
					isBool = rboolean.test( name );

					// See #9699 for explanation of this approach (setting first, then removal)
					// Do not do this for boolean attributes (see #10870)
					if ( !isBool ) {
						jQuery.attr( elem, name, "" );
					}
					elem.removeAttribute( getSetAttribute ? name : propName );

					// Set corresponding property to false for boolean attributes
					if ( isBool && propName in elem ) {
						elem[ propName ] = false;
					}
				}
			}
		}
	},

	attrHooks: {
		type: {
			set: function( elem, value ) {
				// We can't allow the type property to be changed (since it causes problems in IE)
				if ( rtype.test( elem.nodeName ) && elem.parentNode ) {
					jQuery.error( "type property can't be changed" );
				} else if ( !jQuery.support.radioValue && value === "radio" && jQuery.nodeName(elem, "input") ) {
					// Setting the type on a radio button after the value resets the value in IE6-9
					// Reset value to it's default in case type is set after value
					// This is for element creation
					var val = elem.value;
					elem.setAttribute( "type", value );
					if ( val ) {
						elem.value = val;
					}
					return value;
				}
			}
		},
		// Use the value property for back compat
		// Use the nodeHook for button elements in IE6/7 (#1954)
		value: {
			get: function( elem, name ) {
				if ( nodeHook && jQuery.nodeName( elem, "button" ) ) {
					return nodeHook.get( elem, name );
				}
				return name in elem ?
					elem.value :
					null;
			},
			set: function( elem, value, name ) {
				if ( nodeHook && jQuery.nodeName( elem, "button" ) ) {
					return nodeHook.set( elem, value, name );
				}
				// Does not return so that setAttribute is also used
				elem.value = value;
			}
		}
	},

	propFix: {
		tabindex: "tabIndex",
		readonly: "readOnly",
		"for": "htmlFor",
		"class": "className",
		maxlength: "maxLength",
		cellspacing: "cellSpacing",
		cellpadding: "cellPadding",
		rowspan: "rowSpan",
		colspan: "colSpan",
		usemap: "useMap",
		frameborder: "frameBorder",
		contenteditable: "contentEditable"
	},

	prop: function( elem, name, value ) {
		var ret, hooks, notxml,
			nType = elem.nodeType;

		// don't get/set properties on text, comment and attribute nodes
		if ( !elem || nType === 3 || nType === 8 || nType === 2 ) {
			return;
		}

		notxml = nType !== 1 || !jQuery.isXMLDoc( elem );

		if ( notxml ) {
			// Fix name and attach hooks
			name = jQuery.propFix[ name ] || name;
			hooks = jQuery.propHooks[ name ];
		}

		if ( value !== undefined ) {
			if ( hooks && "set" in hooks && (ret = hooks.set( elem, value, name )) !== undefined ) {
				return ret;

			} else {
				return ( elem[ name ] = value );
			}

		} else {
			if ( hooks && "get" in hooks && (ret = hooks.get( elem, name )) !== null ) {
				return ret;

			} else {
				return elem[ name ];
			}
		}
	},

	propHooks: {
		tabIndex: {
			get: function( elem ) {
				// elem.tabIndex doesn't always return the correct value when it hasn't been explicitly set
				// http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/
				var attributeNode = elem.getAttributeNode("tabindex");

				return attributeNode && attributeNode.specified ?
					parseInt( attributeNode.value, 10 ) :
					rfocusable.test( elem.nodeName ) || rclickable.test( elem.nodeName ) && elem.href ?
						0 :
						undefined;
			}
		}
	}
});

// Add the tabIndex propHook to attrHooks for back-compat (different case is intentional)
jQuery.attrHooks.tabindex = jQuery.propHooks.tabIndex;

// Hook for boolean attributes
boolHook = {
	get: function( elem, name ) {
		// Align boolean attributes with corresponding properties
		// Fall back to attribute presence where some booleans are not supported
		var attrNode,
			property = jQuery.prop( elem, name );
		return property === true || typeof property !== "boolean" && ( attrNode = elem.getAttributeNode(name) ) && attrNode.nodeValue !== false ?
			name.toLowerCase() :
			undefined;
	},
	set: function( elem, value, name ) {
		var propName;
		if ( value === false ) {
			// Remove boolean attributes when set to false
			jQuery.removeAttr( elem, name );
		} else {
			// value is true since we know at this point it's type boolean and not false
			// Set boolean attributes to the same name and set the DOM property
			propName = jQuery.propFix[ name ] || name;
			if ( propName in elem ) {
				// Only set the IDL specifically if it already exists on the element
				elem[ propName ] = true;
			}

			elem.setAttribute( name, name.toLowerCase() );
		}
		return name;
	}
};

// IE6/7 do not support getting/setting some attributes with get/setAttribute
if ( !getSetAttribute ) {

	fixSpecified = {
		name: true,
		id: true,
		coords: true
	};

	// Use this for any attribute in IE6/7
	// This fixes almost every IE6/7 issue
	nodeHook = jQuery.valHooks.button = {
		get: function( elem, name ) {
			var ret;
			ret = elem.getAttributeNode( name );
			return ret && ( fixSpecified[ name ] ? ret.nodeValue !== "" : ret.specified ) ?
				ret.nodeValue :
				undefined;
		},
		set: function( elem, value, name ) {
			// Set the existing or create a new attribute node
			var ret = elem.getAttributeNode( name );
			if ( !ret ) {
				ret = document.createAttribute( name );
				elem.setAttributeNode( ret );
			}
			return ( ret.nodeValue = value + "" );
		}
	};

	// Apply the nodeHook to tabindex
	jQuery.attrHooks.tabindex.set = nodeHook.set;

	// Set width and height to auto instead of 0 on empty string( Bug #8150 )
	// This is for removals
	jQuery.each([ "width", "height" ], function( i, name ) {
		jQuery.attrHooks[ name ] = jQuery.extend( jQuery.attrHooks[ name ], {
			set: function( elem, value ) {
				if ( value === "" ) {
					elem.setAttribute( name, "auto" );
					return value;
				}
			}
		});
	});

	// Set contenteditable to false on removals(#10429)
	// Setting to empty string throws an error as an invalid value
	jQuery.attrHooks.contenteditable = {
		get: nodeHook.get,
		set: function( elem, value, name ) {
			if ( value === "" ) {
				value = "false";
			}
			nodeHook.set( elem, value, name );
		}
	};
}


// Some attributes require a special call on IE
if ( !jQuery.support.hrefNormalized ) {
	jQuery.each([ "href", "src", "width", "height" ], function( i, name ) {
		jQuery.attrHooks[ name ] = jQuery.extend( jQuery.attrHooks[ name ], {
			get: function( elem ) {
				var ret = elem.getAttribute( name, 2 );
				return ret === null ? undefined : ret;
			}
		});
	});
}

if ( !jQuery.support.style ) {
	jQuery.attrHooks.style = {
		get: function( elem ) {
			// Return undefined in the case of empty string
			// Normalize to lowercase since IE uppercases css property names
			return elem.style.cssText.toLowerCase() || undefined;
		},
		set: function( elem, value ) {
			return ( elem.style.cssText = "" + value );
		}
	};
}

// Safari mis-reports the default selected property of an option
// Accessing the parent's selectedIndex property fixes it
if ( !jQuery.support.optSelected ) {
	jQuery.propHooks.selected = jQuery.extend( jQuery.propHooks.selected, {
		get: function( elem ) {
			var parent = elem.parentNode;

			if ( parent ) {
				parent.selectedIndex;

				// Make sure that it also works with optgroups, see #5701
				if ( parent.parentNode ) {
					parent.parentNode.selectedIndex;
				}
			}
			return null;
		}
	});
}

// IE6/7 call enctype encoding
if ( !jQuery.support.enctype ) {
	jQuery.propFix.enctype = "encoding";
}

// Radios and checkboxes getter/setter
if ( !jQuery.support.checkOn ) {
	jQuery.each([ "radio", "checkbox" ], function() {
		jQuery.valHooks[ this ] = {
			get: function( elem ) {
				// Handle the case where in Webkit "" is returned instead of "on" if a value isn't specified
				return elem.getAttribute("value") === null ? "on" : elem.value;
			}
		};
	});
}
jQuery.each([ "radio", "checkbox" ], function() {
	jQuery.valHooks[ this ] = jQuery.extend( jQuery.valHooks[ this ], {
		set: function( elem, value ) {
			if ( jQuery.isArray( value ) ) {
				return ( elem.checked = jQuery.inArray( jQuery(elem).val(), value ) >= 0 );
			}
		}
	});
});




var rformElems = /^(?:textarea|input|select)$/i,
	rtypenamespace = /^([^\.]*)?(?:\.(.+))?$/,
	rhoverHack = /(?:^|\s)hover(\.\S+)?\b/,
	rkeyEvent = /^key/,
	rmouseEvent = /^(?:mouse|contextmenu)|click/,
	rfocusMorph = /^(?:focusinfocus|focusoutblur)$/,
	rquickIs = /^(\w*)(?:#([\w\-]+))?(?:\.([\w\-]+))?$/,
	quickParse = function( selector ) {
		var quick = rquickIs.exec( selector );
		if ( quick ) {
			//   0  1    2   3
			// [ _, tag, id, class ]
			quick[1] = ( quick[1] || "" ).toLowerCase();
			quick[3] = quick[3] && new RegExp( "(?:^|\\s)" + quick[3] + "(?:\\s|$)" );
		}
		return quick;
	},
	quickIs = function( elem, m ) {
		var attrs = elem.attributes || {};
		return (
			(!m[1] || elem.nodeName.toLowerCase() === m[1]) &&
			(!m[2] || (attrs.id || {}).value === m[2]) &&
			(!m[3] || m[3].test( (attrs[ "class" ] || {}).value ))
		);
	},
	hoverHack = function( events ) {
		return jQuery.event.special.hover ? events : events.replace( rhoverHack, "mouseenter$1 mouseleave$1" );
	};

/*
 * Helper functions for managing events -- not part of the public interface.
 * Props to Dean Edwards' addEvent library for many of the ideas.
 */
jQuery.event = {

	add: function( elem, types, handler, data, selector ) {

		var elemData, eventHandle, events,
			t, tns, type, namespaces, handleObj,
			handleObjIn, quick, handlers, special;

		// Don't attach events to noData or text/comment nodes (allow plain objects tho)
		if ( elem.nodeType === 3 || elem.nodeType === 8 || !types || !handler || !(elemData = jQuery._data( elem )) ) {
			return;
		}

		// Caller can pass in an object of custom data in lieu of the handler
		if ( handler.handler ) {
			handleObjIn = handler;
			handler = handleObjIn.handler;
			selector = handleObjIn.selector;
		}

		// Make sure that the handler has a unique ID, used to find/remove it later
		if ( !handler.guid ) {
			handler.guid = jQuery.guid++;
		}

		// Init the element's event structure and main handler, if this is the first
		events = elemData.events;
		if ( !events ) {
			elemData.events = events = {};
		}
		eventHandle = elemData.handle;
		if ( !eventHandle ) {
			elemData.handle = eventHandle = function( e ) {
				// Discard the second event of a jQuery.event.trigger() and
				// when an event is called after a page has unloaded
				return typeof jQuery !== "undefined" && (!e || jQuery.event.triggered !== e.type) ?
					jQuery.event.dispatch.apply( eventHandle.elem, arguments ) :
					undefined;
			};
			// Add elem as a property of the handle fn to prevent a memory leak with IE non-native events
			eventHandle.elem = elem;
		}

		// Handle multiple events separated by a space
		// jQuery(...).bind("mouseover mouseout", fn);
		types = jQuery.trim( hoverHack(types) ).split( " " );
		for ( t = 0; t < types.length; t++ ) {

			tns = rtypenamespace.exec( types[t] ) || [];
			type = tns[1];
			namespaces = ( tns[2] || "" ).split( "." ).sort();

			// If event changes its type, use the special event handlers for the changed type
			special = jQuery.event.special[ type ] || {};

			// If selector defined, determine special event api type, otherwise given type
			type = ( selector ? special.delegateType : special.bindType ) || type;

			// Update special based on newly reset type
			special = jQuery.event.special[ type ] || {};

			// handleObj is passed to all event handlers
			handleObj = jQuery.extend({
				type: type,
				origType: tns[1],
				data: data,
				handler: handler,
				guid: handler.guid,
				selector: selector,
				quick: selector && quickParse( selector ),
				namespace: namespaces.join(".")
			}, handleObjIn );

			// Init the event handler queue if we're the first
			handlers = events[ type ];
			if ( !handlers ) {
				handlers = events[ type ] = [];
				handlers.delegateCount = 0;

				// Only use addEventListener/attachEvent if the special events handler returns false
				if ( !special.setup || special.setup.call( elem, data, namespaces, eventHandle ) === false ) {
					// Bind the global event handler to the element
					if ( elem.addEventListener ) {
						elem.addEventListener( type, eventHandle, false );

					} else if ( elem.attachEvent ) {
						elem.attachEvent( "on" + type, eventHandle );
					}
				}
			}

			if ( special.add ) {
				special.add.call( elem, handleObj );

				if ( !handleObj.handler.guid ) {
					handleObj.handler.guid = handler.guid;
				}
			}

			// Add to the element's handler list, delegates in front
			if ( selector ) {
				handlers.splice( handlers.delegateCount++, 0, handleObj );
			} else {
				handlers.push( handleObj );
			}

			// Keep track of which events have ever been used, for event optimization
			jQuery.event.global[ type ] = true;
		}

		// Nullify elem to prevent memory leaks in IE
		elem = null;
	},

	global: {},

	// Detach an event or set of events from an element
	remove: function( elem, types, handler, selector, mappedTypes ) {

		var elemData = jQuery.hasData( elem ) && jQuery._data( elem ),
			t, tns, type, origType, namespaces, origCount,
			j, events, special, handle, eventType, handleObj;

		if ( !elemData || !(events = elemData.events) ) {
			return;
		}

		// Once for each type.namespace in types; type may be omitted
		types = jQuery.trim( hoverHack( types || "" ) ).split(" ");
		for ( t = 0; t < types.length; t++ ) {
			tns = rtypenamespace.exec( types[t] ) || [];
			type = origType = tns[1];
			namespaces = tns[2];

			// Unbind all events (on this namespace, if provided) for the element
			if ( !type ) {
				for ( type in events ) {
					jQuery.event.remove( elem, type + types[ t ], handler, selector, true );
				}
				continue;
			}

			special = jQuery.event.special[ type ] || {};
			type = ( selector? special.delegateType : special.bindType ) || type;
			eventType = events[ type ] || [];
			origCount = eventType.length;
			namespaces = namespaces ? new RegExp("(^|\\.)" + namespaces.split(".").sort().join("\\.(?:.*\\.)?") + "(\\.|$)") : null;

			// Remove matching events
			for ( j = 0; j < eventType.length; j++ ) {
				handleObj = eventType[ j ];

				if ( ( mappedTypes || origType === handleObj.origType ) &&
					 ( !handler || handler.guid === handleObj.guid ) &&
					 ( !namespaces || namespaces.test( handleObj.namespace ) ) &&
					 ( !selector || selector === handleObj.selector || selector === "**" && handleObj.selector ) ) {
					eventType.splice( j--, 1 );

					if ( handleObj.selector ) {
						eventType.delegateCount--;
					}
					if ( special.remove ) {
						special.remove.call( elem, handleObj );
					}
				}
			}

			// Remove generic event handler if we removed something and no more handlers exist
			// (avoids potential for endless recursion during removal of special event handlers)
			if ( eventType.length === 0 && origCount !== eventType.length ) {
				if ( !special.teardown || special.teardown.call( elem, namespaces ) === false ) {
					jQuery.removeEvent( elem, type, elemData.handle );
				}

				delete events[ type ];
			}
		}

		// Remove the expando if it's no longer used
		if ( jQuery.isEmptyObject( events ) ) {
			handle = elemData.handle;
			if ( handle ) {
				handle.elem = null;
			}

			// removeData also checks for emptiness and clears the expando if empty
			// so use it instead of delete
			jQuery.removeData( elem, [ "events", "handle" ], true );
		}
	},

	// Events that are safe to short-circuit if no handlers are attached.
	// Native DOM events should not be added, they may have inline handlers.
	customEvent: {
		"getData": true,
		"setData": true,
		"changeData": true
	},

	trigger: function( event, data, elem, onlyHandlers ) {
		// Don't do events on text and comment nodes
		if ( elem && (elem.nodeType === 3 || elem.nodeType === 8) ) {
			return;
		}

		// Event object or event type
		var type = event.type || event,
			namespaces = [],
			cache, exclusive, i, cur, old, ontype, special, handle, eventPath, bubbleType;

		// focus/blur morphs to focusin/out; ensure we're not firing them right now
		if ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
			return;
		}

		if ( type.indexOf( "!" ) >= 0 ) {
			// Exclusive events trigger only for the exact event (no namespaces)
			type = type.slice(0, -1);
			exclusive = true;
		}

		if ( type.indexOf( "." ) >= 0 ) {
			// Namespaced trigger; create a regexp to match event type in handle()
			namespaces = type.split(".");
			type = namespaces.shift();
			namespaces.sort();
		}

		if ( (!elem || jQuery.event.customEvent[ type ]) && !jQuery.event.global[ type ] ) {
			// No jQuery handlers for this event type, and it can't have inline handlers
			return;
		}

		// Caller can pass in an Event, Object, or just an event type string
		event = typeof event === "object" ?
			// jQuery.Event object
			event[ jQuery.expando ] ? event :
			// Object literal
			new jQuery.Event( type, event ) :
			// Just the event type (string)
			new jQuery.Event( type );

		event.type = type;
		event.isTrigger = true;
		event.exclusive = exclusive;
		event.namespace = namespaces.join( "." );
		event.namespace_re = event.namespace? new RegExp("(^|\\.)" + namespaces.join("\\.(?:.*\\.)?") + "(\\.|$)") : null;
		ontype = type.indexOf( ":" ) < 0 ? "on" + type : "";

		// Handle a global trigger
		if ( !elem ) {

			// TODO: Stop taunting the data cache; remove global events and always attach to document
			cache = jQuery.cache;
			for ( i in cache ) {
				if ( cache[ i ].events && cache[ i ].events[ type ] ) {
					jQuery.event.trigger( event, data, cache[ i ].handle.elem, true );
				}
			}
			return;
		}

		// Clean up the event in case it is being reused
		event.result = undefined;
		if ( !event.target ) {
			event.target = elem;
		}

		// Clone any incoming data and prepend the event, creating the handler arg list
		data = data != null ? jQuery.makeArray( data ) : [];
		data.unshift( event );

		// Allow special events to draw outside the lines
		special = jQuery.event.special[ type ] || {};
		if ( special.trigger && special.trigger.apply( elem, data ) === false ) {
			return;
		}

		// Determine event propagation path in advance, per W3C events spec (#9951)
		// Bubble up to document, then to window; watch for a global ownerDocument var (#9724)
		eventPath = [[ elem, special.bindType || type ]];
		if ( !onlyHandlers && !special.noBubble && !jQuery.isWindow( elem ) ) {

			bubbleType = special.delegateType || type;
			cur = rfocusMorph.test( bubbleType + type ) ? elem : elem.parentNode;
			old = null;
			for ( ; cur; cur = cur.parentNode ) {
				eventPath.push([ cur, bubbleType ]);
				old = cur;
			}

			// Only add window if we got to document (e.g., not plain obj or detached DOM)
			if ( old && old === elem.ownerDocument ) {
				eventPath.push([ old.defaultView || old.parentWindow || window, bubbleType ]);
			}
		}

		// Fire handlers on the event path
		for ( i = 0; i < eventPath.length && !event.isPropagationStopped(); i++ ) {

			cur = eventPath[i][0];
			event.type = eventPath[i][1];

			handle = ( jQuery._data( cur, "events" ) || {} )[ event.type ] && jQuery._data( cur, "handle" );
			if ( handle ) {
				handle.apply( cur, data );
			}
			// Note that this is a bare JS function and not a jQuery handler
			handle = ontype && cur[ ontype ];
			if ( handle && jQuery.acceptData( cur ) && handle.apply( cur, data ) === false ) {
				event.preventDefault();
			}
		}
		event.type = type;

		// If nobody prevented the default action, do it now
		if ( !onlyHandlers && !event.isDefaultPrevented() ) {

			if ( (!special._default || special._default.apply( elem.ownerDocument, data ) === false) &&
				!(type === "click" && jQuery.nodeName( elem, "a" )) && jQuery.acceptData( elem ) ) {

				// Call a native DOM method on the target with the same name name as the event.
				// Can't use an .isFunction() check here because IE6/7 fails that test.
				// Don't do default actions on window, that's where global variables be (#6170)
				// IE<9 dies on focus/blur to hidden element (#1486)
				if ( ontype && elem[ type ] && ((type !== "focus" && type !== "blur") || event.target.offsetWidth !== 0) && !jQuery.isWindow( elem ) ) {

					// Don't re-trigger an onFOO event when we call its FOO() method
					old = elem[ ontype ];

					if ( old ) {
						elem[ ontype ] = null;
					}

					// Prevent re-triggering of the same event, since we already bubbled it above
					jQuery.event.triggered = type;
					elem[ type ]();
					jQuery.event.triggered = undefined;

					if ( old ) {
						elem[ ontype ] = old;
					}
				}
			}
		}

		return event.result;
	},

	dispatch: function( event ) {

		// Make a writable jQuery.Event from the native event object
		event = jQuery.event.fix( event || window.event );

		var handlers = ( (jQuery._data( this, "events" ) || {} )[ event.type ] || []),
			delegateCount = handlers.delegateCount,
			args = [].slice.call( arguments, 0 ),
			run_all = !event.exclusive && !event.namespace,
			special = jQuery.event.special[ event.type ] || {},
			handlerQueue = [],
			i, j, cur, jqcur, ret, selMatch, matched, matches, handleObj, sel, related;

		// Use the fix-ed jQuery.Event rather than the (read-only) native event
		args[0] = event;
		event.delegateTarget = this;

		// Call the preDispatch hook for the mapped type, and let it bail if desired
		if ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
			return;
		}

		// Determine handlers that should run if there are delegated events
		// Avoid non-left-click bubbling in Firefox (#3861)
		if ( delegateCount && !(event.button && event.type === "click") ) {

			// Pregenerate a single jQuery object for reuse with .is()
			jqcur = jQuery(this);
			jqcur.context = this.ownerDocument || this;

			for ( cur = event.target; cur != this; cur = cur.parentNode || this ) {

				// Don't process events on disabled elements (#6911, #8165)
				if ( cur.disabled !== true ) {
					selMatch = {};
					matches = [];
					jqcur[0] = cur;
					for ( i = 0; i < delegateCount; i++ ) {
						handleObj = handlers[ i ];
						sel = handleObj.selector;

						if ( selMatch[ sel ] === undefined ) {
							selMatch[ sel ] = (
								handleObj.quick ? quickIs( cur, handleObj.quick ) : jqcur.is( sel )
							);
						}
						if ( selMatch[ sel ] ) {
							matches.push( handleObj );
						}
					}
					if ( matches.length ) {
						handlerQueue.push({ elem: cur, matches: matches });
					}
				}
			}
		}

		// Add the remaining (directly-bound) handlers
		if ( handlers.length > delegateCount ) {
			handlerQueue.push({ elem: this, matches: handlers.slice( delegateCount ) });
		}

		// Run delegates first; they may want to stop propagation beneath us
		for ( i = 0; i < handlerQueue.length && !event.isPropagationStopped(); i++ ) {
			matched = handlerQueue[ i ];
			event.currentTarget = matched.elem;

			for ( j = 0; j < matched.matches.length && !event.isImmediatePropagationStopped(); j++ ) {
				handleObj = matched.matches[ j ];

				// Triggered event must either 1) be non-exclusive and have no namespace, or
				// 2) have namespace(s) a subset or equal to those in the bound event (both can have no namespace).
				if ( run_all || (!event.namespace && !handleObj.namespace) || event.namespace_re && event.namespace_re.test( handleObj.namespace ) ) {

					event.data = handleObj.data;
					event.handleObj = handleObj;

					ret = ( (jQuery.event.special[ handleObj.origType ] || {}).handle || handleObj.handler )
							.apply( matched.elem, args );

					if ( ret !== undefined ) {
						event.result = ret;
						if ( ret === false ) {
							event.preventDefault();
							event.stopPropagation();
						}
					}
				}
			}
		}

		// Call the postDispatch hook for the mapped type
		if ( special.postDispatch ) {
			special.postDispatch.call( this, event );
		}

		return event.result;
	},

	// Includes some event props shared by KeyEvent and MouseEvent
	// *** attrChange attrName relatedNode srcElement  are not normalized, non-W3C, deprecated, will be removed in 1.8 ***
	props: "attrChange attrName relatedNode srcElement altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),

	fixHooks: {},

	keyHooks: {
		props: "char charCode key keyCode".split(" "),
		filter: function( event, original ) {

			// Add which for key events
			if ( event.which == null ) {
				event.which = original.charCode != null ? original.charCode : original.keyCode;
			}

			return event;
		}
	},

	mouseHooks: {
		props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),
		filter: function( event, original ) {
			var eventDoc, doc, body,
				button = original.button,
				fromElement = original.fromElement;

			// Calculate pageX/Y if missing and clientX/Y available
			if ( event.pageX == null && original.clientX != null ) {
				eventDoc = event.target.ownerDocument || document;
				doc = eventDoc.documentElement;
				body = eventDoc.body;

				event.pageX = original.clientX + ( doc && doc.scrollLeft || body && body.scrollLeft || 0 ) - ( doc && doc.clientLeft || body && body.clientLeft || 0 );
				event.pageY = original.clientY + ( doc && doc.scrollTop  || body && body.scrollTop  || 0 ) - ( doc && doc.clientTop  || body && body.clientTop  || 0 );
			}

			// Add relatedTarget, if necessary
			if ( !event.relatedTarget && fromElement ) {
				event.relatedTarget = fromElement === event.target ? original.toElement : fromElement;
			}

			// Add which for click: 1 === left; 2 === middle; 3 === right
			// Note: button is not normalized, so don't use it
			if ( !event.which && button !== undefined ) {
				event.which = ( button & 1 ? 1 : ( button & 2 ? 3 : ( button & 4 ? 2 : 0 ) ) );
			}

			return event;
		}
	},

	fix: function( event ) {
		if ( event[ jQuery.expando ] ) {
			return event;
		}

		// Create a writable copy of the event object and normalize some properties
		var i, prop,
			originalEvent = event,
			fixHook = jQuery.event.fixHooks[ event.type ] || {},
			copy = fixHook.props ? this.props.concat( fixHook.props ) : this.props;

		event = jQuery.Event( originalEvent );

		for ( i = copy.length; i; ) {
			prop = copy[ --i ];
			event[ prop ] = originalEvent[ prop ];
		}

		// Fix target property, if necessary (#1925, IE 6/7/8 & Safari2)
		if ( !event.target ) {
			event.target = originalEvent.srcElement || document;
		}

		// Target should not be a text node (#504, Safari)
		if ( event.target.nodeType === 3 ) {
			event.target = event.target.parentNode;
		}

		// For mouse/key events; add metaKey if it's not there (#3368, IE6/7/8)
		if ( event.metaKey === undefined ) {
			event.metaKey = event.ctrlKey;
		}

		return fixHook.filter? fixHook.filter( event, originalEvent ) : event;
	},

	special: {
		ready: {
			// Make sure the ready event is setup
			setup: jQuery.bindReady
		},

		load: {
			// Prevent triggered image.load events from bubbling to window.load
			noBubble: true
		},

		focus: {
			delegateType: "focusin"
		},
		blur: {
			delegateType: "focusout"
		},

		beforeunload: {
			setup: function( data, namespaces, eventHandle ) {
				// We only want to do this special case on windows
				if ( jQuery.isWindow( this ) ) {
					this.onbeforeunload = eventHandle;
				}
			},

			teardown: function( namespaces, eventHandle ) {
				if ( this.onbeforeunload === eventHandle ) {
					this.onbeforeunload = null;
				}
			}
		}
	},

	simulate: function( type, elem, event, bubble ) {
		// Piggyback on a donor event to simulate a different one.
		// Fake originalEvent to avoid donor's stopPropagation, but if the
		// simulated event prevents default then we do the same on the donor.
		var e = jQuery.extend(
			new jQuery.Event(),
			event,
			{ type: type,
				isSimulated: true,
				originalEvent: {}
			}
		);
		if ( bubble ) {
			jQuery.event.trigger( e, null, elem );
		} else {
			jQuery.event.dispatch.call( elem, e );
		}
		if ( e.isDefaultPrevented() ) {
			event.preventDefault();
		}
	}
};

// Some plugins are using, but it's undocumented/deprecated and will be removed.
// The 1.7 special event interface should provide all the hooks needed now.
jQuery.event.handle = jQuery.event.dispatch;

jQuery.removeEvent = document.removeEventListener ?
	function( elem, type, handle ) {
		if ( elem.removeEventListener ) {
			elem.removeEventListener( type, handle, false );
		}
	} :
	function( elem, type, handle ) {
		if ( elem.detachEvent ) {
			elem.detachEvent( "on" + type, handle );
		}
	};

jQuery.Event = function( src, props ) {
	// Allow instantiation without the 'new' keyword
	if ( !(this instanceof jQuery.Event) ) {
		return new jQuery.Event( src, props );
	}

	// Event object
	if ( src && src.type ) {
		this.originalEvent = src;
		this.type = src.type;

		// Events bubbling up the document may have been marked as prevented
		// by a handler lower down the tree; reflect the correct value.
		this.isDefaultPrevented = ( src.defaultPrevented || src.returnValue === false ||
			src.getPreventDefault && src.getPreventDefault() ) ? returnTrue : returnFalse;

	// Event type
	} else {
		this.type = src;
	}

	// Put explicitly provided properties onto the event object
	if ( props ) {
		jQuery.extend( this, props );
	}

	// Create a timestamp if incoming event doesn't have one
	this.timeStamp = src && src.timeStamp || jQuery.now();

	// Mark it as fixed
	this[ jQuery.expando ] = true;
};

function returnFalse() {
	return false;
}
function returnTrue() {
	return true;
}

// jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding
// http://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
jQuery.Event.prototype = {
	preventDefault: function() {
		this.isDefaultPrevented = returnTrue;

		var e = this.originalEvent;
		if ( !e ) {
			return;
		}

		// if preventDefault exists run it on the original event
		if ( e.preventDefault ) {
			e.preventDefault();

		// otherwise set the returnValue property of the original event to false (IE)
		} else {
			e.returnValue = false;
		}
	},
	stopPropagation: function() {
		this.isPropagationStopped = returnTrue;

		var e = this.originalEvent;
		if ( !e ) {
			return;
		}
		// if stopPropagation exists run it on the original event
		if ( e.stopPropagation ) {
			e.stopPropagation();
		}
		// otherwise set the cancelBubble property of the original event to true (IE)
		e.cancelBubble = true;
	},
	stopImmediatePropagation: function() {
		this.isImmediatePropagationStopped = returnTrue;
		this.stopPropagation();
	},
	isDefaultPrevented: returnFalse,
	isPropagationStopped: returnFalse,
	isImmediatePropagationStopped: returnFalse
};

// Create mouseenter/leave events using mouseover/out and event-time checks
jQuery.each({
	mouseenter: "mouseover",
	mouseleave: "mouseout"
}, function( orig, fix ) {
	jQuery.event.special[ orig ] = {
		delegateType: fix,
		bindType: fix,

		handle: function( event ) {
			var target = this,
				related = event.relatedTarget,
				handleObj = event.handleObj,
				selector = handleObj.selector,
				ret;

			// For mousenter/leave call the handler if related is outside the target.
			// NB: No relatedTarget if the mouse left/entered the browser window
			if ( !related || (related !== target && !jQuery.contains( target, related )) ) {
				event.type = handleObj.origType;
				ret = handleObj.handler.apply( this, arguments );
				event.type = fix;
			}
			return ret;
		}
	};
});

// IE submit delegation
if ( !jQuery.support.submitBubbles ) {

	jQuery.event.special.submit = {
		setup: function() {
			// Only need this for delegated form submit events
			if ( jQuery.nodeName( this, "form" ) ) {
				return false;
			}

			// Lazy-add a submit handler when a descendant form may potentially be submitted
			jQuery.event.add( this, "click._submit keypress._submit", function( e ) {
				// Node name check avoids a VML-related crash in IE (#9807)
				var elem = e.target,
					form = jQuery.nodeName( elem, "input" ) || jQuery.nodeName( elem, "button" ) ? elem.form : undefined;
				if ( form && !form._submit_attached ) {
					jQuery.event.add( form, "submit._submit", function( event ) {
						event._submit_bubble = true;
					});
					form._submit_attached = true;
				}
			});
			// return undefined since we don't need an event listener
		},
		
		postDispatch: function( event ) {
			// If form was submitted by the user, bubble the event up the tree
			if ( event._submit_bubble ) {
				delete event._submit_bubble;
				if ( this.parentNode && !event.isTrigger ) {
					jQuery.event.simulate( "submit", this.parentNode, event, true );
				}
			}
		},

		teardown: function() {
			// Only need this for delegated form submit events
			if ( jQuery.nodeName( this, "form" ) ) {
				return false;
			}

			// Remove delegated handlers; cleanData eventually reaps submit handlers attached above
			jQuery.event.remove( this, "._submit" );
		}
	};
}

// IE change delegation and checkbox/radio fix
if ( !jQuery.support.changeBubbles ) {

	jQuery.event.special.change = {

		setup: function() {

			if ( rformElems.test( this.nodeName ) ) {
				// IE doesn't fire change on a check/radio until blur; trigger it on click
				// after a propertychange. Eat the blur-change in special.change.handle.
				// This still fires onchange a second time for check/radio after blur.
				if ( this.type === "checkbox" || this.type === "radio" ) {
					jQuery.event.add( this, "propertychange._change", function( event ) {
						if ( event.originalEvent.propertyName === "checked" ) {
							this._just_changed = true;
						}
					});
					jQuery.event.add( this, "click._change", function( event ) {
						if ( this._just_changed && !event.isTrigger ) {
							this._just_changed = false;
							jQuery.event.simulate( "change", this, event, true );
						}
					});
				}
				return false;
			}
			// Delegated event; lazy-add a change handler on descendant inputs
			jQuery.event.add( this, "beforeactivate._change", function( e ) {
				var elem = e.target;

				if ( rformElems.test( elem.nodeName ) && !elem._change_attached ) {
					jQuery.event.add( elem, "change._change", function( event ) {
						if ( this.parentNode && !event.isSimulated && !event.isTrigger ) {
							jQuery.event.simulate( "change", this.parentNode, event, true );
						}
					});
					elem._change_attached = true;
				}
			});
		},

		handle: function( event ) {
			var elem = event.target;

			// Swallow native change events from checkbox/radio, we already triggered them above
			if ( this !== elem || event.isSimulated || event.isTrigger || (elem.type !== "radio" && elem.type !== "checkbox") ) {
				return event.handleObj.handler.apply( this, arguments );
			}
		},

		teardown: function() {
			jQuery.event.remove( this, "._change" );

			return rformElems.test( this.nodeName );
		}
	};
}

// Create "bubbling" focus and blur events
if ( !jQuery.support.focusinBubbles ) {
	jQuery.each({ focus: "focusin", blur: "focusout" }, function( orig, fix ) {

		// Attach a single capturing handler while someone wants focusin/focusout
		var attaches = 0,
			handler = function( event ) {
				jQuery.event.simulate( fix, event.target, jQuery.event.fix( event ), true );
			};

		jQuery.event.special[ fix ] = {
			setup: function() {
				if ( attaches++ === 0 ) {
					document.addEventListener( orig, handler, true );
				}
			},
			teardown: function() {
				if ( --attaches === 0 ) {
					document.removeEventListener( orig, handler, true );
				}
			}
		};
	});
}

jQuery.fn.extend({

	on: function( types, selector, data, fn, /*INTERNAL*/ one ) {
		var origFn, type;

		// Types can be a map of types/handlers
		if ( typeof types === "object" ) {
			// ( types-Object, selector, data )
			if ( typeof selector !== "string" ) { // && selector != null
				// ( types-Object, data )
				data = data || selector;
				selector = undefined;
			}
			for ( type in types ) {
				this.on( type, selector, data, types[ type ], one );
			}
			return this;
		}

		if ( data == null && fn == null ) {
			// ( types, fn )
			fn = selector;
			data = selector = undefined;
		} else if ( fn == null ) {
			if ( typeof selector === "string" ) {
				// ( types, selector, fn )
				fn = data;
				data = undefined;
			} else {
				// ( types, data, fn )
				fn = data;
				data = selector;
				selector = undefined;
			}
		}
		if ( fn === false ) {
			fn = returnFalse;
		} else if ( !fn ) {
			return this;
		}

		if ( one === 1 ) {
			origFn = fn;
			fn = function( event ) {
				// Can use an empty set, since event contains the info
				jQuery().off( event );
				return origFn.apply( this, arguments );
			};
			// Use same guid so caller can remove using origFn
			fn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
		}
		return this.each( function() {
			jQuery.event.add( this, types, fn, data, selector );
		});
	},
	one: function( types, selector, data, fn ) {
		return this.on( types, selector, data, fn, 1 );
	},
	off: function( types, selector, fn ) {
		if ( types && types.preventDefault && types.handleObj ) {
			// ( event )  dispatched jQuery.Event
			var handleObj = types.handleObj;
			jQuery( types.delegateTarget ).off(
				handleObj.namespace ? handleObj.origType + "." + handleObj.namespace : handleObj.origType,
				handleObj.selector,
				handleObj.handler
			);
			return this;
		}
		if ( typeof types === "object" ) {
			// ( types-object [, selector] )
			for ( var type in types ) {
				this.off( type, selector, types[ type ] );
			}
			return this;
		}
		if ( selector === false || typeof selector === "function" ) {
			// ( types [, fn] )
			fn = selector;
			selector = undefined;
		}
		if ( fn === false ) {
			fn = returnFalse;
		}
		return this.each(function() {
			jQuery.event.remove( this, types, fn, selector );
		});
	},

	bind: function( types, data, fn ) {
		return this.on( types, null, data, fn );
	},
	unbind: function( types, fn ) {
		return this.off( types, null, fn );
	},

	live: function( types, data, fn ) {
		jQuery( this.context ).on( types, this.selector, data, fn );
		return this;
	},
	die: function( types, fn ) {
		jQuery( this.context ).off( types, this.selector || "**", fn );
		return this;
	},

	delegate: function( selector, types, data, fn ) {
		return this.on( types, selector, data, fn );
	},
	undelegate: function( selector, types, fn ) {
		// ( namespace ) or ( selector, types [, fn] )
		return arguments.length == 1? this.off( selector, "**" ) : this.off( types, selector, fn );
	},

	trigger: function( type, data ) {
		return this.each(function() {
			jQuery.event.trigger( type, data, this );
		});
	},
	triggerHandler: function( type, data ) {
		if ( this[0] ) {
			return jQuery.event.trigger( type, data, this[0], true );
		}
	},

	toggle: function( fn ) {
		// Save reference to arguments for access in closure
		var args = arguments,
			guid = fn.guid || jQuery.guid++,
			i = 0,
			toggler = function( event ) {
				// Figure out which function to execute
				var lastToggle = ( jQuery._data( this, "lastToggle" + fn.guid ) || 0 ) % i;
				jQuery._data( this, "lastToggle" + fn.guid, lastToggle + 1 );

				// Make sure that clicks stop
				event.preventDefault();

				// and execute the function
				return args[ lastToggle ].apply( this, arguments ) || false;
			};

		// link all the functions, so any of them can unbind this click handler
		toggler.guid = guid;
		while ( i < args.length ) {
			args[ i++ ].guid = guid;
		}

		return this.click( toggler );
	},

	hover: function( fnOver, fnOut ) {
		return this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
	}
});

jQuery.each( ("blur focus focusin focusout load resize scroll unload click dblclick " +
	"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave " +
	"change select submit keydown keypress keyup error contextmenu").split(" "), function( i, name ) {

	// Handle event binding
	jQuery.fn[ name ] = function( data, fn ) {
		if ( fn == null ) {
			fn = data;
			data = null;
		}

		return arguments.length > 0 ?
			this.on( name, null, data, fn ) :
			this.trigger( name );
	};

	if ( jQuery.attrFn ) {
		jQuery.attrFn[ name ] = true;
	}

	if ( rkeyEvent.test( name ) ) {
		jQuery.event.fixHooks[ name ] = jQuery.event.keyHooks;
	}

	if ( rmouseEvent.test( name ) ) {
		jQuery.event.fixHooks[ name ] = jQuery.event.mouseHooks;
	}
});



/*!
 * Sizzle CSS Selector Engine
 *  Copyright 2011, The Dojo Foundation
 *  Released under the MIT, BSD, and GPL Licenses.
 *  More information: http://sizzlejs.com/
 */
(function(){

var chunker = /((?:\((?:\([^()]+\)|[^()]+)+\)|\[(?:\[[^\[\]]*\]|['"][^'"]*['"]|[^\[\]'"]+)+\]|\\.|[^ >+~,(\[\\]+)+|[>+~])(\s*,\s*)?((?:.|\r|\n)*)/g,
	expando = "sizcache" + (Math.random() + '').replace('.', ''),
	done = 0,
	toString = Object.prototype.toString,
	hasDuplicate = false,
	baseHasDuplicate = true,
	rBackslash = /\\/g,
	rReturn = /\r\n/g,
	rNonWord = /\W/;

// Here we check if the JavaScript engine is using some sort of
// optimization where it does not always call our comparision
// function. If that is the case, discard the hasDuplicate value.
//   Thus far that includes Google Chrome.
[0, 0].sort(function() {
	baseHasDuplicate = false;
	return 0;
});

var Sizzle = function( selector, context, results, seed ) {
	results = results || [];
	context = context || document;

	var origContext = context;

	if ( context.nodeType !== 1 && context.nodeType !== 9 ) {
		return [];
	}

	if ( !selector || typeof selector !== "string" ) {
		return results;
	}

	var m, set, checkSet, extra, ret, cur, pop, i,
		prune = true,
		contextXML = Sizzle.isXML( context ),
		parts = [],
		soFar = selector;

	// Reset the position of the chunker regexp (start from head)
	do {
		chunker.exec( "" );
		m = chunker.exec( soFar );

		if ( m ) {
			soFar = m[3];

			parts.push( m[1] );

			if ( m[2] ) {
				extra = m[3];
				break;
			}
		}
	} while ( m );

	if ( parts.length > 1 && origPOS.exec( selector ) ) {

		if ( parts.length === 2 && Expr.relative[ parts[0] ] ) {
			set = posProcess( parts[0] + parts[1], context, seed );

		} else {
			set = Expr.relative[ parts[0] ] ?
				[ context ] :
				Sizzle( parts.shift(), context );

			while ( parts.length ) {
				selector = parts.shift();

				if ( Expr.relative[ selector ] ) {
					selector += parts.shift();
				}

				set = posProcess( selector, set, seed );
			}
		}

	} else {
		// Take a shortcut and set the context if the root selector is an ID
		// (but not if it'll be faster if the inner selector is an ID)
		if ( !seed && parts.length > 1 && context.nodeType === 9 && !contextXML &&
				Expr.match.ID.test(parts[0]) && !Expr.match.ID.test(parts[parts.length - 1]) ) {

			ret = Sizzle.find( parts.shift(), context, contextXML );
			context = ret.expr ?
				Sizzle.filter( ret.expr, ret.set )[0] :
				ret.set[0];
		}

		if ( context ) {
			ret = seed ?
				{ expr: parts.pop(), set: makeArray(seed) } :
				Sizzle.find( parts.pop(), parts.length === 1 && (parts[0] === "~" || parts[0] === "+") && context.parentNode ? context.parentNode : context, contextXML );

			set = ret.expr ?
				Sizzle.filter( ret.expr, ret.set ) :
				ret.set;

			if ( parts.length > 0 ) {
				checkSet = makeArray( set );

			} else {
				prune = false;
			}

			while ( parts.length ) {
				cur = parts.pop();
				pop = cur;

				if ( !Expr.relative[ cur ] ) {
					cur = "";
				} else {
					pop = parts.pop();
				}

				if ( pop == null ) {
					pop = context;
				}

				Expr.relative[ cur ]( checkSet, pop, contextXML );
			}

		} else {
			checkSet = parts = [];
		}
	}

	if ( !checkSet ) {
		checkSet = set;
	}

	if ( !checkSet ) {
		Sizzle.error( cur || selector );
	}

	if ( toString.call(checkSet) === "[object Array]" ) {
		if ( !prune ) {
			results.push.apply( results, checkSet );

		} else if ( context && context.nodeType === 1 ) {
			for ( i = 0; checkSet[i] != null; i++ ) {
				if ( checkSet[i] && (checkSet[i] === true || checkSet[i].nodeType === 1 && Sizzle.contains(context, checkSet[i])) ) {
					results.push( set[i] );
				}
			}

		} else {
			for ( i = 0; checkSet[i] != null; i++ ) {
				if ( checkSet[i] && checkSet[i].nodeType === 1 ) {
					results.push( set[i] );
				}
			}
		}

	} else {
		makeArray( checkSet, results );
	}

	if ( extra ) {
		Sizzle( extra, origContext, results, seed );
		Sizzle.uniqueSort( results );
	}

	return results;
};

Sizzle.uniqueSort = function( results ) {
	if ( sortOrder ) {
		hasDuplicate = baseHasDuplicate;
		results.sort( sortOrder );

		if ( hasDuplicate ) {
			for ( var i = 1; i < results.length; i++ ) {
				if ( results[i] === results[ i - 1 ] ) {
					results.splice( i--, 1 );
				}
			}
		}
	}

	return results;
};

Sizzle.matches = function( expr, set ) {
	return Sizzle( expr, null, null, set );
};

Sizzle.matchesSelector = function( node, expr ) {
	return Sizzle( expr, null, null, [node] ).length > 0;
};

Sizzle.find = function( expr, context, isXML ) {
	var set, i, len, match, type, left;

	if ( !expr ) {
		return [];
	}

	for ( i = 0, len = Expr.order.length; i < len; i++ ) {
		type = Expr.order[i];

		if ( (match = Expr.leftMatch[ type ].exec( expr )) ) {
			left = match[1];
			match.splice( 1, 1 );

			if ( left.substr( left.length - 1 ) !== "\\" ) {
				match[1] = (match[1] || "").replace( rBackslash, "" );
				set = Expr.find[ type ]( match, context, isXML );

				if ( set != null ) {
					expr = expr.replace( Expr.match[ type ], "" );
					break;
				}
			}
		}
	}

	if ( !set ) {
		set = typeof context.getElementsByTagName !== "undefined" ?
			context.getElementsByTagName( "*" ) :
			[];
	}

	return { set: set, expr: expr };
};

Sizzle.filter = function( expr, set, inplace, not ) {
	var match, anyFound,
		type, found, item, filter, left,
		i, pass,
		old = expr,
		result = [],
		curLoop = set,
		isXMLFilter = set && set[0] && Sizzle.isXML( set[0] );

	while ( expr && set.length ) {
		for ( type in Expr.filter ) {
			if ( (match = Expr.leftMatch[ type ].exec( expr )) != null && match[2] ) {
				filter = Expr.filter[ type ];
				left = match[1];

				anyFound = false;

				match.splice(1,1);

				if ( left.substr( left.length - 1 ) === "\\" ) {
					continue;
				}

				if ( curLoop === result ) {
					result = [];
				}

				if ( Expr.preFilter[ type ] ) {
					match = Expr.preFilter[ type ]( match, curLoop, inplace, result, not, isXMLFilter );

					if ( !match ) {
						anyFound = found = true;

					} else if ( match === true ) {
						continue;
					}
				}

				if ( match ) {
					for ( i = 0; (item = curLoop[i]) != null; i++ ) {
						if ( item ) {
							found = filter( item, match, i, curLoop );
							pass = not ^ found;

							if ( inplace && found != null ) {
								if ( pass ) {
									anyFound = true;

								} else {
									curLoop[i] = false;
								}

							} else if ( pass ) {
								result.push( item );
								anyFound = true;
							}
						}
					}
				}

				if ( found !== undefined ) {
					if ( !inplace ) {
						curLoop = result;
					}

					expr = expr.replace( Expr.match[ type ], "" );

					if ( !anyFound ) {
						return [];
					}

					break;
				}
			}
		}

		// Improper expression
		if ( expr === old ) {
			if ( anyFound == null ) {
				Sizzle.error( expr );

			} else {
				break;
			}
		}

		old = expr;
	}

	return curLoop;
};

Sizzle.error = function( msg ) {
	throw new Error( "Syntax error, unrecognized expression: " + msg );
};

/**
 * Utility function for retreiving the text value of an array of DOM nodes
 * @param {Array|Element} elem
 */
var getText = Sizzle.getText = function( elem ) {
    var i, node,
		nodeType = elem.nodeType,
		ret = "";

	if ( nodeType ) {
		if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {
			// Use textContent || innerText for elements
			if ( typeof elem.textContent === 'string' ) {
				return elem.textContent;
			} else if ( typeof elem.innerText === 'string' ) {
				// Replace IE's carriage returns
				return elem.innerText.replace( rReturn, '' );
			} else {
				// Traverse it's children
				for ( elem = elem.firstChild; elem; elem = elem.nextSibling) {
					ret += getText( elem );
				}
			}
		} else if ( nodeType === 3 || nodeType === 4 ) {
			return elem.nodeValue;
		}
	} else {

		// If no nodeType, this is expected to be an array
		for ( i = 0; (node = elem[i]); i++ ) {
			// Do not traverse comment nodes
			if ( node.nodeType !== 8 ) {
				ret += getText( node );
			}
		}
	}
	return ret;
};

var Expr = Sizzle.selectors = {
	order: [ "ID", "NAME", "TAG" ],

	match: {
		ID: /#((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,
		CLASS: /\.((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,
		NAME: /\[name=['"]*((?:[\w\u00c0-\uFFFF\-]|\\.)+)['"]*\]/,
		ATTR: /\[\s*((?:[\w\u00c0-\uFFFF\-]|\\.)+)\s*(?:(\S?=)\s*(?:(['"])(.*?)\3|(#?(?:[\w\u00c0-\uFFFF\-]|\\.)*)|)|)\s*\]/,
		TAG: /^((?:[\w\u00c0-\uFFFF\*\-]|\\.)+)/,
		CHILD: /:(only|nth|last|first)-child(?:\(\s*(even|odd|(?:[+\-]?\d+|(?:[+\-]?\d*)?n\s*(?:[+\-]\s*\d+)?))\s*\))?/,
		POS: /:(nth|eq|gt|lt|first|last|even|odd)(?:\((\d*)\))?(?=[^\-]|$)/,
		PSEUDO: /:((?:[\w\u00c0-\uFFFF\-]|\\.)+)(?:\((['"]?)((?:\([^\)]+\)|[^\(\)]*)+)\2\))?/
	},

	leftMatch: {},

	attrMap: {
		"class": "className",
		"for": "htmlFor"
	},

	attrHandle: {
		href: function( elem ) {
			return elem.getAttribute( "href" );
		},
		type: function( elem ) {
			return elem.getAttribute( "type" );
		}
	},

	relative: {
		"+": function(checkSet, part){
			var isPartStr = typeof part === "string",
				isTag = isPartStr && !rNonWord.test( part ),
				isPartStrNotTag = isPartStr && !isTag;

			if ( isTag ) {
				part = part.toLowerCase();
			}

			for ( var i = 0, l = checkSet.length, elem; i < l; i++ ) {
				if ( (elem = checkSet[i]) ) {
					while ( (elem = elem.previousSibling) && elem.nodeType !== 1 ) {}

					checkSet[i] = isPartStrNotTag || elem && elem.nodeName.toLowerCase() === part ?
						elem || false :
						elem === part;
				}
			}

			if ( isPartStrNotTag ) {
				Sizzle.filter( part, checkSet, true );
			}
		},

		">": function( checkSet, part ) {
			var elem,
				isPartStr = typeof part === "string",
				i = 0,
				l = checkSet.length;

			if ( isPartStr && !rNonWord.test( part ) ) {
				part = part.toLowerCase();

				for ( ; i < l; i++ ) {
					elem = checkSet[i];

					if ( elem ) {
						var parent = elem.parentNode;
						checkSet[i] = parent.nodeName.toLowerCase() === part ? parent : false;
					}
				}

			} else {
				for ( ; i < l; i++ ) {
					elem = checkSet[i];

					if ( elem ) {
						checkSet[i] = isPartStr ?
							elem.parentNode :
							elem.parentNode === part;
					}
				}

				if ( isPartStr ) {
					Sizzle.filter( part, checkSet, true );
				}
			}
		},

		"": function(checkSet, part, isXML){
			var nodeCheck,
				doneName = done++,
				checkFn = dirCheck;

			if ( typeof part === "string" && !rNonWord.test( part ) ) {
				part = part.toLowerCase();
				nodeCheck = part;
				checkFn = dirNodeCheck;
			}

			checkFn( "parentNode", part, doneName, checkSet, nodeCheck, isXML );
		},

		"~": function( checkSet, part, isXML ) {
			var nodeCheck,
				doneName = done++,
				checkFn = dirCheck;

			if ( typeof part === "string" && !rNonWord.test( part ) ) {
				part = part.toLowerCase();
				nodeCheck = part;
				checkFn = dirNodeCheck;
			}

			checkFn( "previousSibling", part, doneName, checkSet, nodeCheck, isXML );
		}
	},

	find: {
		ID: function( match, context, isXML ) {
			if ( typeof context.getElementById !== "undefined" && !isXML ) {
				var m = context.getElementById(match[1]);
				// Check parentNode to catch when Blackberry 4.6 returns
				// nodes that are no longer in the document #6963
				return m && m.parentNode ? [m] : [];
			}
		},

		NAME: function( match, context ) {
			if ( typeof context.getElementsByName !== "undefined" ) {
				var ret = [],
					results = context.getElementsByName( match[1] );

				for ( var i = 0, l = results.length; i < l; i++ ) {
					if ( results[i].getAttribute("name") === match[1] ) {
						ret.push( results[i] );
					}
				}

				return ret.length === 0 ? null : ret;
			}
		},

		TAG: function( match, context ) {
			if ( typeof context.getElementsByTagName !== "undefined" ) {
				return context.getElementsByTagName( match[1] );
			}
		}
	},
	preFilter: {
		CLASS: function( match, curLoop, inplace, result, not, isXML ) {
			match = " " + match[1].replace( rBackslash, "" ) + " ";

			if ( isXML ) {
				return match;
			}

			for ( var i = 0, elem; (elem = curLoop[i]) != null; i++ ) {
				if ( elem ) {
					if ( not ^ (elem.className && (" " + elem.className + " ").replace(/[\t\n\r]/g, " ").indexOf(match) >= 0) ) {
						if ( !inplace ) {
							result.push( elem );
						}

					} else if ( inplace ) {
						curLoop[i] = false;
					}
				}
			}

			return false;
		},

		ID: function( match ) {
			return match[1].replace( rBackslash, "" );
		},

		TAG: function( match, curLoop ) {
			return match[1].replace( rBackslash, "" ).toLowerCase();
		},

		CHILD: function( match ) {
			if ( match[1] === "nth" ) {
				if ( !match[2] ) {
					Sizzle.error( match[0] );
				}

				match[2] = match[2].replace(/^\+|\s*/g, '');

				// parse equations like 'even', 'odd', '5', '2n', '3n+2', '4n-1', '-n+6'
				var test = /(-?)(\d*)(?:n([+\-]?\d*))?/.exec(
					match[2] === "even" && "2n" || match[2] === "odd" && "2n+1" ||
					!/\D/.test( match[2] ) && "0n+" + match[2] || match[2]);

				// calculate the numbers (first)n+(last) including if they are negative
				match[2] = (test[1] + (test[2] || 1)) - 0;
				match[3] = test[3] - 0;
			}
			else if ( match[2] ) {
				Sizzle.error( match[0] );
			}

			// TODO: Move to normal caching system
			match[0] = done++;

			return match;
		},

		ATTR: function( match, curLoop, inplace, result, not, isXML ) {
			var name = match[1] = match[1].replace( rBackslash, "" );

			if ( !isXML && Expr.attrMap[name] ) {
				match[1] = Expr.attrMap[name];
			}

			// Handle if an un-quoted value was used
			match[4] = ( match[4] || match[5] || "" ).replace( rBackslash, "" );

			if ( match[2] === "~=" ) {
				match[4] = " " + match[4] + " ";
			}

			return match;
		},

		PSEUDO: function( match, curLoop, inplace, result, not ) {
			if ( match[1] === "not" ) {
				// If we're dealing with a complex expression, or a simple one
				if ( ( chunker.exec(match[3]) || "" ).length > 1 || /^\w/.test(match[3]) ) {
					match[3] = Sizzle(match[3], null, null, curLoop);

				} else {
					var ret = Sizzle.filter(match[3], curLoop, inplace, true ^ not);

					if ( !inplace ) {
						result.push.apply( result, ret );
					}

					return false;
				}

			} else if ( Expr.match.POS.test( match[0] ) || Expr.match.CHILD.test( match[0] ) ) {
				return true;
			}

			return match;
		},

		POS: function( match ) {
			match.unshift( true );

			return match;
		}
	},

	filters: {
		enabled: function( elem ) {
			return elem.disabled === false && elem.type !== "hidden";
		},

		disabled: function( elem ) {
			return elem.disabled === true;
		},

		checked: function( elem ) {
			return elem.checked === true;
		},

		selected: function( elem ) {
			// Accessing this property makes selected-by-default
			// options in Safari work properly
			if ( elem.parentNode ) {
				elem.parentNode.selectedIndex;
			}

			return elem.selected === true;
		},

		parent: function( elem ) {
			return !!elem.firstChild;
		},

		empty: function( elem ) {
			return !elem.firstChild;
		},

		has: function( elem, i, match ) {
			return !!Sizzle( match[3], elem ).length;
		},

		header: function( elem ) {
			return (/h\d/i).test( elem.nodeName );
		},

		text: function( elem ) {
			var attr = elem.getAttribute( "type" ), type = elem.type;
			// IE6 and 7 will map elem.type to 'text' for new HTML5 types (search, etc)
			// use getAttribute instead to test this case
			return elem.nodeName.toLowerCase() === "input" && "text" === type && ( attr === type || attr === null );
		},

		radio: function( elem ) {
			return elem.nodeName.toLowerCase() === "input" && "radio" === elem.type;
		},

		checkbox: function( elem ) {
			return elem.nodeName.toLowerCase() === "input" && "checkbox" === elem.type;
		},

		file: function( elem ) {
			return elem.nodeName.toLowerCase() === "input" && "file" === elem.type;
		},

		password: function( elem ) {
			return elem.nodeName.toLowerCase() === "input" && "password" === elem.type;
		},

		submit: function( elem ) {
			var name = elem.nodeName.toLowerCase();
			return (name === "input" || name === "button") && "submit" === elem.type;
		},

		image: function( elem ) {
			return elem.nodeName.toLowerCase() === "input" && "image" === elem.type;
		},

		reset: function( elem ) {
			var name = elem.nodeName.toLowerCase();
			return (name === "input" || name === "button") && "reset" === elem.type;
		},

		button: function( elem ) {
			var name = elem.nodeName.toLowerCase();
			return name === "input" && "button" === elem.type || name === "button";
		},

		input: function( elem ) {
			return (/input|select|textarea|button/i).test( elem.nodeName );
		},

		focus: function( elem ) {
			return elem === elem.ownerDocument.activeElement;
		}
	},
	setFilters: {
		first: function( elem, i ) {
			return i === 0;
		},

		last: function( elem, i, match, array ) {
			return i === array.length - 1;
		},

		even: function( elem, i ) {
			return i % 2 === 0;
		},

		odd: function( elem, i ) {
			return i % 2 === 1;
		},

		lt: function( elem, i, match ) {
			return i < match[3] - 0;
		},

		gt: function( elem, i, match ) {
			return i > match[3] - 0;
		},

		nth: function( elem, i, match ) {
			return match[3] - 0 === i;
		},

		eq: function( elem, i, match ) {
			return match[3] - 0 === i;
		}
	},
	filter: {
		PSEUDO: function( elem, match, i, array ) {
			var name = match[1],
				filter = Expr.filters[ name ];

			if ( filter ) {
				return filter( elem, i, match, array );

			} else if ( name === "contains" ) {
				return (elem.textContent || elem.innerText || getText([ elem ]) || "").indexOf(match[3]) >= 0;

			} else if ( name === "not" ) {
				var not = match[3];

				for ( var j = 0, l = not.length; j < l; j++ ) {
					if ( not[j] === elem ) {
						return false;
					}
				}

				return true;

			} else {
				Sizzle.error( name );
			}
		},

		CHILD: function( elem, match ) {
			var first, last,
				doneName, parent, cache,
				count, diff,
				type = match[1],
				node = elem;

			switch ( type ) {
				case "only":
				case "first":
					while ( (node = node.previousSibling) ) {
						if ( node.nodeType === 1 ) {
							return false;
						}
					}

					if ( type === "first" ) {
						return true;
					}

					node = elem;

					/* falls through */
				case "last":
					while ( (node = node.nextSibling) ) {
						if ( node.nodeType === 1 ) {
							return false;
						}
					}

					return true;

				case "nth":
					first = match[2];
					last = match[3];

					if ( first === 1 && last === 0 ) {
						return true;
					}

					doneName = match[0];
					parent = elem.parentNode;

					if ( parent && (parent[ expando ] !== doneName || !elem.nodeIndex) ) {
						count = 0;

						for ( node = parent.firstChild; node; node = node.nextSibling ) {
							if ( node.nodeType === 1 ) {
								node.nodeIndex = ++count;
							}
						}

						parent[ expando ] = doneName;
					}

					diff = elem.nodeIndex - last;

					if ( first === 0 ) {
						return diff === 0;

					} else {
						return ( diff % first === 0 && diff / first >= 0 );
					}
			}
		},

		ID: function( elem, match ) {
			return elem.nodeType === 1 && elem.getAttribute("id") === match;
		},

		TAG: function( elem, match ) {
			return (match === "*" && elem.nodeType === 1) || !!elem.nodeName && elem.nodeName.toLowerCase() === match;
		},

		CLASS: function( elem, match ) {
			return (" " + (elem.className || elem.getAttribute("class")) + " ")
				.indexOf( match ) > -1;
		},

		ATTR: function( elem, match ) {
			var name = match[1],
				result = Sizzle.attr ?
					Sizzle.attr( elem, name ) :
					Expr.attrHandle[ name ] ?
					Expr.attrHandle[ name ]( elem ) :
					elem[ name ] != null ?
						elem[ name ] :
						elem.getAttribute( name ),
				value = result + "",
				type = match[2],
				check = match[4];

			return result == null ?
				type === "!=" :
				!type && Sizzle.attr ?
				result != null :
				type === "=" ?
				value === check :
				type === "*=" ?
				value.indexOf(check) >= 0 :
				type === "~=" ?
				(" " + value + " ").indexOf(check) >= 0 :
				!check ?
				value && result !== false :
				type === "!=" ?
				value !== check :
				type === "^=" ?
				value.indexOf(check) === 0 :
				type === "$=" ?
				value.substr(value.length - check.length) === check :
				type === "|=" ?
				value === check || value.substr(0, check.length + 1) === check + "-" :
				false;
		},

		POS: function( elem, match, i, array ) {
			var name = match[2],
				filter = Expr.setFilters[ name ];

			if ( filter ) {
				return filter( elem, i, match, array );
			}
		}
	}
};

var origPOS = Expr.match.POS,
	fescape = function(all, num){
		return "\\" + (num - 0 + 1);
	};

for ( var type in Expr.match ) {
	Expr.match[ type ] = new RegExp( Expr.match[ type ].source + (/(?![^\[]*\])(?![^\(]*\))/.source) );
	Expr.leftMatch[ type ] = new RegExp( /(^(?:.|\r|\n)*?)/.source + Expr.match[ type ].source.replace(/\\(\d+)/g, fescape) );
}
// Expose origPOS
// "global" as in regardless of relation to brackets/parens
Expr.match.globalPOS = origPOS;

var makeArray = function( array, results ) {
	array = Array.prototype.slice.call( array, 0 );

	if ( results ) {
		results.push.apply( results, array );
		return results;
	}

	return array;
};

// Perform a simple check to determine if the browser is capable of
// converting a NodeList to an array using builtin methods.
// Also verifies that the returned array holds DOM nodes
// (which is not the case in the Blackberry browser)
try {
	Array.prototype.slice.call( document.documentElement.childNodes, 0 )[0].nodeType;

// Provide a fallback method if it does not work
} catch( e ) {
	makeArray = function( array, results ) {
		var i = 0,
			ret = results || [];

		if ( toString.call(array) === "[object Array]" ) {
			Array.prototype.push.apply( ret, array );

		} else {
			if ( typeof array.length === "number" ) {
				for ( var l = array.length; i < l; i++ ) {
					ret.push( array[i] );
				}

			} else {
				for ( ; array[i]; i++ ) {
					ret.push( array[i] );
				}
			}
		}

		return ret;
	};
}

var sortOrder, siblingCheck;

if ( document.documentElement.compareDocumentPosition ) {
	sortOrder = function( a, b ) {
		if ( a === b ) {
			hasDuplicate = true;
			return 0;
		}

		if ( !a.compareDocumentPosition || !b.compareDocumentPosition ) {
			return a.compareDocumentPosition ? -1 : 1;
		}

		return a.compareDocumentPosition(b) & 4 ? -1 : 1;
	};

} else {
	sortOrder = function( a, b ) {
		// The nodes are identical, we can exit early
		if ( a === b ) {
			hasDuplicate = true;
			return 0;

		// Fallback to using sourceIndex (in IE) if it's available on both nodes
		} else if ( a.sourceIndex && b.sourceIndex ) {
			return a.sourceIndex - b.sourceIndex;
		}

		var al, bl,
			ap = [],
			bp = [],
			aup = a.parentNode,
			bup = b.parentNode,
			cur = aup;

		// If the nodes are siblings (or identical) we can do a quick check
		if ( aup === bup ) {
			return siblingCheck( a, b );

		// If no parents were found then the nodes are disconnected
		} else if ( !aup ) {
			return -1;

		} else if ( !bup ) {
			return 1;
		}

		// Otherwise they're somewhere else in the tree so we need
		// to build up a full list of the parentNodes for comparison
		while ( cur ) {
			ap.unshift( cur );
			cur = cur.parentNode;
		}

		cur = bup;

		while ( cur ) {
			bp.unshift( cur );
			cur = cur.parentNode;
		}

		al = ap.length;
		bl = bp.length;

		// Start walking down the tree looking for a discrepancy
		for ( var i = 0; i < al && i < bl; i++ ) {
			if ( ap[i] !== bp[i] ) {
				return siblingCheck( ap[i], bp[i] );
			}
		}

		// We ended someplace up the tree so do a sibling check
		return i === al ?
			siblingCheck( a, bp[i], -1 ) :
			siblingCheck( ap[i], b, 1 );
	};

	siblingCheck = function( a, b, ret ) {
		if ( a === b ) {
			return ret;
		}

		var cur = a.nextSibling;

		while ( cur ) {
			if ( cur === b ) {
				return -1;
			}

			cur = cur.nextSibling;
		}

		return 1;
	};
}

// Check to see if the browser returns elements by name when
// querying by getElementById (and provide a workaround)
(function(){
	// We're going to inject a fake input element with a specified name
	var form = document.createElement("div"),
		id = "script" + (new Date()).getTime(),
		root = document.documentElement;

	form.innerHTML = "<a name='" + id + "'/>";

	// Inject it into the root element, check its status, and remove it quickly
	root.insertBefore( form, root.firstChild );

	// The workaround has to do additional checks after a getElementById
	// Which slows things down for other browsers (hence the branching)
	if ( document.getElementById( id ) ) {
		Expr.find.ID = function( match, context, isXML ) {
			if ( typeof context.getElementById !== "undefined" && !isXML ) {
				var m = context.getElementById(match[1]);

				return m ?
					m.id === match[1] || typeof m.getAttributeNode !== "undefined" && m.getAttributeNode("id").nodeValue === match[1] ?
						[m] :
						undefined :
					[];
			}
		};

		Expr.filter.ID = function( elem, match ) {
			var node = typeof elem.getAttributeNode !== "undefined" && elem.getAttributeNode("id");

			return elem.nodeType === 1 && node && node.nodeValue === match;
		};
	}

	root.removeChild( form );

	// release memory in IE
	root = form = null;
})();

(function(){
	// Check to see if the browser returns only elements
	// when doing getElementsByTagName("*")

	// Create a fake element
	var div = document.createElement("div");
	div.appendChild( document.createComment("") );

	// Make sure no comments are found
	if ( div.getElementsByTagName("*").length > 0 ) {
		Expr.find.TAG = function( match, context ) {
			var results = context.getElementsByTagName( match[1] );

			// Filter out possible comments
			if ( match[1] === "*" ) {
				var tmp = [];

				for ( var i = 0; results[i]; i++ ) {
					if ( results[i].nodeType === 1 ) {
						tmp.push( results[i] );
					}
				}

				results = tmp;
			}

			return results;
		};
	}

	// Check to see if an attribute returns normalized href attributes
	div.innerHTML = "<a href='#'></a>";

	if ( div.firstChild && typeof div.firstChild.getAttribute !== "undefined" &&
			div.firstChild.getAttribute("href") !== "#" ) {

		Expr.attrHandle.href = function( elem ) {
			return elem.getAttribute( "href", 2 );
		};
	}

	// release memory in IE
	div = null;
})();

if ( document.querySelectorAll ) {
	(function(){
		var oldSizzle = Sizzle,
			div = document.createElement("div"),
			id = "__sizzle__";

		div.innerHTML = "<p class='TEST'></p>";

		// Safari can't handle uppercase or unicode characters when
		// in quirks mode.
		if ( div.querySelectorAll && div.querySelectorAll(".TEST").length === 0 ) {
			return;
		}

		Sizzle = function( query, context, extra, seed ) {
			context = context || document;

			// Only use querySelectorAll on non-XML documents
			// (ID selectors don't work in non-HTML documents)
			if ( !seed && !Sizzle.isXML(context) ) {
				// See if we find a selector to speed up
				var match = /^(\w+$)|^\.([\w\-]+$)|^#([\w\-]+$)/.exec( query );

				if ( match && (context.nodeType === 1 || context.nodeType === 9) ) {
					// Speed-up: Sizzle("TAG")
					if ( match[1] ) {
						return makeArray( context.getElementsByTagName( query ), extra );

					// Speed-up: Sizzle(".CLASS")
					} else if ( match[2] && Expr.find.CLASS && context.getElementsByClassName ) {
						return makeArray( context.getElementsByClassName( match[2] ), extra );
					}
				}

				if ( context.nodeType === 9 ) {
					// Speed-up: Sizzle("body")
					// The body element only exists once, optimize finding it
					if ( query === "body" && context.body ) {
						return makeArray( [ context.body ], extra );

					// Speed-up: Sizzle("#ID")
					} else if ( match && match[3] ) {
						var elem = context.getElementById( match[3] );

						// Check parentNode to catch when Blackberry 4.6 returns
						// nodes that are no longer in the document #6963
						if ( elem && elem.parentNode ) {
							// Handle the case where IE and Opera return items
							// by name instead of ID
							if ( elem.id === match[3] ) {
								return makeArray( [ elem ], extra );
							}

						} else {
							return makeArray( [], extra );
						}
					}

					try {
						return makeArray( context.querySelectorAll(query), extra );
					} catch(qsaError) {}

				// qSA works strangely on Element-rooted queries
				// We can work around this by specifying an extra ID on the root
				// and working up from there (Thanks to Andrew Dupont for the technique)
				// IE 8 doesn't work on object elements
				} else if ( context.nodeType === 1 && context.nodeName.toLowerCase() !== "object" ) {
					var oldContext = context,
						old = context.getAttribute( "id" ),
						nid = old || id,
						hasParent = context.parentNode,
						relativeHierarchySelector = /^\s*[+~]/.test( query );

					if ( !old ) {
						context.setAttribute( "id", nid );
					} else {
						nid = nid.replace( /'/g, "\\$&" );
					}
					if ( relativeHierarchySelector && hasParent ) {
						context = context.parentNode;
					}

					try {
						if ( !relativeHierarchySelector || hasParent ) {
							return makeArray( context.querySelectorAll( "[id='" + nid + "'] " + query ), extra );
						}

					} catch(pseudoError) {
					} finally {
						if ( !old ) {
							oldContext.removeAttribute( "id" );
						}
					}
				}
			}

			return oldSizzle(query, context, extra, seed);
		};

		for ( var prop in oldSizzle ) {
			Sizzle[ prop ] = oldSizzle[ prop ];
		}

		// release memory in IE
		div = null;
	})();
}

(function(){
	var html = document.documentElement,
		matches = html.matchesSelector || html.mozMatchesSelector || html.webkitMatchesSelector || html.msMatchesSelector;

	if ( matches ) {
		// Check to see if it's possible to do matchesSelector
		// on a disconnected node (IE 9 fails this)
		var disconnectedMatch = !matches.call( document.createElement( "div" ), "div" ),
			pseudoWorks = false;

		try {
			// This should fail with an exception
			// Gecko does not error, returns false instead
			matches.call( document.documentElement, "[test!='']:sizzle" );

		} catch( pseudoError ) {
			pseudoWorks = true;
		}

		Sizzle.matchesSelector = function( node, expr ) {
			// Make sure that attribute selectors are quoted
			expr = expr.replace(/\=\s*([^'"\]]*)\s*\]/g, "='$1']");

			if ( !Sizzle.isXML( node ) ) {
				try {
					if ( pseudoWorks || !Expr.match.PSEUDO.test( expr ) && !/!=/.test( expr ) ) {
						var ret = matches.call( node, expr );

						// IE 9's matchesSelector returns false on disconnected nodes
						if ( ret || !disconnectedMatch ||
								// As well, disconnected nodes are said to be in a document
								// fragment in IE 9, so check for that
								node.document && node.document.nodeType !== 11 ) {
							return ret;
						}
					}
				} catch(e) {}
			}

			return Sizzle(expr, null, null, [node]).length > 0;
		};
	}
})();

(function(){
	var div = document.createElement("div");

	div.innerHTML = "<div class='test e'></div><div class='test'></div>";

	// Opera can't find a second classname (in 9.6)
	// Also, make sure that getElementsByClassName actually exists
	if ( !div.getElementsByClassName || div.getElementsByClassName("e").length === 0 ) {
		return;
	}

	// Safari caches class attributes, doesn't catch changes (in 3.2)
	div.lastChild.className = "e";

	if ( div.getElementsByClassName("e").length === 1 ) {
		return;
	}

	Expr.order.splice(1, 0, "CLASS");
	Expr.find.CLASS = function( match, context, isXML ) {
		if ( typeof context.getElementsByClassName !== "undefined" && !isXML ) {
			return context.getElementsByClassName(match[1]);
		}
	};

	// release memory in IE
	div = null;
})();

function dirNodeCheck( dir, cur, doneName, checkSet, nodeCheck, isXML ) {
	for ( var i = 0, l = checkSet.length; i < l; i++ ) {
		var elem = checkSet[i];

		if ( elem ) {
			var match = false;

			elem = elem[dir];

			while ( elem ) {
				if ( elem[ expando ] === doneName ) {
					match = checkSet[elem.sizset];
					break;
				}

				if ( elem.nodeType === 1 && !isXML ){
					elem[ expando ] = doneName;
					elem.sizset = i;
				}

				if ( elem.nodeName.toLowerCase() === cur ) {
					match = elem;
					break;
				}

				elem = elem[dir];
			}

			checkSet[i] = match;
		}
	}
}

function dirCheck( dir, cur, doneName, checkSet, nodeCheck, isXML ) {
	for ( var i = 0, l = checkSet.length; i < l; i++ ) {
		var elem = checkSet[i];

		if ( elem ) {
			var match = false;

			elem = elem[dir];

			while ( elem ) {
				if ( elem[ expando ] === doneName ) {
					match = checkSet[elem.sizset];
					break;
				}

				if ( elem.nodeType === 1 ) {
					if ( !isXML ) {
						elem[ expando ] = doneName;
						elem.sizset = i;
					}

					if ( typeof cur !== "string" ) {
						if ( elem === cur ) {
							match = true;
							break;
						}

					} else if ( Sizzle.filter( cur, [elem] ).length > 0 ) {
						match = elem;
						break;
					}
				}

				elem = elem[dir];
			}

			checkSet[i] = match;
		}
	}
}

if ( document.documentElement.contains ) {
	Sizzle.contains = function( a, b ) {
		return a !== b && (a.contains ? a.contains(b) : true);
	};

} else if ( document.documentElement.compareDocumentPosition ) {
	Sizzle.contains = function( a, b ) {
		return !!(a.compareDocumentPosition(b) & 16);
	};

} else {
	Sizzle.contains = function() {
		return false;
	};
}

Sizzle.isXML = function( elem ) {
	// documentElement is verified for cases where it doesn't yet exist
	// (such as loading iframes in IE - #4833)
	var documentElement = (elem ? elem.ownerDocument || elem : 0).documentElement;

	return documentElement ? documentElement.nodeName !== "HTML" : false;
};

var posProcess = function( selector, context, seed ) {
	var match,
		tmpSet = [],
		later = "",
		root = context.nodeType ? [context] : context;

	// Position selectors must be done after the filter
	// And so must :not(positional) so we move all PSEUDOs to the end
	while ( (match = Expr.match.PSEUDO.exec( selector )) ) {
		later += match[0];
		selector = selector.replace( Expr.match.PSEUDO, "" );
	}

	selector = Expr.relative[selector] ? selector + "*" : selector;

	for ( var i = 0, l = root.length; i < l; i++ ) {
		Sizzle( selector, root[i], tmpSet, seed );
	}

	return Sizzle.filter( later, tmpSet );
};

// EXPOSE
// Override sizzle attribute retrieval
Sizzle.attr = jQuery.attr;
Sizzle.selectors.attrMap = {};
jQuery.find = Sizzle;
jQuery.expr = Sizzle.selectors;
jQuery.expr[":"] = jQuery.expr.filters;
jQuery.unique = Sizzle.uniqueSort;
jQuery.text = Sizzle.getText;
jQuery.isXMLDoc = Sizzle.isXML;
jQuery.contains = Sizzle.contains;


})();


var runtil = /Until$/,
	rparentsprev = /^(?:parents|prevUntil|prevAll)/,
	// Note: This RegExp should be improved, or likely pulled from Sizzle
	rmultiselector = /,/,
	isSimple = /^.[^:#\[\.,]*$/,
	slice = Array.prototype.slice,
	POS = jQuery.expr.match.globalPOS,
	// methods guaranteed to produce a unique set when starting from a unique set
	guaranteedUnique = {
		children: true,
		contents: true,
		next: true,
		prev: true
	};

jQuery.fn.extend({
	find: function( selector ) {
		var self = this,
			i, l;

		if ( typeof selector !== "string" ) {
			return jQuery( selector ).filter(function() {
				for ( i = 0, l = self.length; i < l; i++ ) {
					if ( jQuery.contains( self[ i ], this ) ) {
						return true;
					}
				}
			});
		}

		var ret = this.pushStack( "", "find", selector ),
			length, n, r;

		for ( i = 0, l = this.length; i < l; i++ ) {
			length = ret.length;
			jQuery.find( selector, this[i], ret );

			if ( i > 0 ) {
				// Make sure that the results are unique
				for ( n = length; n < ret.length; n++ ) {
					for ( r = 0; r < length; r++ ) {
						if ( ret[r] === ret[n] ) {
							ret.splice(n--, 1);
							break;
						}
					}
				}
			}
		}

		return ret;
	},

	has: function( target ) {
		var targets = jQuery( target );
		return this.filter(function() {
			for ( var i = 0, l = targets.length; i < l; i++ ) {
				if ( jQuery.contains( this, targets[i] ) ) {
					return true;
				}
			}
		});
	},

	not: function( selector ) {
		return this.pushStack( winnow(this, selector, false), "not", selector);
	},

	filter: function( selector ) {
		return this.pushStack( winnow(this, selector, true), "filter", selector );
	},

	is: function( selector ) {
		return !!selector && (
			typeof selector === "string" ?
				// If this is a positional selector, check membership in the returned set
				// so $("p:first").is("p:last") won't return true for a doc with two "p".
				POS.test( selector ) ?
					jQuery( selector, this.context ).index( this[0] ) >= 0 :
					jQuery.filter( selector, this ).length > 0 :
				this.filter( selector ).length > 0 );
	},

	closest: function( selectors, context ) {
		var ret = [], i, l, cur = this[0];

		// Array (deprecated as of jQuery 1.7)
		if ( jQuery.isArray( selectors ) ) {
			var level = 1;

			while ( cur && cur.ownerDocument && cur !== context ) {
				for ( i = 0; i < selectors.length; i++ ) {

					if ( jQuery( cur ).is( selectors[ i ] ) ) {
						ret.push({ selector: selectors[ i ], elem: cur, level: level });
					}
				}

				cur = cur.parentNode;
				level++;
			}

			return ret;
		}

		// String
		var pos = POS.test( selectors ) || typeof selectors !== "string" ?
				jQuery( selectors, context || this.context ) :
				0;

		for ( i = 0, l = this.length; i < l; i++ ) {
			cur = this[i];

			while ( cur ) {
				if ( pos ? pos.index(cur) > -1 : jQuery.find.matchesSelector(cur, selectors) ) {
					ret.push( cur );
					break;

				} else {
					cur = cur.parentNode;
					if ( !cur || !cur.ownerDocument || cur === context || cur.nodeType === 11 ) {
						break;
					}
				}
			}
		}

		ret = ret.length > 1 ? jQuery.unique( ret ) : ret;

		return this.pushStack( ret, "closest", selectors );
	},

	// Determine the position of an element within
	// the matched set of elements
	index: function( elem ) {

		// No argument, return index in parent
		if ( !elem ) {
			return ( this[0] && this[0].parentNode ) ? this.prevAll().length : -1;
		}

		// index in selector
		if ( typeof elem === "string" ) {
			return jQuery.inArray( this[0], jQuery( elem ) );
		}

		// Locate the position of the desired element
		return jQuery.inArray(
			// If it receives a jQuery object, the first element is used
			elem.jquery ? elem[0] : elem, this );
	},

	add: function( selector, context ) {
		var set = typeof selector === "string" ?
				jQuery( selector, context ) :
				jQuery.makeArray( selector && selector.nodeType ? [ selector ] : selector ),
			all = jQuery.merge( this.get(), set );

		return this.pushStack( isDisconnected( set[0] ) || isDisconnected( all[0] ) ?
			all :
			jQuery.unique( all ) );
	},

	andSelf: function() {
		return this.add( this.prevObject );
	}
});

// A painfully simple check to see if an element is disconnected
// from a document (should be improved, where feasible).
function isDisconnected( node ) {
	return !node || !node.parentNode || node.parentNode.nodeType === 11;
}

jQuery.each({
	parent: function( elem ) {
		var parent = elem.parentNode;
		return parent && parent.nodeType !== 11 ? parent : null;
	},
	parents: function( elem ) {
		return jQuery.dir( elem, "parentNode" );
	},
	parentsUntil: function( elem, i, until ) {
		return jQuery.dir( elem, "parentNode", until );
	},
	next: function( elem ) {
		return jQuery.nth( elem, 2, "nextSibling" );
	},
	prev: function( elem ) {
		return jQuery.nth( elem, 2, "previousSibling" );
	},
	nextAll: function( elem ) {
		return jQuery.dir( elem, "nextSibling" );
	},
	prevAll: function( elem ) {
		return jQuery.dir( elem, "previousSibling" );
	},
	nextUntil: function( elem, i, until ) {
		return jQuery.dir( elem, "nextSibling", until );
	},
	prevUntil: function( elem, i, until ) {
		return jQuery.dir( elem, "previousSibling", until );
	},
	siblings: function( elem ) {
		return jQuery.sibling( ( elem.parentNode || {} ).firstChild, elem );
	},
	children: function( elem ) {
		return jQuery.sibling( elem.firstChild );
	},
	contents: function( elem ) {
		return jQuery.nodeName( elem, "iframe" ) ?
			elem.contentDocument || elem.contentWindow.document :
			jQuery.makeArray( elem.childNodes );
	}
}, function( name, fn ) {
	jQuery.fn[ name ] = function( until, selector ) {
		var ret = jQuery.map( this, fn, until );

		if ( !runtil.test( name ) ) {
			selector = until;
		}

		if ( selector && typeof selector === "string" ) {
			ret = jQuery.filter( selector, ret );
		}

		ret = this.length > 1 && !guaranteedUnique[ name ] ? jQuery.unique( ret ) : ret;

		if ( (this.length > 1 || rmultiselector.test( selector )) && rparentsprev.test( name ) ) {
			ret = ret.reverse();
		}

		return this.pushStack( ret, name, slice.call( arguments ).join(",") );
	};
});

jQuery.extend({
	filter: function( expr, elems, not ) {
		if ( not ) {
			expr = ":not(" + expr + ")";
		}

		return elems.length === 1 ?
			jQuery.find.matchesSelector(elems[0], expr) ? [ elems[0] ] : [] :
			jQuery.find.matches(expr, elems);
	},

	dir: function( elem, dir, until ) {
		var matched = [],
			cur = elem[ dir ];

		while ( cur && cur.nodeType !== 9 && (until === undefined || cur.nodeType !== 1 || !jQuery( cur ).is( until )) ) {
			if ( cur.nodeType === 1 ) {
				matched.push( cur );
			}
			cur = cur[dir];
		}
		return matched;
	},

	nth: function( cur, result, dir, elem ) {
		result = result || 1;
		var num = 0;

		for ( ; cur; cur = cur[dir] ) {
			if ( cur.nodeType === 1 && ++num === result ) {
				break;
			}
		}

		return cur;
	},

	sibling: function( n, elem ) {
		var r = [];

		for ( ; n; n = n.nextSibling ) {
			if ( n.nodeType === 1 && n !== elem ) {
				r.push( n );
			}
		}

		return r;
	}
});

// Implement the identical functionality for filter and not
function winnow( elements, qualifier, keep ) {

	// Can't pass null or undefined to indexOf in Firefox 4
	// Set to 0 to skip string check
	qualifier = qualifier || 0;

	if ( jQuery.isFunction( qualifier ) ) {
		return jQuery.grep(elements, function( elem, i ) {
			var retVal = !!qualifier.call( elem, i, elem );
			return retVal === keep;
		});

	} else if ( qualifier.nodeType ) {
		return jQuery.grep(elements, function( elem, i ) {
			return ( elem === qualifier ) === keep;
		});

	} else if ( typeof qualifier === "string" ) {
		var filtered = jQuery.grep(elements, function( elem ) {
			return elem.nodeType === 1;
		});

		if ( isSimple.test( qualifier ) ) {
			return jQuery.filter(qualifier, filtered, !keep);
		} else {
			qualifier = jQuery.filter( qualifier, filtered );
		}
	}

	return jQuery.grep(elements, function( elem, i ) {
		return ( jQuery.inArray( elem, qualifier ) >= 0 ) === keep;
	});
}




function createSafeFragment( document ) {
	var list = nodeNames.split( "|" ),
	safeFrag = document.createDocumentFragment();

	if ( safeFrag.createElement ) {
		while ( list.length ) {
			safeFrag.createElement(
				list.pop()
			);
		}
	}
	return safeFrag;
}

var nodeNames = "abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|" +
		"header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",
	rinlinejQuery = / jQuery\d+="(?:\d+|null)"/g,
	rleadingWhitespace = /^\s+/,
	rxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/ig,
	rtagName = /<([\w:]+)/,
	rtbody = /<tbody/i,
	rhtml = /<|&#?\w+;/,
	rnoInnerhtml = /<(?:script|style)/i,
	rnocache = /<(?:script|object|embed|option|style)/i,
	rnoshimcache = new RegExp("<(?:" + nodeNames + ")[\\s/>]", "i"),
	// checked="checked" or checked
	rchecked = /checked\s*(?:[^=]|=\s*.checked.)/i,
	rscriptType = /\/(java|ecma)script/i,
	rcleanScript = /^\s*<!(?:\[CDATA\[|\-\-)/,
	wrapMap = {
		option: [ 1, "<select multiple='multiple'>", "</select>" ],
		legend: [ 1, "<fieldset>", "</fieldset>" ],
		thead: [ 1, "<table>", "</table>" ],
		tr: [ 2, "<table><tbody>", "</tbody></table>" ],
		td: [ 3, "<table><tbody><tr>", "</tr></tbody></table>" ],
		col: [ 2, "<table><tbody></tbody><colgroup>", "</colgroup></table>" ],
		area: [ 1, "<map>", "</map>" ],
		_default: [ 0, "", "" ]
	},
	safeFragment = createSafeFragment( document );

wrapMap.optgroup = wrapMap.option;
wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
wrapMap.th = wrapMap.td;

// IE can't serialize <link> and <script> tags normally
if ( !jQuery.support.htmlSerialize ) {
	wrapMap._default = [ 1, "div<div>", "</div>" ];
}

jQuery.fn.extend({
	text: function( value ) {
		return jQuery.access( this, function( value ) {
			return value === undefined ?
				jQuery.text( this ) :
				this.empty().append( ( this[0] && this[0].ownerDocument || document ).createTextNode( value ) );
		}, null, value, arguments.length );
	},

	wrapAll: function( html ) {
		if ( jQuery.isFunction( html ) ) {
			return this.each(function(i) {
				jQuery(this).wrapAll( html.call(this, i) );
			});
		}

		if ( this[0] ) {
			// The elements to wrap the target around
			var wrap = jQuery( html, this[0].ownerDocument ).eq(0).clone(true);

			if ( this[0].parentNode ) {
				wrap.insertBefore( this[0] );
			}

			wrap.map(function() {
				var elem = this;

				while ( elem.firstChild && elem.firstChild.nodeType === 1 ) {
					elem = elem.firstChild;
				}

				return elem;
			}).append( this );
		}

		return this;
	},

	wrapInner: function( html ) {
		if ( jQuery.isFunction( html ) ) {
			return this.each(function(i) {
				jQuery(this).wrapInner( html.call(this, i) );
			});
		}

		return this.each(function() {
			var self = jQuery( this ),
				contents = self.contents();

			if ( contents.length ) {
				contents.wrapAll( html );

			} else {
				self.append( html );
			}
		});
	},

	wrap: function( html ) {
		var isFunction = jQuery.isFunction( html );

		return this.each(function(i) {
			jQuery( this ).wrapAll( isFunction ? html.call(this, i) : html );
		});
	},

	unwrap: function() {
		return this.parent().each(function() {
			if ( !jQuery.nodeName( this, "body" ) ) {
				jQuery( this ).replaceWith( this.childNodes );
			}
		}).end();
	},

	append: function() {
		return this.domManip(arguments, true, function( elem ) {
			if ( this.nodeType === 1 ) {
				this.appendChild( elem );
			}
		});
	},

	prepend: function() {
		return this.domManip(arguments, true, function( elem ) {
			if ( this.nodeType === 1 ) {
				this.insertBefore( elem, this.firstChild );
			}
		});
	},

	before: function() {
		if ( this[0] && this[0].parentNode ) {
			return this.domManip(arguments, false, function( elem ) {
				this.parentNode.insertBefore( elem, this );
			});
		} else if ( arguments.length ) {
			var set = jQuery.clean( arguments );
			set.push.apply( set, this.toArray() );
			return this.pushStack( set, "before", arguments );
		}
	},

	after: function() {
		if ( this[0] && this[0].parentNode ) {
			return this.domManip(arguments, false, function( elem ) {
				this.parentNode.insertBefore( elem, this.nextSibling );
			});
		} else if ( arguments.length ) {
			var set = this.pushStack( this, "after", arguments );
			set.push.apply( set, jQuery.clean(arguments) );
			return set;
		}
	},

	// keepData is for internal use only--do not document
	remove: function( selector, keepData ) {
		for ( var i = 0, elem; (elem = this[i]) != null; i++ ) {
			if ( !selector || jQuery.filter( selector, [ elem ] ).length ) {
				if ( !keepData && elem.nodeType === 1 ) {
					jQuery.cleanData( elem.getElementsByTagName("*") );
					jQuery.cleanData( [ elem ] );
				}

				if ( elem.parentNode ) {
					elem.parentNode.removeChild( elem );
				}
			}
		}

		return this;
	},

	empty: function() {
		for ( var i = 0, elem; (elem = this[i]) != null; i++ ) {
			// Remove element nodes and prevent memory leaks
			if ( elem.nodeType === 1 ) {
				jQuery.cleanData( elem.getElementsByTagName("*") );
			}

			// Remove any remaining nodes
			while ( elem.firstChild ) {
				elem.removeChild( elem.firstChild );
			}
		}

		return this;
	},

	clone: function( dataAndEvents, deepDataAndEvents ) {
		dataAndEvents = dataAndEvents == null ? false : dataAndEvents;
		deepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;

		return this.map( function () {
			return jQuery.clone( this, dataAndEvents, deepDataAndEvents );
		});
	},

	html: function( value ) {
		return jQuery.access( this, function( value ) {
			var elem = this[0] || {},
				i = 0,
				l = this.length;

			if ( value === undefined ) {
				return elem.nodeType === 1 ?
					elem.innerHTML.replace( rinlinejQuery, "" ) :
					null;
			}


			if ( typeof value === "string" && !rnoInnerhtml.test( value ) &&
				( jQuery.support.leadingWhitespace || !rleadingWhitespace.test( value ) ) &&
				!wrapMap[ ( rtagName.exec( value ) || ["", ""] )[1].toLowerCase() ] ) {

				value = value.replace( rxhtmlTag, "<$1></$2>" );

				try {
					for (; i < l; i++ ) {
						// Remove element nodes and prevent memory leaks
						elem = this[i] || {};
						if ( elem.nodeType === 1 ) {
							jQuery.cleanData( elem.getElementsByTagName( "*" ) );
							elem.innerHTML = value;
						}
					}

					elem = 0;

				// If using innerHTML throws an exception, use the fallback method
				} catch(e) {}
			}

			if ( elem ) {
				this.empty().append( value );
			}
		}, null, value, arguments.length );
	},

	replaceWith: function( value ) {
		if ( this[0] && this[0].parentNode ) {
			// Make sure that the elements are removed from the DOM before they are inserted
			// this can help fix replacing a parent with child elements
			if ( jQuery.isFunction( value ) ) {
				return this.each(function(i) {
					var self = jQuery(this), old = self.html();
					self.replaceWith( value.call( this, i, old ) );
				});
			}

			if ( typeof value !== "string" ) {
				value = jQuery( value ).detach();
			}

			return this.each(function() {
				var next = this.nextSibling,
					parent = this.parentNode;

				jQuery( this ).remove();

				if ( next ) {
					jQuery(next).before( value );
				} else {
					jQuery(parent).append( value );
				}
			});
		} else {
			return this.length ?
				this.pushStack( jQuery(jQuery.isFunction(value) ? value() : value), "replaceWith", value ) :
				this;
		}
	},

	detach: function( selector ) {
		return this.remove( selector, true );
	},

	domManip: function( args, table, callback ) {
		var results, first, fragment, parent,
			value = args[0],
			scripts = [];

		// We can't cloneNode fragments that contain checked, in WebKit
		if ( !jQuery.support.checkClone && arguments.length === 3 && typeof value === "string" && rchecked.test( value ) ) {
			return this.each(function() {
				jQuery(this).domManip( args, table, callback, true );
			});
		}

		if ( jQuery.isFunction(value) ) {
			return this.each(function(i) {
				var self = jQuery(this);
				args[0] = value.call(this, i, table ? self.html() : undefined);
				self.domManip( args, table, callback );
			});
		}

		if ( this[0] ) {
			parent = value && value.parentNode;

			// If we're in a fragment, just use that instead of building a new one
			if ( jQuery.support.parentNode && parent && parent.nodeType === 11 && parent.childNodes.length === this.length ) {
				results = { fragment: parent };

			} else {
				results = jQuery.buildFragment( args, this, scripts );
			}

			fragment = results.fragment;

			if ( fragment.childNodes.length === 1 ) {
				first = fragment = fragment.firstChild;
			} else {
				first = fragment.firstChild;
			}

			if ( first ) {
				table = table && jQuery.nodeName( first, "tr" );

				for ( var i = 0, l = this.length, lastIndex = l - 1; i < l; i++ ) {
					callback.call(
						table ?
							root(this[i], first) :
							this[i],
						// Make sure that we do not leak memory by inadvertently discarding
						// the original fragment (which might have attached data) instead of
						// using it; in addition, use the original fragment object for the last
						// item instead of first because it can end up being emptied incorrectly
						// in certain situations (Bug #8070).
						// Fragments from the fragment cache must always be cloned and never used
						// in place.
						results.cacheable || ( l > 1 && i < lastIndex ) ?
							jQuery.clone( fragment, true, true ) :
							fragment
					);
				}
			}

			if ( scripts.length ) {
				jQuery.each( scripts, function( i, elem ) {
					if ( elem.src ) {
						jQuery.ajax({
							type: "GET",
							global: false,
							url: elem.src,
							async: false,
							dataType: "script"
						});
					} else {
						jQuery.globalEval( ( elem.text || elem.textContent || elem.innerHTML || "" ).replace( rcleanScript, "/*$0*/" ) );
					}

					if ( elem.parentNode ) {
						elem.parentNode.removeChild( elem );
					}
				});
			}
		}

		return this;
	}
});

function root( elem, cur ) {
	return jQuery.nodeName(elem, "table") ?
		(elem.getElementsByTagName("tbody")[0] ||
		elem.appendChild(elem.ownerDocument.createElement("tbody"))) :
		elem;
}

function cloneCopyEvent( src, dest ) {

	if ( dest.nodeType !== 1 || !jQuery.hasData( src ) ) {
		return;
	}

	var type, i, l,
		oldData = jQuery._data( src ),
		curData = jQuery._data( dest, oldData ),
		events = oldData.events;

	if ( events ) {
		delete curData.handle;
		curData.events = {};

		for ( type in events ) {
			for ( i = 0, l = events[ type ].length; i < l; i++ ) {
				jQuery.event.add( dest, type, events[ type ][ i ] );
			}
		}
	}

	// make the cloned public data object a copy from the original
	if ( curData.data ) {
		curData.data = jQuery.extend( {}, curData.data );
	}
}

function cloneFixAttributes( src, dest ) {
	var nodeName;

	// We do not need to do anything for non-Elements
	if ( dest.nodeType !== 1 ) {
		return;
	}

	// clearAttributes removes the attributes, which we don't want,
	// but also removes the attachEvent events, which we *do* want
	if ( dest.clearAttributes ) {
		dest.clearAttributes();
	}

	// mergeAttributes, in contrast, only merges back on the
	// original attributes, not the events
	if ( dest.mergeAttributes ) {
		dest.mergeAttributes( src );
	}

	nodeName = dest.nodeName.toLowerCase();

	// IE6-8 fail to clone children inside object elements that use
	// the proprietary classid attribute value (rather than the type
	// attribute) to identify the type of content to display
	if ( nodeName === "object" ) {
		dest.outerHTML = src.outerHTML;

	} else if ( nodeName === "input" && (src.type === "checkbox" || src.type === "radio") ) {
		// IE6-8 fails to persist the checked state of a cloned checkbox
		// or radio button. Worse, IE6-7 fail to give the cloned element
		// a checked appearance if the defaultChecked value isn't also set
		if ( src.checked ) {
			dest.defaultChecked = dest.checked = src.checked;
		}

		// IE6-7 get confused and end up setting the value of a cloned
		// checkbox/radio button to an empty string instead of "on"
		if ( dest.value !== src.value ) {
			dest.value = src.value;
		}

	// IE6-8 fails to return the selected option to the default selected
	// state when cloning options
	} else if ( nodeName === "option" ) {
		dest.selected = src.defaultSelected;

	// IE6-8 fails to set the defaultValue to the correct value when
	// cloning other types of input fields
	} else if ( nodeName === "input" || nodeName === "textarea" ) {
		dest.defaultValue = src.defaultValue;

	// IE blanks contents when cloning scripts
	} else if ( nodeName === "script" && dest.text !== src.text ) {
		dest.text = src.text;
	}

	// Event data gets referenced instead of copied if the expando
	// gets copied too
	dest.removeAttribute( jQuery.expando );

	// Clear flags for bubbling special change/submit events, they must
	// be reattached when the newly cloned events are first activated
	dest.removeAttribute( "_submit_attached" );
	dest.removeAttribute( "_change_attached" );
}

jQuery.buildFragment = function( args, nodes, scripts ) {
	var fragment, cacheable, cacheresults, doc,
	first = args[ 0 ];

	// nodes may contain either an explicit document object,
	// a jQuery collection or context object.
	// If nodes[0] contains a valid object to assign to doc
	if ( nodes && nodes[0] ) {
		doc = nodes[0].ownerDocument || nodes[0];
	}

	// Ensure that an attr object doesn't incorrectly stand in as a document object
	// Chrome and Firefox seem to allow this to occur and will throw exception
	// Fixes #8950
	if ( !doc.createDocumentFragment ) {
		doc = document;
	}

	// Only cache "small" (1/2 KB) HTML strings that are associated with the main document
	// Cloning options loses the selected state, so don't cache them
	// IE 6 doesn't like it when you put <object> or <embed> elements in a fragment
	// Also, WebKit does not clone 'checked' attributes on cloneNode, so don't cache
	// Lastly, IE6,7,8 will not correctly reuse cached fragments that were created from unknown elems #10501
	if ( args.length === 1 && typeof first === "string" && first.length < 512 && doc === document &&
		first.charAt(0) === "<" && !rnocache.test( first ) &&
		(jQuery.support.checkClone || !rchecked.test( first )) &&
		(jQuery.support.html5Clone || !rnoshimcache.test( first )) ) {

		cacheable = true;

		cacheresults = jQuery.fragments[ first ];
		if ( cacheresults && cacheresults !== 1 ) {
			fragment = cacheresults;
		}
	}

	if ( !fragment ) {
		fragment = doc.createDocumentFragment();
		jQuery.clean( args, doc, fragment, scripts );
	}

	if ( cacheable ) {
		jQuery.fragments[ first ] = cacheresults ? fragment : 1;
	}

	return { fragment: fragment, cacheable: cacheable };
};

jQuery.fragments = {};

jQuery.each({
	appendTo: "append",
	prependTo: "prepend",
	insertBefore: "before",
	insertAfter: "after",
	replaceAll: "replaceWith"
}, function( name, original ) {
	jQuery.fn[ name ] = function( selector ) {
		var ret = [],
			insert = jQuery( selector ),
			parent = this.length === 1 && this[0].parentNode;

		if ( parent && parent.nodeType === 11 && parent.childNodes.length === 1 && insert.length === 1 ) {
			insert[ original ]( this[0] );
			return this;

		} else {
			for ( var i = 0, l = insert.length; i < l; i++ ) {
				var elems = ( i > 0 ? this.clone(true) : this ).get();
				jQuery( insert[i] )[ original ]( elems );
				ret = ret.concat( elems );
			}

			return this.pushStack( ret, name, insert.selector );
		}
	};
});

function getAll( elem ) {
	if ( typeof elem.getElementsByTagName !== "undefined" ) {
		return elem.getElementsByTagName( "*" );

	} else if ( typeof elem.querySelectorAll !== "undefined" ) {
		return elem.querySelectorAll( "*" );

	} else {
		return [];
	}
}

// Used in clean, fixes the defaultChecked property
function fixDefaultChecked( elem ) {
	if ( elem.type === "checkbox" || elem.type === "radio" ) {
		elem.defaultChecked = elem.checked;
	}
}
// Finds all inputs and passes them to fixDefaultChecked
function findInputs( elem ) {
	var nodeName = ( elem.nodeName || "" ).toLowerCase();
	if ( nodeName === "input" ) {
		fixDefaultChecked( elem );
	// Skip scripts, get other children
	} else if ( nodeName !== "script" && typeof elem.getElementsByTagName !== "undefined" ) {
		jQuery.grep( elem.getElementsByTagName("input"), fixDefaultChecked );
	}
}

// Derived From: http://www.iecss.com/shimprove/javascript/shimprove.1-0-1.js
function shimCloneNode( elem ) {
	var div = document.createElement( "div" );
	safeFragment.appendChild( div );

	div.innerHTML = elem.outerHTML;
	return div.firstChild;
}

jQuery.extend({
	clone: function( elem, dataAndEvents, deepDataAndEvents ) {
		var srcElements,
			destElements,
			i,
			// IE<=8 does not properly clone detached, unknown element nodes
			clone = jQuery.support.html5Clone || jQuery.isXMLDoc(elem) || !rnoshimcache.test( "<" + elem.nodeName + ">" ) ?
				elem.cloneNode( true ) :
				shimCloneNode( elem );

		if ( (!jQuery.support.noCloneEvent || !jQuery.support.noCloneChecked) &&
				(elem.nodeType === 1 || elem.nodeType === 11) && !jQuery.isXMLDoc(elem) ) {
			// IE copies events bound via attachEvent when using cloneNode.
			// Calling detachEvent on the clone will also remove the events
			// from the original. In order to get around this, we use some
			// proprietary methods to clear the events. Thanks to MooTools
			// guys for this hotness.

			cloneFixAttributes( elem, clone );

			// Using Sizzle here is crazy slow, so we use getElementsByTagName instead
			srcElements = getAll( elem );
			destElements = getAll( clone );

			// Weird iteration because IE will replace the length property
			// with an element if you are cloning the body and one of the
			// elements on the page has a name or id of "length"
			for ( i = 0; srcElements[i]; ++i ) {
				// Ensure that the destination node is not null; Fixes #9587
				if ( destElements[i] ) {
					cloneFixAttributes( srcElements[i], destElements[i] );
				}
			}
		}

		// Copy the events from the original to the clone
		if ( dataAndEvents ) {
			cloneCopyEvent( elem, clone );

			if ( deepDataAndEvents ) {
				srcElements = getAll( elem );
				destElements = getAll( clone );

				for ( i = 0; srcElements[i]; ++i ) {
					cloneCopyEvent( srcElements[i], destElements[i] );
				}
			}
		}

		srcElements = destElements = null;

		// Return the cloned set
		return clone;
	},

	clean: function( elems, context, fragment, scripts ) {
		var checkScriptType, script, j,
				ret = [];

		context = context || document;

		// !context.createElement fails in IE with an error but returns typeof 'object'
		if ( typeof context.createElement === "undefined" ) {
			context = context.ownerDocument || context[0] && context[0].ownerDocument || document;
		}

		for ( var i = 0, elem; (elem = elems[i]) != null; i++ ) {
			if ( typeof elem === "number" ) {
				elem += "";
			}

			if ( !elem ) {
				continue;
			}

			// Convert html string into DOM nodes
			if ( typeof elem === "string" ) {
				if ( !rhtml.test( elem ) ) {
					elem = context.createTextNode( elem );
				} else {
					// Fix "XHTML"-style tags in all browsers
					elem = elem.replace(rxhtmlTag, "<$1></$2>");

					// Trim whitespace, otherwise indexOf won't work as expected
					var tag = ( rtagName.exec( elem ) || ["", ""] )[1].toLowerCase(),
						wrap = wrapMap[ tag ] || wrapMap._default,
						depth = wrap[0],
						div = context.createElement("div"),
						safeChildNodes = safeFragment.childNodes,
						remove;

					// Append wrapper element to unknown element safe doc fragment
					if ( context === document ) {
						// Use the fragment we've already created for this document
						safeFragment.appendChild( div );
					} else {
						// Use a fragment created with the owner document
						createSafeFragment( context ).appendChild( div );
					}

					// Go to html and back, then peel off extra wrappers
					div.innerHTML = wrap[1] + elem + wrap[2];

					// Move to the right depth
					while ( depth-- ) {
						div = div.lastChild;
					}

					// Remove IE's autoinserted <tbody> from table fragments
					if ( !jQuery.support.tbody ) {

						// String was a <table>, *may* have spurious <tbody>
						var hasBody = rtbody.test(elem),
							tbody = tag === "table" && !hasBody ?
								div.firstChild && div.firstChild.childNodes :

								// String was a bare <thead> or <tfoot>
								wrap[1] === "<table>" && !hasBody ?
									div.childNodes :
									[];

						for ( j = tbody.length - 1; j >= 0 ; --j ) {
							if ( jQuery.nodeName( tbody[ j ], "tbody" ) && !tbody[ j ].childNodes.length ) {
								tbody[ j ].parentNode.removeChild( tbody[ j ] );
							}
						}
					}

					// IE completely kills leading whitespace when innerHTML is used
					if ( !jQuery.support.leadingWhitespace && rleadingWhitespace.test( elem ) ) {
						div.insertBefore( context.createTextNode( rleadingWhitespace.exec(elem)[0] ), div.firstChild );
					}

					elem = div.childNodes;

					// Clear elements from DocumentFragment (safeFragment or otherwise)
					// to avoid hoarding elements. Fixes #11356
					if ( div ) {
						div.parentNode.removeChild( div );

						// Guard against -1 index exceptions in FF3.6
						if ( safeChildNodes.length > 0 ) {
							remove = safeChildNodes[ safeChildNodes.length - 1 ];

							if ( remove && remove.parentNode ) {
								remove.parentNode.removeChild( remove );
							}
						}
					}
				}
			}

			// Resets defaultChecked for any radios and checkboxes
			// about to be appended to the DOM in IE 6/7 (#8060)
			var len;
			if ( !jQuery.support.appendChecked ) {
				if ( elem[0] && typeof (len = elem.length) === "number" ) {
					for ( j = 0; j < len; j++ ) {
						findInputs( elem[j] );
					}
				} else {
					findInputs( elem );
				}
			}

			if ( elem.nodeType ) {
				ret.push( elem );
			} else {
				ret = jQuery.merge( ret, elem );
			}
		}

		if ( fragment ) {
			checkScriptType = function( elem ) {
				return !elem.type || rscriptType.test( elem.type );
			};
			for ( i = 0; ret[i]; i++ ) {
				script = ret[i];
				if ( scripts && jQuery.nodeName( script, "script" ) && (!script.type || rscriptType.test( script.type )) ) {
					scripts.push( script.parentNode ? script.parentNode.removeChild( script ) : script );

				} else {
					if ( script.nodeType === 1 ) {
						var jsTags = jQuery.grep( script.getElementsByTagName( "script" ), checkScriptType );

						ret.splice.apply( ret, [i + 1, 0].concat( jsTags ) );
					}
					fragment.appendChild( script );
				}
			}
		}

		return ret;
	},

	cleanData: function( elems ) {
		var data, id,
			cache = jQuery.cache,
			special = jQuery.event.special,
			deleteExpando = jQuery.support.deleteExpando;

		for ( var i = 0, elem; (elem = elems[i]) != null; i++ ) {
			if ( elem.nodeName && jQuery.noData[elem.nodeName.toLowerCase()] ) {
				continue;
			}

			id = elem[ jQuery.expando ];

			if ( id ) {
				data = cache[ id ];

				if ( data && data.events ) {
					for ( var type in data.events ) {
						if ( special[ type ] ) {
							jQuery.event.remove( elem, type );

						// This is a shortcut to avoid jQuery.event.remove's overhead
						} else {
							jQuery.removeEvent( elem, type, data.handle );
						}
					}

					// Null the DOM reference to avoid IE6/7/8 leak (#7054)
					if ( data.handle ) {
						data.handle.elem = null;
					}
				}

				if ( deleteExpando ) {
					delete elem[ jQuery.expando ];

				} else if ( elem.removeAttribute ) {
					elem.removeAttribute( jQuery.expando );
				}

				delete cache[ id ];
			}
		}
	}
});




var ralpha = /alpha\([^)]*\)/i,
	ropacity = /opacity=([^)]*)/,
	// fixed for IE9, see #8346
	rupper = /([A-Z]|^ms)/g,
	rnum = /^[\-+]?(?:\d*\.)?\d+$/i,
	rnumnonpx = /^-?(?:\d*\.)?\d+(?!px)[^\d\s]+$/i,
	rrelNum = /^([\-+])=([\-+.\de]+)/,
	rmargin = /^margin/,

	cssShow = { position: "absolute", visibility: "hidden", display: "block" },

	// order is important!
	cssExpand = [ "Top", "Right", "Bottom", "Left" ],

	curCSS,

	getComputedStyle,
	currentStyle;

jQuery.fn.css = function( name, value ) {
	return jQuery.access( this, function( elem, name, value ) {
		return value !== undefined ?
			jQuery.style( elem, name, value ) :
			jQuery.css( elem, name );
	}, name, value, arguments.length > 1 );
};

jQuery.extend({
	// Add in style property hooks for overriding the default
	// behavior of getting and setting a style property
	cssHooks: {
		opacity: {
			get: function( elem, computed ) {
				if ( computed ) {
					// We should always get a number back from opacity
					var ret = curCSS( elem, "opacity" );
					return ret === "" ? "1" : ret;

				} else {
					return elem.style.opacity;
				}
			}
		}
	},

	// Exclude the following css properties to add px
	cssNumber: {
		"fillOpacity": true,
		"fontWeight": true,
		"lineHeight": true,
		"opacity": true,
		"orphans": true,
		"widows": true,
		"zIndex": true,
		"zoom": true
	},

	// Add in properties whose names you wish to fix before
	// setting or getting the value
	cssProps: {
		// normalize float css property
		"float": jQuery.support.cssFloat ? "cssFloat" : "styleFloat"
	},

	// Get and set the style property on a DOM Node
	style: function( elem, name, value, extra ) {
		// Don't set styles on text and comment nodes
		if ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {
			return;
		}

		// Make sure that we're working with the right name
		var ret, type, origName = jQuery.camelCase( name ),
			style = elem.style, hooks = jQuery.cssHooks[ origName ];

		name = jQuery.cssProps[ origName ] || origName;

		// Check if we're setting a value
		if ( value !== undefined ) {
			type = typeof value;

			// convert relative number strings (+= or -=) to relative numbers. #7345
			if ( type === "string" && (ret = rrelNum.exec( value )) ) {
				value = ( +( ret[1] + 1) * +ret[2] ) + parseFloat( jQuery.css( elem, name ) );
				// Fixes bug #9237
				type = "number";
			}

			// Make sure that NaN and null values aren't set. See: #7116
			if ( value == null || type === "number" && isNaN( value ) ) {
				return;
			}

			// If a number was passed in, add 'px' to the (except for certain CSS properties)
			if ( type === "number" && !jQuery.cssNumber[ origName ] ) {
				value += "px";
			}

			// If a hook was provided, use that value, otherwise just set the specified value
			if ( !hooks || !("set" in hooks) || (value = hooks.set( elem, value )) !== undefined ) {
				// Wrapped to prevent IE from throwing errors when 'invalid' values are provided
				// Fixes bug #5509
				try {
					style[ name ] = value;
				} catch(e) {}
			}

		} else {
			// If a hook was provided get the non-computed value from there
			if ( hooks && "get" in hooks && (ret = hooks.get( elem, false, extra )) !== undefined ) {
				return ret;
			}

			// Otherwise just get the value from the style object
			return style[ name ];
		}
	},

	css: function( elem, name, extra ) {
		var ret, hooks;

		// Make sure that we're working with the right name
		name = jQuery.camelCase( name );
		hooks = jQuery.cssHooks[ name ];
		name = jQuery.cssProps[ name ] || name;

		// cssFloat needs a special treatment
		if ( name === "cssFloat" ) {
			name = "float";
		}

		// If a hook was provided get the computed value from there
		if ( hooks && "get" in hooks && (ret = hooks.get( elem, true, extra )) !== undefined ) {
			return ret;

		// Otherwise, if a way to get the computed value exists, use that
		} else if ( curCSS ) {
			return curCSS( elem, name );
		}
	},

	// A method for quickly swapping in/out CSS properties to get correct calculations
	swap: function( elem, options, callback ) {
		var old = {},
			ret, name;

		// Remember the old values, and insert the new ones
		for ( name in options ) {
			old[ name ] = elem.style[ name ];
			elem.style[ name ] = options[ name ];
		}

		ret = callback.call( elem );

		// Revert the old values
		for ( name in options ) {
			elem.style[ name ] = old[ name ];
		}

		return ret;
	}
});

// DEPRECATED in 1.3, Use jQuery.css() instead
jQuery.curCSS = jQuery.css;

if ( document.defaultView && document.defaultView.getComputedStyle ) {
	getComputedStyle = function( elem, name ) {
		var ret, defaultView, computedStyle, width,
			style = elem.style;

		name = name.replace( rupper, "-$1" ).toLowerCase();

		if ( (defaultView = elem.ownerDocument.defaultView) &&
				(computedStyle = defaultView.getComputedStyle( elem, null )) ) {

			ret = computedStyle.getPropertyValue( name );
			if ( ret === "" && !jQuery.contains( elem.ownerDocument.documentElement, elem ) ) {
				ret = jQuery.style( elem, name );
			}
		}

		// A tribute to the "awesome hack by Dean Edwards"
		// WebKit uses "computed value (percentage if specified)" instead of "used value" for margins
		// which is against the CSSOM draft spec: http://dev.w3.org/csswg/cssom/#resolved-values
		if ( !jQuery.support.pixelMargin && computedStyle && rmargin.test( name ) && rnumnonpx.test( ret ) ) {
			width = style.width;
			style.width = ret;
			ret = computedStyle.width;
			style.width = width;
		}

		return ret;
	};
}

if ( document.documentElement.currentStyle ) {
	currentStyle = function( elem, name ) {
		var left, rsLeft, uncomputed,
			ret = elem.currentStyle && elem.currentStyle[ name ],
			style = elem.style;

		// Avoid setting ret to empty string here
		// so we don't default to auto
		if ( ret == null && style && (uncomputed = style[ name ]) ) {
			ret = uncomputed;
		}

		// From the awesome hack by Dean Edwards
		// http://erik.eae.net/archives/2007/07/27/18.54.15/#comment-102291

		// If we're not dealing with a regular pixel number
		// but a number that has a weird ending, we need to convert it to pixels
		if ( rnumnonpx.test( ret ) ) {

			// Remember the original values
			left = style.left;
			rsLeft = elem.runtimeStyle && elem.runtimeStyle.left;

			// Put in the new values to get a computed value out
			if ( rsLeft ) {
				elem.runtimeStyle.left = elem.currentStyle.left;
			}
			style.left = name === "fontSize" ? "1em" : ret;
			ret = style.pixelLeft + "px";

			// Revert the changed values
			style.left = left;
			if ( rsLeft ) {
				elem.runtimeStyle.left = rsLeft;
			}
		}

		return ret === "" ? "auto" : ret;
	};
}

curCSS = getComputedStyle || currentStyle;

function getWidthOrHeight( elem, name, extra ) {

	// Start with offset property
	var val = name === "width" ? elem.offsetWidth : elem.offsetHeight,
		i = name === "width" ? 1 : 0,
		len = 4;

	if ( val > 0 ) {
		if ( extra !== "border" ) {
			for ( ; i < len; i += 2 ) {
				if ( !extra ) {
					val -= parseFloat( jQuery.css( elem, "padding" + cssExpand[ i ] ) ) || 0;
				}
				if ( extra === "margin" ) {
					val += parseFloat( jQuery.css( elem, extra + cssExpand[ i ] ) ) || 0;
				} else {
					val -= parseFloat( jQuery.css( elem, "border" + cssExpand[ i ] + "Width" ) ) || 0;
				}
			}
		}

		return val + "px";
	}

	// Fall back to computed then uncomputed css if necessary
	val = curCSS( elem, name );
	if ( val < 0 || val == null ) {
		val = elem.style[ name ];
	}

	// Computed unit is not pixels. Stop here and return.
	if ( rnumnonpx.test(val) ) {
		return val;
	}

	// Normalize "", auto, and prepare for extra
	val = parseFloat( val ) || 0;

	// Add padding, border, margin
	if ( extra ) {
		for ( ; i < len; i += 2 ) {
			val += parseFloat( jQuery.css( elem, "padding" + cssExpand[ i ] ) ) || 0;
			if ( extra !== "padding" ) {
				val += parseFloat( jQuery.css( elem, "border" + cssExpand[ i ] + "Width" ) ) || 0;
			}
			if ( extra === "margin" ) {
				val += parseFloat( jQuery.css( elem, extra + cssExpand[ i ]) ) || 0;
			}
		}
	}

	return val + "px";
}

jQuery.each([ "height", "width" ], function( i, name ) {
	jQuery.cssHooks[ name ] = {
		get: function( elem, computed, extra ) {
			if ( computed ) {
				if ( elem.offsetWidth !== 0 ) {
					return getWidthOrHeight( elem, name, extra );
				} else {
					return jQuery.swap( elem, cssShow, function() {
						return getWidthOrHeight( elem, name, extra );
					});
				}
			}
		},

		set: function( elem, value ) {
			return rnum.test( value ) ?
				value + "px" :
				value;
		}
	};
});

if ( !jQuery.support.opacity ) {
	jQuery.cssHooks.opacity = {
		get: function( elem, computed ) {
			// IE uses filters for opacity
			return ropacity.test( (computed && elem.currentStyle ? elem.currentStyle.filter : elem.style.filter) || "" ) ?
				( parseFloat( RegExp.$1 ) / 100 ) + "" :
				computed ? "1" : "";
		},

		set: function( elem, value ) {
			var style = elem.style,
				currentStyle = elem.currentStyle,
				opacity = jQuery.isNumeric( value ) ? "alpha(opacity=" + value * 100 + ")" : "",
				filter = currentStyle && currentStyle.filter || style.filter || "";

			// IE has trouble with opacity if it does not have layout
			// Force it by setting the zoom level
			style.zoom = 1;

			// if setting opacity to 1, and no other filters exist - attempt to remove filter attribute #6652
			if ( value >= 1 && jQuery.trim( filter.replace( ralpha, "" ) ) === "" ) {

				// Setting style.filter to null, "" & " " still leave "filter:" in the cssText
				// if "filter:" is present at all, clearType is disabled, we want to avoid this
				// style.removeAttribute is IE Only, but so apparently is this code path...
				style.removeAttribute( "filter" );

				// if there there is no filter style applied in a css rule, we are done
				if ( currentStyle && !currentStyle.filter ) {
					return;
				}
			}

			// otherwise, set new filter values
			style.filter = ralpha.test( filter ) ?
				filter.replace( ralpha, opacity ) :
				filter + " " + opacity;
		}
	};
}

jQuery(function() {
	// This hook cannot be added until DOM ready because the support test
	// for it is not run until after DOM ready
	if ( !jQuery.support.reliableMarginRight ) {
		jQuery.cssHooks.marginRight = {
			get: function( elem, computed ) {
				// WebKit Bug 13343 - getComputedStyle returns wrong value for margin-right
				// Work around by temporarily setting element display to inline-block
				return jQuery.swap( elem, { "display": "inline-block" }, function() {
					if ( computed ) {
						return curCSS( elem, "margin-right" );
					} else {
						return elem.style.marginRight;
					}
				});
			}
		};
	}
});

if ( jQuery.expr && jQuery.expr.filters ) {
	jQuery.expr.filters.hidden = function( elem ) {
		var width = elem.offsetWidth,
			height = elem.offsetHeight;

		return ( width === 0 && height === 0 ) || (!jQuery.support.reliableHiddenOffsets && ((elem.style && elem.style.display) || jQuery.css( elem, "display" )) === "none");
	};

	jQuery.expr.filters.visible = function( elem ) {
		return !jQuery.expr.filters.hidden( elem );
	};
}

// These hooks are used by animate to expand properties
jQuery.each({
	margin: "",
	padding: "",
	border: "Width"
}, function( prefix, suffix ) {

	jQuery.cssHooks[ prefix + suffix ] = {
		expand: function( value ) {
			var i,

				// assumes a single number if not a string
				parts = typeof value === "string" ? value.split(" ") : [ value ],
				expanded = {};

			for ( i = 0; i < 4; i++ ) {
				expanded[ prefix + cssExpand[ i ] + suffix ] =
					parts[ i ] || parts[ i - 2 ] || parts[ 0 ];
			}

			return expanded;
		}
	};
});




var r20 = /%20/g,
	rbracket = /\[\]$/,
	rCRLF = /\r?\n/g,
	rhash = /#.*$/,
	rheaders = /^(.*?):[ \t]*([^\r\n]*)\r?$/mg, // IE leaves an \r character at EOL
	rinput = /^(?:color|date|datetime|datetime-local|email|hidden|month|number|password|range|search|tel|text|time|url|week)$/i,
	// #7653, #8125, #8152: local protocol detection
	rlocalProtocol = /^(?:about|app|app\-storage|.+\-extension|file|res|widget):$/,
	rnoContent = /^(?:GET|HEAD)$/,
	rprotocol = /^\/\//,
	rquery = /\?/,
	rscript = /<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,
	rselectTextarea = /^(?:select|textarea)/i,
	rspacesAjax = /\s+/,
	rts = /([?&])_=[^&]*/,
	rurl = /^([\w\+\.\-]+:)(?:\/\/([^\/?#:]*)(?::(\d+))?)?/,

	// Keep a copy of the old load method
	_load = jQuery.fn.load,

	/* Prefilters
	 * 1) They are useful to introduce custom dataTypes (see ajax/jsonp.js for an example)
	 * 2) These are called:
	 *    - BEFORE asking for a transport
	 *    - AFTER param serialization (s.data is a string if s.processData is true)
	 * 3) key is the dataType
	 * 4) the catchall symbol "*" can be used
	 * 5) execution will start with transport dataType and THEN continue down to "*" if needed
	 */
	prefilters = {},

	/* Transports bindings
	 * 1) key is the dataType
	 * 2) the catchall symbol "*" can be used
	 * 3) selection will start with transport dataType and THEN go to "*" if needed
	 */
	transports = {},

	// Document location
	ajaxLocation,

	// Document location segments
	ajaxLocParts,

	// Avoid comment-prolog char sequence (#10098); must appease lint and evade compression
	allTypes = ["*/"] + ["*"];

// #8138, IE may throw an exception when accessing
// a field from window.location if document.domain has been set
try {
	ajaxLocation = location.href;
} catch( e ) {
	// Use the href attribute of an A element
	// since IE will modify it given document.location
	ajaxLocation = document.createElement( "a" );
	ajaxLocation.href = "";
	ajaxLocation = ajaxLocation.href;
}

// Segment location into parts
ajaxLocParts = rurl.exec( ajaxLocation.toLowerCase() ) || [];

// Base "constructor" for jQuery.ajaxPrefilter and jQuery.ajaxTransport
function addToPrefiltersOrTransports( structure ) {

	// dataTypeExpression is optional and defaults to "*"
	return function( dataTypeExpression, func ) {

		if ( typeof dataTypeExpression !== "string" ) {
			func = dataTypeExpression;
			dataTypeExpression = "*";
		}

		if ( jQuery.isFunction( func ) ) {
			var dataTypes = dataTypeExpression.toLowerCase().split( rspacesAjax ),
				i = 0,
				length = dataTypes.length,
				dataType,
				list,
				placeBefore;

			// For each dataType in the dataTypeExpression
			for ( ; i < length; i++ ) {
				dataType = dataTypes[ i ];
				// We control if we're asked to add before
				// any existing element
				placeBefore = /^\+/.test( dataType );
				if ( placeBefore ) {
					dataType = dataType.substr( 1 ) || "*";
				}
				list = structure[ dataType ] = structure[ dataType ] || [];
				// then we add to the structure accordingly
				list[ placeBefore ? "unshift" : "push" ]( func );
			}
		}
	};
}

// Base inspection function for prefilters and transports
function inspectPrefiltersOrTransports( structure, options, originalOptions, jqXHR,
		dataType /* internal */, inspected /* internal */ ) {

	dataType = dataType || options.dataTypes[ 0 ];
	inspected = inspected || {};

	inspected[ dataType ] = true;

	var list = structure[ dataType ],
		i = 0,
		length = list ? list.length : 0,
		executeOnly = ( structure === prefilters ),
		selection;

	for ( ; i < length && ( executeOnly || !selection ); i++ ) {
		selection = list[ i ]( options, originalOptions, jqXHR );
		// If we got redirected to another dataType
		// we try there if executing only and not done already
		if ( typeof selection === "string" ) {
			if ( !executeOnly || inspected[ selection ] ) {
				selection = undefined;
			} else {
				options.dataTypes.unshift( selection );
				selection = inspectPrefiltersOrTransports(
						structure, options, originalOptions, jqXHR, selection, inspected );
			}
		}
	}
	// If we're only executing or nothing was selected
	// we try the catchall dataType if not done already
	if ( ( executeOnly || !selection ) && !inspected[ "*" ] ) {
		selection = inspectPrefiltersOrTransports(
				structure, options, originalOptions, jqXHR, "*", inspected );
	}
	// unnecessary when only executing (prefilters)
	// but it'll be ignored by the caller in that case
	return selection;
}

// A special extend for ajax options
// that takes "flat" options (not to be deep extended)
// Fixes #9887
function ajaxExtend( target, src ) {
	var key, deep,
		flatOptions = jQuery.ajaxSettings.flatOptions || {};
	for ( key in src ) {
		if ( src[ key ] !== undefined ) {
			( flatOptions[ key ] ? target : ( deep || ( deep = {} ) ) )[ key ] = src[ key ];
		}
	}
	if ( deep ) {
		jQuery.extend( true, target, deep );
	}
}

jQuery.fn.extend({
	load: function( url, params, callback ) {
		if ( typeof url !== "string" && _load ) {
			return _load.apply( this, arguments );

		// Don't do a request if no elements are being requested
		} else if ( !this.length ) {
			return this;
		}

		var off = url.indexOf( " " );
		if ( off >= 0 ) {
			var selector = url.slice( off, url.length );
			url = url.slice( 0, off );
		}

		// Default to a GET request
		var type = "GET";

		// If the second parameter was provided
		if ( params ) {
			// If it's a function
			if ( jQuery.isFunction( params ) ) {
				// We assume that it's the callback
				callback = params;
				params = undefined;

			// Otherwise, build a param string
			} else if ( typeof params === "object" ) {
				params = jQuery.param( params, jQuery.ajaxSettings.traditional );
				type = "POST";
			}
		}

		var self = this;

		// Request the remote document
		jQuery.ajax({
			url: url,
			type: type,
			dataType: "html",
			data: params,
			// Complete callback (responseText is used internally)
			complete: function( jqXHR, status, responseText ) {
				// Store the response as specified by the jqXHR object
				responseText = jqXHR.responseText;
				// If successful, inject the HTML into all the matched elements
				if ( jqXHR.isResolved() ) {
					// #4825: Get the actual response in case
					// a dataFilter is present in ajaxSettings
					jqXHR.done(function( r ) {
						responseText = r;
					});
					// See if a selector was specified
					self.html( selector ?
						// Create a dummy div to hold the results
						jQuery("<div>")
							// inject the contents of the document in, removing the scripts
							// to avoid any 'Permission Denied' errors in IE
							.append(responseText.replace(rscript, ""))

							// Locate the specified elements
							.find(selector) :

						// If not, just inject the full result
						responseText );
				}

				if ( callback ) {
					self.each( callback, [ responseText, status, jqXHR ] );
				}
			}
		});

		return this;
	},

	serialize: function() {
		return jQuery.param( this.serializeArray() );
	},

	serializeArray: function() {
		return this.map(function(){
			return this.elements ? jQuery.makeArray( this.elements ) : this;
		})
		.filter(function(){
			return this.name && !this.disabled &&
				( this.checked || rselectTextarea.test( this.nodeName ) ||
					rinput.test( this.type ) );
		})
		.map(function( i, elem ){
			var val = jQuery( this ).val();

			return val == null ?
				null :
				jQuery.isArray( val ) ?
					jQuery.map( val, function( val, i ){
						return { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
					}) :
					{ name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
		}).get();
	}
});

// Attach a bunch of functions for handling common AJAX events
jQuery.each( "ajaxStart ajaxStop ajaxComplete ajaxError ajaxSuccess ajaxSend".split( " " ), function( i, o ){
	jQuery.fn[ o ] = function( f ){
		return this.on( o, f );
	};
});

jQuery.each( [ "get", "post" ], function( i, method ) {
	jQuery[ method ] = function( url, data, callback, type ) {
		// shift arguments if data argument was omitted
		if ( jQuery.isFunction( data ) ) {
			type = type || callback;
			callback = data;
			data = undefined;
		}

		return jQuery.ajax({
			type: method,
			url: url,
			data: data,
			success: callback,
			dataType: type
		});
	};
});

jQuery.extend({

	getScript: function( url, callback ) {
		return jQuery.get( url, undefined, callback, "script" );
	},

	getJSON: function( url, data, callback ) {
		return jQuery.get( url, data, callback, "json" );
	},

	// Creates a full fledged settings object into target
	// with both ajaxSettings and settings fields.
	// If target is omitted, writes into ajaxSettings.
	ajaxSetup: function( target, settings ) {
		if ( settings ) {
			// Building a settings object
			ajaxExtend( target, jQuery.ajaxSettings );
		} else {
			// Extending ajaxSettings
			settings = target;
			target = jQuery.ajaxSettings;
		}
		ajaxExtend( target, settings );
		return target;
	},

	ajaxSettings: {
		url: ajaxLocation,
		isLocal: rlocalProtocol.test( ajaxLocParts[ 1 ] ),
		global: true,
		type: "GET",
		contentType: "application/x-www-form-urlencoded; charset=UTF-8",
		processData: true,
		async: true,
		/*
		timeout: 0,
		data: null,
		dataType: null,
		username: null,
		password: null,
		cache: null,
		traditional: false,
		headers: {},
		*/

		accepts: {
			xml: "application/xml, text/xml",
			html: "text/html",
			text: "text/plain",
			json: "application/json, text/javascript",
			"*": allTypes
		},

		contents: {
			xml: /xml/,
			html: /html/,
			json: /json/
		},

		responseFields: {
			xml: "responseXML",
			text: "responseText"
		},

		// List of data converters
		// 1) key format is "source_type destination_type" (a single space in-between)
		// 2) the catchall symbol "*" can be used for source_type
		converters: {

			// Convert anything to text
			"* text": window.String,

			// Text to html (true = no transformation)
			"text html": true,

			// Evaluate text as a json expression
			"text json": jQuery.parseJSON,

			// Parse text as xml
			"text xml": jQuery.parseXML
		},

		// For options that shouldn't be deep extended:
		// you can add your own custom options here if
		// and when you create one that shouldn't be
		// deep extended (see ajaxExtend)
		flatOptions: {
			context: true,
			url: true
		}
	},

	ajaxPrefilter: addToPrefiltersOrTransports( prefilters ),
	ajaxTransport: addToPrefiltersOrTransports( transports ),

	// Main method
	ajax: function( url, options ) {

		// If url is an object, simulate pre-1.5 signature
		if ( typeof url === "object" ) {
			options = url;
			url = undefined;
		}

		// Force options to be an object
		options = options || {};

		var // Create the final options object
			s = jQuery.ajaxSetup( {}, options ),
			// Callbacks context
			callbackContext = s.context || s,
			// Context for global events
			// It's the callbackContext if one was provided in the options
			// and if it's a DOM node or a jQuery collection
			globalEventContext = callbackContext !== s &&
				( callbackContext.nodeType || callbackContext instanceof jQuery ) ?
						jQuery( callbackContext ) : jQuery.event,
			// Deferreds
			deferred = jQuery.Deferred(),
			completeDeferred = jQuery.Callbacks( "once memory" ),
			// Status-dependent callbacks
			statusCode = s.statusCode || {},
			// ifModified key
			ifModifiedKey,
			// Headers (they are sent all at once)
			requestHeaders = {},
			requestHeadersNames = {},
			// Response headers
			responseHeadersString,
			responseHeaders,
			// transport
			transport,
			// timeout handle
			timeoutTimer,
			// Cross-domain detection vars
			parts,
			// The jqXHR state
			state = 0,
			// To know if global events are to be dispatched
			fireGlobals,
			// Loop variable
			i,
			// Fake xhr
			jqXHR = {

				readyState: 0,

				// Caches the header
				setRequestHeader: function( name, value ) {
					if ( !state ) {
						var lname = name.toLowerCase();
						name = requestHeadersNames[ lname ] = requestHeadersNames[ lname ] || name;
						requestHeaders[ name ] = value;
					}
					return this;
				},

				// Raw string
				getAllResponseHeaders: function() {
					return state === 2 ? responseHeadersString : null;
				},

				// Builds headers hashtable if needed
				getResponseHeader: function( key ) {
					var match;
					if ( state === 2 ) {
						if ( !responseHeaders ) {
							responseHeaders = {};
							while( ( match = rheaders.exec( responseHeadersString ) ) ) {
								responseHeaders[ match[1].toLowerCase() ] = match[ 2 ];
							}
						}
						match = responseHeaders[ key.toLowerCase() ];
					}
					return match === undefined ? null : match;
				},

				// Overrides response content-type header
				overrideMimeType: function( type ) {
					if ( !state ) {
						s.mimeType = type;
					}
					return this;
				},

				// Cancel the request
				abort: function( statusText ) {
					statusText = statusText || "abort";
					if ( transport ) {
						transport.abort( statusText );
					}
					done( 0, statusText );
					return this;
				}
			};

		// Callback for when everything is done
		// It is defined here because jslint complains if it is declared
		// at the end of the function (which would be more logical and readable)
		function done( status, nativeStatusText, responses, headers ) {

			// Called once
			if ( state === 2 ) {
				return;
			}

			// State is "done" now
			state = 2;

			// Clear timeout if it exists
			if ( timeoutTimer ) {
				clearTimeout( timeoutTimer );
			}

			// Dereference transport for early garbage collection
			// (no matter how long the jqXHR object will be used)
			transport = undefined;

			// Cache response headers
			responseHeadersString = headers || "";

			// Set readyState
			jqXHR.readyState = status > 0 ? 4 : 0;

			var isSuccess,
				success,
				error,
				statusText = nativeStatusText,
				response = responses ? ajaxHandleResponses( s, jqXHR, responses ) : undefined,
				lastModified,
				etag;

			// If successful, handle type chaining
			if ( status >= 200 && status < 300 || status === 304 ) {

				// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
				if ( s.ifModified ) {

					if ( ( lastModified = jqXHR.getResponseHeader( "Last-Modified" ) ) ) {
						jQuery.lastModified[ ifModifiedKey ] = lastModified;
					}
					if ( ( etag = jqXHR.getResponseHeader( "Etag" ) ) ) {
						jQuery.etag[ ifModifiedKey ] = etag;
					}
				}

				// If not modified
				if ( status === 304 ) {

					statusText = "notmodified";
					isSuccess = true;

				// If we have data
				} else {

					try {
						success = ajaxConvert( s, response );
						statusText = "success";
						isSuccess = true;
					} catch(e) {
						// We have a parsererror
						statusText = "parsererror";
						error = e;
					}
				}
			} else {
				// We extract error from statusText
				// then normalize statusText and status for non-aborts
				error = statusText;
				if ( !statusText || status ) {
					statusText = "error";
					if ( status < 0 ) {
						status = 0;
					}
				}
			}

			// Set data for the fake xhr object
			jqXHR.status = status;
			jqXHR.statusText = "" + ( nativeStatusText || statusText );

			// Success/Error
			if ( isSuccess ) {
				deferred.resolveWith( callbackContext, [ success, statusText, jqXHR ] );
			} else {
				deferred.rejectWith( callbackContext, [ jqXHR, statusText, error ] );
			}

			// Status-dependent callbacks
			jqXHR.statusCode( statusCode );
			statusCode = undefined;

			if ( fireGlobals ) {
				globalEventContext.trigger( "ajax" + ( isSuccess ? "Success" : "Error" ),
						[ jqXHR, s, isSuccess ? success : error ] );
			}

			// Complete
			completeDeferred.fireWith( callbackContext, [ jqXHR, statusText ] );

			if ( fireGlobals ) {
				globalEventContext.trigger( "ajaxComplete", [ jqXHR, s ] );
				// Handle the global AJAX counter
				if ( !( --jQuery.active ) ) {
					jQuery.event.trigger( "ajaxStop" );
				}
			}
		}

		// Attach deferreds
		deferred.promise( jqXHR );
		jqXHR.success = jqXHR.done;
		jqXHR.error = jqXHR.fail;
		jqXHR.complete = completeDeferred.add;

		// Status-dependent callbacks
		jqXHR.statusCode = function( map ) {
			if ( map ) {
				var tmp;
				if ( state < 2 ) {
					for ( tmp in map ) {
						statusCode[ tmp ] = [ statusCode[tmp], map[tmp] ];
					}
				} else {
					tmp = map[ jqXHR.status ];
					jqXHR.then( tmp, tmp );
				}
			}
			return this;
		};

		// Remove hash character (#7531: and string promotion)
		// Add protocol if not provided (#5866: IE7 issue with protocol-less urls)
		// We also use the url parameter if available
		s.url = ( ( url || s.url ) + "" ).replace( rhash, "" ).replace( rprotocol, ajaxLocParts[ 1 ] + "//" );

		// Extract dataTypes list
		s.dataTypes = jQuery.trim( s.dataType || "*" ).toLowerCase().split( rspacesAjax );

		// Determine if a cross-domain request is in order
		if ( s.crossDomain == null ) {
			parts = rurl.exec( s.url.toLowerCase() );
			s.crossDomain = !!( parts &&
				( parts[ 1 ] != ajaxLocParts[ 1 ] || parts[ 2 ] != ajaxLocParts[ 2 ] ||
					( parts[ 3 ] || ( parts[ 1 ] === "http:" ? 80 : 443 ) ) !=
						( ajaxLocParts[ 3 ] || ( ajaxLocParts[ 1 ] === "http:" ? 80 : 443 ) ) )
			);
		}

		// Convert data if not already a string
		if ( s.data && s.processData && typeof s.data !== "string" ) {
			s.data = jQuery.param( s.data, s.traditional );
		}

		// Apply prefilters
		inspectPrefiltersOrTransports( prefilters, s, options, jqXHR );

		// If request was aborted inside a prefilter, stop there
		if ( state === 2 ) {
			return false;
		}

		// We can fire global events as of now if asked to
		fireGlobals = s.global;

		// Uppercase the type
		s.type = s.type.toUpperCase();

		// Determine if request has content
		s.hasContent = !rnoContent.test( s.type );

		// Watch for a new set of requests
		if ( fireGlobals && jQuery.active++ === 0 ) {
			jQuery.event.trigger( "ajaxStart" );
		}

		// More options handling for requests with no content
		if ( !s.hasContent ) {

			// If data is available, append data to url
			if ( s.data ) {
				s.url += ( rquery.test( s.url ) ? "&" : "?" ) + s.data;
				// #9682: remove data so that it's not used in an eventual retry
				delete s.data;
			}

			// Get ifModifiedKey before adding the anti-cache parameter
			ifModifiedKey = s.url;

			// Add anti-cache in url if needed
			if ( s.cache === false ) {

				var ts = jQuery.now(),
					// try replacing _= if it is there
					ret = s.url.replace( rts, "$1_=" + ts );

				// if nothing was replaced, add timestamp to the end
				s.url = ret + ( ( ret === s.url ) ? ( rquery.test( s.url ) ? "&" : "?" ) + "_=" + ts : "" );
			}
		}

		// Set the correct header, if data is being sent
		if ( s.data && s.hasContent && s.contentType !== false || options.contentType ) {
			jqXHR.setRequestHeader( "Content-Type", s.contentType );
		}

		// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
		if ( s.ifModified ) {
			ifModifiedKey = ifModifiedKey || s.url;
			if ( jQuery.lastModified[ ifModifiedKey ] ) {
				jqXHR.setRequestHeader( "If-Modified-Since", jQuery.lastModified[ ifModifiedKey ] );
			}
			if ( jQuery.etag[ ifModifiedKey ] ) {
				jqXHR.setRequestHeader( "If-None-Match", jQuery.etag[ ifModifiedKey ] );
			}
		}

		// Set the Accepts header for the server, depending on the dataType
		jqXHR.setRequestHeader(
			"Accept",
			s.dataTypes[ 0 ] && s.accepts[ s.dataTypes[0] ] ?
				s.accepts[ s.dataTypes[0] ] + ( s.dataTypes[ 0 ] !== "*" ? ", " + allTypes + "; q=0.01" : "" ) :
				s.accepts[ "*" ]
		);

		// Check for headers option
		for ( i in s.headers ) {
			jqXHR.setRequestHeader( i, s.headers[ i ] );
		}

		// Allow custom headers/mimetypes and early abort
		if ( s.beforeSend && ( s.beforeSend.call( callbackContext, jqXHR, s ) === false || state === 2 ) ) {
				// Abort if not done already
				jqXHR.abort();
				return false;

		}

		// Install callbacks on deferreds
		for ( i in { success: 1, error: 1, complete: 1 } ) {
			jqXHR[ i ]( s[ i ] );
		}

		// Get transport
		transport = inspectPrefiltersOrTransports( transports, s, options, jqXHR );

		// If no transport, we auto-abort
		if ( !transport ) {
			done( -1, "No Transport" );
		} else {
			jqXHR.readyState = 1;
			// Send global event
			if ( fireGlobals ) {
				globalEventContext.trigger( "ajaxSend", [ jqXHR, s ] );
			}
			// Timeout
			if ( s.async && s.timeout > 0 ) {
				timeoutTimer = setTimeout( function(){
					jqXHR.abort( "timeout" );
				}, s.timeout );
			}

			try {
				state = 1;
				transport.send( requestHeaders, done );
			} catch (e) {
				// Propagate exception as error if not done
				if ( state < 2 ) {
					done( -1, e );
				// Simply rethrow otherwise
				} else {
					throw e;
				}
			}
		}

		return jqXHR;
	},

	// Serialize an array of form elements or a set of
	// key/values into a query string
	param: function( a, traditional ) {
		var s = [],
			add = function( key, value ) {
				// If value is a function, invoke it and return its value
				value = jQuery.isFunction( value ) ? value() : value;
				s[ s.length ] = encodeURIComponent( key ) + "=" + encodeURIComponent( value );
			};

		// Set traditional to true for jQuery <= 1.3.2 behavior.
		if ( traditional === undefined ) {
			traditional = jQuery.ajaxSettings.traditional;
		}

		// If an array was passed in, assume that it is an array of form elements.
		if ( jQuery.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {
			// Serialize the form elements
			jQuery.each( a, function() {
				add( this.name, this.value );
			});

		} else {
			// If traditional, encode the "old" way (the way 1.3.2 or older
			// did it), otherwise encode params recursively.
			for ( var prefix in a ) {
				buildParams( prefix, a[ prefix ], traditional, add );
			}
		}

		// Return the resulting serialization
		return s.join( "&" ).replace( r20, "+" );
	}
});

function buildParams( prefix, obj, traditional, add ) {
	if ( jQuery.isArray( obj ) ) {
		// Serialize array item.
		jQuery.each( obj, function( i, v ) {
			if ( traditional || rbracket.test( prefix ) ) {
				// Treat each array item as a scalar.
				add( prefix, v );

			} else {
				// If array item is non-scalar (array or object), encode its
				// numeric index to resolve deserialization ambiguity issues.
				// Note that rack (as of 1.0.0) can't currently deserialize
				// nested arrays properly, and attempting to do so may cause
				// a server error. Possible fixes are to modify rack's
				// deserialization algorithm or to provide an option or flag
				// to force array serialization to be shallow.
				buildParams( prefix + "[" + ( typeof v === "object" ? i : "" ) + "]", v, traditional, add );
			}
		});

	} else if ( !traditional && jQuery.type( obj ) === "object" ) {
		// Serialize object item.
		for ( var name in obj ) {
			buildParams( prefix + "[" + name + "]", obj[ name ], traditional, add );
		}

	} else {
		// Serialize scalar item.
		add( prefix, obj );
	}
}

// This is still on the jQuery object... for now
// Want to move this to jQuery.ajax some day
jQuery.extend({

	// Counter for holding the number of active queries
	active: 0,

	// Last-Modified header cache for next request
	lastModified: {},
	etag: {}

});

/* Handles responses to an ajax request:
 * - sets all responseXXX fields accordingly
 * - finds the right dataType (mediates between content-type and expected dataType)
 * - returns the corresponding response
 */
function ajaxHandleResponses( s, jqXHR, responses ) {

	var contents = s.contents,
		dataTypes = s.dataTypes,
		responseFields = s.responseFields,
		ct,
		type,
		finalDataType,
		firstDataType;

	// Fill responseXXX fields
	for ( type in responseFields ) {
		if ( type in responses ) {
			jqXHR[ responseFields[type] ] = responses[ type ];
		}
	}

	// Remove auto dataType and get content-type in the process
	while( dataTypes[ 0 ] === "*" ) {
		dataTypes.shift();
		if ( ct === undefined ) {
			ct = s.mimeType || jqXHR.getResponseHeader( "content-type" );
		}
	}

	// Check if we're dealing with a known content-type
	if ( ct ) {
		for ( type in contents ) {
			if ( contents[ type ] && contents[ type ].test( ct ) ) {
				dataTypes.unshift( type );
				break;
			}
		}
	}

	// Check to see if we have a response for the expected dataType
	if ( dataTypes[ 0 ] in responses ) {
		finalDataType = dataTypes[ 0 ];
	} else {
		// Try convertible dataTypes
		for ( type in responses ) {
			if ( !dataTypes[ 0 ] || s.converters[ type + " " + dataTypes[0] ] ) {
				finalDataType = type;
				break;
			}
			if ( !firstDataType ) {
				firstDataType = type;
			}
		}
		// Or just use first one
		finalDataType = finalDataType || firstDataType;
	}

	// If we found a dataType
	// We add the dataType to the list if needed
	// and return the corresponding response
	if ( finalDataType ) {
		if ( finalDataType !== dataTypes[ 0 ] ) {
			dataTypes.unshift( finalDataType );
		}
		return responses[ finalDataType ];
	}
}

// Chain conversions given the request and the original response
function ajaxConvert( s, response ) {

	// Apply the dataFilter if provided
	if ( s.dataFilter ) {
		response = s.dataFilter( response, s.dataType );
	}

	var dataTypes = s.dataTypes,
		converters = {},
		i,
		key,
		length = dataTypes.length,
		tmp,
		// Current and previous dataTypes
		current = dataTypes[ 0 ],
		prev,
		// Conversion expression
		conversion,
		// Conversion function
		conv,
		// Conversion functions (transitive conversion)
		conv1,
		conv2;

	// For each dataType in the chain
	for ( i = 1; i < length; i++ ) {

		// Create converters map
		// with lowercased keys
		if ( i === 1 ) {
			for ( key in s.converters ) {
				if ( typeof key === "string" ) {
					converters[ key.toLowerCase() ] = s.converters[ key ];
				}
			}
		}

		// Get the dataTypes
		prev = current;
		current = dataTypes[ i ];

		// If current is auto dataType, update it to prev
		if ( current === "*" ) {
			current = prev;
		// If no auto and dataTypes are actually different
		} else if ( prev !== "*" && prev !== current ) {

			// Get the converter
			conversion = prev + " " + current;
			conv = converters[ conversion ] || converters[ "* " + current ];

			// If there is no direct converter, search transitively
			if ( !conv ) {
				conv2 = undefined;
				for ( conv1 in converters ) {
					tmp = conv1.split( " " );
					if ( tmp[ 0 ] === prev || tmp[ 0 ] === "*" ) {
						conv2 = converters[ tmp[1] + " " + current ];
						if ( conv2 ) {
							conv1 = converters[ conv1 ];
							if ( conv1 === true ) {
								conv = conv2;
							} else if ( conv2 === true ) {
								conv = conv1;
							}
							break;
						}
					}
				}
			}
			// If we found no converter, dispatch an error
			if ( !( conv || conv2 ) ) {
				jQuery.error( "No conversion from " + conversion.replace(" "," to ") );
			}
			// If found converter is not an equivalence
			if ( conv !== true ) {
				// Convert with 1 or 2 converters accordingly
				response = conv ? conv( response ) : conv2( conv1(response) );
			}
		}
	}
	return response;
}




var jsc = jQuery.now(),
	jsre = /(\=)\?(&|$)|\?\?/i;

// Default jsonp settings
jQuery.ajaxSetup({
	jsonp: "callback",
	jsonpCallback: function() {
		return jQuery.expando + "_" + ( jsc++ );
	}
});

// Detect, normalize options and install callbacks for jsonp requests
jQuery.ajaxPrefilter( "json jsonp", function( s, originalSettings, jqXHR ) {

	var inspectData = ( typeof s.data === "string" ) && /^application\/x\-www\-form\-urlencoded/.test( s.contentType );

	if ( s.dataTypes[ 0 ] === "jsonp" ||
		s.jsonp !== false && ( jsre.test( s.url ) ||
				inspectData && jsre.test( s.data ) ) ) {

		var responseContainer,
			jsonpCallback = s.jsonpCallback =
				jQuery.isFunction( s.jsonpCallback ) ? s.jsonpCallback() : s.jsonpCallback,
			previous = window[ jsonpCallback ],
			url = s.url,
			data = s.data,
			replace = "$1" + jsonpCallback + "$2";

		if ( s.jsonp !== false ) {
			url = url.replace( jsre, replace );
			if ( s.url === url ) {
				if ( inspectData ) {
					data = data.replace( jsre, replace );
				}
				if ( s.data === data ) {
					// Add callback manually
					url += (/\?/.test( url ) ? "&" : "?") + s.jsonp + "=" + jsonpCallback;
				}
			}
		}

		s.url = url;
		s.data = data;

		// Install callback
		window[ jsonpCallback ] = function( response ) {
			responseContainer = [ response ];
		};

		// Clean-up function
		jqXHR.always(function() {
			// Set callback back to previous value
			window[ jsonpCallback ] = previous;
			// Call if it was a function and we have a response
			if ( responseContainer && jQuery.isFunction( previous ) ) {
				window[ jsonpCallback ]( responseContainer[ 0 ] );
			}
		});

		// Use data converter to retrieve json after script execution
		s.converters["script json"] = function() {
			if ( !responseContainer ) {
				jQuery.error( jsonpCallback + " was not called" );
			}
			return responseContainer[ 0 ];
		};

		// force json dataType
		s.dataTypes[ 0 ] = "json";

		// Delegate to script
		return "script";
	}
});




// Install script dataType
jQuery.ajaxSetup({
	accepts: {
		script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
	},
	contents: {
		script: /javascript|ecmascript/
	},
	converters: {
		"text script": function( text ) {
			jQuery.globalEval( text );
			return text;
		}
	}
});

// Handle cache's special case and global
jQuery.ajaxPrefilter( "script", function( s ) {
	if ( s.cache === undefined ) {
		s.cache = false;
	}
	if ( s.crossDomain ) {
		s.type = "GET";
		s.global = false;
	}
});

// Bind script tag hack transport
jQuery.ajaxTransport( "script", function(s) {

	// This transport only deals with cross domain requests
	if ( s.crossDomain ) {

		var script,
			head = document.head || document.getElementsByTagName( "head" )[0] || document.documentElement;

		return {

			send: function( _, callback ) {

				script = document.createElement( "script" );

				script.async = "async";

				if ( s.scriptCharset ) {
					script.charset = s.scriptCharset;
				}

				script.src = s.url;

				// Attach handlers for all browsers
				script.onload = script.onreadystatechange = function( _, isAbort ) {

					if ( isAbort || !script.readyState || /loaded|complete/.test( script.readyState ) ) {

						// Handle memory leak in IE
						script.onload = script.onreadystatechange = null;

						// Remove the script
						if ( head && script.parentNode ) {
							head.removeChild( script );
						}

						// Dereference the script
						script = undefined;

						// Callback if not abort
						if ( !isAbort ) {
							callback( 200, "success" );
						}
					}
				};
				// Use insertBefore instead of appendChild  to circumvent an IE6 bug.
				// This arises when a base node is used (#2709 and #4378).
				head.insertBefore( script, head.firstChild );
			},

			abort: function() {
				if ( script ) {
					script.onload( 0, 1 );
				}
			}
		};
	}
});




var // #5280: Internet Explorer will keep connections alive if we don't abort on unload
	xhrOnUnloadAbort = window.ActiveXObject ? function() {
		// Abort all pending requests
		for ( var key in xhrCallbacks ) {
			xhrCallbacks[ key ]( 0, 1 );
		}
	} : false,
	xhrId = 0,
	xhrCallbacks;

// Functions to create xhrs
function createStandardXHR() {
	try {
		return new window.XMLHttpRequest();
	} catch( e ) {}
}

function createActiveXHR() {
	try {
		return new window.ActiveXObject( "Microsoft.XMLHTTP" );
	} catch( e ) {}
}

// Create the request object
// (This is still attached to ajaxSettings for backward compatibility)
jQuery.ajaxSettings.xhr = window.ActiveXObject ?
	/* Microsoft failed to properly
	 * implement the XMLHttpRequest in IE7 (can't request local files),
	 * so we use the ActiveXObject when it is available
	 * Additionally XMLHttpRequest can be disabled in IE7/IE8 so
	 * we need a fallback.
	 */
	function() {
		return !this.isLocal && createStandardXHR() || createActiveXHR();
	} :
	// For all other browsers, use the standard XMLHttpRequest object
	createStandardXHR;

// Determine support properties
(function( xhr ) {
	jQuery.extend( jQuery.support, {
		ajax: !!xhr,
		cors: !!xhr && ( "withCredentials" in xhr )
	});
})( jQuery.ajaxSettings.xhr() );

// Create transport if the browser can provide an xhr
if ( jQuery.support.ajax ) {

	jQuery.ajaxTransport(function( s ) {
		// Cross domain only allowed if supported through XMLHttpRequest
		if ( !s.crossDomain || jQuery.support.cors ) {

			var callback;

			return {
				send: function( headers, complete ) {

					// Get a new xhr
					var xhr = s.xhr(),
						handle,
						i;

					// Open the socket
					// Passing null username, generates a login popup on Opera (#2865)
					if ( s.username ) {
						xhr.open( s.type, s.url, s.async, s.username, s.password );
					} else {
						xhr.open( s.type, s.url, s.async );
					}

					// Apply custom fields if provided
					if ( s.xhrFields ) {
						for ( i in s.xhrFields ) {
							xhr[ i ] = s.xhrFields[ i ];
						}
					}

					// Override mime type if needed
					if ( s.mimeType && xhr.overrideMimeType ) {
						xhr.overrideMimeType( s.mimeType );
					}

					// X-Requested-With header
					// For cross-domain requests, seeing as conditions for a preflight are
					// akin to a jigsaw puzzle, we simply never set it to be sure.
					// (it can always be set on a per-request basis or even using ajaxSetup)
					// For same-domain requests, won't change header if already provided.
					if ( !s.crossDomain && !headers["X-Requested-With"] ) {
						headers[ "X-Requested-With" ] = "XMLHttpRequest";
					}

					// Need an extra try/catch for cross domain requests in Firefox 3
					try {
						for ( i in headers ) {
							xhr.setRequestHeader( i, headers[ i ] );
						}
					} catch( _ ) {}

					// Do send the request
					// This may raise an exception which is actually
					// handled in jQuery.ajax (so no try/catch here)
					xhr.send( ( s.hasContent && s.data ) || null );

					// Listener
					callback = function( _, isAbort ) {

						var status,
							statusText,
							responseHeaders,
							responses,
							xml;

						// Firefox throws exceptions when accessing properties
						// of an xhr when a network error occured
						// http://helpful.knobs-dials.com/index.php/Component_returned_failure_code:_0x80040111_(NS_ERROR_NOT_AVAILABLE)
						try {

							// Was never called and is aborted or complete
							if ( callback && ( isAbort || xhr.readyState === 4 ) ) {

								// Only called once
								callback = undefined;

								// Do not keep as active anymore
								if ( handle ) {
									xhr.onreadystatechange = jQuery.noop;
									if ( xhrOnUnloadAbort ) {
										delete xhrCallbacks[ handle ];
									}
								}

								// If it's an abort
								if ( isAbort ) {
									// Abort it manually if needed
									if ( xhr.readyState !== 4 ) {
										xhr.abort();
									}
								} else {
									status = xhr.status;
									responseHeaders = xhr.getAllResponseHeaders();
									responses = {};
									xml = xhr.responseXML;

									// Construct response list
									if ( xml && xml.documentElement /* #4958 */ ) {
										responses.xml = xml;
									}

									// When requesting binary data, IE6-9 will throw an exception
									// on any attempt to access responseText (#11426)
									try {
										responses.text = xhr.responseText;
									} catch( _ ) {
									}

									// Firefox throws an exception when accessing
									// statusText for faulty cross-domain requests
									try {
										statusText = xhr.statusText;
									} catch( e ) {
										// We normalize with Webkit giving an empty statusText
										statusText = "";
									}

									// Filter status for non standard behaviors

									// If the request is local and we have data: assume a success
									// (success with no data won't get notified, that's the best we
									// can do given current implementations)
									if ( !status && s.isLocal && !s.crossDomain ) {
										status = responses.text ? 200 : 404;
									// IE - #1450: sometimes returns 1223 when it should be 204
									} else if ( status === 1223 ) {
										status = 204;
									}
								}
							}
						} catch( firefoxAccessException ) {
							if ( !isAbort ) {
								complete( -1, firefoxAccessException );
							}
						}

						// Call complete if needed
						if ( responses ) {
							complete( status, statusText, responses, responseHeaders );
						}
					};

					// if we're in sync mode or it's in cache
					// and has been retrieved directly (IE6 & IE7)
					// we need to manually fire the callback
					if ( !s.async || xhr.readyState === 4 ) {
						callback();
					} else {
						handle = ++xhrId;
						if ( xhrOnUnloadAbort ) {
							// Create the active xhrs callbacks list if needed
							// and attach the unload handler
							if ( !xhrCallbacks ) {
								xhrCallbacks = {};
								jQuery( window ).unload( xhrOnUnloadAbort );
							}
							// Add to list of active xhrs callbacks
							xhrCallbacks[ handle ] = callback;
						}
						xhr.onreadystatechange = callback;
					}
				},

				abort: function() {
					if ( callback ) {
						callback(0,1);
					}
				}
			};
		}
	});
}




var elemdisplay = {},
	iframe, iframeDoc,
	rfxtypes = /^(?:toggle|show|hide)$/,
	rfxnum = /^([+\-]=)?([\d+.\-]+)([a-z%]*)$/i,
	timerId,
	fxAttrs = [
		// height animations
		[ "height", "marginTop", "marginBottom", "paddingTop", "paddingBottom" ],
		// width animations
		[ "width", "marginLeft", "marginRight", "paddingLeft", "paddingRight" ],
		// opacity animations
		[ "opacity" ]
	],
	fxNow;

jQuery.fn.extend({
	show: function( speed, easing, callback ) {
		var elem, display;

		if ( speed || speed === 0 ) {
			return this.animate( genFx("show", 3), speed, easing, callback );

		} else {
			for ( var i = 0, j = this.length; i < j; i++ ) {
				elem = this[ i ];

				if ( elem.style ) {
					display = elem.style.display;

					// Reset the inline display of this element to learn if it is
					// being hidden by cascaded rules or not
					if ( !jQuery._data(elem, "olddisplay") && display === "none" ) {
						display = elem.style.display = "";
					}

					// Set elements which have been overridden with display: none
					// in a stylesheet to whatever the default browser style is
					// for such an element
					if ( (display === "" && jQuery.css(elem, "display") === "none") ||
						!jQuery.contains( elem.ownerDocument.documentElement, elem ) ) {
						jQuery._data( elem, "olddisplay", defaultDisplay(elem.nodeName) );
					}
				}
			}

			// Set the display of most of the elements in a second loop
			// to avoid the constant reflow
			for ( i = 0; i < j; i++ ) {
				elem = this[ i ];

				if ( elem.style ) {
					display = elem.style.display;

					if ( display === "" || display === "none" ) {
						elem.style.display = jQuery._data( elem, "olddisplay" ) || "";
					}
				}
			}

			return this;
		}
	},

	hide: function( speed, easing, callback ) {
		if ( speed || speed === 0 ) {
			return this.animate( genFx("hide", 3), speed, easing, callback);

		} else {
			var elem, display,
				i = 0,
				j = this.length;

			for ( ; i < j; i++ ) {
				elem = this[i];
				if ( elem.style ) {
					display = jQuery.css( elem, "display" );

					if ( display !== "none" && !jQuery._data( elem, "olddisplay" ) ) {
						jQuery._data( elem, "olddisplay", display );
					}
				}
			}

			// Set the display of the elements in a second loop
			// to avoid the constant reflow
			for ( i = 0; i < j; i++ ) {
				if ( this[i].style ) {
					this[i].style.display = "none";
				}
			}

			return this;
		}
	},

	// Save the old toggle function
	_toggle: jQuery.fn.toggle,

	toggle: function( fn, fn2, callback ) {
		var bool = typeof fn === "boolean";

		if ( jQuery.isFunction(fn) && jQuery.isFunction(fn2) ) {
			this._toggle.apply( this, arguments );

		} else if ( fn == null || bool ) {
			this.each(function() {
				var state = bool ? fn : jQuery(this).is(":hidden");
				jQuery(this)[ state ? "show" : "hide" ]();
			});

		} else {
			this.animate(genFx("toggle", 3), fn, fn2, callback);
		}

		return this;
	},

	fadeTo: function( speed, to, easing, callback ) {
		return this.filter(":hidden").css("opacity", 0).show().end()
					.animate({opacity: to}, speed, easing, callback);
	},

	animate: function( prop, speed, easing, callback ) {
		var optall = jQuery.speed( speed, easing, callback );

		if ( jQuery.isEmptyObject( prop ) ) {
			return this.each( optall.complete, [ false ] );
		}

		// Do not change referenced properties as per-property easing will be lost
		prop = jQuery.extend( {}, prop );

		function doAnimation() {
			// XXX 'this' does not always have a nodeName when running the
			// test suite

			if ( optall.queue === false ) {
				jQuery._mark( this );
			}

			var opt = jQuery.extend( {}, optall ),
				isElement = this.nodeType === 1,
				hidden = isElement && jQuery(this).is(":hidden"),
				name, val, p, e, hooks, replace,
				parts, start, end, unit,
				method;

			// will store per property easing and be used to determine when an animation is complete
			opt.animatedProperties = {};

			// first pass over propertys to expand / normalize
			for ( p in prop ) {
				name = jQuery.camelCase( p );
				if ( p !== name ) {
					prop[ name ] = prop[ p ];
					delete prop[ p ];
				}

				if ( ( hooks = jQuery.cssHooks[ name ] ) && "expand" in hooks ) {
					replace = hooks.expand( prop[ name ] );
					delete prop[ name ];

					// not quite $.extend, this wont overwrite keys already present.
					// also - reusing 'p' from above because we have the correct "name"
					for ( p in replace ) {
						if ( ! ( p in prop ) ) {
							prop[ p ] = replace[ p ];
						}
					}
				}
			}

			for ( name in prop ) {
				val = prop[ name ];
				// easing resolution: per property > opt.specialEasing > opt.easing > 'swing' (default)
				if ( jQuery.isArray( val ) ) {
					opt.animatedProperties[ name ] = val[ 1 ];
					val = prop[ name ] = val[ 0 ];
				} else {
					opt.animatedProperties[ name ] = opt.specialEasing && opt.specialEasing[ name ] || opt.easing || 'swing';
				}

				if ( val === "hide" && hidden || val === "show" && !hidden ) {
					return opt.complete.call( this );
				}

				if ( isElement && ( name === "height" || name === "width" ) ) {
					// Make sure that nothing sneaks out
					// Record all 3 overflow attributes because IE does not
					// change the overflow attribute when overflowX and
					// overflowY are set to the same value
					opt.overflow = [ this.style.overflow, this.style.overflowX, this.style.overflowY ];

					// Set display property to inline-block for height/width
					// animations on inline elements that are having width/height animated
					if ( jQuery.css( this, "display" ) === "inline" &&
							jQuery.css( this, "float" ) === "none" ) {

						// inline-level elements accept inline-block;
						// block-level elements need to be inline with layout
						if ( !jQuery.support.inlineBlockNeedsLayout || defaultDisplay( this.nodeName ) === "inline" ) {
							this.style.display = "inline-block";

						} else {
							this.style.zoom = 1;
						}
					}
				}
			}

			if ( opt.overflow != null ) {
				this.style.overflow = "hidden";
			}

			for ( p in prop ) {
				e = new jQuery.fx( this, opt, p );
				val = prop[ p ];

				if ( rfxtypes.test( val ) ) {

					// Tracks whether to show or hide based on private
					// data attached to the element
					method = jQuery._data( this, "toggle" + p ) || ( val === "toggle" ? hidden ? "show" : "hide" : 0 );
					if ( method ) {
						jQuery._data( this, "toggle" + p, method === "show" ? "hide" : "show" );
						e[ method ]();
					} else {
						e[ val ]();
					}

				} else {
					parts = rfxnum.exec( val );
					start = e.cur();

					if ( parts ) {
						end = parseFloat( parts[2] );
						unit = parts[3] || ( jQuery.cssNumber[ p ] ? "" : "px" );

						// We need to compute starting value
						if ( unit !== "px" ) {
							jQuery.style( this, p, (end || 1) + unit);
							start = ( (end || 1) / e.cur() ) * start;
							jQuery.style( this, p, start + unit);
						}

						// If a +=/-= token was provided, we're doing a relative animation
						if ( parts[1] ) {
							end = ( (parts[ 1 ] === "-=" ? -1 : 1) * end ) + start;
						}

						e.custom( start, end, unit );

					} else {
						e.custom( start, val, "" );
					}
				}
			}

			// For JS strict compliance
			return true;
		}

		return optall.queue === false ?
			this.each( doAnimation ) :
			this.queue( optall.queue, doAnimation );
	},

	stop: function( type, clearQueue, gotoEnd ) {
		if ( typeof type !== "string" ) {
			gotoEnd = clearQueue;
			clearQueue = type;
			type = undefined;
		}
		if ( clearQueue && type !== false ) {
			this.queue( type || "fx", [] );
		}

		return this.each(function() {
			var index,
				hadTimers = false,
				timers = jQuery.timers,
				data = jQuery._data( this );

			// clear marker counters if we know they won't be
			if ( !gotoEnd ) {
				jQuery._unmark( true, this );
			}

			function stopQueue( elem, data, index ) {
				var hooks = data[ index ];
				jQuery.removeData( elem, index, true );
				hooks.stop( gotoEnd );
			}

			if ( type == null ) {
				for ( index in data ) {
					if ( data[ index ] && data[ index ].stop && index.indexOf(".run") === index.length - 4 ) {
						stopQueue( this, data, index );
					}
				}
			} else if ( data[ index = type + ".run" ] && data[ index ].stop ){
				stopQueue( this, data, index );
			}

			for ( index = timers.length; index--; ) {
				if ( timers[ index ].elem === this && (type == null || timers[ index ].queue === type) ) {
					if ( gotoEnd ) {

						// force the next step to be the last
						timers[ index ]( true );
					} else {
						timers[ index ].saveState();
					}
					hadTimers = true;
					timers.splice( index, 1 );
				}
			}

			// start the next in the queue if the last step wasn't forced
			// timers currently will call their complete callbacks, which will dequeue
			// but only if they were gotoEnd
			if ( !( gotoEnd && hadTimers ) ) {
				jQuery.dequeue( this, type );
			}
		});
	}

});

// Animations created synchronously will run synchronously
function createFxNow() {
	setTimeout( clearFxNow, 0 );
	return ( fxNow = jQuery.now() );
}

function clearFxNow() {
	fxNow = undefined;
}

// Generate parameters to create a standard animation
function genFx( type, num ) {
	var obj = {};

	jQuery.each( fxAttrs.concat.apply([], fxAttrs.slice( 0, num )), function() {
		obj[ this ] = type;
	});

	return obj;
}

// Generate shortcuts for custom animations
jQuery.each({
	slideDown: genFx( "show", 1 ),
	slideUp: genFx( "hide", 1 ),
	slideToggle: genFx( "toggle", 1 ),
	fadeIn: { opacity: "show" },
	fadeOut: { opacity: "hide" },
	fadeToggle: { opacity: "toggle" }
}, function( name, props ) {
	jQuery.fn[ name ] = function( speed, easing, callback ) {
		return this.animate( props, speed, easing, callback );
	};
});

jQuery.extend({
	speed: function( speed, easing, fn ) {
		var opt = speed && typeof speed === "object" ? jQuery.extend( {}, speed ) : {
			complete: fn || !fn && easing ||
				jQuery.isFunction( speed ) && speed,
			duration: speed,
			easing: fn && easing || easing && !jQuery.isFunction( easing ) && easing
		};

		opt.duration = jQuery.fx.off ? 0 : typeof opt.duration === "number" ? opt.duration :
			opt.duration in jQuery.fx.speeds ? jQuery.fx.speeds[ opt.duration ] : jQuery.fx.speeds._default;

		// normalize opt.queue - true/undefined/null -> "fx"
		if ( opt.queue == null || opt.queue === true ) {
			opt.queue = "fx";
		}

		// Queueing
		opt.old = opt.complete;

		opt.complete = function( noUnmark ) {
			if ( jQuery.isFunction( opt.old ) ) {
				opt.old.call( this );
			}

			if ( opt.queue ) {
				jQuery.dequeue( this, opt.queue );
			} else if ( noUnmark !== false ) {
				jQuery._unmark( this );
			}
		};

		return opt;
	},

	easing: {
		linear: function( p ) {
			return p;
		},
		swing: function( p ) {
			return ( -Math.cos( p*Math.PI ) / 2 ) + 0.5;
		}
	},

	timers: [],

	fx: function( elem, options, prop ) {
		this.options = options;
		this.elem = elem;
		this.prop = prop;

		options.orig = options.orig || {};
	}

});

jQuery.fx.prototype = {
	// Simple function for setting a style value
	update: function() {
		if ( this.options.step ) {
			this.options.step.call( this.elem, this.now, this );
		}

		( jQuery.fx.step[ this.prop ] || jQuery.fx.step._default )( this );
	},

	// Get the current size
	cur: function() {
		if ( this.elem[ this.prop ] != null && (!this.elem.style || this.elem.style[ this.prop ] == null) ) {
			return this.elem[ this.prop ];
		}

		var parsed,
			r = jQuery.css( this.elem, this.prop );
		// Empty strings, null, undefined and "auto" are converted to 0,
		// complex values such as "rotate(1rad)" are returned as is,
		// simple values such as "10px" are parsed to Float.
		return isNaN( parsed = parseFloat( r ) ) ? !r || r === "auto" ? 0 : r : parsed;
	},

	// Start an animation from one number to another
	custom: function( from, to, unit ) {
		var self = this,
			fx = jQuery.fx;

		this.startTime = fxNow || createFxNow();
		this.end = to;
		this.now = this.start = from;
		this.pos = this.state = 0;
		this.unit = unit || this.unit || ( jQuery.cssNumber[ this.prop ] ? "" : "px" );

		function t( gotoEnd ) {
			return self.step( gotoEnd );
		}

		t.queue = this.options.queue;
		t.elem = this.elem;
		t.saveState = function() {
			if ( jQuery._data( self.elem, "fxshow" + self.prop ) === undefined ) {
				if ( self.options.hide ) {
					jQuery._data( self.elem, "fxshow" + self.prop, self.start );
				} else if ( self.options.show ) {
					jQuery._data( self.elem, "fxshow" + self.prop, self.end );
				}
			}
		};

		if ( t() && jQuery.timers.push(t) && !timerId ) {
			timerId = setInterval( fx.tick, fx.interval );
		}
	},

	// Simple 'show' function
	show: function() {
		var dataShow = jQuery._data( this.elem, "fxshow" + this.prop );

		// Remember where we started, so that we can go back to it later
		this.options.orig[ this.prop ] = dataShow || jQuery.style( this.elem, this.prop );
		this.options.show = true;

		// Begin the animation
		// Make sure that we start at a small width/height to avoid any flash of content
		if ( dataShow !== undefined ) {
			// This show is picking up where a previous hide or show left off
			this.custom( this.cur(), dataShow );
		} else {
			this.custom( this.prop === "width" || this.prop === "height" ? 1 : 0, this.cur() );
		}

		// Start by showing the element
		jQuery( this.elem ).show();
	},

	// Simple 'hide' function
	hide: function() {
		// Remember where we started, so that we can go back to it later
		this.options.orig[ this.prop ] = jQuery._data( this.elem, "fxshow" + this.prop ) || jQuery.style( this.elem, this.prop );
		this.options.hide = true;

		// Begin the animation
		this.custom( this.cur(), 0 );
	},

	// Each step of an animation
	step: function( gotoEnd ) {
		var p, n, complete,
			t = fxNow || createFxNow(),
			done = true,
			elem = this.elem,
			options = this.options;

		if ( gotoEnd || t >= options.duration + this.startTime ) {
			this.now = this.end;
			this.pos = this.state = 1;
			this.update();

			options.animatedProperties[ this.prop ] = true;

			for ( p in options.animatedProperties ) {
				if ( options.animatedProperties[ p ] !== true ) {
					done = false;
				}
			}

			if ( done ) {
				// Reset the overflow
				if ( options.overflow != null && !jQuery.support.shrinkWrapBlocks ) {

					jQuery.each( [ "", "X", "Y" ], function( index, value ) {
						elem.style[ "overflow" + value ] = options.overflow[ index ];
					});
				}

				// Hide the element if the "hide" operation was done
				if ( options.hide ) {
					jQuery( elem ).hide();
				}

				// Reset the properties, if the item has been hidden or shown
				if ( options.hide || options.show ) {
					for ( p in options.animatedProperties ) {
						jQuery.style( elem, p, options.orig[ p ] );
						jQuery.removeData( elem, "fxshow" + p, true );
						// Toggle data is no longer needed
						jQuery.removeData( elem, "toggle" + p, true );
					}
				}

				// Execute the complete function
				// in the event that the complete function throws an exception
				// we must ensure it won't be called twice. #5684

				complete = options.complete;
				if ( complete ) {

					options.complete = false;
					complete.call( elem );
				}
			}

			return false;

		} else {
			// classical easing cannot be used with an Infinity duration
			if ( options.duration == Infinity ) {
				this.now = t;
			} else {
				n = t - this.startTime;
				this.state = n / options.duration;

				// Perform the easing function, defaults to swing
				this.pos = jQuery.easing[ options.animatedProperties[this.prop] ]( this.state, n, 0, 1, options.duration );
				this.now = this.start + ( (this.end - this.start) * this.pos );
			}
			// Perform the next step of the animation
			this.update();
		}

		return true;
	}
};

jQuery.extend( jQuery.fx, {
	tick: function() {
		var timer,
			timers = jQuery.timers,
			i = 0;

		for ( ; i < timers.length; i++ ) {
			timer = timers[ i ];
			// Checks the timer has not already been removed
			if ( !timer() && timers[ i ] === timer ) {
				timers.splice( i--, 1 );
			}
		}

		if ( !timers.length ) {
			jQuery.fx.stop();
		}
	},

	interval: 13,

	stop: function() {
		clearInterval( timerId );
		timerId = null;
	},

	speeds: {
		slow: 600,
		fast: 200,
		// Default speed
		_default: 400
	},

	step: {
		opacity: function( fx ) {
			jQuery.style( fx.elem, "opacity", fx.now );
		},

		_default: function( fx ) {
			if ( fx.elem.style && fx.elem.style[ fx.prop ] != null ) {
				fx.elem.style[ fx.prop ] = fx.now + fx.unit;
			} else {
				fx.elem[ fx.prop ] = fx.now;
			}
		}
	}
});

// Ensure props that can't be negative don't go there on undershoot easing
jQuery.each( fxAttrs.concat.apply( [], fxAttrs ), function( i, prop ) {
	// exclude marginTop, marginLeft, marginBottom and marginRight from this list
	if ( prop.indexOf( "margin" ) ) {
		jQuery.fx.step[ prop ] = function( fx ) {
			jQuery.style( fx.elem, prop, Math.max(0, fx.now) + fx.unit );
		};
	}
});

if ( jQuery.expr && jQuery.expr.filters ) {
	jQuery.expr.filters.animated = function( elem ) {
		return jQuery.grep(jQuery.timers, function( fn ) {
			return elem === fn.elem;
		}).length;
	};
}

// Try to restore the default display value of an element
function defaultDisplay( nodeName ) {

	if ( !elemdisplay[ nodeName ] ) {

		var body = document.body,
			elem = jQuery( "<" + nodeName + ">" ).appendTo( body ),
			display = elem.css( "display" );
		elem.remove();

		// If the simple way fails,
		// get element's real default display by attaching it to a temp iframe
		if ( display === "none" || display === "" ) {
			// No iframe to use yet, so create it
			if ( !iframe ) {
				iframe = document.createElement( "iframe" );
				iframe.frameBorder = iframe.width = iframe.height = 0;
			}

			body.appendChild( iframe );

			// Create a cacheable copy of the iframe document on first call.
			// IE and Opera will allow us to reuse the iframeDoc without re-writing the fake HTML
			// document to it; WebKit & Firefox won't allow reusing the iframe document.
			if ( !iframeDoc || !iframe.createElement ) {
				iframeDoc = ( iframe.contentWindow || iframe.contentDocument ).document;
				iframeDoc.write( ( jQuery.support.boxModel ? "<!doctype html>" : "" ) + "<html><body>" );
				iframeDoc.close();
			}

			elem = iframeDoc.createElement( nodeName );

			iframeDoc.body.appendChild( elem );

			display = jQuery.css( elem, "display" );
			body.removeChild( iframe );
		}

		// Store the correct default display
		elemdisplay[ nodeName ] = display;
	}

	return elemdisplay[ nodeName ];
}




var getOffset,
	rtable = /^t(?:able|d|h)$/i,
	rroot = /^(?:body|html)$/i;

if ( "getBoundingClientRect" in document.documentElement ) {
	getOffset = function( elem, doc, docElem, box ) {
		try {
			box = elem.getBoundingClientRect();
		} catch(e) {}

		// Make sure we're not dealing with a disconnected DOM node
		if ( !box || !jQuery.contains( docElem, elem ) ) {
			return box ? { top: box.top, left: box.left } : { top: 0, left: 0 };
		}

		var body = doc.body,
			win = getWindow( doc ),
			clientTop  = docElem.clientTop  || body.clientTop  || 0,
			clientLeft = docElem.clientLeft || body.clientLeft || 0,
			scrollTop  = win.pageYOffset || jQuery.support.boxModel && docElem.scrollTop  || body.scrollTop,
			scrollLeft = win.pageXOffset || jQuery.support.boxModel && docElem.scrollLeft || body.scrollLeft,
			top  = box.top  + scrollTop  - clientTop,
			left = box.left + scrollLeft - clientLeft;

		return { top: top, left: left };
	};

} else {
	getOffset = function( elem, doc, docElem ) {
		var computedStyle,
			offsetParent = elem.offsetParent,
			prevOffsetParent = elem,
			body = doc.body,
			defaultView = doc.defaultView,
			prevComputedStyle = defaultView ? defaultView.getComputedStyle( elem, null ) : elem.currentStyle,
			top = elem.offsetTop,
			left = elem.offsetLeft;

		while ( (elem = elem.parentNode) && elem !== body && elem !== docElem ) {
			if ( jQuery.support.fixedPosition && prevComputedStyle.position === "fixed" ) {
				break;
			}

			computedStyle = defaultView ? defaultView.getComputedStyle(elem, null) : elem.currentStyle;
			top  -= elem.scrollTop;
			left -= elem.scrollLeft;

			if ( elem === offsetParent ) {
				top  += elem.offsetTop;
				left += elem.offsetLeft;

				if ( jQuery.support.doesNotAddBorder && !(jQuery.support.doesAddBorderForTableAndCells && rtable.test(elem.nodeName)) ) {
					top  += parseFloat( computedStyle.borderTopWidth  ) || 0;
					left += parseFloat( computedStyle.borderLeftWidth ) || 0;
				}

				prevOffsetParent = offsetParent;
				offsetParent = elem.offsetParent;
			}

			if ( jQuery.support.subtractsBorderForOverflowNotVisible && computedStyle.overflow !== "visible" ) {
				top  += parseFloat( computedStyle.borderTopWidth  ) || 0;
				left += parseFloat( computedStyle.borderLeftWidth ) || 0;
			}

			prevComputedStyle = computedStyle;
		}

		if ( prevComputedStyle.position === "relative" || prevComputedStyle.position === "static" ) {
			top  += body.offsetTop;
			left += body.offsetLeft;
		}

		if ( jQuery.support.fixedPosition && prevComputedStyle.position === "fixed" ) {
			top  += Math.max( docElem.scrollTop, body.scrollTop );
			left += Math.max( docElem.scrollLeft, body.scrollLeft );
		}

		return { top: top, left: left };
	};
}

jQuery.fn.offset = function( options ) {
	if ( arguments.length ) {
		return options === undefined ?
			this :
			this.each(function( i ) {
				jQuery.offset.setOffset( this, options, i );
			});
	}

	var elem = this[0],
		doc = elem && elem.ownerDocument;

	if ( !doc ) {
		return null;
	}

	if ( elem === doc.body ) {
		return jQuery.offset.bodyOffset( elem );
	}

	return getOffset( elem, doc, doc.documentElement );
};

jQuery.offset = {

	bodyOffset: function( body ) {
		var top = body.offsetTop,
			left = body.offsetLeft;

		if ( jQuery.support.doesNotIncludeMarginInBodyOffset ) {
			top  += parseFloat( jQuery.css(body, "marginTop") ) || 0;
			left += parseFloat( jQuery.css(body, "marginLeft") ) || 0;
		}

		return { top: top, left: left };
	},

	setOffset: function( elem, options, i ) {
		var position = jQuery.css( elem, "position" );

		// set position first, in-case top/left are set even on static elem
		if ( position === "static" ) {
			elem.style.position = "relative";
		}

		var curElem = jQuery( elem ),
			curOffset = curElem.offset(),
			curCSSTop = jQuery.css( elem, "top" ),
			curCSSLeft = jQuery.css( elem, "left" ),
			calculatePosition = ( position === "absolute" || position === "fixed" ) && jQuery.inArray("auto", [curCSSTop, curCSSLeft]) > -1,
			props = {}, curPosition = {}, curTop, curLeft;

		// need to be able to calculate position if either top or left is auto and position is either absolute or fixed
		if ( calculatePosition ) {
			curPosition = curElem.position();
			curTop = curPosition.top;
			curLeft = curPosition.left;
		} else {
			curTop = parseFloat( curCSSTop ) || 0;
			curLeft = parseFloat( curCSSLeft ) || 0;
		}

		if ( jQuery.isFunction( options ) ) {
			options = options.call( elem, i, curOffset );
		}

		if ( options.top != null ) {
			props.top = ( options.top - curOffset.top ) + curTop;
		}
		if ( options.left != null ) {
			props.left = ( options.left - curOffset.left ) + curLeft;
		}

		if ( "using" in options ) {
			options.using.call( elem, props );
		} else {
			curElem.css( props );
		}
	}
};


jQuery.fn.extend({

	position: function() {
		if ( !this[0] ) {
			return null;
		}

		var elem = this[0],

		// Get *real* offsetParent
		offsetParent = this.offsetParent(),

		// Get correct offsets
		offset       = this.offset(),
		parentOffset = rroot.test(offsetParent[0].nodeName) ? { top: 0, left: 0 } : offsetParent.offset();

		// Subtract element margins
		// note: when an element has margin: auto the offsetLeft and marginLeft
		// are the same in Safari causing offset.left to incorrectly be 0
		offset.top  -= parseFloat( jQuery.css(elem, "marginTop") ) || 0;
		offset.left -= parseFloat( jQuery.css(elem, "marginLeft") ) || 0;

		// Add offsetParent borders
		parentOffset.top  += parseFloat( jQuery.css(offsetParent[0], "borderTopWidth") ) || 0;
		parentOffset.left += parseFloat( jQuery.css(offsetParent[0], "borderLeftWidth") ) || 0;

		// Subtract the two offsets
		return {
			top:  offset.top  - parentOffset.top,
			left: offset.left - parentOffset.left
		};
	},

	offsetParent: function() {
		return this.map(function() {
			var offsetParent = this.offsetParent || document.body;
			while ( offsetParent && (!rroot.test(offsetParent.nodeName) && jQuery.css(offsetParent, "position") === "static") ) {
				offsetParent = offsetParent.offsetParent;
			}
			return offsetParent;
		});
	}
});


// Create scrollLeft and scrollTop methods
jQuery.each( {scrollLeft: "pageXOffset", scrollTop: "pageYOffset"}, function( method, prop ) {
	var top = /Y/.test( prop );

	jQuery.fn[ method ] = function( val ) {
		return jQuery.access( this, function( elem, method, val ) {
			var win = getWindow( elem );

			if ( val === undefined ) {
				return win ? (prop in win) ? win[ prop ] :
					jQuery.support.boxModel && win.document.documentElement[ method ] ||
						win.document.body[ method ] :
					elem[ method ];
			}

			if ( win ) {
				win.scrollTo(
					!top ? val : jQuery( win ).scrollLeft(),
					 top ? val : jQuery( win ).scrollTop()
				);

			} else {
				elem[ method ] = val;
			}
		}, method, val, arguments.length, null );
	};
});

function getWindow( elem ) {
	return jQuery.isWindow( elem ) ?
		elem :
		elem.nodeType === 9 ?
			elem.defaultView || elem.parentWindow :
			false;
}




// Create width, height, innerHeight, innerWidth, outerHeight and outerWidth methods
jQuery.each( { Height: "height", Width: "width" }, function( name, type ) {
	var clientProp = "client" + name,
		scrollProp = "scroll" + name,
		offsetProp = "offset" + name;

	// innerHeight and innerWidth
	jQuery.fn[ "inner" + name ] = function() {
		var elem = this[0];
		return elem ?
			elem.style ?
			parseFloat( jQuery.css( elem, type, "padding" ) ) :
			this[ type ]() :
			null;
	};

	// outerHeight and outerWidth
	jQuery.fn[ "outer" + name ] = function( margin ) {
		var elem = this[0];
		return elem ?
			elem.style ?
			parseFloat( jQuery.css( elem, type, margin ? "margin" : "border" ) ) :
			this[ type ]() :
			null;
	};

	jQuery.fn[ type ] = function( value ) {
		return jQuery.access( this, function( elem, type, value ) {
			var doc, docElemProp, orig, ret;

			if ( jQuery.isWindow( elem ) ) {
				// 3rd condition allows Nokia support, as it supports the docElem prop but not CSS1Compat
				doc = elem.document;
				docElemProp = doc.documentElement[ clientProp ];
				return jQuery.support.boxModel && docElemProp ||
					doc.body && doc.body[ clientProp ] || docElemProp;
			}

			// Get document width or height
			if ( elem.nodeType === 9 ) {
				// Either scroll[Width/Height] or offset[Width/Height], whichever is greater
				doc = elem.documentElement;

				// when a window > document, IE6 reports a offset[Width/Height] > client[Width/Height]
				// so we can't use max, as it'll choose the incorrect offset[Width/Height]
				// instead we use the correct client[Width/Height]
				// support:IE6
				if ( doc[ clientProp ] >= doc[ scrollProp ] ) {
					return doc[ clientProp ];
				}

				return Math.max(
					elem.body[ scrollProp ], doc[ scrollProp ],
					elem.body[ offsetProp ], doc[ offsetProp ]
				);
			}

			// Get width or height on the element
			if ( value === undefined ) {
				orig = jQuery.css( elem, type );
				ret = parseFloat( orig );
				return jQuery.isNumeric( ret ) ? ret : orig;
			}

			// Set the width or height on the element
			jQuery( elem ).css( type, value );
		}, type, value, arguments.length, null );
	};
});




// Expose jQuery to the global object
window.jQuery = window.$ = jQuery;

// Expose jQuery as an AMD module, but only for AMD loaders that
// understand the issues with loading multiple versions of jQuery
// in a page that all might call define(). The loader will indicate
// they have special allowances for multiple jQuery versions by
// specifying define.amd.jQuery = true. Register as a named module,
// since jQuery can be concatenated with other files that may use define,
// but not use a proper concatenation script that understands anonymous
// AMD modules. A named AMD is safest and most robust way to register.
// Lowercase jquery is used because AMD module names are derived from
// file names, and jQuery is normally delivered in a lowercase file name.
// Do this after creating the global so that if an AMD module wants to call
// noConflict to hide this version of jQuery, it will work.
if ( typeof define === "function" && define.amd && define.amd.jQuery ) {
	define( "jquery", [], function () { return jQuery; } );
}



})( window );
jQuery.cookie=function(key,value,options){if(arguments.length>1&&String(value)!=="[object Object]"){options=jQuery.extend({},options);if(value===null||value===undefined){options.expires=-1;}if(typeof options.expires==='number'){var days=options.expires,t=options.expires=new Date();t.setDate(t.getDate()+days);}value=String(value);return(document.cookie=[encodeURIComponent(key),'=',options.raw?value:encodeURIComponent(value),options.expires?'; expires='+options.expires.toUTCString():'',options.path?'; path='+options.path:'',options.domain?'; domain='+options.domain:'',options.secure?'; secure':''].join(''));}options=value||{};var result,decode=options.raw?function(s){return s;}:decodeURIComponent;return(result=new RegExp('(?:^|; )'+encodeURIComponent(key)+'=([^;]*)').exec(document.cookie))?decode(result[1]):null;};
/*
 * jQuery UI 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI
 */
(function(a,d){a.ui=a.ui||{};if(a.ui.version){return}a.extend(a.ui,{version:"1.8.21",keyCode:{ALT:18,BACKSPACE:8,CAPS_LOCK:20,COMMA:188,COMMAND:91,COMMAND_LEFT:91,COMMAND_RIGHT:93,CONTROL:17,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,INSERT:45,LEFT:37,MENU:93,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SHIFT:16,SPACE:32,TAB:9,UP:38,WINDOWS:91}});a.fn.extend({propAttr:a.fn.prop||a.fn.attr,_focus:a.fn.focus,focus:function(e,f){return typeof e==="number"?this.each(function(){var g=this;setTimeout(function(){a(g).focus();if(f){f.call(g)}},e)}):this._focus.apply(this,arguments)},scrollParent:function(){var e;if((a.browser.msie&&(/(static|relative)/).test(this.css("position")))||(/absolute/).test(this.css("position"))){e=this.parents().filter(function(){return(/(relative|absolute|fixed)/).test(a.curCSS(this,"position",1))&&(/(auto|scroll)/).test(a.curCSS(this,"overflow",1)+a.curCSS(this,"overflow-y",1)+a.curCSS(this,"overflow-x",1))}).eq(0)}else{e=this.parents().filter(function(){return(/(auto|scroll)/).test(a.curCSS(this,"overflow",1)+a.curCSS(this,"overflow-y",1)+a.curCSS(this,"overflow-x",1))}).eq(0)}return(/fixed/).test(this.css("position"))||!e.length?a(document):e},zIndex:function(h){if(h!==d){return this.css("zIndex",h)}if(this.length){var f=a(this[0]),e,g;while(f.length&&f[0]!==document){e=f.css("position");if(e==="absolute"||e==="relative"||e==="fixed"){g=parseInt(f.css("zIndex"),10);if(!isNaN(g)&&g!==0){return g}}f=f.parent()}}return 0},disableSelection:function(){return this.bind((a.support.selectstart?"selectstart":"mousedown")+".ui-disableSelection",function(e){e.preventDefault()})},enableSelection:function(){return this.unbind(".ui-disableSelection")}});a.each(["Width","Height"],function(g,e){var f=e==="Width"?["Left","Right"]:["Top","Bottom"],h=e.toLowerCase(),k={innerWidth:a.fn.innerWidth,innerHeight:a.fn.innerHeight,outerWidth:a.fn.outerWidth,outerHeight:a.fn.outerHeight};function j(m,l,i,n){a.each(f,function(){l-=parseFloat(a.curCSS(m,"padding"+this,true))||0;if(i){l-=parseFloat(a.curCSS(m,"border"+this+"Width",true))||0}if(n){l-=parseFloat(a.curCSS(m,"margin"+this,true))||0}});return l}a.fn["inner"+e]=function(i){if(i===d){return k["inner"+e].call(this)}return this.each(function(){a(this).css(h,j(this,i)+"px")})};a.fn["outer"+e]=function(i,l){if(typeof i!=="number"){return k["outer"+e].call(this,i)}return this.each(function(){a(this).css(h,j(this,i,true,l)+"px")})}});function c(g,e){var j=g.nodeName.toLowerCase();if("area"===j){var i=g.parentNode,h=i.name,f;if(!g.href||!h||i.nodeName.toLowerCase()!=="map"){return false}f=a("img[usemap=#"+h+"]")[0];return !!f&&b(f)}return(/input|select|textarea|button|object/.test(j)?!g.disabled:"a"==j?g.href||e:e)&&b(g)}function b(e){return !a(e).parents().andSelf().filter(function(){return a.curCSS(this,"visibility")==="hidden"||a.expr.filters.hidden(this)}).length}a.extend(a.expr[":"],{data:function(g,f,e){return !!a.data(g,e[3])},focusable:function(e){return c(e,!isNaN(a.attr(e,"tabindex")))},tabbable:function(g){var e=a.attr(g,"tabindex"),f=isNaN(e);return(f||e>=0)&&c(g,!f)}});a(function(){var e=document.body,f=e.appendChild(f=document.createElement("div"));f.offsetHeight;a.extend(f.style,{minHeight:"100px",height:"auto",padding:0,borderWidth:0});a.support.minHeight=f.offsetHeight===100;a.support.selectstart="onselectstart" in f;e.removeChild(f).style.display="none"});a.extend(a.ui,{plugin:{add:function(f,g,j){var h=a.ui[f].prototype;for(var e in j){h.plugins[e]=h.plugins[e]||[];h.plugins[e].push([g,j[e]])}},call:function(e,g,f){var j=e.plugins[g];if(!j||!e.element[0].parentNode){return}for(var h=0;h<j.length;h++){if(e.options[j[h][0]]){j[h][1].apply(e.element,f)}}}},contains:function(f,e){return document.compareDocumentPosition?f.compareDocumentPosition(e)&16:f!==e&&f.contains(e)},hasScroll:function(h,f){if(a(h).css("overflow")==="hidden"){return false}var e=(f&&f==="left")?"scrollLeft":"scrollTop",g=false;if(h[e]>0){return true}h[e]=1;g=(h[e]>0);h[e]=0;return g},isOverAxis:function(f,e,g){return(f>e)&&(f<(e+g))},isOver:function(j,f,i,h,e,g){return a.ui.isOverAxis(j,i,e)&&a.ui.isOverAxis(f,h,g)}})})(jQuery);
/*
 * jQuery UI Widget 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Widget
 */
(function(b,d){if(b.cleanData){var c=b.cleanData;b.cleanData=function(f){for(var g=0,h;(h=f[g])!=null;g++){try{b(h).triggerHandler("remove")}catch(j){}}c(f)}}else{var a=b.fn.remove;b.fn.remove=function(e,f){return this.each(function(){if(!f){if(!e||b.filter(e,[this]).length){b("*",this).add([this]).each(function(){try{b(this).triggerHandler("remove")}catch(g){}})}}return a.call(b(this),e,f)})}}b.widget=function(f,h,e){var g=f.split(".")[0],j;f=f.split(".")[1];j=g+"-"+f;if(!e){e=h;h=b.Widget}b.expr[":"][j]=function(k){return !!b.data(k,f)};b[g]=b[g]||{};b[g][f]=function(k,l){if(arguments.length){this._createWidget(k,l)}};var i=new h();i.options=b.extend(true,{},i.options);b[g][f].prototype=b.extend(true,i,{namespace:g,widgetName:f,widgetEventPrefix:b[g][f].prototype.widgetEventPrefix||f,widgetBaseClass:j},e);b.widget.bridge(f,b[g][f])};b.widget.bridge=function(f,e){b.fn[f]=function(i){var g=typeof i==="string",h=Array.prototype.slice.call(arguments,1),j=this;i=!g&&h.length?b.extend.apply(null,[true,i].concat(h)):i;if(g&&i.charAt(0)==="_"){return j}if(g){this.each(function(){var k=b.data(this,f),l=k&&b.isFunction(k[i])?k[i].apply(k,h):k;if(l!==k&&l!==d){j=l;return false}})}else{this.each(function(){var k=b.data(this,f);if(k){k.option(i||{})._init()}else{b.data(this,f,new e(i,this))}})}return j}};b.Widget=function(e,f){if(arguments.length){this._createWidget(e,f)}};b.Widget.prototype={widgetName:"widget",widgetEventPrefix:"",options:{disabled:false},_createWidget:function(f,g){b.data(g,this.widgetName,this);this.element=b(g);this.options=b.extend(true,{},this.options,this._getCreateOptions(),f);var e=this;this.element.bind("remove."+this.widgetName,function(){e.destroy()});this._create();this._trigger("create");this._init()},_getCreateOptions:function(){return b.metadata&&b.metadata.get(this.element[0])[this.widgetName]},_create:function(){},_init:function(){},destroy:function(){this.element.unbind("."+this.widgetName).removeData(this.widgetName);this.widget().unbind("."+this.widgetName).removeAttr("aria-disabled").removeClass(this.widgetBaseClass+"-disabled ui-state-disabled")},widget:function(){return this.element},option:function(f,g){var e=f;if(arguments.length===0){return b.extend({},this.options)}if(typeof f==="string"){if(g===d){return this.options[f]}e={};e[f]=g}this._setOptions(e);return this},_setOptions:function(f){var e=this;b.each(f,function(g,h){e._setOption(g,h)});return this},_setOption:function(e,f){this.options[e]=f;if(e==="disabled"){this.widget()[f?"addClass":"removeClass"](this.widgetBaseClass+"-disabled ui-state-disabled").attr("aria-disabled",f)}return this},enable:function(){return this._setOption("disabled",false)},disable:function(){return this._setOption("disabled",true)},_trigger:function(e,f,g){var j,i,h=this.options[e];g=g||{};f=b.Event(f);f.type=(e===this.widgetEventPrefix?e:this.widgetEventPrefix+e).toLowerCase();f.target=this.element[0];i=f.originalEvent;if(i){for(j in i){if(!(j in f)){f[j]=i[j]}}}this.element.trigger(f,g);return !(b.isFunction(h)&&h.call(this.element[0],f,g)===false||f.isDefaultPrevented())}}})(jQuery);
/*
 * jQuery UI Mouse 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Mouse
 *
 * Depends:
 *	jquery.ui.widget.js
 */
(function(b,c){var a=false;b(document).mouseup(function(d){a=false});b.widget("ui.mouse",{options:{cancel:":input,option",distance:1,delay:0},_mouseInit:function(){var d=this;this.element.bind("mousedown."+this.widgetName,function(e){return d._mouseDown(e)}).bind("click."+this.widgetName,function(e){if(true===b.data(e.target,d.widgetName+".preventClickEvent")){b.removeData(e.target,d.widgetName+".preventClickEvent");e.stopImmediatePropagation();return false}});this.started=false},_mouseDestroy:function(){this.element.unbind("."+this.widgetName);b(document).unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate)},_mouseDown:function(f){if(a){return}(this._mouseStarted&&this._mouseUp(f));this._mouseDownEvent=f;var e=this,g=(f.which==1),d=(typeof this.options.cancel=="string"&&f.target.nodeName?b(f.target).closest(this.options.cancel).length:false);if(!g||d||!this._mouseCapture(f)){return true}this.mouseDelayMet=!this.options.delay;if(!this.mouseDelayMet){this._mouseDelayTimer=setTimeout(function(){e.mouseDelayMet=true},this.options.delay)}if(this._mouseDistanceMet(f)&&this._mouseDelayMet(f)){this._mouseStarted=(this._mouseStart(f)!==false);if(!this._mouseStarted){f.preventDefault();return true}}if(true===b.data(f.target,this.widgetName+".preventClickEvent")){b.removeData(f.target,this.widgetName+".preventClickEvent")}this._mouseMoveDelegate=function(h){return e._mouseMove(h)};this._mouseUpDelegate=function(h){return e._mouseUp(h)};b(document).bind("mousemove."+this.widgetName,this._mouseMoveDelegate).bind("mouseup."+this.widgetName,this._mouseUpDelegate);f.preventDefault();a=true;return true},_mouseMove:function(d){if(b.browser.msie&&!(document.documentMode>=9)&&!d.button){return this._mouseUp(d)}if(this._mouseStarted){this._mouseDrag(d);return d.preventDefault()}if(this._mouseDistanceMet(d)&&this._mouseDelayMet(d)){this._mouseStarted=(this._mouseStart(this._mouseDownEvent,d)!==false);(this._mouseStarted?this._mouseDrag(d):this._mouseUp(d))}return !this._mouseStarted},_mouseUp:function(d){b(document).unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate);if(this._mouseStarted){this._mouseStarted=false;if(d.target==this._mouseDownEvent.target){b.data(d.target,this.widgetName+".preventClickEvent",true)}this._mouseStop(d)}return false},_mouseDistanceMet:function(d){return(Math.max(Math.abs(this._mouseDownEvent.pageX-d.pageX),Math.abs(this._mouseDownEvent.pageY-d.pageY))>=this.options.distance)},_mouseDelayMet:function(d){return this.mouseDelayMet},_mouseStart:function(d){},_mouseDrag:function(d){},_mouseStop:function(d){},_mouseCapture:function(d){return true}})})(jQuery);
/*
 * jQuery UI Position 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Position
 */
(function(g,h){g.ui=g.ui||{};var d=/left|center|right/,e=/top|center|bottom/,a="center",f={},b=g.fn.position,c=g.fn.offset;g.fn.position=function(j){if(!j||!j.of){return b.apply(this,arguments)}j=g.extend({},j);var n=g(j.of),m=n[0],p=(j.collision||"flip").split(" "),o=j.offset?j.offset.split(" "):[0,0],l,i,k;if(m.nodeType===9){l=n.width();i=n.height();k={top:0,left:0}}else{if(m.setTimeout){l=n.width();i=n.height();k={top:n.scrollTop(),left:n.scrollLeft()}}else{if(m.preventDefault){j.at="left top";l=i=0;k={top:j.of.pageY,left:j.of.pageX}}else{l=n.outerWidth();i=n.outerHeight();k=n.offset()}}}g.each(["my","at"],function(){var q=(j[this]||"").split(" ");if(q.length===1){q=d.test(q[0])?q.concat([a]):e.test(q[0])?[a].concat(q):[a,a]}q[0]=d.test(q[0])?q[0]:a;q[1]=e.test(q[1])?q[1]:a;j[this]=q});if(p.length===1){p[1]=p[0]}o[0]=parseInt(o[0],10)||0;if(o.length===1){o[1]=o[0]}o[1]=parseInt(o[1],10)||0;if(j.at[0]==="right"){k.left+=l}else{if(j.at[0]===a){k.left+=l/2}}if(j.at[1]==="bottom"){k.top+=i}else{if(j.at[1]===a){k.top+=i/2}}k.left+=o[0];k.top+=o[1];return this.each(function(){var t=g(this),v=t.outerWidth(),s=t.outerHeight(),u=parseInt(g.curCSS(this,"marginLeft",true))||0,r=parseInt(g.curCSS(this,"marginTop",true))||0,x=v+u+(parseInt(g.curCSS(this,"marginRight",true))||0),y=s+r+(parseInt(g.curCSS(this,"marginBottom",true))||0),w=g.extend({},k),q;if(j.my[0]==="right"){w.left-=v}else{if(j.my[0]===a){w.left-=v/2}}if(j.my[1]==="bottom"){w.top-=s}else{if(j.my[1]===a){w.top-=s/2}}if(!f.fractions){w.left=Math.round(w.left);w.top=Math.round(w.top)}q={left:w.left-u,top:w.top-r};g.each(["left","top"],function(A,z){if(g.ui.position[p[A]]){g.ui.position[p[A]][z](w,{targetWidth:l,targetHeight:i,elemWidth:v,elemHeight:s,collisionPosition:q,collisionWidth:x,collisionHeight:y,offset:o,my:j.my,at:j.at})}});if(g.fn.bgiframe){t.bgiframe()}t.offset(g.extend(w,{using:j.using}))})};g.ui.position={fit:{left:function(i,j){var l=g(window),k=j.collisionPosition.left+j.collisionWidth-l.width()-l.scrollLeft();i.left=k>0?i.left-k:Math.max(i.left-j.collisionPosition.left,i.left)},top:function(i,j){var l=g(window),k=j.collisionPosition.top+j.collisionHeight-l.height()-l.scrollTop();i.top=k>0?i.top-k:Math.max(i.top-j.collisionPosition.top,i.top)}},flip:{left:function(j,l){if(l.at[0]===a){return}var n=g(window),m=l.collisionPosition.left+l.collisionWidth-n.width()-n.scrollLeft(),i=l.my[0]==="left"?-l.elemWidth:l.my[0]==="right"?l.elemWidth:0,k=l.at[0]==="left"?l.targetWidth:-l.targetWidth,o=-2*l.offset[0];j.left+=l.collisionPosition.left<0?i+k+o:m>0?i+k+o:0},top:function(j,l){if(l.at[1]===a){return}var n=g(window),m=l.collisionPosition.top+l.collisionHeight-n.height()-n.scrollTop(),i=l.my[1]==="top"?-l.elemHeight:l.my[1]==="bottom"?l.elemHeight:0,k=l.at[1]==="top"?l.targetHeight:-l.targetHeight,o=-2*l.offset[1];j.top+=l.collisionPosition.top<0?i+k+o:m>0?i+k+o:0}}};if(!g.offset.setOffset){g.offset.setOffset=function(m,j){if(/static/.test(g.curCSS(m,"position"))){m.style.position="relative"}var l=g(m),o=l.offset(),i=parseInt(g.curCSS(m,"top",true),10)||0,n=parseInt(g.curCSS(m,"left",true),10)||0,k={top:(j.top-o.top)+i,left:(j.left-o.left)+n};if("using" in j){j.using.call(m,k)}else{l.css(k)}};g.fn.offset=function(i){var j=this[0];if(!j||!j.ownerDocument){return null}if(i){if(g.isFunction(i)){return this.each(function(k){g(this).offset(i.call(this,k,g(this).offset()))})}return this.each(function(){g.offset.setOffset(this,i)})}return c.call(this)}}(function(){var j=document.getElementsByTagName("body")[0],q=document.createElement("div"),n,p,k,o,m;n=document.createElement(j?"div":"body");k={visibility:"hidden",width:0,height:0,border:0,margin:0,background:"none"};if(j){g.extend(k,{position:"absolute",left:"-1000px",top:"-1000px"})}for(var l in k){n.style[l]=k[l]}n.appendChild(q);p=j||document.documentElement;p.insertBefore(n,p.firstChild);q.style.cssText="position: absolute; left: 10.7432222px; top: 10.432325px; height: 30px; width: 201px;";o=g(q).offset(function(i,r){return r}).offset();n.innerHTML="";p.removeChild(n);m=o.top+o.left+(j?2000:0);f.fractions=m>21&&m<22})()}(jQuery));
/*
 * jQuery UI Draggable 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Draggables
 *
 * Depends:
 *	jquery.ui.core.js
 *	jquery.ui.mouse.js
 *	jquery.ui.widget.js
 */
(function(a,b){a.widget("ui.draggable",a.ui.mouse,{widgetEventPrefix:"drag",options:{addClasses:true,appendTo:"parent",axis:false,connectToSortable:false,containment:false,cursor:"auto",cursorAt:false,grid:false,handle:false,helper:"original",iframeFix:false,opacity:false,refreshPositions:false,revert:false,revertDuration:500,scope:"default",scroll:true,scrollSensitivity:20,scrollSpeed:20,snap:false,snapMode:"both",snapTolerance:20,stack:false,zIndex:false},_create:function(){if(this.options.helper=="original"&&!(/^(?:r|a|f)/).test(this.element.css("position"))){this.element[0].style.position="relative"}(this.options.addClasses&&this.element.addClass("ui-draggable"));(this.options.disabled&&this.element.addClass("ui-draggable-disabled"));this._mouseInit()},destroy:function(){if(!this.element.data("draggable")){return}this.element.removeData("draggable").unbind(".draggable").removeClass("ui-draggable ui-draggable-dragging ui-draggable-disabled");this._mouseDestroy();return this},_mouseCapture:function(c){var d=this.options;if(this.helper||d.disabled||a(c.target).is(".ui-resizable-handle")){return false}this.handle=this._getHandle(c);if(!this.handle){return false}if(d.iframeFix){a(d.iframeFix===true?"iframe":d.iframeFix).each(function(){a('<div class="ui-draggable-iframeFix" style="background: #fff;"></div>').css({width:this.offsetWidth+"px",height:this.offsetHeight+"px",position:"absolute",opacity:"0.001",zIndex:1000}).css(a(this).offset()).appendTo("body")})}return true},_mouseStart:function(c){var d=this.options;this.helper=this._createHelper(c);this.helper.addClass("ui-draggable-dragging");this._cacheHelperProportions();if(a.ui.ddmanager){a.ui.ddmanager.current=this}this._cacheMargins();this.cssPosition=this.helper.css("position");this.scrollParent=this.helper.scrollParent();this.offset=this.positionAbs=this.element.offset();this.offset={top:this.offset.top-this.margins.top,left:this.offset.left-this.margins.left};a.extend(this.offset,{click:{left:c.pageX-this.offset.left,top:c.pageY-this.offset.top},parent:this._getParentOffset(),relative:this._getRelativeOffset()});this.originalPosition=this.position=this._generatePosition(c);this.originalPageX=c.pageX;this.originalPageY=c.pageY;(d.cursorAt&&this._adjustOffsetFromHelper(d.cursorAt));if(d.containment){this._setContainment()}if(this._trigger("start",c)===false){this._clear();return false}this._cacheHelperProportions();if(a.ui.ddmanager&&!d.dropBehaviour){a.ui.ddmanager.prepareOffsets(this,c)}this._mouseDrag(c,true);if(a.ui.ddmanager){a.ui.ddmanager.dragStart(this,c)}return true},_mouseDrag:function(c,e){this.position=this._generatePosition(c);this.positionAbs=this._convertPositionTo("absolute");if(!e){var d=this._uiHash();if(this._trigger("drag",c,d)===false){this._mouseUp({});return false}this.position=d.position}if(!this.options.axis||this.options.axis!="y"){this.helper[0].style.left=this.position.left+"px"}if(!this.options.axis||this.options.axis!="x"){this.helper[0].style.top=this.position.top+"px"}if(a.ui.ddmanager){a.ui.ddmanager.drag(this,c)}return false},_mouseStop:function(e){var g=false;if(a.ui.ddmanager&&!this.options.dropBehaviour){g=a.ui.ddmanager.drop(this,e)}if(this.dropped){g=this.dropped;this.dropped=false}var d=this.element[0],f=false;while(d&&(d=d.parentNode)){if(d==document){f=true}}if(!f&&this.options.helper==="original"){return false}if((this.options.revert=="invalid"&&!g)||(this.options.revert=="valid"&&g)||this.options.revert===true||(a.isFunction(this.options.revert)&&this.options.revert.call(this.element,g))){var c=this;a(this.helper).animate(this.originalPosition,parseInt(this.options.revertDuration,10),function(){if(c._trigger("stop",e)!==false){c._clear()}})}else{if(this._trigger("stop",e)!==false){this._clear()}}return false},_mouseUp:function(c){if(this.options.iframeFix===true){a("div.ui-draggable-iframeFix").each(function(){this.parentNode.removeChild(this)})}if(a.ui.ddmanager){a.ui.ddmanager.dragStop(this,c)}return a.ui.mouse.prototype._mouseUp.call(this,c)},cancel:function(){if(this.helper.is(".ui-draggable-dragging")){this._mouseUp({})}else{this._clear()}return this},_getHandle:function(c){var d=!this.options.handle||!a(this.options.handle,this.element).length?true:false;a(this.options.handle,this.element).find("*").andSelf().each(function(){if(this==c.target){d=true}});return d},_createHelper:function(d){var e=this.options;var c=a.isFunction(e.helper)?a(e.helper.apply(this.element[0],[d])):(e.helper=="clone"?this.element.clone().removeAttr("id"):this.element);if(!c.parents("body").length){c.appendTo((e.appendTo=="parent"?this.element[0].parentNode:e.appendTo))}if(c[0]!=this.element[0]&&!(/(fixed|absolute)/).test(c.css("position"))){c.css("position","absolute")}return c},_adjustOffsetFromHelper:function(c){if(typeof c=="string"){c=c.split(" ")}if(a.isArray(c)){c={left:+c[0],top:+c[1]||0}}if("left" in c){this.offset.click.left=c.left+this.margins.left}if("right" in c){this.offset.click.left=this.helperProportions.width-c.right+this.margins.left}if("top" in c){this.offset.click.top=c.top+this.margins.top}if("bottom" in c){this.offset.click.top=this.helperProportions.height-c.bottom+this.margins.top}},_getParentOffset:function(){this.offsetParent=this.helper.offsetParent();var c=this.offsetParent.offset();if(this.cssPosition=="absolute"&&this.scrollParent[0]!=document&&a.ui.contains(this.scrollParent[0],this.offsetParent[0])){c.left+=this.scrollParent.scrollLeft();c.top+=this.scrollParent.scrollTop()}if((this.offsetParent[0]==document.body)||(this.offsetParent[0].tagName&&this.offsetParent[0].tagName.toLowerCase()=="html"&&a.browser.msie)){c={top:0,left:0}}return{top:c.top+(parseInt(this.offsetParent.css("borderTopWidth"),10)||0),left:c.left+(parseInt(this.offsetParent.css("borderLeftWidth"),10)||0)}},_getRelativeOffset:function(){if(this.cssPosition=="relative"){var c=this.element.position();return{top:c.top-(parseInt(this.helper.css("top"),10)||0)+this.scrollParent.scrollTop(),left:c.left-(parseInt(this.helper.css("left"),10)||0)+this.scrollParent.scrollLeft()}}else{return{top:0,left:0}}},_cacheMargins:function(){this.margins={left:(parseInt(this.element.css("marginLeft"),10)||0),top:(parseInt(this.element.css("marginTop"),10)||0),right:(parseInt(this.element.css("marginRight"),10)||0),bottom:(parseInt(this.element.css("marginBottom"),10)||0)}},_cacheHelperProportions:function(){this.helperProportions={width:this.helper.outerWidth(),height:this.helper.outerHeight()}},_setContainment:function(){var g=this.options;if(g.containment=="parent"){g.containment=this.helper[0].parentNode}if(g.containment=="document"||g.containment=="window"){this.containment=[g.containment=="document"?0:a(window).scrollLeft()-this.offset.relative.left-this.offset.parent.left,g.containment=="document"?0:a(window).scrollTop()-this.offset.relative.top-this.offset.parent.top,(g.containment=="document"?0:a(window).scrollLeft())+a(g.containment=="document"?document:window).width()-this.helperProportions.width-this.margins.left,(g.containment=="document"?0:a(window).scrollTop())+(a(g.containment=="document"?document:window).height()||document.body.parentNode.scrollHeight)-this.helperProportions.height-this.margins.top]}if(!(/^(document|window|parent)$/).test(g.containment)&&g.containment.constructor!=Array){var h=a(g.containment);var e=h[0];if(!e){return}var f=h.offset();var d=(a(e).css("overflow")!="hidden");this.containment=[(parseInt(a(e).css("borderLeftWidth"),10)||0)+(parseInt(a(e).css("paddingLeft"),10)||0),(parseInt(a(e).css("borderTopWidth"),10)||0)+(parseInt(a(e).css("paddingTop"),10)||0),(d?Math.max(e.scrollWidth,e.offsetWidth):e.offsetWidth)-(parseInt(a(e).css("borderLeftWidth"),10)||0)-(parseInt(a(e).css("paddingRight"),10)||0)-this.helperProportions.width-this.margins.left-this.margins.right,(d?Math.max(e.scrollHeight,e.offsetHeight):e.offsetHeight)-(parseInt(a(e).css("borderTopWidth"),10)||0)-(parseInt(a(e).css("paddingBottom"),10)||0)-this.helperProportions.height-this.margins.top-this.margins.bottom];this.relative_container=h}else{if(g.containment.constructor==Array){this.containment=g.containment}}},_convertPositionTo:function(g,i){if(!i){i=this.position}var e=g=="absolute"?1:-1;var f=this.options,c=this.cssPosition=="absolute"&&!(this.scrollParent[0]!=document&&a.ui.contains(this.scrollParent[0],this.offsetParent[0]))?this.offsetParent:this.scrollParent,h=(/(html|body)/i).test(c[0].tagName);return{top:(i.top+this.offset.relative.top*e+this.offset.parent.top*e-(a.browser.safari&&a.browser.version<526&&this.cssPosition=="fixed"?0:(this.cssPosition=="fixed"?-this.scrollParent.scrollTop():(h?0:c.scrollTop()))*e)),left:(i.left+this.offset.relative.left*e+this.offset.parent.left*e-(a.browser.safari&&a.browser.version<526&&this.cssPosition=="fixed"?0:(this.cssPosition=="fixed"?-this.scrollParent.scrollLeft():h?0:c.scrollLeft())*e))}},_generatePosition:function(d){var e=this.options,l=this.cssPosition=="absolute"&&!(this.scrollParent[0]!=document&&a.ui.contains(this.scrollParent[0],this.offsetParent[0]))?this.offsetParent:this.scrollParent,i=(/(html|body)/i).test(l[0].tagName);var h=d.pageX;var g=d.pageY;if(this.originalPosition){var c;if(this.containment){if(this.relative_container){var k=this.relative_container.offset();c=[this.containment[0]+k.left,this.containment[1]+k.top,this.containment[2]+k.left,this.containment[3]+k.top]}else{c=this.containment}if(d.pageX-this.offset.click.left<c[0]){h=c[0]+this.offset.click.left}if(d.pageY-this.offset.click.top<c[1]){g=c[1]+this.offset.click.top}if(d.pageX-this.offset.click.left>c[2]){h=c[2]+this.offset.click.left}if(d.pageY-this.offset.click.top>c[3]){g=c[3]+this.offset.click.top}}if(e.grid){var j=e.grid[1]?this.originalPageY+Math.round((g-this.originalPageY)/e.grid[1])*e.grid[1]:this.originalPageY;g=c?(!(j-this.offset.click.top<c[1]||j-this.offset.click.top>c[3])?j:(!(j-this.offset.click.top<c[1])?j-e.grid[1]:j+e.grid[1])):j;var f=e.grid[0]?this.originalPageX+Math.round((h-this.originalPageX)/e.grid[0])*e.grid[0]:this.originalPageX;h=c?(!(f-this.offset.click.left<c[0]||f-this.offset.click.left>c[2])?f:(!(f-this.offset.click.left<c[0])?f-e.grid[0]:f+e.grid[0])):f}}return{top:(g-this.offset.click.top-this.offset.relative.top-this.offset.parent.top+(a.browser.safari&&a.browser.version<526&&this.cssPosition=="fixed"?0:(this.cssPosition=="fixed"?-this.scrollParent.scrollTop():(i?0:l.scrollTop())))),left:(h-this.offset.click.left-this.offset.relative.left-this.offset.parent.left+(a.browser.safari&&a.browser.version<526&&this.cssPosition=="fixed"?0:(this.cssPosition=="fixed"?-this.scrollParent.scrollLeft():i?0:l.scrollLeft())))}},_clear:function(){this.helper.removeClass("ui-draggable-dragging");if(this.helper[0]!=this.element[0]&&!this.cancelHelperRemoval){this.helper.remove()}this.helper=null;this.cancelHelperRemoval=false},_trigger:function(c,d,e){e=e||this._uiHash();a.ui.plugin.call(this,c,[d,e]);if(c=="drag"){this.positionAbs=this._convertPositionTo("absolute")}return a.Widget.prototype._trigger.call(this,c,d,e)},plugins:{},_uiHash:function(c){return{helper:this.helper,position:this.position,originalPosition:this.originalPosition,offset:this.positionAbs}}});a.extend(a.ui.draggable,{version:"1.8.21"});a.ui.plugin.add("draggable","connectToSortable",{start:function(d,f){var e=a(this).data("draggable"),g=e.options,c=a.extend({},f,{item:e.element});e.sortables=[];a(g.connectToSortable).each(function(){var h=a.data(this,"sortable");if(h&&!h.options.disabled){e.sortables.push({instance:h,shouldRevert:h.options.revert});h.refreshPositions();h._trigger("activate",d,c)}})},stop:function(d,f){var e=a(this).data("draggable"),c=a.extend({},f,{item:e.element});a.each(e.sortables,function(){if(this.instance.isOver){this.instance.isOver=0;e.cancelHelperRemoval=true;this.instance.cancelHelperRemoval=false;if(this.shouldRevert){this.instance.options.revert=true}this.instance._mouseStop(d);this.instance.options.helper=this.instance.options._helper;if(e.options.helper=="original"){this.instance.currentItem.css({top:"auto",left:"auto"})}}else{this.instance.cancelHelperRemoval=false;this.instance._trigger("deactivate",d,c)}})},drag:function(d,g){var f=a(this).data("draggable"),c=this;var e=function(j){var p=this.offset.click.top,n=this.offset.click.left;var h=this.positionAbs.top,l=this.positionAbs.left;var k=j.height,m=j.width;var q=j.top,i=j.left;return a.ui.isOver(h+p,l+n,q,i,k,m)};a.each(f.sortables,function(h){this.instance.positionAbs=f.positionAbs;this.instance.helperProportions=f.helperProportions;this.instance.offset.click=f.offset.click;if(this.instance._intersectsWith(this.instance.containerCache)){if(!this.instance.isOver){this.instance.isOver=1;this.instance.currentItem=a(c).clone().removeAttr("id").appendTo(this.instance.element).data("sortable-item",true);this.instance.options._helper=this.instance.options.helper;this.instance.options.helper=function(){return g.helper[0]};d.target=this.instance.currentItem[0];this.instance._mouseCapture(d,true);this.instance._mouseStart(d,true,true);this.instance.offset.click.top=f.offset.click.top;this.instance.offset.click.left=f.offset.click.left;this.instance.offset.parent.left-=f.offset.parent.left-this.instance.offset.parent.left;this.instance.offset.parent.top-=f.offset.parent.top-this.instance.offset.parent.top;f._trigger("toSortable",d);f.dropped=this.instance.element;f.currentItem=f.element;this.instance.fromOutside=f}if(this.instance.currentItem){this.instance._mouseDrag(d)}}else{if(this.instance.isOver){this.instance.isOver=0;this.instance.cancelHelperRemoval=true;this.instance.options.revert=false;this.instance._trigger("out",d,this.instance._uiHash(this.instance));this.instance._mouseStop(d,true);this.instance.options.helper=this.instance.options._helper;this.instance.currentItem.remove();if(this.instance.placeholder){this.instance.placeholder.remove()}f._trigger("fromSortable",d);f.dropped=false}}})}});a.ui.plugin.add("draggable","cursor",{start:function(d,e){var c=a("body"),f=a(this).data("draggable").options;if(c.css("cursor")){f._cursor=c.css("cursor")}c.css("cursor",f.cursor)},stop:function(c,d){var e=a(this).data("draggable").options;if(e._cursor){a("body").css("cursor",e._cursor)}}});a.ui.plugin.add("draggable","opacity",{start:function(d,e){var c=a(e.helper),f=a(this).data("draggable").options;if(c.css("opacity")){f._opacity=c.css("opacity")}c.css("opacity",f.opacity)},stop:function(c,d){var e=a(this).data("draggable").options;if(e._opacity){a(d.helper).css("opacity",e._opacity)}}});a.ui.plugin.add("draggable","scroll",{start:function(d,e){var c=a(this).data("draggable");if(c.scrollParent[0]!=document&&c.scrollParent[0].tagName!="HTML"){c.overflowOffset=c.scrollParent.offset()}},drag:function(e,f){var d=a(this).data("draggable"),g=d.options,c=false;if(d.scrollParent[0]!=document&&d.scrollParent[0].tagName!="HTML"){if(!g.axis||g.axis!="x"){if((d.overflowOffset.top+d.scrollParent[0].offsetHeight)-e.pageY<g.scrollSensitivity){d.scrollParent[0].scrollTop=c=d.scrollParent[0].scrollTop+g.scrollSpeed}else{if(e.pageY-d.overflowOffset.top<g.scrollSensitivity){d.scrollParent[0].scrollTop=c=d.scrollParent[0].scrollTop-g.scrollSpeed}}}if(!g.axis||g.axis!="y"){if((d.overflowOffset.left+d.scrollParent[0].offsetWidth)-e.pageX<g.scrollSensitivity){d.scrollParent[0].scrollLeft=c=d.scrollParent[0].scrollLeft+g.scrollSpeed}else{if(e.pageX-d.overflowOffset.left<g.scrollSensitivity){d.scrollParent[0].scrollLeft=c=d.scrollParent[0].scrollLeft-g.scrollSpeed}}}}else{if(!g.axis||g.axis!="x"){if(e.pageY-a(document).scrollTop()<g.scrollSensitivity){c=a(document).scrollTop(a(document).scrollTop()-g.scrollSpeed)}else{if(a(window).height()-(e.pageY-a(document).scrollTop())<g.scrollSensitivity){c=a(document).scrollTop(a(document).scrollTop()+g.scrollSpeed)}}}if(!g.axis||g.axis!="y"){if(e.pageX-a(document).scrollLeft()<g.scrollSensitivity){c=a(document).scrollLeft(a(document).scrollLeft()-g.scrollSpeed)}else{if(a(window).width()-(e.pageX-a(document).scrollLeft())<g.scrollSensitivity){c=a(document).scrollLeft(a(document).scrollLeft()+g.scrollSpeed)}}}}if(c!==false&&a.ui.ddmanager&&!g.dropBehaviour){a.ui.ddmanager.prepareOffsets(d,e)}}});a.ui.plugin.add("draggable","snap",{start:function(d,e){var c=a(this).data("draggable"),f=c.options;c.snapElements=[];a(f.snap.constructor!=String?(f.snap.items||":data(draggable)"):f.snap).each(function(){var h=a(this);var g=h.offset();if(this!=c.element[0]){c.snapElements.push({item:this,width:h.outerWidth(),height:h.outerHeight(),top:g.top,left:g.left})}})},drag:function(u,p){var g=a(this).data("draggable"),q=g.options;var y=q.snapTolerance;var x=p.offset.left,w=x+g.helperProportions.width,f=p.offset.top,e=f+g.helperProportions.height;for(var v=g.snapElements.length-1;v>=0;v--){var s=g.snapElements[v].left,n=s+g.snapElements[v].width,m=g.snapElements[v].top,A=m+g.snapElements[v].height;if(!((s-y<x&&x<n+y&&m-y<f&&f<A+y)||(s-y<x&&x<n+y&&m-y<e&&e<A+y)||(s-y<w&&w<n+y&&m-y<f&&f<A+y)||(s-y<w&&w<n+y&&m-y<e&&e<A+y))){if(g.snapElements[v].snapping){(g.options.snap.release&&g.options.snap.release.call(g.element,u,a.extend(g._uiHash(),{snapItem:g.snapElements[v].item})))}g.snapElements[v].snapping=false;continue}if(q.snapMode!="inner"){var c=Math.abs(m-e)<=y;var z=Math.abs(A-f)<=y;var j=Math.abs(s-w)<=y;var k=Math.abs(n-x)<=y;if(c){p.position.top=g._convertPositionTo("relative",{top:m-g.helperProportions.height,left:0}).top-g.margins.top}if(z){p.position.top=g._convertPositionTo("relative",{top:A,left:0}).top-g.margins.top}if(j){p.position.left=g._convertPositionTo("relative",{top:0,left:s-g.helperProportions.width}).left-g.margins.left}if(k){p.position.left=g._convertPositionTo("relative",{top:0,left:n}).left-g.margins.left}}var h=(c||z||j||k);if(q.snapMode!="outer"){var c=Math.abs(m-f)<=y;var z=Math.abs(A-e)<=y;var j=Math.abs(s-x)<=y;var k=Math.abs(n-w)<=y;if(c){p.position.top=g._convertPositionTo("relative",{top:m,left:0}).top-g.margins.top}if(z){p.position.top=g._convertPositionTo("relative",{top:A-g.helperProportions.height,left:0}).top-g.margins.top}if(j){p.position.left=g._convertPositionTo("relative",{top:0,left:s}).left-g.margins.left}if(k){p.position.left=g._convertPositionTo("relative",{top:0,left:n-g.helperProportions.width}).left-g.margins.left}}if(!g.snapElements[v].snapping&&(c||z||j||k||h)){(g.options.snap.snap&&g.options.snap.snap.call(g.element,u,a.extend(g._uiHash(),{snapItem:g.snapElements[v].item})))}g.snapElements[v].snapping=(c||z||j||k||h)}}});a.ui.plugin.add("draggable","stack",{start:function(d,e){var g=a(this).data("draggable").options;var f=a.makeArray(a(g.stack)).sort(function(i,h){return(parseInt(a(i).css("zIndex"),10)||0)-(parseInt(a(h).css("zIndex"),10)||0)});if(!f.length){return}var c=parseInt(f[0].style.zIndex)||0;a(f).each(function(h){this.style.zIndex=c+h});this[0].style.zIndex=c+f.length}});a.ui.plugin.add("draggable","zIndex",{start:function(d,e){var c=a(e.helper),f=a(this).data("draggable").options;if(c.css("zIndex")){f._zIndex=c.css("zIndex")}c.css("zIndex",f.zIndex)},stop:function(c,d){var e=a(this).data("draggable").options;if(e._zIndex){a(d.helper).css("zIndex",e._zIndex)}}})})(jQuery);
/*
 * jQuery UI Droppable 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Droppables
 *
 * Depends:
 *	jquery.ui.core.js
 *	jquery.ui.widget.js
 *	jquery.ui.mouse.js
 *	jquery.ui.draggable.js
 */
(function(a,b){a.widget("ui.droppable",{widgetEventPrefix:"drop",options:{accept:"*",activeClass:false,addClasses:true,greedy:false,hoverClass:false,scope:"default",tolerance:"intersect"},_create:function(){var d=this.options,c=d.accept;this.isover=0;this.isout=1;this.accept=a.isFunction(c)?c:function(e){return e.is(c)};this.proportions={width:this.element[0].offsetWidth,height:this.element[0].offsetHeight};a.ui.ddmanager.droppables[d.scope]=a.ui.ddmanager.droppables[d.scope]||[];a.ui.ddmanager.droppables[d.scope].push(this);(d.addClasses&&this.element.addClass("ui-droppable"))},destroy:function(){var c=a.ui.ddmanager.droppables[this.options.scope];for(var d=0;d<c.length;d++){if(c[d]==this){c.splice(d,1)}}this.element.removeClass("ui-droppable ui-droppable-disabled").removeData("droppable").unbind(".droppable");return this},_setOption:function(c,d){if(c=="accept"){this.accept=a.isFunction(d)?d:function(e){return e.is(d)}}a.Widget.prototype._setOption.apply(this,arguments)},_activate:function(d){var c=a.ui.ddmanager.current;if(this.options.activeClass){this.element.addClass(this.options.activeClass)}(c&&this._trigger("activate",d,this.ui(c)))},_deactivate:function(d){var c=a.ui.ddmanager.current;if(this.options.activeClass){this.element.removeClass(this.options.activeClass)}(c&&this._trigger("deactivate",d,this.ui(c)))},_over:function(d){var c=a.ui.ddmanager.current;if(!c||(c.currentItem||c.element)[0]==this.element[0]){return}if(this.accept.call(this.element[0],(c.currentItem||c.element))){if(this.options.hoverClass){this.element.addClass(this.options.hoverClass)}this._trigger("over",d,this.ui(c))}},_out:function(d){var c=a.ui.ddmanager.current;if(!c||(c.currentItem||c.element)[0]==this.element[0]){return}if(this.accept.call(this.element[0],(c.currentItem||c.element))){if(this.options.hoverClass){this.element.removeClass(this.options.hoverClass)}this._trigger("out",d,this.ui(c))}},_drop:function(d,e){var c=e||a.ui.ddmanager.current;if(!c||(c.currentItem||c.element)[0]==this.element[0]){return false}var f=false;this.element.find(":data(droppable)").not(".ui-draggable-dragging").each(function(){var g=a.data(this,"droppable");if(g.options.greedy&&!g.options.disabled&&g.options.scope==c.options.scope&&g.accept.call(g.element[0],(c.currentItem||c.element))&&a.ui.intersect(c,a.extend(g,{offset:g.element.offset()}),g.options.tolerance)){f=true;return false}});if(f){return false}if(this.accept.call(this.element[0],(c.currentItem||c.element))){if(this.options.activeClass){this.element.removeClass(this.options.activeClass)}if(this.options.hoverClass){this.element.removeClass(this.options.hoverClass)}this._trigger("drop",d,this.ui(c));return this.element}return false},ui:function(d){return{draggable:(d.currentItem||d.element),helper:d.helper,position:d.position,offset:d.positionAbs}}});a.extend(a.ui.droppable,{version:"1.8.21"});a.ui.intersect=function(q,j,o){if(!j.offset){return false}var e=(q.positionAbs||q.position.absolute).left,d=e+q.helperProportions.width,n=(q.positionAbs||q.position.absolute).top,m=n+q.helperProportions.height;var g=j.offset.left,c=g+j.proportions.width,p=j.offset.top,k=p+j.proportions.height;switch(o){case"fit":return(g<=e&&d<=c&&p<=n&&m<=k);break;case"intersect":return(g<e+(q.helperProportions.width/2)&&d-(q.helperProportions.width/2)<c&&p<n+(q.helperProportions.height/2)&&m-(q.helperProportions.height/2)<k);break;case"pointer":var h=((q.positionAbs||q.position.absolute).left+(q.clickOffset||q.offset.click).left),i=((q.positionAbs||q.position.absolute).top+(q.clickOffset||q.offset.click).top),f=a.ui.isOver(i,h,p,g,j.proportions.height,j.proportions.width);return f;break;case"touch":return((n>=p&&n<=k)||(m>=p&&m<=k)||(n<p&&m>k))&&((e>=g&&e<=c)||(d>=g&&d<=c)||(e<g&&d>c));break;default:return false;break}};a.ui.ddmanager={current:null,droppables:{"default":[]},prepareOffsets:function(f,h){var c=a.ui.ddmanager.droppables[f.options.scope]||[];var g=h?h.type:null;var k=(f.currentItem||f.element).find(":data(droppable)").andSelf();droppablesLoop:for(var e=0;e<c.length;e++){if(c[e].options.disabled||(f&&!c[e].accept.call(c[e].element[0],(f.currentItem||f.element)))){continue}for(var d=0;d<k.length;d++){if(k[d]==c[e].element[0]){c[e].proportions.height=0;continue droppablesLoop}}c[e].visible=c[e].element.css("display")!="none";if(!c[e].visible){continue}if(g=="mousedown"){c[e]._activate.call(c[e],h)}c[e].offset=c[e].element.offset();c[e].proportions={width:c[e].element[0].offsetWidth,height:c[e].element[0].offsetHeight}}},drop:function(c,d){var e=false;a.each(a.ui.ddmanager.droppables[c.options.scope]||[],function(){if(!this.options){return}if(!this.options.disabled&&this.visible&&a.ui.intersect(c,this,this.options.tolerance)){e=this._drop.call(this,d)||e}if(!this.options.disabled&&this.visible&&this.accept.call(this.element[0],(c.currentItem||c.element))){this.isout=1;this.isover=0;this._deactivate.call(this,d)}});return e},dragStart:function(c,d){c.element.parents(":not(body,html)").bind("scroll.droppable",function(){if(!c.options.refreshPositions){a.ui.ddmanager.prepareOffsets(c,d)}})},drag:function(c,d){if(c.options.refreshPositions){a.ui.ddmanager.prepareOffsets(c,d)}a.each(a.ui.ddmanager.droppables[c.options.scope]||[],function(){if(this.options.disabled||this.greedyChild||!this.visible){return}var f=a.ui.intersect(c,this,this.options.tolerance);var h=!f&&this.isover==1?"isout":(f&&this.isover==0?"isover":null);if(!h){return}var g;if(this.options.greedy){var e=this.element.parents(":data(droppable):eq(0)");if(e.length){g=a.data(e[0],"droppable");g.greedyChild=(h=="isover"?1:0)}}if(g&&h=="isover"){g.isover=0;g.isout=1;g._out.call(g,d)}this[h]=1;this[h=="isout"?"isover":"isout"]=0;this[h=="isover"?"_over":"_out"].call(this,d);if(g&&h=="isout"){g.isout=0;g.isover=1;g._over.call(g,d)}})},dragStop:function(c,d){c.element.parents(":not(body,html)").unbind("scroll.droppable");if(!c.options.refreshPositions){a.ui.ddmanager.prepareOffsets(c,d)}}}})(jQuery);
/*
 * jQuery UI Resizable 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Resizables
 *
 * Depends:
 *	jquery.ui.core.js
 *	jquery.ui.mouse.js
 *	jquery.ui.widget.js
 */
(function(c,d){c.widget("ui.resizable",c.ui.mouse,{widgetEventPrefix:"resize",options:{alsoResize:false,animate:false,animateDuration:"slow",animateEasing:"swing",aspectRatio:false,autoHide:false,containment:false,ghost:false,grid:false,handles:"e,s,se",helper:false,maxHeight:null,maxWidth:null,minHeight:10,minWidth:10,zIndex:1000},_create:function(){var f=this,k=this.options;this.element.addClass("ui-resizable");c.extend(this,{_aspectRatio:!!(k.aspectRatio),aspectRatio:k.aspectRatio,originalElement:this.element,_proportionallyResizeElements:[],_helper:k.helper||k.ghost||k.animate?k.helper||"ui-resizable-helper":null});if(this.element[0].nodeName.match(/canvas|textarea|input|select|button|img/i)){this.element.wrap(c('<div class="ui-wrapper" style="overflow: hidden;"></div>').css({position:this.element.css("position"),width:this.element.outerWidth(),height:this.element.outerHeight(),top:this.element.css("top"),left:this.element.css("left")}));this.element=this.element.parent().data("resizable",this.element.data("resizable"));this.elementIsWrapper=true;this.element.css({marginLeft:this.originalElement.css("marginLeft"),marginTop:this.originalElement.css("marginTop"),marginRight:this.originalElement.css("marginRight"),marginBottom:this.originalElement.css("marginBottom")});this.originalElement.css({marginLeft:0,marginTop:0,marginRight:0,marginBottom:0});this.originalResizeStyle=this.originalElement.css("resize");this.originalElement.css("resize","none");this._proportionallyResizeElements.push(this.originalElement.css({position:"static",zoom:1,display:"block"}));this.originalElement.css({margin:this.originalElement.css("margin")});this._proportionallyResize()}this.handles=k.handles||(!c(".ui-resizable-handle",this.element).length?"e,s,se":{n:".ui-resizable-n",e:".ui-resizable-e",s:".ui-resizable-s",w:".ui-resizable-w",se:".ui-resizable-se",sw:".ui-resizable-sw",ne:".ui-resizable-ne",nw:".ui-resizable-nw"});if(this.handles.constructor==String){if(this.handles=="all"){this.handles="n,e,s,w,se,sw,ne,nw"}var l=this.handles.split(",");this.handles={};for(var g=0;g<l.length;g++){var j=c.trim(l[g]),e="ui-resizable-"+j;var h=c('<div class="ui-resizable-handle '+e+'"></div>');h.css({zIndex:k.zIndex});if("se"==j){h.addClass("ui-icon ui-icon-gripsmall-diagonal-se")}this.handles[j]=".ui-resizable-"+j;this.element.append(h)}}this._renderAxis=function(q){q=q||this.element;for(var n in this.handles){if(this.handles[n].constructor==String){this.handles[n]=c(this.handles[n],this.element).show()}if(this.elementIsWrapper&&this.originalElement[0].nodeName.match(/textarea|input|select|button/i)){var o=c(this.handles[n],this.element),p=0;p=/sw|ne|nw|se|n|s/.test(n)?o.outerHeight():o.outerWidth();var m=["padding",/ne|nw|n/.test(n)?"Top":/se|sw|s/.test(n)?"Bottom":/^e$/.test(n)?"Right":"Left"].join("");q.css(m,p);this._proportionallyResize()}if(!c(this.handles[n]).length){continue}}};this._renderAxis(this.element);this._handles=c(".ui-resizable-handle",this.element).disableSelection();this._handles.mouseover(function(){if(!f.resizing){if(this.className){var i=this.className.match(/ui-resizable-(se|sw|ne|nw|n|e|s|w)/i)}f.axis=i&&i[1]?i[1]:"se"}});if(k.autoHide){this._handles.hide();c(this.element).addClass("ui-resizable-autohide").hover(function(){if(k.disabled){return}c(this).removeClass("ui-resizable-autohide");f._handles.show()},function(){if(k.disabled){return}if(!f.resizing){c(this).addClass("ui-resizable-autohide");f._handles.hide()}})}this._mouseInit()},destroy:function(){this._mouseDestroy();var e=function(g){c(g).removeClass("ui-resizable ui-resizable-disabled ui-resizable-resizing").removeData("resizable").unbind(".resizable").find(".ui-resizable-handle").remove()};if(this.elementIsWrapper){e(this.element);var f=this.element;f.after(this.originalElement.css({position:f.css("position"),width:f.outerWidth(),height:f.outerHeight(),top:f.css("top"),left:f.css("left")})).remove()}this.originalElement.css("resize",this.originalResizeStyle);e(this.originalElement);return this},_mouseCapture:function(f){var g=false;for(var e in this.handles){if(c(this.handles[e])[0]==f.target){g=true}}return !this.options.disabled&&g},_mouseStart:function(g){var j=this.options,f=this.element.position(),e=this.element;this.resizing=true;this.documentScroll={top:c(document).scrollTop(),left:c(document).scrollLeft()};if(e.is(".ui-draggable")||(/absolute/).test(e.css("position"))){e.css({position:"absolute",top:f.top,left:f.left})}this._renderProxy();var k=b(this.helper.css("left")),h=b(this.helper.css("top"));if(j.containment){k+=c(j.containment).scrollLeft()||0;h+=c(j.containment).scrollTop()||0}this.offset=this.helper.offset();this.position={left:k,top:h};this.size=this._helper?{width:e.outerWidth(),height:e.outerHeight()}:{width:e.width(),height:e.height()};this.originalSize=this._helper?{width:e.outerWidth(),height:e.outerHeight()}:{width:e.width(),height:e.height()};this.originalPosition={left:k,top:h};this.sizeDiff={width:e.outerWidth()-e.width(),height:e.outerHeight()-e.height()};this.originalMousePosition={left:g.pageX,top:g.pageY};this.aspectRatio=(typeof j.aspectRatio=="number")?j.aspectRatio:((this.originalSize.width/this.originalSize.height)||1);var i=c(".ui-resizable-"+this.axis).css("cursor");c("body").css("cursor",i=="auto"?this.axis+"-resize":i);e.addClass("ui-resizable-resizing");this._propagate("start",g);return true},_mouseDrag:function(e){var h=this.helper,g=this.options,m={},q=this,j=this.originalMousePosition,n=this.axis;var r=(e.pageX-j.left)||0,p=(e.pageY-j.top)||0;var i=this._change[n];if(!i){return false}var l=i.apply(this,[e,r,p]),k=c.browser.msie&&c.browser.version<7,f=this.sizeDiff;this._updateVirtualBoundaries(e.shiftKey);if(this._aspectRatio||e.shiftKey){l=this._updateRatio(l,e)}l=this._respectSize(l,e);this._propagate("resize",e);h.css({top:this.position.top+"px",left:this.position.left+"px",width:this.size.width+"px",height:this.size.height+"px"});if(!this._helper&&this._proportionallyResizeElements.length){this._proportionallyResize()}this._updateCache(l);this._trigger("resize",e,this.ui());return false},_mouseStop:function(h){this.resizing=false;var i=this.options,m=this;if(this._helper){var g=this._proportionallyResizeElements,e=g.length&&(/textarea/i).test(g[0].nodeName),f=e&&c.ui.hasScroll(g[0],"left")?0:m.sizeDiff.height,k=e?0:m.sizeDiff.width;var n={width:(m.helper.width()-k),height:(m.helper.height()-f)},j=(parseInt(m.element.css("left"),10)+(m.position.left-m.originalPosition.left))||null,l=(parseInt(m.element.css("top"),10)+(m.position.top-m.originalPosition.top))||null;if(!i.animate){this.element.css(c.extend(n,{top:l,left:j}))}m.helper.height(m.size.height);m.helper.width(m.size.width);if(this._helper&&!i.animate){this._proportionallyResize()}}c("body").css("cursor","auto");this.element.removeClass("ui-resizable-resizing");this._propagate("stop",h);if(this._helper){this.helper.remove()}return false},_updateVirtualBoundaries:function(g){var j=this.options,i,h,f,k,e;e={minWidth:a(j.minWidth)?j.minWidth:0,maxWidth:a(j.maxWidth)?j.maxWidth:Infinity,minHeight:a(j.minHeight)?j.minHeight:0,maxHeight:a(j.maxHeight)?j.maxHeight:Infinity};if(this._aspectRatio||g){i=e.minHeight*this.aspectRatio;f=e.minWidth/this.aspectRatio;h=e.maxHeight*this.aspectRatio;k=e.maxWidth/this.aspectRatio;if(i>e.minWidth){e.minWidth=i}if(f>e.minHeight){e.minHeight=f}if(h<e.maxWidth){e.maxWidth=h}if(k<e.maxHeight){e.maxHeight=k}}this._vBoundaries=e},_updateCache:function(e){var f=this.options;this.offset=this.helper.offset();if(a(e.left)){this.position.left=e.left}if(a(e.top)){this.position.top=e.top}if(a(e.height)){this.size.height=e.height}if(a(e.width)){this.size.width=e.width}},_updateRatio:function(h,g){var i=this.options,j=this.position,f=this.size,e=this.axis;if(a(h.height)){h.width=(h.height*this.aspectRatio)}else{if(a(h.width)){h.height=(h.width/this.aspectRatio)}}if(e=="sw"){h.left=j.left+(f.width-h.width);h.top=null}if(e=="nw"){h.top=j.top+(f.height-h.height);h.left=j.left+(f.width-h.width)}return h},_respectSize:function(l,g){var j=this.helper,i=this._vBoundaries,r=this._aspectRatio||g.shiftKey,q=this.axis,t=a(l.width)&&i.maxWidth&&(i.maxWidth<l.width),m=a(l.height)&&i.maxHeight&&(i.maxHeight<l.height),h=a(l.width)&&i.minWidth&&(i.minWidth>l.width),s=a(l.height)&&i.minHeight&&(i.minHeight>l.height);if(h){l.width=i.minWidth}if(s){l.height=i.minHeight}if(t){l.width=i.maxWidth}if(m){l.height=i.maxHeight}var f=this.originalPosition.left+this.originalSize.width,p=this.position.top+this.size.height;var k=/sw|nw|w/.test(q),e=/nw|ne|n/.test(q);if(h&&k){l.left=f-i.minWidth}if(t&&k){l.left=f-i.maxWidth}if(s&&e){l.top=p-i.minHeight}if(m&&e){l.top=p-i.maxHeight}var n=!l.width&&!l.height;if(n&&!l.left&&l.top){l.top=null}else{if(n&&!l.top&&l.left){l.left=null}}return l},_proportionallyResize:function(){var k=this.options;if(!this._proportionallyResizeElements.length){return}var g=this.helper||this.element;for(var f=0;f<this._proportionallyResizeElements.length;f++){var h=this._proportionallyResizeElements[f];if(!this.borderDif){var e=[h.css("borderTopWidth"),h.css("borderRightWidth"),h.css("borderBottomWidth"),h.css("borderLeftWidth")],j=[h.css("paddingTop"),h.css("paddingRight"),h.css("paddingBottom"),h.css("paddingLeft")];this.borderDif=c.map(e,function(l,n){var m=parseInt(l,10)||0,o=parseInt(j[n],10)||0;return m+o})}if(c.browser.msie&&!(!(c(g).is(":hidden")||c(g).parents(":hidden").length))){continue}h.css({height:(g.height()-this.borderDif[0]-this.borderDif[2])||0,width:(g.width()-this.borderDif[1]-this.borderDif[3])||0})}},_renderProxy:function(){var f=this.element,i=this.options;this.elementOffset=f.offset();if(this._helper){this.helper=this.helper||c('<div style="overflow:hidden;"></div>');var e=c.browser.msie&&c.browser.version<7,g=(e?1:0),h=(e?2:-1);this.helper.addClass(this._helper).css({width:this.element.outerWidth()+h,height:this.element.outerHeight()+h,position:"absolute",left:this.elementOffset.left-g+"px",top:this.elementOffset.top-g+"px",zIndex:++i.zIndex});this.helper.appendTo("body").disableSelection()}else{this.helper=this.element}},_change:{e:function(g,f,e){return{width:this.originalSize.width+f}},w:function(h,f,e){var j=this.options,g=this.originalSize,i=this.originalPosition;return{left:i.left+f,width:g.width-f}},n:function(h,f,e){var j=this.options,g=this.originalSize,i=this.originalPosition;return{top:i.top+e,height:g.height-e}},s:function(g,f,e){return{height:this.originalSize.height+e}},se:function(g,f,e){return c.extend(this._change.s.apply(this,arguments),this._change.e.apply(this,[g,f,e]))},sw:function(g,f,e){return c.extend(this._change.s.apply(this,arguments),this._change.w.apply(this,[g,f,e]))},ne:function(g,f,e){return c.extend(this._change.n.apply(this,arguments),this._change.e.apply(this,[g,f,e]))},nw:function(g,f,e){return c.extend(this._change.n.apply(this,arguments),this._change.w.apply(this,[g,f,e]))}},_propagate:function(f,e){c.ui.plugin.call(this,f,[e,this.ui()]);(f!="resize"&&this._trigger(f,e,this.ui()))},plugins:{},ui:function(){return{originalElement:this.originalElement,element:this.element,helper:this.helper,position:this.position,size:this.size,originalSize:this.originalSize,originalPosition:this.originalPosition}}});c.extend(c.ui.resizable,{version:"1.8.21"});c.ui.plugin.add("resizable","alsoResize",{start:function(f,g){var e=c(this).data("resizable"),i=e.options;var h=function(j){c(j).each(function(){var k=c(this);k.data("resizable-alsoresize",{width:parseInt(k.width(),10),height:parseInt(k.height(),10),left:parseInt(k.css("left"),10),top:parseInt(k.css("top"),10)})})};if(typeof(i.alsoResize)=="object"&&!i.alsoResize.parentNode){if(i.alsoResize.length){i.alsoResize=i.alsoResize[0];h(i.alsoResize)}else{c.each(i.alsoResize,function(j){h(j)})}}else{h(i.alsoResize)}},resize:function(g,i){var f=c(this).data("resizable"),j=f.options,h=f.originalSize,l=f.originalPosition;var k={height:(f.size.height-h.height)||0,width:(f.size.width-h.width)||0,top:(f.position.top-l.top)||0,left:(f.position.left-l.left)||0},e=function(m,n){c(m).each(function(){var q=c(this),r=c(this).data("resizable-alsoresize"),p={},o=n&&n.length?n:q.parents(i.originalElement[0]).length?["width","height"]:["width","height","top","left"];c.each(o,function(s,u){var t=(r[u]||0)+(k[u]||0);if(t&&t>=0){p[u]=t||null}});q.css(p)})};if(typeof(j.alsoResize)=="object"&&!j.alsoResize.nodeType){c.each(j.alsoResize,function(m,n){e(m,n)})}else{e(j.alsoResize)}},stop:function(e,f){c(this).removeData("resizable-alsoresize")}});c.ui.plugin.add("resizable","animate",{stop:function(i,n){var p=c(this).data("resizable"),j=p.options;var h=p._proportionallyResizeElements,e=h.length&&(/textarea/i).test(h[0].nodeName),f=e&&c.ui.hasScroll(h[0],"left")?0:p.sizeDiff.height,l=e?0:p.sizeDiff.width;var g={width:(p.size.width-l),height:(p.size.height-f)},k=(parseInt(p.element.css("left"),10)+(p.position.left-p.originalPosition.left))||null,m=(parseInt(p.element.css("top"),10)+(p.position.top-p.originalPosition.top))||null;p.element.animate(c.extend(g,m&&k?{top:m,left:k}:{}),{duration:j.animateDuration,easing:j.animateEasing,step:function(){var o={width:parseInt(p.element.css("width"),10),height:parseInt(p.element.css("height"),10),top:parseInt(p.element.css("top"),10),left:parseInt(p.element.css("left"),10)};if(h&&h.length){c(h[0]).css({width:o.width,height:o.height})}p._updateCache(o);p._propagate("resize",i)}})}});c.ui.plugin.add("resizable","containment",{start:function(f,r){var t=c(this).data("resizable"),j=t.options,l=t.element;var g=j.containment,k=(g instanceof c)?g.get(0):(/parent/.test(g))?l.parent().get(0):g;if(!k){return}t.containerElement=c(k);if(/document/.test(g)||g==document){t.containerOffset={left:0,top:0};t.containerPosition={left:0,top:0};t.parentData={element:c(document),left:0,top:0,width:c(document).width(),height:c(document).height()||document.body.parentNode.scrollHeight}}else{var n=c(k),i=[];c(["Top","Right","Left","Bottom"]).each(function(p,o){i[p]=b(n.css("padding"+o))});t.containerOffset=n.offset();t.containerPosition=n.position();t.containerSize={height:(n.innerHeight()-i[3]),width:(n.innerWidth()-i[1])};var q=t.containerOffset,e=t.containerSize.height,m=t.containerSize.width,h=(c.ui.hasScroll(k,"left")?k.scrollWidth:m),s=(c.ui.hasScroll(k)?k.scrollHeight:e);t.parentData={element:k,left:q.left,top:q.top,width:h,height:s}}},resize:function(g,q){var t=c(this).data("resizable"),i=t.options,f=t.containerSize,p=t.containerOffset,m=t.size,n=t.position,r=t._aspectRatio||g.shiftKey,e={top:0,left:0},h=t.containerElement;if(h[0]!=document&&(/static/).test(h.css("position"))){e=p}if(n.left<(t._helper?p.left:0)){t.size.width=t.size.width+(t._helper?(t.position.left-p.left):(t.position.left-e.left));if(r){t.size.height=t.size.width/t.aspectRatio}t.position.left=i.helper?p.left:0}if(n.top<(t._helper?p.top:0)){t.size.height=t.size.height+(t._helper?(t.position.top-p.top):t.position.top);if(r){t.size.width=t.size.height*t.aspectRatio}t.position.top=t._helper?p.top:0}t.offset.left=t.parentData.left+t.position.left;t.offset.top=t.parentData.top+t.position.top;var l=Math.abs((t._helper?t.offset.left-e.left:(t.offset.left-e.left))+t.sizeDiff.width),s=Math.abs((t._helper?t.offset.top-e.top:(t.offset.top-p.top))+t.sizeDiff.height);var k=t.containerElement.get(0)==t.element.parent().get(0),j=/relative|absolute/.test(t.containerElement.css("position"));if(k&&j){l-=t.parentData.left}if(l+t.size.width>=t.parentData.width){t.size.width=t.parentData.width-l;if(r){t.size.height=t.size.width/t.aspectRatio}}if(s+t.size.height>=t.parentData.height){t.size.height=t.parentData.height-s;if(r){t.size.width=t.size.height*t.aspectRatio}}},stop:function(f,n){var q=c(this).data("resizable"),g=q.options,l=q.position,m=q.containerOffset,e=q.containerPosition,i=q.containerElement;var j=c(q.helper),r=j.offset(),p=j.outerWidth()-q.sizeDiff.width,k=j.outerHeight()-q.sizeDiff.height;if(q._helper&&!g.animate&&(/relative/).test(i.css("position"))){c(this).css({left:r.left-e.left-m.left,width:p,height:k})}if(q._helper&&!g.animate&&(/static/).test(i.css("position"))){c(this).css({left:r.left-e.left-m.left,width:p,height:k})}}});c.ui.plugin.add("resizable","ghost",{start:function(g,h){var e=c(this).data("resizable"),i=e.options,f=e.size;e.ghost=e.originalElement.clone();e.ghost.css({opacity:0.25,display:"block",position:"relative",height:f.height,width:f.width,margin:0,left:0,top:0}).addClass("ui-resizable-ghost").addClass(typeof i.ghost=="string"?i.ghost:"");e.ghost.appendTo(e.helper)},resize:function(f,g){var e=c(this).data("resizable"),h=e.options;if(e.ghost){e.ghost.css({position:"relative",height:e.size.height,width:e.size.width})}},stop:function(f,g){var e=c(this).data("resizable"),h=e.options;if(e.ghost&&e.helper){e.helper.get(0).removeChild(e.ghost.get(0))}}});c.ui.plugin.add("resizable","grid",{resize:function(e,m){var p=c(this).data("resizable"),h=p.options,k=p.size,i=p.originalSize,j=p.originalPosition,n=p.axis,l=h._aspectRatio||e.shiftKey;h.grid=typeof h.grid=="number"?[h.grid,h.grid]:h.grid;var g=Math.round((k.width-i.width)/(h.grid[0]||1))*(h.grid[0]||1),f=Math.round((k.height-i.height)/(h.grid[1]||1))*(h.grid[1]||1);if(/^(se|s|e)$/.test(n)){p.size.width=i.width+g;p.size.height=i.height+f}else{if(/^(ne)$/.test(n)){p.size.width=i.width+g;p.size.height=i.height+f;p.position.top=j.top-f}else{if(/^(sw)$/.test(n)){p.size.width=i.width+g;p.size.height=i.height+f;p.position.left=j.left-g}else{p.size.width=i.width+g;p.size.height=i.height+f;p.position.top=j.top-f;p.position.left=j.left-g}}}}});var b=function(e){return parseInt(e,10)||0};var a=function(e){return !isNaN(parseInt(e,10))}})(jQuery);
/*
 * jQuery UI Selectable 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Selectables
 *
 * Depends:
 *	jquery.ui.core.js
 *	jquery.ui.mouse.js
 *	jquery.ui.widget.js
 */
(function(a,b){a.widget("ui.selectable",a.ui.mouse,{options:{appendTo:"body",autoRefresh:true,distance:0,filter:"*",tolerance:"touch"},_create:function(){var c=this;this.element.addClass("ui-selectable");this.dragged=false;var d;this.refresh=function(){d=a(c.options.filter,c.element[0]);d.addClass("ui-selectee");d.each(function(){var e=a(this);var f=e.offset();a.data(this,"selectable-item",{element:this,$element:e,left:f.left,top:f.top,right:f.left+e.outerWidth(),bottom:f.top+e.outerHeight(),startselected:false,selected:e.hasClass("ui-selected"),selecting:e.hasClass("ui-selecting"),unselecting:e.hasClass("ui-unselecting")})})};this.refresh();this.selectees=d.addClass("ui-selectee");this._mouseInit();this.helper=a("<div class='ui-selectable-helper'></div>")},destroy:function(){this.selectees.removeClass("ui-selectee").removeData("selectable-item");this.element.removeClass("ui-selectable ui-selectable-disabled").removeData("selectable").unbind(".selectable");this._mouseDestroy();return this},_mouseStart:function(e){var c=this;this.opos=[e.pageX,e.pageY];if(this.options.disabled){return}var d=this.options;this.selectees=a(d.filter,this.element[0]);this._trigger("start",e);a(d.appendTo).append(this.helper);this.helper.css({left:e.clientX,top:e.clientY,width:0,height:0});if(d.autoRefresh){this.refresh()}this.selectees.filter(".ui-selected").each(function(){var f=a.data(this,"selectable-item");f.startselected=true;if(!e.metaKey&&!e.ctrlKey){f.$element.removeClass("ui-selected");f.selected=false;f.$element.addClass("ui-unselecting");f.unselecting=true;c._trigger("unselecting",e,{unselecting:f.element})}});a(e.target).parents().andSelf().each(function(){var g=a.data(this,"selectable-item");if(g){var f=(!e.metaKey&&!e.ctrlKey)||!g.$element.hasClass("ui-selected");g.$element.removeClass(f?"ui-unselecting":"ui-selected").addClass(f?"ui-selecting":"ui-unselecting");g.unselecting=!f;g.selecting=f;g.selected=f;if(f){c._trigger("selecting",e,{selecting:g.element})}else{c._trigger("unselecting",e,{unselecting:g.element})}return false}})},_mouseDrag:function(j){var d=this;this.dragged=true;if(this.options.disabled){return}var f=this.options;var e=this.opos[0],i=this.opos[1],c=j.pageX,h=j.pageY;if(e>c){var g=c;c=e;e=g}if(i>h){var g=h;h=i;i=g}this.helper.css({left:e,top:i,width:c-e,height:h-i});this.selectees.each(function(){var k=a.data(this,"selectable-item");if(!k||k.element==d.element[0]){return}var l=false;if(f.tolerance=="touch"){l=(!(k.left>c||k.right<e||k.top>h||k.bottom<i))}else{if(f.tolerance=="fit"){l=(k.left>e&&k.right<c&&k.top>i&&k.bottom<h)}}if(l){if(k.selected){k.$element.removeClass("ui-selected");k.selected=false}if(k.unselecting){k.$element.removeClass("ui-unselecting");k.unselecting=false}if(!k.selecting){k.$element.addClass("ui-selecting");k.selecting=true;d._trigger("selecting",j,{selecting:k.element})}}else{if(k.selecting){if((j.metaKey||j.ctrlKey)&&k.startselected){k.$element.removeClass("ui-selecting");k.selecting=false;k.$element.addClass("ui-selected");k.selected=true}else{k.$element.removeClass("ui-selecting");k.selecting=false;if(k.startselected){k.$element.addClass("ui-unselecting");k.unselecting=true}d._trigger("unselecting",j,{unselecting:k.element})}}if(k.selected){if(!j.metaKey&&!j.ctrlKey&&!k.startselected){k.$element.removeClass("ui-selected");k.selected=false;k.$element.addClass("ui-unselecting");k.unselecting=true;d._trigger("unselecting",j,{unselecting:k.element})}}}});return false},_mouseStop:function(e){var c=this;this.dragged=false;var d=this.options;a(".ui-unselecting",this.element[0]).each(function(){var f=a.data(this,"selectable-item");f.$element.removeClass("ui-unselecting");f.unselecting=false;f.startselected=false;c._trigger("unselected",e,{unselected:f.element})});a(".ui-selecting",this.element[0]).each(function(){var f=a.data(this,"selectable-item");f.$element.removeClass("ui-selecting").addClass("ui-selected");f.selecting=false;f.selected=true;f.startselected=true;c._trigger("selected",e,{selected:f.element})});this._trigger("stop",e);this.helper.remove();return false}});a.extend(a.ui.selectable,{version:"1.8.21"})})(jQuery);
/*
 * jQuery UI Sortable 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Sortables
 *
 * Depends:
 *	jquery.ui.core.js
 *	jquery.ui.mouse.js
 *	jquery.ui.widget.js
 */
(function(a,b){a.widget("ui.sortable",a.ui.mouse,{widgetEventPrefix:"sort",ready:false,options:{appendTo:"parent",axis:false,connectWith:false,containment:false,cursor:"auto",cursorAt:false,dropOnEmpty:true,forcePlaceholderSize:false,forceHelperSize:false,grid:false,handle:false,helper:"original",items:"> *",opacity:false,placeholder:false,revert:false,scroll:true,scrollSensitivity:20,scrollSpeed:20,scope:"default",tolerance:"intersect",zIndex:1000},_create:function(){var c=this.options;this.containerCache={};this.element.addClass("ui-sortable");this.refresh();this.floating=this.items.length?c.axis==="x"||(/left|right/).test(this.items[0].item.css("float"))||(/inline|table-cell/).test(this.items[0].item.css("display")):false;this.offset=this.element.offset();this._mouseInit();this.ready=true},destroy:function(){a.Widget.prototype.destroy.call(this);this.element.removeClass("ui-sortable ui-sortable-disabled");this._mouseDestroy();for(var c=this.items.length-1;c>=0;c--){this.items[c].item.removeData(this.widgetName+"-item")}return this},_setOption:function(c,d){if(c==="disabled"){this.options[c]=d;this.widget()[d?"addClass":"removeClass"]("ui-sortable-disabled")}else{a.Widget.prototype._setOption.apply(this,arguments)}},_mouseCapture:function(g,h){var f=this;if(this.reverting){return false}if(this.options.disabled||this.options.type=="static"){return false}this._refreshItems(g);var e=null,d=this,c=a(g.target).parents().each(function(){if(a.data(this,f.widgetName+"-item")==d){e=a(this);return false}});if(a.data(g.target,f.widgetName+"-item")==d){e=a(g.target)}if(!e){return false}if(this.options.handle&&!h){var i=false;a(this.options.handle,e).find("*").andSelf().each(function(){if(this==g.target){i=true}});if(!i){return false}}this.currentItem=e;this._removeCurrentsFromItems();return true},_mouseStart:function(f,g,c){var h=this.options,d=this;this.currentContainer=this;this.refreshPositions();this.helper=this._createHelper(f);this._cacheHelperProportions();this._cacheMargins();this.scrollParent=this.helper.scrollParent();this.offset=this.currentItem.offset();this.offset={top:this.offset.top-this.margins.top,left:this.offset.left-this.margins.left};a.extend(this.offset,{click:{left:f.pageX-this.offset.left,top:f.pageY-this.offset.top},parent:this._getParentOffset(),relative:this._getRelativeOffset()});this.helper.css("position","absolute");this.cssPosition=this.helper.css("position");this.originalPosition=this._generatePosition(f);this.originalPageX=f.pageX;this.originalPageY=f.pageY;(h.cursorAt&&this._adjustOffsetFromHelper(h.cursorAt));this.domPosition={prev:this.currentItem.prev()[0],parent:this.currentItem.parent()[0]};if(this.helper[0]!=this.currentItem[0]){this.currentItem.hide()}this._createPlaceholder();if(h.containment){this._setContainment()}if(h.cursor){if(a("body").css("cursor")){this._storedCursor=a("body").css("cursor")}a("body").css("cursor",h.cursor)}if(h.opacity){if(this.helper.css("opacity")){this._storedOpacity=this.helper.css("opacity")}this.helper.css("opacity",h.opacity)}if(h.zIndex){if(this.helper.css("zIndex")){this._storedZIndex=this.helper.css("zIndex")}this.helper.css("zIndex",h.zIndex)}if(this.scrollParent[0]!=document&&this.scrollParent[0].tagName!="HTML"){this.overflowOffset=this.scrollParent.offset()}this._trigger("start",f,this._uiHash());if(!this._preserveHelperProportions){this._cacheHelperProportions()}if(!c){for(var e=this.containers.length-1;e>=0;e--){this.containers[e]._trigger("activate",f,d._uiHash(this))}}if(a.ui.ddmanager){a.ui.ddmanager.current=this}if(a.ui.ddmanager&&!h.dropBehaviour){a.ui.ddmanager.prepareOffsets(this,f)}this.dragging=true;this.helper.addClass("ui-sortable-helper");this._mouseDrag(f);return true},_mouseDrag:function(g){this.position=this._generatePosition(g);this.positionAbs=this._convertPositionTo("absolute");if(!this.lastPositionAbs){this.lastPositionAbs=this.positionAbs}if(this.options.scroll){var h=this.options,c=false;if(this.scrollParent[0]!=document&&this.scrollParent[0].tagName!="HTML"){if((this.overflowOffset.top+this.scrollParent[0].offsetHeight)-g.pageY<h.scrollSensitivity){this.scrollParent[0].scrollTop=c=this.scrollParent[0].scrollTop+h.scrollSpeed}else{if(g.pageY-this.overflowOffset.top<h.scrollSensitivity){this.scrollParent[0].scrollTop=c=this.scrollParent[0].scrollTop-h.scrollSpeed}}if((this.overflowOffset.left+this.scrollParent[0].offsetWidth)-g.pageX<h.scrollSensitivity){this.scrollParent[0].scrollLeft=c=this.scrollParent[0].scrollLeft+h.scrollSpeed}else{if(g.pageX-this.overflowOffset.left<h.scrollSensitivity){this.scrollParent[0].scrollLeft=c=this.scrollParent[0].scrollLeft-h.scrollSpeed}}}else{if(g.pageY-a(document).scrollTop()<h.scrollSensitivity){c=a(document).scrollTop(a(document).scrollTop()-h.scrollSpeed)}else{if(a(window).height()-(g.pageY-a(document).scrollTop())<h.scrollSensitivity){c=a(document).scrollTop(a(document).scrollTop()+h.scrollSpeed)}}if(g.pageX-a(document).scrollLeft()<h.scrollSensitivity){c=a(document).scrollLeft(a(document).scrollLeft()-h.scrollSpeed)}else{if(a(window).width()-(g.pageX-a(document).scrollLeft())<h.scrollSensitivity){c=a(document).scrollLeft(a(document).scrollLeft()+h.scrollSpeed)}}}if(c!==false&&a.ui.ddmanager&&!h.dropBehaviour){a.ui.ddmanager.prepareOffsets(this,g)}}this.positionAbs=this._convertPositionTo("absolute");if(!this.options.axis||this.options.axis!="y"){this.helper[0].style.left=this.position.left+"px"}if(!this.options.axis||this.options.axis!="x"){this.helper[0].style.top=this.position.top+"px"}for(var e=this.items.length-1;e>=0;e--){var f=this.items[e],d=f.item[0],j=this._intersectsWithPointer(f);if(!j){continue}if(d!=this.currentItem[0]&&this.placeholder[j==1?"next":"prev"]()[0]!=d&&!a.ui.contains(this.placeholder[0],d)&&(this.options.type=="semi-dynamic"?!a.ui.contains(this.element[0],d):true)){this.direction=j==1?"down":"up";if(this.options.tolerance=="pointer"||this._intersectsWithSides(f)){this._rearrange(g,f)}else{break}this._trigger("change",g,this._uiHash());break}}this._contactContainers(g);if(a.ui.ddmanager){a.ui.ddmanager.drag(this,g)}this._trigger("sort",g,this._uiHash());this.lastPositionAbs=this.positionAbs;return false},_mouseStop:function(d,e){if(!d){return}if(a.ui.ddmanager&&!this.options.dropBehaviour){a.ui.ddmanager.drop(this,d)}if(this.options.revert){var c=this;var f=c.placeholder.offset();c.reverting=true;a(this.helper).animate({left:f.left-this.offset.parent.left-c.margins.left+(this.offsetParent[0]==document.body?0:this.offsetParent[0].scrollLeft),top:f.top-this.offset.parent.top-c.margins.top+(this.offsetParent[0]==document.body?0:this.offsetParent[0].scrollTop)},parseInt(this.options.revert,10)||500,function(){c._clear(d)})}else{this._clear(d,e)}return false},cancel:function(){var c=this;if(this.dragging){this._mouseUp({target:null});if(this.options.helper=="original"){this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper")}else{this.currentItem.show()}for(var d=this.containers.length-1;d>=0;d--){this.containers[d]._trigger("deactivate",null,c._uiHash(this));if(this.containers[d].containerCache.over){this.containers[d]._trigger("out",null,c._uiHash(this));this.containers[d].containerCache.over=0}}}if(this.placeholder){if(this.placeholder[0].parentNode){this.placeholder[0].parentNode.removeChild(this.placeholder[0])}if(this.options.helper!="original"&&this.helper&&this.helper[0].parentNode){this.helper.remove()}a.extend(this,{helper:null,dragging:false,reverting:false,_noFinalSort:null});if(this.domPosition.prev){a(this.domPosition.prev).after(this.currentItem)}else{a(this.domPosition.parent).prepend(this.currentItem)}}return this},serialize:function(e){var c=this._getItemsAsjQuery(e&&e.connected);var d=[];e=e||{};a(c).each(function(){var f=(a(e.item||this).attr(e.attribute||"id")||"").match(e.expression||(/(.+)[-=_](.+)/));if(f){d.push((e.key||f[1]+"[]")+"="+(e.key&&e.expression?f[1]:f[2]))}});if(!d.length&&e.key){d.push(e.key+"=")}return d.join("&")},toArray:function(e){var c=this._getItemsAsjQuery(e&&e.connected);var d=[];e=e||{};c.each(function(){d.push(a(e.item||this).attr(e.attribute||"id")||"")});return d},_intersectsWith:function(m){var e=this.positionAbs.left,d=e+this.helperProportions.width,k=this.positionAbs.top,j=k+this.helperProportions.height;var f=m.left,c=f+m.width,n=m.top,i=n+m.height;var o=this.offset.click.top,h=this.offset.click.left;var g=(k+o)>n&&(k+o)<i&&(e+h)>f&&(e+h)<c;if(this.options.tolerance=="pointer"||this.options.forcePointerForContainers||(this.options.tolerance!="pointer"&&this.helperProportions[this.floating?"width":"height"]>m[this.floating?"width":"height"])){return g}else{return(f<e+(this.helperProportions.width/2)&&d-(this.helperProportions.width/2)<c&&n<k+(this.helperProportions.height/2)&&j-(this.helperProportions.height/2)<i)}},_intersectsWithPointer:function(e){var f=(this.options.axis==="x")||a.ui.isOverAxis(this.positionAbs.top+this.offset.click.top,e.top,e.height),d=(this.options.axis==="y")||a.ui.isOverAxis(this.positionAbs.left+this.offset.click.left,e.left,e.width),h=f&&d,c=this._getDragVerticalDirection(),g=this._getDragHorizontalDirection();if(!h){return false}return this.floating?(((g&&g=="right")||c=="down")?2:1):(c&&(c=="down"?2:1))},_intersectsWithSides:function(f){var d=a.ui.isOverAxis(this.positionAbs.top+this.offset.click.top,f.top+(f.height/2),f.height),e=a.ui.isOverAxis(this.positionAbs.left+this.offset.click.left,f.left+(f.width/2),f.width),c=this._getDragVerticalDirection(),g=this._getDragHorizontalDirection();if(this.floating&&g){return((g=="right"&&e)||(g=="left"&&!e))}else{return c&&((c=="down"&&d)||(c=="up"&&!d))}},_getDragVerticalDirection:function(){var c=this.positionAbs.top-this.lastPositionAbs.top;return c!=0&&(c>0?"down":"up")},_getDragHorizontalDirection:function(){var c=this.positionAbs.left-this.lastPositionAbs.left;return c!=0&&(c>0?"right":"left")},refresh:function(c){this._refreshItems(c);this.refreshPositions();return this},_connectWith:function(){var c=this.options;return c.connectWith.constructor==String?[c.connectWith]:c.connectWith},_getItemsAsjQuery:function(c){var m=this;var h=[];var f=[];var k=this._connectWith();if(k&&c){for(var e=k.length-1;e>=0;e--){var l=a(k[e]);for(var d=l.length-1;d>=0;d--){var g=a.data(l[d],this.widgetName);if(g&&g!=this&&!g.options.disabled){f.push([a.isFunction(g.options.items)?g.options.items.call(g.element):a(g.options.items,g.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"),g])}}}}f.push([a.isFunction(this.options.items)?this.options.items.call(this.element,null,{options:this.options,item:this.currentItem}):a(this.options.items,this.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"),this]);for(var e=f.length-1;e>=0;e--){f[e][0].each(function(){h.push(this)})}return a(h)},_removeCurrentsFromItems:function(){var e=this.currentItem.find(":data("+this.widgetName+"-item)");for(var d=0;d<this.items.length;d++){for(var c=0;c<e.length;c++){if(e[c]==this.items[d].item[0]){this.items.splice(d,1)}}}},_refreshItems:function(c){this.items=[];this.containers=[this];var k=this.items;var q=this;var g=[[a.isFunction(this.options.items)?this.options.items.call(this.element[0],c,{item:this.currentItem}):a(this.options.items,this.element),this]];var m=this._connectWith();if(m&&this.ready){for(var f=m.length-1;f>=0;f--){var n=a(m[f]);for(var e=n.length-1;e>=0;e--){var h=a.data(n[e],this.widgetName);if(h&&h!=this&&!h.options.disabled){g.push([a.isFunction(h.options.items)?h.options.items.call(h.element[0],c,{item:this.currentItem}):a(h.options.items,h.element),h]);this.containers.push(h)}}}}for(var f=g.length-1;f>=0;f--){var l=g[f][1];var d=g[f][0];for(var e=0,o=d.length;e<o;e++){var p=a(d[e]);p.data(this.widgetName+"-item",l);k.push({item:p,instance:l,width:0,height:0,left:0,top:0})}}},refreshPositions:function(c){if(this.offsetParent&&this.helper){this.offset.parent=this._getParentOffset()}for(var e=this.items.length-1;e>=0;e--){var f=this.items[e];if(f.instance!=this.currentContainer&&this.currentContainer&&f.item[0]!=this.currentItem[0]){continue}var d=this.options.toleranceElement?a(this.options.toleranceElement,f.item):f.item;if(!c){f.width=d.outerWidth();f.height=d.outerHeight()}var g=d.offset();f.left=g.left;f.top=g.top}if(this.options.custom&&this.options.custom.refreshContainers){this.options.custom.refreshContainers.call(this)}else{for(var e=this.containers.length-1;e>=0;e--){var g=this.containers[e].element.offset();this.containers[e].containerCache.left=g.left;this.containers[e].containerCache.top=g.top;this.containers[e].containerCache.width=this.containers[e].element.outerWidth();this.containers[e].containerCache.height=this.containers[e].element.outerHeight()}}return this},_createPlaceholder:function(e){var c=e||this,f=c.options;if(!f.placeholder||f.placeholder.constructor==String){var d=f.placeholder;f.placeholder={element:function(){var g=a(document.createElement(c.currentItem[0].nodeName)).addClass(d||c.currentItem[0].className+" ui-sortable-placeholder").removeClass("ui-sortable-helper")[0];if(!d){g.style.visibility="hidden"}return g},update:function(g,h){if(d&&!f.forcePlaceholderSize){return}if(!h.height()){h.height(c.currentItem.innerHeight()-parseInt(c.currentItem.css("paddingTop")||0,10)-parseInt(c.currentItem.css("paddingBottom")||0,10))}if(!h.width()){h.width(c.currentItem.innerWidth()-parseInt(c.currentItem.css("paddingLeft")||0,10)-parseInt(c.currentItem.css("paddingRight")||0,10))}}}}c.placeholder=a(f.placeholder.element.call(c.element,c.currentItem));c.currentItem.after(c.placeholder);f.placeholder.update(c,c.placeholder)},_contactContainers:function(c){var e=null,l=null;for(var g=this.containers.length-1;g>=0;g--){if(a.ui.contains(this.currentItem[0],this.containers[g].element[0])){continue}if(this._intersectsWith(this.containers[g].containerCache)){if(e&&a.ui.contains(this.containers[g].element[0],e.element[0])){continue}e=this.containers[g];l=g}else{if(this.containers[g].containerCache.over){this.containers[g]._trigger("out",c,this._uiHash(this));this.containers[g].containerCache.over=0}}}if(!e){return}if(this.containers.length===1){this.containers[l]._trigger("over",c,this._uiHash(this));this.containers[l].containerCache.over=1}else{if(this.currentContainer!=this.containers[l]){var k=10000;var h=null;var d=this.positionAbs[this.containers[l].floating?"left":"top"];for(var f=this.items.length-1;f>=0;f--){if(!a.ui.contains(this.containers[l].element[0],this.items[f].item[0])){continue}var m=this.containers[l].floating?this.items[f].item.offset().left:this.items[f].item.offset().top;if(Math.abs(m-d)<k){k=Math.abs(m-d);h=this.items[f];this.direction=(m-d>0)?"down":"up"}}if(!h&&!this.options.dropOnEmpty){return}this.currentContainer=this.containers[l];h?this._rearrange(c,h,null,true):this._rearrange(c,null,this.containers[l].element,true);this._trigger("change",c,this._uiHash());this.containers[l]._trigger("change",c,this._uiHash(this));this.options.placeholder.update(this.currentContainer,this.placeholder);this.containers[l]._trigger("over",c,this._uiHash(this));this.containers[l].containerCache.over=1}}},_createHelper:function(d){var e=this.options;var c=a.isFunction(e.helper)?a(e.helper.apply(this.element[0],[d,this.currentItem])):(e.helper=="clone"?this.currentItem.clone():this.currentItem);if(!c.parents("body").length){a(e.appendTo!="parent"?e.appendTo:this.currentItem[0].parentNode)[0].appendChild(c[0])}if(c[0]==this.currentItem[0]){this._storedCSS={width:this.currentItem[0].style.width,height:this.currentItem[0].style.height,position:this.currentItem.css("position"),top:this.currentItem.css("top"),left:this.currentItem.css("left")}}if(c[0].style.width==""||e.forceHelperSize){c.width(this.currentItem.width())}if(c[0].style.height==""||e.forceHelperSize){c.height(this.currentItem.height())}return c},_adjustOffsetFromHelper:function(c){if(typeof c=="string"){c=c.split(" ")}if(a.isArray(c)){c={left:+c[0],top:+c[1]||0}}if("left" in c){this.offset.click.left=c.left+this.margins.left}if("right" in c){this.offset.click.left=this.helperProportions.width-c.right+this.margins.left}if("top" in c){this.offset.click.top=c.top+this.margins.top}if("bottom" in c){this.offset.click.top=this.helperProportions.height-c.bottom+this.margins.top}},_getParentOffset:function(){this.offsetParent=this.helper.offsetParent();var c=this.offsetParent.offset();if(this.cssPosition=="absolute"&&this.scrollParent[0]!=document&&a.ui.contains(this.scrollParent[0],this.offsetParent[0])){c.left+=this.scrollParent.scrollLeft();c.top+=this.scrollParent.scrollTop()}if((this.offsetParent[0]==document.body)||(this.offsetParent[0].tagName&&this.offsetParent[0].tagName.toLowerCase()=="html"&&a.browser.msie)){c={top:0,left:0}}return{top:c.top+(parseInt(this.offsetParent.css("borderTopWidth"),10)||0),left:c.left+(parseInt(this.offsetParent.css("borderLeftWidth"),10)||0)}},_getRelativeOffset:function(){if(this.cssPosition=="relative"){var c=this.currentItem.position();return{top:c.top-(parseInt(this.helper.css("top"),10)||0)+this.scrollParent.scrollTop(),left:c.left-(parseInt(this.helper.css("left"),10)||0)+this.scrollParent.scrollLeft()}}else{return{top:0,left:0}}},_cacheMargins:function(){this.margins={left:(parseInt(this.currentItem.css("marginLeft"),10)||0),top:(parseInt(this.currentItem.css("marginTop"),10)||0)}},_cacheHelperProportions:function(){this.helperProportions={width:this.helper.outerWidth(),height:this.helper.outerHeight()}},_setContainment:function(){var f=this.options;if(f.containment=="parent"){f.containment=this.helper[0].parentNode}if(f.containment=="document"||f.containment=="window"){this.containment=[0-this.offset.relative.left-this.offset.parent.left,0-this.offset.relative.top-this.offset.parent.top,a(f.containment=="document"?document:window).width()-this.helperProportions.width-this.margins.left,(a(f.containment=="document"?document:window).height()||document.body.parentNode.scrollHeight)-this.helperProportions.height-this.margins.top]}if(!(/^(document|window|parent)$/).test(f.containment)){var d=a(f.containment)[0];var e=a(f.containment).offset();var c=(a(d).css("overflow")!="hidden");this.containment=[e.left+(parseInt(a(d).css("borderLeftWidth"),10)||0)+(parseInt(a(d).css("paddingLeft"),10)||0)-this.margins.left,e.top+(parseInt(a(d).css("borderTopWidth"),10)||0)+(parseInt(a(d).css("paddingTop"),10)||0)-this.margins.top,e.left+(c?Math.max(d.scrollWidth,d.offsetWidth):d.offsetWidth)-(parseInt(a(d).css("borderLeftWidth"),10)||0)-(parseInt(a(d).css("paddingRight"),10)||0)-this.helperProportions.width-this.margins.left,e.top+(c?Math.max(d.scrollHeight,d.offsetHeight):d.offsetHeight)-(parseInt(a(d).css("borderTopWidth"),10)||0)-(parseInt(a(d).css("paddingBottom"),10)||0)-this.helperProportions.height-this.margins.top]}},_convertPositionTo:function(g,i){if(!i){i=this.position}var e=g=="absolute"?1:-1;var f=this.options,c=this.cssPosition=="absolute"&&!(this.scrollParent[0]!=document&&a.ui.contains(this.scrollParent[0],this.offsetParent[0]))?this.offsetParent:this.scrollParent,h=(/(html|body)/i).test(c[0].tagName);return{top:(i.top+this.offset.relative.top*e+this.offset.parent.top*e-(a.browser.safari&&this.cssPosition=="fixed"?0:(this.cssPosition=="fixed"?-this.scrollParent.scrollTop():(h?0:c.scrollTop()))*e)),left:(i.left+this.offset.relative.left*e+this.offset.parent.left*e-(a.browser.safari&&this.cssPosition=="fixed"?0:(this.cssPosition=="fixed"?-this.scrollParent.scrollLeft():h?0:c.scrollLeft())*e))}},_generatePosition:function(f){var i=this.options,c=this.cssPosition=="absolute"&&!(this.scrollParent[0]!=document&&a.ui.contains(this.scrollParent[0],this.offsetParent[0]))?this.offsetParent:this.scrollParent,j=(/(html|body)/i).test(c[0].tagName);if(this.cssPosition=="relative"&&!(this.scrollParent[0]!=document&&this.scrollParent[0]!=this.offsetParent[0])){this.offset.relative=this._getRelativeOffset()}var e=f.pageX;var d=f.pageY;if(this.originalPosition){if(this.containment){if(f.pageX-this.offset.click.left<this.containment[0]){e=this.containment[0]+this.offset.click.left}if(f.pageY-this.offset.click.top<this.containment[1]){d=this.containment[1]+this.offset.click.top}if(f.pageX-this.offset.click.left>this.containment[2]){e=this.containment[2]+this.offset.click.left}if(f.pageY-this.offset.click.top>this.containment[3]){d=this.containment[3]+this.offset.click.top}}if(i.grid){var h=this.originalPageY+Math.round((d-this.originalPageY)/i.grid[1])*i.grid[1];d=this.containment?(!(h-this.offset.click.top<this.containment[1]||h-this.offset.click.top>this.containment[3])?h:(!(h-this.offset.click.top<this.containment[1])?h-i.grid[1]:h+i.grid[1])):h;var g=this.originalPageX+Math.round((e-this.originalPageX)/i.grid[0])*i.grid[0];e=this.containment?(!(g-this.offset.click.left<this.containment[0]||g-this.offset.click.left>this.containment[2])?g:(!(g-this.offset.click.left<this.containment[0])?g-i.grid[0]:g+i.grid[0])):g}}return{top:(d-this.offset.click.top-this.offset.relative.top-this.offset.parent.top+(a.browser.safari&&this.cssPosition=="fixed"?0:(this.cssPosition=="fixed"?-this.scrollParent.scrollTop():(j?0:c.scrollTop())))),left:(e-this.offset.click.left-this.offset.relative.left-this.offset.parent.left+(a.browser.safari&&this.cssPosition=="fixed"?0:(this.cssPosition=="fixed"?-this.scrollParent.scrollLeft():j?0:c.scrollLeft())))}},_rearrange:function(h,g,d,f){d?d[0].appendChild(this.placeholder[0]):g.item[0].parentNode.insertBefore(this.placeholder[0],(this.direction=="down"?g.item[0]:g.item[0].nextSibling));this.counter=this.counter?++this.counter:1;var e=this,c=this.counter;window.setTimeout(function(){if(c==e.counter){e.refreshPositions(!f)}},0)},_clear:function(e,f){this.reverting=false;var g=[],c=this;if(!this._noFinalSort&&this.currentItem.parent().length){this.placeholder.before(this.currentItem)}this._noFinalSort=null;if(this.helper[0]==this.currentItem[0]){for(var d in this._storedCSS){if(this._storedCSS[d]=="auto"||this._storedCSS[d]=="static"){this._storedCSS[d]=""}}this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper")}else{this.currentItem.show()}if(this.fromOutside&&!f){g.push(function(h){this._trigger("receive",h,this._uiHash(this.fromOutside))})}if((this.fromOutside||this.domPosition.prev!=this.currentItem.prev().not(".ui-sortable-helper")[0]||this.domPosition.parent!=this.currentItem.parent()[0])&&!f){g.push(function(h){this._trigger("update",h,this._uiHash())})}if(!a.ui.contains(this.element[0],this.currentItem[0])){if(!f){g.push(function(h){this._trigger("remove",h,this._uiHash())})}for(var d=this.containers.length-1;d>=0;d--){if(a.ui.contains(this.containers[d].element[0],this.currentItem[0])&&!f){g.push((function(h){return function(i){h._trigger("receive",i,this._uiHash(this))}}).call(this,this.containers[d]));g.push((function(h){return function(i){h._trigger("update",i,this._uiHash(this))}}).call(this,this.containers[d]))}}}for(var d=this.containers.length-1;d>=0;d--){if(!f){g.push((function(h){return function(i){h._trigger("deactivate",i,this._uiHash(this))}}).call(this,this.containers[d]))}if(this.containers[d].containerCache.over){g.push((function(h){return function(i){h._trigger("out",i,this._uiHash(this))}}).call(this,this.containers[d]));this.containers[d].containerCache.over=0}}if(this._storedCursor){a("body").css("cursor",this._storedCursor)}if(this._storedOpacity){this.helper.css("opacity",this._storedOpacity)}if(this._storedZIndex){this.helper.css("zIndex",this._storedZIndex=="auto"?"":this._storedZIndex)}this.dragging=false;if(this.cancelHelperRemoval){if(!f){this._trigger("beforeStop",e,this._uiHash());for(var d=0;d<g.length;d++){g[d].call(this,e)}this._trigger("stop",e,this._uiHash())}return false}if(!f){this._trigger("beforeStop",e,this._uiHash())}this.placeholder[0].parentNode.removeChild(this.placeholder[0]);if(this.helper[0]!=this.currentItem[0]){this.helper.remove()}this.helper=null;if(!f){for(var d=0;d<g.length;d++){g[d].call(this,e)}this._trigger("stop",e,this._uiHash())}this.fromOutside=false;return true},_trigger:function(){if(a.Widget.prototype._trigger.apply(this,arguments)===false){this.cancel()}},_uiHash:function(d){var c=d||this;return{helper:c.helper,placeholder:c.placeholder||a([]),position:c.position,originalPosition:c.originalPosition,offset:c.positionAbs,item:c.currentItem,sender:d?d.element:null}}});a.extend(a.ui.sortable,{version:"1.8.21"})})(jQuery);
/*
 * jQuery UI Accordion 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Accordion
 *
 * Depends:
 *	jquery.ui.core.js
 *	jquery.ui.widget.js
 */
(function(a,b){a.widget("ui.accordion",{options:{active:0,animated:"slide",autoHeight:true,clearStyle:false,collapsible:false,event:"click",fillSpace:false,header:"> li > :first-child,> :not(li):even",icons:{header:"ui-icon-triangle-1-e",headerSelected:"ui-icon-triangle-1-s"},navigation:false,navigationFilter:function(){return this.href.toLowerCase()===location.href.toLowerCase()}},_create:function(){var c=this,d=c.options;c.running=0;c.element.addClass("ui-accordion ui-widget ui-helper-reset").children("li").addClass("ui-accordion-li-fix");c.headers=c.element.find(d.header).addClass("ui-accordion-header ui-helper-reset ui-state-default ui-corner-all").bind("mouseenter.accordion",function(){if(d.disabled){return}a(this).addClass("ui-state-hover")}).bind("mouseleave.accordion",function(){if(d.disabled){return}a(this).removeClass("ui-state-hover")}).bind("focus.accordion",function(){if(d.disabled){return}a(this).addClass("ui-state-focus")}).bind("blur.accordion",function(){if(d.disabled){return}a(this).removeClass("ui-state-focus")});c.headers.next().addClass("ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom");if(d.navigation){var e=c.element.find("a").filter(d.navigationFilter).eq(0);if(e.length){var f=e.closest(".ui-accordion-header");if(f.length){c.active=f}else{c.active=e.closest(".ui-accordion-content").prev()}}}c.active=c._findActive(c.active||d.active).addClass("ui-state-default ui-state-active").toggleClass("ui-corner-all").toggleClass("ui-corner-top");c.active.next().addClass("ui-accordion-content-active");c._createIcons();c.resize();c.element.attr("role","tablist");c.headers.attr("role","tab").bind("keydown.accordion",function(g){return c._keydown(g)}).next().attr("role","tabpanel");c.headers.not(c.active||"").attr({"aria-expanded":"false","aria-selected":"false",tabIndex:-1}).next().hide();if(!c.active.length){c.headers.eq(0).attr("tabIndex",0)}else{c.active.attr({"aria-expanded":"true","aria-selected":"true",tabIndex:0})}if(!a.browser.safari){c.headers.find("a").attr("tabIndex",-1)}if(d.event){c.headers.bind(d.event.split(" ").join(".accordion ")+".accordion",function(g){c._clickHandler.call(c,g,this);g.preventDefault()})}},_createIcons:function(){var c=this.options;if(c.icons){a("<span></span>").addClass("ui-icon "+c.icons.header).prependTo(this.headers);this.active.children(".ui-icon").toggleClass(c.icons.header).toggleClass(c.icons.headerSelected);this.element.addClass("ui-accordion-icons")}},_destroyIcons:function(){this.headers.children(".ui-icon").remove();this.element.removeClass("ui-accordion-icons")},destroy:function(){var c=this.options;this.element.removeClass("ui-accordion ui-widget ui-helper-reset").removeAttr("role");this.headers.unbind(".accordion").removeClass("ui-accordion-header ui-accordion-disabled ui-helper-reset ui-state-default ui-corner-all ui-state-active ui-state-disabled ui-corner-top").removeAttr("role").removeAttr("aria-expanded").removeAttr("aria-selected").removeAttr("tabIndex");this.headers.find("a").removeAttr("tabIndex");this._destroyIcons();var d=this.headers.next().css("display","").removeAttr("role").removeClass("ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content ui-accordion-content-active ui-accordion-disabled ui-state-disabled");if(c.autoHeight||c.fillHeight){d.css("height","")}return a.Widget.prototype.destroy.call(this)},_setOption:function(c,d){a.Widget.prototype._setOption.apply(this,arguments);if(c=="active"){this.activate(d)}if(c=="icons"){this._destroyIcons();if(d){this._createIcons()}}if(c=="disabled"){this.headers.add(this.headers.next())[d?"addClass":"removeClass"]("ui-accordion-disabled ui-state-disabled")}},_keydown:function(f){if(this.options.disabled||f.altKey||f.ctrlKey){return}var g=a.ui.keyCode,e=this.headers.length,c=this.headers.index(f.target),d=false;switch(f.keyCode){case g.RIGHT:case g.DOWN:d=this.headers[(c+1)%e];break;case g.LEFT:case g.UP:d=this.headers[(c-1+e)%e];break;case g.SPACE:case g.ENTER:this._clickHandler({target:f.target},f.target);f.preventDefault()}if(d){a(f.target).attr("tabIndex",-1);a(d).attr("tabIndex",0);d.focus();return false}return true},resize:function(){var c=this.options,e;if(c.fillSpace){if(a.browser.msie){var d=this.element.parent().css("overflow");this.element.parent().css("overflow","hidden")}e=this.element.parent().height();if(a.browser.msie){this.element.parent().css("overflow",d)}this.headers.each(function(){e-=a(this).outerHeight(true)});this.headers.next().each(function(){a(this).height(Math.max(0,e-a(this).innerHeight()+a(this).height()))}).css("overflow","auto")}else{if(c.autoHeight){e=0;this.headers.next().each(function(){e=Math.max(e,a(this).height("").height())}).height(e)}}return this},activate:function(c){this.options.active=c;var d=this._findActive(c)[0];this._clickHandler({target:d},d);return this},_findActive:function(c){return c?typeof c==="number"?this.headers.filter(":eq("+c+")"):this.headers.not(this.headers.not(c)):c===false?a([]):this.headers.filter(":eq(0)")},_clickHandler:function(c,g){var l=this.options;if(l.disabled){return}if(!c.target){if(!l.collapsible){return}this.active.removeClass("ui-state-active ui-corner-top").addClass("ui-state-default ui-corner-all").children(".ui-icon").removeClass(l.icons.headerSelected).addClass(l.icons.header);this.active.next().addClass("ui-accordion-content-active");var i=this.active.next(),f={options:l,newHeader:a([]),oldHeader:l.active,newContent:a([]),oldContent:i},d=(this.active=a([]));this._toggle(d,i,f);return}var h=a(c.currentTarget||g),j=h[0]===this.active[0];l.active=l.collapsible&&j?false:this.headers.index(h);if(this.running||(!l.collapsible&&j)){return}var e=this.active,d=h.next(),i=this.active.next(),f={options:l,newHeader:j&&l.collapsible?a([]):h,oldHeader:this.active,newContent:j&&l.collapsible?a([]):d,oldContent:i},k=this.headers.index(this.active[0])>this.headers.index(h[0]);this.active=j?a([]):h;this._toggle(d,i,f,j,k);e.removeClass("ui-state-active ui-corner-top").addClass("ui-state-default ui-corner-all").children(".ui-icon").removeClass(l.icons.headerSelected).addClass(l.icons.header);if(!j){h.removeClass("ui-state-default ui-corner-all").addClass("ui-state-active ui-corner-top").children(".ui-icon").removeClass(l.icons.header).addClass(l.icons.headerSelected);h.next().addClass("ui-accordion-content-active")}return},_toggle:function(c,i,g,j,k){var m=this,n=m.options;m.toShow=c;m.toHide=i;m.data=g;var d=function(){if(!m){return}return m._completed.apply(m,arguments)};m._trigger("changestart",null,m.data);m.running=i.size()===0?c.size():i.size();if(n.animated){var f={};if(n.collapsible&&j){f={toShow:a([]),toHide:i,complete:d,down:k,autoHeight:n.autoHeight||n.fillSpace}}else{f={toShow:c,toHide:i,complete:d,down:k,autoHeight:n.autoHeight||n.fillSpace}}if(!n.proxied){n.proxied=n.animated}if(!n.proxiedDuration){n.proxiedDuration=n.duration}n.animated=a.isFunction(n.proxied)?n.proxied(f):n.proxied;n.duration=a.isFunction(n.proxiedDuration)?n.proxiedDuration(f):n.proxiedDuration;var l=a.ui.accordion.animations,e=n.duration,h=n.animated;if(h&&!l[h]&&!a.easing[h]){h="slide"}if(!l[h]){l[h]=function(o){this.slide(o,{easing:h,duration:e||700})}}l[h](f)}else{if(n.collapsible&&j){c.toggle()}else{i.hide();c.show()}d(true)}i.prev().attr({"aria-expanded":"false","aria-selected":"false",tabIndex:-1}).blur();c.prev().attr({"aria-expanded":"true","aria-selected":"true",tabIndex:0}).focus()},_completed:function(c){this.running=c?0:--this.running;if(this.running){return}if(this.options.clearStyle){this.toShow.add(this.toHide).css({height:"",overflow:""})}this.toHide.removeClass("ui-accordion-content-active");if(this.toHide.length){this.toHide.parent()[0].className=this.toHide.parent()[0].className}this._trigger("change",null,this.data)}});a.extend(a.ui.accordion,{version:"1.8.21",animations:{slide:function(k,i){k=a.extend({easing:"swing",duration:300},k,i);if(!k.toHide.size()){k.toShow.animate({height:"show",paddingTop:"show",paddingBottom:"show"},k);return}if(!k.toShow.size()){k.toHide.animate({height:"hide",paddingTop:"hide",paddingBottom:"hide"},k);return}var d=k.toShow.css("overflow"),h=0,e={},g={},f=["height","paddingTop","paddingBottom"],c;var j=k.toShow;c=j[0].style.width;j.width(j.parent().width()-parseFloat(j.css("paddingLeft"))-parseFloat(j.css("paddingRight"))-(parseFloat(j.css("borderLeftWidth"))||0)-(parseFloat(j.css("borderRightWidth"))||0));a.each(f,function(l,n){g[n]="hide";var m=(""+a.css(k.toShow[0],n)).match(/^([\d+-.]+)(.*)$/);e[n]={value:m[1],unit:m[2]||"px"}});k.toShow.css({height:0,overflow:"hidden"}).show();k.toHide.filter(":hidden").each(k.complete).end().filter(":visible").animate(g,{step:function(l,m){if(m.prop=="height"){h=(m.end-m.start===0)?0:(m.now-m.start)/(m.end-m.start)}k.toShow[0].style[m.prop]=(h*e[m.prop].value)+e[m.prop].unit},duration:k.duration,easing:k.easing,complete:function(){if(!k.autoHeight){k.toShow.css("height","")}k.toShow.css({width:c,overflow:d});k.complete()}})},bounceslide:function(c){this.slide(c,{easing:c.down?"easeOutBounce":"swing",duration:c.down?1000:200})}}})})(jQuery);
/*
 * jQuery UI Autocomplete 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Autocomplete
 *
 * Depends:
 *	jquery.ui.core.js
 *	jquery.ui.widget.js
 *	jquery.ui.position.js
 */
(function(a,b){var c=0;a.widget("ui.autocomplete",{options:{appendTo:"body",autoFocus:false,delay:300,minLength:1,position:{my:"left top",at:"left bottom",collision:"none"},source:null},pending:0,_create:function(){var d=this,f=this.element[0].ownerDocument,e;this.isMultiLine=this.element.is("textarea");this.element.addClass("ui-autocomplete-input").attr("autocomplete","off").attr({role:"textbox","aria-autocomplete":"list","aria-haspopup":"true"}).bind("keydown.autocomplete",function(g){if(d.options.disabled||d.element.propAttr("readOnly")){return}e=false;var h=a.ui.keyCode;switch(g.keyCode){case h.PAGE_UP:d._move("previousPage",g);break;case h.PAGE_DOWN:d._move("nextPage",g);break;case h.UP:d._keyEvent("previous",g);break;case h.DOWN:d._keyEvent("next",g);break;case h.ENTER:case h.NUMPAD_ENTER:if(d.menu.active){e=true;g.preventDefault()}case h.TAB:if(!d.menu.active){return}d.menu.select(g);break;case h.ESCAPE:d.element.val(d.term);d.close(g);break;default:clearTimeout(d.searching);d.searching=setTimeout(function(){if(d.term!=d.element.val()){d.selectedItem=null;d.search(null,g)}},d.options.delay);break}}).bind("keypress.autocomplete",function(g){if(e){e=false;g.preventDefault()}}).bind("focus.autocomplete",function(){if(d.options.disabled){return}d.selectedItem=null;d.previous=d.element.val()}).bind("blur.autocomplete",function(g){if(d.options.disabled){return}clearTimeout(d.searching);d.closing=setTimeout(function(){d.close(g);d._change(g)},150)});this._initSource();this.menu=a("<ul></ul>").addClass("ui-autocomplete").appendTo(a(this.options.appendTo||"body",f)[0]).mousedown(function(g){var h=d.menu.element[0];if(!a(g.target).closest(".ui-menu-item").length){setTimeout(function(){a(document).one("mousedown",function(i){if(i.target!==d.element[0]&&i.target!==h&&!a.ui.contains(h,i.target)){d.close()}})},1)}setTimeout(function(){clearTimeout(d.closing)},13)}).menu({focus:function(h,i){var g=i.item.data("item.autocomplete");if(false!==d._trigger("focus",h,{item:g})){if(/^key/.test(h.originalEvent.type)){d.element.val(g.value)}}},selected:function(i,j){var h=j.item.data("item.autocomplete"),g=d.previous;if(d.element[0]!==f.activeElement){d.element.focus();d.previous=g;setTimeout(function(){d.previous=g;d.selectedItem=h},1)}if(false!==d._trigger("select",i,{item:h})){d.element.val(h.value)}d.term=d.element.val();d.close(i);d.selectedItem=h},blur:function(g,h){if(d.menu.element.is(":visible")&&(d.element.val()!==d.term)){d.element.val(d.term)}}}).zIndex(this.element.zIndex()+1).css({top:0,left:0}).hide().data("menu");if(a.fn.bgiframe){this.menu.element.bgiframe()}d.beforeunloadHandler=function(){d.element.removeAttr("autocomplete")};a(window).bind("beforeunload",d.beforeunloadHandler)},destroy:function(){this.element.removeClass("ui-autocomplete-input").removeAttr("autocomplete").removeAttr("role").removeAttr("aria-autocomplete").removeAttr("aria-haspopup");this.menu.element.remove();a(window).unbind("beforeunload",this.beforeunloadHandler);a.Widget.prototype.destroy.call(this)},_setOption:function(d,e){a.Widget.prototype._setOption.apply(this,arguments);if(d==="source"){this._initSource()}if(d==="appendTo"){this.menu.element.appendTo(a(e||"body",this.element[0].ownerDocument)[0])}if(d==="disabled"&&e&&this.xhr){this.xhr.abort()}},_initSource:function(){var d=this,f,e;if(a.isArray(this.options.source)){f=this.options.source;this.source=function(h,g){g(a.ui.autocomplete.filter(f,h.term))}}else{if(typeof this.options.source==="string"){e=this.options.source;this.source=function(h,g){if(d.xhr){d.xhr.abort()}d.xhr=a.ajax({url:e,data:h,dataType:"json",success:function(j,i){g(j)},error:function(){g([])}})}}else{this.source=this.options.source}}},search:function(e,d){e=e!=null?e:this.element.val();this.term=this.element.val();if(e.length<this.options.minLength){return this.close(d)}clearTimeout(this.closing);if(this._trigger("search",d)===false){return}return this._search(e)},_search:function(d){this.pending++;this.element.addClass("ui-autocomplete-loading");this.source({term:d},this._response())},_response:function(){var e=this,d=++c;return function(f){if(d===c){e.__response(f)}e.pending--;if(!e.pending){e.element.removeClass("ui-autocomplete-loading")}}},__response:function(d){if(!this.options.disabled&&d&&d.length){d=this._normalize(d);this._suggest(d);this._trigger("open")}else{this.close()}},close:function(d){clearTimeout(this.closing);if(this.menu.element.is(":visible")){this.menu.element.hide();this.menu.deactivate();this._trigger("close",d)}},_change:function(d){if(this.previous!==this.element.val()){this._trigger("change",d,{item:this.selectedItem})}},_normalize:function(d){if(d.length&&d[0].label&&d[0].value){return d}return a.map(d,function(e){if(typeof e==="string"){return{label:e,value:e}}return a.extend({label:e.label||e.value,value:e.value||e.label},e)})},_suggest:function(d){var e=this.menu.element.empty().zIndex(this.element.zIndex()+1);this._renderMenu(e,d);this.menu.deactivate();this.menu.refresh();e.show();this._resizeMenu();e.position(a.extend({of:this.element},this.options.position));if(this.options.autoFocus){this.menu.next(new a.Event("mouseover"))}},_resizeMenu:function(){var d=this.menu.element;d.outerWidth(Math.max(d.width("").outerWidth()+1,this.element.outerWidth()))},_renderMenu:function(f,e){var d=this;a.each(e,function(g,h){d._renderItem(f,h)})},_renderItem:function(d,e){return a("<li></li>").data("item.autocomplete",e).append(a("<a></a>").text(e.label)).appendTo(d)},_move:function(e,d){if(!this.menu.element.is(":visible")){this.search(null,d);return}if(this.menu.first()&&/^previous/.test(e)||this.menu.last()&&/^next/.test(e)){this.element.val(this.term);this.menu.deactivate();return}this.menu[e](d)},widget:function(){return this.menu.element},_keyEvent:function(e,d){if(!this.isMultiLine||this.menu.element.is(":visible")){this._move(e,d);d.preventDefault()}}});a.extend(a.ui.autocomplete,{escapeRegex:function(d){return d.replace(/[-[\]{}()*+?.,\\^$|#\s]/g,"\\$&")},filter:function(f,d){var e=new RegExp(a.ui.autocomplete.escapeRegex(d),"i");return a.grep(f,function(g){return e.test(g.label||g.value||g)})}})}(jQuery));(function(a){a.widget("ui.menu",{_create:function(){var b=this;this.element.addClass("ui-menu ui-widget ui-widget-content ui-corner-all").attr({role:"listbox","aria-activedescendant":"ui-active-menuitem"}).click(function(c){if(!a(c.target).closest(".ui-menu-item a").length){return}c.preventDefault();b.select(c)});this.refresh()},refresh:function(){var c=this;var b=this.element.children("li:not(.ui-menu-item):has(a)").addClass("ui-menu-item").attr("role","menuitem");b.children("a").addClass("ui-corner-all").attr("tabindex",-1).mouseenter(function(d){c.activate(d,a(this).parent())}).mouseleave(function(){c.deactivate()})},activate:function(e,d){this.deactivate();if(this.hasScroll()){var f=d.offset().top-this.element.offset().top,b=this.element.scrollTop(),c=this.element.height();if(f<0){this.element.scrollTop(b+f)}else{if(f>=c){this.element.scrollTop(b+f-c+d.height())}}}this.active=d.eq(0).children("a").addClass("ui-state-hover").attr("id","ui-active-menuitem").end();this._trigger("focus",e,{item:d})},deactivate:function(){if(!this.active){return}this.active.children("a").removeClass("ui-state-hover").removeAttr("id");this._trigger("blur");this.active=null},next:function(b){this.move("next",".ui-menu-item:first",b)},previous:function(b){this.move("prev",".ui-menu-item:last",b)},first:function(){return this.active&&!this.active.prevAll(".ui-menu-item").length},last:function(){return this.active&&!this.active.nextAll(".ui-menu-item").length},move:function(e,d,c){if(!this.active){this.activate(c,this.element.children(d));return}var b=this.active[e+"All"](".ui-menu-item").eq(0);if(b.length){this.activate(c,b)}else{this.activate(c,this.element.children(d))}},nextPage:function(d){if(this.hasScroll()){if(!this.active||this.last()){this.activate(d,this.element.children(".ui-menu-item:first"));return}var e=this.active.offset().top,c=this.element.height(),b=this.element.children(".ui-menu-item").filter(function(){var f=a(this).offset().top-e-c+a(this).height();return f<10&&f>-10});if(!b.length){b=this.element.children(".ui-menu-item:last")}this.activate(d,b)}else{this.activate(d,this.element.children(".ui-menu-item").filter(!this.active||this.last()?":first":":last"))}},previousPage:function(d){if(this.hasScroll()){if(!this.active||this.first()){this.activate(d,this.element.children(".ui-menu-item:last"));return}var e=this.active.offset().top,c=this.element.height(),b=this.element.children(".ui-menu-item").filter(function(){var f=a(this).offset().top-e+c-a(this).height();return f<10&&f>-10});if(!b.length){b=this.element.children(".ui-menu-item:first")}this.activate(d,b)}else{this.activate(d,this.element.children(".ui-menu-item").filter(!this.active||this.first()?":last":":first"))}},hasScroll:function(){return this.element.height()<this.element[a.fn.prop?"prop":"attr"]("scrollHeight")},select:function(b){this._trigger("selected",b,{item:this.active})}})}(jQuery));
/*
 * jQuery UI Button 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Button
 *
 * Depends:
 *	jquery.ui.core.js
 *	jquery.ui.widget.js
 */
(function(f,b){var k,e,a,h,i="ui-button ui-widget ui-state-default ui-corner-all",c="ui-state-hover ui-state-active ",g="ui-button-icons-only ui-button-icon-only ui-button-text-icons ui-button-text-icon-primary ui-button-text-icon-secondary ui-button-text-only",j=function(){var l=f(this).find(":ui-button");setTimeout(function(){l.button("refresh")},1)},d=function(m){var l=m.name,n=m.form,o=f([]);if(l){if(n){o=f(n).find("[name='"+l+"']")}else{o=f("[name='"+l+"']",m.ownerDocument).filter(function(){return !this.form})}}return o};f.widget("ui.button",{options:{disabled:null,text:true,label:null,icons:{primary:null,secondary:null}},_create:function(){this.element.closest("form").unbind("reset.button").bind("reset.button",j);if(typeof this.options.disabled!=="boolean"){this.options.disabled=!!this.element.propAttr("disabled")}else{this.element.propAttr("disabled",this.options.disabled)}this._determineButtonType();this.hasTitle=!!this.buttonElement.attr("title");var l=this,n=this.options,o=this.type==="checkbox"||this.type==="radio",p="ui-state-hover"+(!o?" ui-state-active":""),m="ui-state-focus";if(n.label===null){n.label=this.buttonElement.html()}this.buttonElement.addClass(i).attr("role","button").bind("mouseenter.button",function(){if(n.disabled){return}f(this).addClass("ui-state-hover");if(this===k){f(this).addClass("ui-state-active")}}).bind("mouseleave.button",function(){if(n.disabled){return}f(this).removeClass(p)}).bind("click.button",function(q){if(n.disabled){q.preventDefault();q.stopImmediatePropagation()}});this.element.bind("focus.button",function(){l.buttonElement.addClass(m)}).bind("blur.button",function(){l.buttonElement.removeClass(m)});if(o){this.element.bind("change.button",function(){if(h){return}l.refresh()});this.buttonElement.bind("mousedown.button",function(q){if(n.disabled){return}h=false;e=q.pageX;a=q.pageY}).bind("mouseup.button",function(q){if(n.disabled){return}if(e!==q.pageX||a!==q.pageY){h=true}})}if(this.type==="checkbox"){this.buttonElement.bind("click.button",function(){if(n.disabled||h){return false}f(this).toggleClass("ui-state-active");l.buttonElement.attr("aria-pressed",l.element[0].checked)})}else{if(this.type==="radio"){this.buttonElement.bind("click.button",function(){if(n.disabled||h){return false}f(this).addClass("ui-state-active");l.buttonElement.attr("aria-pressed","true");var q=l.element[0];d(q).not(q).map(function(){return f(this).button("widget")[0]}).removeClass("ui-state-active").attr("aria-pressed","false")})}else{this.buttonElement.bind("mousedown.button",function(){if(n.disabled){return false}f(this).addClass("ui-state-active");k=this;f(document).one("mouseup",function(){k=null})}).bind("mouseup.button",function(){if(n.disabled){return false}f(this).removeClass("ui-state-active")}).bind("keydown.button",function(q){if(n.disabled){return false}if(q.keyCode==f.ui.keyCode.SPACE||q.keyCode==f.ui.keyCode.ENTER){f(this).addClass("ui-state-active")}}).bind("keyup.button",function(){f(this).removeClass("ui-state-active")});if(this.buttonElement.is("a")){this.buttonElement.keyup(function(q){if(q.keyCode===f.ui.keyCode.SPACE){f(this).click()}})}}}this._setOption("disabled",n.disabled);this._resetButton()},_determineButtonType:function(){if(this.element.is(":checkbox")){this.type="checkbox"}else{if(this.element.is(":radio")){this.type="radio"}else{if(this.element.is("input")){this.type="input"}else{this.type="button"}}}if(this.type==="checkbox"||this.type==="radio"){var l=this.element.parents().filter(":last"),n="label[for='"+this.element.attr("id")+"']";this.buttonElement=l.find(n);if(!this.buttonElement.length){l=l.length?l.siblings():this.element.siblings();this.buttonElement=l.filter(n);if(!this.buttonElement.length){this.buttonElement=l.find(n)}}this.element.addClass("ui-helper-hidden-accessible");var m=this.element.is(":checked");if(m){this.buttonElement.addClass("ui-state-active")}this.buttonElement.attr("aria-pressed",m)}else{this.buttonElement=this.element}},widget:function(){return this.buttonElement},destroy:function(){this.element.removeClass("ui-helper-hidden-accessible");this.buttonElement.removeClass(i+" "+c+" "+g).removeAttr("role").removeAttr("aria-pressed").html(this.buttonElement.find(".ui-button-text").html());if(!this.hasTitle){this.buttonElement.removeAttr("title")}f.Widget.prototype.destroy.call(this)},_setOption:function(l,m){f.Widget.prototype._setOption.apply(this,arguments);if(l==="disabled"){if(m){this.element.propAttr("disabled",true)}else{this.element.propAttr("disabled",false)}return}this._resetButton()},refresh:function(){var l=this.element.is(":disabled");if(l!==this.options.disabled){this._setOption("disabled",l)}if(this.type==="radio"){d(this.element[0]).each(function(){if(f(this).is(":checked")){f(this).button("widget").addClass("ui-state-active").attr("aria-pressed","true")}else{f(this).button("widget").removeClass("ui-state-active").attr("aria-pressed","false")}})}else{if(this.type==="checkbox"){if(this.element.is(":checked")){this.buttonElement.addClass("ui-state-active").attr("aria-pressed","true")}else{this.buttonElement.removeClass("ui-state-active").attr("aria-pressed","false")}}}},_resetButton:function(){if(this.type==="input"){if(this.options.label){this.element.val(this.options.label)}return}var p=this.buttonElement.removeClass(g),n=f("<span></span>",this.element[0].ownerDocument).addClass("ui-button-text").html(this.options.label).appendTo(p.empty()).text(),m=this.options.icons,l=m.primary&&m.secondary,o=[];if(m.primary||m.secondary){if(this.options.text){o.push("ui-button-text-icon"+(l?"s":(m.primary?"-primary":"-secondary")))}if(m.primary){p.prepend("<span class='ui-button-icon-primary ui-icon "+m.primary+"'></span>")}if(m.secondary){p.append("<span class='ui-button-icon-secondary ui-icon "+m.secondary+"'></span>")}if(!this.options.text){o.push(l?"ui-button-icons-only":"ui-button-icon-only");if(!this.hasTitle){p.attr("title",n)}}}else{o.push("ui-button-text-only")}p.addClass(o.join(" "))}});f.widget("ui.buttonset",{options:{items:":button, :submit, :reset, :checkbox, :radio, a, :data(button)"},_create:function(){this.element.addClass("ui-buttonset")},_init:function(){this.refresh()},_setOption:function(l,m){if(l==="disabled"){this.buttons.button("option",l,m)}f.Widget.prototype._setOption.apply(this,arguments)},refresh:function(){var l=this.element.css("direction")==="rtl";this.buttons=this.element.find(this.options.items).filter(":ui-button").button("refresh").end().not(":ui-button").button().end().map(function(){return f(this).button("widget")[0]}).removeClass("ui-corner-all ui-corner-left ui-corner-right").filter(":first").addClass(l?"ui-corner-right":"ui-corner-left").end().filter(":last").addClass(l?"ui-corner-left":"ui-corner-right").end().end()},destroy:function(){this.element.removeClass("ui-buttonset");this.buttons.map(function(){return f(this).button("widget")[0]}).removeClass("ui-corner-left ui-corner-right").end().button("destroy");f.Widget.prototype.destroy.call(this)}})}(jQuery));
/*
 * jQuery UI Dialog 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Dialog
 *
 * Depends:
 *	jquery.ui.core.js
 *	jquery.ui.widget.js
 *  jquery.ui.button.js
 *	jquery.ui.draggable.js
 *	jquery.ui.mouse.js
 *	jquery.ui.position.js
 *	jquery.ui.resizable.js
 */
(function(e,f){var c="ui-dialog ui-widget ui-widget-content ui-corner-all ",b={buttons:true,height:true,maxHeight:true,maxWidth:true,minHeight:true,minWidth:true,width:true},d={maxHeight:true,maxWidth:true,minHeight:true,minWidth:true},a=e.attrFn||{val:true,css:true,html:true,text:true,data:true,width:true,height:true,offset:true,click:true};e.widget("ui.dialog",{options:{autoOpen:true,buttons:{},closeOnEscape:true,closeText:"close",dialogClass:"",draggable:true,hide:null,height:"auto",maxHeight:false,maxWidth:false,minHeight:150,minWidth:150,modal:false,position:{my:"center",at:"center",collision:"fit",using:function(h){var g=e(this).css(h).offset().top;if(g<0){e(this).css("top",h.top-g)}}},resizable:true,show:null,stack:true,title:"",width:300,zIndex:1000},_create:function(){this.originalTitle=this.element.attr("title");if(typeof this.originalTitle!=="string"){this.originalTitle=""}this.options.title=this.options.title||this.originalTitle;var o=this,p=o.options,m=p.title||"&#160;",h=e.ui.dialog.getTitleId(o.element),n=(o.uiDialog=e("<div></div>")).appendTo(document.body).hide().addClass(c+p.dialogClass).css({zIndex:p.zIndex}).attr("tabIndex",-1).css("outline",0).keydown(function(q){if(p.closeOnEscape&&!q.isDefaultPrevented()&&q.keyCode&&q.keyCode===e.ui.keyCode.ESCAPE){o.close(q);q.preventDefault()}}).attr({role:"dialog","aria-labelledby":h}).mousedown(function(q){o.moveToTop(false,q)}),j=o.element.show().removeAttr("title").addClass("ui-dialog-content ui-widget-content").appendTo(n),i=(o.uiDialogTitlebar=e("<div></div>")).addClass("ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix").prependTo(n),l=e('<a href="#"></a>').addClass("ui-dialog-titlebar-close ui-corner-all").attr("role","button").hover(function(){l.addClass("ui-state-hover")},function(){l.removeClass("ui-state-hover")}).focus(function(){l.addClass("ui-state-focus")}).blur(function(){l.removeClass("ui-state-focus")}).click(function(q){o.close(q);return false}).appendTo(i),k=(o.uiDialogTitlebarCloseText=e("<span></span>")).addClass("ui-icon ui-icon-closethick").text(p.closeText).appendTo(l),g=e("<span></span>").addClass("ui-dialog-title").attr("id",h).html(m).prependTo(i);if(e.isFunction(p.beforeclose)&&!e.isFunction(p.beforeClose)){p.beforeClose=p.beforeclose}i.find("*").add(i).disableSelection();if(p.draggable&&e.fn.draggable){o._makeDraggable()}if(p.resizable&&e.fn.resizable){o._makeResizable()}o._createButtons(p.buttons);o._isOpen=false;if(e.fn.bgiframe){n.bgiframe()}},_init:function(){if(this.options.autoOpen){this.open()}},destroy:function(){var g=this;if(g.overlay){g.overlay.destroy()}g.uiDialog.hide();g.element.unbind(".dialog").removeData("dialog").removeClass("ui-dialog-content ui-widget-content").hide().appendTo("body");g.uiDialog.remove();if(g.originalTitle){g.element.attr("title",g.originalTitle)}return g},widget:function(){return this.uiDialog},close:function(j){var g=this,i,h;if(false===g._trigger("beforeClose",j)){return}if(g.overlay){g.overlay.destroy()}g.uiDialog.unbind("keypress.ui-dialog");g._isOpen=false;if(g.options.hide){g.uiDialog.hide(g.options.hide,function(){g._trigger("close",j)})}else{g.uiDialog.hide();g._trigger("close",j)}e.ui.dialog.overlay.resize();if(g.options.modal){i=0;e(".ui-dialog").each(function(){if(this!==g.uiDialog[0]){h=e(this).css("z-index");if(!isNaN(h)){i=Math.max(i,h)}}});e.ui.dialog.maxZ=i}return g},isOpen:function(){return this._isOpen},moveToTop:function(k,j){var g=this,i=g.options,h;if((i.modal&&!k)||(!i.stack&&!i.modal)){return g._trigger("focus",j)}if(i.zIndex>e.ui.dialog.maxZ){e.ui.dialog.maxZ=i.zIndex}if(g.overlay){e.ui.dialog.maxZ+=1;g.overlay.$el.css("z-index",e.ui.dialog.overlay.maxZ=e.ui.dialog.maxZ)}h={scrollTop:g.element.scrollTop(),scrollLeft:g.element.scrollLeft()};e.ui.dialog.maxZ+=1;g.uiDialog.css("z-index",e.ui.dialog.maxZ);g.element.attr(h);g._trigger("focus",j);return g},open:function(){if(this._isOpen){return}var h=this,i=h.options,g=h.uiDialog;h.overlay=i.modal?new e.ui.dialog.overlay(h):null;h._size();h._position(i.position);g.show(i.show);h.moveToTop(true);if(i.modal){g.bind("keydown.ui-dialog",function(l){if(l.keyCode!==e.ui.keyCode.TAB){return}var k=e(":tabbable",this),m=k.filter(":first"),j=k.filter(":last");if(l.target===j[0]&&!l.shiftKey){m.focus(1);return false}else{if(l.target===m[0]&&l.shiftKey){j.focus(1);return false}}})}e(h.element.find(":tabbable").get().concat(g.find(".ui-dialog-buttonpane :tabbable").get().concat(g.get()))).eq(0).focus();h._isOpen=true;h._trigger("open");return h},_createButtons:function(j){var i=this,g=false,h=e("<div></div>").addClass("ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"),k=e("<div></div>").addClass("ui-dialog-buttonset").appendTo(h);i.uiDialog.find(".ui-dialog-buttonpane").remove();if(typeof j==="object"&&j!==null){e.each(j,function(){return !(g=true)})}if(g){e.each(j,function(l,n){n=e.isFunction(n)?{click:n,text:l}:n;var m=e('<button type="button"></button>').click(function(){n.click.apply(i.element[0],arguments)}).appendTo(k);e.each(n,function(o,p){if(o==="click"){return}if(o in a){m[o](p)}else{m.attr(o,p)}});if(e.fn.button){m.button()}});h.appendTo(i.uiDialog)}},_makeDraggable:function(){var g=this,j=g.options,k=e(document),i;function h(l){return{position:l.position,offset:l.offset}}g.uiDialog.draggable({cancel:".ui-dialog-content, .ui-dialog-titlebar-close",handle:".ui-dialog-titlebar",containment:"document",start:function(l,m){i=j.height==="auto"?"auto":e(this).height();e(this).height(e(this).height()).addClass("ui-dialog-dragging");g._trigger("dragStart",l,h(m))},drag:function(l,m){g._trigger("drag",l,h(m))},stop:function(l,m){j.position=[m.position.left-k.scrollLeft(),m.position.top-k.scrollTop()];e(this).removeClass("ui-dialog-dragging").height(i);g._trigger("dragStop",l,h(m));e.ui.dialog.overlay.resize()}})},_makeResizable:function(l){l=(l===f?this.options.resizable:l);var h=this,k=h.options,g=h.uiDialog.css("position"),j=(typeof l==="string"?l:"n,e,s,w,se,sw,ne,nw");function i(m){return{originalPosition:m.originalPosition,originalSize:m.originalSize,position:m.position,size:m.size}}h.uiDialog.resizable({cancel:".ui-dialog-content",containment:"document",alsoResize:h.element,maxWidth:k.maxWidth,maxHeight:k.maxHeight,minWidth:k.minWidth,minHeight:h._minHeight(),handles:j,start:function(m,n){e(this).addClass("ui-dialog-resizing");h._trigger("resizeStart",m,i(n))},resize:function(m,n){h._trigger("resize",m,i(n))},stop:function(m,n){e(this).removeClass("ui-dialog-resizing");k.height=e(this).height();k.width=e(this).width();h._trigger("resizeStop",m,i(n));e.ui.dialog.overlay.resize()}}).css("position",g).find(".ui-resizable-se").addClass("ui-icon ui-icon-grip-diagonal-se")},_minHeight:function(){var g=this.options;if(g.height==="auto"){return g.minHeight}else{return Math.min(g.minHeight,g.height)}},_position:function(h){var i=[],j=[0,0],g;if(h){if(typeof h==="string"||(typeof h==="object"&&"0" in h)){i=h.split?h.split(" "):[h[0],h[1]];if(i.length===1){i[1]=i[0]}e.each(["left","top"],function(l,k){if(+i[l]===i[l]){j[l]=i[l];i[l]=k}});h={my:i.join(" "),at:i.join(" "),offset:j.join(" ")}}h=e.extend({},e.ui.dialog.prototype.options.position,h)}else{h=e.ui.dialog.prototype.options.position}g=this.uiDialog.is(":visible");if(!g){this.uiDialog.show()}this.uiDialog.css({top:0,left:0}).position(e.extend({of:window},h));if(!g){this.uiDialog.hide()}},_setOptions:function(j){var h=this,g={},i=false;e.each(j,function(k,l){h._setOption(k,l);if(k in b){i=true}if(k in d){g[k]=l}});if(i){this._size()}if(this.uiDialog.is(":data(resizable)")){this.uiDialog.resizable("option",g)}},_setOption:function(j,k){var h=this,g=h.uiDialog;switch(j){case"beforeclose":j="beforeClose";break;case"buttons":h._createButtons(k);break;case"closeText":h.uiDialogTitlebarCloseText.text(""+k);break;case"dialogClass":g.removeClass(h.options.dialogClass).addClass(c+k);break;case"disabled":if(k){g.addClass("ui-dialog-disabled")}else{g.removeClass("ui-dialog-disabled")}break;case"draggable":var i=g.is(":data(draggable)");if(i&&!k){g.draggable("destroy")}if(!i&&k){h._makeDraggable()}break;case"position":h._position(k);break;case"resizable":var l=g.is(":data(resizable)");if(l&&!k){g.resizable("destroy")}if(l&&typeof k==="string"){g.resizable("option","handles",k)}if(!l&&k!==false){h._makeResizable(k)}break;case"title":e(".ui-dialog-title",h.uiDialogTitlebar).html(""+(k||"&#160;"));break}e.Widget.prototype._setOption.apply(h,arguments)},_size:function(){var k=this.options,h,j,g=this.uiDialog.is(":visible");this.element.show().css({width:"auto",minHeight:0,height:0});if(k.minWidth>k.width){k.width=k.minWidth}h=this.uiDialog.css({height:"auto",width:k.width}).height();j=Math.max(0,k.minHeight-h);if(k.height==="auto"){if(e.support.minHeight){this.element.css({minHeight:j,height:"auto"})}else{this.uiDialog.show();var i=this.element.css("height","auto").height();if(!g){this.uiDialog.hide()}this.element.height(Math.max(i,j))}}else{this.element.height(Math.max(k.height-h,0))}if(this.uiDialog.is(":data(resizable)")){this.uiDialog.resizable("option","minHeight",this._minHeight())}}});e.extend(e.ui.dialog,{version:"1.8.21",uuid:0,maxZ:0,getTitleId:function(g){var h=g.attr("id");if(!h){this.uuid+=1;h=this.uuid}return"ui-dialog-title-"+h},overlay:function(g){this.$el=e.ui.dialog.overlay.create(g)}});e.extend(e.ui.dialog.overlay,{instances:[],oldInstances:[],maxZ:0,events:e.map("focus,mousedown,mouseup,keydown,keypress,click".split(","),function(g){return g+".dialog-overlay"}).join(" "),create:function(h){if(this.instances.length===0){setTimeout(function(){if(e.ui.dialog.overlay.instances.length){e(document).bind(e.ui.dialog.overlay.events,function(i){if(e(i.target).zIndex()<e.ui.dialog.overlay.maxZ){return false}})}},1);e(document).bind("keydown.dialog-overlay",function(i){if(h.options.closeOnEscape&&!i.isDefaultPrevented()&&i.keyCode&&i.keyCode===e.ui.keyCode.ESCAPE){h.close(i);i.preventDefault()}});e(window).bind("resize.dialog-overlay",e.ui.dialog.overlay.resize)}var g=(this.oldInstances.pop()||e("<div></div>").addClass("ui-widget-overlay")).appendTo(document.body).css({width:this.width(),height:this.height()});if(e.fn.bgiframe){g.bgiframe()}this.instances.push(g);return g},destroy:function(g){var h=e.inArray(g,this.instances);if(h!=-1){this.oldInstances.push(this.instances.splice(h,1)[0])}if(this.instances.length===0){e([document,window]).unbind(".dialog-overlay")}g.remove();var i=0;e.each(this.instances,function(){i=Math.max(i,this.css("z-index"))});this.maxZ=i},height:function(){var h,g;if(e.browser.msie&&e.browser.version<7){h=Math.max(document.documentElement.scrollHeight,document.body.scrollHeight);g=Math.max(document.documentElement.offsetHeight,document.body.offsetHeight);if(h<g){return e(window).height()+"px"}else{return h+"px"}}else{return e(document).height()+"px"}},width:function(){var g,h;if(e.browser.msie){g=Math.max(document.documentElement.scrollWidth,document.body.scrollWidth);h=Math.max(document.documentElement.offsetWidth,document.body.offsetWidth);if(g<h){return e(window).width()+"px"}else{return g+"px"}}else{return e(document).width()+"px"}},resize:function(){var g=e([]);e.each(e.ui.dialog.overlay.instances,function(){g=g.add(this)});g.css({width:0,height:0}).css({width:e.ui.dialog.overlay.width(),height:e.ui.dialog.overlay.height()})}});e.extend(e.ui.dialog.overlay.prototype,{destroy:function(){e.ui.dialog.overlay.destroy(this.$el)}})}(jQuery));
/*
 * jQuery UI Slider 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Slider
 *
 * Depends:
 *	jquery.ui.core.js
 *	jquery.ui.mouse.js
 *	jquery.ui.widget.js
 */
(function(b,c){var a=5;b.widget("ui.slider",b.ui.mouse,{widgetEventPrefix:"slide",options:{animate:false,distance:0,max:100,min:0,orientation:"horizontal",range:false,step:1,value:0,values:null},_create:function(){var e=this,k=this.options,j=this.element.find(".ui-slider-handle").addClass("ui-state-default ui-corner-all"),h="<a class='ui-slider-handle ui-state-default ui-corner-all' href='#'></a>",d=(k.values&&k.values.length)||1,g=[];this._keySliding=false;this._mouseSliding=false;this._animateOff=true;this._handleIndex=null;this._detectOrientation();this._mouseInit();this.element.addClass("ui-slider ui-slider-"+this.orientation+" ui-widget ui-widget-content ui-corner-all"+(k.disabled?" ui-slider-disabled ui-disabled":""));this.range=b([]);if(k.range){if(k.range===true){if(!k.values){k.values=[this._valueMin(),this._valueMin()]}if(k.values.length&&k.values.length!==2){k.values=[k.values[0],k.values[0]]}}this.range=b("<div></div>").appendTo(this.element).addClass("ui-slider-range ui-widget-header"+((k.range==="min"||k.range==="max")?" ui-slider-range-"+k.range:""))}for(var f=j.length;f<d;f+=1){g.push(h)}this.handles=j.add(b(g.join("")).appendTo(e.element));this.handle=this.handles.eq(0);this.handles.add(this.range).filter("a").click(function(i){i.preventDefault()}).hover(function(){if(!k.disabled){b(this).addClass("ui-state-hover")}},function(){b(this).removeClass("ui-state-hover")}).focus(function(){if(!k.disabled){b(".ui-slider .ui-state-focus").removeClass("ui-state-focus");b(this).addClass("ui-state-focus")}else{b(this).blur()}}).blur(function(){b(this).removeClass("ui-state-focus")});this.handles.each(function(l){b(this).data("index.ui-slider-handle",l)});this.handles.keydown(function(o){var l=b(this).data("index.ui-slider-handle"),p,m,i,n;if(e.options.disabled){return}switch(o.keyCode){case b.ui.keyCode.HOME:case b.ui.keyCode.END:case b.ui.keyCode.PAGE_UP:case b.ui.keyCode.PAGE_DOWN:case b.ui.keyCode.UP:case b.ui.keyCode.RIGHT:case b.ui.keyCode.DOWN:case b.ui.keyCode.LEFT:o.preventDefault();if(!e._keySliding){e._keySliding=true;b(this).addClass("ui-state-active");p=e._start(o,l);if(p===false){return}}break}n=e.options.step;if(e.options.values&&e.options.values.length){m=i=e.values(l)}else{m=i=e.value()}switch(o.keyCode){case b.ui.keyCode.HOME:i=e._valueMin();break;case b.ui.keyCode.END:i=e._valueMax();break;case b.ui.keyCode.PAGE_UP:i=e._trimAlignValue(m+((e._valueMax()-e._valueMin())/a));break;case b.ui.keyCode.PAGE_DOWN:i=e._trimAlignValue(m-((e._valueMax()-e._valueMin())/a));break;case b.ui.keyCode.UP:case b.ui.keyCode.RIGHT:if(m===e._valueMax()){return}i=e._trimAlignValue(m+n);break;case b.ui.keyCode.DOWN:case b.ui.keyCode.LEFT:if(m===e._valueMin()){return}i=e._trimAlignValue(m-n);break}e._slide(o,l,i)}).keyup(function(l){var i=b(this).data("index.ui-slider-handle");if(e._keySliding){e._keySliding=false;e._stop(l,i);e._change(l,i);b(this).removeClass("ui-state-active")}});this._refreshValue();this._animateOff=false},destroy:function(){this.handles.remove();this.range.remove();this.element.removeClass("ui-slider ui-slider-horizontal ui-slider-vertical ui-slider-disabled ui-widget ui-widget-content ui-corner-all").removeData("slider").unbind(".slider");this._mouseDestroy();return this},_mouseCapture:function(f){var g=this.options,j,l,e,h,n,k,m,i,d;if(g.disabled){return false}this.elementSize={width:this.element.outerWidth(),height:this.element.outerHeight()};this.elementOffset=this.element.offset();j={x:f.pageX,y:f.pageY};l=this._normValueFromMouse(j);e=this._valueMax()-this._valueMin()+1;n=this;this.handles.each(function(o){var p=Math.abs(l-n.values(o));if(e>p){e=p;h=b(this);k=o}});if(g.range===true&&this.values(1)===g.min){k+=1;h=b(this.handles[k])}m=this._start(f,k);if(m===false){return false}this._mouseSliding=true;n._handleIndex=k;h.addClass("ui-state-active").focus();i=h.offset();d=!b(f.target).parents().andSelf().is(".ui-slider-handle");this._clickOffset=d?{left:0,top:0}:{left:f.pageX-i.left-(h.width()/2),top:f.pageY-i.top-(h.height()/2)-(parseInt(h.css("borderTopWidth"),10)||0)-(parseInt(h.css("borderBottomWidth"),10)||0)+(parseInt(h.css("marginTop"),10)||0)};if(!this.handles.hasClass("ui-state-hover")){this._slide(f,k,l)}this._animateOff=true;return true},_mouseStart:function(d){return true},_mouseDrag:function(f){var d={x:f.pageX,y:f.pageY},e=this._normValueFromMouse(d);this._slide(f,this._handleIndex,e);return false},_mouseStop:function(d){this.handles.removeClass("ui-state-active");this._mouseSliding=false;this._stop(d,this._handleIndex);this._change(d,this._handleIndex);this._handleIndex=null;this._clickOffset=null;this._animateOff=false;return false},_detectOrientation:function(){this.orientation=(this.options.orientation==="vertical")?"vertical":"horizontal"},_normValueFromMouse:function(e){var d,h,g,f,i;if(this.orientation==="horizontal"){d=this.elementSize.width;h=e.x-this.elementOffset.left-(this._clickOffset?this._clickOffset.left:0)}else{d=this.elementSize.height;h=e.y-this.elementOffset.top-(this._clickOffset?this._clickOffset.top:0)}g=(h/d);if(g>1){g=1}if(g<0){g=0}if(this.orientation==="vertical"){g=1-g}f=this._valueMax()-this._valueMin();i=this._valueMin()+g*f;return this._trimAlignValue(i)},_start:function(f,e){var d={handle:this.handles[e],value:this.value()};if(this.options.values&&this.options.values.length){d.value=this.values(e);d.values=this.values()}return this._trigger("start",f,d)},_slide:function(h,g,f){var d,e,i;if(this.options.values&&this.options.values.length){d=this.values(g?0:1);if((this.options.values.length===2&&this.options.range===true)&&((g===0&&f>d)||(g===1&&f<d))){f=d}if(f!==this.values(g)){e=this.values();e[g]=f;i=this._trigger("slide",h,{handle:this.handles[g],value:f,values:e});d=this.values(g?0:1);if(i!==false){this.values(g,f,true)}}}else{if(f!==this.value()){i=this._trigger("slide",h,{handle:this.handles[g],value:f});if(i!==false){this.value(f)}}}},_stop:function(f,e){var d={handle:this.handles[e],value:this.value()};if(this.options.values&&this.options.values.length){d.value=this.values(e);d.values=this.values()}this._trigger("stop",f,d)},_change:function(f,e){if(!this._keySliding&&!this._mouseSliding){var d={handle:this.handles[e],value:this.value()};if(this.options.values&&this.options.values.length){d.value=this.values(e);d.values=this.values()}this._trigger("change",f,d)}},value:function(d){if(arguments.length){this.options.value=this._trimAlignValue(d);this._refreshValue();this._change(null,0);return}return this._value()},values:function(e,h){var g,d,f;if(arguments.length>1){this.options.values[e]=this._trimAlignValue(h);this._refreshValue();this._change(null,e);return}if(arguments.length){if(b.isArray(arguments[0])){g=this.options.values;d=arguments[0];for(f=0;f<g.length;f+=1){g[f]=this._trimAlignValue(d[f]);this._change(null,f)}this._refreshValue()}else{if(this.options.values&&this.options.values.length){return this._values(e)}else{return this.value()}}}else{return this._values()}},_setOption:function(e,f){var d,g=0;if(b.isArray(this.options.values)){g=this.options.values.length}b.Widget.prototype._setOption.apply(this,arguments);switch(e){case"disabled":if(f){this.handles.filter(".ui-state-focus").blur();this.handles.removeClass("ui-state-hover");this.handles.propAttr("disabled",true);this.element.addClass("ui-disabled")}else{this.handles.propAttr("disabled",false);this.element.removeClass("ui-disabled")}break;case"orientation":this._detectOrientation();this.element.removeClass("ui-slider-horizontal ui-slider-vertical").addClass("ui-slider-"+this.orientation);this._refreshValue();break;case"value":this._animateOff=true;this._refreshValue();this._change(null,0);this._animateOff=false;break;case"values":this._animateOff=true;this._refreshValue();for(d=0;d<g;d+=1){this._change(null,d)}this._animateOff=false;break}},_value:function(){var d=this.options.value;d=this._trimAlignValue(d);return d},_values:function(d){var g,f,e;if(arguments.length){g=this.options.values[d];g=this._trimAlignValue(g);return g}else{f=this.options.values.slice();for(e=0;e<f.length;e+=1){f[e]=this._trimAlignValue(f[e])}return f}},_trimAlignValue:function(g){if(g<=this._valueMin()){return this._valueMin()}if(g>=this._valueMax()){return this._valueMax()}var d=(this.options.step>0)?this.options.step:1,f=(g-this._valueMin())%d,e=g-f;if(Math.abs(f)*2>=d){e+=(f>0)?d:(-d)}return parseFloat(e.toFixed(5))},_valueMin:function(){return this.options.min},_valueMax:function(){return this.options.max},_refreshValue:function(){var g=this.options.range,f=this.options,m=this,e=(!this._animateOff)?f.animate:false,h,d={},i,k,j,l;if(this.options.values&&this.options.values.length){this.handles.each(function(o,n){h=(m.values(o)-m._valueMin())/(m._valueMax()-m._valueMin())*100;d[m.orientation==="horizontal"?"left":"bottom"]=h+"%";b(this).stop(1,1)[e?"animate":"css"](d,f.animate);if(m.options.range===true){if(m.orientation==="horizontal"){if(o===0){m.range.stop(1,1)[e?"animate":"css"]({left:h+"%"},f.animate)}if(o===1){m.range[e?"animate":"css"]({width:(h-i)+"%"},{queue:false,duration:f.animate})}}else{if(o===0){m.range.stop(1,1)[e?"animate":"css"]({bottom:(h)+"%"},f.animate)}if(o===1){m.range[e?"animate":"css"]({height:(h-i)+"%"},{queue:false,duration:f.animate})}}}i=h})}else{k=this.value();j=this._valueMin();l=this._valueMax();h=(l!==j)?(k-j)/(l-j)*100:0;d[m.orientation==="horizontal"?"left":"bottom"]=h+"%";this.handle.stop(1,1)[e?"animate":"css"](d,f.animate);if(g==="min"&&this.orientation==="horizontal"){this.range.stop(1,1)[e?"animate":"css"]({width:h+"%"},f.animate)}if(g==="max"&&this.orientation==="horizontal"){this.range[e?"animate":"css"]({width:(100-h)+"%"},{queue:false,duration:f.animate})}if(g==="min"&&this.orientation==="vertical"){this.range.stop(1,1)[e?"animate":"css"]({height:h+"%"},f.animate)}if(g==="max"&&this.orientation==="vertical"){this.range[e?"animate":"css"]({height:(100-h)+"%"},{queue:false,duration:f.animate})}}}});b.extend(b.ui.slider,{version:"1.8.21"})}(jQuery));
/*
 * jQuery UI Tabs 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Tabs
 *
 * Depends:
 *	jquery.ui.core.js
 *	jquery.ui.widget.js
 */
(function(d,f){var c=0,b=0;function e(){return ++c}function a(){return ++b}d.widget("ui.tabs",{options:{add:null,ajaxOptions:null,cache:false,cookie:null,collapsible:false,disable:null,disabled:[],enable:null,event:"click",fx:null,idPrefix:"ui-tabs-",load:null,panelTemplate:"<div></div>",remove:null,select:null,show:null,spinner:"<em>Loading&#8230;</em>",tabTemplate:"<li><a href='#{href}'><span>#{label}</span></a></li>"},_create:function(){this._tabify(true)},_setOption:function(g,h){if(g=="selected"){if(this.options.collapsible&&h==this.options.selected){return}this.select(h)}else{this.options[g]=h;this._tabify()}},_tabId:function(g){return g.title&&g.title.replace(/\s/g,"_").replace(/[^\w\u00c0-\uFFFF-]/g,"")||this.options.idPrefix+e()},_sanitizeSelector:function(g){return g.replace(/:/g,"\\:")},_cookie:function(){var g=this.cookie||(this.cookie=this.options.cookie.name||"ui-tabs-"+a());return d.cookie.apply(null,[g].concat(d.makeArray(arguments)))},_ui:function(h,g){return{tab:h,panel:g,index:this.anchors.index(h)}},_cleanup:function(){this.lis.filter(".ui-state-processing").removeClass("ui-state-processing").find("span:data(label.tabs)").each(function(){var g=d(this);g.html(g.data("label.tabs")).removeData("label.tabs")})},_tabify:function(t){var u=this,j=this.options,h=/^#.+/;this.list=this.element.find("ol,ul").eq(0);this.lis=d(" > li:has(a[href])",this.list);this.anchors=this.lis.map(function(){return d("a",this)[0]});this.panels=d([]);this.anchors.each(function(w,o){var v=d(o).attr("href");var x=v.split("#")[0],y;if(x&&(x===location.toString().split("#")[0]||(y=d("base")[0])&&x===y.href)){v=o.hash;o.href=v}if(h.test(v)){u.panels=u.panels.add(u.element.find(u._sanitizeSelector(v)))}else{if(v&&v!=="#"){d.data(o,"href.tabs",v);d.data(o,"load.tabs",v.replace(/#.*$/,""));var A=u._tabId(o);o.href="#"+A;var z=u.element.find("#"+A);if(!z.length){z=d(j.panelTemplate).attr("id",A).addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").insertAfter(u.panels[w-1]||u.list);z.data("destroy.tabs",true)}u.panels=u.panels.add(z)}else{j.disabled.push(w)}}});if(t){this.element.addClass("ui-tabs ui-widget ui-widget-content ui-corner-all");this.list.addClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all");this.lis.addClass("ui-state-default ui-corner-top");this.panels.addClass("ui-tabs-panel ui-widget-content ui-corner-bottom");if(j.selected===f){if(location.hash){this.anchors.each(function(v,o){if(o.hash==location.hash){j.selected=v;return false}})}if(typeof j.selected!=="number"&&j.cookie){j.selected=parseInt(u._cookie(),10)}if(typeof j.selected!=="number"&&this.lis.filter(".ui-tabs-selected").length){j.selected=this.lis.index(this.lis.filter(".ui-tabs-selected"))}j.selected=j.selected||(this.lis.length?0:-1)}else{if(j.selected===null){j.selected=-1}}j.selected=((j.selected>=0&&this.anchors[j.selected])||j.selected<0)?j.selected:0;j.disabled=d.unique(j.disabled.concat(d.map(this.lis.filter(".ui-state-disabled"),function(v,o){return u.lis.index(v)}))).sort();if(d.inArray(j.selected,j.disabled)!=-1){j.disabled.splice(d.inArray(j.selected,j.disabled),1)}this.panels.addClass("ui-tabs-hide");this.lis.removeClass("ui-tabs-selected ui-state-active");if(j.selected>=0&&this.anchors.length){u.element.find(u._sanitizeSelector(u.anchors[j.selected].hash)).removeClass("ui-tabs-hide");this.lis.eq(j.selected).addClass("ui-tabs-selected ui-state-active");u.element.queue("tabs",function(){u._trigger("show",null,u._ui(u.anchors[j.selected],u.element.find(u._sanitizeSelector(u.anchors[j.selected].hash))[0]))});this.load(j.selected)}d(window).bind("unload",function(){u.lis.add(u.anchors).unbind(".tabs");u.lis=u.anchors=u.panels=null})}else{j.selected=this.lis.index(this.lis.filter(".ui-tabs-selected"))}this.element[j.collapsible?"addClass":"removeClass"]("ui-tabs-collapsible");if(j.cookie){this._cookie(j.selected,j.cookie)}for(var m=0,s;(s=this.lis[m]);m++){d(s)[d.inArray(m,j.disabled)!=-1&&!d(s).hasClass("ui-tabs-selected")?"addClass":"removeClass"]("ui-state-disabled")}if(j.cache===false){this.anchors.removeData("cache.tabs")}this.lis.add(this.anchors).unbind(".tabs");if(j.event!=="mouseover"){var l=function(o,i){if(i.is(":not(.ui-state-disabled)")){i.addClass("ui-state-"+o)}};var p=function(o,i){i.removeClass("ui-state-"+o)};this.lis.bind("mouseover.tabs",function(){l("hover",d(this))});this.lis.bind("mouseout.tabs",function(){p("hover",d(this))});this.anchors.bind("focus.tabs",function(){l("focus",d(this).closest("li"))});this.anchors.bind("blur.tabs",function(){p("focus",d(this).closest("li"))})}var g,n;if(j.fx){if(d.isArray(j.fx)){g=j.fx[0];n=j.fx[1]}else{g=n=j.fx}}function k(i,o){i.css("display","");if(!d.support.opacity&&o.opacity){i[0].style.removeAttribute("filter")}}var q=n?function(i,o){d(i).closest("li").addClass("ui-tabs-selected ui-state-active");o.hide().removeClass("ui-tabs-hide").animate(n,n.duration||"normal",function(){k(o,n);u._trigger("show",null,u._ui(i,o[0]))})}:function(i,o){d(i).closest("li").addClass("ui-tabs-selected ui-state-active");o.removeClass("ui-tabs-hide");u._trigger("show",null,u._ui(i,o[0]))};var r=g?function(o,i){i.animate(g,g.duration||"normal",function(){u.lis.removeClass("ui-tabs-selected ui-state-active");i.addClass("ui-tabs-hide");k(i,g);u.element.dequeue("tabs")})}:function(o,i,v){u.lis.removeClass("ui-tabs-selected ui-state-active");i.addClass("ui-tabs-hide");u.element.dequeue("tabs")};this.anchors.bind(j.event+".tabs",function(){var o=this,w=d(o).closest("li"),i=u.panels.filter(":not(.ui-tabs-hide)"),v=u.element.find(u._sanitizeSelector(o.hash));if((w.hasClass("ui-tabs-selected")&&!j.collapsible)||w.hasClass("ui-state-disabled")||w.hasClass("ui-state-processing")||u.panels.filter(":animated").length||u._trigger("select",null,u._ui(this,v[0]))===false){this.blur();return false}j.selected=u.anchors.index(this);u.abort();if(j.collapsible){if(w.hasClass("ui-tabs-selected")){j.selected=-1;if(j.cookie){u._cookie(j.selected,j.cookie)}u.element.queue("tabs",function(){r(o,i)}).dequeue("tabs");this.blur();return false}else{if(!i.length){if(j.cookie){u._cookie(j.selected,j.cookie)}u.element.queue("tabs",function(){q(o,v)});u.load(u.anchors.index(this));this.blur();return false}}}if(j.cookie){u._cookie(j.selected,j.cookie)}if(v.length){if(i.length){u.element.queue("tabs",function(){r(o,i)})}u.element.queue("tabs",function(){q(o,v)});u.load(u.anchors.index(this))}else{throw"jQuery UI Tabs: Mismatching fragment identifier."}if(d.browser.msie){this.blur()}});this.anchors.bind("click.tabs",function(){return false})},_getIndex:function(g){if(typeof g=="string"){g=this.anchors.index(this.anchors.filter("[href$='"+g+"']"))}return g},destroy:function(){var g=this.options;this.abort();this.element.unbind(".tabs").removeClass("ui-tabs ui-widget ui-widget-content ui-corner-all ui-tabs-collapsible").removeData("tabs");this.list.removeClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all");this.anchors.each(function(){var h=d.data(this,"href.tabs");if(h){this.href=h}var i=d(this).unbind(".tabs");d.each(["href","load","cache"],function(j,k){i.removeData(k+".tabs")})});this.lis.unbind(".tabs").add(this.panels).each(function(){if(d.data(this,"destroy.tabs")){d(this).remove()}else{d(this).removeClass(["ui-state-default","ui-corner-top","ui-tabs-selected","ui-state-active","ui-state-hover","ui-state-focus","ui-state-disabled","ui-tabs-panel","ui-widget-content","ui-corner-bottom","ui-tabs-hide"].join(" "))}});if(g.cookie){this._cookie(null,g.cookie)}return this},add:function(j,i,h){if(h===f){h=this.anchors.length}var g=this,l=this.options,n=d(l.tabTemplate.replace(/#\{href\}/g,j).replace(/#\{label\}/g,i)),m=!j.indexOf("#")?j.replace("#",""):this._tabId(d("a",n)[0]);n.addClass("ui-state-default ui-corner-top").data("destroy.tabs",true);var k=g.element.find("#"+m);if(!k.length){k=d(l.panelTemplate).attr("id",m).data("destroy.tabs",true)}k.addClass("ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide");if(h>=this.lis.length){n.appendTo(this.list);k.appendTo(this.list[0].parentNode)}else{n.insertBefore(this.lis[h]);k.insertBefore(this.panels[h])}l.disabled=d.map(l.disabled,function(p,o){return p>=h?++p:p});this._tabify();if(this.anchors.length==1){l.selected=0;n.addClass("ui-tabs-selected ui-state-active");k.removeClass("ui-tabs-hide");this.element.queue("tabs",function(){g._trigger("show",null,g._ui(g.anchors[0],g.panels[0]))});this.load(0)}this._trigger("add",null,this._ui(this.anchors[h],this.panels[h]));return this},remove:function(g){g=this._getIndex(g);var i=this.options,j=this.lis.eq(g).remove(),h=this.panels.eq(g).remove();if(j.hasClass("ui-tabs-selected")&&this.anchors.length>1){this.select(g+(g+1<this.anchors.length?1:-1))}i.disabled=d.map(d.grep(i.disabled,function(l,k){return l!=g}),function(l,k){return l>=g?--l:l});this._tabify();this._trigger("remove",null,this._ui(j.find("a")[0],h[0]));return this},enable:function(g){g=this._getIndex(g);var h=this.options;if(d.inArray(g,h.disabled)==-1){return}this.lis.eq(g).removeClass("ui-state-disabled");h.disabled=d.grep(h.disabled,function(k,j){return k!=g});this._trigger("enable",null,this._ui(this.anchors[g],this.panels[g]));return this},disable:function(h){h=this._getIndex(h);var g=this,i=this.options;if(h!=i.selected){this.lis.eq(h).addClass("ui-state-disabled");i.disabled.push(h);i.disabled.sort();this._trigger("disable",null,this._ui(this.anchors[h],this.panels[h]))}return this},select:function(g){g=this._getIndex(g);if(g==-1){if(this.options.collapsible&&this.options.selected!=-1){g=this.options.selected}else{return this}}this.anchors.eq(g).trigger(this.options.event+".tabs");return this},load:function(j){j=this._getIndex(j);var h=this,l=this.options,g=this.anchors.eq(j)[0],i=d.data(g,"load.tabs");this.abort();if(!i||this.element.queue("tabs").length!==0&&d.data(g,"cache.tabs")){this.element.dequeue("tabs");return}this.lis.eq(j).addClass("ui-state-processing");if(l.spinner){var k=d("span",g);k.data("label.tabs",k.html()).html(l.spinner)}this.xhr=d.ajax(d.extend({},l.ajaxOptions,{url:i,success:function(n,m){h.element.find(h._sanitizeSelector(g.hash)).html(n);h._cleanup();if(l.cache){d.data(g,"cache.tabs",true)}h._trigger("load",null,h._ui(h.anchors[j],h.panels[j]));try{l.ajaxOptions.success(n,m)}catch(o){}},error:function(o,m,n){h._cleanup();h._trigger("load",null,h._ui(h.anchors[j],h.panels[j]));try{l.ajaxOptions.error(o,m,j,g)}catch(n){}}}));h.element.dequeue("tabs");return this},abort:function(){this.element.queue([]);this.panels.stop(false,true);this.element.queue("tabs",this.element.queue("tabs").splice(-2,2));if(this.xhr){this.xhr.abort();delete this.xhr}this._cleanup();return this},url:function(h,g){this.anchors.eq(h).removeData("cache.tabs").data("load.tabs",g);return this},length:function(){return this.anchors.length}});d.extend(d.ui.tabs,{version:"1.8.21"});d.extend(d.ui.tabs.prototype,{rotation:null,rotate:function(i,k){var g=this,l=this.options;var h=g._rotate||(g._rotate=function(m){clearTimeout(g.rotation);g.rotation=setTimeout(function(){var n=l.selected;g.select(++n<g.anchors.length?n:0)},i);if(m){m.stopPropagation()}});var j=g._unrotate||(g._unrotate=!k?function(m){if(m.clientX){g.rotate(null)}}:function(m){h()});if(i){this.element.bind("tabsshow",h);this.anchors.bind(l.event+".tabs",j);h()}else{clearTimeout(g.rotation);this.element.unbind("tabsshow",h);this.anchors.unbind(l.event+".tabs",j);delete this._rotate;delete this._unrotate}return this}})})(jQuery);
/*
 * jQuery UI Datepicker 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Datepicker
 *
 * Depends:
 *	jquery.ui.core.js
 */
(function($,undefined){$.extend($.ui,{datepicker:{version:"1.8.21"}});var PROP_NAME="datepicker";var dpuuid=new Date().getTime();var instActive;function Datepicker(){this.debug=false;this._curInst=null;this._keyEvent=false;this._disabledInputs=[];this._datepickerShowing=false;this._inDialog=false;this._mainDivId="ui-datepicker-div";this._inlineClass="ui-datepicker-inline";this._appendClass="ui-datepicker-append";this._triggerClass="ui-datepicker-trigger";this._dialogClass="ui-datepicker-dialog";this._disableClass="ui-datepicker-disabled";this._unselectableClass="ui-datepicker-unselectable";this._currentClass="ui-datepicker-current-day";this._dayOverClass="ui-datepicker-days-cell-over";this.regional=[];this.regional[""]={closeText:"Done",prevText:"Prev",nextText:"Next",currentText:"Today",monthNames:["January","February","March","April","May","June","July","August","September","October","November","December"],monthNamesShort:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],dayNames:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],dayNamesShort:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],dayNamesMin:["Su","Mo","Tu","We","Th","Fr","Sa"],weekHeader:"Wk",dateFormat:"mm/dd/yy",firstDay:0,isRTL:false,showMonthAfterYear:false,yearSuffix:""};this._defaults={showOn:"focus",showAnim:"fadeIn",showOptions:{},defaultDate:null,appendText:"",buttonText:"...",buttonImage:"",buttonImageOnly:false,hideIfNoPrevNext:false,navigationAsDateFormat:false,gotoCurrent:false,changeMonth:false,changeYear:false,yearRange:"c-10:c+10",showOtherMonths:false,selectOtherMonths:false,showWeek:false,calculateWeek:this.iso8601Week,shortYearCutoff:"+10",minDate:null,maxDate:null,duration:"fast",beforeShowDay:null,beforeShow:null,onSelect:null,onChangeMonthYear:null,onClose:null,numberOfMonths:1,showCurrentAtPos:0,stepMonths:1,stepBigMonths:12,altField:"",altFormat:"",constrainInput:true,showButtonPanel:false,autoSize:false,disabled:false};$.extend(this._defaults,this.regional[""]);this.dpDiv=bindHover($('<div id="'+this._mainDivId+'" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>'))}$.extend(Datepicker.prototype,{markerClassName:"hasDatepicker",maxRows:4,log:function(){if(this.debug){console.log.apply("",arguments)}},_widgetDatepicker:function(){return this.dpDiv},setDefaults:function(settings){extendRemove(this._defaults,settings||{});return this},_attachDatepicker:function(target,settings){var inlineSettings=null;for(var attrName in this._defaults){var attrValue=target.getAttribute("date:"+attrName);if(attrValue){inlineSettings=inlineSettings||{};try{inlineSettings[attrName]=eval(attrValue)}catch(err){inlineSettings[attrName]=attrValue}}}var nodeName=target.nodeName.toLowerCase();var inline=(nodeName=="div"||nodeName=="span");if(!target.id){this.uuid+=1;target.id="dp"+this.uuid}var inst=this._newInst($(target),inline);inst.settings=$.extend({},settings||{},inlineSettings||{});if(nodeName=="input"){this._connectDatepicker(target,inst)}else{if(inline){this._inlineDatepicker(target,inst)}}},_newInst:function(target,inline){var id=target[0].id.replace(/([^A-Za-z0-9_-])/g,"\\\\$1");return{id:id,input:target,selectedDay:0,selectedMonth:0,selectedYear:0,drawMonth:0,drawYear:0,inline:inline,dpDiv:(!inline?this.dpDiv:bindHover($('<div class="'+this._inlineClass+' ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>')))}},_connectDatepicker:function(target,inst){var input=$(target);inst.append=$([]);inst.trigger=$([]);if(input.hasClass(this.markerClassName)){return}this._attachments(input,inst);input.addClass(this.markerClassName).keydown(this._doKeyDown).keypress(this._doKeyPress).keyup(this._doKeyUp).bind("setData.datepicker",function(event,key,value){inst.settings[key]=value}).bind("getData.datepicker",function(event,key){return this._get(inst,key)});this._autoSize(inst);$.data(target,PROP_NAME,inst);if(inst.settings.disabled){this._disableDatepicker(target)}},_attachments:function(input,inst){var appendText=this._get(inst,"appendText");var isRTL=this._get(inst,"isRTL");if(inst.append){inst.append.remove()}if(appendText){inst.append=$('<span class="'+this._appendClass+'">'+appendText+"</span>");input[isRTL?"before":"after"](inst.append)}input.unbind("focus",this._showDatepicker);if(inst.trigger){inst.trigger.remove()}var showOn=this._get(inst,"showOn");if(showOn=="focus"||showOn=="both"){input.focus(this._showDatepicker)}if(showOn=="button"||showOn=="both"){var buttonText=this._get(inst,"buttonText");var buttonImage=this._get(inst,"buttonImage");inst.trigger=$(this._get(inst,"buttonImageOnly")?$("<img/>").addClass(this._triggerClass).attr({src:buttonImage,alt:buttonText,title:buttonText}):$('<button type="button"></button>').addClass(this._triggerClass).html(buttonImage==""?buttonText:$("<img/>").attr({src:buttonImage,alt:buttonText,title:buttonText})));input[isRTL?"before":"after"](inst.trigger);inst.trigger.click(function(){if($.datepicker._datepickerShowing&&$.datepicker._lastInput==input[0]){$.datepicker._hideDatepicker()}else{if($.datepicker._datepickerShowing&&$.datepicker._lastInput!=input[0]){$.datepicker._hideDatepicker();$.datepicker._showDatepicker(input[0])}else{$.datepicker._showDatepicker(input[0])}}return false})}},_autoSize:function(inst){if(this._get(inst,"autoSize")&&!inst.inline){var date=new Date(2009,12-1,20);var dateFormat=this._get(inst,"dateFormat");if(dateFormat.match(/[DM]/)){var findMax=function(names){var max=0;var maxI=0;for(var i=0;i<names.length;i++){if(names[i].length>max){max=names[i].length;maxI=i}}return maxI};date.setMonth(findMax(this._get(inst,(dateFormat.match(/MM/)?"monthNames":"monthNamesShort"))));date.setDate(findMax(this._get(inst,(dateFormat.match(/DD/)?"dayNames":"dayNamesShort")))+20-date.getDay())}inst.input.attr("size",this._formatDate(inst,date).length)}},_inlineDatepicker:function(target,inst){var divSpan=$(target);if(divSpan.hasClass(this.markerClassName)){return}divSpan.addClass(this.markerClassName).append(inst.dpDiv).bind("setData.datepicker",function(event,key,value){inst.settings[key]=value}).bind("getData.datepicker",function(event,key){return this._get(inst,key)});$.data(target,PROP_NAME,inst);this._setDate(inst,this._getDefaultDate(inst),true);this._updateDatepicker(inst);this._updateAlternate(inst);if(inst.settings.disabled){this._disableDatepicker(target)}inst.dpDiv.css("display","block")},_dialogDatepicker:function(input,date,onSelect,settings,pos){var inst=this._dialogInst;if(!inst){this.uuid+=1;var id="dp"+this.uuid;this._dialogInput=$('<input type="text" id="'+id+'" style="position: absolute; top: -100px; width: 0px; z-index: -10;"/>');this._dialogInput.keydown(this._doKeyDown);$("body").append(this._dialogInput);inst=this._dialogInst=this._newInst(this._dialogInput,false);inst.settings={};$.data(this._dialogInput[0],PROP_NAME,inst)}extendRemove(inst.settings,settings||{});date=(date&&date.constructor==Date?this._formatDate(inst,date):date);this._dialogInput.val(date);this._pos=(pos?(pos.length?pos:[pos.pageX,pos.pageY]):null);if(!this._pos){var browserWidth=document.documentElement.clientWidth;var browserHeight=document.documentElement.clientHeight;var scrollX=document.documentElement.scrollLeft||document.body.scrollLeft;var scrollY=document.documentElement.scrollTop||document.body.scrollTop;this._pos=[(browserWidth/2)-100+scrollX,(browserHeight/2)-150+scrollY]}this._dialogInput.css("left",(this._pos[0]+20)+"px").css("top",this._pos[1]+"px");inst.settings.onSelect=onSelect;this._inDialog=true;this.dpDiv.addClass(this._dialogClass);this._showDatepicker(this._dialogInput[0]);if($.blockUI){$.blockUI(this.dpDiv)}$.data(this._dialogInput[0],PROP_NAME,inst);return this},_destroyDatepicker:function(target){var $target=$(target);var inst=$.data(target,PROP_NAME);if(!$target.hasClass(this.markerClassName)){return}var nodeName=target.nodeName.toLowerCase();$.removeData(target,PROP_NAME);if(nodeName=="input"){inst.append.remove();inst.trigger.remove();$target.removeClass(this.markerClassName).unbind("focus",this._showDatepicker).unbind("keydown",this._doKeyDown).unbind("keypress",this._doKeyPress).unbind("keyup",this._doKeyUp)}else{if(nodeName=="div"||nodeName=="span"){$target.removeClass(this.markerClassName).empty()}}},_enableDatepicker:function(target){var $target=$(target);var inst=$.data(target,PROP_NAME);if(!$target.hasClass(this.markerClassName)){return}var nodeName=target.nodeName.toLowerCase();if(nodeName=="input"){target.disabled=false;inst.trigger.filter("button").each(function(){this.disabled=false}).end().filter("img").css({opacity:"1.0",cursor:""})}else{if(nodeName=="div"||nodeName=="span"){var inline=$target.children("."+this._inlineClass);inline.children().removeClass("ui-state-disabled");inline.find("select.ui-datepicker-month, select.ui-datepicker-year").removeAttr("disabled")}}this._disabledInputs=$.map(this._disabledInputs,function(value){return(value==target?null:value)})},_disableDatepicker:function(target){var $target=$(target);var inst=$.data(target,PROP_NAME);if(!$target.hasClass(this.markerClassName)){return}var nodeName=target.nodeName.toLowerCase();if(nodeName=="input"){target.disabled=true;inst.trigger.filter("button").each(function(){this.disabled=true}).end().filter("img").css({opacity:"0.5",cursor:"default"})}else{if(nodeName=="div"||nodeName=="span"){var inline=$target.children("."+this._inlineClass);inline.children().addClass("ui-state-disabled");inline.find("select.ui-datepicker-month, select.ui-datepicker-year").attr("disabled","disabled")}}this._disabledInputs=$.map(this._disabledInputs,function(value){return(value==target?null:value)});this._disabledInputs[this._disabledInputs.length]=target},_isDisabledDatepicker:function(target){if(!target){return false}for(var i=0;i<this._disabledInputs.length;i++){if(this._disabledInputs[i]==target){return true}}return false},_getInst:function(target){try{return $.data(target,PROP_NAME)}catch(err){throw"Missing instance data for this datepicker"}},_optionDatepicker:function(target,name,value){var inst=this._getInst(target);if(arguments.length==2&&typeof name=="string"){return(name=="defaults"?$.extend({},$.datepicker._defaults):(inst?(name=="all"?$.extend({},inst.settings):this._get(inst,name)):null))}var settings=name||{};if(typeof name=="string"){settings={};settings[name]=value}if(inst){if(this._curInst==inst){this._hideDatepicker()}var date=this._getDateDatepicker(target,true);var minDate=this._getMinMaxDate(inst,"min");var maxDate=this._getMinMaxDate(inst,"max");extendRemove(inst.settings,settings);if(minDate!==null&&settings.dateFormat!==undefined&&settings.minDate===undefined){inst.settings.minDate=this._formatDate(inst,minDate)}if(maxDate!==null&&settings.dateFormat!==undefined&&settings.maxDate===undefined){inst.settings.maxDate=this._formatDate(inst,maxDate)}this._attachments($(target),inst);this._autoSize(inst);this._setDate(inst,date);this._updateAlternate(inst);this._updateDatepicker(inst)}},_changeDatepicker:function(target,name,value){this._optionDatepicker(target,name,value)},_refreshDatepicker:function(target){var inst=this._getInst(target);if(inst){this._updateDatepicker(inst)}},_setDateDatepicker:function(target,date){var inst=this._getInst(target);if(inst){this._setDate(inst,date);this._updateDatepicker(inst);this._updateAlternate(inst)}},_getDateDatepicker:function(target,noDefault){var inst=this._getInst(target);if(inst&&!inst.inline){this._setDateFromField(inst,noDefault)}return(inst?this._getDate(inst):null)},_doKeyDown:function(event){var inst=$.datepicker._getInst(event.target);var handled=true;var isRTL=inst.dpDiv.is(".ui-datepicker-rtl");inst._keyEvent=true;if($.datepicker._datepickerShowing){switch(event.keyCode){case 9:$.datepicker._hideDatepicker();handled=false;break;case 13:var sel=$("td."+$.datepicker._dayOverClass+":not(."+$.datepicker._currentClass+")",inst.dpDiv);if(sel[0]){$.datepicker._selectDay(event.target,inst.selectedMonth,inst.selectedYear,sel[0])}var onSelect=$.datepicker._get(inst,"onSelect");if(onSelect){var dateStr=$.datepicker._formatDate(inst);onSelect.apply((inst.input?inst.input[0]:null),[dateStr,inst])}else{$.datepicker._hideDatepicker()}return false;break;case 27:$.datepicker._hideDatepicker();break;case 33:$.datepicker._adjustDate(event.target,(event.ctrlKey?-$.datepicker._get(inst,"stepBigMonths"):-$.datepicker._get(inst,"stepMonths")),"M");break;case 34:$.datepicker._adjustDate(event.target,(event.ctrlKey?+$.datepicker._get(inst,"stepBigMonths"):+$.datepicker._get(inst,"stepMonths")),"M");break;case 35:if(event.ctrlKey||event.metaKey){$.datepicker._clearDate(event.target)}handled=event.ctrlKey||event.metaKey;break;case 36:if(event.ctrlKey||event.metaKey){$.datepicker._gotoToday(event.target)}handled=event.ctrlKey||event.metaKey;break;case 37:if(event.ctrlKey||event.metaKey){$.datepicker._adjustDate(event.target,(isRTL?+1:-1),"D")}handled=event.ctrlKey||event.metaKey;if(event.originalEvent.altKey){$.datepicker._adjustDate(event.target,(event.ctrlKey?-$.datepicker._get(inst,"stepBigMonths"):-$.datepicker._get(inst,"stepMonths")),"M")}break;case 38:if(event.ctrlKey||event.metaKey){$.datepicker._adjustDate(event.target,-7,"D")}handled=event.ctrlKey||event.metaKey;break;case 39:if(event.ctrlKey||event.metaKey){$.datepicker._adjustDate(event.target,(isRTL?-1:+1),"D")}handled=event.ctrlKey||event.metaKey;if(event.originalEvent.altKey){$.datepicker._adjustDate(event.target,(event.ctrlKey?+$.datepicker._get(inst,"stepBigMonths"):+$.datepicker._get(inst,"stepMonths")),"M")}break;case 40:if(event.ctrlKey||event.metaKey){$.datepicker._adjustDate(event.target,+7,"D")}handled=event.ctrlKey||event.metaKey;break;default:handled=false}}else{if(event.keyCode==36&&event.ctrlKey){$.datepicker._showDatepicker(this)}else{handled=false}}if(handled){event.preventDefault();event.stopPropagation()}},_doKeyPress:function(event){var inst=$.datepicker._getInst(event.target);if($.datepicker._get(inst,"constrainInput")){var chars=$.datepicker._possibleChars($.datepicker._get(inst,"dateFormat"));var chr=String.fromCharCode(event.charCode==undefined?event.keyCode:event.charCode);return event.ctrlKey||event.metaKey||(chr<" "||!chars||chars.indexOf(chr)>-1)}},_doKeyUp:function(event){var inst=$.datepicker._getInst(event.target);if(inst.input.val()!=inst.lastVal){try{var date=$.datepicker.parseDate($.datepicker._get(inst,"dateFormat"),(inst.input?inst.input.val():null),$.datepicker._getFormatConfig(inst));if(date){$.datepicker._setDateFromField(inst);$.datepicker._updateAlternate(inst);$.datepicker._updateDatepicker(inst)}}catch(err){$.datepicker.log(err)}}return true},_showDatepicker:function(input){input=input.target||input;if(input.nodeName.toLowerCase()!="input"){input=$("input",input.parentNode)[0]}if($.datepicker._isDisabledDatepicker(input)||$.datepicker._lastInput==input){return}var inst=$.datepicker._getInst(input);if($.datepicker._curInst&&$.datepicker._curInst!=inst){$.datepicker._curInst.dpDiv.stop(true,true);if(inst&&$.datepicker._datepickerShowing){$.datepicker._hideDatepicker($.datepicker._curInst.input[0])}}var beforeShow=$.datepicker._get(inst,"beforeShow");var beforeShowSettings=beforeShow?beforeShow.apply(input,[input,inst]):{};if(beforeShowSettings===false){return}extendRemove(inst.settings,beforeShowSettings);inst.lastVal=null;$.datepicker._lastInput=input;$.datepicker._setDateFromField(inst);if($.datepicker._inDialog){input.value=""}if(!$.datepicker._pos){$.datepicker._pos=$.datepicker._findPos(input);$.datepicker._pos[1]+=input.offsetHeight}var isFixed=false;$(input).parents().each(function(){isFixed|=$(this).css("position")=="fixed";return !isFixed});if(isFixed&&$.browser.opera){$.datepicker._pos[0]-=document.documentElement.scrollLeft;$.datepicker._pos[1]-=document.documentElement.scrollTop}var offset={left:$.datepicker._pos[0],top:$.datepicker._pos[1]};$.datepicker._pos=null;inst.dpDiv.empty();inst.dpDiv.css({position:"absolute",display:"block",top:"-1000px"});$.datepicker._updateDatepicker(inst);offset=$.datepicker._checkOffset(inst,offset,isFixed);inst.dpDiv.css({position:($.datepicker._inDialog&&$.blockUI?"static":(isFixed?"fixed":"absolute")),display:"none",left:offset.left+"px",top:offset.top+"px"});if(!inst.inline){var showAnim=$.datepicker._get(inst,"showAnim");var duration=$.datepicker._get(inst,"duration");var postProcess=function(){var cover=inst.dpDiv.find("iframe.ui-datepicker-cover");if(!!cover.length){var borders=$.datepicker._getBorders(inst.dpDiv);cover.css({left:-borders[0],top:-borders[1],width:inst.dpDiv.outerWidth(),height:inst.dpDiv.outerHeight()})}};inst.dpDiv.zIndex($(input).zIndex()+1);$.datepicker._datepickerShowing=true;if($.effects&&$.effects[showAnim]){inst.dpDiv.show(showAnim,$.datepicker._get(inst,"showOptions"),duration,postProcess)}else{inst.dpDiv[showAnim||"show"]((showAnim?duration:null),postProcess)}if(!showAnim||!duration){postProcess()}if(inst.input.is(":visible")&&!inst.input.is(":disabled")){inst.input.focus()}$.datepicker._curInst=inst}},_updateDatepicker:function(inst){var self=this;self.maxRows=4;var borders=$.datepicker._getBorders(inst.dpDiv);instActive=inst;inst.dpDiv.empty().append(this._generateHTML(inst));var cover=inst.dpDiv.find("iframe.ui-datepicker-cover");if(!!cover.length){cover.css({left:-borders[0],top:-borders[1],width:inst.dpDiv.outerWidth(),height:inst.dpDiv.outerHeight()})}inst.dpDiv.find("."+this._dayOverClass+" a").mouseover();var numMonths=this._getNumberOfMonths(inst);var cols=numMonths[1];var width=17;inst.dpDiv.removeClass("ui-datepicker-multi-2 ui-datepicker-multi-3 ui-datepicker-multi-4").width("");if(cols>1){inst.dpDiv.addClass("ui-datepicker-multi-"+cols).css("width",(width*cols)+"em")}inst.dpDiv[(numMonths[0]!=1||numMonths[1]!=1?"add":"remove")+"Class"]("ui-datepicker-multi");inst.dpDiv[(this._get(inst,"isRTL")?"add":"remove")+"Class"]("ui-datepicker-rtl");if(inst==$.datepicker._curInst&&$.datepicker._datepickerShowing&&inst.input&&inst.input.is(":visible")&&!inst.input.is(":disabled")&&inst.input[0]!=document.activeElement){inst.input.focus()}if(inst.yearshtml){var origyearshtml=inst.yearshtml;setTimeout(function(){if(origyearshtml===inst.yearshtml&&inst.yearshtml){inst.dpDiv.find("select.ui-datepicker-year:first").replaceWith(inst.yearshtml)}origyearshtml=inst.yearshtml=null},0)}},_getBorders:function(elem){var convert=function(value){return{thin:1,medium:2,thick:3}[value]||value};return[parseFloat(convert(elem.css("border-left-width"))),parseFloat(convert(elem.css("border-top-width")))]},_checkOffset:function(inst,offset,isFixed){var dpWidth=inst.dpDiv.outerWidth();var dpHeight=inst.dpDiv.outerHeight();var inputWidth=inst.input?inst.input.outerWidth():0;var inputHeight=inst.input?inst.input.outerHeight():0;var viewWidth=document.documentElement.clientWidth+$(document).scrollLeft();var viewHeight=document.documentElement.clientHeight+$(document).scrollTop();offset.left-=(this._get(inst,"isRTL")?(dpWidth-inputWidth):0);offset.left-=(isFixed&&offset.left==inst.input.offset().left)?$(document).scrollLeft():0;offset.top-=(isFixed&&offset.top==(inst.input.offset().top+inputHeight))?$(document).scrollTop():0;offset.left-=Math.min(offset.left,(offset.left+dpWidth>viewWidth&&viewWidth>dpWidth)?Math.abs(offset.left+dpWidth-viewWidth):0);offset.top-=Math.min(offset.top,(offset.top+dpHeight>viewHeight&&viewHeight>dpHeight)?Math.abs(dpHeight+inputHeight):0);return offset},_findPos:function(obj){var inst=this._getInst(obj);var isRTL=this._get(inst,"isRTL");while(obj&&(obj.type=="hidden"||obj.nodeType!=1||$.expr.filters.hidden(obj))){obj=obj[isRTL?"previousSibling":"nextSibling"]}var position=$(obj).offset();return[position.left,position.top]},_hideDatepicker:function(input){var inst=this._curInst;if(!inst||(input&&inst!=$.data(input,PROP_NAME))){return}if(this._datepickerShowing){var showAnim=this._get(inst,"showAnim");var duration=this._get(inst,"duration");var postProcess=function(){$.datepicker._tidyDialog(inst)};if($.effects&&$.effects[showAnim]){inst.dpDiv.hide(showAnim,$.datepicker._get(inst,"showOptions"),duration,postProcess)}else{inst.dpDiv[(showAnim=="slideDown"?"slideUp":(showAnim=="fadeIn"?"fadeOut":"hide"))]((showAnim?duration:null),postProcess)}if(!showAnim){postProcess()}this._datepickerShowing=false;var onClose=this._get(inst,"onClose");if(onClose){onClose.apply((inst.input?inst.input[0]:null),[(inst.input?inst.input.val():""),inst])}this._lastInput=null;if(this._inDialog){this._dialogInput.css({position:"absolute",left:"0",top:"-100px"});if($.blockUI){$.unblockUI();$("body").append(this.dpDiv)}}this._inDialog=false}},_tidyDialog:function(inst){inst.dpDiv.removeClass(this._dialogClass).unbind(".ui-datepicker-calendar")},_checkExternalClick:function(event){if(!$.datepicker._curInst){return}var $target=$(event.target),inst=$.datepicker._getInst($target[0]);if((($target[0].id!=$.datepicker._mainDivId&&$target.parents("#"+$.datepicker._mainDivId).length==0&&!$target.hasClass($.datepicker.markerClassName)&&!$target.closest("."+$.datepicker._triggerClass).length&&$.datepicker._datepickerShowing&&!($.datepicker._inDialog&&$.blockUI)))||($target.hasClass($.datepicker.markerClassName)&&$.datepicker._curInst!=inst)){$.datepicker._hideDatepicker()}},_adjustDate:function(id,offset,period){var target=$(id);var inst=this._getInst(target[0]);if(this._isDisabledDatepicker(target[0])){return}this._adjustInstDate(inst,offset+(period=="M"?this._get(inst,"showCurrentAtPos"):0),period);this._updateDatepicker(inst)},_gotoToday:function(id){var target=$(id);var inst=this._getInst(target[0]);if(this._get(inst,"gotoCurrent")&&inst.currentDay){inst.selectedDay=inst.currentDay;inst.drawMonth=inst.selectedMonth=inst.currentMonth;inst.drawYear=inst.selectedYear=inst.currentYear}else{var date=new Date();inst.selectedDay=date.getDate();inst.drawMonth=inst.selectedMonth=date.getMonth();inst.drawYear=inst.selectedYear=date.getFullYear()}this._notifyChange(inst);this._adjustDate(target)},_selectMonthYear:function(id,select,period){var target=$(id);var inst=this._getInst(target[0]);inst["selected"+(period=="M"?"Month":"Year")]=inst["draw"+(period=="M"?"Month":"Year")]=parseInt(select.options[select.selectedIndex].value,10);this._notifyChange(inst);this._adjustDate(target)},_selectDay:function(id,month,year,td){var target=$(id);if($(td).hasClass(this._unselectableClass)||this._isDisabledDatepicker(target[0])){return}var inst=this._getInst(target[0]);inst.selectedDay=inst.currentDay=$("a",td).html();inst.selectedMonth=inst.currentMonth=month;inst.selectedYear=inst.currentYear=year;this._selectDate(id,this._formatDate(inst,inst.currentDay,inst.currentMonth,inst.currentYear))},_clearDate:function(id){var target=$(id);var inst=this._getInst(target[0]);this._selectDate(target,"")},_selectDate:function(id,dateStr){var target=$(id);var inst=this._getInst(target[0]);dateStr=(dateStr!=null?dateStr:this._formatDate(inst));if(inst.input){inst.input.val(dateStr)}this._updateAlternate(inst);var onSelect=this._get(inst,"onSelect");if(onSelect){onSelect.apply((inst.input?inst.input[0]:null),[dateStr,inst])}else{if(inst.input){inst.input.trigger("change")}}if(inst.inline){this._updateDatepicker(inst)}else{this._hideDatepicker();this._lastInput=inst.input[0];if(typeof(inst.input[0])!="object"){inst.input.focus()}this._lastInput=null}},_updateAlternate:function(inst){var altField=this._get(inst,"altField");if(altField){var altFormat=this._get(inst,"altFormat")||this._get(inst,"dateFormat");var date=this._getDate(inst);var dateStr=this.formatDate(altFormat,date,this._getFormatConfig(inst));$(altField).each(function(){$(this).val(dateStr)})}},noWeekends:function(date){var day=date.getDay();return[(day>0&&day<6),""]},iso8601Week:function(date){var checkDate=new Date(date.getTime());checkDate.setDate(checkDate.getDate()+4-(checkDate.getDay()||7));var time=checkDate.getTime();checkDate.setMonth(0);checkDate.setDate(1);return Math.floor(Math.round((time-checkDate)/86400000)/7)+1},parseDate:function(format,value,settings){if(format==null||value==null){throw"Invalid arguments"}value=(typeof value=="object"?value.toString():value+"");if(value==""){return null}var shortYearCutoff=(settings?settings.shortYearCutoff:null)||this._defaults.shortYearCutoff;shortYearCutoff=(typeof shortYearCutoff!="string"?shortYearCutoff:new Date().getFullYear()%100+parseInt(shortYearCutoff,10));var dayNamesShort=(settings?settings.dayNamesShort:null)||this._defaults.dayNamesShort;var dayNames=(settings?settings.dayNames:null)||this._defaults.dayNames;var monthNamesShort=(settings?settings.monthNamesShort:null)||this._defaults.monthNamesShort;var monthNames=(settings?settings.monthNames:null)||this._defaults.monthNames;var year=-1;var month=-1;var day=-1;var doy=-1;var literal=false;var lookAhead=function(match){var matches=(iFormat+1<format.length&&format.charAt(iFormat+1)==match);if(matches){iFormat++}return matches};var getNumber=function(match){var isDoubled=lookAhead(match);var size=(match=="@"?14:(match=="!"?20:(match=="y"&&isDoubled?4:(match=="o"?3:2))));var digits=new RegExp("^\\d{1,"+size+"}");var num=value.substring(iValue).match(digits);if(!num){throw"Missing number at position "+iValue}iValue+=num[0].length;return parseInt(num[0],10)};var getName=function(match,shortNames,longNames){var names=$.map(lookAhead(match)?longNames:shortNames,function(v,k){return[[k,v]]}).sort(function(a,b){return -(a[1].length-b[1].length)});var index=-1;$.each(names,function(i,pair){var name=pair[1];if(value.substr(iValue,name.length).toLowerCase()==name.toLowerCase()){index=pair[0];iValue+=name.length;return false}});if(index!=-1){return index+1}else{throw"Unknown name at position "+iValue}};var checkLiteral=function(){if(value.charAt(iValue)!=format.charAt(iFormat)){throw"Unexpected literal at position "+iValue}iValue++};var iValue=0;for(var iFormat=0;iFormat<format.length;iFormat++){if(literal){if(format.charAt(iFormat)=="'"&&!lookAhead("'")){literal=false}else{checkLiteral()}}else{switch(format.charAt(iFormat)){case"d":day=getNumber("d");break;case"D":getName("D",dayNamesShort,dayNames);break;case"o":doy=getNumber("o");break;case"m":month=getNumber("m");break;case"M":month=getName("M",monthNamesShort,monthNames);break;case"y":year=getNumber("y");break;case"@":var date=new Date(getNumber("@"));year=date.getFullYear();month=date.getMonth()+1;day=date.getDate();break;case"!":var date=new Date((getNumber("!")-this._ticksTo1970)/10000);year=date.getFullYear();month=date.getMonth()+1;day=date.getDate();break;case"'":if(lookAhead("'")){checkLiteral()}else{literal=true}break;default:checkLiteral()}}}if(iValue<value.length){throw"Extra/unparsed characters found in date: "+value.substring(iValue)}if(year==-1){year=new Date().getFullYear()}else{if(year<100){year+=new Date().getFullYear()-new Date().getFullYear()%100+(year<=shortYearCutoff?0:-100)}}if(doy>-1){month=1;day=doy;do{var dim=this._getDaysInMonth(year,month-1);if(day<=dim){break}month++;day-=dim}while(true)}var date=this._daylightSavingAdjust(new Date(year,month-1,day));if(date.getFullYear()!=year||date.getMonth()+1!=month||date.getDate()!=day){throw"Invalid date"}return date},ATOM:"yy-mm-dd",COOKIE:"D, dd M yy",ISO_8601:"yy-mm-dd",RFC_822:"D, d M y",RFC_850:"DD, dd-M-y",RFC_1036:"D, d M y",RFC_1123:"D, d M yy",RFC_2822:"D, d M yy",RSS:"D, d M y",TICKS:"!",TIMESTAMP:"@",W3C:"yy-mm-dd",_ticksTo1970:(((1970-1)*365+Math.floor(1970/4)-Math.floor(1970/100)+Math.floor(1970/400))*24*60*60*10000000),formatDate:function(format,date,settings){if(!date){return""}var dayNamesShort=(settings?settings.dayNamesShort:null)||this._defaults.dayNamesShort;var dayNames=(settings?settings.dayNames:null)||this._defaults.dayNames;var monthNamesShort=(settings?settings.monthNamesShort:null)||this._defaults.monthNamesShort;var monthNames=(settings?settings.monthNames:null)||this._defaults.monthNames;var lookAhead=function(match){var matches=(iFormat+1<format.length&&format.charAt(iFormat+1)==match);if(matches){iFormat++}return matches};var formatNumber=function(match,value,len){var num=""+value;if(lookAhead(match)){while(num.length<len){num="0"+num}}return num};var formatName=function(match,value,shortNames,longNames){return(lookAhead(match)?longNames[value]:shortNames[value])};var output="";var literal=false;if(date){for(var iFormat=0;iFormat<format.length;iFormat++){if(literal){if(format.charAt(iFormat)=="'"&&!lookAhead("'")){literal=false}else{output+=format.charAt(iFormat)}}else{switch(format.charAt(iFormat)){case"d":output+=formatNumber("d",date.getDate(),2);break;case"D":output+=formatName("D",date.getDay(),dayNamesShort,dayNames);break;case"o":output+=formatNumber("o",Math.round((new Date(date.getFullYear(),date.getMonth(),date.getDate()).getTime()-new Date(date.getFullYear(),0,0).getTime())/86400000),3);break;case"m":output+=formatNumber("m",date.getMonth()+1,2);break;case"M":output+=formatName("M",date.getMonth(),monthNamesShort,monthNames);break;case"y":output+=(lookAhead("y")?date.getFullYear():(date.getYear()%100<10?"0":"")+date.getYear()%100);break;case"@":output+=date.getTime();break;case"!":output+=date.getTime()*10000+this._ticksTo1970;break;case"'":if(lookAhead("'")){output+="'"}else{literal=true}break;default:output+=format.charAt(iFormat)}}}}return output},_possibleChars:function(format){var chars="";var literal=false;var lookAhead=function(match){var matches=(iFormat+1<format.length&&format.charAt(iFormat+1)==match);if(matches){iFormat++}return matches};for(var iFormat=0;iFormat<format.length;iFormat++){if(literal){if(format.charAt(iFormat)=="'"&&!lookAhead("'")){literal=false}else{chars+=format.charAt(iFormat)}}else{switch(format.charAt(iFormat)){case"d":case"m":case"y":case"@":chars+="0123456789";break;case"D":case"M":return null;case"'":if(lookAhead("'")){chars+="'"}else{literal=true}break;default:chars+=format.charAt(iFormat)}}}return chars},_get:function(inst,name){return inst.settings[name]!==undefined?inst.settings[name]:this._defaults[name]},_setDateFromField:function(inst,noDefault){if(inst.input.val()==inst.lastVal){return}var dateFormat=this._get(inst,"dateFormat");var dates=inst.lastVal=inst.input?inst.input.val():null;var date,defaultDate;date=defaultDate=this._getDefaultDate(inst);var settings=this._getFormatConfig(inst);try{date=this.parseDate(dateFormat,dates,settings)||defaultDate}catch(event){this.log(event);dates=(noDefault?"":dates)}inst.selectedDay=date.getDate();inst.drawMonth=inst.selectedMonth=date.getMonth();inst.drawYear=inst.selectedYear=date.getFullYear();inst.currentDay=(dates?date.getDate():0);inst.currentMonth=(dates?date.getMonth():0);inst.currentYear=(dates?date.getFullYear():0);this._adjustInstDate(inst)},_getDefaultDate:function(inst){return this._restrictMinMax(inst,this._determineDate(inst,this._get(inst,"defaultDate"),new Date()))},_determineDate:function(inst,date,defaultDate){var offsetNumeric=function(offset){var date=new Date();date.setDate(date.getDate()+offset);return date};var offsetString=function(offset){try{return $.datepicker.parseDate($.datepicker._get(inst,"dateFormat"),offset,$.datepicker._getFormatConfig(inst))}catch(e){}var date=(offset.toLowerCase().match(/^c/)?$.datepicker._getDate(inst):null)||new Date();var year=date.getFullYear();var month=date.getMonth();var day=date.getDate();var pattern=/([+-]?[0-9]+)\s*(d|D|w|W|m|M|y|Y)?/g;var matches=pattern.exec(offset);while(matches){switch(matches[2]||"d"){case"d":case"D":day+=parseInt(matches[1],10);break;case"w":case"W":day+=parseInt(matches[1],10)*7;break;case"m":case"M":month+=parseInt(matches[1],10);day=Math.min(day,$.datepicker._getDaysInMonth(year,month));break;case"y":case"Y":year+=parseInt(matches[1],10);day=Math.min(day,$.datepicker._getDaysInMonth(year,month));break}matches=pattern.exec(offset)}return new Date(year,month,day)};var newDate=(date==null||date===""?defaultDate:(typeof date=="string"?offsetString(date):(typeof date=="number"?(isNaN(date)?defaultDate:offsetNumeric(date)):new Date(date.getTime()))));newDate=(newDate&&newDate.toString()=="Invalid Date"?defaultDate:newDate);if(newDate){newDate.setHours(0);newDate.setMinutes(0);newDate.setSeconds(0);newDate.setMilliseconds(0)}return this._daylightSavingAdjust(newDate)},_daylightSavingAdjust:function(date){if(!date){return null}date.setHours(date.getHours()>12?date.getHours()+2:0);return date},_setDate:function(inst,date,noChange){var clear=!date;var origMonth=inst.selectedMonth;var origYear=inst.selectedYear;var newDate=this._restrictMinMax(inst,this._determineDate(inst,date,new Date()));inst.selectedDay=inst.currentDay=newDate.getDate();inst.drawMonth=inst.selectedMonth=inst.currentMonth=newDate.getMonth();inst.drawYear=inst.selectedYear=inst.currentYear=newDate.getFullYear();if((origMonth!=inst.selectedMonth||origYear!=inst.selectedYear)&&!noChange){this._notifyChange(inst)}this._adjustInstDate(inst);if(inst.input){inst.input.val(clear?"":this._formatDate(inst))}},_getDate:function(inst){var startDate=(!inst.currentYear||(inst.input&&inst.input.val()=="")?null:this._daylightSavingAdjust(new Date(inst.currentYear,inst.currentMonth,inst.currentDay)));return startDate},_generateHTML:function(inst){var today=new Date();today=this._daylightSavingAdjust(new Date(today.getFullYear(),today.getMonth(),today.getDate()));var isRTL=this._get(inst,"isRTL");var showButtonPanel=this._get(inst,"showButtonPanel");var hideIfNoPrevNext=this._get(inst,"hideIfNoPrevNext");var navigationAsDateFormat=this._get(inst,"navigationAsDateFormat");var numMonths=this._getNumberOfMonths(inst);var showCurrentAtPos=this._get(inst,"showCurrentAtPos");var stepMonths=this._get(inst,"stepMonths");var isMultiMonth=(numMonths[0]!=1||numMonths[1]!=1);var currentDate=this._daylightSavingAdjust((!inst.currentDay?new Date(9999,9,9):new Date(inst.currentYear,inst.currentMonth,inst.currentDay)));var minDate=this._getMinMaxDate(inst,"min");var maxDate=this._getMinMaxDate(inst,"max");var drawMonth=inst.drawMonth-showCurrentAtPos;var drawYear=inst.drawYear;if(drawMonth<0){drawMonth+=12;drawYear--}if(maxDate){var maxDraw=this._daylightSavingAdjust(new Date(maxDate.getFullYear(),maxDate.getMonth()-(numMonths[0]*numMonths[1])+1,maxDate.getDate()));maxDraw=(minDate&&maxDraw<minDate?minDate:maxDraw);while(this._daylightSavingAdjust(new Date(drawYear,drawMonth,1))>maxDraw){drawMonth--;if(drawMonth<0){drawMonth=11;drawYear--}}}inst.drawMonth=drawMonth;inst.drawYear=drawYear;var prevText=this._get(inst,"prevText");prevText=(!navigationAsDateFormat?prevText:this.formatDate(prevText,this._daylightSavingAdjust(new Date(drawYear,drawMonth-stepMonths,1)),this._getFormatConfig(inst)));var prev=(this._canAdjustMonth(inst,-1,drawYear,drawMonth)?'<a class="ui-datepicker-prev ui-corner-all" onclick="DP_jQuery_'+dpuuid+".datepicker._adjustDate('#"+inst.id+"', -"+stepMonths+", 'M');\" title=\""+prevText+'"><span class="ui-icon ui-icon-circle-triangle-'+(isRTL?"e":"w")+'">'+prevText+"</span></a>":(hideIfNoPrevNext?"":'<a class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="'+prevText+'"><span class="ui-icon ui-icon-circle-triangle-'+(isRTL?"e":"w")+'">'+prevText+"</span></a>"));var nextText=this._get(inst,"nextText");nextText=(!navigationAsDateFormat?nextText:this.formatDate(nextText,this._daylightSavingAdjust(new Date(drawYear,drawMonth+stepMonths,1)),this._getFormatConfig(inst)));var next=(this._canAdjustMonth(inst,+1,drawYear,drawMonth)?'<a class="ui-datepicker-next ui-corner-all" onclick="DP_jQuery_'+dpuuid+".datepicker._adjustDate('#"+inst.id+"', +"+stepMonths+", 'M');\" title=\""+nextText+'"><span class="ui-icon ui-icon-circle-triangle-'+(isRTL?"w":"e")+'">'+nextText+"</span></a>":(hideIfNoPrevNext?"":'<a class="ui-datepicker-next ui-corner-all ui-state-disabled" title="'+nextText+'"><span class="ui-icon ui-icon-circle-triangle-'+(isRTL?"w":"e")+'">'+nextText+"</span></a>"));var currentText=this._get(inst,"currentText");var gotoDate=(this._get(inst,"gotoCurrent")&&inst.currentDay?currentDate:today);currentText=(!navigationAsDateFormat?currentText:this.formatDate(currentText,gotoDate,this._getFormatConfig(inst)));var controls=(!inst.inline?'<button type="button" class="ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all" onclick="DP_jQuery_'+dpuuid+'.datepicker._hideDatepicker();">'+this._get(inst,"closeText")+"</button>":"");var buttonPanel=(showButtonPanel)?'<div class="ui-datepicker-buttonpane ui-widget-content">'+(isRTL?controls:"")+(this._isInRange(inst,gotoDate)?'<button type="button" class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all" onclick="DP_jQuery_'+dpuuid+".datepicker._gotoToday('#"+inst.id+"');\">"+currentText+"</button>":"")+(isRTL?"":controls)+"</div>":"";var firstDay=parseInt(this._get(inst,"firstDay"),10);firstDay=(isNaN(firstDay)?0:firstDay);var showWeek=this._get(inst,"showWeek");var dayNames=this._get(inst,"dayNames");var dayNamesShort=this._get(inst,"dayNamesShort");var dayNamesMin=this._get(inst,"dayNamesMin");var monthNames=this._get(inst,"monthNames");var monthNamesShort=this._get(inst,"monthNamesShort");var beforeShowDay=this._get(inst,"beforeShowDay");var showOtherMonths=this._get(inst,"showOtherMonths");var selectOtherMonths=this._get(inst,"selectOtherMonths");var calculateWeek=this._get(inst,"calculateWeek")||this.iso8601Week;var defaultDate=this._getDefaultDate(inst);var html="";for(var row=0;row<numMonths[0];row++){var group="";this.maxRows=4;for(var col=0;col<numMonths[1];col++){var selectedDate=this._daylightSavingAdjust(new Date(drawYear,drawMonth,inst.selectedDay));var cornerClass=" ui-corner-all";var calender="";if(isMultiMonth){calender+='<div class="ui-datepicker-group';if(numMonths[1]>1){switch(col){case 0:calender+=" ui-datepicker-group-first";cornerClass=" ui-corner-"+(isRTL?"right":"left");break;case numMonths[1]-1:calender+=" ui-datepicker-group-last";cornerClass=" ui-corner-"+(isRTL?"left":"right");break;default:calender+=" ui-datepicker-group-middle";cornerClass="";break}}calender+='">'}calender+='<div class="ui-datepicker-header ui-widget-header ui-helper-clearfix'+cornerClass+'">'+(/all|left/.test(cornerClass)&&row==0?(isRTL?next:prev):"")+(/all|right/.test(cornerClass)&&row==0?(isRTL?prev:next):"")+this._generateMonthYearHeader(inst,drawMonth,drawYear,minDate,maxDate,row>0||col>0,monthNames,monthNamesShort)+'</div><table class="ui-datepicker-calendar"><thead><tr>';var thead=(showWeek?'<th class="ui-datepicker-week-col">'+this._get(inst,"weekHeader")+"</th>":"");for(var dow=0;dow<7;dow++){var day=(dow+firstDay)%7;thead+="<th"+((dow+firstDay+6)%7>=5?' class="ui-datepicker-week-end"':"")+'><span title="'+dayNames[day]+'">'+dayNamesMin[day]+"</span></th>"}calender+=thead+"</tr></thead><tbody>";var daysInMonth=this._getDaysInMonth(drawYear,drawMonth);if(drawYear==inst.selectedYear&&drawMonth==inst.selectedMonth){inst.selectedDay=Math.min(inst.selectedDay,daysInMonth)}var leadDays=(this._getFirstDayOfMonth(drawYear,drawMonth)-firstDay+7)%7;var curRows=Math.ceil((leadDays+daysInMonth)/7);var numRows=(isMultiMonth?this.maxRows>curRows?this.maxRows:curRows:curRows);this.maxRows=numRows;var printDate=this._daylightSavingAdjust(new Date(drawYear,drawMonth,1-leadDays));for(var dRow=0;dRow<numRows;dRow++){calender+="<tr>";var tbody=(!showWeek?"":'<td class="ui-datepicker-week-col">'+this._get(inst,"calculateWeek")(printDate)+"</td>");for(var dow=0;dow<7;dow++){var daySettings=(beforeShowDay?beforeShowDay.apply((inst.input?inst.input[0]:null),[printDate]):[true,""]);var otherMonth=(printDate.getMonth()!=drawMonth);var unselectable=(otherMonth&&!selectOtherMonths)||!daySettings[0]||(minDate&&printDate<minDate)||(maxDate&&printDate>maxDate);tbody+='<td class="'+((dow+firstDay+6)%7>=5?" ui-datepicker-week-end":"")+(otherMonth?" ui-datepicker-other-month":"")+((printDate.getTime()==selectedDate.getTime()&&drawMonth==inst.selectedMonth&&inst._keyEvent)||(defaultDate.getTime()==printDate.getTime()&&defaultDate.getTime()==selectedDate.getTime())?" "+this._dayOverClass:"")+(unselectable?" "+this._unselectableClass+" ui-state-disabled":"")+(otherMonth&&!showOtherMonths?"":" "+daySettings[1]+(printDate.getTime()==currentDate.getTime()?" "+this._currentClass:"")+(printDate.getTime()==today.getTime()?" ui-datepicker-today":""))+'"'+((!otherMonth||showOtherMonths)&&daySettings[2]?' title="'+daySettings[2]+'"':"")+(unselectable?"":' onclick="DP_jQuery_'+dpuuid+".datepicker._selectDay('#"+inst.id+"',"+printDate.getMonth()+","+printDate.getFullYear()+', this);return false;"')+">"+(otherMonth&&!showOtherMonths?"&#xa0;":(unselectable?'<span class="ui-state-default">'+printDate.getDate()+"</span>":'<a class="ui-state-default'+(printDate.getTime()==today.getTime()?" ui-state-highlight":"")+(printDate.getTime()==currentDate.getTime()?" ui-state-active":"")+(otherMonth?" ui-priority-secondary":"")+'" href="#">'+printDate.getDate()+"</a>"))+"</td>";printDate.setDate(printDate.getDate()+1);printDate=this._daylightSavingAdjust(printDate)}calender+=tbody+"</tr>"}drawMonth++;if(drawMonth>11){drawMonth=0;drawYear++}calender+="</tbody></table>"+(isMultiMonth?"</div>"+((numMonths[0]>0&&col==numMonths[1]-1)?'<div class="ui-datepicker-row-break"></div>':""):"");group+=calender}html+=group}html+=buttonPanel+($.browser.msie&&parseInt($.browser.version,10)<7&&!inst.inline?'<iframe src="javascript:false;" class="ui-datepicker-cover" frameborder="0"></iframe>':"");inst._keyEvent=false;return html},_generateMonthYearHeader:function(inst,drawMonth,drawYear,minDate,maxDate,secondary,monthNames,monthNamesShort){var changeMonth=this._get(inst,"changeMonth");var changeYear=this._get(inst,"changeYear");var showMonthAfterYear=this._get(inst,"showMonthAfterYear");var html='<div class="ui-datepicker-title">';var monthHtml="";if(secondary||!changeMonth){monthHtml+='<span class="ui-datepicker-month">'+monthNames[drawMonth]+"</span>"}else{var inMinYear=(minDate&&minDate.getFullYear()==drawYear);var inMaxYear=(maxDate&&maxDate.getFullYear()==drawYear);monthHtml+='<select class="ui-datepicker-month" onchange="DP_jQuery_'+dpuuid+".datepicker._selectMonthYear('#"+inst.id+"', this, 'M');\" >";for(var month=0;month<12;month++){if((!inMinYear||month>=minDate.getMonth())&&(!inMaxYear||month<=maxDate.getMonth())){monthHtml+='<option value="'+month+'"'+(month==drawMonth?' selected="selected"':"")+">"+monthNamesShort[month]+"</option>"}}monthHtml+="</select>"}if(!showMonthAfterYear){html+=monthHtml+(secondary||!(changeMonth&&changeYear)?"&#xa0;":"")}if(!inst.yearshtml){inst.yearshtml="";if(secondary||!changeYear){html+='<span class="ui-datepicker-year">'+drawYear+"</span>"}else{var years=this._get(inst,"yearRange").split(":");var thisYear=new Date().getFullYear();var determineYear=function(value){var year=(value.match(/c[+-].*/)?drawYear+parseInt(value.substring(1),10):(value.match(/[+-].*/)?thisYear+parseInt(value,10):parseInt(value,10)));return(isNaN(year)?thisYear:year)};var year=determineYear(years[0]);var endYear=Math.max(year,determineYear(years[1]||""));year=(minDate?Math.max(year,minDate.getFullYear()):year);endYear=(maxDate?Math.min(endYear,maxDate.getFullYear()):endYear);inst.yearshtml+='<select class="ui-datepicker-year" onchange="DP_jQuery_'+dpuuid+".datepicker._selectMonthYear('#"+inst.id+"', this, 'Y');\" >";for(;year<=endYear;year++){inst.yearshtml+='<option value="'+year+'"'+(year==drawYear?' selected="selected"':"")+">"+year+"</option>"}inst.yearshtml+="</select>";html+=inst.yearshtml;inst.yearshtml=null}}html+=this._get(inst,"yearSuffix");if(showMonthAfterYear){html+=(secondary||!(changeMonth&&changeYear)?"&#xa0;":"")+monthHtml}html+="</div>";return html},_adjustInstDate:function(inst,offset,period){var year=inst.drawYear+(period=="Y"?offset:0);var month=inst.drawMonth+(period=="M"?offset:0);var day=Math.min(inst.selectedDay,this._getDaysInMonth(year,month))+(period=="D"?offset:0);var date=this._restrictMinMax(inst,this._daylightSavingAdjust(new Date(year,month,day)));inst.selectedDay=date.getDate();inst.drawMonth=inst.selectedMonth=date.getMonth();inst.drawYear=inst.selectedYear=date.getFullYear();if(period=="M"||period=="Y"){this._notifyChange(inst)}},_restrictMinMax:function(inst,date){var minDate=this._getMinMaxDate(inst,"min");var maxDate=this._getMinMaxDate(inst,"max");var newDate=(minDate&&date<minDate?minDate:date);newDate=(maxDate&&newDate>maxDate?maxDate:newDate);return newDate},_notifyChange:function(inst){var onChange=this._get(inst,"onChangeMonthYear");if(onChange){onChange.apply((inst.input?inst.input[0]:null),[inst.selectedYear,inst.selectedMonth+1,inst])}},_getNumberOfMonths:function(inst){var numMonths=this._get(inst,"numberOfMonths");return(numMonths==null?[1,1]:(typeof numMonths=="number"?[1,numMonths]:numMonths))},_getMinMaxDate:function(inst,minMax){return this._determineDate(inst,this._get(inst,minMax+"Date"),null)},_getDaysInMonth:function(year,month){return 32-this._daylightSavingAdjust(new Date(year,month,32)).getDate()},_getFirstDayOfMonth:function(year,month){return new Date(year,month,1).getDay()},_canAdjustMonth:function(inst,offset,curYear,curMonth){var numMonths=this._getNumberOfMonths(inst);var date=this._daylightSavingAdjust(new Date(curYear,curMonth+(offset<0?offset:numMonths[0]*numMonths[1]),1));if(offset<0){date.setDate(this._getDaysInMonth(date.getFullYear(),date.getMonth()))}return this._isInRange(inst,date)},_isInRange:function(inst,date){var minDate=this._getMinMaxDate(inst,"min");var maxDate=this._getMinMaxDate(inst,"max");return((!minDate||date.getTime()>=minDate.getTime())&&(!maxDate||date.getTime()<=maxDate.getTime()))},_getFormatConfig:function(inst){var shortYearCutoff=this._get(inst,"shortYearCutoff");shortYearCutoff=(typeof shortYearCutoff!="string"?shortYearCutoff:new Date().getFullYear()%100+parseInt(shortYearCutoff,10));return{shortYearCutoff:shortYearCutoff,dayNamesShort:this._get(inst,"dayNamesShort"),dayNames:this._get(inst,"dayNames"),monthNamesShort:this._get(inst,"monthNamesShort"),monthNames:this._get(inst,"monthNames")}},_formatDate:function(inst,day,month,year){if(!day){inst.currentDay=inst.selectedDay;inst.currentMonth=inst.selectedMonth;inst.currentYear=inst.selectedYear}var date=(day?(typeof day=="object"?day:this._daylightSavingAdjust(new Date(year,month,day))):this._daylightSavingAdjust(new Date(inst.currentYear,inst.currentMonth,inst.currentDay)));return this.formatDate(this._get(inst,"dateFormat"),date,this._getFormatConfig(inst))}});function bindHover(dpDiv){var selector="button, .ui-datepicker-prev, .ui-datepicker-next, .ui-datepicker-calendar td a";return dpDiv.bind("mouseout",function(event){var elem=$(event.target).closest(selector);if(!elem.length){return}elem.removeClass("ui-state-hover ui-datepicker-prev-hover ui-datepicker-next-hover")}).bind("mouseover",function(event){var elem=$(event.target).closest(selector);if($.datepicker._isDisabledDatepicker(instActive.inline?dpDiv.parent()[0]:instActive.input[0])||!elem.length){return}elem.parents(".ui-datepicker-calendar").find("a").removeClass("ui-state-hover");elem.addClass("ui-state-hover");if(elem.hasClass("ui-datepicker-prev")){elem.addClass("ui-datepicker-prev-hover")}if(elem.hasClass("ui-datepicker-next")){elem.addClass("ui-datepicker-next-hover")}})}function extendRemove(target,props){$.extend(target,props);for(var name in props){if(props[name]==null||props[name]==undefined){target[name]=props[name]}}return target}function isArray(a){return(a&&(($.browser.safari&&typeof a=="object"&&a.length)||(a.constructor&&a.constructor.toString().match(/\Array\(\)/))))}$.fn.datepicker=function(options){if(!this.length){return this}if(!$.datepicker.initialized){$(document).mousedown($.datepicker._checkExternalClick).find("body").append($.datepicker.dpDiv);$.datepicker.initialized=true}var otherArgs=Array.prototype.slice.call(arguments,1);if(typeof options=="string"&&(options=="isDisabled"||options=="getDate"||options=="widget")){return $.datepicker["_"+options+"Datepicker"].apply($.datepicker,[this[0]].concat(otherArgs))}if(options=="option"&&arguments.length==2&&typeof arguments[1]=="string"){return $.datepicker["_"+options+"Datepicker"].apply($.datepicker,[this[0]].concat(otherArgs))}return this.each(function(){typeof options=="string"?$.datepicker["_"+options+"Datepicker"].apply($.datepicker,[this].concat(otherArgs)):$.datepicker._attachDatepicker(this,options)})};$.datepicker=new Datepicker();$.datepicker.initialized=false;$.datepicker.uuid=new Date().getTime();$.datepicker.version="1.8.21";window["DP_jQuery_"+dpuuid]=$})(jQuery);
/*
 * jQuery UI Progressbar 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Progressbar
 *
 * Depends:
 *   jquery.ui.core.js
 *   jquery.ui.widget.js
 */
(function(a,b){a.widget("ui.progressbar",{options:{value:0,max:100},min:0,_create:function(){this.element.addClass("ui-progressbar ui-widget ui-widget-content ui-corner-all").attr({role:"progressbar","aria-valuemin":this.min,"aria-valuemax":this.options.max,"aria-valuenow":this._value()});this.valueDiv=a("<div class='ui-progressbar-value ui-widget-header ui-corner-left'></div>").appendTo(this.element);this.oldValue=this._value();this._refreshValue()},destroy:function(){this.element.removeClass("ui-progressbar ui-widget ui-widget-content ui-corner-all").removeAttr("role").removeAttr("aria-valuemin").removeAttr("aria-valuemax").removeAttr("aria-valuenow");this.valueDiv.remove();a.Widget.prototype.destroy.apply(this,arguments)},value:function(c){if(c===b){return this._value()}this._setOption("value",c);return this},_setOption:function(c,d){if(c==="value"){this.options.value=d;this._refreshValue();if(this._value()===this.options.max){this._trigger("complete")}}a.Widget.prototype._setOption.apply(this,arguments)},_value:function(){var c=this.options.value;if(typeof c!=="number"){c=0}return Math.min(this.options.max,Math.max(this.min,c))},_percentage:function(){return 100*this._value()/this.options.max},_refreshValue:function(){var d=this.value();var c=this._percentage();if(this.oldValue!==d){this.oldValue=d;this._trigger("change")}this.valueDiv.toggle(d>this.min).toggleClass("ui-corner-right",d===this.options.max).width(c.toFixed(0)+"%");this.element.attr("aria-valuenow",d)}});a.extend(a.ui.progressbar,{version:"1.8.21"})})(jQuery);
/*
 * jQuery UI Effects 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Effects/
 */
jQuery.effects||(function(h,e){h.effects={};h.each(["backgroundColor","borderBottomColor","borderLeftColor","borderRightColor","borderTopColor","borderColor","color","outlineColor"],function(n,m){h.fx.step[m]=function(o){if(!o.colorInit){o.start=l(o.elem,m);o.end=j(o.end);o.colorInit=true}o.elem.style[m]="rgb("+Math.max(Math.min(parseInt((o.pos*(o.end[0]-o.start[0]))+o.start[0],10),255),0)+","+Math.max(Math.min(parseInt((o.pos*(o.end[1]-o.start[1]))+o.start[1],10),255),0)+","+Math.max(Math.min(parseInt((o.pos*(o.end[2]-o.start[2]))+o.start[2],10),255),0)+")"}});function j(n){var m;if(n&&n.constructor==Array&&n.length==3){return n}if(m=/rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(n)){return[parseInt(m[1],10),parseInt(m[2],10),parseInt(m[3],10)]}if(m=/rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(n)){return[parseFloat(m[1])*2.55,parseFloat(m[2])*2.55,parseFloat(m[3])*2.55]}if(m=/#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(n)){return[parseInt(m[1],16),parseInt(m[2],16),parseInt(m[3],16)]}if(m=/#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(n)){return[parseInt(m[1]+m[1],16),parseInt(m[2]+m[2],16),parseInt(m[3]+m[3],16)]}if(m=/rgba\(0, 0, 0, 0\)/.exec(n)){return a.transparent}return a[h.trim(n).toLowerCase()]}function l(o,m){var n;do{n=h.curCSS(o,m);if(n!=""&&n!="transparent"||h.nodeName(o,"body")){break}m="backgroundColor"}while(o=o.parentNode);return j(n)}var a={aqua:[0,255,255],azure:[240,255,255],beige:[245,245,220],black:[0,0,0],blue:[0,0,255],brown:[165,42,42],cyan:[0,255,255],darkblue:[0,0,139],darkcyan:[0,139,139],darkgrey:[169,169,169],darkgreen:[0,100,0],darkkhaki:[189,183,107],darkmagenta:[139,0,139],darkolivegreen:[85,107,47],darkorange:[255,140,0],darkorchid:[153,50,204],darkred:[139,0,0],darksalmon:[233,150,122],darkviolet:[148,0,211],fuchsia:[255,0,255],gold:[255,215,0],green:[0,128,0],indigo:[75,0,130],khaki:[240,230,140],lightblue:[173,216,230],lightcyan:[224,255,255],lightgreen:[144,238,144],lightgrey:[211,211,211],lightpink:[255,182,193],lightyellow:[255,255,224],lime:[0,255,0],magenta:[255,0,255],maroon:[128,0,0],navy:[0,0,128],olive:[128,128,0],orange:[255,165,0],pink:[255,192,203],purple:[128,0,128],violet:[128,0,128],red:[255,0,0],silver:[192,192,192],white:[255,255,255],yellow:[255,255,0],transparent:[255,255,255]};var f=["add","remove","toggle"],c={border:1,borderBottom:1,borderColor:1,borderLeft:1,borderRight:1,borderTop:1,borderWidth:1,margin:1,padding:1};function g(){var p=document.defaultView?document.defaultView.getComputedStyle(this,null):this.currentStyle,q={},n,o;if(p&&p.length&&p[0]&&p[p[0]]){var m=p.length;while(m--){n=p[m];if(typeof p[n]=="string"){o=n.replace(/\-(\w)/g,function(r,s){return s.toUpperCase()});q[o]=p[n]}}}else{for(n in p){if(typeof p[n]==="string"){q[n]=p[n]}}}return q}function b(n){var m,o;for(m in n){o=n[m];if(o==null||h.isFunction(o)||m in c||(/scrollbar/).test(m)||(!(/color/i).test(m)&&isNaN(parseFloat(o)))){delete n[m]}}return n}function i(m,o){var p={_:0},n;for(n in o){if(m[n]!=o[n]){p[n]=o[n]}}return p}h.effects.animateClass=function(m,n,p,o){if(h.isFunction(p)){o=p;p=null}return this.queue(function(){var t=h(this),q=t.attr("style")||" ",u=b(g.call(this)),s,r=t.attr("class")||"";h.each(f,function(v,w){if(m[w]){t[w+"Class"](m[w])}});s=b(g.call(this));t.attr("class",r);t.animate(i(u,s),{queue:false,duration:n,easing:p,complete:function(){h.each(f,function(v,w){if(m[w]){t[w+"Class"](m[w])}});if(typeof t.attr("style")=="object"){t.attr("style").cssText="";t.attr("style").cssText=q}else{t.attr("style",q)}if(o){o.apply(this,arguments)}h.dequeue(this)}})})};h.fn.extend({_addClass:h.fn.addClass,addClass:function(n,m,p,o){return m?h.effects.animateClass.apply(this,[{add:n},m,p,o]):this._addClass(n)},_removeClass:h.fn.removeClass,removeClass:function(n,m,p,o){return m?h.effects.animateClass.apply(this,[{remove:n},m,p,o]):this._removeClass(n)},_toggleClass:h.fn.toggleClass,toggleClass:function(o,n,m,q,p){if(typeof n=="boolean"||n===e){if(!m){return this._toggleClass(o,n)}else{return h.effects.animateClass.apply(this,[(n?{add:o}:{remove:o}),m,q,p])}}else{return h.effects.animateClass.apply(this,[{toggle:o},n,m,q])}},switchClass:function(m,o,n,q,p){return h.effects.animateClass.apply(this,[{add:o,remove:m},n,q,p])}});h.extend(h.effects,{version:"1.8.21",save:function(n,o){for(var m=0;m<o.length;m++){if(o[m]!==null){n.data("ec.storage."+o[m],n[0].style[o[m]])}}},restore:function(n,o){for(var m=0;m<o.length;m++){if(o[m]!==null){n.css(o[m],n.data("ec.storage."+o[m]))}}},setMode:function(m,n){if(n=="toggle"){n=m.is(":hidden")?"show":"hide"}return n},getBaseline:function(n,o){var p,m;switch(n[0]){case"top":p=0;break;case"middle":p=0.5;break;case"bottom":p=1;break;default:p=n[0]/o.height}switch(n[1]){case"left":m=0;break;case"center":m=0.5;break;case"right":m=1;break;default:m=n[1]/o.width}return{x:m,y:p}},createWrapper:function(m){if(m.parent().is(".ui-effects-wrapper")){return m.parent()}var n={width:m.outerWidth(true),height:m.outerHeight(true),"float":m.css("float")},q=h("<div></div>").addClass("ui-effects-wrapper").css({fontSize:"100%",background:"transparent",border:"none",margin:0,padding:0}),p=document.activeElement;try{p.id}catch(o){p=document.body}m.wrap(q);if(m[0]===p||h.contains(m[0],p)){h(p).focus()}q=m.parent();if(m.css("position")=="static"){q.css({position:"relative"});m.css({position:"relative"})}else{h.extend(n,{position:m.css("position"),zIndex:m.css("z-index")});h.each(["top","left","bottom","right"],function(r,s){n[s]=m.css(s);if(isNaN(parseInt(n[s],10))){n[s]="auto"}});m.css({position:"relative",top:0,left:0,right:"auto",bottom:"auto"})}return q.css(n).show()},removeWrapper:function(m){var n,o=document.activeElement;if(m.parent().is(".ui-effects-wrapper")){n=m.parent().replaceWith(m);if(m[0]===o||h.contains(m[0],o)){h(o).focus()}return n}return m},setTransition:function(n,p,m,o){o=o||{};h.each(p,function(r,q){var s=n.cssUnit(q);if(s[0]>0){o[q]=s[0]*m+s[1]}});return o}});function d(n,m,o,p){if(typeof n=="object"){p=m;o=null;m=n;n=m.effect}if(h.isFunction(m)){p=m;o=null;m={}}if(typeof m=="number"||h.fx.speeds[m]){p=o;o=m;m={}}if(h.isFunction(o)){p=o;o=null}m=m||{};o=o||m.duration;o=h.fx.off?0:typeof o=="number"?o:o in h.fx.speeds?h.fx.speeds[o]:h.fx.speeds._default;p=p||m.complete;return[n,m,o,p]}function k(m){if(!m||typeof m==="number"||h.fx.speeds[m]){return true}if(typeof m==="string"&&!h.effects[m]){return true}return false}h.fn.extend({effect:function(p,o,r,t){var n=d.apply(this,arguments),q={options:n[1],duration:n[2],callback:n[3]},s=q.options.mode,m=h.effects[p];if(h.fx.off||!m){if(s){return this[s](q.duration,q.callback)}else{return this.each(function(){if(q.callback){q.callback.call(this)}})}}return m.call(this,q)},_show:h.fn.show,show:function(n){if(k(n)){return this._show.apply(this,arguments)}else{var m=d.apply(this,arguments);m[1].mode="show";return this.effect.apply(this,m)}},_hide:h.fn.hide,hide:function(n){if(k(n)){return this._hide.apply(this,arguments)}else{var m=d.apply(this,arguments);m[1].mode="hide";return this.effect.apply(this,m)}},__toggle:h.fn.toggle,toggle:function(n){if(k(n)||typeof n==="boolean"||h.isFunction(n)){return this.__toggle.apply(this,arguments)}else{var m=d.apply(this,arguments);m[1].mode="toggle";return this.effect.apply(this,m)}},cssUnit:function(m){var n=this.css(m),o=[];h.each(["em","px","%","pt"],function(p,q){if(n.indexOf(q)>0){o=[parseFloat(n),q]}});return o}});h.easing.jswing=h.easing.swing;h.extend(h.easing,{def:"easeOutQuad",swing:function(n,o,m,q,p){return h.easing[h.easing.def](n,o,m,q,p)},easeInQuad:function(n,o,m,q,p){return q*(o/=p)*o+m},easeOutQuad:function(n,o,m,q,p){return -q*(o/=p)*(o-2)+m},easeInOutQuad:function(n,o,m,q,p){if((o/=p/2)<1){return q/2*o*o+m}return -q/2*((--o)*(o-2)-1)+m},easeInCubic:function(n,o,m,q,p){return q*(o/=p)*o*o+m},easeOutCubic:function(n,o,m,q,p){return q*((o=o/p-1)*o*o+1)+m},easeInOutCubic:function(n,o,m,q,p){if((o/=p/2)<1){return q/2*o*o*o+m}return q/2*((o-=2)*o*o+2)+m},easeInQuart:function(n,o,m,q,p){return q*(o/=p)*o*o*o+m},easeOutQuart:function(n,o,m,q,p){return -q*((o=o/p-1)*o*o*o-1)+m},easeInOutQuart:function(n,o,m,q,p){if((o/=p/2)<1){return q/2*o*o*o*o+m}return -q/2*((o-=2)*o*o*o-2)+m},easeInQuint:function(n,o,m,q,p){return q*(o/=p)*o*o*o*o+m},easeOutQuint:function(n,o,m,q,p){return q*((o=o/p-1)*o*o*o*o+1)+m},easeInOutQuint:function(n,o,m,q,p){if((o/=p/2)<1){return q/2*o*o*o*o*o+m}return q/2*((o-=2)*o*o*o*o+2)+m},easeInSine:function(n,o,m,q,p){return -q*Math.cos(o/p*(Math.PI/2))+q+m},easeOutSine:function(n,o,m,q,p){return q*Math.sin(o/p*(Math.PI/2))+m},easeInOutSine:function(n,o,m,q,p){return -q/2*(Math.cos(Math.PI*o/p)-1)+m},easeInExpo:function(n,o,m,q,p){return(o==0)?m:q*Math.pow(2,10*(o/p-1))+m},easeOutExpo:function(n,o,m,q,p){return(o==p)?m+q:q*(-Math.pow(2,-10*o/p)+1)+m},easeInOutExpo:function(n,o,m,q,p){if(o==0){return m}if(o==p){return m+q}if((o/=p/2)<1){return q/2*Math.pow(2,10*(o-1))+m}return q/2*(-Math.pow(2,-10*--o)+2)+m},easeInCirc:function(n,o,m,q,p){return -q*(Math.sqrt(1-(o/=p)*o)-1)+m},easeOutCirc:function(n,o,m,q,p){return q*Math.sqrt(1-(o=o/p-1)*o)+m},easeInOutCirc:function(n,o,m,q,p){if((o/=p/2)<1){return -q/2*(Math.sqrt(1-o*o)-1)+m}return q/2*(Math.sqrt(1-(o-=2)*o)+1)+m},easeInElastic:function(n,q,m,w,v){var r=1.70158;var u=0;var o=w;if(q==0){return m}if((q/=v)==1){return m+w}if(!u){u=v*0.3}if(o<Math.abs(w)){o=w;var r=u/4}else{var r=u/(2*Math.PI)*Math.asin(w/o)}return -(o*Math.pow(2,10*(q-=1))*Math.sin((q*v-r)*(2*Math.PI)/u))+m},easeOutElastic:function(n,q,m,w,v){var r=1.70158;var u=0;var o=w;if(q==0){return m}if((q/=v)==1){return m+w}if(!u){u=v*0.3}if(o<Math.abs(w)){o=w;var r=u/4}else{var r=u/(2*Math.PI)*Math.asin(w/o)}return o*Math.pow(2,-10*q)*Math.sin((q*v-r)*(2*Math.PI)/u)+w+m},easeInOutElastic:function(n,q,m,w,v){var r=1.70158;var u=0;var o=w;if(q==0){return m}if((q/=v/2)==2){return m+w}if(!u){u=v*(0.3*1.5)}if(o<Math.abs(w)){o=w;var r=u/4}else{var r=u/(2*Math.PI)*Math.asin(w/o)}if(q<1){return -0.5*(o*Math.pow(2,10*(q-=1))*Math.sin((q*v-r)*(2*Math.PI)/u))+m}return o*Math.pow(2,-10*(q-=1))*Math.sin((q*v-r)*(2*Math.PI)/u)*0.5+w+m},easeInBack:function(n,o,m,r,q,p){if(p==e){p=1.70158}return r*(o/=q)*o*((p+1)*o-p)+m},easeOutBack:function(n,o,m,r,q,p){if(p==e){p=1.70158}return r*((o=o/q-1)*o*((p+1)*o+p)+1)+m},easeInOutBack:function(n,o,m,r,q,p){if(p==e){p=1.70158}if((o/=q/2)<1){return r/2*(o*o*(((p*=(1.525))+1)*o-p))+m}return r/2*((o-=2)*o*(((p*=(1.525))+1)*o+p)+2)+m},easeInBounce:function(n,o,m,q,p){return q-h.easing.easeOutBounce(n,p-o,0,q,p)+m},easeOutBounce:function(n,o,m,q,p){if((o/=p)<(1/2.75)){return q*(7.5625*o*o)+m}else{if(o<(2/2.75)){return q*(7.5625*(o-=(1.5/2.75))*o+0.75)+m}else{if(o<(2.5/2.75)){return q*(7.5625*(o-=(2.25/2.75))*o+0.9375)+m}else{return q*(7.5625*(o-=(2.625/2.75))*o+0.984375)+m}}}},easeInOutBounce:function(n,o,m,q,p){if(o<p/2){return h.easing.easeInBounce(n,o*2,0,q,p)*0.5+m}return h.easing.easeOutBounce(n,o*2-p,0,q,p)*0.5+q*0.5+m}})})(jQuery);
/*
 * jQuery UI Effects Blind 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Effects/Blind
 *
 * Depends:
 *	jquery.effects.core.js
 */
(function(a,b){a.effects.blind=function(c){return this.queue(function(){var e=a(this),d=["position","top","bottom","left","right"];var i=a.effects.setMode(e,c.options.mode||"hide");var h=c.options.direction||"vertical";a.effects.save(e,d);e.show();var k=a.effects.createWrapper(e).css({overflow:"hidden"});var f=(h=="vertical")?"height":"width";var j=(h=="vertical")?k.height():k.width();if(i=="show"){k.css(f,0)}var g={};g[f]=i=="show"?j:0;k.animate(g,c.duration,c.options.easing,function(){if(i=="hide"){e.hide()}a.effects.restore(e,d);a.effects.removeWrapper(e);if(c.callback){c.callback.apply(e[0],arguments)}e.dequeue()})})}})(jQuery);
/*
 * jQuery UI Effects Bounce 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Effects/Bounce
 *
 * Depends:
 *	jquery.effects.core.js
 */
(function(a,b){a.effects.bounce=function(c){return this.queue(function(){var f=a(this),m=["position","top","bottom","left","right"];var l=a.effects.setMode(f,c.options.mode||"effect");var o=c.options.direction||"up";var d=c.options.distance||20;var e=c.options.times||5;var h=c.duration||250;if(/show|hide/.test(l)){m.push("opacity")}a.effects.save(f,m);f.show();a.effects.createWrapper(f);var g=(o=="up"||o=="down")?"top":"left";var q=(o=="up"||o=="left")?"pos":"neg";var d=c.options.distance||(g=="top"?f.outerHeight({margin:true})/3:f.outerWidth({margin:true})/3);if(l=="show"){f.css("opacity",0).css(g,q=="pos"?-d:d)}if(l=="hide"){d=d/(e*2)}if(l!="hide"){e--}if(l=="show"){var j={opacity:1};j[g]=(q=="pos"?"+=":"-=")+d;f.animate(j,h/2,c.options.easing);d=d/2;e--}for(var k=0;k<e;k++){var p={},n={};p[g]=(q=="pos"?"-=":"+=")+d;n[g]=(q=="pos"?"+=":"-=")+d;f.animate(p,h/2,c.options.easing).animate(n,h/2,c.options.easing);d=(l=="hide")?d*2:d/2}if(l=="hide"){var j={opacity:0};j[g]=(q=="pos"?"-=":"+=")+d;f.animate(j,h/2,c.options.easing,function(){f.hide();a.effects.restore(f,m);a.effects.removeWrapper(f);if(c.callback){c.callback.apply(this,arguments)}})}else{var p={},n={};p[g]=(q=="pos"?"-=":"+=")+d;n[g]=(q=="pos"?"+=":"-=")+d;f.animate(p,h/2,c.options.easing).animate(n,h/2,c.options.easing,function(){a.effects.restore(f,m);a.effects.removeWrapper(f);if(c.callback){c.callback.apply(this,arguments)}})}f.queue("fx",function(){f.dequeue()});f.dequeue()})}})(jQuery);
/*
 * jQuery UI Effects Clip 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Effects/Clip
 *
 * Depends:
 *	jquery.effects.core.js
 */
(function(a,b){a.effects.clip=function(c){return this.queue(function(){var g=a(this),k=["position","top","bottom","left","right","height","width"];var j=a.effects.setMode(g,c.options.mode||"hide");var l=c.options.direction||"vertical";a.effects.save(g,k);g.show();var d=a.effects.createWrapper(g).css({overflow:"hidden"});var f=g[0].tagName=="IMG"?d:g;var h={size:(l=="vertical")?"height":"width",position:(l=="vertical")?"top":"left"};var e=(l=="vertical")?f.height():f.width();if(j=="show"){f.css(h.size,0);f.css(h.position,e/2)}var i={};i[h.size]=j=="show"?e:0;i[h.position]=j=="show"?0:e/2;f.animate(i,{queue:false,duration:c.duration,easing:c.options.easing,complete:function(){if(j=="hide"){g.hide()}a.effects.restore(g,k);a.effects.removeWrapper(g);if(c.callback){c.callback.apply(g[0],arguments)}g.dequeue()}})})}})(jQuery);
/*
 * jQuery UI Effects Drop 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Effects/Drop
 *
 * Depends:
 *	jquery.effects.core.js
 */
(function(a,b){a.effects.drop=function(c){return this.queue(function(){var f=a(this),e=["position","top","bottom","left","right","opacity"];var j=a.effects.setMode(f,c.options.mode||"hide");var i=c.options.direction||"left";a.effects.save(f,e);f.show();a.effects.createWrapper(f);var g=(i=="up"||i=="down")?"top":"left";var d=(i=="up"||i=="left")?"pos":"neg";var k=c.options.distance||(g=="top"?f.outerHeight({margin:true})/2:f.outerWidth({margin:true})/2);if(j=="show"){f.css("opacity",0).css(g,d=="pos"?-k:k)}var h={opacity:j=="show"?1:0};h[g]=(j=="show"?(d=="pos"?"+=":"-="):(d=="pos"?"-=":"+="))+k;f.animate(h,{queue:false,duration:c.duration,easing:c.options.easing,complete:function(){if(j=="hide"){f.hide()}a.effects.restore(f,e);a.effects.removeWrapper(f);if(c.callback){c.callback.apply(this,arguments)}f.dequeue()}})})}})(jQuery);
/*
 * jQuery UI Effects Explode 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Effects/Explode
 *
 * Depends:
 *	jquery.effects.core.js
 */
(function(a,b){a.effects.explode=function(c){return this.queue(function(){var l=c.options.pieces?Math.round(Math.sqrt(c.options.pieces)):3;var f=c.options.pieces?Math.round(Math.sqrt(c.options.pieces)):3;c.options.mode=c.options.mode=="toggle"?(a(this).is(":visible")?"hide":"show"):c.options.mode;var k=a(this).show().css("visibility","hidden");var m=k.offset();m.top-=parseInt(k.css("marginTop"),10)||0;m.left-=parseInt(k.css("marginLeft"),10)||0;var h=k.outerWidth(true);var d=k.outerHeight(true);for(var g=0;g<l;g++){for(var e=0;e<f;e++){k.clone().appendTo("body").wrap("<div></div>").css({position:"absolute",visibility:"visible",left:-e*(h/f),top:-g*(d/l)}).parent().addClass("ui-effects-explode").css({position:"absolute",overflow:"hidden",width:h/f,height:d/l,left:m.left+e*(h/f)+(c.options.mode=="show"?(e-Math.floor(f/2))*(h/f):0),top:m.top+g*(d/l)+(c.options.mode=="show"?(g-Math.floor(l/2))*(d/l):0),opacity:c.options.mode=="show"?0:1}).animate({left:m.left+e*(h/f)+(c.options.mode=="show"?0:(e-Math.floor(f/2))*(h/f)),top:m.top+g*(d/l)+(c.options.mode=="show"?0:(g-Math.floor(l/2))*(d/l)),opacity:c.options.mode=="show"?1:0},c.duration||500)}}setTimeout(function(){c.options.mode=="show"?k.css({visibility:"visible"}):k.css({visibility:"visible"}).hide();if(c.callback){c.callback.apply(k[0])}k.dequeue();a("div.ui-effects-explode").remove()},c.duration||500)})}})(jQuery);
/*
 * jQuery UI Effects Fade 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Effects/Fade
 *
 * Depends:
 *	jquery.effects.core.js
 */
(function(a,b){a.effects.fade=function(c){return this.queue(function(){var d=a(this),e=a.effects.setMode(d,c.options.mode||"hide");d.animate({opacity:e},{queue:false,duration:c.duration,easing:c.options.easing,complete:function(){(c.callback&&c.callback.apply(this,arguments));d.dequeue()}})})}})(jQuery);
/*
 * jQuery UI Effects Fold 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Effects/Fold
 *
 * Depends:
 *	jquery.effects.core.js
 */
(function(a,b){a.effects.fold=function(c){return this.queue(function(){var f=a(this),l=["position","top","bottom","left","right"];var i=a.effects.setMode(f,c.options.mode||"hide");var p=c.options.size||15;var o=!(!c.options.horizFirst);var h=c.duration?c.duration/2:a.fx.speeds._default/2;a.effects.save(f,l);f.show();var e=a.effects.createWrapper(f).css({overflow:"hidden"});var j=((i=="show")!=o);var g=j?["width","height"]:["height","width"];var d=j?[e.width(),e.height()]:[e.height(),e.width()];var k=/([0-9]+)%/.exec(p);if(k){p=parseInt(k[1],10)/100*d[i=="hide"?0:1]}if(i=="show"){e.css(o?{height:0,width:p}:{height:p,width:0})}var n={},m={};n[g[0]]=i=="show"?d[0]:p;m[g[1]]=i=="show"?d[1]:0;e.animate(n,h,c.options.easing).animate(m,h,c.options.easing,function(){if(i=="hide"){f.hide()}a.effects.restore(f,l);a.effects.removeWrapper(f);if(c.callback){c.callback.apply(f[0],arguments)}f.dequeue()})})}})(jQuery);
/*
 * jQuery UI Effects Highlight 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Effects/Highlight
 *
 * Depends:
 *	jquery.effects.core.js
 */
(function(a,b){a.effects.highlight=function(c){return this.queue(function(){var e=a(this),d=["backgroundImage","backgroundColor","opacity"],g=a.effects.setMode(e,c.options.mode||"show"),f={backgroundColor:e.css("backgroundColor")};if(g=="hide"){f.opacity=0}a.effects.save(e,d);e.show().css({backgroundImage:"none",backgroundColor:c.options.color||"#ffff99"}).animate(f,{queue:false,duration:c.duration,easing:c.options.easing,complete:function(){(g=="hide"&&e.hide());a.effects.restore(e,d);(g=="show"&&!a.support.opacity&&this.style.removeAttribute("filter"));(c.callback&&c.callback.apply(this,arguments));e.dequeue()}})})}})(jQuery);
/*
 * jQuery UI Effects Pulsate 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Effects/Pulsate
 *
 * Depends:
 *	jquery.effects.core.js
 */
(function(a,b){a.effects.pulsate=function(c){return this.queue(function(){var g=a(this),k=a.effects.setMode(g,c.options.mode||"show"),j=((c.options.times||5)*2)-1,h=c.duration?c.duration/2:a.fx.speeds._default/2,d=g.is(":visible"),e=0;if(!d){g.css("opacity",0).show();e=1}if((k=="hide"&&d)||(k=="show"&&!d)){j--}for(var f=0;f<j;f++){g.animate({opacity:e},h,c.options.easing);e=(e+1)%2}g.animate({opacity:e},h,c.options.easing,function(){if(e==0){g.hide()}(c.callback&&c.callback.apply(this,arguments))});g.queue("fx",function(){g.dequeue()}).dequeue()})}})(jQuery);
/*
 * jQuery UI Effects Scale 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Effects/Scale
 *
 * Depends:
 *	jquery.effects.core.js
 */
(function(a,b){a.effects.puff=function(c){return this.queue(function(){var g=a(this),h=a.effects.setMode(g,c.options.mode||"hide"),f=parseInt(c.options.percent,10)||150,e=f/100,d={height:g.height(),width:g.width()};a.extend(c.options,{fade:true,mode:h,percent:h=="hide"?f:100,from:h=="hide"?d:{height:d.height*e,width:d.width*e}});g.effect("scale",c.options,c.duration,c.callback);g.dequeue()})};a.effects.scale=function(c){return this.queue(function(){var h=a(this);var e=a.extend(true,{},c.options);var k=a.effects.setMode(h,c.options.mode||"effect");var i=parseInt(c.options.percent,10)||(parseInt(c.options.percent,10)==0?0:(k=="hide"?0:100));var j=c.options.direction||"both";var d=c.options.origin;if(k!="effect"){e.origin=d||["middle","center"];e.restore=true}var g={height:h.height(),width:h.width()};h.from=c.options.from||(k=="show"?{height:0,width:0}:g);var f={y:j!="horizontal"?(i/100):1,x:j!="vertical"?(i/100):1};h.to={height:g.height*f.y,width:g.width*f.x};if(c.options.fade){if(k=="show"){h.from.opacity=0;h.to.opacity=1}if(k=="hide"){h.from.opacity=1;h.to.opacity=0}}e.from=h.from;e.to=h.to;e.mode=k;h.effect("size",e,c.duration,c.callback);h.dequeue()})};a.effects.size=function(c){return this.queue(function(){var d=a(this),o=["position","top","bottom","left","right","width","height","overflow","opacity"];var n=["position","top","bottom","left","right","overflow","opacity"];var k=["width","height","overflow"];var q=["fontSize"];var l=["borderTopWidth","borderBottomWidth","paddingTop","paddingBottom"];var g=["borderLeftWidth","borderRightWidth","paddingLeft","paddingRight"];var h=a.effects.setMode(d,c.options.mode||"effect");var j=c.options.restore||false;var f=c.options.scale||"both";var p=c.options.origin;var e={height:d.height(),width:d.width()};d.from=c.options.from||e;d.to=c.options.to||e;if(p){var i=a.effects.getBaseline(p,e);d.from.top=(e.height-d.from.height)*i.y;d.from.left=(e.width-d.from.width)*i.x;d.to.top=(e.height-d.to.height)*i.y;d.to.left=(e.width-d.to.width)*i.x}var m={from:{y:d.from.height/e.height,x:d.from.width/e.width},to:{y:d.to.height/e.height,x:d.to.width/e.width}};if(f=="box"||f=="both"){if(m.from.y!=m.to.y){o=o.concat(l);d.from=a.effects.setTransition(d,l,m.from.y,d.from);d.to=a.effects.setTransition(d,l,m.to.y,d.to)}if(m.from.x!=m.to.x){o=o.concat(g);d.from=a.effects.setTransition(d,g,m.from.x,d.from);d.to=a.effects.setTransition(d,g,m.to.x,d.to)}}if(f=="content"||f=="both"){if(m.from.y!=m.to.y){o=o.concat(q);d.from=a.effects.setTransition(d,q,m.from.y,d.from);d.to=a.effects.setTransition(d,q,m.to.y,d.to)}}a.effects.save(d,j?o:n);d.show();a.effects.createWrapper(d);d.css("overflow","hidden").css(d.from);if(f=="content"||f=="both"){l=l.concat(["marginTop","marginBottom"]).concat(q);g=g.concat(["marginLeft","marginRight"]);k=o.concat(l).concat(g);d.find("*[width]").each(function(){var s=a(this);if(j){a.effects.save(s,k)}var r={height:s.height(),width:s.width()};s.from={height:r.height*m.from.y,width:r.width*m.from.x};s.to={height:r.height*m.to.y,width:r.width*m.to.x};if(m.from.y!=m.to.y){s.from=a.effects.setTransition(s,l,m.from.y,s.from);s.to=a.effects.setTransition(s,l,m.to.y,s.to)}if(m.from.x!=m.to.x){s.from=a.effects.setTransition(s,g,m.from.x,s.from);s.to=a.effects.setTransition(s,g,m.to.x,s.to)}s.css(s.from);s.animate(s.to,c.duration,c.options.easing,function(){if(j){a.effects.restore(s,k)}})})}d.animate(d.to,{queue:false,duration:c.duration,easing:c.options.easing,complete:function(){if(d.to.opacity===0){d.css("opacity",d.from.opacity)}if(h=="hide"){d.hide()}a.effects.restore(d,j?o:n);a.effects.removeWrapper(d);if(c.callback){c.callback.apply(this,arguments)}d.dequeue()}})})}})(jQuery);
/*
 * jQuery UI Effects Shake 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Effects/Shake
 *
 * Depends:
 *	jquery.effects.core.js
 */
(function(a,b){a.effects.shake=function(c){return this.queue(function(){var f=a(this),m=["position","top","bottom","left","right"];var l=a.effects.setMode(f,c.options.mode||"effect");var o=c.options.direction||"left";var d=c.options.distance||20;var e=c.options.times||3;var h=c.duration||c.options.duration||140;a.effects.save(f,m);f.show();a.effects.createWrapper(f);var g=(o=="up"||o=="down")?"top":"left";var q=(o=="up"||o=="left")?"pos":"neg";var j={},p={},n={};j[g]=(q=="pos"?"-=":"+=")+d;p[g]=(q=="pos"?"+=":"-=")+d*2;n[g]=(q=="pos"?"-=":"+=")+d*2;f.animate(j,h,c.options.easing);for(var k=1;k<e;k++){f.animate(p,h,c.options.easing).animate(n,h,c.options.easing)}f.animate(p,h,c.options.easing).animate(j,h/2,c.options.easing,function(){a.effects.restore(f,m);a.effects.removeWrapper(f);if(c.callback){c.callback.apply(this,arguments)}});f.queue("fx",function(){f.dequeue()});f.dequeue()})}})(jQuery);
/*
 * jQuery UI Effects Slide 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Effects/Slide
 *
 * Depends:
 *	jquery.effects.core.js
 */
(function(a,b){a.effects.slide=function(c){return this.queue(function(){var f=a(this),e=["position","top","bottom","left","right"];var j=a.effects.setMode(f,c.options.mode||"show");var i=c.options.direction||"left";a.effects.save(f,e);f.show();a.effects.createWrapper(f).css({overflow:"hidden"});var g=(i=="up"||i=="down")?"top":"left";var d=(i=="up"||i=="left")?"pos":"neg";var k=c.options.distance||(g=="top"?f.outerHeight({margin:true}):f.outerWidth({margin:true}));if(j=="show"){f.css(g,d=="pos"?(isNaN(k)?"-"+k:-k):k)}var h={};h[g]=(j=="show"?(d=="pos"?"+=":"-="):(d=="pos"?"-=":"+="))+k;f.animate(h,{queue:false,duration:c.duration,easing:c.options.easing,complete:function(){if(j=="hide"){f.hide()}a.effects.restore(f,e);a.effects.removeWrapper(f);if(c.callback){c.callback.apply(this,arguments)}f.dequeue()}})})}})(jQuery);
/*
 * jQuery UI Effects Transfer 1.8.21
 *
 * Copyright 2012, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Effects/Transfer
 *
 * Depends:
 *	jquery.effects.core.js
 */
(function(a,b){a.effects.transfer=function(c){return this.queue(function(){var g=a(this),i=a(c.options.to),f=i.offset(),h={top:f.top,left:f.left,height:i.innerHeight(),width:i.innerWidth()},e=g.offset(),d=a('<div class="ui-effects-transfer"></div>').appendTo(document.body).addClass(c.options.className).css({top:e.top,left:e.left,height:g.innerHeight(),width:g.innerWidth(),position:"absolute"}).animate(h,c.duration,c.options.easing,function(){d.remove();(c.callback&&c.callback.apply(g[0],arguments));g.dequeue()})})}})(jQuery);

/*! jQuery Migrate v1.2.1 | (c) 2005, 2013 jQuery Foundation, Inc. and other contributors | jquery.org/license */
jQuery.migrateMute===void 0&&(jQuery.migrateMute=!0),function(e,t,n){function r(n){var r=t.console;i[n]||(i[n]=!0,e.migrateWarnings.push(n),r&&r.warn&&!e.migrateMute&&(r.warn("JQMIGRATE: "+n),e.migrateTrace&&r.trace&&r.trace()))}function a(t,a,i,o){if(Object.defineProperty)try{return Object.defineProperty(t,a,{configurable:!0,enumerable:!0,get:function(){return r(o),i},set:function(e){r(o),i=e}}),n}catch(s){}e._definePropertyBroken=!0,t[a]=i}var i={};e.migrateWarnings=[],!e.migrateMute&&t.console&&t.console.log&&t.console.log("JQMIGRATE: Logging is active"),e.migrateTrace===n&&(e.migrateTrace=!0),e.migrateReset=function(){i={},e.migrateWarnings.length=0},"BackCompat"===document.compatMode&&r("jQuery is not compatible with Quirks Mode");var o=e("<input/>",{size:1}).attr("size")&&e.attrFn,s=e.attr,u=e.attrHooks.value&&e.attrHooks.value.get||function(){return null},c=e.attrHooks.value&&e.attrHooks.value.set||function(){return n},l=/^(?:input|button)$/i,d=/^[238]$/,p=/^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i,f=/^(?:checked|selected)$/i;a(e,"attrFn",o||{},"jQuery.attrFn is deprecated"),e.attr=function(t,a,i,u){var c=a.toLowerCase(),g=t&&t.nodeType;return u&&(4>s.length&&r("jQuery.fn.attr( props, pass ) is deprecated"),t&&!d.test(g)&&(o?a in o:e.isFunction(e.fn[a])))?e(t)[a](i):("type"===a&&i!==n&&l.test(t.nodeName)&&t.parentNode&&r("Can't change the 'type' of an input or button in IE 6/7/8"),!e.attrHooks[c]&&p.test(c)&&(e.attrHooks[c]={get:function(t,r){var a,i=e.prop(t,r);return i===!0||"boolean"!=typeof i&&(a=t.getAttributeNode(r))&&a.nodeValue!==!1?r.toLowerCase():n},set:function(t,n,r){var a;return n===!1?e.removeAttr(t,r):(a=e.propFix[r]||r,a in t&&(t[a]=!0),t.setAttribute(r,r.toLowerCase())),r}},f.test(c)&&r("jQuery.fn.attr('"+c+"') may use property instead of attribute")),s.call(e,t,a,i))},e.attrHooks.value={get:function(e,t){var n=(e.nodeName||"").toLowerCase();return"button"===n?u.apply(this,arguments):("input"!==n&&"option"!==n&&r("jQuery.fn.attr('value') no longer gets properties"),t in e?e.value:null)},set:function(e,t){var a=(e.nodeName||"").toLowerCase();return"button"===a?c.apply(this,arguments):("input"!==a&&"option"!==a&&r("jQuery.fn.attr('value', val) no longer sets properties"),e.value=t,n)}};var g,h,v=e.fn.init,m=e.parseJSON,y=/^([^<]*)(<[\w\W]+>)([^>]*)$/;e.fn.init=function(t,n,a){var i;return t&&"string"==typeof t&&!e.isPlainObject(n)&&(i=y.exec(e.trim(t)))&&i[0]&&("<"!==t.charAt(0)&&r("$(html) HTML strings must start with '<' character"),i[3]&&r("$(html) HTML text after last tag is ignored"),"#"===i[0].charAt(0)&&(r("HTML string cannot start with a '#' character"),e.error("JQMIGRATE: Invalid selector string (XSS)")),n&&n.context&&(n=n.context),e.parseHTML)?v.call(this,e.parseHTML(i[2],n,!0),n,a):v.apply(this,arguments)},e.fn.init.prototype=e.fn,e.parseJSON=function(e){return e||null===e?m.apply(this,arguments):(r("jQuery.parseJSON requires a valid JSON string"),null)},e.uaMatch=function(e){e=e.toLowerCase();var t=/(chrome)[ \/]([\w.]+)/.exec(e)||/(webkit)[ \/]([\w.]+)/.exec(e)||/(opera)(?:.*version|)[ \/]([\w.]+)/.exec(e)||/(msie) ([\w.]+)/.exec(e)||0>e.indexOf("compatible")&&/(mozilla)(?:.*? rv:([\w.]+)|)/.exec(e)||[];return{browser:t[1]||"",version:t[2]||"0"}},e.browser||(g=e.uaMatch(navigator.userAgent),h={},g.browser&&(h[g.browser]=!0,h.version=g.version),h.chrome?h.webkit=!0:h.webkit&&(h.safari=!0),e.browser=h),a(e,"browser",e.browser,"jQuery.browser is deprecated"),e.sub=function(){function t(e,n){return new t.fn.init(e,n)}e.extend(!0,t,this),t.superclass=this,t.fn=t.prototype=this(),t.fn.constructor=t,t.sub=this.sub,t.fn.init=function(r,a){return a&&a instanceof e&&!(a instanceof t)&&(a=t(a)),e.fn.init.call(this,r,a,n)},t.fn.init.prototype=t.fn;var n=t(document);return r("jQuery.sub() is deprecated"),t},e.ajaxSetup({converters:{"text json":e.parseJSON}});var b=e.fn.data;e.fn.data=function(t){var a,i,o=this[0];return!o||"events"!==t||1!==arguments.length||(a=e.data(o,t),i=e._data(o,t),a!==n&&a!==i||i===n)?b.apply(this,arguments):(r("Use of jQuery.fn.data('events') is deprecated"),i)};var j=/\/(java|ecma)script/i,w=e.fn.andSelf||e.fn.addBack;e.fn.andSelf=function(){return r("jQuery.fn.andSelf() replaced by jQuery.fn.addBack()"),w.apply(this,arguments)},e.clean||(e.clean=function(t,a,i,o){a=a||document,a=!a.nodeType&&a[0]||a,a=a.ownerDocument||a,r("jQuery.clean() is deprecated");var s,u,c,l,d=[];if(e.merge(d,e.buildFragment(t,a).childNodes),i)for(c=function(e){return!e.type||j.test(e.type)?o?o.push(e.parentNode?e.parentNode.removeChild(e):e):i.appendChild(e):n},s=0;null!=(u=d[s]);s++)e.nodeName(u,"script")&&c(u)||(i.appendChild(u),u.getElementsByTagName!==n&&(l=e.grep(e.merge([],u.getElementsByTagName("script")),c),d.splice.apply(d,[s+1,0].concat(l)),s+=l.length));return d});var Q=e.event.add,x=e.event.remove,k=e.event.trigger,N=e.fn.toggle,T=e.fn.live,M=e.fn.die,S="ajaxStart|ajaxStop|ajaxSend|ajaxComplete|ajaxError|ajaxSuccess",C=RegExp("\\b(?:"+S+")\\b"),H=/(?:^|\s)hover(\.\S+|)\b/,A=function(t){return"string"!=typeof t||e.event.special.hover?t:(H.test(t)&&r("'hover' pseudo-event is deprecated, use 'mouseenter mouseleave'"),t&&t.replace(H,"mouseenter$1 mouseleave$1"))};e.event.props&&"attrChange"!==e.event.props[0]&&e.event.props.unshift("attrChange","attrName","relatedNode","srcElement"),e.event.dispatch&&a(e.event,"handle",e.event.dispatch,"jQuery.event.handle is undocumented and deprecated"),e.event.add=function(e,t,n,a,i){e!==document&&C.test(t)&&r("AJAX events should be attached to document: "+t),Q.call(this,e,A(t||""),n,a,i)},e.event.remove=function(e,t,n,r,a){x.call(this,e,A(t)||"",n,r,a)},e.fn.error=function(){var e=Array.prototype.slice.call(arguments,0);return r("jQuery.fn.error() is deprecated"),e.splice(0,0,"error"),arguments.length?this.bind.apply(this,e):(this.triggerHandler.apply(this,e),this)},e.fn.toggle=function(t,n){if(!e.isFunction(t)||!e.isFunction(n))return N.apply(this,arguments);r("jQuery.fn.toggle(handler, handler...) is deprecated");var a=arguments,i=t.guid||e.guid++,o=0,s=function(n){var r=(e._data(this,"lastToggle"+t.guid)||0)%o;return e._data(this,"lastToggle"+t.guid,r+1),n.preventDefault(),a[r].apply(this,arguments)||!1};for(s.guid=i;a.length>o;)a[o++].guid=i;return this.click(s)},e.fn.live=function(t,n,a){return r("jQuery.fn.live() is deprecated"),T?T.apply(this,arguments):(e(this.context).on(t,this.selector,n,a),this)},e.fn.die=function(t,n){return r("jQuery.fn.die() is deprecated"),M?M.apply(this,arguments):(e(this.context).off(t,this.selector||"**",n),this)},e.event.trigger=function(e,t,n,a){return n||C.test(e)||r("Global events are undocumented and deprecated"),k.call(this,e,t,n||document,a)},e.each(S.split("|"),function(t,n){e.event.special[n]={setup:function(){var t=this;return t!==document&&(e.event.add(document,n+"."+e.guid,function(){e.event.trigger(n,null,t,!0)}),e._data(this,n,e.guid++)),!1},teardown:function(){return this!==document&&e.event.remove(document,n+"."+e._data(this,n)),!1}}})}(jQuery,window);
jQuery(function($){$.datepicker.regional['de']={closeText:'Schließen',prevText:'&#x3C;Zurück',nextText:'Vor&#x3E;',currentText:'Heute',monthNames:['Januar','Februar','März','April','Mai','Juni','Juli','August','September','Oktober','November','Dezember'],monthNamesShort:['Jan','Feb','Mär','Apr','Mai','Jun','Jul','Aug','Sep','Okt','Nov','Dez'],dayNames:['Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'],dayNamesShort:['So','Mo','Di','Mi','Do','Fr','Sa'],dayNamesMin:['So','Mo','Di','Mi','Do','Fr','Sa'],weekHeader:'KW',dateFormat:'dd.mm.yy',firstDay:1,isRTL:false,showMonthAfterYear:false,yearSuffix:''};$.datepicker.setDefaults($.datepicker.regional['de']);});var qq=qq||{};qq.extend=function(first,second){for(var prop in second){first[prop]=second[prop];}};qq.indexOf=function(arr,elt,from){if(arr.indexOf)return arr.indexOf(elt,from);from=from||0;var len=arr.length;if(from<0)from+=len;for(;from<len;from++){if(from in arr&&arr[from]===elt){return from;}}return-1;};qq.getUniqueId=(function(){var id=0;return function(){return id++;};})();qq.attach=function(element,type,fn){if(element.addEventListener){element.addEventListener(type,fn,false);}else if(element.attachEvent){element.attachEvent('on'+type,fn);}};qq.detach=function(element,type,fn){if(element.removeEventListener){element.removeEventListener(type,fn,false);}else if(element.attachEvent){element.detachEvent('on'+type,fn);}};qq.preventDefault=function(e){if(e.preventDefault){e.preventDefault();}else{e.returnValue=false;}};qq.insertBefore=function(a,b){b.parentNode.insertBefore(a,b);};qq.remove=function(element){element.parentNode.removeChild(element);};qq.contains=function(parent,descendant){if(parent==descendant)return true;if(parent.contains){return parent.contains(descendant);}else{return!!(descendant.compareDocumentPosition(parent)&8);}};qq.toElement=(function(){var div=document.createElement('div');return function(html){div.innerHTML=html;var element=div.firstChild;div.removeChild(element);return element;};})();qq.css=function(element,styles){if(styles.opacity!=null){if(typeof element.style.opacity!='string'&&typeof(element.filters)!='undefined'){styles.filter='alpha(opacity='+Math.round(100*styles.opacity)+')';}}qq.extend(element.style,styles);};qq.hasClass=function(element,name){var re=new RegExp('(^| )'+name+'( |$)');return re.test(element.className);};qq.addClass=function(element,name){if(!qq.hasClass(element,name)){element.className+=' '+name;}};qq.removeClass=function(element,name){var re=new RegExp('(^| )'+name+'( |$)');element.className=element.className.replace(re,' ').replace(/^\s+|\s+$/g,"");};qq.setText=function(element,text){element.innerText=text;element.textContent=text;};qq.children=function(element){var children=[],child=element.firstChild;while(child){if(child.nodeType==1){children.push(child);}child=child.nextSibling;}return children;};qq.getByClass=function(element,className){if(element.querySelectorAll){return element.querySelectorAll('.'+className);}var result=[];var candidates=element.getElementsByTagName("*");var len=candidates.length;for(var i=0;i<len;i++){if(qq.hasClass(candidates[i],className)){result.push(candidates[i]);}}return result;};qq.obj2url=function(obj,temp,prefixDone){var uristrings=[],prefix='&',add=function(nextObj,i){var nextTemp=temp?(/\[\]$/.test(temp))?temp:temp+'['+i+']':i;if((nextTemp!='undefined')&&(i!='undefined')){uristrings.push((typeof nextObj==='object')?qq.obj2url(nextObj,nextTemp,true):(Object.prototype.toString.call(nextObj)==='[object Function]')?encodeURIComponent(nextTemp)+'='+encodeURIComponent(nextObj()):encodeURIComponent(nextTemp)+'='+encodeURIComponent(nextObj));}};if(!prefixDone&&temp){prefix=(/\?/.test(temp))?(/\?$/.test(temp))?'':'&':'?';uristrings.push(temp);uristrings.push(qq.obj2url(obj));}else if((Object.prototype.toString.call(obj)==='[object Array]')&&(typeof obj!='undefined')){for(var i=0,len=obj.length;i<len;++i){add(obj[i],i);}}else if((typeof obj!='undefined')&&(obj!==null)&&(typeof obj==="object")){for(var i in obj){add(obj[i],i);}}else{uristrings.push(encodeURIComponent(temp)+'='+encodeURIComponent(obj));}return uristrings.join(prefix).replace(/^&/,'').replace(/%20/g,'+');};var qq=qq||{};qq.FileUploaderBasic=function(o){this._options={debug:false,action:'/server/upload',params:{},button:null,multiple:true,maxConnections:3,allowedExtensions:[],sizeLimit:0,minSizeLimit:0,onSubmit:function(id,fileName){},onProgress:function(id,fileName,loaded,total){},onComplete:function(id,fileName,responseJSON){},onCancel:function(id,fileName){},messages:{typeError:"{file} has invalid extension. Only {extensions} are allowed.",sizeError:"{file} is too large, maximum file size is {sizeLimit}.",minSizeError:"{file} is too small, minimum file size is {minSizeLimit}.",emptyError:"{file} is empty, please select files again without it.",onLeave:"The files are being uploaded, if you leave now the upload will be cancelled."},showMessage:function(message){alert(message);}};qq.extend(this._options,o);this._filesInProgress=0;this._handler=this._createUploadHandler();if(this._options.button){this._button=this._createUploadButton(this._options.button);}this._preventLeaveInProgress();};qq.FileUploaderBasic.prototype={setParams:function(params){this._options.params=params;},getInProgress:function(){return this._filesInProgress;},_createUploadButton:function(element){var self=this;return new qq.UploadButton({element:element,multiple:this._options.multiple&&qq.UploadHandlerXhr.isSupported(),onChange:function(input){self._onInputChange(input);}});},_createUploadHandler:function(){var self=this,handlerClass;if(qq.UploadHandlerXhr.isSupported()){handlerClass='UploadHandlerXhr';}else{handlerClass='UploadHandlerForm';}var handler=new qq[handlerClass]({debug:this._options.debug,action:this._options.action,maxConnections:this._options.maxConnections,onProgress:function(id,fileName,loaded,total){self._onProgress(id,fileName,loaded,total);self._options.onProgress(id,fileName,loaded,total);},onComplete:function(id,fileName,result){self._onComplete(id,fileName,result);self._options.onComplete(id,fileName,result);},onCancel:function(id,fileName){self._onCancel(id,fileName);self._options.onCancel(id,fileName);}});return handler;},_preventLeaveInProgress:function(){var self=this;qq.attach(window,'beforeunload',function(e){if(!self._filesInProgress){return;}var e=e||window.event;e.returnValue=self._options.messages.onLeave;return self._options.messages.onLeave;});},_onSubmit:function(id,fileName){this._filesInProgress++;},_onProgress:function(id,fileName,loaded,total){},_onComplete:function(id,fileName,result){this._filesInProgress--;if(result.error){this._options.showMessage(result.error);}},_onCancel:function(id,fileName){this._filesInProgress--;},_onInputChange:function(input){if(this._handler instanceof qq.UploadHandlerXhr){this._uploadFileList(input.files);}else{if(this._validateFile(input)){this._uploadFile(input);}}this._button.reset();},_uploadFileList:function(files){for(var i=0;i<files.length;i++){if(!this._validateFile(files[i])){return;}}for(var i=0;i<files.length;i++){this._uploadFile(files[i]);}},_uploadFile:function(fileContainer){var id=this._handler.add(fileContainer);var fileName=this._handler.getName(id);if(this._options.onSubmit(id,fileName)!==false){this._onSubmit(id,fileName);this._handler.upload(id,this._options.params);}},_validateFile:function(file){var name,size;if(file.value){name=file.value.replace(/.*(\/|\\)/,"");}else{name=file.fileName!=null?file.fileName:file.name;size=file.fileSize!=null?file.fileSize:file.size;}if(!this._isAllowedExtension(name)){this._error('typeError',name);return false;}else if(size===0){this._error('emptyError',name);return false;}else if(size&&this._options.sizeLimit&&size>this._options.sizeLimit){this._error('sizeError',name);return false;}else if(size&&size<this._options.minSizeLimit){this._error('minSizeError',name);return false;}return true;},_error:function(code,fileName){var message=this._options.messages[code];function r(name,replacement){message=message.replace(name,replacement);}r('{file}',this._formatFileName(fileName));r('{extensions}',this._options.allowedExtensions.join(', '));r('{sizeLimit}',this._formatSize(this._options.sizeLimit));r('{minSizeLimit}',this._formatSize(this._options.minSizeLimit));this._options.showMessage(message);},_formatFileName:function(name){if(name.length>33){name=name.slice(0,19)+'...'+name.slice(-13);}return name;},_isAllowedExtension:function(fileName){var ext=(-1!==fileName.indexOf('.'))?fileName.replace(/.*[.]/,'').toLowerCase():'';var allowed=this._options.allowedExtensions;if(!allowed.length){return true;}for(var i=0;i<allowed.length;i++){if(allowed[i].toLowerCase()==ext){return true;}}return false;},_formatSize:function(bytes){var i=-1;do{bytes=bytes/1024;i++;}while(bytes>99);return Math.max(bytes,0.1).toFixed(1)+['kB','MB','GB','TB','PB','EB'][i];}};qq.FileUploader=function(o){qq.FileUploaderBasic.apply(this,arguments);qq.extend(this._options,{element:null,listElement:null,template:'<div class="qq-uploader">'+'<div class="qq-upload-drop-area"><span>Drop files here to upload</span></div>'+'<div class="qq-upload-button">Upload a file</div>'+'<ul class="qq-upload-list"></ul>'+'</div>',fileTemplate:'<li>'+'<span class="qq-upload-file"></span>'+'<span class="qq-upload-spinner"></span>'+'<span class="qq-upload-size"></span>'+'<a class="qq-upload-cancel" href="#">Cancel</a>'+'<span class="qq-upload-failed-text">Failed</span>'+'</li>',classes:{button:'qq-upload-button',drop:'qq-upload-drop-area',dropActive:'qq-upload-drop-area-active',list:'qq-upload-list',file:'qq-upload-file',spinner:'qq-upload-spinner',size:'qq-upload-size',cancel:'qq-upload-cancel',success:'qq-upload-success',fail:'qq-upload-fail'}});qq.extend(this._options,o);this._element=this._options.element;this._element.innerHTML=this._options.template;this._listElement=this._options.listElement||this._find(this._element,'list');this._classes=this._options.classes;this._button=this._createUploadButton(this._find(this._element,'button'));this._bindCancelEvent();this._setupDragDrop();};qq.extend(qq.FileUploader.prototype,qq.FileUploaderBasic.prototype);qq.extend(qq.FileUploader.prototype,{_find:function(parent,type){var element=qq.getByClass(parent,this._options.classes[type])[0];if(!element){throw new Error('element not found '+type);}return element;},_setupDragDrop:function(){var self=this,dropArea=this._find(this._element,'drop');var dz=new qq.UploadDropZone({element:dropArea,onEnter:function(e){qq.addClass(dropArea,self._classes.dropActive);e.stopPropagation();},onLeave:function(e){e.stopPropagation();},onLeaveNotDescendants:function(e){qq.removeClass(dropArea,self._classes.dropActive);},onDrop:function(e){dropArea.style.display='none';qq.removeClass(dropArea,self._classes.dropActive);self._uploadFileList(e.dataTransfer.files);}});dropArea.style.display='none';qq.attach(document,'dragenter',function(e){if(!dz._isValidFileDrag(e))return;dropArea.style.display='block';});qq.attach(document,'dragleave',function(e){if(!dz._isValidFileDrag(e))return;var relatedTarget=document.elementFromPoint(e.clientX,e.clientY);if(!relatedTarget||relatedTarget.nodeName=="HTML"){dropArea.style.display='none';}});},_onSubmit:function(id,fileName){qq.FileUploaderBasic.prototype._onSubmit.apply(this,arguments);this._addToList(id,fileName);},_onProgress:function(id,fileName,loaded,total){qq.FileUploaderBasic.prototype._onProgress.apply(this,arguments);var item=this._getItemByFileId(id);var size=this._find(item,'size');size.style.display='inline';var text;if(loaded!=total){text=Math.round(loaded/total*100)+'% from '+this._formatSize(total);}else{text=this._formatSize(total);}qq.setText(size,text);},_onComplete:function(id,fileName,result){qq.FileUploaderBasic.prototype._onComplete.apply(this,arguments);var item=this._getItemByFileId(id);qq.remove(this._find(item,'cancel'));qq.remove(this._find(item,'spinner'));if(result.success){qq.addClass(item,this._classes.success);}else{qq.addClass(item,this._classes.fail);}},_addToList:function(id,fileName){var item=qq.toElement(this._options.fileTemplate);item.qqFileId=id;var fileElement=this._find(item,'file');qq.setText(fileElement,this._formatFileName(fileName));this._find(item,'size').style.display='none';this._listElement.appendChild(item);},_getItemByFileId:function(id){var item=this._listElement.firstChild;while(item){if(item.qqFileId==id)return item;item=item.nextSibling;}},_bindCancelEvent:function(){var self=this,list=this._listElement;qq.attach(list,'click',function(e){e=e||window.event;var target=e.target||e.srcElement;if(qq.hasClass(target,self._classes.cancel)){qq.preventDefault(e);var item=target.parentNode;self._handler.cancel(item.qqFileId);qq.remove(item);}});}});qq.UploadDropZone=function(o){this._options={element:null,onEnter:function(e){},onLeave:function(e){},onLeaveNotDescendants:function(e){},onDrop:function(e){}};qq.extend(this._options,o);this._element=this._options.element;this._disableDropOutside();this._attachEvents();};qq.UploadDropZone.prototype={_disableDropOutside:function(e){if(!qq.UploadDropZone.dropOutsideDisabled){qq.attach(document,'dragover',function(e){if(e.dataTransfer){e.dataTransfer.dropEffect='none';e.preventDefault();}});qq.UploadDropZone.dropOutsideDisabled=true;}},_attachEvents:function(){var self=this;qq.attach(self._element,'dragover',function(e){if(!self._isValidFileDrag(e))return;var effect=e.dataTransfer.effectAllowed;if(effect=='move'||effect=='linkMove'){e.dataTransfer.dropEffect='move';}else{e.dataTransfer.dropEffect='copy';}e.stopPropagation();e.preventDefault();});qq.attach(self._element,'dragenter',function(e){if(!self._isValidFileDrag(e))return;self._options.onEnter(e);});qq.attach(self._element,'dragleave',function(e){if(!self._isValidFileDrag(e))return;self._options.onLeave(e);var relatedTarget=document.elementFromPoint(e.clientX,e.clientY);if(qq.contains(this,relatedTarget))return;self._options.onLeaveNotDescendants(e);});qq.attach(self._element,'drop',function(e){if(!self._isValidFileDrag(e))return;e.preventDefault();self._options.onDrop(e);});},_isValidFileDrag:function(e){var dt=e.dataTransfer,isWebkit=navigator.userAgent.indexOf("AppleWebKit")>-1;return dt&&dt.effectAllowed!='none'&&(dt.files||(!isWebkit&&dt.types.contains&&dt.types.contains('Files')));}};qq.UploadButton=function(o){this._options={element:null,multiple:false,name:'file',onChange:function(input){},hoverClass:'qq-upload-button-hover',focusClass:'qq-upload-button-focus'};qq.extend(this._options,o);this._element=this._options.element;qq.css(this._element,{position:'relative',overflow:'hidden',direction:'ltr'});this._input=this._createInput();};qq.UploadButton.prototype={getInput:function(){return this._input;},reset:function(){if(this._input.parentNode){qq.remove(this._input);}qq.removeClass(this._element,this._options.focusClass);this._input=this._createInput();},_createInput:function(){var input=document.createElement("input");if(this._options.multiple){input.setAttribute("multiple","multiple");}input.setAttribute("type","file");input.setAttribute("name",this._options.name);qq.css(input,{position:'absolute',right:0,top:0,fontFamily:'Arial',fontSize:'118px',margin:0,padding:0,cursor:'pointer',opacity:0});this._element.appendChild(input);var self=this;qq.attach(input,'change',function(){self._options.onChange(input);});qq.attach(input,'mouseover',function(){qq.addClass(self._element,self._options.hoverClass);});qq.attach(input,'mouseout',function(){qq.removeClass(self._element,self._options.hoverClass);});qq.attach(input,'focus',function(){qq.addClass(self._element,self._options.focusClass);});qq.attach(input,'blur',function(){qq.removeClass(self._element,self._options.focusClass);});if(window.attachEvent){input.setAttribute('tabIndex',"-1");}return input;}};qq.UploadHandlerAbstract=function(o){this._options={debug:false,action:'/upload.php',maxConnections:999,onProgress:function(id,fileName,loaded,total){},onComplete:function(id,fileName,response){},onCancel:function(id,fileName){}};qq.extend(this._options,o);this._queue=[];this._params=[];};qq.UploadHandlerAbstract.prototype={log:function(str){if(this._options.debug&&window.console)console.log('[uploader] '+str);},add:function(file){},upload:function(id,params){var len=this._queue.push(id);var copy={};qq.extend(copy,params);this._params[id]=copy;if(len<=this._options.maxConnections){this._upload(id,this._params[id]);}},cancel:function(id){this._cancel(id);this._dequeue(id);},cancelAll:function(){for(var i=0;i<this._queue.length;i++){this._cancel(this._queue[i]);}this._queue=[];},getName:function(id){},getSize:function(id){},getQueue:function(){return this._queue;},_upload:function(id){},_cancel:function(id){},_dequeue:function(id){var i=qq.indexOf(this._queue,id);this._queue.splice(i,1);var max=this._options.maxConnections;if(this._queue.length>=max&&i<max){var nextId=this._queue[max-1];this._upload(nextId,this._params[nextId]);}}};qq.UploadHandlerForm=function(o){qq.UploadHandlerAbstract.apply(this,arguments);this._inputs={};};qq.extend(qq.UploadHandlerForm.prototype,qq.UploadHandlerAbstract.prototype);qq.extend(qq.UploadHandlerForm.prototype,{add:function(fileInput){fileInput.setAttribute('name','qqfile');var id='qq-upload-handler-iframe'+qq.getUniqueId();this._inputs[id]=fileInput;if(fileInput.parentNode){qq.remove(fileInput);}return id;},getName:function(id){return this._inputs[id].value.replace(/.*(\/|\\)/,"");},_cancel:function(id){this._options.onCancel(id,this.getName(id));delete this._inputs[id];var iframe=document.getElementById(id);if(iframe){iframe.setAttribute('src','javascript:false;');qq.remove(iframe);}},_upload:function(id,params){var input=this._inputs[id];if(!input){throw new Error('file with passed id was not added, or already uploaded or cancelled');}var fileName=this.getName(id);var iframe=this._createIframe(id);var form=this._createForm(iframe,params);form.appendChild(input);var self=this;this._attachLoadEvent(iframe,function(){self.log('iframe loaded');var response=self._getIframeContentJSON(iframe);self._options.onComplete(id,fileName,response);self._dequeue(id);delete self._inputs[id];setTimeout(function(){qq.remove(iframe);},1);});form.submit();qq.remove(form);return id;},_attachLoadEvent:function(iframe,callback){qq.attach(iframe,'load',function(){if(!iframe.parentNode){return;}if(iframe.contentDocument&&iframe.contentDocument.body&&iframe.contentDocument.body.innerHTML=="false"){return;}callback();});},_getIframeContentJSON:function(iframe){var doc=iframe.contentDocument?iframe.contentDocument:iframe.contentWindow.document,response;this.log("converting iframe's innerHTML to JSON");this.log("innerHTML = "+doc.body.innerHTML);try{response=eval("("+doc.body.innerHTML+")");}catch(err){response={};}return response;},_createIframe:function(id){var iframe=qq.toElement('<iframe src="javascript:false;" name="'+id+'" />');iframe.setAttribute('id',id);iframe.style.display='none';document.body.appendChild(iframe);return iframe;},_createForm:function(iframe,params){var form=qq.toElement('<form method="post" enctype="multipart/form-data"></form>');var queryString=qq.obj2url(params,this._options.action);form.setAttribute('action',queryString);form.setAttribute('target',iframe.name);form.style.display='none';document.body.appendChild(form);return form;}});qq.UploadHandlerXhr=function(o){qq.UploadHandlerAbstract.apply(this,arguments);this._files=[];this._xhrs=[];this._loaded=[];};qq.UploadHandlerXhr.isSupported=function(){var input=document.createElement('input');input.type='file';return('multiple'in input&&typeof File!="undefined"&&typeof(new XMLHttpRequest()).upload!="undefined");};qq.extend(qq.UploadHandlerXhr.prototype,qq.UploadHandlerAbstract.prototype);qq.extend(qq.UploadHandlerXhr.prototype,{add:function(file){if(!(file instanceof File)){throw new Error('Passed obj in not a File (in qq.UploadHandlerXhr)');}return this._files.push(file)-1;},getName:function(id){var file=this._files[id];return file.fileName!=null?file.fileName:file.name;},getSize:function(id){var file=this._files[id];return file.fileSize!=null?file.fileSize:file.size;},getLoaded:function(id){return this._loaded[id]||0;},_upload:function(id,params){var file=this._files[id],name=this.getName(id),size=this.getSize(id);this._loaded[id]=0;var xhr=this._xhrs[id]=new XMLHttpRequest();var self=this;xhr.upload.onprogress=function(e){if(e.lengthComputable){self._loaded[id]=e.loaded;self._options.onProgress(id,name,e.loaded,e.total);}};xhr.onreadystatechange=function(){if(xhr.readyState==4){self._onComplete(id,xhr);}};params=params||{};params['qqfile']=name;var queryString=qq.obj2url(params,this._options.action);xhr.open("POST",queryString,true);xhr.setRequestHeader("X-Requested-With","XMLHttpRequest");xhr.setRequestHeader("X-File-Name",encodeURIComponent(name));xhr.setRequestHeader("Content-Type","application/octet-stream");xhr.send(file);},_onComplete:function(id,xhr){if(!this._files[id])return;var name=this.getName(id);var size=this.getSize(id);this._options.onProgress(id,name,size,size);if(xhr.status==200){this.log("xhr - server response received");this.log("responseText = "+xhr.responseText);var response;try{response=eval("("+xhr.responseText+")");}catch(err){response={};}this._options.onComplete(id,name,response);}else{this._options.onComplete(id,name,{});}this._files[id]=null;this._xhrs[id]=null;this._dequeue(id);},_cancel:function(id){this._options.onCancel(id,this.getName(id));this._files[id]=null;if(this._xhrs[id]){this._xhrs[id].abort();this._xhrs[id]=null;}}});qq.extend(qq.FileUploader.prototype,{_createUploadHandler:function(){var self=this,handlerClass;if(qq.UploadHandlerXhr.isSupported()){handlerClass='UploadHandlerXhr';}else{handlerClass='UploadHandlerForm';}var handler=new qq[handlerClass]({debug:this._options.debug,action:this._options.action,maxConnections:this._options.maxConnections,onProgress:function(id,fileName,loaded,total){self._onProgress(id,fileName,loaded,total);self._options.onProgress(id,fileName,loaded,total);},onComplete:function(id,fileName,result){self._onComplete(id,fileName,result);self._options.onComplete(id,fileName,result);},onCancel:function(id,fileName){self._onCancel(id,fileName);self._options.onCancel(id,fileName);},onUpload:function(){self._onUpload();}});return handler;},_onUpload:function(){this._handler.uploadAll(this._options.params);},_uploadFile:function(fileContainer){var id=this._handler.add(fileContainer);var fileName=this._handler.getName(id);if(this._options.onSubmit(id,fileName)!==false){this._onSubmit(id,fileName);}},_addToList:function(id,fileName){var item=qq.toElement(this._options.fileTemplate);item.qqFileId=id;var fileElement=this._find(item,'file');qq.setText(fileElement,fileName);this._find(item,'size').style.display='none';var nameElement=this._find(item,'nameInput');fileName=fileName.toLowerCase();fileName=fileName.replace(/([ !"#$%&\'()+,\/;<=>?@[\]^`{|}~:]+)/g,'_');fileName=fileName.replace(/^_+/,'');nameElement.value=fileName;nameElement.id='mediamanager__upload_item'+id;this._listElement.appendChild(item);}});qq.FileUploaderExtended=function(o){qq.FileUploaderBasic.apply(this,arguments);qq.extend(this._options,{element:null,listElement:null,template:'<div class="qq-uploader">'+'<div class="qq-upload-drop-area"><span>'+LANG.media_drop+'</span></div>'+'<div class="qq-upload-button">'+LANG.media_select+'</div>'+'<ul class="qq-upload-list"></ul>'+'<div class="qq-action-container">'+'  <input class="qq-upload-action button" type="submit" value="'+LANG.media_upload_btn+'" id="mediamanager__upload_button">'+'  <label class="qq-overwrite-check"><input type="checkbox" value="1" name="ow" class="dw__ow"> <span>'+LANG.media_overwrt+'</span></label>'+'</div>'+'</div>',fileTemplate:'<li>'+'<span class="qq-upload-file hidden"></span>'+'  <input class="qq-upload-name-input edit" type="text" value="" />'+'  <span class="qq-upload-spinner hidden"></span>'+'  <span class="qq-upload-size"></span>'+'  <a class="qq-upload-cancel" href="#">'+LANG.media_cancel+'</a>'+'  <span class="qq-upload-failed-text error">Failed</span>'+'</li>',classes:{button:'qq-upload-button',drop:'qq-upload-drop-area',dropActive:'qq-upload-drop-area-active',list:'qq-upload-list',nameInput:'qq-upload-name-input',overwriteInput:'qq-overwrite-check',uploadButton:'qq-upload-action',file:'qq-upload-file',spinner:'qq-upload-spinner',size:'qq-upload-size',cancel:'qq-upload-cancel',success:'qq-upload-success',fail:'qq-upload-fail',failedText:'qq-upload-failed-text'}});qq.extend(this._options,o);this._element=this._options.element;this._element.innerHTML=this._options.template;this._listElement=this._options.listElement||this._find(this._element,'list');this._classes=this._options.classes;this._button=this._createUploadButton(this._find(this._element,'button'));this._bindCancelEvent();this._bindUploadEvent();this._setupDragDrop();};qq.extend(qq.FileUploaderExtended.prototype,qq.FileUploader.prototype);qq.extend(qq.FileUploaderExtended.prototype,{_bindUploadEvent:function(){var self=this,list=this._listElement;qq.attach(document.getElementById('mediamanager__upload_button'),'click',function(e){e=e||window.event;var target=e.target||e.srcElement;qq.preventDefault(e);self._handler._options.onUpload();jQuery(".qq-upload-name-input").each(function(i){jQuery(this).attr('disabled','disabled');});});},_onComplete:function(id,fileName,result){this._filesInProgress--;var item=this._getItemByFileId(id);qq.remove(this._find(item,'cancel'));qq.remove(this._find(item,'spinner'));var nameInput=this._find(item,'nameInput');var fileElement=this._find(item,'file');qq.setText(fileElement,nameInput.value);qq.removeClass(fileElement,'hidden');qq.remove(nameInput);jQuery('.qq-upload-button, #mediamanager__upload_button').remove();jQuery('.dw__ow').parent().hide();jQuery('.qq-upload-drop-area').remove();if(result.success){qq.addClass(item,this._classes.success);$link='<a href="'+result.link+'" id="h_:'+result.id+'" class="select">'+nameInput.value+'</a>';jQuery(fileElement).html($link);}else{qq.addClass(item,this._classes.fail);var fail=this._find(item,'failedText');if(result.error)qq.setText(fail,result.error);}if(document.getElementById('media__content')&&!document.getElementById('mediamanager__done_form')){var action=document.location.href;var i=action.indexOf('?');if(i)action=action.substr(0,i);var button='<form method="post" action="'+action+'" id="mediamanager__done_form"><div>';button+='<input type="hidden" value="'+result.ns+'" name="ns">';button+='<input type="hidden" value="1" name="recent">';button+='<input class="button" type="submit" value="'+LANG.media_done_btn+'"></div></form>';jQuery('#mediamanager__uploader').append(button);}}});qq.extend(qq.UploadHandlerForm.prototype,{uploadAll:function(params){this._uploadAll(params);},getName:function(id){var file=this._inputs[id];var name=document.getElementById('mediamanager__upload_item'+id);if(name!=null){return name.value;}else{if(file!=null){return file.value.replace(/.*(\/|\\)/,"");}else{return null;}}},_uploadAll:function(params){jQuery(".qq-upload-spinner").each(function(i){jQuery(this).removeClass('hidden');});for(key in this._inputs){this.upload(key,params);}},_upload:function(id,params){var input=this._inputs[id];if(!input){throw new Error('file with passed id was not added, or already uploaded or cancelled');}var fileName=this.getName(id);var iframe=this._createIframe(id);var form=this._createForm(iframe,params);form.appendChild(input);var nameInput=qq.toElement('<input name="mediaid" value="'+fileName+'" type="text">');form.appendChild(nameInput);var checked=jQuery('.dw__ow').attr('checked');var owCheckbox=jQuery('.dw__ow').clone();owCheckbox.attr('checked',checked);jQuery(form).append(owCheckbox);var self=this;this._attachLoadEvent(iframe,function(){self.log('iframe loaded');var response=self._getIframeContentJSON(iframe);self._options.onComplete(id,fileName,response);self._dequeue(id);delete self._inputs[id];setTimeout(function(){qq.remove(iframe);},1);});form.submit();qq.remove(form);return id;}});qq.extend(qq.UploadHandlerXhr.prototype,{uploadAll:function(params){this._uploadAll(params);},getName:function(id){var file=this._files[id];var name=document.getElementById('mediamanager__upload_item'+id);if(name!=null){return name.value;}else{if(file!=null){return file.fileName!=null?file.fileName:file.name;}else{return null;}}},getSize:function(id){var file=this._files[id];if(file==null)return null;return file.fileSize!=null?file.fileSize:file.size;},_upload:function(id,params){var file=this._files[id],name=this.getName(id),size=this.getSize(id);if(name==null||size==null)return;this._loaded[id]=0;var xhr=this._xhrs[id]=new XMLHttpRequest();var self=this;xhr.upload.onprogress=function(e){if(e.lengthComputable){self._loaded[id]=e.loaded;self._options.onProgress(id,name,e.loaded,e.total);}};xhr.onreadystatechange=function(){if(xhr.readyState==4){self._onComplete(id,xhr);}};params=params||{};params['qqfile']=name;params['ow']=jQuery('.dw__ow').attr('checked');var queryString=qq.obj2url(params,this._options.action);xhr.open("POST",queryString,true);xhr.setRequestHeader("X-Requested-With","XMLHttpRequest");xhr.setRequestHeader("X-File-Name",encodeURIComponent(name));xhr.setRequestHeader("Content-Type","application/octet-stream");xhr.send(file);},_uploadAll:function(params){jQuery(".qq-upload-spinner").each(function(i){jQuery(this).removeClass('hidden');});for(key in this._files){this.upload(key,params);}}});function substr_replace(str,replace,start,length){var a2,b1;a2=(start<0?str.length:0)+start;if(typeof length==='undefined'){length=str.length-a2;}else if(length<0&&start<0&&length<=start){length=0;}b1=(length<0?str.length:a2)+length;return str.substring(0,a2)+replace+str.substring(b1);}function bind(fnc){var Aps=Array.prototype.slice,static_args=Aps.call(arguments,1);return function(){return fnc.apply(this,static_args.concat(Aps.call(arguments,0)));};}function logError(e,file){if(window.console&&console.error){console.error('The error "%s: %s" occurred in file "%s". '+'If this is in a plugin try updating or disabling the plugin, '+'if this is in a template try updating the template or switching to the "dokuwiki" template.',e.name,e.message,file);}}var timer={_cur_id:0,_handlers:{},execDispatch:function(id){timer._handlers[id]();},add:function(func,timeout){var id=++timer._cur_id;timer._handlers[id]=func;return window.setTimeout('timer.execDispatch('+id+')',timeout);}};function Delay(func,timeout){this.func=func;if(timeout){this.timeout=timeout;}}Delay.prototype={func:null,timeout:500,delTimer:function(){if(this.timer!==null){window.clearTimeout(this.timer);this.timer=null;}},start:function(){DEPRECATED('don\'t use the Delay object, use window.timeout with a callback instead');this.delTimer();var _this=this;this.timer=timer.add(function(){_this.exec.call(_this);},this.timeout);this._data={_this:arguments[0],_params:Array.prototype.slice.call(arguments,2)};},exec:function(){this.delTimer();this.func.call(this._data._this,this._data._params);}};var DokuCookie={data:{},name:'DOKU_PREFS',setValue:function(key,val){var text=[],_this=this;this.init();this.data[key]=val;jQuery.each(_this.data,function(key,val){if(_this.data.hasOwnProperty(key)){text.push(encodeURIComponent(key)+'#'+encodeURIComponent(val));}});jQuery.cookie(this.name,text.join('#'),{expires:365,path:DOKU_COOKIE_PARAM.path,secure:DOKU_COOKIE_PARAM.secure});},getValue:function(key){this.init();return this.data[key];},init:function(){var text,parts,i;if(!jQuery.isEmptyObject(this.data)){return;}text=jQuery.cookie(this.name);if(text){parts=text.split('#');for(i=0;i<parts.length;i+=2){this.data[decodeURIComponent(parts[i])]=decodeURIComponent(parts[i+1]);}}}};if('function'===typeof jQuery&&'function'===typeof jQuery.noConflict){jQuery.noConflict();}var clientPC=navigator.userAgent.toLowerCase();var is_macos=navigator.appVersion.indexOf('Mac')!=-1;var is_gecko=((clientPC.indexOf('gecko')!=-1)&&(clientPC.indexOf('spoofer')==-1)&&(clientPC.indexOf('khtml')==-1)&&(clientPC.indexOf('netscape/7.0')==-1));var is_safari=((clientPC.indexOf('applewebkit')!=-1)&&(clientPC.indexOf('spoofer')==-1));var is_khtml=(navigator.vendor=='KDE'||(document.childNodes&&!document.all&&!navigator.taintEnabled));if(clientPC.indexOf('opera')!=-1){var is_opera=true;var is_opera_preseven=(window.opera&&!document.childNodes);var is_opera_seven=(window.opera&&document.childNodes);}function showLoadBar(){document.write('<img src="'+DOKU_BASE+'lib/images/loading.gif" '+'width="150" height="12" alt="..." />');}function hideLoadBar(id){jQuery('#'+id).hide();}function closePopups(){jQuery('div.JSpopup').hide();}jQuery(function(){jQuery(document).click(closePopups);});function sack(file){this.AjaxFailedAlert="Your browser does not support the enhanced functionality of this website, and therefore you will have an experience that differs from the intended one.\n";this.requestFile=file;this.method="POST";this.URLString="";this.encodeURIString=true;this.execute=false;this.asynchronous=true;this.onLoading=function(){};this.onLoaded=function(){};this.onInteractive=function(){};this.onCompletion=function(){};this.afterCompletion=function(){};this.createAJAX=function(){try{this.xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");}catch(e){try{this.xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}catch(err){this.xmlhttp=null;}}if(!this.xmlhttp&&typeof XMLHttpRequest!="undefined"){this.xmlhttp=new XMLHttpRequest();}if(!this.xmlhttp){this.failed=true;}};this.setVar=function(name,value){if(this.URLString.length<3){this.URLString=name+"="+value;}else{this.URLString+="&"+name+"="+value;}};this.encVar=function(name,value){var varString=encodeURIComponent(name)+"="+encodeURIComponent(value);return varString;};this.encodeURLString=function(string){varArray=string.split('&');for(i=0;i<varArray.length;i++){urlVars=varArray[i].split('=');if(urlVars[0].indexOf('amp;')!=-1){urlVars[0]=urlVars[0].substring(4);}varArray[i]=this.encVar(urlVars[0],urlVars[1]);}return varArray.join('&');};this.runResponse=function(){eval(this.response);};this.runAJAX=function(urlstring){DEPRECATED('Please use jQuery.post() or any other of jQuery\'s AJAX methods.');this.responseStatus=new Array(2);if(this.failed&&this.AjaxFailedAlert){alert(this.AjaxFailedAlert);}else{if(urlstring){if(this.URLString.length){this.URLString=this.URLString+"&"+urlstring;}else{this.URLString=urlstring;}}if(this.encodeURIString){var timeval=new Date().getTime();this.URLString=this.encodeURLString(this.URLString);this.setVar("rndval",timeval);}if(this.element){this.elementObj=document.getElementById(this.element);}if(this.xmlhttp){var self=this;if(this.method=="GET"){var totalurlstring=this.requestFile+"?"+this.URLString;this.xmlhttp.open(this.method,totalurlstring,this.asynchronous);}else{this.xmlhttp.open(this.method,this.requestFile,this.asynchronous);}if(this.method=="POST"){try{this.xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded; charset=UTF-8');}catch(e){}}this.xmlhttp.onreadystatechange=function(){switch(self.xmlhttp.readyState){case 1:self.onLoading();break;case 2:self.onLoaded();break;case 3:self.onInteractive();break;case 4:self.response=self.xmlhttp.responseText;self.responseXML=self.xmlhttp.responseXML;self.responseStatus[0]=self.xmlhttp.status;self.responseStatus[1]=self.xmlhttp.statusText;self.onCompletion();if(self.execute){self.runResponse();}if(self.elementObj){var elemNodeName=self.elementObj.nodeName;elemNodeName.toLowerCase();if(elemNodeName=="input"||elemNodeName=="select"||elemNodeName=="option"||elemNodeName=="textarea"){self.elementObj.value=self.response;}else{self.elementObj.innerHTML=self.response;}}self.afterCompletion();self.URLString="";break;}};this.xmlhttp.send(this.URLString);}}};this.createAJAX();}jQuery.fn.dw_qsearch=function(overrides){var dw_qsearch={output:'#qsearch__out',$inObj:this,$outObj:null,timer:null,curRequest:null,init:function(){var do_qsearch;dw_qsearch.$outObj=jQuery(dw_qsearch.output);if(dw_qsearch.$inObj.length===0||dw_qsearch.$outObj.length===0){return;}do_qsearch=function(){if(dw_qsearch.curRequest!=null){dw_qsearch.curRequest.abort();}var value=dw_qsearch.getSearchterm();if(value===''){dw_qsearch.clear_results();return;}dw_qsearch.curRequest=jQuery.post(DOKU_BASE+'lib/exe/ajax.php',{call:'qsearch',q:encodeURI(value)},dw_qsearch.onCompletion,'html');};dw_qsearch.$inObj.keyup(function(){if(dw_qsearch.timer){window.clearTimeout(dw_qsearch.timer);dw_qsearch.timer=null;}dw_qsearch.timer=window.setTimeout(do_qsearch,500);});dw_qsearch.$outObj.click(dw_qsearch.clear_results);},getSearchterm:function(){return dw_qsearch.$inObj.val();},clear_results:function(){dw_qsearch.$outObj.hide();dw_qsearch.$outObj.text('');},onCompletion:function(data){var max,$links,too_big;dw_qsearch.curRequest=null;if(data===''){dw_qsearch.clear_results();return;}dw_qsearch.$outObj .html(data).show().css('white-space','nowrap');dw_qsearch.$outObj.find('li').css('overflow','visible');$links=dw_qsearch.$outObj.find('a');max=dw_qsearch.$outObj[0].clientWidth;if(document.documentElement.dir==='rtl'){max-=parseInt(dw_qsearch.$outObj.css('padding-left'));too_big=function(l){return l.offsetLeft<0;};}else{max-=parseInt(dw_qsearch.$outObj.css('padding-right'));too_big=function(l){return l.offsetWidth+l.offsetLeft>max;};}$links.each(function(){var start,length,replace,nsL,nsR,eli,runaway;if(!too_big(this)){return;}if(this.textContent){this.__defineGetter__('innerText',function(){return this.textContent});this.__defineSetter__('innerText',function(val){this.textContent=val});}nsL=this.innerText.indexOf('(');nsR=this.innerText.indexOf(')');eli=0;runaway=0;while((nsR-nsL>3)&&too_big(this)&&runaway++<500){if(eli!==0){if((eli-nsL)>(nsR-eli)){start=eli-2;length=2;}else{start=eli+1;length=1;}replace='';}else{start=Math.floor(nsL+((nsR-nsL)/2));length=1;replace='…';}this.innerText=substr_replace(this.innerText,replace,start,length);eli=this.innerText.indexOf('…');nsL=this.innerText.indexOf('(');nsR=this.innerText.indexOf(')');}});dw_qsearch.$outObj.find('li').css('overflow','hidden').css('text-overflow','ellipsis');}};jQuery.extend(dw_qsearch,overrides);if(!overrides.deferInit){dw_qsearch.init();}return dw_qsearch;};jQuery(function(){jQuery('#qsearch__in').dw_qsearch({output:'#qsearch__out'});});jQuery.fn.dw_tree=function(overrides){var dw_tree={throbber_delay:500,$obj:this,toggle_selector:'a.idx_dir',init:function(){this.$obj.delegate(this.toggle_selector,'click',this,this.toggle);jQuery('ul:first',this.$obj).attr('role','tree');jQuery('ul',this.$obj).not(':first').attr('role','group');jQuery('li',this.$obj).attr('role','treeitem');jQuery('li.open > ul',this.$obj).attr('aria-expanded','true');jQuery('li.closed > ul',this.$obj).attr('aria-expanded','false');jQuery('li.closed',this.$obj).attr('aria-live','assertive');},toggle:function(e){var $listitem,$sublist,timeout,$clicky,show_sublist,dw_tree,opening;e.preventDefault();dw_tree=e.data;$clicky=jQuery(this);$listitem=$clicky.closest('li');$sublist=$listitem.find('ul').first();opening=$listitem.hasClass('closed');dw_tree.toggle_display($clicky,opening);if($sublist.is(':visible')){$listitem.removeClass('open').addClass('closed');$sublist.attr('aria-expanded','false');}else{$listitem.removeClass('closed').addClass('open');$sublist.attr('aria-expanded','true');}if(!opening){$sublist.dw_hide();return;}show_sublist=function(data){$sublist.hide();if(typeof data!=='undefined'){$sublist.html(data);$sublist.parent().attr('aria-busy','false').removeAttr('aria-live');jQuery('li.closed',$sublist).attr('aria-live','assertive');}if($listitem.hasClass('open')){$sublist.dw_show();}};if($sublist.length>0){show_sublist();return;}$sublist=jQuery('<ul class="idx" role="group"/>');$listitem.append($sublist);timeout=window.setTimeout(bind(show_sublist,'<li aria-busy="true"><img src="'+DOKU_BASE+'lib/images/throbber.gif" alt="loading..." title="loading..." /></li>'),dw_tree.throbber_delay);dw_tree.load_data(function(data){window.clearTimeout(timeout);show_sublist(data);},$clicky);},toggle_display:function($clicky,opening){},load_data:function(show_data,$clicky){show_data();}};jQuery.extend(dw_tree,overrides);if(!overrides.deferInit){dw_tree.init();}return dw_tree;};var dw_index=jQuery('#index__tree').dw_tree({deferInit:true,load_data:function(show_sublist,$clicky){jQuery.post(DOKU_BASE+'lib/exe/ajax.php',$clicky[0].search.substr(1)+'&call=index',show_sublist,'html');}});jQuery(function(){var $tree=jQuery('#index__tree');dw_index.$obj=$tree;dw_index.init();});var drag={obj:null,handle:null,oX:0,oY:0,eX:0,eY:0,attach:function(obj,handle){DEPRECATED('Use jQuery.draggable() instead.');if(handle){handle.dragobject=obj;}else{handle=obj;}var _this=this;addEvent($(handle),'mousedown',function(e){return _this.start(e);});},start:function(e){this.handle=e.target;if(this.handle.dragobject){this.obj=this.handle.dragobject;}else{this.obj=this.handle;}this.handle.className+=' ondrag';this.obj.className+=' ondrag';this.oX=parseInt(this.obj.style.left);this.oY=parseInt(this.obj.style.top);this.eX=e.pageX;this.eY=e.pageY;var _this=this;this.mousehandlers=[function(e){return _this.drag(e);},function(e){return _this.stop(e);}];addEvent(document,'mousemove',this.mousehandlers[0]);addEvent(document,'mouseup',this.mousehandlers[1]);return false;},stop:function(){this.handle.className=this.handle.className.replace(/ ?ondrag/,'');this.obj.className=this.obj.className.replace(/ ?ondrag/,'');removeEvent(document,'mousemove',this.mousehandlers[0]);removeEvent(document,'mouseup',this.mousehandlers[1]);this.obj=null;this.handle=null;},drag:function(e){if(this.obj){this.obj.style.top=(e.pageY+this.oY-this.eY+'px');this.obj.style.left=(e.pageX+this.oX-this.eX+'px');}}};function selection_class(){this.start=0;this.end=0;this.obj=null;this.rangeCopy=null;this.scroll=0;this.fix=0;this.getLength=function(){return this.end-this.start;};this.getText=function(){return(!this.obj)?'':this.obj.value.substring(this.start,this.end);};}function DWgetSelection(textArea){var sel=new selection_class();sel.obj=textArea;sel.start=textArea.value.length;sel.end=textArea.value.length;textArea.focus();if(document.getSelection){sel.start=textArea.selectionStart;sel.end=textArea.selectionEnd;sel.scroll=textArea.scrollTop;}else if(document.selection){sel.rangeCopy=document.selection.createRange().duplicate();if(textArea.tagName==='INPUT'){var before_range=textArea.createTextRange();before_range.expand('textedit');}else{var before_range=document.body.createTextRange();before_range.moveToElementText(textArea);}before_range.setEndPoint("EndToStart",sel.rangeCopy);var before_finished=false,selection_finished=false;var before_text,selection_text;before_text=before_range.text;selection_text=sel.rangeCopy.text;sel.start=before_text.length;sel.end=sel.start+selection_text.length;do{if(!before_finished){if(before_range.compareEndPoints("StartToEnd",before_range)==0){before_finished=true;}else{before_range.moveEnd("character",-1);if(before_range.text==before_text){sel.start+=2;sel.end+=2;}else{before_finished=true;}}}if(!selection_finished){if(sel.rangeCopy.compareEndPoints("StartToEnd",sel.rangeCopy)==0){selection_finished=true;}else{sel.rangeCopy.moveEnd("character",-1);if(sel.rangeCopy.text==selection_text){sel.end+=2;}else{selection_finished=true;}}}}while((!before_finished||!selection_finished));var countNL=function(str){var m=str.split("\r\n");if(!m||!m.length)return 0;return m.length-1;};sel.fix=countNL(sel.obj.value.substring(0,sel.start));}return sel;}function DWsetSelection(selection){if(document.getSelection){selection.obj.setSelectionRange(selection.start,selection.end);if(selection.scroll)selection.obj.scrollTop=selection.scroll;}else if(document.selection){selection.rangeCopy.collapse(true);selection.rangeCopy.moveStart('character',selection.start-selection.fix);selection.rangeCopy.moveEnd('character',selection.end-selection.start);selection.rangeCopy.select();}}function pasteText(selection,text,opts){if(!opts)opts={};selection.obj.value=selection.obj.value.substring(0,selection.start)+text+selection.obj.value.substring(selection.end,selection.obj.value.length);if(is_opera){selection.end=selection.start+text.replace(/\r?\n/g,'\r\n').length;}else{selection.end=selection.start+text.length;}if(opts.startofs)selection.start+=opts.startofs;if(opts.endofs)selection.end-=opts.endofs;if(opts.nosel)selection.start=selection.end;DWsetSelection(selection);}function insertTags(textAreaID,tagOpen,tagClose,sampleText){var txtarea=jQuery('#'+textAreaID)[0];var selection=DWgetSelection(txtarea);var text=selection.getText();var opts;if(text.charAt(text.length-1)==' '){selection.end--;text=selection.getText();}if(!text){text=sampleText;opts={startofs:tagOpen.length,endofs:tagClose.length};}else{opts={nosel:true};}text=tagOpen+text+tagClose;pasteText(selection,text,opts);}function insertAtCarret(textAreaID,text){var txtarea=jQuery('#'+textAreaID)[0];var selection=DWgetSelection(txtarea);pasteText(selection,text,{nosel:true});}var pickercounter=0;function initToolbar(tbid,edid,tb,allowblock){var $toolbar,$edit;if(typeof tbid=='string'){$toolbar=jQuery('#'+tbid);}else{$toolbar=jQuery(tbid);}$edit=jQuery('#'+edid);if($toolbar.length==0||$edit.length==0||$edit.attr('readOnly')){return;}if(typeof allowblock==='undefined'){allowblock=true;}$toolbar.html('');jQuery.each(tb,function(k,val){if(!tb.hasOwnProperty(k)||(!allowblock&&val.block===true)){return;}var actionFunc,$btn;$btn=jQuery(createToolButton(val.icon,val.title,val.key,val.id,val['class']));actionFunc='tb_'+val.type;if(jQuery.isFunction(window[actionFunc])){$btn.bind('click',bind(window[actionFunc],$btn,val,edid));$toolbar.append($btn);return;}actionFunc='addBtnAction'+val.type.charAt(0).toUpperCase()+val.type.substring(1);if(jQuery.isFunction(window[actionFunc])){var pickerid=window[actionFunc]($btn,val,edid);if(pickerid!==''){$toolbar.append($btn);$btn.attr('aria-controls',pickerid);if(actionFunc==='addBtnActionPicker'){$btn.attr('aria-haspopup','true');}}return;}alert('unknown toolbar type: '+val.type+'  '+actionFunc);});}function tb_format(btn,props,edid){var sample=props.sample||props.title;insertTags(edid,fixtxt(props.open),fixtxt(props.close),fixtxt(sample));pickerClose();return false;}function tb_formatln(btn,props,edid){var sample=props.sample||props.title,opts,selection=DWgetSelection(jQuery('#'+edid)[0]);sample=fixtxt(sample);props.open=fixtxt(props.open);props.close=fixtxt(props.close);if(selection.getLength()){sample=selection.getText();opts={nosel:true};}else{opts={startofs:props.open.length,endofs:props.close.length};}sample=sample.split("\n").join(props.close+"\n"+props.open);sample=props.open+sample+props.close;pasteText(selection,sample,opts);pickerClose();return false;}function tb_insert(btn,props,edid){insertAtCarret(edid,fixtxt(props.insert));pickerClose();return false;}function tb_mediapopup(btn,props,edid){window.open(DOKU_BASE+props.url+encodeURIComponent(NS)+'&edid='+encodeURIComponent(edid),props.name,props.options);return false;}function tb_autohead(btn,props,edid){var lvl=currentHeadlineLevel(edid),tags;lvl+=props.mod;if(lvl<1)lvl=1;if(lvl>5)lvl=5;tags=(new Array(8-lvl)).join('=');insertTags(edid,tags+' ',' '+tags+"\n",props.text);pickerClose();return false;}function addBtnActionPicker($btn,props,edid){var pickerid='picker'+(pickercounter++);var picker=createPicker(pickerid,props,edid);jQuery(picker).attr('aria-hidden','true');$btn.click(function(e){pickerToggle(pickerid,$btn);e.preventDefault();return'';});return pickerid;}function addBtnActionLinkwiz($btn,props,edid){dw_linkwiz.init(jQuery('#'+edid));jQuery($btn).click(function(e){dw_linkwiz.val=props;dw_linkwiz.toggle();e.preventDefault();return'';});return'link__wiz';}function pickerToggle(pickerid,$btn){var $picker=jQuery('#'+pickerid),pos=$btn.offset();if($picker.hasClass('a11y')){$picker.removeClass('a11y').attr('aria-hidden','false');}else{$picker.addClass('a11y').attr('aria-hidden','true');}$picker.offset({left:pos.left+3,top:pos.top+$btn[0].offsetHeight+3});}function pickerClose(){jQuery('.picker').addClass('a11y');}function fixtxt(str){return str.replace(/\\n/g,"\n");}jQuery(function(){initToolbar('tool__bar','wiki__text',toolbar);jQuery('#tool__bar').attr('role','toolbar');});function createToolButton(icon,label,key,id,classname){var $btn=jQuery(document.createElement('button')),$ico=jQuery(document.createElement('img'));$btn.addClass('toolbutton');if(classname){$btn.addClass(classname);}$btn.attr('title',label).attr('aria-controls','wiki__text');if(key){$btn.attr('title',label+' ['+key.toUpperCase()+']').attr('accessKey',key);}if(id){$btn.attr('id',id);$ico.attr('id',id+'_ico');}if(icon.substr(0,1)!=='/'){icon=DOKU_BASE+'lib/images/toolbar/'+icon;}$ico.attr('src',icon);$ico.attr('alt','');$ico.attr('width',16);$ico.attr('height',16);$btn.append($ico);return $btn[0];}function createPicker(id,props,edid){var $picker=jQuery(document.createElement('div'));$picker.addClass('picker a11y');if(props['class']){$picker.addClass(props['class']);}$picker.attr('id',id).css('position','absolute');function $makebutton(title){var $btn=jQuery(document.createElement('button')).addClass('pickerbutton').attr('title',title).attr('aria-controls',edid).bind('click',bind(pickerInsert,title,edid)).appendTo($picker);return $btn;}jQuery.each(props.list,function(key,item){if(!props.list.hasOwnProperty(key)){return;}if(isNaN(key)){if(item.substr(0,1)!=='/'){item=DOKU_BASE+'lib/images/'+props.icobase+'/'+item;}jQuery(document.createElement('img')).attr('src',item).attr('alt','').appendTo($makebutton(key));}else if(typeof item=='string'){$makebutton(item).text(item);}else{initToolbar($picker,edid,props.list);return false;}});jQuery('body').append($picker);return $picker[0];}function pickerInsert(text,edid){insertAtCarret(edid,text);pickerClose();}function addBtnActionSignature($btn,props,edid){if(typeof SIG!='undefined'&&SIG!=''){$btn.bind('click',function(e){insertAtCarret(edid,SIG);e.preventDefault();});return edid;}return'';}function currentHeadlineLevel(textboxId){var field=jQuery('#'+textboxId)[0],s=false,opts=[field.value.substr(0,DWgetSelection(field).start)];if(field.form.prefix){opts.push(field.form.prefix.value);}jQuery.each(opts,function(_,opt){var str="\n"+opt,lasthl=str.lastIndexOf("\n==");if(lasthl!==-1){s=str.substr(lasthl+1,6);return false;}});if(s===false){return 0;}return 7-s.match(/^={2,6}/)[0].length;}window.textChanged=false;function deleteDraft(){if(is_opera||window.keepDraft){return;}var $dwform=jQuery('#dw__editform');if($dwform.length===0){return;}jQuery.post(DOKU_BASE+'lib/exe/ajax.php',{call:'draftdel',id:$dwform.find('input[name=id]').val()});}jQuery(function(){var $editform=jQuery('#dw__editform');if($editform.length==0){return;}var $edit_text=jQuery('#wiki__text');if($edit_text.length>0){if($edit_text.attr('readOnly')){return;}var sel=DWgetSelection($edit_text[0]);sel.start=0;sel.end=0;DWsetSelection(sel);$edit_text.focus();}var checkfunc=function(){textChanged=true;summaryCheck();};$editform.change(checkfunc);$editform.keydown(checkfunc);window.onbeforeunload=function(){if(window.textChanged){return LANG.notsavedyet;}};window.onunload=deleteDraft;jQuery('#edbtn__save').click(function(){window.onbeforeunload='';textChanged=false;});jQuery('#edbtn__preview').click(function(){window.onbeforeunload='';textChanged=false;window.keepDraft=true;});var $summary=jQuery('#edit__summary');$summary.change(summaryCheck);$summary.keyup(summaryCheck);if(textChanged)summaryCheck();});function summaryCheck(){var $sum=jQuery('#edit__summary'),missing=$sum.val()==='';$sum.toggleClass('missing',missing).toggleClass('edit',!missing);}var dw_editor={init:function(){var $editor=jQuery('#wiki__text');if($editor.length===0){return;}dw_editor.initSizeCtl('#size__ctl',$editor);if($editor.attr('readOnly')){return;}if(jQuery.browser.opera){$editor.keypress(dw_editor.keyHandler);}else{$editor.keydown(dw_editor.keyHandler);}},initSizeCtl:function(ctlarea,editor){var $ctl=jQuery(ctlarea),$textarea=jQuery(editor);if($ctl.length===0||$textarea.length===0){return;}$textarea.css('height',DokuCookie.getValue('sizeCtl')||'300px');var wrp=DokuCookie.getValue('wrapCtl');if(wrp){dw_editor.setWrap($textarea[0],wrp);}jQuery.each([['larger',function(){dw_editor.sizeCtl(editor,100);}],['smaller',function(){dw_editor.sizeCtl(editor,-100);}],['wrap',function(){dw_editor.toggleWrap(editor);}]],function(_,img){jQuery(document.createElement('IMG')).attr('src',DOKU_BASE+'lib/images/'+img[0]+'.gif').attr('alt','').click(img[1]).appendTo($ctl);});},sizeCtl:function(editor,val){var $textarea=jQuery(editor),height=parseInt($textarea.css('height'))+val;$textarea.css('height',height+'px');DokuCookie.setValue('sizeCtl',$textarea.css('height'));},toggleWrap:function(editor){var $textarea=jQuery(editor),wrap=$textarea.attr('wrap');dw_editor.setWrap($textarea[0],(wrap&&wrap.toLowerCase()=='off')?'soft':'off');DokuCookie.setValue('wrapCtl',$textarea.attr('wrap'));},setWrap:function(textarea,wrapAttrValue){textarea.setAttribute('wrap',wrapAttrValue);var parNod=textarea.parentNode;var nxtSib=textarea.nextSibling;parNod.removeChild(textarea);parNod.insertBefore(textarea,nxtSib);},keyHandler:function(e){if(jQuery.inArray(e.keyCode,[8,13,32])===-1){return;}var selection=DWgetSelection(this);if(selection.getLength()>0){return;}var search="\n"+this.value.substr(0,selection.start);var linestart=Math.max(search.lastIndexOf("\n"),search.lastIndexOf("\r"));search=search.substr(linestart);if(e.keyCode==13){var match=search.match(/(\n  +([\*-] ?)?)/);if(match){var scroll=this.scrollHeight;var match2=search.match(/^\n  +[\*-]\s*$/);if(match2&&this.value.substr(selection.start).match(/^($|\r?\n)/)){this.value=this.value.substr(0,linestart)+"\n"+this.value.substr(selection.start);selection.start=linestart+1;selection.end=linestart+1;DWsetSelection(selection);}else{insertAtCarret(this.id,match[1]);}this.scrollTop+=(this.scrollHeight-scroll);e.preventDefault();return false;}}else if(e.keyCode==8){var match=search.match(/(\n  +)([*-] ?)$/);if(match){var spaces=match[1].length-1;if(spaces>3){this.value=this.value.substr(0,linestart)+this.value.substr(linestart+2);selection.start=selection.start-2;selection.end=selection.start;}else{this.value=this.value.substr(0,linestart)+this.value.substr(selection.start);selection.start=linestart;selection.end=linestart;}DWsetSelection(selection);e.preventDefault();return false;}}else if(e.keyCode==32){var match=search.match(/(\n  +)([*-] )$/);if(match){this.value=this.value.substr(0,linestart)+'  '+this.value.substr(linestart);selection.start=selection.start+2;selection.end=selection.start;DWsetSelection(selection);e.preventDefault();return false;}}}};jQuery(dw_editor.init);var dw_locktimer={timeout:0,draft:false,timerID:null,lasttime:null,msg:LANG.willexpire,pageid:'',init:function(timeout,msg,draft,edid){var $edit;switch(arguments.length){case 4:DEPRECATED('Setting the locktimer expiry message is deprecated');dw_locktimer.msg=msg;break;case 3:edid=draft;case 2:draft=msg;}edid=edid||'wiki__text';$edit=jQuery('#'+edid);if($edit.length===0||$edit.attr('readonly')){return;}dw_locktimer.timeout=timeout*1000;dw_locktimer.draft=draft;dw_locktimer.lasttime=new Date();dw_locktimer.pageid=jQuery('#dw__editform input[name=id]').val();if(!dw_locktimer.pageid){return;}$edit.keypress(dw_locktimer.refresh);dw_locktimer.reset();},reset:function(){dw_locktimer.clear();dw_locktimer.timerID=window.setTimeout(dw_locktimer.warning,dw_locktimer.timeout);},warning:function(){dw_locktimer.clear();alert(fixtxt(dw_locktimer.msg));},clear:function(){if(dw_locktimer.timerID!==null){window.clearTimeout(dw_locktimer.timerID);dw_locktimer.timerID=null;}},refresh:function(){var now=new Date(),params='call=lock&id='+dw_locktimer.pageid+'&';if(now.getTime()-dw_locktimer.lasttime.getTime()<=30*1000){return;}if(dw_locktimer.draft&&jQuery('#dw__editform textarea[name=wikitext]').length>0){params+=jQuery('#dw__editform').find('input[name=prefix], '+'textarea[name=wikitext], '+'input[name=suffix], '+'input[name=date]').serialize();}jQuery.post(DOKU_BASE+'lib/exe/ajax.php',params,dw_locktimer.refreshed,'html');dw_locktimer.lasttime=now;},refreshed:function(data){var error=data.charAt(0);data=data.substring(1);jQuery('#draft__status').html(data);if(error!='1'){return;}dw_locktimer.reset();}};var dw_linkwiz={$wiz:null,$entry:null,result:null,timer:null,textArea:null,selected:null,selection:null,init:function($editor){var pos=$editor.position();if(dw_linkwiz.$wiz)return;dw_linkwiz.$wiz=jQuery(document.createElement('div')).dialog({autoOpen:false,draggable:true,title:LANG.linkwiz,resizable:false}).html('<div>'+LANG.linkto+' <input type="text" class="edit" id="link__wiz_entry" autocomplete="off" /></div>'+'<div id="link__wiz_result"></div>').parent().attr('id','link__wiz').css({'position':'absolute','top':(pos.top+20)+'px','left':(pos.left+80)+'px'}).hide().appendTo('.dokuwiki:first');dw_linkwiz.textArea=$editor[0];dw_linkwiz.result=jQuery('#link__wiz_result')[0];jQuery(dw_linkwiz.result).css('position','relative');dw_linkwiz.$entry=jQuery('#link__wiz_entry');if(JSINFO.namespace){dw_linkwiz.$entry.val(JSINFO.namespace+':');}jQuery('#link__wiz .ui-dialog-titlebar-close').click(dw_linkwiz.hide);dw_linkwiz.$entry.keyup(dw_linkwiz.onEntry);jQuery(dw_linkwiz.result).delegate('a','click',dw_linkwiz.onResultClick);},onEntry:function(e){if(e.keyCode==37||e.keyCode==39){return true;}if(e.keyCode==27){dw_linkwiz.hide();e.preventDefault();e.stopPropagation();return false;}if(e.keyCode==38){dw_linkwiz.select(dw_linkwiz.selected-1);e.preventDefault();e.stopPropagation();return false;}if(e.keyCode==40){dw_linkwiz.select(dw_linkwiz.selected+1);e.preventDefault();e.stopPropagation();return false;}if(e.keyCode==13){if(dw_linkwiz.selected>-1){var $obj=dw_linkwiz.$getResult(dw_linkwiz.selected);if($obj.length>0){dw_linkwiz.resultClick($obj.find('a')[0]);}}else if(dw_linkwiz.$entry.val()){dw_linkwiz.insertLink(dw_linkwiz.$entry.val());}e.preventDefault();e.stopPropagation();return false;}dw_linkwiz.autocomplete();},getResult:function(num){DEPRECATED('use dw_linkwiz.$getResult()[0] instead');return dw_linkwiz.$getResult()[0]||null;},$getResult:function(num){return jQuery(dw_linkwiz.result).find('div').eq(num);},select:function(num){if(num<0){dw_linkwiz.deselect();return;}var $obj=dw_linkwiz.$getResult(num);if($obj.length===0){return;}dw_linkwiz.deselect();$obj.addClass('selected');var childPos=$obj.position().top;var yDiff=childPos+$obj.outerHeight()-jQuery(dw_linkwiz.result).innerHeight();if(childPos<0){jQuery(dw_linkwiz.result)[0].scrollTop+=childPos;}else if(yDiff>0){jQuery(dw_linkwiz.result)[0].scrollTop+=yDiff;}dw_linkwiz.selected=num;},deselect:function(){if(dw_linkwiz.selected>-1){dw_linkwiz.$getResult(dw_linkwiz.selected).removeClass('selected');}dw_linkwiz.selected=-1;},onResultClick:function(e){if(!jQuery(this).is('a')){return;}e.stopPropagation();e.preventDefault();dw_linkwiz.resultClick(this);return false;},resultClick:function(a){dw_linkwiz.$entry.val(a.title);if(a.title==''||a.title.substr(a.title.length-1)==':'){dw_linkwiz.autocomplete_exec();}else{if(jQuery(a.nextSibling).is('span')){dw_linkwiz.insertLink(a.nextSibling.innerHTML);}else{dw_linkwiz.insertLink('');}}},insertLink:function(title){var link=dw_linkwiz.$entry.val(),sel,stxt;if(!link){return;}sel=DWgetSelection(dw_linkwiz.textArea);if(sel.start==0&&sel.end==0){sel=dw_linkwiz.selection;}stxt=sel.getText();if(stxt.charAt(stxt.length-1)==' '){sel.end--;stxt=sel.getText();}if(!stxt&&!DOKU_UHC){stxt=title;}if(dw_linkwiz.textArea.form.id.value.indexOf(':')!=-1&&link.indexOf(':')==-1){link=':'+link;}var so=link.length;var eo=0;if(dw_linkwiz.val){if(dw_linkwiz.val.open){so+=dw_linkwiz.val.open.length;link=dw_linkwiz.val.open+link;}if(stxt){link+='|'+stxt;so+=1;}if(dw_linkwiz.val.close){link+=dw_linkwiz.val.close;eo=dw_linkwiz.val.close.length;}}pasteText(sel,link,{startofs:so,endofs:eo});dw_linkwiz.hide();dw_linkwiz.$entry.val(dw_linkwiz.$entry.val().replace(/[^:]*$/,''));},autocomplete:function(){if(dw_linkwiz.timer!==null){window.clearTimeout(dw_linkwiz.timer);dw_linkwiz.timer=null;}dw_linkwiz.timer=window.setTimeout(dw_linkwiz.autocomplete_exec,350);},autocomplete_exec:function(){var $res=jQuery(dw_linkwiz.result);dw_linkwiz.deselect();$res.html('<img src="'+DOKU_BASE+'lib/images/throbber.gif" alt="" width="16" height="16" />').load(DOKU_BASE+'lib/exe/ajax.php',{call:'linkwiz',q:dw_linkwiz.$entry.val()});},show:function(){dw_linkwiz.selection=DWgetSelection(dw_linkwiz.textArea);dw_linkwiz.$wiz.show();dw_linkwiz.$entry.focus();dw_linkwiz.autocomplete();},hide:function(){dw_linkwiz.$wiz.hide();dw_linkwiz.textArea.focus();},toggle:function(){if(dw_linkwiz.$wiz.css('display')=='none'){dw_linkwiz.show();}else{dw_linkwiz.hide();}}};var dw_mediamanager={keepopen:false,hide:false,popup:false,display:false,ext:false,$popup:null,align:false,link:false,size:false,forbidden_opts:{},view_opts:{list:false,sort:false},layout_width:0,minHeights:{thumbs:200,rows:100},init:function(){var $content,$tree;$content=jQuery('#media__content');$tree=jQuery('#media__tree');if(!$tree.length)return;dw_mediamanager.prepare_content($content);dw_mediamanager.attachoptions();dw_mediamanager.initpopup();$content.delegate('#upload__file','change',dw_mediamanager.suggest).delegate('a.select','click',dw_mediamanager.select).delegate('#media__content a.btn_media_delete','click',dw_mediamanager.confirmattach).delegate('#mediamanager__done_form','submit',dw_mediamanager.list);$tree.dw_tree({toggle_selector:'img',load_data:function(show_sublist,$clicky){var $link=$clicky.parent().find('div.li a.idx_dir');jQuery.post(DOKU_BASE+'lib/exe/ajax.php',$link[0].search.substr(1)+'&call=medians',show_sublist,'html');},toggle_display:function($clicky,opening){$clicky.attr('src',DOKU_BASE+'lib/images/'+(opening?'minus':'plus')+'.gif');}});$tree.delegate('a','click',dw_mediamanager.list);dw_mediamanager.set_fileview_list();dw_mediamanager.init_options();dw_mediamanager.image_diff();dw_mediamanager.init_ajax_uploader();jQuery('#mediamanager__page div.filelist').delegate('ul.tabs a','click',dw_mediamanager.list).delegate('div.panelContent a','click',dw_mediamanager.details).delegate('#dw__mediasearch','submit',dw_mediamanager.list).delegate('#upload__file','change',dw_mediamanager.suggest).delegate('.qq-upload-file a','click',dw_mediamanager.details);jQuery('#mediamanager__page div.file').delegate('ul.tabs a','click',dw_mediamanager.details).delegate('#mediamanager__btn_update','submit',dw_mediamanager.list).delegate('#page__revisions','submit',dw_mediamanager.details).delegate('#page__revisions a','click',dw_mediamanager.details).delegate('#mediamanager__save_meta','submit',dw_mediamanager.details).delegate('#mediamanager__btn_delete','submit',dw_mediamanager.details).delegate('#mediamanager__btn_restore','submit',dw_mediamanager.details).delegate('.btn_newer, .btn_older','submit',dw_mediamanager.details);dw_mediamanager.update_resizable();dw_mediamanager.layout_width=jQuery("#mediamanager__page").width();jQuery(window).resize(dw_mediamanager.window_resize);},init_options:function(){var $options=jQuery('div.filelist div.panelHeader form.options'),$listType,$sortBy,$both;if($options.length===0){return;}$listType=$options.find('li.listType');$sortBy=$options.find('li.sortBy');$both=$listType.add($sortBy);$options.find('input[type=submit]').parent().hide();$both.find('label').each(function(){var $this=jQuery(this);$this.children('input').appendTo($this.parent());});$both.buttonset();$listType.children('input').change(function(event){dw_mediamanager.set_fileview_list();});$sortBy.children('input').change(function(event){dw_mediamanager.set_fileview_sort();dw_mediamanager.list.call(jQuery('#dw__mediasearch')[0]||this,event);});},initpopup:function(){var opts,$insp,$insbtn;dw_mediamanager.$popup=jQuery(document.createElement('div')).attr('id','media__popup_content').dialog({autoOpen:false,width:280,modal:true,draggable:true,title:LANG.mediatitle,resizable:false});opts=[{id:'link',label:LANG.mediatarget,btns:['lnk','direct','nolnk','displaylnk']},{id:'align',label:LANG.mediaalign,btns:['noalign','left','center','right']},{id:'size',label:LANG.mediasize,btns:['small','medium','large','original']}];jQuery.each(opts,function(_,opt){var $p,$l;$p=jQuery(document.createElement('p')).attr('id','media__'+opt.id);if(dw_mediamanager.display==="2"){$p.hide();}$l=jQuery(document.createElement('label')).text(opt.label);$p.append($l);jQuery.each(opt.btns,function(i,text){var $btn,$img;$btn=jQuery(document.createElement('button')).addClass('button').attr('id',"media__"+opt.id+"btn"+(i+1)).attr('title',LANG['media'+text]).click(bind(dw_mediamanager.setOpt,opt.id));$img=jQuery(document.createElement('img')).attr('src',DOKU_BASE+'lib/images/media_'+opt.id+'_'+text+'.png');$btn.append($img);$p.append($btn);});dw_mediamanager.$popup.append($p);});$insp=jQuery(document.createElement('p'));dw_mediamanager.$popup.append($insp);$insbtn=jQuery(document.createElement('input')).attr('id','media__sendbtn').attr('type','button').addClass('button').val(LANG.mediainsert);$insp.append($insbtn);},insert:function(id){var opts,alignleft,alignright,edid,s;dw_mediamanager.$popup.dialog('close');opts='';alignleft='';alignright='';if({img:1,swf:1}[dw_mediamanager.ext]===1){if(dw_mediamanager.link==='4'){opts='?linkonly';}else{if(dw_mediamanager.link==="3"&&dw_mediamanager.ext==='img'){opts='?nolink';}else if(dw_mediamanager.link==="2"&&dw_mediamanager.ext==='img'){opts='?direct';}s=parseInt(dw_mediamanager.size,10);if(s&&s>=1&&s<4){opts+=(opts.length)?'&':'?';opts+=dw_mediamanager.size+'00';if(dw_mediamanager.ext==='swf'){switch(s){case 1:opts+='x62';break;case 2:opts+='x123';break;case 3:opts+='x185';break;}}}if(dw_mediamanager.align!=='1'){alignleft=dw_mediamanager.align==='2'?'':' ';alignright=dw_mediamanager.align==='4'?'':' ';}}}edid=String.prototype.match.call(document.location,/&edid=([^&]+)/);opener.insertTags(edid?edid[1]:'wiki__text','{{'+alignleft+id+opts+alignright+'|','}}','');if(!dw_mediamanager.keepopen){window.close();}opener.focus();return false;},suggest:function(){var $file,$name,text;$file=jQuery(this);$name=jQuery('#upload__name');if($name.val()!='')return;if(!$file.length||!$name.length){return;}text=$file.val();text=text.substr(text.lastIndexOf('/')+1);text=text.substr(text.lastIndexOf('\\')+1);$name.val(text);},list:function(event){var $link,$content,params;if(event){event.preventDefault();}jQuery('div.success, div.info, div.error, div.notify').remove();$link=jQuery(this);$content=jQuery('#media__content');if($content.length===0){$content=jQuery('div.filelist');if($link.hasClass('idx_dir')){jQuery('div.file').empty();jQuery('div.namespaces .selected').removeClass('selected');$link.addClass('selected');}}params='call=medialist&';if($link[0].search){params+=$link[0].search.substr(1);}else if($link.is('form')){params+=dw_mediamanager.form_params($link);}else if($link.closest('form').length>0){params+=dw_mediamanager.form_params($link.closest('form'));}dw_mediamanager.update_content($content,params);},form_params:function($form){if(!$form.length)return;var action='';var i=$form[0].action.indexOf('?');if(i>=0)action=$form[0].action.substr(i+1);return action+'&'+$form.serialize();},set_fileview_list:function(new_type){dw_mediamanager.set_fileview_opt(['list','listType',function(new_type){jQuery('div.filelist div.panelContent ul').toggleClass('rows',new_type==='rows').toggleClass('thumbs',new_type==='thumbs');}],new_type);dw_mediamanager.resize();},set_fileview_sort:function(new_sort){dw_mediamanager.set_fileview_opt(['sort','sortBy',function(new_sort){}],new_sort);},set_fileview_opt:function(opt,new_val){if(typeof new_val==='undefined'){new_val=jQuery('form.options li.'+opt[1]+' input').filter(':checked').val();if(typeof new_val==='undefined'){new_val='thumbs';}}if(new_val!==dw_mediamanager.view_opts[opt[0]]){opt[2](new_val);DokuCookie.setValue(opt[0],new_val);dw_mediamanager.view_opts[opt[0]]=new_val;}},details:function(event){var $link,$content,params,update_list;$link=jQuery(this);event.preventDefault();jQuery('div.success, div.info, div.error, div.notify').remove();if($link[0].id=='mediamanager__btn_delete'&&!confirm(LANG.del_confirm)){return false;}if($link[0].id=='mediamanager__btn_restore'&&!confirm(LANG.restore_confirm)){return false;}$content=jQuery('div.file');params='call=mediadetails&';if($link[0].search){params+=$link[0].search.substr(1);}else if($link.is('form')){params+=dw_mediamanager.form_params($link);}else if($link.closest('form').length>0){params+=dw_mediamanager.form_params($link.closest('form'));}update_list=($link[0].id=='mediamanager__btn_delete'||$link[0].id=='mediamanager__btn_restore');dw_mediamanager.update_content($content,params,update_list);},update_content:function($content,params,update_list){var $container;jQuery.post(DOKU_BASE+'lib/exe/ajax.php',params,function(data){dw_mediamanager.$resizables().resizable('destroy');if(update_list){dw_mediamanager.list.call(jQuery('#mediamanager__page form.options input[type="submit"]')[0]);}$content.html(data);dw_mediamanager.prepare_content($content);dw_mediamanager.updatehide();dw_mediamanager.update_resizable();dw_behaviour.revisionBoxHandler();dw_mediamanager.set_fileview_list(dw_mediamanager.view_opts.list);dw_mediamanager.image_diff();dw_mediamanager.init_ajax_uploader();dw_mediamanager.init_options();},'html');$container=$content.find('div.panelContent');if($container.length===0){$container=$content;}$container.html('<img src="'+DOKU_BASE+'lib/images/loading.gif" alt="..." class="load" />');},window_resize:function(){dw_mediamanager.resize();dw_mediamanager.opacity_slider();dw_mediamanager.portions_slider();},$resizables:function(){return jQuery('#mediamanager__page').find('div.namespaces, div.filelist');},update_resizable:function(){$resizables=dw_mediamanager.$resizables();$resizables.resizable({handles:'e',resize:function(event,ui){var widthFull=jQuery('#mediamanager__page').width();var widthResizables=0;$resizables.each(function(){widthResizables+=jQuery(this).width();});var $filePanel=jQuery('#mediamanager__page div.panel.file');var widthOtherResizable=widthResizables-jQuery(this).width();var minWidthNonResizable=parseFloat($filePanel.css("min-width"));var maxWidth=widthFull-(widthOtherResizable+minWidthNonResizable)-1;$resizables.resizable("option","maxWidth",maxWidth);var relWidthNonResizable=99.9-(100*widthResizables/widthFull);$filePanel.width(relWidthNonResizable+'%');if(!jQuery.browser.webkit){$resizables.each(function(){w=jQuery(this).width();w=(99.99*w/widthFull);w+="%";jQuery(this).width(w);});}dw_mediamanager.resize();dw_mediamanager.opacity_slider();dw_mediamanager.portions_slider();}});dw_mediamanager.resize();},resize:function(){var $contents=jQuery('#mediamanager__page div.panelContent'),height=jQuery(window).height()-jQuery(document.body).height()+Math.max.apply(null,jQuery.map($contents,function(v){return jQuery(v).height();}));if(height<dw_mediamanager.minHeights[dw_mediamanager.view_opts.list]){$contents.add(dw_mediamanager.$resizables()).height('auto');}else{$contents.height(height);dw_mediamanager.$resizables().each(function(){var $this=jQuery(this);$this.height(height+$this.find('div.panelContent').offset().top-$this.offset().top);});}},image_diff:function(){if(jQuery('#mediamanager__difftype').length)return;$form=jQuery('#mediamanager__form_diffview');if(!$form.length)return;$label=jQuery(document.createElement('label'));$label.append('<span>'+LANG.media_diff+'</span> ');$select=jQuery(document.createElement('select')).attr('id','mediamanager__difftype').attr('name','difftype').change(dw_mediamanager.change_diff_type);$select.append(new Option(LANG.media_diff_both,"both"));$select.append(new Option(LANG.media_diff_opacity,"opacity"));$select.append(new Option(LANG.media_diff_portions,"portions"));$label.append($select);$form.append($label);var select=document.getElementById('mediamanager__difftype');select.options[0].text=LANG.media_diff_both;select.options[1].text=LANG.media_diff_opacity;select.options[2].text=LANG.media_diff_portions;},change_diff_type:function(){$select=jQuery('#mediamanager__difftype');$content=jQuery('#mediamanager__diff');params=dw_mediamanager.form_params($select.closest('form'))+'&call=mediadiff';jQuery.post(DOKU_BASE+'lib/exe/ajax.php',params,function(data){$content.html(data);dw_mediamanager.portions_slider();dw_mediamanager.opacity_slider();},'html');},opacity_slider:function(){var $slider=jQuery("#mediamanager__diff div.slider");if(!$slider.length)return;var $image=jQuery('#mediamanager__diff div.imageDiff.opacity div.image1 img');if(!$image.length)return;$slider.width($image.width()-20);$slider.slider();$slider.slider("option","min",0);$slider.slider("option","max",0.999);$slider.slider("option","step",0.001);$slider.slider("option","value",0.5);$slider.bind("slide",function(event,ui){jQuery('#mediamanager__diff div.imageDiff.opacity div.image2 img').css({opacity:$slider.slider("option","value")});});},portions_slider:function(){var $image1=jQuery('#mediamanager__diff div.imageDiff.portions div.image1 img');var $image2=jQuery('#mediamanager__diff div.imageDiff.portions div.image2 img');if(!$image1.length||!$image2.length)return;var $div=jQuery("#mediamanager__diff");if(!$div.length)return;$div.width('100%');$image2.parent().width('97%');$image1.width('100%');$image2.width('100%');if($image1.width()<$div.width()){$div.width($image1.width());}$image2.parent().width('50%');$image2.width($image1.width());$image1.width($image1.width());var $slider=jQuery("#mediamanager__diff div.slider");if(!$slider.length)return;$slider.width($image1.width()-20);$slider.slider();$slider.slider("option","min",0);$slider.slider("option","max",97);$slider.slider("option","step",1);$slider.slider("option","value",50);$slider.bind("slide",function(event,ui){jQuery('#mediamanager__diff div.imageDiff.portions div.image2').css({width:$slider.slider("option","value")+'%'});});},params_toarray:function(str){var vars=[],hash;var hashes=str.split('&');for(var i=0;i<hashes.length;i++){hash=hashes[i].split('=');vars[decodeURIComponent(hash[0])]=decodeURIComponent(hash[1]);}return vars;},init_ajax_uploader:function(){if(!jQuery('#mediamanager__uploader').length)return;if(jQuery('.qq-upload-list').length)return;var params=dw_mediamanager.form_params(jQuery('#dw__upload'))+'&call=mediaupload';params=dw_mediamanager.params_toarray(params);var uploader=new qq.FileUploaderExtended({element:document.getElementById('mediamanager__uploader'),action:DOKU_BASE+'lib/exe/ajax.php',params:params});},prepare_content:function($content){$content.find('div.example:visible').hide();},select:function(event){var $link,id,dot,ext;event.preventDefault();$link=jQuery(this);id=$link.attr('id').substr(2);if(!opener){jQuery(document.getElementById('ex_'+id.replace(/:/g,'_').replace(/^_/,''))).dw_toggle();return;}dw_mediamanager.ext=false;dot=id.lastIndexOf(".");if(-1===dot){dw_mediamanager.insert(id);return;}ext=id.substr(dot);if({'.jpg':1,'.jpeg':1,'.png':1,'.gif':1,'.swf':1}[ext]!==1){dw_mediamanager.insert(id);return;}jQuery('#media__sendbtn').unbind().click(bind(dw_mediamanager.insert,id));dw_mediamanager.unforbid('ext');if(ext==='.swf'){dw_mediamanager.ext='swf';dw_mediamanager.forbid('ext',{link:['1','2'],size:['4']});}else{dw_mediamanager.ext='img';}dw_mediamanager.setOpt('link');dw_mediamanager.setOpt('align');dw_mediamanager.setOpt('size');jQuery('#media__linkbtn1, #media__linkbtn2, #media__sizebtn4').toggle(dw_mediamanager.ext==='img');dw_mediamanager.$popup.dialog('open');jQuery('#media__sendbtn').focus();},confirmattach:function(e){if(!confirm(LANG.del_confirm+"\n"+jQuery(this).attr('title'))){e.preventDefault();}},attachoptions:function(){var $obj,opts;$obj=jQuery('#media__opts');if($obj.length===0){return;}opts=[];if(opener){opts.push(['keepopen','keepopen']);}opts.push(['hide','hidedetails']);jQuery.each(opts,function(_,opt){var $box,$lbl;$box=jQuery(document.createElement('input')).attr('type','checkbox').attr('id','media__'+opt[0]).click(bind(dw_mediamanager.toggleOption,opt[0]));if(DokuCookie.getValue(opt[0])){$box.prop('checked',true);dw_mediamanager[opt[0]]=true;}$lbl=jQuery(document.createElement('label')).attr('for','media__'+opt[0]).text(LANG[opt[1]]);$obj.append($box,$lbl,document.createElement('br'));});dw_mediamanager.updatehide();},toggleOption:function(variable){if(jQuery(this).prop('checked')){DokuCookie.setValue(variable,1);dw_mediamanager[variable]=true;}else{DokuCookie.setValue(variable,'');dw_mediamanager[variable]=false;}if(variable==='hide'){dw_mediamanager.updatehide();}},updatehide:function(){jQuery('#media__content div.detail').dw_toggle(!dw_mediamanager.hide);},setOpt:function(opt,e){var val,i;if(typeof e!=='undefined'){val=this.id.substring(this.id.length-1);}else{val=dw_mediamanager.getOpt(opt);}if(val===false){DokuCookie.setValue(opt,'');dw_mediamanager[opt]=false;return;}if(opt==='link'){if(val!=='4'&&dw_mediamanager.link==='4'){dw_mediamanager.unforbid('linkonly');dw_mediamanager.setOpt('align');dw_mediamanager.setOpt('size');}else if(val==='4'){dw_mediamanager.forbid('linkonly',{align:false,size:false});}jQuery("#media__size, #media__align").dw_toggle(val!=='4');}DokuCookie.setValue(opt,val);dw_mediamanager[opt]=val;for(i=1;i<=4;i++){jQuery("#media__"+opt+"btn"+i).removeClass('selected');}jQuery('#media__'+opt+'btn'+val).addClass('selected');},unforbid:function(group){delete dw_mediamanager.forbidden_opts[group];},forbid:function(group,forbids){dw_mediamanager.forbidden_opts[group]=forbids;},allowedOpt:function(opt,val){var ret=true;jQuery.each(dw_mediamanager.forbidden_opts,function(_,forbids){ret=forbids[opt]!==false&&jQuery.inArray(val,forbids[opt])===-1;return ret;});return ret;},getOpt:function(opt){var allowed=bind(dw_mediamanager.allowedOpt,opt);if(dw_mediamanager[opt]!==false&&allowed(dw_mediamanager[opt])){return dw_mediamanager[opt];}if(DokuCookie.getValue(opt)&&allowed(DokuCookie.getValue(opt))){return DokuCookie.getValue(opt);}if(opt==='size'&&allowed('2')){return'2';}return jQuery.grep(['1','2','3','4'],allowed)[0]||false;}};jQuery(dw_mediamanager.init);jQuery.fn.dw_hide=function(fn){this.attr('aria-expanded','false');return this.slideUp('fast',fn);};jQuery.fn.dw_show=function(fn){this.attr('aria-expanded','true');return this.slideDown('fast',fn);};jQuery.fn.dw_toggle=function(bool,fn){return this.each(function(){var $this=jQuery(this);if(typeof bool==='undefined'){bool=$this.is(':hidden');}$this[bool?"dw_show":"dw_hide"](fn);});};var dw_behaviour={init:function(){dw_behaviour.focusMarker();dw_behaviour.scrollToMarker();dw_behaviour.removeHighlightOnClick();dw_behaviour.quickSelect();dw_behaviour.checkWindowsShares();dw_behaviour.subscription();dw_behaviour.revisionBoxHandler();jQuery(document).on('click','#page__revisions input[type=checkbox]',dw_behaviour.revisionBoxHandler);},scrollToMarker:function(){var $obj=jQuery('#scroll__here');if($obj.length){$obj[0].scrollIntoView();}},focusMarker:function(){jQuery('#focus__this').focus();},removeHighlightOnClick:function(){jQuery('span.search_hit').click(function(e){jQuery(e.target).removeClass('search_hit');});},quickSelect:function(){jQuery('select.quickselect').change(function(e){e.target.form.submit();}).closest('form').find('input[type=submit]').not('.show').hide();},checkWindowsShares:function(){if(!LANG.nosmblinks||navigator.userAgent.match(/(Trident|MSIE)/)){return;}jQuery('a.windows').on('click',function(){alert(LANG.nosmblinks.replace(/\\n/,"\n"));});},subscription:function(){var $form,$list,$digest;$form=jQuery('#subscribe__form');if(0===$form.length)return;$list=$form.find("input[name='sub_style'][value='list']");$digest=$form.find("input[name='sub_style'][value='digest']");$form.find("input[name='sub_target']").click(function(){var $this=jQuery(this),show_list;if(!$this.prop('checked')){return;}show_list=$this.val().match(/:$/);$list.parent().dw_toggle(show_list);if(!show_list&&$list.prop('checked')){$digest.prop('checked','checked');}}).filter(':checked').click();},revisionBoxHandler:function(){var $checked=jQuery('#page__revisions input[type=checkbox]:checked');var $all=jQuery('#page__revisions input[type=checkbox]');if($checked.length<2){$all.attr('disabled',false);jQuery('#page__revisions input[type=submit]').attr('disabled',true);}else{$all.attr('disabled',true);jQuery('#page__revisions input[type=submit]').attr('disabled',false);for(var i=0;i<$checked.length;i++){$checked[i].disabled=false;if(i>1){$checked[i].checked=false;}}}}};jQuery(dw_behaviour.init);dw_page={init:function(){dw_page.sectionHighlight();jQuery('a.fn_top').mouseover(dw_page.footnoteDisplay);dw_page.makeToggle('#dw__toc h3','#dw__toc > div');},sectionHighlight:function(){jQuery('form.btn_secedit').mouseover(function(){var $tgt=jQuery(this).parent(),nr=$tgt.attr('class').match(/(\s+|^)editbutton_(\d+)(\s+|$)/)[2],$highlight=jQuery(),$highlightWrap=jQuery('<div class="section_highlight"></div>');while($tgt.length>0&&!($tgt.hasClass('sectionedit'+nr)||$tgt.find('.sectionedit'+nr).length)){$tgt=$tgt.prev();$highlight=$highlight.add($tgt);}$highlight.filter(':last').before($highlightWrap);$highlight.detach().appendTo($highlightWrap);}).mouseout(function(){var $highlightWrap=jQuery('.section_highlight');$highlightWrap.before($highlightWrap.children().detach());$highlightWrap.detach();});},insituPopup:function(target,popup_id){var $fndiv=jQuery('#'+popup_id);if($fndiv.length===0){$fndiv=jQuery(document.createElement('div')).attr('id',popup_id).addClass('insitu-footnote JSpopup').attr('aria-hidden','true').mouseleave(function(){jQuery(this).hide().attr('aria-hidden','true');}).attr('role','tooltip');jQuery('.dokuwiki:first').append($fndiv);}$fndiv.show().position({my:'left top',at:'left center',of:target}).hide();return $fndiv;},footnoteDisplay:function(){var content=jQuery(jQuery(this).attr('href')).closest('div.fn').html();if(content===null){return;}content=content.replace(/((^|\s*,\s*)<sup>.*?<\/sup>)+\s*/gi,'');content=content.replace(/\bid=(['"])([^"']+)\1/gi,'id="insitu__$2');dw_page.insituPopup(this,'insitu__fn').html(content).show().attr('aria-hidden','false');},makeToggle:function(handle,content,state){var $handle,$content,$clicky,$child,setClicky;$handle=jQuery(handle);if(!$handle.length)return;$content=jQuery(content);if(!$content.length)return;$child=$content.children();setClicky=function(hiding){if(hiding){$clicky.html('<span>+</span>');$handle.addClass('closed');$handle.removeClass('open');}else{$clicky.html('<span>−</span>');$handle.addClass('open');$handle.removeClass('closed');}};$handle[0].setState=function(state){var hidden;if(!state)state=1;$content.css('min-height',$content.height()).show();$child.stop(true,true);if(state===-1){hidden=false;}else if(state===1){hidden=true;}else{hidden=$child.is(':hidden');}setClicky(!hidden);$child.dw_toggle(hidden,function(){$content.toggle(hidden);$content.css('min-height','');});};$clicky=jQuery(document.createElement('strong'));$handle.css('cursor','pointer').click($handle[0].setState).prepend($clicky);$handle[0].setState(state);}};jQuery(dw_page.init);var device_class='';var device_classes='desktop mobile tablet phone';function tpl_dokuwiki_mobile(){var screen_mode=jQuery('#screen__mode').css('z-index')+'';switch(screen_mode){case'1':if(device_class.match(/tablet/))return;device_class='mobile tablet';break;case'2':if(device_class.match(/phone/))return;device_class='mobile phone';break;default:if(device_class=='desktop')return;device_class='desktop';}jQuery('html').removeClass(device_classes).addClass(device_class);var $handle=jQuery('#dokuwiki__aside h3.toggle');var $toc=jQuery('#dw__toc h3');if(device_class=='desktop'){if($handle.length){$handle[0].setState(1);$handle.hide();}if($toc.length){$toc[0].setState(1);}}if(device_class.match(/mobile/)){if($handle.length){$handle.show();$handle[0].setState(-1);}if($toc.length){$toc[0].setState(-1);}}}jQuery(function(){var resizeTimer;dw_page.makeToggle('#dokuwiki__aside h3.toggle','#dokuwiki__aside div.content');tpl_dokuwiki_mobile();jQuery(window).bind('resize',function(){if(resizeTimer)clearTimeout(resizeTimer);resizeTimer=setTimeout(tpl_dokuwiki_mobile,200);});var $sidebar=jQuery('.desktop #dokuwiki__aside');if($sidebar.length){var $content=jQuery('#dokuwiki__content div.page');$content.css('min-height',$sidebar.height());}});var dw_acl={init:function(){var $tree;if(jQuery('#acl_manager').length===0){return;}jQuery('#acl__user select').change(dw_acl.userselhandler);jQuery('#acl__user input[type=submit]').click(dw_acl.loadinfo);$tree=jQuery('#acl__tree');$tree.dw_tree({toggle_selector:'img',load_data:function(show_sublist,$clicky){var $frm=jQuery('#acl__detail form');jQuery.post(DOKU_BASE+'lib/exe/ajax.php',jQuery.extend(dw_acl.parseatt($clicky.parent().find('a')[0].search),{call:'plugin_acl',ajax:'tree',current_ns:$frm.find('input[name=ns]').val(),current_id:$frm.find('input[name=id]').val()}),show_sublist,'html');},toggle_display:function($clicky,opening){$clicky.attr('src',DOKU_BASE+'lib/images/'+(opening?'minus':'plus')+'.gif');}});$tree.delegate('a','click',dw_acl.treehandler);},userselhandler:function(){jQuery('#acl__user input').toggle(this.value==='__g__'||this.value==='__u__');dw_acl.loadinfo();},loadinfo:function(){jQuery('#acl__info').attr('role','alert').html('<img src="'+DOKU_BASE+'lib/images/throbber.gif" alt="..." />').load(DOKU_BASE+'lib/exe/ajax.php',jQuery('#acl__detail form').serialize()+'&call=plugin_acl&ajax=info');return false;},parseatt:function(str){if(str[0]==='?'){str=str.substr(1);}var attributes={};var all=str.split('&');for(var i=0;i<all.length;i++){var att=all[i].split('=');attributes[att[0]]=decodeURIComponent(att[1]);}return attributes;},treehandler:function(){var $link,$frm;$link=jQuery(this);jQuery('#acl__tree a.cur').removeClass('cur');$link.addClass('cur');$frm=jQuery('#acl__detail form');if($link.hasClass('wikilink1')){$frm.find('input[name=ns]').val('');$frm.find('input[name=id]').val(dw_acl.parseatt($link[0].search).id);}else if($link.hasClass('idx_dir')){$frm.find('input[name=ns]').val(dw_acl.parseatt($link[0].search).ns);$frm.find('input[name=id]').val('');}dw_acl.loadinfo();return false;}};jQuery(dw_acl.init);jQuery(function(){jQuery('#usrmgr__del').click(function(){return confirm(LANG.del_confirm);});});jQuery(function(){var $extmgr=jQuery('#extension__manager');$extmgr.find('input.uninstall').click(function(e){if(!window.confirm(LANG.plugins.extension.reallydel)){e.preventDefault();return false;}return true;});$extmgr.find('a.extension_screenshot').click(function(e){e.preventDefault();var image_href=jQuery(this).attr("href");var $lightbox=jQuery('#plugin__extensionlightbox');if(!$lightbox.length){$lightbox=jQuery('<div id="plugin__extensionlightbox"><p>Click to close</p><div></div></div>').appendTo(jQuery('body')).hide().click(function(){$lightbox.hide();});}$lightbox .show().find('div').html('<img src="'+image_href+'" />');return false;});$extmgr.find('input.disable, input.enable').click(function(e){e.preventDefault();var $btn=jQuery(this);var extension=$btn.attr('name').split('[')[2];extension=extension.substr(0,extension.length-1);var act=($btn.hasClass('disable'))?'disable':'enable';$btn.attr('disabled','disabled');$btn.css('cursor','wait');jQuery.get(DOKU_BASE+'lib/exe/ajax.php',{call:'plugin_extension',ext:extension,act:act},function(data){$btn.css('cursor','').removeAttr('disabled').removeClass('disable').removeClass('enable').val(data.label).addClass(data.reverse).parents('li').removeClass('disabled').removeClass('enabled').addClass(data.state);});});$extmgr.find('a.info').click(function(e){e.preventDefault();var $link=jQuery(this);var $details=$link.parent().find('dl.details');if($details.length){$link.toggleClass('close');$details.toggle();return;}$link.addClass('close');jQuery.get(DOKU_BASE+'lib/exe/ajax.php',{call:'plugin_extension',ext:$link.data('extid'),act:'info'},function(data){$link.parent().append(data);});});});jQuery(function(){dw_locktimer.init(840,1);});
