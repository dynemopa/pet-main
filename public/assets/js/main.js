/**
* Template Name: Sailor - v4.8.0
* Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  

  
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

 
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }


  let heroCarouselIndicators = select("#hero-carousel-indicators")
  let heroCarouselItems = select('#heroCarousel .carousel-item', true)

  heroCarouselItems.forEach((item, index) => {
    (index === 0) ?
    heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "' class='active'></li>":
      heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "'></li>"
  });

  let skilsContent = select('.skills-content');
  if (skilsContent) {
    new Waypoint({
      element: skilsContent,
      offset: '80%',
      handler: function(direction) {
        let progress = select('.progress .progress-bar', true);
        progress.forEach((el) => {
          el.style.width = el.getAttribute('aria-valuenow') + '%'
        });
      }
    })
  }

})()

    jQuery(document).ready(function($) {
            "use strict";
            //  TESTIMONIALS CAROUSEL HOOK
            $('#customers-testimonials').owlCarousel({
                loop: true,
                center: true,
                items: 3,
                margin: 0,
                autoplay: true,
                dots:true,
                autoplayTimeout:9000,
                smartSpeed: 450,
                responsive: {
                  0: {
                    items: 1
                  },
                  768: {
                    items: 2
                  },
                  1170: {
                    items: 3
                  }
                }
            });
          });
  
    function ShowMyDiv(Obj){
  var elements = document.getElementsByTagName('div');
 for (var i = 0; i < elements.length; i++) 
  if(elements[i].className=='tabcontent')
   elements[i].style.display= 'none';

 document.getElementById(Obj.rel).style.display= 'block';


  var ul_el = document.getElementById('tab_ul');
  var li_el = ul_el.getElementsByTagName('li');
 for (var i = 0; i < li_el.length; i++) 
  li_el[i].className="";

 Obj.parentNode.className="selected";
}
 

  AOS.init();
   





$(document).ready(function(){
    $("#checkindate").datepicker({ numberOfMonths:2 });
     $("#checkoutdate").datepicker({ numberOfMonths:2 });
});


    function increment() {
        document.getElementById('demoInput').stepUp();
    }
    function decrement() {
        document.getElementById('demoInput').stepDown();
    }



