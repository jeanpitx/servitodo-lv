<template>
    <label class="block dark:text-emerald-300 uppercase text-blueGray-600 text-xs font-bold mb-2">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>

<script>
    export default {
        props: ['value']
    }
</script>
