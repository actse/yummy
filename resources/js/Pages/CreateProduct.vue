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
                    @input="form.errors.clear($event.target.name)"
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
                            />
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-3">
                        <div class="w-full px-3">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-file"
                            >
                                File image (รูปภาพสินค้า)
                            </label>
                            <input
                                class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-file"
                                type="file"
                            />
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-2/3 px-3 mt-2 md:mb-0">
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
                                >
                                    <option>กรุณาเลือกหมวดหมู่</option>
                                    <option>เนื้อหมู</option>
                                    <option>เนื้อวัว</option>
                                    <option>เนื้อหมูพรีเมียม</option>
                                    <option>เนื้อวัวพรีเมียม</option>
                                    <option>อาหารทะเล</option>
                                    <option>อาหารทะเลพรีเมียม</option>
                                    <option>ผัก</option>
                                    <option>ผักดอง</option>
                                    <option>ของทอด</option>
                                    <option>ของทานเล่น</option>
                                    <option>ของหวาน</option>
                                    <option>ไอศครีม</option>
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
                        <div class="w-full md:w-2/3 px-3 mt-2 md:mb-0">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-state"
                            >
                                แพคหลัก
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none mt-2 w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-state"
                                >
                                    <option>กรุณาเลือกแพคหลัก</option>
                                    <option>บุฟเฟ่ย์ (299) บาท</option>
                                    <option>บุฟเฟ่ย์ (499) บาท</option>
                                    <option>บุฟเฟ่ย์ (699) บาท</option>
                                    <option>อาราคราส</option>
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
                        <div class="w-full md:w-2/3 px-3 mt-2 md:mb-0">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-state"
                            >
                                แพครอง
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none mt-2 w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-state"
                                >
                                    <option>กรุณาเลือกแพครอง</option>
                                    <option>น้ำรีฟิล (39) บาท</option>
                                    <option>น้ำรีฟิล,น้ำแข็งใส (79) บาท</option>
                                    <option>
                                        น้ำรีฟิล,น้ำแข็งใส,ของปิ้งย่าง (119) บาท
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
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2 mt-7">
                        <div
                            class="max-w-md mx-auto w-full bg-white text-center"
                        >
                            <button
                                class="bg-red-400 w-52 h-11 rounded-lg shadow-md text-white hover:bg-green-400"
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
                    @input="form.errors.clear($event.target.name)"
                    enctype="multipart/form-data"
                    class="w-full max-w-lg"
                >
                    <div
                        class="text-xl w-52 text-gray-700 font-bold mb-3 border-b-2 border-gray-300"
                    >
                        เพิ่มหมวดหมู่อาหาร
                    </div>
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full md:w-2/3 px-3 mb-3 md:mb-0">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-state"
                            >
                                แพคหลัก
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none mt-2 w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-state"
                                >
                                    <option>กรุณาเลือกแพคหลัก</option>
                                    <option>บุฟเฟ่ย์ (299) บาท</option>
                                    <option>บุฟเฟ่ย์ (499) บาท</option>
                                    <option>บุฟเฟ่ย์ (699) บาท</option>
                                    <option>อาราคราส</option>
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
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name"
                            >
                                ชื่อหมวดหมู่อาหาร
                            </label>
                            <input
                                class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name"
                                type="text"
                            />
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-5">
                        <div
                            class="max-w-md mx-auto w-full bg-white text-center border-gray-300"
                        >
                            <button
                                class="bg-blue-400 w-52 h-11 rounded-lg shadow-md text-white hover:bg-green-400"
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
                    @input="form.errors.clear($event.target.name)"
                    enctype="multipart/form-data"
                    class="w-full max-w-lg"
                >
                    <div
                        class="text-xl w-52 text-gray-700 font-bold mb-3 border-b-2 border-gray-300"
                    >
                        เพิ่มรายการแพคเก็จ
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-2/3 px-3 mb-2 md:mb-0">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name"
                            >
                                กรอกชื่อแพคเก็จหลักที่ต้องการเพิ่ม
                            </label>
                            <input
                                class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name"
                                type="text" v-model="package_name"
                            />
                        </div>
                        <div class="w-full md:w-2/3 px-3 mb-2 md:mb-0">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name"
                            >
                                กรอก ราคา เก็จหลักที่ต้องการเพิ่ม
                            </label>
                            <input
                                class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name"
                                type="number" v-model="package_price"
                            />
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div
                            class="max-w-md mx-auto w-full h-20 bg-white text-center border-b-2 border-gray-300"
                        >
                            <button
                                class="bg-blue-400 w-52 h-11 rounded-lg shadow-md text-white hover:bg-green-400"
                                type="submit"
                            >
                                เพิ่มแพคเก็จ
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
            product_name: '',
            product_detail: '',
            product_price: '',
            product_image: '',
            type_product_id: '',
            package_id: '',
            package_name: '',
            package_price: '',
            package_secondary_id: '',
        };
    },
    methods: {
        create_product() {
            const formData = new FormData();
            // formData.append("",);
            console.log();

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
            // formData.append("",);
            console.log();

            axios
                .post("/create_type_producttopackage", formData)
                .then((response) => {
                    console.log(response);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        addtnewpackagemain() {

            const formData = new FormData();
            formData.append("package_name", this.package_name);
            formData.append("package_price", this.package_price);

            console.log(this.package_name)
            console.log(this.package_price);

            axios
                .post("/create_package", formData)
                .then((response) => {
                    if (response.data = true) {
                        console.log(response);
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    mounted(){

    }

};
</script>
