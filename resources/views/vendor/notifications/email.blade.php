@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level == 'error')
# Whoops!
@else
# Hello!
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@if (isset($actionText))
<?php
    switch ($level) {
        case 'success':
            $color = 'green';
            break;
        case 'error':
            $color = 'red';
            break;
        default:
            $color = 'blue';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endif

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

<!-- Salutation -->
@if (! empty($salutation))
{{ $salutation }}
@else
Srdačan pozdrav. <br>
Coinexpand Team <br>
<small>{{ config('app.name') }} <br>
{{ Lang::get('titles.email') }}</small>
@endif

<!-- Subcopy -->
@if (isset($actionText))
@component('mail::subcopy')
Ukoliko se niste registrirali na www.coinexpand.net ignorirajte ovaj email.
Ako imate problema sa aktivacijom, kopirajte ovaj link u Vaš browser. <br>
[{{ $actionUrl }}]({{ $actionUrl }})

@endcomponent
@endif
@endcomponent
