<template>

    <div class="cursor-pointer relative px-6 py-5 flex items-center space-x-3 hover:bg-gray-50 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500">
        <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full" :src="commission.buyer.profile_photo_url" alt="">
        </div>
        <div class="flex-1 min-w-0">
            <div class="focus:outline-none">
                <!-- Extend touch target to entire panel -->
                <span class="absolute inset-0" aria-hidden="true"></span>
                <p class="text-sm font-medium text-gray-900">
                    {{commission.buyer.name}}
                </p>
                <p class="text-sm text-gray-500 truncate">
                    [${{commission.price}}] {{commission.title}}
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CommissionItem",
    props: ['commission'],
}
</script>

<style scoped>

</style>
