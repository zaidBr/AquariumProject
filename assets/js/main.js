var gallery = document.querySelector('#gallery');
var getVal = function (elem, style) { return parseInt(window.getComputedStyle(elem).getPropertyValue(style)); };
var getHeight = function (item) { return item.querySelector('.content').getBoundingClientRect().height; };
var resizeAll = function () {
    var altura = getVal(gallery, 'grid-auto-rows');
    var gap = getVal(gallery, 'grid-row-gap');
    gallery.querySelectorAll('.gallery-item').forEach(function (item) {
        var el = item;
        el.style.gridRowEnd = "span " + Math.ceil((getHeight(item) + gap) / (altura + gap));
    });
};
gallery.querySelectorAll('img').forEach(function (item) {
    item.classList.add('byebye');
    if (item.complete) {
        console.log(item.src);
    }
    else {
        item.addEventListener('load', function () {
            var altura = getVal(gallery, 'grid-auto-rows');
            var gap = getVal(gallery, 'grid-row-gap');
            var gitem = item.parentElement.parentElement;
            gitem.style.gridRowEnd = "span " + Math.ceil((getHeight(gitem) + gap) / (altura + gap));
            item.classList.remove('byebye');
        });
    }
});
var $body=document.body
var $myTopBtn = document.getElementById("myTopBtn");
var $rootElement = document.documentElement;
window.onscroll=function(){scrollFunction()};

	function scrollFunction(){
		if( $body.scrollTop > 1500 || document.documentElement.scrollTop > 1500 ){
			$myTopBtn.style.display = "block";

		}else{
			$myTopBtn.style.display="none";
		}
	}
	function scrollToTop() {
		$rootElement.scrollTo({
			top: 0,
			behavior: "smooth"
		  })
		
	}
	$myTopBtn.addEventListener("click", scrollToTop);
   

    const scrollElements = document.querySelectorAll(".js-scroll");

const elementInView = (el, dividend = 1) => {
  const elementTop = el.getBoundingClientRect().top;

  return (
    elementTop <=
    (window.innerHeight || document.documentElement.clientHeight) / dividend
  );
};

const elementOutofView = (el) => {
  const elementTop = el.getBoundingClientRect().top;

  return (
    elementTop > (window.innerHeight || document.documentElement.clientHeight)
  );
};

const displayScrollElement = (element) => {
  element.classList.add("scrolled");
};

const hideScrollElement = (element) => {
  element.classList.remove("scrolled");
};

const handleScrollAnimation = () => {
  scrollElements.forEach((el) => {
    if (elementInView(el, 1.25)) {
      displayScrollElement(el);
    } else if (elementOutofView(el)) {
      hideScrollElement(el)
    }
  })
}

window.addEventListener("scroll", () => { 
  handleScrollAnimation();
});

if(window.history.replaceState){
  window.history.replaceState(null,null,window.location.href);
}