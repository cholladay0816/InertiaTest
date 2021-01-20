<template>

    <app-layout>

        <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  const colors = require('tailwindcss/colors')

  module.exports = {
    // ...
    theme: {
      extend: {
        colors: {
          rose: colors.rose,
        }
      }
    },
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ]
  }
  ```
-->
        <div class="h-screen flex overflow-hidden bg-white">
            <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
                <div class="lg:hidden">
                    <div class="flex items-center justify-between bg-gray-50 border-b border-gray-200 px-4 py-1.5">
                        <div>
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-pink-500.svg" alt="Workflow">
                        </div>
                        <div>
                            <button type="button" class="-mr-3 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-pink-600">
                                <span class="sr-only">Open sidebar</span>
                                <!-- Heroicon name: menu -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex-1 relative z-0 flex overflow-hidden">
                    <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none xl:order-last" tabindex="0">
                        <!-- Breadcrumb -->
                        <nav class="flex items-start px-4 py-3 sm:px-6 lg:px-8 xl:hidden" aria-label="Breadcrumb">
                            <a href="#" class="inline-flex items-center space-x-3 text-sm font-medium text-gray-900">
                                <!-- Heroicon name: chevron-left -->
                                <svg class="-ml-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span>Directory</span>
                            </a>
                        </nav>

                        <article>
                            <!-- Profile header -->
                            <div>
                                <div>
                                    <img class="h-32 w-full object-cover lg:h-48" src="https://images.unsplash.com/photo-1444628838545-ac4016a5418a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80" alt="">
                                </div>
                                <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                                    <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                                        <div class="flex">
                                            <img class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                                        </div>
                                        <div class="mt-6 sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                                            <div class="sm:hidden 2xl:block mt-6 min-w-0 flex-1">
                                                <h1 class="text-2xl font-bold text-gray-900 truncate">
                                                    {{$page.props.commission?$page.props.commission.title:'No Commission Selected'}}
                                                </h1>
                                            </div>
                                            <div class="mt-6 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">
                                                <button type="button" class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                                    <!-- Heroicon name: mail -->
                                                    <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                                    </svg>
                                                    <span>Message</span>
                                                </button>
                                                <button type="button" class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                                    <!-- Heroicon name: phone -->
                                                    <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                    </svg>
                                                    <span>Call</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden sm:block 2xl:hidden mt-6 min-w-0 flex-1">
                                        <h1 class="text-2xl font-bold text-gray-900 truncate">
                                            Ricardo Cooper
                                        </h1>
                                    </div>
                                </div>
                            </div>

                            <!-- Tabs -->
                            <div class="mt-6 sm:mt-2 2xl:mt-5">
                                <div class="border-b border-gray-200">
                                    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                                            <!-- Current: "border-pink-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                                            <a href="#" class="border-pink-500 text-gray-900 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" aria-current="page">
                                                Profile
                                            </a>
                                            <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                                Calendar
                                            </a>
                                            <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                                Recognition
                                            </a>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <!-- Description list -->
                            <div class="mt-6 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                                    <div class="sm:col-span-1">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Phone
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900">
                                            (555) 123-4567
                                        </dd>
                                    </div>

                                    <div class="sm:col-span-1">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Email
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900">
                                            ricardocooper@example.com
                                        </dd>
                                    </div>

                                    <div class="sm:col-span-1">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Title
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900">
                                            Senior Front-End Developer
                                        </dd>
                                    </div>

                                    <div class="sm:col-span-1">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Team
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900">
                                            Product Development
                                        </dd>
                                    </div>

                                    <div class="sm:col-span-1">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Location
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900">
                                            San Francisco
                                        </dd>
                                    </div>

                                    <div class="sm:col-span-1">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Sits
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900">
                                            Oasis, 4th floor
                                        </dd>
                                    </div>

                                    <div class="sm:col-span-1">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Salary
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900">
                                            $145,000
                                        </dd>
                                    </div>

                                    <div class="sm:col-span-1">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Birthday
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900">
                                            June 8, 1990
                                        </dd>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <dt class="text-sm font-medium text-gray-500">
                                            About
                                        </dt>
                                        <dd class="mt-1 max-w-prose text-sm text-gray-900">
                                            <p>
                                                Tincidunt quam neque in cursus viverra orci, dapibus nec tristique. Nullam ut sit dolor consectetur urna, dui cras nec sed. Cursus risus congue arcu aenean posuere aliquam.
                                            </p>
                                            <p class="mt-5">
                                                Et vivamus lorem pulvinar nascetur non. Pulvinar a sed platea rhoncus ac mauris amet. Urna, sem pretium sit pretium urna, senectus vitae. Scelerisque fermentum, cursus felis dui suspendisse velit pharetra. Augue et duis cursus maecenas eget quam lectus. Accumsan vitae nascetur pharetra rhoncus praesent dictum risus suspendisse.
                                            </p>
                                        </dd>
                                    </div>
                                </dl>
                            </div>

                            <!-- Team member list -->
                            <div class="mt-8 max-w-5xl mx-auto px-4 pb-12 sm:px-6 lg:px-8">
                                <h2 class="text-sm font-medium text-gray-500">Team members</h2>
                                <div class="mt-1 grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-pink-500">
                                        <div class="flex-shrink-0">
                                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">
                                                    Leslie Alexander
                                                </p>
                                                <p class="text-sm text-gray-500 truncate">
                                                    Co-Founder / CEO
                                                </p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-pink-500">
                                        <div class="flex-shrink-0">
                                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">
                                                    Michael Foster
                                                </p>
                                                <p class="text-sm text-gray-500 truncate">
                                                    Co-Founder / CTO
                                                </p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-pink-500">
                                        <div class="flex-shrink-0">
                                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">
                                                    Dries Vincent
                                                </p>
                                                <p class="text-sm text-gray-500 truncate">
                                                    Manager, Business Relations
                                                </p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-pink-500">
                                        <div class="flex-shrink-0">
                                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <a href="#" class="focus:outline-none">
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-gray-900">
                                                    Lindsay Walton
                                                </p>
                                                <p class="text-sm text-gray-500 truncate">
                                                    Front-end Developer
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </main>
                    <aside class="hidden xl:order-first xl:flex xl:flex-col flex-shrink-0 w-96 border-r border-gray-200">
                        <div class="px-6 pt-6 pb-4">
                            <h2 class="text-lg font-medium text-gray-900">Commissions</h2>
                            <p class="mt-1 text-sm text-gray-600">
                                Search directory of commissions
                            </p>
                            <form class="mt-6 flex space-x-4" action="#">
                                <div class="flex-1 min-w-0">
                                    <label for="search" class="sr-only">Search</label>
                                    <div class="relative rounded-md shadow-sm">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <!-- Heroicon name: mail -->
                                            <!-- Heroicon name: search -->
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input type="search" name="search" id="search" class="focus:ring-pink-500 focus:border-pink-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md" placeholder="Search">
                                    </div>
                                </div>
                                <button type="submit" class="inline-flex justify-center px-3.5 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                    <!-- Heroicon name: filter -->
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Search</span>
                                </button>
                            </form>
                        </div>
                        <!-- Commission list -->
                        <nav class="flex-1 min-h-0 relative overflow-y-auto" aria-label="Commissions">
                            <div v-if="$page.props.overdue.length > 0" class="z-10 sticky top-0 border-t border-b border-gray-200 bg-gray-50 px-6 py-1 text-sm font-medium text-gray-500">
                                <h3>Overdue</h3>
                            </div>
                            <ul v-if="$page.props.overdue.length > 0" class="relative z-0 divide-y divide-gray-200">
                                <li v-for="commission in $page.props.overdue">
                                    <commission-item :commission="commission"></commission-item>
                                </li>
                            </ul>
                            <div v-if="$page.props.active.length > 0" class="z-10 sticky top-0 border-t border-b border-gray-200 bg-gray-50 px-6 py-1 text-sm font-medium text-gray-500">
                                <h3>Active</h3>
                            </div>
                            <ul v-if="$page.props.active.length > 0" class="relative z-0 divide-y divide-gray-200">
                                <li v-for="commission in $page.props.active">
                                    <commission-item v-on:click.native="setCommission(commission.id)" :commission="commission"></commission-item>
                                </li>
                            </ul>

                            <div v-if="$page.props.pending.length > 0" class="z-10 sticky top-0 border-t border-b border-gray-200 bg-gray-50 px-6 py-1 text-sm font-medium text-gray-500">
                                <h3>Pending</h3>
                            </div>
                            <ul v-if="$page.props.pending.length > 0" class="relative z-0 divide-y divide-gray-200">
                                <li v-for="commission in $page.props.pending">
                                    <commission-item :commission="commission"></commission-item>
                                </li>
                            </ul>

                            <div v-if="$page.props.disputed.length > 0" class="z-10 sticky top-0 border-t border-b border-gray-200 bg-gray-50 px-6 py-1 text-sm font-medium text-gray-500">
                                <h3>Disputed</h3>
                            </div>
                            <ul v-if="$page.props.disputed.length > 0" class="relative z-0 divide-y divide-gray-200">
                                <li v-for="commission in $page.props.disputed">
                                    <commission-item :commission="commission"></commission-item>
                                </li>
                            </ul>

                            <div v-if="$page.props.completed.length > 0" class="z-10 sticky top-0 border-t border-b border-gray-200 bg-gray-50 px-6 py-1 text-sm font-medium text-gray-500">
                                <h3>Completed</h3>
                            </div>
                            <ul v-if="$page.props.completed.length > 0" class="relative z-0 divide-y divide-gray-200">
                                <li v-for="commission in $page.props.completed">
                                    <commission-item :commission="commission"></commission-item>
                                </li>
                            </ul>
                            <div v-if="$page.props.finished.length > 0" class="z-10 sticky top-0 border-t border-b border-gray-200 bg-gray-50 px-6 py-1 text-sm font-medium text-gray-500">
                                <h3>History</h3>
                            </div>
                            <ul v-if="$page.props.finished.length > 0" class="relative z-0 divide-y divide-gray-200">
                                <li v-for="commission in $page.props.finished">
                                    <a v-on:click.native="alert('test')">
                                    <commission-item :commission="commission"></commission-item>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </aside>
                </div>
            </div>
        </div>


    </app-layout>

</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import CommissionItem from "@/Pages/CommissionItem";
export default {
name: "Commissions",
    components: {CommissionItem, AppLayout},
    props: ['commissions', 'pending', 'overdue', 'active', 'disputed', 'completed', 'finished'],
    data() {
        return {
            commission: [],
        }
    },
    methods:
        {
            load()
            {
                //alert(JSON.stringify(this.commission));
            },
            setCommission(id)
            {
                for(let i=0;i<this.commissions.length;i++)
                {
                    if(this.commissions[i].id === id)
                    {
                        return data.commission = this.commissions[i];
                    }
                }

            },
        },
    events: {
    },
    beforeMount() {
        this.load();
    }
}
</script>

<style scoped>

</style>
