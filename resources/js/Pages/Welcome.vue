<template>
  <div>
    <index-navbar />
    <section class="dark:bg-gray-800 header relative pt-16 items-center flex h-screen max-h-860-px">
      <div class="z-10 container mx-auto items-center flex flex-wrap">
        <div class="w-full md:w-8/12 lg:w-6/12 xl:w-6/12 px-4">
          <div class="pt-32 sm:pt-0">
            <h2 class="font-semibold text-4xl text-blueGray-600 dark:text-gray-200">
              Vue Notus - A beautiful extension for Tailwind CSS.
            </h2>
            <p class="mt-4 text-lg leading-relaxed text-blueGray-500 dark:text-gray-200">
              Vue Notus is Free and Open Source. It does not change any of the CSS from
              <a href="https://tailwindcss.com/?ref=creativetim" class="text-blueGray-600 dark:text-gray-500" target="_blank">
                Tailwind CSS.
              </a>
              It features multiple HTML elements and it comes with dynamic components for ReactJS, Vue and Angular.
            </p>
            <div class="mt-12">
              <a href="https://www.creative-tim.com/learning-lab/tailwind/vue/overview/notus?ref=vn-index" target="_blank" class="get-started text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-emerald-500 active:bg-emerald-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150">
                Get started
              </a>
              <a href="https://github.com/creativetimofficial/vue-notus?ref=vn-index" class="github-star ml-1 text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-blueGray-700 active:bg-blueGray-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150" target="_blank">
                Github Star
              </a>
            </div>
          </div>
        </div>
      </div>

      <img class="absolute md:block top-0 b-auto right-0 pt-16 sm:w-6/12 -mt-48 sm:mt-0 w-10/12 max-h-860-px" :src="patternVue" alt="..."/>
    </section>

    <section class="mt-48 md:mt-40 pb-40 relative bg-blueGray-100 dark:bg-gray-600">
      <div class="-mt-16 top-0 bottom-auto left-0 right-0 w-full absolute h-20" style="transform: translateZ(0);">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
          <polygon class="text-blueGray-100 fill-current dark:text-gray-800" points="2560 0 2560 70 0 70"></polygon>
        </svg>
      </div>
      <div class="sm:container mx-auto">
        <div class="flex flex-wrap items-center">
          <div class="w-10/12 md:w-6/12 lg:w-4/12 px-12 md:px-4 mr-auto ml-auto -mt-32">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-emerald-500">
              <img alt="..." src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80" class="w-full align-middle rounded-t-lg"/>
              <blockquote class="relative p-8 mb-4">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="absolute left-0 w-full block h-95-px -top-94-px">
                  <polygon points="-30,95 583,95 583,65" class="text-emerald-500 fill-current"></polygon>
                </svg>
                <h4 class="text-xl font-bold text-white">
                  Great for your awesome project
                </h4>
                <p class="text-md font-light mt-2 text-white">
                  Putting together a page has never been easier than matching together pre-made components. From landing pages presentation to login areas, you can easily customise and built your pages.
                </p>
              </blockquote>
            </div>
          </div>

          <div class="w-full md:w-6/12 px-4">
            <div class="flex flex-wrap">
              <div class="w-full md:w-6/12 px-4">
                <div class="relative flex flex-col mt-4">
                  <div class="px-4 py-5 flex-auto">
                    <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                      <i class="fas fa-sitemap"></i>
                    </div>
                    <h6 class="text-xl mb-1 font-semibold dark:text-gray-900">
                      CSS Components
                    </h6>
                    <p class="mb-4 text-blueGray-500 dark:text-gray-200">
                      Vue Notus comes with a huge number of Fully Coded CSS components.
                    </p>
                  </div>
                </div>
                <div class="relative flex flex-col min-w-0">
                  <div class="px-4 py-5 flex-auto">
                    <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                      <i class="fas fa-drafting-compass"></i>
                    </div>
                    <h6 class="text-xl mb-1 font-semibold dark:text-gray-900">
                      JavaScript Components
                    </h6>
                    <p class="mb-4 text-blueGray-500 dark:text-gray-200">
                      We also feature many dynamic components for React, NextJS, Vue and Angular.
                    </p>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-6/12 px-4">
                <div class="relative flex flex-col min-w-0 mt-4">
                  <div class="px-4 py-5 flex-auto">
                    <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                      <i class="fas fa-newspaper"></i>
                    </div>
                    <h6 class="text-xl mb-1 font-semibold dark:text-gray-900">Pages</h6>
                    <p class="mb-4 text-blueGray-500 dark:text-gray-200">
                      This extension also comes with 3 sample pages. They are fully coded so you can start working instantly.
                    </p>
                  </div>
                </div>
                <div class="relative flex flex-col min-w-0">
                  <div class="px-4 py-5 flex-auto">
                    <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                      <i class="fas fa-file-alt"></i>
                    </div>
                    <h6 class="text-xl mb-1 font-semibold dark:text-gray-900">
                      Documentation
                    </h6>
                    <p class="mb-4 text-blueGray-500 dark:text-gray-200">
                      Built by developers for developers. You will love how easy is to to work with Vue Notus.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sm:container mx-auto overflow-hidden pb-20">
        <div class="flex flex-wrap items-center pt-32">
          <div class="w-full md:w-6/12 px-4 mr-auto ml-auto mt-32">
            <div class="justify-center flex flex-wrap relative">
              <div class="my-4 w-full lg:w-6/12 px-4">
                <a href="https://www.creative-tim.com/learning-lab/tailwind/js/alerts/notus?ref=vn-index" target="_blank">
                  <div class="bg-yellow-500 shadow-lg rounded-lg text-center p-8">
                    <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/js.png"/>
                    <p class="text-lg text-white mt-4 font-semibold">
                      JavaScript
                    </p>
                  </div>
                </a>
                <a href="https://www.creative-tim.com/learning-lab/tailwind/vue/alerts/notus?ref=vn-index" target="_blank">
                  <div class="bg-emerald-500 shadow-lg rounded-lg text-center p-8 mt-8">
                    <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/vue.jpg"/>
                    <p class="text-lg text-white mt-4 font-semibold">
                      Vue.js
                    </p>
                  </div>
                </a>
              </div>
              <div class="my-4 w-full lg:w-6/12 px-4 lg:mt-16">
                <a href="https://www.creative-tim.com/learning-lab/tailwind/js/alerts/notus?ref=vn-index" target="_blank">
                  <div class="bg-yellow-500 shadow-lg rounded-lg text-center p-8">
                    <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/js.png"/>
                    <p class="text-lg text-white mt-4 font-semibold">
                      JavaScript
                    </p>
                  </div>
                </a>
                <a href="https://www.creative-tim.com/learning-lab/tailwind/vue/alerts/notus?ref=vn-index" target="_blank">
                  <div class="bg-emerald-500 shadow-lg rounded-lg text-center p-8 mt-8">
                    <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/vue.jpg"/>
                    <p class="text-lg text-white mt-4 font-semibold">
                      Vue.js
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="w-full md:w-4/12 px-12 md:px-4 ml-auto mr-auto mt-48">
            <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
              <i class="fas fa-drafting-compass text-xl"></i>
            </div>
            <h3 class="dark:text-gray-200 text-3xl mb-2 font-semibold leading-normal">
              Javascript Components
            </h3>
            <p class="dark:text-gray-300 text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
              In order to create a great User Experience some components require JavaScript. In this way you can manipulate the elements on the page and give more options to your users.
            </p>
            <p class="dark:text-gray-300 text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
              We created a set of Components that are dynamic and come to help you.
            </p>
            <div class="block pb-6">
              <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
                Alerts
              </span>
              <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
                Dropdowns
              </span>
              <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
                Menus
              </span>
              <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
                Modals
              </span>
              <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
                Navbars
              </span>
              <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
                Popovers
              </span>
              <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
                Tabs
              </span>
              <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
                Tooltips
              </span>
            </div>
            <a href="https://www.creative-tim.com/learning-lab/tailwind/vue/alerts/notus?ref=vn-index" target="_blank" class="dark:text-gray-900 dark:hover:text-gray-700 font-bold text-blueGray-700 hover:text-blueGray-500 ease-linear transition-all duration-150">
              View all
              <i class="fa fa-angle-double-right ml-1 leading-relaxed"></i>
            </a>
          </div>
        </div>
      </div>

    </section>

    <section class="dark:bg-gray-600 bg-blueGray-200 relative pt-32">
      <div class="-mt-20 top-0 bottom-auto left-0 right-0 w-full absolute h-20" style="transform: translateZ(0);">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
          <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>

      <div class="sm:container mx-auto">
        <div class="flex flex-wrap justify-center bg-white dark:bg-gray-800 shadow-xl rounded-lg -mt-64 py-16 px-12 relative z-10">
          <div class="w-full text-center lg:w-8/12">
            <p class="text-4xl text-center">
              <span role="img" aria-label="love">
                😍
              </span>
            </p>
            <h3 class="dark:text-gray-200 font-semibold text-3xl">
              Do you love this Starter Kit?
            </h3>
            <p class="dark:text-gray-400 text-blueGray-500 text-lg leading-relaxed mt-4 mb-4">
              Cause if you do, it can be yours now. Hit the buttons below to navigate to get the Free version for your next project. Build a new web app or give an old project a new look!
            </p>
            <div class="sm:block flex flex-col mt-10">
              <a href="https://www.creative-tim.com/learning-lab/tailwind/vue/overview/notus?ref=vn-index" target="_blank" class="get-started text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-2 bg-emerald-500 active:bg-emerald-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150">
                Get started
              </a>
              <a href="https://github.com/creativetimofficial/vue-notus?ref=vn-index" target="_blank" class="github-star sm:ml-1 text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-blueGray-700 active:bg-blueGray-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150">
                <i class="fab fa-github text-lg mr-1"></i>
                <span>Help With a Star</span>
              </a>
            </div>
            <div class="text-center mt-16"></div>
          </div>
        </div>
      </div>
    </section>

    <footer-component />
  </div>
</template>
<script>
import IndexNavbar from "@/components/Navbars/IndexNavbar.vue";
import FooterComponent from "@/components/Footers/Footer.vue";

import patternVue from "@/assets/img/pattern_vue.png";

export default {
  data() {
    return {
      patternVue,
    };
  },
  components: {
    IndexNavbar,
    FooterComponent,
  },
};
</script>
