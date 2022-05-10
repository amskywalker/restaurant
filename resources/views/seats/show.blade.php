<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-between h-75">
                <div class="w-full">
                    <x-seat-header :seat="$seat" :order="$order"/>
                    @if($order?->active == "Aberto")
                        <x-form-product :products="$products" :order="$order"/>
                    @endif
                    <div class="px-4 md:px-10 pt-4 pb-1 md:pt-7 md:pb-3 bg-white-100 rounded-tl-lg rounded-tr-lg">
                        <div class="sm:flex items-center justify-between">
                            <p tabindex="0"
                               class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-xl font-bold leading-normal text-gray-800">
                                Produtos na comanda</p>
                        </div>
                        <hr>
                    </div>
                    <div class="bg-white px-4 md:px-10 pt-4 md:pt-4 pb-5 overflow-y-auto">
                        <table class="w-full whitespace-nowrap">
                            <thead>
                            <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800">
                                <th class="font-normal text-left pl-4">Nome</th>
                                <th class="font-normal text-left pl-12">Preço</th>
                                @if($order?->active == "Aberto")
                                    <th class="font-normal text-left pl-16"></th>
                                @endif
                            </tr>
                            </thead>
                            <tbody class="w-full">
                            @foreach($order->products as $product)
                                <tr class="focus:outline-none h-20 text-sm leading-none text-gray-800 border-b border-t bg-white border-gray-100">
                                    <td class="font-normal pl-4 text-blue">{{$product->name}}</td>
                                    <td class="font-normal pl-12">{{$product->price}}</td>
                                    {{--TODO product quantity...--}}
                                    @if($order?->active == "Aberto")
                                        <td class="font-normal pl-12">
                                            <form
                                                action="{{route('order.product.delete', ['order' => $order, 'product' => $product->id])}}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    type="submit"
                                                    class="bg-transparent hover:bg-logo-red text-logo-red font-semibold hover:text-white py-2 px-4 border border-logo-red hover:border-transparent rounded">
                                                    Remover
                                                </button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if($order?->active != "Aberto")
                        {{-- TODO should be less ugly--}}
                        <div class="w-full flex px-10">
                            Valor Total: R${{ $order->totalValue()}} <br>
                            Valor Por Pessoa: R${{ $order->ValueByPersons()}}<br>
                            Forma de pagamento: {{ $order->payment_method}}
                        </div>
                    @endif
                    @if($order?->active == "Aberto")
                        <x-close-order-form :order="$order"/>
                    @endif

                    {{-- TODO should have a back button --}}


                    <x-seat-footer :seat="$seat" :order="$order"/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
