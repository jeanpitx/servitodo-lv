<template>
    <admin-layout>
        <template #header>
            {{pluralName}}
        </template>
        <div class="flex flex-wrap mt-4">
            <div class="w-full mb-12 px-4">
                <!-- Mensajes de exito -->
                <admin-input-success />

                <!-- Card Container -->
                <div class="bg-white dark:bg-emerald-900 dark:text-white relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded">
                    <!-- Card Title -->
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full px-4 max-w-full flex-grow flex justify-between">
                                <h3 class="font-semibold text-lg text-blueGray-700 dark:text-white">
                                    Papelera de {{pluralName}}
                                </h3>
                                <div>
                                    <inertia-link :href="route('trash.categories.all')" method="post" :data="{ method: 'restore' }" title="Restaurar todo"  onclick="return confirm('Esta seguro de restaurar todos los elemento')" class="mr-2 text-sm dark:text-white text-white inline-flex items-center justify-between w-auto px-4 h-6 text-indigo-100 transition-colors duration-150 bg-emerald-600 rounded-lg focus:shadow-outline hover:bg-green-700">
                                        <i class="fas fa-trash-restore"></i>
                                    </inertia-link>
                                    <inertia-link :href="route('trash.categories.all')"  method="post" :data="{ method: 'delete' }" title="Eliminar todo"  onclick="return confirm('Esta seguro de eliminar todos los elemento')" class="text-sm dark:text-white text-white inline-flex items-center justify-between w-auto px-4 h-6 text-indigo-100 transition-colors duration-150 bg-red-700 rounded-lg focus:shadow-outline hover:bg-red-800">
                                        <i class="fas fa-trash"></i>
                                    </inertia-link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="block w-full overflow-x-auto pb-4">
                        <!-- Table Index -->
                        <table class="items-center w-full bg-transparent border-collapse">
                            <thead>
                                <tr>
                                    <th v-for="title in tableTitles" :key="title.id" class="dark:bg-emerald-800 dark:text-emerald-300 dark:border-emerald-700 bg-blueGray-50 text-blueGray-500 border-blueGray-100 px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        {{ title }}
                                    </th>
                                    <th class="dark:bg-emerald-800 dark:text-emerald-300 dark:border-emerald-700 bg-blueGray-50 text-blueGray-500 border-blueGray-100 px-3 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="itemParent  in tableItems.data" :key="itemParent.id">
                                    <td v-for="(item, k) in itemParent" :key="item.id" class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <img v-if="k.includes('image') && item" :src="item.replace('public','/storage')" class="w-11 h-11 rounded-md border-2 border-blueGray-50 shadow">
                                        <span v-else>{{ item }}</span>
                                    </td>
                                    <td>
                                        <div class="flex justify-start px-3">
                                            <div class="flex justify-center rounded-lg text-lg" role="group">
                                                <inertia-link :title="'Restaurar ' + singleName" :href="route('trash.categories.only')" method="post" :data="{ method: 'restore', id: itemParent.id }" onclick="return confirm('Esta seguro de recuperar este elemento')" class="bg-transparent text-green-600 border-green-600 hover:bg-green-600 dark:border-gray-200 dark:text-green-300 dark:hover:bg-green-600 dark:hover:text-gray-200 text-sm hover:text-white border rounded-l-lg px-3 py-1 mx-0 outline-none focus:shadow-outline">
                                                    <i class="fas fa-trash-restore"></i>
                                                </inertia-link>
                                                <inertia-link :title="'Eliminar ' + singleName" :href="route('trash.categories.only')" method="post" :data="{ method: 'delete', id: itemParent.id }" onclick="return confirm('Esta seguro de eliminar este elemento, NO SE PODRÁ RECUPERAR')" class="bg-transparent text-red-600 border-red-600 hover:bg-red-600 dark:border-gray-200 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-gray-200 text-sm hover:text-white border border-l-0 rounded-r-lg px-3 py-1 mx-0 outline-none focus:shadow-outline">
                                                    <i class="fa fa-trash"></i>
                                                </inertia-link>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <pagination class="mt-6" :links="tableItems.links" />
            </div>
        </div>
    </admin-layout>
</template>

<script>
import AdminLayout from '@/Layouts/Admin';
import Pagination from '@/Components/Tables/Pagination';
import AdminInputSuccess from '@/Components/Messages/AdminInputSuccess';

export default {
    components: {
        AdminLayout,
        Pagination,
        AdminInputSuccess,
    },

    props: {
        singleName: String,
        pluralName: String,
        tableTitles: Object,
        tableItems: Object,
    },
};
</script>
