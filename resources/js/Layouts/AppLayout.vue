<template>
  <div class="flex flex-no-wrap bg-gray-200">
    <!-- Sidebar starts -->
    <!-- Remove class [ hidden ] and replace [ sm:flex ] with [ flex ] -->

    <div class="flex flex-no-wrap h-full">
      <div class="h-screen bg-gray-900 p-4">
        <div class="flex h-full">
          <div class="h-full flex flex-col justify-between">
            <div class="">
              <div class="flex items-center pt-4" v-if="menu">
                <!-- LOGO HERE -->

                  Logo
                <div
                  :class="menu === false ? 'hidden' : 'true'"
                  class="pl-3"
                  id="closed"
                >
                  <!-- Change the width of sidebar here -->
                  <h1 class="w-32 text-white text-lg font-extrabold">
                    DICT
                  </h1>
                </div>
              </div>

              <div class="flex items-center pt-4" v-if="!menu">
                <!-- LOGO HERE -->

                <div
                  :class="menu === false ? 'hidden' : 'true'"
                  class="pl-3"
                  id="closed"
                >
                  <h1 class="w-56 text-white text-lg">DICT</h1>
                </div>
              </div>

              <div class="mt-10 flex items-center relative">
                <div arial-label="search" id="search" class="relative w-full">
                  <div
                    :class="menu === false ? 'hidden' : 'true'"
                    class="absolute p-2"
                  >
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.1665 1.66667C13.3065 1.66667 16.6665 5.02667 16.6665 9.16667C16.6665 13.3067 13.3065 16.6667 9.1665 16.6667C5.0265 16.6667 1.6665 13.3067 1.6665 9.16667C1.6665 5.02667 5.0265 1.66667 9.1665 1.66667ZM9.1665 15C12.389 15 14.9998 12.3892 14.9998 9.16667C14.9998 5.94333 12.389 3.33333 9.1665 3.33333C5.94317 3.33333 3.33317 5.94333 3.33317 9.16667C3.33317 12.3892 5.94317 15 9.1665 15ZM16.2373 15.0592L18.5948 17.4158L17.4157 18.595L15.059 16.2375L16.2373 15.0592Z"
                        fill="white"
                      />
                    </svg>
                  </div>
                  <input
                    :class="menu === false ? 'hidden' : 'true'"
                    type="seach"
                    class="
                      w-full
                      py-2
                      pl-10
                      bg-gray-800
                      rounded
                      text-base
                      leading-none
                      text-white
                      placeholder-white
                    "
                    placeholder="Search"
                  />
                </div>
                <div id="search1" :class="menu === true ? 'hidden' : 'true'">
                  <svg
                    class="-ml-8"
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.1665 1.66667C13.3065 1.66667 16.6665 5.02667 16.6665 9.16667C16.6665 13.3067 13.3065 16.6667 9.1665 16.6667C5.0265 16.6667 1.6665 13.3067 1.6665 9.16667C1.6665 5.02667 5.0265 1.66667 9.1665 1.66667ZM9.1665 15C12.389 15 14.9998 12.3892 14.9998 9.16667C14.9998 5.94333 12.389 3.33333 9.1665 3.33333C5.94317 3.33333 3.33317 5.94333 3.33317 9.16667C3.33317 12.3892 5.94317 15 9.1665 15ZM16.2373 15.0592L18.5948 17.4158L17.4157 18.595L15.059 16.2375L16.2373 15.0592Z"
                      fill="white"
                    />
                  </svg>
                </div>
                <button
                  aria-label="minimize sidebar"
                  id="close"
                  class="
                    w-6
                    h-6
                    right-0
                    -mr-7
                    bg-indigo-500
                    absolute
                    shadow
                    rounded-full
                    flex
                    items-center
                    justify-center
                    cursor-pointer
                    focus:outline-none
                    focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600
                  "
                  @click="menu = false"
                  :class="menu === false ? 'hidden' : 'true'"
                >
                  <svg
                    width="16"
                    height="16"
                    viewBox="0 0 16 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10 4L6 8L10 12"
                      stroke="white"
                      stroke-width="1.25"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </button>
                <button
                  id="open"
                  class="
                    w-6
                    h-6
                    right-0
                    -mr-7
                    bg-indigo-500
                    absolute
                    shadow
                    rounded-full
                    flex
                    items-center
                    justify-center
                    cursor-pointer
                    focus:outline-none
                    focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600
                  "
                  @click="menu = true"
                  :class="menu === true ? 'hidden' : 'true'"
                >
                  <svg
                    aria-label="expand sidebar"
                    width="16"
                    height="16"
                    viewBox="0 0 16 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6 12L10 8L6 4"
                      stroke="white"
                      stroke-width="1.25"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </button>
              </div>
              <div class="flex items-center">
                <ul aria-orientation="vertical">
                  <li
                    tabindex="0"
                    role="button"
                    aria-label="Overview"
                    class="cursor-pointer mt-10"
                  >
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M2.5 2.5H9.16667V9.16667H2.5V2.5ZM2.5 10.8333H9.16667V17.5H2.5V10.8333ZM10.8333 2.5H17.5V9.16667H10.8333V2.5ZM10.8333 10.8333H17.5V17.5H10.8333V10.8333ZM12.5 4.16667V7.5H15.8333V4.16667H12.5ZM12.5 12.5V15.8333H15.8333V12.5H12.5ZM4.16667 4.16667V7.5H7.5V4.16667H4.16667ZM4.16667 12.5V15.8333H7.5V12.5H4.16667Z"
                        fill="#9CA3AF"
                      />
                    </svg>
                  </li>
                  <li
                    tabindex="0"
                    role="button"
                    aria-label="People"
                    class="cursor-pointer mt-6"
                  >
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M1.6665 18.3333C1.6665 16.5652 2.36888 14.8695 3.61913 13.6193C4.86937 12.369 6.56506 11.6667 8.33317 11.6667C10.1013 11.6667 11.797 12.369 13.0472 13.6193C14.2975 14.8695 14.9998 16.5652 14.9998 18.3333H13.3332C13.3332 17.0073 12.8064 15.7355 11.8687 14.7978C10.931 13.8601 9.65925 13.3333 8.33317 13.3333C7.00709 13.3333 5.73532 13.8601 4.79764 14.7978C3.85995 15.7355 3.33317 17.0073 3.33317 18.3333H1.6665ZM8.33317 10.8333C5.57067 10.8333 3.33317 8.59584 3.33317 5.83334C3.33317 3.07084 5.57067 0.833336 8.33317 0.833336C11.0957 0.833336 13.3332 3.07084 13.3332 5.83334C13.3332 8.59584 11.0957 10.8333 8.33317 10.8333ZM8.33317 9.16667C10.1748 9.16667 11.6665 7.675 11.6665 5.83334C11.6665 3.99167 10.1748 2.5 8.33317 2.5C6.4915 2.5 4.99984 3.99167 4.99984 5.83334C4.99984 7.675 6.4915 9.16667 8.33317 9.16667ZM15.2365 12.2525C16.4076 12.7799 17.4015 13.6344 18.0987 14.7131C18.7958 15.7918 19.1666 17.0489 19.1665 18.3333H17.4998C17.5 17.37 17.222 16.4271 16.6991 15.618C16.1762 14.8089 15.4307 14.1681 14.5523 13.7725L15.2357 12.2525H15.2365ZM14.6632 2.84417C15.5028 3.19025 16.2206 3.77795 16.7257 4.53269C17.2307 5.28744 17.5002 6.1752 17.4998 7.08334C17.5002 8.22695 17.0729 9.32936 16.302 10.174C15.531 11.0187 14.4721 11.5446 13.3332 11.6483V9.97084C13.9506 9.8824 14.5235 9.59835 14.9676 9.16038C15.4117 8.72242 15.7037 8.1536 15.8008 7.53745C15.8979 6.92129 15.7948 6.29025 15.5068 5.73696C15.2188 5.18368 14.761 4.73729 14.2007 4.46334L14.6632 2.84417Z"
                        fill="#9CA3AF"
                      />
                    </svg>
                  </li>
                  <li
                    tabindex="0"
                    role="button"
                    aria-label="Workflow"
                    class="cursor-pointer mt-6"
                  >
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M7.50016 6.2825L12.5002 17.9492L15.5493 10.8333H19.1668V9.16667H14.451L12.5002 13.7175L7.50016 2.05083L4.451 9.16667H0.833496V10.8333H5.54933L7.50016 6.2825Z"
                        fill="#9CA3AF"
                      />
                    </svg>
                  </li>
                  <li
                    tabindex="0"
                    role="button"
                    aria-label="Campaignns"
                    class="cursor-pointer mt-6"
                  >
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.1665 1.70834V3.385C5.87817 3.795 3.33317 6.6 3.33317 10C3.33317 13.6817 6.31817 16.6667 9.99984 16.6667C11.5407 16.6667 12.9582 16.1442 14.0882 15.2667L15.274 16.4525C13.8373 17.6275 11.9998 18.3333 9.99984 18.3333C5.39734 18.3333 1.6665 14.6025 1.6665 10C1.6665 5.67917 4.95567 2.12584 9.1665 1.70834ZM18.2915 10.8333C18.1248 12.5092 17.4632 14.0392 16.4523 15.2733L15.2665 14.0883C15.9832 13.1658 16.4632 12.0508 16.6148 10.8333H18.2923H18.2915ZM10.8348 1.70834C14.7715 2.09917 17.9015 5.23 18.2932 9.16667H16.6157C16.2398 6.15167 13.8498 3.76167 10.8348 3.385V1.7075V1.70834Z"
                        fill="#9CA3AF"
                      />
                    </svg>
                  </li>
                  <li
                    tabindex="0"
                    role="button"
                    aria-label="Messages"
                    class="cursor-pointer mt-6"
                  >
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M6.07568 17.3533L1.66651 18.3333L2.64651 13.9242C2.00112 12.717 1.66445 11.3689 1.66651 10C1.66651 5.39751 5.39735 1.66667 9.99985 1.66667C14.6023 1.66667 18.3332 5.39751 18.3332 10C18.3332 14.6025 14.6023 18.3333 9.99985 18.3333C8.63098 18.3354 7.28286 17.9987 6.07568 17.3533ZM6.31735 15.5925L6.86151 15.8842C7.82697 16.4001 8.90517 16.669 9.99985 16.6667C11.3184 16.6667 12.6073 16.2757 13.7036 15.5431C14.8 14.8106 15.6545 13.7694 16.159 12.5512C16.6636 11.3331 16.7957 9.99261 16.5384 8.6994C16.2812 7.4062 15.6462 6.21831 14.7139 5.28596C13.7815 4.35361 12.5937 3.71867 11.3004 3.46144C10.0072 3.2042 8.6668 3.33622 7.44862 3.84081C6.23045 4.34539 5.18926 5.19988 4.45672 6.2962C3.72417 7.39253 3.33318 8.68146 3.33318 10C3.33318 11.1117 3.60401 12.1817 4.11651 13.1383L4.40735 13.6825L3.86151 16.1383L6.31735 15.5925Z"
                        fill="#9CA3AF"
                      />
                    </svg>
                  </li>
                  <li
                    tabindex="0"
                    role="button"
                    aria-label="stack"
                    class="cursor-pointer mt-6"
                  >
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M16.736 12.6667L17.7377 13.2675C17.7995 13.3045 17.8506 13.3569 17.8862 13.4195C17.9217 13.4822 17.9404 13.553 17.9404 13.625C17.9404 13.697 17.9217 13.7678 17.8862 13.8305C17.8506 13.8931 17.7995 13.9455 17.7377 13.9825L10.4294 18.3675C10.2998 18.4454 10.1514 18.4865 10.0002 18.4865C9.849 18.4865 9.70065 18.4454 9.57104 18.3675L2.2627 13.9825C2.20091 13.9455 2.14976 13.8931 2.11424 13.8305C2.07873 13.7678 2.06006 13.697 2.06006 13.625C2.06006 13.553 2.07873 13.4822 2.11424 13.4195C2.14976 13.3569 2.20091 13.3045 2.2627 13.2675L3.26437 12.6667L10.0002 16.7083L16.736 12.6667ZM16.736 8.75001L17.7377 9.35084C17.7995 9.38783 17.8506 9.44022 17.8862 9.50287C17.9217 9.56553 17.9404 9.63632 17.9404 9.70834C17.9404 9.78036 17.9217 9.85115 17.8862 9.91381C17.8506 9.97647 17.7995 10.0288 17.7377 10.0658L10.0002 14.7083L2.2627 10.0658C2.20091 10.0288 2.14976 9.97647 2.11424 9.91381C2.07873 9.85115 2.06006 9.78036 2.06006 9.70834C2.06006 9.63632 2.07873 9.56553 2.11424 9.50287C2.14976 9.44022 2.20091 9.38783 2.2627 9.35084L3.26437 8.75001L10.0002 12.7917L16.736 8.75001ZM10.4285 1.09084L17.7377 5.47584C17.7995 5.51284 17.8506 5.56521 17.8862 5.62787C17.9217 5.69053 17.9404 5.76132 17.9404 5.83334C17.9404 5.90536 17.9217 5.97615 17.8862 6.03881C17.8506 6.10147 17.7995 6.15385 17.7377 6.19084L10.0002 10.8333L2.2627 6.19084C2.20091 6.15385 2.14976 6.10147 2.11424 6.03881C2.07873 5.97615 2.06006 5.90536 2.06006 5.83334C2.06006 5.76132 2.07873 5.69053 2.11424 5.62787C2.14976 5.56521 2.20091 5.51284 2.2627 5.47584L9.57104 1.09084C9.70065 1.01297 9.849 0.971832 10.0002 0.971832C10.1514 0.971832 10.2998 1.01297 10.4294 1.09084H10.4285ZM10.0002 2.77667L4.90604 5.83334L10.0002 8.89001L15.0944 5.83334L10.0002 2.77667Z"
                        fill="#9CA3AF"
                      />
                    </svg>
                  </li>
                  <li
                    tabindex="0"
                    role="button"
                    aria-label="Notifications"
                    class="cursor-pointer mt-6"
                  >
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M18.3332 16.6667H1.6665V15H2.49984V9.19249C2.49984 5.03582 5.85817 1.66666 9.99984 1.66666C14.1415 1.66666 17.4998 5.03582 17.4998 9.19249V15H18.3332V16.6667ZM4.1665 15H15.8332V9.19249C15.8332 5.95666 13.2215 3.33332 9.99984 3.33332C6.77817 3.33332 4.1665 5.95666 4.1665 9.19249V15ZM7.9165 17.5H12.0832C12.0832 18.0525 11.8637 18.5824 11.473 18.9731C11.0823 19.3638 10.5524 19.5833 9.99984 19.5833C9.4473 19.5833 8.9174 19.3638 8.5267 18.9731C8.136 18.5824 7.9165 18.0525 7.9165 17.5Z"
                        fill="#9CA3AF"
                      />
                    </svg>
                  </li>
                </ul>
                <div
                  id="navi"
                  class="w-full mt-10"
                  :class="menu === false ? 'hidden' : 'true'"
                >
                  <p
                    class="
                      text-base
                      leading-4
                      pl-3
                      cursor-pointer
                      text-gray-400
                    "
                  >
                    Dashboard
                  </p>
                  <p
                    class="
                      text-base
                      leading-4
                      pl-3
                      cursor-pointer
                      pt-7
                      text-gray-400
                    "
                  >

                     <Link :href="route('nodes.index')"> Nodes </Link>
                    
                  </p>
                  <p
                    class="
                      text-base
                      leading-4
                      pl-3
                      cursor-pointer
                      pt-7
                      text-gray-400
                    "
                  >
                    <Link :href=""> Purchases </Link>
                  </p>
                  <p
                    class="
                      text-base
                      leading-4
                      pl-3
                      cursor-pointer
                      pt-7
                      text-gray-400
                    "
                  >
                    Payables
                  </p>
                  <p
                    class="
                      text-base
                      leading-4
                      pl-3
                      cursor-pointer
                      pt-7
                      text-gray-400
                    "
                  >
                    Receivable
                  </p>
                  <p
                    class="
                      text-base
                      leading-4
                      pl-3
                      cursor-pointer
                      pt-7
                      text-gray-400
                    "
                  >
                    <Link :href=""> Stocks </Link>
                  </p>
                  <p
                    class="
                      text-base
                      leading-4
                      pl-3
                      cursor-pointer
                      pt-7
                      text-gray-400
                    "
                  >
                      <Link :href=""> Setup </Link>
                  </p>
                </div>
              </div>
            </div>

            <div class="flex items-center justify-between" id="profile1">
              <img
                src="https://i.ibb.co/fDyfmVz/pic.png"
                alt="profile picture"
                class="w-7 h-7 rounded-full"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="w-full"></div>
    </div>

    <!-- Sidebar ends -->
    <div class="w-full">

      <!-- Navigation starts -->
      <nav
        class="
          h-16
          flex
          items-center
          lg:items-stretch
          justify-end
          lg:justify-between
          bg-white
          shadow
          relative
          z-10
        "
      >
        <div class="hidden lg:flex w-full pr-6">
          <div class="w-1/2 h-full hidden lg:flex items-center pl-6 pr-24">
            <div class="relative w-full">
              <div class="text-gray-500 absolute ml-4 inset-0 m-auto w-4 h-4">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-search"
                  width="16"
                  height="16"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" />
                  <circle cx="10" cy="10" r="7" />
                  <line x1="21" y1="21" x2="15" y2="15" />
                </svg>
              </div>
              <input
                class="
                  border border-gray-100
                  focus:outline-none
                  focus:border-indigo-700
                  rounded
                  w-full
                  text-sm text-gray-500
                  bg-gray-100
                  pl-12
                  py-2
                "
                type="text"
                placeholder="Search"
              />
            </div>
          </div>
          <div class="w-1/2 hidden lg:flex">
            <div class="w-full flex items-center pl-8 justify-end">
              <div
                class="
                  h-full
                  w-20
                  flex
                  items-center
                  justify-center
                  border-r border-l
                "
              >
                <div class="relative cursor-pointer text-gray-600">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-bell"
                    width="28"
                    height="28"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z"></path>
                    <path
                      d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"
                    ></path>
                    <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                  </svg>
                  <div
                    class="
                      w-2
                      h-2
                      rounded-full
                      bg-red-400
                      border border-white
                      absolute
                      inset-0
                      mt-1
                      mr-1
                      m-auto
                    "
                  ></div>
                </div>
              </div>
              <div
                class="
                  h-full
                  w-20
                  flex
                  items-center
                  justify-center
                  border-r
                  mr-4
                  cursor-pointer
                  text-gray-600
                "
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-messages"
                  width="28"
                  height="28"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" />
                  <path
                    d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10"
                  />
                  <path
                    d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2"
                  />
                </svg>
              </div>
              <div
                class="flex items-center relative cursor-pointer"
                @click="dropdownHandler($event)"
              >
                <div class="rounded-full">
                  <ul
                    class="
                      p-2
                      w-full
                      border-r
                      bg-white
                      absolute
                      rounded
                      left-0
                      shadow
                      mt-12
                      sm:mt-16
                      hidden
                    "
                  >
                    <li
                      class="
                        flex
                        w-full
                        justify-between
                        text-gray-600
                        hover:text-indigo-700
                        cursor-pointer
                        items-center
                      "
                    >
                      <div class="flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="icon icon-tabler icon-tabler-user"
                          width="18"
                          height="18"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path stroke="none" d="M0 0h24v24H0z" />
                          <circle cx="12" cy="7" r="4" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                         
                          <Link :href="route('profile.show')" :active="route().current('profile.show')">
                                  <span class="text-sm ml-2">My Profile</span>
                            </Link>

                        
           
                      </div>

                      
                    </li>
                    <li
                      class="
                        flex
                        w-full
                        justify-between
                        text-gray-600
                        hover:text-indigo-700
                        cursor-pointer
                        items-center
                        mt-2
                      "
                    >
                      <div class="flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="icon icon-tabler icon-tabler-logout"
                          width="20"
                          height="20"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path stroke="none" d="M0 0h24v24H0z" />
                          <path
                            d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"
                          />
                          <path d="M7 12h14l-3 -3m0 6l3 -3" />
                        </svg>
                        <span class="text-sm ml-2" @click="logout"
                          >Sign out</span
                        >
                      </div>
                    </li>
                  </ul>
                  <div class="relative">
                    <img
                      class="rounded-full h-10 w-10 object-cover"
                      src="https://tuk-cdn.s3.amazonaws.com/assets/components/sidebar_layout/sl_1.png"
                      alt="avatar"
                    />
                    <div
                      class="
                        w-2
                        h-2
                        rounded-full
                        bg-green-400
                        border border-white
                        absolute
                        inset-0
                        mb-0
                        mr-0
                        m-auto
                      "
                    ></div>
                  </div>
                </div>
                <p class="text-gray-800 text-sm mx-3">{{$page.props.user.name}}</p>
                <div class="cursor-pointer text-gray-600">
                  <svg
                    aria-haspopup="true"
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-chevron-down"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <polyline points="6 9 12 15 18 9" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="text-gray-600 mr-8 visible lg:hidden relative"
          @click="dropdownHandler($event)"
        >
          <ul
            class="
              p-2
              w-40
              border-r
              bg-white
              absolute
              rounded
              right-0
              shadow
              mt-12
              hidden
            "
          >
            <li
              class="
                flex
                w-full
                justify-between
                text-gray-600
                hover:text-indigo-700
                cursor-pointer
                items-center
              "
            >
              <div class="flex items-center">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-user"
                  width="18"
                  height="18"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" />
                  <circle cx="12" cy="7" r="4" />
                  <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
             
                  <Link :href="route('profile.show')" tabindex="-1">
                    <span class="text-sm ml-2">My Profile</span>
                  </Link>
             
              </div>
            </li>
            <li
              class="
                flex
                w-full
                justify-between
                text-gray-600
                hover:text-indigo-700
                cursor-pointer
                items-center
                mt-2
              "
            >
              <div class="flex items-center">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-logout"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" />
                  <path
                    d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"
                  />
                  <path d="M7 12h14l-3 -3m0 6l3 -3" />
                </svg>
                <span class="text-sm ml-2" @click="logout()"> Sign out </span>
              </div>
            </li>
          </ul>
          <svg
            aria-label="Main Menu"
            aria-haspopup="true"
            xmlns="http://www.w3.org/2000/svg"
            class="icon icon-tabler icon-tabler-menu cursor-pointer"
            width="30"
            height="30"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path stroke="none" d="M0 0h24v24H0z" />
            <line x1="4" y1="8" x2="20" y2="8" />
            <line x1="4" y1="16" x2="20" y2="16" />
          </svg>
        </div>
      </nav>
      <!-- page header template here  -->
      <slot name="header"></slot>
      <!-- Navigation ends -->

      <!-- Place your content here -->

      <banner />
      <slot />
    </div>
  </div>
</template>

<script>
import Banner from "@/Jetstream/Banner.vue";
import { Link } from "@inertiajs/inertia-vue3";
  import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue'
export default {
  name: "LightWithHeaderAndIcons",
  components: {
    Banner, 
    Link,
    JetResponsiveNavLink
  },

  data() {
    return {
      menu: true,
      tool: false,
    };
  },
  methods: {
    dropdownHandler(event) {
      let single = event.currentTarget.getElementsByTagName("ul")[0];
      single.classList.toggle("hidden");
    },
    sidebarHandler() {
      var sideBar = document.getElementById("mobile-nav");
      sideBar.classList.toggle("hidden");
    },

    logout() {
      console.log("logut");
      this.$inertia.post(route("logout"));
    },
  },
};
</script>
