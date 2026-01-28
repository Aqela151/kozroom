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
                    placeholder="Search by Payment ID, Tenant, Room..." 
                    class="w-full px-6 py-3 border-2 rounded-full focus:outline-none text-sm" 
                    style="background-color: #ffffff; border-color: #FB4448;"
                >
            </div>

            <!-- Bulan Filter -->
            <div class="md:col-span-2">
                <select class="w-full px-6 py-3 border-2 rounded-full focus:outline-none text-sm font-semibold appearance-none" style="background-color: #ffffff; border-color: #FB4448; background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em 1.5em;">
                    <option>Bulan</option>
                    <option>Januari</option>
                    <option>Februari</option>
                    <option>Maret</option>
                    <option>April</option>
                    <option>Mei</option>
                    <option>Juni</option>
                    <option>Juli</option>
                    <option>Agustus</option>
                    <option>September</option>
                    <option>Oktober</option>
                    <option>November</option>
                    <option>Desember</option>
                </select>
            </div>

            <!-- Status Filter -->
            <div class="md:col-span-2">
                <select class="w-full px-6 py-3 border-2 rounded-full focus:outline-none text-sm font-semibold appearance-none" style="background-color: #ffffff; border-color: #FB4448; background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em 1.5em;">
                    <option>Status</option>
                    <option>Pending</option>
                    <option>Confirmed</option>
                    <option>Rejected</option>
                </select>
            </div>

            <!-- Reset Button -->
            <div class="md:col-span-2">
                <button class="w-full text-white font-semibold py-3 px-6 rounded-full" style="background-color: #FB4448;" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                    Reset
                </button>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Payment List Table -->
            <div class="lg:col-span-2 rounded-lg border-2 p-6" style="border-color: #FB4448; background-color: #ffffff;">
                <div class="mb-4">
                    <h3 class="text-2xl font-bold">Payment List</h3>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="text-white" style="background-color: #FB4448;">
                                <th class="py-3 px-4 text-left font-bold">Payment ID</th>
                                <th class="py-3 px-4 text-left font-bold">Tenant</th>
                                <th class="py-3 px-4 text-left font-bold">Room</th>
                                <th class="py-3 px-4 text-left font-bold">Amount</th>
                                <th class="py-3 px-4 text-left font-bold">Date</th>
                                <th class="py-3 px-4 text-left font-bold">Status</th>
                                <th class="py-3 px-4 text-left font-bold">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4 font-medium">PMT - 0011</td>
                                <td class="py-3 px-4">Mingyu</td>
                                <td class="py-3 px-4">20</td>
                                <td class="py-3 px-4">3.000.000</td>
                                <td class="py-3 px-4">14 Jan 2027</td>
                                <td class="py-3 px-4">
                                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-700">Pending</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-500 hover:text-blue-700">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="hover:text-red-700" style="color: #FB4448;">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="text-green-500 hover:text-green-700">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4 font-medium">PMT - 0010</td>
                                <td class="py-3 px-4">Leonel</td>
                                <td class="py-3 px-4">1</td>
                                <td class="py-3 px-4">1.500.000</td>
                                <td class="py-3 px-4">25 Dec 2026</td>
                                <td class="py-3 px-4">
                                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-700">Confirmed</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-500 hover:text-blue-700">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="hover:text-red-700" style="color: #FB4448;">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="text-green-500 hover:text-green-700">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4 font-medium">PMT - 0009</td>
                                <td class="py-3 px-4">Gabriel</td>
                                <td class="py-3 px-4">13</td>
                                <td class="py-3 px-4">700.000</td>
                                <td class="py-3 px-4">26 Nov 2026</td>
                                <td class="py-3 px-4">
                                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-700">Confirmed</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-500 hover:text-blue-700">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="hover:text-red-700" style="color: #FB4448;">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="text-green-500 hover:text-green-700">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4 font-medium">PMT - 0008</td>
                                <td class="py-3 px-4">Nathaniel</td>
                                <td class="py-3 px-4">11</td>
                                <td class="py-3 px-4">1.400.000</td>
                                <td class="py-3 px-4">10 Nov 2026</td>
                                <td class="py-3 px-4">
                                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-700">Rejected</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-500 hover:text-blue-700">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="hover:text-red-700" style="color: #FB4448;">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="text-green-500 hover:text-green-700">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4 font-medium">PMT - 0007</td>
                                <td class="py-3 px-4">Harvey</td>
                                <td class="py-3 px-4">3</td>
                                <td class="py-3 px-4">700.000</td>
                                <td class="py-3 px-4">17 Oct 2026</td>
                                <td class="py-3 px-4">
                                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-700">Confirmed</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-500 hover:text-blue-700">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="hover:text-red-700" style="color: #FB4448;">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="text-green-500 hover:text-green-700">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4 font-medium">PMT - 0006</td>
                                <td class="py-3 px-4">Daniel</td>
                                <td class="py-3 px-4">19</td>
                                <td class="py-3 px-4">350.000</td>
                                <td class="py-3 px-4">13 Sept 2026</td>
                                <td class="py-3 px-4">
                                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-700">Confirmed</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-500 hover:text-blue-700">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="hover:text-red-700" style="color: #FB4448;">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="text-green-500 hover:text-green-700">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4 font-medium">PMT - 0005</td>
                                <td class="py-3 px-4">Andrew</td>
                                <td class="py-3 px-4">17</td>
                                <td class="py-3 px-4">1.050.000</td>
                                <td class="py-3 px-4">7 Sept 2026</td>
                                <td class="py-3 px-4">
                                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-700">Confirmed</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex gap-2">
                                        <button class="text-blue-500 hover:text-blue-700">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="hover:text-red-700" style="color: #FB4448;">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <button class="text-green-500 hover:text-green-700">
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

                <div class="text-center text-gray-600 mb-6">
                    <p class="text-sm">Pilih data pembayaran untuk melihat detail</p>
                </div>

                <!-- Image Placeholder -->
                <div class="border-2 border-dashed border-gray-300 rounded-lg mb-6 flex items-center justify-center" style="height: 200px;">
                    <div class="text-center text-gray-400">
                        <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <p class="text-sm">Image Preview</p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex gap-3">
                    <button class="flex-1 bg-gray-800 hover:bg-gray-900 text-white font-semibold py-3 px-6 rounded-lg">
                        Confirm
                    </button>
                    <button class="flex-1 text-white font-semibold py-3 px-6 rounded-lg" style="background-color: #FB4448;" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                        Reject
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection