/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referring to this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'rutas\'">' + entity + '</span>' + html;
	}
	var icons = {
		'r-home': '&#xe600;',
		'r-pencil': '&#xe601;',
		'r-pencil2': '&#xe602;',
		'r-play': '&#xe603;',
		'r-book': '&#xe604;',
		'r-books': '&#xe605;',
		'r-file': '&#xe606;',
		'r-profile': '&#xe607;',
		'r-file2': '&#xe608;',
		'r-file3': '&#xe609;',
		'r-copy': '&#xe60a;',
		'r-folder': '&#xe60b;',
		'r-folder-open': '&#xe60c;',
		'r-support': '&#xe60d;',
		'r-address-book': '&#xe60e;',
		'r-envelope': '&#xe60f;',
		'r-pushpin': '&#xe610;',
		'r-map': '&#xe67a;',
		'r-map2': '&#xe67b;',
		'r-cabinet': '&#xe611;',
		'r-drawer': '&#xe612;',
		'r-drawer2': '&#xe613;',
		'r-undo': '&#xe614;',
		'r-redo': '&#xe615;',
		'r-binoculars': '&#xe616;',
		'r-zoomin': '&#xe617;',
		'r-zoomout': '&#xe618;',
		'r-expand': '&#xe619;',
		'r-contract': '&#xe61a;',
		'r-expand2': '&#xe61b;',
		'r-contract2': '&#xe61c;',
		'r-lock': '&#xe61d;',
		'r-unlocked': '&#xe61e;',
		'r-wrench': '&#xe61f;',
		'r-cog': '&#xe620;',
		'r-cogs': '&#xe621;',
		'r-cog2': '&#xe622;',
		'r-pie': '&#xe623;',
		'r-stats': '&#xe624;',
		'r-bars': '&#xe625;',
		'r-bars2': '&#xe626;',
		'r-signup': '&#xe627;',
		'r-menu': '&#xe67c;',
		'r-tree': '&#xe628;',
		'r-globe': '&#xe67d;',
		'r-earth': '&#xe67e;',
		'r-flag': '&#xe67f;',
		'r-star': '&#xe629;',
		'r-star2': '&#xe62a;',
		'r-star3': '&#xe62b;',
		'r-thumbs-up': '&#xe680;',
		'r-thumbs-up2': '&#xe681;',
		'r-happy': '&#xe62c;',
		'r-happy2': '&#xe62d;',
		'r-smiley': '&#xe62e;',
		'r-smiley2': '&#xe62f;',
		'r-tongue': '&#xe630;',
		'r-tongue2': '&#xe631;',
		'r-sad': '&#xe632;',
		'r-sad2': '&#xe633;',
		'r-wink': '&#xe634;',
		'r-wink2': '&#xe635;',
		'r-grin': '&#xe636;',
		'r-grin2': '&#xe637;',
		'r-cool': '&#xe638;',
		'r-cool2': '&#xe639;',
		'r-angry': '&#xe63a;',
		'r-angry2': '&#xe63b;',
		'r-evil': '&#xe63c;',
		'r-evil2': '&#xe63d;',
		'r-shocked': '&#xe63e;',
		'r-shocked2': '&#xe63f;',
		'r-confused': '&#xe640;',
		'r-confused2': '&#xe641;',
		'r-neutral': '&#xe642;',
		'r-neutral2': '&#xe643;',
		'r-wondering': '&#xe644;',
		'r-wondering2': '&#xe645;',
		'r-checkbox-unchecked': '&#xe646;',
		'r-checkbox-partial': '&#xe647;',
		'r-radio-checked': '&#xe648;',
		'r-radio-unchecked': '&#xe649;',
		'r-table': '&#xe682;',
		'r-mail': '&#xe64a;',
		'r-mail2': '&#xe64b;',
		'r-mail3': '&#xe64c;',
		'r-googleplus': '&#xe64d;',
		'r-facebook': '&#xe64e;',
		'r-twitter': '&#xe64f;',
		'r-skype': '&#xe650;',
		'r-stackoverflow': '&#xe683;',
		'r-file-pdf': '&#xe651;',
		'r-chrome': '&#xe652;',
		'r-firefox': '&#xe653;',
		'r-IE': '&#xe654;',
		'r-opera': '&#xe655;',
		'r-safari': '&#xe656;',
		'r-zoomin2': '&#xe657;',
		'r-zoomout2': '&#xe658;',
		'r-add': '&#xe659;',
		'r-subtract': '&#xe65a;',
		'r-users': '&#xe65b;',
		'r-globe2': '&#xe684;',
		'r-directions': '&#xe685;',
		'r-mail4': '&#xe65c;',
		'r-reply': '&#xe65d;',
		'r-reply-all': '&#xe65e;',
		'r-forward': '&#xe65f;',
		'r-thumbsup': '&#xe660;',
		'r-thumbsdown': '&#xe661;',
		'r-popup': '&#xe686;',
		'r-lifebuoy': '&#xe662;',
		'r-cone': '&#xe687;',
		'r-uniE688': '&#xe688;',
		'r-statistics': '&#xe689;',
		'r-pie2': '&#xe68a;',
		'r-bars3': '&#xe68b;',
		'r-graph': '&#xe68c;',
		'r-lock2': '&#xe68d;',
		'r-lock-open': '&#xe68e;',
		'r-logout': '&#xe663;',
		'r-login': '&#xe664;',
		'r-checkmark': '&#xe665;',
		'r-cross': '&#xe666;',
		'r-resize-enlarge': '&#xe667;',
		'r-resize-shrink': '&#xe668;',
		'r-flow-cascade': '&#xe68f;',
		'r-flow-branch': '&#xe690;',
		'r-flow-tree': '&#xe691;',
		'r-flow-line': '&#xe692;',
		'r-flow-parallel': '&#xe693;',
		'r-arrow-left': '&#xe669;',
		'r-arrow-down': '&#xe66a;',
		'r-arrow-up': '&#xe66b;',
		'r-arrow-right': '&#xe66c;',
		'r-arrow-left2': '&#xe66d;',
		'r-arrow-down2': '&#xe66e;',
		'r-arrow-up2': '&#xe66f;',
		'r-arrow-right2': '&#xe670;',
		'r-arrow-left3': '&#xe671;',
		'r-arrow-down3': '&#xe672;',
		'r-arrow-up3': '&#xe673;',
		'r-uniE674': '&#xe674;',
		'r-twitter2': '&#xe675;',
		'r-facebook2': '&#xe676;',
		'r-googleplus2': '&#xe677;',
		'r-tumblr': '&#xe678;',
		'r-skype2': '&#xe679;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/r-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());