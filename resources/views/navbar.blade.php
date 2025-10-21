<!doctype html>
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
    </style>
</head>

<body class="bg-hijau-paling-muda font-poppins min-w-[402px]">
    @yield('content')
        <!-- Bottom Navigation -->
    <div class="fixed bottom-0 left-0 right-0 w-full h-[101px] z-40">
        <img src="{{ asset('img/subtract.svg') }}" alt="nav-bg" class="absolute w-full h-[72px] bottom-0">

        <!-- Nav Items -->
        <div class="relative h-full flex items-end pb-6 px-8 justify-between">
            <!-- Beranda -->
            <a href="{{ route('beranda') }}" class="flex flex-col items-center gap-1">
                <div class="w-[58px] h-[58px] bg-hijau-tua rounded-full flex items-center justify-center -mb-7">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.52 5.823C0 6.77 0 7.915 0 10.203V11.725C0 15.625 -1.19209e-07 17.576 1.172 18.788C2.344 20 4.229 20 8 20H12C15.771 20 17.657 20 18.828 18.788C19.999 17.576 20 15.626 20 11.725V10.204C20 7.915 20 6.771 19.48 5.823C18.962 4.874 18.013 4.286 16.116 3.108L14.116 1.867C12.111 0.622 11.108 0 10 0C8.892 0 7.89 0.622 5.884 1.867L3.884 3.108C1.987 4.286 1.039 4.874 0.52 5.823ZM9.25 16C9.25 16.1989 9.32902 16.3897 9.46967 16.5303C9.61032 16.671 9.80109 16.75 10 16.75C10.1989 16.75 10.3897 16.671 10.5303 16.5303C10.671 16.3897 10.75 16.1989 10.75 16V13C10.75 12.8011 10.671 12.6103 10.5303 12.4697C10.3897 12.329 10.1989 12.25 10 12.25C9.80109 12.25 9.61032 12.329 9.46967 12.4697C9.32902 12.6103 9.25 12.8011 9.25 13V16Z" fill="white"/>
                      
                    </svg>
                </div>
                <span class="text-sm font-medium text-hijau-tua mt-8">Beranda</span>
            </a>

            <!-- Statistik -->
            <a href="#" class="flex flex-col items-center gap-1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 3v18h18" stroke="#9E9E9E" stroke-width="2" fill="none"/>
                    <path d="M7 14l3-3 3 3 4-4" stroke="#9E9E9E" stroke-width="2" fill="none" stroke-linecap="round"/>
                </svg>
                <span class="text-sm font-medium text-abu-abu">Statistik</span>
            </a>

            <!-- Lahan -->
            <a href="#" class="flex flex-col items-center gap-1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2L2 7l10 5 10-5-10-5z" stroke="#9E9E9E" stroke-width="2" fill="none"/>
                    <path d="M2 17l10 5 10-5" stroke="#9E9E9E" stroke-width="2" fill="none"/>
                    <path d="M2 12l10 5 10-5" stroke="#9E9E9E" stroke-width="2" fill="none"/>
                </svg>
                <span class="text-sm font-medium text-abu-abu">Lahan</span>
            </a>

            <!-- Setelan -->
            <a href="#" class="flex flex-col items-center gap-1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" stroke="#9E9E9E" stroke-width="2" fill="none"/>
                    <path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z" stroke="#9E9E9E" stroke-width="2" fill="none"/>
                </svg>
                <span class="text-sm font-medium text-abu-abu">Setelan</span>
            </a>
        </div>
    </div>
</body>

</html>