<template>
  <div class="container mx-auto px-4 h-full">
    <div class="flex content-center items-center justify-center h-full">
      <div class="w-full lg:w-4/12 px-4">
        <div class="dark:bg-gray-700 relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
          <div class="rounded-t mb-0 px-6 py-6">
            <div class="text-center mb-3">
              <h6 class="dark:text-gray-200 text-blueGray-500 text-sm font-bold">
                Sign in with
              </h6>
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

              <div class="relative w-full mb-3">
                <auth-label for="password" value="Password" class="dark:text-gray-200" />
                <auth-input label="Password" forLabel="password" id="password" type="password" class="dark:bg-gray-600 dark:text-white mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
              </div>
              
              <div>
                <label class="inline-flex items-center cursor-pointer">
                  <auth-checkbox id="remember" name="remember" v-model:checked="form.remember" />
                  <span class="ml-2 text-sm font-semibold text-blueGray-600 dark:text-gray-200">
                    Remember me
                  </span>
                </label>
              </div>

              <div class="text-center mt-6">
                <auth-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                  Log In
                </auth-button>
              </div>
            </form>
          </div>
        </div>

        <div class="flex flex-wrap mt-6 relative">
          <div class="w-1/2">
            <inertia-link v-if="canResetPassword" :href="route('password.request')" class="text-blueGray-200">
              <small>Forgot password?</small>
            </inertia-link>
          </div>
          <div class="w-1/2 text-right">
            <inertia-link v-if="$page.props.canRegister" :href="route('register')" class="text-blueGray-200">
              <small>Create new account</small>
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
  import AuthCheckbox from '@/Components/Checkboxs/AuthCheckbox';
  import AuthButton from '@/Components/Buttons/AuthButton';
  import AuthInputErrors from '@/Components/Errors/AuthInputErrors';

  //import github from "@/assets/img/github.svg";
  //import google from "@/assets/img/google.svg";

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
      canResetPassword: Boolean,
      canRegister: Boolean,
      errors: Object,
      status: String,
    },

    data() {
      return {
        form: this.$inertia.form({
          email: '',
          password: '',
          remember: false
        }),
        //github,
        //google,
      }
    },

    methods: {
      submit() {
        this.form.post(this.route('login'), {
          onFinish: () => this.form.reset('password'),
        })
      }
    },
  };
</script>
