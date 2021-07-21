<template>
  <div class="container mx-auto px-4 h-full">
    <div class="flex content-center items-center justify-center h-full">
      <div class="w-full lg:w-4/12 px-4">
        <div class="dark:bg-gray-700 relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
          <div class="rounded-t mb-0 px-6 py-6">
            <div class="text-center mb-3">
              <h6 class="dark:text-gray-200 text-blueGray-500 text-sm font-bold">
                Reset Password
              </h6>
            </div>
            <div class="dark:text-gray-300 mb-4 text-sm text-gray-600">
              Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
            </div>

            <div class="mb-4 font-medium text-sm text-green-600" v-if="verificationLinkSent" >
              A new verification link has been sent to the email address you provided during registration.
            </div>

            <form @submit.prevent="submit">
              <div class="mt-4 flex items-center justify-between">
                <auth-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                  Resend Verification Email
                </auth-button>
              </div>
              <div class="mt-4 flex items-center justify-between">
                <inertia-link :href="route('logout')" method="post" as="button" class="dark:text-gray-300 w-full underline text-sm text-gray-600 hover:text-gray-900">Log Out</inertia-link>
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

  export default {
    layout: Auth,

    components: {
      AuthButton,
    },

    props: {
      auth: Object,
      errors: Object,
      status: String,
    },

    data() {
      return {
        form: this.$inertia.form()
      }
    },

    methods: {
      submit() {
        this.form.post(this.route('verification.send'))
      }
    },

    computed: {
      verificationLinkSent() {
        return this.status === 'verification-link-sent';
      }
    }
  };
</script>
