<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("includes/compatibility.php"); ?>
   <?php include("includes/var.php"); ?>
   <meta name="description" content="...">
   <title>The Interactive AI | ...</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
   <?php include("includes/style.php"); ?>
   <!-- GSAP Core -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
   <!-- ScrollTrigger Plugin -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
   <!-- ScrollToPlugin -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollToPlugin.min.js"></script>

</head>

<body>
   <div class="nav-buttons">
      <button id="scrollUp">
         <svg xmlns="http://www.w3.org/2000/svg" width="12" height="6" viewBox="0 0 12 6" fill="none">
            <path d="M10.4673 5.31738C10.7589 5.58706 11.2338 5.589 11.528 5.32171C11.8222 5.05443 11.8243 4.61913 11.5327 4.34945L9.7539 2.70428C9.08396 2.08464 8.53641 1.5782 8.04854 1.21905C7.54122 0.845573 7.02628 0.575218 6.40816 0.502998C6.13714 0.471331 5.86286 0.471331 5.59184 0.502998C4.97372 0.575218 4.45878 0.845574 3.95146 1.21905C3.46359 1.5782 2.91605 2.08463 2.24611 2.70427L0.467309 4.34945C0.175726 4.61913 0.177844 5.05443 0.472041 5.32171C0.766238 5.589 1.24111 5.58706 1.53269 5.31738L3.28 3.70132C3.98914 3.04545 4.47718 2.59555 4.89071 2.29113C5.2924 1.99541 5.55042 1.89396 5.7815 1.86696C5.92659 1.85001 6.07341 1.85001 6.2185 1.86696C6.44958 1.89396 6.7076 1.99541 7.10929 2.29113C7.52282 2.59555 8.01086 3.04545 8.72 3.70132L10.4673 5.31738Z" fill="currentColor" />
         </svg>
      </button>
      <button id="scrollDown">
         <svg xmlns="http://www.w3.org/2000/svg" width="12" height="6" viewBox="0 0 12 6" fill="none">
            <path d="M1.53269 0.472041C1.24111 0.177844 0.766238 0.175725 0.472041 0.467309C0.177844 0.758893 0.175726 1.23376 0.467309 1.52796L2.2461 3.32269C2.91604 3.99866 3.46359 4.55114 3.95146 4.94294C4.45878 5.35037 4.97372 5.64531 5.59184 5.72409C5.86286 5.75864 6.13714 5.75864 6.40816 5.72409C7.02628 5.64531 7.54122 5.35037 8.04854 4.94294C8.53641 4.55114 9.08395 3.99867 9.75389 3.3227L11.5327 1.52796C11.8243 1.23376 11.8222 0.758893 11.528 0.467309C11.2338 0.175726 10.7589 0.177845 10.4673 0.472042L8.72 2.23501C8.01086 2.9505 7.52282 3.44131 7.10929 3.77341C6.7076 4.096 6.44958 4.20668 6.2185 4.23613C6.07341 4.25462 5.92659 4.25462 5.7815 4.23613C5.55042 4.20668 5.2924 4.096 4.89071 3.77341C4.47718 3.44131 3.98914 2.9505 3.28 2.23501L1.53269 0.472041Z" fill="currentColor" />
         </svg>
      </button>
   </div>


   <section class="mainBanner">
      <div class="mainBanner-backImg">
         <img src="assets/images/banner/home-img.png" alt="Banner Image">
      </div>

      <div class="mainBanner-nav">
         <ul>
            <li><a href="#">Board of Directors</a></li>
            <li><a href="#">Request Assistance</a></li>
            <li><a href="#">Donation</a></li>
            <li><a href="#">Letter</a></li>
            <li><a href="#">Home</a></li>
         </ul>
      </div>

      <div class="mainBanner-social">
         <ul>
            <li>
               <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 20 24" fill="none">
                     <path d="M2.55844 0.000494003C2.94994 0.892933 3.20943 1.84393 3.33543 2.83537C2.72644 1.81549 1.76946 1.03693 0.615988 0.670935C1.18298 1.62193 1.58346 2.67193 1.80696 3.79093C0.845488 4.69393 0.25 5.98081 0.25 7.38481C0.25 10.1088 2.46095 12.3017 5.17138 12.3017C5.56137 12.3017 5.93637 12.2687 6.29336 12.1877C6.09386 16.2782 4.1334 19.8976 1.14698 22.329C1.88346 22.7535 2.72644 23.0025 3.63392 23.0025C5.33788 23.0025 6.84834 22.125 7.72282 20.8171C7.70782 21.6076 7.47833 22.383 7.11683 23.04C7.13183 23.04 7.15133 23.04 7.17083 23.04C9.56177 23.04 11.5477 21.3345 12.0052 19.0981C12.1147 19.4986 12.1672 19.9351 12.1672 20.3881C12.1672 20.7031 12.1492 21.0211 12.0832 21.3195C14.0317 20.6821 15.4641 18.8731 15.5107 16.7221C16.8201 18.3961 17.6091 20.5216 17.6091 22.8225C17.6091 23.226 17.5911 23.613 17.5416 24C18.947 21.8205 19.7496 19.2376 19.7496 16.4522C19.7496 7.39837 12.2497 2.44849 5.74887 2.44849C5.53137 2.44849 5.32138 2.45593 5.11288 2.46649C4.4199 1.48993 3.55442 0.669493 2.55844 0.000494003Z" fill="currentColor" />
                  </svg>
               </a>
            </li>
            <li>
               <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                     <g clip-path="url(#clip0_147_138)">
                        <mask id="mask0_147_138" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="25">
                           <path d="M0 0.00121307L0 24.0007H23.9994V0.00121307H0Z" fill="currentColor" />
                        </mask>
                        <g mask="url(#mask0_147_138)">
                           <path d="M6.01841 1.48547C6.01841 2.85515 5.56467 4.11887 4.79922 5.13371C3.92174 6.29759 2.63458 7.13375 1.15103 7.42907C0.784474 7.50227 0.406201 7.54163 0.0185547 7.54535L0.0185547 11.4579H10.7095L16.5656 11.4626C18.1311 11.4626 19.4585 12.4821 19.9254 13.8954C20.0609 14.3055 20.1251 14.7485 20.0998 15.2097C20.0674 15.7985 19.8898 16.3502 19.6029 16.8297C18.9927 17.8501 17.8854 18.542 16.619 18.5607C14.6394 18.5903 13.0256 16.99 13.0256 15.0119C13.0256 14.6214 13.0893 14.2465 13.2051 13.8954H10.283H9.23255C9.17771 14.2657 9.14912 14.6425 9.14912 15.0236C9.14912 17.1887 10.0491 19.2137 11.6705 20.6612C12.8957 21.7552 14.459 22.4115 16.0982 22.5127C18.2516 22.6453 20.2985 21.8574 21.8088 20.3293C22.0305 20.1048 22.2363 19.869 22.4261 19.6224C23.4344 18.3123 23.981 16.7106 23.981 15.0236C23.981 14.6425 23.9529 14.2657 23.898 13.8954C23.6645 12.3195 22.9432 10.8654 21.8088 9.71795C20.4153 8.30795 18.5651 7.52891 16.5959 7.52051L7.85118 7.54067C8.37008 6.86807 8.79944 6.13259 9.13271 5.34323C9.65067 4.11563 9.91316 2.81387 9.91269 1.47419H7.07166H6.01748L6.01841 1.48547Z" fill="currentColor" />
                        </g>
                     </g>
                     <defs>
                        <clipPath id="clip0_147_138">
                           <rect width="24" height="24" fill="currentColor" transform="matrix(0 -1 1 0 0 24)" />
                        </clipPath>
                     </defs>
                  </svg>
               </a>
            </li>
            <li>
               <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                     <g clip-path="url(#clip0_147_127)">
                        <mask id="mask0_147_127" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                           <path d="M0 0.000480652L0 24H23.9994V0.000480652H0Z" fill="currentColor" />
                        </mask>
                        <g mask="url(#mask0_147_127)">
                           <path d="M7.05589 0.0238304C5.78071 0.0801086 4.90404 0.28627 4.14439 0.581711C3.33804 0.886511 2.61611 1.35535 2.01598 1.96951C1.4065 2.56963 0.932899 3.29635 0.632921 4.09339C0.337522 4.85743 0.131309 5.72959 0.075086 7.00471C0.0141016 8.28943 0 8.69731 0 11.9557C0 15.214 0.0141016 15.6219 0.0703246 16.9018C0.126547 18.177 0.332942 19.0537 0.628159 19.8132C0.932899 20.6197 1.40173 21.3416 2.01598 21.9418C2.61611 22.5513 3.34279 23.0247 4.13981 23.3248C4.90404 23.6202 5.77595 23.8265 7.05114 23.8827C8.33584 23.9437 8.74369 23.9578 12.002 23.9578C15.2604 23.9578 15.6683 23.9437 16.9482 23.8874C18.2234 23.8312 19.1 23.6248 19.8598 23.3294C20.666 23.0247 21.388 22.5513 21.9882 21.9418C22.5977 21.3416 23.0712 20.615 23.3712 19.8179C23.6666 19.0537 23.8728 18.1818 23.9291 16.9064C23.9855 15.6267 23.9994 15.2186 23.9994 11.9602C23.9994 8.70187 23.9855 8.29399 23.9291 7.01407C23.8728 5.73883 23.6666 4.86223 23.3712 4.10275C22.7476 2.48983 21.4724 1.21459 19.8598 0.59107C19.0955 0.29587 18.2234 0.0894699 16.9482 0.0331917C15.6683 -0.0229702 15.2604 -0.0371284 12.002 -0.0371284C8.74369 -0.0371284 8.33584 -0.0323315 7.05589 0.0238304ZM16.8545 2.18515C18.0265 2.23675 18.6594 2.43355 19.0814 2.59771C20.1269 3.00091 20.9567 3.83071 21.36 4.87627C21.524 5.29819 21.721 5.93575 21.7724 7.10323C21.8288 8.36911 21.8428 8.74879 21.8428 11.9509C21.8428 15.1531 21.8288 15.5375 21.7724 16.7987C21.721 17.9708 21.524 18.6037 21.36 19.0257C21.1676 19.546 20.863 20.0196 20.4644 20.404C20.0753 20.8025 19.6064 21.1072 19.0861 21.2995C18.6642 21.4636 18.0265 21.6605 16.8592 21.7119C15.5934 21.7684 15.2136 21.7823 12.0114 21.7823C8.80925 21.7823 8.42484 21.7684 7.16376 21.7119C5.99168 21.6605 5.35877 21.4636 4.93682 21.2995C4.41635 21.1072 3.94294 20.8025 3.55835 20.3992C3.15984 20.0102 2.8551 19.5414 2.66299 19.0209C2.4989 18.599 2.30203 17.9613 2.25038 16.794C2.19416 15.5281 2.18006 15.1483 2.18006 11.9463C2.18006 8.73943 2.19416 8.35975 2.25038 7.09843C2.30203 5.92639 2.4989 5.29351 2.66299 4.87159C2.8551 4.35127 3.15984 3.87763 3.55835 3.49327C3.94752 3.09475 4.41635 2.78995 4.93682 2.59771C5.35877 2.43355 5.99627 2.23675 7.16376 2.18515C8.4296 2.12887 8.80925 2.11471 12.0114 2.11471C15.2136 2.11471 15.5886 2.12887 16.8545 2.18515Z" fill="currentColor" />
                           <path d="M5.83691 11.9554C5.83691 15.3591 8.59825 18.1206 12.002 18.1206C15.4058 18.1206 18.1671 15.3591 18.1671 11.9554C18.1671 8.55165 15.4058 5.79033 12.002 5.79033C8.59825 5.79033 5.83691 8.55165 5.83691 11.9554ZM16.0011 11.9554C16.0011 14.1636 14.2103 15.9546 12.002 15.9546C9.79376 15.9546 8.00287 14.1636 8.00287 11.9554C8.00287 9.74721 9.79376 7.95633 12.002 7.95633C14.2103 7.95633 16.0011 9.74721 16.0011 11.9554Z" fill="currentColor" />
                           <path d="M5.59357 4.10728C6.38839 4.10728 7.03285 4.7518 7.03285 5.5468C7.03285 6.34156 6.38839 6.98608 5.59357 6.98608C4.79857 6.98608 4.1543 6.34156 4.1543 5.5468C4.1543 4.7518 4.79857 4.10728 5.59357 4.10728Z" fill="currentColor" />
                        </g>
                     </g>
                     <defs>
                        <clipPath id="clip0_147_127">
                           <rect width="24" height="24" fill="white" transform="matrix(0 -1 1 0 0 24)" />
                        </clipPath>
                     </defs>
                  </svg>
               </a>
            </li>
         </ul>
      </div>

      <div class="container-fluid">
         <div class="mainBanner-main">
            <div class="mainBanner-heading">
               <h1>PHOENIX</h1>
               <h2>COLLECTIVE</h2>
            </div>


            <div class="mainBanner-cont">
               <div class="mainBanner-btn">
                  <a href="#" class="themeBtn">
                     <div class="themeBtn-leftIcon">
                        <img src="assets/images/button-corner.png" alt="">
                     </div>
                     <div class="themeBtn-rightIcon">
                        <img src="assets/images/button-corner.png" alt="">
                     </div>
                     <span>
                        Write A Letter

                        <div class="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M14.9752 1.4598C15.8146 1.45605 16.3914 1.45442 16.8308 1.5024C16.9736 1.518 17.0929 1.53809 17.1943 1.56238L8.3372 10.4194C8.09313 10.6635 8.09313 11.0592 8.3372 11.3033C8.58128 11.5474 8.97701 11.5474 9.22109 11.3033L18.0781 2.44626C18.1024 2.5476 18.1225 2.66693 18.1381 2.80972C18.1861 3.24909 18.1845 3.82587 18.1807 4.66535L18.1715 6.7338C18.17 7.07897 18.4485 7.36004 18.7937 7.36158C19.1389 7.36312 19.4199 7.08455 19.4215 6.73938L19.4309 4.63368C19.4344 3.84058 19.4373 3.19238 19.3807 2.67402C19.3219 2.135 19.1922 1.65777 18.8744 1.24712C18.8056 1.15823 18.7314 1.07382 18.6522 0.994375C18.571 0.912903 18.4846 0.836646 18.3934 0.766099C17.9827 0.448298 17.5055 0.318657 16.9665 0.259792C16.4481 0.203185 15.8 0.206088 15.0069 0.209641L12.9011 0.219036C12.556 0.220576 12.2774 0.501644 12.2789 0.846818C12.2805 1.19199 12.5615 1.47056 12.9067 1.46902L14.9752 1.4598Z" fill="currentColor" />
                              <path d="M10.8402 2.86805C10.3355 2.862 9.77957 2.862 9.16872 2.862H9.12831C7.59786 2.862 6.39819 2.86199 5.44641 2.96511C4.47513 3.07034 3.68815 3.28894 3.01621 3.77713C2.60942 4.07268 2.25169 4.43041 1.95614 4.8372C1.46795 5.50914 1.24935 6.29612 1.14412 7.2674C1.041 8.21918 1.04101 9.41885 1.04102 10.9493V11.0247C1.04101 12.5552 1.041 13.7548 1.14412 14.7066C1.24935 15.6779 1.46795 16.4649 1.95614 17.1368C2.25169 17.5436 2.60942 17.9013 3.01621 18.1969C3.68815 18.6851 4.47513 18.9037 5.44641 19.0089C6.39818 19.112 7.59782 19.112 9.12823 19.112H9.20374C10.7341 19.112 11.9339 19.112 12.8856 19.0089C13.8569 18.9037 14.6439 18.6851 15.3158 18.1969C15.7226 17.9013 16.0803 17.5436 16.3759 17.1368C16.8641 16.4649 17.0827 15.6779 17.1879 14.7066C17.291 13.7548 17.291 12.5552 17.291 11.0248V10.9841C17.291 10.3733 17.291 9.81749 17.285 9.31285C17.2808 8.96769 16.9977 8.69124 16.6525 8.69538C16.3074 8.69952 16.0309 8.98268 16.0351 9.32783C16.041 9.8243 16.041 10.3731 16.041 10.987C16.041 12.5633 16.0402 13.6953 15.9452 14.572C15.8515 15.4369 15.6722 15.9787 15.3646 16.4021C15.1462 16.7027 14.8818 16.9672 14.5811 17.1856C14.1578 17.4932 13.6159 17.6725 12.751 17.7662C11.8744 17.8611 10.7423 17.862 9.16602 17.862C7.58971 17.862 6.45768 17.8611 5.58105 17.7662C4.71613 17.6725 4.17428 17.4932 3.75094 17.1856C3.45028 16.9672 3.18586 16.7027 2.96741 16.4021C2.65984 15.9787 2.48056 15.4369 2.38685 14.572C2.29187 13.6953 2.29102 12.5633 2.29102 10.987C2.29102 9.41069 2.29187 8.27866 2.38685 7.40204C2.48056 6.53712 2.65984 5.99527 2.96741 5.57193C3.18586 5.27126 3.45027 5.00685 3.75094 4.7884C4.17428 4.48083 4.71613 4.30155 5.58105 4.20784C6.45768 4.11286 7.58971 4.112 9.16602 4.112C9.77992 4.112 10.3287 4.11201 10.8252 4.11796C11.1703 4.1221 11.4535 3.84565 11.4576 3.5005C11.4618 3.15535 11.1853 2.87219 10.8402 2.86805Z" fill="currentColor" />
                           </svg>
                        </div>
                     </span>
                  </a>

                  <a href="#">
                     <div class="themeBtn-leftIcon">
                        <img src="assets/images/button-corner.png" alt="">
                     </div>
                     <div class="themeBtn-rightIcon">
                        <img src="assets/images/button-corner.png" alt="">
                     </div>
                     <span>
                        Donate

                        <div class="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M14.9752 1.4598C15.8146 1.45605 16.3914 1.45442 16.8308 1.5024C16.9736 1.518 17.0929 1.53809 17.1943 1.56238L8.3372 10.4194C8.09313 10.6635 8.09313 11.0592 8.3372 11.3033C8.58128 11.5474 8.97701 11.5474 9.22109 11.3033L18.0781 2.44626C18.1024 2.5476 18.1225 2.66693 18.1381 2.80972C18.1861 3.24909 18.1845 3.82587 18.1807 4.66535L18.1715 6.7338C18.17 7.07897 18.4485 7.36004 18.7937 7.36158C19.1389 7.36312 19.4199 7.08455 19.4215 6.73938L19.4309 4.63368C19.4344 3.84058 19.4373 3.19238 19.3807 2.67402C19.3219 2.135 19.1922 1.65777 18.8744 1.24712C18.8056 1.15823 18.7314 1.07382 18.6522 0.994375C18.571 0.912903 18.4846 0.836646 18.3934 0.766099C17.9827 0.448298 17.5055 0.318657 16.9665 0.259792C16.4481 0.203185 15.8 0.206088 15.0069 0.209641L12.9011 0.219036C12.556 0.220576 12.2774 0.501644 12.2789 0.846818C12.2805 1.19199 12.5615 1.47056 12.9067 1.46902L14.9752 1.4598Z" fill="currentColor" />
                              <path d="M10.8402 2.86805C10.3355 2.862 9.77957 2.862 9.16872 2.862H9.12831C7.59786 2.862 6.39819 2.86199 5.44641 2.96511C4.47513 3.07034 3.68815 3.28894 3.01621 3.77713C2.60942 4.07268 2.25169 4.43041 1.95614 4.8372C1.46795 5.50914 1.24935 6.29612 1.14412 7.2674C1.041 8.21918 1.04101 9.41885 1.04102 10.9493V11.0247C1.04101 12.5552 1.041 13.7548 1.14412 14.7066C1.24935 15.6779 1.46795 16.4649 1.95614 17.1368C2.25169 17.5436 2.60942 17.9013 3.01621 18.1969C3.68815 18.6851 4.47513 18.9037 5.44641 19.0089C6.39818 19.112 7.59782 19.112 9.12823 19.112H9.20374C10.7341 19.112 11.9339 19.112 12.8856 19.0089C13.8569 18.9037 14.6439 18.6851 15.3158 18.1969C15.7226 17.9013 16.0803 17.5436 16.3759 17.1368C16.8641 16.4649 17.0827 15.6779 17.1879 14.7066C17.291 13.7548 17.291 12.5552 17.291 11.0248V10.9841C17.291 10.3733 17.291 9.81749 17.285 9.31285C17.2808 8.96769 16.9977 8.69124 16.6525 8.69538C16.3074 8.69952 16.0309 8.98268 16.0351 9.32783C16.041 9.8243 16.041 10.3731 16.041 10.987C16.041 12.5633 16.0402 13.6953 15.9452 14.572C15.8515 15.4369 15.6722 15.9787 15.3646 16.4021C15.1462 16.7027 14.8818 16.9672 14.5811 17.1856C14.1578 17.4932 13.6159 17.6725 12.751 17.7662C11.8744 17.8611 10.7423 17.862 9.16602 17.862C7.58971 17.862 6.45768 17.8611 5.58105 17.7662C4.71613 17.6725 4.17428 17.4932 3.75094 17.1856C3.45028 16.9672 3.18586 16.7027 2.96741 16.4021C2.65984 15.9787 2.48056 15.4369 2.38685 14.572C2.29187 13.6953 2.29102 12.5633 2.29102 10.987C2.29102 9.41069 2.29187 8.27866 2.38685 7.40204C2.48056 6.53712 2.65984 5.99527 2.96741 5.57193C3.18586 5.27126 3.45027 5.00685 3.75094 4.7884C4.17428 4.48083 4.71613 4.30155 5.58105 4.20784C6.45768 4.11286 7.58971 4.112 9.16602 4.112C9.77992 4.112 10.3287 4.11201 10.8252 4.11796C11.1703 4.1221 11.4535 3.84565 11.4576 3.5005C11.4618 3.15535 11.1853 2.87219 10.8402 2.86805Z" fill="currentColor" />
                           </svg>
                        </div>
                     </span>
                  </a>
               </div>
               <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type </p>
            </div>
         </div>
      </div>

      <div class="swiper-container phoenix-marquee">
         <div class="swiper-wrapper">
            <div class="swiper-slide">PHOENIX COLLECTIVE</div>
            <div class="swiper-slide">PHOENIX COLLECTIVE</div>
            <div class="swiper-slide">PHOENIX COLLECTIVE</div>
            <div class="swiper-slide">PHOENIX COLLECTIVE</div>
         </div>
      </div>
   </section>

   <section class="aboutSection">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-5">
               <div class="img">
                  <img src="assets/images/about/img1.png" alt="Image">
               </div>
            </div>

            <div class="col-md-7">
               <div class="cont mn-hd">
                  <h6 class="fs-sm">ABOUT US</h6>
                  <h5 class="fs-lg">A CREATURE OF MYTH THAT IS CONSUMED BY FLAMES</h5>
                  <p class="fs-p1">The Phoenix Collective is named after the legendary phoenix—a creature of myth that is consumed by flames We chose this symbol because it embodies the very essence of what we strive to achieve. In the heart of every person who faces despair, loss, or defeat, there lies a phoenix waiting to rise, to reclaim their life, and to soar. <br><br> We are not just a nonprofit; we are a lifeline for those who feel like their world has crumbled. Our mission goes beyond merely helping—it’s about transformation. Whether someone has lost their job, their hope, or their way, we step in to provide the resources, mentoring, and unwavering support they need to rebuild. We believe that every person deserves the chance to rise again, and we are here to make that possible.</p>
               </div>
            </div>
         </div>
      </div>

      <div class="swiper-container phoenix-marquee">
         <div class="swiper-wrapper">
            <div class="swiper-slide">PHOENIX COLLECTIVE</div>
            <div class="swiper-slide">PHOENIX COLLECTIVE</div>
            <div class="swiper-slide">PHOENIX COLLECTIVE</div>
            <div class="swiper-slide">PHOENIX COLLECTIVE</div>
         </div>
      </div>
   </section>

   <section class="aboutSection">
      <div class="container-fluid w-100">
         <div class="row">
            <div class="col-md-7">
               <div class="cont mn-hd">
                  <h6 class="fs-sm">MISSION STATEMENT</h6>
                  <h5 class="fs-lg">THE MOST RADIANT STRENGTH CAN EMERGE</h5>
                  <p class="fs-p1">At The Phoenix Collective, we are driven by the belief that from the deepest struggles, the most radiant strength can emerge. Our mission is to be the spark that reignites hope, helping those who have been brought low by life’s challenges rise from the ashes and reclaim their power. We exist to support, uplift, and transform lives, providing the tools and guidance needed to rebuild and soar to new heights. In a world where many feel abandoned or forgotten, we break through the barriers of traditional charity, offering unconditional support to anyone in need. Because within every setback lies the potential for a greater comeback.
                  </p>
               </div>
            </div>

            <div class="col-md-5">
               <div class="img">
                  <img src="assets/images/about/img1.png" alt="Image">
               </div>
            </div>
         </div>
      </div>

      <div class="copyright text-center">
         <div class="copyright-leftIcon">
            <img src="assets/images/button-corner.png" alt="">
         </div>
         <div class="copyright-rightIcon">
            <img src="assets/images/button-corner.png" alt="">
         </div>
         <div class="container">
            <p>Copyright © Designed & Developed by Lorem Ipsum 2024</p>
         </div>
      </div>
   </section>

   <?php include("includes/scripts.php"); ?>
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

   <script>
      var swiper = new Swiper('.swiper-container', {
         direction: 'horizontal',
         loop: true,
         speed: 12000, // Adjust speed for smoother/faster scroll
         autoplay: {
            delay: 0, // No delay between scrolls
            disableOnInteraction: false,
         },
         slidesPerView: 'auto',
         spaceBetween: 90, // Adjust spacing between slides if needed
      });

      gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

      const sections = gsap.utils.toArray("section");
      let currentSectionIndex = 0;

      // Set up ScrollTrigger on each section
      sections.forEach((section, index) => {
         ScrollTrigger.create({
            trigger: section,
            start: "top top", // Start when the section hits the top of the viewport
            pin: true, // Pin the section in place
            pinSpacing: false, // Prevent spacing between sections
            scrub: false, // Disable scrub for smoother performance
            snap: 1, // Snap to the next section
            end: "+=100%", // Adjust the end value as needed
            onEnter: () => { currentSectionIndex = index; },
            onEnterBack: () => { currentSectionIndex = index; },
            // onEnter: () => { // This funtion use and video play
            //    if (section.classList.contains("section1")) {
            //       const video1 = document.getElementById("video1");
            //       video1.style.display = "block"; // Show video
            //       video1.play(); // Play video
            //    } else if (section.classList.contains("section3")) {
            //       const video3 = document.getElementById("video3");
            //       video3.style.display = "block"; // Show video
            //       video3.play(); // Play video
            //    }
            // },
         });
      });

      // Scroll to the next or previous section when buttons are clicked
      document.getElementById("scrollDown").addEventListener("click", () => {
         console.log('Down', currentSectionIndex, sections.length)
         if (currentSectionIndex < sections.length - 1) {
            currentSectionIndex++;
            scrollToSection(currentSectionIndex);
         }
      });

      document.getElementById("scrollUp").addEventListener("click", () => {
         console.log('Up', currentSectionIndex, sections.length)
         if (currentSectionIndex > -1) {
            currentSectionIndex--;
            scrollToSection(currentSectionIndex);
         }
      });

      // Function to smoothly scroll to the target section
      function scrollToSection(index) {
         gsap.to(window, {
            scrollTo: {
               y: sections[index],
               offsetY: 0
            },
            duration: 1, // Adjust scroll duration for smoother effect
            ease: "power2.inOut"
         });

         console.log('object is click')
      }
   </script>
</body>

</html>