
window.addEventListener('DOMContentLoaded', (event) => {
    if(window.location.pathname != '/') {
      const sliders = sliderInit();
      sliders.menu();
      document.getElementsByClassName('logo')[0].classList.add('active');
      document.getElementById('dishes_svg').classList.add('active');
  
      const menuMap = [
        document.getElementById('drinks_svg'),
        document.getElementsByClassName('menu_page_slider_dishes')[0],
        document.getElementsByClassName('menu_page_slider_drinks')[0],
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
          offset: '70%'
        });
      })
  }
  });