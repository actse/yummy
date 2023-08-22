<template>
    <div>
      <!--List Product-->
      <div class="w-11/12 mx-auto p-2 mt-5 rounded-md bg-white">
                <div class="flex justify-between">
                  
                  <input v-model="searchName" placeholder="Search name..." class="rounded-full h-9 w-40"/>
                  <select v-model="searchType" class="h-9 text-gray-600 rounded-lg ">
                    <option value="">ทุกประเภท</option>
                    <option value="อาหาร">อาหาร</option>
                    <option value="เครื่องดื่ม">เครื่องดื่ม</option>
                    <option value="หมู">หมู</option>
                    <option value="เนื้อ">เนื้อ</option>
                    <option value="ผัก">ผัก</option>
                    <option value="เนื้อ">เนื้อ</option>
                    <option value="ทะเล">ทะเล</option>
                    <option value="ของหวาน">ของหวาน</option>
                    <!-- เพิ่มประเภทอื่น ๆ ตามต้องการ -->
                  </select>
                </div>
                <div class="mt-4">
                    <table class="w-full text-center">
                        <thead class="h-10 bg-gray-200 text-sm text-gray-700">
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
                            <tr v-for="(products) in filteredProducts" :key="products.id">
                                <td>{{ products.id}}</td>
                                <td>
                                  <img src="" alt="#">
                                </td>
                                <td>{{ products.product_name}}</td>
                                <td>{{ products.product_detail}}</td>
                                <td>{{ products.type_product_id}}</td>
                                <td>{{ products.product_price}}</td>
                                <td class="space-x-2">
                                    <button @click="openEditModal(products.id)" class="relative w-5 h-5 rounded-md bg-blue-400 border border-blue-500"><img class="absolute w-[14px] top-[2px] left-[2px]" src="../../imgs/edit.svg" alt=""></button>
                                    <button @click="deleteProduct(products.id)" class="relative w-5 h-5 rounded-md bg-red-400 border border-red-500"><img class="absolute w-[14px] top-[2px] left-[2px]" src="../../imgs/remove.svg" alt=""></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <MenuModal v-if="isModalOpen">
                      <div class="relative text-gray-800 font-bold border-b-2 border-gray-300">
                        <h1>แก้ไขรายการอาหาร</h1>
                        <button>
                            <img @click="closeEditModal" class="absolute w-3 top-0 right-0" src="../../imgs/X.svg"/>
                        </button>
                      </div>
                      <!-- Form Insert Product Menu -->
                      <div class="bg-white w-full px-4 pb-5">
                          <form
                              @submit.prevent="updateProduct"
                              @input="form.errors.clear($event.target.name)"
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
                                          v-model="selectedProduct.type_product_id"
                                      >
                                          <option disabled value="กรุณาเลือกหมวดหมู่">
                                              
                                          </option>
                                          <option
                                              v-for="items in products"
                                              :key="items.id"
                                              :value="items.id"
                                          >
                                              {{ items.type_product_id }}
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
  import MenuModal from '@/components/MenuModal.vue';
  export default {
    components: {
        MenuModal,
    },
    data() {
      return {
        isModalOpen: false,
        modalProductId: null,
        selectedProduct: null,
        product_name: "",
        product_image: "../resources/imgs/pig.jpg",
        product_detail: "",
        product_price: "",
        type_product_id: "",
        selectedTypes: [],
        selectedPackage: "",
        product_type_title: "",
        main_package: "",
        selectAll: false,
        type_product_name: "",
        selectedTypeProduct: "",
        products: [
          { id: 1,product_image:"", product_name: "หมูต้ม",product_detail:"", type_product_id: "อาหาร",product_price:30 },
          { id: 2,product_image:"", product_name: "นม",product_detail:"", type_product_id: "เครื่องดื่ม",product_price:29 },
          { id: 3,product_image:"", product_name: "หมูทอด",product_detail:"", type_product_id: "อาหาร",product_price:29 },
          { id: 4,product_image:"", product_name: "โคขุน",product_detail:"", type_product_id: "เนื้อ",product_price:29 },
          { id: 5,product_image:"", product_name: "หมูดำ",product_detail:"", type_product_id: "หมู",product_price:29 },
          { id: 6,product_image:"", product_name: "ผักกาด",product_detail:"", type_product_id: "ผัก",product_price:29 },
          { id: 7,product_image:"", product_name: "ไอติม",product_detail:"", type_product_id: "ของหวาน",product_price:29 },
          { id: 8,product_image:"", product_name: "กุ้ง",product_detail:"", type_product_id: "ทะเล",product_price:29 },
          { id: 9,product_image:"", product_name: "ปลาหมึก",product_detail:"", type_product_id: "ทะเล",product_price:29 },
          { id: 10,product_image:"", product_name: "หมูสามชั้น",product_detail:"", type_product_id: "หมู",product_price:29 },
          { id: 11,product_image:"", product_name: "สันคอ",product_detail:"", type_product_id: "หมู",product_price:29 },
         
        ],
        searchName: "",
        searchType: "",
      };
    },
    computed: {
      filteredProducts() {
        return this.products.filter(product => {
          const nameMatch = product.product_name.toLowerCase().includes(this.searchName.toLowerCase());
          const typeMatch = this.searchType === "" || product.type_product_id === this.searchType;
          return nameMatch && typeMatch;
        });
      },
    },
    methods: {
    deleteProduct(productId) {
      const index = this.products.findIndex(products => products.id === productId);
      if (index !== -1) {
        this.products.splice(index, 1);
      }
    },
    openEditModal(productId) {
      this.isModalOpen = true;
      this.selectedProduct = this.products.find(product => product.id === productId);
      console.log(productId);
    },
    closeEditModal() {
      this.isModalOpen = false;
      this.selectedProduct = null;
    },
  },
  };
  </script>
  