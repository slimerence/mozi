@component('mail::message')
    # Received a lead from {{ $name }} ({{$email}}),

    Phone:{{ $phone }}
    Message: {{ $message }}

    Thanks!
@endcomponent