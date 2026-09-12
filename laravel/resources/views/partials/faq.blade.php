<div class="faq">
@foreach($items as [$q, $a])
  <details><summary>{{ $q }}</summary><p>{{ $a }}</p></details>
@endforeach
</div>
@push('ld')
{!! json_ld(['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => collect($items)->map(fn ($f) => [
    '@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]],
])->all()]) !!}
@endpush
