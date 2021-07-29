<template>
  <div v-if="links.length > 3">
    <div class="flex flex-wrap -mb-1">
      <template v-for="(link, k) in links" :key="k">
        <div v-if="link.url === null"  class="mr-1 mb-1 px-3 py-2 text-xs leading-4 text-gray-400 border rounded " v-html="link.label" />
        <inertia-link v-else class="mr-1 mb-1 px-3 py-2 text-xs leading-4 border rounded hover:bg-green-500 focus:border-indigo-500 focus:text-indigo-500 dark:text-white " :class="{ 'bg-emerald-400 text-gray-800 dark:hover:bg-green-900 dark:bg-emerald-800 dark:text-gray-200': link.active }" :href="link.url" v-html="link.label" />
      </template>
    </div>
  </div>
</template>

  

<script>
export default {
  props: {
    links: Array,
  },
}
</script> 