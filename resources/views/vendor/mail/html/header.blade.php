<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'my.awesomeBible')
<img src="https://awesomebible.de/wp-content/uploads/assets/logo-awesomebible_gradient.png" class="logo" alt="awesomeBible Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
