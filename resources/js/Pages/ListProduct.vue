<template>
    <div class="w-full min-h-screen relative">
        <div class="max-w-md mx-auto h-screen bg-orange-100 border">
            <!--Header-->
            <div class="relative w-full px-7 py-4 bg-white border-b-2 border-gray-300 shadow-sm">
                <Link rel="stylesheet" href="home_customer"><img class="absolute left-3 " src="../../imgs/vector.svg"></Link>
                <div class="flex justify-center items-center text-2xl font-bold text-gray-700">
                    <h1>รายการสินค้า</h1>
                </div>
            </div>
            <ProductList />
        </div>
      </div>


      
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
</script>


<script >
import ProductList from '@/components/ProductList.vue';
export default {
  components: {
    ProductList,
  },
};
</script>

<style>

</style>