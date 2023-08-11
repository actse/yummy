<template>
    <div class="w-full min-h-screen relative">
        <div class="max-w-md mx-auto h-screen bg-white border">
            <!--Header-->
            <div class="flex justify-between gap-0 items-center px-7 py-4 bg-white border-b-2 border-gray-300 shadow-sm">
                <Link href="home_customer"><img class="left-3 " src="../../imgs/vector.svg"></Link>
                <label for="voice-search" class="sr-only">Search</label>
                <div class="relative w-52">
                    <div class="absolute top-3 left-1 flex items-center pl-3 pointer-events-none">
                        <img class="w-4 h-4" src="../../imgs/search.svg">
                    </div>
                    <input type="text" id="search" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-full focus:ring-gray-300 focus:border-gray-300 block w-full pl-10 p-2.5  " placeholder="Search..." required>
                </div>
                <div class="relative bg-orange-100 p-2 rounded-full shadow-lg">
                    <Link href="/cart_customer"><img class="w-7 h-7" src="../../imgs/cart.png"></Link>
                    <div class="flex absolute w-5 h-5 right-0 top-7 rounded-full bg-orange-300 justify-center items-center font-bold text-white shadow-md">
                        <p>1</p>
                    </div>
                </div>
            </div>
            
            <!--Type Menu -->
            <div class="flex justify-center items-center py-2 pl-4 bg-white border-b-2 border-gray-300">
                
                <img src="../../imgs/frame.svg"  @click="isModalOpen = true">
                <div class="pl-5 pt-2.5">
                    <ul class="flex space-x-5 w-96 text-gray-600 snap-x">
                        <li class="snap-center">
                            หมู สไลด์
                        </li>
                        <li>
                            ผัก
                        </li>
                        <li>
                            ของทะเล/ของสด
                        </li>
                        <li>
                            ของหวาน
                        </li>
                    </ul>
                </div>
                
            </div>

            <!-- List Menu -->
            <div class="bg-white p-4">
                <div v-for="(type_menus,index) in type_menu" :key="index">
                    <h1 class="text-2xl bg-white py-2">{{type_menus.type_menu_name}}</h1>
                    <!-- open the modal on click menu-->
                    <div v-for="(product, idx) in type_menus.products" :key="idx" class="flex border-b-2 py-3 border-gray-300 bg-white hover:bg-gray-100" @click="isListMenuModalOpen = true">
                        <img class="w-[80px] h-[80px] rounded-[10px] " src="https://via.placeholder.com/90x90"/>
                        <div class="px-2">
                            <h2 class="text-lg text-gray-700 font-bold">{{ product.name }}</h2>
                            <p class="text-sm text-gray-400">{{ product.comment_item }}</p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Modal here -->
            <div>
                
                <!-- The Modal component -->
                <Modal v-if="isModalOpen">
                <!-- Modal content -->
                <div class="relative text-gray-800 font-bold border-b-2 border-gray-300">
                    <h1>หมวดหมู่ทั้งหมด</h1>
                    <button><img @click="isModalOpen = false" class="absolute w-3 top-0 right-0" src="../../imgs/X.svg"></button>
                </div>
                <!-- List Type Menu -->
                <ul class="w-full">
                    <li v-for="(type_menus, index) in type_menu" :key="index" @click="isModalOpen = true">
                        <input type="radio" :id="'hosting-'+index" name="hosting" :value="'hosting-'+index" class="hidden peer" required>
                        <label :for="'hosting-'+index" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white rounded-lg cursor-pointer peer-checked:border-sky-400 peer-checked:text-sky-500 hover:text-gray-600 hover:bg-gray-100">                           
                            <div class="block">
                                <div class="w-full text-sm font-semibold">{{type_menus.type_menu_name}}</div>
                            </div>
                            <svg class="w-4 h-4 ml-3"  viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path id="Vector" d="M2 9.2L5.44281 14L14.0498 2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </svg>
                        </label>
                    </li>
                </ul>
                </Modal>

                <!-- The Modal component -->
                <!-- <ListMenuModal v-if="isListMenuModalOpen" title="xxxx" ></ListMenuModal> -->

                <ListMenuModal v-if="isListMenuModalOpen">
                <!-- Modal content -->
                <div class="flex justify-between text-gray-800 font-bold border-b-2 border-gray-300">
                    <h1 class="text-lg text-gray-600 font-bold">ชื่อเมนู {{ title }}</h1>
                    <button><img @click="isListMenuModalOpen = false" class=" w-3 top-0 right-0" src="../../imgs/X.svg"></button>
                </div>
                <div class="my-2">
                    <h2 class="text-base font-bold text-gray-600">ข้อความเพิ่มเติม</h2>
                    <p class="text-xs text-gray-400">คุณสามารถใส่ข้อความเพิ่มเติมได้ที่นี่ เช่น แพ้อาหาร ไม่ใส่ผัก</p>
                    <textarea id="menu" name="menu" rows="4"  class="w-full mt-2 border-2 border-gray-300 rounded-lg text-gray-600 text-sm focus:ring-gray-300 focus:border-gray-300"  placeholder="ตัวอย่าง ไม่ใส่กุ้ง"></textarea>
                </div>
                <div class="flex justify-between items-center">
                    <h2 class="text-base font-bold text-gray-600">จำนวนที่ต้องการสั่ง</h2>
                    <!-- Increase and Decrease Item Cart -->
                    <div class="flex right-0 bottom-2 items-center gap-3">
                        <button @click="decreaseQuantity">
                        <img src="../../imgs/remove_empty.svg" alt="Decrease">
                        </button>
                        <span class="font-bold text-gray-600">{{ quantity }}</span>
                        <button @click="increaseQuantity">
                        <img src="../../imgs/add_empty.svg" alt="Increase">
                        </button>
                    </div>
                </div>
                <!-- Add Cart -->
                <div class="flex flex-row-reverse mt-6">
                    <button class="bg-orange-300 text-white w-20 h-8 rounded-lg shadow-md shadow-gray-400" @click="isListMenuModalOpen = false">เพิ่ม</button>
                </div>
                
                </ListMenuModal>
            </div>
            
        </div>
    </div>

    

    
