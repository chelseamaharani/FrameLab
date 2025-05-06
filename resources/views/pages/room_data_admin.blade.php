@extends('layouts.app')

@section('title', 'Room Data Admin')

@section('content')
    <div class="bg-primary text-secondary rounded-3xl px-8 py-3 text-lg mb-6">
        <i class="fa-solid fa-house mr-2"></i>Room Data
    </div>
	<div class="bg-primary text-secondary rounded-3xl p-6">
        <div class="flex justify-between items-center mb-6">
          	<button onclick="document.getElementById('tambahDataModal').showModal();" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1.5 rounded">
          		<i class="fas fa-plus-circle mr-2"></i>Add New Room
        	</button>
        </div>
		<div class="overflow-x-auto">
          	<table class="w-full text-center text-black">
            	<thead>
              		<tr class="bg-white text-black">
                		<th class="px-4 py-2">No</th>
                		<th class="px-4 py-2">Phone</th>
                		<th class="px-4 py-2">Room Name</th>
				        <th class="px-4 py-2">Price</th>
				        <th class="px-4 py-2">Description</th>
				        <th class="px-4 py-2">Duration</th>
				        <th class="px-4 py-2">Studio Type</th>
				        <th class="px-4 py-2">Action</th>
              		</tr>
            	</thead>
            	<tbody>
			    </tbody>
			</table>
		</div>
	</div>
@endsection