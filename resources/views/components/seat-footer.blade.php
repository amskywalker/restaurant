<div>
    @if($order->active == 'Aberto')
        <div class="px-4 md:px-10 pt-4 pb-1 md:pt-7 md:pb-3 bg-white-100 rounded-tl-lg rounded-tr-lg">
            <div class="sm:flex items-center justify-between">
                <p tabindex="0"
                   class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-xl font-bold leading-normal text-gray-800">
                    Outras Comandas</p>
            </div>
        </div>
        <div class="bg-white shadow px-4 md:px-10 pt-4 md:pt-4 pb-5 overflow-y-auto">
            <table class="w-full whitespace-nowrap">
                <thead>
                <tr tabindex="0"
                    class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800">
                    <th class="font-normal text-left pl-4">Hora</th>
                </tr>
                </thead>
                <tbody class="w-full">
                @foreach($seat->orders_inactive as $order)
                    <tr class="focus:outline-none h-20 text-sm leading-none text-gray-800 border-b border-t bg-white border-gray-100">
                        <td class="font-normal pl-4 text-blue">
                            <a href="{{route('seat.show', ['seat' => $seat, 'order' => $order])}}" class="text-blue-500 hover:underline">
                                Comanda {{ $order->created_at->format('d/m/Y \à\s Y h:i')}}
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
