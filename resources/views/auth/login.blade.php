<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - SmartPOS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F3E2D4] flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-6 text-center text-[#17313E]">Login SmartPOS</h2>
        <form method="POST" action="{{ url('/login') }}">
          @csrf
          <div class="mb-4">
              <label class="block mb-1 text-sm">Username</label>
              <input type="text" name="username" required class="w-full px-3 py-2 border rounded" />
          </div>
          <div class="mb-4">
              <label class="block mb-1 text-sm">Password</label>
              <input type="password" name="password" required class="w-full px-3 py-2 border rounded" />
          </div>
          @if($errors->any())
              <div class="text-red-600 text-sm mb-4">{{ $errors->first() }}</div>
          @endif
          <button type="submit" class="bg-[#C5B0CD] text-white px-4 py-2 rounded hover:bg-opacity-90">
              Login
          </button>
      </form>      
    </div>
</body>
</html>
