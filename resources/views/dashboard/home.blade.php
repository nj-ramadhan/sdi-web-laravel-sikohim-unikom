@extends('layouts.master')

@section('content')
<!-- Page-content -->
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Beranda SIKOHIM</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Beranda</a>
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-12 2xl:grid-cols-12 gap-x-5">
                <div class="relative col-span-12 overflow-hidden card 2xl:col-span-12 bg-slate-900">
                    <div class="absolute inset-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-100" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" width="1440" height="560" preserveaspectratio="none" viewbox="0 0 1440 560">
                            <g mask="url(&quot;#SvgjsMask1000&quot;)" fill="none">
                                <use xlink:href="#SvgjsSymbol1007" x="0" y="0"></use>
                                <use xlink:href="#SvgjsSymbol1007" x="720" y="0"></use>
                            </g>
                            <defs>
                                <mask id="SvgjsMask1000">
                                    <rect width="1440" height="560" fill="#ffffff"></rect>
                                </mask>
                                <path d="M-1 0 a1 1 0 1 0 2 0 a1 1 0 1 0 -2 0z" id="SvgjsPath1003"></path>
                                <path d="M-3 0 a3 3 0 1 0 6 0 a3 3 0 1 0 -6 0z" id="SvgjsPath1004"></path>
                                <path d="M-5 0 a5 5 0 1 0 10 0 a5 5 0 1 0 -10 0z" id="SvgjsPath1001"></path>
                                <path d="M2 -2 L-2 2z" id="SvgjsPath1005"></path>
                                <path d="M6 -6 L-6 6z" id="SvgjsPath1002"></path>
                                <path d="M30 -30 L-30 30z" id="SvgjsPath1006"></path>
                            </defs>
                            <symbol id="SvgjsSymbol1007">
                                <use xlink:href="#SvgjsPath1001" x="30" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="30" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="30" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1003" x="30" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="30" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="30" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="30" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1003" x="30" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="30" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="30" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="90" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1003" x="90" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="90" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="90" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1004" x="90" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1003" x="90" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="90" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="90" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="90" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="90" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="150" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="150" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="150" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="150" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="150" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="150" y="330" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1004" x="150" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="150" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="150" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="150" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="210" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="210" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="210" y="150" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1002" x="210" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="210" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="210" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="210" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="210" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="210" y="510" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1003" x="210" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="270" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="270" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="270" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="270" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="270" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="270" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="270" y="390" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1002" x="270" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="270" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="270" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="330" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="330" y="90" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1002" x="330" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="330" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="330" y="270" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1001" x="330" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="330" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="330" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1003" x="330" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="330" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1004" x="390" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="390" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="390" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="390" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="390" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="390" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="390" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1003" x="390" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="390" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="390" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="450" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1004" x="450" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="450" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="450" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="450" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="450" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="450" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="450" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="450" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="450" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="510" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1003" x="510" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="510" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="510" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="510" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1004" x="510" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="510" y="390" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1001" x="510" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="510" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="510" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="570" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="570" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="570" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="570" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="570" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="570" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="570" y="390" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1005" x="570" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="570" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="570" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="630" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="630" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="630" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="630" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="630" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="630" y="330" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1002" x="630" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="630" y="450" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1001" x="630" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="630" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="690" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="690" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="690" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="690" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="690" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="690" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1003" x="690" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1003" x="690" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="690" y="510" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1003" x="690" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                            </symbol>
                        </svg>
                    </div>
                    <div class="relative card-body">
                        <div class="grid items-center grid-cols-12">
                            <div class="col-span-12 lg:col-span-8 2xl:col-span-8">
                                <h5 class="mb-3 font-normal tracking-wide text-slate-200">Selamat Datang 🎉</h5>
                                <p class="mb-5 text-slate-400">SIKOHIM adalah sistem informasi yang dibuat khusus untuk membantu pengelolaan data kegiatan himpunan organisasi. Saat ini khusus untuk diterapkan pada Himpunan Mahasiswa Jurusan Sistem Informasi Universitas Komputer Indonesia </p>
                                <a href="https://www.unikom.ac.id/" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-500/20 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-500/20 dark:ring-custom-400/20">Kunjungi Situs Kampus UNIKOM</a>
                            </div>
                            <div class="hidden col-span-12 2xl:col-span-3 lg:col-span-2 lg:col-start-11 2xl:col-start-10 lg:block">
                                <img src="assets/images/dashboard.png" alt="" class="h-40 ltr:2xl:ml-auto rtl:2xl:mr-auto">
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-span-12 card md:col-span-6 lg:col-span-4 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div class="flex items-center justify-center mx-auto text-purple-500 bg-purple-100 rounded-full size-14 dark:bg-purple-500/20">
                            <i data-lucide="user-2"></i>
                        </div>
                        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="{{$count_mahasiswa}}">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Jumlah Mahasiswa</p>
                    </div>
                </div><!--end col-->

                <div class="col-span-12 card md:col-span-6 lg:col-span-4 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div class="flex items-center justify-center mx-auto text-red-500 bg-red-100 rounded-full size-14 dark:bg-red-500/20">
                            <i data-lucide="messages-square"></i>
                        </div>
                        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="{{$count_aspirasi}}">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Jumlah Usulan Aspirasi</p>
                    </div>
                </div><!--end col-->

                <div class="col-span-12 card md:col-span-6 lg:col-span-4 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div class="flex items-center justify-center mx-auto rounded-full size-14 bg-custom-100 text-custom-500 dark:bg-custom-500/20">
                            <i data-lucide="calendar-days"></i>
                        </div>
                        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="{{$count_berkas_program}}">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Jumlah Berkas Program</p>
                    </div>
                </div><!--end col-->

                <div class="col-span-12 card md:col-span-6 lg:col-span-4 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div class="flex items-center justify-center mx-auto text-green-500 bg-green-100 rounded-full size-14 dark:bg-green-500/20">
                            <i data-lucide="scroll-text"></i>
                        </div>
                        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="{{$count_presensi_piket}}">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Jumlah Aktifitas Piket</p>
                    </div>
                </div><!--end col-->

                <div class="col-span-12 card md:col-span-6 lg:col-span-4 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div class="flex items-center justify-center mx-auto text-orange-500 bg-orange-100 rounded-full size-14 dark:bg-orange-500/20">
                            <i data-lucide="wallet"></i>
                        </div>
                        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="{{$count_uang_kas}}">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Jumlah Transaksi Pembayaran Uang Kas</p>
                    </div>
                </div><!--end col-->

                <div class="col-span-12 card md:col-span-6 lg:col-span-4 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div class="flex items-center justify-center mx-auto text-green-500 bg-green-100 rounded-full size-14 dark:bg-green-500/20">
                            <i data-lucide="wallet-2"></i>
                        </div>
                        <h5 class="mt-4 mb-2">Rp. <span class="counter-value" data-target="{{$total_uang_kas}}">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Total Pembayaran Uang Kas</p>
                    </div>
                </div><!--end col-->
            </div><!--end grid-->
        </div>
        <!-- container-fluid -->
    </div>
<!-- End Page-content -->
@endsection
