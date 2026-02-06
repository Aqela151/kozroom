@extends('admin.layouts.app')
@section('content')
<div class="min-h-screen" style="background-color: #f7f7ff;">
    <!-- Header -->
    <div class="px-6 py-6 flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-black">Payments</h1>
            <p class="text-gray-600 text-sm mt-1">Review and verify tenant payments</p>
        </div>

        <!-- Profile Icon -->
        <button class="flex-shrink-0 w-12 h-12 border-2 hover:border-opacity-80 rounded-full flex items-center justify-center" style="background-color: #f7f7ff; border-color: #FB4448;">
            <svg class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
            </svg>
        </button>
    </div>

    <div class="px-6">
        <!-- Search and Filters -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-4 mb-6">
            <!-- Search -->
            <div class="md:col-span-6">
                <input 
                    type="text" 
                    id="searchInput"
                    placeholder="Search by Payment ID, Tenant, Room..." 
                    class="w-full px-6 py-3 border-2 rounded-full focus:outline-none text-sm" 
                    style="background-color: #ffffff; border-color: #FB4448;"
                >
            </div>

            <!-- Bulan Filter -->
            <div class="md:col-span-2">
                <select id="monthFilter" class="w-full px-6 py-3 border-2 rounded-full focus:outline-none text-sm font-semibold appearance-none" style="background-color: #ffffff; border-color: #FB4448; background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em 1.5em;">
                    <option value="">Bulan</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
            </div>

            <!-- Status Filter -->
            <div class="md:col-span-2">
                <select id="statusFilter" class="w-full px-6 py-3 border-2 rounded-full focus:outline-none text-sm font-semibold appearance-none" style="background-color: #ffffff; border-color: #FB4448; background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em 1.5em;">
                    <option value="">Status</option>
                    <option value="Pending">Pending</option>
                    <option value="Confirmed">Confirmed</option>
                    <option value="Rejected">Rejected</option>
                </select>
            </div>

            <!-- Reset Button -->
            <div class="md:col-span-2">
                <button id="resetBtn" class="w-full text-white font-semibold py-3 px-6 rounded-full" style="background-color: #FB4448;" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                    Reset
                </button>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Payment List Table -->
            <div class="lg:col-span-2 rounded-lg border-2 p-6" style="border-color: #FB4448; background-color: #ffffff;">
                <div class="mb-4 flex justify-between items-center">
                    <h3 class="text-2xl font-bold">Payment List</h3>
                    <button class="text-white font-semibold py-2 px-6 rounded-lg flex items-center gap-2" style="background-color: #FB4448;" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                        </svg>
                        Export
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="text-white" style="background-color: #FB4448;">
                                <th class="py-3 px-4 text-left font-bold">Payment ID</th>
                                <th class="py-3 px-4 text-left font-bold">Tenant</th>
                                <th class="py-3 px-4 text-left font-bold min-w-[140px]">Room</th>
                                <th class="py-3 px-4 text-left font-bold min-w-[110px]">Amount</th>
                                <th class="py-3 px-4 text-left font-bold">Date</th>
                                <th class="py-3 px-4 text-left font-bold">Status</th>
                                <th class="py-3 px-4 text-left font-bold">Action</th>
                            </tr>
                        </thead>
                        <tbody id="paymentTableBody" class="divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50 cursor-pointer payment-row" 
                                data-id="PMT - 0011" 
                                data-tenant="Mingyu" 
                                data-room="20" 
                                data-amount="3.000.000" 
                                data-date="2027-01-14" 
                                data-status="Pending">
                                
                                <td class="py-3 px-4 font-medium">PMT - 0011</td>
                                <td class="py-3 px-4">Mingyu</td>
                                <td class="py-3 px-4 pr-6">
                                    <div class="flex items-center gap-3">
                                        <img src="{{ asset('assets/room-thumb.png') }}" alt="Room 20" class="w-12 h-12 rounded object-cover cursor-pointer hover:opacity-80 transition flex-shrink-0" onclick="enlargeImage(this.src)">
                                        <div class="flex flex-col">
                                            <span class="font-semibold">20</span>
                                            <span class="text-xs text-gray-500">Click foto to Enlarge</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4 pl-6">3.000.000</td>
                                <td class="py-3 px-4">14 Jan 2027</td>
                                <td class="py-3 px-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold" style="background-color: #FFF4E6; color: #FF9800;">Pending</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex gap-2">
                                        <button class="view-btn text-blue-500 hover:text-blue-700" title="View Details">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="reject-btn hover:text-red-700" style="color: #FB4448;" title="Reject">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="confirm-btn text-green-500 hover:text-green-700" title="Confirm">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 cursor-pointer payment-row" 
                                data-id="PMT - 0010" 
                                data-tenant="Leonel" 
                                data-room="1" 
                                data-amount="1.500.000" 
                                data-date="2026-12-25" 
                                data-status="Confirmed">
                                <td class="py-3 px-4 font-medium">PMT - 0010</td>
                                <td class="py-3 px-4">Leonel</td>
                                <td class="py-3 px-4 pr-6">
                                    <div class="flex items-center gap-3">
                                        <img src="{{ asset('assets/room-thumb.png') }}" alt="Room 1" class="w-12 h-12 rounded object-cover cursor-pointer hover:opacity-80 transition flex-shrink-0" onclick="enlargeImage(this.src)">
                                        <div class="flex flex-col">
                                            <span class="font-semibold">1</span>
                                            <span class="text-xs text-gray-500">Click foto to Enlarge</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4 pl-6">1.500.000</td>
                                <td class="py-3 px-4">25 Dec 2026</td>
                                <td class="py-3 px-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold" style="background-color: #E8F5E9; color: #4CAF50;">Confirmed</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex gap-2">
                                        <button class="view-btn text-blue-500 hover:text-blue-700" title="View Details">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="reject-btn hover:text-red-700" style="color: #FB4448;" title="Reject">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="confirm-btn text-green-500 hover:text-green-700" title="Confirm">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 cursor-pointer payment-row" 
                                data-id="PMT - 0009" 
                                data-tenant="Gabriel" 
                                data-room="13" 
                                data-amount="700.000" 
                                data-date="2026-11-26" 
                                data-status="Confirmed">
                                <td class="py-3 px-4 font-medium">PMT - 0009</td>
                                <td class="py-3 px-4">Gabriel</td>
                                <td class="py-3 px-4 pr-6">
                                    <div class="flex items-center gap-3">
                                        <img src="{{ asset('assets/room-thumb.png') }}" alt="Room 13" class="w-12 h-12 rounded object-cover cursor-pointer hover:opacity-80 transition flex-shrink-0" onclick="enlargeImage(this.src)">
                                        <div class="flex flex-col">
                                            <span class="font-semibold">13</span>
                                            <span class="text-xs text-gray-500">Click foto to Enlarge</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4 pl-6">700.000</td>
                                <td class="py-3 px-4">26 Nov 2026</td>
                                <td class="py-3 px-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold" style="background-color: #E8F5E9; color: #4CAF50;">Confirmed</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex gap-2">
                                        <button class="view-btn text-blue-500 hover:text-blue-700" title="View Details">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="reject-btn hover:text-red-700" style="color: #FB4448;" title="Reject">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="confirm-btn text-green-500 hover:text-green-700" title="Confirm">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 cursor-pointer payment-row" 
                                data-id="PMT - 0008" 
                                data-tenant="Nathaniel" 
                                data-room="11" 
                                data-amount="1.400.000" 
                                data-date="2026-11-10" 
                                data-status="Rejected">
                                <td class="py-3 px-4 font-medium">PMT - 0008</td>
                                <td class="py-3 px-4">Nathaniel</td>
                                <td class="py-3 px-4 pr-6">
                                    <div class="flex items-center gap-3">
                                        <img src="{{ asset('assets/room-thumb.png') }}" alt="Room 11" class="w-12 h-12 rounded object-cover cursor-pointer hover:opacity-80 transition flex-shrink-0" onclick="enlargeImage(this.src)">
                                        <div class="flex flex-col">
                                            <span class="font-semibold">11</span>
                                            <span class="text-xs text-gray-500">Click foto to Enlarge</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4 pl-6">1.400.000</td>
                                <td class="py-3 px-4">10 Nov 2026</td>
                                <td class="py-3 px-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold" style="background-color: #FFEBEE; color: #F44336;">Rejected</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex gap-2">
                                        <button class="view-btn text-blue-500 hover:text-blue-700" title="View Details">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="reject-btn hover:text-red-700" style="color: #FB4448;" title="Reject">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="confirm-btn text-green-500 hover:text-green-700" title="Confirm">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 cursor-pointer payment-row" 
                                data-id="PMT - 0007" 
                                data-tenant="Harvey" 
                                data-room="3" 
                                data-amount="700.000" 
                                data-date="2026-10-17" 
                                data-status="Confirmed">
                                <td class="py-3 px-4 font-medium">PMT - 0007</td>
                                <td class="py-3 px-4">Harvey</td>
                                <td class="py-3 px-4 pr-6">
                                    <div class="flex items-center gap-3">
                                        <img src="{{ asset('assets/room-thumb.png') }}" alt="Room 3" class="w-12 h-12 rounded object-cover cursor-pointer hover:opacity-80 transition flex-shrink-0" onclick="enlargeImage(this.src)">
                                        <div class="flex flex-col">
                                            <span class="font-semibold">3</span>
                                            <span class="text-xs text-gray-500">Click foto to Enlarge</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4 pl-6">700.000</td>
                                <td class="py-3 px-4">17 Oct 2026</td>
                                <td class="py-3 px-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold" style="background-color: #E8F5E9; color: #4CAF50;">Confirmed</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex gap-2">
                                        <button class="view-btn text-blue-500 hover:text-blue-700" title="View Details">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="reject-btn hover:text-red-700" style="color: #FB4448;" title="Reject">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="confirm-btn text-green-500 hover:text-green-700" title="Confirm">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 cursor-pointer payment-row" 
                                data-id="PMT - 0006" 
                                data-tenant="Daniel" 
                                data-room="19" 
                                data-amount="350.000" 
                                data-date="2026-09-13" 
                                data-status="Confirmed">
                                <td class="py-3 px-4 font-medium">PMT - 0006</td>
                                <td class="py-3 px-4">Daniel</td>
                                <td class="py-3 px-4 pr-6">
                                    <div class="flex items-center gap-3">
                                        <img src="{{ asset('assets/room-thumb.png') }}" alt="Room 19" class="w-12 h-12 rounded object-cover cursor-pointer hover:opacity-80 transition flex-shrink-0" onclick="enlargeImage(this.src)">
                                        <div class="flex flex-col">
                                            <span class="font-semibold">19</span>
                                            <span class="text-xs text-gray-500">Click foto to Enlarge</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4 pl-6">350.000</td>
                                <td class="py-3 px-4">13 Sept 2026</td>
                                <td class="py-3 px-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold" style="background-color: #E8F5E9; color: #4CAF50;">Confirmed</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex gap-2">
                                        <button class="view-btn text-blue-500 hover:text-blue-700" title="View Details">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="reject-btn hover:text-red-700" style="color: #FB4448;" title="Reject">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="confirm-btn text-green-500 hover:text-green-700" title="Confirm">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 cursor-pointer payment-row" 
                                data-id="PMT - 0005" 
                                data-tenant="Andrew" 
                                data-room="17" 
                                data-amount="1.050.000" 
                                data-date="2026-09-07" 
                                data-status="Confirmed">
                                <td class="py-3 px-4 font-medium">PMT - 0005</td>
                                <td class="py-3 px-4">Andrew</td>
                                <td class="py-3 px-4 pr-6">
                                    <div class="flex items-center gap-3">
                                        <img src="{{ asset('assets/room-thumb.png') }}" alt="Room 17" class="w-12 h-12 rounded object-cover cursor-pointer hover:opacity-80 transition flex-shrink-0" onclick="enlargeImage(this.src)">
                                        <div class="flex flex-col">
                                            <span class="font-semibold">17</span>
                                            <span class="text-xs text-gray-500">Click foto to Enlarge</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4 pl-6">1.050.000</td>
                                <td class="py-3 px-4">7 Sept 2026</td>
                                <td class="py-3 px-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold" style="background-color: #E8F5E9; color: #4CAF50;">Confirmed</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex gap-2">
                                        <button class="view-btn text-blue-500 hover:text-blue-700" title="View Details">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="reject-btn hover:text-red-700" style="color: #FB4448;" title="Reject">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="confirm-btn text-green-500 hover:text-green-700" title="Confirm">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- No Results Message -->
                <div id="noResults" class="hidden text-center py-8 text-gray-500">
                    <p class="text-lg font-semibold">Tidak ada pembayaran yang ditemukan</p>
                    <p class="text-sm mt-2">Coba ubah kriteria pencarian atau filter Anda</p>
                </div>

                <!-- Pagination -->
                <div class="mt-6 flex justify-end items-center gap-3">
                    <button class="w-10 h-10 flex items-center justify-center border-2 rounded-lg hover:bg-red-50 font-bold" style="border-color: #FB4448; color: #FB4448;">
                        2
                    </button>
                    <button class="px-4 py-2 flex items-center gap-2 border-2 rounded-lg hover:bg-red-50 font-semibold" style="border-color: #FB4448; color: #FB4448;">
                        Selanjutnya
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Detail Payments Panel -->
            <div class="lg:col-span-1 rounded-lg border-2 p-6" style="border-color: #FB4448; background-color: #ffffff;">
                <div class="mb-6">
                    <h3 class="text-2xl font-bold">Detail Payments</h3>
                    <div class="border-b-2 border-black mt-2"></div>
                </div>

                <!-- Empty State -->
                <div id="emptyState" class="text-center text-gray-600">
                    <p class="text-sm mb-6">Pilih data pembayaran untuk melihat detail</p>
                    
                    <!-- Image Placeholder -->
                    <div class="border-2 border-dashed border-gray-300 rounded-lg mb-6 flex items-center justify-center" style="height: 300px;">
                        <div class="text-center text-gray-400">
                            <svg class="w-16 h-16 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <p class="text-sm">Bukti Pembayaran</p>
                        </div>
                    </div>
                    
                    <!-- Action Buttons (disabled) -->
                    <div class="flex gap-3">
                        <button disabled class="flex-1 bg-gray-800 text-white font-semibold py-3 px-4 rounded-lg cursor-not-allowed opacity-50">
                            Confirm
                        </button>
                        <button disabled class="flex-1 text-white font-semibold py-3 px-4 rounded-lg cursor-not-allowed opacity-50" style="background-color: #FB4448;">
                            Reject
                        </button>
                    </div>
                </div>

                <!-- Detail Content (Hidden by default) -->
                <div id="detailContent" class="hidden">
                    <!-- Payment Info -->
                    <div class="mb-4 space-y-3 text-sm">
                        <div>
                            <p class="text-gray-600 mb-1">Nama: <span class="font-semibold text-black" id="detailTenant">-</span></p>
                        </div>
                        <div>
                            <p class="text-gray-600 mb-1">Room: <span class="font-semibold text-black" id="detailRoom">-</span></p>
                        </div>
                        <div>
                            <p class="text-gray-600 mb-1">Amount: <span class="font-semibold text-black" id="detailAmount">-</span></p>
                        </div>
                        <div>
                            <p class="text-gray-600 mb-1">Date: <span class="font-semibold text-black" id="detailDate">-</span></p>
                        </div>
                        <div>
                            <p class="text-gray-600 mb-3">Bukti Pembayaran:</p>
                        </div>
                    </div>

                    <!-- Image Preview -->
                    <div class="border-2 border-gray-300 rounded-lg mb-6 overflow-hidden" style="height: 300px;">
                        <img id="detailImage" src="" alt="Payment Proof" class="w-full h-full object-contain bg-gray-50">
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex gap-3">
                        <button id="confirmDetailBtn" class="flex-1 bg-gray-800 hover:bg-gray-900 text-white font-semibold py-3 px-4 rounded-lg transition">
                            Confirm
                        </button>
                        <button id="rejectDetailBtn" class="flex-1 text-white font-semibold py-3 px-4 rounded-lg transition" style="background-color: #FB4448;" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                            Reject
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Image Enlargement -->
<div id="imageModal" class="hidden fixed inset-0 bg-black bg-opacity-75 z-50 flex items-center justify-center p-4" onclick="closeImageModal()">
    <div class="relative max-w-4xl max-h-full">
        <button onclick="closeImageModal()" class="absolute top-4 right-4 text-white hover:text-gray-300 z-10">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <img id="modalImage" src="" alt="Enlarged" class="max-w-full max-h-screen object-contain rounded-lg">
    </div>
