<template>
  <div class="container mx-auto px-4 h-full">
    <div class="flex content-center items-center justify-center h-full">
      <div class="w-full lg:w-6/12 px-4">
        <div class="dark:bg-gray-700 relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
          <div class="rounded-t mb-0 px-6 py-6">
            <div class="text-center mb-3">
              <h6 class="dark:text-gray-200 text-blueGray-500 text-sm font-bold">
                Forgot your password
              </h6>
            </div>
            <div class="dark:text-gray-300 mb-4 text-sm text-gray-600">
              Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
            </div>
            
            <auth-input-errors class="mb-4" />
            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
              {{ status }}
            </div>

            <form @submit.prevent="submit">
              <div class="relative w-full mb-3">
                <auth-label for="email" value="Email" class="dark:text-gray-200" />
                <auth-input id="email" type="email" class="dark:bg-gray-600 dark:text-white mt-1 block w-full" v-model="form.email" required autofocus autocomplete="username" />
              </div>

              <div class="text-center mt-6">
                <auth-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                  Email Password Reset Link
                </auth-button>
              </div>
            </form>
          </div>
        </div>
        <div class="flex flex-wrap mt-6 relative">
          <div class="w-1/2">
            <inertia-link :href="route('login')" class="text-blueGray-200">
              <small>Back</small>
            </inertia-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  import Auth from "@/Layouts/Auth";
  import AuthLabel from '@/Components/Labels/AuthLabel';
  import AuthInput from '@/Components/Inputs/AuthInput';
  import AuthButton from '@/Components/Buttons/AuthButton';

  export default {
    layout: Auth,

    components: {
      AuthInput,
      AuthLabel,
      AuthButton,
    },

    props: {
      auth: Object,
      errors: Object,
      status: String,
    },

    data() {
      return {
        form: this.$inertia.form({
          email: ''
        })
      }
    },

    methods: {
      submit() {
        this.form.post(this.route('password.email'))
      }
    },
  };
</script>
