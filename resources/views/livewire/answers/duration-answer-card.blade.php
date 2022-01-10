<div id="vue-range-slider" class="xl:w-2/3 md:w-1/2 p-6 m-auto">
    <div x-data="{duration: 120}" class="border border-gray-300 p-6 rounded-lg ">
        <strong x-text="duration"></strong><strong>ms</strong>
        <input class="xl:w-full" type="range" min="0" max="3000" step="10" wire:model="duration" x-model="duration" />
        <button class="border border-gray-300 p-6 rounded-lg hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50" wire:click="applyRange">Dalej</button>
    </div>



</div>

