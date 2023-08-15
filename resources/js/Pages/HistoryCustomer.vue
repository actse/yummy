
<template>
    <div class="w-full min-h-screen relative">
        <div class="max-w-md mx-auto h-screen bg-white border">
            <!--Header-->
            <div class="relative w-full px-7 py-4 bg-white border-b-2 border-gray-300 shadow-sm">
                <Link rel="stylesheet" href="home_customer"><img class="absolute left-3 " src="../../imgs/vector.svg"></Link>
                <label for="voice-search" class="sr-only">Search</label>
                <div class="flex justify-center items-center text-2xl font-bold text-gray-700">
                    <h1>ประวัติ</h1>
                </div>
            </div>
            <!-- List Menu History-->
            <div class="bg-white p-4">
                <div class="relative flex border-b-2 py-3 border-gray-300 bg-white">
                    <img class="w-[80px] h-[80px] rounded-[10px]" src="https://via.placeholder.com/90x90"/>
                    <div class="px-2">
                        <h2 class="text-lg text-gray-700 font-bold">ชุดผักรวม</h2>
                        <p class="text-sm text-gray-400">ไม่เอาเห็น</p>
                        <!-- Time Order -->
                        <div class="flex pt-3 space-x-1 text-sm text-gray-500">
                            <p>เวลา : </p><span>18:50 น.</span>
                        </div>
                    </div>
                    <!-- Count Item Cart -->
                        <div class="absolute flex space-x-1 top-4 right-0">
                            <img class="w-2" src="../../imgs/X.svg">
                            <span>{{ 2 }}</span>
                        </div>
                    <!-- Status Item -->
                    <div class="flex absolute right-0 bottom-2 p-1 rounded-lg items-center justify-around bg-green-400 text-white ">
                        <span>เสร็จแล้ว</span>
                    </div>
                </div>
                <div class="relative flex border-b-2 py-3 border-gray-300 bg-white">
                    <img class="w-[80px] h-[80px] rounded-[10px]" src="https://via.placeholder.com/90x90"/>
                    <div class="px-2">
                        <h2 class="text-lg text-gray-700 font-bold">สามชั่นสไลด์ Coller pork</h2>
                        <p class="text-sm text-gray-400"></p>
                        <!-- Time Order -->
                        <div class="flex pt-8 space-x-1 text-sm text-gray-500">
                            <p>เวลา : </p><span>18:50 น.</span>
                        </div>
                    </div>
                    <!-- Count Item Cart -->
                        <div class="absolute flex space-x-1 top-4 right-0">
                            <img class="w-2" src="../../imgs/X.svg">
                            <span>{{ 2 }}</span>
                        </div>
                    <!-- Status Item -->
                    <div class="flex absolute right-0 bottom-2 p-1 rounded-lg items-center justify-around bg-orange-400 text-white ">
                        <span>กำลังทำ</span>
                    </div>
                </div>
            </div>
            <!-- Footer Cart -->
            <div class="fixed flex justify-center items-center max-w-md mx-auto w-full h-20 bottom-0 bg-white text-center border-t-2 border-gray-300 text-gray-500">
                <p>{{ 2 }} รายการ</p>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

</script>
