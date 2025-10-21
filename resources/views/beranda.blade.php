@extends('navbar')
@section('title', 'Beranda')
@section('content')

<div class="relative min-h-screen">
    <!-- Main Content -->
    <div class="pt-[76px] pb-[101px] px-[14px]">
        <div class="w-full max-w-[373px] mx-auto flex flex-col gap-5 overflow-y-auto h-[727px] scrollbar-hide">

            <!-- Logo Header -->
            <div class="flex items-center gap-2.5 px-1.5">
                <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-[19px] h-[19px]">
                <div class="flex-1 text-center">
                    <span class="text-hijau-tua text-sm font-medium">Pertanian Cerdas, Panen Berkualitas</span>
                </div>
            </div>

            <!-- User Header -->
            <div class="flex flex-col gap-6">
                <div class="flex items-center justify-between">
                    <!-- User Info -->
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('img/ellipse-11.png') }}" alt="avatar"
                            class="w-[53px] h-[53px] rounded-full object-cover">
                        <div class="flex flex-col">
                            <span class="text-hijau-tua text-sm font-medium">Good Morning</span>
                            <span class="text-hijau-tua text-base font-semibold">Dian</span>
                        </div>
                    </div>

                    <!-- Notification -->
                    <div class="w-[53px] h-[53px] bg-hijau-tua rounded-full flex items-center justify-center">
                        <div class="relative w-[29px] h-[29px]">
                            <svg viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M..." fill="white" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Weather Card -->
                <div class="bg-white rounded-[25px] p-3.5 flex items-center gap-1.5">
                    <div class="w-[72px] h-[53px] relative">
                        <img src="{{ asset('img/cuaca.png') }}" alt="weather"
                            class="absolute top-2 right-0.5 w-[68px] h-[38px] object-cover">
                    </div>
                    <div class="flex-1 flex flex-col gap-1">
                        <span class="text-hijau-tua text-sm font-medium">Semarang, Indonesia</span>
                        <span class="text-hijau-tua text-base font-semibold">Sunny</span>
                    </div>
                    <span class="text-hijau-tua text-2xl font-bold">23°C</span>
                    <div class="w-[30px] h-[30px]">
                        <svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M..." fill="#1F4E20" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Lahan Section -->
            <div class="flex flex-col gap-4">
                <div class="flex flex-col">
                    <div class="flex items-center justify-between">
                        <span class="text-hijau-tua text-base font-semibold">Lahan</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-hijau-tua text-sm font-medium">Jumlah : 12 lahan</span>
                        <div class="flex items-center gap-1">
                            <span class="text-hijau-tua text-sm font-medium">Semua Lahan</span>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M..." fill="#1F4E20" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Lahan Cards -->
                <div class="flex gap-2.5">
                    <!-- Lahan 1 -->
                    <div class="flex-1 bg-white rounded-[10px] border border-hijau-tua overflow-hidden">
                        <div class="p-3 flex flex-col gap-2">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-semibold text-black">Lahan 1</span>
                                <img src="{{ asset('img/frame-33800.svg') }}" alt="rice" class="w-6 h-6">
                            </div>
                            <div class="flex flex-col gap-1">
                                <span class="text-xs text-black">Luas: 2 Ha</span>
                                <span class="text-xs text-black">Tanaman: Padi</span>
                            </div>
                        </div>
                        <div class="bg-hijau-muda rounded-b-[10px] px-3 py-1.5 flex items-center justify-between">
                            <span class="text-xs text-white">Detail</span>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M..." fill="white" />
                            </svg>
                        </div>
                    </div>

                    <!-- Lahan 2 -->
                    <div class="flex-1 bg-white rounded-[10px] border border-hijau-tua overflow-hidden">
                        <div class="p-3 flex flex-col gap-2">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-semibold text-black">Lahan 2</span>
                                <div class="w-6 h-6 bg-hijau-tua rounded-xl flex items-center justify-center">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M..." fill="white" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <span class="text-xs text-black">Luas: 4 Ha</span>
                                <span class="text-xs text-black">Tanaman: Jagung</span>
                            </div>
                        </div>
                        <div class="bg-hijau-muda rounded-b-[10px] px-3 py-1.5 flex items-center justify-between">
                            <span class="text-xs text-white">Detail</span>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M..." fill="white" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lahan 1 Detail Card -->
            <div class="bg-white rounded-[10px] border border-hijau-tua p-3 flex flex-col gap-2.5">
                <!-- Title -->
                <div class="py-2.5">
                    <span class="text-base font-semibold text-black">Lahan 1</span>
                </div>

                <!-- Automation Toggles -->
                <div class="flex gap-2.5">
                    <div
                        class="flex-1 bg-hijau-paling-muda rounded-[10px] border border-hijau-tua p-2 flex items-center justify-between">
                        <div class="flex items-center gap-1.5">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M..." fill="#1F4E20" />
                            </svg>
                            <span class="text-xs text-black">Penyiraman<br />Otomatis</span>
                        </div>
                        <img src="{{ asset('img/toggle.svg') }}" alt="toggle" class="w-[31px] h-[31px]">
                    </div>

                    <div
                        class="flex-1 bg-hijau-paling-muda rounded-[10px] border border-hijau-tua p-2 flex items-center justify-between">
                        <div class="flex items-center gap-1.5">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M..." fill="#1F4E20" />
                            </svg>
                            <span class="text-xs text-black">Pemupukan<br />Otomatis</span>
                        </div>
                        <img src="{{ asset('img/toggle-2.svg') }}" alt="toggle" class="w-[31px] h-[31px]">
                    </div>
                </div>

                <!-- Sensor Data -->
                <div class="flex flex-col gap-2.5">
                    <!-- NPK -->
                    <div
                        class="bg-white rounded-[10px] border border-hijau-tua p-4 flex items-center justify-between">
                        <div class="flex items-center gap-5">
                            <img src="{{ asset('img/1345362-1.png') }}" alt="npk" class="w-[35px] h-[35px]">
                            <span class="text-base font-semibold text-hijau-tua">NPK</span>
                        </div>
                        <span class="text-base font-semibold text-hijau-tua">50ppm</span>
                    </div>

                    <!-- Suhu Tanah -->
                    <div
                        class="bg-white rounded-[10px] border border-hijau-tua p-4 flex items-center justify-between">
                        <div class="flex items-center gap-5">
                            <img src="{{ asset('img/streamline-ultimate-color-temperature-thermometer-high.svg') }}"
                                alt="temp" class="w-[35px] h-[35px]">
                            <span class="text-base font-semibold text-hijau-tua">Suhu Tanah</span>
                        </div>
                        <span class="text-base font-semibold text-hijau-tua">25°C</span>
                    </div>

                    <!-- pH Tanah -->
                    <div
                        class="bg-white rounded-[10px] border border-hijau-tua p-4 flex items-center justify-between">
                        <div class="flex items-center gap-5">
                            <img src="{{ asset('img/streamline-ultimate-color-lab-flask-experiment.svg') }}"
                                alt="ph" class="w-[35px] h-[35px]">
                            <span class="text-base font-semibold text-hijau-tua">pH Tanah</span>
                        </div>
                        <span class="text-base font-semibold text-hijau-tua">7.5</span>
                    </div>

                    <!-- Kelembaban Tanah -->
                    <div
                        class="bg-white rounded-[10px] border border-hijau-tua p-4 flex items-center justify-between">
                        <div class="flex items-center gap-5">
                            <div class="w-[35px] h-[35px] relative">
                                <svg viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M..." fill="#1F4E20" />
                                </svg>
                            </div>
                            <span class="text-base font-semibold text-hijau-tua">Kelembaban Tanah</span>
                        </div>
                        <span class="text-base font-semibold text-hijau-tua">5%</span>
                    </div>

                    <!-- Suhu Lingkungan -->
                    <div
                        class="bg-white rounded-[10px] border border-hijau-tua p-4 flex items-center justify-between">
                        <div class="flex items-center gap-5">
                            <div class="w-[35px] h-[35px] relative">
                                <svg viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M..." fill="#1F4E20" />
                                </svg>
                            </div>
                            <span class="text-base font-semibold text-hijau-tua">Suhu Lingkungan</span>
                        </div>
                        <span class="text-base font-semibold text-hijau-tua">30°C</span>
                    </div>

                    <!-- Kelembaban Lingkungan -->
                    <div
                        class="bg-white rounded-[10px] border border-hijau-tua p-4 flex items-center justify-between">
                        <div class="flex items-center gap-5">
                            <div class="w-[35px] h-[35px] relative">
                                <svg viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M..." fill="#1F4E20" />
                                </svg>
                            </div>
                            <span class="text-base font-semibold text-hijau-tua">Kelembaban<br />Lingkungan</span>
                        </div>
                        <span class="text-base font-semibold text-hijau-tua">25°C</span>
                    </div>
                </div>

                <!-- Detail Button -->
                <div class="bg-hijau-tua rounded-[10px] p-3 flex items-center justify-center gap-2">
                    <span class="text-base font-semibold text-white">Lihat Detail Lahan</span>
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M..." fill="white" />
                    </svg>
                </div>
            </div>

        </div>
    </div>


</div>

@endsection