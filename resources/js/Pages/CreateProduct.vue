<template>
    <div class="w-full h-full relative">
        <div class="relative max-w-lg mx-auto h-auto bg-white border-2">
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
                <Link href="/"
                    ><img class="absolute left-3" src="../../imgs/vector.svg"
                /></Link>
                <div
                    class="flex justify-center items-center text-2xl font-bold text-gray-700"
                >
                    <h1>เพิ่มรายการสินค้า</h1>
                </div>
            </div>
            <!-- Form Insert Product Menu -->
            <div class="bg-white w-full px-4 pb-5">
                <form
                    @submit.prevent="create_product"
                    enctype="multipart/form-data"
                    class="w-full max-w-lg"
                >
                    <div
                        class="text-xl w-52 text-gray-700 font-bold mt-2 border-b-2 border-gray-300"
                    >
                        เพิ่มรายการอาหาร
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6 mt-5">
                        <div class="w-full px-3 md:mb-0">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-name"
                            >
                                ชื่อสินค้า
                            </label>
                            <input
                                class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-name"
                                type="text"
                                v-model="product_name"
                            />
                        </div>
                        <div class="w-full px-3 mb-2">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-detail"
                            >
                                รายละเอียดสินค้า
                            </label>
                            <textarea
                                class="appearance-none mt-2 block w-full h-24 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-detail"
                                type="text"
                                v-model="product_detail"
                            ></textarea>
                        </div>
                        <div class="w-full px-3">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-price"
                            >
                                ระบุราคาสินค้า
                            </label>
                            <input
                                class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-price"
                                type="number"
                                v-model="product_price"
                            />
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-3">
                        <div class="w-full px-3">
                            <label class="block">
                                <span
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    >เพิ่มไฟล์รูปภาพ</span
                                >
                                <input
                                    type="file"
                                    @change="loadFile($event)"
                                    class="block w-full text-sm my-2 text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-1 file:border-gray-500 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100"
                                />
                            </label>
                            <div class="shrink-0">
                                <img
                                    id="preview_img"
                                    class="mt-5 h-auto w-full object-cover rounded-lg"
                                    :src="product_image"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-2/3 mb-3 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-state"
                        >
                            หมวดหมู่อาหาร
                        </label>
                        <div class="relative">
                            <select
                                class="block appearance-none mt-2 w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-state"
                                v-model="type_product_id"
                            >
                                <option disabled value="">
                                    กรุณาเลือกหมวดหมู่
                                </option>
                                <option
                                    v-for="items in product_type_title"
                                    :key="items.id"
                                    :value="items.id"
                                >
                                    {{ items.type_product_name }}
                                </option>
                            </select>

                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                            >
                                <svg
                                    class="fill-current h-4 w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                ></svg>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2 mt-7">
                        <div
                            class="max-w-md mx-auto w-full bg-white text-center"
                        >
                            <button
                                class="bg-red-400 w-52 h-11 rounded-lg shadow-md text-white"
                                type="submit"
                            >
                                เพิ่มสินค้า
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="bg-white w-full px-4 border-t-2 pt-3">
                <form
                    @submit.prevent="addtypeproducttopackage"
                    enctype="multipart/form-data"
                    class="w-full max-w-lg"
                >
                    <div
                        class="text-xl w-52 text-gray-700 font-bold mb-3 border-b-2 border-gray-300"
                    >
                        จัดการแพ็คเกจหลัก
                    </div>
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full md:w-2/3 px-3 mb-3 md:mb-0">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-state"
                            >
                                แพ็คเกจหลัก
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none mt-2 w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-state"
                                    v-model="selectedPackage"
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

                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                                >
                                    <svg
                                        class="fill-current h-4 w-4"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                    ></svg>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/1 px-3 mb-3 md:mb-0 mt-5">
                            <label class="block mt-2">
                                <input
                                    class="appearance-none bg-gray-200 text-blue-400 border border-white rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                                    type="checkbox"
                                    id="check_all"
                                    v-model="selectAll"
                                    @change="handleCheckAll"
                                />
                                เลือกหมวดหมู่ทั้งหมด
                            </label>
                            <label
                                v-for="(item, index) in product_type_title"
                                :key="index"
                                class="block mt-2"
                            >
                                <input
                                    class="appearance-none bg-gray-200 text-blue-400 border border-white rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                                    type="checkbox"
                                    :id="'check_' + item.id"
                                    :value="item.id"
                                    v-model="selectedTypes"
                                />
                                {{ item.type_product_name }}
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-5 mt-5">
                        <div
                            class="max-w-md mx-auto w-full bg-white text-center border-gray-300"
                        >
                            <button
                                class="bg-blue-400 w-52 h-11 rounded-lg shadow-md text-white"
                                type="submit"
                            >
                                เพิ่มหมวดหมู่
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="bg-white w-full px-4 border-t-2 pt-3">
                <form
                    @submit.prevent="addtnewpackagemain"
                    enctype="multipart/form-data"
                    class="w-full max-w-lg"
                >
                    <div
                        class="text-xl w-52 text-gray-700 font-bold mb-3 border-b-2 border-gray-300"
                    >
                        เพิ่มแพ็คเกจหลัก
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-2/3 px-3 mb-2 md:mb-0">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name"
                            >
                                กรอกชื่อแพ็คเกจหลักที่ต้องการเพิ่ม
                            </label>
                            <input
                                class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name"
                                type="text"
                                v-model="package_name"
                            />
                        </div>
                        <div class="w-full md:w-2/3 px-3 mb-2 md:mb-0">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name"
                            >
                                กรอก ราคา เกจหลักที่ต้องการเพิ่ม
                            </label>
                            <input
                                class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name"
                                type="number"
                                v-model="package_price"
                            />
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div
                            class="max-w-md mx-auto w-full h-20 bg-white text-center border-b-2 border-gray-300"
                        >
                            <button
                                class="bg-blue-400 w-52 h-11 rounded-lg shadow-md text-white"
                                type="submit"
                            >
                                เพิ่มแพ็คเกจ
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="bg-white w-full px-4 border-t-2 pt-3">
                <form
                    @submit.prevent="addtnewtypeproduct"
                    enctype="multipart/form-data"
                    class="w-full max-w-lg"
                >
                    <div
                        class="text-xl w-52 text-gray-700 font-bold mb-3 border-b-2 border-gray-300"
                    >
                        เพิ่มหมวดหมู่อาหาร
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-2/3 px-3 mb-2 md:mb-0">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name"
                            >
                                กรอกชื่อหมวดหมู่ที่ต้องการเพิ่ม
                            </label>
                            <input
                                class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name"
                                type="text"
                                v-model="type_product_name"
                            />
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div
                            class="max-w-md mx-auto w-full h-20 bg-white text-center border-b-2 border-gray-300"
                        >
                            <button
                                class="bg-blue-400 w-52 h-11 rounded-lg shadow-md text-white"
                                type="submit"
                            >
                                เพิ่มหมวดหมู่อาหาร
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <footer class="relative">
                <img
                    class="h-32 w-full shadow bg-cover"
                    src="../../imgs/shabu.jpg"
                />
            </footer>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<script>