</div>

<script>
// Function to enlarge image
function enlargeImage(src) {
    event.stopPropagation();
    document.getElementById('modalImage').src = src;
    document.getElementById('imageModal').classList.remove('hidden');
}

function closeImageModal() {
    document.getElementById('imageModal').classList.add('hidden');
}

document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const monthFilter = document.getElementById('monthFilter');
    const statusFilter = document.getElementById('statusFilter');
    const resetBtn = document.getElementById('resetBtn');
    const paymentTableBody = document.getElementById('paymentTableBody');
    const noResults = document.getElementById('noResults');
    
    // Detail panel elements
    const emptyState = document.getElementById('emptyState');
    const detailContent = document.getElementById('detailContent');
    
    // Get all payment rows
    let allRows = Array.from(paymentTableBody.getElementsByTagName('tr'));
    let selectedPayment = null;
    
    // Function to parse date
    function parseDate(dateStr) {
        return new Date(dateStr);
    }
    
    // Function to filter payments
    function filterPayments() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedMonth = monthFilter.value;
        const selectedStatus = statusFilter.value;
        
        let visibleRows = allRows.filter(row => {
            const paymentId = row.getAttribute('data-id').toLowerCase();
            const tenant = row.getAttribute('data-tenant').toLowerCase();
            const room = row.getAttribute('data-room').toLowerCase();
            const dateStr = row.getAttribute('data-date');
            const status = row.getAttribute('data-status');
            
            // Search filter
            const matchesSearch = paymentId.includes(searchTerm) || 
                                tenant.includes(searchTerm) ||
                                room.includes(searchTerm);
            
            // Month filter
            let matchesMonth = true;
            if (selectedMonth && dateStr) {
                const paymentDate = parseDate(dateStr);
                matchesMonth = (paymentDate.getMonth() + 1) == selectedMonth;
            }
            
            // Status filter
            const matchesStatus = !selectedStatus || status === selectedStatus;
            
            return matchesSearch && matchesMonth && matchesStatus;
        });
        
        // Clear table body
        paymentTableBody.innerHTML = '';
        
        // Show filtered rows
        if (visibleRows.length > 0) {
            visibleRows.forEach(row => {
                paymentTableBody.appendChild(row);
            });
            noResults.classList.add('hidden');
        } else {
            noResults.classList.remove('hidden');
        }
        
        // Re-attach event listeners to newly displayed rows
        attachRowEventListeners();
    }
    
    // Function to show payment details
    function showPaymentDetails(row) {
        selectedPayment = {
            id: row.getAttribute('data-id'),
            tenant: row.getAttribute('data-tenant'),
            room: row.getAttribute('data-room'),
            amount: row.getAttribute('data-amount'),
            date: row.getAttribute('data-date'),
            status: row.getAttribute('data-status'),
            image: row.getAttribute('data-image')
        };
        
        // Update detail panel
        document.getElementById('detailTenant').textContent = selectedPayment.tenant;
        document.getElementById('detailRoom').textContent = selectedPayment.room;
        document.getElementById('detailAmount').textContent = selectedPayment.amount;
        document.getElementById('detailDate').textContent = formatDate(selectedPayment.date);
        document.getElementById('detailImage').src = selectedPayment.image;
        
        // Show detail content, hide empty state
        emptyState.classList.add('hidden');
        detailContent.classList.remove('hidden');
        
        // Highlight selected row
        allRows.forEach(r => r.classList.remove('bg-blue-50'));
        row.classList.add('bg-blue-50');
    }
    
    // Function to format date
    function formatDate(dateStr) {
        const date = new Date(dateStr);
        const day = date.getDate();
        const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        const month = months[date.getMonth()];
        const year = date.getFullYear();
        return `${day} ${month} ${year}`;
    }
    
    // Function to attach event listeners to rows
    function attachRowEventListeners() {
        const rows = paymentTableBody.querySelectorAll('.payment-row');
        rows.forEach(row => {
            // Click on row to view details
            row.addEventListener('click', function(e) {
                // Don't trigger if clicking on action buttons or image
                if (!e.target.closest('button') && !e.target.closest('img')) {
                    showPaymentDetails(this);
                }
            });
            
            // View button
            const viewBtn = row.querySelector('.view-btn');
            if (viewBtn) {
                viewBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    showPaymentDetails(row);
                });
            }
            
            // Confirm button
            const confirmBtn = row.querySelector('.confirm-btn');
            if (confirmBtn) {
                confirmBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    handleConfirm(row);
                });
            }
            
            // Reject button
            const rejectBtn = row.querySelector('.reject-btn');
            if (rejectBtn) {
                rejectBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    handleReject(row);
                });
            }
        });
    }
    
    // Handle confirm action
    function handleConfirm(row) {
        const paymentId = row.getAttribute('data-id');
        if (confirm(`Konfirmasi pembayaran ${paymentId}?`)) {
            row.setAttribute('data-status', 'Confirmed');
            const statusBadge = row.querySelector('td:nth-child(6) span');
            statusBadge.style.backgroundColor = '#E8F5E9';
            statusBadge.style.color = '#4CAF50';
            statusBadge.textContent = 'Confirmed';
            
            alert('Pembayaran telah dikonfirmasi!');
        }
    }
    
    // Handle reject action
    function handleReject(row) {
        const paymentId = row.getAttribute('data-id');
        if (confirm(`Tolak pembayaran ${paymentId}?`)) {
            row.setAttribute('data-status', 'Rejected');
            const statusBadge = row.querySelector('td:nth-child(6) span');
            statusBadge.style.backgroundColor = '#FFEBEE';
            statusBadge.style.color = '#F44336';
            statusBadge.textContent = 'Rejected';
            
            alert('Pembayaran telah ditolak!');
        }
    }
    
    // Detail panel action buttons
    document.getElementById('confirmDetailBtn').addEventListener('click', function() {
        if (selectedPayment) {
            const row = Array.from(allRows).find(r => r.getAttribute('data-id') === selectedPayment.id);
            if (row) handleConfirm(row);
        }
    });
    
    document.getElementById('rejectDetailBtn').addEventListener('click', function() {
        if (selectedPayment) {
            const row = Array.from(allRows).find(r => r.getAttribute('data-id') === selectedPayment.id);
            if (row) handleReject(row);
        }
    });
    
    // Reset button
    resetBtn.addEventListener('click', function() {
        searchInput.value = '';
        monthFilter.value = '';
        statusFilter.value = '';
        filterPayments();
    });
    
    // Event listeners for filters
    searchInput.addEventListener('input', filterPayments);
    monthFilter.addEventListener('change', filterPayments);
    statusFilter.addEventListener('change', filterPayments);
    
    // Initialize
    attachRowEventListeners();
});
</script>
@endsection