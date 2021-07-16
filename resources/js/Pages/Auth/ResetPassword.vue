<template>
  <div class="container mx-auto px-4 h-full">
    <div class="flex content-center items-center justify-center h-full">
      <div class="w-full lg:w-6/12 px-4">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
          <div class="rounded-t mb-0 px-6 py-6">
            <div class="text-center mb-3">
              <h6 class="text-blueGray-500 text-sm font-bold">
                Reset Password
              </h6>
            </div>

            <auth-input-errors class="mb-4" />
            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
              {{ status }}
            </div>

            <form @submit.prevent="submit">
              <div class="relative w-full mb-3">
                <auth-label for="email" value="Email" />
                <auth-input id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus autocomplete="username" />
              </div>

              <div class="relative w-full mb-3">
                <auth-label for="password" value="Password" />
                <auth-input label="Password" forLabel="password" id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="new-password" />
              </div>

              <div class="relative w-full mb-3">
                <auth-label for="password_confirmation" value="Confirm Password" />
                <auth-input label="Password" forLabel="password_confirmation" id="password_confirmation" type="password" class="mt-1 block w-full" v-model="form.password_confirmation" required autocomplete="new-password" />
              </div>

              <div class="text-center mt-6">
                <auth-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                  Reset Password
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
  import Auth from "@/Layouts/Auth";
  import AuthLabel from '@/Components/Labels/AuthLabel';
  import AuthInput from '@/Components/Inputs/AuthInput';
  import AuthCheckbox from '@/Components/Checkboxs/AuthCheckbox';
  import AuthButton from '@/Components/Buttons/AuthButton';
  import AuthInputErrors from '@/Components/Errors/AuthInputErrors';

  export default {
    layout: Auth,

    components: {
      AuthInput,
      AuthLabel,
      AuthCheckbox,
      AuthButton,
      AuthInputErrors,
    },

    props: {
      auth: Object,
      email: String,
      errors: Object,
      token: String,
    },

    data() {
      return {
        form: this.$inertia.form({
          token: this.token,
          email: this.email,
          password: '',
          password_confirmation: '',
        })
      }
    },

    methods: {
      submit() {
        this.form.post(this.route('password.update'), {
          onFinish: () => this.form.reset('password', 'password_confirmation'),
        })
      }
    },
  };
</script>
