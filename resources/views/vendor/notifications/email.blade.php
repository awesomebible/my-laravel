@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Da ist wohl etwas schief gelaufen.')<br>
@lang('Antworte einfach auf diese E-Mail und wir helfen dir.')<br>
@else
# @lang('Danke für deine Registrierung! ❤') <br>
## @lang('Nur noch ein Klick, dann geht es los!')
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    $color = match ($level) {
        'success', 'error' => $level,
        default => 'primary',
    };
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Gottes Segen dir!')<br>
@lang('~ Benjamin von awesomeBible.')<br>

@endif

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "Wenn der \":actionText\" Button nicht funktioniert, kopiere einfach die folgende URL\n".
    'in deinen Webbrowser:',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
@endslot
@endisset
@endcomponent
