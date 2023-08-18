<template>
    <div class="w-full h-screen relative">
        <div class="relative max-w-md mx-auto h-full bg-white border-2">
            <!--Header-->
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
            <div
                class="relative w-full px-7 py-4 bg-white border-b-2 border-gray-300 shadow-sm"
            >
                <Link :href="'menu_customer?id=' + receivedId"
                    ><img class="absolute left-3" src="../../imgs/vector.svg"
                /></Link>
                <label for="voice-search" class="sr-only">Search</label>
                <div
                    class="flex justify-center items-center text-2xl font-bold text-gray-700"
                >
                    <h1>ตะกร้า</h1>
                </div>
            </div>
            <!-- List Menu -->
            <div class="bg-white w-full h-full px-4" v-if="list_product_cart == true">
                <form
                    @submit.prevent="updatestatus"
                    @input="form.errors.clear($event.target.name)"
                    enctype="multipart/form-data"
                >
                    <div
                        v-for="(item, index) in items"
                        :key="index"
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
                            <!-- Edie Comment -->
                            <div class="flex text-sm text-blue-400 mt-3">
                                <button
                                    type="button"
                                    @click="openselectedItem(item.product_name)"
                                >
                                    <p>แก้ไข</p>
                                </button>
                            </div>
                        </div>
                        <!-- Remove Item Cart -->
                        <button type="button" @click="deleted(item.id)">
                            <img
                                class="absolute top-5 right-0"
                                src="../../imgs/trash.svg"
                            />
                        </button>
                        <!-- Increase and Decrease Item Cart -->
                        <div
                            class="flex absolute right-0 bottom-3 items-center gap-3"
                        >
                            <button
                                type="button"
                                @click="decreaseQuantity(index)"
                            >
                                <img
                                    src="../../imgs/remove_empty.svg"
                                    alt="Decrease"
                                />
                            </button>
                            <div class="font-bold text-gray-600" v-text="item.product_count"></div>
                            <button
                                type="button"
                                @click="increaseQuantity(index)"
                            >
                                <img
                                    src="../../imgs/add_empty.svg"
                                    alt="Increase"
                                />
                            </button>
                        </div>
                    </div>
                    <div

                        class="max-w-md mx-auto w-full h-20 py-4 bottom-0 bg-white text-center border-t-2 border-gray-300"
                    >
                        <button
                            class="bg-orange-400 w-52 h-11 rounded-full shadow-md text-white hover:bg-orange-500"
                            type="submit"
                        >
                            สั่ง {{ items.length ?? "0" }} รายการ
                        </button>
                    </div>
                </form>
            </div>
            <!-- Footer Cart -->
            <!-- Modal content -->
            <div>
                <ListMenuModal v-if="isListMenuModalOpen != false">
                    <form
                        @submit.prevent="editcomment"
                        @input="form.errors.clear($event.target.name)"
                        enctype="multipart/form-data"
                    >
                        <div
                            class="flex justify-between text-gray-800 font-bold border-b-2 border-gray-300"
                        >
                            <h1 class="text-lg text-gray-600 font-bold">
                                {{ items.product_name }}
                            </h1>
                            <button>
                                <img
                                    @click="isListMenuModalOpen = false"
                                    class="w-3 top-0 right-0"
                                    src="../../imgs/X.svg"
                                />
                            </button>
                        </div>
                        <div class="my-2">
                            <h2 class="text-base font-bold text-gray-600">
                                ข้อความเพิ่มเติม
                            </h2>
                            <p class="text-xs text-gray-400">
                                คุณสามารถใส่ข้อความเพิ่มเติมได้ที่นี่ เช่น
                                แพ้อาหาร ไม่ใส่ผัก
                            </p>
                            <textarea
                                type="textarea"
                                rows="4"
                                class="w-full mt-2 border-2 border-gray-300 rounded-lg text-gray-600 text-sm focus:ring-gray-300 focus:border-gray-300"
                                placeholder="ตัวอย่าง ไม่ใส่กุ้ง"
                                v-model="product_comment"
                            ></textarea>
                        </div>
                        <div class="flex flex-row-reverse mt-6">
                            <button
                                type="submit"
                                class="bg-orange-300 text-white w-20 h-8 rounded-lg shadow-md shadow-gray-400"
                            >
                                เพิ่ม
                            </button>
                        </div>
                    </form>
                </ListMenuModal>
            </div>
        </div>
    </div>
</template>

<script>
import ListMenuModal from "@/components/MenuModal.vue";
export default {
    components: {
        ListMenuModal,
    },
    data() {
        const urlParams = new URLSearchParams(window.location.search);
        const id = urlParams.get("id");

        return {
            receivedId: id,
            isListMenuModalOpen: false,
            selectedItem: null,
            list_product_cart: false,
            submit_order: false,
            amount:'',
            comment:'',
            items: [
                // {
                //     id: "",
                //     product_name: "",
                //     bill_id: "",
                //     product_count: "",
                //     product_comment: "",
                //     custom_name: "",
                //     ordered_at: "",
                //     accepted_at: "",
                //     finished_at: "",
                //     status: "",
                // },
            ],
        };
    },
    computed: {
        totalOrder() {
            return this.items.reduce((total, item) => total + item.quantity, 0);
        },
    },
    methods: {
        increaseQuantity(index) {
            this.items[index].product_count++;
        },
        decreaseQuantity(index) {
            if (this.items[index].product_count > 1) {
                this.items[index].product_count--;
            }
        },
        openselectedItem(item) {
            this.isListMenuModalOpen = true;
            this.items.product_name = item;

        },
        fetch_cart() {
            const formData = new FormData();

            formData.append("table_id", this.receivedId);

            axios
                .post("/fetch_cart", formData)
                .then((response) => {

                    console.log(response.data);
                    // this.list_product_cart = true;

                    if (response.data != "") {
                        this.items = response.data;
                        this.list_product_cart = true;
                        console.log(this.items);
                    } else {

                        this.list_product_cart = false;
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        editcomment(){
            this.items.product_comment = this.product_comment;
            this.isListMenuModalOpen = false;
            console.log(this.items.product_comment)
        },
        updatestatus() {

            const formData = new FormData();
            formData.append("table_id", this.receivedId);
            console.log(this.receivedId)
            axios
                .post("/confirm_cart", formData)
                .then((response) => {
                    console.log(response);
                    if (response.data == "success") {
                        console.log(response.data);
                        alert("success");
                        this.submit_order = true;
                        setTimeout(() => {
                            this.submit_order = false;
                            this.fetch_cart();
                        }, 1000);
                    } else {
                        alert("error");
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        deleted(item) {

            const formData = new FormData();
            formData.append("id", item);

            axios
                .post("/delete_order", formData)
                .then((response) => {
                    console.log(response);
                    if (response.data == "success") {
                        console.log(response.data);
                        this.fetch_cart();
                    } else {
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        }
    },
    mounted() {
        this.fetch_cart();
    },
};
</script>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<style></style>
