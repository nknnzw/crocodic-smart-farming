@extends('navbar')
@section('title', 'Notif')
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
                <span class="text-black text-[22px] font-semibold">Notifikasi</span>
            </div>
        </div>

        <!-- Notifikasi -->
         <div class="flex flex-col gap-6">
                <div
                    class="flex items-center justify-between bg-white rounded-3xl p-4 border-2 border-abu-abu-muda">
                    <div class="flex items-center gap-4">
                        <div class="flex items-center justify-center">
                           <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
<circle cx="26.5" cy="26.5" r="26.5" fill="#AAAAAA" fill-opacity="0.25"/>
<path d="M26.5005 14.416C24.2572 14.416 22.1058 15.3072 20.5195 16.8934C18.9333 18.4796 18.0421 20.6311 18.0421 22.8743V27.1373C18.0423 27.3248 17.9989 27.5097 17.9153 27.6775L15.8406 31.8257C15.7392 32.0283 15.6914 32.2535 15.7015 32.4799C15.7117 32.7063 15.7796 32.9263 15.8987 33.119C16.0179 33.3118 16.1843 33.4708 16.3822 33.5812C16.5801 33.6915 16.803 33.7494 17.0296 33.7493H35.9714C36.198 33.7494 36.4208 33.6915 36.6187 33.5812C36.8167 33.4708 36.9831 33.3118 37.1022 33.119C37.2213 32.9263 37.2892 32.7063 37.2994 32.4799C37.3096 32.2535 37.2617 32.0283 37.1604 31.8257L35.0869 27.6775C35.0029 27.5098 34.959 27.3249 34.9588 27.1373V22.8743C34.9588 20.6311 34.0677 18.4796 32.4814 16.8934C30.8952 15.3072 28.7438 14.416 26.5005 14.416ZM26.5005 37.3743C25.7505 37.3747 25.0189 37.1425 24.4065 36.7097C23.794 36.2769 23.3309 35.6647 23.0809 34.9577H29.9201C29.6701 35.6647 29.2069 36.2769 28.5945 36.7097C27.982 37.1425 27.2504 37.3747 26.5005 37.3743Z" fill="#1F4E20"/>
</svg>
                        </div>
                        <div class="flex flex-col">
                        <span class="text-[15px] font-semibold text-hijau-tua">Notifikasi</span>
                        <span class="text-[13px] text-gray-600">Aktifkan notifikasi untuk menerima secara real-time</span>
                    </div>
                    </div>
                    <label class="toggle-custom flex items-center justify-center">
                                    <input type="checkbox" checked>
                                    <span class="slider"></span>
                                </label>
                </div>
         </div>
    </div>  
    </div>


        
@endsection