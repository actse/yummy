<template>
    <div>
        <!--List Product-->
        <div class="w-11/12 mx-auto p-2 mt-5 rounded-md bg-white">
            <div class="flex justify-between">
                <input
                    v-model="searchName"
                    placeholder="Search name..."
                    class="mt-3 rounded-full h-10"
                />
                <select
                    v-model="searchType"
                    class="text-sm text-gray-600 rounded-lg h-10 mt-3"
                >
                    <option value="">ทุกประเภท</option>
                    <option
                        v-for="items in type_product"
                        :key="items.id"
                        :value="items.id"
                    >
                        {{ items.type_product_name }}
                    </option>
                    <!-- เพิ่มประเภทอื่น ๆ ตามต้องการ -->
                </select>
            </div>
            <div class="mt-4">
                <table class="w-full text-center">
                    <thead class="text-xs bg-gray-200 text-gray-700">
                        <tr>
                            <td>no.</td>
                            <td>รูป</td>
                            <td>ชื่อสินค้า</td>
                            <td>หมายเหตุ</td>
                            <td>ประเภท</td>
                            <td>ราคา</td>
                            <td>จัดการสินค้า</td>
                        </tr>
                    </thead>
                    <tbody class="text-xs text-gray-500">
                        <tr
                            v-for="products in filteredProducts"
                            :key="products.id"
                        >
                            <td>{{ products.id }}</td>
                            <td>
                                <img src="" alt="#" />
                            </td>
                            <td>{{ products.product_name }}</td>
                            <td>{{ products.product_detail }}</td>
                            <td>{{ products.type_product_id }}</td>
                            <td>{{ products.product_price }}</td>
                            <td class="space-x-2">
                                <button
                                    @click="openEditModal(products.id)"
                                    class="relative w-5 h-5 rounded-md bg-blue-400 border border-blue-500"
                                >
                                    <img
                                        class="absolute w-[14px] top-[2px] left-[2px]"
                                        src="../../imgs/edit.svg"
                                        alt=""
                                    />
                                </button>
                                <button
                                    @click="deleteProduct(products.id)"
                                    class="relative w-5 h-5 rounded-md bg-red-400 border border-red-500"
                                >
                                    <img
                                        class="absolute w-[14px] top-[2px] left-[2px]"
                                        src="../../imgs/remove.svg"
                                        alt=""
                                    />
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <MenuModal v-if="isModalOpen">
                    <div
                        class="relative text-gray-800 font-bold border-b-2 border-gray-300"
                    >
                        <h1>แก้ไขรายการอาหาร</h1>
                        <button>
                            <img
                                @click="closeEditModal"
                                class="absolute w-3 top-0 right-0"
                                src="../../imgs/X.svg"
                            />
                        </button>
                    </div>
                    <!-- Form Insert Product Menu -->
                    <div class="bg-white w-full px-4 pb-5">
                        <form
                            @submit.prevent="updateProduct"
                            enctype="multipart/form-data"
                            class="w-full max-w-lg"
                        >
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
                                        v-model="selectedProduct.product_name"
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
                                        v-model="selectedProduct.product_detail"
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
                                        v-model="selectedProduct.product_price"
                                    />
                                </div>
                            </div>
                            <!-- <div class="flex flex-wrap -mx-3 mb-3">
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
                            </div> -->
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
                                        v-model="
                                            selectedProduct.type_product_id
                                        "
                                    >
                                        <option
                                            disabled
                                            value="กรุณาเลือกหมวดหมู่"
                                        ></option>
                                        <option
                                            v-for="items in type_product"
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
                </MenuModal>
            </div>
        </div>
    </div>
</template>

<script>
// import MenuModal from "@/components/MenuModal.vue";
import MenuModal from "./MenuModal.vue";

export default {
    components: {
        MenuModal,
    },
    data() {
        return {
            isModalOpen: false,
            selectedProduct: null,
            product_name: "",
            product_image: "",
            product_detail: "",
            product_price: "",
            type_product: "",
            type_product_id: "",
            type_product_name: "",
            products: [],
            searchName: "",
            searchType: "",
            product_id: "",
        };
    },
    computed: {
        filteredProducts() {
            return this.products.filter((product) => {
                const nameMatch = product.product_name
                    .toLowerCase()
                    .includes(this.searchName.toLowerCase());
                const typeMatch =
                    this.searchType == "" ||
                    product.type_product_id == this.searchType;
                return nameMatch && typeMatch;
            });
        },
    },
    methods: {
        openEditModal(productId) {
            this.isModalOpen = true;
            this.selectedProduct = this.products.find(
                (product) => product.id === productId
            );
            this.product_id = productId;
            console.log(productId);
        },
        closeEditModal() {
            this.isModalOpen = false;
            this.selectedProduct = "";
        },
        fetch_list_product() {
            axios
                .get("/fetch_list_product")
                .then((response) => {
                    this.products = response.data;
                    // console.log(this.products);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        fetch_list_typeproduct() {
            axios
                .get("/fetch_list_typeproduct")
                .then((response) => {
                    this.type_product = response.data;
                    // console.log(this.products);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        updateProduct() {
            const formData = new FormData();
            formData.append("product_id", this.product_id);
            formData.append("product_name", this.selectedProduct.product_name);
            formData.append(
                "product_image",
                this.selectedProduct.product_image
            );
            formData.append(
                "product_detail",
                this.selectedProduct.product_detail
            );
            formData.append(
                "product_price",
                this.selectedProduct.product_price
            );
            formData.append(
                "type_product_id",
                this.selectedProduct.type_product_id
            );

            axios
                .post("/edit_product", formData)
                .then((response) => {
                    console.log(response);
                    this.fetch_list_product();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        deleteProduct(productId) {
            const formData = new FormData();
            formData.append("product_id", productId);
            // console.log(productId);
            // return;
            axios
                .post("/delete_product", formData)
                .then((response) => {
                    console.log(response);
                    this.fetch_list_product();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    mounted() {
        this.fetch_list_product();
        this.fetch_list_typeproduct();
    },
};
</script>
