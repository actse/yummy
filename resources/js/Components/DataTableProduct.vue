<template>
    <div class="bg-white p-3 m-10 rounded-lg shadow-lg">
        <div class="flex justify-between items-center px-4">
            <div class="flex space-x-1 mb-1">
                <input v-model="searchName" placeholder="Search name..." class="mt-3 rounded-lg h-10"/>
                <select v-model="searchType" class="text-sm text-gray-600 rounded-lg h-10 mt-3">
                    <option value="">ทุกประเภท</option>
                    <option v-for="items in type_product" :key="items.id" :value="items.id">
                        {{ items.type_product_name }}
                    </option>
                </select>
                <div class="flex justify-center items-center pt-3">
                    <label for="rowsPerPage">การแสดงข้อมูล :</label>
                    <select class=" h-9 py-1  rounded-md" v-model="rowsPerPage" @change="updatePage(1)">
                        <option class=" w-full" v-for="option in rowsPerPageOptions" :key="option" :value="option">{{ option }}</option>
                    </select>
                </div>
            </div>
            <div>
                <button @click="idAddProductModalOpen = true" class="flex items-center justify-center w-1/2 px-3 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span >เพิ่มสินค้า</span>
                </button>
            </div>
            
        </div>
      <table class=" w-full ">
        <thead class="text-sm text-center text-gray-800 border-b-2 font-bold sm:text-base md:text-lg">
          <tr class="h-11">
            <td class="w-20">no.</td>
            <td class="w-36">รูป</td>
            <td class="text-left w-36">ชื่อสินค้า</td>
            <td class="text-left w-36">หมายเหตุ</td>
            <td class="w-36">ประเภท</td>
            <td class="w-36">ราคา</td>
            <td class="w-40">จัดการสินค้า</td>
          </tr>
        </thead>
        <tbody class="divide-y text-xs font-sans text-gray-700 border-b-2 sm:text-sm md:text-base md:font-medium">
          <tr class="h-9 mx-auto hover:bg-gray-50 sm:h-20 md:h-20 lg:h-20" v-for="(item, index) in displayedAndFilteredData " :key="index">
            <td class="text-center">{{ index + 1 }}</td>
            <td class="flex justify-center items-center h-20 ">
                <img class="w-16 rounded-lg" src="https://via.placeholder.com/90x90" />
            </td>
            <td class="text-left whitespace-pre-line break-words break-all">{{ item.product_name }}</td>
            <td class="whitespace-pre-line break-words break-all">{{ item.product_detail }}</td>
            <td class="text-center">{{ item.type_product_id }}</td>
            <td class="text-right md:text-center">{{ item.product_price }}</td>
            <td class=" px-4 py-4 text-sm ">
                <div class="text-center space-x-6">
                    <button @click="deleteProduct(item.id)" class="text-gray-600 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-400 hover:text-red-500 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                    </button>

                    <button @click="openEditModal(item.id)" class="text-gray-600 transition-colors duration-200 dark:hover:text-yellow-500 dark:text-gray-400 hover:text-yellow-500 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </button>
                </div>                                                           
            </td>
          </tr>
        </tbody>
      </table>
 
      <div class="flex justify-between items-center mt-6 pagination text-sm text-gray-700 sm:text-base md:text-base">
        <div class="space-x-4">
            <button class="px-3 py-1 bg-gray-50 border border-gray-300 rounded-md hover:bg-gray-200" :disabled="currentPage === 1" @click="updatePage(currentPage - 1)">
                ย้อนกลับ
            </button>
            <span>หน้า {{ currentPage }} ถึง {{ totalPages }}</span>
            <button class="px-3 py-1 bg-gray-50 border border-gray-300 rounded-md hover:bg-gray-200" :disabled="currentPage === totalPages" @click="updatePage(currentPage + 1)">ถัดไป</button>
        </div>
        
      </div>
      <!-- Modal -->
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
                    <!-- Form Edit Product Menu -->
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
      <!-- Modal Add Product -->
      <AddProductModal v-if="idAddProductModalOpen">
        <div class="relative text-gray-800 font-bold border-b-2 border-gray-300">
            <h1>แก้ไขรายการอาหาร</h1>
            <button>
                <img @click="closeAddModal" class="absolute w-3 top-0 right-0" src="../../imgs/X.svg"/>
            </button>
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
      </AddProductModal>

    </div>
  </template>
  
  <script>
  import MenuModal from "@/components/MenuModal.vue";
  import AddProductModal from "@/components/MenuModal.vue";
  
  export default {
    components: {
        MenuModal,
        AddProductModal,
    },
    props: {
      data: Array
    },
    data() {
      return {
        rowsPerPage: 10,
        currentPage: 1,
        isModalOpen: false,
        idAddProductModalOpen:false,
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
      rowsPerPageOptions() {
        return [5, 10, 20, 50]; // เพิ่มตัวเลือกตามต้องการ
      },
      totalPages() {
        return Math.ceil(this.data.length / this.rowsPerPage);
      },
      displayedData() {
        const startIndex = (this.currentPage - 1) * this.rowsPerPage;
        const endIndex = startIndex + this.rowsPerPage;
        return this.data.slice(startIndex, endIndex);
      },
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
    displayedAndFilteredData() {
        const filteredProducts = this.products.filter((product) => {
            const nameMatch = product.product_name
                .toLowerCase()
                .includes(this.searchName.toLowerCase());
            const typeMatch =
                this.searchType == "" ||
                product.type_product_id == this.searchType;
            return nameMatch && typeMatch;
        });

        const startIndex = (this.currentPage - 1) * this.rowsPerPage;
        const endIndex = startIndex + this.rowsPerPage;

        return filteredProducts.slice(startIndex, endIndex);
    },
    },
    methods: {
      updatePage(page) {
        if (page >= 1 && page <= this.totalPages) {
          this.currentPage = page;
        }
      },
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
                    this.idAddProductModalOpen = false;
                    this.fetch_list_product();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
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
        closeAddModal(){
            this.idAddProductModalOpen = false;
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
            console.log(this.selectedProduct.product_image);
            console.log(this.selectedProduct.product_detail);
            console.log(this.selectedProduct.product_price);
            console.log(this.selectedProduct.type_product_id);
            axios
                .post("/edit_product", formData)
                .then((response) => {
                    console.log(response);
                    this.fetch_list_product();
                    this.isModalOpen = false;
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
        this.fetch_type_product();
    },
  };
  </script>
  
<style>
  tr:nth-child(even) {
    background-color: #f8f8f8;
  }
</style>
  