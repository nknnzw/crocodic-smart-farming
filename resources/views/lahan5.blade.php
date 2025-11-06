@extends('navbar')
@section('title', 'Lahan5')
@section('content')

    <div class="bg-hijau-paling-muda min-h-screen">
        <div class="flex flex-col w-full max-w-[358px] gap-4 relative mx-auto pt-6 pb-24 px-4">
            <!-- Header -->
            <div class="flex items-center justify-between mb-2">
                <!-- Icon Back + Title -->
                <div class="flex items-center gap-4">
                    <a href="{{ route('lahan') }}" id="icon-left" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 25 21"
                            fill="none">
                            <path
                                d="M8.94366 20.2236C9.33441 20.6143 9.86438 20.8339 10.417 20.8339C10.9696 20.8339 11.4996 20.6143 11.8903 20.2236C12.2811 19.8328 12.5006 19.3029 12.5006 18.7503C12.5006 18.1976 12.2811 17.6677 11.8903 17.2769L7.11366 12.5003L22.0837 12.5003C22.6362 12.5003 23.1661 12.2808 23.5568 11.8901C23.9475 11.4994 24.167 10.9695 24.167 10.4169C24.167 9.86439 23.9475 9.33448 23.5568 8.94378C23.1661 8.55308 22.6362 8.33359 22.0837 8.33359L7.11366 8.33359L11.8903 3.55692C12.2811 3.16617 12.5006 2.63619 12.5006 2.08359C12.5006 1.53098 12.2811 1.001 11.8903 0.610252C11.4996 0.2195 10.9696 -2.09767e-05 10.417 -2.09808e-05C9.86438 -2.0985e-05 9.33441 0.2195 8.94366 0.610252L0.610323 8.94359C0.416809 9.13705 0.263305 9.36674 0.158573 9.61954C0.0538415 9.87233 -6.29425e-05 10.1433 -6.29425e-05 10.4169C-6.29425e-05 10.6906 0.0538415 10.9615 0.158573 11.2143C0.263305 11.4671 0.416809 11.6968 0.610323 11.8903L8.94366 20.2236Z"
                                fill="#1F4E20" />
                        </svg>
                    </a>
                    <span class="text-black text-[22px] font-semibold">Lahan 5</span>
                </div>
            </div>

            <!-- Info Luas & Tanaman -->
            <div class="flex items-start justify-between mb-2">
                <!-- Kiri: Info Lahan -->
                <div class="flex flex-col">
                    <p class="text-black text-sm font-medium">
                        Luas: <span class="font-normal">2 Ha</span>
                    </p>
                    <p class="text-black text-sm font-medium">
                        Tanaman: <span class="font-normal">Kentang</span>
                    </p>
                </div>

                <!--  Edit & Delete Icons -->
                <div class="flex items-center gap-2">
                    <button class="flex items-center justify-center" onclick="openEditModal()">
                        <!-- Edit Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53"
                            fill="none">
                            <circle cx="26.5" cy="26.5" r="22.5" fill="#1F4E20" />
                            <path
                                d="M17 38.25C16.6458 38.25 16.3492 38.13 16.11 37.89C15.8708 37.65 15.7508 37.3533 15.75 37V33.9688C15.75 33.6354 15.8125 33.3175 15.9375 33.015C16.0625 32.7125 16.2396 32.4471 16.4688 32.2188L32.25 16.4688C32.5 16.2396 32.7763 16.0625 33.0788 15.9375C33.3813 15.8125 33.6987 15.75 34.0312 15.75C34.3638 15.75 34.6867 15.8125 35 15.9375C35.3133 16.0625 35.5842 16.25 35.8125 16.5L37.5312 18.25C37.7812 18.4792 37.9633 18.75 38.0775 19.0625C38.1917 19.375 38.2492 19.6875 38.25 20C38.25 20.3333 38.1925 20.6513 38.0775 20.9538C37.9625 21.2562 37.7804 21.5321 37.5312 21.7812L21.7812 37.5312C21.5521 37.7604 21.2862 37.9375 20.9837 38.0625C20.6812 38.1875 20.3638 38.25 20.0312 38.25H17ZM34 21.75L35.75 20L34 18.25L32.25 20L34 21.75Z"
                                fill="white" />
                        </svg>
                    </button>

                    <button class="flex items-center justify-center" onclick="openDeleteModal()">
                        <!-- Delete Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="53" viewBox="0 0 50 53"
                            fill="none">
                            <circle cx="26.5" cy="26.5" r="22.5" fill="#1F4E20" />
                            <path
                                d="M35.75 17H31.375L30.125 15.75H23.875L22.625 17H18.25V19.5H35.75M19.5 35.75C19.5 36.413 19.7634 37.0489 20.2322 37.5178C20.7011 37.9866 21.337 38.25 22 38.25H32C32.663 38.25 33.2989 37.9866 33.7678 37.5178C34.2366 37.0489 34.5 36.413 34.5 35.75V20.75H19.5V35.75Z"
                                fill="white" />
                        </svg>
                    </button>
                </div>
            </div>


            <!-- Tambah Sensor Button -->
            <button onclick="openSensorModal()" id="btn-tambah-sensor"
                class="w-full h-14 bg-hijau-tua text-white rounded-lg px-4 py-3 text-sm font-medium flex items-center justify-center gap-2 hover:bg-green-800 transition-colors duration-200 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <path
                        d="M12.5 0C5.59625 0 0 5.59625 0 12.5C0 19.4037 5.59625 25 12.5 25C19.4037 25 25 19.4037 25 12.5C25 5.59625 19.4037 0 12.5 0ZM18.75 13.75H13.75V18.75H11.25V13.75H6.25V11.25H11.25V6.25H13.75V11.25H18.75V13.75Z"
                        fill="white" />
                </svg>
                Tambah sensor
            </button>

            <!-- Card Penyiraman Otomatis -->
            <div class="bg-white rounded-2xl p-4 shadow-sm border border-gray-100 mb-2">
                <!-- Header Card -->
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <!-- Icon Penyiraman -->
                        <div class="w-8 h-8 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                fill="none">
                                <g clip-path="url(#clip0_304_16271)">
                                    <path
                                        d="M13.9286 0C13.6607 0 13.3929 0.252101 12.8571 0.756303V2.77311H9.60757C8.57143 1.76471 8.57143 1.76471 7.5 2.77311C6.42857 3.78151 6.42857 3.78151 7.5 4.78992C8.57143 5.79832 8.57143 5.79832 9.56049 4.78992H12.8571V6.80672H15V4.78992H18.2614C19.3196 5.79832 19.3194 5.79832 20.3908 4.78992C21.4623 3.78151 21.4623 3.78151 20.3908 2.77311C19.3194 1.76471 19.3196 1.76471 18.2143 2.77311H15V0.756303C14.4643 0.252101 14.1964 0 13.9286 0ZM0 4.91597V21.0504H2.14286V4.91597H0ZM4.28571 7.94118L3.21429 6.93277V19.0336L4.28571 18.0252V7.94118ZM13.9286 7.81513C11.7857 7.81513 10.6908 7.81513 10.6319 9.83193H5.35714V15.8824H9.68471C10.7143 16.8908 11.7857 17.8992 13.9286 17.8992C16.0714 17.8992 17.1429 16.8908 18.2143 15.8824C22.5 15.8824 22.5 15.8824 22.5 17.8992V19.916H28.9286V15.8824C28.9286 11.8487 26.7857 9.83193 22.5 9.83193H17.1429C17.1663 7.81513 16.0714 7.81513 13.9286 7.81513ZM21.4286 20.9244V21.9328H30V20.9244H21.4286ZM25.7143 22.9412C25.7143 22.9412 23.1145 26.1971 23.5714 28.1092C23.854 29.2916 24.4266 30 25.7143 30C27.002 30 27.5746 29.2916 27.8571 28.1092C28.314 26.1971 25.7143 22.9412 25.7143 22.9412Z"
                                        fill="#9E9E9E" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_304_16271">
                                        <rect width="30" height="30" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <span class="text-black text-base font-medium">Penyiraman Otomatis</span>
                    </div>
                    <!-- Toggle Switch -->
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" checked>
                        <div
                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#1F4E20]">
                        </div>
                    </label>
                </div>

                <!-- Jadwal -->
                <div class="flex items-center justify-between mb-3">
                    <span class="text-sm font-medium text-gray-700">Jadwal</span>
                    <!-- Button Filter -->
                    <button onclick="openFilterModal()" class="p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                            fill="none">
                            <circle cx="17" cy="17" r="17" transform="matrix(-1 0 0 1 41 8)" fill="#AAAAAA"
                                fill-opacity="0.25" />
                            <path
                                d="M23 18C22.3793 17.9997 21.7739 18.1919 21.267 18.5501C20.7602 18.9083 20.3769 19.4148 20.17 20H17V22H20.17C20.3766 22.5855 20.7597 23.0926 21.2666 23.4512C21.7735 23.8099 22.3791 24.0025 23 24.0025C23.6209 24.0025 24.2265 23.8099 24.7334 23.4512C25.2403 23.0926 25.6234 22.5855 25.83 22H33V20H25.83C25.6231 19.4148 25.2398 18.9083 24.733 18.5501C24.2261 18.1919 23.6207 17.9997 23 18ZM22 21C22 20.7348 22.1054 20.4804 22.2929 20.2929C22.4804 20.1054 22.7348 20 23 20C23.2652 20 23.5196 20.1054 23.7071 20.2929C23.8946 20.4804 24 20.7348 24 21C24 21.2652 23.8946 21.5196 23.7071 21.7071C23.5196 21.8946 23.2652 22 23 22C22.7348 22 22.4804 21.8946 22.2929 21.7071C22.1054 21.5196 22 21.2652 22 21ZM27 26C26.3793 25.9997 25.7739 26.1919 25.267 26.5501C24.7602 26.9083 24.3769 27.4148 24.17 28H17V30H24.17C24.3766 30.5855 24.7597 31.0926 25.2666 31.4512C25.7735 31.8099 26.3791 32.0025 27 32.0025C27.6209 32.0025 28.2265 31.8099 28.7334 31.4512C29.2403 31.0926 29.6234 30.5855 29.83 30H33V28H29.83C29.6231 27.4148 29.2398 26.9083 28.733 26.5501C28.2261 26.1919 27.6207 25.9997 27 26ZM26 29C26 28.7348 26.1054 28.4804 26.2929 28.2929C26.4804 28.1054 26.7348 28 27 28C27.2652 28 27.5196 28.1054 27.7071 28.2929C27.8946 28.4804 28 28.7348 28 29C28 29.2652 27.8946 29.5196 27.7071 29.7071C27.5196 29.8946 27.2652 30 27 30C26.7348 30 26.4804 29.8946 26.2929 29.7071C26.1054 29.5196 26 29.2652 26 29Z"
                                fill="black" />
                        </svg>
                    </button>
                </div>

                <!-- Time Picker -->
                <div class="flex items-center justify-between gap-4">
                    <!-- Dari -->
                    <div class="flex-1">
                        <label class="text-xs text-gray-500 mb-1 block">Dari</label>
                        <div class="border border-gray-300 rounded-lg px-4 py-3 text-sm font-medium text-black bg-white">
                            07:30 AM
                        </div>
                    </div>

                    <!-- Separator -->
                    <div class="flex items-center justify-center pt-5">
                        <div class="w-8 h-0.5 bg-gray-300"></div>
                    </div>

                    <!-- Sampai -->
                    <div class="flex-1">
                        <label class="text-xs text-gray-500 mb-1 block">Sampai</label>
                        <div class="border border-gray-300 rounded-lg px-4 py-3 text-sm font-medium text-black bg-white">
                            05:45 PM
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Pemupukan Otomatis -->
            <div class="bg-white rounded-2xl p-4 shadow-sm border border-gray-100 mb-3">
                <!-- Header Card -->
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <!-- Icon Pemupukan -->
                        <div class="w-8 h-8 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                fill="none">
                                <path
                                    d="M14.1271 1.28356C8.87129 1.27477 3.99102 1.42829 4.05254 1.76813L5.34629 3.88571C8.82441 3.58688 12.1408 3.47848 15.4631 3.50075C18.5803 3.52125 21.7033 3.65719 24.9611 3.85758L26.7893 1.90758C26.5256 1.51266 20.0861 1.29352 14.1271 1.28356ZM14.3498 4.55368C11.4729 4.56071 8.59004 4.67028 5.57891 4.92399C4.30215 12.1697 3.59492 21.0115 5.25664 26.4666L3.70801 28.283C11.215 28.8455 18.8557 29.0271 26.1271 28.6521L24.3752 26.5662C25.5061 20.3435 25.1545 11.8474 24.3869 4.87946C21.3869 4.70016 18.51 4.58063 15.6389 4.55778L23.5021 11.7771H19.3244C19.5471 13.1306 20.5197 14.9588 21.5451 16.6521C22.1252 17.6131 22.717 18.5447 23.1682 19.365C23.6193 20.1853 23.965 20.8709 23.965 21.5623C23.965 23.2029 22.8576 24.5505 21.2287 25.4236C19.5998 26.3025 17.4143 26.7771 15.0002 26.7771C12.5861 26.7771 10.4006 26.3025 8.77168 25.4236C7.14277 24.5505 6.03535 23.2029 6.03535 21.5623C6.03535 20.8591 6.39863 20.1736 6.87324 19.3416C7.34785 18.5095 7.96309 17.572 8.56074 16.5994C9.61543 14.8943 10.5764 13.0545 10.7111 11.7771H6.09395L14.3498 4.55368ZM14.9943 5.39567L8.90645 10.7224H11.7365L11.7775 11.2029C11.9357 13.072 10.6701 15.1873 9.45723 17.156C8.84785 18.1404 8.23848 19.072 7.79316 19.8631C7.34199 20.6482 7.09004 21.3279 7.09004 21.5623C7.09004 22.4177 7.5002 23.1736 8.26777 23.824C11.4436 23.4256 13.0725 23.2029 14.5021 23.156C14.5373 22.658 14.6018 22.1599 14.6838 21.6795C12.5393 21.8142 10.5646 21.24 8.61934 20.5486C9.49238 18.8611 11.0979 17.6834 12.5451 17.6892C12.8146 17.6892 13.0783 17.7244 13.3303 17.8123C13.9865 18.0232 14.5783 19.2009 14.9709 20.1912C15.0998 19.5759 15.2229 19.0486 15.2756 18.6619V18.656C15.3283 18.2927 15.1818 17.2498 14.9943 16.3884C14.8596 15.7673 14.7189 15.2224 14.6486 14.9646C14.2795 14.9646 13.9514 14.8943 13.7346 14.6716C12.2463 13.1248 13.2131 10.2654 14.4904 8.67165C15.3986 10.1834 16.5822 11.8123 17.7717 12.9373C17.5139 13.8045 17.0451 14.5017 16.1369 14.8123C16.0139 14.824 15.8615 14.8416 15.7092 14.865C15.7912 15.1697 15.9084 15.6267 16.0256 16.1599C16.1018 16.4939 16.1721 16.8396 16.2307 17.1853C16.5412 16.8982 16.8986 16.6345 17.1916 16.6228H17.2561C18.8967 16.7752 20.7541 18.3572 21.2229 20.6658C19.6115 19.9275 17.7658 20.3552 16.3068 18.8963C16.1428 19.9861 15.6857 21.6267 15.5627 23.1619C16.9748 23.2088 18.6037 23.4314 21.7326 23.824C22.5002 23.1736 22.9104 22.4177 22.9104 21.5623C22.9104 21.3162 22.6701 20.6482 22.2424 19.8748C21.8146 19.0955 21.2346 18.1756 20.6428 17.197C19.465 15.2517 18.2229 13.1365 18.2229 11.2498V10.7224H20.7951L14.9943 5.39567ZM15.0002 24.1931C13.6936 24.1931 12.3107 24.3689 9.68574 24.7029C11.0744 25.3416 12.9377 25.7224 15.0002 25.7224C17.0627 25.7224 18.926 25.3416 20.3146 24.7029C17.6896 24.3689 16.3068 24.1931 15.0002 24.1931Z"
                                    fill="#AC7F5E" />
                            </svg>
                        </div>
                        <span class="text-black text-base font-medium">Pemupukan Otomatis</span>
                    </div>
                    <!-- Toggle Switch (Off) -->
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <div
                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#1F4E20]">
                        </div>
                    </label>
                </div>

                <!-- Jadwal -->
                <div class="flex items-center justify-between mb-3">
                    <span class="text-sm font-medium text-gray-700">Jadwal</span>
                    <button onclick="openFilterModal()" class="p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                            fill="none">
                            <circle cx="17" cy="17" r="17" transform="matrix(-1 0 0 1 41 8)"
                                fill="#AAAAAA" fill-opacity="0.25" />
                            <path
                                d="M23 18C22.3793 17.9997 21.7739 18.1919 21.267 18.5501C20.7602 18.9083 20.3769 19.4148 20.17 20H17V22H20.17C20.3766 22.5855 20.7597 23.0926 21.2666 23.4512C21.7735 23.8099 22.3791 24.0025 23 24.0025C23.6209 24.0025 24.2265 23.8099 24.7334 23.4512C25.2403 23.0926 25.6234 22.5855 25.83 22H33V20H25.83C25.6231 19.4148 25.2398 18.9083 24.733 18.5501C24.2261 18.1919 23.6207 17.9997 23 18ZM22 21C22 20.7348 22.1054 20.4804 22.2929 20.2929C22.4804 20.1054 22.7348 20 23 20C23.2652 20 23.5196 20.1054 23.7071 20.2929C23.8946 20.4804 24 20.7348 24 21C24 21.2652 23.8946 21.5196 23.7071 21.7071C23.5196 21.8946 23.2652 22 23 22C22.7348 22 22.4804 21.8946 22.2929 21.7071C22.1054 21.5196 22 21.2652 22 21ZM27 26C26.3793 25.9997 25.7739 26.1919 25.267 26.5501C24.7602 26.9083 24.3769 27.4148 24.17 28H17V30H24.17C24.3766 30.5855 24.7597 31.0926 25.2666 31.4512C25.7735 31.8099 26.3791 32.0025 27 32.0025C27.6209 32.0025 28.2265 31.8099 28.7334 31.4512C29.2403 31.0926 29.6234 30.5855 29.83 30H33V28H29.83C29.6231 27.4148 29.2398 26.9083 28.733 26.5501C28.2261 26.1919 27.6207 25.9997 27 26ZM26 29C26 28.7348 26.1054 28.4804 26.2929 28.2929C26.4804 28.1054 26.7348 28 27 28C27.2652 28 27.5196 28.1054 27.7071 28.2929C27.8946 28.4804 28 28.7348 28 29C28 29.2652 27.8946 29.5196 27.7071 29.7071C27.5196 29.8946 27.2652 30 27 30C26.7348 30 26.4804 29.8946 26.2929 29.7071C26.1054 29.5196 26 29.2652 26 29Z"
                                fill="black" />
                        </svg>
                    </button>
                </div>

                <!-- Time Picker -->
                <div class="flex items-center justify-between gap-4">
                    <!-- Dari -->
                    <div class="flex-1">
                        <label class="text-xs text-gray-500 mb-1 block">Dari</label>
                        <div class="border border-gray-300 rounded-lg px-4 py-3 text-sm font-medium text-black bg-white">
                            07:30 AM
                        </div>
                    </div>

                    <!-- Separator -->
                    <div class="flex items-center justify-center pt-5">
                        <div class="w-8 h-0.5 bg-gray-300"></div>
                    </div>

                    <!-- Sampai -->
                    <div class="flex-1">
                        <label class="text-xs text-gray-500 mb-1 block">Sampai</label>
                        <div class="border border-gray-300 rounded-lg px-4 py-3 text-sm font-medium text-black bg-white">
                            03:30 PM
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabs -->
            <div class="w-full h-[39px]">
                <div class="flex w-full">
                    <button id="tab-harian"
                        class="tab-btn flex-1 flex items-center justify-center bg-hijau-tua border border-hijau-tua">
                        <span class="text-[14px] font-semibold text-white text-center">Harian</span>
                    </button>
                    <button id="tab-mingguan"
                        class="tab-btn flex-1 flex items-center justify-center bg-white border border-hijau-tua">
                        <span class="text-[14px] font-semibold text-hijau-tua text-center">Mingguan</span>
                    </button>
                    <button id="tab-bulanan"
                        class="tab-btn flex-1 flex items-center justify-center bg-white border border-hijau-tua">
                        <span class="text-[14px] font-semibold text-hijau-tua text-center">Bulanan</span>
                    </button>
                </div>
            </div>

            <!-- ====== HARIAN ====== -->
            <div id="content-harian">
                <!-- Card Grafik NPK harian -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px]font-semibold text-hijau-tua mb-3">
                        Grafik NPK (Natrium, Phospor, Kalium)
                    </h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/npkharian.png') }}"
                            data-alt="{{ asset('asset/img/npkharian_2.png') }}" alt="npk"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                    <div class="mt-3 text-[12px] text-hijau-tua pl-6">
                        <p class="font-semibold mb-1">Zona Ideal untuk:</p>
                        <ul class="list-disc list-inside space-y-0.5">
                            <li>Nitrogen (20-50 ppm)</li>
                            <li>Phospor (15-30 ppm)</li>
                            <li>Kalium (30-60 ppm)</li>
                        </ul>
                    </div>
                </div>

                <!-- Card Suhu Tanah Harian -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik Suhu Tanah</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/suhutanahharian.png') }}"
                            data-alt="{{ asset('asset/img/suhutanahharian_2.png') }}" alt="suhu"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                    <div class="mt-3 text-[12px] text-hijau-tua pl-6">
                        <p class="font-semibold mb-1">Rata-rata suhu tanah hari ini:</p>
                        <p class="font-bold mb-1 text-[22px]">23°C</p>
                    </div>
                </div>

                <!-- Card pH Tanah Harian -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik pH Tanah</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/phtanah.png') }}" data-alt="{{ asset('asset/img/phtanah_2.png') }}"
                            alt="ph"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                </div>

                <!-- Card Kelembaban Tanah Harian -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik Kelembapan Tanah</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/kelembabantanahharian.png') }}"
                            data-alt="{{ asset('asset/img/kelembabantanahharian_2.png') }}" alt="suhu"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                    <div class="mt-3 text-[12px] text-hijau-tua pl-6">
                        <p class="font-semibold mb-1">Rata-rata kelembapan tanah hari ini:</p>
                        <p class="font-bold mb-1 text-[22px]">24%</p>
                    </div>
                </div>

                <!-- Card Suhu Lingkungan Harian -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik Suhu Lingkungan</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/suhulingkunganharian.png') }}"
                            data-alt="{{ asset('asset/img/suhulingkunganharian_2.png') }}" alt="suhu"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                    <div class="mt-3 text-[12px] text-hijau-tua pl-6">
                        <p class="font-semibold mb-1">Rata-rata suhu lingkungan hari ini:</p>
                        <p class="font-bold mb-1 text-[22px]">25°C</p>
                    </div>
                </div>

                <!-- Card kelembapan Lingkungan Harian -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik Kelembapan Lingkungan</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/kelembabanlinkunganharian.png') }}"
                            data-alt="{{ asset('asset/img/kelembabanlingkunganharian2.png') }}" alt="suhu"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                    <div class="mt-3 text-[12px] text-hijau-tua pl-6">
                        <p class="font-semibold mb-1">Rata-rata kelembapan lingkungan hari ini:</p>
                        <p class="font-bold mb-1 text-[22px]">25°C</p>
                    </div>
                </div>
            </div>

            <!-- ====== MINGGUAN ====== -->
            <div id="content-mingguan" class="hidden">
                <!-- Card Grafik NPK mingguan -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3">
                        Grafik NPK (Natrium, Phospor, Kalium)
                    </h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/npkmingguan.png') }}"
                            data-alt="{{ asset('asset/img/npkmingguan2.png') }}" alt="npk"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                    <div class="mt-3 text-[12px] text-hijau-tua pl-6">
                        <p class="font-semibold mb-1">Zona Ideal untuk:</p>
                        <ul class="list-disc list-inside space-y-0.5">
                            <li>Nitrogen (20-50 ppm)</li>
                            <li>Phospor (15-30 ppm)</li>
                            <li>Kalium (30-60 ppm)</li>
                        </ul>
                    </div>
                </div>

                <!-- Card Suhu Tanah Mingguan -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik Suhu Tanah</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/suhutanahmingguan.png') }}"
                            data-alt="{{ asset('asset/img/suhutanahmingguan2.png') }}" alt="suhu"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                    <div class="mt-3 text-[12px] text-hijau-tua pl-6">
                        <p class="font-semibold mb-1">Rata-rata suhu tanah minggu ini:</p>
                        <p class="font-bold mb-1 text-[22px]">21°C</p>
                    </div>
                </div>

                <!-- Card pH Tanah Mingguan -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik pH Tanah</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/phtanahmingguan.png') }}"
                            data-alt="{{ asset('asset/img/phtanahmingguan2.png') }}" alt="ph"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                </div>

                <!-- Card Kelembaban Tanah mingguan -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik Kelembapan Tanah</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/kelembapantanahmingguan.png') }}"
                            data-alt="{{ asset('asset/img/kelembapantanahmingguan2.png') }}" alt="suhu"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                    <div class="mt-3 text-[12px] text-hijau-tua pl-6">
                        <p class="font-semibold mb-1">Rata-rata kelembapan tanah minggu ini:</p>
                        <p class="font-bold mb-1 text-[22px]">22%</p>
                    </div>
                </div>

                <!-- Card Suhu Lingkungan minggu -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik Suhu Lingkungan</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/suhulingkunganmingguan.png') }}"
                            data-alt="{{ asset('asset/img/suhulingkunganmingguan2.png') }}" alt="suhu"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                    <div class="mt-3 text-[12px] text-hijau-tua pl-6">
                        <p class="font-semibold mb-1">Rata-rata suhu lingkungan minggu ini:</p>
                        <p class="font-bold mb-1 text-[22px]">25°C</p>
                    </div>
                </div>

                <!-- Card kelembapan Lingkungan mingguan -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik Kelembapan Lingkungan</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/kelembapanlingkunganmingguan.png') }}"
                            data-alt="{{ asset('asset/img/kelembapanlingkunganmingguan2.png') }}" alt="suhu"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                    <div class="mt-3 text-[12px] text-hijau-tua pl-6">
                        <p class="font-semibold mb-1">Rata-rata kelembapan lingkungan minggu ini:</p>
                        <p class="font-bold mb-1 text-[22px]">25°C</p>
                    </div>
                </div>
            </div>

            <!-- ====== BULANAN ====== -->
            <div id="content-bulanan" class="hidden">
                <!-- Card Grafik NPK bulanan -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3">
                        Grafik NPK (Natrium, Phospor, Kalium)
                    </h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/npkbulanan.png') }}"
                            data-alt="{{ asset('asset/img/npkbulanan2.png') }}" alt="npk"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                    <div class="mt-3 text-[12px] text-hijau-tua pl-6">
                        <p class="font-semibold mb-1">Zona Ideal untuk:</p>
                        <ul class="list-disc list-inside space-y-0.5">
                            <li>Nitrogen (20-50 ppm)</li>
                            <li>Phospor (15-30 ppm)</li>
                            <li>Kalium (30-60 ppm)</li>
                        </ul>
                    </div>
                </div>

                <!-- Card Suhu Tanah Bulanan -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik Suhu Tanah</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/suhutanahbulanan.png') }}"
                            data-alt="{{ asset('asset/img/suhutanahbulanan2.png') }}" alt="suhu"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                    <div class="mt-3 text-[12px] text-hijau-tua pl-6">
                        <p class="font-semibold mb-1">Rata-rata suhu tanah bulan ini:</p>
                        <p class="font-bold mb-1 text-[22px]">21°C</p>
                    </div>
                </div>

                <!-- Card pH Tanah Bulanan -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik pH Tanah</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/phtanahbulanan.png') }}"
                            data-alt="{{ asset('asset/img/phtanahbulanan2.png') }}" alt="ph"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                </div>

                <!-- Card Kelembaban Tanah bulanan -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik Kelembapan Tanah</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/kelembapantanahbulanan.png') }}"
                            data-alt="{{ asset('asset/img/kelembapantanahbulanan2.png') }}" alt="suhu"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                    <div class="mt-3 text-[12px] text-hijau-tua pl-6">
                        <p class="font-semibold mb-1">Rata-rata kelembapan tanah bulan ini:</p>
                        <p class="font-bold mb-1 text-[22px]">22%</p>
                    </div>
                </div>

                <!-- Card Suhu Lingkungan bulanan -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik Suhu Lingkungan</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/suhulingkunganbulanan.png') }}"
                            data-alt="{{ asset('asset/img/suhulingkunganbulanan2.png') }}" alt="suhu"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                    <div class="mt-3 text-[12px] text-hijau-tua pl-6">
                        <p class="font-semibold mb-1">Rata-rata suhu lingkungan bulan ini:</p>
                        <p class="font-bold mb-1 text-[22px]">25°C</p>
                    </div>
                </div>

                <!-- Card kelembapan Lingkungan bulanan -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik Kelembapan Lingkungan</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/kelembapanlingkunganbulanan.png') }}"
                            data-alt="{{ asset('asset/img/kelembapanlingkunganbulanan2.png') }}" alt="suhu"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                    <div class="mt-3 text-[12px] text-hijau-tua pl-6">
                        <p class="font-semibold mb-1">Rata-rata kelembapan lingkungan bulan ini:</p>
                        <p class="font-bold mb-1 text-[22px]">25°C</p>
                    </div>
                </div>
            </div>
            <!-- Modal Overlay -->
            <div id="filterModal" class="hidden fixed inset-0 z-50">
                <!-- Modal Content - Positioned exactly like in design -->
                <div class="bg-white min-w-[402px] min-h-[307px] relative overflow-x-hidden rounded-2xl shadow-2xl"
                    style="position: absolute; top: 320px; left: 50%; transform: translateX(-50%);">

                    <!-- Header -->
                    <div class="flex items-center gap-4 absolute top-[35px] left-[24px] w-[356px]">
                        <button onclick="closeFilterModal()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="23" viewBox="0 0 15 23"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M12 20l-9-9 9-9" />
                            </svg>
                        </button>
                        <span class="font-bold text-[24px] text-black">Buat Jadwal Baru</span>
                    </div>

                    <!-- Atur Waktu -->
                    <div class="absolute top-[101px] left-[24px] w-[356px] h-[77px]">
                        <span class="font-medium text-[14px] text-black">Atur Waktu</span>

                        <!-- Input Dari -->
                        <div class="absolute top-[26px] left-0 w-[122px] h-[51px]">
                            <span class="absolute top-0 left-0 text-[10px] text-black">Dari</span>
                            <div
                                class="absolute top-[19px] left-0 w-[122px] h-[32px] border border-gray-300 rounded-[5px] flex items-center justify-between px-3">
                                <input type="text" value="08 : 30"
                                    class="font-medium text-[14px] text-black w-[50px] outline-none bg-transparent">
                                <div class="relative">
                                    <div class="flex items-center gap-1 cursor-pointer"
                                        onclick="toggleDropdown('dropdown1')">
                                        <span class="text-[12px] text-black" id="selected1">AM</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6"
                                            viewBox="0 0 8 6" fill="currentColor">
                                            <path d="M4 6L0 0h8z" />
                                        </svg>
                                    </div>
                                    <div id="dropdown2"
                                        class="hidden absolute top-6 right-0 bg-white border border-green-800 text-green-800 rounded-md shadow-lg overflow-hidden z-20 min-w-[50px]">
                                        <div class="py-1 px-3 cursor-pointer hover:bg-green-50 text-[12px] border-b border-green-800"
                                            onclick="selectAmPm('dropdown2', 'selected2', 'AM')">
                                            AM
                                        </div>
                                        <div class="py-1 px-3 cursor-pointer hover:bg-green-50 text-[12px]"
                                            onclick="selectAmPm('dropdown2', 'selected2', 'PM')">
                                            PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Separator -->
                        <div class="absolute top-[45px] left-[145px] text-gray-300 text-[20px]">—</div>

                        <!-- Input Sampai -->
                        <div class="absolute top-[26px] left-[234px] w-[122px] h-[51px]">
                            <span class="absolute top-0 left-0 text-[10px] text-black">Sampai</span>
                            <div
                                class="absolute top-[19px] left-0 w-[122px] h-[32px] border border-gray-300 rounded-[5px] flex items-center justify-between px-3">
                                <input type="text" value="05 : 30"
                                    class="font-medium text-[14px] text-black w-[50px] outline-none bg-transparent">
                                <div class="relative">
                                    <div class="flex items-center gap-1 cursor-pointer"
                                        onclick="toggleDropdown('dropdown2')">
                                        <span class="text-[12px] text-black" id="selected2">PM</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6"
                                            viewBox="0 0 8 6" fill="currentColor">
                                            <path d="M4 6L0 0h8z" />
                                        </svg>
                                    </div>
                                    <div id="dropdown2"
                                        class="hidden absolute top-6 right-0 bg-white border border-green-800 text-green-800 rounded-md shadow-lg overflow-hidden z-20 min-w-[50px]">
                                        <div class="py-1 px-3 cursor-pointer hover:bg-green-50 text-[12px] border-b border-green-800"
                                            onclick="selectAmPm('dropdown2', 'selected2', 'AM')">
                                            AM
                                        </div>
                                        <div class="py-1 px-3 cursor-pointer hover:bg-green-50 text-[12px]"
                                            onclick="selectAmPm('dropdown2', 'selected2', 'PM')">
                                            PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Atur Tanggal -->
                    <div class="flex items-center justify-between absolute top-[195px] left-[24px] w-[356px]">
                        <span class="font-medium text-[14px] text-black">Atur Tanggal</span>
                        <div class="flex items-center gap-1 cursor-pointer" onclick="openWeekdayModal()">
                            <span class="text-[10px] text-black" id="selectedSchedule">Weekday</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6"
                                fill="currentColor">
                                <path d="M4 6L0 0h8z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Tombol Simpan & Batal -->
                    <div class="flex items-center gap-[18px] absolute top-[238px] left-[215px]">
                        <button onclick="closeFilterModal()"
                            class="flex items-center justify-center h-[34px] px-[10px] rounded-[10px] bg-gray-200 hover:bg-gray-300 transition-colors">
                            <span class="font-semibold text-[16px] text-green-800">Batal</span>
                        </button>
                        <button
                            class="flex items-center justify-center h-[34px] px-[10px] rounded-[10px] bg-green-800 hover:bg-green-900 transition-colors">
                            <span class="font-semibold text-[16px] text-white">Simpan</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Weekday Selection Modal -->
            <div id="weekdayModal" class="hidden fixed inset-0 z-50">
                <div class="relative w-[340px] bg-white rounded-[30px] shadow-2xl p-6"
                    style="position: absolute; top: 320px; left: 50%; transform: translateX(-50%);">

                    <!-- Icon Back (atas kiri) -->
                    <button onclick="backToMainModal()" class="mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M15 18l-6-6 6-6" />
                        </svg>
                    </button>

                    <!-- Container Options -->
                    <div class="space-y-4">

                        <!-- Weekday -->
                        <button id="weekdayBtn" onclick="toggleScheduleButton('weekday')"
                            class="relative w-full h-14 bg-green-400 border-2 border-gray-800 rounded-2xl hover:bg-green-500 transition-colors flex items-center px-4">
                            <svg id="weekdayCheck" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                stroke-linecap="round" stroke-linejoin="round" class="mr-3">
                                <path d="M20 6L9 17l-5-5" />
                            </svg>
                            <span class="font-semibold text-base text-black">Weekday</span>
                        </button>

                        <!-- Weekend -->
                        <button id="weekendBtn" onclick="toggleScheduleButton('weekend')"
                            class="relative w-full h-14 bg-white border-2 border-gray-800 rounded-2xl hover:bg-gray-50 transition-colors flex items-center px-4">
                            <svg id="weekendCheck" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                stroke-linecap="round" stroke-linejoin="round" class="mr-3 invisible">
                                <path d="M20 6L9 17l-5-5" />
                            </svg>
                            <span class="font-semibold text-base text-black">Weekend</span>
                        </button>

                        <!-- Custom -->
                        <button onclick="selectScheduleType('Custom')"
                            class="relative w-full h-14 bg-white border-2 border-gray-800 rounded-2xl hover:bg-gray-50 transition-colors flex items-center justify-between px-4">
                            <span class="font-semibold text-base text-black ml-8">Custom</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M9 18l6-6-6-6" />
                            </svg>
                        </button>
                    </div>

                </div>
            </div>
            <!-- Custom Date Modal -->
            <div id="customDateModal"
                class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
                <div class="relative w-[337px] bg-white rounded-2xl p-6">

                    <!-- Judul -->
                    <p class="text-[14px] font-semibold text-black mb-4">
                        Atur tanggal
                    </p>

                    <!-- Label Kolom -->
                    <div class="flex justify-between mb-2 px-3">
                        <div class="text-[12px] text-gray-500 w-[70px] text-center">Tanggal</div>
                        <div class="text-[12px] text-gray-500 w-[70px] text-center">Bulan</div>
                        <div class="text-[12px] text-gray-500 w-[70px] text-center">Tahun</div>
                    </div>

                    <!-- Frame utama dengan scroll -->
                    <div
                        class="relative h-[47px] flex items-center rounded-2xl border border-black bg-white overflow-hidden mb-6">

                        <!-- Scroll tanggal (1-31) -->
                        <div class="flex-1 h-full flex items-center justify-center relative">
                            <div id="dateScroll" class="h-[23px] w-[30px] overflow-y-scroll no-scrollbar scroll-smooth">
                                <div class="flex flex-col items-center gap-[6px] py-[80px]">
                                    @foreach (range(1, 31) as $day)
                                        <div class="text-[16px] font-semibold text-black">
                                            {{ str_pad($day, 2, '0', STR_PAD_LEFT) }}</div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="absolute top-[10px] right-0 w-[3px] h-[27px] bg-black rounded-full rotate-[30deg]">
                            </div>
                        </div>

                        <!-- Scroll bulan (1-12) -->
                        <div class="flex-1 h-full flex items-center justify-center relative">
                            <div id="monthScroll" class="h-[23px] w-[30px] overflow-y-scroll no-scrollbar scroll-smooth">
                                <div class="flex flex-col items-center gap-[6px] py-[80px]">
                                    @foreach (range(1, 12) as $month)
                                        <div class="text-[16px] font-semibold text-black">
                                            {{ str_pad($month, 2, '0', STR_PAD_LEFT) }}</div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="absolute top-[10px] right-0 w-[3px] h-[27px] bg-black rounded-full rotate-[30deg]">
                            </div>
                        </div>

                        <!-- Scroll tahun (2024-2050) -->
                        <div class="flex-1 h-full flex items-center justify-center">
                            <div id="yearScroll" class="h-[23px] w-[50px] overflow-y-scroll no-scrollbar scroll-smooth">
                                <div class="flex flex-col items-center gap-[6px] py-[80px]">
                                    @foreach (range(2024, 2050) as $year)
                                        <div class="text-[16px] font-semibold text-black">{{ $year }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol -->
                    <div class="flex justify-end gap-3">
                        <button onclick="closeCustomDateModal()"
                            class="bg-gray-300 text-black text-[14px] font-semibold px-4 py-1 rounded-lg cursor-pointer hover:bg-gray-400 transition-colors">
                            Batal
                        </button>
                        <button onclick="saveCustomDate()"
                            class="bg-green-800 text-white text-[14px] font-semibold px-4 py-1 rounded-lg cursor-pointer hover:bg-green-900 transition-colors">
                            Simpan
                        </button>
                    </div>
                </div>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="32" viewBox="0 0 18 23"
                                fill="none">
                                <path
                                    d="M17.5 1.25H13.125L11.875 0H5.625L4.375 1.25H0V3.75H17.5M1.25 20C1.25 20.663 1.51339 21.2989 1.98223 21.7678C2.45107 22.2366 3.08696 22.5 3.75 22.5H13.75C14.413 22.5 15.0489 22.2366 15.5178 21.7678C15.9866 21.2989 16.25 20.663 16.25 20V5H1.25V20Z"
                                    fill="white" />
                            </svg>
                        </div>
                    </div>

                    <!-- Text -->
                    <p class="text-center text-black text-base font-medium mb-6 leading-relaxed">
                        Apakah Anda yakin ingin<br>menghapus lahan 1?
                    </p>

                    <!-- Buttons -->
                    <div class="flex flex-col gap-3">
                        <button onclick="confirmDelete()"
                            class="w-full bg-hijau-tua text-white py-3 rounded-full font-semibold text-base hover:bg-opacity-90 transition-all">
                            Hapus
                        </button>
                        <button onclick="closeDeleteModal()"
                            class="w-full bg-transparent text-hijau-tua py-3 rounded-full font-semibold text-base hover:bg-gray-100 transition-all">
                            Batal
                        </button>
                    </div>
                </div>
            </div>


            <!-- Edit Modal  -->
            <div id="editModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
                <div
                    class="w-full max-w-[402px] min-h-[427px] border-2 border-green-400 bg-white rounded-xl flex flex-col justify-center px-6 py-8 mx-4">

                    <!-- Form -->
                    <div class="flex flex-col gap-6">

                        <!-- Nama Lahan -->
                        <div class="flex flex-col gap-1">
                            <label class="text-[14px] text-black font-medium">Nama Lahan</label>
                            <input type="text" id="editNamaLahan" value="Lahan 1"
                                class="w-full h-[55px] border-2 border-hijau-tua bg-white rounded-xl px-4 text-hijau-tua text-[14px] focus:outline-none focus:border-hijau-tua transition-colors"
                                placeholder="Masukkan nama lahan" />
                        </div>

                        <!-- Jenis Tanaman -->
                        <div class="flex flex-col gap-1">
                            <label class="text-[14px] text-black font-medium">Jenis Tanaman</label>
                            <input type="text" id="editJenisTanaman" value="Padi"
                                class="w-full h-[55px] border-2 border-hijau-tua bg-white rounded-xl px-4 text-hijau-tua text-[14px] focus:outline-none focus:border-hijau-tua transition-colors"
                                placeholder="Masukkan jenis tanaman" />
                        </div>

                        <!-- Luas Lahan -->
                        <div class="flex flex-col gap-1">
                            <label class="text-[14px] text-black font-medium">Luas Lahan</label>
                            <div class="relative">
                                <input type="number" id="editLuasLahan" value="2"
                                    class="w-full h-[55px] border-2 border-hijau-tua bg-white rounded-xl px-4 pr-12 text-hijau-tua text-[14px] focus:outline-none focus:border-hijau-tua transition-colors"
                                    placeholder="Masukkan luas lahan" step="0.1" min="0" />
                                <span
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-green-800 text-[14px] font-medium">Ha</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol -->
                    <div class="flex justify-end gap-4 mt-8">
                        <button onclick="closeEditModal()"
                            class="bg-gray-200 text-green-800 font-semibold text-[16px] px-5 py-2 rounded-lg hover:bg-gray-300 transition-colors">
                            Batal
                        </button>
                        <button onclick="saveEditData()"
                            class="bg-green-800 text-white font-semibold text-[16px] px-5 py-2 rounded-lg hover:bg-green-900 transition-colors">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
            <!-- Modal Container -->
            <div id="sensorModal" class="hidden fixed inset-0 z-[100] flex items-end justify-center">
                <!-- Overlay -->
                <div onclick="closeSensorModal()"
                    class="absolute inset-0 bg-black bg-opacity-50 transition-opacity duration-300" id="sensorOverlay">
                </div>

                <!-- Modal Content Wrapper -->
                <div id="sensorModalContent"
                    class="relative bg-white w-full max-w-[428px] rounded-t-[40px] shadow-2xl transform transition-transform duration-300 ease-out translate-y-full overflow-hidden">

                    <!-- Modal 1: QR Code Display -->
                    <div id="qrCodeModal" class="transition-all duration-300">
                        <!-- Close Button -->
                        <button onclick="closeSensorModal()"
                            class="absolute top-4 right-4 w-8 h-8 bg-hijau-tua rounded-full flex items-center justify-center hover:bg-gray-800 transition-colors z-10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M13 1L1 13M1 1l12 12" />
                            </svg>
                        </button>

                        <!-- Content Container -->
                        <div class="px-6 pt-12 pb-8">

                            <!-- Header -->
                            <div class="text-center mb-6">
                                <h2 class="text-[20px] font-bold text-black mb-1">Sambungkan Perangkat<br>Sensor</h2>
                                <p class="text-[13px] text-gray-500 mt-2">Pindai kode</p>
                            </div>

                            <!-- QR Code Container -->
                            <div class="mb-6">
                                <div class="bg-[#2D5F2E] rounded-[20px] p-4 shadow-xl">
                                    <!-- Top Green Bar -->
                                    <div class="bg-[#3D7A3E] h-8 rounded-t-[16px] mb-3"></div>

                                    <!-- QR Code Frame -->
                                    <div
                                        class="bg-gradient-to-b from-[#B8D4B8] to-[#D4E8D4] rounded-[12px] p-6 flex items-center justify-center">
                                        <!-- QR Code Image -->
                                        <div class="bg-white p-5 rounded-lg shadow-md">
                                            <img src="{{ asset('asset/img/qrcode.svg') }}" alt="QR Code"
                                                class="w-[180px] h-[180px] object-contain">
                                        </div>
                                    </div>

                                    <!-- Bottom Green Bar -->
                                    <div class="bg-[#3D7A3E] h-8 rounded-b-[16px] mt-3"></div>
                                </div>
                            </div>

                            <!-- Pindai Kode Button -->
                            <button onclick="openScannerModal()"
                                class="w-full bg-white border-[2.5px] border-[#1F4E20] rounded-xl py-3.5 mb-4 flex items-center justify-center gap-2 hover:bg-gray-50 transition-colors shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="#1F4E20" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="7" height="7" />
                                    <rect x="14" y="3" width="7" height="7" />
                                    <rect x="14" y="14" width="7" height="7" />
                                    <rect x="3" y="14" width="7" height="7" />
                                </svg>
                                <span class="text-[15px] font-semibold text-[#1F4E20]">Pindai Kode</span>
                            </button>

                            <!-- Info Text -->
                            <p class="text-[11px] text-gray-600 text-center leading-relaxed px-4">
                                Arahkan kamera Anda ke<span class="font-semibold"> kode QR</span> pada perangkat untuk
                                menghubungkan sensor ke lahan.
                            </p>

                        </div>

                        <!-- Safe Area Bottom Padding -->
                        <div class="h-6"></div>
                    </div>

                    <!-- Modal 2: Scanner Camera -->
                    <div id="scannerModal" class="hidden transition-all duration-300">
                        <!-- Close Button -->
                        <button onclick="closeSensorModal()"
                            class="absolute top-4 right-4 w-8 h-8 bg-hijau-tua rounded-full flex items-center justify-center hover:bg-gray-800 transition-colors z-10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M13 1L1 13M1 1l12 12" />
                            </svg>
                        </button>

                        <!-- Scanner Content -->
                        <div class="px-6 pt-12 pb-8">

                            <!-- Title -->
                            <div class="text-center mb-6">
                                <h2 class="text-[20px] font-bold text-black">ESP32-Lahan 13</h2>
                            </div>

                            <!-- Scanner Icon/Animation -->
                            <div class="flex justify-center mb-8">
                                <div class="relative">
                                    <!-- Wifi/Signal Icon with Animation -->
                                    <div class="w-32 h-32 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="111" height="111"
                                            viewBox="0 0 111 111" fill="none">
                                            <rect width="110.75" height="110.75" rx="55.375" fill="white" />
                                            <path
                                                d="M43.2292 67.5215C40.1069 64.4277 38.1876 60.1309 38.1876 55.3757C38.1876 50.6204 40.1069 46.3236 43.2292 43.2298L47.297 47.2975C45.2058 49.36 43.9167 52.2246 43.9167 55.3757C43.9167 58.5267 45.2058 61.3913 47.2683 63.4824L43.2292 67.5215ZM67.5209 67.5215C70.6433 64.4277 72.5626 60.1309 72.5626 55.3757C72.5626 50.6204 70.6433 46.3236 67.5209 43.2298L63.4532 47.2975C65.5444 49.36 66.8334 52.2246 66.8334 55.3757C66.8334 58.5267 65.5444 61.3913 63.4819 63.4824L67.5209 67.5215ZM55.3751 49.6465C52.224 49.6465 49.6459 52.2246 49.6459 55.3757C49.6459 58.5267 52.224 61.1048 55.3751 61.1048C58.5261 61.1048 61.1042 58.5267 61.1042 55.3757C61.1042 52.2246 58.5261 49.6465 55.3751 49.6465ZM78.2918 55.3757C78.2918 61.7064 75.7136 67.4355 71.56 71.5605L75.6277 75.6283C80.8126 70.4434 84.0209 63.2819 84.0209 55.3757C84.0209 47.4694 80.8126 40.3079 75.6277 35.123L71.56 39.1908C73.6968 41.3091 75.3921 43.8304 76.5477 46.6086C77.7032 49.3869 78.296 52.3667 78.2918 55.3757ZM39.1902 39.1908L35.1225 35.123C29.9376 40.3079 26.7292 47.4694 26.7292 55.3757C26.7292 63.2819 29.9376 70.4434 35.1225 75.6283L39.1902 71.5605C35.0365 67.4355 32.4584 61.7064 32.4584 55.3757C32.4584 49.0449 35.0365 43.3158 39.1902 39.1908Z"
                                                fill="#1F4E20" />
                                        </svg>
                                    </div>

                                    <!-- Scanning Animation Circle -->
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div
                                            class="scanning-circle w-40 h-40 border-4 border-[#1F4E20] rounded-full opacity-30">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Connect Button -->
                            <button onclick="connectToDevice()"
                                class="w-full bg-[#1F4E20] text-white rounded-xl py-4 mb-4 font-semibold text-[16px] hover:bg-[#2D5F2E] transition-colors shadow-lg">
                                Sambungkan Perangkat Sensor
                            </button>

                            <!-- Back Button -->
                            <button onclick="backToQRCode()"
                                class="w-full bg-white text-black rounded-xl py-4 font-medium text-[15px] hover:bg-gray-100 transition-colors">
                                Kembali
                            </button>

                        </div>

                        <!-- Safe Area Bottom Padding -->
                        <div class="h-6"></div>
                    </div>

                    <!-- Modal 3: Pilih Sensor -->
                    <div id="selectSensorModal" class="hidden transition-all duration-300">
                        <!-- Close Button -->
                        <button onclick="closeSensorModal()"
                            class="absolute top-4 right-4 w-8 h-8 bg-hijau-tua rounded-full flex items-center justify-center hover:bg-gray-800 transition-colors z-10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M13 1L1 13M1 1l12 12" />
                            </svg>
                        </button>

                        <!-- Content Container -->
                        <div class="px-6 pt-12 pb-6">

                            <!-- Title -->
                            <div class="mb-6">
                                <h2 class="text-[18px] font-bold text-black">Pilih sensor yang digunakan</h2>
                            </div>

                            <!-- Sensor List -->
                            <div class="space-y-3 mb-6 max-h-[400px] overflow-y-auto">

                                <!-- Sensor Item 1 -->
                                <label
                                    class="flex items-center gap-3 bg-white border-2 border-gray-200 rounded-xl p-4 cursor-pointer hover:border-[#1F4E20] transition-colors">
                                    <input type="checkbox"
                                        class="sensor-checkbox w-5 h-5 text-[#1F4E20] border-2 border-gray-300 rounded focus:ring-2 focus:ring-[#1F4E20]"
                                        checked>
                                    <span class="text-[14px] text-black font-medium flex-1">Penyiraman otomatis</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="#1F4E20" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="checkmark">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </label>

                                <!-- Sensor Item 2 -->
                                <label
                                    class="flex items-center gap-3 bg-white border-2 border-gray-200 rounded-xl p-4 cursor-pointer hover:border-[#1F4E20] transition-colors">
                                    <input type="checkbox"
                                        class="sensor-checkbox w-5 h-5 text-[#1F4E20] border-2 border-gray-300 rounded focus:ring-2 focus:ring-[#1F4E20]"
                                        checked>
                                    <span class="text-[14px] text-black font-medium flex-1">Pemupukan otomatis</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="#1F4E20" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="checkmark">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </label>

                                <!-- Sensor Item 3 -->
                                <label
                                    class="flex items-center gap-3 bg-white border-2 border-gray-200 rounded-xl p-4 cursor-pointer hover:border-[#1F4E20] transition-colors">
                                    <input type="checkbox"
                                        class="sensor-checkbox w-5 h-5 text-[#1F4E20] border-2 border-gray-300 rounded focus:ring-2 focus:ring-[#1F4E20]"
                                        checked>
                                    <span class="text-[14px] text-black font-medium flex-1">Memebaca NPK</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="#1F4E20" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="checkmark">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </label>

                                <!-- Sensor Item 4 -->
                                <label
                                    class="flex items-center gap-3 bg-white border-2 border-gray-200 rounded-xl p-4 cursor-pointer hover:border-[#1F4E20] transition-colors">
                                    <input type="checkbox"
                                        class="sensor-checkbox w-5 h-5 text-[#1F4E20] border-2 border-gray-300 rounded focus:ring-2 focus:ring-[#1F4E20]"
                                        checked>
                                    <span class="text-[14px] text-black font-medium flex-1">Membaca Suhu Tanah</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="#1F4E20" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="checkmark">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </label>

                                <!-- Sensor Item 5 -->
                                <label
                                    class="flex items-center gap-3 bg-white border-2 border-gray-200 rounded-xl p-4 cursor-pointer hover:border-[#1F4E20] transition-colors">
                                    <input type="checkbox"
                                        class="sensor-checkbox w-5 h-5 text-[#1F4E20] border-2 border-gray-300 rounded focus:ring-2 focus:ring-[#1F4E20]"
                                        checked>
                                    <span class="text-[14px] text-black font-medium flex-1">Membaca Kelembapan Tanah</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="#1F4E20" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="checkmark">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </label>

                                <!-- Sensor Item 6 -->
                                <label
                                    class="flex items-center gap-3 bg-white border-2 border-gray-200 rounded-xl p-4 cursor-pointer hover:border-[#1F4E20] transition-colors">
                                    <input type="checkbox"
                                        class="sensor-checkbox w-5 h-5 text-[#1F4E20] border-2 border-gray-300 rounded focus:ring-2 focus:ring-[#1F4E20]"
                                        checked>
                                    <span class="text-[14px] text-black font-medium flex-1">Membaca pH Tanah</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="#1F4E20" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="checkmark">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </label>

                                <!-- Sensor Item 7 -->
                                <label
                                    class="flex items-center gap-3 bg-white border-2 border-gray-200 rounded-xl p-4 cursor-pointer hover:border-[#1F4E20] transition-colors">
                                    <input type="checkbox"
                                        class="sensor-checkbox w-5 h-5 text-[#1F4E20] border-2 border-gray-300 rounded focus:ring-2 focus:ring-[#1F4E20]"
                                        checked>
                                    <span class="text-[14px] text-black font-medium flex-1">Membaca Suhu Lingkungan</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="#1F4E20" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="checkmark">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </label>

                                <!-- Sensor Item 8 -->
                                <label
                                    class="flex items-center gap-3 bg-white border-2 border-gray-200 rounded-xl p-4 cursor-pointer hover:border-[#1F4E20] transition-colors">
                                    <input type="checkbox"
                                        class="sensor-checkbox w-5 h-5 text-[#1F4E20] border-2 border-gray-300 rounded focus:ring-2 focus:ring-[#1F4E20]"
                                        checked>
                                    <span class="text-[14px] text-black font-medium flex-1">Membaca Kelembapan
                                        Lingkungan</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="#1F4E20" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="checkmark">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </label>

                                <!-- Sensor Item 9 -->
                                <label
                                    class="flex items-center gap-3 bg-white border-2 border-gray-200 rounded-xl p-4 cursor-pointer hover:border-[#1F4E20] transition-colors">
                                    <input type="checkbox"
                                        class="sensor-checkbox w-5 h-5 text-[#1F4E20] border-2 border-gray-300 rounded focus:ring-2 focus:ring-[#1F4E20]"
                                        checked>
                                    <span class="text-[14px] text-black font-medium flex-1">Membaca Cuaca</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="#1F4E20" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="checkmark">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </label>

                            </div>

                            <!-- Action Buttons -->
                            <div class="space-y-3">
                                <!-- Selanjutnya Button -->
                                <button onclick="confirmSensorSelection()"
                                    class="w-full bg-[#1F4E20] text-white rounded-xl py-4 font-semibold text-[16px] hover:bg-[#2D5F2E] transition-colors shadow-lg">
                                    Selanjutnya
                                </button>

                                <!-- Kembali Button -->
                                <button onclick="backToScanner()"
                                    class="w-full bg-white text-black rounded-xl py-4 font-medium text-[15px] hover:bg-gray-100 transition-colors">
                                    Kembali
                                </button>
                            </div>

                        </div>

                        <!-- Safe Area Bottom Padding -->
                        <div class="h-6"></div>
                    </div>

                </div>
            </div>
            <!-- Modal 4: Success Confirmation -->
            <div id="successModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4">
                <!-- Backdrop -->
                <div class="absolute inset-0 bg-black/50"></div>

                <!-- Modal Card -->
                <div class="relative bg-white rounded-3xl w-full max-w-sm shadow-2xl transform transition-all">
                    <!-- Content Container -->
                    <div class="px-6 pt-12 pb-8 flex flex-col items-center">

                        <!-- Success Icon -->
                        <div class="mb-6">
                            <div
                                class="w-20 h-20 bg-white rounded-full flex items-center justify-center border-4 border-[#1F4E20] shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                    viewBox="0 0 24 24" fill="none" stroke="#1F4E20" stroke-width="3"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                            </div>
                        </div>

                        <!-- Success Message -->
                        <div class="text-center mb-8">
                            <p class="text-[15px] text-black font-medium">Lahan 13* berhasil ditambahkan</p>
                        </div>

                        <!-- Action Buttons -->
                        <div class="w-full space-y-3">
                            <!-- Detail Button -->
                            <a href="{{ route('lahan13') }}"
                                class="block w-full bg-[#1F4E20] text-white rounded-xl py-3.5 text-center font-semibold text-[15px] hover:bg-[#2D5F2E] transition-colors shadow-md">
                                Detail
                            </a>

                            <!-- Selesai Button -->
                            <button onclick="finishAddingSensor()"
                                class="w-full bg-white text-black rounded-xl py-3.5 font-medium text-[15px] hover:bg-gray-50 transition-colors border-2 border-gray-200">
                                Selesai
                            </button>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>


    <style>
        /* Remove input number arrows */
        input[type="text"]::-webkit-inner-spin-button,
        input[type="text"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Modal Slide Animations */
        @keyframes slideUp {
            from {
                transform: translateY(100%);
            }

            to {
                transform: translateY(0);
            }
        }

        @keyframes slideDown {
            from {
                transform: translateY(0);
            }

            to {
                transform: translateY(100%);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Scanning Animation */
        @keyframes pulse-ring {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }

            50% {
                transform: scale(1.1);
                opacity: 0.5;
            }

            100% {
                transform: scale(0.8);
                opacity: 1;
            }
        }

        @keyframes wifi-pulse {

            0%,
            100% {
                opacity: 0.3;
            }

            50% {
                opacity: 1;
            }
        }

        .modal-slide-up {
            animation: slideUp 0.3s ease-out forwards;
        }

        .modal-slide-down {
            animation: slideDown 0.3s ease-in forwards;
        }

        .fade-in-left {
            animation: fadeInLeft 0.3s ease-out;
        }

        .fade-in-right {
            animation: fadeInRight 0.3s ease-out;
        }

        .scanning-circle {
            animation: pulse-ring 2s ease-in-out infinite;
        }

        .wifi-icon {
            animation: wifi-pulse 2s ease-in-out infinite;
        }

        /* Prevent body scroll */
        body.modal-open {
            overflow: hidden;
        }


        #qrCodeModal,
        #scannerModal {
            transition: all 0.3s ease-in-out;
        }

        /* Checkbox Styling */
        .sensor-checkbox {
            appearance: none;
            -webkit-appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid #D1D5DB;
            border-radius: 4px;
            cursor: pointer;
            position: relative;
            transition: all 0.2s ease;
        }

        .sensor-checkbox:checked {
            background-color: #1F4E20;
            border-color: #1F4E20;
        }

        .sensor-checkbox:checked::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 14px;
            font-weight: bold;
        }

        .sensor-checkbox:hover {
            border-color: #1F4E20;
        }

        /* Hide default checkmark SVG */
        label:has(.sensor-checkbox) .checkmark {
            display: none;
        }
    </style>


    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Toggle gambar
            const npkImages = document.querySelectorAll(".npk-image");
            npkImages.forEach(img => {
                const originalSrc = img.src;
                const altSrc = img.getAttribute("data-alt");
                let toggled = false;
                img.addEventListener("click", () => {
                    toggled = !toggled;
                    img.src = toggled ? altSrc : originalSrc;
                });
            });

            // Tab switching logic
            const tabs = {
                harian: document.getElementById('tab-harian'),
                mingguan: document.getElementById('tab-mingguan'),
                bulanan: document.getElementById('tab-bulanan')
            };

            const contents = {
                harian: document.getElementById('content-harian'),
                mingguan: document.getElementById('content-mingguan'),
                bulanan: document.getElementById('content-bulanan')
            };

            Object.keys(tabs).forEach(key => {
                tabs[key].addEventListener('click', () => {
                    // Reset semua tab
                    Object.keys(tabs).forEach(k => {
                        tabs[k].classList.remove('bg-hijau-tua');
                        tabs[k].classList.add('bg-white');
                        const span = tabs[k].querySelector('span');
                        if (span) {
                            span.classList.remove('text-white');
                            span.classList.add('text-hijau-tua');
                        }
                        contents[k].classList.add('hidden');
                    });

                    // Aktifkan tab yang diklik
                    tabs[key].classList.remove('bg-white');
                    tabs[key].classList.add('bg-hijau-tua');
                    const activeSpan = tabs[key].querySelector('span');
                    if (activeSpan) {
                        activeSpan.classList.remove('text-hijau-tua');
                        activeSpan.classList.add('text-white');
                    }
                    contents[key].classList.remove('hidden');
                });
            });
        });

        let activeSchedule = 'weekday'; // default
        let customDate = {
            day: 1,
            month: 1,
            year: 2024
        };

        function openFilterModal() {
            const modal = document.getElementById('filterModal');
            modal.classList.remove('hidden');
        }

        function closeFilterModal() {
            const modal = document.getElementById('filterModal');
            modal.classList.add('hidden');
            document.querySelectorAll('[id^="dropdown"]').forEach(dropdown => {
                dropdown.classList.add('hidden');
            });
        }

        function openWeekdayModal() {
            document.getElementById('filterModal').classList.add('hidden');
            document.getElementById('weekdayModal').classList.remove('hidden');
        }

        function backToMainModal() {
            document.getElementById('weekdayModal').classList.add('hidden');
            document.getElementById('filterModal').classList.remove('hidden');
            const scheduleText = activeSchedule === 'custom' ?
                `${customDate.day}/${customDate.month}/${customDate.year}` :
                activeSchedule.charAt(0).toUpperCase() + activeSchedule.slice(1);
            document.getElementById('selectedSchedule').textContent = scheduleText;
        }

        function toggleScheduleButton(type) {
            const weekdayBtn = document.getElementById('weekdayBtn');
            const weekendBtn = document.getElementById('weekendBtn');
            const weekdayCheck = document.getElementById('weekdayCheck');
            const weekendCheck = document.getElementById('weekendCheck');

            if (type === 'weekday') {
                activeSchedule = 'weekday';
                weekdayBtn.classList.remove('bg-white', 'hover:bg-gray-50');
                weekdayBtn.classList.add('bg-green-400', 'hover:bg-green-500');
                weekdayCheck.classList.remove('invisible');

                weekendBtn.classList.remove('bg-green-400', 'hover:bg-green-500');
                weekendBtn.classList.add('bg-white', 'hover:bg-gray-50');
                weekendCheck.classList.add('invisible');
            } else if (type === 'weekend') {
                activeSchedule = 'weekend';
                weekendBtn.classList.remove('bg-white', 'hover:bg-gray-50');
                weekendBtn.classList.add('bg-green-400', 'hover:bg-green-500');
                weekendCheck.classList.remove('invisible');

                weekdayBtn.classList.remove('bg-green-400', 'hover:bg-green-500');
                weekdayBtn.classList.add('bg-white', 'hover:bg-gray-50');
                weekdayCheck.classList.add('invisible');
            }
        }

        function selectScheduleType(type) {
            if (type !== 'Custom') {
                activeSchedule = type.toLowerCase();
                backToMainModal();
            } else {
                openCustomDateModal();
            }
        }

        function openCustomDateModal() {
            document.getElementById('filterModal').classList.add('hidden');
            document.getElementById('customDateModal').classList.remove('hidden');

            // Initialize scroll positions to current date
            const today = new Date();
            initializeScrollPositions(today.getDate(), today.getMonth() + 1, today.getFullYear());
        }

        function closeCustomDateModal() {
            document.getElementById('customDateModal').classList.add('hidden');
            document.getElementById('filterModal').classList.remove('hidden');
        }

        function initializeScrollPositions(day, month, year) {
            const dateScroll = document.getElementById('dateScroll');
            const monthScroll = document.getElementById('monthScroll');
            const yearScroll = document.getElementById('yearScroll');

            dateScroll.scrollTop = (day - 1) * 29;
            monthScroll.scrollTop = (month - 1) * 29;
            yearScroll.scrollTop = (year - 2024) * 29;
        }

        function getScrolledValue(scrollElement, startValue) {
            const scrollTop = scrollElement.scrollTop;
            const itemHeight = 29;
            return startValue + Math.round(scrollTop / itemHeight);
        }

        function saveCustomDate() {
            const dateScroll = document.getElementById('dateScroll');
            const monthScroll = document.getElementById('monthScroll');
            const yearScroll = document.getElementById('yearScroll');

            customDate.day = getScrolledValue(dateScroll, 1);
            customDate.month = getScrolledValue(monthScroll, 1);
            customDate.year = getScrolledValue(yearScroll, 2024);

            activeSchedule = 'custom';
            closeCustomDateModal();
            backToMainModal();
        }

        function toggleDropdown(dropdownId) {
            const dropdown = document.getElementById(dropdownId);
            document.querySelectorAll('[id^="dropdown"]').forEach(d => {
                if (d.id !== dropdownId) {
                    d.classList.add('hidden');
                }
            });
            dropdown.classList.toggle('hidden');
        }

        function selectAmPm(dropdownId, selectedId, value) {
            document.getElementById(selectedId).textContent = value;
            document.getElementById(dropdownId).classList.add('hidden');
        }

        // Event listeners
        document.getElementById('filterModal')?.addEventListener('click', function(e) {
            if (e.target === this) {
                closeFilterModal();
            }
        });

        document.getElementById('weekdayModal')?.addEventListener('click', function(e) {
            if (e.target === this) {
                document.getElementById('weekdayModal').classList.add('hidden');
            }
        });

        document.getElementById('customDateModal')?.addEventListener('click', function(e) {
            if (e.target === this) {
                closeCustomDateModal();
            }
        });

        document.addEventListener('click', function(e) {
            if (!e.target.closest('[onclick^="toggleDropdown"]') && !e.target.closest('[id^="dropdown"]')) {
                document.querySelectorAll('[id^="dropdown"]').forEach(dropdown => {
                    dropdown.classList.add('hidden');
                });
            }
        });
        // Data lahan 
        let currentLahanData = {
            nama: 'Lahan 1',
            jenis: 'Padi',
            luas: 2
        };

        // Fungsi untuk membuka modal edit
        function openEditModal() {
            // Populate form dengan data yang ada
            document.getElementById('editNamaLahan').value = currentLahanData.nama;
            document.getElementById('editJenisTanaman').value = currentLahanData.jenis;
            document.getElementById('editLuasLahan').value = currentLahanData.luas;

            // Tampilkan modal
            document.getElementById('editModal').classList.remove('hidden');
        }

        // Fungsi untuk menutup modal edit
        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }

        // Fungsi untuk menyimpan perubahan data
        function saveEditData() {
            // Ambil nilai dari form
            const namaLahan = document.getElementById('editNamaLahan').value.trim();
            const jenisTanaman = document.getElementById('editJenisTanaman').value.trim();
            const luasLahan = parseFloat(document.getElementById('editLuasLahan').value);

            // Validasi input
            if (!namaLahan) {
                alert('Nama lahan tidak boleh kosong!');
                return;
            }

            if (!jenisTanaman) {
                alert('Jenis tanaman tidak boleh kosong!');
                return;
            }

            if (!luasLahan || luasLahan <= 0) {
                alert('Luas lahan harus lebih dari 0!');
                return;
            }

            // Update data
            currentLahanData = {
                nama: namaLahan,
                jenis: jenisTanaman,
                luas: luasLahan
            };

            console.log('Data berhasil disimpan:', currentLahanData);

            // Tutup modal
            closeEditModal();

            // Tampilkan notifikasi sukses (opsional)
            alert('Data berhasil disimpan!');
        }

        // Event listener untuk menutup modal saat klik di luar area modal
        document.getElementById('editModal')?.addEventListener('click', function(e) {
            if (e.target === this) {
                closeEditModal();
            }
        });

        // Event listener untuk tombol Enter pada form
        document.addEventListener('DOMContentLoaded', function() {
            const editInputs = ['editNamaLahan', 'editJenisTanaman', 'editLuasLahan'];

            editInputs.forEach(inputId => {
                document.getElementById(inputId)?.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        saveEditData();
                    }
                });
            });

            // Event listener untuk tombol Escape
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    const modal = document.getElementById('editModal');
                    if (modal && !modal.classList.contains('hidden')) {
                        closeEditModal();
                    }
                }
            });
        });
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
        // Fungsi untuk membuka modal sensor dengan animasi slide-up
        function openSensorModal() {
            const modal = document.getElementById('sensorModal');
            const modalContent = document.getElementById('sensorModalContent');
            const overlay = document.getElementById('sensorOverlay');
            const qrCodeModal = document.getElementById('qrCodeModal');
            const scannerModal = document.getElementById('scannerModal');
            const selectSensorModal = document.getElementById('selectSensorModal');
            const successModal = document.getElementById('successModal');

            // Reset state - show QR code modal, hide others
            qrCodeModal.classList.remove('hidden');
            scannerModal.classList.add('hidden');
            selectSensorModal.classList.add('hidden');
            successModal.classList.add('hidden');

            // Show modal
            modal.classList.remove('hidden');
            document.body.classList.add('modal-open');

            // Trigger animation
            setTimeout(() => {
                modalContent.classList.remove('translate-y-full');
                modalContent.classList.add('modal-slide-up');
                overlay.style.opacity = '1';
            }, 10);
        }

        // Fungsi untuk membuka scanner modal
        function openScannerModal() {
            const qrCodeModal = document.getElementById('qrCodeModal');
            const scannerModal = document.getElementById('scannerModal');

            // Slide out QR code modal to left
            qrCodeModal.style.transition = 'transform 0.3s ease-in-out, opacity 0.3s ease-in-out';
            qrCodeModal.style.transform = 'translateX(-100%)';
            qrCodeModal.style.opacity = '0';

            // Show scanner modal with slide in from right
            setTimeout(() => {
                qrCodeModal.classList.add('hidden');
                qrCodeModal.style.transform = '';
                qrCodeModal.style.opacity = '';

                scannerModal.classList.remove('hidden');
                scannerModal.classList.add('fade-in-right');
            }, 300);
        }

        // Fungsi untuk kembali ke QR code modal
        function backToQRCode() {
            const qrCodeModal = document.getElementById('qrCodeModal');
            const scannerModal = document.getElementById('scannerModal');

            // Slide out scanner modal to right
            scannerModal.style.transition = 'transform 0.3s ease-in-out, opacity 0.3s ease-in-out';
            scannerModal.style.transform = 'translateX(100%)';
            scannerModal.style.opacity = '0';

            // Show QR code modal with slide in from left
            setTimeout(() => {
                scannerModal.classList.add('hidden');
                scannerModal.style.transform = '';
                scannerModal.style.opacity = '';
                scannerModal.classList.remove('fade-in-right');

                qrCodeModal.classList.remove('hidden');
                qrCodeModal.classList.add('fade-in-left');

                setTimeout(() => {
                    qrCodeModal.classList.remove('fade-in-left');
                }, 300);
            }, 300);
        }

        // Fungsi untuk connect ke device dan buka modal pilih sensor
        function connectToDevice() {
            const scannerModal = document.getElementById('scannerModal');
            const selectSensorModal = document.getElementById('selectSensorModal');

            // Slide out scanner modal to left
            scannerModal.style.transition = 'transform 0.3s ease-in-out, opacity 0.3s ease-in-out';
            scannerModal.style.transform = 'translateX(-100%)';
            scannerModal.style.opacity = '0';

            // Show select sensor modal with slide in from right
            setTimeout(() => {
                scannerModal.classList.add('hidden');
                scannerModal.style.transform = '';
                scannerModal.style.opacity = '';

                selectSensorModal.classList.remove('hidden');
                selectSensorModal.classList.add('fade-in-right');

                setTimeout(() => {
                    selectSensorModal.classList.remove('fade-in-right');
                }, 300);
            }, 300);
        }

        // Fungsi untuk kembali ke scanner dari pilih sensor
        function backToScanner() {
            const scannerModal = document.getElementById('scannerModal');
            const selectSensorModal = document.getElementById('selectSensorModal');

            // Slide out select sensor modal to right
            selectSensorModal.style.transition = 'transform 0.3s ease-in-out, opacity 0.3s ease-in-out';
            selectSensorModal.style.transform = 'translateX(100%)';
            selectSensorModal.style.opacity = '0';

            // Show scanner modal with slide in from left
            setTimeout(() => {
                selectSensorModal.classList.add('hidden');
                selectSensorModal.style.transform = '';
                selectSensorModal.style.opacity = '';

                scannerModal.classList.remove('hidden');
                scannerModal.classList.add('fade-in-left');

                setTimeout(() => {
                    scannerModal.classList.remove('fade-in-left');
                }, 300);
            }, 300);
        }

        // Fungsi untuk konfirmasi pilihan sensor dan tampilkan success modal
        function confirmSensorSelection() {
            const sensorModal = document.getElementById('sensorModal');
            const selectSensorModal = document.getElementById('selectSensorModal');
            const successModal = document.getElementById('successModal');
            const checkboxes = document.querySelectorAll('.sensor-checkbox:checked');
            const selectedSensors = Array.from(checkboxes).map(cb => cb.parentElement.querySelector('span').textContent);

            console.log('Sensor yang dipilih:', selectedSensors);

            // Slide out select sensor modal to left
            selectSensorModal.style.transition = 'transform 0.3s ease-in-out, opacity 0.3s ease-in-out';
            selectSensorModal.style.transform = 'translateX(-100%)';
            selectSensorModal.style.opacity = '0';

            // Hide sensor modal completely and show success modal
            setTimeout(() => {
                // Hide semua modal sensor
                selectSensorModal.classList.add('hidden');
                selectSensorModal.style.transform = '';
                selectSensorModal.style.opacity = '';


                sensorModal.classList.add('hidden');

                // Show success modal - centered
                successModal.classList.remove('hidden');
            }, 300);
        }

        // Fungsi untuk selesai dan tutup modal
        function finishAddingSensor() {
            const successModal = document.getElementById('successModal');
            const sensorModal = document.getElementById('sensorModal');

            // Fade out success modal
            successModal.style.transition = 'opacity 0.3s ease-out';
            successModal.style.opacity = '0';

            setTimeout(() => {
                successModal.classList.add('hidden');
                successModal.style.opacity = '';

                // Reset sensor modal untuk next time
                const modalContent = document.getElementById('sensorModalContent');
                modalContent.classList.remove('modal-slide-up');
                modalContent.classList.add('translate-y-full');
                document.body.classList.remove('modal-open');

                // Reload halaman atau update UI
                window.location();
            }, 300);
        }
        // Fungsi untuk menutup modal sensor
        function closeSensorModal() {
            const modal = document.getElementById('sensorModal');
            const modalContent = document.getElementById('sensorModalContent');
            const overlay = document.getElementById('sensorOverlay');

            // Start animation
            modalContent.classList.remove('modal-slide-up');
            modalContent.classList.add('modal-slide-down');
            overlay.style.opacity = '0';

            // Hide modal after animation
            setTimeout(() => {
                modal.classList.add('hidden');
                modalContent.classList.remove('modal-slide-down');
                modalContent.classList.add('translate-y-full');
                document.body.classList.remove('modal-open');
            }, 300);
        }

        // Event listener untuk tombol Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                const modal = document.getElementById('sensorModal');
                const scannerModal = document.getElementById('scannerModal');
                const selectSensorModal = document.getElementById('selectSensorModal');
                const successModal = document.getElementById('successModal');

                if (modal && !modal.classList.contains('hidden')) {
                    if (!successModal.classList.contains('hidden')) {
                        finishAddingSensor();
                    } else if (!selectSensorModal.classList.contains('hidden')) {
                        backToScanner();
                    } else if (!scannerModal.classList.contains('hidden')) {
                        backToQRCode();
                    } else {
                        closeSensorModal();
                    }
                }
            }
        });

        // Prevent closing when clicking inside modal content
        document.getElementById('sensorModalContent')?.addEventListener('click', function(e) {
            e.stopPropagation();
        });

        // Handle checkbox styling
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.sensor-checkbox');

            checkboxes.forEach(checkbox => {
                const label = checkbox.parentElement;

                // Update visual state on change
                checkbox.addEventListener('change', function() {
                    if (this.checked) {
                        label.classList.add('border-[#1F4E20]');
                        label.classList.remove('border-gray-200');
                    } else {
                        label.classList.remove('border-[#1F4E20]');
                        label.classList.add('border-gray-200');
                    }
                });

                // Initialize state
                if (checkbox.checked) {
                    label.classList.add('border-[#1F4E20]');
                    label.classList.remove('border-gray-200');
                }
            });
        });
    </script>

@endsection
