<template>
  <div class="container mx-auto px-4 h-full">
    <div class="flex content-center items-center justify-center h-full">
      <div class="w-full lg:w-4/12 px-4">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
          <!--<div class="rounded-t mb-0 px-6 py-6">
            <div class="text-center mb-3">
              <h6 class="text-blueGray-500 text-sm font-bold">
                Sign in with
              </h6>
            </div>
            <div class="btn-wrapper text-center">
              <button class="bg-white active:bg-blueGray-50 text-blueGray-700 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150" type="button">
                <img alt="..." class="w-5 mr-1" :src="github" />
                Github
              </button>
              <button class="bg-white active:bg-blueGray-50 text-blueGray-700 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150" type="button">
                <img alt="..." class="w-5 mr-1" :src="google" />
                Google
              </button>
            </div>
            <hr class="mt-6 border-b-1 border-blueGray-300" />
          </div>-->
          <!---<div class="flex-auto px-4 lg:px-10 py-10 pt-0">-->
          <div class="rounded-t mb-0 px-6 py-6">
            <!--<div class="text-blueGray-400 text-center mb-3 font-bold">
              <small>Or sign in with credentials</small>
            </div>-->
            <div class="text-center mb-3">
              <h6 class="text-blueGray-500 text-sm font-bold">
                Sign in with
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
                <auth-input label="Password" forLabel="password" id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
              </div>
              
              <div>
                <label class="inline-flex items-center cursor-pointer">
                  <auth-checkbox id="remember" name="remember" v-model:checked="form.remember" />
                  <span class="ml-2 text-sm font-semibold text-blueGray-600">
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
