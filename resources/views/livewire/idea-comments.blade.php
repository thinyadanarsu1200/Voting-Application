@if($comments->isNotEmpty())
<div>
  <div class="comments-container relative space-y-4 md:space-y-6 md:ml-22 mb-8 mt-1 pt-6">
    @foreach ($comments as $comment)
        <livewire:idea-comment :key="$comment->id" :comment="$comment"/>
    @endforeach
  </div>
  
  <div class="my-6 md:ml-22">
    {{ $comments->links('vendor.livewire.tailwind',['results' => 'comments']) }}
  </div>
</div>
@else
<div class="mx-auto w-70 mt-12">
  <img src="{{ asset('images/no-ideas.svg') }}" alt="No Ideas" class="mx-auto" style="mix-blend-mode: luminosity">
  <div class="text-gray-400 text-center font-bold mt-6">No comments yet</div>
</div>
@endif
