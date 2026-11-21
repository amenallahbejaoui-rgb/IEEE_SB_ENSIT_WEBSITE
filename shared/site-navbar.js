(function () {
	"use strict";

	const currentScript = document.currentScript;
	const scriptUrl = new URL(currentScript.src);
	const rootUrl = new URL("../", scriptUrl);
	const cssUrl = new URL("site-navbar.css", scriptUrl);

	if (!document.querySelector('link[href="' + cssUrl.href + '"], link[data-site-navbar-css]')) {
		const link = document.createElement("link");
		link.rel = "stylesheet";
		link.href = cssUrl.href;
		link.dataset.siteNavbarCss = "true";
		document.head.appendChild(link);
	}

	function rootPath(path) {
		return new URL(path, rootUrl).href;
	}

	const chapters = [
		["AESS", "Aerospace & Electronic Systems", "chapters/aess/aess.html", "chapters/aess/images/logo.png"],
		["VTS", "Vehicular Technology Society", "chapters/vts/vts.html", "chapters/vts/vts.png"],
		["IASxPES", "Industry, Electronics & Energy", "chapters/iasxpes/iasxpes.html", "chapters/iasxpes/logo_IAS_PES_IES_white.png"],
		["RAS", "Robotics & Automation Society", "chapters/ras/ras.html", "chapters/ras/IMG_3431.PNG"],
		["WIE", "Women in Engineering", "chapters/wie/wie.html", "chapters/wie/logo wie .png"],
		["SIGHT", "Humanitarian Technology", "chapters/sight/sight.html", "public/logos/logo_SIGHT.png"],
		["CS", "Computer Society", "chapters/cs/cs.html", "public/logos/logo_global orange cs.png"]
	];

	const existing = document.querySelector(
		"body > header:not(.galleryHeader):not(.galleryFilters):not(.joinusNav):not(.siteNav), body > nav:not(.galleryFilters):not(.siteNavLinks), body > header.navbar, body > nav.navbar, body > header.csNav, body > header.joinusNav, body > header.siteNavLegacy, body > header.nav, .scene > .nav, .nav"
	);

	if (existing) {
		existing.remove();
	}

	const header = document.createElement("header");
	header.className = "siteNav";
	header.setAttribute("aria-label", "Main navigation");

	const brand = document.createElement("a");
	brand.className = "siteNavBrand";
	brand.href = rootPath("home/home.html");
	brand.setAttribute("aria-label", "IEEE SB ENSIT home");

	const logo = document.createElement("img");
	logo.className = "siteNavLogo";
	logo.src = rootPath("public/logo white sb.png");
	logo.alt = "IEEE ENSIT Student Branch";

	const brandLabel = document.createElement("span");
	brandLabel.className = "siteNavBrandLabel";
	brandLabel.textContent = "IEEE ENSIT";
	brand.append(logo, brandLabel);

	const nav = document.createElement("nav");
	nav.className = "siteNavLinks";
	nav.setAttribute("aria-label", "Primary navigation");

	const normalLinks = [
		["Home", "home/home.html"],
		["About", "home/home.html#about"],
		["Events", "home/home.html#events"],
		["Gallery", "gallerie/gallery.html"]
	];

	normalLinks.forEach(([label, path]) => {
		const link = document.createElement("a");
		link.textContent = label;
		link.href = rootPath(path);
		nav.appendChild(link);
	});

	const dropdown = document.createElement("div");
	dropdown.className = "siteNavDropdown";

	const trigger = document.createElement("span");
	trigger.className = "siteNavDropdownTrigger";
	trigger.tabIndex = 0;
	trigger.append(document.createTextNode("Chapters "));

	const chevron = document.createElement("span");
	chevron.className = "siteNavChevron";
	chevron.setAttribute("aria-hidden", "true");
	chevron.textContent = "⌄";
	trigger.appendChild(chevron);

	const menu = document.createElement("div");
	menu.className = "siteNavDropdownMenu";
	menu.setAttribute("role", "menu");

	chapters.forEach(([name, description, page, image]) => {
		const link = document.createElement("a");
		link.className = "siteNavChapterItem";
		link.href = rootPath(page);
		link.setAttribute("role", "menuitem");

		const img = document.createElement("img");
		img.src = rootPath(image);
		img.alt = "";

		const text = document.createElement("span");
		const strong = document.createElement("strong");
		strong.textContent = name;
		const small = document.createElement("small");
		small.textContent = description;
		text.append(strong, small);
		link.append(img, text);
		menu.appendChild(link);
	});

	dropdown.append(trigger, menu);
	nav.appendChild(dropdown);

	const join = document.createElement("a");
	join.className = "siteNavCta";
	join.href = rootPath("joinus/joinus.html");
	join.append(document.createTextNode("Join us "));
	const arrow = document.createElement("span");
	arrow.setAttribute("aria-hidden", "true");
	arrow.textContent = "↗";
	join.appendChild(arrow);
	nav.appendChild(join);

	header.append(brand, nav);
	document.body.insertBefore(header, document.body.firstChild);
})();
