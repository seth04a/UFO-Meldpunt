<footer class="bg-gray-100 text-sm p-6 shadow position:absolute bottom-0 w-full flex justify-center z-10 mt-10">
  <div class="w-full flex flex-row justify-between items-center gap-6 px-5">
    
    <!-- Left: Made By -->
    <div class="text-left">
      <h1 class="text-2xl font-bold text-gray-800">Made by: YouGotProbed</h1>
    </div>

    <!-- Right: Donation Form -->
    <form method="POST" action="{{ route('donate.process') }}" 
          class="space-y-4 md:space-y-0 md:space-x-4 text-center md:text-right md:flex md:items-center  text-gray-800">
      @csrf

      <div class="flex flex-col items-start">
        <label for="amount" class="block font-medium">Donation Amount (EUR):</label>
        <input 
          type="number" 
          name="amount" 
          min="1" 
          step="0.01" 
          required
          class="mt-1 px-2 py-1 w-48 rounded-md border border-gray-300 shadow-sm focus:ring focus:ring-lime-400 focus:outline-none"
        >
      </div>

      <div class="flex flex-col items-start">
        <label for="email" class="block font-medium">Email (optional):</label>
        <input 
          type="email" 
          name="email"
          class="mt-1 px-2 py-1 w-48 rounded-md border border-gray-300 shadow-sm focus:ring focus:ring-lime-400 focus:outline-none"
        >
      </div>

      <button 
        type="submit"
        class="underline border-4 border-black text-lime-600 hover:bg-lime-100 font-semibold py-2 px-6 rounded-full"
      >
        Donate
      </button>
    </form>
  </div>
</footer>