@component('mail::message')
# Introduction

There is a new query from <b>{{ $name }}</b>
<br>
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
