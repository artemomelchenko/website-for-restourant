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
            console.log(result , i);
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
              console.log('1')
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
        // targetProduct(document.getElementsByClassName('menu_page_slider_dishes')[0]);
        // targetProduct(document.getElementsByClassName('menu_page_slider_drinks')[0]);
      }

      const slider = document.getElementsByClassName('main-slider')[0];
      const sliderRecipe = document.getElementsByClassName('recipe_slider')[0];
      const gallerySlider = document.getElementsByClassName('gallery_slider')[0];
      
      // const counterMain = counterBuilder(slider);
      // const counterRecipe = counterBuilder(sliderRecipe);
      // const counterGallery = counterBuilder(gallerySlider);

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
      arrows: false,
      infinite: false,
      fade: true,
      speed: 700,
      dots: true
    });

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
    targetProduct(disheSlider);
    targetProduct(drinkSlider);
  }


  return {
    home: homeSlider,
    menu: menuSliders
  }
  }