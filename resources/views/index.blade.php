<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Máy tính thuế thu nhập</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <!-- Header -->
  <div id="header">

    <div class="header_logo">
      <svg class="header-logo-text" width="107" height="20" viewBox="0 0 107 20" fill="none" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision">
        <path alt="L" d="M37.6199 19.6662H33.2979V0H37.6199V19.6662Z" fill="#691F74"></path>
        <path alt="E" d="M44.1821 13.4429C44.43 15.2491 45.9712 16.3583 47.8138 16.3583C49.107 16.3583 50.4293 15.6662 51.0856 14.5816L54.1922 16.638C52.9525 18.8859 50.862 20 47.8624 20C45.5774 20 43.6814 19.2785 42.111 17.8356C40.5699 16.3632 39.8018 14.5031 39.8018 12.2258C39.8018 10.0859 40.5699 8.27975 42.0867 6.75337C43.6279 5.22699 45.4704 4.47607 47.5901 4.47607C49.7633 4.47607 51.5232 5.173 52.8747 6.53251C54.2263 7.89202 54.9118 9.69815 54.9118 11.892C54.9118 12.584 54.8826 13.1141 54.8583 13.4478H44.1821V13.4429ZM50.6238 10.5816C50.512 9.27607 49.4424 8 47.488 8C46.6081 8 45.8642 8.27975 45.2857 8.8589C44.7072 9.4135 44.3766 9.99754 44.2939 10.5816H50.6238Z" fill="#691F74"></path>
        <path alt="N" d="M66.5954 19.6663V11.4455C66.5954 9.69825 65.7154 8.55468 64.0382 8.55468C62.3026 8.55468 61.3983 9.80622 61.3983 11.4455V19.6663H57.1055V4.60868H61.3691V6.778H61.3983C61.7581 6.16941 62.2248 5.69334 62.8568 5.33506C64.15 4.58414 64.9181 4.55469 65.555 4.55469C67.3149 4.55469 68.6373 5.10929 69.5173 6.24794C70.4264 7.38659 70.8639 8.77554 70.8639 10.4443V19.6663H66.5954Z" fill="#691F74"></path>
        <path alt="A" fill-rule="evenodd" clip-rule="evenodd" d="M31.1147 4.60864V12.1375V19.6663H26.7927V18.8712C25.835 19.3669 24.7751 19.6663 23.6521 19.6663C19.5343 19.6663 16.1943 16.2945 16.1943 12.1375C16.1943 7.98042 19.5343 4.60864 23.6521 4.60864C24.7751 4.60864 25.8398 4.90803 26.7927 5.40373V4.60864H31.1147ZM23.9194 15.7545C25.8526 15.7545 27.4197 14.1285 27.4197 12.1227C27.4197 10.1168 25.8526 8.49075 23.9194 8.49075C21.9861 8.49075 20.419 10.1168 20.419 12.1227C20.419 14.1285 21.9861 15.7545 23.9194 15.7545Z" fill="#691F74"></path>
        <path alt="T" d="M80.9704 8.97176V4.60858H77.3387V0H73.0459V4.60858V8.96686V14.081C73.0459 17.5509 75.0538 19.6662 78.8799 19.6662C79.5945 19.6662 80.2557 19.5828 80.8877 19.3865V15.9116H80.1196C80.0467 15.9166 79.9737 15.9165 79.896 15.9165C78.2187 15.9165 77.3387 15.2491 77.3387 13.5558V8.97176H80.9704Z" fill="#691F74"></path>
        <path alt="T" d="M14.3516 8.97176V4.60858H10.8026V0H6.50977V4.60858V8.96686V14.081C6.50977 17.5509 8.51763 19.6662 12.3437 19.6662C13.0584 19.6662 13.7196 19.5828 14.3516 19.3865V15.9116H13.5835C13.5105 15.9166 13.4376 15.9165 13.3598 15.9165C11.6826 15.9165 10.8026 15.2491 10.8026 13.5558V8.97176H14.3516Z" fill="#691F74"></path>
        <path alt="." d="M0.486328 8.97183V4.60864H4.80833V8.96692H0.486328V8.97183Z" fill="#FE3B1F"></path>
        <path alt="." d="M83.4712 8.44829C83.0266 8.00148 82.7939 7.45077 82.7939 6.83252C82.7939 5.55445 83.8072 4.51538 85.0789 4.51538C86.3506 4.51538 87.3639 5.55965 87.3639 6.83252C87.3639 7.45077 87.1313 8.00148 86.6867 8.44829C86.2421 8.89509 85.7148 9.12888 85.0789 9.12888C84.4689 9.12888 83.9157 8.89509 83.4712 8.44829Z" fill="#FE3B1F"></path>
        <path alt="c" d="M84.0771 18.8319C83.4693 18.2184 83.1582 17.4528 83.1582 16.5399C83.1582 15.6712 83.4693 14.9202 84.0771 14.2822C84.6848 13.6442 85.4432 13.335 86.3474 13.335C87.7233 13.335 88.7345 14.0859 89.0991 15.1853L87.9275 15.7153C87.6649 14.9644 87.135 14.5816 86.3572 14.5816C85.8516 14.5816 85.4286 14.7681 85.0737 15.1264C84.7285 15.4847 84.5584 15.946 84.5584 16.5153C84.5584 17.0945 84.7285 17.5705 85.0737 17.9386C85.4189 18.3116 85.8516 18.4932 86.3717 18.4932C87.1399 18.4932 87.6649 18.1104 87.9518 17.3448L89.1429 17.8797C88.9727 18.3754 88.6373 18.8172 88.1706 19.1902C87.699 19.5583 87.0913 19.7448 86.3474 19.7448C85.4383 19.7448 84.6848 19.4454 84.0771 18.8319Z" fill="#691F74"></path>
        <path alt="o" d="M95.5073 14.2476C96.1393 14.8611 96.4456 15.6121 96.4456 16.5151C96.4456 17.428 96.1344 18.1937 95.5073 18.817C94.8898 19.4305 94.1314 19.7446 93.2271 19.7446C92.3326 19.7446 91.5645 19.4305 90.9324 18.817C90.3004 18.2035 89.9941 17.4378 89.9941 16.5348C89.9941 15.6317 90.315 14.8661 90.947 14.2526C91.579 13.6391 92.3472 13.325 93.2417 13.325C94.1217 13.3348 94.8752 13.6341 95.5073 14.2476ZM91.3894 16.5151C91.3894 17.0599 91.5596 17.5213 91.9048 17.9139C92.2499 18.2967 92.6972 18.493 93.2369 18.493C93.7765 18.493 94.2238 18.3065 94.5544 17.9237C94.885 17.5409 95.06 17.0795 95.06 16.5348C95.06 15.99 94.8898 15.5286 94.5446 15.1458C94.2141 14.763 93.7668 14.5765 93.2271 14.5765C92.6875 14.5765 92.2402 14.763 91.895 15.1458C91.5645 15.5237 91.3894 15.9753 91.3894 16.5151Z" fill="#691F74"></path>
        <path alt="m" d="M101.618 19.6415V16.1667C101.618 15.2391 101.205 14.6256 100.301 14.6256C99.4742 14.6256 98.9589 15.2636 98.9589 16.201V19.6366H97.5928V13.4575H98.9249V14.2918C99.4062 13.644 100.014 13.3201 100.748 13.3201C101.633 13.3201 102.26 13.6538 102.639 14.3409C103.271 13.644 103.864 13.3201 104.773 13.3201C106.251 13.3201 107 14.3409 107 15.8182V19.6366H105.634V16.152C105.634 15.2145 105.235 14.6256 104.326 14.6256C103.49 14.6256 102.975 15.2489 102.975 16.1863V19.6366H101.618V19.6415Z" fill="#691F74"></path>
      </svg>
    </div>
    <!-- PC -->
    <div class="nav-pc">
      <div class="header-menu">
        <div class="header-menu-item">
          Tìm việc làm
        </div>
        <div style="font-weight: 600;" class="header-menu-item  menu-active">
          Máy tính thuế
        </div>
      </div>
      <div class="header-right">
        <div class="header-right-lang">
          <p style="font-weight: 600;">VI</p>
          <p class="lang" style="color: #E1DCE2; font-weight: 600;">|</p>
          <p class="lang" style="color: #E1DCE2;"> EN</p>
        </div>
        <div class="header-right-account">
          Dung
          <i class="fa fa-chevron-down"></i>
        </div>
        <div class="header-right-recruite">
          Dành cho nhà tuyển dụng
        </div>
      </div>
    </div>

    <!-- Mobile -->
    <label for="nav-mobile-input" class="nav-bar-btn">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
      </svg>
    </label>

    <input type="checkbox" hidden class="nav-input" id="nav-mobile-input">

    <label for="nav-mobile-input" class="nav-overlay"></label>

    <div class="nav-mobile">
      <svg class="header-logo-text" width="107" height="20" viewBox="0 0 107 20" fill="none" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision">
        <path alt="L" d="M37.6199 19.6662H33.2979V0H37.6199V19.6662Z" fill="#691F74"></path>
        <path alt="E" d="M44.1821 13.4429C44.43 15.2491 45.9712 16.3583 47.8138 16.3583C49.107 16.3583 50.4293 15.6662 51.0856 14.5816L54.1922 16.638C52.9525 18.8859 50.862 20 47.8624 20C45.5774 20 43.6814 19.2785 42.111 17.8356C40.5699 16.3632 39.8018 14.5031 39.8018 12.2258C39.8018 10.0859 40.5699 8.27975 42.0867 6.75337C43.6279 5.22699 45.4704 4.47607 47.5901 4.47607C49.7633 4.47607 51.5232 5.173 52.8747 6.53251C54.2263 7.89202 54.9118 9.69815 54.9118 11.892C54.9118 12.584 54.8826 13.1141 54.8583 13.4478H44.1821V13.4429ZM50.6238 10.5816C50.512 9.27607 49.4424 8 47.488 8C46.6081 8 45.8642 8.27975 45.2857 8.8589C44.7072 9.4135 44.3766 9.99754 44.2939 10.5816H50.6238Z" fill="#691F74"></path>
        <path alt="N" d="M66.5954 19.6663V11.4455C66.5954 9.69825 65.7154 8.55468 64.0382 8.55468C62.3026 8.55468 61.3983 9.80622 61.3983 11.4455V19.6663H57.1055V4.60868H61.3691V6.778H61.3983C61.7581 6.16941 62.2248 5.69334 62.8568 5.33506C64.15 4.58414 64.9181 4.55469 65.555 4.55469C67.3149 4.55469 68.6373 5.10929 69.5173 6.24794C70.4264 7.38659 70.8639 8.77554 70.8639 10.4443V19.6663H66.5954Z" fill="#691F74"></path>
        <path alt="A" fill-rule="evenodd" clip-rule="evenodd" d="M31.1147 4.60864V12.1375V19.6663H26.7927V18.8712C25.835 19.3669 24.7751 19.6663 23.6521 19.6663C19.5343 19.6663 16.1943 16.2945 16.1943 12.1375C16.1943 7.98042 19.5343 4.60864 23.6521 4.60864C24.7751 4.60864 25.8398 4.90803 26.7927 5.40373V4.60864H31.1147ZM23.9194 15.7545C25.8526 15.7545 27.4197 14.1285 27.4197 12.1227C27.4197 10.1168 25.8526 8.49075 23.9194 8.49075C21.9861 8.49075 20.419 10.1168 20.419 12.1227C20.419 14.1285 21.9861 15.7545 23.9194 15.7545Z" fill="#691F74"></path>
        <path alt="T" d="M80.9704 8.97176V4.60858H77.3387V0H73.0459V4.60858V8.96686V14.081C73.0459 17.5509 75.0538 19.6662 78.8799 19.6662C79.5945 19.6662 80.2557 19.5828 80.8877 19.3865V15.9116H80.1196C80.0467 15.9166 79.9737 15.9165 79.896 15.9165C78.2187 15.9165 77.3387 15.2491 77.3387 13.5558V8.97176H80.9704Z" fill="#691F74"></path>
        <path alt="T" d="M14.3516 8.97176V4.60858H10.8026V0H6.50977V4.60858V8.96686V14.081C6.50977 17.5509 8.51763 19.6662 12.3437 19.6662C13.0584 19.6662 13.7196 19.5828 14.3516 19.3865V15.9116H13.5835C13.5105 15.9166 13.4376 15.9165 13.3598 15.9165C11.6826 15.9165 10.8026 15.2491 10.8026 13.5558V8.97176H14.3516Z" fill="#691F74"></path>
        <path alt="." d="M0.486328 8.97183V4.60864H4.80833V8.96692H0.486328V8.97183Z" fill="#FE3B1F"></path>
        <path alt="." d="M83.4712 8.44829C83.0266 8.00148 82.7939 7.45077 82.7939 6.83252C82.7939 5.55445 83.8072 4.51538 85.0789 4.51538C86.3506 4.51538 87.3639 5.55965 87.3639 6.83252C87.3639 7.45077 87.1313 8.00148 86.6867 8.44829C86.2421 8.89509 85.7148 9.12888 85.0789 9.12888C84.4689 9.12888 83.9157 8.89509 83.4712 8.44829Z" fill="#FE3B1F"></path>
        <path alt="c" d="M84.0771 18.8319C83.4693 18.2184 83.1582 17.4528 83.1582 16.5399C83.1582 15.6712 83.4693 14.9202 84.0771 14.2822C84.6848 13.6442 85.4432 13.335 86.3474 13.335C87.7233 13.335 88.7345 14.0859 89.0991 15.1853L87.9275 15.7153C87.6649 14.9644 87.135 14.5816 86.3572 14.5816C85.8516 14.5816 85.4286 14.7681 85.0737 15.1264C84.7285 15.4847 84.5584 15.946 84.5584 16.5153C84.5584 17.0945 84.7285 17.5705 85.0737 17.9386C85.4189 18.3116 85.8516 18.4932 86.3717 18.4932C87.1399 18.4932 87.6649 18.1104 87.9518 17.3448L89.1429 17.8797C88.9727 18.3754 88.6373 18.8172 88.1706 19.1902C87.699 19.5583 87.0913 19.7448 86.3474 19.7448C85.4383 19.7448 84.6848 19.4454 84.0771 18.8319Z" fill="#691F74"></path>
        <path alt="o" d="M95.5073 14.2476C96.1393 14.8611 96.4456 15.6121 96.4456 16.5151C96.4456 17.428 96.1344 18.1937 95.5073 18.817C94.8898 19.4305 94.1314 19.7446 93.2271 19.7446C92.3326 19.7446 91.5645 19.4305 90.9324 18.817C90.3004 18.2035 89.9941 17.4378 89.9941 16.5348C89.9941 15.6317 90.315 14.8661 90.947 14.2526C91.579 13.6391 92.3472 13.325 93.2417 13.325C94.1217 13.3348 94.8752 13.6341 95.5073 14.2476ZM91.3894 16.5151C91.3894 17.0599 91.5596 17.5213 91.9048 17.9139C92.2499 18.2967 92.6972 18.493 93.2369 18.493C93.7765 18.493 94.2238 18.3065 94.5544 17.9237C94.885 17.5409 95.06 17.0795 95.06 16.5348C95.06 15.99 94.8898 15.5286 94.5446 15.1458C94.2141 14.763 93.7668 14.5765 93.2271 14.5765C92.6875 14.5765 92.2402 14.763 91.895 15.1458C91.5645 15.5237 91.3894 15.9753 91.3894 16.5151Z" fill="#691F74"></path>
        <path alt="m" d="M101.618 19.6415V16.1667C101.618 15.2391 101.205 14.6256 100.301 14.6256C99.4742 14.6256 98.9589 15.2636 98.9589 16.201V19.6366H97.5928V13.4575H98.9249V14.2918C99.4062 13.644 100.014 13.3201 100.748 13.3201C101.633 13.3201 102.26 13.6538 102.639 14.3409C103.271 13.644 103.864 13.3201 104.773 13.3201C106.251 13.3201 107 14.3409 107 15.8182V19.6366H105.634V16.152C105.634 15.2145 105.235 14.6256 104.326 14.6256C103.49 14.6256 102.975 15.2489 102.975 16.1863V19.6366H101.618V19.6415Z" fill="#691F74"></path>
      </svg>
      <label for="nav-mobile-input" class="nav-mobile-close">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
          <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
        </svg>
      </label>
      <ul class="nav-mobile-list">
        <li class="menu-item">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.8348 2C15.7282 2 19.6997 6.032 19.6997 11C19.6997 15.968 15.7282 20 10.8348 20C5.94143 20 1.96997
                15.968 1.96997 11C1.96997 6.032 5.94143 2 10.8348 2ZM10.8348 18C14.6438 18 17.7297 14.867 17.7297 11C17.7297
                7.132 14.6438 4 10.8348 4C7.02491 4 3.93994 7.132 3.93994 11C3.93994 14.867 7.02491 18 10.8348 18ZM19.1924
                18.071L21.979 20.899L20.5852 22.314L17.7997 19.485L19.1924 18.071Z" fill="#30183F"></path>
            </svg>
          <a class="nav-mobile-link" href="#">Tìm việc làm</a>
        </li>
        <li class="menu-item item-currentpage">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3.75" y="1.75" width="16.5" height="20.5" rx="2.25" stroke="#30183F" stroke-width="1.5"></rect>
            <rect x="6.7" y="4.7" width="10.6" height="3.6" rx="1.8" stroke="#30183F" stroke-width="1.4"></rect>
            <rect x="7" y="12" width="2.2" height="2.2" rx="1.1" fill="#30183F"></rect>
            <rect x="11" y="12" width="2.2" height="2.2" rx="1.1" fill="#30183F"></rect>
            <rect x="15" y="12" width="2.2" height="2.2" rx="1.1" fill="#30183F"></rect>
            <rect x="7" y="16" width="2.2" height="2.2" rx="1.1" fill="#30183F"></rect>
            <rect x="11" y="16" width="2.2" height="2.2" rx="1.1" fill="#30183F"></rect>
            <rect x="15" y="16" width="2.2" height="2.2" rx="1.1" fill="#30183F"></rect>
            </svg>
        <a style="font-weight: 600;" class="nav-mobile-link" href="#">Máy tính thuế</a>
        </li>
        <li class="menu-item">
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19.9918 5.00545H15.9864V3.99728C15.9864 3.45232 15.8501 2.96185 15.5777 2.51226C15.3052 2.04905
                14.9373 1.6812 14.4741 1.40872C14.0245 1.13624 13.5341 1 12.9891 1H9.0109C8.46594 1 7.96185 1.13624 7.49864
                1.40872C7.04905 1.6812 6.69482 2.04905 6.42234 2.51226C6.14986 2.96185 6.01362 3.45232 6.01362
                3.99728V5.00545H2.00817C1.73569 5.00545 1.49046 5.11444 1.2861 5.3188C1.09537 5.50954 1 5.74114 1
                6.01362V9.99183C1 10.4278 1.08174 10.8365 1.25886 11.218C1.43597 11.5995 1.6812 11.9401 2.00817
                12.2262V18.0027C2.00817 18.5477 2.14441 19.0381 2.41689 19.4877C2.68937 19.951 3.0436 20.3188 3.49319
                20.5913C3.9564 20.8638 4.46049 21 5.00545 21H16.9945C17.5395 21 18.03 20.8638 18.4796 20.5913C18.9428
                20.3188 19.3106 19.951 19.5831 19.4877C19.8556 19.0381 19.9918 18.5477 19.9918 18.0027V12.2262C20.3052
                11.9401 20.564 11.5995 20.7411 11.218C20.9183 10.8365 21 10.4278 21 9.99183V6.01362C21 5.74114 20.891
                5.50954 20.6866 5.3188C20.4959 5.11444 20.2643 5.00545 19.9918 5.00545ZM8.00272 3.99728C8.00272 3.7248
                8.09809 3.49319 8.28883 3.30245C8.49319 3.11172 8.73842 3.01635 9.0109 3.01635H12.9891C13.2616 3.01635
                13.4932 3.11172 13.6839 3.30245C13.8883 3.49319 13.9973 3.7248 13.9973 3.99728V5.00545H8.00272V3.99728ZM18.0027
                18.0027C18.0027 18.2752 17.8937 18.5068 17.6894 18.6975C17.4986 18.8883 17.267 18.9837 16.9945
                18.9837H5.00545C4.73297 18.9837 4.48774 18.8883 4.28338 18.6975C4.09264 18.5068 3.99728 18.2752 3.99728
                18.0027V12.9891H6.01362V13.9973C6.04087 14.2425 6.14986 14.4469 6.3406 14.624C6.53134 14.7875 6.74932
                14.8692 6.99455 14.8692C7.25341 14.8692 7.47139 14.7875 7.66213 14.624C7.85286 14.4469 7.96185 14.2425
                8.00272 13.9973V12.9891H13.9973V13.9973C14.0245 14.2425 14.1335 14.4469 14.3379 14.624C14.5286 14.7875
                14.7466 14.8692 14.9918 14.8692C15.2507 14.8692 15.4687 14.7875 15.6594 14.624C15.8501 14.4469 15.9591
                14.2425 16 13.9973V12.9891H18.0163V18.0027H18.0027ZM18.9837 9.99183C18.9837 10.2643 18.8883 10.5095 18.6975
                10.7139C18.5068 10.9046 18.2752 11 18.0027 11H15.9864V9.99183C15.9591 9.74659 15.8365 9.55586 15.6458
                9.39237C15.455 9.21526 15.2234 9.13351 14.9782 9.13351C14.733 9.13351 14.5286 9.21526 14.3243
                9.39237C14.1335 9.55586 14.0245 9.74659 13.9973 9.99183V11H8.00272V9.99183C7.97548 9.74659 7.85286 9.55586
                7.66213 9.39237C7.47139 9.21526 7.25341 9.13351 6.99455 9.13351C6.74932 9.13351 6.54496 9.21526 6.3406
                9.39237C6.14986 9.55586 6.04087 9.74659 6.01362 9.99183V11H3.99728C3.7248 11 3.49319 10.9046 3.30245
                10.7139C3.11172 10.5095 3.01635 10.2643 3.01635 9.99183V6.99455H18.9837V9.99183Z" fill="#30183F" stroke="white" stroke-width="0.4"></path>
            </svg>
          <a class="nav-mobile-link" href="#">Dành cho nhà tuyển dụng</a>
        </li>
        <li class="menu-item account-item">
          <div class="menu-item">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0)">
              <circle cx="12" cy="7.8" r="3.95" stroke="#30183F" stroke-width="1.7"></circle>
              <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="4" y="12" width="16" height="17">
              <circle cx="12" cy="20.6" r="7.15" stroke="#9081AC" stroke-width="1.7"></circle>
              </mask>
              <g mask="url(#mask0)">
              <rect x="-2.39996" y="12.6" width="27.2" height="8" fill="#30183F"></rect>
              </g>
              </g>
              <defs>
              <clipPath id="clip0">
              <rect width="24" height="24" fill="white"></rect>
              </clipPath>
              </defs>
              </svg>
            <a class="nav-mobile-link" href="#">Dung</a>
          </div>
          <svg style="margin-right: 13px;" width="11" height="8" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.4" d="M9 1L5 5L1 1" stroke="#30183F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </li>
      </ul>
      <div class="menu__item menu__multiItem">
        <div class="menu__item menu__currentPage languageMenuLink">
          <a style="color: #fff; text-decoration: none;" href="#">
            VI
          </a>
        </div>
        <div style="color: #fff; opacity: 0.5;" class="menu__item menu__separator"> |
        </div>
        <div class="menu__item  languageMenuLink">
          <a style="color: #fff; opacity: 0.6; text-decoration: none;" href="#">
            EN
          </a>
        </div>
    </div>
    </div>

  </div>

