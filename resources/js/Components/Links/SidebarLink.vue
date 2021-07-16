<template>
    <inertia-link :href="href" :class="classeslink">
        <i :class="classesicon"></i>
        <slot />
    </inertia-link>
</template>

<script>
    export default {
        props: ['href', 'active','icon'],

        computed: {
            classeslink() {
                return (this.active
                    ? 'text-emerald-500 hover:text-emerald-600'
                    : 'text-blueGray-700 hover:text-blueGray-500') + ' text-xs uppercase py-3 font-bold block'
            },
            classesicon() {
                return (this.active
                    ? 'opacity-75'
                    : 'text-blueGray-300') + ' mr-2 text-sm ' + this.icon
            },
        }
    }
</script>
