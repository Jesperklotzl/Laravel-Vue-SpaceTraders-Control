<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    stats: Object,
    loggedIn: Boolean
})

</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <div class="flex min-h-screen flex-col items-center bg-[#FDFDFC] p-6 text-[#1b1b18] lg:justify-center lg:p-8 dark:bg-[#0a0a0a]">
        <header class="mb-6 w-full max-w-[335px] text-sm not-has-[nav]:hidden lg:max-w-4xl">
            <nav class="flex items-center justify-end gap-4">
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('bridge')"
                    class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
                >
                    🚀 Fleet Management
                </Link>
                <template v-else>
                    <Link
                        :href="route('login')"
                        class="inline-block rounded-sm border border-transparent px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#19140035] dark:text-[#EDEDEC] dark:hover:border-[#3E3E3A]"
                    >
                        Log in
                    </Link>
                </template>
            </nav>
        </header>
        <div class="flex w-full items-center justify-center opacity-100 transition-opacity duration-750 lg:grow starting:opacity-0">
            <main class="flex w-full max-w-[335px] flex-col-reverse overflow-hidden rounded-lg lg:max-w-4xl lg:flex-row">

                <div class="max-w-5xl mx-auto p-6">
                    <h1 class="text-2xl font-bold mb-6">SpaceTraders Dashboard</h1>

                    <div v-if="stats">

                        <div class="p-4 bg-gray-100 rounded mb-4">
                            <h2 class="font-semibold">Agent</h2>
                            <p>Name: {{ stats.agent.data.symbol }}</p>
                            <p>Credits: {{ stats.agent.data.credits }}</p>
                        </div>

                        <div class="p-4 bg-gray-100 rounded mb-4">
                            <h2 class="font-semibold">Ships</h2>
                            <ul>
                                <li v-for="ship in stats.ships.data" :key="ship.symbol">
                                    {{ ship.symbol }} — {{ ship.nav.status }} ({{ ship.nav.waypointSymbol }})
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div v-else>
                        <p>No data. Please set your API token.</p>
                    </div>

                </div>

            </main>
        </div>
        <div class="hidden h-14.5 lg:block"></div>
    </div>
</template>
