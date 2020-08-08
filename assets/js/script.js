var Info = {
	ww: 0,
	wh: 0,
	windowY: 0,
	mobile: false,
}
new Array(1000000);
document.addEventListener('DOMContentLoaded', function(){
	Info.windowY = (window.pageYOffset || document.documentElement.scrollTop || window.scrollY);
	Info.ww = window.innerWidth;
	Info.wh = window.innerHeight;
	if (Info.ww < 1023) Info.mobile = true;
	initLangBtn();
	initReviews();
	initPageNav();
	initAllproducts();
	initPalms();
	if (Info.mobile) {
		initAdvantagesSlider();
		initAssortimentSlider();
		initAllproductsSlider();
	} else {
		initProdSlider();
	}
});

window.onresize = function() {
	resizeLangBtn();
	resizeAllproducts();
}

/*----------B-LangBtn----------*/
var Langs = {
	elem: false,
	opened: false,
	count: 0,
	closedH: 0,
	openedH: 0,
}
function initLangBtn() {
	Langs.elem = document.getElementById("toplang");
	Langs.count = Langs.elem.childElementCount;
	console.log("Langs.count", Langs.count);
	resizeLangBtn();
	Langs.elem.addEventListener("click", function() {
		if (Langs.opened) {
			Langs.elem.classList.remove("active");
			Langs.elem.style.height = Langs.closedH + "px";
			Langs.opened = false;
		} else {
			Langs.elem.classList.add("active");
			Langs.elem.style.height = Langs.openedH + "px";
			Langs.opened = true;
		}
	});
	jQuery(function($){
    $(document).mouseup(function (e){
	    var block = $("#toplang");
			if (!block.is(e.target)) {
				if (Langs.opened) {
					Langs.elem.classList.remove("active");
					Langs.elem.style.height = Langs.closedH + "px";
					Langs.opened = false;
				}
			}
	    });
	});
}
function resizeLangBtn() {
	Langs.closedH = Info.ww * 0.0234375;
	Langs.openedH = Langs.count * Info.ww * 0.0234375;
}
/*----------B-LangBtn----------*/










/*----------B-A----------*/
window.onscroll = function() {
	Info.windowY = (window.pageYOffset || document.documentElement.scrollTop || window.scrollY);
	pageNavScroll();
	var snowY = -Info.windowY / 6 + "px " + Info.windowY / 4 + "px";
	document.getElementById("advantages").style.backgroundPosition = ( snowY );
	document.getElementById("snow-makeorder").style.backgroundPosition = ( snowY );
}
/*----------E-A----------*/









/*----------B-Reviews----------*/
function initReviews() {
	$('.reviews-slider').slick({
		// arrows: false,
		// centerMode: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		adaptiveHeight: false,
		autoplay: false,
		autoplaySpeed: 3000,
		focusOnSelect: true,
		prevArrow: '<div class="slider-nav slider-prev" id="reviews-slider-prev"></div>',
		nextArrow: '<div class="slider-nav slider-next" id="reviews-slider-next"></div>',
	});
}
/*----------B-Reviews----------*/










