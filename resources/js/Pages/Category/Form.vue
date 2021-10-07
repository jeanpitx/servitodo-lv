<template>
    <admin-layout>
        <template #header>
            {{pluralName}}
        </template>

        <div class="relative flex mt-4 flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 dark:bg-blueGray-600 border-0">
            <div class="rounded-t bg-white dark:bg-gray-800 mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                    <h6 class="text-blueGray-700 dark:text-white text-xl font-bold">Visualizar Información</h6>
                    <inertia-link :href="route('categories.index')" title="Regresar" class="text-sm dark:text-white text-white inline-flex items-center justify-between w-auto px-4 h-6 text-indigo-100 transition-colors duration-150 bg-blueGray-600 rounded-lg focus:shadow-outline hover:bg-gray-500">
                        <i class="fas fa-arrow-left"></i>
                    </inertia-link>
                </div>
            </div>
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                <h6 class="text-blueGray-400 dark:text-emerald-500   text-sm mt-3 mb-2 font-bold uppercase">
                    Información principal
                </h6>
                <admin-input-errors class="mb-4" />
                <form @submit.prevent="submit" enctype="multipart/form-data">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-12/12 px-4">
                            <div class="relative w-full mb-3">
                                <admin-label for="name" :value="formTitles[1]"/>
                                <admin-input name="name" id="name" type="text" :value="form.name" :placeholder="formTitles[1]" v-model="form.name" autofocus autocomplete="name" />
                            </div>
                        </div>
                        <div class="w-full lg:w-12/12 px-4">
                            <div class="relative w-full mb-3">
                                <admin-label for="description" :value="formTitles[2]"/>
                                <admin-input name="description" id="description" type="textarea" :placeholder="formTitles[2]" v-model="form.description" required autofocus />
                            </div>
                        </div>
                        <div class="w-full lg:w-12/12 px-4">
                            <div class="relative w-full mb-3">
                                <admin-label for="uri_image" :value="formTitles[3]"/>
                                <admin-input-file name="uri_image" id="uri_image" :src="category?category.uri_image.replace('public','/storage'):''" accept="image/*" @input="form.uri_image = $event.target.files[0]" required="true" />
                            </div>
                            <progress class="w-full" v-if="form.progress" :value="form.progress.percentage" max="100">
                                {{ form.progress.percentage }}%
                            </progress>
                        </div>
                        <div class="prueba w-full lg:w-12/12 px-4 mt-4">
                            <admin-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                {{ (route().current().includes('edit')?"Actualizar ":"Crear ") + singleName }}
                            </admin-button>
                        </div>
                    </div>
                </form>
                <!--linea separadora <hr class="mt-6 border-b-1 border-blueGray-300" />-->
            </div>
        </div>
    </admin-layout>
</template>

<script>
import AdminLayout from '@/Layouts/Admin';
import AdminInputFile from '@/Components/Inputs/AdminInputFile';
import AdminLabel from '@/Components/Labels/AdminLabel';
import AdminInput from '@/Components/Inputs/AdminInput';
import AdminButton from '@/Components/Buttons/AdminButton';
import AdminInputErrors from '@/Components/Messages/AdminInputErrors';

export default {
    components: {
        AdminLayout,
        AdminInputFile,
        AdminLabel,
        AdminInput,
        AdminButton,
        AdminInputErrors,
    },

    props: {
        singleName: String,
        pluralName: String,
        formTitles: Object,
        category: Object,
        errors: Object,
    },

    data() {
        return {
            form: this.$inertia.form({
                _method: route().current().includes('edit')?'put':null, //para hacer put y actualizar, solo cuando hay archivos
                name: this.$props.category?this.$props.category.name:null,
                description: this.$props.category?this.$props.category.description:null,
                uri_image: this.$props.category?this.$props.category.uri_image:null,
            })
        }
    },

    methods: {
        submit() {
            if(route().current().includes('edit'))
                this.form.post(this.route('categories.update',this.$props.category),{
                    forceFormData: true,
                });
            else
                this.form.post(this.route('categories.store'),{
                    forceFormData: true,
                });
        }
    },
};
</script>
