@extends('navbar')
@section('title', 'Lahan')
@section('content')

    <div class="min-h-screen bg-[#F5FFF5]-50 p-4 pb-[140px]">

        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-3xl font-semibold text-gray-800 mb-1">Lahan</h1>
            <p class="text-sm text-gray-700">Jumlah: <span id="jumlah-lahan">12</span> lahan</p>
        </div>

        <!-- Filter Tanaman -->
        <div class="flex gap-2 mb-8 overflow-x-auto filter-tanaman">
            
            @foreach (['Jagung', 'Padi', 'Tomat', 'Cabai', 'Kentang'] as $tanaman)
                <div data-filter="{{ $tanaman }}" class="cursor-pointer rounded-lg bg-hijau-tua text-white px-4 py-2 text-sm font-medium">
                    <div>{{ $tanaman }}</div>
                </div>
            @endforeach
        </div>

        <!-- Tambah Lahan Button -->
        <div class="mb-6">
            <button id="btn-tambah-lahan"
                class="w-full h-14 bg-hijau-tua text-white rounded-lg px-4 py-3 text-sm font-medium flex items-center justify-center gap-2 hover:bg-green-800 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <path
                        d="M12.5 0C5.59625 0 0 5.59625 0 12.5C0 19.4037 5.59625 25 12.5 25C19.4037 25 25 19.4037 25 12.5C25 5.59625 19.4037 0 12.5 0ZM18.75 13.75H13.75V18.75H11.25V13.75H6.25V11.25H11.25V6.25H13.75V11.25H18.75V13.75Z"
                        fill="white" />
                </svg>
                Tambah Lahan
            </button>
        </div>

        <!-- Lahan Cards -->
        <div class="grid grid-cols-2 gap-4" id="lahan-container">
            @for ($i = 1; $i <= 12; $i++)
                @php
                    $data = [
                        1 => ['luas' => '2 Ha', 'tanaman' => 'Padi', 'icon' => 'padi'],
                        2 => ['luas' => '4 Ha', 'tanaman' => 'Jagung', 'icon' => 'jagung'],
                        3 => ['luas' => '1 Ha', 'tanaman' => 'Cabai', 'icon' => 'cabai'],
                        4 => ['luas' => '5 Ha', 'tanaman' => 'Tomat', 'icon' => 'tomat'],
                        5 => ['luas' => '2 Ha', 'tanaman' => 'Kentang', 'icon' => 'kentang'],
                        6 => ['luas' => '4 Ha', 'tanaman' => 'Padi', 'icon' => 'padi'],
                        7 => ['luas' => '1 Ha', 'tanaman' => 'Jagung', 'icon' => 'jagung'],
                        8 => ['luas' => '5 Ha', 'tanaman' => 'Cabai', 'icon' => 'cabai'],
                        9 => ['luas' => '1 Ha', 'tanaman' => 'Kentang', 'icon' => 'kentang'],
                        10 => ['luas' => '5 Ha', 'tanaman' => 'Kentang', 'icon' => 'kentang'],
                        11 => ['luas' => '5 Ha', 'tanaman' => 'Tomat', 'icon' => 'tomat'],
                        12 => ['luas' => '7 Ha', 'tanaman' => 'Tomat', 'icon' => 'tomat'],
                    ];
                    $lahan = $data[$i];
                @endphp

                <div class="lahan-card bg-white rounded-[10px] border border-hijau-tua overflow-hidden" data-tanaman="{{ $lahan['tanaman'] }}">
                    <div class="p-3 flex flex-col gap-2">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-semibold text-black">Lahan {{ $i }}</span>

                            @if ($lahan['icon'] == 'padi')
                                <img src="{{ asset('asset/img/padi.svg') }}" alt="padi" class="w-6 h-6">
                            @else
                                <div class="w-6 h-6 bg-hijau-tua rounded-xl flex items-center justify-center">
                                    @if ($lahan['icon'] == 'jagung')
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.375 7.08333H4.83083C5.3975 7.4375 5.91458 7.84125 6.375 8.27333V7.08333ZM3.54167 6.375C3.73292 2.74833 5.22042 0 7.08333 0C8.9675 0 10.4621 2.79083 10.625 6.46C11.6875 5.97125 12.8704 5.66667 14.1667 5.66667C10.0938 7.48708 11.5104 14.1667 7.08333 14.1667C2.83333 14.1667 4.20042 7.48708 0 5.66667C1.28917 5.66667 2.47917 5.95 3.54167 6.375ZM6.375 6.375V4.95833H4.42L4.27125 6.375H6.375ZM6.375 4.25V2.83333H4.99375C4.81667 3.25833 4.675 3.73292 4.55458 4.25H6.375ZM6.375 2.125V0.920833C5.98542 1.15458 5.63125 1.5725 5.3125 2.125H6.375ZM7.08333 0.708333V2.125H7.79167V2.83333H7.08333V4.25H8.5V4.95833H7.08333V6.375H9.20833V7.08333H7.08333V8.5H8.5V9.20833H7.24625C8.08917 10.2354 8.60625 11.3333 8.72667 12.2046C9.42792 11.0217 9.88833 9.095 9.91667 6.91333C9.87417 3.54167 8.59208 0.708333 7.08333 0.708333Z"
                                                fill="white" />
                                        </svg>
                                    @elseif($lahan['icon'] == 'cabai')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14"
                                            viewBox="0 0 15 14" fill="none">
                                            <path
                                                d="M11.2881 2.33342L11.56 1.20654M11.2881 2.33342C11.1332 2.27897 10.9739 2.23819 10.8119 2.21154C9.28 1.95654 7.6825 2.96529 7.57625 4.52404L7.57 4.62592C7.1375 11.2222 2.5 12.3322 2.5 12.3322C2.5 12.3322 7.57875 14.1278 10.625 11.0822C12.0513 9.65529 12.7856 7.33217 13.0144 6.08217C13.053 5.8706 13.0899 5.65872 13.125 5.44654C13.2336 4.79441 13.109 4.12486 12.7731 3.55544C12.4372 2.98603 11.9114 2.55377 11.2881 2.33342ZM7.875 4.55029L8.7475 4.33217L9.3725 5.26967L10.31 4.64467L10.935 5.58217L11.8725 4.95717L12.6875 5.75967"
                                                stroke="white" stroke-width="2" stroke-linecap="square" />
                                        </svg>
                                    @elseif($lahan['icon'] == 'tomat')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <g clip-path="url(#clip0_45_2005_{{ $i }})">
                                                <path
                                                    d="M14.9713 8.67236C14.9713 8.67236 15.1851 7.04111 14.7963 6.30361C14.4076 5.56611 13.2076 3.93736 10.7188 3.64361C9.39883 3.48861 8.50508 3.66361 7.69008 3.75986C7.17383 3.82111 6.21258 3.50361 4.48633 3.89611C3.20633 4.18736 1.26383 5.31361 0.632576 7.74111C0.300076 9.01986 0.426326 10.4011 0.992576 11.5649C2.08008 13.7974 4.09883 14.3411 4.09883 14.3411L8.15633 14.6711L13.0688 12.5936L14.9713 8.67236Z"
                                                    fill="white" />
                                                <path
                                                    d="M10.2536 14.885C12.8361 14.38 15.0686 12.07 15.4574 9.62377C15.8211 7.33502 14.4836 5.80127 14.4836 5.80127C14.4836 5.80127 14.6361 7.02252 14.3511 8.32377C14.0449 9.71627 13.1586 12.0375 10.3511 13.3525C6.90488 14.9663 3.12988 13.9025 3.12988 13.9025C3.12988 13.9025 5.69488 15.7763 10.2536 14.885Z"
                                                    fill="white" />
                                                <path
                                                    d="M3.11495 6.59486C2.4287 6.41736 1.57245 6.93611 1.4487 8.45486C1.33495 9.84611 2.0887 11.5224 2.82745 11.3224C3.45495 11.1524 2.8512 9.98986 3.07495 9.03611C3.3012 8.08236 4.1612 6.86611 3.11495 6.59486Z"
                                                    fill="white" />
                                                <path
                                                    d="M7.18878 5.40995C7.60753 5.4412 7.91003 5.99745 8.28753 6.3762C8.83878 6.92745 9.27003 7.21495 9.73378 7.3237C9.96628 7.37745 10.5 7.4662 10.5 7.4662C10.5 7.4662 10.5775 7.41245 10.3138 7.26495C10.05 7.11745 9.89128 6.83495 9.85253 6.7037C9.81378 6.57245 9.69253 6.1412 9.43753 5.7837C9.18253 5.4262 8.89253 5.27495 8.98503 5.11245C9.07753 4.94995 9.87753 5.22495 10.6475 5.1012C11.6638 4.9387 11.8188 4.61245 11.7725 4.5737C11.7263 4.53495 11.0975 4.7212 10.78 4.6512C10.4625 4.5812 10.19 4.3637 9.71003 4.3637C9.38253 4.3637 9.06253 4.48245 8.97628 4.3037C8.90378 4.1537 9.17628 3.65245 9.38378 3.4637C9.88753 3.0062 10.4313 2.89745 10.4313 2.83495C10.4313 2.7062 9.54753 2.6337 8.93503 3.12245C8.32503 3.6087 8.44003 4.24745 7.64753 4.24745C7.38378 4.24745 7.28253 4.18495 7.28253 4.18495C7.28253 4.18495 6.92878 3.8937 6.45628 3.63745C5.98378 3.3812 5.62753 3.49495 5.35503 3.3637C5.08378 3.23245 4.60253 2.89245 4.55628 2.9612C4.51003 3.02995 4.91753 3.49495 5.43003 3.87495C5.94253 4.25495 6.51628 4.4487 6.35253 4.6037C6.19003 4.7587 5.91878 4.85995 5.66253 5.0537C5.40628 5.24745 5.18128 5.5262 4.87128 5.62745C4.56128 5.7287 4.05128 5.65745 3.98128 5.74245C3.91128 5.82745 4.52128 6.1212 5.47503 5.9437C6.42628 5.7662 6.42878 5.3537 7.18878 5.40995Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_45_2005_{{ $i }}">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    @elseif($lahan['icon'] == 'kentang')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <g clip-path="url(#clip0_{{ $i }})">
                                                <path
                                                    d="M0.479954 10.2524C0.281204 8.16487 1.4712 6.50862 2.47995 5.84112C3.5112 5.15862 3.99245 5.06112 4.22495 4.92987C5.2962 4.32737 6.04995 2.98362 7.48995 1.99237C9.1287 0.86487 11.37 0.69737 12.745 1.45112C13.9987 2.13862 15.2837 3.63612 14.94 6.61737C14.5962 9.59862 7.1062 14.5049 5.8212 14.5749C4.5362 14.6449 0.779954 13.4074 0.479954 10.2524Z"
                                                    fill="white" />
                                                <path
                                                    d="M8.82994 9.58635C8.24119 9.93135 6.02994 12.1226 3.49244 12.0626C0.954942 12.0026 0.564941 10.7763 0.564941 10.7763C0.564941 10.7763 0.928691 12.9138 2.67869 14.1801C4.65869 15.6126 6.75869 15.0488 7.37119 14.9113C8.27994 14.7076 9.08244 14.2901 9.88619 13.8538C10.6899 13.4176 13.5474 12.0413 14.6699 9.8751C15.9087 7.4851 15.6137 5.5701 14.9949 4.1776C14.3399 2.70385 13.7012 2.1626 13.7012 2.1626C13.7012 2.1626 14.2962 5.24885 13.0362 6.96635C11.2487 9.4026 9.41869 9.24135 8.82994 9.58635Z"
                                                    fill="white" />
                                                <path
                                                    d="M7.90375 12.1465C7.91125 12.304 8.47251 12.2915 8.88 12.2252C9.31125 12.1552 9.6675 12.149 9.7275 11.9827C9.7875 11.8165 9.13 11.2377 8.74251 11.2577C8.50001 11.2715 7.8925 11.9165 7.90375 12.1465ZM10.8238 12.4502C10.9075 12.5715 11.255 12.3865 11.3825 12.2202C11.51 12.054 11.6538 11.7327 11.5388 11.6615C11.4238 11.5902 11.095 11.5915 10.9325 11.7915C10.7713 11.9927 10.74 12.329 10.8238 12.4502ZM14.6563 4.78523C14.52 4.54523 14.2763 5.11273 14.265 5.30898C14.2538 5.50523 14.4013 5.62023 14.565 5.65523C14.7263 5.68898 15.0938 5.55648 14.6563 4.78523ZM3.635 13.3852C3.525 13.5715 3.70625 13.7065 3.89 13.8315C4.035 13.9302 4.39 13.9827 4.46 13.8727C4.53125 13.7627 4.39125 13.614 4.12625 13.3915C3.945 13.2402 3.745 13.199 3.635 13.3852Z"
                                                    fill="#9E9E9E" />
                                                <path
                                                    d="M2.17519 10.5298C2.01894 10.6385 2.14519 11.121 2.16644 11.2135C2.18769 11.306 2.81019 11.3385 2.90269 11.196C2.99519 11.0535 2.80019 10.8473 2.66269 10.7035C2.52519 10.561 2.33144 10.421 2.17519 10.5298ZM3.28769 9.40602C3.48019 9.66727 3.82894 9.35352 3.88519 9.11977C3.94519 8.86852 3.73394 8.70477 3.49519 8.85352C3.30394 8.97102 3.17519 9.25477 3.28769 9.40602ZM5.77769 4.43227C5.52769 4.32727 5.43269 4.54727 5.33894 4.76977C5.24519 4.99227 4.94269 5.39727 5.13269 5.45352C5.32269 5.50977 5.77019 5.48352 5.88144 5.30227C5.99269 5.11977 6.02769 4.53852 5.77769 4.43227Z"
                                                    fill="#9E9E9E" />
                                                <path
                                                    d="M1.50867 9.93477C1.78367 10.0585 2.21117 9.47352 2.40742 9.19227C2.69617 8.77852 3.13117 8.25602 4.14992 7.62477C5.54742 6.75977 7.00617 6.97727 7.75617 6.32602C8.50617 5.67477 8.94117 4.38352 9.51367 3.74352C10.5599 2.57352 11.6462 3.37227 11.7974 2.80602C11.9487 2.23977 11.1737 1.75852 10.2587 1.75977C9.34492 1.76227 8.29992 2.09852 7.34992 3.63477C6.39992 5.17102 6.16367 5.64102 5.28242 5.91852C4.40117 6.19727 3.30617 6.56477 2.25117 7.73852C1.66492 8.39102 1.04992 9.72852 1.50867 9.93477Z"
                                                    fill="white" />
                                                <path
                                                    d="M10.346 4.22766C10.3998 4.62766 10.9498 4.84516 11.2735 4.84891C11.5773 4.85266 11.796 4.65516 11.7923 4.45391C11.7885 4.21266 11.396 4.10141 11.2423 4.04141C10.941 3.92516 10.871 3.67266 10.5898 3.76266C10.3348 3.84516 10.3385 4.16641 10.346 4.22766Z"
                                                    fill="#9E9E9E" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_{{ $i }}">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    @endif
                                </div>
                            @endif
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="text-xs text-black">Luas: {{ $lahan['luas'] }}</span>
                            <span class="text-xs text-black">Tanaman: {{ $lahan['tanaman'] }}</span>
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
            @endfor
        </div>
    </div>

    <!-- Modal Tambah Lahan -->
    <div id="modal-tambah-lahan" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 transition-opacity duration-300">
        <div id="modal-content" class="absolute bottom-0 left-0 right-0 bg-white rounded-t-[30px] shadow-2xl transform translate-y-full transition-transform duration-300 ease-out">
            <!-- Tombol Close -->
            <button id="close-modal" class="absolute top-5 right-5 w-7 h-7  flex items-center justify-center hover:bg-green-800 transition-colors z-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
