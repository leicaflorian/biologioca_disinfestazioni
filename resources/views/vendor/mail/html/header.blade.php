<tr>
  <td class="header">
    <a href="{{ $url }}" style="display: inline-block;">
      @if (trim($slot) === 'Laravel')
        <img src="{{ asset("images/logo_white.svg") }}" class="logo" alt="Logo Biologica Disinfestazioni">
      @else
        {{ $slot }}
      @endif
    </a>
  </td>
</tr>
