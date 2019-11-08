
window.addEventListener('DOMContentLoaded', (event) => {
      const sliders = sliderInit();
      sliders.menu();
      let form = formControl();
      form.init();
      $('#timepicker').mask('00/00/0000 00:00:00');
      smoothScroll();
      scrollToTop();
  }
);

  window.onload = function() {
    document.getElementsByClassName('logo')[0].classList.add('active');
    document.getElementById('dishes_svg').classList.add('active');

    const menuMap = [
      document.getElementById('drinks_svg'),
      document.getElementsByClassName('menu_page_slider_dishes')[0],
      document.getElementsByClassName('menu_page_slider_drinks')[0],
      document.getElementsByClassName('header_menu')[0],
      document.getElementById('btn_menu_page'),
      document.getElementsByClassName('footer_header_wrapper')[0],
      document.getElementsByClassName('footer_decoration')[0],
      document.getElementsByClassName('footer_content')[0]
    ];

    menuMap.forEach(element => {
      new Waypoint({
        element: element,
        handler: function(direction) {
          element.classList.add('active');
          this.destroy();
        },
        offset: '85%'
      });
    });

    menuMap.forEach(element => {
      new Waypoint({
        element: element,
        handler: function(direction) {
          element.classList.add('active');
          this.destroy();
        },
        offset: '-75%'
      });
    });
  
    if(window.screen.width > 500) {
      dateTimePicker();
    }
    
  }
