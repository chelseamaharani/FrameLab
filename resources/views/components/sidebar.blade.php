<div class="bg-primary text-secondary w-full md:w-[286px] h-[100vh] max-h-[560px] p-8 rounded-3xl space-y-4">
    <a href="dashboard_admin" class="block text-lg hover:bg-secondary hover:text-primary rounded px-3 py-2"><i class="fa-solid fa-bars mr-2"></i>Dashboard</a>
    <div class="relative">
      <button onclick="toggleRoomSubmenu()" class="flex w-full items-center text-lg px-3 py-2 hover:bg-secondary hover:text-primary rounded">
        <span class="flex items-center">
          <i class="fa-solid fa-house mr-2"></i>Room
        </span>
        <i class="fa-solid fa-chevron-down ml-2 text-sm"></i>
      </button>
      <div id="roomSubmenu" class="mt-2 space-y-1 hidden">
        <a href="room_data_admin" class="block text-lg py-2 pl-6 hover:bg-secondary hover:text-primary rounded">Room Data</a>
        <a href="room_partner_admin" class="block text-lg py-2 pl-6 hover:bg-secondary hover:text-primary rounded">Room Partner</a>
      </div>
    </div>
    <a href="feedback_admin" class="block text-lg hover:bg-secondary hover:text-primary rounded px-3 py-2"><i class="fa-solid fa-message mr-2"></i>Feedback</a>
    <a href="settings_admin" class="block text-lg hover:bg-secondary hover:text-primary rounded px-3 py-2"><i class="fa-solid fa-gear mr-2"></i>Settings</a>
    <a href="login" class="block text-lg hover:bg-secondary hover:text-primary rounded px-3 py-2"><i class="fa-solid fa-right-from-bracket mr-2"></i>Log Out</a>
</div>
