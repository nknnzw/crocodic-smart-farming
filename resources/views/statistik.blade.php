@extends('navbar')
@section('title', 'Statistik')
@section('content')

<div class="bg-[#F5FFF5] min-h-screen">
    <div class="flex flex-col w-[358px] gap-1 relative mx-auto pt-6">

        <!-- Header + Tabs Fixed -->
        <div class="fixed top-0 left-0 w-full bg-[#F5FFF5] z-50">
            <div class="flex flex-col w-[358px] gap-1 relative mx-auto pt-6 pb-3">

                <!-- Header -->
                <div class="flex justify-center items-center w-full">
                    <div class="flex flex-col items-start gap-2 w-full">
                        <div class="flex items-center h-[25px]">
                            <span class="text-[24px] font-semibold text-black">Statistic Semua Lahan</span>
                        </div>
                    </div>
                </div>

                <!-- Filter Icon -->
                <div class="flex justify-end">
                    <button onclick="openFilterModal()" type="button"
                    class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-[#1F4E20] hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                        <path
                            d="M6 4.12473e-07C5.37935 -0.00032496 4.77387 0.191856 4.26702 0.550057C3.76016 0.908257 3.37688 1.41484 3.17 2H0V4H3.17C3.3766 4.58553 3.75974 5.09257 4.2666 5.45121C4.77346 5.80985 5.37909 6.00245 6 6.00245C6.62091 6.00245 7.22654 5.80985 7.7334 5.45121C8.24026 5.09257 8.6234 4.58553 8.83 4H16V2H8.83C8.62312 1.41484 8.23984 0.908257 7.73298 0.550057C7.22613 0.191856 6.62065 -0.00032496 6 4.12473e-07ZM5 3C5 2.73478 5.10536 2.48043 5.29289 2.29289C5.48043 2.10536 5.73478 2 6 2C6.26522 2 6.51957 2.10536 6.70711 2.29289C6.89464 2.48043 7 2.73478 7 3C7 3.26522 6.89464 3.51957 6.70711 3.70711C6.51957 3.89464 6.26522 4 6 4C5.73478 4 5.48043 3.89464 5.29289 3.70711C5.10536 3.51957 5 3.26522 5 3ZM10 8C9.37935 7.99967 8.77387 8.19186 8.26702 8.55006C7.76016 8.90826 7.37688 9.41484 7.17 10H0V12H7.17C7.3766 12.5855 7.75974 13.0926 8.2666 13.4512C8.77346 13.8099 9.37909 14.0025 10 14.0025C10.6209 14.0025 11.2265 13.8099 11.7334 13.4512C12.2403 13.0926 12.6234 12.5855 12.83 12H16V10H12.83C12.6231 9.41484 12.2398 8.90826 11.733 8.55006C11.2261 8.19186 10.6207 7.99967 10 8ZM9 11C9 10.7348 9.10536 10.4804 9.29289 10.2929C9.48043 10.1054 9.73478 10 10 10C10.2652 10 10.5196 10.1054 10.7071 10.2929C10.8946 10.4804 11 10.7348 11 11C11 11.2652 10.8946 11.5196 10.7071 11.7071C10.5196 11.8946 10.2652 12 10 12C9.73478 12 9.48043 11.8946 9.29289 11.7071C9.10536 11.5196 9 11.2652 9 11Z"
                            fill="#1F4E20" />
                    </svg>
                </button>
                </div>

                <!-- Tabs -->
                <div class="w-full h-[39px] mt-1">
                    <div class="flex w-[357px] mx-auto">
                        <button id="tab-harian"
                            class="tab-btn w-[119px] flex items-center justify-center bg-hijau-tua border border-hijau-tua">
                            <span class="text-[14px] font-semibold text-white text-center">Harian</span>
                        </button>
                        <button id="tab-mingguan"
                            class="tab-btn w-[119px] flex items-center justify-center bg-white border border-hijau-tua">
                            <span class="text-[14px] font-semibold text-hijau-tua text-center">Mingguan</span>
                        </button>
                        <button id="tab-bulanan"
                            class="tab-btn w-[119px] flex items-center justify-center bg-white border border-hijau-tua">
                            <span class="text-[14px] font-semibold text-hijau-tua text-center">Bulanan</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Konten utama -->
        <div class="pt-[110px] pb-[140px]">

            <!-- ====== HARlAN ====== -->
            <div id="content-harian">
                <!-- Card Grafik NPK harian -->
                <div class="w-[358px] mx-auto bg-white border border-gray-300 rounded-3xl p-4 mt-4">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3">
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
                <div class="w-[358px] mx-auto bg-white border border-gray-300 rounded-3xl p-4 mt-4">
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
                <div class="w-[358px] mx-auto bg-white border border-gray-300 rounded-3xl p-4 mt-4">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik pH Tanah</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/phtanah.png') }}"
                            data-alt="{{ asset('asset/img/phtanah_2.png') }}"
                            alt="ph"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                </div>

                <!-- Card Kelembaban Tanah Harian -->
                <div class="w-[358px] mx-auto bg-white border border-gray-300 rounded-3xl p-4 mt-4">
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
                <div class="w-[358px] mx-auto bg-white border border-gray-300 rounded-3xl p-4 mt-4">
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
                <div class="w-[358px] mx-auto bg-white border border-gray-300 rounded-3xl p-4 mt-4">
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

                <!-- Grafik cuaca -->
                <div class="w-[358px] mx-auto mt-4">
                    <img src="{{ asset('asset/img/cuacaharian.png') }}">    
                </div>
            </div>

            <!-- ====== MINGGUAN ====== -->
            <div id="content-mingguan" class="hidden">
                <!-- Card Grafik NPK mingguan -->
                <div class="w-[358px] mx-auto bg-white border border-gray-300 rounded-3xl p-4 mt-4">
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
                <!-- Card Suhu Tanah Harian -->
                <div class="w-[358px] mx-auto bg-white border border-gray-300 rounded-3xl p-4 mt-4">
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
                 <!-- Card pH Tanah Harian -->
                <div class="w-[358px] mx-auto bg-white border border-gray-300 rounded-3xl p-4 mt-4">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik pH Tanah</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/phtanahmingguan.png') }}"
                            data-alt="{{ asset('asset/img/phtanahmingguan2.png') }}"
                            alt="ph"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                </div>
                 <!-- Card Kelembaban Tanah mingguan -->
                <div class="w-[358px] mx-auto bg-white border border-gray-300 rounded-3xl p-4 mt-4">
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
                <div class="w-[358px] mx-auto bg-white border border-gray-300 rounded-3xl p-4 mt-4">
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
                <div class="w-[358px] mx-auto bg-white border border-gray-300 rounded-3xl p-4 mt-4">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik Kelembapan Lingkungan</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/kelembapanlingkunganmingguan.png') }}"
                            data-alt="{{ asset('asset/img/kelembapanlingkunganmingguan2.png') }}"
                            alt="suhu"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                    <div class="mt-3 text-[12px] text-hijau-tua pl-6">
                        <p class="font-semibold mb-1">Rata-rata kelembapan lingkungan hari ini:</p>
                        <p class="font-bold mb-1 text-[22px]">25°C</p>
                    </div>
                </div>

            </div>


            <!-- ====== BULANAN ====== -->
            <div id="content-bulanan" class="hidden">
                <!-- Card Grafik NPK mingguan -->
                <div class="w-[358px] mx-auto bg-white border border-gray-300 rounded-3xl p-4 mt-4">
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
                <!-- Card Suhu Tanah Harian -->
                <div class="w-[358px] mx-auto bg-white border border-gray-300 rounded-3xl p-4 mt-4">
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
                 <!-- Card pH Tanah Harian -->
                <div class="w-[358px] mx-auto bg-white border border-gray-300 rounded-3xl p-4 mt-4">
                    <h3 class="text-[16px] font-semibold text-hijau-tua mb-3 text-center">Grafik pH Tanah</h3>
                    <div class="w-full h-[250px] rounded flex items-center justify-center">
                        <img src="{{ asset('asset/img/phtanahbulanan.png') }}"
                            data-alt="{{ asset('asset/img/phtanahbulanan2.png') }}"
                            alt="ph"
                            class="npk-image w-full h-full object-contain cursor-pointer transition-all duration-300">
                    </div>
                </div>
                 <!-- Card Kelembaban Tanah mingguan -->
                <div class="w-[358px] mx-auto bg-white border border-gray-300 rounded-3xl p-4 mt-4">
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
                <!-- Card Suhu Lingkungan minggu -->
                <div class="w-[358px] mx-auto bg-white border border-gray-300 rounded-3xl p-4 mt-4">
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
                <!-- Card kelembapan Lingkungan mingguan -->
                <div class="w-[358px] mx-auto bg-white border border-gray-300 rounded-3xl p-4 mt-4">
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
            <div
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 1</div>
            <div
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 2</div>
            <div
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 3</div>
            <div
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 4</div>
            <div
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 5</div>
            <div
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 6</div>
            <div
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 7</div>
            <div
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 8</div>
            <div
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 9</div>
            <div
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 10</div>
            <div
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 11</div>
            <div
                class="py-1.5 text-center text-hijau-tua text-sm font-medium hover:bg-hijau-paling-muda cursor-pointer transition-colors">
                Lahan 12</div>
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

    // Klik overlay untuk menutup modal
    document.addEventListener('click', function (event) {
        const modal = document.getElementById('filterModal');
        const content = document.getElementById('modalContent');
        const button = event.target.closest('button[onclick="openFilterModal()"]');

        if (modal && !modal.classList.contains('hidden') &&
            !content.contains(event.target) && !button) {
            closeFilterModal();
        }
    });

    // Pilih lahan dan ubah label
    document.addEventListener('DOMContentLoaded', function () {
        const headerFilter = document.querySelector('#modalContent .bg-hijau-tua'); // "Semua Lahan" di header
        const lahanList = document.querySelectorAll('#lahanList div');
        const label = document.getElementById('filterLabel');

        function resetAll() {
            // Reset semua lahan jadi putih
            lahanList.forEach(i => {
                i.classList.remove('bg-hijau-tua', 'text-white');
                i.classList.add('bg-white', 'text-hijau-tua');
            });
            // Reset header jadi putih juga
            headerFilter.classList.remove('bg-hijau-tua', 'text-white');
            headerFilter.classList.add('bg-white', 'text-hijau-tua');
        }

        // Klik pada setiap item lahan
        lahanList.forEach(item => {
            item.addEventListener('click', () => {
                resetAll();
                item.classList.add('bg-hijau-tua', 'text-white');
                item.classList.remove('bg-white', 'text-hijau-tua');
                if (label) label.textContent = item.textContent;
                closeFilterModal();
            });
        });

        // Klik pada header “Semua Lahan”
        headerFilter.addEventListener('click', () => {
            resetAll();
            headerFilter.classList.add('bg-hijau-tua', 'text-white');
            headerFilter.classList.remove('bg-white', 'text-hijau-tua');
            if (label) label.textContent = 'Semua Lahan';
            closeFilterModal();
        });
    });
   
</script>

@endsection
