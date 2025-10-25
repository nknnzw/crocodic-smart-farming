@extends('navbar')
@section('title', 'Beranda')
@section('content')

    <body class="bg-hijau-paling-muda font-poppins min-w-[402px]">

        <div class="relative min-h-screen">
            <!-- Main Content -->
            <div class="px-[14px] pt-5 pb-[120px]">
                <div class="w-full max-w-[373px] mx-auto flex flex-col gap-5">

                    <!-- Logo Header -->
                    <div class="flex items-center justify-start gap-x-2">
                        <img src="{{ asset('asset/img/Logo.png') }}" alt="logo" class="w-[19px] h-[19px]">
                        <span class="text-hijau-tua text-sm font-medium">
                            Pertanian Cerdas, Panen Berkualitas
                        </span>
                    </div>

                    <!-- User Header -->
                    <div class="flex flex-col gap-6">
                        <div class="flex items-center justify-between">
                            <!-- User Info -->
                            <div class="flex items-center gap-3 pl-1">
                                <img src="{{ asset('asset/img/avatar.png') }}" alt="avatar"
                                    class="w-[53px] h-[53px] rounded-full object-cover">
                                <div class="flex flex-col">
                                    <span class="text-hijau-tua text-sm font-medium">Good Morning</span>
                                    <span class="text-hijau-tua text-base font-semibold">Dian</span>
                                </div>
                            </div>

                            <!-- Notification -->
                            <a href="{{ route('notifikasi') }}" class="pr-1">
                                <div class="w-[53px] h-[53px] bg-hijau-tua rounded-full flex items-center justify-center">
                                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.5 2.41663C12.2567 2.41663 10.1053 3.30777 8.51904 4.89401C6.9328 6.48026 6.04165 8.63167 6.04165 10.875V15.138C6.04183 15.3254 5.99839 15.5103 5.91478 15.6781L3.84007 19.8263C3.73872 20.029 3.69087 20.2542 3.70105 20.4805C3.71123 20.7069 3.77911 20.9269 3.89825 21.1196C4.01738 21.3124 4.18381 21.4715 4.38173 21.5818C4.57964 21.6921 4.80248 21.75 5.02907 21.75H23.9709C24.1975 21.75 24.4203 21.6921 24.6182 21.5818C24.8162 21.4715 24.9826 21.3124 25.1017 21.1196C25.2209 20.9269 25.2887 20.7069 25.2989 20.4805C25.3091 20.2542 25.2613 20.029 25.1599 19.8263L23.0864 15.6781C23.0024 15.5104 22.9585 15.3255 22.9583 15.138V10.875C22.9583 8.63167 22.0672 6.48026 20.4809 4.89401C18.8947 3.30777 16.7433 2.41663 14.5 2.41663ZM14.5 25.375C13.75 25.3754 13.0184 25.1431 12.406 24.7103C11.7935 24.2775 11.3304 23.6654 11.0804 22.9583H17.9196C17.6696 23.6654 17.2065 24.2775 16.594 24.7103C15.9816 25.1431 15.2499 25.3754 14.5 25.375Z"
                                            fill="white" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>


                    <!-- Weather Card -->
                    <div class="bg-white rounded-[25px] p-3.5 flex items-center gap-3 mb-3">
                        <div class="w-[72px] h-[53px] flex items-center justify-center">
                            <img src="{{ asset('asset/img/cuaca.png') }}" alt="weather"
                                class="w-[68px] h-[38px] object-cover">
                        </div>
                        <div class="flex-1 flex flex-col gap-0.5">
                            <span class="text-hijau-tua text-sm font-medium">Semarang, Indonesia</span>
                            <span class="text-hijau-tua text-base font-semibold">Sunny</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-hijau-tua text-2xl font-bold">23°C</span>
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                               xmlns="http://www.w3.org/2000/svg" class="mt-2">
                                <path
                                    d="M11.4175 0.457707C11.1244 0.164642 10.727 -6.17587e-09 10.3125 0C9.89805 6.17587e-09 9.50057 0.164642 9.2075 0.457707C8.91444 0.750771 8.74979 1.14825 8.74979 1.56271C8.74979 1.97716 8.91444 2.37464 9.2075 2.66771L12.79 6.25021H1.5625C1.1481 6.25021 0.750671 6.41483 0.457646 6.70785C0.16462 7.00088 0 7.39831 0 7.81271C0 8.22711 0.16462 8.62454 0.457646 8.91756C0.750671 9.21059 1.1481 9.37521 1.5625 9.37521H12.79L9.2075 12.9577C8.91444 13.2508 8.74979 13.6483 8.74979 14.0627C8.74979 14.4772 8.91444 14.8746 9.2075 15.1677C9.50057 15.4608 9.89805 15.6254 10.3125 15.6254C10.727 15.6254 11.1244 15.4608 11.4175 15.1677L17.6675 8.91771C17.8126 8.77261 17.9278 8.60034 18.0063 8.41075C18.0849 8.22115 18.1253 8.01793 18.1253 7.81271C18.1253 7.60748 18.0849 7.40427 18.0063 7.21467C17.9278 7.02507 17.8126 6.8528 17.6675 6.70771L11.4175 0.457707Z"
                                    fill="#1F4E20" />
                            </svg>
                        </div>
                    </div>

                    <!-- Lahan Section -->
                    <div class="flex flex-col gap-2 mt-1">
                        <div class="flex flex-col">
                            <span class="text-hijau-tua text-base font-semibold">Lahan</span>
                            <div class="flex items-center justify-between">
                                <span class="text-hijau-tua text-sm font-medium">Jumlah : 12 lahan</span>
                                <div class="flex items-center gap-1.5">
                                    <span class="text-hijau-tua text-sm font-medium">Semua Lahan</span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="mt-2">
                                        <path
                                            d="M6.8505 0.274624C6.67466 0.0987853 6.43617 -3.70552e-09 6.1875 0C5.93883 3.70552e-09 5.70034 0.0987853 5.5245 0.274624C5.34866 0.450462 5.24988 0.688951 5.24988 0.937624C5.24988 1.1863 5.34866 1.42479 5.5245 1.60062L7.674 3.75012H0.9375C0.68886 3.75012 0.450403 3.8489 0.274587 4.02471C0.098772 4.20053 0 4.43898 0 4.68762C0 4.93626 0.098772 5.17472 0.274587 5.35054C0.450403 5.52635 0.68886 5.62512 0.9375 5.62512H7.674L5.5245 7.77462C5.34866 7.95046 5.24988 8.18895 5.24988 8.43762C5.24988 8.6863 5.34866 8.92479 5.5245 9.10062C5.70034 9.27646 5.93883 9.37525 6.1875 9.37525C6.43617 9.37525 6.67466 9.27646 6.8505 9.10062L10.6005 5.35062C10.6876 5.26357 10.7567 5.16021 10.8038 5.04645C10.8509 4.93269 10.8752 4.81076 10.8752 4.68762C10.8752 4.56449 10.8509 4.44256 10.8038 4.3288C10.7567 4.21504 10.6876 4.11168 10.6005 4.02462L6.8505 0.274624Z"
                                            fill="#1F4E20"/>
                                    </svg>
                                </div>
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
                                    <img src="{{ asset('asset/img/padi.svg') }}" alt="rice" class="w-6 h-6">
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
                                    <path
                                        d="M10.413 4.587C10.2372 4.41116 9.99867 4.31238 9.75 4.31238C9.50133 4.31238 9.26284 4.41116 9.087 4.587C8.91116 4.76284 8.81238 5.00133 8.81238 5.25C8.81238 5.49867 8.91116 5.73716 9.087 5.913L11.2365 8.0625H4.5C4.25136 8.0625 4.0129 8.16127 3.83709 8.33709C3.66127 8.5129 3.5625 8.75136 3.5625 9C3.5625 9.24864 3.66127 9.4871 3.83709 9.66291C4.0129 9.83873 4.25136 9.9375 4.5 9.9375H11.2365L9.087 12.087C8.91116 12.2628 8.81238 12.5013 8.81238 12.75C8.81238 12.9987 8.91116 13.2372 9.087 13.413C9.26284 13.5888 9.50133 13.6876 9.75 13.6876C9.99867 13.6876 10.2372 13.5888 10.413 13.413L14.163 9.663C14.2501 9.57594 14.3192 9.47258 14.3663 9.35882C14.4134 9.24507 14.4377 9.12314 14.4377 9C14.4377 8.87687 14.4134 8.75494 14.3663 8.64118C14.3192 8.52742 14.2501 8.42406 14.163 8.337L10.413 4.587Z"
                                        fill="white" />
                                </svg>
                            </div>
                        </div>

                        <!-- Lahan 2 -->
                        <div class="flex-1 bg-white rounded-[10px] border border-hijau-tua overflow-hidden">
                            <div class="p-3 flex flex-col gap-2">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-semibold text-black">Lahan 2</span>
                                    <div class="w-6 h-6 bg-hijau-tua rounded-xl flex items-center justify-center pl-0.5">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.375 7.08333H4.83083C5.3975 7.4375 5.91458 7.84125 6.375 8.27333V7.08333ZM3.54167 6.375C3.73292 2.74833 5.22042 0 7.08333 0C8.9675 0 10.4621 2.79083 10.625 6.46C11.6875 5.97125 12.8704 5.66667 14.1667 5.66667C10.0938 7.48708 11.5104 14.1667 7.08333 14.1667C2.83333 14.1667 4.20042 7.48708 0 5.66667C1.28917 5.66667 2.47917 5.95 3.54167 6.375ZM6.375 6.375V4.95833H4.42L4.27125 6.375H6.375ZM6.375 4.25V2.83333H4.99375C4.81667 3.25833 4.675 3.73292 4.55458 4.25H6.375ZM6.375 2.125V0.920833C5.98542 1.15458 5.63125 1.5725 5.3125 2.125H6.375ZM7.08333 0.708333V2.125H7.79167V2.83333H7.08333V4.25H8.5V4.95833H7.08333V6.375H9.20833V7.08333H7.08333V8.5H8.5V9.20833H7.24625C8.08917 10.2354 8.60625 11.3333 8.72667 12.2046C9.42792 11.0217 9.88833 9.095 9.91667 6.91333C9.87417 3.54167 8.59208 0.708333 7.08333 0.708333Z"
                                                fill="white" />
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
                                    <path
                                        d="M10.413 4.587C10.2372 4.41116 9.99867 4.31238 9.75 4.31238C9.50133 4.31238 9.26284 4.41116 9.087 4.587C8.91116 4.76284 8.81238 5.00133 8.81238 5.25C8.81238 5.49867 8.91116 5.73716 9.087 5.913L11.2365 8.0625H4.5C4.25136 8.0625 4.0129 8.16127 3.83709 8.33709C3.66127 8.5129 3.5625 8.75136 3.5625 9C3.5625 9.24864 3.66127 9.4871 3.83709 9.66291C4.0129 9.83873 4.25136 9.9375 4.5 9.9375H11.2365L9.087 12.087C8.91116 12.2628 8.81238 12.5013 8.81238 12.75C8.81238 12.9987 8.91116 13.2372 9.087 13.413C9.26284 13.5888 9.50133 13.6876 9.75 13.6876C9.99867 13.6876 10.2372 13.5888 10.413 13.413L14.163 9.663C14.2501 9.57594 14.3192 9.47258 14.3663 9.35882C14.4134 9.24507 14.4377 9.12314 14.4377 9C14.4377 8.87687 14.4134 8.75494 14.3663 8.64118C14.3192 8.52742 14.2501 8.42406 14.163 8.337L10.413 4.587Z"
                                        fill="white" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Lahan 1 Detail Card -->
                    <div class="bg-white rounded-[10px] border border-hijau-tua p-3 flex flex-col gap-3">
                        <!-- Title -->
                        <div class="py-1">
                            <span class="text-base font-semibold text-black">Lahan 1</span>
                        </div>

                          <!-- Automation Toggles -->
