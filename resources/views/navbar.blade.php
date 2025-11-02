<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Smart Farming')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'hijau-tua': '#1F4E20',
                        'hijau-muda': '#7FD083',
                        'hijau-paling-muda': '#F4FAF4',
                        'abu-abu': '#9E9E9E',
                        'abu-muda': '#EEEEEE',
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .toggle-custom {
            position: relative;
            width: 36px;
            height: 20px;
            flex-shrink: 0;
        }

        .toggle-custom input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #F4FAF4;
            border: 1px solid #C8C6C1;
            transition: .3s;
            border-radius: 9999px;
        }

        .slider::before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 2px;
            bottom: 1px;
            background-color: #F4FAF4;
            border-radius: 50%;
            transition: .3s;
            box-shadow: inset 0 0 0 1px #C8C6C1;
        }

        .toggle-custom input:checked+.slider {
            background-color: #1F4E20;
            border-color: #1F4E20;
        }

        .toggle-custom input:checked+.slider::before {
            transform: translateX(12px);
        }

        @media (max-width: 480px) {
            .toggle-custom {
                width: 32px;
                height: 18px;
            }

            .slider::before {
                width: 14px;
                height: 14px;
                left: 2px;
                bottom: 1px;
            }

            .toggle-custom input:checked+.slider::before {
                transform: translateX(12px);
            }
        }

        .nav-item {
            position: relative;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-bubble {
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%) scale(0);
            width: 60px;
            height: 60px;
            background-color: #1F4E20;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(31, 78, 32, 0.3);
            transition: transform 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            z-index: 10;
        }

        .nav-item.active .nav-bubble {
            transform: translateX(-50%) scale(1);
        }

        .nav-icon-wrapper {
            transition: all 0.3s ease;
        }

        .nav-item.active .nav-icon-wrapper {
            opacity: 0;
            transform: scale(0);
        }

        .nav-item.active .nav-label {
            color: #1F4E20;
            font-weight: 600;
        }

        .nav-item:not(.active) .nav-label {
            color: #C8C6C1;
            font-weight: 500;
        }
         .custom-scrollbar::-webkit-scrollbar {
                width: 6px;
            }
            
            .custom-scrollbar::-webkit-scrollbar-track {
                background: transparent;
            }
            
            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: #d1d5db;
                border-radius: 3px;
            }
            
            .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                background: #9ca3af;
            }
    </style>
</head>

