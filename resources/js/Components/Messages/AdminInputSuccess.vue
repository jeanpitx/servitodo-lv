<template>
    <!-- Mensajes de exito -->
    <div v-if="success" class="pb-4 success">
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Grandioso!</strong>
            <span class="block sm:inline">{{success}}</span>
            <span @click="hide" class="absolute top-0 bottom-0 right-0 px-4 py-3" >
                <i class="fas fa-times text-md text-green-500"></i>
            </span>
        </div>
    </div>
</template>    

<script>
import $ from 'jquery';

export default {
    computed: {
        success() {
            return this.$page.props.success
        },
    },
    created() {
        $('.success').hide("slow");
    },
    updated() {
        if(this.$page.props.success){
            $('.success').show();
            setTimeout(function() {
                $('.success').hide("slow");
            }, 3000);
        } 
    },
    methods: {
        hide: function () {
            $('.success').hide("slow");
        }
    }
}
</script>
