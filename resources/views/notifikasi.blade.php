@extends('navbar')
@section('title', 'Notifikasi')
@section('content')

    <div class="bg-[#F5FFF5] min-h-screen relative">

        <!-- Fixed Header & Filter Container -->
        <div class="fixed top-0 left-0 right-0 bg-[#F5FFF5] z-50 px-4 pt-4 pb-4">
            <!-- Header -->
            <div class="flex items-center justify-between mb-5">
                <!-- Icon Back + Title -->
                <div class="flex items-center gap-3">
                    <a href="{{ route('beranda') }}" id="icon-left" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 25 21"
                            fill="none">
                            <path
                                d="M8.94366 20.2236C9.33441 20.6143 9.86438 20.8339 10.417 20.8339C10.9696 20.8339 11.4996 20.6143 11.8903 20.2236C12.2811 19.8328 12.5006 19.3029 12.5006 18.7503C12.5006 18.1976 12.2811 17.6677 11.8903 17.2769L7.11366 12.5003L22.0837 12.5003C22.6362 12.5003 23.1661 12.2808 23.5568 11.8901C23.9475 11.4994 24.167 10.9695 24.167 10.4169C24.167 9.86439 23.9475 9.33448 23.5568 8.94378C23.1661 8.55308 22.6362 8.33359 22.0837 8.33359L7.11366 8.33359L11.8903 3.55692C12.2811 3.16617 12.5006 2.63619 12.5006 2.08359C12.5006 1.53098 12.2811 1.001 11.8903 0.610252C11.4996 0.2195 10.9696 -2.09767e-05 10.417 -2.09808e-05C9.86438 -2.0985e-05 9.33441 0.2195 8.94366 0.610252L0.610323 8.94359C0.416809 9.13705 0.263305 9.36674 0.158573 9.61954C0.0538415 9.87233 -6.29425e-05 10.1433 -6.29425e-05 10.4169C-6.29425e-05 10.6906 0.0538415 10.9615 0.158573 11.2143C0.263305 11.4671 0.416809 11.6968 0.610323 11.8903L8.94366 20.2236Z"
                                fill="#1F4E20" />
                        </svg>
                    </a>
                    <span class="text-black text-[22px] font-semibold">Notifikasi</span>
                </div>
               
                <!-- Icon Delete -->
                <div id="icon-right" onclick="openDeleteModal()"
                    class="flex items-center justify-center w-[44px] h-[44px] rounded-full bg-white shadow-md cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 18 23"
                        fill="none">
                        <path
                            d="M17.5 1.25H13.125L11.875 0H5.625L4.375 1.25H0V3.75H17.5M1.25 20C1.25 20.663 1.51339 21.2989 1.98223 21.7678C2.45107 22.2366 3.08696 22.5 3.75 22.5H13.75C14.413 22.5 15.0489 22.2366 15.5178 21.7678C15.9866 21.2989 16.25 20.663 16.25 20V5H1.25V20Z"
                            fill="#1F4E20" />
                    </svg>
                </div>
            </div>

            <!-- Card Filter -->
            <div class="relative flex items-center justify-between bg-hijau-paling-muda border border-hijau-tua rounded-2xl px-4 py-3 shadow-sm">
                <span id="filterLabel" class="text-black text-base font-semibold pl-4">Semua Lahan</span>
                <button onclick="openFilterModal()" type="button"
                    class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-[#1F4E20] hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                        <path
                            d="M6 4.12473e-07C5.37935 -0.00032496 4.77387 0.191856 4.26702 0.550057C3.76016 0.908257 3.37688 1.41484 3.17 2H0V4H3.17C3.3766 4.58553 3.75974 5.09257 4.2666 5.45121C4.77346 5.80985 5.37909 6.00245 6 6.00245C6.62091 6.00245 7.22654 5.80985 7.7334 5.45121C8.24026 5.09257 8.6234 4.58553 8.83 4H16V2H8.83C8.62312 1.41484 8.23984 0.908257 7.73298 0.550057C7.22613 0.191856 6.62065 -0.00032496 6 4.12473e-07ZM5 3C5 2.73478 5.10536 2.48043 5.29289 2.29289C5.48043 2.10536 5.73478 2 6 2C6.26522 2 6.51957 2.10536 6.70711 2.29289C6.89464 2.48043 7 2.73478 7 3C7 3.26522 6.89464 3.51957 6.70711 3.70711C6.51957 3.89464 6.26522 4 6 4C5.73478 4 5.48043 3.89464 5.29289 3.70711C5.10536 3.51957 5 3.26522 5 3ZM10 8C9.37935 7.99967 8.77387 8.19186 8.26702 8.55006C7.76016 8.90826 7.37688 9.41484 7.17 10H0V12H7.17C7.3766 12.5855 7.75974 13.0926 8.2666 13.4512C8.77346 13.8099 9.37909 14.0025 10 14.0025C10.6209 14.0025 11.2265 13.8099 11.7334 13.4512C12.2403 13.0926 12.6234 12.5855 12.83 12H16V10H12.83C12.6231 9.41484 12.2398 8.90826 11.733 8.55006C11.2261 8.19186 10.6207 7.99967 10 8ZM9 11C9 10.7348 9.10536 10.4804 9.29289 10.2929C9.48043 10.1054 9.73478 10 10 10C10.2652 10 10.5196 10.1054 10.7071 10.2929C10.8946 10.4804 11 10.7348 11 11C11 11.2652 10.8946 11.5196 10.7071 11.7071C10.5196 11.8946 10.2652 12 10 12C9.73478 12 9.48043 11.8946 9.29289 11.7071C9.10536 11.5196 9 11.2652 9 11Z"
                            fill="#1F4E20" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Spacer untuk kompensasi fixed header -->
        <div class="h-[160px]"></div>

        <!-- Daftar Card Notifikasi -->
        <div class="px-4 pb-[150px]">
            <div class="flex flex-col gap-6">
                <!-- Card 1 -->
                <div class="notification-card flex items-start gap-4 bg-white rounded-3xl border border-white-200 p-4 shadow-sm"  data-lahan="3">
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-white rounded-full border-2 border-gray-300 flex-shrink-0">
                        <img src="{{ asset('asset/img/suhutanah.svg') }}" alt="temp" class="w-[35px] h-[35px]">
                    </div>

                    <div class="flex flex-col flex-1 min-w-0">
                        <span class="text-black text-base font-semibold mb-1">Lahan 3 – Suhu Tanah</span>
                        <div class="flex items-center gap-1 mb-2">
                            <span class="text-sm text-black">Suhu tanah 37°C (Tinggi)</span>
                            <span class="text-lg">⚠️</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-gray-500 text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
                                fill="none">
                                <g clip-path="url(#clip0_159_40063)">
                                    <path
                                        d="M11.25 1.25L14.0625 4.0625M0.9375 4.0625L3.75 1.25M1.875 8.125C1.875 8.86369 2.02049 9.59514 2.30318 10.2776C2.58586 10.9601 3.00019 11.5801 3.52252 12.1025C4.04485 12.6248 4.66495 13.0391 5.34741 13.3218C6.02986 13.6045 6.76131 13.75 7.5 13.75C8.23869 13.75 8.97014 13.6045 9.65259 13.3218C10.3351 13.0391 10.9551 12.6248 11.4775 12.1025C11.9998 11.5801 12.4141 10.9601 12.6968 10.2776C12.9795 9.59514 13.125 8.86369 13.125 8.125C13.125 7.38631 12.9795 6.65486 12.6968 5.97241C12.4141 5.28995 11.9998 4.66985 11.4775 4.14752C10.9551 3.62519 10.3351 3.21086 9.65259 2.92818C8.97014 2.64549 8.23869 2.5 7.5 2.5C6.76131 2.5 6.02986 2.64549 5.34741 2.92818C4.66495 3.21086 4.04485 3.62519 3.52252 4.14752C3.00019 4.66985 2.58586 5.28995 2.30318 5.97241C2.02049 6.65486 1.875 7.38631 1.875 8.125Z"
                                        stroke="#1F4E20" stroke-width="1.5" />
                                    <path d="M7.5 5V8.125H9.6875M7.5 2.5V0.625" stroke="#1F4E20" stroke-width="1.5" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_159_40063">
                                        <rect width="15" height="15" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>7 detik lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="notification-card flex items-start gap-4 bg-white rounded-3xl border border-white-200 p-4 shadow-sm"  data-lahan="12">
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-white rounded-full border-2 border-gray-300 flex-shrink-0">
                        <img src="{{ asset('asset/img/npk.png') }}" alt="npk" class="w-[35px] h-[35px]">
                    </div>
                    <div class="flex flex-col flex-1 min-w-0">
                        <span class="text-black text-base font-semibold mb-1">Lahan 6 – NPK</span>
                        <div class="flex items-center gap-1 mb-2">
                            <span class="text-sm text-black">Nitrogen 20 ppm (Rendah)</span>
                            <span class="text-lg">⚠️</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-gray-500 text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
                                fill="none">
                                <g clip-path="url(#clip0_159_40063)">
                                    <path
                                        d="M11.25 1.25L14.0625 4.0625M0.9375 4.0625L3.75 1.25M1.875 8.125C1.875 8.86369 2.02049 9.59514 2.30318 10.2776C2.58586 10.9601 3.00019 11.5801 3.52252 12.1025C4.04485 12.6248 4.66495 13.0391 5.34741 13.3218C6.02986 13.6045 6.76131 13.75 7.5 13.75C8.23869 13.75 8.97014 13.6045 9.65259 13.3218C10.3351 13.0391 10.9551 12.6248 11.4775 12.1025C11.9998 11.5801 12.4141 10.9601 12.6968 10.2776C12.9795 9.59514 13.125 8.86369 13.125 8.125C13.125 7.38631 12.9795 6.65486 12.6968 5.97241C12.4141 5.28995 11.9998 4.66985 11.4775 4.14752C10.9551 3.62519 10.3351 3.21086 9.65259 2.92818C8.97014 2.64549 8.23869 2.5 7.5 2.5C6.76131 2.5 6.02986 2.64549 5.34741 2.92818C4.66495 3.21086 4.04485 3.62519 3.52252 4.14752C3.00019 4.66985 2.58586 5.28995 2.30318 5.97241C2.02049 6.65486 1.875 7.38631 1.875 8.125Z"
                                        stroke="#1F4E20" stroke-width="1.5" />
                                    <path d="M7.5 5V8.125H9.6875M7.5 2.5V0.625" stroke="#1F4E20" stroke-width="1.5" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_159_40063">
                                        <rect width="15" height="15" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>5 menit lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="notification-card flex items-start gap-4 bg-white rounded-3xl border border-white-200 p-4 shadow-sm">
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-white rounded-full border-2 border-gray-300 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="29" viewBox="0 0 20 29"
                            fill="none">
                            <path
                                d="M9.84375 0C9.84375 0 0 10.8213 0 18.4775C0 24.5178 3.80352 28.3213 9.84375 28.3213C15.884 28.3213 19.6875 24.5178 19.6875 18.4775C19.6875 10.8213 9.84375 0 9.84375 0ZM10.9375 24.7666V23.126C12.0249 23.1247 13.0674 22.6922 13.8363 21.9233C14.6053 21.1543 15.0378 20.1118 15.0391 19.0244H16.6797C16.6781 20.5468 16.0726 22.0064 14.996 23.083C13.9195 24.1595 12.4599 24.765 10.9375 24.7666Z"
                                fill="#1F4E20" />
                        </svg>
                    </div>
                    <div class="flex flex-col flex-1 min-w-0">
                        <span class="text-black text-base font-semibold mb-1">Lahan 12 – Kelembapan Lingkungan</span>
                        <span class="text-sm text-black mb-2">Kelembapan lingkungan 65% (Normal)</span>
                        <div class="flex items-center gap-1.5 text-gray-500 text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
                                fill="none">
                                <g clip-path="url(#clip0_159_40063)">
                                    <path
                                        d="M11.25 1.25L14.0625 4.0625M0.9375 4.0625L3.75 1.25M1.875 8.125C1.875 8.86369 2.02049 9.59514 2.30318 10.2776C2.58586 10.9601 3.00019 11.5801 3.52252 12.1025C4.04485 12.6248 4.66495 13.0391 5.34741 13.3218C6.02986 13.6045 6.76131 13.75 7.5 13.75C8.23869 13.75 8.97014 13.6045 9.65259 13.3218C10.3351 13.0391 10.9551 12.6248 11.4775 12.1025C11.9998 11.5801 12.4141 10.9601 12.6968 10.2776C12.9795 9.59514 13.125 8.86369 13.125 8.125C13.125 7.38631 12.9795 6.65486 12.6968 5.97241C12.4141 5.28995 11.9998 4.66985 11.4775 4.14752C10.9551 3.62519 10.3351 3.21086 9.65259 2.92818C8.97014 2.64549 8.23869 2.5 7.5 2.5C6.76131 2.5 6.02986 2.64549 5.34741 2.92818C4.66495 3.21086 4.04485 3.62519 3.52252 4.14752C3.00019 4.66985 2.58586 5.28995 2.30318 5.97241C2.02049 6.65486 1.875 7.38631 1.875 8.125Z"
                                        stroke="#1F4E20" stroke-width="1.5" />
                                    <path d="M7.5 5V8.125H9.6875M7.5 2.5V0.625" stroke="#1F4E20" stroke-width="1.5" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_159_40063">
                                        <rect width="15" height="15" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>35 menit lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="notification-card flex items-start gap-4 bg-white rounded-3xl border border-white-200 p-4 shadow-sm"  data-lahan="1">
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-white rounded-full border-2 border-gray-300 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35"
                            fill="none">
                            <path
                                d="M16.25 0C15.9375 0 15.625 0.294118 15 0.882353V3.23529H11.2088C10 2.05882 10 2.05882 8.75 3.23529C7.5 4.41177 7.5 4.41177 8.75 5.58824C10 6.76471 10 6.76471 11.1539 5.58824H15V7.94118H17.5V5.58824H21.3049C22.5395 6.76471 22.5393 6.76471 23.7893 5.58824C25.0393 4.41177 25.0393 4.41177 23.7893 3.23529C22.5393 2.05882 22.5395 2.05882 21.25 3.23529H17.5V0.882353C16.875 0.294118 16.5625 0 16.25 0ZM0 5.73529V24.5588H2.5V5.73529H0ZM5 9.26471L3.75 8.08824V22.2059L5 21.0294V9.26471ZM16.25 9.11765C13.75 9.11765 12.4727 9.11765 12.4039 11.4706H6.25V18.5294H11.2988C12.5 19.7059 13.75 20.8824 16.25 20.8824C18.75 20.8824 20 19.7059 21.25 18.5294C26.25 18.5294 26.25 18.5294 26.25 20.8824V23.2353H33.75V18.5294C33.75 13.8235 31.25 11.4706 26.25 11.4706H20C20.0273 9.11765 18.75 9.11765 16.25 9.11765ZM25 24.4118V25.5882H35V24.4118H25ZM30 26.7647C30 26.7647 26.967 30.5632 27.5 32.7941C27.8297 34.1735 28.4977 35 30 35C31.5023 35 32.1703 34.1735 32.5 32.7941C33.033 30.5632 30 26.7647 30 26.7647Z"
                                fill="#9E9E9E" />
                        </svg>
                    </div>
                    <div class="flex flex-col flex-1 min-w-0">
                        <span class="text-black text-base font-semibold mb-1">Lahan 1 – Penyiraman Otomatis</span>
                        <span class="text-sm text-black mb-2">Penyiraman dijalankan 15 menit</span>
                        <div class="flex items-center gap-1.5 text-gray-500 text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
                                fill="none">
                                <g clip-path="url(#clip0_159_40063)">
                                    <path
                                        d="M11.25 1.25L14.0625 4.0625M0.9375 4.0625L3.75 1.25M1.875 8.125C1.875 8.86369 2.02049 9.59514 2.30318 10.2776C2.58586 10.9601 3.00019 11.5801 3.52252 12.1025C4.04485 12.6248 4.66495 13.0391 5.34741 13.3218C6.02986 13.6045 6.76131 13.75 7.5 13.75C8.23869 13.75 8.97014 13.6045 9.65259 13.3218C10.3351 13.0391 10.9551 12.6248 11.4775 12.1025C11.9998 11.5801 12.4141 10.9601 12.6968 10.2776C12.9795 9.59514 13.125 8.86369 13.125 8.125C13.125 7.38631 12.9795 6.65486 12.6968 5.97241C12.4141 5.28995 11.9998 4.66985 11.4775 4.14752C10.9551 3.62519 10.3351 3.21086 9.65259 2.92818C8.97014 2.64549 8.23869 2.5 7.5 2.5C6.76131 2.5 6.02986 2.64549 5.34741 2.92818C4.66495 3.21086 4.04485 3.62519 3.52252 4.14752C3.00019 4.66985 2.58586 5.28995 2.30318 5.97241C2.02049 6.65486 1.875 7.38631 1.875 8.125Z"
                                        stroke="#1F4E20" stroke-width="1.5" />
                                    <path d="M7.5 5V8.125H9.6875M7.5 2.5V0.625" stroke="#1F4E20" stroke-width="1.5" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_159_40063">
                                        <rect width="15" height="15" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>27 menit lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="notification-card flex items-start gap-4 bg-white rounded-3xl border border-white-200 p-4 shadow-sm"  data-lahan="2">
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-white rounded-full border-2 border-gray-300 flex-shrink-0">
                         <img src="{{ asset('asset/img/phtanah.svg') }}" alt="ph" class="w-[35px] h-[35px]">
                    </div>
                    <div class="flex flex-col flex-1 min-w-0">
                        <span class="text-black text-base font-semibold mb-1">Lahan 2 – pH Tanah</span>
                        <div class="flex items-center gap-1 mb-2">
                            <span class="text-sm text-black">pH Tanah 4.5 (Asam)</span>
                            <span class="text-lg">⚠️</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-gray-500 text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
                                fill="none">
                                <g clip-path="url(#clip0_159_40063)">
                                    <path
                                        d="M11.25 1.25L14.0625 4.0625M0.9375 4.0625L3.75 1.25M1.875 8.125C1.875 8.86369 2.02049 9.59514 2.30318 10.2776C2.58586 10.9601 3.00019 11.5801 3.52252 12.1025C4.04485 12.6248 4.66495 13.0391 5.34741 13.3218C6.02986 13.6045 6.76131 13.75 7.5 13.75C8.23869 13.75 8.97014 13.6045 9.65259 13.3218C10.3351 13.0391 10.9551 12.6248 11.4775 12.1025C11.9998 11.5801 12.4141 10.9601 12.6968 10.2776C12.9795 9.59514 13.125 8.86369 13.125 8.125C13.125 7.38631 12.9795 6.65486 12.6968 5.97241C12.4141 5.28995 11.9998 4.66985 11.4775 4.14752C10.9551 3.62519 10.3351 3.21086 9.65259 2.92818C8.97014 2.64549 8.23869 2.5 7.5 2.5C6.76131 2.5 6.02986 2.64549 5.34741 2.92818C4.66495 3.21086 4.04485 3.62519 3.52252 4.14752C3.00019 4.66985 2.58586 5.28995 2.30318 5.97241C2.02049 6.65486 1.875 7.38631 1.875 8.125Z"
                                        stroke="#1F4E20" stroke-width="1.5" />
                                    <path d="M7.5 5V8.125H9.6875M7.5 2.5V0.625" stroke="#1F4E20" stroke-width="1.5" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_159_40063">
                                        <rect width="15" height="15" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>1 jam lalu</span>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="notification-card flex items-start gap-4 bg-white rounded-3xl border border-white-200 p-4 shadow-sm"  data-lahan="2">
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-white rounded-full border-2 border-gray-300 flex-shrink-0">
                         <img src="{{ asset('asset/img/phtanah.svg') }}" alt="ph" class="w-[35px] h-[35px]">
                    </div>
                    <div class="flex flex-col flex-1 min-w-0">
                        <span class="text-black text-base font-semibold mb-1">Lahan 2 – pH Tanah</span>
                        <div class="flex items-center gap-1 mb-2">
                            <span class="text-sm text-black">pH Tanah 4.5 (Asam)</span>
                            <span class="text-lg">⚠️</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-gray-500 text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
                                fill="none">
                                <g clip-path="url(#clip0_159_40063)">
                                    <path
                                        d="M11.25 1.25L14.0625 4.0625M0.9375 4.0625L3.75 1.25M1.875 8.125C1.875 8.86369 2.02049 9.59514 2.30318 10.2776C2.58586 10.9601 3.00019 11.5801 3.52252 12.1025C4.04485 12.6248 4.66495 13.0391 5.34741 13.3218C6.02986 13.6045 6.76131 13.75 7.5 13.75C8.23869 13.75 8.97014 13.6045 9.65259 13.3218C10.3351 13.0391 10.9551 12.6248 11.4775 12.1025C11.9998 11.5801 12.4141 10.9601 12.6968 10.2776C12.9795 9.59514 13.125 8.86369 13.125 8.125C13.125 7.38631 12.9795 6.65486 12.6968 5.97241C12.4141 5.28995 11.9998 4.66985 11.4775 4.14752C10.9551 3.62519 10.3351 3.21086 9.65259 2.92818C8.97014 2.64549 8.23869 2.5 7.5 2.5C6.76131 2.5 6.02986 2.64549 5.34741 2.92818C4.66495 3.21086 4.04485 3.62519 3.52252 4.14752C3.00019 4.66985 2.58586 5.28995 2.30318 5.97241C2.02049 6.65486 1.875 7.38631 1.875 8.125Z"
                                        stroke="#1F4E20" stroke-width="1.5" />
                                    <path d="M7.5 5V8.125H9.6875M7.5 2.5V0.625" stroke="#1F4E20" stroke-width="1.5" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_159_40063">
                                        <rect width="15" height="15" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>1 jam lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Card 7 -->
                <div class="notification-card flex items-start gap-4 bg-white rounded-3xl border border-white-200 p-4 shadow-sm"  data-lahan="9">
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-white rounded-full border-2 border-gray-300 flex-shrink-0">
                        <img src="{{ asset('asset/img/kelembapantanah.svg') }}" alt="humidity"
                                        class="w-[35px] h-[35px]">
                    </div>
                    <div class="flex flex-col flex-1 min-w-0">
                        <span class="text-black text-base font-semibold mb-1">Lahan 9 – Kelembaban Tanah</span>
                        <span class="text-sm text-black mb-2">Kelembaban Tanah 60% (Normal)</span>
                        <div class="flex items-center gap-1.5 text-gray-500 text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
                                fill="none">
                                <g clip-path="url(#clip0_159_40063)">
                                    <path
                                        d="M11.25 1.25L14.0625 4.0625M0.9375 4.0625L3.75 1.25M1.875 8.125C1.875 8.86369 2.02049 9.59514 2.30318 10.2776C2.58586 10.9601 3.00019 11.5801 3.52252 12.1025C4.04485 12.6248 4.66495 13.0391 5.34741 13.3218C6.02986 13.6045 6.76131 13.75 7.5 13.75C8.23869 13.75 8.97014 13.6045 9.65259 13.3218C10.3351 13.0391 10.9551 12.6248 11.4775 12.1025C11.9998 11.5801 12.4141 10.9601 12.6968 10.2776C12.9795 9.59514 13.125 8.86369 13.125 8.125C13.125 7.38631 12.9795 6.65486 12.6968 5.97241C12.4141 5.28995 11.9998 4.66985 11.4775 4.14752C10.9551 3.62519 10.3351 3.21086 9.65259 2.92818C8.97014 2.64549 8.23869 2.5 7.5 2.5C6.76131 2.5 6.02986 2.64549 5.34741 2.92818C4.66495 3.21086 4.04485 3.62519 3.52252 4.14752C3.00019 4.66985 2.58586 5.28995 2.30318 5.97241C2.02049 6.65486 1.875 7.38631 1.875 8.125Z"
                                        stroke="#1F4E20" stroke-width="1.5" />
                                    <path d="M7.5 5V8.125H9.6875M7.5 2.5V0.625" stroke="#1F4E20" stroke-width="1.5" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_159_40063">
                                        <rect width="15" height="15" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>2 jam lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Card 8 -->
                <div class="notification-card flex items-start gap-4 bg-white rounded-3xl border border-white-200 p-4 shadow-sm"  data-lahan="11">
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-white rounded-full border-2 border-gray-300 flex-shrink-0">
                         <img src="{{ asset('asset/img/suhulingkungan.svg') }}" alt="temp"
                                        class="w-[35px] h-[35px]">
                    </div>
                    <div class="flex flex-col flex-1 min-w-0">
                        <span class="text-black text-base font-semibold mb-1">Lahan 11 – Suhu Lingkungan</span>
                        <div class="flex items-center gap-1 mb-2">
                            <span class="text-sm text-black">Suhu Lingkungan 10°C (Rendah)</span>
                            <span class="text-lg">⚠️</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-gray-500 text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
                                fill="none">
                                <g clip-path="url(#clip0_159_40063)">
                                    <path
                                        d="M11.25 1.25L14.0625 4.0625M0.9375 4.0625L3.75 1.25M1.875 8.125C1.875 8.86369 2.02049 9.59514 2.30318 10.2776C2.58586 10.9601 3.00019 11.5801 3.52252 12.1025C4.04485 12.6248 4.66495 13.0391 5.34741 13.3218C6.02986 13.6045 6.76131 13.75 7.5 13.75C8.23869 13.75 8.97014 13.6045 9.65259 13.3218C10.3351 13.0391 10.9551 12.6248 11.4775 12.1025C11.9998 11.5801 12.4141 10.9601 12.6968 10.2776C12.9795 9.59514 13.125 8.86369 13.125 8.125C13.125 7.38631 12.9795 6.65486 12.6968 5.97241C12.4141 5.28995 11.9998 4.66985 11.4775 4.14752C10.9551 3.62519 10.3351 3.21086 9.65259 2.92818C8.97014 2.64549 8.23869 2.5 7.5 2.5C6.76131 2.5 6.02986 2.64549 5.34741 2.92818C4.66495 3.21086 4.04485 3.62519 3.52252 4.14752C3.00019 4.66985 2.58586 5.28995 2.30318 5.97241C2.02049 6.65486 1.875 7.38631 1.875 8.125Z"
                                        stroke="#1F4E20" stroke-width="1.5" />
                                    <path d="M7.5 5V8.125H9.6875M7.5 2.5V0.625" stroke="#1F4E20" stroke-width="1.5" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_159_40063">
                                        <rect width="15" height="15" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>2 jam lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Card 9 -->
<div class="notification-card flex items-start gap-4 bg-white rounded-3xl border border-gray-200 p-4 shadow-sm" data-lahan="10">
    <!-- Lingkaran Ikon -->
    <div class="w-14 h-14 flex items-center justify-center bg-white rounded-full border-2 border-gray-300 flex-shrink-0 overflow-hidden">
    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
<path d="M16.4813 1.49773C10.3495 1.48748 4.65586 1.66658 4.72764 2.06306L6.23701 4.53357C10.2948 4.18494 14.164 4.05847 18.0399 4.08445C21.6767 4.10838 25.3202 4.26697 29.121 4.50076L31.2538 2.22576C30.9462 1.76502 23.4335 1.50935 16.4813 1.49773ZM16.7411 5.31287C13.3847 5.32107 10.0214 5.4489 6.5084 5.7449C5.01885 14.1982 4.19375 24.5136 6.13242 30.8779L4.32568 32.997C13.0839 33.6533 21.9979 33.8652 30.4813 33.4277L28.4374 30.9941C29.7567 23.7344 29.3466 13.8222 28.4511 5.69295C24.9511 5.48377 21.5946 5.34431 18.245 5.31765L27.4189 13.7402H22.5448C22.8046 15.3193 23.9394 17.4521 25.1356 19.4277C25.8124 20.5488 26.5028 21.6357 27.0292 22.5928C27.5556 23.5498 27.9589 24.3496 27.9589 25.1562C27.9589 27.0703 26.6669 28.6426 24.7665 29.6611C22.8661 30.6865 20.3163 31.2402 17.4999 31.2402C14.6835 31.2402 12.1337 30.6865 10.2333 29.6611C8.33291 28.6426 7.04092 27.0703 7.04092 25.1562C7.04092 24.3359 7.46475 23.5361 8.01846 22.5654C8.57217 21.5947 9.28994 20.501 9.98721 19.3662C11.2177 17.3769 12.3388 15.2304 12.496 13.7402H7.10928L16.7411 5.31287ZM17.4931 6.29519L10.3905 12.5097H13.6923L13.7401 13.0703C13.9247 15.251 12.4481 17.7187 11.0331 20.0156C10.3222 21.164 9.61123 22.251 9.0917 23.1738C8.56533 24.0898 8.27139 24.8828 8.27139 25.1562C8.27139 26.1543 8.7499 27.0361 9.64541 27.7949C13.3505 27.3301 15.2509 27.0703 16.9188 27.0156C16.9599 26.4345 17.0351 25.8535 17.1308 25.2929C14.6288 25.4502 12.3251 24.7803 10.0556 23.9736C11.0741 22.0049 12.9472 20.6308 14.6356 20.6377C14.9501 20.6377 15.2577 20.6787 15.5517 20.7812C16.3173 21.0273 17.0077 22.4013 17.4657 23.5566C17.6161 22.8388 17.7597 22.2236 17.8212 21.7724V21.7656C17.8827 21.3418 17.7118 20.125 17.4931 19.1201C17.3358 18.3955 17.1718 17.7597 17.0897 17.459C16.6591 17.459 16.2763 17.3769 16.0233 17.1172C14.287 15.3125 15.4149 11.9765 16.9052 10.1172C17.9647 11.8808 19.3456 13.7812 20.7333 15.0937C20.4325 16.1054 19.8856 16.9189 18.8261 17.2812C18.6825 17.2949 18.5048 17.3154 18.3271 17.3428C18.4228 17.6982 18.5595 18.2314 18.6962 18.8535C18.7851 19.2431 18.8671 19.6465 18.9354 20.0498C19.2978 19.7148 19.7147 19.4072 20.0565 19.3935H20.1317C22.0458 19.5713 24.2128 21.417 24.7597 24.1103C22.8798 23.249 20.7265 23.748 19.0243 22.0459C18.8329 23.3174 18.2997 25.2314 18.1562 27.0224C19.8036 27.0771 21.704 27.3369 25.3544 27.7949C26.2499 27.0361 26.7284 26.1543 26.7284 25.1562C26.7284 24.8691 26.4481 24.0898 25.9491 23.1875C25.4501 22.2783 24.7733 21.2051 24.0829 20.0635C22.7089 17.7939 21.2597 15.3261 21.2597 13.125V12.5097H24.2606L17.4931 6.29519ZM17.4999 28.2256C15.9755 28.2256 14.3622 28.4306 11.2997 28.8203C12.9198 29.5654 15.0937 30.0097 17.4999 30.0097C19.9062 30.0097 22.08 29.5654 23.7001 28.8203C20.6376 28.4306 19.0243 28.2256 17.4999 28.2256Z" fill="#AC7F5E"/>
</svg>
</div>
    <div class="flex flex-col flex-1 min-w-0">
        <span class="text-black text-base font-semibold mb-1">Lahan 10 – Pemupukan Otomatis</span>
        <span class="text-sm text-black mb-2">Pemupukan dijalankan 5 menit</span>
        <div class="flex items-center gap-1.5 text-gray-500 text-xs">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                <g clip-path="url(#clip0_159_40063)">
                    <path d="M11.25 1.25L14.0625 4.0625M0.9375 4.0625L3.75 1.25M1.875 8.125C1.875 8.86369 2.02049 9.59514 2.30318 10.2776C2.58586 10.9601 3.00019 11.5801 3.52252 12.1025C4.04485 12.6248 4.66495 13.0391 5.34741 13.3218C6.02986 13.6045 6.76131 13.75 7.5 13.75C8.23869 13.75 8.97014 13.6045 9.65259 13.3218C10.3351 13.0391 10.9551 12.6248 11.4775 12.1025C11.9998 11.5801 12.4141 10.9601 12.6968 10.2776C12.9795 9.59514 13.125 8.86369 13.125 8.125C13.125 7.38631 12.9795 6.65486 12.6968 5.97241C12.4141 5.28995 11.9998 4.66985 11.4775 4.14752C10.9551 3.62519 10.3351 3.21086 9.65259 2.92818C8.97014 2.64549 8.23869 2.5 7.5 2.5C6.76131 2.5 6.02986 2.64549 5.34741 2.92818C4.66495 3.21086 4.04485 3.62519 3.52252 4.14752C3.00019 4.66985 2.58586 5.28995 2.30318 5.97241C2.02049 6.65486 1.875 7.38631 1.875 8.125Z" stroke="#1F4E20" stroke-width="1.5" />
                    <path d="M7.5 5V8.125H9.6875M7.5 2.5V0.625" stroke="#1F4E20" stroke-width="1.5" />
                </g>
                <defs>
                    <clipPath id="clip0_159_40063">
                        <rect width="15" height="15" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <span>2 jam lalu</span>
        </div>
    </div>
</div>

                <!-- Card 10 -->
                <div class="notification-card flex items-start gap-4 bg-white rounded-3xl border border-white-200 p-4 shadow-sm" data-lahan="7">
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-white rounded-full border-2 border-gray-300 flex-shrink-0">
                         <img src="{{ asset('asset/img/npk.png') }}" alt="npk" class="w-[35px] h-[35px]">
                    </div>
                    <div class="flex flex-col flex-1 min-w-0">
                        <span class="text-black text-base font-semibold mb-1">Lahan 7 – NPK</span>
                        <span class="text-sm text-black mb-2">Nitrogen 48 ppm (Normal)</span>
                        <div class="flex items-center gap-1.5 text-gray-500 text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
                                fill="none">
                                <g clip-path="url(#clip0_159_40063)">
                                    <path
                                        d="M11.25 1.25L14.0625 4.0625M0.9375 4.0625L3.75 1.25M1.875 8.125C1.875 8.86369 2.02049 9.59514 2.30318 10.2776C2.58586 10.9601 3.00019 11.5801 3.52252 12.1025C4.04485 12.6248 4.66495 13.0391 5.34741 13.3218C6.02986 13.6045 6.76131 13.75 7.5 13.75C8.23869 13.75 8.97014 13.6045 9.65259 13.3218C10.3351 13.0391 10.9551 12.6248 11.4775 12.1025C11.9998 11.5801 12.4141 10.9601 12.6968 10.2776C12.9795 9.59514 13.125 8.86369 13.125 8.125C13.125 7.38631 12.9795 6.65486 12.6968 5.97241C12.4141 5.28995 11.9998 4.66985 11.4775 4.14752C10.9551 3.62519 10.3351 3.21086 9.65259 2.92818C8.97014 2.64549 8.23869 2.5 7.5 2.5C6.76131 2.5 6.02986 2.64549 5.34741 2.92818C4.66495 3.21086 4.04485 3.62519 3.52252 4.14752C3.00019 4.66985 2.58586 5.28995 2.30318 5.97241C2.02049 6.65486 1.875 7.38631 1.875 8.125Z"
                                        stroke="#1F4E20" stroke-width="1.5" />
                                    <path d="M7.5 5V8.125H9.6875M7.5 2.5V0.625" stroke="#1F4E20" stroke-width="1.5" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_159_40063">
                                        <rect width="15" height="15" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>2 jam lalu</span>
                        </div>
                    </div>
                </div>

<!--Modal Filter -->
<div id="filterModal" class="hidden fixed inset-0 z-[60]">
    <!-- Overlay transparan untuk klik di luar -->
    <div class="absolute inset-0"></div>

    <!-- Modal content -->
    <div id="modalContent"
        class="absolute top-[140px] right-4 w-full max-w-[180px] bg-white  shadow-lg border border-gray-200 overflow-hidden transform transition-all duration-300 translate-x-full opacity-0">

        <!-- Header Filter -->
        <div class="bg-hijau-tua text-white text-center py-1.5 text-sm font-semibold">
            Semua Lahan
        </div>

        <!-- Daftar Lahan -->
        <div id="lahanList" class="grid grid-cols-1 divide-y divide-gray-200 max-h-[400px] overflow-y-auto">
            <div data-lahan="1"
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 1</div>
            <div data-lahan="2"
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 2</div>
            <div data-lahan="3"
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 3</div>
            <div data-lahan="4"
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 4</div>
            <div data-lahan="5"
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 5</div>
            <div data-lahan="6"
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 6</div>
            <div data-lahan="7"
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 7</div>
            <div data-lahan="8"
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 8</div>
            <div data-lahan="9"
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 9</div>
            <div data-lahan="10"
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 10</div>
            <div data-lahan="11"
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 11</div>
            <div data-lahan="12"
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 12</div>
        </div>
    </div>
</div>
<!-- Pesan jika tidak ada notifikasi -->
<div id="noNotification" class="hidden text-center py-8 text-gray-500">
    <p class="text-lg">Tidak ada notifikasi untuk lahan ini</p>
</div>
<!-- Modal Delete Confirmation -->
<div id="deleteModal" class="hidden fixed inset-0 z-[70] flex items-center justify-center">
    <!-- Overlay dengan blur -->
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

    <!-- Modal Content -->
    <div class="relative bg-white rounded-3xl w-[90%] max-w-[320px] p-6 shadow-2xl transform transition-all">
        <!-- Icon Trash -->
        <div class="flex justify-center mb-4">
            <div class="w-16 h-16 bg-hijau-tua rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="32" viewBox="0 0 18 23" fill="none">
                    <path d="M17.5 1.25H13.125L11.875 0H5.625L4.375 1.25H0V3.75H17.5M1.25 20C1.25 20.663 1.51339 21.2989 1.98223 21.7678C2.45107 22.2366 3.08696 22.5 3.75 22.5H13.75C14.413 22.5 15.0489 22.2366 15.5178 21.7678C15.9866 21.2989 16.25 20.663 16.25 20V5H1.25V20Z" fill="white"/>
                </svg>
            </div>
        </div>

        <!-- Text -->
        <p class="text-center text-black text-base font-medium mb-6 leading-relaxed">
            Apakah Anda yakin ingin<br>menghapus semua notifikasi?
        </p>

        <!-- Buttons -->
        <div class="flex flex-col gap-3">
            <button onclick="confirmDelete()" class="w-full bg-hijau-tua text-white py-3 rounded-full font-semibold text-base hover:bg-opacity-90 transition-all">
                Hapus
            </button>
            <button onclick="closeDeleteModal()" class="w-full bg-transparent text-hijau-tua py-3 rounded-full font-semibold text-base hover:bg-gray-100 transition-all">
                Batal
            </button>
        </div>
    </div>
</div>


<script>
    // Fungsi untuk membuka modal delete
    function openDeleteModal() {
        const modal = document.getElementById('deleteModal');
        modal.classList.remove('hidden');
    }

    // Fungsi untuk menutup modal delete
    function closeDeleteModal() {
        const modal = document.getElementById('deleteModal');
        modal.classList.add('hidden');
    }

    // Fungsi konfirmasi delete
    function confirmDelete() {
        const cards = document.querySelectorAll('.notification-card');
        const noNotification = document.getElementById('noNotification');
        
        cards.forEach(card => {
            card.style.display = 'none';
        });
        
        if (noNotification) {
            noNotification.classList.remove('hidden');
        }
        
        closeDeleteModal();
    }

    function openFilterModal() {
        const modal = document.getElementById('filterModal');
        const content = document.getElementById('modalContent');
        modal.classList.remove('hidden');
        setTimeout(() => {
            content.classList.remove('translate-x-full', 'opacity-0');
        }, 10);
    }

    function closeFilterModal() {
        const modal = document.getElementById('filterModal');
        const content = document.getElementById('modalContent');
        content.classList.add('translate-x-full', 'opacity-0');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }

    function filterNotifications(lahanNumber) {
        const cards = document.querySelectorAll('.notification-card');
        const noNotification = document.getElementById('noNotification');
        let visibleCount = 0;

        cards.forEach(card => {
            if (lahanNumber === 'all') {
                card.style.display = 'flex';
                visibleCount++;
            } else {
                if (card.dataset.lahan === lahanNumber) {
                    card.style.display = 'flex';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            }
        });

        if (noNotification) {
            if (visibleCount === 0) {
                noNotification.classList.remove('hidden');
            } else {
                noNotification.classList.add('hidden');
            }
        }
    }

    document.addEventListener('click', function (event) {
        const modal = document.getElementById('filterModal');
        const content = document.getElementById('modalContent');
        const button = event.target.closest('button[onclick="openFilterModal()"]');

        if (modal && !modal.classList.contains('hidden') && !content.contains(event.target) && !button) {
            closeFilterModal();
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        const headerFilter = document.querySelector('#modalContent .bg-hijau-tua');
        const lahanList = document.querySelectorAll('#lahanList div');
        const label = document.getElementById('filterLabel');

        function resetAll() {
            lahanList.forEach(i => {
                i.classList.remove('bg-hijau-tua', 'text-white');
                i.classList.add('bg-white', 'text-hijau-tua');
            });
            headerFilter.classList.remove('bg-hijau-tua', 'text-white');
            headerFilter.classList.add('bg-white', 'text-hijau-tua');
        }

        lahanList.forEach(item => {
            item.addEventListener('click', () => {
                resetAll();
                item.classList.add('bg-hijau-tua', 'text-white');
                item.classList.remove('bg-white', 'text-hijau-tua');
                if (label) label.textContent = item.textContent;
                
                const lahanNumber = item.dataset.lahan;
                filterNotifications(lahanNumber);
                
                closeFilterModal();
            });
        });

        headerFilter.addEventListener('click', () => {
            resetAll();
            headerFilter.classList.add('bg-hijau-tua', 'text-white');
            headerFilter.classList.remove('bg-white', 'text-hijau-tua');
            if (label) label.textContent = 'Semua Lahan';
            
            filterNotifications('all');
            
            closeFilterModal();
        });
    });
</script>



@endsection