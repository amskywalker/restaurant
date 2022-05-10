<div>
    <div class="px-4 md:px-10 pt-4 pb-1 md:pt-7 md:pb-3 bg-white-100 rounded-tl-lg rounded-tr-lg">
        <div class="sm:flex items-center justify-between">
            <p tabindex="0"
               class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-xl font-bold leading-normal text-gray-800">Encerrar comanda</p>
        </div>
        <hr>
    </div>
    <form class="w-full" method="POST" action="{{route('order.update', $order)}}">
        @csrf
        @method("PUT")
        <div class="w-full flex px-10">
            <div class="w-11/12 mr-3">
                <label class="text-gray-700 text-xs font-bold mb-2" for="persons">
                    Quantidade de pessoas na mesa
                </label>
                <input type="number" max="4" min="1" value="1" step="1" id="persons" name="persons_quantity"
                       class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <input type="hidden" value="false" name="active">
            </div>
            <div class="w-11/12 mr-3">
                <label class="text-gray-700 text-xs font-bold mb-2" for="payment_method">
                    Forma de pagamento
                </label>
                <select
                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="payment_method"
                    name="payment_method"
                    required>
                    <option value="">Selecione uma forma de pagamento</option>
                    <option value="Pix">Pix</option>
                    <option value="Credito">Credito</option>
                    <option value="Debito">Debito</option>
                    <option value="Dinheiro">Dinheiro</option>
                </select>
            </div>
            <div class="flex justify-center items-end">
                <button
                    type="submit"
                    class="bg-transparent hover:bg-logo-red text-logo-red font-semibold hover:text-white py-2 px-4 border border-logo-red hover:border-transparent rounded">
                    Fechar
                </button>
            </div>
        </div>
    </form>
</div>
