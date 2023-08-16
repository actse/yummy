<template>
    <div class="w-full min-h-screen relative">
        <div class="max-w-md mx-auto h-full bg-orange-100 border">
            <header class="relative">
                <img
                    class="h-48 w-full shadow bg-cover"
                    src="../../imgs/shabu.jpg"
                />
                <div
                    class="flex absolute mx-auto left-[10px] top-[10px] items-center justify-center"
                >
                    <img
                        class="rounded-full border-2 border-white shadow-md"
                        src="https://via.placeholder.com/58x58"
                        alt=""
                    />
                    <div class="flex-col ml-2 text-white text-3xl font-bold">
                        <p>Yummy</p>
                    </div>
                </div>
            </header>
            <div class="my-5 mx-7">
                <div
                    class="flex flex-col bg-white mt-10 mb-6 p-4 rounded-lg shadow-lg text-base text-gray-600"
                >
                    <div class="flex flex-wrap p-2">
                        <img class="w-6 h-6" src="../../imgs/adult.png" />
                        <div class="pl-1">
                            <span class="text-sm">
                                : {{ "ผู้ใหญ่ " + this.customer_adult }} ,
                                {{ "เด็กโต " + this.customer_children }} ,
                                {{ "เด็กเล็ก " + this.customer_baby }}</span
                            >
                        </div>
                    </div>

                    <div class="flex flex-wrap p-2">
                        <img class="w-6 h-6" src="../../imgs/tables.png" />
                        <div class="pl-1">
                            <span class="text-sm">
                                : โต๊ะ {{ this.table_number || "-" }}</span
                            >
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex flex-wrap p-2">
                            <img
                                class="w-6 h-6"
                                src="../../imgs/plug-type-l-svgrepo-com.svg"
                            />
                            <div class="pl-1">
                                <span class="text-sm">
                                    : {{ this.package || "-" }} ({{
                                        package_secondary + " 39 บาท"
                                    }})</span
                                >
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex flex-wrap p-2">
                            <img
                                class="w-6 h-6"
                                src="../../imgs/alarm-clock-alt-svgrepo-com.svg"
                            />
                            <div class="pl-1">
                                <span class="text-sm">
                                    : {{ this.registered_at || "-" }}</span
                                >
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="flex flex-col bg-white my-5 rounded-lg shadow-lg text-gray-600"
                >
                    <div class="flex justify-around mt-5">
                        <div
                            class="flex flex-col items-center p-4 shadow-md rounded-lg"
                        >
                            <!-- <router-link to="/history_customer"><img class="w-[80px] h-[80px]" src="../../imgs/icons8-list-64.png"></router-link> -->
                            <!-- <a href="history_customer"><img class="w-[80px] h-[80px]" src="../../imgs/icons8-list-64.png"></a> -->
                            <Link href="history_customer"
                                ><img
                                    class="w-[80px] h-[80px]"
                                    src="../../imgs/icons8-list-64.png"
                            /></Link>
                            <!-- <Link :href="route('history_customer')">
                            <img class="w-[80px] h-[80px]" src="../../imgs/icons8-list-64.png">
                        </Link> -->
                            <!-- <LinkPage href="/">history_customer</LinkPage> -->
                            <span class="mt-1">รายการที่สั่ง</span>
                        </div>

                        <div
                            class="flex flex-col items-center p-4 shadow-md rounded-lg"
                        ><Link href="service_customer"
                                ><img
                                    class="w-[80px] h-[80px]"
                                    src="../../imgs/icons8-waiter-64.png"
                            /></Link>
                            <span class="mt-1">เรียกพนักงาน</span>
                        </div>
                    </div>
                    <Link type="button" :href="'menu_customer?id=' + id" class="relative"
                        ><span class="text-xl text-white font-bold relative flex text-center items-center justify-center p-4 m-5 rounded-full bg-gradient-to-r from-amber-200 via-orange-300 to-orange-400 shadow-gray-300 shadow-md"
                            >สั่งอาหาร</span
                        ><img
                            class="absolute right-8 top-8"
                            src="../../imgs/arrow-right.svg"
                    /></Link>
                    <router-view></router-view>
                </div>
            </div>
            <footer class="relative">
                <img
                    class="h-40 w-full shadow bg-cover"
                    src="../../imgs/shabu.jpg"
                />
            </footer>
        </div>
    </div>
</template>

<!-- <div>{{ data.title || 'ไม่พบ title' }}</div>
      <div>{{ data.body || 'ไม่พบ body' }}</div>
       -->
<script setup>
import { reactive, onMounted } from "vue";
import axios from "axios";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";
let data = reactive({});

// axios
//     .get("get_data")
//     .then((response) => {
//         console.log(response.data);
//         data.title = response.data.title;
//         data.body = response.data.body;
//     })
//     .catch((error) => console.log(error));
</script>

<script>
export default {
    data() {
        return {
            id: "1",
            shop_id: "1001",
            staff_id: "1100111011101",
            reference_code: "ABCD1234",
            table_number: "3",
            customer_adult: "4",
            customer_children: "1",
            customer_baby: "0",
            package: "บุฟเฟ่ย์ 399",
            package_secondary: "เครื่องดื่ม refeel",
            registered_at: "2023-08-11 18:44:30",
        };
    },
    methods: {

  },
};
</script>

<style scoped></style>