<div class="flex gap-2.5">
    <div
        class="flex-1 bg-hijau-paling-muda rounded-[10px] border border-hijau-tua p-2.5 flex items-center justify-between">
        <div class="flex items-center gap-2">
            <svg width="18" height="18" viewBox="0 0 20 20" fill="none"
                xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0">
                <path d="M9.28571 0C9.10714 0 8.92857 0.168067 8.57143 0.504202V1.84874H6.40505C5.71429 1.17647 5.71429 1.17647 5 1.84874C4.28571 2.52101 4.28571 2.52101 5 3.19328C5.71429 3.86555 5.71429 3.86555 6.37366 3.19328H8.57143V4.53782H10V3.19328H12.1742C12.8797 3.86555 12.8796 3.86555 13.5939 3.19328C14.3082 2.52101 14.3082 2.52101 13.5939 1.84874C12.8796 1.17647 12.8797 1.17647 12.1429 1.84874H10V0.504202C9.64286 0.168067 9.46429 0 9.28571 0ZM0 3.27731V14.0336H1.42857V3.27731H0ZM2.85714 5.29412L2.14286 4.62185V12.6891L2.85714 12.0168V5.29412ZM9.28571 5.21008C7.85714 5.21008 7.12723 5.21008 7.08795 6.55462H3.57143V10.5882H6.45647C7.14286 11.2605 7.85714 11.9328 9.28571 11.9328C10.7143 11.9328 11.4286 11.2605 12.1429 10.5882C15 10.5882 15 10.5882 15 11.9328V13.2773H19.2857V10.5882C19.2857 7.89916 17.8571 6.55462 15 6.55462H11.4286C11.4442 5.21008 10.7143 5.21008 9.28571 5.21008ZM14.2857 13.9496V14.6218H20V13.9496H14.2857ZM17.1429 15.2941C17.1429 15.2941 15.4097 17.4647 15.7143 18.7395C15.9027 19.5277 16.2844 20 17.1429 20C18.0013 20 18.383 19.5277 18.5714 18.7395C18.876 17.4647 17.1429 15.2941 17.1429 15.2941Z" fill="#9E9E9E" />
            </svg>
            <span class="text-[10px] text-black leading-[1.3]">Penyiraman<br />Otomatis</span>
        </div>
        <label class="toggle-custom flex items-center justify-center">
            <input type="checkbox" checked>
            <span class="slider"></span>
        </label>
    </div>

    <div
        class="flex-1 bg-hijau-paling-muda rounded-[10px] border border-hijau-tua p-2.5 flex items-center justify-between">
        <div class="flex items-center gap-2">
            <svg width="18" height="18" viewBox="0 0 26 26" fill="none"
                xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0">
                <path d="M9.02992 0.00030895C4.47484 -0.00730824 0.245274 0.125739 0.298594 0.42027L1.41984 2.2555C4.43422 1.99652 7.30844 1.90257 10.1877 1.92187C12.8893 1.93964 15.5959 2.05746 18.4194 2.23113L20.0038 0.541129C19.7752 0.198864 14.1944 0.00894176 9.02992 0.00030895ZM9.22289 2.83441C6.72953 2.8405 4.23109 2.93547 1.62145 3.15535C0.514922 9.43496 -0.0980078 17.0978 1.34215 21.8256L0 23.3998C6.50609 23.8873 13.128 24.0447 19.4299 23.7197L17.9116 21.9119C18.8916 16.5189 18.587 9.15566 17.9217 3.11675C15.3217 2.96136 12.8284 2.85777 10.3401 2.83797L17.1549 9.09472H13.5342C13.7272 10.2678 14.5702 11.8521 15.4588 13.3197C15.9616 14.1525 16.4745 14.96 16.8655 15.6709C17.2565 16.3818 17.5561 16.976 17.5561 17.5752C17.5561 18.9971 16.5963 20.165 15.1846 20.9217C13.7729 21.6834 11.8788 22.0947 9.78656 22.0947C7.69438 22.0947 5.80023 21.6834 4.38852 20.9217C2.9768 20.165 2.01703 18.9971 2.01703 17.5752C2.01703 16.9658 2.33188 16.3717 2.7432 15.6506C3.15453 14.9295 3.68774 14.117 4.2057 13.274C5.11977 11.7963 5.95258 10.2018 6.06938 9.09472H2.06781L9.22289 2.83441ZM9.78148 3.56414L4.50531 8.18066H6.95805L6.99359 8.59707C7.1307 10.217 6.03383 12.0502 4.98266 13.7564C4.45453 14.6096 3.92641 15.417 3.54047 16.1025C3.14945 16.783 2.93109 17.3721 2.93109 17.5752C2.93109 18.3166 3.28656 18.9717 3.9518 19.5353C6.70414 19.19 8.11586 18.9971 9.35492 18.9564C9.38539 18.5248 9.44125 18.0932 9.51234 17.6768C7.65375 17.7936 5.94242 17.2959 4.25648 16.6967C5.01313 15.2342 6.40453 14.2135 7.65883 14.2185C7.89242 14.2185 8.12094 14.249 8.3393 14.3252C8.90805 14.508 9.42094 15.5287 9.76117 16.3869C9.87289 15.8537 9.97953 15.3967 10.0252 15.0615V15.0564C10.0709 14.7416 9.94398 13.8377 9.78148 13.0912C9.66469 12.5529 9.54281 12.0807 9.48188 11.8572C9.16195 11.8572 8.87758 11.7963 8.68969 11.6033C7.39984 10.2627 8.23773 7.78457 9.34477 6.40332C10.1319 7.71347 11.1577 9.12519 12.1885 10.1002C11.9651 10.8518 11.5588 11.4561 10.7717 11.7252C10.6651 11.7353 10.533 11.7506 10.401 11.7709C10.4721 12.035 10.5737 12.4311 10.6752 12.8932C10.7413 13.1826 10.8022 13.4822 10.853 13.7818C11.1221 13.533 11.4319 13.3045 11.6858 13.2943H11.7416C13.1635 13.4264 14.7733 14.7975 15.1795 16.7982C13.783 16.1584 12.1834 16.5291 10.919 15.2646C10.7768 16.2092 10.3807 17.6311 10.2741 18.9615C11.4979 19.0021 12.9096 19.1951 15.6213 19.5353C16.2866 18.9717 16.642 18.3166 16.642 17.5752C16.642 17.3619 16.4338 16.783 16.0631 16.1127C15.6924 15.4373 15.1897 14.64 14.6768 13.792C13.6561 12.1061 12.5795 10.2728 12.5795 8.63769V8.18066H14.8088L9.78148 3.56414ZM9.78656 19.8553C8.65414 19.8553 7.4557 20.0076 5.1807 20.2971C6.38422 20.8506 7.99906 21.1807 9.78656 21.1807C11.5741 21.1807 13.1889 20.8506 14.3924 20.2971C12.1174 20.0076 10.919 19.8553 9.78656 19.8553Z" fill="#AC7F5E" />
            </svg>
            <span class="text-[10px] text-black leading-[1.3]">Pemupukan<br />Otomatis</span>
        </div>
        <label class="toggle-custom flex items-center justify-center">
            <input type="checkbox">
            <span class="slider"></span>
        </label>
    </div>
