@extends('navbar')
@section('title', 'Tentang')
@section('content')

    <div class="bg-[#F5FFF5] min-h-screen">
    <div class="flex flex-col w-[358px] gap-1 relative mx-auto pt-6 pb-24">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <!-- Icon Back + Title -->
            <div class="flex items-center gap-5">
                <a href="{{ route('setelan') }}" id="icon-left" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 25 21"
                        fill="none">
                        <path
                            d="M8.94366 20.2236C9.33441 20.6143 9.86438 20.8339 10.417 20.8339C10.9696 20.8339 11.4996 20.6143 11.8903 20.2236C12.2811 19.8328 12.5006 19.3029 12.5006 18.7503C12.5006 18.1976 12.2811 17.6677 11.8903 17.2769L7.11366 12.5003L22.0837 12.5003C22.6362 12.5003 23.1661 12.2808 23.5568 11.8901C23.9475 11.4994 24.167 10.9695 24.167 10.4169C24.167 9.86439 23.9475 9.33448 23.5568 8.94378C23.1661 8.55308 22.6362 8.33359 22.0837 8.33359L7.11366 8.33359L11.8903 3.55692C12.2811 3.16617 12.5006 2.63619 12.5006 2.08359C12.5006 1.53098 12.2811 1.001 11.8903 0.610252C11.4996 0.2195 10.9696 -2.09767e-05 10.417 -2.09808e-05C9.86438 -2.0985e-05 9.33441 0.2195 8.94366 0.610252L0.610323 8.94359C0.416809 9.13705 0.263305 9.36674 0.158573 9.61954C0.0538415 9.87233 -6.29425e-05 10.1433 -6.29425e-05 10.4169C-6.29425e-05 10.6906 0.0538415 10.9615 0.158573 11.2143C0.263305 11.4671 0.416809 11.6968 0.610323 11.8903L8.94366 20.2236Z"
                            fill="#1F4E20" />
                    </svg>
                </a>
                <span class="text-black text-[22px] font-semibold">Tentang Kami</span>
            </div>
        </div>

        <!-- Content Card -->
        <div class="bg-white rounded-[20px] p-6 border-2 border-abu-abu-muda shadow-sm">
            <!-- Deskripsi Aplikasi -->
            <p class="text-black text-[14px] leading-relaxed text-justify mb-4">
                Crocodic Smart Farming adalah aplikasi pertanian cerdas yang dirancang untuk membantu petani dan pengelola lahan dalam mengoptimalkan hasil pertanian dengan memanfaatkan teknologi digital dan Internet of Things (IoT).
            </p>

            <!-- Fitur Aplikasi -->
            <p class="text-black text-[14px] leading-relaxed mb-3">
                Melalui aplikasi ini, pengguna dapat:
            </p>

            <ol class="space-y-2 mb-4 text-black text-[14px] leading-relaxed">
    <li class="flex text-justify">
        <span class="mr-2 flex-shrink-0">1.</span>
        <span>Menambahkan dan mengelola lahan sesuai kebutuhan.</span>
    </li>
    <li class="flex text-justify">
        <span class="mr-2 flex-shrink-0">2.</span>
        <span>Mengontrol sistem penyiraman dan pemupukan otomatis.</span>
    </li>
    <li class="flex text-justify">
        <span class="mr-2 flex-shrink-0">3.</span>
        <span>Memantau NPK (Nitrogen, Fosfor, Kalium) untuk kesuburan tanah.</span>
    </li>
    <li class="flex text-justify">
        <span class="mr-2 flex-shrink-0">4.</span>
        <span>Melakukan monitoring kondisi tanah seperti suhu, pH, dan kelembapan.</span>
    </li>
    <li class="flex text-justify">
        <span class="mr-2 flex-shrink-0">5.</span>
        <span>Memantau kondisi lingkungan, termasuk suhu, kelembaban udara, dan cuaca secara real time.</span>
    </li>
</ol>

            <!-- Visi -->
            <p class="text-black text-[14px] leading-relaxed text-justify mb-6">
                Kami hadir untuk mendukung pertanian modern yang lebih efisien, ramah lingkungan, dan berkelanjutan.
            </p>

            <!-- Footer Text -->
                <p class="text-black text-[16px] font-semibold">
                    Crocodic Smart Farming
                </p>
                <p class="text-black text-[16px] font-semibold">
                    — Pertanian Cerdas, Panen Berkualitas
                </p>
            </div>
        </div>
    </div>
    </div>
        
@endsection