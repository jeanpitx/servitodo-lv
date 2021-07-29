<template>
    <admin-layout>
        <template #header>
            {{pluralName}}
        </template>

        <div class="relative flex mt-4 flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 dark:bg-blueGray-600 border-0">
            <div class="rounded-t bg-white dark:bg-gray-800 mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                    <h6 class="text-blueGray-700 dark:text-gray-200 text-xl font-bold">Visualizar Información</h6>
                    <inertia-link :href="route('categories.index')" title="Regresar" class="text-sm dark:text-white text-white inline-flex items-center justify-between w-auto px-4 h-6 text-indigo-100 transition-colors duration-150 bg-blueGray-600 rounded-lg focus:shadow-outline hover:bg-gray-500">
                        <i class="fas fa-arrow-left"></i>
                    </inertia-link>
                </div>
            </div>
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                <h6 class="text-blueGray-400 dark:text-emerald-500 text-sm mt-3 mb-2 font-bold uppercase">
                    Información principal
                </h6>
                <div class="flex flex-wrap">
                    <div v-for="(it, key, index) in Item" :key="it.id" class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                            <label class="block uppercase dark:text-emerald-300 text-blueGray-600 text-xs font-bold mb-2" htmlFor="grid-password">
                                {{ showTitles[index] }}
                            </label>
                            <p class="text-center text-sm dark:text-gray-200">
                                {{it}}
                            </p>
                        </div>
                    </div>
                </div>
                <!--linea separadora <hr class="mt-6 border-b-1 border-blueGray-300" />-->
            </div>
        </div>
    </admin-layout>
</template>

<script>
import AdminLayout from '@/Layouts/Admin';

export default {
    components: {
        AdminLayout,
    },

    props: {
        pluralName: String,
        showTitles: Object,
        Item: Object,
    },
};
</script>
