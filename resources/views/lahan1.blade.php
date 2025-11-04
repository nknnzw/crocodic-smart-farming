@extends('navbar')
@section('title', 'Lahan1')
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
                    <span class="text-black text-[22px] font-semibold">Lahan 1</span>
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
            Tanaman: <span class="font-normal">Padi</span>
        </p>
    </div>

    <!-- Kanan: Edit & Delete Icons -->
    <div class="flex items-center gap-2">
        <button class="flex items-center justify-center hover:bg-[#2f6d31] transition">
            <!-- Edit Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
<circle cx="26.5" cy="26.5" r="22.5" fill="#1F4E20"/>
<path d="M17 38.25C16.6458 38.25 16.3492 38.13 16.11 37.89C15.8708 37.65 15.7508 37.3533 15.75 37V33.9688C15.75 33.6354 15.8125 33.3175 15.9375 33.015C16.0625 32.7125 16.2396 32.4471 16.4688 32.2188L32.25 16.4688C32.5 16.2396 32.7763 16.0625 33.0788 15.9375C33.3813 15.8125 33.6987 15.75 34.0312 15.75C34.3638 15.75 34.6867 15.8125 35 15.9375C35.3133 16.0625 35.5842 16.25 35.8125 16.5L37.5312 18.25C37.7812 18.4792 37.9633 18.75 38.0775 19.0625C38.1917 19.375 38.2492 19.6875 38.25 20C38.25 20.3333 38.1925 20.6513 38.0775 20.9538C37.9625 21.2562 37.7804 21.5321 37.5312 21.7812L21.7812 37.5312C21.5521 37.7604 21.2862 37.9375 20.9837 38.0625C20.6812 38.1875 20.3638 38.25 20.0312 38.25H17ZM34 21.75L35.75 20L34 18.25L32.25 20L34 21.75Z" fill="white"/>
</svg>
        </button>

        <button class="flex items-center justify-center hover:bg-[#2f6d31] transition">
            <!-- Delete Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="53" viewBox="0 0 50 53" fill="none">
<circle cx="26.5" cy="26.5" r="22.5" fill="#1F4E20"/>
<path d="M35.75 17H31.375L30.125 15.75H23.875L22.625 17H18.25V19.5H35.75M19.5 35.75C19.5 36.413 19.7634 37.0489 20.2322 37.5178C20.7011 37.9866 21.337 38.25 22 38.25H32C32.663 38.25 33.2989 37.9866 33.7678 37.5178C34.2366 37.0489 34.5 36.413 34.5 35.75V20.75H19.5V35.75Z" fill="white"/>
</svg>
        </button>
    </div>
</div>


            <!-- Tambah Sensor Button -->
            <button id="btn-tambah-sensor"
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
                    <button class="p-1">
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
                    <button class="p-1">
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
                            data-alt="{{ asset('asset/img/npkharian_2.png') }}"
                            alt="npk"
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
                            data-alt="{{ asset('asset/img/suhutanahharian_2.png') }}"
                            alt="suhu"
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
                        <img src="{{ asset('asset/img/phtanah.png') }}"
                            data-alt="{{ asset('asset/img/phtanah_2.png') }}"
                            alt="ph"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                </div>

                <!-- Card Kelembaban Tanah Harian -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik Kelembapan Tanah</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/kelembabantanahharian.png') }}"
                            data-alt="{{ asset('asset/img/kelembabantanahharian_2.png') }}"
                            alt="suhu"
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
                            data-alt="{{ asset('asset/img/suhulingkunganharian_2.png') }}"
                            alt="suhu"
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
                            data-alt="{{ asset('asset/img/kelembabanlingkunganharian2.png') }}"
                            alt="suhu"
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
                            data-alt="{{ asset('asset/img/npkmingguan2.png') }}"
                            alt="npk"
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
                            data-alt="{{ asset('asset/img/suhutanahmingguan2.png') }}"
                            alt="suhu"
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
                            data-alt="{{ asset('asset/img/phtanahmingguan2.png') }}"
                            alt="ph"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                </div>
                
                <!-- Card Kelembaban Tanah mingguan -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik Kelembapan Tanah</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/kelembapantanahmingguan.png') }}"
                            data-alt="{{ asset('asset/img/kelembapantanahmingguan2.png') }}"
                            alt="suhu"
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
                            data-alt="{{ asset('asset/img/suhulingkunganmingguan2.png') }}"
                            alt="suhu"
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
                            data-alt="{{ asset('asset/img/kelembapanlingkunganmingguan2.png') }}"
                            alt="suhu"
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
                            data-alt="{{ asset('asset/img/npkbulanan2.png') }}"
                            alt="npk"
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
                            data-alt="{{ asset('asset/img/suhutanahbulanan2.png') }}"
                            alt="suhu"
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
                            data-alt="{{ asset('asset/img/phtanahbulanan2.png') }}"
                            alt="ph"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                </div>
                
                <!-- Card Kelembaban Tanah bulanan -->
                <div class="bg-white border border-gray-300 rounded-3xl p-4 mt-3">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik Kelembapan Tanah</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/kelembapantanahbulanan.png') }}"
                            data-alt="{{ asset('asset/img/kelembapantanahbulanan2.png') }}"
                            alt="suhu"
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
                            data-alt="{{ asset('asset/img/suhulingkunganbulanan2.png') }}"
                            alt="suhu"
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
                            data-alt="{{ asset('asset/img/kelembapanlingkunganbulanan2.png') }}"
                            alt="suhu"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                    <div class="mt-3 text-[12px] text-hijau-tua pl-6">
                        <p class="font-semibold mb-1">Rata-rata kelembapan lingkungan bulan ini:</p>
                        <p class="font-bold mb-1 text-[22px]">25°C</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    </script>

@endsection