/*----------B-PageNav----------*/
var PageNav = {
	h1: 'Top',
	h2: false,
	h2Count: false,
	navHTML: '<a class="pagelink" href="#header">Top</a>',
	sections: [],
	tops: [],
	whichActive: 0,
	firstTime: true,
	topCorrector: 0,
	viewCorrector: 0,
}
function initPageNav() {
	PageNav.h2 = document.getElementsByTagName("h2");
	PageNav.h2Count = PageNav.h2.length;
	for (var i = 0; i < PageNav.h2Count; i++) {
		PageNav.navHTML += ('<a class="pagelink" href="#' + 
			PageNav.h2[i].parentNode.getAttribute('id') + '">' +  PageNav.h2[i].innerHTML + '</a>');
	}
	document.getElementById("pagenav").innerHTML = PageNav.navHTML;
	PageNav.sections.push(document.getElementsByTagName("header")[0]);
	for (var i = 0; i < document.getElementsByTagName("section").length; i++) {
		PageNav.sections.push(document.getElementsByTagName("section")[i]);
	}
	PageNav.topCorrector = -PageNav.sections[0].getBoundingClientRect().top;
	PageNav.viewCorrector = Info.wh / 2;
	PageNav.tops.push( [PageNav.sections[0].getBoundingClientRect().top + PageNav.topCorrector - PageNav.viewCorrector, 
			PageNav.sections[0].getBoundingClientRect().top + PageNav.topCorrector + PageNav.sections[0].getBoundingClientRect().height - PageNav.viewCorrector] )
	for (var i = 1; i < PageNav.sections.length; i++) {
		PageNav.tops.push( [PageNav.sections[i].getBoundingClientRect().top + PageNav.topCorrector - PageNav.viewCorrector, 
			PageNav.sections[i].getBoundingClientRect().top + PageNav.topCorrector + PageNav.sections[i].getBoundingClientRect().height - PageNav.viewCorrector] );
	}
	pageNavScroll();
}
function pageNavScroll() {
	for (var i = 0; i < PageNav.tops.length; i++) {
		if (Info.windowY >= PageNav.tops[i][0] && Info.windowY < PageNav.tops[i][1]) {
			if (PageNav.whichActive !== i) {
				if (PageNav.firstTime) {
					PageNav.whichActive = i;
					document.getElementsByClassName("pagelink")[i].classList.add("active");
					PageNav.firstTime = false;
				} else {
					document.getElementsByClassName("pagelink")[PageNav.whichActive].classList.remove("active");
					PageNav.whichActive = i;
					document.getElementsByClassName("pagelink")[i].classList.add("active");
				}
			}
		}
	}
}
/*----------B-PageNav----------*/










/*----------B-A----------*/
var ProdSlider = {
	imgs: false,
	url: [],
	change: {
		prev: 0,
		next: 0,
		elem: false,
		blocked: false,
	},
	btnElems: false,
	textElems: false,
	circle: false,
	setTimeout: false,
}
function initProdSlider() {
	ProdSlider.imgs = document.getElementsByClassName("allproducts-img");
	ProdSlider.btnElems = document.getElementsByClassName("allproducts-btn");
	ProdSlider.textElems = document.getElementsByClassName("allproducts-description");
	ProdSlider.circle = document.getElementById("allproducts-circle");
	for (var i = 0; i < ProdSlider.imgs.length; i++) {
		ProdSlider.url.push( ProdSlider.imgs[i].getAttribute("src") );
	}
	for (var i = 0; i < ProdSlider.imgs.length; i++) {
		ProdSlider.btnElems[i].setAttribute("onclick", "changeProdSlider("+i+")")
	}
	ProdSlider.change.elem = document.getElementById("allproducts-preview-img");
	ProdSlider.change.elem.style.backgroundImage = "url(" + ProdSlider.url[0] + ")";
	ProdSlider.circle.style.animationName = "circle";
	// ProdSlider.textElems[0].classList.add("active");
	ProdSlider.timeout = setTimeout(function(){
		ProdSlider.change.next++;
		if (ProdSlider.change.next >= ProdSlider.imgs.length) {
			ProdSlider.change.next = 0;
		}
		changeProdSlider(ProdSlider.change.next)
	}, 10000);
}
function mobileInitProdSlider() {
	ProdSlider.imgs = document.getElementsByClassName("allproducts-img");
	ProdSlider.btnElems = document.getElementsByClassName("allproducts-btn");
	ProdSlider.textElems = document.getElementsByClassName("allproducts-description");
	ProdSlider.circle = document.getElementById("allproducts-circle");
	ProdSlider.change.elem = document.getElementById("allproducts-preview-img");
}
function changeProdSlider(num) {
	if (ProdSlider.change.blocked) return;
	clearTimeout(ProdSlider.timeout);
	ProdSlider.change.blocked = true;
	ProdSlider.circle.style.animationName = "none";
	setTimeout(function(){ProdSlider.change.blocked = false}, 420);
	setTimeout(function(){ProdSlider.circle.style.animationName = "circle"}, 10);
	ProdSlider.btnElems[ProdSlider.change.prev].classList.remove("active");
	ProdSlider.textElems[ProdSlider.change.prev].classList.remove("active");
	ProdSlider.btnElems[num].classList.add("active");
	ProdSlider.textElems[num].classList.add("active");

	ProdSlider.change.prev = num;
	ProdSlider.change.next = ProdSlider.change.prev;
	ProdSlider.change.elem.style.backgroundImage = "url(" + ProdSlider.url[num] + ")";
	ProdSlider.timeout = setTimeout(function(){
		ProdSlider.change.next++;
		if (ProdSlider.change.next >= ProdSlider.imgs.length) {
			ProdSlider.change.next = 0;
		}
		changeProdSlider(ProdSlider.change.next)
	}, 10000);
}
/*----------E-A----------*/









