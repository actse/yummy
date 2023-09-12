<template>
    <div class="bg-white p-3 m-10 rounded-lg shadow-lg">
        <div class="flex justify-between items-center px-4">
            <div class="flex space-x-1 mb-1">
                <input v-model="searchName" placeholder="Search name..." class="mt-3 rounded-lg h-10"/>
            </div>
            <div>
                <button @click="idAddStaffModalOpen = true" class="flex items-center justify-center w-1/2 px-3 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span >เพิ่มพนักงาน</span>
                </button>
            </div>
            
        </div>
      <table class=" w-full ">
        <thead class="text-sm text-center text-gray-800 border-b-2 font-bold sm:text-base md:text-lg">
          <tr class="h-11">
            <td class="w-20">no.</td>
            <td class="w-36">ชื่อ</td>
            <td class="text-left w-36">เพศ</td>
            <td class="text-left w-36">วันเกิด</td>
            <td class="w-36">เลขบัตรประชาชน</td>
            <td class="w-36">ตำแหน่ง</td>
            <td class="w-40">เบอร์โทร</td>
            <td class="w-40">ที่อยู่</td>
            <td class="w-40">จัดการพนักงาน</td>
          </tr>
        </thead>
        <tbody class="divide-y text-xs font-sans text-gray-700 border-b-2 sm:text-sm md:text-base md:font-medium">
          <tr class="h-9 mx-auto hover:bg-gray-50 sm:h-20 md:h-20 lg:h-20" v-for="(item, index) in displayedAndFilteredData " :key="index">
            <td class="text-center">{{ index + 1 }}</td>
            <td class="flex justify-center items-center h-20 ">
                <img class="w-16 rounded-lg" src="https://via.placeholder.com/90x90" />
            </td>
            <td class="text-left whitespace-pre-line break-words break-all">{{ item.staff_name }}</td>
            <td class="whitespace-pre-line break-words break-all">{{ item.staff_gender }}</td>
            <td class="text-center">{{ item.id_card }}</td>
            <td class="text-right md:text-center">{{ item.staff_birthday }}</td>
            <td class="text-right md:text-center">{{ item.phone_number }}</td>
            <td class="text-right md:text-center">{{ item.staff_address }}</td>
            <td class=" px-4 py-4 text-sm ">
                <div class="text-center space-x-6">
                    <button @click="delete_staff(item.id)" class="text-gray-600 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-400 hover:text-red-500 focus:outline-none">
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
                        <h1>แก้ไขพนักงาน</h1>
                        <button>
                            <img
                                @click="closeEditModal"
                                class="absolute w-3 top-0 right-0"
                                src="../../imgs/X.svg"
                            />
                        </button>
                    </div>
                    <!-- Form Edit Staff Menu -->
                    <div class="bg-white w-full px-4 pb-5">
                        <form
                            @submit.prevent="edit_staff"
                            enctype="multipart/form-data"
                            class="w-full max-w-lg"
                        >
                            <div class="flex flex-wrap -mx-3 mb-6 mt-5">
                                <div class="w-full px-3 md:mb-0">
                                    <label
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-name"
                                    >
                                        ชื่อพนักงาน
                                    </label>
                                    <input
                                        class="mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                        id="grid-name"
                                        type="text"
                                        v-model="selectedStaff.product_name"
                                    />
                                </div>
                                <div class="w-full px-3 mb-2">
                                    <label
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-detail"
                                    >
                                        เพศ
                                    </label>
                                    <textarea
                                        class="mt-2 block w-full h-24 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-detail"
                                        type="text"
                                        v-model="selectedStaff.product_detail"
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
                                        class="mt-2 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-price"
                                        type="number"
                                        v-model="selectedStaff.product_price"
                                    />
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
                                        class="block mt-2 w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-state"
                                        v-model="
                                            selectedStaff.staff_id
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
      <!-- Modal Edit Staff -->
      <AddStaffModal v-if="idAddStaffModalOpen">
        <div class="relative text-gray-800 font-bold border-b-2 border-gray-300">
            <h1>แก้ไขขูอมูลพนักงาน</h1>
            <button>
                <img @click="closeAddModal" class="absolute w-3 top-0 right-0" src="../../imgs/X.svg"/>
            </button>
        </div>
        <!-- Form Insert Staff Menu -->
        <div class="bg-white w-full px-4 pb-5">
                <form
                    @submit.prevent="add_staff"
                    enctype="multipart/form-data"
                    class="w-full max-w-lg"
                >
                    <div
                        class="text-xl w-52 text-gray-700 font-bold mt-2 border-b-2 border-gray-300"
                    >
                        เพิ่มพนักงาน
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6 mt-5">
                        <div class="w-full px-3 md:mb-0">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-name"
                            >
                                ชื่อพนักงาน
                            </label>
                            <input
                                class="mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-name"
                                type="text"
                                v-model="staff_name"
                            />
                        </div>
                        <div class="w-full px-3 space-x-2">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-price"
                            >
                                เพศ
                            </label>
                            <input
                                class=" bg-gray-200 text-orange-400 border border-gray-200 rounded-full  leading-tight focus:outline-none focus:bg-white focus:border-orange-400"
                                type="radio"
                                name="gender"
                                value="0"
                            />
                            <label for="html">ชาย</label>
                            <input
                                class=" bg-gray-200 text-orange-400 border border-gray-200 rounded-full leading-tight focus:outline-none focus:bg-white focus:border-orange-400"
                                type="radio"
                                name="gender"
                                value="1"
                            />
                            <label for="html">หญิง</label>
                        </div>
                        <div class="w-full px-3 md:mb-0">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-name"
                            >
                                วันเกิด
                            </label>
                            <input
                                class="mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-name"
                                type="text"
                                v-model="staff_birthday"
                            />
                        </div>
                        <div class="w-full px-3 md:mb-0">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-name"
                            >
                                เลขบัตรประชาชน
                            </label>
                            <input
                                class="mt-2 block w-full bg-gray-200 text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-name"
                                type="text"
                                v-model="id_card"
                            />
                        </div>
                        <div class="w-full px-3 mb-2">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-detail"
                            >
                                ที่อยู่
                            </label>
                            <textarea
                                class="mt-2 block w-full h-24 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-detail"
                                type="text"
                                v-model="product_detail"
                            ></textarea>
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
      </AddStaffModal>

    </div>
  </template>
  
  <script>
  import MenuModal from "@/components/MenuModal.vue";
  import AddStaffModal from "@/components/MenuModal.vue";
  
  export default {
    components: {
        MenuModal,
        AddStaffModal,
    },
    props: {
      data: Array
    },
    data() {
      return {
        rowsPerPage: 10,
        currentPage: 1,
        isModalOpen: false,
        idAddStaffModalOpen:false,
        selectedStaff: null,
        staff_name: "",
        staff_gender: "",
        id_card: "",
        staff_birthday: "",
        staff_position: "",
        phone_number: "",
        staff_address: "",
            staffs:[],
            searchName: "",
            searchType: "",
            staff_id: "",
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
    displayedAndFilteredData() {
        const filteredStaffs = this.staffs.filter((staff) => {
            const nameMatch = staff.staff_name
                .toLowerCase()
                .includes(this.searchName.toLowerCase());
            return nameMatch;
        });

        const startIndex = (this.currentPage - 1) * this.rowsPerPage;
        const endIndex = startIndex + this.rowsPerPage;

        return filteredStaffs.slice(startIndex, endIndex);
    },
    },
    methods: {
      updatePage(page) {
        if (page >= 1 && page <= this.totalPages) {
          this.currentPage = page;
        }
      },
      add_staff() {
            const formData = new FormData();

            // this.product_image_file = '../../imgs/' + this.product_image_file;

            formData.append("staff_name", this.staff_name);
            formData.append("staff_gender", this.staff_gender);
            formData.append("id_card", this.id_card);
            formData.append("staff_birthday", this.staff_birthday);
            formData.append("staff_position", this.staff_position);
            formData.append("phone_number", this.phone_number);
            formData.append("staff_address", this.staff_address);

            axios
                .post("/add_staff", formData)
                .then((response) => {
                    console.log(response);
                    this.idAddStaffModalOpen = false;
                    this.fetch_staff();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
      openEditModal(staffId) {
            this.isModalOpen = true;
            this.selectedStaff = this.staffs.find(
                (staffs) => staffs.id === staffId
            );
            this.staffs_id = staffId;
            console.log(staffId);
        },
        closeEditModal() {
            this.isModalOpen = false;
            this.selectedStaff = "";
        },
        closeAddModal(){
            this.idAddStaffModalOpen = false;
        },
        fetch_staff() {
            axios
                .get("/fetch_staff")
                .then((response) => {
                    this.staffs = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        edit_staff() {
            const formData = new FormData();
            formData.append("staff_id", this.staff_id);
            formData.append("staff_name", this.selectedStaff.staff_name);
            formData.append("staff_gender",this.selectedStaff.staff_gender);
            formData.append("id_card",this.selectedStaff.id_card);
            formData.append("staff_birthday",this.selectedStaff.staff_birthday);
            formData.append("staff_position",this.selectedStaff.staff_position);
            formData.append("phone_number",this.selectedStaff.phone_number);
            formData.append("staff_address",this.selectedStaff.staff_address);
            
            console.log(this.selectedStaff.staff_id);
            console.log(this.selectedStaff.staff_name);
            console.log(this.selectedStaff.staff_gender);
            console.log(this.selectedStaff.id_card);
            console.log(this.selectedStaff.staff_birthday);
            console.log(this.selectedStaff.staff_position);
            console.log(this.selectedStaff.phone_number);
            console.log(this.selectedStaff.staff_address);
            axios
                .post("/edit_staff", formData)
                .then((response) => {
                    console.log(response);
                    this.fetch_staff();
                    this.isModalOpen = false;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        delete_staff(staffId) {
            const formData = new FormData();
            formData.append("staff_id", staffId);
            // console.log(productId);
            // return;
            axios
                .post("/delete_staff", formData)
                .then((response) => {
                    console.log(response);
                    this.fetch_staff();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    mounted() {
        this.fetch_staff();
        this.edit_staff();
        this.delete_staff();
    },
  };
  </script>
  
<style>
  tr:nth-child(even) {
    background-color: #f8f8f8;
  }
</style>
  