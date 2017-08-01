<?php
require('config.php');

class PegasusHelper {
	
	function __construct() {
		
	}
	
	static function mime_to_ext($mime_type){
	$_mimetypes['application/acad'] 				= 'dwg';	#		AutoCAD
	$_mimetypes['application/applefile'] 		= ''; 		# 	AppleFile-Dateien
	$_mimetypes['application/astound'] 			= 'asd';	# 	*.asn 	Astound-Dateien
	$_mimetypes['application/dsptype']  		= 'tsp'; 	# 	TSP-Dateien
	$_mimetypes['application/dxf']		 			= 'dxf'; 	#		AutoCAD-Dateien (nach CERN)
	$_mimetypes['application/futuresplash'] = 'spl'; 	#		Flash Futuresplash-Dateien
	$_mimetypes['application/gzip'] 				= 'gz';	 	#		GNU Zip-Dateien
	$_mimetypes['application/listenup'] 		= 'ptlk'; #		Listenup-Dateien
	$_mimetypes['application/mac-binhex40']	= 'hqx'; 	#		Macintosh Bin�rdateien
	$_mimetypes['application/mbedlet'] 			= 'mbd'; 	#		Mbedlet-Dateien
	$_mimetypes['application/mif'] 					= 'mif'; 	#		FrameMaker Interchange Format Dateien
	$_mimetypes['application/msexcel'] 			= 'xls'; 	# 	*.xla 	Microsoft Excel Dateien
	$_mimetypes['application/mshelp'] 			= 'hlp'; 	# 	*.chm 	Microsoft Windows Hilfe Dateien
	$_mimetypes['application/mspowerpoint'] = 'ppt'; 	# 	*.ppz *.pps *.pot 	Microsoft Powerpoint Dateien
	$_mimetypes['application/msword'] 			= 'doc'; 	# 	*.dot 	Microsoft Word Dateien
	$_mimetypes['application/octet-stream'] = 'bin'; 	# 	*.exe *.com *.dll *.class 	Nicht n�her spezifizierte Bin�rdaten, z.B. ausf�hrbare Dateien
	$_mimetypes['application/oda'] 					= 'oda'; 	# 	Oda-Dateien
	$_mimetypes['application/pdf'] 					= 'pdf'; 	#		Adobe PDF-Dateien
	$_mimetypes['application/postscript'] 	= 'ai'; 	# 	*.eps *.ps 	Adobe PostScript-Dateien
	$_mimetypes['application/rtc'] 					= 'rtc'; 	#		RTC-Dateien
	$_mimetypes['application/rtf'] 					= 'rtf'; 	# 		Microsoft RTF-Dateien
	$_mimetypes['application/studiom'] 			= 'smp'; 	#		Studiom-Dateien
	$_mimetypes['application/toolbook'] 		= 'tbk'; 	#		Toolbook-Dateien
	$_mimetypes['application/vocaltec-media-desc'] 	= 'vmd'; 	#		Vocaltec Mediadesc-Dateien
	$_mimetypes['application/vocaltec-media-file'] 	= 'vmf'; 	#		Vocaltec Media-Dateien
	$_mimetypes['application/xhtml+xml'] 		= 'htm'; 	# *.html *.shtml *.xhtml 	XHTML-Dateien
	$_mimetypes['application/xml'] 			= 'xml'; 	#		XML-Dateien
	$_mimetypes['application/x-bcpio'] 		= 'bcpio'; 	# 		BCPIO-Dateien
	$_mimetypes['application/x-compress'] 		= 'z'; 		#		zlib-komprimierte Dateien
	$_mimetypes['application/x-cpio'] 		= 'cpio'; 	# 		CPIO-Dateien
	$_mimetypes['application/x-csh'] 		= 'csh'; 	#		C-Shellscript-Dateien
	$_mimetypes['application/x-director'] 		= 'dcr'; 	# *.dir *.dxr 	Macromedia Director-Dateien
	$_mimetypes['application/x-dvi'] 		= 'dvi'; 	#		DVI-Dateien
	$_mimetypes['application/x-envoy'] 		= 'evy'; 	#		Envoy-Dateien
	$_mimetypes['application/x-gtar'] 		= 'gtar'; 	# 		GNU tar-Archivdateien
	$_mimetypes['application/x-hdf'] 		= 'hdf'; 	#		HDF-Dateien
	$_mimetypes['application/x-httpd-php'] 		= 'php';	# *.phtml 	PHP-Dateien
	$_mimetypes['application/x-javascript'] 	= 'js'; 	#		serverseitige JavaScript-Dateien
	$_mimetypes['application/x-latex'] 		= 'latex'; 	#		LaTeX-Quelldateien
	$_mimetypes['application/x-macbinary'] 		= 'bin'; 	#		Macintosh Bin�rdateien
	$_mimetypes['application/x-mif'] 		= 'mif'; 	# 		FrameMaker Interchange Format Dateien
	$_mimetypes['application/x-netcdf'] 		= 'nc'; 	# *.cdf 	Unidata CDF-Dateien
	$_mimetypes['application/x-nschat'] 		= 'nsc'; 	# 		NS Chat-Dateien
	$_mimetypes['application/x-sh'] 	    	= 'sh'; 	#		Bourne Shellscript-Dateien
	$_mimetypes['application/x-shar'] 	    	= 'shar'; 	#		Shell-Archivdateien
	$_mimetypes['application/x-shockwave-flash'] 	= 'swf';	# *.cab Flash Shockwave-Dateien
	$_mimetypes['application/x-sprite'] 		= 'spr'; 	# *.sprite 	Sprite-Dateien
	$_mimetypes['application/x-stuffit'] 		= 'sit'; 	#		Stuffit-Dateien
	$_mimetypes['application/x-supercard'] 		= 'sca'; 	#		Supercard-Dateien
	$_mimetypes['application/x-sv4cpio'] 		= 'sv4cpio'; 	# 		CPIO-Dateien
	$_mimetypes['application/x-sv4crc'] 		= 'sv4crc'; 	# 		CPIO-Dateien mit CRC
	$_mimetypes['application/x-tar'] 	    	= 'tar'; 	#		tar-Archivdateien
	$_mimetypes['application/x-tcl'] 	   	= 'tcl'; 	#		TCL Scriptdateien
	$_mimetypes['application/x-tex'] 	    	= 'tex';	# 		TeX-Dateien
	$_mimetypes['application/x-texinfo'] 		= 'texinfo'; 	# *.texi 	Texinfo-Dateien
	$_mimetypes['application/x-troff'] 	    	= 't'; 		# *.tr *.roff 	TROFF-Dateien (Unix)
	$_mimetypes['application/x-troff-man'] 		= 'man'; 	# *.troff 	TROFF-Dateien mit MAN-Makros (Unix)
	$_mimetypes['application/x-troff-me'] 		= 'me'; 	# *.troff 	TROFF-Dateien mit ME-Makros (Unix)
	$_mimetypes['application/x-troff-ms'] 		= 'me'; 	# *.troff 	TROFF-Dateien mit MS-Makros (Unix)
	$_mimetypes['application/x-ustar'] 		= 'ustar'; 	# 		tar-Archivdateien (Posix)
	$_mimetypes['application/x-wais-source'] 	= 'src'; 	# 		WAIS Quelldateien
	$_mimetypes['application/x-www-form-urlencoded'] = '';		#  		HTML-Formulardaten an CGI
	$_mimetypes['application/zip'] 			= 'zip'; 	# 		ZIP-Archivdateien
	$_mimetypes['audio/basic'] 			= 'au'; 	# *.snd 	Sound-Dateien
	$_mimetypes['audio/echospeech'] 		= 'es'; 	#		Echospeed-Dateien
	$_mimetypes['audio/tsplayer'] 			= 'tsi'; 	# 		TS-Player-Dateien
	$_mimetypes['audio/voxware'] 			= 'vox'; 	# 		Vox-Dateien
	$_mimetypes['audio/x-aiff'] 			= 'aif'; 	# *.aiff *.aifc AIFF-Sound-Dateien
	$_mimetypes['audio/x-dspeeh'] 			= 'dus'; 	# *.cht 	Sprachdateien
	$_mimetypes['audio/x-midi'] 			= 'mid'; 	# *.midi 	MIDI-Dateien
	$_mimetypes['audio/x-mpeg'] 			= 'mp2'; 	#		MPEG-Dateien
	$_mimetypes['audio/x-pn-realaudio'] 		= 'ram'; 	# *.ra 		RealAudio-Dateien
	$_mimetypes['audio/x-pn-realaudio-plugin'] 	= 'rpm'; 	# 		RealAudio-Plugin-Dateien
	$_mimetypes['audio/x-qt-stream'] 		= 'stream'; 	# 		Quicktime-Streaming-Dateien
	$_mimetypes['audio/x-wav'] 			= 'wav'; 	#		WAV-Dateien
	$_mimetypes['drawing/x-dwf'] 			= 'dwf'; 	# 		Drawing-Dateien
	$_mimetypes['image/cis-cod'] 			= 'cod'; 	# 		CIS-Cod-Dateien
	$_mimetypes['image/cmu-raster'] 		= 'ras'; 	#		CMU-Raster-Dateien
	$_mimetypes['image/fif'] 			= 'fif'; 	# 		FIF-Dateien
	$_mimetypes['image/gif'] 			= 'gif'; 	#		GIF-Dateien
	$_mimetypes['image/ief'] 			= 'ief'; 	#		IEF-Dateien
	$_mimetypes['image/jpeg'] 			= 'jpg';     	# *.jpeg *.jpe 	JPEG-Dateien
	$_mimetypes['image/png'] 			= 'png'; 	# 		PNG-Dateien
	$_mimetypes['image/tiff'] 			= 'tif';        # *.tiff  	TIFF-Dateien
	$_mimetypes['image/vasa'] 			= 'mcf'; 	# 		Vasa-Dateien
	$_mimetypes['image/vnd.wap.wbmp'] 		= 'wbmp'; 	# 		Bitmap-Dateien (WAP)
	$_mimetypes['image/x-freehand'] 		= 'fh4'; 	# *.fh5 *.fhc 	Freehand-Dateien
	$_mimetypes['image/x-icon'] 			= 'ico'; 	# 		Icon-Dateien (z.B. Favoriten-Icons)
	$_mimetypes['image/x-portable-anymap'] 		= 'pnm'; 	# 		PBM Anymap Dateien
	$_mimetypes['image/x-portable-bitmap'] 		= 'pbm'; 	# 		PBM Bitmap Dateien
	$_mimetypes['image/x-portable-graymap'] 	= 'pgm'; 	# 		PBM Graymap Dateien
	$_mimetypes['image/x-portable-pixmap'] 		= 'ppm'; 	# 		PBM Pixmap Dateien
	$_mimetypes['image/x-rgb'] 			= 'rgb'; 	# 		RGB-Dateien
	$_mimetypes['image/x-windowdump'] 		= 'xwd'; 	# 		X-Windows Dump
	$_mimetypes['image/x-xbitmap'] 			= 'xbm'; 	# 		XBM-Dateien
	$_mimetypes['image/x-xpixmap'] 			= 'xpm'; 	# 		XPM-Dateien
	$_mimetypes['message/external-body'] 		= ''; 		# 		Nachricht mit externem Inhalt
	$_mimetypes['message/http'] 	  		= '';		# 		HTTP-Headernachricht
	$_mimetypes['message/news'] 	  		= '';		# 		Newsgroup-Nachricht
	$_mimetypes['message/partial'] 	  		= '';		# 		Nachricht mit Teilinhalt
	$_mimetypes['message/rfc822'] 	  		= '';		# 		Nachricht nach RFC 2822
	$_mimetypes['model/vrml'] 			= 'wrl'; 	# 		Visualisierung virtueller Welten (VRML)
	$_mimetypes['multipart/alternative'] 		= '';  		# 		mehrteilige Daten gemischt
	$_mimetypes['multipart/byteranges'] 		= '';  		# 		mehrteilige Daten mit Byte-Angaben
	$_mimetypes['multipart/digest'] 	  	= '';		# 		mehrteilige Daten / Auswahl
	$_mimetypes['multipart/encrypted'] 	  	= '';		# 		mehrteilige Daten verschl�sselt
	$_mimetypes['multipart/form-data'] 	  	= '';		# 		mehrteilige Daten aus HTML-Formular (z.B. File-Upload)
	$_mimetypes['multipart/mixed'] 	  		= '';		# 		mehrteilige Daten gemischt
	$_mimetypes['multipart/parallel'] 	  	= '';		# 		mehrteilige Daten parallel
	$_mimetypes['multipart/related'] 	  	= '';		# 		mehrteilige Daten / verbunden
	$_mimetypes['multipart/report'] 	  	= '';		# 		mehrteilige Daten / Bericht
	$_mimetypes['multipart/signed'] 	  	= '';		# 		mehrteilige Daten / bezeichnet
	$_mimetypes['multipart/voice-message'] 		= '';  		# 		mehrteilige Daten / Sprachnachricht
	$_mimetypes['text/comma-separated-values'] 	= 'csv'; 	# 		kommaseparierte Datendateien
	$_mimetypes['text/css'] 			= 'css'; 	# 		CSS Stylesheet-Dateien
	$_mimetypes['text/html'] 			= 'htm'; 	# *.html *.shtml 	HTML-Dateien
	$_mimetypes['text/javascript'] 			= 'js';		# 		JavaScript-Dateien
	$_mimetypes['text/plain'] 			= 'txt'; 	# 		reine Textdateien
	$_mimetypes['text/richtext'] 			= 'rtx'; 	# 		Richtext-Dateien
	$_mimetypes['text/rtf'] 			= 'rtf';	# 		Microsoft RTF-Dateien
	$_mimetypes['text/x-php'] 			= 'php';	# 		PHP-Script-Dateien
	$_mimetypes['text/tab-separated-values'] 	= 'tsv'; 	# 		tabulator-separierte Datendateien
	$_mimetypes['text/vnd.wap.wml'] 		= 'wml'; 	# 		WML-Dateien (WAP)
	$_mimetypes['application/vnd.wap.wmlc'] 	= 'wmlc'; 	# 		WMLC-Dateien (WAP)
	$_mimetypes['text/vnd.wap.wmlscript'] 		= 'wmls'; 	# 		WML-Scriptdateien (WAP)
	$_mimetypes['application/vnd.wap.wmlscriptc'] 	= 'wmlsc'; 	# 		WML-Script-C-dateien (WAP)
	$_mimetypes['text/xml'] 			= 'xml'; 	# 		XML-Dateien
	$_mimetypes['text/xml-external-parsed-entity']  = ''; 		# 		extern geparste XML-Dateien
	$_mimetypes['text/x-setext'] 			= 'etx'; 	# 		SeText-Dateien
	$_mimetypes['text/x-sgml'] 			= 'sgm'; 	# *.sgml 	SGML-Dateien
	$_mimetypes['text/x-speech'] 			= 'talk'; 	# *.spc 	Speech-Dateien
	$_mimetypes['video/mpeg'] 			= 'mpeg'; 	# *.mpg *.mpe 	MPEG-Dateien
	$_mimetypes['video/quicktime'] 			= 'qt'; 	# *.mov 	Quicktime-Dateien
	$_mimetypes['video/vnd.vivo'] 			= 'viv'; 	# *.vivo 	Vivo-Dateien
	$_mimetypes['video/x-msvideo'] 			= 'avi'; 	# Microsoft AVI-Dateien
	$_mimetypes['video/x-sgi-movie'] 		= 'movie'; 	# Movie-Dateien
	$_mimetypes['workbook/formulaone'] 		= 'vts'; 	# *.vtts 	FormulaOne-Dateien
	$_mimetypes['x-world/x-3dmf'] 			= '3dmf'; 	# *.3dm *.qd3d *.qd3 	3DMF-Dateien
	$_mimetypes['x-world/x-vrml'] 			= 'wrl';	# ?

        ### hier propriet�re MIME-Types einf�gen
	
	if (isset($_mimetypes[$mime_type]))
	{
		return $_mimetypes[$mime_type];
	}
 
	return false;
	}
	

}

?>