@extends('admin.layouts.app')
@section('content')
<div class="min-h-screen" style="background-color: #f7f7ff;">
    <!-- Header -->
    <div class="px-6 py-6 flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-black">Booking Management</h1>
            <p class="text-gray-600 text-sm mt-1">Kelola Data Pesanan Kamar</p>
        </div>

        <!-- Profile Icon -->
        <button class="flex-shrink-0 w-12 h-12 rounded-full flex items-center justify-center" style="background-color: #ffffff; border: 2px solid #FB4448;">
            <svg class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
            </svg>
        </button>
    </div>

    <div class="px-6">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="p-6 rounded-lg" style="background-color: #ffffff; border: 2px solid #FB4448;">
                <p class="text-black text-base font-semibold mb-2">Pending Booking</p>
                <h2 class="text-5xl font-bold" id="pendingCount">3</h2>
            </div>
            <div class="p-6 rounded-lg" style="background-color: #ffffff; border: 2px solid #FB4448;">
                <p class="text-black text-base font-semibold mb-2">Confirmed Booking</p>
                <h2 class="text-5xl font-bold" id="confirmedCount">12</h2>
            </div>
            <div class="p-6 rounded-lg" style="background-color: #ffffff; border: 2px solid #FB4448;">
                <p class="text-black text-base font-semibold mb-2">Today's Booking</p>
                <h2 class="text-5xl font-bold" id="todayCount">4</h2>
            </div>
        </div>

        <!-- Search and Filters -->
        <div class="grid grid-cols-1 md:grid-cols-6 gap-4 mb-6">
            <!-- Search -->
            <div class="md:col-span-4">
                <input 
                    type="text" 
                    id="searchInput"
                    placeholder="Search Booking..." 
                    class="w-full px-6 py-3 rounded-full focus:outline-none text-sm" 
                    style="background-color: #ffffff; border: 2px solid #FB4448;"
                >
            </div>

            <!-- Status Filter -->
            <div>
                <select id="statusFilter" class="w-full px-6 py-3 rounded-full focus:outline-none text-sm font-semibold appearance-none" style="background-color: #ffffff; border: 2px solid #FB4448; background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em 1.5em;">
                    <option value="">All Status</option>
                    <option value="Pending">Pending</option>
                    <option value="Confirmed">Confirmed</option>
                    <option value="Cancelled">Cancelled</option>
                </select>
            </div>

            <!-- Date Filter -->
            <div>
                <select id="dateFilter" class="w-full px-6 py-3 rounded-full focus:outline-none text-sm font-semibold appearance-none" style="background-color: #ffffff; border: 2px solid #FB4448; background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em 1.5em;">
                    <option value="">All Dates</option>
                    <option value="today">Today</option>
                    <option value="week">This Week</option>
                    <option value="month">This Month</option>
                </select>
            </div>
        </div>

        <!-- Booking List Table -->
        <div class="rounded-lg p-6" style="background-color: #ffffff; border: 2px solid #FB4448;">
            <div class="mb-4">
                <h3 class="text-2xl font-bold">Booking List</h3>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-white" style="background-color: #FB4448;">
                            <th class="py-3 px-4 text-left font-bold">Booking ID</th>
                            <th class="py-3 px-4 text-left font-bold">Name</th>
                            <th class="py-3 px-4 text-left font-bold">Room</th>
                            <th class="py-3 px-4 text-left font-bold">Booking Date</th>
                            <th class="py-3 px-4 text-left font-bold">Check In</th>
                            <th class="py-3 px-4 text-left font-bold">Action</th>
                        </tr>
                    </thead>
                    <tbody id="bookingTableBody" class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50" data-id="BK - 0011" data-name="Mingyu" data-room="Deluxe" data-booking-date="2027-01-20" data-checkin="2027-01-21" data-status="Pending">
                            <td class="py-3 px-4 font-medium">BK - 0011</td>
                            <td class="py-3 px-4">Mingyu</td>
                            <td class="py-3 px-4">Deluxe</td>
                            <td class="py-3 px-4">20 Januari 2027</td>
                            <td class="py-3 px-4">21 Januari 2027</td>
                            <td class="py-3 px-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-500 hover:text-blue-700" title="View">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700" title="Cancel">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-green-500 hover:text-green-700" title="Confirm">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50" data-id="BK - 0010" data-name="Leonel" data-room="Deluxe" data-booking-date="2026-12-28" data-checkin="2026-12-29" data-status="Confirmed">
                            <td class="py-3 px-4 font-medium">BK - 0010</td>
                            <td class="py-3 px-4">Leonel</td>
                            <td class="py-3 px-4">Deluxe</td>
                            <td class="py-3 px-4">28 Desember 2026</td>
                            <td class="py-3 px-4">29 Desember 2026</td>
                            <td class="py-3 px-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-500 hover:text-blue-700" title="View">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700" title="Cancel">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-green-500 hover:text-green-700" title="Confirm">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50" data-id="BK - 0009" data-name="Milen" data-room="Standard" data-booking-date="2026-12-12" data-checkin="2026-12-15" data-status="Confirmed">
                            <td class="py-3 px-4 font-medium">BK - 0009</td>
                            <td class="py-3 px-4">Milen</td>
                            <td class="py-3 px-4">Standard</td>
                            <td class="py-3 px-4">12 Desember 2026</td>
                            <td class="py-3 px-4">15 Desember 2026</td>
                            <td class="py-3 px-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-500 hover:text-blue-700" title="View">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700" title="Cancel">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-green-500 hover:text-green-700" title="Confirm">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50" data-id="BK - 0008" data-name="Harvey" data-room="Economy" data-booking-date="2026-11-15" data-checkin="2026-11-17" data-status="Confirmed">
                            <td class="py-3 px-4 font-medium">BK - 0008</td>
                            <td class="py-3 px-4">Harvey</td>
                            <td class="py-3 px-4">Economy</td>
                            <td class="py-3 px-4">15 November 2026</td>
                            <td class="py-3 px-4">17 November 2026</td>
                            <td class="py-3 px-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-500 hover:text-blue-700" title="View">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700" title="Cancel">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-green-500 hover:text-green-700" title="Confirm">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50" data-id="BK - 0007" data-name="Andrew" data-room="Economy" data-booking-date="2026-10-02" data-checkin="2026-10-04" data-status="Confirmed">
                            <td class="py-3 px-4 font-medium">BK - 0007</td>
                            <td class="py-3 px-4">Andrew</td>
                            <td class="py-3 px-4">Economy</td>
                            <td class="py-3 px-4">2 Oktober 2026</td>
                            <td class="py-3 px-4">4 Oktober 2026</td>
                            <td class="py-3 px-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-500 hover:text-blue-700" title="View">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700" title="Cancel">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-green-500 hover:text-green-700" title="Confirm">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50" data-id="BK - 0006" data-name="Nathaniel" data-room="Standard" data-booking-date="2026-07-01" data-checkin="2026-07-04" data-status="Pending">
                            <td class="py-3 px-4 font-medium">BK - 0006</td>
                            <td class="py-3 px-4">Nathaniel</td>
                            <td class="py-3 px-4">Standard</td>
                            <td class="py-3 px-4">1 Juli 2026</td>
                            <td class="py-3 px-4">4 Juli 2026</td>
                            <td class="py-3 px-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-500 hover:text-blue-700" title="View">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700" title="Cancel">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-green-500 hover:text-green-700" title="Confirm">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50" data-id="BK - 0005" data-name="Daniel" data-room="Standard" data-booking-date="2026-05-05" data-checkin="2026-05-06" data-status="Confirmed">
                            <td class="py-3 px-4 font-medium">BK - 0005</td>
                            <td class="py-3 px-4">Daniel</td>
                            <td class="py-3 px-4">Standard</td>
                            <td class="py-3 px-4">5 Mei 2026</td>
                            <td class="py-3 px-4">6 Mei 2026</td>
                            <td class="py-3 px-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-500 hover:text-blue-700" title="View">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700" title="Cancel">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-green-500 hover:text-green-700" title="Confirm">
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
                <p class="text-lg font-semibold">Tidak ada booking yang ditemukan</p>
                <p class="text-sm mt-2">Coba ubah kriteria pencarian atau filter Anda</p>
            </div>

            <!-- Pagination -->
            <div class="mt-6 flex justify-end items-center gap-3">
                <button class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-red-50 font-bold" style="border: 2px solid #FB4448; color: #FB4448;">
                    2
                </button>
                <button class="px-4 py-2 flex items-center gap-2 rounded-lg hover:bg-red-50 font-semibold" style="border: 2px solid #FB4448; color: #FB4448;">
                    Selanjutnya
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const statusFilter = document.getElementById('statusFilter');
    const dateFilter = document.getElementById('dateFilter');
    const bookingTableBody = document.getElementById('bookingTableBody');
    const noResults = document.getElementById('noResults');
    
    // Get all booking rows
    let allRows = Array.from(bookingTableBody.getElementsByTagName('tr'));
    
    // Function to parse date from format "DD Month YYYY" or ISO format
    function parseDate(dateStr) {
        if (dateStr.includes('-')) {
            // ISO format: YYYY-MM-DD
            return new Date(dateStr);
        }
        return null;
    }
    
    // Function to check if date is today
    function isToday(date) {
        const today = new Date();
        return date.getDate() === today.getDate() &&
               date.getMonth() === today.getMonth() &&
               date.getFullYear() === today.getFullYear();
    }
    
    // Function to check if date is in this week
    function isThisWeek(date) {
        const today = new Date();
        const firstDayOfWeek = new Date(today.setDate(today.getDate() - today.getDay()));
        const lastDayOfWeek = new Date(today.setDate(today.getDate() - today.getDay() + 6));
        return date >= firstDayOfWeek && date <= lastDayOfWeek;
    }
    
    // Function to check if date is in this month
    function isThisMonth(date) {
        const today = new Date();
        return date.getMonth() === today.getMonth() &&
               date.getFullYear() === today.getFullYear();
    }
    
    // Function to filter bookings
    function filterBookings() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedStatus = statusFilter.value;
        const selectedDate = dateFilter.value;
        
        // Filter rows
        let visibleRows = allRows.filter(row => {
            const bookingId = row.getAttribute('data-id').toLowerCase();
            const name = row.getAttribute('data-name').toLowerCase();
            const room = row.getAttribute('data-room').toLowerCase();
            const status = row.getAttribute('data-status');
            const bookingDateStr = row.getAttribute('data-booking-date');
            
            // Search filter (check ID, name, or room type)
            const matchesSearch = bookingId.includes(searchTerm) || 
                                name.includes(searchTerm) ||
                                room.includes(searchTerm);
            
            // Status filter
            const matchesStatus = !selectedStatus || status === selectedStatus;
            
            // Date filter
            let matchesDate = true;
            if (selectedDate && bookingDateStr) {
                const bookingDate = parseDate(bookingDateStr);
                if (bookingDate) {
                    switch(selectedDate) {
                        case 'today':
                            matchesDate = isToday(bookingDate);
                            break;
                        case 'week':
                            matchesDate = isThisWeek(bookingDate);
                            break;
                        case 'month':
                            matchesDate = isThisMonth(bookingDate);
                            break;
                    }
                }
            }
            
            return matchesSearch && matchesStatus && matchesDate;
        });
        
        // Clear table body
        bookingTableBody.innerHTML = '';
        
        // Show filtered rows
        if (visibleRows.length > 0) {
            visibleRows.forEach(row => {
                bookingTableBody.appendChild(row);
            });
            noResults.classList.add('hidden');
        } else {
            noResults.classList.remove('hidden');
        }
        
        // Update stats
        updateStats(visibleRows);
    }
    
    // Function to update statistics
    function updateStats(rows) {
        let pending = 0;
        let confirmed = 0;
        let today = 0;
        
        const currentDate = new Date();
        
        rows.forEach(row => {
            const status = row.getAttribute('data-status');
            const bookingDateStr = row.getAttribute('data-booking-date');
            
            if (status === 'Pending') pending++;
            else if (status === 'Confirmed') confirmed++;
            
            // Check if booking is for today
            if (bookingDateStr) {
                const bookingDate = parseDate(bookingDateStr);
                if (bookingDate && isToday(bookingDate)) {
                    today++;
                }
            }
        });
        
        document.getElementById('pendingCount').textContent = pending;
        document.getElementById('confirmedCount').textContent = confirmed;
        document.getElementById('todayCount').textContent = today;
    }
    
    // Event listeners
    searchInput.addEventListener('input', filterBookings);
    statusFilter.addEventListener('change', filterBookings);
    dateFilter.addEventListener('change', filterBookings);
    
    // Initialize stats
    updateStats(allRows);
});
</script>
@endsection