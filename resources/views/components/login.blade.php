<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="https://seller.unfade.in/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="https://seller.unfade.in/assets/images/favicon.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <title>Unfade - Register</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://seller.unfade.in/assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="https://seller.unfade.in/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="https://seller.unfade.in/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="https://seller.unfade.in/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="https://seller.unfade.in/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="https://seller.unfade.in/assets/css/vendors/select2.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="https://seller.unfade.in/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="https://seller.unfade.in/assets/css/style.css">
    <link id="color" rel="stylesheet" href="https://seller.unfade.in/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="https://seller.unfade.in/assets/css/responsive.css">
    <style>
    </style>

</head>

<body>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div class="col-md-8">
                        <div class="login-main">
                            <form class="theme-form" action="{{ route('login')}}" method="post">@csrf
                                <h4 class="mb-3">Register</h4>
                                <div class="mct-sub-heading1">Store Details</div>
                                <p class="mct-sub-heading">Fill the details below and join with us.</p>
                                <div class="form-group">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="mct-icon">
                                        <path
                                            d="M22 6.96667V5.13334C21.9967 5.02122 21.9692 4.91115 21.9193 4.81067L20.13 1.21734C19.9471 0.85093 19.6655 0.542854 19.317 0.327787C18.9685 0.11272 18.5669 -0.000800582 18.1573 4.24998e-06H3.84267C3.43314 -0.000800582 3.03151 0.11272 2.683 0.327787C2.33449 0.542854 2.05292 0.85093 1.87 1.21734L0.0806667 4.80334C0.0297761 4.90604 0.0022295 5.01873 0 5.13334V6.96667C0.000842114 7.50904 0.135058 8.04288 0.390823 8.52116C0.646588 8.99944 1.01605 9.40748 1.46667 9.70934V20.5333H0.733333C0.538841 20.5333 0.352315 20.6106 0.214788 20.7481C0.0772617 20.8856 0 21.0722 0 21.2667C0 21.4612 0.0772617 21.6477 0.214788 21.7852C0.352315 21.9227 0.538841 22 0.733333 22H21.2667C21.4612 22 21.6477 21.9227 21.7852 21.7852C21.9227 21.6477 22 21.4612 22 21.2667C22 21.0722 21.9227 20.8856 21.7852 20.7481C21.6477 20.6106 21.4612 20.5333 21.2667 20.5333H20.5333V9.70934C20.9839 9.40748 21.3534 8.99944 21.6092 8.52116C21.8649 8.04288 21.9992 7.50904 22 6.96667ZM20.5333 6.96667C20.5333 7.4529 20.3402 7.91921 19.9964 8.26303C19.6525 8.60685 19.1862 8.8 18.7 8.8C18.2138 8.8 17.7475 8.60685 17.4036 8.26303C17.0598 7.91921 16.8667 7.4529 16.8667 6.96667V5.86667H20.5333V6.96667ZM1.46667 6.96667V5.86667H5.13333V6.96667C5.13333 7.4529 4.94018 7.91921 4.59636 8.26303C4.25255 8.60685 3.78623 8.8 3.3 8.8C2.81377 8.8 2.34745 8.60685 2.00364 8.26303C1.65982 7.91921 1.46667 7.4529 1.46667 6.96667ZM6.6 5.86667H10.2667V6.96667C10.2667 7.4529 10.0735 7.91921 9.7297 8.26303C9.38588 8.60685 8.91956 8.8 8.43333 8.8C7.9471 8.8 7.48079 8.60685 7.13697 8.26303C6.79315 7.91921 6.6 7.4529 6.6 6.96667V5.86667ZM11.7333 5.86667H15.4V6.96667C15.4 7.4529 15.2068 7.91921 14.863 8.26303C14.5192 8.60685 14.0529 8.8 13.5667 8.8C13.0804 8.8 12.6141 8.60685 12.2703 8.26303C11.9265 7.91921 11.7333 7.4529 11.7333 6.96667V5.86667ZM3.18267 1.87C3.24417 1.74795 3.33855 1.64551 3.45517 1.57425C3.57179 1.50298 3.706 1.46572 3.84267 1.46667H18.1573C18.294 1.46572 18.4282 1.50298 18.5448 1.57425C18.6615 1.64551 18.7558 1.74795 18.8173 1.87L20.0787 4.4H1.92133L3.18267 1.87ZM13.2 20.5333H8.8V16.1333C8.8 15.9388 8.87726 15.7523 9.01479 15.6148C9.15232 15.4773 9.33884 15.4 9.53333 15.4H12.4667C12.6612 15.4 12.8477 15.4773 12.9852 15.6148C13.1227 15.7523 13.2 15.9388 13.2 16.1333V20.5333ZM19.0667 20.5333H14.6667V16.1333C14.6667 15.5499 14.4349 14.9903 14.0223 14.5777C13.6097 14.1651 13.0501 13.9333 12.4667 13.9333H9.53333C8.94986 13.9333 8.39028 14.1651 7.9777 14.5777C7.56512 14.9903 7.33333 15.5499 7.33333 16.1333V20.5333H2.93333V10.2667C3.05472 10.2861 3.17716 10.2984 3.3 10.3033C3.79503 10.2991 4.28277 10.1835 4.72707 9.96515C5.17137 9.74681 5.56085 9.4313 5.86667 9.042C6.17601 9.42479 6.56705 9.73354 7.01115 9.94564C7.45526 10.1577 7.94118 10.2678 8.43333 10.2678C8.92549 10.2678 9.41141 10.1577 9.85552 9.94564C10.2996 9.73354 10.6907 9.42479 11 9.042C11.3093 9.42479 11.7004 9.73354 12.1445 9.94564C12.5886 10.1577 13.0745 10.2678 13.5667 10.2678C14.0588 10.2678 14.5447 10.1577 14.9888 9.94564C15.433 9.73354 15.824 9.42479 16.1333 9.042C16.4428 9.42458 16.8339 9.73311 17.278 9.94501C17.7221 10.1569 18.2079 10.2668 18.7 10.2667C18.8221 10.2739 18.9446 10.2739 19.0667 10.2667V20.5333Z"
                                            fill="#3D3A45" />
                                    </svg>
                                    <label class="col-form-label">Your Shop Name <sup class="mct-red">*</sup></label>

                                    <input class="form-control mct-p-input mct-input-backclr" type="text"
                                        required="" value="" placeholder="Enter Your Shop Name"
                                        name="store_name">
                                </div>
                                <div class="form-group" style="position: relative">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="mct-icon mct-your-specialty-logo">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.42106 1.78737C9.42106 0.80145 10.2225 0 11.2084 0C11.5973 0 11.9574 0.125122 12.2506 0.336273C12.5438 0.125122 12.9039 0 13.2927 0C13.9616 0 14.5445 0.36891 14.8509 0.912785C15.0174 0.861392 15.1942 0.833722 15.377 0.833722C16.046 0.833722 16.6288 1.20263 16.9352 1.74651C17.1017 1.69511 17.2785 1.66744 17.4613 1.66744C18.4494 1.66744 19.2487 2.46696 19.2487 3.45482V4.73678C19.7082 4.84288 20.2907 4.99634 20.7919 5.21917C21.0921 5.3526 21.3841 5.51983 21.6054 5.73288C21.8302 5.94927 22 6.23185 22 6.58127C22 7.10059 21.6585 7.49593 21.1554 7.78983C20.6988 8.05661 20.0555 8.27478 19.2397 8.456C19.1993 9.0566 19.0842 9.30636 18.7791 9.9549M11.2084 0.656716C10.5852 0.656716 10.0778 1.16414 10.0778 1.78737V4.03046L9.84281 4.10017C9.31905 4.25555 8.85888 4.57157 8.52252 5.0134L8.43857 5.12367L8.30099 5.14044C7.12201 5.28416 6.2992 5.42362 5.79242 5.56126L5.57961 5.61907L5.44559 5.44394C4.90684 4.73994 3.9339 4.55342 3.17343 4.99137L0.700595 6.43558C0.67347 6.45142 0.656716 6.48054 0.656716 6.51207C0.656716 6.54338 0.673298 6.57258 0.700688 6.58871L3.17461 8.03395C3.88378 8.4424 4.80826 8.31186 5.36841 7.67288L5.50553 7.51647L5.70554 7.57361C6.18921 7.71181 6.97338 7.85056 8.13909 7.99904L8.29501 8.01889L8.37733 8.15279C8.48291 8.32453 8.60827 8.4834 8.75174 8.62673L10.205 10.08C10.6602 10.5352 10.9115 11.1421 10.9115 11.7858V13.1625H10.3747C9.75148 13.1625 9.24405 13.67 9.24405 14.2932C9.24405 14.7422 9.50779 15.1323 9.89067 15.3148L10.0778 15.4039V20.7289C10.0778 20.7778 10.1174 20.8174 10.1663 20.8174H18.5035C18.5524 20.8174 18.592 20.7778 18.592 20.7289V15.4039L18.7791 15.3148C19.162 15.1323 19.4257 14.7422 19.4257 14.2932C19.4257 13.67 18.9183 13.1625 18.2951 13.1625H17.7583V11.682C17.7583 11.1176 17.885 10.5502 18.1251 10.0395C18.4447 9.36016 18.5919 8.75654 18.592 8.18822L18.5921 7.92025L18.8546 7.8666C19.7678 7.67996 20.414 7.4624 20.8242 7.22279C21.2342 6.98323 21.3433 6.76411 21.3433 6.58127C21.3433 6.46319 21.29 6.34078 21.15 6.20603C21.0065 6.06795 20.792 5.9379 20.5251 5.81926C19.9921 5.58229 19.3343 5.42642 18.8501 5.3204L18.592 5.26388V3.45482C18.592 2.82961 18.0867 2.32416 17.4613 2.32416C17.2659 2.32416 17.0826 2.37382 16.9226 2.4611L16.575 2.65061L16.453 2.27398C16.3057 1.81924 15.8781 1.49044 15.377 1.49044C15.1816 1.49044 14.9983 1.54009 14.8383 1.62737L14.4907 1.81689L14.3687 1.44026C14.2214 0.985522 13.7938 0.656716 13.2927 0.656716C12.9772 0.656716 12.6915 0.786714 12.4852 0.997393L12.2506 1.23708L12.0159 0.997393C11.8097 0.786714 11.524 0.656716 11.2084 0.656716ZM11.2084 1.49044C11.0451 1.49044 10.9115 1.62399 10.9115 1.78737V3.33489H11.5054V1.78737C11.5054 1.62399 11.3718 1.49044 11.2084 1.49044ZM10.2548 1.78737C10.2548 1.2613 10.6824 0.833722 11.2084 0.833722C11.7345 0.833722 12.1621 1.2613 12.1621 1.78737V3.9916H10.2548V1.78737ZM13.2927 1.49044C13.1294 1.49044 12.9958 1.62399 12.9958 1.78737V3.33489H13.1677C13.3119 3.33489 13.4531 3.35012 13.5897 3.3793V1.78737C13.5897 1.62399 13.4561 1.49044 13.2927 1.49044ZM12.3391 1.78737C12.3391 1.2613 12.7667 0.833722 13.2927 0.833722C13.8188 0.833722 14.2464 1.2613 14.2464 1.78737V4.37123L13.771 4.13321C13.5894 4.04228 13.3844 3.9916 13.1677 3.9916H12.3391V1.78737ZM15.377 2.32416C15.2137 2.32416 15.0801 2.45772 15.0801 2.62109V4.7054C15.0801 4.87022 15.2131 5.00233 15.377 5.00233C15.5404 5.00233 15.674 4.86878 15.674 4.7054V2.62109C15.674 2.45772 15.5404 2.32416 15.377 2.32416ZM14.4234 2.62109C14.4234 2.09502 14.851 1.66744 15.377 1.66744C15.9031 1.66744 16.3307 2.09502 16.3307 2.62109V4.7054C16.3307 5.23147 15.9031 5.65905 15.377 5.65905C14.8525 5.65905 14.4234 5.23492 14.4234 4.7054V2.62109ZM9.42106 1.78737V3.55015V1.78737ZM9.42106 3.55015C8.9044 3.74746 8.44632 4.07402 8.088 4.505C7.10727 4.62704 6.35548 4.74907 5.82497 4.87553C5.06341 4.04794 3.82401 3.85822 2.84463 4.42289L0.369413 5.86849C0.140566 6.00213 0 6.24723 0 6.51207C0 6.77706 0.140655 7.0217 0.368824 7.1554L2.84497 8.60193L2.84659 8.60287C3.76112 9.13017 4.93843 9.00569 5.71814 8.25665C6.22574 8.384 6.9447 8.50588 7.9051 8.63103C8.0178 8.79553 8.14568 8.94954 8.28761 9.09133L9.74064 10.5444C10.0726 10.8763 10.2548 11.3162 10.2548 11.7858V12.5098C9.32461 12.5717 8.58734 13.3476 8.58734 14.2932C8.58734 14.9294 8.92116 15.4877 9.42106 15.8043V20.7289C9.42106 21.1405 9.75468 21.4741 10.1663 21.4741H18.5035C18.9151 21.4741 19.2487 21.1405 19.2487 20.7289V15.8043C19.7486 15.4877 20.0824 14.9294 20.0824 14.2932C20.0824 13.3476 19.3452 12.5717 18.415 12.5098V11.682C18.415 11.2143 18.5802 10.3782 18.7791 9.9549M17.4613 3.15788C17.298 3.15788 17.1644 3.29144 17.1644 3.45482V5.12226C17.1644 5.28564 17.298 5.41919 17.4613 5.41919C17.6232 5.41919 17.7583 5.28719 17.7583 5.12226V3.45482C17.7583 3.29035 17.6258 3.15788 17.4613 3.15788ZM16.5077 3.45482C16.5077 2.92874 16.9353 2.50117 17.4613 2.50117C17.9883 2.50117 18.415 2.92755 18.415 3.45482V5.12226C18.415 5.65655 17.9792 6.07591 17.4613 6.07591C16.9353 6.07591 16.5077 5.64833 16.5077 5.12226V3.45482ZM10.5831 4.82533C9.60166 4.82533 8.82719 5.62244 8.82719 6.58127V6.79605C8.82719 7.0726 8.8942 7.35026 9.02088 7.59772C9.10409 7.75998 9.21179 7.90783 9.34133 8.03738L10.7945 9.49053C11.4071 10.1031 11.7452 10.9193 11.7452 11.7858V12.5058H16.9246V11.682C16.9246 10.996 17.0787 10.3059 17.3705 9.68473C17.5338 9.33752 17.6421 9.0206 17.7016 8.72625C16.6346 8.87229 15.438 8.96155 14.2109 8.9865C14.2846 9.51353 14.2446 10.0648 14.0812 10.5889M8.17048 6.58127C8.17048 5.26561 9.23313 4.16861 10.5831 4.16861H13.1677C13.7967 4.16861 14.3298 4.68075 14.3298 5.33069C14.3298 5.97172 13.8087 6.49277 13.1677 6.49277H10.6673C10.6194 6.49277 10.5803 6.53084 10.5788 6.57863C10.5774 6.6264 10.6143 6.66671 10.662 6.66954C12.7409 6.79387 13.7957 8.70344 13.2854 10.3408C13.2709 10.3875 13.2968 10.4371 13.3436 10.4517C13.39 10.4662 13.4397 10.4402 13.4542 10.3937C13.6229 9.85254 13.6312 9.27381 13.4949 8.74606L13.3899 8.33938L13.8099 8.33561C15.3169 8.32205 16.787 8.20933 18.0312 8.01421L18.4317 7.95141L18.41 8.35619C18.3825 8.86741 18.2316 9.39687 17.9649 9.96392C17.7141 10.4979 17.5813 11.0926 17.5813 11.682V13.1625H11.0885V11.7858C11.0885 11.0934 10.8196 10.4444 10.3301 9.9549L8.87696 8.50174C8.69911 8.3239 8.55086 8.12041 8.4364 7.89714C8.26248 7.55741 8.17048 7.17704 8.17048 6.79605V6.58127ZM10.5831 4.82533H13.1677H10.5831ZM13.1677 4.82533C13.4411 4.82533 13.673 5.05051 13.673 5.33069L13.1677 4.82533ZM3.59113 5.71286L2.22262 6.51212L3.59331 7.31294C4.20514 7.66513 4.97351 7.21604 4.97351 6.51207C4.97351 5.80052 4.20139 5.36176 3.59113 5.71286ZM3.26314 5.14392C4.30685 4.54223 5.63023 5.28973 5.63023 6.51207C5.63023 7.71398 4.32166 8.49119 3.26519 7.8818L3.26361 7.88089L0.920609 6.51202L3.26314 5.14392ZM8.26328 5.32048L8.11038 5.81189C8.03335 6.05945 7.99347 6.31821 7.99347 6.58127V6.79589C7.99347 6.98603 8.01521 7.17682 8.05729 7.36398L8.16116 7.82603L7.69203 7.76128C6.95107 7.659 6.37069 7.55789 5.96158 7.45837L5.62055 7.37541L5.72601 7.04065C5.77951 6.87081 5.80723 6.69287 5.80723 6.51207C5.80723 6.36957 5.78968 6.22703 5.75546 6.08877L5.67619 5.76849L5.99685 5.69076C6.40998 5.59062 6.99932 5.48999 7.7532 5.38889L8.26328 5.32048ZM13.673 5.33069C13.673 5.60903 13.446 5.83605 13.1677 5.83605L13.673 5.33069ZM6.45101 6.26301C6.4596 6.34563 6.46395 6.42879 6.46395 6.51207C6.46395 6.63947 6.45391 6.7659 6.4342 6.89037C6.68623 6.94145 6.99036 6.9941 7.34677 7.04797C7.34013 6.96421 7.33675 6.88011 7.33675 6.79589V6.58127C7.33675 6.42122 7.34854 6.26239 7.37172 6.1058C7.01072 6.15935 6.70388 6.21186 6.45101 6.26301ZM16.3167 5.42253L16.5018 5.71885C16.7025 6.04026 17.0581 6.25292 17.4613 6.25292C17.8821 6.25292 18.2624 6.0162 18.4565 5.65816L18.5741 5.44118L18.8152 5.49384C19.5546 5.65533 20.0684 5.82117 20.4175 5.96875C20.592 6.04254 20.7289 6.11323 20.8338 6.1787C20.9336 6.24104 21.0216 6.30914 21.0818 6.38356L21.2364 6.57435L21.0971 6.77653C21.0359 6.86534 20.9386 6.94445 20.8304 7.01423C20.715 7.08864 20.5612 7.16879 20.3616 7.25124C19.9623 7.41617 19.3635 7.59689 18.486 7.75783C17.0688 8.01818 15.2991 8.16021 13.5012 8.16021L13.4702 8.16005H13.2806L13.1858 7.99583C13.0208 7.70992 12.8132 7.45681 12.5724 7.24439L11.9209 6.66978H13.1677C13.7151 6.66978 14.1881 6.3389 14.3953 5.86456L14.5368 5.54085L14.8493 5.70555C15.0082 5.78928 15.188 5.83605 15.377 5.83605C15.6211 5.83605 15.8469 5.75814 16.0324 5.62562L16.3167 5.42253ZM18.8969 6.18562C18.5679 6.62786 18.041 6.90963 17.4613 6.90963C16.9365 6.90963 16.4647 6.68217 16.1381 6.32218C15.9071 6.43135 15.649 6.49277 15.377 6.49277C15.1926 6.49277 15.0135 6.4645 14.8444 6.41172C14.5481 6.86989 14.0691 7.20011 13.5101 7.29712C13.5602 7.36395 13.6082 7.43265 13.654 7.50315C15.3684 7.49533 17.0374 7.35626 18.3675 7.11191C19.2141 6.95662 19.7659 6.78674 20.1109 6.64427C20.1493 6.62839 20.185 6.61293 20.218 6.59796C20.2 6.59 20.1813 6.58189 20.1618 6.57364C19.8926 6.45984 19.4871 6.32407 18.8969 6.18562ZM9.92241 6.55918C9.93435 6.15622 10.2645 5.83605 10.6673 5.83605H13.1677M10.3747 13.9963C10.2113 13.9963 10.0778 14.1298 10.0778 14.2932C10.0778 14.4566 10.2113 14.5901 10.3747 14.5901H12.6674C13.079 14.5901 13.4127 14.9238 13.4127 15.3354C13.4127 15.747 13.079 16.0806 12.6674 16.0806H10.9115V19.9837H17.7583V16.0806H16.0023C15.5907 16.0806 15.2571 15.747 15.2571 15.3354C15.2571 14.9238 15.5907 14.5901 16.0023 14.5901H18.2951C18.4584 14.5901 18.592 14.4566 18.592 14.2932C18.592 14.1298 18.4584 13.9963 18.2951 13.9963H10.3747ZM9.42106 14.2932C9.42106 13.7671 9.84864 13.3396 10.3747 13.3396H18.2951C18.8211 13.3396 19.2487 13.7671 19.2487 14.2932C19.2487 14.8193 18.8211 15.2469 18.2951 15.2469H16.0023C15.9534 15.2469 15.9138 15.2865 15.9138 15.3354C15.9138 15.3843 15.9534 15.4239 16.0023 15.4239H18.415V20.6404H10.2548V15.4239H12.6674C12.7163 15.4239 12.7559 15.3843 12.7559 15.3354C12.7559 15.2865 12.7163 15.2469 12.6674 15.2469H10.3747C9.84864 15.2469 9.42106 14.8193 9.42106 14.2932Z"
                                            fill="#3D3A45" />
                                    </svg>
                                    <label class="col-form-label mct-your-specialty">Your Specialty <sup
                                            class="mct-red">*</sup></label>
                                    <div class="row">
                                        <div class="mt-3">
                                            <select
                                                class="js-example-basic-multiple-limit-speciality_id col-sm-12 mct-input-backclr"
                                                multiple="multiple" name="speciality[]">
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">GST Number <small>(Optional)</small></label>
                                            <input class="form-control mt-3  mct-c-input mct-input-backclr"
                                                type="text" name="gst_number" value=""
                                                placeholder="Enter Your GST Number" autocomplete="off" maxlength="15"
                                                minlength="15">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">PAN Number <small>(Optional)</small></label>
                                            <input class="form-control  mt-3 mct-c-input mct-input-backclr"
                                                type="tel" name="pan_number" value=""
                                                placeholder="Enter Your PAN Number"autocomplete="off" maxlength="10"
                                                minlength="10">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Address line 1 <sup class="mct-red">*</sup> </label>
                                    <input class="form-control  mt-3 mct-c-input mct-input-backclr" type="text"
                                        required="" name="address_line_1" value=""
                                        placeholder="Enter Address Line 1" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Address line 2 <small>(Optional)</small> </label>
                                    <input class="form-control  mt-4 mct-c-input mct-input-backclr" type="text"
                                        name="address_line_2" value="" placeholder="Enter Address Line 2"
                                        autocomplete="off">
                                </div>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label">City <sup class="mct-red">*</sup></label>
                                            <input class="form-control mt-3 mct-c-input mct-input-backclr"
                                                type="text" required="" name="city" value=""
                                                placeholder="Enter City" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label">State <sup class="mct-red">*</sup></label>
                                            <input class="form-control  mt-3 mct-c-input mct-input-backclr"
                                                type="text" required="" value="" name="state"
                                                placeholder="Enter State" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label">Pincode <sup class="mct-red">*</sup>
                                            </label>
                                            <input class="form-control  mt-3 mct-c-input mct-input-backclr"
                                                type="text" required="" value="" name="pincode"
                                                maxlength="6" pattern="[0-9]*" placeholder="Enter Pincode"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <table id="myTable" width="100%">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label class="col-form-label">Social Media Handles
                                                        <sup></sup></label>
                                                    <div class="form-control mt-3 mct-social border-0">
                                                        <div class="p-2"></div>
                                                        <div class="mct-social2">
                                                            <select class="mct-social-select"
                                                                name="socialHandle[0][name]" id="select"
                                                                style="border: none">
                                                                <option value="instagram_handle">Instagram</option>
                                                                <option value="facebook_handle">Facebook</option>
                                                                <option value="twitter_handle">Twitter</option>
                                                                <option value="linkedin_handle">Linkedin</option>
                                                                <option value="google_handle">Google</option>
                                                                <option value="youtube_handle">Youtube</option>
                                                            </select>
                                                            <input class="form-control mct-social-url-input ms-4 "
                                                                type="text" placeholder="https://"
                                                                autocomplete="off" name="socialHandle[0][link]">

                                                        </div>
                                                        <p class="pull-right mt-2 text-primary add_row mct-btm-spc"
                                                            style="cursor: pointer"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" fill="currentColor" class="bi bi-plus"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                            </svg></i>Add More</p>
                                                        <p class="pull-right mt-2 text-danger remove_row mct-btm-spc-rmv"
                                                            style="cursor: pointer"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" fill="currentColor" class="bi bi-dash"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                                            </svg></i>Remove</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="form-group ms-2">
                                    <div class="checkbox checkbox-dark m-squar">
                                        <div class="mct-space">
                                            <input id="inline-sqr-1" type="checkbox" name="terms_condition"
                                                class="mct-term mct-input-backclr">
                                            <label for="inline-sqr-1">I accept all<span class="mct-term"
                                                    style="color:#03989e; font-weight:600">
                                                    Terms & Conditions</span> </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-grid gap-2 col-12 mx-auto">
                                        <button
                                            class="btn btn-primary rounded-pill py-2 d-flex justify-content-center align-items-center"
                                            type="submit">Register Now <i data-feather="arrow-right"
                                                class="mct-icon-arrow"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // const alpha = document.getElementById('speciality_id')
        // console.log(alpha)
        $(document).ready(function() {

            // $('#speciality_id').change(function(){
            //     console.log($('#speciality_id').val())
            // })
            // $('#speciality_id').val("")
            // $('#plus').click(function() {
            //     $('#speciality_id').change(function(){
            //     const value_1 = $('#speciality_id').val()
            //     console.log(value_1);
            //     var plus = ` <li class="select2-selection__choice"> <span class="select2-selection__choice__remove" role="presentation">×</span> ${value_1} </li>`;
            //     $('.select2-selection__rendered').append(plus);
            // })

            // if ($('#speciality_id').text() == null) {
            //     console.log("null")
            // } else if ($('.select2-search__field').text() == "") {
            //     const alpha = document.getElementById('speciality_id').value
            //     console.log(alpha)
            //     console.log("balvx")
            // } else {
            //     console.log($('#speciality_id').text())
            // }



            // console.log(plus_input);

            // });


            let rowNumber = 0;
            // Hide the "Remove" button for the first row
            $('tr:first-child .remove_row').hide();

            // if($('.mct-social-url-input').val() == ''){
            //     $('.add_row').attr('disabled','disabled');
            // }
            // $('.mct-social-url-input').change(function(){
            //     if($('.mct-social-url-input').val() == ''){
            //         console.log("value is null")
            //     $('.add_row').attr('disabled','disabled');
            // }else{
            //     $('.add_row').attr('disabled',''); 
            //     console.log("value is not null")
            // }
            // });
            // Add a new row when the "Add More" button is clicked
            $('#myTable').on('click', '.add_row', function() {
                rowNumber++;
                var row = `<tr>
            <td>
                <div class="form-group">
                    <label class="col-form-label">Social Media Handles <sup></sup></label>
                    <div class="form-control  mct-social border-0">
                        <div class="p-2"></div>
                        <div class="mct-social2">
                            <select class="mct-social-select w-50" name="socialHandle[` + rowNumber + `][name]" id="select" style="border: none" >
                                <option value="facebook_handle">Facebook</option>
                                <option value="instagram_handle">Instagram</option>
                                <option value="twitter_handle">Twitter</option>
                                <option value="linkedin_handle">Linkedin</option>
                                <option value="google_handle">Google</option>
                                <option value="youtube_handle">Youtube</option>
                            </select>
                            <input class="form-control mct-social-url-input ms-4" type="text"  name="socialHandle[` +
                    rowNumber + `][link]" placeholder="https://" autocomplete="off">
                        </div>
                        <p class="pull-right mt-2 text-primary add_row mct-btm-spc" style="cursor: pointer"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></i>Add More</p>
                        <p class="pull-right mt-2 text-danger remove_row mct-btm-spc-rmv" style="cursor: pointer"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
</svg></i>Remove</p>
                    </div>
                </div>
            </td>
        </tr>`;
                $("#myTable").append(row);
                $('tr:first-child .remove_row').show();
                // Hide the "Add More" button for all but the last row
                $('tr:not(:last-child) .add_row').hide();
                // Show the "Remove" button for all but the first row
                $('tr:last-child .remove_row').hide();

                $('tr:not(:last-child) .remove_row').show();

            });

            // Remove the current row when the "Remove" button is clicked
            $('#myTable').on('click', '.remove_row', function() {
                rowNumber--;
                $(this).closest('tr').remove();
                // $('tr:first-child .remove_row').show();
                // Hide the "Remove" button for the first row
                $('tr:child .remove_row').hide();
                // Show the "Add More" button for the last row
                $('tr:last-child .add_row').show();
                $('tr:last-child .add_row').show();
            });
        });
    </script>

    <!-- latest jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://seller.unfade.in/assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="https://seller.unfade.in/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="https://seller.unfade.in/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="https://seller.unfade.in/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="https://seller.unfade.in/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="https://seller.unfade.in/assets/js/select2/select2.full.min.js"></script>
    <script src="https://seller.unfade.in/assets/js/select2/select2-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="https://seller.unfade.in/assets/js/script.js"></script>
    <!-- Plugin used-->
</body>

</html>
