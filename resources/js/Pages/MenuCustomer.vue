<template>
    <div class="w-full min-h-screen relative">
        <div class="max-w-md mx-auto h-full bg-white border">
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
                class="flex justify-between gap-0 items-center px-7 py-4 bg-white border-b-2 border-gray-300 shadow-sm"
            >
                <Link :href="'home_customer?id=' + receivedId"
                    ><img class="left-3" src="../../imgs/vector.svg"
                /></Link>
                <label for="voice-search" class="sr-only">Search</label>
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
                <div class="relative bg-orange-100 p-2 rounded-full shadow-lg">
                    <Link
                        v-if="insert == true"
                        :href="'cart_customer?id=' + receivedId"
                        ><img class="w-7 h-7" src="../../imgs/cart.png"
                    /></Link>
                    <Link
                        v-if="insert == false"
                        :href="'cart_customer?id=' + receivedId"
                        ><img
                            class="animate-bounce w-7 h-7"
                            src="../../imgs/cart.png"
                    /></Link>
                    <!-- <div
                        class="flex absolute w-5 h-5 right-0 top-7 rounded-full bg-orange-300 justify-center items-center font-bold text-white shadow-md"
                    ></div> -->
                </div>
            </div>
            <!--Type Menu -->
            <div
                class="flex justify-center items-center py-2 pl-4 bg-white border-b-2 border-gray-300"
            >
                <img src="../../imgs/frame.svg" @click="isModalOpen = true" />
                <div class="ml-4 w-full scroll-snap-type-x">
                    <ul class="p-4 flex space-x-5 text-gray-600">
                        <li class="scroll-snap-align-start">หมู สไลด์</li>
                        <li class="scroll-snap-align-start">ผัก</li>
                        <li class="scroll-snap-align-start">ของทะเล/ของสด</li>
                        <li class="scroll-snap-align-start">ของหวาน</li>
                        <li class="scroll-snap-align-start">ไอติม</li>
                    </ul>
                </div>
            </div>

            <!-- List Menu -->
            <div class="bg-white p-4">
                <div v-for="(type_menus, index) in type_menus" :key="index">
                    <h1 class="text-2xl bg-white py-2">
                        {{ type_menus.type_product_name }}
                    </h1>
                    <!-- open the modal on click menu-->
                    <div
                        v-for="(product, idx) in type_menus.products"
                        :key="idx"
                        class="flex border-b-2 py-3 border-gray-300 bg-white hover:bg-gray-100"
                        @click="openListMenuModal(product.id)"
                    >
                        <img
                            class="w-[80px] h-[80px] rounded-[10px]"
                            src="https://via.placeholder.com/90x90"
                        />
                        <div class="px-2">
                            <h2 class="text-lg text-gray-700 font-bold">
                                {{ product.product_name }}
                            </h2>
                            <p class="text-sm text-gray-400">
                                {{ product.product_detail }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="relative">
                <img
                    class="h-40 w-full shadow bg-cover"
                    src="../../imgs/shabu.jpg"
                />
            </footer>
            <!-- Modal here -->
            <div>
                <!-- The Modal component -->
                <Modal v-if="isModalOpen">
                    <!-- Modal content -->
                    <div
                        class="relative text-gray-800 font-bold border-b-2 border-gray-300"
                    >
                        <h1>หมวดหมู่ทั้งหมด</h1>
                        <button>
                            <img
                                @click="isModalOpen = false"
                                class="absolute w-3 top-0 right-0"
                                src="../../imgs/X.svg"
                            />
                        </button>
                    </div>
                    <!-- List Type Menu -->
                    <ul class="w-full">
                        <li
                            v-for="(type_menus, index) in type_menus"
                            :key="index"
                            @click="isModalOpen = true"
                        >
                            <input
                                type="radio"
                                :id="'hosting-' + index"
                                name="hosting"
                                :value="'hosting-' + index"
                                class="hidden peer"
                                required
                                @click="check_true(check_menu)"
                            />
                            <label
                                :for="'hosting-' + index"
                                class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white rounded-lg cursor-pointer peer-checked:border-sky-400 peer-checked:text-sky-500 hover:text-gray-600 hover:bg-gray-100"
                            >
                                <div class="block">
                                    <div class="w-full text-sm font-semibold">
                                        {{ type_menus.type_product_name }}
                                    </div>
                                </div>
                                <div>
                                    <svg
                                        v-if="check_menu != false"
                                        class="w-4 h-4 ml-3"
                                        viewBox="0 0 16 16"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            id="Vector"
                                            d="M2 9.2L5.44281 14L14.0498 2"
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                        />
                                    </svg>
                                </div>
                            </label>
                        </li>
                    </ul>
                </Modal>

                <!-- The Modal component -->
                <!-- <ListMenuModal v-if="isListMenuModalOpen" title="xxxx" ></ListMenuModal> -->

                <!-- Modal content -->
                <ListMenuModal v-if="isListMenuModalOpen != false">
                    <form
                        @submit.prevent="addtocart"
                        @input="form.errors.clear($event.target.name)"
                        enctype="multipart/form-data"
                    >
                        <div
                            class="flex justify-between text-gray-800 font-bold border-b-2 border-gray-300"
                        >
                            <h1 class="text-lg text-gray-600 font-bold">
                                ชื่อเมนู {{ title_name }}
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
                                rows="4"
                                class="w-full mt-2 border-2 border-gray-300 rounded-lg text-gray-600 text-sm focus:ring-gray-300 focus:border-gray-300"
                                placeholder="ตัวอย่าง ไม่ใส่กุ้ง"
                                v-model="comments"
                            ></textarea>
                        </div>
                        <div class="flex justify-between items-center">
                            <h2 class="text-base font-bold text-gray-600">
                                จำนวนที่ต้องการสั่ง
                            </h2>
                            <div
                                class="flex right-0 bottom-2 items-center gap-3"
                            >
                                <button type="button" @click="decreaseQuantity">
                                    <img
                                        src="../../imgs/remove_empty.svg"
                                        alt="Decrease"
                                    />
                                </button>
                                <div
                                    class="font-bold text-gray-600"
                                    :key="amount"
                                >
                                    {{ this.amount }}
                                </div>
                                <button type="button" @click="increaseQuantity">
                                    <img
                                        src="../../imgs/add_empty.svg"
                                        alt="Increase"
                                    />
                                </button>
                            </div>
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
<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<script>
import axios from "axios";

import Modal from "@/components/MenuModal.vue";
import ListMenuModal from "@/components/MenuModal.vue";

export default {
    components: {
        Modal,
        ListMenuModal,
    },
    data() {
        const urlParams = new URLSearchParams(window.location.search);
        const id = urlParams.get("id");
        return {
            receivedId: id,
            isModalOpen: false,
            isListMenuModalOpen: false,
            id: "",
            title_name: "",
            amount: 1,
            image: "",
            comments: "",
            status: 0,
            check_menu: false,
            insert: true,
            type_menus: [],
        };
    },
    methods: {
        check_true(check) {
            // console.log(check);
            if (check == false) {
                this.check_menu = true;
                console.log(this.check_menu);
            }
        },
        increaseQuantity() {
            this.amount++;
        },
        decreaseQuantity() {
            if (this.amount > 1) {
                this.amount--;
            }
        },
        openListMenuModal(productId) {
            this.isListMenuModalOpen = true;

            for (const typeMenu of Object.values(this.type_menus)) {
                for (const product of typeMenu.products) {
                    if (productId === product.id) {
                        this.id = productId;
                        this.title_name = product.product_name;
                        this.image = product.product_image;
                        this.isListMenuModalOpen = true;
                        return;
                    }
                }
            }

            console.log(this.id);
            console.log(this.title_name);
            console.log(this.isListMenuModalOpen);
        },
        addtocart() {
            const formData = new FormData();
            formData.append("table_id", this.receivedId);
            formData.append("key_name", "3");
            formData.append("name_menu", this.title_name);
            formData.append("image", this.image);
            formData.append("amount", this.amount);
            formData.append("comment", this.comments);
            formData.append("status", this.status);

            axios
                .post("/insert_cart", formData)
                .then((response) => {
                    // console.log(response);
                    if (response.data == "success") {
                        console.log(response.data);
                        alert("success");
                        this.insert = false;
                        setTimeout(() => {
                            this.insert = true;
                        }, 6000);
                    } else {
                        alert("error");
                    }
                })
                .catch((error) => {
                    console.log(error);
                });

            console.log("โต๊ะที่ : " + this.receivedId);
            console.log("ลูกค้าท่าน : " + this.key_name);
            console.log("ชื่อเมนู : " + this.title_name);
            console.log("รูป : " + this.image);
            console.log("จำนวน : " + this.amount);
            console.log("comment : " + this.comments);
            console.log("สถานะ : " + this.status);

            this.title_name = "";
            this.image = "";
            this.amount = 1;
            this.comments = "";
            this.status = 0;
            this.isListMenuModalOpen = false;
        },
        fetch_menu() {
            axios
                .get("/list_menu")
                .then((response) => {
                    this.type_menus = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    mounted() {
        this.fetch_menu();
    },
};
</script>

<style>
.modal-fade-enter,
.modal-fade-leave-to {
    opacity: 0;
}

.modal-fade-enter-active,
.modal-fade-leave-active {
    transition: opacity 0.5s ease;
}

.scroll-snap-type-x {
    scroll-snap-type: x mandatory; /* กำหนดให้เลื่อนแนวนอนและจับตำแหน่ง */
    overflow-x: scroll; /* เพิ่มการเลื่อนแนวนอน */
    white-space: nowrap; /* ป้องกันข้อความขึ้นบรรทัดใหม่ */
}

.scroll-snap-align-start {
    scroll-snap-align: start; /* กำหนดให้ Snapped ที่จุดเริ่มต้น */
}
</style>
