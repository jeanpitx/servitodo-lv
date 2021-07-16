<template>
    <input type="checkbox" :value="value" v-model="proxyChecked"
           class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150">
</template>

<script>
export default {
    emits: ['update:checked'],

    props: {
        checked: {
            type: [Array, Boolean],
            default: false,
        },
        value: {
            default: null,
        },
    },

    computed: {
        proxyChecked: {
            get() {
                return this.checked;
            },

            set(val) {
                this.$emit("update:checked", val);
            },
        },
    },
}
</script>
