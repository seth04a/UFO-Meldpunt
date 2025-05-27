<footer class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 bg-gray-100 p-4 shadow">
     <h1 class="text-2xl font-bold text-gray-800">Made by: YouGotProbed</h1>
     <form method="POST" action="{{ route('donate.process') }}">
    @csrf

    <label for="amount">Donation Amount (EUR):</label>
    <input type="number" name="amount" min="1" step="0.01" required>

    <label for="email">Email (optional):</label>
    <input type="email" name="email">

    <button type="submit">Donate</button>
</form>
</footer>