<path d="M5.7 14.3C5.88333 14.4833 6.11667 14.575 6.4 14.575C6.68333 14.575 6.91667 14.4833 7.1 14.3L10 11.4L12.925 14.325C13.1083 14.5083 13.3377 14.5957 13.613 14.587C13.8877 14.579 14.1167 14.4833 14.3 14.3C14.4833 14.1167 14.575 13.8833 14.575 13.6C14.575 13.3167 14.4833 13.0833 14.3 12.9L11.4 10L14.325 7.075C14.5083 6.89167 14.5957 6.66233 14.587 6.387C14.579 6.11233 14.4833 5.88333 14.3 5.7C14.1167 5.51667 13.8833 5.425 13.6 5.425C13.3167 5.425 13.0833 5.51667 12.9 5.7L10 8.6L7.075 5.675C6.89167 5.49167 6.66267 5.404 6.388 5.412C6.11267 5.42067 5.88333 5.51667 5.7 5.7C5.51667 5.88333 5.425 6.11667 5.425 6.4C5.425 6.68333 5.51667 6.91667 5.7 7.1L8.6 10L5.675 12.925C5.49167 13.1083 5.40433 13.3373 5.413 13.612C5.421 13.8873 5.51667 14.1167 5.7 14.3ZM10 20C8.61667 20 7.31667 19.7373 6.1 19.212C4.88333 18.6873 3.825 17.975 2.925 17.075C2.025 16.175 1.31267 15.1167 0.788 13.9C0.262667 12.6833 0 11.3833 0 10C0 8.61667 0.262667 7.31667 0.788 6.1C1.31267 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.31233 6.1 0.787C7.31667 0.262333 8.61667 0 10 0C11.3833 0 12.6833 0.262333 13.9 0.787C15.1167 1.31233 16.175 2.025 17.075 2.925C17.975 3.825 18.6873 4.88333 19.212 6.1C19.7373 7.31667 20 8.61667 20 10C20 11.3833 19.7373 12.6833 19.212 13.9C18.6873 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6873 13.9 19.212C12.6833 19.7373 11.3833 20 10 20Z" fill="#1F4E20"/>
</svg>
            </button>

            <!-- Konten Modal -->
            <div class="px-6 pt-8 pb-8">
                <h2 class="text-xl font-semibold text-gray-900 mb-6">Tambah Lahan</h2>
                
                <form id="form-tambah-lahan" class="space-y-4">
                    <!-- Input Nama Lahan -->
                    <div>
                        <input 
                            type="text" 
                            id="nama-lahan" 
                            placeholder="Nama Lahan"
                            class="w-full px-4 py-3.5 border border-gray-300 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-hijau-tua focus:border-transparent text-sm placeholder-gray-400"
                            required
                        />
                    </div>

                    <!-- Input Jenis Tanaman -->
                    <div>
                        <select 
                            id="jenis-tanaman" 
                            class="w-full px-4 py-3.5 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-hijau-tua focus:border-transparent text-sm text-gray-500 appearance-none bg-white"
                            style="background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.2em;"
                            required
                        >
                            <option value="" disabled selected>Jenis Tanaman</option>
                            <option value="Jagung">Jagung</option>
                            <option value="Padi">Padi</option>
                            <option value="Tomat">Tomat</option>
                            <option value="Cabai">Cabai</option>
                            <option value="Kentang">Kentang</option>
                        </select>
                    </div>

                    <!-- Input Luas Lahan -->
                    <div>
                        <input 
                            type="text" 
                            id="luas-lahan" 
                            placeholder="Luas Lahan"
                            class="w-full px-4 py-3.5 border border-gray-300 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-hijau-tua focus:border-transparent text-sm placeholder-gray-400"
                            required
                        />
                    </div>

                    <!-- Tombol Submit -->
                    <button 
                        type="submit"
                        class="w-full bg-hijau-tua text-white rounded-xl py-3.5 text-sm font-semibold hover:bg-green-800 transition-colors mt-6 shadow-sm"
                    >
                        Selanjutnya
                    </button>

                    <!-- Tombol Batal -->
                    <button 
                        type="button"
                        id="btn-batal"
                        class="w-full bg-white text-gray-700 border border-gray-300 rounded-xl py-3.5 text-sm font-medium hover:bg-gray-50 transition-colors"
                    >
                        Batal
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Script interaktif -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const filterButtons = document.querySelectorAll(".filter-tanaman > div");
            const lahanCards = document.querySelectorAll(".lahan-card");
            const jumlahLahan = document.getElementById("jumlah-lahan");
            const btnTambahLahan = document.getElementById("btn-tambah-lahan");
            const modal = document.getElementById("modal-tambah-lahan");
            const closeModal = document.getElementById("close-modal");
            const btnBatal = document.getElementById("btn-batal");
            const formTambahLahan = document.getElementById("form-tambah-lahan");

            // Filter functionality
            filterButtons.forEach(button => {
                button.addEventListener("click", () => {
                    const filterValue = button.getAttribute("data-filter");

                    // Reset semua filter ke kondisi default (hijau tua)
                    filterButtons.forEach(btn => {
                        btn.classList.remove("bg-white", "text-hijau-tua", "border", "border-hijau-tua");
                        btn.classList.add("bg-hijau-tua", "text-white");
                    });

                    // Aktifkan filter yang diklik (putih dengan border)
                    button.classList.remove("bg-hijau-tua", "text-white");
                    button.classList.add("bg-white", "text-hijau-tua", "border", "border-hijau-tua");

                    // Filter lahan cards
                    let visibleCount = 0;
                    lahanCards.forEach(card => {
                        const tanaman = card.getAttribute("data-tanaman");
                        
                        if (filterValue === "semua" || tanaman === filterValue) {
                            card.style.display = "block";
                            visibleCount++;
                        } else {
                            card.style.display = "none";
                        }
                    });

                    // Update jumlah lahan
                    jumlahLahan.textContent = visibleCount;
                });
            });

            // Modal functionality
            // Buka modal
            btnTambahLahan.addEventListener("click", () => {
                const modalContent = document.getElementById("modal-content");
                modal.classList.remove("hidden");
                document.body.style.overflow = "hidden";
                
                // Trigger animation
                setTimeout(() => {
                    modal.classList.add("opacity-100");
                    modalContent.classList.remove("translate-y-full");
                    modalContent.classList.add("translate-y-0");
                }, 10);
            });

            // Tutup modal
            const tutupModal = () => {
                const modalContent = document.getElementById("modal-content");
                modal.classList.remove("opacity-100");
                modalContent.classList.remove("translate-y-0");
                modalContent.classList.add("translate-y-full");
                
                setTimeout(() => {
                    modal.classList.add("hidden");
                    document.body.style.overflow = "";
                    formTambahLahan.reset();
                }, 300);
            };

            closeModal.addEventListener("click", tutupModal);
            btnBatal.addEventListener("click", tutupModal);

            // Tutup modal jika klik di luar konten
            modal.addEventListener("click", (e) => {
                if (e.target === modal) {
                    tutupModal();
                }
            });

            // Handle form submit
            formTambahLahan.addEventListener("submit", (e) => {
                e.preventDefault();
                
                const namaLahan = document.getElementById("nama-lahan").value;
                const jenisTanaman = document.getElementById("jenis-tanaman").value;
                const luasLahan = document.getElementById("luas-lahan").value;

                // Di sini Anda bisa menambahkan logika untuk mengirim data ke server
                console.log({
                    nama: namaLahan,
                    tanaman: jenisTanaman,
                    luas: luasLahan
                });

                // Tutup modal setelah submit
                tutupModal();
                
                
            });
        });
    </script>

@endsection