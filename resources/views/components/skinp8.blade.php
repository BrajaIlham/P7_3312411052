<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
  <h2 class="text-xl font-semibold mb-4">Input Produk</h2>
  <form>
    <div class="mb-4">
      <label class="block text-sm font-medium text-gray-700 mb-1">Nama:</label>
      <input type="text" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>
    <div class="mb-4">
      <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi:</label>
      <textarea class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
    </div>
    <div class="mb-4">
      <label class="block text-sm font-medium text-gray-700 mb-1">Harga:</label>
      <input type="number" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
  </form>
</div>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">No</th>
                <th scope="col" class="px-6 py-3">Nama Produk</th>
                <th scope="col" class="px-6 py-3">Deskripsi Produk</th>
                <th scope="col" class="px-6 py-3">Harga Produk</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nama as $index => $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">{{ $index + 1 }}</td>
                    <td class="px-6 py-4">{{ $item }}</td>
                    <td class="px-6 py-4">{{ $desc[$index] }}</td>
                    <td class="px-6 py-4">{{ $harga[$index] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


