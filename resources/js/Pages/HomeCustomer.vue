
<template>
    <div class="w-full min-h-screen relative">
    <div class="max-w-md mx-auto h-screen bg-orange-100 border">
        <header class="relative">
            
            <img class="h-48 w-full shadow bg-cover"  src="../../imgs/shabu.jpg">
            <div class="flex absolute mx-auto left-[10px] top-[10px] items-center justify-center">
                <img class="rounded-full border-2 border-white shadow-md" src="https://via.placeholder.com/58x58" alt="">
                <div class="flex-col ml-2 text-white text-3xl font-bold">
                    <p>Yummy</p>
                </div>
            </div>
        </header>

        <div class="my-5 mx-7">
            <div class="flex flex-col bg-white mt-10 mb-6 p-4 rounded-lg shadow-lg text-base text-gray-600">
                <div class="flex flex-wrap p-2 ">
                    <img class="w-6 h-6" src="../../imgs/adult.png">
                    <div class="pl-1"><span> : </span>{{ data.person || '-' }} <span>ท่าน</span></div>
                </div>
                
                <div class="flex flex-wrap p-2 ">
                    <img class="w-6 h-6" src="../../imgs/tables.png">
                    <div class="pl-1"><span> : โต๊ะ </span>{{ data.tables || '-' }}</div>
                </div>
                <div class="flex justify-between">
                    <div class="flex flex-wrap p-2 ">
                        <img class="w-6 h-6" src="../../imgs/plug-type-l-svgrepo-com.svg">
                        <div class="pl-1"><span> : </span>{{ data.typeService || '-' }}</div>
                    </div>
                    <div class="flex flex-wrap p-2 ">
                        <img class="w-6 h-6" src="../../imgs/alarm-clock-alt-svgrepo-com.svg">
                        <div class="pl-1"><span> : </span>{{ data.times || '-' }}</div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col bg-white my-5  rounded-lg shadow-lg text-gray-600">
                <div class="flex justify-around mt-5 ">
                    <div class="flex flex-col items-center p-4 shadow-md rounded-lg">
                        <!-- <router-link to="/history_customer"><img class="w-[80px] h-[80px]" src="../../imgs/icons8-list-64.png"></router-link> -->
                        <!-- <a href="history_customer"><img class="w-[80px] h-[80px]" src="../../imgs/icons8-list-64.png"></a> -->
                        <Link href="history_customer"><img class="w-[80px] h-[80px]" src="../../imgs/icons8-list-64.png"></Link>
                        <!-- <Link :href="route('history_customer')">
                            <img class="w-[80px] h-[80px]" src="../../imgs/icons8-list-64.png">
                        </Link> -->
                        <!-- <LinkPage href="/">history_customer</LinkPage> -->
                        <span class="mt-1">รายการที่สั่ง</span>
                    </div>
                    
                    <div class="flex flex-col items-center p-4 shadow-md rounded-lg">
                        <img class="w-[80px] h-[80px]" src="../../imgs/icons8-waiter-64.png">
                        <span class="mt-1">เรียกพนักงาน</span>
                    </div>
                </div>
                <div class="relative flex text-center items-center justify-center p-4 m-5 rounded-full bg-gradient-to-r from-amber-200 via-orange-300 to-orange-400 shadow-gray-300 shadow-md">
                    <Link href="menu_customer"><span class="text-xl text-white font-bold ">สั่งอาหาร</span><img class="absolute right-4 top-4"  src="../../imgs/arrow-right.svg"></Link>
                </div>
                <router-view></router-view>
            </div>
        </div>

        <div></div>
    </div>
  </div>
</template>

      <!-- <div>{{ data.title || 'ไม่พบ title' }}</div>
      <div>{{ data.body || 'ไม่พบ body' }}</div>
       -->
<script setup>
import { reactive, onMounted } from "vue";
import axios from "axios";
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
    let data = reactive({});

    axios.get('get_data')
        .then( response => {
            console.log(response.data);
            data.title = response.data.title;
            data.body = response.data.body;
        })
        .catch(error => console.log(error))

    
</script>

<script>

</script>

<style scoped>

</style>
