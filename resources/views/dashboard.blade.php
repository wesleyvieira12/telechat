<x-app-layout>
    @if (session('success'))
        <div class="font-regular relative mb-4 block w-full rounded-lg bg-green-500 p-4 text-base leading-5 text-white opacity-100">Ok{{ session('success') }}</div>
    @elseif (session('error'))
        <div class="font-regular relative mb-4 block w-full rounded-lg bg-red-500 p-4 text-base leading-5 text-white opacity-100">{{ session('error') }}</div>
    @endif

    <div class="flex gap-5 flex-wrap">
        <livewire:components.card titulo="Grupos Criados" quantidade="1" routeName="dashboard"/>
        <livewire:components.card titulo="Grupos Contratados" quantidade="1" routeName="dashboard"/>
        <!--<livewire:components.card titulo="Clientes" quantidade="1" routeName="dashboard"/>-->
    </div>
</x-app-layout>
