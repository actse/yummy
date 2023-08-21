<template>
    <div class="w-full min-h-screen relative">
        <div class="max-w-md mx-auto h-screen bg-white border">
            <!--Header-->
            <div
                class="relative w-full px-7 py-4 bg-white border-b-2 border-gray-300 shadow-sm"
            >
                <Link rel="stylesheet" href="home_customer"
                    ><img class="absolute left-3" src="../../imgs/vector.svg"
                /></Link>
                <label for="voice-search" class="sr-only">Search</label>
                <div
                    class="flex justify-center items-center text-2xl font-bold text-gray-700"
                >
                    <h1>ประวัติ</h1>
                </div>
            </div>
            <!-- List Menu History-->
            <div

                class="bg-white w-full px-4"
            >
                <div v-for="(item, index) in items" :key="index"
                    class="relative flex border-b-2 py-4 border-gray-300 bg-white"
                >
                    <img
                        class="w-[100px] h-[100px] rounded-[5px]"
                        src="https://via.placeholder.com/90x90"
                    />
                    <div class="px-2">
                        <div>
                            <h2 class="text-lg text-gray-700 font-bold">
                                {{ item.product_name }}
                            </h2>
                            <p class="text-sm px-3 text-gray-400">
                                {{ item.product_comment }}
                            </p>
                            <p class="text-sm px-3 text-gray-400">
                                ผู้สั่ง : {{ item.custom_name }}
                            </p>
                            <p class="text-sm px-3 text-gray-400">
                                เวลา : {{ item.ordered_at }}
                            </p>
                            <p class="text-sm px-3 text-gray-400">
                                สถานะ : {{ item.status }}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div
                    class="fixed flex justify-center items-center max-w-md mx-auto w-full h-20 bottom-0 bg-white text-center border-t-2 border-gray-300 text-gray-500"
                >
                    <p>{{ item.length }} รายการ</p>
                </div> -->
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<script>
export default {
    data() {
        const urlParams = new URLSearchParams(window.location.search);
        const id = urlParams.get("id");
        return {
            receivedId: id,
            items: [
                {
                    id: "",
                    product_name: "",
                    bill_id: "",
                    product_count: "",
                    product_comment: "",
                    custom_name: "",
                    ordered_at: "",
                    accepted_at: "",
                    finished_at: "",
                    status: "",
                },
            ],
        };
    },
    methods: {
        orders_history() {
            const formData = new FormData();

            formData.append("table_id", this.receivedId);

            axios
                .post("/fetch_order_history", formData)
                .then((response) => {
                    if (response.data != "") {
                        this.items = response.data;
                        console.log(this.items);
                    } else {
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    mounted() {
        this.orders_history();
    },
};
</script>
