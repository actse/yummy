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
            <!--List Product-->
            <div class="w-11/12 mx-auto p-5 mt-5 rounded-md bg-white">
                <div>
                    <div class="relative w-52">
                    <div
                        class="absolute top-3 left-1 flex items-center pl-3 pointer-events-none"
                    >
                        <img class="w-4 h-4" src="../../imgs/search.svg" />
                    </div>
                    <input
                        type="text"
                        id="search"
                        class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-full focus:ring-gray-300 focus:border-gray-300 block w-full pl-10 p-2.5"
                        placeholder="Search..."
                        required
                    />
                    </div>
                </div>
                <div class="mt-4">
                    <table>
                        <thead>
                            <tr class="text-sm text-center">
                                <td class="w-10">no.</td>
                                <td class="w-10">รูป</td>
                                <td class="w-24">ชื่อสินค้า</td>
                                <td class="w-12">ประเภท</td>
                                <td class="w-12">ราคา</td>
                                <td class="w-15">จัดการสินค้า</td>
                            </tr>
                        </thead>
                        <tbody class="text-xs text-center">
                            <tr>
                                <td>1</td>
                                <td><img class="w-[40px] h-[40px] rounded-md" src="https://via.placeholder.com/90x90" alt=""></td>
                                <td>สามชั่นสไลด์ Coller pork</td>
                                <td>หมู</td>
                                <td>39.00</td>
                                <td class="space-x-2">
                                    <button class="relative w-5 h-5 rounded-md bg-blue-400 border border-blue-500"><img class="absolute w-[14px] top-[2px] left-[2px]" src="../../imgs/edit.svg" alt=""></button>
                                    <button class="relative w-5 h-5 rounded-md bg-red-400 border border-red-500"><img class="absolute w-[14px] top-[2px] left-[2px]" src="../../imgs/remove.svg" alt=""></button>
                                </td>
                            </tr>
                            <tr v-for="(products, index) in items" :key="index">
                                <td>{{ products.product_image}}</td>
                                <td>{{ products.product_name}}</td>
                                <td>{{ products.type_product_id}}</td>
                                <td>{{ products.product_price}}</td>
                                <td>
                                    <button class="relative w-5 h-5 rounded-md bg-blue-400 border border-blue-500"><img class="absolute w-[14px] top-[2px] left-[2px]" src="../../imgs/edit.svg" alt=""></button>
                                    <button class="relative w-5 h-5 rounded-md bg-red-400 border border-red-500"><img class="absolute w-[14px] top-[2px] left-[2px]" src="../../imgs/remove.svg" alt=""></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<script >
export default {

}
</script>

<style>

</style>