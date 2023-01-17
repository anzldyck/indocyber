<aside class="sidebar offcanvas-lg offcanvas-start">
    <div class="d-flex justify-content-end m-4 d-block d-lg-none">
      <button
        data-bs-dismiss="offcanvas"
        data-bs-target=".sidebar"
        class="btn p-0 border-0 fs-4"
        aria-label="Button Close"
      >
        <i class="fas fa-close"></i>
      </button>
    </div>
    <div class="logo-brand mt-lg-5">
      <img
        src="{{ asset('backend/assets/images/logo.png') }}"
        alt="Logo Shoso"
        width="52"
        height="50"
      />
      <div>
        <h6 class="title-store">IndoCyber</h6>
        <p class="tagline-store"></p>
      </div>
    </div>
    <hr />
    <nav class="menu flex-fill">
      <div class="section-menu">
        <a href="{{ route('dashboard') }}" class="item-menu active" onclick="handleClickMenu(this)">
          <svg fill="currentColor">
            <path
              d="M6 2.5C3.79086 2.5 2 4.29086 2 6.5V10.5C2 11.6046 2.89543 12.5 4 12.5H5.5C6.32843 12.5 7 11.8284 7 11V10.5C7 9.94772 7.44772 9.5 8 9.5C8.55228 9.5 9 9.94772 9 10.5V10.8333C9 11.7538 9.74619 12.5 10.6667 12.5H12.3333C13.2538 12.5 14 11.7538 14 10.8333V10.5C14 9.94772 14.4477 9.5 15 9.5C15.5523 9.5 16 9.94772 16 10.5V11C16 11.8284 16.6716 12.5 17.5 12.5H19C20.1046 12.5 21 11.6046 21 10.5V6.5C21 4.29086 19.2091 2.5 17 2.5H6ZM3 14.75C3.41421 14.75 3.75 15.0858 3.75 15.5V18.5C3.75 20.2949 5.20507 21.75 7 21.75H16C17.7949 21.75 19.25 20.2949 19.25 18.5V15.5C19.25 15.0858 19.5858 14.75 20 14.75C20.4142 14.75 20.75 15.0858 20.75 15.5V18.5C20.75 21.1234 18.6234 23.25 16 23.25H7C4.37665 23.25 2.25 21.1234 2.25 18.5V15.5C2.25 15.0858 2.58579 14.75 3 14.75ZM9 16.75C9 16.3358 9.33579 16 9.75 16H13.25C13.6642 16 14 16.3358 14 16.75C14 17.1642 13.6642 17.5 13.25 17.5H9.75C9.33579 17.5 9 17.1642 9 16.75Z"
              fill="currentColor"
            />
          </svg>
          <p>Dashboard</p>
        </a>
      </div>
      <div class="section-menu">
        <p class="fs-18 fw-500 mb-2">Menu</p>
        <a href="{{ route('books') }}" class="item-menu" onclick="handleClickMenu(this)">
          <svg fill="none">
            <path
              d="M15.4559 6.58621V7.08621H15.9559H17.496C18.3534 7.08621 19.0124 7.67074 19.0966 8.36425L19.0966 8.36425L19.0973 8.36975L20.4776 18.7744C20.7115 20.7152 19.0442 22.5 16.7797 22.5H7.22014C4.95566 22.5 3.28838 20.7152 3.52228 18.7743L4.90258 8.36975L4.90261 8.36975L4.90328 8.36425C4.98747 7.67074 5.64646 7.08621 6.50387 7.08621H8.04397H8.54397V6.58621V5.62069C8.54397 3.93794 10.0487 2.5 11.9999 2.5C13.9512 2.5 15.4559 3.93794 15.4559 5.62069V6.58621ZM14.8735 8.03448V7.53448H14.3735H9.62636H9.12636V8.03448V10.4483C9.12636 10.5313 9.03859 10.6724 8.83516 10.6724C8.63174 10.6724 8.54397 10.5313 8.54397 10.4483V8.03448V7.53448H8.04397H6.50387C6.01844 7.53448 5.54941 7.87337 5.48368 8.40043L4.1033 18.8056L4.10327 18.8056L4.1026 18.8111C3.88702 20.5869 5.3988 22.0517 7.22014 22.0517H16.7797C18.6011 22.0517 20.1129 20.5869 19.8973 18.8111L19.8973 18.8111L19.8966 18.8056L18.5162 8.40048C18.4505 7.87339 17.9815 7.53448 17.496 7.53448H15.9559H15.4559V8.03448V10.4483C15.4559 10.5313 15.3681 10.6724 15.1647 10.6724C14.9613 10.6724 14.8735 10.5313 14.8735 10.4483V8.03448ZM14.3735 7.08621H14.8735V6.58621V5.62069C14.8735 4.104 13.5444 2.94828 11.9999 2.94828C10.4555 2.94828 9.12636 4.104 9.12636 5.62069V6.58621V7.08621H9.62636H14.3735ZM9.33516 16C9.33516 15.917 9.42294 15.7759 9.62636 15.7759H14.3735C14.5769 15.7759 14.6647 15.917 14.6647 16C14.6647 16.083 14.5769 16.2241 14.3735 16.2241H9.62636C9.42293 16.2241 9.33516 16.083 9.33516 16Z"
              stroke="currentColor"
            />
          </svg>
          <p class="flex-fill">Books</p>
          <div class="circle-notif rounded-circle">
            <p>{{ App\Models\Books::count() }}</p>
          </div>
        </a>
      </div>
      <div class="mt-3 space-y-1">
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
    </div>
    </nav>
    <footer>
      <div class="d-flex gap-3 align-items-center mb-4">
        <img src="{{ asset('backend/assets/icons/ic_mode.svg') }}" alt="Mode Display" />
        <p id="label-mode" class="flex-fill label-mode">Light Mode</p>
        <div>
          <input
            id="checkbox"
            type="checkbox"
            class="toggle-theme"
            aria-label="Toggle Theme"
          />
          <label for="checkbox" class="label-toggle">
            <img
              src="{{ asset('backend/assets/icons/ic_moon.svg') }}"
              width="50%"
              class="ic-theme"
              id="ic-dark"
              alt="Icon Dark"
            />
            <img
              src="{{ asset('backend/assets/icons/ic_sun.svg') }}"
              width="50%"
              class="ic-theme"
              id="ic-light"
              alt="Icon Light"
            />
          </label>
        </div>
      </div>
      <p>©2023 IndoCyber. All rights reserved.</p>
    </footer>
  </aside>