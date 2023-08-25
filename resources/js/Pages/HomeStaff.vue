<template>
    <div class="flex w-full min-h-screen bg-slate-200">
        <div
            class="flex items-center justify-center w-96 sm:w-full max-w-7xl mx-auto h-screen bg-gradient-to-br from-indigo-200 via-red-200 to-yellow-100 border"
        >
            <div
                class="flex flex-col w-1/6 h-5/6 py-8 ml-2 bg-white dark:bg-gray-900 dark:border-gray-700 rounded-lg mr-2"
            >
                <nav class="flex flex-col p-2 flex-1 space-y-8">
                    <a href="#">
                        <img
                            class="w-auto h-6"
                            src="https://merakiui.com/images/logo.svg"
                            alt=""
                        />
                    </a>
                    <a
                        href="#"
                        class="p-1.5 inline-block text-gray-500 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-400 dark:hover:bg-gray-800 hover:bg-gray-100"
                        ><di>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-6 h-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"
                                />
                            </svg>
                        </di>
                    </a>
                    <a
                        href="#"
                        class="p-1.5 inline-block text-blue-500 transition-colors duration-200 bg-blue-100 rounded-lg dark:text-blue-400 dark:bg-gray-800"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"
                            />
                        </svg>
                    </a>
                    <a
                        href="#"
                        class="p-1.5 inline-block text-gray-500 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-400 dark:hover:bg-gray-800 hover:bg-gray-100"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"
                            />
                        </svg>
                    </a>
                    <a
                        href="#"
                        class="p-1.5 inline-block text-gray-500 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-400 dark:hover:bg-gray-800 hover:bg-gray-100"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"
                            />
                        </svg>
                    </a>
                    <a
                        href="#"
                        class="p-1.5 inline-block text-gray-500 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-400 dark:hover:bg-gray-800 hover:bg-gray-100"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                            />
                        </svg>
                    </a>
                </nav>
                <div class="flex flex-col ml-4 mt-4 space-y-4"></div>
            </div>
            <div
                class="flex flex-col ml-auto my-auto h-5/6 w-10/12 mr-2 bg-white border-2 rounded-lg border-white"
            >
                <div
                    class="flex flex-col my-auto h-auto w-auto mt-5 bg-gray-200 mx-2 mb-4 rounded-lg"
                >
                    <div class="grid grid-cols-10 p-5 gap-3">
                        <button
                            v-for="item in 25"
                            @click="openservice(item)"
                            class="bg-white w-auto h-10 rounded-md text-center"
                        >
                            {{ item }}
                        </button>
                    </div>
                </div>
                <div
                    class="flex flex-col my-auto h-4/6 w-auto sm:my-2 bg-gray-200 mx-2 rounded-lg"
                ></div>
            </div>
        </div>
    </div>
    <MenuModal v-if="isModalregistable">
        <div
            class="relative text-gray-800 font-bold border-b-2 border-gray-300"
        >
            <h1>ลงทะเบียน โต๊ะ {{ this.table }}</h1>
            <button>
                <img
                    @click="closeRegisTableModal"
                    class="absolute w-3 top-0 right-0"
                    src="../../imgs/X.svg"
                />
            </button>
        </div>
        <!-- Form Edit Product Menu -->
        <div class="bg-white w-full px-4 pb-4">
            <div class="flex flex-wrap -mx-3 mb-2 mt-5">
                <div class="w-full bg-white text-center">
                    <button
                        @click=""
                        class="bg-blue-400 w-52 h-11 rounded-lg shadow-md text-white mb-3"
                    >
                        ลงทะเบียน
                    </button>
                    <button
                        @click=""
                        class="bg-red-400 w-52 h-11 rounded-lg shadow-md text-white mb-3"
                    >
                        ยกเลิกโต๊ะ
                    </button>
                    <button
                        @click=""
                        class="bg-orange-400 w-52 h-11 rounded-lg shadow-md text-white mb-3"
                    >
                        แก้ไขโต๊ะ
                    </button>
                    <button
                        @click=""
                        class="bg-green-500 w-52 h-11 rounded-lg shadow-md text-white mb-3"
                    >
                        ชำระเงิน
                    </button>
                </div>
            </div>
        </div>
    </MenuModal>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import MenuModal from "@/components/MenuModal.vue";

export default {
    components: {
        MenuModal,
    },
    data() {
        return {
            isModalregistable: false,
            isAddtable: false,
            isClosetable: false,
            isEdittable: false,
            isPayment:false,
            table: "",
        };
    },
    methods: {
        openservice(item) {
            this.isModalregistable = true;
            this.table = item;
            console.log(this.isModalregistable);
            console.log(this.table);
        },
        closeRegisTableModal() {
            this.table = "";
            this.isModalregistable = false;
            console.log(this.table);
            console.log(this.isModalregistable);
        },
    },
    mounted() {},
};
</script>

<style></style>
