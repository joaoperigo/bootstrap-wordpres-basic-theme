// SWIPER
const swiper = new Swiper('.swiper', {
    // Optional parameters
    slidesPerView: 6,
    
    // If we need pagination
    pagination: {
    el: '.swiper-pagination',
    },
    
    // Navigation arrows
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    
    // And if we need scrollbar
    scrollbar: {
    el: '.swiper-scrollbar',
    },
    });


// PARALLAX
// const x = document.querySelectorAll(".parallax-img");

//     x.forEach((item)=> {
//         item.style.marginTop = -item.getBoundingClientRect().top/2 + "px";
//     })

// window.onscroll = function() {myFunction()};

// function myFunction() {
//   x.forEach((item)=> {
//     item.style.marginTop = -item.getBoundingClientRect().top/2 + "px";
//   })
// }

// Get all the elements to be parallaxed
const parallaxElements = document.querySelectorAll('.parallax-img')

// The parallax function
const parallax = elements => {
		if ('undefined' !== elements && elements.length > 0) {
			elements.forEach( element => {
				let y = window.innerHeight - element.getBoundingClientRect().top
				if (y > 0) {
					element.style.transform = 'translate3d(0, -' + (0.15 * y) + 'px ,0)'
				}
			})
		}
	}

//If element is in viewport, set its position
parallax(parallaxElements)

//Call the function on scroll
window.onscroll = () => {
		parallax(parallaxElements)
}



//  https://github.com/piersrueb/simpleparallax

const simpleParallax = (elem, modifier) => {
    let paras = document.getElementsByClassName(elem);
    for (let i = 0; i < paras.length; i++) {
      paras[i].setAttribute(
        "style",
        "background-repeat: no-repeat; background-attachment: fixed; background-size: 50%; background-position: right bottom;"
      );
    }
    const sp = () => {
      for (let i = 0; i < paras.length; i++) {
        let x = paras[i].getBoundingClientRect().bottom / modifier;
        let y = Math.round(x * 100) / 100;
        paras[i].style.backgroundPosition = "right " + y + "px";
      }
      requestAnimationFrame(sp);
    };
    requestAnimationFrame(sp);
  };
  
  simpleParallax("parallax-bg", 8);