export default {
    data() {
        return {
            product_name: "",
            product_image: "",
            product_image_file: "",
            product_detail: "",
            product_price: "",
            type_product_id: "",
            selectedTypes: [],
            selectedPackage: "",
            package_id: "",
            package_name: "",
            package_price: "",
            package_secondary_id: "",
            product_type_title: "",
            main_package: "",
            selectAll: false,
            type_product_name: "",
            selectedTypeProduct: "",
        };
    },
    methods: {
        create_product() {
            const formData = new FormData();

            // this.product_image_file = '../../imgs/' + this.product_image_file;

            formData.append("product_name", this.product_name);
            formData.append("product_image", this.product_image_file);
            formData.append("product_detail", this.product_detail);
            formData.append("product_price", this.product_price);
            formData.append("type_product_id", this.type_product_id);

            axios
                .post("/create_product", formData)
                .then((response) => {
                    console.log(response);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        addtypeproducttopackage() {
            const formData = new FormData();
            formData.append("main_package_id", this.selectedPackage);
            formData.append("type_product_id", this.selectedTypes);

            // console.log(this.selectedPackage);
            // console.log(this.selectedTypes);

            axios
                .post("/create_type_producttopackage", formData)
                .then((response) => {
                    console.log(response.data);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        handleCheckAll() {
            if (this.selectAll) {
                this.selectedTypes = this.product_type_title.map(
                    (item) => item.id
                );
            } else {
                this.selectedTypes = [];
            }
        },
        loadFile(event) {
            const input = event.target.files[0];
            const output = document.getElementById("preview_img");
            this.product_image_file = input.name;

            this.product_image = URL.createObjectURL(input);
            output.onload = function () {
                URL.revokeObjectURL(this.product_image);
            };
        },
        handleCheckboxChange(id) {
            if (!this.selectedTypes.includes(id)) {
                this.selectedTypes.push(id);
            }
        },
        addtnewpackagemain() {
            const formData = new FormData();
            formData.append("package_name", this.package_name);
            formData.append("package_price", this.package_price);

            console.log(this.package_name);
            console.log(this.package_price);

            // return;

            axios
                .post("/create_package", formData)
                .then((response) => {
                    if ((response.data = true)) {
                        console.log(response);
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        addtnewtypeproduct() {
            const formData = new FormData();
            formData.append("type_product_name", this.type_product_name);

            console.log(this.type_product_name);

            // return;

            axios
                .post("/create_type_product", formData)
                .then((response) => {
                    if ((response.data = true)) {
                        console.log(response);
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        fetch_package_main() {
            axios
                .get("/fetch_package")
                .then((response) => {
                    if (response.data != []) {
                        this.main_package = response.data;
                        // console.log(response.data);
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        fetch_type_product() {
            axios
                .get("/fetch_type_product")
                .then((response) => {
                    if (response.data != []) {
                        this.product_type_title = response.data;
                        // console.log(response.data);
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        fetch_product() {
            axios
                .get("/fetch_product")
                .then((response) => {
                    console.log(response.data);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    mounted() {
        this.fetch_package_main();
        this.fetch_type_product();
        this.fetch_product();
    },
};
</script>
<style></style>
