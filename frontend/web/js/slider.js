function sliderInit() {
    function homeSlider() {
        $('.main-slider').slick({
            arrows: true,
            infinite: false,
            speed: 700,
            nextArrow: '<div class="arrow arrow__l"><div class="wrap"></div></div>',
            prevArrow: '<div class="arrow arrow__r"><div class="wrap"></div></div>',
            fade: true,
           });
        
           $('.main-slider').on('afterChange', (event, slick, currentSlide, nextSlide) => {
              counterMain.update(currentSlide);
        });
      
        $('.recipe_slider').slick({
          arrows: true,
          infinite: false,
          fade: true,
          speed: 700,
          nextArrow: '<div class="arrow arrow__l"><div class="wrap"></div></div>',
          prevArrow: '<div class="arrow arrow__r"><div class="wrap"></div></div>',
          dots: true
        });
    
      $('.recipe_slider').on('afterChange', (event, slick, currentSlide, nextSlide) => {
            counterRecipe.update(currentSlide);
      });

      function galleryChildsWrapper (){
        if(window.screen.width <= 800) {
          return;
        }
        const slider = document.getElementsByClassName('gallery_slider')[0];
        const childItems = Array.from(slider.children); 

        const createWrapp = (arr) => {
          let wrapp = document.createElement('div');
          wrapp.classList = 'gallery_slider_wrapper';
          
          arr.forEach(element => {
            wrapp.appendChild(element);
          });
          return wrapp;
        }

        let temp = [];
        let acc = [];
        for( let i = 0; i < childItems.length + 1; i++){
          if(i % 6 == 0 && i !== 0) {
            let result = createWrapp(temp);  
            temp = [];
            acc.push(result);
          }
          temp.push(childItems[i]); 
        }
        slider.innerHTML = null;

        function appendingWrapp (arr){
          let wrapps = arr;
          let index = 0;
          function iter (list){
            if(index == wrapps.length){
              return;
            }

            slider.appendChild(list[index]);
            index++;
            return iter(list);
          }
          return iter(wrapps);
        }
        appendingWrapp(acc);
      }
      galleryChildsWrapper();
        $(".gallery_slider").slick({
        arrows: true,
        nextArrow: '<div class="arrow arrow__l"><div class="wrap"></div></div>',
        prevArrow: '<div class="arrow arrow__r"><div class="wrap"></div></div>',
        fade: true,
        infinite: false

      });

      $('.gallery_slider').on('afterChange', (event, slick, currentSlide, nextSlide) => {
        counterGallery.update(currentSlide);
      });
      

      const slider = document.getElementsByClassName('main-slider')[0];
      const sliderRecipe = document.getElementsByClassName('recipe_slider')[0];
      const gallerySlider = document.getElementsByClassName('gallery_slider')[0];
      
      const counterMain = counterBuilder(slider);
      const counterRecipe = counterBuilder(sliderRecipe);
      const counterGallery = counterBuilder(gallerySlider);

      // $('.menu_page_slider_dishes').slick({
      //   arrows: false,
      //   infinite: false,
      //   fade: true,
      //   speed: 700,
      //   dots: true
      // });

      // function menuSliders(){
      //   $('.menu_page_slider_dishes').slick({
      //     arrows: false,
      //     infinite: false,
      //     fade: true,
      //     speed: 700,
      //     dots: true
      //   });

      //   $('.menu_page_slider_drinks').slick({
      //     arrows: false,
      //     infinite: false,
      //     fade: true,
      //     speed: 700,
      //     dots: true
      //   });

        // targetProduct(document.getElementsByClassName('menu_page_slider_dishes')[0]);
        // targetProduct(document.getElementsByClassName('menu_page_slider_drinks')[0]);
}
  function targetProduct(slider) {
    const el = document.createElement('div');
    const ul = slider.getElementsByTagName('ul')[0];

    el.className = 'target-product';
    el.innerHTML = slider.getElementsByClassName('slick-slide slick-active')[0].getElementsByTagName('h2')[0].innerHTML;
    slider.appendChild(el);
    const headerArr = Array.from(slider.getElementsByTagName('h2')).map(el => el.innerHTML);

    const list = Array.from(ul.getElementsByTagName('li'));
    list.forEach(function(element, index) {
      element.dataset.name = headerArr[index];
      element.addEventListener('mouseenter', (e) => {
        let target = e.target;
        el.innerHTML = target.dataset.name;
        el.classList.add('active');
      });
      element.addEventListener('mouseleave', (e) => {
        el.classList.remove('active');
      })
    });
  }

  function counterBuilder(slide) {
    let el = document.createElement('div');
    el.className = 'slider__counter';
    let currentSlider = slide.dataset.slider;
    el.innerHTML = `<span id="counter__num-${currentSlider}">01</span>`;

    if(currentSlider == 1) {
        slide.parentElement.appendChild(el);
    }

    else {
        slide.appendChild(el);
    }

    let num = document.getElementById(`counter__num-${currentSlider}`);

    return {
      update: (val) => {
        (val + 1 < 10)?num.innerHTML = '0' + (val + 1):num.innerHTML = val + 1;
      }
    }
 }

  function menuSliders(){
    const disheSlider = document.getElementsByClassName('menu_page_slider_dishes')[0];
    const drinkSlider = document.getElementsByClassName('menu_page_slider_drinks')[0];
    
    $([disheSlider, drinkSlider]).slick({
      infinite: false,
      fade: true,
      speed: 700,
      dots: true,
      responsive: [
        {
          breakpoint: 1025,
          settings: {
            arrow: true,
            nextArrow: '<div class="arrow arrow__l"><div class="wrap"></div></div>',
            prevArrow: '<div class="arrow arrow__r"><div class="wrap"></div></div>',
            // adaptiveHeight: true
          }
        },
        {
          breakpoint: 500,
          settings: {
            // dots: false,
            arrow: false,
            // adaptiveHeight: true
        }
      }
    ]
    });

    if(window.screen.width < 1025) {
      const dishCounter = counterBuilder(disheSlider);
      const drinkCounter = counterBuilder(drinkSlider);

      $(disheSlider).on('afterChange', (event, slick, currentSlide, nextSlide) => {
        dishCounter.update(currentSlide);
      });

      $(drinkSlider).on('afterChange', (event, slick, currentSlide, nextSlide) => {
        drinkCounter.update(currentSlide);
      });
    }

    function hoverProduct(slider) {
      const el = document.createElement('div');
      const ul = slider.getElementsByTagName('ul')[0];

      el.className = 'target-product';
      el.innerHTML = slider.getElementsByClassName('slick-slide slick-active')[0].getElementsByTagName('h2')[0].innerHTML;
      slider.appendChild(el);

      const headerArr = Array.from(slider.getElementsByTagName('h2')).map(el => el.innerHTML);
      const list = Array.from(ul.getElementsByTagName('li'));
      list.forEach(function(element, index) {
        element.dataset.name = headerArr[index];
        element.addEventListener('mouseenter', (e) => {
          let target = e.target;
          el.innerHTML = target.dataset.name;
          el.classList.add('active');
        });
        element.addEventListener('mouseleave', (e) => {
          el.classList.remove('active');
        })
      });
    }
    if(window.screen.width >= 800) {
      hoverProduct(disheSlider);
      hoverProduct(drinkSlider);
  }

  if(window.screen.width  < 500) {
    dropDownInit(disheSlider);
    dropDownInit(drinkSlider);

  }
  function dropDownInit(slider){
    const dropDowns = Array.from(slider.getElementsByClassName('slider__dropdown'));
    let state = false;
    let dropDownHeight = dropDowns[0].getBoundingClientRect().height;
    let pos = 0;

    dropDowns.forEach(element => {
      let li = Array.from(element.getElementsByClassName('dropdown__item'));
      element.classList.remove('active');
      element.style.height = 45 + 'px';
      let index = 0;
      li.forEach(element => {
        element.dataset.id = index++;
        element.addEventListener('click', function(e) {
          e.stopImmediatePropagation();
          if(e.target.dataset.id == pos) {
            return;
          }

          let prev = element.parentElement|| false;
          pos = element.dataset.id;

          if(prev) {
            prev.classList.remove('active');
            prev.style.height = 45 + 'px';
          }

          state = false;
          $(slider).slick('slickGoTo', pos);
        })
      });

      element.addEventListener('click', function(e) {
        // e.stopImmediatePropagation();
        if(state){
          element.style.height = 45 + 'px';
          element.classList.remove('active');
          state = false;
        }
        else {
          state = true;
          element.classList.add('active');
          element.style.height = dropDownHeight + 'px';
        }
      });
    });
  }
}



  return {
    home: homeSlider,
    menu: menuSliders
  }
  }

    function dateTimePicker() {
      var start = new Date(),
      prevDay,
      startHours = 9;

  // 09:00 AM
      start.setHours(9);
      start.setMinutes(0);

  // If today is Saturday or Sunday set 10:00 AM
      if ([6, 0].indexOf(start.getDay()) != -1) {
          start.setHours(10);
          startHours = 10
      }

  $('#timepicker').datepicker({
      timepicker: true,
      language: 'en',
      startDate: start,
      minHours: startHours,
      maxHours: 18,
      widgetPositioning:{
        horizontal: 'auto',
        vertical: 'bottom'
      },
      onSelect: function (fd, d, picker) {
          // Do nothing if selection was cleared
          if (!d) return;

          var day = d.getDay();

          // Trigger only if date is changed
          if (prevDay != undefined && prevDay == day) return;
          prevDay = day;

          // If chosen day is Saturday or Sunday when set
          // hour value for weekends, else restore defaults
          if (day == 6 || day == 0) {
              picker.update({
                  minHours: 10,
                  maxHours: 16
              })
          } else {
              picker.update({
                  minHours: 9,
                  maxHours: 18
              })
          }
      }
  })
    }