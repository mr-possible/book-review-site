<x-mail::message>
# You got a comment on your book review titled '{{ $review_title }}'!
 
## Comment: {{ $comment }}
  
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>