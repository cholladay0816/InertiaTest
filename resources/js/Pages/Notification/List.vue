<template>
    <app-layout>
        <div v-if="$page.props.notifications.count > 0">

            <!-- This example requires Tailwind CSS v2.0+ -->
            <ul class="grid grid-cols-1 gap-2">

                <li v-for="notification in $page.props.notifications">
                    <notification :notification="notification"></notification>
                </li>
            </ul>


        </div>
        <div v-else class="pointer-events-none flex justify-center h-screen">
            <div class="flex my-auto text-center text-2xl font-semibold text-gray-400">No new notifications.</div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Notification from "@/Pages/Notification";
export default {
    name: "Notifications",
    components: {AppLayout, Notification}
}
</script>

<style scoped>

</style>
