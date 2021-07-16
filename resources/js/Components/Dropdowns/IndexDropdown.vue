<template>
  <div>
    <dropdown align="right" width="48">
      <template #trigger>
        <a href="#" class="hover:text-blueGray-500 text-blueGray-700 px-3 py-2 flex items-center text-xs uppercase font-bold">
          Sesión
        </a>
      </template>

      <template #content>
        <template v-if="$page.props.auth.user">
          <span class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
            Admin Layout
          </span>
          <index-dropdown-link :href="route('dashboard')">
            Dashboard
          </index-dropdown-link>
          <div class="h-0 mx-4 my-2 border border-solid border-blueGray-100" />
          <span class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
            Auth Layout
          </span>
          <index-dropdown-link :href="'#'">
            Profile
          </index-dropdown-link>
        </template>
        <template v-else>
          <span class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
            Auth
          </span>
          <index-dropdown-link :href="route('login')">
            Login
          </index-dropdown-link>
          <index-dropdown-link v-if="$page.props.canRegister" :href="route('register')">
            Register
          </index-dropdown-link>
        </template>
      </template>
    </dropdown>
  </div>
</template>
<script>
import Dropdown from '@/Components/Dropdowns/Dropdown';
import IndexDropdownLink from '@/Components/Dropdowns/IndexDropdownLink';

export default {
  data() {
    return {
      dropdownPopoverShow: false,
    };
  },
  components: {
    Dropdown,
    IndexDropdownLink,
  },
  props: {
    auth: Object,
    canLogin: Boolean,
    canRegister: Boolean,
  },
};
</script>
