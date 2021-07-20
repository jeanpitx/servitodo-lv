<template>
  <div class="container mx-auto px-4 h-full">
    <div class="flex content-center items-center justify-center h-full">
      <div class="w-full lg:w-4/12 px-4">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
          <div class="rounded-t mb-0 px-6 py-6">
            <div class="text-center mb-3">
              <h6 class="text-blueGray-500 text-sm font-bold">
                Confirm Password
              </h6>
            </div>

            <div class="mb-4 text-sm text-gray-600">
              This is a secure area of the application. Please confirm your password before continuing.
            </div>

            <auth-input-errors class="mb-4" />
            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
              {{ status }}
            </div>

            <form @submit.prevent="submit">
              <div class="relative w-full mb-3">
                <auth-label for="password" value="Password" />
                <auth-input label="Password" forLabel="password" id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" autofocus />
              </div>

              <div class="mt-4 flex items-center justify-between">
                <auth-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                  Confirm
                </auth-button>
              </div>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</template>
<script>
  import AuthButton from '@/Components/Buttons/AuthButton';
  import Auth from "@/Layouts/Auth";
  import AuthLabel from '@/Components/Labels/AuthLabel';
  import AuthInput from '@/Components/Inputs/AuthInput';
  import AuthInputErrors from '@/Components/Errors/AuthInputErrors';

  export default {
    layout: Auth,

    components: {
      AuthButton,
      AuthLabel,
      AuthInput,
      AuthInputErrors,
    },

    props: {
      auth: Object,
      errors: Object,
    },

    data() {
      return {
        form: this.$inertia.form({
          password: '',
        })
      }
    },

    methods: {
      submit() {
        this.form.post(this.route('password.confirm'), {
          onFinish: () => this.form.reset(),
        })
      }
    },
  };
</script>