</div>
                        <!-- Sensor Data -->
                        <div class="flex flex-col gap-2.5">
                            <!-- NPK -->
                            <div
                                class="bg-white rounded-[10px] border border-hijau-tua p-3 flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <img src="{{ asset('asset/img/npk.png') }}" alt="npk" class="w-[35px] h-[35px]">
                                    <span class="text-base font-semibold text-hijau-tua">NPK</span>
                                </div>
                                <span class="text-base font-semibold text-hijau-tua">50ppm</span>
                            </div>

                            <!-- Suhu Tanah -->
                            <div
                                class="bg-white rounded-[10px] border border-hijau-tua p-3 flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <img src="{{ asset('asset/img/suhutanah.svg') }}" alt="temp"
                                        class="w-[35px] h-[35px]">
                                    <span class="text-base font-semibold text-hijau-tua">Suhu Tanah</span>
                                </div>
                                <span class="text-base font-semibold text-hijau-tua">25°C</span>
                            </div>

                            <!-- pH Tanah -->
                            <div
                                class="bg-white rounded-[10px] border border-hijau-tua p-3 flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <img src="{{ asset('asset/img/phtanah.svg') }}" alt="ph"
                                        class="w-[35px] h-[35px]">
                                    <span class="text-base font-semibold text-hijau-tua">pH Tanah</span>
                                </div>
                                <span class="text-base font-semibold text-hijau-tua">7.5</span>
                            </div>

                            <!-- Kelembaban Tanah -->
                            <div
                                class="bg-white rounded-[10px] border border-hijau-tua p-3 flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <img src="{{ asset('asset/img/kelembapantanah.svg') }}" alt="humidity"
                                        class="w-[35px] h-[35px]">
                                    <span class="text-base font-semibold text-hijau-tua">Kelembaban Tanah</span>
                                </div>
                                <span class="text-base font-semibold text-hijau-tua">5%</span>
                            </div>

                            <!-- Suhu Lingkungan -->
                            <div
                                class="bg-white rounded-[10px] border border-hijau-tua p-3 flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <img src="{{ asset('asset/img/suhulingkungan.svg') }}" alt="temp"
                                        class="w-[35px] h-[35px]">
                                    <span class="text-base font-semibold text-hijau-tua">Suhu Lingkungan</span>
                                </div>
                                <span class="text-base font-semibold text-hijau-tua">30°C</span>
                            </div>

                            <!-- Kelembaban Lingkungan -->
                            <div
                                class="bg-white rounded-[10px] border border-hijau-tua p-3 flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <img src="{{ asset('asset/img/kelembapanlingkungan.svg') }}" alt="humidity"
                                        class="w-[35px] h-[35px]">
                                    <span class="text-base font-semibold text-hijau-tua">Kelembaban Lingkungan</span>
                                </div>
                                <span class="text-base font-semibold text-hijau-tua">25%</span>
                            </div>
                        </div>

                        <!-- Detail Button -->
                        <div class="bg-hijau-tua rounded-[10px] p-3 flex items-center justify-between cursor-pointer">
                            <span class="text-base font-semibold text-white">Lihat Detail Lahan</span>
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg"  class="mt-2">
                                <path
                                    d="M11.4175 0.457707C11.1244 0.164642 10.727 -6.17587e-09 10.3125 0C9.89805 6.17587e-09 9.50057 0.164642 9.2075 0.457707C8.91444 0.750771 8.74979 1.14825 8.74979 1.56271C8.74979 1.97716 8.91444 2.37464 9.2075 2.66771L12.79 6.25021H1.5625C1.1481 6.25021 0.750671 6.41483 0.457646 6.70785C0.16462 7.00088 0 7.39831 0 7.81271C0 8.22711 0.16462 8.62454 0.457646 8.91756C0.750671 9.21059 1.1481 9.37521 1.5625 9.37521H12.79L9.2075 12.9577C8.91444 13.2508 8.74979 13.6483 8.74979 14.0627C8.74979 14.4772 8.91444 14.8746 9.2075 15.1677C9.50057 15.4608 9.89805 15.6254 10.3125 15.6254C10.727 15.6254 11.1244 15.4608 11.4175 15.1677L17.6675 8.91771C17.8126 8.77261 17.9278 8.60034 18.0063 8.41075C18.0849 8.22115 18.1253 8.01793 18.1253 7.81271C18.1253 7.60748 18.0849 7.40427 18.0063 7.21467C17.9278 7.02507 17.8126 6.8528 17.6675 6.70771L11.4175 0.457707Z"
                                    fill="white" />
                            </svg>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        </div>

    @endsection
