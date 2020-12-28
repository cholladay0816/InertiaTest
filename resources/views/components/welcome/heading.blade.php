<div class="w-full h-16 bg-red-400">
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <button class="text-blue-400" @click.native="toggle">TEST</button>
        @if($popout)
            <p :show="popout">Yes</p>
        @endif
</div>
