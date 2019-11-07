
window.addEventListener('DOMContentLoaded', (event) => {

      const sliders = sliderInit();
      sliders.menu();
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
                  type: 'POST',
                  path: path,
                  data: res,
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

      var form  = formControl();
      form.init();
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
        offset: '70%'
      });
    });
  }
