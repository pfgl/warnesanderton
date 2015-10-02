/*
 * Image preview script
 * powered by jQuery (http://www.jquery.com)
 *
 * written by Alen Grakalic (http://cssglobe.com)
 *
 * for more info visit http://cssglobe.com/post/1695/easiest-tooltip-and-image-preview-using-jquery
 *
 */

this.imagePreview = function(){
	/* CONFIG */

		xOffset = -100;
		yOffset = 10;

		// these 2 variable determine popup's distance from the cursor
		// you might want to adjust to get the right result

	/* END CONFIG */
	$("a.preview").hover(function(e){
		this.t = this.title;
		this.title = "";
		var c = (this.t != "") ? "<br/>" + this.t : "";
		$("body").append("<p id='preview'><img src='"+ this.href +"' alt='Image preview' />"+ c +"</p>");
		$("#preview")
			.css("top",(e.pageY + yOffset) + "px")
			.css("left",(e.pageX + xOffset) + "px")
			.fadeIn("fast");
	},function(){
		this.title = this.t;
		$("#preview").remove();
    });

	// Set initial location
	$("#ifa-details").html(
	"<img src='/wp-content/themes/perspective/images/ifa-logos/pfgl.jpg' /><h3>Perspective Group</h3><address><p>Paradigm House<br />Brooke Court<br />Lower Meadow Road<br />Wilmslow<br />SK9 3ND</p></address><p><strong>Tel:</strong> 0845 688 1454<br /><a href='/enquire'>Contact Us</a></p>"
	);

	$("#perspective-group.bullet").addClass('active');

	$("a.preview").mousemove(function(e){
		$("#preview")
			.css("top",(e.pageY + yOffset) + "px")
			.css("left",(e.pageX + xOffset) + "px");
	});

	$("a.preview").click(function(e){
		e.preventDefault();

		$("a.preview").removeClass('active');
		$(this).addClass('active');

		var idclicked = $(this).attr('id');

		$("#ifa-details").fadeOut(500, function(){
			changeIfa(idclicked);
		});
		$("#ifa-details").show("fade", {}, 500);

		function changeIfa(ifa){
			if (ifa == "rutherford-wilkinson") {
				$("#ifa-details").html(
				"<img src='/wp-content/themes/perspective/images/ifa-logos/rw.jpg' alt='rw' /><h3>Rutherford Wilkinson Ltd</h3><address><p>Northumbria House 21 - 23 Brenkley Way<br />Blezard Business Park<br /> Newcastle upon Tyne<br /> NE13 6DS</p></address><p><strong>Tel:</strong> 0191 217 3340<br /><a href='http://www.rwpfg.co.uk'>www.rwpfg.co.uk</a></p>"
				);
			}
			else if (ifa == "harrogate-independant") {
				$("#ifa-details").html(
				"<img src='/wp-content/themes/perspective/images/ifa-logos/harrogate.gif' alt='Harrogate Financial Solutions Ltd' /><h3>Harrogate Financial Solutions Ltd</h3><address><p>51-53 East Parade<br />Harrogate<br />North Yorkshire<br />HG1 5LQ</p></address><p><strong>Tel:</strong> 01423 705020</p>"
				);
			}
			else if (ifa == "multiplex") {
				$("#ifa-details").html(
				"<img src='/wp-content/themes/perspective/images/ifa-logos/multiplex.jpg' /><h3>Multiplex</h3><address><p>Booths Park No 1<br />Booths Park<br />Chelford Road<br />Knutsford<br />Cheshire<br />WA16 8GS</p></address><p><strong>Tel:</strong> 01565 756199<br/><a href='www.multiplex.org.uk'>www.multiplex.org.uk</a></p>"
				);
			}
			else if (ifa == "perspective-group") {
				$("#ifa-details").html(
				"<img src='/wp-content/themes/perspective/images/ifa-logos/pfgl.jpg' /><h3>Perspective Group</h3><address><p>Paradigm House<br />Brooke Court<br />Lower Meadow Road<br />Wilmslow<br />SK9 3ND</p></address><p><strong>Tel:</strong> 0845 688 1454<br /><a href='/enquire'>Contact Us</a></p>"
				);
			}
			else if (ifa == "warnes-anderton") {
				$("#ifa-details").html(
				"<h3>Warnes Anderton</h3><address><p>1 Great House<br />Waterside Business Park<br />Redwall Close<br />Dinnington<br />Sheffield<br />S25 3QA</p></address><p><strong>Tel:</strong> 01909 560 677</p>"
				);
			}
			else if (ifa == "mcgregors") {
			$("#ifa-details").html(
					"<img src='/wp-content/themes/perspective/images/ifa-logos/mcgregors.jpg' /><h3>McGregors Wealth Management</h3><address><p>Unit 8, Checkpoint Court<br />Sadler Road<br />Lincoln<br />LN6 3PW</p></address><p><strong>Tel:</strong> 0191 217 3340</p>"
				);
			}
			else if (ifa == "cambridge-investments") {
				$("#ifa-details").html(
					"<img src='/wp-content/themes/perspective/images/ifa-logos/cambridge.jpg' /><h3>Cambridge Investments Limited</h3><address><p>Authorised Discretionary Investment Managers<br />Threadneedle House<br />19-21 George IV Street<br />Cambridge<br />CB2 1HH<br /></address><p><strong>Tel:</strong> 01223 365656<br /><a href='htp://www.cambridgeinvestments.co.uk'>www.cambridgeinvestments.co.uk</a></p>"
				);
			}
			else if (ifa == "applewood1") {
				$("#ifa-details").html(
					"<img src='/wp-content/themes/perspective/images/ifa-logos/applewood.jpg' alt='rw' /><h3>Applewood Wealth Management Ltd</h3><address><p>Hilliards Court<br />Chester Business Park<br />Chester<br />Cheshire<br />CH4 9QP</p></address><p><strong>Tel:</strong> 01244 680314<br /><a href='http://www.applewood.co.uk'>www.applewood.co.uk</a></p>"
				);
			}
			else if (ifa == "applewood2") {
				$("#ifa-details").html(
					"<img src='/wp-content/themes/perspective/images/ifa-logos/applewood.jpg' alt='rw' /><h3>Applewood Wealth Management Ltd</h3><address><p>Belgrave Place<br />17 Salop Road<br />Oswestry<br />Shropshire<br />SY11 2NR</p></address><p><strong>Tel:</strong> 01691 671903<br /><a href='http://www.applewood.co.uk'>www.applewood.co.uk</a></p>"
				);
			}
			else if (ifa == "wingham-wyatt") {
				$("#ifa-details").html(
					"<img src='/wp-content/themes/perspective/images/ifa-logos/wingham-wyatt.jpg' /><h3>Wingham Wyatt Financial Services Ltd</h3><address><p>Winghams House<br />9 Freeport Office Village<br />Century Drive<br />Braintree<br />Esses<br />CM77 8YG</p></address><p><strong>Tel:</strong> 01376 331800<br /><a href='htp://www.winghams.co.uk'>www.winghams.co.uk</a></p>"
				);
			}
			else if (ifa == "perspective-financial") {
				$("#ifa-details").html(
					"<img src='/wp-content/themes/perspective/images/ifa-logos/perspective.gif' /><h3>Perspective Financial Management Ltd</h3><address><p>The Old Library<br />24 Walker Avenue<br />Wolverton Mill<br />Milton Keynes<br />MK12 5TW</p></address><p><strong>Tel:</strong> 01908 579665<br /><a href='http://www.perspective-group.com'>www.perspective-group.com</a>"
				);
			}
			else if (ifa == "chambers-co") {
				$("#ifa-details").html(
					"<h3>Chambers & Co</h3><address><p>130 New London Road<br />Chelmsford<br />Essex<br />CM2 0RG</p></address><p><strong>Tel:</strong> 01245 345 906‎</p>"
				);
			}
			else if (ifa == "chessman-partners") {
				$("#ifa-details").html(
					"<h3>Chessman & Partners Ltd</h3><address><p>4-10 Red Lion St<br />Chesham<br />Buckinghamshire<br />HP5 1HF</p></address><p><strong>Tel:</strong> 01494 778199<br /><a href='http://www.chessmanandpartners.co.uk'>www.chessmanandpartners.co.uk</a></p>"
				);
			}
			else if (ifa == "charles-reynolds-associates") {
				$("#ifa-details").html(
					"<img src='/wp-content/themes/perspective/images/ifa-logos/cra.jpg' /><h3>Charles Reynolds Associates</h3><address><p>Suite 1, Associates House<br />118 East Barnet Road<br />New Barnet<br />Herfordshire<br/>EN4 8RE</address><p><strong>Tel:</strong> 020 8441 6777<br /><a href='http://www.cragroup.co.uk'>www.cragroup.co.uk</a></p>"
				);
			}
			else if (ifa == "pims") {
				$("#ifa-details").html(
					"<img src='/wp-content/themes/perspective/images/ifa-logos/pims.jpg' /><h3>Professional Investment Management Services (Maidstone) Ltd</h3><address><p>7-8 Romney Place<br />Maidstone<br />Kent<br />ME15 6LE</p></address><p><strong>Tel:</strong> 01622 750426<br /><a href=http://www.pims-online.co.uk'>www.pims-online.co.uk</a></p>"
				);
			}
			else if (ifa == "platinum-portfolios") {
				$("#ifa-details").html(
					"<img src='/wp-content/themes/perspective/images/ifa-logos/platinum.jpg' /><h3>Platinum Portfolios</h3><address><p>Dyke House<br />110 South Street<br />Eastbourne<br />East Sussex<br />BN21 4LB</p></address><p><strong>Tel:</strong> 01323 642568<br /><a href='http://www.platinumportfolios.co.uk'>www.platinumportfolios.co.uk</a></p>"
				);
			}
			else if (ifa == "equilibrium") {
				$("#ifa-details").html(
					"<img src='/wp-content/themes/perspective/images/ifa-logos/equilibrium.jpg' /><h3>Equilibrium Wealth Management Limited</h3><address><p>Equilibrium House<br />1 Pelhams Court<br />London Road<br />Marlborough<br />SN8 2AG</p></address><p><strong>Tel:</strong>  0845 345 1979<br /><a href='http://www.equilibrium.tppowered.com'>www.equilibrium.tppowered.com</a></p>"
				);
			}
			else if (ifa == "leedham") {
				$("#ifa-details").html(
					"<img src='/wp-content/themes/perspective/images/ifa-logos/leedham.jpg' /><h3>Leedham Independent Financial Advisers Limited</h3><address><p>Stafford House<br />23 Chorley Old Road<br />Bolton<br />BL1 3AD</p></address><p><strong>Tel:</strong>  01204 366 522<br /><a href='http://www.leedham-ifa.co.uk'>www.leedham-ifa.co.uk</a></p>"
				);
			}
		}
	});
};


// starting the script on page load
$(document).ready(function(){
	imagePreview();
});
