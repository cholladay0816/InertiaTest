<template>
    <div v-if="notification != null" v-on:click="visit" :class="'transform translate cursor-pointer duration-150 border-b-2 border-transparent hover:border-' +
     (notification.type=='default'?'blue':(notification.type=='warning'?'yellow':'red'))
     + '-400 bg-' +
      (notification.type=='default'?'white':(notification.type=='warning'?'yellow-50':'red-50'))
      + ' rounded-xl shadow flex flex-row justify-between py-1'">
        <div class="flex flex-row my-auto">
            <div v-if="notification.read_at == null" class="ml-3 my-auto relative h-3 w-3">
                <span class="flex h-3 w-3">
                    <span :class="'animate-ping absolute inline-flex h-full w-full rounded-full ' +
                     'bg-' + (notification.type=='default'?'blue':(notification.type=='warning'?'yellow':'red')) + '-400 opacity-75'">

                    </span>
                    <span :class="'relative inline-flex rounded-full h-3 w-3 ' +
                        'bg-' + (notification.type=='default'?'blue':(notification.type=='warning'?'yellow':'red')) + '-500'"
                    >
                    </span>
                </span>
            </div>
            <div class="px-4 text-xl font-semibold">{{notification.title}}</div>
        </div>
        <div class="flex flex-row px-2">
            <div></div>
            <a v-on:click="del" class="rounded-lg px-2 py-1 hover:bg-red-50 font-semibold hover:text-red-400 text-gray-400 text-lg">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    name: "Notification",
    props: ['notification'],
    methods: {
        del()
        {
            axios.delete('/notifications/' + this.notification.id)
                .then(this.notification = null)
                .catch();
        },
        visit()
        {
            axios.put('/notifications/' + this.notification.id)
            .then(Inertia.visit( this.notification.link));
        }
    }
}
</script>

<style scoped>

</style>
