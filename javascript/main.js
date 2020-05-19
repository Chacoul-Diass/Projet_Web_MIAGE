     // Owl-carousel for blog
     $(document).ready(function(){
    
     $('.owl-carousel').owlCarousel({

         loop:true,
         autoplay:true,
         autoplayTimeout:4000,
         dots:true,
         nav:true,
         navText:[$('.owl-navigation .owl-nav-prev'),$('.owl-navigation .owl-nav-next')]

     });
     
     })

let tabs = document.querySelectorAll(".tab-link:not(.desactive)");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    unSelectAll();
    tab.classList.add("active");
    let ref = tab.getAttribute("data-ref");
    document
      .querySelector(`.tab-body[data-id="${ref}"]`)
      .classList.add("active");
  });
});

function unSelectAll() {
  tabs.forEach((tab) => {
    tab.classList.remove("active");
  });
  let tabbodies = document.querySelectorAll(".tab-body");
  tabbodies.forEach((tab) => {
    tab.classList.remove("active");
  });
}

document.querySelector(".tab-link.active").click();