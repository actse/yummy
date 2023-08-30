<template>
    <div class="flex w-full min-h-screen bg-slate-200">
        <div
            class="flex items-center justify-center w-full mx-auto h-screen bg-white border"
        >
            <div
                class="flex flex-col w-1/6 h-full py-8 ml-2 bg-white dark:bg-gray-900 dark:border-gray-700 rounded-lg border-r-2 mr-2"
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
                    class="flex flex-col my-auto h-auto w-auto mt-5 bg-gray-100 mx-2 mb-4 rounded-lg"
                >
                    <div class="grid grid-cols-5 p-5 gap-3">
                        <button
                            v-for="item in list_table"
                            @click="
                                openservice(
                                    item.id,
                                    item.package_main,
                                    item.package_secondary,
                                    item.table_status
                                )
                            "
                            :class="{
                                'bg-white': item.table_status == 0,
                                'bg-red-400 text-white': item.table_status == 1,
                                'w-auto h-32 rounded-md text-center': true,
                            }"
                        >
                            โต๊ะหมายเลข {{ item.id }}
                        </button>
                    </div>
                </div>
                <div
                    class="flex flex-col my-auto h-4/6 w-auto sm:my-2 bg-gray-100 mx-2 rounded-lg"
                ></div>
            </div>
        </div>
    </div>
    <ServicetableModal v-if="isModalregistable">
        <div
            class="relative text-gray-800 font-bold border-b-2 border-gray-300"
        >
            <h1>ลงทะเบียน โต๊ะ {{ this.table }}</h1>
            <button>
                <img
                    @click="close('close_service', this.table)"
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
                        @click="choose_service('registable', this.table)"
                        class="mx-2 bg-blue-400 w-52 h-11 rounded-lg shadow-md text-white mb-3"
                    >
                        ลงทะเบียน
                    </button>
                    <button
                        @click="choose_service('cancel', this.table)"
                        class="mx-2 bg-red-400 w-52 h-11 rounded-lg shadow-md text-white mb-3"
                    >
                        ยกเลิกโต๊ะ
                    </button>
                    <button
                        @click="choose_service('payment', this.table)"
                        class="mx-2 bg-green-500 w-52 h-11 rounded-lg shadow-md text-white mb-3"
                    >
                        ชำระเงิน
                    </button>
                </div>
            </div>
        </div>
    </ServicetableModal>
    <ServicetableModal v-if="isRegistable">
        <div
            class="relative text-gray-800 font-bold border-b-2 border-gray-300"
        >
            <h1>ลงทะเบียน โต๊ะ {{ this.table }}</h1>
            <button>
                <img
                    @click="close('close_registable', this.table)"
                    class="absolute w-4 top-0 right-0"
                    src="../../imgs/X.svg"
                />
            </button>
        </div>
        <!-- Form Insert table -->
        <div class="bg-white w-full px-4 border-t-2 pt-3">
            <form
                @submit.prevent="register_table"
                enctype="multipart/form-data"
                class="w-full max-w-lg"
            >
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-3/5 px-3 mb-2 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เลือกแพ็คเกจ
                        </label>
                        <select
                            class="block appearance-none mt-2 mb-3 w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state"
                            v-model="package_main"
                        >
                            <option disabled value="">
                                กรุณาเลือกแพ็คเกจหลัก
                            </option>
                            <option
                                v-for="packaged in main_package"
                                :key="packaged.id"
                                :value="packaged.id"
                            >
                                {{ packaged.package_name }} ({{
                                    packaged.package_price
                                }}
                                บาท)
                            </option>
                        </select>
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เลือกแพ็คเกจเสริม
                        </label>
                        <select
                            class="block appearance-none mt-2 mb-3 w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state"
                            v-model="package_secondary"
                        >
                            <option disabled value="">
                                กรุณาเลือกแพ็คเกจเสริม
                            </option>
                            <option
                                v-for="packaged in secondary_package"
                                :key="packaged.id"
                                :value="packaged.id"
                            >
                                {{ packaged.title_package }} ({{
                                    packaged.package_price
                                }}
                                บาท)
                            </option>
                        </select>
                    </div>
                    <div class="w-full md:w-2/5 px-3 mb-2 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            ผู้ใหญ่ (จำนวน)
                        </label>
                        <input
                            class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name"
                            type="number"
                            v-model="customer_adult"
                        />
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เด็กโต (จำนวน)
                        </label>
                        <input
                            class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name"
                            type="number"
                            v-model="customer_children"
                        />
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เด็ก (จำนวน)
                        </label>
                        <input
                            class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name"
                            type="number"
                            v-model="customer_baby"
                        />
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2 mt-5">
                    <div
                        class="max-w-md mx-auto w-full h-20 bg-white text-center border-b-2 border-gray-300"
                    >
                        <button
                            class="bg-blue-400 w-52 h-11 rounded-lg shadow-md text-white"
                            type="submit"
                        >
                            ลงทะเบียนโต๊ะ ( {{ this.table }} )
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </ServicetableModal>
    <ServicetableModal v-if="isEdittable">
        <div
            class="relative text-gray-800 font-bold border-b-2 border-gray-300"
        >
            <h1>รายละเอียดโต๊ะ {{ this.table }}</h1>
            <button>
                <img
                    @click="close('close_edittable', this.table)"
                    class="absolute w-4 top-0 right-0"
                    src="../../imgs/X.svg"
                />
            </button>
        </div>
        <!-- Form Insert table -->
        <div
            class="flex items-center justify-center bg-white w-full px-4 border-t-2 pt-3"
        >
            <form
                @submit.prevent="edit_table"
                enctype="multipart/form-data"
                class="w-full max-w-lg"
            >
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-3/5 px-3 mb-2 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เลือกแพ็คเกจ
                        </label>
                        <select
                            class="block appearance-none mt-2 mb-3 w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state"
                            v-model="editpackage_main.package_main"
                        >
                            <option
                                disabled
                                value="กรุณาเลือกแพ็คเกจหลัก"
                            ></option>
                            <option
                                v-for="packaged in main_package"
                                :key="packaged.id"
                                :value="packaged.id"
                            >
                                {{ packaged.package_name }} ({{
                                    packaged.package_price
                                }}
                                บาท)
                            </option>
                        </select>
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เลือกแพ็คเกจเสริม
                        </label>
                        <select
                            class="block appearance-none mt-2 mb-3 w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state"
                            v-model="editpackage_secondary.package_secondary"
                        >
                            <option
                                disabled
                                value="กรุณาเลือกแพ็คเกจเสริม"
                            ></option>
                            <option
                                v-for="packaged in secondary_package"
                                :key="packaged.id"
                                :value="packaged.id"
                            >
                                {{ packaged.title_package }} ({{
                                    packaged.package_price
                                }}
                                บาท)
                            </option>
                        </select>
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            กรุณาเลือกโต๊ะที่ต้องการ
                        </label>
                        <select
                            class="block appearance-none mt-2 mb-3 w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state"
                            v-model="new_table_number"
                        >
                            <option disabled value="">
                                กรุณาเลือกโต๊ะที่ต้องการ
                            </option>
                            <option
                                v-for="item in list_table"
                                :key="item.id"
                                :value="item.id"
                                :disabled="item.table_status != 0"
                            >
                                โต๊ะหมายเลข {{ item.id }}
                                {{ getStatusText(item.table_status) }}
                            </option>
                        </select>
                    </div>
                    <div class="w-full md:w-2/5 px-3 mb-2 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            ผู้ใหญ่ (จำนวน)
                        </label>
                        <input
                            class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name"
                            type="number"
                            v-model="editTable.customer_adult"
                        />
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เด็กโต (จำนวน)
                        </label>
                        <input
                            class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name"
                            type="number"
                            v-model="editTable.customer_children"
                        />
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            เด็ก (จำนวน)
                        </label>
                        <input
                            class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name"
                            type="number"
                            v-model="editTable.customer_baby"
                        />
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2 mt-5">
                    <div
                        class="max-w-md mx-auto w-full h-20 bg-white text-center border-b-2 border-gray-300"
                    >
                        <button
                            class="bg-blue-400 w-52 h-11 rounded-lg shadow-md text-white"
                            type="submit"
                        >
                            แก้ไขรายละเอียดโต๊ะ ( {{ this.table }} )
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </ServicetableModal>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import MenuModal from "@/components/MenuModal.vue";
import Registable from "@/components/MenuModal.vue";
import ServicetableModal from "@/components/ServicetableModal.vue";

