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
  
    function formControl() {
      const modalUtils = {
        eclipse:  document.getElementById('eclipse'),
        overlay: document.body,
        closeBtns: document.getElementsByClassName('button_close'),
        activeForm: null
      };
      const modalBtn = Array.from(document.getElementsByClassName('modal_btn'));
      const showEclipse = () => {
        modalUtils.eclipse.classList.add('active');
        modalUtils.eclipse.addEventListener('click', () => {
          modalUtils.activeForm.classList.remove('active');
          removeEclipse();
  
        });
      }
      const removeEclipse = () => {
        modalUtils.eclipse.classList.remove('active');
        modalUtils.overlay.style.overflowY = 'initial';
      }
      const hideModal = (form) => {
        form.classList.remove('active');
      }
      const showModal = (form) => {
        form.classList.add('active');
      }
  
      function modalInit() {
        modalBtn.forEach(el => {
          el.addEventListener('click', (e) => {
            e.preventDefault();
            showEclipse();
            modalUtils.overlay.style.overflowY = 'hidden';
            let target = e.target;
            let wrap = document.getElementById(`${target.dataset.form}`).parentNode;
            let closeBtn = wrap.getElementsByClassName('button_close')[0];
  
            e.target.dataset.form
            closeBtn.addEventListener('click', (e) => {
              hideModal(wrap);
              removeEclipse();
            });
            let form = document.getElementById(`${target.dataset.form}`);
            let input = form.getElementsByTagName('input');
            let textarea = form.getElementsByTagName('textarea')[0];
            textarea.addEventListener('focus', (e) => {
              let label = e.target.previousElementSibling;
              label.classList.add('active');
            });
            form.dataset.id = target.dataset.id;
  
            textarea.addEventListener('focusout', (e) => {
              if(textarea.value == ''){
                let label = e.target.previousElementSibling;
                label.classList.remove('active');
            }
            })
            for(let i = 0; i < input.length; i++) {
              input[i].addEventListener('focus', (e) => {
                let label = e.target.previousElementSibling;
                label.classList.add('active');
              });
              input[i].addEventListener('focusout', (e) => {
                if(input[i].value == ''){
                  let label = e.target.previousElementSibling;
                  label.classList.remove('active');
              }
              });
            }
            form.addEventListener('submit', function(e){
              e.preventDefault();
  
              const inputs = Array.from(form.getElementsByTagName('input'));
              const textarea = form.getElementsByTagName('textarea')[0];
              let csrfToken = $('meta[name="csrf-token"]').attr("content");
              let res = {};
              inputs.forEach(el => {
                let key = el.getAttribute('name');
                let value = el.value;
                
                res[key]= value;
                
              })
              let key = textarea.getAttribute('name');
              let value = textarea.value;
              res[key]= value;
              res.id = form.dataset.id;

              const path = window.location.pathname;
  
              $.ajax({
                dataType: 'json',
                type: 'POST',
                path: path,
                data: {data: res, '_csrf-frontend': csrfToken},
                success: function(){
                  // console.log(12323);
                }
              })
            });
            modalUtils.eclipse.classList.add('active');
            modalUtils.activeForm = form.parentNode;
            showModal(form.parentNode);
          });
        });
      } 
      return {
        init: modalInit
      }  
    }

$(document).ready(function () {
    // // Back to Top
    // let $btnTop = $(".scrollTop")
    // $(window).on("scroll", function (){
    //     if ($(window).scrollTop() >= 500) {
    //         $btnTop.fadeIn();
    //     } else {
    //         $btnTop.fadeOut();
    //     }
    // });
    // $btnTop.on("click", function(){
    //     $("html,body").animate({scrollTop: 0}, 1000)
    // });
    // END Back to Top


    // Phone Masck
    $('#reserv-phone').mask('+38(000)000-00-00');
    $('.data_time').mask('00/00/0000 00:00:00');

    // SMOOTH SCROLL
    $('a[data-target^="anchor"]').bind('click.smoothscroll', function(){
        let target = $(this).attr('href'),
            bl_top = $(target).offset().top - 100;
        $('body, html').animate({scrollTop: bl_top}, 700);
        return false;
    })

});