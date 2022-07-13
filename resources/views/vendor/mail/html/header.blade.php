<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://raw.codeberg.page/awesomebible/assets/exports/svg/logo-awesomebible_gradient.svg" class="logo" alt="awesomeBible Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
