<template>
  <div>
    <dropdown align="right" width="48" contentClasses="bg-white dark:bg-gray-600">
      <template #trigger>
        <a href="#" class="dark:text-gray-300 text-blueGray-500 block py-1 px-3">
          <i class="fas fa-bell"></i>
        </a>
      </template>

      <template #content>
        <dropdown-link :href="'#'"  class="dark:text-gray-200">
          Another action
        </dropdown-link>
        <dropdown-link :href="'#'"  class="dark:text-gray-200">
          Another action
        </dropdown-link>
      </template>
    </dropdown>
  </div>
</template>
<script>
import Dropdown from '@/Components/Dropdowns/Dropdown';
import DropdownLink from '@/Components/Dropdowns/DropdownLink';

export default {
  data() {
    return {
    };
  },
  components: {
    Dropdown,
    DropdownLink,
  },
};
</script>