</template>
<script setup>
import { Link } from '@inertiajs/vue3';

</script>

<script>
import Modal from '@/components/MenuModal.vue'
import ListMenuModal from '@/components/MenuModal.vue'


export default {
  components: {
    Modal,
    ListMenuModal,
    
  },
  data() {
    return {
      isModalOpen: false,
      isListMenuModalOpen: false,
      quantity:1,
      type_menu: [
        {
          type_menuId:'1',
          type_menu_name: 'สามชั่นสไลด์ Coller pork',
          products: [
            { id: 1, name: 'สามชั่น', image: 'via.placeholder.com/90x90',comment_item:'สั่งได้ครั้งละ 3 ออร์เดอร์เท่านั้น'},
            { id: 2, name: 'สามชั่น บาง', image: 'via.placeholder.com/90x90',comment_item:'สั่งได้ครั้งละ 3 ออร์เดอร์เท่านั้น'},
            { id: 3, name: 'สันคอสามชั่น', image: 'via.placeholder.com/90x90',comment_item:'สั่งได้ครั้งละ 3 ออร์เดอร์เท่านั้น'},
          ],

        },
        {
          type_menuId:'2',
          type_menu_name: 'ผัก',
          products: [
            { id: 4, name: 'เห็ดเข็มทอง', image: 'via.placeholder.com/90x90',comment_item:''},
            { id: 5, name: 'ชุดผักรวม', image: 'via.placeholder.com/90x90',comment_item:''},
            { id: 6, name: 'ผักกาดขาว', image: 'via.placeholder.com/90x90',comment_item:''},
          ],

        },
        // ... ข้อมูลอื่น ๆ
      ],
      items: [
        {
          itemId:'1',
          title: 'สามชั่นสไลด์ Coller pork',
          description: 'สั่งได้ครั้งละ 3 ออร์เดอร์เท่านั้น',
          imageUrl: 'https://via.placeholder.com/90x90',
          quantity: 1,
          comments:'',
          statu:'0',
        },
        {
          itemId:'2',
          title: 'ผักรวม',
          description: '',
          imageUrl: 'https://via.placeholder.com/90x90',
          quantity: 1,
          comments:'',
          statu:'0',
        },
        {
          itemId:'3',
          title: 'สันคอ',
          description: 'สั่งได้ครั้งละ 3 ออร์เดอร์เท่านั้น',
          imageUrl: 'https://via.placeholder.com/90x90',
          quantity: 1,
          comments:'',
          statu:'0',
        },
        {
          itemId:'4',
          title: 'อกไก่',
          description: 'สั่งได้ครั้งละ 3 ออร์เดอร์เท่านั้น',
          imageUrl: 'https://via.placeholder.com/90x90',
          quantity: 1,
          comments:'',
          statu:'0',
        },
        {
          itemId:'5',
          title: 'เห็ด',
          description: '',
          imageUrl: 'https://via.placeholder.com/90x90',
          quantity: 1,
          comments:'แพ้กุ้ง',
          statu:'0',
        },
        // ... ข้อมูลอื่น ๆ
      ],
    }
  },
  methods: {
    increaseQuantity() {
      this.quantity++;
    },
    decreaseQuantity() {
      if (this.quantity > 1) {
        this.quantity--;
      }
    }
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
    transition: opacity .5s ease;
  }
</style>