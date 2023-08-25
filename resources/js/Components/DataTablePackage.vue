<template>
    <div class="bg-white p-3 max-w-xl mx-auto m-10 rounded-lg opacity-[90%]">
        <div class="flex justify-between items-center px-4">
            <div class="space-x-1 mb-1">
                <input v-model="searchName" placeholder="Search name..." class="mt-3 rounded-lg h-10"/>
            </div>
            <div>
                <button @click="idAddPackageModalOpen = true" class="flex items-center justify-center w-1/2 px-3 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span >เพิ่มแพ็คเกจ</span>
                </button>
            </div>

        </div>
      <table class=" w-full ">
        <thead class="text-sm text-center text-gray-800 border-b-2 font-bold sm:text-base md:text-lg">
          <tr class="h-11">
            <td>no.</td>
            <td>แพ็คเกจ</td>
            <td>แพ็คเกจ</td>
            <td>จัดการแพ็คเกจ</td>
          </tr>
        </thead>
        <tbody class="divide-y text-xs font-sans text-gray-700 border-b-2 sm:text-sm md:text-base md:font-medium">
          <tr class="h-9 mx-auto hover:bg-gray-50 sm:h-20 md:h-20 lg:h-20" v-for="(item, index) in displayedAndFilteredData " :key="index">
            <td class="text-center">{{ index + 1 }}</td>
            <td class="text-center whitespace-pre-line break-words break-all">{{ item.package_name }}</td>
            <td class="text-center whitespace-pre-line break-words break-all">{{ item.package_price }}</td>
            <td class=" px-4 py-4 text-sm ">
                <div class="text-center space-x-6">
                    <button @click="deletePackage(item.id)" class="text-gray-600 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-400 hover:text-red-500 focus:outline-none">
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
        <div class="flex justify-center items-center gap-1">
            <label for="rowsPerPage">กำหนดการแสดงข้อมูล :</label>
            <select class=" h-9 py-1  rounded-md" v-model="rowsPerPage" @change="updatePage(1)">
                <option class=" w-full" v-for="option in rowsPerPageOptions" :key="option" :value="option">{{ option }}</option>
            </select>
        </div>
      </div>
      <!--Edit Modal -->
      <MenuModal v-if="isModalOpen">
                    <div
                        class="relative text-gray-800 font-bold border-b-2 border-gray-300"
                    >
                        <h1>แก้ไขแพ็คเกจ</h1>
                        <button>
                            <img
                                @click="closeEditModal"
                                class="absolute w-3 top-0 right-0"
                                src="../../imgs/X.svg"
                            />
                        </button>
                    </div>
            <!-- Form Edit Package Menu -->
            <div class="bg-white w-full px-4 border-t-2 pt-3">
                <form
                    @submit.prevent="updatePackage"
                    enctype="multipart/form-data"
                    class="w-full max-w-lg"
                >
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-2/3 px-3 mb-2 md:mb-0">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name"
                            >
                                กรอกชื่อแพ็คเกจที่ต้องการเพิ่ม
                            </label>
                            <input
                                class="appearance-none mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name"
                                type="text"
                                v-model="selectedPackage.package_name"
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
      </MenuModal>

      <!-- Modal Add Package -->
      <AddPackageModal v-if="idAddPackageModalOpen">
        <div class="relative text-gray-800 font-bold border-b-2 border-gray-300">
            <h1>แก้ไขแพ็คเกจ</h1>
            <button>
                <img @click="closeAddModal" class="absolute w-3 top-0 right-0" src="../../imgs/X.svg"/>
            </button>
        </div>
        <!-- Form Insert Product Menu -->
        <div class="bg-white w-full px-4 border-t-2 pt-3">
                <form
                    @submit.prevent="addPackageMain"
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
      </AddPackageModal>

    </div>
  </template>
  
  <script>
  import MenuModal from "@/components/MenuModal.vue";
  import AddPackageModal from "@/components/MenuModal.vue";
  
  export default {
    components: {
        MenuModal,
        AddPackageModal,
    },
    props: {
      data: Array
    },
    data() {
      return {
        rowsPerPage: 5,
        currentPage: 1,
        isModalOpen: false,
        idAddPackageModalOpen:false,
        selectedPackage: null,
            package_id: "",
            package_name: "",
            package_price: "",
            products: [],
            type_product: [],
            main_package: [],
            searchName: "",
            searchType: "",
      };
    },
    computed: {
      rowsPerPageOptions() {
        return [5,10, 20, 50]; // เพิ่มตัวเลือกตามต้องการ
      },
      totalPages() {
        return Math.ceil(this.data.length / this.rowsPerPage);
      },
    displayedAndFilteredData() {
        const filteredType_product = this.main_package.filter((main_package) => {
            const nameMatch = main_package.package_name
                .toLowerCase()
                .includes(this.searchName.toLowerCase());
            return nameMatch;
        });

        const startIndex = (this.currentPage - 1) * this.rowsPerPage;
        const endIndex = startIndex + this.rowsPerPage;

        return filteredType_product.slice(startIndex, endIndex);
    },
    },
    methods: {
      updatePage(page) {
        if (page >= 1 && page <= this.totalPages) {
          this.currentPage = page;
        }
      },

      openEditModal(package_id) {
            this.isModalOpen = true;
            this.selectedPackage = this.main_package.find(
                (main_package) => main_package.id === package_id
            );
            this.package_id = package_id;
            this.fetch_package_main();
            console.log(package_id);
        },
        closeEditModal() {
            this.isModalOpen = false;
            this.selectedPackage = "";
        },
        closeAddModal(){
            this.idAddPackageModalOpen = false;
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
        updatePackage() {
            const formData = new FormData();
            formData.append("package_id", this.package_id);
            formData.append("package_name", this.selectedPackage.package_name);
            formData.append("product_image",this.selectedPackage.package_price);

            console.log(this.selectedPackage.product_image);
            console.log(this.selectedPackage.product_detail);
            console.log(this.selectedPackage.product_price);

            axios
                .post("/edit_package_main", formData)
                .then((response) => {
                    console.log(response);
                    this.fetch_package_main();
                    this.isModalOpen = false;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        addPackageMain() {
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
                        this.idAddPackageModalOpen = false,
                        this.fetch_package_main();
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    mounted() {
        this.fetch_package_main();
    },
  };
  </script>
  
<style>
  tr:nth-child(even) {
    background-color: #f8f8f8;
  }
</style>
  