/*----------B-A----------*/
function initAdvantagesSlider() {
	$("#advantages-slider").slick({
		// arrows: false,
		// centerMode: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		adaptiveHeight: false,
		autoplay: false,
		autoplaySpeed: 3000,
		focusOnSelect: true,
		// arrows: false,
		infinite: false,
		dots: true,
		prevArrow: '<div class="slider-nav slider-prev" id="advantages-slider-prev"></div>',
		nextArrow: '<div class="slider-nav slider-next" id="advantages-slider-next"></div>',
	});
}
function initAssortimentSlider() {
	$("#assortiment-row").slick({
		// arrows: false,
		// centerMode: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: false,
		autoplaySpeed: 3000,
		focusOnSelect: true,
		// arrows: false,
		dots: true,
		prevArrow: '<div class="slider-nav slider-prev" id="assortiment-slider-prev"></div>',
		nextArrow: '<div class="slider-nav slider-next" id="assortiment-slider-next"></div>',
	});
}
/*----------E-A----------*/









/*----------B-A----------*/
var Allproducts = {
	descriptionSize: {
		height: 0,
		elems: false,
		length: 0,
		elem:false,
	}
}
function initAllproducts() {
	Allproducts.descriptionSize.elems = document.getElementsByClassName("allproducts-description");
	Allproducts.descriptionSize.length = Allproducts.descriptionSize.elems.length;
	Allproducts.descriptionSize.elem = document.getElementById("allproducts-description-outer");
	resizeAllproducts();
}
function resizeAllproducts() {
	for (var i = 0; i < Allproducts.descriptionSize.length; i++) {
		if (Allproducts.descriptionSize.height < Allproducts.descriptionSize.elems[i].getBoundingClientRect().height) {
			Allproducts.descriptionSize.height = Allproducts.descriptionSize.elems[i].getBoundingClientRect().height;
		}
	}
	Allproducts.descriptionSize.elem.style.height = Allproducts.descriptionSize.height + "px";
}
function initAllproductsSlider() {
	mobileInitProdSlider();
	$("#allproducts-list").slick({
		// arrows: false,
		// centerMode: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 10000,
		focusOnSelect: true,
		prevArrow: '<div class="slider-nav slider-prev" id="allproducts-slider-prev"></div>',
		nextArrow: '<div class="slider-nav slider-next" id="allproducts-slider-next"></div>',
	});
	$('#allproducts-list').on('beforeChange', function(event, slick, currentSlide, nextSlide){
		changeProdSlider(nextSlide);
	});
}
/*----------E-A----------*/









