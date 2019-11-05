<?php 
    $this->registerCssFile('/css/menu.css', ['depends' => ['frontend\assets\AppAsset']]);
    $this->registerJsFile('/js/menu.js');
?>
<section id="dishes">
          <!-- <div class="container"> -->
        <div class="dishes">
          <svg 
            id="dishes_svg" 
            width="545" 
            height="121" 
            viewBox="0 0 545 121" 
            fill="none"
            xmlns="http://www.w3.org/2000/svg">

            <path
              d="M92.6875 117H89.0156C88.7552 113.667 88.3125 111.271 87.6875 109.812C87.1146 108.302 86.2552 107.547 85.1094 107.547C84.276 107.547 83.1823 107.99 81.8281 108.875C76.9844 112.26 72.375 114.839 68 116.609C63.6771 118.38 58.4167 119.266 52.2188 119.266C36.8021 119.266 24.4844 114.135 15.2656 103.875C6.09896 93.5625 1.51562 79.3698 1.51562 61.2969C1.51562 49.526 3.67708 39.1094 8 30.0469C12.3229 20.9323 18.3385 13.901 26.0469 8.95312C33.7552 3.95312 42.5312 1.45312 52.375 1.45312C58.7292 1.45312 64.1458 2.36458 68.625 4.1875C73.1562 6.01042 77.5573 8.5625 81.8281 11.8438C82.974 12.7812 84.0156 13.25 84.9531 13.25C87.1406 13.25 88.4948 10.0729 89.0156 3.71875H92.6875C92.2708 10.6458 92.0625 22.9115 92.0625 40.5156H88.3906C87.2448 33.5365 86.1771 28.5625 85.1875 25.5938C84.1979 22.5729 82.5833 19.6562 80.3438 16.8438C77.1146 12.6771 73.026 9.55208 68.0781 7.46875C63.1302 5.38542 57.7917 4.34375 52.0625 4.34375C41.5938 4.34375 33.2083 9.42188 26.9062 19.5781C20.6042 29.7344 17.4531 43.4323 17.4531 60.6719C17.4531 78.0677 20.8125 91.6615 27.5312 101.453C34.3021 111.193 43 116.062 53.625 116.062C58.9375 116.062 64.1198 115.047 69.1719 113.016C74.224 110.984 78.1562 107.938 80.9688 103.875C83.1562 100.958 84.7188 97.8073 85.6562 94.4219C86.5938 90.9844 87.5052 85.6979 88.3906 78.5625H92.0625C92.0625 96.9479 92.2708 109.76 92.6875 117Z"
              stroke="#D9B696" stroke-width="1" />
            <path
              d="M111.018 47.2734H107.805C108.078 44.3568 108.215 40.5286 108.215 35.7891C108.215 30.3203 107.873 24.3503 107.189 17.8789C114.937 18.1523 128.107 18.2891 146.701 18.2891C165.158 18.2891 178.26 18.1523 186.008 17.8789C185.37 24.5326 185.051 30.5026 185.051 35.7891C185.051 40.5286 185.188 44.3568 185.461 47.2734H182.248C181.883 43.6276 181.519 40.7109 181.154 38.5234C180.835 36.3359 180.334 34.1257 179.65 31.8926C179.012 29.6595 178.215 27.9733 177.258 26.834C176.346 25.6491 175.139 24.5781 173.635 23.6211C172.131 22.6185 170.331 21.9577 168.234 21.6387C166.184 21.2741 163.677 21.0918 160.715 21.0918H153.127V100.73C153.127 103.1 153.241 105.014 153.469 106.473C153.742 107.931 154.152 109.184 154.699 110.232C155.246 111.281 156.089 112.078 157.229 112.625C158.413 113.126 159.758 113.491 161.262 113.719C162.766 113.947 164.771 114.106 167.277 114.197V117C162.355 116.727 155.497 116.59 146.701 116.59C137.359 116.59 130.454 116.727 125.988 117V114.197C128.495 114.106 130.5 113.947 132.004 113.719C133.508 113.491 134.829 113.126 135.969 112.625C137.154 112.078 138.02 111.281 138.566 110.232C139.113 109.184 139.501 107.931 139.729 106.473C140.002 105.014 140.139 103.1 140.139 100.73V21.0918H132.551C129.589 21.0918 127.059 21.2741 124.963 21.6387C122.912 21.9577 121.112 22.6185 119.562 23.6211C118.059 24.5781 116.851 25.6491 115.939 26.834C115.028 27.9733 114.23 29.6595 113.547 31.8926C112.909 34.0801 112.408 36.2904 112.043 38.5234C111.724 40.7109 111.382 43.6276 111.018 47.2734Z"
              stroke="#D9B696" stroke-width="1" />
            <path
              d="M220.324 76.9414V102.166C220.324 104.809 220.484 106.86 220.803 108.318C221.167 109.777 221.919 110.962 223.059 111.873C224.198 112.739 225.588 113.331 227.229 113.65C228.915 113.924 231.33 114.106 234.475 114.197V117C229.598 116.727 222.74 116.59 213.898 116.59C205.878 116.59 199.908 116.727 195.988 117V114.197C199.361 114.061 201.776 113.696 203.234 113.104C204.738 112.511 205.786 111.417 206.379 109.822C207.017 108.227 207.336 105.675 207.336 102.166V32.7129C207.336 29.2038 207.017 26.6517 206.379 25.0566C205.786 23.4616 204.738 22.3678 203.234 21.7754C201.776 21.1829 199.361 20.8184 195.988 20.6816V17.8789C199.862 18.1523 205.559 18.2891 213.078 18.2891C216.451 18.2891 220.643 18.2435 225.656 18.1523C230.669 18.0612 233.518 18.0156 234.201 18.0156C245.184 18.0156 253.547 20.5221 259.289 25.5352C265.077 30.5482 267.971 37.2474 267.971 45.6328C267.971 48.5495 267.629 51.375 266.945 54.1094C266.262 56.8438 265.031 59.6237 263.254 62.4492C261.522 65.2747 259.312 67.7357 256.623 69.832C253.98 71.9284 250.448 73.6374 246.027 74.959C241.652 76.2806 236.685 76.9414 231.125 76.9414H220.324ZM220.324 74.1387H229.758C233.586 74.1387 236.936 73.6602 239.807 72.7031C242.723 71.7005 245.07 70.4017 246.848 68.8066C248.625 67.166 250.061 65.1608 251.154 62.791C252.248 60.3757 252.977 57.9375 253.342 55.4766C253.752 52.9701 253.957 50.1901 253.957 47.1367C253.957 38.1133 252.157 31.4596 248.557 27.1758C244.956 22.8464 239.009 20.6816 230.715 20.6816C226.477 20.6816 223.674 21.4792 222.307 23.0742C220.985 24.6237 220.324 27.8366 220.324 32.7129V74.1387Z"
              stroke="#D9B696" stroke-width="1" />
            <path
              d="M311.516 17.1953L345.627 105.242C347.906 111.03 351.141 114.015 355.334 114.197V117C351.506 116.727 346.493 116.59 340.295 116.59C332.32 116.59 326.35 116.727 322.385 117V114.197C325.939 114.061 328.469 113.628 329.973 112.898C331.522 112.169 332.297 110.87 332.297 109.002C332.297 107.407 331.75 105.219 330.656 102.439L322.043 79.4707H288.273L282.531 94.3047C280.663 99.0443 279.729 102.872 279.729 105.789C279.729 108.751 280.708 110.87 282.668 112.146C284.673 113.423 287.749 114.106 291.896 114.197V117C286.564 116.727 281.187 116.59 275.764 116.59C271.571 116.59 268.085 116.727 265.305 117V114.197C269.953 113.149 273.622 109.093 276.311 102.029L309.26 17.1953H311.516ZM321.018 76.668L305.363 34.9004L289.299 76.668H321.018Z"
              stroke="#D9B696" stroke-width="1" />
            <path
              d="M406.809 64.3633V64.6367C412.141 65.3659 416.721 66.5508 420.549 68.1914C424.377 69.832 427.339 71.8145 429.436 74.1387C431.532 76.4629 433.036 78.9238 433.947 81.5215C434.904 84.0736 435.383 86.8535 435.383 89.8613C435.383 97.9277 432.352 104.467 426.291 109.48C420.275 114.493 412.095 117 401.75 117C400.975 117 397.876 116.932 392.453 116.795C387.03 116.658 382.108 116.59 377.688 116.59C370.031 116.59 364.243 116.727 360.324 117V114.197C363.697 114.061 366.112 113.696 367.57 113.104C369.074 112.511 370.122 111.417 370.715 109.822C371.353 108.227 371.672 105.675 371.672 102.166V32.7129C371.672 29.2038 371.353 26.6517 370.715 25.0566C370.122 23.4616 369.074 22.3678 367.57 21.7754C366.112 21.1829 363.697 20.8184 360.324 20.6816V17.8789C364.198 18.1523 369.895 18.2891 377.414 18.2891C380.786 18.2891 384.979 18.2435 389.992 18.1523C395.005 18.0612 397.854 18.0156 398.537 18.0156C408.062 18.0156 415.354 20.0208 420.412 24.0312C425.516 28.0417 428.068 33.3737 428.068 40.0273C428.068 45.4049 426.359 50.2357 422.941 54.5195C419.569 58.8034 414.191 62.0846 406.809 64.3633ZM384.66 64.3633H394.094C398.059 64.3633 401.431 63.7708 404.211 62.5859C406.991 61.3555 409.11 59.6465 410.568 57.459C412.072 55.2259 413.12 52.8333 413.713 50.2812C414.351 47.7292 414.67 44.8125 414.67 41.5312C414.67 34.513 413.12 29.2949 410.021 25.877C406.923 22.4134 401.932 20.6816 395.051 20.6816C390.812 20.6816 388.01 21.4792 386.643 23.0742C385.321 24.6237 384.66 27.8366 384.66 32.7129V64.3633ZM384.66 66.7559V102.166C384.66 107.042 385.321 110.21 386.643 111.668C387.964 113.081 390.812 113.787 395.188 113.787C412.642 113.787 421.369 105.607 421.369 89.2461C421.369 81.9089 419.364 76.3262 415.354 72.498C411.389 68.6699 405.077 66.7559 396.418 66.7559H384.66Z"
              stroke="#D9B696" stroke-width="1" />
            <path
              d="M543.596 17.8789V20.6816C540.223 20.8184 537.785 21.1829 536.281 21.7754C534.823 22.3678 533.775 23.4616 533.137 25.0566C532.544 26.6517 532.248 29.2038 532.248 32.7129V102.166C532.248 105.675 532.544 108.227 533.137 109.822C533.775 111.417 534.823 112.511 536.281 113.104C537.785 113.696 540.223 114.061 543.596 114.197V117C539.722 116.727 533.752 116.59 525.686 116.59C518.212 116.59 512.287 116.727 507.912 117V114.197C511.285 114.061 513.7 113.696 515.158 113.104C516.662 112.511 517.71 111.417 518.303 109.822C518.941 108.227 519.26 105.675 519.26 102.166V35.9258L470.93 104.285C471.021 105.971 471.18 107.361 471.408 108.455C471.682 109.549 472.046 110.483 472.502 111.258C472.958 111.987 473.641 112.557 474.553 112.967C475.51 113.331 476.558 113.605 477.697 113.787C478.837 113.969 480.363 114.106 482.277 114.197V117C477.993 116.727 472.069 116.59 464.504 116.59C456.483 116.59 450.513 116.727 446.594 117V114.197C449.966 114.061 452.382 113.696 453.84 113.104C455.344 112.511 456.392 111.417 456.984 109.822C457.622 108.227 457.941 105.675 457.941 102.166V32.7129C457.941 29.2038 457.622 26.6517 456.984 25.0566C456.392 23.4616 455.344 22.3678 453.84 21.7754C452.382 21.1829 449.966 20.8184 446.594 20.6816V17.8789C450.467 18.1523 456.438 18.2891 464.504 18.2891C472.069 18.2891 477.993 18.1523 482.277 17.8789V20.6816C478.905 20.8184 476.467 21.1829 474.963 21.7754C473.505 22.3678 472.456 23.4616 471.818 25.0566C471.226 26.6517 470.93 29.2038 470.93 32.7129V99.0215L519.191 30.5254C519.055 26.515 518.257 23.9401 516.799 22.8008C515.386 21.6159 512.424 20.9095 507.912 20.6816V17.8789C512.287 18.1523 518.212 18.2891 525.686 18.2891C533.752 18.2891 539.722 18.1523 543.596 17.8789Z"
              stroke="#D9B696" stroke-width="1" />
          </svg>
        </div>

        <div class="menu_page_slider_dishes">
          
          <div class="menu_page_slider_content">
              <div class="menu_page_slider_heading">
                  <h2>Салати</h2>
                </div>
            <div class="menu_page_slider_img">
              <img src="img/page_menu.jpg" alt="картинка  страв">
            </div>
            <div class="menu_page_slider_list">
              <table>
                <tr>
                  <td>Лосось з соусом</td>
                  <td class="menu_price">120</td>
                </tr>
                <tr>
                  <td>Паста Карбонара</td>
                  <td class="menu_price">95</td>
                </tr>
                <tr>
                  <td>Салат Грецький</td>
                  <td class="menu_price">86</td>
                </tr>
                <tr>
                  <td>Стейк з яловичини</td>
                  <td class="menu_price">220</td>
                </tr>
                <tr>
                  <td>Брускети</td>
                  <td class="menu_price">68</td>
                </tr>
                <tr>
                  <td>Торт три шоколади</td>
                  <td class="menu_price">120</td>
                </tr>
                <tr>
                  <td>Паста Карбонара</td>
                  <td class="menu_price">95</td>
                </tr>
                <tr>
                  <td>Салат Грецький</td>
                  <td class="menu_price">86</td>
                </tr>
                <tr>
                  <td>Стейк з яловичини</td>
                  <td class="menu_price">220</td>
                </tr>
                <tr>
                  <td>Лосось з соусом</td>
                  <td class="menu_price">120</td>
                </tr>
                <tr>
                  <td>Брускети</td>
                  <td class="menu_price">68</td>
                </tr>
                <tr>
                  <td>Торт три шоколади</td>
                  <td class="menu_price">120</td>
                </tr>
              </table>
            </div>
          </div>
          
            
            <div class="menu_page_slider_content">
                <div class="menu_page_slider_heading">
                    <h2>Гарніри</h2>
                  </div>
              <div class="menu_page_slider_img">
                <img src="/img/garnir.jpg" alt="картинка  страв">
              </div>
              <div class="menu_page_slider_list">
                <table>
                    <td>Торт три шоколади</td>
                    <td class="menu_price">120</td>
                  </tr>
                  <tr>
                    <td>Паста Карбонара</td>
                    <td class="menu_price">95</td>
                  </tr>
                  <tr>
                    <td>Салат Грецький</td>
                    <td class="menu_price">86</td>
                  </tr>
                  <tr>
                    <td>Стейк з яловичини</td>
                    <td class="menu_price">220</td>
                  </tr>
                  <tr>
                    <td>Лосось з соусом</td>
                    <td class="menu_price">120</td>
                  </tr>
                  <tr>
                    <td>Брускети</td>
                    <td class="menu_price">68</td>
                  </tr>
                  <tr>
                    <td>Торт три шоколади</td>
                    <td class="menu_price">120</td>
                  </tr>
                  <tr>
                    <td>Лосось з соусом</td>
                    <td class="menu_price">120</td>
                  </tr>
                  <tr>
                    <td>Паста Карбонара</td>
                    <td class="menu_price">95</td>
                  </tr>
                  <tr>
                    <td>Салат Грецький</td>
                    <td class="menu_price">86</td>
                  </tr>
                  <tr>
                    <td>Стейк з яловичини</td>
                    <td class="menu_price">220</td>
                  </tr>
                  <tr>
                    <td>Брускети</td>
                    <td class="menu_price">68</td>
                  </tr>
                  <tr>
                </table>
              </div>
            </div>
          </div>
      </section>
    <!-- </div>   end container --> 
   <!-- <section> end -->
   
    <section id="drinks">
      <!-- <div class="container"> -->
        <div class="drinks">
            <svg 
              id="drinks_svg" 
              width="452" height="129" 
              viewBox="0 0 452 129" 
              fill="none" 
              xmlns="http://www.w3.org/2000/svg">

              <path d="M101.928 19.1445V22.1475C98.3145 22.2939 95.7021 22.6846 94.0908 23.3193C92.5283 23.9541 91.4053 25.126 90.7217 26.835C90.0869 28.5439 89.7695 31.2783 89.7695 35.0381V109.452C89.7695 113.212 90.0869 115.946 90.7217 117.655C91.4053 119.364 92.5283 120.536 94.0908 121.171C95.7021 121.806 98.3145 122.196 101.928 122.343V125.346C97.7285 125.053 91.332 124.906 82.7383 124.906C74.7305 124.906 68.3828 125.053 63.6953 125.346V122.343C67.3086 122.196 69.8965 121.806 71.459 121.171C73.0703 120.536 74.1934 119.364 74.8281 117.655C75.5117 115.946 75.8535 113.212 75.8535 109.452V73.417H27.0742V109.452C27.0742 113.212 27.3916 115.946 28.0264 117.655C28.71 119.364 29.833 120.536 31.3955 121.171C33.0068 121.806 35.6191 122.196 39.2324 122.343V125.346C34.6426 125.053 28.2949 124.906 20.1895 124.906C11.5957 124.906 5.19922 125.053 1 125.346V122.343C4.61328 122.196 7.20117 121.806 8.76367 121.171C10.375 120.536 11.498 119.364 12.1328 117.655C12.8164 115.946 13.1582 113.212 13.1582 109.452V35.0381C13.1582 31.2783 12.8164 28.5439 12.1328 26.835C11.498 25.126 10.375 23.9541 8.76367 23.3193C7.20117 22.6846 4.61328 22.2939 1 22.1475V19.1445C5.15039 19.4375 11.5469 19.584 20.1895 19.584C28.2949 19.584 34.6426 19.4375 39.2324 19.1445V22.1475C35.6191 22.2939 33.0068 22.6846 31.3955 23.3193C29.833 23.9541 28.71 25.126 28.0264 26.835C27.3916 28.5439 27.0742 31.2783 27.0742 35.0381V70.4141H75.8535V35.0381C75.8535 31.2783 75.5117 28.5439 74.8281 26.835C74.1934 25.126 73.0703 23.9541 71.459 23.3193C69.8965 22.6846 67.3086 22.2939 63.6953 22.1475V19.1445C68.3828 19.4375 74.7305 19.584 82.7383 19.584C91.332 19.584 97.7285 19.4375 101.928 19.1445Z" 
                  stroke="#D9B696" 
                  stroke-width="1" />
              <path d="M153.48 25.541L187.592 113.588C189.87 119.376 193.106 122.361 197.299 122.543V125.346C193.471 125.072 188.458 124.936 182.26 124.936C174.285 124.936 168.314 125.072 164.35 125.346V122.543C167.904 122.406 170.434 121.973 171.938 121.244C173.487 120.515 174.262 119.216 174.262 117.348C174.262 115.753 173.715 113.565 172.621 110.785L164.008 87.8164H130.238L124.496 102.65C122.628 107.39 121.693 111.218 121.693 114.135C121.693 117.097 122.673 119.216 124.633 120.492C126.638 121.768 129.714 122.452 133.861 122.543V125.346C128.529 125.072 123.152 124.936 117.729 124.936C113.536 124.936 110.049 125.072 107.27 125.346V122.543C111.918 121.495 115.587 117.439 118.275 110.375L151.225 25.541H153.48ZM162.982 85.0137L147.328 43.2461L131.264 85.0137H162.982Z" 
                  stroke="#D9B696" 
                  stroke-width="1" />
              <path d="M296.488 26.2246V29.0273C293.116 29.1641 290.678 29.5286 289.174 30.1211C287.715 30.7135 286.667 31.8073 286.029 33.4023C285.437 34.9974 285.141 37.5495 285.141 41.0586V110.512C285.141 114.021 285.437 116.573 286.029 118.168C286.667 119.763 287.715 120.857 289.174 121.449C290.678 122.042 293.116 122.406 296.488 122.543V125.346C292.569 125.072 286.599 124.936 278.578 124.936C271.104 124.936 265.18 125.072 260.805 125.346V122.543C264.177 122.406 266.592 122.042 268.051 121.449C269.555 120.857 270.603 119.763 271.195 118.168C271.833 116.573 272.152 114.021 272.152 110.512V41.0586C272.152 36 271.446 32.7415 270.033 31.2832C268.666 29.7793 265.59 29.0273 260.805 29.0273H237.973C233.188 29.0273 230.089 29.7793 228.676 31.2832C227.309 32.7415 226.625 36 226.625 41.0586V110.512C226.625 114.021 226.921 116.573 227.514 118.168C228.152 119.763 229.2 120.857 230.658 121.449C232.162 122.042 234.6 122.406 237.973 122.543V125.346C233.689 125.072 227.764 124.936 220.199 124.936C212.178 124.936 206.208 125.072 202.289 125.346V122.543C205.661 122.406 208.077 122.042 209.535 121.449C211.039 120.857 212.087 119.763 212.68 118.168C213.318 116.573 213.637 114.021 213.637 110.512V41.0586C213.637 37.5495 213.318 34.9974 212.68 33.4023C212.087 31.8073 211.039 30.7135 209.535 30.1211C208.077 29.5286 205.661 29.1641 202.289 29.0273V26.2246C206.163 26.498 212.133 26.6348 220.199 26.6348C224.21 26.6348 229.656 26.5664 236.537 26.4297C243.419 26.293 247.771 26.2246 249.594 26.2246C251.417 26.2246 255.701 26.293 262.445 26.4297C269.19 26.5664 274.568 26.6348 278.578 26.6348C286.599 26.6348 292.569 26.498 296.488 26.2246Z" 
                  stroke="#D9B696" 
                  stroke-width="1" />
              <path d="M353.227 24.2422C366.716 24.2422 377.471 28.7539 385.492 37.7773C393.559 46.7552 397.592 59.151 397.592 74.9648C397.592 85.2643 395.701 94.4017 391.918 102.377C388.135 110.307 382.872 116.459 376.127 120.834C369.382 125.163 361.703 127.328 353.09 127.328C339.6 127.328 328.822 122.839 320.756 113.861C312.735 104.838 308.725 92.4193 308.725 76.6055C308.725 66.306 310.616 57.1914 314.398 49.2617C318.181 41.2865 323.445 35.1341 330.189 30.8047C336.934 26.4297 344.613 24.2422 353.227 24.2422ZM352.68 26.7715C346.71 26.7715 341.423 28.8678 336.82 33.0605C332.263 37.2077 328.754 43.0182 326.293 50.4922C323.878 57.9206 322.67 66.4427 322.67 76.0586C322.67 90.6419 325.609 102.423 331.488 111.4C337.413 120.333 344.796 124.799 353.637 124.799C359.607 124.799 364.87 122.725 369.428 118.578C373.985 114.385 377.471 108.575 379.887 101.146C382.348 93.6725 383.578 85.1276 383.578 75.5117C383.578 60.9284 380.616 49.1706 374.691 40.2383C368.812 31.2604 361.475 26.7715 352.68 26.7715Z" 
                  stroke="#D9B696" 
                  stroke-width="1" />
              <path d="M412.904 1C415.046 1 416.938 1.82031 418.578 3.46094C420.219 5.10156 421.039 6.99284 421.039 9.13477C421.039 11.3678 420.219 13.2819 418.578 14.877C416.983 16.472 415.092 17.2695 412.904 17.2695C410.671 17.2695 408.757 16.4948 407.162 14.9453C405.567 13.3503 404.77 11.4134 404.77 9.13477C404.77 6.94727 405.567 5.05599 407.162 3.46094C408.757 1.82031 410.671 1 412.904 1ZM436.83 3.46094C438.471 1.82031 440.385 1 442.572 1C444.76 1 446.651 1.82031 448.246 3.46094C449.887 5.10156 450.707 6.99284 450.707 9.13477C450.707 11.3678 449.887 13.2819 448.246 14.877C446.651 16.472 444.76 17.2695 442.572 17.2695C440.339 17.2695 438.425 16.472 436.83 14.877C435.235 13.2819 434.438 11.3678 434.438 9.13477C434.438 6.94727 435.235 5.05599 436.83 3.46094ZM445.512 26.2246V29.0273C442.139 29.1641 439.701 29.5286 438.197 30.1211C436.739 30.7135 435.691 31.8073 435.053 33.4023C434.46 34.9974 434.164 37.5495 434.164 41.0586V110.512C434.164 114.021 434.46 116.573 435.053 118.168C435.691 119.763 436.739 120.857 438.197 121.449C439.701 122.042 442.139 122.406 445.512 122.543V125.346C441.228 125.072 435.303 124.936 427.738 124.936C419.717 124.936 413.747 125.072 409.828 125.346V122.543C413.201 122.406 415.616 122.042 417.074 121.449C418.578 120.857 419.626 119.763 420.219 118.168C420.857 116.573 421.176 114.021 421.176 110.512V41.0586C421.176 37.5495 420.857 34.9974 420.219 33.4023C419.626 31.8073 418.578 30.7135 417.074 30.1211C415.616 29.5286 413.201 29.1641 409.828 29.0273V26.2246C413.702 26.498 419.672 26.6348 427.738 26.6348C435.303 26.6348 441.228 26.498 445.512 26.2246Z" 
                  stroke="#D9B696" 
                  stroke-width="1"/>
              </svg>   
        </div>

        <div class="menu_page_slider_drinks">
            <div class="menu_page_slider_content">
                <div class="menu_page_slider_heading">
                    <h2>Коктейлі</h2>
                  </div>
              <div class="menu_page_slider_img">
                    <img src="/img/koktails.jpg" alt="картинка  коктейлі">
              </div>
              <div class="menu_page_slider_list revers">
                <table>
                  <tr>
                    <td>Лицо ангела</td>
                    <td class="menu_price">120</td>
                  </tr>
                  <tr>
                    <td>Куба либре</td>
                    <td class="menu_price">95</td>
                  </tr>
                  <tr>
                    <td>Мохито</td>
                    <td class="menu_price">86</td>
                  </tr>
                  <tr>
                    <td>Пинаколада</td>
                    <td class="menu_price">220</td>
                  </tr>
                  <tr>
                    <td>Лонг-Айленд</td>
                    <td class="menu_price">68</td>
                  </tr>
                  <tr>
                    <td>Кайпиринья</td>
                    <td class="menu_price">120</td>
                  </tr>
                  <tr>
                    <td>Спритц </td>
                    <td class="menu_price">95</td>
                  </tr>
                  <tr>
                    <td>Маргарита</td>
                    <td class="menu_price">86</td>
                  </tr>
                  <tr>
                    <td>Текила санрайз</td>
                    <td class="menu_price">220</td>
                  </tr>
                  <tr>
                    <td>Зомби</td>
                    <td class="menu_price">120</td>
                  </tr>
                  <tr>
                    <td>Тинторетто </td>
                    <td class="menu_price">68</td>
                  </tr>
                  <tr>
                    <td>Дайкири</td>
                    <td class="menu_price">120</td>
                  </tr>
                </table>
              </div>
            </div>

              <div class="menu_page_slider_content">
                  <div class="menu_page_slider_heading">
                      <h2>Вина</h2>
                    </div>
                  <div class="menu_page_slider_img">
                      <img src="/img/vina.jpg" alt="картинка  Вина">
                    </div>
                <div class="menu_page_slider_list revers">
                  <table>
                    <tr>
                      <td>Спритц </td>
                      <td class="menu_price">95</td>
                    </tr>
                    <tr>
                      <td>Маргарита</td>
                      <td class="menu_price">86</td>
                    </tr>
                    <tr>
                      <td>Текила санрайз</td>
                      <td class="menu_price">220</td>
                    </tr>
                    <tr>
                      <td>Зомби</td>
                      <td class="menu_price">120</td>
                    </tr>
                    <tr>
                      <td>Тинторетто </td>
                      <td class="menu_price">68</td>
                    </tr>
                    <tr>
                      <td>Дайкири</td>
                      <td class="menu_price">120</td>
                    </tr>
                    <td>Лицо ангела</td>
                      <td class="menu_price">120</td>
                    </tr>
                    <tr>
                      <td>Куба либре</td>
                      <td class="menu_price">95</td>
                    </tr>
                    <tr>
                      <td>Мохито</td>
                      <td class="menu_price">86</td>
                    </tr>
                    <tr>
                      <td>Пинаколада</td>
                      <td class="menu_price">220</td>
                    </tr>
                    <tr>
                      <td>Лонг-Айленд</td>
                      <td class="menu_price">68</td>
                    </tr>
                    <tr>
                      <td>Кайпиринья</td>
                      <td class="menu_price">120</td>
                    </tr>
                    <tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="btn_page_menu">
                <a href="index.html" class="main_btn" id="btn_menu_page">на головну</a>
            </div>
       </div> <!--container end -->
    </section>