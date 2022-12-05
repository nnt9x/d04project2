@extends('layouts.admin_base')

@section('content')
    <h1>Toan bo san pham hien thi tai day</h1>

    <x-adminlte-card theme="lime" theme-mode="outline">
        A card without header...
    </x-adminlte-card>

    <x-adminlte-card title="Form Card" theme="maroon" theme-mode="outline"
                     class="elevation-3" body-class="bg-maroon" header-class="bg-light"
                     footer-class="bg-maroon border-top rounded border-light"
                     icon="fas fa-lg fa-bell" collapsible removable maximizable>
        <x-slot name="toolsSlot">
            <select class="custom-select w-auto form-control-border bg-light">
                <option>Skin 1</option>
                <option>Skin 2</option>
                <option>Skin 3</option>
            </select>
        </x-slot>
        <x-adminlte-input name="User" placeholder="Username"/>
        <x-adminlte-input name="Pass" type="password" placeholder="Password"/>
        <x-slot name="footerSlot">
            <x-adminlte-button class="d-flex ml-auto" theme="light" label="submit"
                               icon="fas fa-sign-in"/>
        </x-slot>
    </x-adminlte-card>


@endsection
