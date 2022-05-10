<div>
    <div class="px-4 md:px-10 pt-4 pb-1 md:pt-7 md:pb-3 bg-white-100 rounded-tl-lg rounded-tr-lg">
        <div class="sm:flex items-center justify-between">
            <p tabindex="0"
               class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                {{$seat?->name}} - Comanda {{$order?->active == "Aberto" ? "Ativa" : $order?->created_at?->format('d/m/Y \à\s Y h:i')}}</p>
        </div>
        <hr>
    </div>
</div>
