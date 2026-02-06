@extends('admin.layouts.app')
@section('content')
<div class="min-h-screen" style="background-color: #f7f7ff;">
    <div class="flex-1 p-8">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-3xl font-bold text-black">Tenants</h1>
                <p class="text-gray-600 text-sm mt-1">Kelola penyewa kos</p>
            </div>

            <!-- Profile Icon -->
            <button class="flex-shrink-0 w-12 h-12 rounded-full flex items-center justify-center" style="background-color: #ffffff; border: 2px solid #FB4448;">
                <svg class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                </svg>
            </button>
        </div>

        <!-- Search Bar -->
        <div class="mb-6">
            <input 
                type="text" 
                placeholder="Search" 
                class="w-full px-6 py-4 rounded-lg focus:outline-none text-base" 
                style="background-color: #ffffff; border: 2px solid #FB4448;"
            >
        </div>

        <!-- Tabs -->
        <div class="flex gap-4 mb-6">
            <button onclick="filterTenants('all')" id="tab-all" class="px-6 py-3 font-bold rounded-lg" style="background-color: #ffffff; color: #FB4448; border: 2px solid #FB4448;">
                Semua
            </button>
            <button onclick="filterTenants('movein')" id="tab-movein" class="px-6 py-3 font-semibold text-gray-700 rounded-lg hover:bg-gray-50" style="background-color: #ffffff; border: 2px solid #e5e7eb;">
                Move In
            </button>
            <button onclick="filterTenants('moveout')" id="tab-moveout" class="px-6 py-3 font-semibold text-gray-700 rounded-lg hover:bg-gray-50" style="background-color: #ffffff; border: 2px solid #e5e7eb;">
                Move Out
            </button>
        </div>

        <!-- Tenants List -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-black mb-4">Tenants List</h2>
            
            <!-- Table -->
            <div class="rounded-lg overflow-hidden" style="background-color: #ffffff; border: 2px solid #FB4448;">
                <table class="w-full">
                    <thead>
                        <tr style="background-color: #FB4448;">
                            <th class="px-6 py-4 text-left text-white font-bold text-sm">Name</th>
                            <th class="px-6 py-4 text-left text-white font-bold text-sm">Gender</th>
                            <th class="px-6 py-4 text-left text-white font-bold text-sm">Kamar</th>
                            <th class="px-6 py-4 text-left text-white font-bold text-sm">Kontak</th>
                            <th class="px-6 py-4 text-left text-white font-bold text-sm">Status</th>
                            <th class="px-6 py-4 text-left text-white font-bold text-sm">Date</th>
                            <th class="px-6 py-4 text-left text-white font-bold text-sm">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr class="border-b border-gray-200 tenant-row" data-status="movein">
                            <td class="px-6 py-4 text-sm text-gray-900">Mingyu</td>
                            <td class="px-6 py-4 text-sm text-gray-900">Pria</td>
                            <td class="px-6 py-4 text-sm text-gray-900">20</td>
                            <td class="px-6 py-4 text-sm text-gray-900">081234567890</td>
                            <td class="px-6 py-4">
                                <span class="px-4 py-2 rounded-lg text-sm font-semibold" style="background-color: #d1f4e0; color: #2d7a4f;">Move In</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">21 Januari 2027</td>
                            <td class="px-6 py-4">
                                <div class="flex gap-3">
                                    <button class="text-yellow-500 hover:text-yellow-600">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                        </svg>
                                    </button>
                                    <button class="text-red-500 hover:text-red-600">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="border-b border-gray-200 tenant-row" data-status="movein">
                            <td class="px-6 py-4 text-sm text-gray-900">Leonel</td>
                            <td class="px-6 py-4 text-sm text-gray-900">Pria</td>
                            <td class="px-6 py-4 text-sm text-gray-900">17</td>
                            <td class="px-6 py-4 text-sm text-gray-900">081234567890</td>
                            <td class="px-6 py-4">
                                <span class="px-4 py-2 rounded-lg text-sm font-semibold" style="background-color: #d1f4e0; color: #2d7a4f;">Move In</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">21 Januari 2027</td>
                            <td class="px-6 py-4">
                                <div class="flex gap-3">
                                    <button class="text-yellow-500 hover:text-yellow-600">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                        </svg>
                                    </button>
                                    <button class="text-red-500 hover:text-red-600">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="border-b border-gray-200 tenant-row" data-status="moveout">
                            <td class="px-6 py-4 text-sm text-gray-900">Nolan</td>
                            <td class="px-6 py-4 text-sm text-gray-900">Pria</td>
                            <td class="px-6 py-4 text-sm text-gray-900">1</td>
                            <td class="px-6 py-4 text-sm text-gray-900">081234567890</td>
                            <td class="px-6 py-4">
                                <span class="px-4 py-2 rounded-lg text-sm font-semibold" style="background-color: #ffe0e0; color: #c53030;">Move Out</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">21 Januari 2027</td>
                            <td class="px-6 py-4">
                                <div class="flex gap-3">
                                    <button class="text-yellow-500 hover:text-yellow-600">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                        </svg>
                                    </button>
                                    <button class="text-red-500 hover:text-red-600">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr class="border-b border-gray-200 tenant-row" data-status="movein">
                            <td class="px-6 py-4 text-sm text-gray-900">Marco</td>
                            <td class="px-6 py-4 text-sm text-gray-900">Pria</td>
                            <td class="px-6 py-4 text-sm text-gray-900">4</td>
                            <td class="px-6 py-4 text-sm text-gray-900">081234567890</td>
                            <td class="px-6 py-4">
                                <span class="px-4 py-2 rounded-lg text-sm font-semibold" style="background-color: #d1f4e0; color: #2d7a4f;">Move In</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">21 Januari 2027</td>
                            <td class="px-6 py-4">
                                <div class="flex gap-3">
                                    <button class="text-yellow-500 hover:text-yellow-600">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                        </svg>
                                    </button>
                                    <button class="text-red-500 hover:text-red-600">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr class="tenant-row" data-status="moveout">
                            <td class="px-6 py-4 text-sm text-gray-900">Jiwa</td>
                            <td class="px-6 py-4 text-sm text-gray-900">Pria</td>
                            <td class="px-6 py-4 text-sm text-gray-900">13</td>
                            <td class="px-6 py-4 text-sm text-gray-900">081234567890</td>
                            <td class="px-6 py-4">
                                <span class="px-4 py-2 rounded-lg text-sm font-semibold" style="background-color: #ffe0e0; color: #c53030;">Move Out</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">21 Januari 2027</td>
                            <td class="px-6 py-4">
                                <div class="flex gap-3">
                                    <button class="text-yellow-500 hover:text-yellow-600">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                        </svg>
                                    </button>
                                    <button class="text-red-500 hover:text-red-600">
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
        </div>

        <!-- Pagination -->
        <div class="flex justify-end items-center gap-3">
            <button class="w-10 h-10 rounded-lg flex items-center justify-center font-bold" style="background-color: #ffffff; color: #FB4448; border: 2px solid #FB4448;">
                2
            </button>
            <button class="px-5 py-2 rounded-lg font-semibold flex items-center gap-2" style="background-color: #ffffff; color: #FB4448; border: 2px solid #FB4448;">
                Selanjutnya
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>
    </div>
