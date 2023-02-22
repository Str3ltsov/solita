<x-mail::message>
# {{ $topic }}

{{ $name.' ('.$email.')' }} atsiuntė naują pranešimą.

{{ $description ?? 'Nėra aprašymo' }}

</x-mail::message>
