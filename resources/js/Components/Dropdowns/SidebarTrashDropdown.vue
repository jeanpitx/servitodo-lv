<template>
  <div>
    <dropdown-context width="48" contentClasses="bg-white dark:bg-gray-600">
      <template #trigger>
          <slot />
      </template>

      <template #content>
        <dropdown-link :href="href" class="dark:text-gray-200">
          <i class="fas fa-trash mr-1"></i> Papelera {{title}}
        </dropdown-link>
      </template>
    </dropdown-context>
  </div>
</template>

<script>
import DropdownContext from '@/Components/Dropdowns/DropdownContext';
import DropdownLink from '@/Components/Dropdowns/DropdownLink';

export default {
  components: {
    DropdownContext,
    DropdownLink,
  },
  props: ['title','href'],
};

</script>

