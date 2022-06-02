@component("mail::header", [
  "url" => '#',
  "logo" => asset("images/logo.svg")
])
@endcomponent

@component('mail::message')

  # Nuovo messaggio dal sito!
  In data **{{$contact->created_at->format("d/m/Y H:i:s")}}** hai ricevuto il seguente messaggio:

  - **Nome**: {{$contact->name}}
  - **Email**: {{$contact->email}}
  - **Telefono**: {{$contact->phone}}
  - **Servizio richiesto**: {{$contact->service?->title}}
  - **Messaggio**: {{$contact->message}}

@endcomponent
