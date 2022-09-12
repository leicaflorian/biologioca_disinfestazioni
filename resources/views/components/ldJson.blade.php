<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Biologica Disinfestazioni",
    "image": "{{ asset("images/logo_wide.svg") }}",
    "email": "info@biologicadisinfestazioni.it",
    "telephone": "+393517238237",
    "priceRange": "$$",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Tezze sul Brenta",
      "addressRegion": "Veneto",
      "addressCountry": "IT",
      "postalCode": "36056"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 45.69151,
      "longitude": 11.6983059
    },
    "openingHoursSpecification": [{
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday"
      ],
      "opens": "08:00",
      "closes": "19:00"
    }],
    "url": "{{ env("APP_URL") }}"
  }

</script>

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "url": "{{ env("APP_URL") }}",
    "logo": "{{ asset("images/logo.svg") }}"
  }

</script>

@if(isset($serviceEntries))
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "itemListElement": [
    @foreach ($serviceEntries as $service)
      {
            "@type": "ListItem",
            "position": {{$loop->index +1}},
            "url": "{{env("APP_URL") . ("/servizi/" . $service->slug )}}"
          }{{ $loop->last ? '' : ',' }}
    @endforeach

    ]
  }

  </script>
@endif