/*----------B-A----------*/
$("#callback-btn").click(function() {
	document.getElementById("eclipse").classList.add("active");
	document.getElementById("callback-form-outer").classList.add("active");
	document.body.classList.add("noscroll");
});
$("#eclipse, .close-form").click(function() {
	document.getElementById("eclipse").classList.remove("active");
	document.getElementById("callback-form-outer").classList.remove("active");
	document.getElementById("feedback-form-outer").classList.remove("active");
	document.getElementById("modal-certificates").classList.remove("active");
	document.getElementById("whatsapp-form-outer").classList.remove("active");
	document.body.classList.remove("noscroll");
});
$("#open-feedback-form").click(function() {
	document.getElementById("eclipse").classList.add("active");
	document.getElementById("feedback-form-outer").classList.add("active");
	document.body.classList.add("noscroll");
});
$("#open-certificates").click(function() {
	document.getElementById("eclipse").classList.add("active");
	document.getElementById("modal-certificates").classList.add("active");
	document.body.classList.add("noscroll");
});
$("#open-whatsapp").click(function() {
	document.getElementById("eclipse").classList.add("active");
	document.getElementById("whatsapp-form-outer").classList.add("active");
	document.body.classList.add("noscroll");
});

/*----------E-A----------*/








/*----------B-A----------*/
class PixiPalm {
	constructor(outer, img, count, speed, force) {
		this.outer = document.getElementById(outer);
		this.width = this.outer.getBoundingClientRect().width;
		this.height = this.outer.getBoundingClientRect().height;

		this.app = new PIXI.Application({
		    width: this.width, 
		    height: this.height, 
			antialias: true,
		    // backgroundColor: 0x1099bb, 
		    transparent: true,
		    resolution: window.devicePixelRatio || 1,
		});
		this.outer.appendChild(this.app.view);

		this.ticker = 0;
		this.speed = speed;
		this.force = force;
		this.ropeLength = this.height / (count - 1);
		// build a rope!
		this.points = [];
		if (count < 1) count = 1;
		for (var i = 0; i < count; i++) {
			this.points.push( new PIXI.Point(0, -i * this.ropeLength) );
		}

		this.texture = PIXI.Texture.from(img);
		this.strip = new PIXI.SimpleRope(this.texture, this.points);
		this.strip.x = this.width / 2;
		this.strip.y = this.height / 1;

		this.anim = true;
		this.update = this.update.bind(this);
		this.renderPoints = this.renderPoints.bind(this);

		this.g = new PIXI.Graphics();
		this.g.x = this.strip.x;
		this.g.y = this.strip.y;

		this.container = new PIXI.Container();
		this.container.backgroundColor = 0x1099bb;
		// this.container.addChild(this.g);
		this.container.addChild(this.strip);
		console.log("this.container",this.texture)

		// this.container.height = 1;
		this.container.width = 0.68;
		this.app.stage.addChild(this.container);
	}
	update() {
		this.ticker += this.speed;
		// console.log("update ------------", "---------");
		for (let i = 0; i < this.points.length; i++) {
			// this.points[i].x = 50 + Math.sin(i * this.ticker) * 50;
			this.points[i].x = i * i * this.force + Math.sin(this.ticker) * i * i * this.force;
			this.points[0].x = 0;
			// this.points[i].y = (i * this.ropeLength + Math.cos((i * 0.1) + this.ticker) * 20);
		}



		this.renderPoints();
		this.app.render( this.app.stage )
		if (this.anim) {
			requestAnimationFrame(this.update);
		}
	}
	renderPoints() {
	    this.g.clear();
	
	    this.g.lineStyle(2, 0xffc2c2);
	    this.g.moveTo(this.points[0].x, this.points[0].y);
	
	    for (let i = 1; i < this.points.length; i++) {
	        this.g.lineTo(this.points[i].x, this.points[i].y);
	    }
	
	    for (let i = 1; i < this.points.length; i++) {
	        this.g.beginFill(0xff0022);
	        this.g.drawCircle(this.points[i].x, this.points[i].y, 10);
	        this.g.endFill();
	    }
	}
}
var Palms = []
function initPalms() {
	Palms.push( new PixiPalm("header-palm1", "assets/img/header/palm1r.png", 5, 0.02, 1) );
	Palms.push( new PixiPalm("header-palm2", "assets/img/header/palm2r.png", 5, 0.02, 0.5) );
	// Palms.push( new PixiPalm("header-palm1", "assets/img/t.png", 5, 0.02, 1) );
	Palms[0].update();
	Palms[1].update();
	// Palms.push( new PixiPalm("header-palm2", "assets/img/header/palm2.png", 3) );
}
/*----------E-A----------*/








