<template>
    <admin-layout>
        <template #header>
            Dashboard
        </template>

        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="dark:bg-gray-600 dark:text-gray-200 dark:border-gray-500 p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </admin-layout>
</template>

<script>
    import AdminLayout from '@/Layouts/Admin'

    export default {
        components: {
            AdminLayout,
        },

        props: {
            auth: Object,
            errors: Object,
        },
    }
</script>
