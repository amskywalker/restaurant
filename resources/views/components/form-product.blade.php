<div>
    <div class="px-4 md:px-10 pt-4 pb-1 md:pt-7 md:pb-3 bg-white-100 rounded-tl-lg rounded-tr-lg">
        <div class="sm:flex items-center justify-between">
            <p tabindex="0"
               class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-xl font-bold leading-normal text-gray-800">Adicionar produtos</p>
        </div>
        <hr>
    </div>
    <form class="w-full" method="POST" action="{{route('order.update', $order)}}">
        @csrf
        @method("PUT")
        <div class="w-full flex px-10">
            <div class="w-11/12 mr-3">
                <label class=" text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Produto
                </label>
                <div class="relative">
                    <select
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-state"
                        name="product_id"
                        required>
                        <option value="">Selecione um produto</option>
                        @foreach($products as $product)
                            <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="flex justify-center items-end">
                <button
                    type="submit"
                    class="w-full bg-transparent hover:bg-logo-yellow text-logo-yellow font-semibold hover:text-white py-2 px-4 border border-logo-yellow hover:border-transparent rounded">
                    Adicionar
                </button>
            </div>
        </div>
    </form>
</div>