/*----------B-A----------*/
var Models = {
	"134A": {
		count: 0,
		price: 1999,
	},
	"404A": {
		count: 0,
		price: 1899,
	},
	"507": {
		count: 0,
		price: 1799,
	},
	"410A": {
		count: 0,
		price: 1699,
	},
	"407C": {
		count: 0,
		price: 1599,
	},
	total: 0,
	count: 0,
	arr: false,
}
$(".addnewballon").click(function() {
	var model = $(this).data("model");
	Models[model].count++;
	if (Models[model].count >= 1000) Models[model].count = 1000;
	$('[data-order-model="' + model + '"]').find("input").val(Models[model].count);
	$('[data-order-model="' + model + '"]').find(".makeorder-amount").html(Models[model].count * Models[model].price);
	totalPrice();
});
$(".minus").click(function() {
	var model = $(this).closest(".makeorder-row").data("order-model");
	Models[model].count--;
	if (Models[model].count <= 0) Models[model].count = 0;

	$(this).closest(".makeorder-quantity").find("input").val(Models[model].count);
	$(this).closest(".makeorder-row").find(".makeorder-amount").html(Models[model].count * Models[model].price);
	totalPrice();
});
$(".plus").click(function() {
	var model = $(this).closest(".makeorder-row").data("order-model");
	console.log(model)
	Models[model].count++;
	if (Models[model].count >= 1000) Models[model].count = 1000;
	totalPrice();
	$(this).closest(".makeorder-quantity").find("input").val(Models[model].count);
	$(this).closest(".makeorder-row").find(".makeorder-amount").html(Models[model].count * Models[model].price);
});

$("input[type='number']").change(function(){
	var model = $(this).closest(".makeorder-row").data("order-model");
	var count = $(this).val();
	Models[model].count = +count;
	if (Models[model].count >= 1000) Models[model].count = 1000;
	if (Models[model].count <= 0) Models[model].count = 0;
	$(this).val(Models[model].count);
	$('[data-order-model="' + model + '"]').find(".makeorder-amount").html(Models[model].count * Models[model].price);
	totalPrice()
});
function totalPrice() {
	Models.total = Models["134A"].count * Models["134A"].price + 
		Models["404A"].count * Models["404A"].price + 
		Models["507"].count * Models["507"].price + 
		Models["410A"].count * Models["410A"].price + 
		Models["407C"].count * Models["407C"].price;
	document.getElementById("together-price").innerHTML = Models.total;
	Models.count = Models["134A"].count + 
		Models["404A"].count + 
		Models["507"].count + 
		Models["410A"].count + 
		Models["407C"].count;
	document.getElementById("together-amount").innerHTML = Models.count;
	Models.arr = [
		{
			model: "134A",
			count: Models["134A"].count,
			price: 1999,
		},{
			model: "404A",
			count: Models["404A"].count,
			price: 1899,
		},{
			model: "507",
			count: Models["507"].count,
			price: 1799,
		},{
			model: "410A",
			count: Models["410A"].count,
			price: 1699,			
		},{
			model: "407C",
			count: Models["407C"].count,
			price: 1599,
		}
	]
	$("#object").val( JSON.stringify(Models.arr) );
}
// $.ajax({
//   url: "test.html",
//   context: document.body
// }).done(function() {
//   $( this ).addClass( "done" );
// });
/*----------E-A----------*/








/*----------B-A----------*/
$("#sendobj").submit(function(e) {
	if (Models.total === 0 || Models.arr === false) {
		event.preventDefault();
	}
})
/*----------E-A----------*/








/*----------B-A----------*/
/*----------E-A----------*/








/*----------B-A----------*/
/*----------E-A----------*/








/*----------B-A----------*/
/*----------E-A----------*/