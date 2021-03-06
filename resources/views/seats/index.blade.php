<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-between h-75">

                <div class="w-full">
                    <div class="px-4 md:px-10 py-4 md:py-7 bg-white-100 rounded-tl-lg rounded-tr-lg">
                        <div class="sm:flex items-center justify-between">
                            <p tabindex="0"
                               class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                                Mesas</p>
                        </div>
                    </div>
                    <div class="bg-white shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
                        <table class="w-full whitespace-nowrap">
                            <thead>
                            <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800">
                                <th class="font-normal text-left pl-4">Nome</th>
                                <th class="font-normal text-left pl-12">Status</th>
                                <th class="font-normal text-left pl-16"></th>
                            </tr>
                            </thead>
                            <tbody class="w-full">
                            @foreach($seats as $seat)
                                <tr class="focus:outline-none h-20 text-sm leading-none text-gray-800 border-b border-t bg-white border-gray-100">
                                    <td class="font-normal pl-4 text-blue">{{$seat->name}}</td>
                                    <td class="font-normal pl-12">{{$seat?->orders_active?->first()?->active ?? "Fechado"}}</td>
                                    <td class="font-normal pl-16">
                                        @if($seat?->orders_active?->first()?->active == "Aberto")
                                            <a
                                                href="{{route('seat.show', $seat->id)}}"
                                                class="bg-transparent hover:bg-logo-black text-logo-black font-semibold hover:text-white py-2 px-4 border border-logo-black hover:border-transparent rounded">
                                                Ver comanda
                                            </a>
                                        @else
                                            <a
                                                href="{{route('seat.show', $seat->id)}}"
                                                class="bg-transparent hover:bg-logo-yellow text-logo-yellow font-semibold hover:text-white py-2 px-4 border border-logo-yellow hover:border-transparent rounded">
                                                Abrir comanda
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- TODO I have to open the order to see the other orders...--}}
            </div>
        </div>
    </div>

</x-app-layout>
