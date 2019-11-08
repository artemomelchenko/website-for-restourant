window.onload = function() {
    const map = {
        first:  document.getElementsByTagName('header')[0],
        second: document.getElementById('menu'),
        third: document.getElementById('reserv'),
        fourth: document.getElementById('recipe'),
        fifth: document.getElementById('calculation'),
        sixth: document.getElementById('gallery'),
        seventh: document.getElementById('about')
    };

    sliderInit().home();
    const animation = animationController();
    function checkPoints(){ 
     return new Waypoint({
      element: map['first'],
      handler: function(direction) {
        animation.animateFirstSection();
        this.destroy();
      },
      offset: '50%',
    });
  } 
    checkPoints();
    const forms = formControl();
    forms.init();
    
    $('#reserv-phone').mask('+38(000)000-00-00');
    $('#timepicker').mask('00/00/0000 00:00:00');

    smoothScroll();
    scrollToTop();

  }
  
function animationController() {
    const menuSection = $('#menu')[0],
          reservSection = $('#reserv')[0],
          recipeSection = $('#recipe')[0],
          calcSection   = $('#calculation')[0],
          gallerySection = $('#gallery')[0],
          aboutSection   = $('#about')[0],
          footerSection = $('footer')[0];
    const sections = {
      first: [
         document.getElementById('slider_svg'),
         document.getElementsByClassName('logo')[0],
         document.getElementsByClassName('slider_container')[0],
         document.getElementsByClassName('header_menu')[0]
      ],
      second: [
        menuSection.getElementsByClassName('menu_headig_wrapper')[0],
        menuSection.getElementsByClassName('menu_text')[0],
        menuSection.getElementsByClassName('menu_img')[0],
        menuSection.getElementsByClassName('menu_decoration')[0]
      ],
      third: [
        reservSection.getElementsByClassName('reserv_heading_wrapper')[0],
        reservSection.getElementsByClassName('reserv_img')[0],
        reservSection.getElementsByTagName('img')[0],
        reservSection.getElementsByClassName('reserv_decoration')[0],
        reservSection.getElementsByTagName('button')[0]
      ],
      forth: [
        recipeSection.getElementsByClassName('recepe_heading_wrapper ')[0],
        recipeSection.getElementsByClassName('recipe_slider')[0],
        recipeSection.getElementsByClassName('recipe_decoration')[0]
      ],
      fifth: [
        calcSection.getElementsByClassName('calculation_heading_wrapper')[0],
        calcSection.getElementsByClassName('calculation_content_wrapper')[0],
        calcSection.getElementsByClassName('calculation_brn')[0],
        calcSection.getElementsByClassName('calculation_decoration')[0]
      ],
      sixth: [
        gallerySection.getElementsByClassName('gallery_heading_wrapper')[0],
        gallerySection.getElementsByClassName('gallery_slider')[0],
        gallerySection.getElementsByClassName('gallery_decoration')[0]
      ],
      seventh: [
        aboutSection.getElementsByClassName('about_heading_wrapper')[0],
        aboutSection.getElementsByClassName('about_text')[0],
        aboutSection.getElementsByClassName('abaut_img')[0],
        aboutSection.getElementsByClassName('about_decoration')[0]
      ],
      eighth: [
        footerSection.getElementsByClassName('footer_header_wrapper')[0],
        footerSection.getElementsByClassName('footer_decoration')[0],
        footerSection.getElementsByClassName('footer_content')[0]
      ]
    };
   
    function animateFirstSection() {
      let arr = [];
      let section = sections['first'];
      
      for(let i = 0; i < section.length; i++) {
        arr.push(
          {
            el: section[i],
            fnc : () => {section[i].classList.add('active')}
           }
        );
      }
  
      const summonAnim = (arr) => {
        let i = 0;
        function fire() {
          if(i == arr.length){
            return ;
          }
        let pause = arr[i].el.dataset.pause;
        setTimeout(function() {
            arr[i].fnc();
            return fire(arr[i],i++);
          }, pause);
        }
        return fire(arr[i])
      }
      summonAnim(arr);
      addRestTrigers();
    }
  
    function addRestTrigers(){
      for(let item in sections) {
        $.each(sections[item], function(index, value){
            new Waypoint({
            element: value,
            handler: function(direction) {
              value.classList.add('active');
              this.destroy();
            },
            offset: '70%',
        
          });
        })
      }
      for(let item in sections) {
        $.each(sections[item], function(index, value){
            new Waypoint({
            element: value,
            handler: function(direction) {
              value.classList.add('active');
              this.destroy();
            },
            offset: '-70%',
        
          });
        })
      }
    }
    return {
      animateFirstSection: animateFirstSection
    }
  }
  
    // POPUP
  
  

// $(document).ready(function () {
//     // Back to Top
//     let $btnTop = $(".scrollTop")
//     $(window).on("scroll", function (){
//         if ($(window).scrollTop() >= 500) {
//             $btnTop.fadeIn();
//         } else {
//             $btnTop.fadeOut();
//         }
//     });
//     $btnTop.on("click", function(){
//         $("html,body").animate({scrollTop: 0}, 1000)
//     });
//     // END Back to Top


//     // Phone Masck

//     // SMOOTH SCROLL
//     $('a[data-target^="anchor"]').bind('click.smoothscroll', function(){
//         let target = $(this).attr('href'),
//             bl_top = $(target).offset().top - 100;
//         $('body, html').animate({scrollTop: bl_top}, 700);
//         return false;
//     })

// });