</div>

<script>
function filterTenants(type) {
    // Remove active state from all tabs
    document.getElementById('tab-all').style.cssText = 'background-color: #ffffff; color: #6b7280; border: 2px solid #e5e7eb;';
    document.getElementById('tab-movein').style.cssText = 'background-color: #ffffff; color: #6b7280; border: 2px solid #e5e7eb;';
    document.getElementById('tab-moveout').style.cssText = 'background-color: #ffffff; color: #6b7280; border: 2px solid #e5e7eb;';
    
    // Add active state to clicked tab
    if (type === 'all') {
        document.getElementById('tab-all').style.cssText = 'background-color: #ffffff; color: #FB4448; border: 2px solid #FB4448; font-weight: bold;';
    } else if (type === 'movein') {
        document.getElementById('tab-movein').style.cssText = 'background-color: #ffffff; color: #FB4448; border: 2px solid #FB4448; font-weight: bold;';
    } else if (type === 'moveout') {
        document.getElementById('tab-moveout').style.cssText = 'background-color: #ffffff; color: #FB4448; border: 2px solid #FB4448; font-weight: bold;';
    }
    
    // Filter tenant rows
    const tenantRows = document.querySelectorAll('.tenant-row');
    
    tenantRows.forEach(row => {
        if (type === 'all') {
            // Show all rows
            row.style.display = '';
        } else {
            // Show only rows matching the selected status
            if (row.getAttribute('data-status') === type) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    });
}
</script>
@endsection