export default {
    components: {
        MenuModal,
        Registable,
        ServicetableModal,
    },
    data() {
        return {
            isRegistable: false,
            isModalregistable: false,
            isCanceltable: false,
            isEdittable: false,
            isPayment: false,
            list_table: [],
            table: "",
            customer_adult: "",
            customer_children: "",
            customer_baby: "",
            main_package: "",
            package_main: "",
            secondary_package: "",
            package_secondary: "",
            status: "",
            new_table_number: "",
            editpackage_main: null,
            editpackage_secondary: null,
        };
    },
    methods: {
        getStatusText(status) {
            return status == 0 ? "( ว่าง )" : "( ไม่ว่าง )";
        },
        openservice(item, main_package_id, secondary_package_id, status) {
            if (status == 0) {
                this.isModalregistable = true;
                this.table = item;
                return;
            }
            if (status == 1) {
                this.table = item;
                this.status = status;

                this.editpackage_main = this.list_table.find(
                    (main_package) =>
                        main_package.package_main === main_package_id
                );

                this.editpackage_secondary = this.list_table.find(
                    (secondary_package) =>
                        secondary_package.package_secondary ===
                        secondary_package_id
                );

                this.editTable = this.list_table.find(
                    (list_table) => list_table.id === item
                );

                this.isEdittable = true;
                return;
            }
        },
        choose_service(title, item) {
            if (title == "registable") {
                this.isRegistable = true;
                this.table = item;
            }
            if (title == "cancel") {
                this.isCanceltable = true;
                this.table = item;
            }
            if (title == "payment") {
                this.table = item;
            }
        },
        close(item, table) {
            if (item == "close_service") {
                this.table = "";
                this.isModalregistable = false;
            }
            if (item == "close_registable") {
                this.table = table;
                this.isRegistable = false;
                this.isModalregistable = true;
            }
            if (item == "close_edittable") {
                this.table = table;
                this.isEdittable = false;
            }
        },
        fetch_main_package() {
            axios
                .get("/fetch_package")
                .then((response) => {
                    if (response.data != []) {
                        this.main_package = response.data;
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        fetch_secondary_package() {
            axios
                .get("/fetch_secondary_package")
                .then((response) => {
                    if (response.data != []) {
                        this.secondary_package = response.data;
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        fetch_table() {
            axios
                .get("/fetch_table")
                .then((response) => {
                    if (response.data != []) {
                        this.list_table = response.data;
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        register_table() {
            const formData = new FormData();

            formData.append("shop_id", 1);
            formData.append("staff_id", 1);
            formData.append("table", this.table);
            formData.append("customer_adult", this.customer_adult);
            formData.append("customer_children", this.customer_children);
            formData.append("customer_baby", this.customer_baby);
            formData.append("main_package", this.package_main);
            formData.append("secondary_package", this.package_secondary);
            formData.append("status", 1);

            axios
                .post("/insert_bills", formData)
                .then((response) => {
                    console.log(response);
                    this.isRegistable = false;
                    this.isModalregistable = false;
                    this.fetch_table();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        edit_table() {
            const formData = new FormData();
            formData.append("shop_id", 1);
            formData.append("staff_id", 1);
            formData.append("table", this.table);
            formData.append("customer_adult", this.editTable.customer_adult);
            formData.append(
                "customer_children",
                this.editTable.customer_children
            );
            formData.append("customer_baby", this.editTable.customer_baby);
            formData.append("main_package", this.editpackage_main.package_main);
            formData.append(
                "secondary_package",
                this.editpackage_secondary.package_secondary
            );
            formData.append("status", 1);
            formData.append("new_table", this.new_table_number);

            axios
                .post("/edit_bills", formData)
                .then((response) => {
                    console.log(response);
                    this.isEdittable = false;
                    this.fetch_table();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    mounted() {
        this.fetch_table();
        this.fetch_main_package();
        this.fetch_secondary_package();
    },
};
</script>

<style></style>
