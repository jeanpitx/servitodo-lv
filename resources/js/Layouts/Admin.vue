<template>
    <div>
        <!-- Sidebar -->
        <sidebar />
        <!-- Div Gray Content -->
        <div class="relative md:ml-64 bg-blueGray-100 min-h-screen">
            <!-- Navbar And Div Green Color -->
            <admin-navbar />
            <div class="relative bg-emerald-600 pt-20 xs:hidden md:block"></div>
            <!-- Div Page Content -->
            <div class="mx-auto w-full -m-24 pt-24 min-h-screen flex flex-col justify-between">
                <div>
                    <!-- Page Heading -->
                    <header class="bg-white shadow" v-if="$slots.header">
                        <div class="w-max mx-auto py-4 px-4 sm:px-6 lg:px-8">
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                <slot name="header" />
                            </h2>
                        </div>
                    </header>
                    <!-- Main -->
                    <main class="px-4 md:px-10">
                        <slot /><!-- El slot permite cargar el contenido -->
                    </main>
                </div>
                <!-- Footer -->
                <footer-admin />
            </div>
        </div>
    </div>
</template>

<script>
    import AdminNavbar from "@/Components/Navbars/AdminNavbar.vue";
    import Sidebar from "@/Components/Sidebar/Sidebar.vue";
    import FooterAdmin from "@/Components/Footers/FooterAdmin.vue";

    export default {
        components: {
            AdminNavbar,
            Sidebar,
            FooterAdmin,
        },

        data() {
            return {
                showingNavigationDropdown: false,
            }
        }
    };
</script>