<template>
  <div>
    <dropdown align="right" width="48" contentClasses="bg-white dark:bg-gray-600">
      <template #trigger>
        <span class="inline-flex rounded-md">
          <button type="button" class="text-blueGray-500 block">
            <div class="items-center flex">
              <span class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full">
                <img alt="..." class="w-full rounded-full align-middle border-none shadow-lg" :src="image"/>
              </span>
            </div>
          </button>
        </span>
      </template>

      <template #content>
        <span class="dark:text-gray-400 text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
          Home Page
        </span>
        <dropdown-link :href="'/'" class="dark:text-gray-200">
          Home
        </dropdown-link>
        <div class="h-0 mx-4 my-2 border border-solid border-blueGray-100" />
        <span class="dark:text-gray-400 text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
          Auth Layout
        </span>
        <dropdown-link :href="'#'" class="dark:text-gray-200">
          Profile
        </dropdown-link>
        <dropdown-link :href="route('logout')" method="post" as="button" class="dark:text-gray-200">
          Log Out
        </dropdown-link>
      </template>
    </dropdown>
  </div>
</template>

<script>


import image from "@/assets/img/team-1-800x800.jpg";
import Dropdown from '@/Components/Dropdowns/Dropdown';
import DropdownLink from '@/Components/Dropdowns/DropdownLink';

export default {
  components: {
    Dropdown,
    DropdownLink,
  },

  data() {
    return {
      image: image,
    };
  },
};
</script>
