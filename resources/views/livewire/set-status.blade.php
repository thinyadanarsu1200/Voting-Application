<x-dialog 
align="left" width="w-64 md:w-76" event="statusWasUpdated">
        <x-slot name="trigger">
            <button 
            type="button"
            class="flex items-center justify-center w-36 h-11 text-xs bg-gray-200 font-semibold rounded-md border-gray-200 hover:bg-gray-400 transition duration-150 ease-in mt-2 md:mt-0">
            <span>Set Status</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </x-slot>
        <x-slot 
        name="content">
            <form wire:submit.prevent="setStatus" action="#"  class="space-y-4">
                <div class="space-y-2">
                   @foreach ($statuses as $status)
                   <div>
                    <label class="inline-flex items-center">
                      <input wire:model="status" type="radio" class="bg-gray-200 {{ $status->slug.'-radio' }} border-none" name="radio-direct" value="{{ $status->id }}">
                      <span class="ml-2">{{ $status->name }}</span>
                    </label>
                  </div>
                   @endforeach
                </div>
                <div>
                <textarea wire:model="body" name="update_comments" id="update_comments" cols="30" rows="3"
                class="w-full text-sm bg-gray-100 rounded-lg placeholder:text-gray-900 border-none px-4 py-2"
                placeholder="Add an update comment(optional)"></textarea>
                </div>
                <div class="flex items-center justify-between space-x-3">
                <button 
                type="button"
                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-md border-gray-200 hover:bg-gray-400 transition duration-150 ease-in">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                        </svg>
                        <span class="ml-1">Attach</span>
                    </button>
                    <button 
                    type="submit"
                    class="flex items-center justify-center w-1/2 h-11 text-xs bg-v-blue font-semibold rounded-md border-blue hover:bg-blue-hover transition duration-150 ease-in text-white">
                        Update
                    </button>
                </div>

                <div>
                    <label class="font-normal inline-flex items-center">
                      <input 
                      wire:model="notifyAllVoters"
                      class="form-checkbox" name="notify_voters" type="checkbox"
                      class="rounded bg-gray-200">
                      <span class="ml-2">Notify all voters</span>
                    </label>
                </div>
            </form>
        </x-slot>
</x-dialog>

