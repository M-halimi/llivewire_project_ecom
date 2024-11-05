<div class="max-w-7xl mx-auto">
    <div class="w-full flex justify-between items-center mb-3 mt-1 pl-3">
    <div>
        <h3 class="text-lg font-semibold text-slate-800">Generated Invoice for this Month</h3>
        <p class="text-slate-500">Overview of the invoices.</p>
    </div>
    <div class="ml-3">
        <div></div>
        <button class="bg-green-600 text-black rounded-full font-medium  mb-4 w-40 py-2 hover:scale-90 hover:text-white hover:-translate-x-3 hover:duration-200 hover:transform">
            Ajouter un product
        </button>
        <div class="w-full max-w-sm min-w-[200px] relative">
        <div class="relative">
            <input wire:model="search"
            class="bg-white w-full pr-11 h-10 pl-3 py-2 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
            placeholder="Search for invoice... " type="search"
            />
            <button
            class="absolute h-8 w-8 right-1 top-1 my-auto px-2 flex items-center bg-white rounded "
            type="button"
            >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-8 h-8 text-slate-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
            </button>
        </div>
        </div>
    </div>
</div>

<div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
  <table  class="table-auto border-collapse border border-slate-400 ">
    <thead>
      <tr>
        <th class="p-4 border-b border-slate-300 bg-slate-50">
          <p class="block text-sm font-normal leading-none text-slate-500">
            Name
          </p>
        </th>
        <th class="p-4 border-b border-slate-300 bg-slate-50">
          <p class="block text-sm font-normal leading-none text-slate-500">
            Price
          </p>
        </th>
        <th class="p-4 border-b border-slate-300 bg-slate-50">
          <p class="block text-sm font-normal leading-none text-slate-500">
                Qty
          </p>
        </th>
        <th class="p-4 border-b border-slate-300 bg-slate-50">
            <p class="block text-sm font-normal leading-none text-slate-500">
                description
            </p>
          </th>
        <th class="p-4 border-b border-slate-300 bg-slate-50">
          <p class="block text-sm font-normal leading-none text-slate-500">
            Categorie_id
          </p>
        </th>
        <th class="p-4 border-b border-slate-300 bg-slate-50">
          <p class="block text-sm font-normal leading-none text-slate-500">
            Action
          </p>
        </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr class="cols">
            <td class="border border-slate-300">
                {{ $product->name }}
            </td>

            <td class="border border-slate-300">
                {{ $product->price }}
            </td>

            <td class="border border-slate-300">
                {{ $product->qty }}
            </td>

            <td class="border border-slate-300">
                {{ $product->description }}
            </td>

            <td class="border border-slate-300">
                {{ $product->categories ? : 'halimi' }}
            </td>
            <td class="bg-red-500 border border-slate-300 text-white rounded-full text-center font-extralight hover:bg-red-400 hover:text-black w-12 py-2 px-2">
                <a href="">
                    Edit
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>

