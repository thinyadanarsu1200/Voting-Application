<nav class="hidden md:flex items-center text-gray-400 justify-between text-xs">
    <ul class="flex uppercase font-semibold space-x-5 pb-3 border-b-4">
       <li><a wire:click.prevent="setStatus()" href="#" class="border-b-4 pb-3 @if($status === '') border-v-blue text-gray-900 @endif">All Ideas({{ $statusCount['all_statuses'] }})</a></li>
       <li><a wire:click.prevent="setStatus('open')" href="#" class="border-b-4 pb-3 @if($status === 'open') border-v-blue text-gray-900 @endif">Open({{ $statusCount['open'] }})</a></li>
       <li><a wire:click.prevent="setStatus('considering')" href="#"
       class="border-b-4 pb-3 @if($status === 'considering') border-v-blue text-gray-900 @endif transition duration-150 ease-in hover:text-gray-900 hover:border-blue">Considering({{ $statusCount['considering'] }})</a></li>
       <li><a wire:click.prevent="setStatus('in_progress')" href="#"
           class="border-b-4 pb-3 @if($status === 'in_progress') border-v-blue text-gray-900 @endif transition duration-150 ease-in hover:text-gray-900 hover:border-blue">Inprogress({{ $statusCount['in_progress'] }})</a></li>
    </ul>
    <ul class="flex uppercase font-semibold space-x-5 pb-3 border-b-4">
       <li><a wire:click.prevent="setStatus('implemented')" href="#"
       class="border-b-4 pb-3 @if($status === 'implemented') border-v-blue text-gray-900 @endif transition duration-150 ease-in hover:text-gray-900 hover:border-blue">Implemented({{ $statusCount['implemented'] }})</a></li>
       <li><a wire:click.prevent="setStatus('closed')" href="#"
           class="border-b-4 pb-3 @if($status === 'closed') border-v-blue text-gray-900 @endif transition duration-150 ease-in hover:text-gray-900 hover:border-blue">Closed({{ $statusCount['closed'] }})</a></li>
    </ul>
 </nav>