<div class="min-h-[100px] bg-gray-200 p-4 gap-8 flex justify-between rounded">
    <div class="flex flex-col items-center gap-2">
        <div><h1>Máscara</h1></div>
        <div class="flex items-center gap-2">
            <div class="flex flex-col items-center">
                <img class="w-[100px]" src="{{ asset('images/required-mask.png') }}" alt="">
                <p>Obrigatório</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-[100px]" src="{{ asset('images/recommended-mask.png') }}" alt="">
                <p>Recomendado</p>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center gap-2">
        <div><h1>Toalha</h1></div>
        <div class="flex items-center gap-2">
            <div class="flex flex-col items-center">
                <img class="w-[100px]" src="{{ asset('images/required-towel.png') }}" alt="">
                <p>Obrigatório</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-[100px]" src="{{ asset('images/recommended-towel.png') }}" alt="">
                <p>Recomendado</p>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center gap-2">
        <div><h1>Bebedouro</h1></div>
        <div class="flex items-center gap-2">
            <div class="flex flex-col items-center">
                <img class="w-[100px]" src="{{ asset('images/partial-fountain.png') }}" alt="">
                <p>Parcial</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-[100px]" src="{{ asset('images/forbidden-fountain.png') }}" alt="">
                <p>Proibido</p>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center gap-2">
        <div><h1>Vestiários</h1></div>
        <div class="flex items-center gap-2">
            <div class="flex flex-col items-center">
                <img class="w-[100px]" src="{{ asset('images/required-lockerroom.png') }}" alt="">
                <p>Liberado</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-[100px]" src="{{ asset('images/partial-lockerroom.png') }}" alt="">
                <p>Parcial</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-[100px]" src="{{ asset('images/forbidden-lockerroom.png') }}" alt="">
                <p>Fechado</p>
            </div>
        </div>
    </div>
</div>
