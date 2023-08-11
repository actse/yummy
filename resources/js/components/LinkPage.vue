<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <!-- Navigation Links -->
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <NavLink :href="route('history_customer')" :active="route().current('test')">
            history_customer
        </NavLink>

        <div class="shrink-0 flex items-center">
            <Link :href="route('history_customer')">
                <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800"/>
            </Link>
        </div>
    </div>        
    
    
</template>