@props([
    'user' => filament()->auth()->user(),
])

@php
    $src = filament()->getUserAvatarUrl($user);
    $altName = $user->persona?->nombre_completo ?? filament()->getUserName($user);
    $alt = __('filament-panels::layout.avatar.alt', ['name' => $altName]);
@endphp

<x-filament::avatar
    :src="$src"
    :alt="$alt"
    :attributes="
        \Filament\Support\prepare_inherited_attributes($attributes)
            ->class(['fi-user-avatar'])
    "
/>
