@section('title', 'Cadastro do Médico')

<x-slot name="header">
    <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cadastro do Médico
        </h2>
    </div>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class=" p-5 bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <form wire:submit.prevent="store" method="POST">
                <div class="grid grid-cols-4 grid-flow-col gap-4">
                    <x-input wire:model.defer="name" type="text" label="Nome:" placeholder="Nome" required />
                    <x-input wire:model.defer="cpf" class="cpf" label="CPF:" placeholder="CPF" />
                    <x-input wire:model.defer="email" type="email" label="Email:" placeholder="Email" />
                    <x-input wire:model.defer="phone" class="phone" label="Telefone:" placeholder="Telefone" />
                </div>
                <div class="mb-3 xl:w-96 mt-5">
                    <label class=" text-base
                        text-gray-700">Especialidade:</label>
                    <select wire:model.defer="specialty_id"
                        class="form-select appearance-none
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
      r                 ounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                        <option>Selecione</option>

                        @foreach ($specialties as $specialty)
                            <option value="{{ $specialty->id }}">{{ $specialty->name }}</option>
                        @endforeach

                    </select>
                </div>
                <x-button class="mt-5" wire:click="store" spinner positive label="Cadastrar" />
            </form>

        </div>
    </div>
</div>
