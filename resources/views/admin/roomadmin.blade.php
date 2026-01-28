@extends('admin.layouts.app')
@section('content')
<div class="min-h-screen" style="background-color: #f7f7ff;">
    <!-- Header -->
    <div class="px-6 py-6 flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-black">Rooms Management</h1>
            <p class="text-gray-600 text-sm mt-1">Kelola Data Kamar</p>
        </div>

        <!-- Profile Icon -->
        <button class="flex-shrink-0 w-12 h-12 border-2 hover:border-opacity-80 rounded-full flex items-center justify-center" style="background-color: #f7f7ff; border-color: #FB4448;">
            <svg class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
            </svg>
        </button>
    </div>

    <div class="px-6">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
            <div class="p-6 rounded-lg border-2" style="border-color: #FB4448; background-color: #ffffff;">
                <p class="text-black text-base font-semibold mb-2">Total Rooms</p>
                <h2 class="text-5xl font-bold">20</h2>
            </div>
            <div class="p-6 rounded-lg border-2" style="border-color: #FB4448; background-color: #ffffff;">
                <p class="text-black text-base font-semibold mb-2">Available</p>
                <h2 class="text-5xl font-bold">3</h2>
            </div>
            <div class="p-6 rounded-lg border-2" style="border-color: #FB4448; background-color: #ffffff;">
                <p class="text-black text-base font-semibold mb-2">Occupied</p>
                <h2 class="text-5xl font-bold">15</h2>
            </div>
            <div class="p-6 rounded-lg border-2" style="border-color: #FB4448; background-color: #ffffff;">
                <p class="text-black text-base font-semibold mb-2">Maintenance</p>
                <h2 class="text-5xl font-bold">2</h2>
            </div>
        </div>

        <!-- Search and Filters -->
        <div class="grid grid-cols-1 md:grid-cols-6 gap-4 mb-6">
            <!-- Search -->
            <div class="md:col-span-3">
                <input 
                    type="text" 
                    placeholder="Search Rooms..." 
                    class="w-full px-6 py-3 border-2 rounded-full focus:outline-none text-sm" 
                    style="background-color: #ffffff; border-color: #FB4448;"
                >
            </div>

            <!-- Type Filter -->
            <div>
                <select class="w-full px-6 py-3 border-2 rounded-full focus:outline-none text-sm font-semibold appearance-none" style="background-color: #ffffff; border-color: #FB4448; background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em 1.5em;">
                    <option>Type</option>
                    <option>Deluxe</option>
                    <option>Standard</option>
                    <option>Economy</option>
                </select>
            </div>

            <!-- Status Filter -->
            <div>
                <select class="w-full px-6 py-3 border-2 rounded-full focus:outline-none text-sm font-semibold appearance-none" style="background-color: #ffffff; border-color: #FB4448; background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em 1.5em;">
                    <option>Status</option>
                    <option>Available</option>
                    <option>Occupied</option>
                    <option>Maintenance</option>
                </select>
            </div>

            <!-- Price Filter -->
            <div>
                <select class="w-full px-6 py-3 border-2 rounded-full focus:outline-none text-sm font-semibold appearance-none" style="background-color: #ffffff; border-color: #FB4448; background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em 1.5em;">
                    <option>Price</option>
                    <option>Low to High</option>
                    <option>High to Low</option>
                </select>
            </div>
        </div>

        <!-- Room List Table -->
        <div class="rounded-lg border-2 p-6" style="border-color: #FB4448; background-color: #ffffff;">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-2xl font-bold">Room List</h3>
                <button class="text-white font-semibold py-3 px-6 rounded-lg flex items-center gap-2" style="background-color: #FB4448;" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Add Room
                </button>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-white" style="background-color: #FB4448;">
                            <th class="py-3 px-4 text-left font-bold">Room</th>
                            <th class="py-3 px-4 text-left font-bold">Type</th>
                            <th class="py-3 px-4 text-left font-bold">Price / Month</th>
                            <th class="py-3 px-4 text-left font-bold">Status</th>
                            <th class="py-3 px-4 text-left font-bold">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 font-medium">20</td>
                            <td class="py-3 px-4">Deluxe</td>
                            <td class="py-3 px-4">Rp. 1.500.000</td>
                            <td class="py-3 px-4">
                                <span class="px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-700">Available</span>
                            </td>
                            <td class="py-3 px-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-500 hover:text-blue-700">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-yellow-500 hover:text-yellow-700">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                        </svg>
                                    </button>
                                    <button class="hover:text-red-700" style="color: #FB4448;">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 font-medium">19</td>
                            <td class="py-3 px-4">Economy</td>
                            <td class="py-3 px-4">Rp. 350.000</td>
                            <td class="py-3 px-4">
                                <span class="px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-700">Occupied</span>
                            </td>
                            <td class="py-3 px-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-500 hover:text-blue-700">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-yellow-500 hover:text-yellow-700">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                        </svg>
                                    </button>
                                    <button class="hover:text-red-700" style="color: #FB4448;">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 font-medium">18</td>
                            <td class="py-3 px-4">Standard</td>
                            <td class="py-3 px-4">Rp. 700.000</td>
                            <td class="py-3 px-4">
                                <span class="px-3 py-1 rounded-full text-sm font-medium bg-orange-100 text-orange-700">Maintenance</span>
                            </td>
                            <td class="py-3 px-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-500 hover:text-blue-700">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-yellow-500 hover:text-yellow-700">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                        </svg>
                                    </button>
                                    <button class="hover:text-red-700" style="color: #FB4448;">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 font-medium">17</td>
                            <td class="py-3 px-4">Standard</td>
                            <td class="py-3 px-4">Rp. 700.000</td>
                            <td class="py-3 px-4">
                                <span class="px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-700">Occupied</span>
                            </td>
                            <td class="py-3 px-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-500 hover:text-blue-700">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 0 100-4 2 2 0 000 4z"/>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-yellow-500 hover:text-yellow-700">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                        </svg>
                                    </button>
                                    <button class="hover:text-red-700" style="color: #FB4448;">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 font-medium">16</td>
                            <td class="py-3 px-4">Deluxe</td>
                            <td class="py-3 px-4">Rp. 1.500.000</td>
                            <td class="py-3 px-4">
                                <span class="px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-700">Available</span>
                            </td>
                            <td class="py-3 px-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-500 hover:text-blue-700">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-yellow-500 hover:text-yellow-700">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                        </svg>
                                    </button>
                                    <button class="hover:text-red-700" style="color: #FB4448;">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
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
    </div>
</div>
@endsection