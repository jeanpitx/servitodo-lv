<template>
    <textarea v-if="type=='textarea'" class="dark:bg-blueGray-700 dark:text-gray-200 border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"  :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="input"/>
    <input v-else :type="type" class="dark:bg-blueGray-700 dark:text-gray-200 border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="input">
</template>

<script>
    export default {
        props: ['modelValue','type'],

        emits: ['update:modelValue'],

        methods: {
            focus() {
                this.$refs.input.focus()
            }
        }
    }
</script>

