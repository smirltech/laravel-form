@props([
    /**
     * Le type de bouton, peut etre une chaine compatible avec l`attribut `type` de HTMLButtonElement
     * Les valeurs possibles sont : `submit`, `button`, `reset`, `menu`.
     * Par défaut, la valeur est "button".
     * {@see https://developer.mozilla.org/fr/docs/Web/API/HTMLButtonElement#htmlbuttonelement.type}
     */
    'type' => 'button',

    /**
     * La taille du bouton, conforme à ce que Bootstrap fournit.
     * Les valeurs possibles sont : "sm" (small), "lg" (large).
     * Par défaut, la valeur est null.
     * {@see https://getbootstrap.com/docs/5.3/components/buttons/#sizes}
     */
    'size' => null,

    /**
     * La variante du bouton Bootstrap.
     * Par défaut, la valeur est "default".
     * {@see https://getbootstrap.com/docs/5.3/components/buttons/#variants}
     */
    'theme' => 'default',

    /**
     * Indique si le bouton est désactivé ou non.
     * Par défaut, la valeur est false (non désactivé).
     */
    'disabled' => false,

    /**
     * Indique si le bouton est en version "outlined" (contours seulement).
     * Par défaut, la valeur est false (bouton plein).
     * {@see https://getbootstrap.com/docs/5.3/components/buttons/#outline-buttons}
     */
    'outlined' => false,
])

@php
    $btnSize = $size ? 'btn-' . $size : '';
    $outlinedPrefix = $outlined ? '-outline' : '';
@endphp

<button
    type="{{ $type }}"
    {{ $attributes->merge(['class' => "btn btn$outlinedPrefix-$theme $btnSize"]) }}
    @disabled($disabled)>
    {{ $slot }}
</button>
