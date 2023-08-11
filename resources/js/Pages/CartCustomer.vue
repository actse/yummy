<template>
      <div class="w-full min-h-screen relative">
        <div class="relative max-w-md mx-auto h-screen bg-white border">
            <!--Header-->
            <div class="relative w-full px-7 py-4 bg-white border-b-2 border-gray-300 shadow-sm">
                <Link href="menu_customer"><img class="absolute left-3 " src="../../imgs/vector.svg"></Link>
                <label for="voice-search" class="sr-only">Search</label>
                <div class="flex justify-center items-center text-2xl font-bold text-gray-700">
                    <h1>ตะกร้า</h1>
                </div>

            </div>

            <!-- List Menu -->
            <div class="bg-white w-full p-4">
                <div v-for="(item, index) in items" :key="index" class="relative flex border-b-2 py-4 border-gray-300 bg-white">
                    <img class="w-[80px] h-[80px] rounded-[10px]" src="https://via.placeholder.com/90x90"/>
                    <div class="px-2">
                        <h2 class="text-lg text-gray-700 font-bold">{{ item.title }}</h2>
                        <p class="text-sm text-gray-400">{{ item.description }}</p>
                        <p class="text-sm text-gray-400">{{ item.comments }}</p>
                        <!-- Edie Comment -->
                        <div class="absolute flex text-sm text-blue-400 bottom-2">
                            <a href="#"><p>แก้ไข</p></a>
                        </div>
                    </div>
                    <!-- Remove Item Cart -->
                        <img class="absolute top-5 right-0" src="../../imgs/trash.svg">
                    <!-- Increase and Decrease Item Cart -->
                    <div class="flex absolute right-0 bottom-2 items-center gap-3">
                        <button @click="decreaseQuantity(index)">
                        <img src="../../imgs/remove_empty.svg" alt="Decrease">
                        </button>
                        <span class="font-bold text-gray-600">{{ item.quantity  }}</span>
                        <button @click="increaseQuantity(index)">
                        <img src="../../imgs/add_empty.svg" alt="Increase">
                        </button>
                    </div>
                </div>
            </div>
            <!-- Footer Cart -->
            <div class="fixed max-w-md mx-auto w-full h-20 py-4 bottom-0 bg-white text-center border-t-2 border-gray-300">
                <button class="bg-orange-400 w-52 h-11 rounded-full shadow-md text-white hover:bg-orange-500" type="submit" name="submit_cart">สั่ง {{ items.length ?? 'ยังไม่ได้สั่ง' }} รายการ</button>
            </div>
        </div>
      </div>

</template>

<script>
export default {
  data() {
    return {
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
          comments:'แพ้กุ้ง',
          statu:'0',
        },
        // ... ข้อมูลอื่น ๆ
      ],
    };
  },
  computed: {
    totalOrder() {
      return this.items.reduce((total, item) => total + item.quantity, 0);
    },
  },
  methods: {
    increaseQuantity(index) {
      this.items[index].quantity++;
    },
    decreaseQuantity(index) {
      if (this.items[index].quantity > 1) {
        this.items[index].quantity--;
      }
    },
  },
};
</script>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<style>

</style>