<!-- Nav -->
  <div id="header-nav">
    <div class="nav-contain">
      <div class="nav-contain-title">
        Máy tính thuế thu nhập Việt Nam 2023
      </div>
      <div class="nav-contain-subtitle">
        Tìm mức lương của bạn sau thuế
      </div>
    </div>
  </div>


<!-- Form -->
  <form method="POST" id="header-form">
    @csrf
    <div class="form-contain">
      <div class="form-contain-item">
        <div class="form-contain-input input-salary">
            <label class="input-label">Nhập tổng thu nhập của bạn</label>
            <div class="input-item">
                <i class="fa fa-money salary-icon"></i>
                <input class="input" name="taxable" value="{{ old('taxable') }}">
            </div>
            @error('taxable')
                <div style="color: red; margin: 5px 0 0 5px;">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-contain-input input-salary">
            <label class="input-label">Mỗi</label>
            <div class="input-item">
                {{-- <i class="fa fa-chevron-down chevrondown-icon"></i> --}}
                <input class="input-time" value="Năm" disabled>
            </div>
        </div>
        <div class="form-contain-input input-salary input-where">
            <label class="input-label">Bạn làm ở đâu?</label>
            <div class="input-item">
                <select class="input-adress" name="country" id="">
                    <option value="America">Mỹ</option>
                    <option value="Anh">Anh</option>
                    <option value="Canada">Canada</option>
                    <option value="Australia">Australia</option>
                </select>
            </div>
        </div>
        <button class="calculator-but" type="submit">
            Tính toán
        </button>
      </div>
    </div>
    <img class="main-header-img" src="{{ asset('images/icon__main-header.png') }}" alt="Logo">
  </form>

  <!-- Body -->
  <div id="container">
    <div class="content">
      <!-- Fisrt Content -->
      <div class="fisrt-content">
        <div style="padding: 20px 0;">
          <div class="first-content-header">
            <div class="first-content-header-label">
              Mức lương
            </div>
            <div>
              <div class="first-content-header-list">
                <div class="first-content-header-list-item item-active">
                  Năm
                </div>
                <div class="first-content-header-list-item">
                  Tháng
                </div>
                <div class="first-content-header-list-item">
                  Tuần
                </div>
                <div class="first-content-header-list-item">
                  Ngày
                </div>
                <div class="first-content-header-list-item">
                  Giờ
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="first-content-container">
          <div class="first-content-container-top">
            <div class="container-top-title">Khấu trừ</div>
          </div>
          <div class="first-content-container-bottom">
            <div class="first-content-container-bottom-contain" style="display: flex; justify-content: space-between; flex-wrap: wrap;">
              <div class="deduction-item">
                <div class="deduction-item-card item-card-active">
                  <div class="item-card-label">
                    Lương
                  </div>
                  <div class="item-card-value">
                    {{ number_format($money,0,',',',' )}}
                  </div>
                </div>
                {{-- <div class="deduction-item-card">
                  <div class="item-card-label">
                    An ninh xã hội
                  </div>
                  <div class="item-card-value">
                    - 4,000,000 ₫
                  </div>
                </div>
                <div class="deduction-item-card">
                  <div class="item-card-label">
                    Bảo hiểm y tế
                  </div>
                  <div class="item-card-value">
                    - 750,000 ₫
                  </div>
                </div>
                <div class="deduction-item-card">
                  <div class="item-card-label">
                    Bảo hiểm thất nghiệp
                  </div>
                  <div class="item-card-value">
                    - 500,000 ₫
                  </div>
                </div> --}}
                <div class="deduction-item-card">
                  <div class="item-card-label">
                    Thuế thu nhập
                  </div>
                  <div class="item-card-value">
                    {{ number_format($deduction,0,',',',' )}} ₫
                  </div>
                </div>
                <div class="line-split"></div>
                <div class="deduction-item-card item-card-active">
                  <div class="item-card-label">
                    Tổng số thuế
                  </div>
                  <div class="item-card-value">
                    - {{ number_format($deduction,0,',',',' )}} ₫
                  </div>
                </div>
                <div class="deduction-item-card item-card-active">
                  <div style="font-size: 16px;" class="item-card-label">
                    Trả bằng tiền mặt
                  </div>
                  <div style="font-size: 16px;" class="item-card-value">
                    {{ number_format($result,0,',',',' )}} ₫
                  </div>
                </div>
                <div class="line-split"></div>
                <div class="deduction-item-card">
                  <div class="item-card-label">
                    Thuế suất cận biên
                  </div>
                  <div class="item-card-value">
                    15.0%
                  </div>
                </div>
                <div class="deduction-item-card">
                  <div class="item-card-label">
                    Thuế suất trung bình
                  </div>
                  <div class="item-card-value">
                    15.0%
                  </div>
                </div>
              </div>
              <div class="pie-chart-item">
                <div class="chart-holder">
                  <img src="./images/pie-chart.png" alt="PieChart">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div>

      </div>
      </div>

      <!-- Second Content -->
      <div class="second-content">
        <div class="taxBerg">
          <div class="taxBerg-container">
              <div class="taxBerg-title">
                TaxBerg
              </div>
              <div class="taxBerg-holder">
                <div class="cloud-animation">
                  <img src="./images/cloud_left.png" alt="CloudAnimation">
                </div>
                <div class="cloud-right">
                  <img src="./images/cloud_right.png" alt="CloudRight">
                </div>
                <div class="taxBerg-frame">
                  <div class="taxBerg-frame-holder">
                    <div class="taxBerg-dash">
                      <div class="dot-dash">
                        <div class="dot"></div>
                      </div>
                    </div>
                    <div class="textBerg-text">
                      <div class="textBerge-number">
                        {{ number_format($result,0,',',',' )}} ₫
                      </div>
                      <div class="textBerg-subtitle">
                        Trả bằng tiền mặt
                      </div>
                    </div>
                    <div class="taxBerg-dash-second">
                      <div class="dot-dash-second">
                        <div class="dot"></div>
                      </div>
                    </div>
                    <div class="textBerg-text-second">
                      <div class="textBerge-number">
                        {{-- {{ number_format($deduction,0,',',',' )}} ₫ --}}
                      </div>
                      <div class="textBerg-subtitle">
                        Thuế mà người sử dụng lao động trả
                      </div>
                    </div>
                    <div class="taxBerg-dash-you">
                      <div class="dot-dash-you">
                        <div class="dot"></div>
                      </div>
                    </div>
                    <div class="textBerg-text-you">
                      <div class="textBerge-number">
                        {{ number_format($deduction,0,',',',' )}} ₫
                      </div>
                      <div class="textBerg-subtitle">
                        Thuế bạn phải trả
                      </div>
                    </div>
                    <div class="textBerg-ice-img">
                      <div class="ice-img-boat">
                        <img class="boat_flag" src="./images/vn.png" alt="VietNam">
                        <img class="boat-ice" src="./images/iceberg.png" alt="ICE">
                      </div>
                    </div>
                  </div>
                  <div class="taxBerg-water-top"></div>
                  <div class="taxBerg-water-middle"></div>
                </div>
                <div class="taxBerg-water-bottom"></div>
                <div class="total-tax">
                  <div class="total-tax-text">
                    <div class="tax-text-title">
                      Tổng số tiền thuế đã trả
                    </div>
                    <div class="total-tax-number">
                      18,237,500 ₫
                    </div>
                    <div class="total-text-info">
                      Bạn có biết chủ lao động của bạn cũng đóng thuế trên lương của bạn không? Để trả bạn 4,166,667 ₫, chủ lao động phải mất 895,833 ₫. Nói cách khác, mỗi khi bạn tiêu 10 ₫ từ số tiền bạn vất vả kiếm được, 3.65 ₫ được đóng cho chính phủ.
                    </div>
                  </div>
                  <div class="total-tax-text">
                    <div class="tax-text-title">
                      Thuế suất thực
                    </div>
                    <div class="total-tax-number">
                      30.0%
                    </div>
                    <div class="total-text-info">
                      Vì vậy, khi bạn và chủ lao động đều đóng thuế, mức thuế suất cũ 15% giờ tăng lên 30.0%, có nghĩa là mức thuế suất thực của bạn cao hơn mức thuế suất ban đầu 15%.
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

      <!-- ThirdContent -->
      <div class="people-also-ask">
        <div>
          <div class="people-ask-top">
            <div class="ask-top-title"> Mọi người cũng yêu cầu</div>
          </div>
          <div class="people-ask-bottom">
            <div class="ask-bottom-link">
              <div style="cursor: pointer;">{{ $money }} ₫ mỗi năm là bao nhiêu  mỗi giờ?</div>
              <div>
                <i class="fa fa-chevron-right ask-bottom-link-icon"></i>
              </div>
            </div>
            <div class="ask-bottom-split"></div>
            <div class="ask-bottom-link">
              <div style="cursor: pointer;">24,038 ₫ mỗi giờ là bao nhiêu  mỗi năm?</div>
              <div>
                <i class="fa fa-chevron-right ask-bottom-link-icon"></i>
              </div>
            </div>
            <div class="ask-bottom-split"></div>
            <div class="ask-bottom-link">
              <div style="cursor: pointer;">Mức lương trung bình trong {{ $country }} ?</div>
              <div>
                <i class="fa fa-chevron-right ask-bottom-link-icon"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- FourthContent -->
      <div class="summary-section">
        <div>
          <div class="summary-container">
            <div class="summary-container-title">Tổng cộng</div>
            <div class="ask-bottom-split"></div>
            <div class="summary-container-information">
              Nếu bạn kiếm được <b> {{ number_format($money,0,',',',' )}} ₫</b> một năm khi sống ở <b>{$country}</b>, bạn sẽ phải đóng thuế <b>{{ number_format($deduction,0,',',',' )}} ₫</b>.
              Điều đó có nghĩa lương ròng của bạn sẽ là <b>{{ number_format($result,0,',',',' )}} ₫</b> mỗi năm, hoặc <b>{{ number_format($result / 12,0,',',',' )}} ₫</b> mỗi tháng.
              Mức thuế suất trung bình của bạn là <b>15.0%</b> và mức thuế suất cận biên của bạn là <b>15.0%</b>.
              Mức thuế suất cận biên này có nghĩa là thu nhập gia tăng tiếp theo của bạn sẽ bị tính thuế ở mức thuế suất này.
              Ví dụ, nếu lương của bạn tăng <b>100 ₫</b>, phần gia tăng này sẽ bị tính thuế <b>14.98 ₫</b>, vì vậy, lương ròng của bạn sẽ chỉ tăng <b>85.02 ₫</b>.
            </div>
            <div class="summary-container-title example">Ví dụ về thưởng</div>
            <div class="ask-bottom-split"></div>
            <div class="summary-container-information">
              Phần thưởng <b>1,000 ₫</b> sẽ tạo thêm <b>850 ₫</b> cho thu nhập ròng. Phần thưởng <b>5,000 ₫</b> sẽ tạo thêm <b>4,251 ₫</b> cho thu nhập ròng.
            </div>
          </div>
        </div>
      </div>

      <!-- FifthContent -->
      <div class="compare-chart">
        <div>
          <div class="line-chart">
            <div class="people-ask-top">
              <div class="ask-top-title">
                So sánh thuế trung bình
              </div>
            </div>
            <div style="padding-top: 0px;" class="people-ask-bottom">
              <div class="line-chart-bottom-label">
                <input type="button" value="Lương" disabled="" class="chart--btn-label">
              </div>
              <div class="line-chart-container">
                <div>
                  <img class="line-chart-img" src="./images/line-chart.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SixContent -->
      <div class="tax-section">
        <div>
          <div class="people-ask-top">
            <div class="ask-top-title">
              Thuế thu nhập
            </div>
          </div>
          <div style="padding-top: 0px;" class="people-ask-bottom">
            @if ($taxable < 10000)
            <div class="tax-income">
                <a href="#" class="tax-income-link">
                    <div>
                  100,000 ₫
                    </div>
                </a>
                <a href="#" class="tax-income-link">
                    <div>
                    200,000 ₫
                    </div>
                </a>
                <a href="#" class="tax-income-link">
                    <div>
                        300,000 ₫
                    </div>
                </a>
                <a href="#" class="tax-income-link">
                    <div>
                        400,000 ₫
                    </div>
                </a>
                <a href="#" class="tax-income-link">
                  <div>
                      500,000 ₫
                    </div>
                </a>
                <a href="#" class="tax-income-link">
                    <div>
                        600,000 ₫
                    </div>
                </a>
                <a href="#" class="tax-income-link">
                    <div>
                        700,000 ₫
                    </div>
                </a>
                <a href="#" class="tax-income-link">
                    <div>
                            800,000 ₫
                    </div>
                </a>
                <a href="#" class="tax-income-link">
                    <div>
                        900,000 ₫
                    </div>
                </a>
                <a href="#" class="tax-income-link">
                    <div>
                        1,000,000 ₫
                    </div>
                </a>
                <a href="#" class="tax-income-link">
                    <div>
                        1,100,000 ₫
                    </div>
                </a>
                <a href="#" class="tax-income-link">
                    <div>
                        1,200,000 ₫
                    </div>
                </a>
                 <a href="#" class="tax-income-link">
                    <div>
                      1,300,000 ₫
                    </div>
                </a>
                <a href="#" class="tax-income-link">
                    <div>
                        1,400,000 ₫
                     </div>
                </a>
                <a href="#" class="tax-income-link">
                    <div>
                        1,500,000 ₫
                    </div>
                </a>
                <a href="#" class="tax-income-link">
                    <div>
                        1,600,000 ₫
                    </div>
                 </a>
                <a href="#" class="tax-income-link">
                    <div>
                      1,700,000 ₫
                    </div>
                </a>
                <a href="#" class="tax-income-link">
                    <div>
                        1,800,000 ₫
                    </div>
                 </a>
                <a href="#" class="tax-income-link">
                    <div>
                        1,900,000 ₫
                    </div>
                </a>
                <a href="#" class="tax-income-link">
                     <div>
                         2,000,000 ₫
                    </div>
                </a>
            </div>
            @endif
            @else
            @for ($i = 1 ;$i <=20; $i++)
            <div class="tax-income">
                <a href="#" class="tax-income-link">
                    <div>
                        {{ $taxable += 5000 }}
                    </div>
                </a>
            </div>
            @endfor
        </div>
        </div>
      </div>

      <!-- SevenContent -->
      <div class="contries-section">
        <div>
          <div class="people-ask-top">
            <div class="ask-top-title">
              Châu Âu
            </div>
          </div>
          <div style="padding-top: 0px;" class="people-ask-bottom">
            <div class="contries-table">
              <div class="contries-table-row contries-table-header">
                <div class="contries-table-row-td">Quốc gia </div>
                <div class="contries-table-row-td">Net pay</div>
                <div class="contries-table-row-td">Thuế trung bình</div>
                <div class="contries-table-row-td">Cấp</div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/c1.png" alt="">
                  </div>
                  Vương quốc Anh
                </div>
                <div class="contries-table-row-td">VND 49999928</div>
                <div class="contries-table-row-td">0.0%</div>
                <div class="contries-table-row-td">
                  <span class="contries-table-best-rank">1</span>
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/c2.png" alt="">
                  </div>
                  Đức
                </div>
                <div class="contries-table-row-td">VND 49999965</div>
                <div class="contries-table-row-td">0.0%</div>
                <div class="contries-table-row-td">
                  2
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/c3.png" alt="">
                  </div>
                  Áo
                </div>
                <div class="contries-table-row-td">VND 49999965</div>
                <div class="contries-table-row-td">0.0%</div>
                <div class="contries-table-row-td">
                  3
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <div  alt="...">...
                    </div>
                  </div>
                  ...
                </div>
                <div class="contries-table-row-td">...</div>
                <div class="contries-table-row-td">...</div>
                <div class="contries-table-row-td">
                  ...
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/c2.png" alt="">
                  </div>
                  Đan mạch
                </div>
                <div class="contries-table-row-td">VND 32155417</div>
                <div class="contries-table-row-td">35.7%</div>
                <div class="contries-table-row-td">
                  21
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/c4.png" alt="">
                  </div>
                  Hà Lan
                </div>
                <div class="contries-table-row-td">VND 31473881</div>
                <div class="contries-table-row-td">37.1%</div>
                <div class="contries-table-row-td">
                  22
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/c6.png" alt="">
                  </div>
                  Rumani
                </div>
                <div class="contries-table-row-td">VND 29249986</div>
                <div class="contries-table-row-td">41.5%</div>
                <div class="contries-table-row-td">
                  <span class="contries-table-least-rank">23</span>
                </div>
              </div>
            </div>
            <div class="show-more-btn">
              <div class="show-more-btn-label">Hiển thị thêm</div>
            </div>
          </div>
        </div>
      </div>

      <!-- EightContent -->
      <div class="contries-section">
        <div>
          <div class="people-ask-top">
            <div class="ask-top-title">
              Bắc Mỹ
            </div>
          </div>
          <div style="padding-top: 0px;" class="people-ask-bottom">
            <div class="contries-table">
              <div class="contries-table-row contries-table-header">
                <div class="contries-table-row-td">Quốc gia </div>
                <div class="contries-table-row-td">Net pay</div>
                <div class="contries-table-row-td">Thuế trung bình</div>
                <div class="contries-table-row-td">Cấp</div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/d1d1.png" alt="">
                  </div>
                  Hoa Kỳ
                </div>
                <div class="contries-table-row-td">VND 45669466</div>
                <div class="contries-table-row-td">8.7%</div>
                <div class="contries-table-row-td">
                  <span class="contries-table-best-rank">1</span>
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/d2.png" alt="">
                  </div>
                  Canada
                </div>
                <div class="contries-table-row-td">VND 45249844</div>
                <div class="contries-table-row-td">9.5%</div>
                <div class="contries-table-row-td">
                  <span class="contries-table-least-rank">2</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- NineContent -->
      <div class="contries-section">
        <div>
          <div class="people-ask-top">
            <div class="ask-top-title">
              Châu Á / Thái Bình Dương
            </div>
          </div>
          <div style="padding-top: 0px;" class="people-ask-bottom">
            <div class="contries-table">
              <div class="contries-table-row contries-table-header">
                <div class="contries-table-row-td">Quốc gia </div>
                <div class="contries-table-row-td">Net pay</div>
                <div class="contries-table-row-td">Thuế trung bình</div>
                <div class="contries-table-row-td">Cấp</div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/e1.png" alt="">
                  </div>
                  Úc
                </div>
                <div class="contries-table-row-td">VND 50000077</div>
                <div class="contries-table-row-td">0.0%</div>
                <div class="contries-table-row-td">
                  <span class="contries-table-best-rank">1</span>
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/e2.png" alt="">
                  </div>
                  Singapore
                </div>
                <div class="contries-table-row-td">VND 50000017</div>
                <div class="contries-table-row-td">0.0%</div>
                <div class="contries-table-row-td">
                  2
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/e3.png" alt="">
                  </div>
                  Hong Kong
                </div>
                <div class="contries-table-row-td">VND 49999997</div>
                <div class="contries-table-row-td">0.0%</div>
                <div class="contries-table-row-td">
                  3
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <div  alt="...">...
                    </div>
                  </div>
                  ...
                </div>
                <div class="contries-table-row-td">...</div>
                <div class="contries-table-row-td">...</div>
                <div class="contries-table-row-td">
                  ...
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/e4.png" alt="">
                  </div>
                  Việt Nam
                </div>
                <div class="contries-table-row-td">VND 42512500</div>
                <div class="contries-table-row-td">15.0%</div>
                <div class="contries-table-row-td">
                  14
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/e5.png" alt="">
                  </div>
                  Nhật Bản
                </div>
                <div class="contries-table-row-td">VND 40629294</div>
                <div class="contries-table-row-td">18.7%</div>
                <div class="contries-table-row-td">
                  15
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/c6.png" alt="">
                  </div>
                  Rumani
                </div>
                <div class="contries-table-row-td">VND 29249986</div>
                <div class="contries-table-row-td">41.5%</div>
                <div class="contries-table-row-td">
                  <span class="contries-table-least-rank">23</span>
                </div>
              </div>
            </div>
            <div class="show-more-btn">
              <div class="show-more-btn-label">Hiển thị thêm</div>
            </div>
          </div>
        </div>
      </div>

      <!-- TenContent -->
      <div class="contries-section">
        <div>
          <div class="people-ask-top">
            <div class="ask-top-title">
              Mỹ La-tinh
            </div>
          </div>
          <div style="padding-top: 0px;" class="people-ask-bottom">
            <div class="contries-table">
              <div class="contries-table-row contries-table-header">
                <div class="contries-table-row-td">Quốc gia </div>
                <div class="contries-table-row-td">Net pay</div>
                <div class="contries-table-row-td">Thuế trung bình</div>
                <div class="contries-table-row-td">Cấp</div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/g1.png" alt="">
                  </div>
                  Mexico
                </div>
                <div class="contries-table-row-td">VND 48812504</div>
                <div class="contries-table-row-td">2.4%</div>
                <div class="contries-table-row-td">
                  <span class="contries-table-best-rank">1</span>
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/g2.png" alt="">
                  </div>
                  Brazil
                </div>
                <div class="contries-table-row-td">VND 46249996</div>
                <div class="contries-table-row-td">7.5%</div>
                <div class="contries-table-row-td">
                  2
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/g3.png" alt="">
                  </div>
                  Puerto Rico
                </div>
                <div class="contries-table-row-td">VND 46025052</div>
                <div class="contries-table-row-td">8.0%</div>
                <div class="contries-table-row-td">
                  3
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <div  alt="...">...
                    </div>
                  </div>
                  ...
                </div>
                <div class="contries-table-row-td">...</div>
                <div class="contries-table-row-td">...</div>
                <div class="contries-table-row-td">
                  ...
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/g4.png" alt="">
                  </div>
                  Argentina
                </div>
                <div class="contries-table-row-td">VND 41500000</div>
                <div class="contries-table-row-td">17.0%</div>
                <div class="contries-table-row-td">
                  10
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/g5.png" alt="">
                  </div>
                  Chile
                </div>
                <div class="contries-table-row-td">VND 41200000</div>
                <div class="contries-table-row-td">17.6%</div>
                <div class="contries-table-row-td">
                  11
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/g6.png" alt="">
                  </div>
                  Uruguay
                </div>
                <div class="contries-table-row-td">VND 40950001</div>
                <div class="contries-table-row-td">18.1%</div>
                <div class="contries-table-row-td">
                  <span class="contries-table-least-rank">12</span>
                </div>
              </div>
            </div>
            <div class="show-more-btn">
              <div class="show-more-btn-label">Hiển thị thêm</div>
            </div>
          </div>
        </div>
      </div>

      <!-- EleventContent -->
      <div class="contries-section">
        <div>
          <div class="people-ask-top">
            <div class="ask-top-title">
              Châu Phi
            </div>
          </div>
          <div style="padding-top: 0px;" class="people-ask-bottom">
            <div class="contries-table">
              <div class="contries-table-row contries-table-header">
                <div class="contries-table-row-td">Quốc gia </div>
                <div class="contries-table-row-td">Net pay</div>
                <div class="contries-table-row-td">Thuế trung bình</div>
                <div class="contries-table-row-td">Cấp</div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/p1.png" alt="">
                  </div>
                  Nam Phi
                </div>
                <div class="contries-table-row-td">VND 49500002</div>
                <div class="contries-table-row-td">1.0%</div>
                <div class="contries-table-row-td">
                  <span class="contries-table-best-rank">1</span>
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/p2.png" alt="">
                  </div>
                  Zambia
                </div>
                <div class="contries-table-row-td">VND 47000004</div>
                <div class="contries-table-row-td">6.0%</div>
                <div class="contries-table-row-td">
                  2
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/p3.png" alt="">
                  </div>
                  Morocco
                </div>
                <div class="contries-table-row-td">VND 46629998</div>
                <div class="contries-table-row-td">6.7%</div>
                <div class="contries-table-row-td">
                  3
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <div  alt="...">...
                    </div>
                  </div>
                  ...
                </div>
                <div class="contries-table-row-td">...</div>
                <div class="contries-table-row-td">...</div>
                <div class="contries-table-row-td">
                  ...
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/p4.png" alt="">
                  </div>
                  Uganda
                </div>
                <div class="contries-table-row-td">VND 39907200</div>
                <div class="contries-table-row-td">20.2%</div>
                <div class="contries-table-row-td">
                  10
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/p5.png" alt="">
                  </div>
                  Angola
                </div>
                <div class="contries-table-row-td">VND 38905347</div>
                <div class="contries-table-row-td">22.2%</div>
                <div class="contries-table-row-td">
                  11
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/p6.png" alt="">
                  </div>
                  Nigeria
                </div>
                <div class="contries-table-row-td">VND 38717750</div>
                <div class="contries-table-row-td">22.6%</div>
                <div class="contries-table-row-td">
                  <span class="contries-table-least-rank">12</span>
                </div>
              </div>
            </div>
            <div class="show-more-btn">
              <div class="show-more-btn-label">Hiển thị thêm</div>
            </div>
          </div>
        </div>
      </div>

      <!-- TwelveContent -->
      <div class="contries-section">
        <div>
          <div class="people-ask-top">
            <div class="ask-top-title">
              Trung đông
            </div>
          </div>
          <div style="padding-top: 0px;" class="people-ask-bottom">
            <div class="contries-table">
              <div class="contries-table-row contries-table-header">
                <div class="contries-table-row-td">Quốc gia </div>
                <div class="contries-table-row-td">Net pay</div>
                <div class="contries-table-row-td">Thuế trung bình</div>
                <div class="contries-table-row-td">Cấp</div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/z1.png" alt="">
                  </div>
                  Ả Rập Xê-út
                </div>
                <div class="contries-table-row-td">VND 49999977</div>
                <div class="contries-table-row-td">0.0%</div>
                <div class="contries-table-row-td">
                  <span class="contries-table-best-rank">1</span>
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/z2.png" alt="">
                  </div>
                  các Tiểu Vương Quốc Ả Rập Thống Nhất
                </div>
                <div class="contries-table-row-td">VND 47499972</div>
                <div class="contries-table-row-td">5.0%</div>
                <div class="contries-table-row-td">
                  2
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/z3.png" alt="">
                  </div>
                  Qatar
                </div>
                <div class="contries-table-row-td">VND 47499976</div>
                <div class="contries-table-row-td">5.0%</div>
                <div class="contries-table-row-td">
                  3
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <div  alt="...">...
                    </div>
                  </div>
                  ...
                </div>
                <div class="contries-table-row-td">...</div>
                <div class="contries-table-row-td">...</div>
                <div class="contries-table-row-td">
                  ...
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/z4.png" alt="">
                  </div>
                  Israel
                </div>
                <div class="contries-table-row-td">VND 43424996</div>
                <div class="contries-table-row-td">13.2%</div>
                <div class="contries-table-row-td">
                  8
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/z5.png" alt="">
                  </div>
                  Ai Cập
                </div>
                <div class="contries-table-row-td">VND 41492503</div>
                <div class="contries-table-row-td">17.0%</div>
                <div class="contries-table-row-td">
                  9
                </div>
              </div>
              <div class="contries-table-row contries-table-body">
                <div class="contries-table-row-td">
                  <div class="country-flag">
                    <img src="./images/z6.png" alt="">
                  </div>
                  Thổ Nhĩ Kỳ
                </div>
                <div class="contries-table-row-td">VND 38631776</div>
                <div class="contries-table-row-td">22.7%</div>
                <div class="contries-table-row-td">
                  <span class="contries-table-least-rank">10</span>
                </div>
              </div>
            </div>
            <div class="show-more-btn">
              <div class="show-more-btn-label">Hiển thị thêm</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Notice -->
      <div class="notice">
        <div class="notice-text">
          LƯU Ý *Khấu trừ được tính dựa trên các bảng  của Việt Nam, thuế thu nhập. Để đơn giản hóa, một số biến số (như tình trạng hôn nhân và các biến khác) đã được giả định. Tài liệu này không đại diện cho thẩm quyền pháp lý và sẽ chỉ được sử dụng cho mục đích gần đúng.
        </div>
      </div>
    </div>
    <!-- EndContent -->
  </div>

  <!-- Footer -->
  <div id="footer">
    <div class="footer-contain">
      <div class="footer-contain-col-holder">
        <div class="footer-contain-col">
          <div class="footer-contain-col-title">
            Dành cho người tìm việc
          </div>
          <div class="footer-contain-col-lists">
            <a href="#">Tìm việc làm</a>
            <a href="#">Tìm kiếm tiền lương</a>
            <a href="#">Máy tính thuế</a>
            <a href="#">Công cụ chuyển đổi tiền lương</a>
          </div>
        </div>
        <div class="footer-contain-col">
          <div class="footer-contain-col-title">
            Talent.com
          </div>
          <div class="footer-contain-col-lists">
            <a href="#">Liên hệ</a>
            <a href="#">Các quốc gia khác</a>
            <a href="#">Điều khoản dịch vụ, Chính sách quyền riêng tư</a>
            <a href="#">Chính sách cookie</a>
            <a href="#">Yêu cầu dữ liệu cá nhân</a>
          </div>
        </div>
        <div style="margin-top: 23px;" class="footer-contain-col footer-end-item">
          <div class="footer-logo">
            <img src="./images/logocongty.png" alt="">
          </div>
          <div class="logo-text">
            © 2023 Talent.com
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
