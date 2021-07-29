<template>
    <button :type="type" class="w-full h-12 text-lg bg-emerald-600 hover:bg-green-700 dark:bg-green-700 dark:hover:bg-green-800 rounded text-white">
        <slot />
    </button>
</template>

<script>
    export default {
        props: {
            type: {
                type: String,
                default: 'submit',
            },
        }
    }
</script>