<body class="bg-hijau-paling-muda font-poppins min-w-[402px]">
    @yield('content')
    <!-- Bottom Navigation -->
    <div
        class="fixed bottom-0 left-0 right-0 w-full h-[100px] bg-white rounded-t-[20px] shadow-[0_-2px_10px_rgba(0,0,0,0.08)] flex justify-around items-end px-6 pb-4 z-40">


        <!-- Beranda -->
        <a href="{{ route('beranda') }}" class="nav-item flex flex-col items-center" data-page="beranda">
            <div class="nav-bubble">
                <!-- SVG aktif (putih di atas bubble hijau) -->
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.52 5.823C0 6.77 0 7.915 0 10.203V11.725C0 15.625 0 17.576 1.172 18.788C2.344 20 4.229 20 8 20H12C15.771 20 17.657 20 18.828 18.788C19.999 17.576 20 15.626 20 11.725V10.204C20 7.915 20 6.771 19.48 5.823C18.962 4.874 18.013 4.286 16.116 3.108L14.116 1.867C12.111 0.622 11.108 0 10 0C8.892 0 7.89 0.622 5.884 1.867L3.884 3.108C1.987 4.286 1.039 4.874 0.52 5.823ZM9.25 16C9.25 16.1989 9.32902 16.3897 9.46967 16.5303C9.61032 16.671 9.80109 16.75 10 16.75C10.1989 16.75 10.3897 16.671 10.5303 16.5303C10.671 16.3897 10.75 16.1989 10.75 16V13C10.75 12.8011 10.671 12.6103 10.5303 12.4697C10.3897 12.329 10.1989 12.25 10 12.25C9.80109 12.25 9.61032 12.329 9.46967 12.4697C9.32902 12.6103 9.25 12.8011 9.25 13V16Z"
                        fill="white" />
                </svg>
            </div>

            <div
                class="nav-icon-wrapper w-[60px] h-[60px] bg-hijau-tua rounded-full flex items-center justify-center shadow-[0_3px_6px_rgba(0,0,0,0.15)]">
                <!-- SVG utama -->
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.52 5.823C0 6.77 0 7.915 0 10.203V11.725C0 15.625 0 17.576 1.172 18.788C2.344 20 4.229 20 8 20H12C15.771 20 17.657 20 18.828 18.788C19.999 17.576 20 15.626 20 11.725V10.204C20 7.915 20 6.771 19.48 5.823C18.962 4.874 18.013 4.286 16.116 3.108L14.116 1.867C12.111 0.622 11.108 0 10 0C8.892 0 7.89 0.622 5.884 1.867L3.884 3.108C1.987 4.286 1.039 4.874 0.52 5.823ZM9.25 16C9.25 16.1989 9.32902 16.3897 9.46967 16.5303C9.61032 16.671 9.80109 16.75 10 16.75C10.1989 16.75 10.3897 16.671 10.5303 16.5303C10.671 16.3897 10.75 16.1989 10.75 16V13C10.75 12.8011 10.671 12.6103 10.5303 12.4697C10.3897 12.329 10.1989 12.25 10 12.25C9.80109 12.25 9.61032 12.329 9.46967 12.4697C9.32902 12.6103 9.25 12.8011 9.25 13V16Z"
                        fill="white" />
                </svg>
            </div>

            <span class="nav-label text-sm font-semibold text-hijau-tua mt-2">Beranda</span>
        </a>



        <!-- Statistik -->
        <a href="{{ route('statistik') }}" class="nav-item flex flex-col items-center" data-page="statistik">
            <div class="nav-bubble">
                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <!-- Kotak -->
                    <path
                        d="M1 7.75556C1 5.39111 1 4.20889 1.46022 3.30533C1.86501 2.51091 2.51091 1.86501 3.30533 1.46022C4.20889 1 5.39111 1 7.75556 1H13.2444C15.6089 1 16.7911 1 17.6947 1.46022C18.4891 1.86501 19.135 2.51091 19.5398 3.30533C20 4.20889 20 5.39111 20 7.75556V13.2444C20 15.6089 20 16.7911 19.5398 17.6947C19.135 18.4891 18.4891 19.135 17.6947 19.5398C16.7911 20 15.6089 20 13.2444 20H7.75556C5.39111 20 4.20889 20 3.30533 19.5398C2.51091 19.135 1.86501 18.4891 1.46022 17.6947C1 16.7911 1 15.6089 1 13.2444V7.75556Z"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <!-- Garis tengah (ikon baru) -->
                    <path d="M14.4444 8L10.75 11.6944L8.63889 9.58333L6 12.2222" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>

            <div class="nav-icon-wrapper">
                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <!-- Kotak -->
                    <path
                        d="M1 7.75556C1 5.39111 1 4.20889 1.46022 3.30533C1.86501 2.51091 2.51091 1.86501 3.30533 1.46022C4.20889 1 5.39111 1 7.75556 1H13.2444C15.6089 1 16.7911 1 17.6947 1.46022C18.4891 1.86501 19.135 2.51091 19.5398 3.30533C20 4.20889 20 5.39111 20 7.75556V13.2444C20 15.6089 20 16.7911 19.5398 17.6947C19.135 18.4891 18.4891 19.135 17.6947 19.5398C16.7911 20 15.6089 20 13.2444 20H7.75556C5.39111 20 4.20889 20 3.30533 19.5398C2.51091 19.135 1.86501 18.4891 1.46022 17.6947C1 16.7911 1 15.6089 1 13.2444V7.75556Z"
                        stroke="#C8C6C1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <!-- Garis tengah (ikon baru) -->
                    <path d="M14.4444 8L10.75 11.6944L8.63889 9.58333L6 12.2222" stroke="#9E9E9E" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>

            <span class="nav-label text-sm font-medium text-[#C8C6C1] mt-2">Statistik</span>
        </a>


        <!-- Lahan -->
        <a href="{{ route('lahan') }}" class="nav-item flex flex-col items-center" data-page="lahan">
            <div class="nav-bubble">
                <!-- Ikon aktif (putih) -->
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.75 0C2.02065 0 1.32118 0.289731 0.805456 0.805456C0.289731 1.32118 0 2.02065 0 2.75V5.75C0 6.47935 0.289731 7.17882 0.805456 7.69454C1.32118 8.21027 2.02065 8.5 2.75 8.5H5.75C6.47935 8.5 7.17882 8.21027 7.69454 7.69454C8.21027 7.17882 8.5 6.47935 8.5 5.75V2.75C8.5 2.02065 8.21027 1.32118 7.69454 0.805456C7.17882 0.289731 6.47935 0 5.75 0H2.75ZM10 2.75C10 2.02065 10.2897 1.32118 10.8055 0.805456C11.3212 0.289731 12.0207 0 12.75 0H15.75C16.4793 0 17.1788 0.289731 17.6945 0.805456C18.2103 1.32118 18.5 2.02065 18.5 2.75V5.75C18.5 6.47935 18.2103 7.17882 17.6945 7.69454C17.1788 8.21027 16.4793 8.5 15.75 8.5H12.75C12.0207 8.5 11.3212 8.21027 10.8055 7.69454C10.2897 7.17882 10 6.47935 10 5.75V2.75ZM2.75 10C2.02065 10 1.32118 10.2897 0.805456 10.8055C0.289731 11.3212 0 12.0207 0 12.75V15.75C0 16.4793 0.289731 17.1788 0.805456 17.6945C1.32118 18.2103 2.02065 18.5 2.75 18.5H5.75C6.47935 18.5 7.17882 18.2103 7.69454 17.6945C8.21027 17.1788 8.5 16.4793 8.5 15.75V12.75C8.5 12.0207 8.21027 11.3212 7.69454 10.8055C7.17882 10.2897 6.47935 10 5.75 10H2.75ZM12.75 10C12.0207 10 11.3212 10.2897 10.8055 10.8055C10.2897 11.3212 10 12.0207 10 12.75V15.75C10 16.4793 10.2897 17.1788 10.8055 17.6945C11.3212 18.2103 12.0207 18.5 12.75 18.5H15.75C16.4793 18.5 17.1788 18.2103 17.6945 17.6945C18.2103 17.1788 18.5 16.4793 18.5 15.75V12.75C18.5 12.0207 18.2103 11.3212 17.6945 10.8055C17.1788 10.2897 16.4793 10 15.75 10H12.75Z"
                        fill="white" />
                </svg>
            </div>

            <div class="nav-icon-wrapper">
                <!-- Ikon tidak aktif (abu-abu) -->
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.75 0C2.02065 0 1.32118 0.289731 0.805456 0.805456C0.289731 1.32118 0 2.02065 0 2.75V5.75C0 6.47935 0.289731 7.17882 0.805456 7.69454C1.32118 8.21027 2.02065 8.5 2.75 8.5H5.75C6.47935 8.5 7.17882 8.21027 7.69454 7.69454C8.21027 7.17882 8.5 6.47935 8.5 5.75V2.75C8.5 2.02065 8.21027 1.32118 7.69454 0.805456C7.17882 0.289731 6.47935 0 5.75 0H2.75ZM10 2.75C10 2.02065 10.2897 1.32118 10.8055 0.805456C11.3212 0.289731 12.0207 0 12.75 0H15.75C16.4793 0 17.1788 0.289731 17.6945 0.805456C18.2103 1.32118 18.5 2.02065 18.5 2.75V5.75C18.5 6.47935 18.2103 7.17882 17.6945 7.69454C17.1788 8.21027 16.4793 8.5 15.75 8.5H12.75C12.0207 8.5 11.3212 8.21027 10.8055 7.69454C10.2897 7.17882 10 6.47935 10 5.75V2.75ZM2.75 10C2.02065 10 1.32118 10.2897 0.805456 10.8055C0.289731 11.3212 0 12.0207 0 12.75V15.75C0 16.4793 0.289731 17.1788 0.805456 17.6945C1.32118 18.2103 2.02065 18.5 2.75 18.5H5.75C6.47935 18.5 7.17882 18.2103 7.69454 17.6945C8.21027 17.1788 8.5 16.4793 8.5 15.75V12.75C8.5 12.0207 8.21027 11.3212 7.69454 10.8055C7.17882 10.2897 6.47935 10 5.75 10H2.75ZM12.75 10C12.0207 10 11.3212 10.2897 10.8055 10.8055C10.2897 11.3212 10 12.0207 10 12.75V15.75C10 16.4793 10.2897 17.1788 10.8055 17.6945C11.3212 18.2103 12.0207 18.5 12.75 18.5H15.75C16.4793 18.5 17.1788 18.2103 17.6945 17.6945C18.2103 17.1788 18.5 16.4793 18.5 15.75V12.75C18.5 12.0207 18.2103 11.3212 17.6945 10.8055C17.1788 10.2897 16.4793 10 15.75 10H12.75Z"
                        fill="#C8C6C1" />
                </svg>
            </div>

            <span class="nav-label text-sm font-medium text-[#C8C6C1] mt-2">Lahan</span>
        </a>


        <!-- Setelan -->
        <a href="{{ route('setelan') }}" class="nav-item flex flex-col items-center" data-page="setelan">
            <div class="nav-bubble">
                <!-- Ikon aktif (warna putih) -->
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.6001 21.076L19.0601 17.924C19.6441 17.587 19.9351 17.419 20.1471 17.184C20.3347 16.9758 20.4764 16.7305 20.5631 16.464C20.6601 16.163 20.6601 15.827 20.6601 15.157V8.84305C20.6601 8.17305 20.6601 7.83704 20.5621 7.53604C20.4754 7.26955 20.3337 7.02425 20.1461 6.81604C19.9361 6.58204 19.6461 6.41404 19.0671 6.08004L13.6001 2.92405C13.0171 2.58705 12.7261 2.41905 12.4161 2.35405C12.1418 2.29572 11.8584 2.29572 11.5841 2.35405C11.2741 2.41905 10.9831 2.58705 10.4001 2.92405L4.93809 6.07705C4.35609 6.41305 4.06509 6.58104 3.85409 6.81604C3.66651 7.02425 3.52478 7.26955 3.43809 7.53604C3.34009 7.83804 3.34009 8.17404 3.34009 8.84704V15.152C3.34009 15.825 3.34009 16.162 3.43809 16.463C3.52478 16.7295 3.66651 16.9748 3.85409 17.183C4.06509 17.419 4.35709 17.587 4.93909 17.923L10.3991 21.076C10.9831 21.413 11.2741 21.581 11.5841 21.646C11.8581 21.705 12.1421 21.705 12.4161 21.646C12.7261 21.581 13.0171 21.413 13.6001 21.076Z"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12Z"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>

            <div class="nav-icon-wrapper">
                <!-- Ikon tidak aktif (abu-abu) -->
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.6001 21.076L19.0601 17.924C19.6441 17.587 19.9351 17.419 20.1471 17.184C20.3347 16.9758 20.4764 16.7305 20.5631 16.464C20.6601 16.163 20.6601 15.827 20.6601 15.157V8.84305C20.6601 8.17305 20.6601 7.83704 20.5621 7.53604C20.4754 7.26955 20.3337 7.02425 20.1461 6.81604C19.9361 6.58204 19.6461 6.41404 19.0671 6.08004L13.6001 2.92405C13.0171 2.58705 12.7261 2.41905 12.4161 2.35405C12.1418 2.29572 11.8584 2.29572 11.5841 2.35405C11.2741 2.41905 10.9831 2.58705 10.4001 2.92405L4.93809 6.07705C4.35609 6.41305 4.06509 6.58104 3.85409 6.81604C3.66651 7.02425 3.52478 7.26955 3.43809 7.53604C3.34009 7.83804 3.34009 8.17404 3.34009 8.84704V15.152C3.34009 15.825 3.34009 16.162 3.43809 16.463C3.52478 16.7295 3.66651 16.9748 3.85409 17.183C4.06509 17.419 4.35709 17.587 4.93909 17.923L10.3991 21.076C10.9831 21.413 11.2741 21.581 11.5841 21.646C11.8581 21.705 12.1421 21.705 12.4161 21.646C12.7261 21.581 13.0171 21.413 13.6001 21.076Z"
                        stroke="#C8C6C1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12Z"
                        stroke="#C8C6C1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <span class="nav-label text-sm font-medium text-[#C8C6C1] mt-2">Setelan</span>
        </a>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const navItems = document.querySelectorAll('.nav-item');

                // Fungsi untuk menghapus active dari semua nav
                function removeAllActive() {
                    navItems.forEach(item => {
                        item.classList.remove('active');
                        const iconWrapper = item.querySelector('.nav-icon-wrapper');
                        const label = item.querySelector('.nav-label');
                        const iconSvg = iconWrapper.querySelector('svg');

                        // Reset ke state default (non-active)
                        iconWrapper.classList.remove('w-[60px]', 'h-[60px]', 'bg-hijau-tua', 'rounded-full',
                            'shadow-[0_3px_6px_rgba(0,0,0,0.15)]', 'flex', 'items-center', 'justify-center');
                        label.classList.remove('font-semibold', 'text-hijau-tua');
                        label.classList.add('font-medium', 'text-[#C8C6C1]');

                        // Ubah warna icon SVG jadi abu-abu
                        const paths = iconSvg.querySelectorAll('path');
                        paths.forEach(path => {
                            if (path.hasAttribute('fill')) {
                                path.setAttribute('fill', '#C8C6C1');
                            }
                            if (path.hasAttribute('stroke')) {
                                path.setAttribute('stroke', '#C8C6C1');
                            }
                        });

                        // Resize SVG jadi 24x24
                        iconSvg.setAttribute('width', '24');
                        iconSvg.setAttribute('height', '24');
                    });
                }

                // Fungsi untuk set active
                function setActive(item) {
                    item.classList.add('active');
                    const iconWrapper = item.querySelector('.nav-icon-wrapper');
                    const label = item.querySelector('.nav-label');
                    const iconSvg = iconWrapper.querySelector('svg');

                    iconWrapper.classList.add('w-[60px]', 'h-[60px]', 'bg-hijau-tua', 'rounded-full',
                        'shadow-[0_3px_6px_rgba(0,0,0,0.15)]', 'flex', 'items-center', 'justify-center');
                    label.classList.remove('font-medium', 'text-[#C8C6C1]');
                    label.classList.add('font-semibold', 'text-hijau-tua');

                    // Ubah warna icon SVG jadi putih
                    const paths = iconSvg.querySelectorAll('path');
                    paths.forEach(path => {
                        if (path.hasAttribute('fill')) {
                            path.setAttribute('fill', 'white');
                        }
                        if (path.hasAttribute('stroke')) {
                            path.setAttribute('stroke', 'white');
                        }
                    });

                    // Resize SVG jadi 26x26
                    iconSvg.setAttribute('width', '26');
                    iconSvg.setAttribute('height', '26');
                }

                // Deteksi halaman saat ini berdasarkan URL
                const currentPath = window.location.pathname;

                if (currentPath === '/' || currentPath === '') {
                    const berandaItem = document.querySelector('[data-page="beranda"]');
                    if (berandaItem) {
                        removeAllActive();
                        setActive(berandaItem);
                    }
                } else if (currentPath === '/notifikasi') {
                    // 🔹 Khusus halaman notifikasi, tetap aktifkan Beranda
                    const berandaItem = document.querySelector('[data-page="beranda"]');
                    if (berandaItem) {
                        removeAllActive();
                        setActive(berandaItem);
                    }
                } else if (currentPath === '/profil') {
                    // 🔹 Khusus halaman notifikasi, tetap aktifkan Beranda
                    const setelanaItem = document.querySelector('[data-page="setelan"]');
                    if (setelanaItem) {
                        removeAllActive();
                        setActive(setelanaItem);
                    }  
                  } else if (currentPath === '/zona') {
                    // 🔹 Khusus halaman notifikasi, tetap aktifkan Beranda
                    const setelanaItem = document.querySelector('[data-page="setelan"]');
                    if (setelanaItem) {
                        removeAllActive();
                        setActive(setelanaItem);
                    }
                   } else if (currentPath === '/tentang') {
                    // 🔹 Khusus halaman notifikasi, tetap aktifkan Beranda
                    const setelanaItem = document.querySelector('[data-page="setelan"]');
                    if (setelanaItem) {
                        removeAllActive();
                        setActive(setelanaItem);
                    }
                    } else if (currentPath === '/notif') {
                    // 🔹 Khusus halaman notifikasi, tetap aktifkan Beranda
                    const setelanaItem = document.querySelector('[data-page="setelan"]');
                    if (setelanaItem) {
                        removeAllActive();
                        setActive(setelanaItem);
                    }
                } else {
                    // Untuk path lainnya, cek berdasarkan data-page
                    navItems.forEach(item => {
                        const page = item.getAttribute('data-page');
                        if (currentPath.includes(page)) {
                            removeAllActive();
                            setActive(item);
                        }
                    });
                }


                // Handle click
                navItems.forEach(item => {
                    item.addEventListener('click', function(e) {
                        removeAllActive();
                        setActive(this);
                    });
                });
            });
        </script>

</body>

</html>
