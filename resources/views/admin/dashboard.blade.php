@extends('admin.layouts.app')
@section('content')
<div class="min-h-screen" style="background-color: #f7f7ff;">
    <!-- Header with Search and Profile -->
    <div class="px-6 py-6 flex items-center justify-center gap-4">
        <!-- Search Bar - Centered with max width -->
        <div class="flex items-center gap-3 w-full max-w-3xl">
            <button id="searchBtn" class="flex-shrink-0 w-12 h-12 rounded-full flex items-center justify-center text-white" style="background-color: #FB4448;">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </button>
            <input 
                id="searchInput"
                type="text" 
                placeholder="Type to search" 
                class="flex-1 px-6 py-3 border-2 border-gray-300 rounded-full focus:outline-none text-sm" 
                style="background-color: #ffffff; border-color: #FB4448;"
            >
            <!-- Profile Icon -->
            <button class="flex-shrink-0 w-12 h-12 rounded-full flex items-center justify-center" style="background-color: #f7f7ff; border: 2px solid #FB4448;">
                <svg class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                </svg>
            </button>
        </div>
    </div>

    <div class="px-6 pb-6 mt-4">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div class="p-4 rounded-lg" style="background-color: #ffffff; border: 2px solid #FB4448;">
            <p class="text-black text-base font-semibold mb-1">Booking</p>
            <h2 class="text-4xl font-bold">3</h2>
        </div>
        <div class="p-4 rounded-lg" style="background-color: #ffffff; border: 2px solid #FB4448;">
            <p class="text-black text-base font-semibold mb-1">Tenant</p>
            <h2 class="text-4xl font-bold">36</h2>
        </div>
        <div class="p-4 rounded-lg" style="background-color: #ffffff; border: 2px solid #FB4448;">
            <p class="text-black text-base font-semibold mb-1">Messages</p>
            <h2 class="text-4xl font-bold">10</h2>
        </div>
        <div class="p-4 rounded-lg" style="background-color: #ffffff; border: 2px solid #FB4448;">
            <p class="text-black text-base font-semibold mb-1">Available Rooms</p>
            <h2 class="text-4xl font-bold">4</h2>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
        <!-- Recent Booking (Left - spans 2 columns) -->
        <div class="lg:col-span-2 rounded-lg p-4" style="background-color: #ffffff; border: 2px solid #FB4448;">
            <div class="flex justify-between items-center mb-3">
                <h3 class="text-lg font-bold">Recent Booking</h3>
                <a href="#" class="text-sm font-semibold flex items-center" style="color: #FB4448;">
                    View All 
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full text-sm" id="bookingTable">
                    <thead>
                        <tr class="text-white" style="background-color: #FB4448;">
                            <th class="py-2 px-3 text-left font-semibold">Name</th>
                            <th class="py-2 px-3 text-left font-semibold">Room</th>
                            <th class="py-2 px-3 text-left font-semibold">Date</th>
                            <th class="py-2 px-3 text-left font-semibold">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200" id="bookingTableBody">
                        <tr class="hover:bg-gray-50 searchable-row">
                            <td class="py-2 px-3">Joshua</td>
                            <td class="py-2 px-3">Deluxe</td>
                            <td class="py-2 px-3">17 Jan 2027</td>
                            <td class="py-2 px-3">
                                <span class="px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Pending</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 searchable-row">
                            <td class="py-2 px-3">Mingyu</td>
                            <td class="py-2 px-3">Standard</td>
                            <td class="py-2 px-3">2 Jan 2027</td>
                            <td class="py-2 px-3">
                                <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">Completed</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 searchable-row">
                            <td class="py-2 px-3">San</td>
                            <td class="py-2 px-3">Economy</td>
                            <td class="py-2 px-3">27 Des 2026</td>
                            <td class="py-2 px-3">
                                <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">Completed</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 searchable-row">
                            <td class="py-2 px-3">Leonel</td>
                            <td class="py-2 px-3">Deluxe</td>
                            <td class="py-2 px-3">21 Des 2026</td>
                            <td class="py-2 px-3">
                                <span class="px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">Rejected</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 searchable-row">
                            <td class="py-2 px-3">Milen</td>
                            <td class="py-2 px-3">Standard</td>
                            <td class="py-2 px-3">24 Nov 2026</td>
                            <td class="py-2 px-3">
                                <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">Completed</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- No Results Message -->
                <div id="noResults" class="hidden text-center py-8 text-gray-500">
                    <svg class="w-12 h-12 mx-auto mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <p class="text-sm font-medium">No results found</p>
                    <p class="text-xs mt-1">Try different keywords</p>
                </div>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="space-y-4">
            <!-- Quick Access -->
            <div class="rounded-lg p-4" style="background-color: #ffffff; border: 2px solid #FB4448;">
                <h3 class="text-lg font-bold mb-3">Quick Access</h3>
                <button class="w-full text-white font-semibold py-2.5 px-4 rounded-lg mb-2 flex items-center justify-center text-sm" style="background-color: #FB4448;">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Add Room
                </button>
                <button class="w-full hover:bg-gray-50 text-black font-semibold py-2.5 px-4 rounded-lg border-2 border-gray-300 text-sm" style="background-color: #ffffff;">
                    Manage Booking
                </button>
            </div>

            <!-- Daily Summary -->
            <div class="rounded-lg p-4" style="background-color: #ffffff; border: 2px solid #FB4448;">
                <h3 class="text-lg font-bold mb-3" style="color: #FB4448;">Daily Summary</h3>
                <div class="space-y-2">
                    <div class="flex justify-between items-center p-2.5 border-2 border-gray-300 rounded-lg" style="background-color: #ffffff;">
                        <span class="font-semibold text-sm">Booking Today</span>
                        <span class="font-bold text-lg">1</span>
                    </div>
                    <div class="flex justify-between items-center p-2.5 border-2 border-gray-300 rounded-lg" style="background-color: #ffffff;">
                        <span class="font-semibold text-sm">Payment Today</span>
                        <span class="font-bold text-lg">1</span>
                    </div>
                    <div class="flex justify-between items-center p-2.5 border-2 border-gray-300 rounded-lg" style="background-color: #ffffff;">
                        <span class="font-semibold text-sm">New Messages</span>
                        <span class="font-bold text-lg">7</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-6">
        <!-- Room Status -->
        <div class="rounded-lg overflow-hidden" style="border: 2px solid #FB4448;">
            <h3 class="text-lg font-bold text-white py-2.5 px-4" style="background-color: #FB4448;">Room Status</h3>
            <div class="p-4" style="background-color: #ffffff;">
                <div class="space-y-3">
                    <div class="flex items-center py-2 border-b border-gray-200">
                        <span class="font-bold w-28 text-sm">Deluxe:</span>
                        <span class="text-gray-700 text-sm">Full</span>
                    </div>
                    <div class="flex items-center py-2 border-b border-gray-200">
                        <span class="font-bold w-28 text-sm">Standard:</span>
                        <span class="text-gray-700 text-sm">Available</span>
                    </div>
                    <div class="flex items-center py-2">
                        <span class="font-bold w-28 text-sm">Economy:</span>
                        <span class="text-gray-700 text-sm">1 Available</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Move In/Move Out -->
        <div class="rounded-lg p-4" style="background-color: #ffffff; border: 2px solid #FB4448;">
            <h3 class="text-lg font-bold mb-3">Upcoming Move in / Move Out</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-sm" id="moveTable">
                    <thead>
                        <tr class="text-white" style="background-color: #FB4448;">
                            <th class="py-2 px-3 text-left font-semibold">Name</th>
                            <th class="py-2 px-3 text-left font-semibold">Room</th>
                            <th class="py-2 px-3 text-left font-semibold">Type</th>
                            <th class="py-2 px-3 text-left font-semibold">Date</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200" id="moveTableBody">
                        <tr class="hover:bg-gray-50 searchable-row">
                            <td class="py-2 px-3">Mingyu</td>
                            <td class="py-2 px-3">12</td>
                            <td class="py-2 px-3">
                                <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Move In</span>
                            </td>
                            <td class="py-2 px-3">25 Januari 2027</td>
                        </tr>
                        <tr class="hover:bg-gray-50 searchable-row">
                            <td class="py-2 px-3">Joshua</td>
                            <td class="py-2 px-3">19</td>
                            <td class="py-2 px-3">
                                <span class="px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700">Move Out</span>
                            </td>
                            <td class="py-2 px-3">28 Desember 2026</td>
                        </tr>
                        <tr class="hover:bg-gray-50 searchable-row">
                            <td class="py-2 px-3">San</td>
                            <td class="py-2 px-3">11</td>
                            <td class="py-2 px-3">
                                <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Move In</span>
                            </td>
                            <td class="py-2 px-3">27 November 2026</td>
                        </tr>
                        <tr class="hover:bg-gray-50 searchable-row">
                            <td class="py-2 px-3">Louis</td>
                            <td class="py-2 px-3">9</td>
                            <td class="py-2 px-3">
                                <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Move In</span>
                            </td>
                            <td class="py-2 px-3">11 November 2026</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const searchBtn = document.getElementById('searchBtn');
    const noResults = document.getElementById('noResults');
    
    // Function to perform search
    function performSearch() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        const allRows = document.querySelectorAll('.searchable-row');
        let visibleCount = 0;
        
        allRows.forEach(row => {
            const text = row.textContent.toLowerCase();
            if (text.includes(searchTerm)) {
                row.style.display = '';
                visibleCount++;
            } else {
                row.style.display = 'none';
            }
        });
        
        // Show/hide no results message
        if (visibleCount === 0 && searchTerm !== '') {
            noResults.classList.remove('hidden');
            document.getElementById('bookingTable').style.display = 'none';
            document.getElementById('moveTable').style.display = 'none';
        } else {
            noResults.classList.add('hidden');
            document.getElementById('bookingTable').style.display = '';
            document.getElementById('moveTable').style.display = '';
        }
    }
    
    // Search on input (real-time search)
    searchInput.addEventListener('input', performSearch);
    
    // Search on button click
    searchBtn.addEventListener('click', performSearch);
    
    // Search on Enter key press
    searchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            performSearch();
        }
    });
    
    // Clear search when input is empty
    searchInput.addEventListener('input', function() {
        if (this.value === '') {
            performSearch();
        }
    });
});
</script>
@endsection